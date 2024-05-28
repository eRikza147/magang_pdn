<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Mapel\MapelController;

Route::get('/', [AuthController::class,'index'])->name('/');
Route::get('register', [AuthController::class,'daftar'])->name('register');
Route::post('register.post', [AuthController::class, 'register'])->name('register.post');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('home', [HomeController::class,'home'])->name('home');
Route::get('tambah', [HomeController::class, 'tambah'])->name('tambah');
Route::post('save', [HomeController::class, 'save'])->name('save');
Route::get('edit.data/{id}',[HomeController::class,'edit'])->name('edit');
Route::post('update.data/{id}',[HomeController::class, 'update'])->name('update');
Route::get('hapus.data/{id}',[HomeController::class,'hapus'])->name('hapus');

Route::get('mapel',[MapelController::class,'mapel'])->name('mapel');
Route::get('tambahmapel',[MapelController::class,'tambah'])->name('tambahmapel');
Route::post('savemapel',[MapelController::class,'save'])->name('savemapel');
Route::get('editmapel.data/{id}',[MapelController::class,'edit'])->name('editmapel');
route::post('updatemapel.data/{id}',[MapelController::class,'update'])->name('updatemapel');