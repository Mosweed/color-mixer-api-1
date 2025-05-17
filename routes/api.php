<?php

use App\Http\Controllers\ColorMixerController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MixColorsController;

Route::get('/mix-colors', [MixColorsController::class, 'mix']);

Route::post('/mix-colors', [ColorMixerController::class, 'mix']);
