<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;

Route::get('/catalog', [CatalogController::class, 'catalog'])->name("catalog.catalog");
Route::get('/catalog/{code}', [CatalogController::class, 'category'])->name("catalog.category");
