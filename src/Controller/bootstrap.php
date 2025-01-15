<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/../src/views'); // Dossier des templates
$twig = new Environment($loader, [
    'cache' => __DIR__ . '/../var/cache/twig', // Dossier pour le cache Twig
    'debug' => true, // Activer en mode développement
]);

return $twig;
