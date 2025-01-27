<?php

use App\Http\Controllers\GreetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

Route::get('/greet', [GreetController::class, 'show']);
