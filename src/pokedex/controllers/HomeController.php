<?php

namespace Controllers;

use Models\PokemonModel;

class HomeController
{
    public function index()
    {
        $PokemonModel = new PokemonModel();
        $touslesPokemons = $PokemonModel->getAll();
        require_once __DIR__ . '/../views/home.php';
    }
}
