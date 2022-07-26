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

Route::get('/cards', function () {
    $cards = config("comics");
    return view('cards', [
        "cards" => $cards
    ]);
}) ->name("cards");

Route::get('/bannerBlue', function () {
    $links = config("comics");
    return view('links', [
        "links" => $links
    ]);
}) ->name("links");