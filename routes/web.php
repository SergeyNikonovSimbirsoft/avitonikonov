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
})->middleware(['role:administrator']);

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/settings', function () {
    return view('settings', [
        'user' => request()->user(),
    ]);
})->middleware(['auth', 'verified'])->name('settings');

Route::get('/logout', function () {
    return view('welcome');
});

Route::post('/settings', function (Request $request) {
    $request->validate([
        'email' => ['required', 'email', Rule::unique('users', 'email')],
    ]);

    $user = $request->user();
    $user->update([
        'email' => $request->input('email')
    ]);

    return redirect()->back();
});

require __DIR__ . '/auth.php';
