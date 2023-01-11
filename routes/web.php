<?php

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
Route::get('/search',[ProviderController::class,'search']);




####################################################
