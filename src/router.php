<?php

$url = $_GET['url'] ?? 'home';

$parts = explode('/', $url);

switch ($parts[0]) {
    case 'home':
        require_once __DIR__ . '/pokedex/controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();

    case 'details':
        if (isset($parts[1])) {
            require_once __DIR__ . '/pokedex/controllers/DetailsController.php';
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

?>