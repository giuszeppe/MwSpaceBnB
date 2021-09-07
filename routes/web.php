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
    return view('homepage');
});
Route::get('/search', function () {
    return view('search');
});

Route::get('/detail', function () {
    return view('detail');
});
Route::get('/stats', function () {
    return view('stats.stats');
});

Route::get('/stats/stat', function () {
    return view('stats.stat');
});

Auth::routes();
