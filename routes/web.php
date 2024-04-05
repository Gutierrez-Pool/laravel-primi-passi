<?php

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

    $info = "Guarda questi link:";

    return view('home', compact("info"));
})->name('home');

Route::get('/secondaPagina', function () {
    return view('secondaPagina');
})->name('seconda');

Route::get('/terzaPagina', function () {
    return view('terzaPagina');
})->name('terza');

Route::get('/quartaPagina', function () {
    return view('quartaPagina');
})->name('quarta');