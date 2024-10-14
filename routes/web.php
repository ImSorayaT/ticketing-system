<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/ticket/{id}', function ($id) {
    return view('singleTicket', compact("id"));
});
