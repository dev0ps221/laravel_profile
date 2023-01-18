<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfoController extends Controller
{
   
    private $views = [
        'accueil'=>'home',
        'projets'=>'projets',
        'contactez-moi'=>'contact'
    ];
    function process_route($view){
        $views = $this->views;
        $render = array_key_exists($view,$views) ? $views[$view] : 'notfound';
        
        return view('entry',['render'=>$render]);
    }
}
