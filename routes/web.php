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
    return view('welcome');
})->name("home");

Route::get('/comics', function () {
    $datiComics = config("comics");

    $datiView = [
        "listaComics" => $datiComics
    ];

    // var_dump($datiComics);
    // return view('comics', [
    //     "lista-comics" => $datiComics
    // ]);
    return view('comics', $datiView);
})->name("comics");


Route::get("/card/{index}", function ($index) {
    $datiComics = config("comics");

    if (!is_numeric($index) || $index < 0 || $index > count($datiComics) - 1) {
        abort(404, "Card inesistente");
    }

    $cardScelta = $datiComics[intval($index)];

    return view("singlePage", [
        "cards" => $cardScelta
    ]);
})->name("pagina-singola-card");