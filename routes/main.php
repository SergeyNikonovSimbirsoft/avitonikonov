<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name("main");

Route::get('/logout', function() {
    return view('main');
});
