<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\TeamController;
//  use Illuminate\Http\Request;
// use App\Models\Team;

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
    return view('welcome');
});
Route::resource('/team', TeamController::class);
// route::get('/search',[TeamController::class,'search']);
Route::get('/search',[TeamController::class,'search']);

