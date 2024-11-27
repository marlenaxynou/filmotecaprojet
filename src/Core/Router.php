<?php

declare(strict_types=1);

namespace App\Core;

class Router
{
    public function route(): void
    {
        // Récupère l'URL demandée (sans le domaine et la racine)
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        // Découpe l'URI pour obtenir la route et l'action
        $parts = explode('/', $uri); // Exemple : ['films', 'create']
        $route = $parts[0] ?? null;   // 'films'
        $action = $parts[1] ?? 'listFilms'; // 'create' ou par défaut 'listFilms'

        // Récupère les paramètres éventuels de la query string (comme ?id=12&name=Inception)
        $queryParams = $_GET;

        // Définit les routes et leurs contrôleurs associés
        $routes = [
            'films' => 'FilmController',
            'contact' => 'ContactController',
        ];

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
                $controller->$action($queryParams); // Appelle la méthode dynamique correspondant à l'action
            } else {
                echo "Action '$action' not found in $controllerName";
            }
        } else {
            // Page non trouvée
            echo "404 Not Found";
        }
    }
}
