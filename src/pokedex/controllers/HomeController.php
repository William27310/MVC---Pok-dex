<?php

require_once __DIR__ . '/../models/PokemonModel.php';

class HomeController
{
    public function index()
    {
        $PokemonModel = new PokemonModel();
        $touslesPokemons = $PokemonModel->getAll();
        require_once __DIR__ . '/../views/home.php';
    }
}
