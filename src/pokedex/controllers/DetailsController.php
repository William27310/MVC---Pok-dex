<?php

require_once __DIR__ . '/../models/PokemonModel.php';

class DetailsController
{
    public function show($id)
    {
        $model = new PokemonModel();
        $pokemon = $model->getByid($id);
        require_once __DIR__ . '/../views/details.php';
    }
}
