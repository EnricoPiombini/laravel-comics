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

    return view('chi-siamo');
})->name("chi-siamo");



Route::get('/cards', function () {
    $cards = config("comics");
    return view('cards.index', [
        "cards" => $cards
    ]);
})->name("cards");


Route::get('/cards/{id}', function ($id) {
    $cards = config("comics");

    $foundProduct = null;

    foreach ($cards as $i => $card) {
        if ($card['id'] === intval($id)) {
            $foundProduct = $card;
            break;
        }
    }

    return view(
        'cards.show', 
        [
            'card'=> $foundProduct
        ]
    );
})->name('cards.show');


