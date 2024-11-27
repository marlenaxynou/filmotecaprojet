<?php

namespace App\Repository;

class FilmRepository
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function find(int $id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM movie WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}