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
Route::name('dashboard.')->group(function () {
    Route::get('/', [App\Http\Controllers\adminController::class, 'home'])->name('home');
});
Route::name('datamaster.')->group(function () {
    Route::get('/datakos', [App\Http\Controllers\adminController::class, 'dataKos'])->name('datakost');
});
// get('/dataKos', [App\Http\Controllers\adminController::class, 'dataKos']);

