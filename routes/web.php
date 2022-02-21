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
    echo('Selamat Datang');
});

Route::get('/about', function () {
    echo('2041720235 Andi Mushawwir Rahmat TI2B');
});

Route::get('/articles/{id}', function ($id = 1) {
    echo('Ini merupakan halaman artikel dengan id 1');
});

Route::get('/articles/{id}', function ($id = 2) {
    echo('Ini merupakan halaman artikel dengan id 2');
});