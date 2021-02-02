<?php

use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/personal', function () {
    return view('personal.personal');
})->middleware(['auth', 'verified'])->name('personal.personal');

Route::get('/personal/profile', [ProfileController::class, 'showView'])->middleware(['auth', 'verified'])->name('personal.profile');
Route::post('/personal/profile', [ProfileController::class, 'update'])->name('personal.update');

Route::get('/personal/admin', function () {
    return view('personal.admin');
})->middleware(['role:administrator', 'auth', 'verified'])->name('personal.admin');
