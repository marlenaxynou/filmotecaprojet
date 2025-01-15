<?php

namespace App\Core;

use Twig\Environment;

class BaseController
{
    protected Environment $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }
}