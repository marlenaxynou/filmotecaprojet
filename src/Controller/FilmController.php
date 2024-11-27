<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace App\Controller;

use App\Core\DatabaseConnection;
use Twig\Environment;

class FilmController
{
    private $twig;

    // Le constructeur qui reçoit l'instance de Twig
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    // Méthode pour afficher la liste des films
    public function listFilms()
    {
        // Connexion à la base de données via la méthode de connexion
        $pdo = DatabaseConnection::getConnection();
        
        // Exécution de la requête SQL pour récupérer tous les films
        $stmt = $pdo->query("SELECT * FROM films");
        $films = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        // Rendu du template Twig avec la liste des films
        echo $this->twig->render('list.html.twig', ['films' => $films]);
    }

    // Méthode pour créer un film (ajoutée pour exemple)
    public function create()
    {
        echo "Création d'un film";
    }

    // Méthode pour lire un film spécifique
    public function read(array $queryParams)
    {
        $filmRepository = new FilmRepository();
        $film = $filmRepository->find((int) $queryParams['id']);
        
        // Affichage du film avec dd() (debugging)
        dd($film);
    }

    // Méthode pour mettre à jour un film
    public function update()
    {
        echo "Mise à jour d'un film";
    }

    // Méthode pour supprimer un film
    public function delete()
    {
        echo "Suppression d'un film";
    }
}
=======
namespace App\Controller;

class FilmController
{
    public function create()
    {
    }

    public function read()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
>>>>>>> 52ac463aef3ea72da70d1df598fda5d10906e65b
