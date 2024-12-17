<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'isLoggedIn')->group(function () {
    Route::get('/', function () {
        return view('page.homepage');
    })->name('tickets');

    Route::get('/ticket/{id}', function ($id) {
        return view('page.singleTicket', compact("id"));
    });

    Route::get('/assignee/{assigneeid}', function ($assigneeid) {
        return view('page.ticketsByAssignee', compact("assigneeid"));
    });
});

require __DIR__.'/auth.php';
