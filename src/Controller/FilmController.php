<?php

namespace App\Controller;

use PDO;

class FilmController
{
    private $twig;
    private $pdo;

    // Constructeur pour injecter Twig et PDO
    public function __construct($twig, $pdo)
    {
        $this->twig = $twig;
        $this->pdo = $pdo;
    }

    // Méthode pour afficher la liste des films
    public function list(array $queryParams = []): void
    {
        try {
            // Récupération de tous les films dans la base de données
            $stmt = $this->pdo->query("SELECT * FROM films");
            $films = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Rendu de la vue Twig avec les données des films
            echo $this->twig->render('films/list.html.twig', ['films' => $films]);
        } catch (\Exception $e) {
            // Gestion des erreurs avec un message approprié
            echo "Une erreur s'est produite lors de la récupération des films : " . $e->getMessage();
        }
    }

    // Méthode pour créer un film
    public function create(): void
    {
        echo "Création d'un film";
    }

    // Méthode pour lire un film spécifique
    public function read(array $queryParams): void
    {
        if (!isset($queryParams['id'])) {
            echo "ID du film manquant";
            return;
        }

        try {
            $id = (int)$queryParams['id'];
            $stmt = $this->pdo->prepare("SELECT * FROM films WHERE id = :id");
            $stmt->execute(['id' => $id]);
            $film = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$film) {
                echo "Film non trouvé.";
                return;
            }

            echo $this->twig->render('films/detail.html.twig', ['film' => $film]);
        } catch (\Exception $e) {
            echo "Une erreur s'est produite lors de la récupération du film : " . $e->getMessage();
        }
    }

    // Méthode pour mettre à jour un film
    public function update(): void
    {
        echo "Mise à jour d'un film";
    }

    // Méthode pour supprimer un film
    public function delete(): void
    {
        echo "Suppression d'un film";
    }
}
