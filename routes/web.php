<?php

use App\Http\Controllers\Pin\IndexController;
use App\Http\Controllers\Pin\VerificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('pin.index');
Route::post('/pin/verification', VerificationController::class)->name('pin.verification');
