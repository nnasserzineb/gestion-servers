<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\TeamController;
 use App\Http\Controllers\ProviderController;
//  use Illuminate\Http\Request;

 use App\Models\Provider;

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
#############Teams##########################################
Route::resource('/team', TeamController::class);
// route::get('/search',[TeamController::class,'search']);
Route::get('/search',[TeamController::class,'search']);
###############################################################


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
#################### providers############
Route::resource('/provider', ProviderController::class);
Route::get('/search',[ProviderController::class,'search']);


// use App\Team;
// Route::get('/find/{id}/team',function($id){
//     $pro = Team::find($id)->provider;
//     return  $pro;
// });

####################################################

  Route::get('find/{id}/provider' ,function($id){

    $provider= Provider::with('teams')->get();

      return $provider;

//     $provider->teams()->attach([17]);
    return($provider);

 });
