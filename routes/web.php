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
})->name('welcome');

Route::get('/waiting', [HomeController::class, 'index'])->middleware('auth')->name('waiting');
 //* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
Route::get('/intro', [HomeController::class, 'intro'])->middleware('auth')->name('intro');
Route::get('/mission1', [HomeController::class, 'mission1'])->middleware('auth')->name('mission1');
Route::get('/mission2', [HomeController::class, 'mission2'])->middleware('auth')->name('mission2');
Route::get('/mission3', [HomeController::class, 'mission3'])->middleware('auth')->name('mission3');
Route::get('/mission4', [HomeController::class, 'mission4'])->middleware('auth')->name('mission4');
Route::get('/mission5', [HomeController::class, 'mission5'])->middleware('auth')->name('mission5');
Route::get('/mission6', [HomeController::class, 'mission6'])->middleware('auth')->name('mission6');



Route::get('/characters', [UserController::class, 'characters'])->name('characters');

Route::get('/map', function () {
    return view('map');
})->name('map');







Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/groups', [App\Http\Controllers\GroupController::class, 'index'])->name('groupsList');
Route::post('/groups', [App\Http\Controllers\GroupController::class, 'store'])->name('groupsCreate');
Route::get('/groups/{id}', [App\Http\Controllers\GroupController::class, 'destroy'])->name('groupDelete');
Route::put('/users/{id}', [App\Http\Controllers\UserController::class, 'updateImpostorStatus'])->name('updateImpostorStatus');
Route::post('/users_link', [App\Http\Controllers\UserController::class, 'updateGroupId'])->name('updateGroupId');
Route::get('/users_unlink/{id}', [App\Http\Controllers\UserController::class, 'removeGroupId'])->name('removeGroupId');

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('usersList');

Route::get('/impostor', [App\Http\Controllers\UserController::class, 'chooseTheImpostor'])->name('chooseTheImpostor');
Route::get('/startGame', [UserController::class, 'startGame'])->name('startGame');
Route::get('/getCharacter', [UserController::class, 'getCharacter'])->name('getCharacter');
Route::get('/redirectUsers', [UserController::class, 'redirectUsers'])->name('redirectUsers');
Route::get('/endGame', [UserController::class, 'endGame'])->name('endGame');


Route::get('/admin', [AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');
Route::get('/imp',[UserController::class,'impostor'])->name('impostor');


Route::get('/chat', function() {
    event(new \App\Events\PublicMessage());
    return view('intro');
})->name('directUsers');

Route::get('/private-chat', function() {
    event(new \App\Events\PrivateMessage(auth()->user()));
    dd('Canal privado.');
});

