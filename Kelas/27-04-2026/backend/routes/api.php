<?php

use App\Http\Controllers\GuestbookController;
use Illuminate\Support\Facades\Route;

// Guestbook APIs
Route::get('/guestbook', [GuestbookController::class, 'index']);
Route::post('/guestbook', [GuestbookController::class, 'store']);
Route::options('/guestbook', [GuestbookController::class, 'store']); // Handle OPTIONS request
