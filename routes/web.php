<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogProdukController;

Route::resource('produks', KatalogProdukController::class);