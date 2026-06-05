<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'message' => 'Welcome to Tsabitah Gaming Profile Backend API!',
        'status' => 'online'
    ]);
});
