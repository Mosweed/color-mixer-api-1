<?php

use App\Http\Controllers\ColorMixerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});