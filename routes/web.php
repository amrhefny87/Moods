<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GrupoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/waiting', [HomeController::class, 'index'])->middleware('auth')->name('waiting');
/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
Route::get('/intro', [HomeController::class, 'intro'])->middleware('auth')->name('intro');
Route::get('/mission', [HomeController::class, 'mission'])->middleware('auth')->name('mission');
Route::get('/map', [HomeController::class, 'map'])->middleware('auth')->name('map');


Route::get('/characters', function () {
    return view('characters');
});


/* Route::get('/map', function () {
    return view('map');
}); */

Route::get('/create', [HomeController::class, "create"])->name('create');
Route::get('/missionImp', [HomeController::class, "missionImp"])->name('missionImp');










