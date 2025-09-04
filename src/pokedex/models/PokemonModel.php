<?php

class PokemonModel {

public function getAll() {
    $pokedex = file_get_contents(__DIR__ . '/../data/pokemons.json');
    $allPokemon = json_decode($pokedex, true);
    return $allPokemon;
}

public function getByid() {
    return "pokemon 25, pikachu";
}
}