<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController; 
use App\Http\Controllers\PelangganController; 
use App\Http\Controllers\PegawaiController; 
use App\Http\Controllers\PelangganPemesananController;
use App\Http\Controllers\PelangganHidanganController;
use App\Http\Controllers\PelangganPengaturanController;
use App\Http\Controllers\PegawaiPemesananController;
use App\Http\Controllers\PegawaiPelangganController;
use App\Http\Controllers\PegawaiPegawaiController;
use App\Http\Controllers\PegawaiRestoranController;
use App\Http\Controllers\PegawaiHidanganController;
use App\Http\Controllers\PegawaiPengaturanController;

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


/*Route::get('/', 'IndexController@index');*/
Route::get('/', [IndexController::class, 'index']);

Auth::routes();

Route::group(['prefix'=>'pelanggan'], function(){
    Route::get('', [PelangganController::class, 'index']);

	Route::get('/login', [App\Http\Controllers\PelangganController::class, 'showLoginForm'])->name('login');
	Route::post('/login', [App\Http\Controllers\PelangganController::class, 'login'])->name('login');
	Route::get('/logout', [App\Http\Controllers\PelangganController::class, 'logout'])->name('logout');
	Route::get('/register', [App\Http\Controllers\PelangganController::class, 'showRegisterForm'])->name('register');
	Route::post('/register', [App\Http\Controllers\PelangganController::class, 'register'])->name('register');

	Route::resource('pemesanan', PelangganPemesananController::class);
	Route::resource('hidangan', PelangganHidanganController::class);
	Route::resource('pengaturan', PelangganPengaturanController::class);
});

Route::group(['prefix'=>'pegawai'], function(){
	Route::get('', [PegawaiController::class, 'index']);

	Route::get('/login', [App\Http\Controllers\PegawaiController::class, 'showLoginForm'])->name('login');
	Route::post('/login', [App\Http\Controllers\PegawaiController::class, 'login'])->name('login');
	Route::get('/logout', [App\Http\Controllers\PegawaiController::class, 'logout'])->name('logout');
	Route::get('/register', [App\Http\Controllers\PegawaiController::class, 'showRegisterForm'])->name('register');
	Route::post('/register', [App\Http\Controllers\PegawaiController::class, 'register'])->name('register');

	Route::resource('pemesanan', PegawaiPemesananController::class);
	Route::resource('pelanggan', PegawaiPelangganController::class);
	Route::resource('pegawai', PegawaiPegawaiController::class);
	Route::resource('restoran', PegawaiRestoranController::class);
	Route::resource('hidangan', PegawaiHidanganController::class);
	Route::resource('pengaturan', PegawaiPengaturanController::class);

});