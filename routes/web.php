<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\carnivorosController;
use App\Http\Controllers\herbívorosController;

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
    return view('index');
})->name('inicio');


Route::get('/Galeria', function () {
    return view('gallery');
})->name('gale');

Route::get('/Contacto', function () {
    return view('contact');
})->name('contacto');

Route::get('/Sobre-Animales', [carnivorosController::class,'carnivoros'])->name('about');
