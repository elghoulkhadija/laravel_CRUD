<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitControler;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('produits', ProduitControler::class);
