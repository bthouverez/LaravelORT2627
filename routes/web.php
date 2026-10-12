<?php

use Illuminate\Support\Facades\Route;

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
    $pokemons = ['Salamèche', 'Lippoutou', 'Togepi', 'Magmar'];

    return view('pokemons', [
        'pokemons' => $pokemons
    ]);
});