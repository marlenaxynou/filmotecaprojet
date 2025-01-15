<?php

namespace App\Controller;

use App\Core\BaseController;

class HomeController extends BaseController
{
    public function index(): void
    {
        echo $this->twig->render('homepage.html.twig');
    }

    public function listFilms(): void
    {
        echo $this->twig->render('films/list.html.twig');
    }
}