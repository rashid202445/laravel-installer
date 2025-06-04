<?php

namespace Rashid\LaravelInstaller\Controllers;

use Illuminate\Routing\Controller;
use Rashid\LaravelInstaller\Helpers\DatabaseManager;
use Rashid\LaravelInstaller\Helpers\InstalledFileManager;
use Illuminate\Http\Request;
use App\Facades\ModuleFacade as Module;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Rashid\LaravelInstaller\Events\{AfterUpdate, GetMigrationFiles};
use Rashid\LaravelInstaller\Helpers\MigrationFiles;

class UpdateController extends Controller
{
    use \Rashid\LaravelInstaller\Helpers\MigrationsHelper;

    /**
     * Display the updater welcome page.
     *
     * @return \Illuminate\View\View
     */
    public function welcome()
    {
        return view('vendor.installer.update.welcome');
    }

    /**
     * Display the updater overview page.
     *
     * @return \Illuminate\View\View
     */
    public function overview()
    {
        // update custom code


        $migrations = $this->getMigrations();
        $dbMigrations = $this->getExecutedMigrations();
        return view('vendor.installer.update.overview', ['numberOfUpdatesPending' => count($migrations) - count($dbMigrations)]);
    }

    /**
     * Migrate and seed the database.
     *
     * @return \Illuminate\View\View
     */
    public function database(Request $request)
    {
        $databaseManager = new DatabaseManager;
        $updateEnabled = filter_var(config('installer.updaterMigrateAndSeed'), FILTER_VALIDATE_BOOLEAN);
        if ($updateEnabled) {
            $response = $databaseManager->migrateAndSeed();
        } else {
            $response = $databaseManager->migrate();
        }

        if ($response['status'] == 'success') {
            event(new AfterUpdate($request));
        }


        return redirect()->route('LaravelUpdater::final')
            ->with(['message' => $response]);
    }

    /**
     * Update installed file and display finished view.
     *
     * @param InstalledFileManager $fileManager
     * @return \Illuminate\View\View
     */
    public function finish(InstalledFileManager $fileManager)
    {
        $fileManager->update();

        return view('vendor.installer.update.finished');
    }
}
