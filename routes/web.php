<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('catalogue', function () {
    return view('catalogue');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('login', function () {
    return view('login');
});
Route::get('commande', function () {
    return view('commande');
});
Route::get('details', function () {
    return view('detail-article');
});
Route::get('passer-commande', function () {
    return view('passer-commande');
});

// Admin Routes
Route::get('admin', function () {
    return view('admin.login');
});
Route::get('dashboard', function () {
    return view('admin.dashboard');
});
Route::get('gestion', function () {
    return view('admin.gestion-commande');
});
Route::get('produit', function () {
    return view('admin.produits');
});
Route::get('stocks', function () {
    return view('admin.stocks');
});
