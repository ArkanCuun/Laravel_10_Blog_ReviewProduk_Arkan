<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function(){
    return view('welcome');
});


Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar laravel</p>';
});

Route::get('/siswa/rpl/arkan', function () {
    echo '<h2 style="text-align:center;"><u>Welcome to Laravel, Arkan</u></h2>';
});

Route::get('/guru', function () {
    return view('guru');
});

Route::get('/siswa', function () {
    return view('siswa');
});

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/home', [PostController::class, 'home']);
Route::get('/search', [PostController::class, 'search']);
Route::get('/home/search', [PostController::class, 'search']);
Route::get('/semua_ulasan',[PostController::class, 'semua_ulasan']);
Route::get('/tentangkami',[PostController::class, 'tentangkami']);
Route::get('/tampil',[PostController::class, 'tampil']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::Post('/register', [AuthController::class, 'registerPost'])->name('registerPost');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::Post('/login', [AuthController::class, 'loginPost'])->name('loginPost');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/posts/index', [PostController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});    