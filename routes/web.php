<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\UserController;

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
 //* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
Route::get('/intro', [HomeController::class, 'intro'])->middleware('auth')->name('intro');
Route::get('/mission', [HomeController::class, 'mission'])->middleware('auth')->name('mission');


Route::get('/characters', function () {
    return view('characters');
});
/* Route::get('/map', function () {
    return view('map');
}); */


/* Route::get('/map', [HomeController::class, "create"])->name('map');
 */


Route::get('/groups', [App\Http\Controllers\GroupController::class, 'index'])->name('groupsList');
Route::post('/groups', [App\Http\Controllers\GroupController::class, 'store'])->name('groupsCreate');
Route::delete('/groups/{id}', [App\Http\Controllers\GroupController::class, 'destroy'])->name('groupDelete');
Route::put('/users/{id}', [App\Http\Controllers\UserController::class, 'updateImpostorStatus'])->name('updateImpostorStatus');
Route::post('/users_link', [App\Http\Controllers\UserController::class, 'updateGroupId'])->name('updateGroupId');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('usersList');



Route::get('/admin', [AdminController::class, 'index'] )->middleware('auth.admin')->name('admin.index');
