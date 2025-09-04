<?php

class HomeController {
    public function index() {
        require_once __DIR__ . '/../models/PokemonModel.php';
        $PokemonModel = new PokemonModel();
        $touslesPokemons = $PokemonModel->getAll();
        require_once __DIR__ . '/../views/home.php'; 
    }

    public function show($id) {
        require_once __DIR__ . '/../views/details.php';
    }
}

?>