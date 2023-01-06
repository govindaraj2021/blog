<?php

use Illuminate\Support\Facades\Route;


Route::get('post/create', [App\Http\Controllers\PostController::class, 'create']);
Route::post('post', [App\Http\Controllers\PostController::class, 'store']);
Route::get('post/{post}/edit', [App\Http\Controllers\PostController::class, 'edit']);
Route::get('post/{post}', [App\Http\Controllers\PostController::class, 'show']);
Route::put('post/{post}', [App\Http\Controllers\PostController::class, 'update']);
Route::delete('post/{post}', [App\Http\Controllers\PostController::class, 'destroy']);


