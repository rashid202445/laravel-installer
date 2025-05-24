<?php

namespace Rashid\LaravelInstaller\Helpers;
use Rashid\LaravelInstaller\Events\{AfterUpdate,GetMigrationFiles};
// use Rashid\LaravelInstaller\Helpers\MigrationFiles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

trait MigrationsHelper
{
    /**
     * Get the migrations in /database/migrations.
     *
     * @return array Array of migrations name, empty if no migrations are existing
     */
    public function getMigrations()
    {
                    $migrationFiles = collect([]);
            $migration_files= new MigrationFiles;
           $migration_files->add([database_path().DIRECTORY_SEPARATOR.'migrations'.DIRECTORY_SEPARATOR.'*.php']) ;
        event(new GetMigrationFiles( $migration_files));

        foreach ( $migration_files->files as $key => $module) {
            // Get the module directorie in your project
            // $directory = "packages/workdo/" . $module->name . "/src/Database/Migrations";

            $files = collect(File::glob($module))
                ->map(function ($path) {
                    return File::name($path);
                });
            $migrationFiles = $migrationFiles->merge($files);
        }
      //  $migrationFiles=$migrationFiles->toArray();
        // $migrations = glob(database_path().DIRECTORY_SEPARATOR.'migrations'.DIRECTORY_SEPARATOR.'*.php');

        return   $migrationFiles;// str_replace('.php', '', $migrationFiles);
    }

    /**
     * Get the migrations that have already been ran.
     *
     * @return \Illuminate\Support\Collection List of migrations
     */
    public function getExecutedMigrations()
    {
        // migrations table should exist, if not, user will receive an error.
        return DB::table('migrations')->get()->pluck('migration');
    }
}
