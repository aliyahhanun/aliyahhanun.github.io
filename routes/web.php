<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// TUGAS 2
// PRAKTIKUM 1

// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     echo nl2br("NIM : 1941720175 \n \n Nama : Aliyah Hanun S \n \n Kelas : TI-2A");
// });

// Route::get('/article/{id}', function ($id) {
//     echo "Ini merupakan halaman artikel dengan ID ". $id;
// });

// PRAKTIKUM 2

Route::get('/', [PageController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/article/{id}', [ArticleController::class, 'article']);