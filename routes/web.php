<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/spotify',[\App\Http\Controllers\SpotifyController::class,'index'])->name('spotify');
Route::get('/play',[\App\Http\Controllers\GameController::class,'index'])->name('game');
Route::get('/timeout',[\App\Http\Controllers\GameController::class,'index'])->name('timeout');
Route::post('/guess',[\App\Http\Controllers\GuessController::class,'store'])->name('guess');
//Route::get('/','HomeController@index');
Route::get('/leaderboard',[\App\Http\Controllers\LeaderboardController::class,'index'])->name('leaderboard');
Route::get('/endtest',[\App\Http\Controllers\EndTestController::class,'index'])->name('endtest');
Route::get('/currentPlaylist',[\App\Http\Controllers\GameController::class,'indexPlaylist'])->name('currentPlaylist');

Route::post('/putPlaylist',[\App\Http\Controllers\GameController::class,'putPlaylist'])->name('putPlaylist');
//Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
//Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
