<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil.index');
})->name('accueil');
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');
Route::get('/apropos', function () {
    return view('apropos.index');
})->name('apropos');
Route::get('/equipe', function () {
    return view('equipe.index');
})->name('equipe');
Route::get('/service', function () {
    return view('service.index');
})->name('service');
