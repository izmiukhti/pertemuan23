<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/Dashboard', function () {
    return view('layouts.home');
});

Route::get('/team', [UserController::class, 'index']);

Route::get('/team/data', [UserController::class, 'getUsers']) ->name('team.data');
    

Route::get('/projects', function () {
    return view('partials.projects');
});

Route::get('/calendar', function () {
    return view('partials.calendar');
});

Route::get('/reports', function () {
    return view('partials.reports');
});
