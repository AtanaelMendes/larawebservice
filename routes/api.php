<?php
use App\Http\Controllers\UserController;

Route::get('user', [UserController::class, 'index']);
Route::get('user/{id}/edit', [UserController::class, 'edit']);
Route::get('user/{id}/update', [UserController::class, 'update']);
Route::get('user/{id}/delete', [UserController::class, 'destroy']);
Route::get('user/{id}', [UserController::class, 'show']);