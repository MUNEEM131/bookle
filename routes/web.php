<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/soluctions', function () {
    return view('soluctions');
});

