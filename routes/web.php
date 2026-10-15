<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pokemon;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/bonjour/{prenom}/{humeur?}', function (string $prenom, ?string $humeur = 'peureux') {

    return view('accueil', [
        'prenom' => $prenom,
        'humeur' => $humeur
    ]);
});


Route::get('/pokemons', function() {

    $pokemons = Pokemon::all();

    return view('pokemons', [
        'pokemons' => $pokemons
    ]);
});