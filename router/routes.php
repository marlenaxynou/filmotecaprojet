<?php

$router->addRoute('/films', function() {
    echo "<h1>Page des films</h1>";
    var_dump("Vous êtes sur la page des films");
});

$router->addRoute('/contact', function() {
    echo "<h1>Page de contact</h1>";
    var_dump("Vous êtes sur la page de contact");
});

?>
