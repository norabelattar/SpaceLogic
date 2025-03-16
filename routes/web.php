<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriberController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');
