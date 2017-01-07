<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
    protected $pageName = 'accessories';

    public function index()
    {
        $accessories = $this->configFile->getAccessories();
        return view('accessories.index')->with($this->vars(['accessories'=>$accessories]));
    }
}
