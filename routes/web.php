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
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('user', 'UserController');
Route::get('user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('input', [App\Http\Controllers\UserController::class, 'create'])->name('user.input');
Route::post('store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('edituser/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edituser/{id}');
Route::post('user.update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
Route::get('user/destroy/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy/{id}');

Route::resource('akun', 'AkunController');
Route::get('akun', [App\Http\Controllers\AkunController::class,'index'])->name('akun');
Route::get('inputakun', [App\Http\Controllers\AkunController::class, 'create'])->name('akun.inputakun');
Route::post('akun.store', [App\Http\Controllers\AkunController::class, 'store'])->name('akun.store');
Route::get('editakun/{id}', [App\Http\Controllers\AkunController::class, 'edit'])->name('akun.editakun/{id}');
Route::post('akun.update', [App\Http\Controllers\AkunController::class, 'update'])->name('akun.update');
Route::get('akun/destroy/{id}', [App\Http\Controllers\AkunController::class, 'destroy'])->name('akun.destroy/{id}');

Route::resource('kaskeluar', 'KasKeluarController');
Route::get('kaskeluar', [App\Http\Controllers\KasKeluarController::class, 'index'])->name('kaskeluar');
Route::get('inputkk', [App\Http\Controllers\KasKeluarController::class, 'create'])->name('kaskeluar.inputkk');
Route::post('kaskeluar.store', [App\Http\Controllers\KasKeluarController::class, 'store'])->name('kaskeluar.store');
Route::get('detailkk/show/{id}', [App\Http\Controllers\KasKeluarController::class, 'show'])->name('detailkk.show/{id}');
Route::get('kaskeluar/destroy/{id}', [App\Http\Controllers\KasKeluarController::class, 'destroy'])->name('kaskeluar.destroy/{id}');

Route::resource('kasmasuk', 'KasMasukController');
Route::get('kasmasuk', [App\Http\Controllers\KasMasukController::class, 'index'])->name('kasmasuk');
Route::get('inputkm', [App\Http\Controllers\KasMasukController::class, 'create'])->name('kasmasuk.inputkm');
Route::post('kasmasuk.store', [App\Http\Controllers\KasMasukController::class, 'store'])->name('kasmasuk.store');
Route::get('detailkm/show/{id}', [App\Http\Controllers\KasMasukController::class, 'show'])->name('detailkm.show/{id}');
Route::get('kasmasuk/destroy/{id}', [App\Http\Controllers\KasMasukController::class, 'destroy'])->name('kasmasuk.destroy/{id}');

Route::resource( '/bukubesar' , 'BukubesarController' );
Route::get('bukubesar', [App\Http\Controllers\BukuBesarController::class, 'index'])->name('bukubesar');

Route::resource( '/laporan' , 'LaporanController' );
Route::get('laporan', [App\Http\Controllers\LaporanController::class, 'index'])->name('laporan');
Route::get('laporan.bukubesar', [App\Http\Controllers\LaporanController::class, 'show'])->name('laporan.bukubesar');
Route::get('laporan.bukubesar_pdf', [App\Http\Controllers\LaporanController::class, 'show'])->name('laporan.bukubesar_pdf');
Route::get('laporan.kasmasuk_pdf', [App\Http\Controllers\LaporanController::class, 'show'])->name('laporan.kasmasuk_pdf');
Route::get('laporan.kaskeluar_pdf', [App\Http\Controllers\LaporanController::class, 'show'])->name('laporan.kaskeluar_pdf');