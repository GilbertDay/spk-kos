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
    Route::get('/datakos', [App\Http\Controllers\DatakosController::class, 'index'])->name('datakost');
    Route::post('/addData', [App\Http\Controllers\DatakosController::class, 'tambah'])->name('datakost');
    Route::get('/hapus/datakos/{id}', [App\Http\Controllers\DatakosController::class, 'hapus'])->name('datakost');
    Route::put('/editData/{id}', [App\Http\Controllers\DatakosController::class, 'edit'])->name('datakost');
});
// get('/dataKos', [App\Http\Controllers\adminController::class, 'dataKos']);

