<?php

namespace App\Core;

class Router
{
    private \PDO $pdo;
    private \Twig\Environment $twig;

    public function __construct(\PDO $pdo, \Twig\Environment $twig)
    {
        $this->pdo = $pdo;
        $this->twig = $twig;
    }

    public function route(): void
    {
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        $parts = explode('/', $uri);
        $route = $parts[0] ?? null;
        $action = $parts[1] ?? 'index';

        $routes = [
            'films' => 'FilmController',
            'contact' => 'ContactController',
            '' => 'HomeController',
        ];

        if (array_key_exists($route, $routes)) {
            $controllerName = 'App\\Controller\\' . $routes[$route];
            if (!class_exists($controllerName)) {
                echo "Controller '$controllerName' not found";
                return;
            }

            // Use reflection to determine the correct argument order
            $reflection = new \ReflectionClass($controllerName);
            $constructor = $reflection->getConstructor();
            $parameters = $constructor->getParameters();
            $args = [];
            foreach ($parameters as $parameter) {
                if ($parameter->getType() && $parameter->getType()->getName() === \PDO::class) {
                    $args[] = $this->pdo;
                } elseif ($parameter->getType() && $parameter->getType()->getName() === \Twig\Environment::class) {
                    $args[] = $this->twig;
                }
            }

            // Ensure both arguments are passed
            if (count($args) !== count($parameters)) {
                echo "Error: Incorrect number of arguments for '$controllerName' constructor";
                return;
            }

            $controller = $reflection->newInstanceArgs($args);
            if (method_exists($controller, $action)) {
                $controller->$action($_GET);
            } else {
                echo "Action '$action' not found in $controllerName";
            }
        } else {
            echo "404 Not Found";
        }
    }
}