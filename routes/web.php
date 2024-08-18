<?php

use Illuminate\Support\Facades\Route;

Route::get('/Dashboard', function () {
    return view('layouts.home');
});

Route::get('/Team', function () {
    return view('partials.home');
});

Route::get('/Projects', function () {
    return view('partials.home');
});

Route::get('/Calendar', function () {
    return view('partials.home');
});

Route::get('/Reports', function () {
    return view('partials.home');
});
