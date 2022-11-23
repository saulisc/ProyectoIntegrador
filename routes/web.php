<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::view('/','home');
Route::view('home','home') -> name('home');
Route::view('login','login') -> name('login');
Route::view('restartpassword','restartpassword') -> name('restartpassword');
Route::view('registeruser','registeruser') -> name('registeruser');
Route::view('cart','cart') -> name('cart');
Route::view('inventario','inventario') -> name('inventario');
Route::view('store','store') -> name('store');
