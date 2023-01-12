<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

function process_route($view){
    $views = [
        'accueil'=>'home',
        'projets'=>'projets',
        'blog'=>'blog',
        'message'=>'message'
    ];
    $render = array_key_exists($view,$views) ? $views[$view] : 'notfound';
    echo $render;
    return view('entry',['render'=>$render]);
}

Route::get('/',function () {
    return process_route('accueil');
});
Route::get('/{view}', function($view){
    return process_route($view);
});