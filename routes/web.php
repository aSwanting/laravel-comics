<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/', function () {
    @require __DIR__ . "/../resources/php/comics.php";
    return view('comics', compact('comics'));
})->name('comics');

Route::get('/details/{id}/{total}', function (string $id, string $total) {
    @require __DIR__ . "/../resources/php/comics.php";
    return view('comic_details', compact('comics', 'id', 'total'));
})->name('details');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
