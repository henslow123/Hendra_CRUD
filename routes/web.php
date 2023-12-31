<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('kategori-create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('kategori-store', [KategoriController::class, 'store'])->name('kategori.store');

Route::get('edit/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::post('update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::get('show/{id}', [KategoriController::class, 'show'])->name('kategori.show');
Route::delete('delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.delete');


