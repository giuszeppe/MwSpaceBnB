<?php

use App\Http\Controllers\ApartmentController;
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





Route::get('/stats/stat', function () {
    return view('appartamenti.stats.stat');
})->name('stat');


Auth::routes();
Route::resource('apartment', ApartmentController::class);
Route::get('/apartment/{apartment}/stat',[ApartmentController::class,'stat'])->name('apartment.stat');
