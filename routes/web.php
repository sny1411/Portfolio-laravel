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
    return view('index');
})->name("accueil");

Route::get('/cv', function () {
    return view('cv');
})->name("cv");

Route::get('/projets', function () {
    return view('projects');
})->name("projects");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/projets/minecraft', function () {
    return view('projets.minecraft');
})->name("minecraft");

Route::get('/projets/portfolio', function () {
    return view('projets.portfolio');
})->name("portfolio");

Route::get('/projets/marathon', function () {
    return view('projets.marathon');
})->name("marathon");

Route::get('/projets/plusoumoins', function () {
    return view('projets.plusoumoins');
})->name("plusoumoins");
