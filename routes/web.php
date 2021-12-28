<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::get('/cartao', function () {
    return view('cartao');
});

Route::get('/app', function () {
    return view('app');
})->name('app');