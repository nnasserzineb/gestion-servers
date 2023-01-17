<?php

use App\Http\Controllers\DomainController;
use App\Http\Controllers\ServeController;
use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\TeamController;
 use App\Http\Controllers\ProviderController;




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

Route::get('/', function () {
    return view('auth.login');
});
#############Teams##########################################
Route::resource('/team', TeamController::class);

Route::get('/search',[TeamController::class,'search']);
###############################################################


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
#################### providers############
Route::resource('/provider', ProviderController::class);
Route::get('/search/provider',[ProviderController::class,'search'])->name('search.provider');




####################################################
#########################Servers##################

Route::resource('server',ServeController::class);
Route::get('/search/server',[ServeController::class,'search'])->name('search.server');






############################################################
################domains################################

Route::resource('domain',DomainController::class);
Route::get('/search/domaine',[DomainController::class,'search'])->name('search.domaine');



####################################################################
