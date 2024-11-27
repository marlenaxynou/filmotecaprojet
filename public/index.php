<?php

<<<<<<< HEAD
// Inclure l'autoload de Composer
require_once __DIR__ . '/vendor/autoload.php';

// Inclure la configuration de Twig
require_once __DIR__ . '/config/twig.php'; // Assurez-vous d'avoir configuré Twig dans ce fichier

use App\Controller\FilmController;

// Crée une instance de FilmController avec Twig injecté
$filmController = new FilmController($twig);

// Récupérer l'URL actuelle
$requestUri = $_SERVER['REQUEST_URI'];

// Gérer les routes
switch ($requestUri) {
    case '/films':
        // Appeler la méthode listFilms() pour afficher la liste des films
        $filmController->listFilms();
        break;

    case '/films/create':
        // Vous pouvez ajouter ici une autre route pour la création de films, etc.
        $filmController->create();
        break;

    case '/films/read':
        // Route pour lire un film spécifique
        $filmController->read($_GET); // Vous pouvez utiliser $_GET pour récupérer les paramètres de l'URL
        break;

    // Ajouter d'autres cas selon les routes que vous avez définies (update, delete, etc.)
    
    default:
        // Page par défaut, si aucune route n'est définie
        echo "Page introuvable!";
        break;
}
=======
require __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

$router = new Router();
$router->route();
>>>>>>> 52ac463aef3ea72da70d1df598fda5d10906e65b
