<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\YearController;
use App\Http\Controllers\AlbumTrackController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/artists/{name?}', [ArtistController::class, 'index']);

Route::get('/years/{year?}', [YearController::class, 'index']);

Route::get('/tracks/{artist_id}/{year_id}', [TrackController::class, 'index']);
Route::get('/tracks/{title}', [TrackController::class, 'search']);
Route::get('/track/list/{id?}', [TrackController::class, 'all']);

Route::get('/albums/artist/{artist_id}', [AlbumController::class, 'artist']);
Route::get('/albums/year/{year_id}', [AlbumController::class, 'year']);

Route::get('/albums/album_tracks/{album_id}', [AlbumTrackController::class, 'album_tracks']);
