'<?php

class Router
{
    public function route()
    {
        // Récupérer l'URL demandée via REQUEST_URI
        $url = $_SERVER['REQUEST_URI'] ?? '/';

        // Enlever le slash initial et final pour obtenir uniquement le chemin
        $route = trim(parse_url($url, PHP_URL_PATH), '/');
        
        // Afficher la route sélectionnée en utilisant var_dump
        var_dump($route);
    }
}
