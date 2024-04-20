<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistFormController;

Route::get('/', [TodolistFormController::class, 'index']);
Route::get('/create-page', [TodolistFormController::class, 'createPage']);
Route::post('/create', [TodolistFormController::class, 'create']);
