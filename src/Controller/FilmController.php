<?php

namespace App\Controller;

class FilmController
{
    private $twig;
    private $pdo;

    public function __construct($twig, $pdo)
    {
        $this->twig = $twig;
        $this->pdo = $pdo;
    }

    public function listFilms(array $queryParams)
    {
        $films = $this->pdo->query("SELECT * FROM movie")->fetchAll(\PDO::FETCH_ASSOC);
        echo $this->twig->render('films.html.twig', ['films' => $films]);
    }

    public function create()
    {
        echo "Création d'un film";
    }

    public function read(array $queryParams)
    {
        $filmRepository = new FilmRepository($this->pdo);
        $film = $filmRepository->find((int) $queryParams['id']);
        echo $this->twig->render('film.html.twig', ['film' => $film]);
    }

    public function update()
    {
        echo "Mise à jour d'un film";
    }

    public function delete()
    {
        echo "Suppression d'un film";
    }
}