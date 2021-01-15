<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resources([
    'genres' => GenreController::class,
]);
//Routes EDD-00001 Movie CRUD 
Route::post('/movie', 'MovieController@store');
Route::get('/movies', 'MovieController@index');
Route::get('/movie/{id}', 'MovieController@show');
Route::put('/movie/{id}', 'MovieController@update');
Route::delete('/movie/{id}', 'MovieController@destroy');

//Routes EDD-00002 Actor CRUD
Route::post('/actor', 'ActorController@store');
Route::get('/actors', 'ActorController@index');
Route::get('/actor/{id}', 'ActorController@show');
Route::put('/actor/{id}', 'ActorController@update');
Route::delete('/actor/{id}', 'ActorController@destroy');

//Routes for Starring In Movies CRUD
Route::post('/starringinmovie', 'StarringInMovieController@store');
Route::get('/starringinmovies', 'StarringInMovieController@index');
Route::get('/starringinmovie/{id_movie}', 'StarringInMovieController@show');
Route::put('/starringinmovie/{id_movie}', 'StarringInMovieController@update');
Route::delete('/starringinmovie/{id_movie}', 'StarringInMovieController@destroy');

//Routes EDD-00003
Route::get('/actor/appearences/{id}', 'ActorController@appearences');

//Routes EDD-00005
Route::get('/actor/favoritegenre/{id}', 'ActorController@favorite');
Route::get('/actor/moviesingenres/{id}', 'ActorController@genres');
Route::get('/actor/actorsinagenre/{id}', 'ActorController@ingenres');
