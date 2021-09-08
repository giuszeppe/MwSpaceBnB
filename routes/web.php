<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
})->name('home');
Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/detail', function () {
    return view('appartamenti.detail');
})->name('detail');

Route::get('/stats', function () {
    return view('appartamenti.stats.stats');
})->name('stats');

Route::get('/stats/stat', function () {
    return view('appartamenti.stats.stat');
});
Route::get('/create', function () {
    return view('appartamenti.create');
});

Auth::routes();
