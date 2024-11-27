<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 52ac463aef3ea72da70d1df598fda5d10906e65b
namespace App\Core;

class Router
{
<<<<<<< HEAD
    public function route(): void
=======
    public function route()
>>>>>>> 52ac463aef3ea72da70d1df598fda5d10906e65b
    {
        /**
         * echo '<pre>';
         * var_dump($_SERVER);
         * echo '</pre>';die;
         */

        // Récupère l'URL demandée (sans le domaine et la racine)
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
<<<<<<< HEAD

        // Découpe l'URI pour obtenir la route et l'action
        $parts = explode('/', $uri); // Exemple : ['films', 'create']

        $route = $parts[0] ?? null;   // 'films'
        $action = $parts[1] ?? null; // 'create'
=======
        
        // Récupère les paramètres de la query string (comme ?id=12&name=Inception)
        $queryParams = $_GET;
>>>>>>> 52ac463aef3ea72da70d1df598fda5d10906e65b

        // Définit les routes et leurs contrôleurs associés
        $routes = [
            'films' => 'FilmController',
            'contact' => 'ContactController',
        ];

<<<<<<< HEAD
        if (array_key_exists($route, $routes)) {
            // Crée dynamiquement le contrôleur
            $controllerName = 'App\\Controller\\' . $routes[$route];

            if (!class_exists($controllerName)) {
                echo "Controller '$controllerName' not found";
                return;
            }

            $controller = new $controllerName();

            // Vérifie si la méthode existe dans le contrôleur
            if (method_exists($controller, $action)) {
                $queryParams = $_GET; // Récupère les paramètres éventuels
                $controller->$action($queryParams); // Appelle la méthode dynamique correspondant à l'action du contrôleur
            } else {
                echo "Action '$action' not found in $controllerName";
            }
=======
        if (array_key_exists($uri, $routes)) {
            $controllerName = 'App\\Controller\\' . $routes[$uri];
            $controller = new $controllerName();

            // Appelle une méthode spécifique avec les paramètres de la requête (par exemple, index())
            $controller->index($queryParams); // On passe les paramètres à la méthode index()
>>>>>>> 52ac463aef3ea72da70d1df598fda5d10906e65b
        } else {
            // Page non trouvée
            echo "404 Not Found";
        }
    }
}