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


Auth::routes();

Route::get('/',function () {
    return redirect('/accueil');
});
Route::controller(App\Http\Controllers\DemandeController::class)->group(
    function () {
    
        Route::post('/demande/nouvelle','nouvelle');
    
    }
);
Route::controller(App\Http\Controllers\ArticleController::class)->prefix('blog')->group(
    function () {
        Route::get('/', 'index');
        Route::get('/article/{id}', 'show');
    }
);
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
Route::controller(App\Http\Controllers\PortfoController::class)->group(
    function(){
        
        
        Route::get('/{view}', 'process_route');
    }
);
Route::get('/logout', [App\Http\Controllers\LogoutController::class,'perform']);
