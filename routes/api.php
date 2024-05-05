<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserHistoryController;

Route::get('/user/{login}', [UserHistoryController::class, 'show']);
