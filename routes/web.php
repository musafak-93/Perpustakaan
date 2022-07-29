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
    return view('welcome');
});
Route::get('/team', function () {
    return view('team');
});

Auth::routes();

Route::get('/buku', [App\Http\Controllers\BukuController::class, 'index'])->name('buku');
Route::get('/', [App\Http\Controllers\BukuController::class, 'indexx'])->name('buku');
Route::post('/buku/create', [App\Http\Controllers\BukuController::class, 'create'])->name('buku');
Route::get('/buku/{id}/edit', [App\Http\Controllers\BukuController::class, 'edit'])->name('buku');
Route::post('/buku/{id}/update', [App\Http\Controllers\BukuController::class, 'update'])->name('buku');
Route::get('/buku/delete/{id}', [App\Http\Controllers\BukuController::class, 'delete'])->name('buku');
