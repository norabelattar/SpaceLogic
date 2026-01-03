<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriberController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');

Route::get('/lang/{locale}', function (string $locale) {
    if (!in_array($locale, ['en', 'fr'], true)) {
        abort(404);
    }

    session(['locale' => $locale]);

    return redirect()->back();
})->name('lang.switch');
