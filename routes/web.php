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
        'contactez-moi'=>'contact'
    ];
    $render = array_key_exists($view,$views) ? $views[$view] : 'notfound';
    
    return view('entry',['render'=>$render]);
}

Auth::routes();

Route::controller(App\Http\Controllers\ArticleController::class)->prefix('/blog')->group(function () {

    Route::get('/', 'index');
    Route::get('/article/{id}', 'show');


});

Route::controller(App\Http\Controllers\BlogadminController::class)->prefix('blogadmin')->middleware('auth')->group(
    function(){
        Route::get('/','showboard');
        Route::get('/{ldview}','showview');

        Route::post('/nouveau', 'nouveau');
        Route::get('/modifier/{id}', 'modifier_article');
        Route::patch('/modifier/{id}', 'modifier');
        Route::delete('/supprimer/{id}', 'supprimer');
    
    }
);

Route::get('/logout', [App\Http\Controllers\LogoutController::class,'perform']);

Route::get('/',function () {
    return process_route('accueil');
});

Route::get('/{view}', function($view){
    return process_route($view);
});