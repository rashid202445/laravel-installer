<?php

namespace Rashid\LaravelInstaller\Helpers;

class MigrationFiles
{
    public $files = [];
    // public $user;
    // public $modules;
    // private $workspace_modules;
    public function __construct()
    {
       
    }

    public function add(array $array): void {
      // if(in_array($array['module'],$this->modules)   && ((empty($array['permission'])) ||  $this->user->isAbleTo($array['permission']))){
            $this->files[] = $array;
        // }
    }
}
