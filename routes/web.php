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
Route::get('/search', [ApartmentController::class, 'getSearch'])->name('getSearch');
Route::post('/search', [ApartmentController::class, 'postSearch'])->name('postSearch');


Auth::routes();
Route::resource('apartment', ApartmentController::class)->middleware('own');
Route::get('/apartment/{apartment}/message', [ApartmentController::class, 'message'])->name('message.send');
Route::get('/apartment/{apartment}/stat', [ApartmentController::class, 'stat'])->middleware('own')->name('apartment.stat');
Route::get('apartment/{apartment}', [ApartmentController::class, 'show'])->name('apartment.show');
Route::get('apartment/', [ApartmentController::class, 'index'])->name('apartment.index');
Route::get('apartment/create', [ApartmentController::class, 'create'])->name('apartment.create');
Route::get('apartment/store', [ApartmentController::class, 'store'])->name('apartment.store');
