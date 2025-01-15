<?php
declare(strict_types=1); // Declare strict types

require __DIR__ . '/../vendor/autoload.php'; // Autoload classes via Composer

use App\Core\Router; // Use the Router class from the App\Core namespace
use Dotenv\Dotenv; // Use the Dotenv class from the vlucas/phpdotenv package

// Initialize Twig
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../src/views'); // Correct path to src/views
$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__ . '/../var/cache',  // Optional, for caching compiled templates
    'debug' => true,                      // Optional, for debugging
]);

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__ . '/../.docker'); // Load the .env file from the .docker directory
$dotenv->load();

$host = $_ENV['MYSQL_HOST'];
$dbname = $_ENV['MYSQL_DATABASE'];
$username = $_ENV['MYSQL_USER'];
$password = $_ENV['MYSQL_PASSWORD'];

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    exit; // Stop execution if the connection fails
}

// FRONT-CONTROLLER
// FRONT-CONTROLLER
$router = new Router($pdo, $twig); // Pass PDO and Twig instances to the Router in the correct order
$router->route(); // Call the route() method to handle incoming requests