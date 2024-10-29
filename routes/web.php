<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'isLoggedIn')->group(function () {
    Route::get('/', function () {
        return view('homepage');
    })->name('tickets');

    Route::get('/ticket/{id}', function ($id) {
        return view('singleTicket', compact("id"));
    });
});

require __DIR__.'/auth.php';
