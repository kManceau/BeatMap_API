<?php

use App\Http\Controllers\API\ArtistController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\EventController;
use App\Http\Controllers\API\PlaceController;
use App\Http\Controllers\API\StyleController;
use App\Http\Controllers\API\UserController;
use App\Http\Middleware\CustomAuthMiddleware;
use Illuminate\Support\Facades\Route;

// GET ALL Routes
Route::get('/artists', [ArtistController::class, 'index'])->name('artists.all');
Route::get('/events', [EventController::class, 'index'])->name('events.all');
Route::get('/places', [PlaceController::class, 'index'])->name('places.all');
Route::get('/styles', [StyleController::class, 'index'])->name('styles.all');
Route::get('/users', [UserController::class, 'index'])->name('users.all');

// GET ONE Routes
Route::get('/artist/{artist}', [ArtistController::class, 'show'])->name('artists.one');
Route::get('/event/{event}', [EventController::class, 'show'])->name('events.one');
Route::get('/place/{place}', [PlaceController::class, 'show'])->name('places.one');
Route::get('/style/{style}', [StyleController::class, 'show'])->name('styles.one');
Route::get('/user/{user}', [UserController::class, 'show'])->name('users.one');

// CREATE Routes
Route::post('/artists', [ArtistController::class, 'store'])->name('artists.create');
Route::post('/events', [EventController::class, 'store'])->name('events.create');
Route::post('/places', [PlaceController::class, 'store'])->name('places.create');
Route::post('/styles', [StyleController::class, 'store'])->name('styles.create');

// UPDATE Routes
Route::post('/artist/{artist}', [ArtistController::class, 'update'])->name('artists.update');
Route::post('/event/{event}', [EventController::class, 'update'])->name('events.update');
Route::post('/place/{place}', [PlaceController::class, 'update'])->name('places.update');
Route::post('/style/{style}', [StyleController::class, 'update'])->name('styles.update');
Route::post('/user/{user}', [UserController::class, 'update'])->name('user.update');

// DELETE Routes
Route::delete('/event/{event}', [EventController::class, 'destroy'])->name('events.delete');
Route::delete('/place/{place}', [PlaceController::class, 'destroy'])->name('places.delete');
Route::delete('/style/{style}', [StyleController::class, 'destroy'])->name('styles.delete');
Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('users.delete');

// AUTH Routes
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::middleware([CustomAuthMiddleware::class])->group(function () {
    Route::get('/currentuser', [AuthController::class, 'currentUser'])->name('currentUser');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::delete('/artist/{artist}', [ArtistController::class, 'destroy'])->name('artists.delete');
    Route::delete('/event/{event}', [EventController::class, 'destroy'])->name('events.delete');
});


Route::get('/artists/popular', [ArtistController::class, 'getPopularArtists'])->name('artists.popular');
Route::get('/artists/paginated', [ArtistController::class, 'getPaginatedArtists'])->name('artists.paginate');
Route::get('/events/paginated', [EventController::class, 'getPaginatedEvents'])->name('events.paginate');
Route::get('/artist/events/{artist}', [ArtistController::class, 'getArtistEventsPlaces'])->name('artists.events.place');
Route::get('/event/artists/{event}', [EventController::class, 'getEventArtistStyle'])->name('event.artists.style');
