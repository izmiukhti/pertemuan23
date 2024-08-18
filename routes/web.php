<?php

use Illuminate\Support\Facades\Route;

Route::get('/Dashboard', function () {
    return view('layouts.home');
});

Route::get('/team', function () {
    return view('partials.team');
});

Route::get('/projects', function () {
    return view('partials.projects');
});

Route::get('/calendar', function () {
    return view('partials.calendar');
});

Route::get('/reports', function () {
    return view('partials.reports');
});
