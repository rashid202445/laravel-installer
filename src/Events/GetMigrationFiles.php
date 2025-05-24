<?php

namespace Rashid\LaravelInstaller\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;
use Rashid\LaravelInstaller\Helpers\MigrationFiles;

class GetMigrationFiles
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $migration_files;

    /**
     * Create a new event instance.
     *
     * @param MigrationFiles $request
     * @return void
     */
    public function __construct(MigrationFiles $migration_files)
    {
        $this->migration_files = $migration_files;
    }

    public function getMigrationFiles()
    {
        return $this->migration_files;
    }
}
