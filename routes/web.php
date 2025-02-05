<?php

use App\Http\Controllers\LoggingController;
use Illuminate\Support\Facades\Route;

Route::get('log/', [LoggingController::class, 'log']);
