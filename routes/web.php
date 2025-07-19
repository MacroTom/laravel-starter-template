<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Webhook routes
Route::prefix('webhooks')->group(function () {
    Route::webhooks('paystack', 'paystack');
});