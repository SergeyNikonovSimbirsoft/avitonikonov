<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profile\ProfileController;

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

Route::get('/profile', [ProfileController::class, 'showView'])->middleware(['auth', 'verified'])->name('profile');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/admin', function () {
    return view('admin');
})->middleware(['role:administrator', 'auth', 'verified'])->name('admin');

require __DIR__ . '/auth.php';
