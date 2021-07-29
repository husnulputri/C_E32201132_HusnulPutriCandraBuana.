<?php

//use illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\backend\DashboardController;

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



Route::get('/hai', function () {
    return view('hello');
});

Route::get('/hello', function(){
    return('Hello World!');
});

Route::get('/belajar',function() {
    echo'<h1>Hello World</h1>';
    echo'<p>Sedang Belajar Laravel (husnul putri candra buana)</p>';
});

Route::get('page/{nomor}', function($nomor){
    return "ini halaman ke- ". $nomor;
});



Route::get('/user', [ManagementUserController::class, 'index']);

Route::resource('user',ManagementUserController::class);

Route::get("/home", function(){
    return view("home");
});

