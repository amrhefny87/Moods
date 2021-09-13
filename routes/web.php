<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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

Route::get('/characters', function () {
    return view('characters');

});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/groups', [App\Http\Controllers\GroupController::class, 'index'])->name('groupsList');
Route::post('/groups', [App\Http\Controllers\GroupController::class, 'store'])->name('groupsCreate');
Route::delete('/groups/{id}', [App\Http\Controllers\GroupController::class, 'destroy'])->name('groupDelete');
Route::put('/users/{id}', [App\Http\Controllers\UserController::class, 'updateImpostorStatus'])->name('updateImpostorStatus');
Route::get('/users_link/{id}', [App\Http\Controllers\UserController::class, 'updateGroupId'])->name('updateGroupId');
Route::get('/users_unlink', [App\Http\Controllers\UserController::class, 'removeGroupId'])->name('removeGroupId');

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('usersList');
