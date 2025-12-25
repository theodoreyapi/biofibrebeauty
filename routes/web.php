<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\CommandeController;
use Illuminate\Support\Facades\Route;

Route::get('contact', function () {
    return view('contact');
});
Route::get('login', function () {
    return view('login');
});
Route::get('passer-commande', function () {
    return view('passer-commande');
});

Route::resource('catalogue', CatalogueController::class);
Route::resource('commande', CommandeController::class);
Route::resource('/', AccueilController::class);
