<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketsController;


Route::get('/tickets', [TicketsController::class, 'showList']);
