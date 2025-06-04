<?php

namespace Rashid\LaravelInstaller\Controllers;

use Illuminate\Routing\Controller;
use Rashid\LaravelInstaller\Helpers\DatabaseManager;
use App\Facades\ModuleFacade as Module;
use App\Models\AddOn;

class DatabaseController extends Controller
{
    /**
     * @var DatabaseManager
     */
    private $databaseManager;

    /**
     * @param DatabaseManager $databaseManager
     */
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    /**
     * Migrate and seed the database.
     *
     * @return \Illuminate\View\View
     */
    public function database()
    {
        $response = $this->databaseManager->migrateAndSeed();
      
            return redirect()->route('LaravelInstaller::final')
                ->with(['message' => $response]);
        
    }
}
