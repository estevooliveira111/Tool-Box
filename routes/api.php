<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

Route::apiResource('links', Api\ControllerLink::class);
Route::get('contact/{contact}', [Api\ContactController::class, 'index']);