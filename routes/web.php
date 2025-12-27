<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PanierController;
use Illuminate\Support\Facades\Route;

Route::get('index', [CustomAuthController::class, 'dashboard']);
Route::post('custom-login', [CustomAuthController::class, 'customLogin']);
Route::get('logout', [CustomAuthController::class, 'signOut'])->name('logout');

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
Route::get('/checkout', [CommandeController::class, 'checkout'])->name('checkout');
Route::post('/commande/store', [CommandeController::class, 'store'])->name('commande.store');
Route::resource('commande', CommandeController::class);
Route::resource('/', AccueilController::class);

// Panier
Route::post('/panier/ajouter', [PanierController::class, 'ajouter'])->name('panier.ajouter');
Route::get('/panier', [PanierController::class, 'index'])->name('panier.index');
Route::post('/panier/update', [PanierController::class, 'update'])->name('panier.update');
Route::delete('/panier/supprimer/{id}', [PanierController::class, 'supprimer'])->name('panier.supprimer');
