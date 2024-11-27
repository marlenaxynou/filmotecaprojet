<?php

require_once '/path/to/vendor/autoload.php'; 

$loader = new \Twig\Loader\FilesystemLoader('chemin/vers/les/templates'); 
$twig = new \Twig\Environment($loader, [
    'cache' => 'chemin/vers/cache', 
    'debug' => true, 
]);

