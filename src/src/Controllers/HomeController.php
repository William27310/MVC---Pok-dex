<?php

namespace App\Controllers;

use App\Models\PokemonModel;

class HomeController
{
    public function index()
    {
        $PokemonModel = new PokemonModel();
        $touslesPokemons = $PokemonModel->getAll();
        require_once __DIR__ . '/../views/home.php';
    }

        public function genIndex($gen)
    {
        $PokemonModel = new PokemonModel();
        $touslesPokemons = $PokemonModel->getByGeneration($gen);
        require_once __DIR__ . '/../views/home.php';
    }
}