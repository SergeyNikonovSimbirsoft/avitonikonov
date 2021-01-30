<?php

use Illuminate\Support\Facades\Route,
    Illuminate\Http\Request,
    Illuminate\Validation\Rule;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('admin');
})->middleware(['role:administrator', 'auth']);

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin');
})->middleware(['role:administrator', 'auth', 'verified'])->name('admin');

require __DIR__ . '/auth.php';
