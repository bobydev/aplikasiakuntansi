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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/user', 'UserController');
Route::get('user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('input', [App\Http\Controllers\UserController::class, 'create'])->name('user.input');
Route::post('store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('edituser/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edituser/{id}');
Route::post('update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
Route::get('destroy/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy/{id}');

Route::resource('/akun', 'AkunController');