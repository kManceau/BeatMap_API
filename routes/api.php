<?php

use App\Http\Controllers\API\ArtistController;
use App\Http\Controllers\API\EventController;
use App\Http\Controllers\API\PlaceController;
use App\Http\Controllers\API\StyleController;
use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;

// GET ALL Routes
Route::get('/artists', [ArtistController::class, 'index'])->name('artists.all');
Route::get('/events', [EventController::class, 'index'])->name('events.all');
Route::get('/places', [PlaceController::class, 'index'])->name('places.all');
Route::get('/styles', [StyleController::class, 'index'])->name('styles.all');
Route::get('/users', [UserController::class, 'index'])->name('users.all');
