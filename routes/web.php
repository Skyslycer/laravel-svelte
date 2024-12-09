<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home/Index', [
        'name' => 'John Doe',
        'age' => 30,
    ]);
});
