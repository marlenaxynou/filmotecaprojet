<?php

namespace App\Controller;

use PDO;
use Twig\Environment;

class FilmController
{
    private PDO $pdo;
    private Environment $twig;

    public function __construct(PDO $pdo, Environment $twig)
    {
        $this->pdo = $pdo;
        $this->twig = $twig;
    }

    public function homepage(): void
    {
        $stmt = $this->pdo->query("SELECT * FROM films");
        $films = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo $this->twig->render('homepage.html.twig', ['films' => $films]);
    }

    public function list(): void
    {
        $stmt = $this->pdo->query("SELECT * FROM films");
        $films = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo $this->twig->render('films/list.html.twig', ['films' => $films]);
    }

    public function create(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? null;
            $year = $_POST['year'] ?? null;
            $type = $_POST['type'] ?? null;
            $synopsis = $_POST['synopsis'] ?? null;
            $director = $_POST['director'] ?? null;
            $createdAt = (new \DateTime())->format('Y-m-d H:i:s');

            if ($title && $year && $type && $synopsis && $director) {
                try {
                    $stmt = $this->pdo->prepare("INSERT INTO films (title, year, type, synopsis, director, created_at) VALUES (:title, :year, :type, :synopsis, :director, :created_at)");
                    $stmt->execute([
                        'title' => $title,
                        'year' => $year,
                        'type' => $type,
                        'synopsis' => $synopsis,
                        'director' => $director,
                        'created_at' => $createdAt,
                    ]);
                    echo "Film ajouté avec succès.";
                } catch (\Exception $e) {
                    echo "Une erreur s'est produite lors de l'ajout du film : " . $e->getMessage();
                }
            } else {
                echo "Tous les champs sont requis.";
            }
        } else {
            echo $this->twig->render('films/create.html.twig');
        }
    }

    public function read(array $queryParams): void
    {
        $id = (int) $queryParams['id'];
        $stmt = $this->pdo->prepare("SELECT * FROM films WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $film = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($film) {
            echo $this->twig->render('films/detail.html.twig', ['film' => $film]);
        } else {
            echo "Film non trouvé.";
        }
    }

    public function update(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = (int) ($_POST['id'] ?? 0);
            $title = $_POST['title'] ?? null;
            $year = $_POST['year'] ?? null;
            $type = $_POST['type'] ?? null;
            $synopsis = $_POST['synopsis'] ?? null;
            $director = $_POST['director'] ?? null;

            if ($id > 0 && $title && $year && $type && $synopsis && $director) {
                try {
                    $stmt = $this->pdo->prepare("UPDATE films SET title = :title, year = :year, type = :type, synopsis = :synopsis, director = :director WHERE id = :id");
                    $stmt->execute([
                        'title' => $title,
                        'year' => $year,
                        'type' => $type,
                        'synopsis' => $synopsis,
                        'director' => $director,
                        'id' => $id,
                    ]);
                    echo "Film mis à jour avec succès.";
                } catch (\Exception $e) {
                    echo "Une erreur s'est produite lors de la mise à jour du film : " . $e->getMessage();
                }
            } else {
                echo "Tous les champs sont requis.";
            }
        } else {
            $id = (int) ($_GET['id'] ?? 0);
            $stmt = $this->pdo->prepare("SELECT * FROM films WHERE id = :id");
            $stmt->execute(['id' => $id]);
            $film = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($film) {
                echo $this->twig->render('films/update.html.twig', ['film' => $film]);
            } else {
                echo "Film non trouvé.";
            }
        }
    }



    public function delete(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = (int) ($_POST['id'] ?? 0);
            if ($id > 0) {
                try {
                    $stmt = $this->pdo->prepare("DELETE FROM films WHERE id = :id");
                    $stmt->execute(['id' => $id]);
                    if ($stmt->rowCount() > 0) {
                        echo "Film supprimé avec succès.";
                    } else {
                        echo "Film non trouvé.";
                    }
                } catch (\Exception $e) {
                    echo "Une erreur s'est produite lors de la suppression du film : " . $e->getMessage();
                }
            } else {
                echo "ID du film non valide.";
            }
        } else {
            echo $this->twig->render('films/delete.html.twig');
        }
    }
}