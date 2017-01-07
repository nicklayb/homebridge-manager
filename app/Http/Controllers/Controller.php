<?php

namespace App\Http\Controllers;

use App\ConfigFile;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $pageName = '';
    protected $configFile;

    public function __construct()
    {
        $this->configFile = ConfigFile::getInstance();
    }

    public function vars($variables = [])
    {
        $variables = array_merge($variables, $this->getBaseVariables());
        return $variables;
    }

    public function getBaseVariables()
    {
        return [
            'pageName'=>$this->pageName,
            'nav'=>$this->getNav()
        ];
    }

    public function getNav()
    {
        return [
            'accessories'=>'Accessories',
            'settings'=>'Settings'
        ];
    }
}
