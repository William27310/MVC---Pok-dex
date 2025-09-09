<?php

use App\Controllers\HomeController;
use App\Controllers\DetailsController;

// Recherche de paramètre ($_GET)
// ?? 'home' si pas présente, tu lui donne la valeur home
$url = $_GET['url'] ?? 'home';

// Je récupère ce qu'il y a à gauche et à droite de l'url
$parts = explode('/', $url);

switch ($parts[0]) {
    case 'home':
        $controller = new HomeController();
        if (isset($parts[1])) {
            $controller->genIndex($parts[1]);
        } else {
            $controller->index();
        }
        break;

    case 'details':
        if (isset($parts[1])) {
            $controller = new DetailsController();
            $controller->show($parts[1]);
        } else {
            echo "ID du Pokémon manquant !";
        }
        break;


    default:
        echo "Page non trouvée (404)";
        break;
}