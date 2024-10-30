<?php

use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return redirect(route("show"));
});

Route::get('/weather/{city}',[WeatherController::class, 'show'])
    ->name('show');
