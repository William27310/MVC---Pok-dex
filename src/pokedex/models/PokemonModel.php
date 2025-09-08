<?php

namespace Models;

class PokemonModel
{

    public function getAll()
    {
        $pokedex = file_get_contents(__DIR__ . '/../data/pokemons.json');
        $allPokemon = json_decode($pokedex, true);
        return $allPokemon;
    }

    /**
     * Méthode permettant de récupérer toutes les infos d'un pokémon selon son id
     * 
     * @param $id Id du pokémon à rechercher
     * @return array tableau contenant toutes les infos
     */
    public function getByid($id)
    {
        // nous allons récupérer le json à l'aide de file_get_contents
        $pokedex = file_get_contents(__DIR__ . '/../data/pokemons.json');
        // nous allons créer un tableau associatif $allPokemon à l'aide de json_decode
        $allPokemon = json_decode($pokedex, true);
        // nous parcourons le tableau à l'aide d'un foreach et si nous trouvons l'id correspondant, nous retournons les infos
        foreach ($allPokemon as $pokemon) {
            if ($pokemon['id'] == $id) {
                return $pokemon;
            }
        }
    }

    public function getByGeneration($gen)
    {
        $pokedex = file_get_contents(__DIR__ . '/../data/pokemons.json');
        $allPokemon = json_decode($pokedex, true);
        $result = [];

        foreach ($allPokemon as $pokemons) {
            if ($pokemons['generation'] == $gen) {
                $result[] = $pokemons;
            }
        }
        return $result;
    }
}