<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* films/detail.html.twig */
class __TwigTemplate_a7c89f35c4e220803a38cb193f63eda8 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "homepage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("homepage.html.twig", "films/detail.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    Détails du Film - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheet(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXhW+ALEwIH\" crossorigin=\"anonymous\">
    <style>
        /* Custom primary background color */
        .bg-primary {
            background-color: #123456 !important;
        }

        /* Custom primary text color */
        .text-primary {
            color: rgb(14, 42, 107) !important;
        }

        /* Custom font size for navigation links */
        .nav-link {
            font-size: 1.2rem;
        }

        /* Custom styles for the header */
        header {
            padding: 1rem 0;
            background-color: #343a40 !important;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin: 0;
            letter-spacing: 1px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            opacity: 0;
            animation: fadeIn 2s forwards;
        }

        /* Custom styles for the navigation links */
        .nav {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-item {
            margin: 0 1rem;
        }

        .nav-link {
            color: #ffffff !important;
            padding: 0.5rem 1rem;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
            border-radius: 0.25rem;
            text-transform: uppercase;
            font-weight: bold;
            opacity: 0;
            animation: fadeIn 2s forwards;
            animation-delay: 0.5s;
        }

        .nav-link:hover {
            background-color: #495057 !important;
            color: #ffc107 !important;
        }

        /* Custom styles for buttons */
        .btn-success {
            background-color: #28a745 !important;
            border: none;
            font-size: 1.2rem;
            padding: 0.8rem 1.5rem;
            transition: transform 0.3s, background-color 0.3s, box-shadow 0.3s;
            border-radius: 0.5rem;
            text-transform: uppercase;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
            opacity: 0;
            animation: fadeIn 2s forwards;
            animation-delay: 1s;
        }

        .btn-success:hover {
            background-color: #218838 !important;
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Main container styles */
        main {
            padding: 2rem 1rem;
        }

        main h2 {
            font-size: 2.5rem;
            border-bottom: 4px solid #123456;
            display: inline-block;
            margin-bottom: 1.5rem;
            color: #343a40;
            text-transform: uppercase;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
            opacity: 0;
            animation: fadeIn 2s forwards;
            animation-delay: 1.5s;
        }

        /* Section styles */
        section {
            margin-bottom: 2rem;
        }

        section p {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #666;
            opacity: 0;
            animation: fadeIn 2s forwards;
            animation-delay: 2s;
        }

        /* Footer styles */
        footer {
            background-color: #123456;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
            border-top: 5px solid #343a40;
        }

        footer p {
            margin: 0;
            font-size: 1.2rem;
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
";
        yield from [];
    }

    // line 157
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 158
        yield "<div class=\"container mt-5\">
    <!-- En-tête avec titre principal -->
    <div class=\"row mb-4\">
        <div class=\"col text-center\">
            <h1 class=\"text-primary display-4\">Détails du Film</h1>
            <p class=\"text-muted\">Découvrez toutes les informations sur le film sélectionné</p>
        </div>
    </div>

    <!-- Carte des détails du film -->
    <div class=\"card shadow-lg\">
        <div class=\"card-header bg-dark text-light\">
            <h2 class=\"mb-0\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 170), "html", null, true);
        yield "</h2>
        </div>
        <div class=\"card-body\">
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>ID :</strong>
                    <span>";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "id", [], "any", false, false, false, 176), "html", null, true);
        yield "</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>Titre :</strong>
                    <span>";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 180), "html", null, true);
        yield "</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>Année :</strong>
                    <span>";
        // line 184
        yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "year", [], "any", false, false, false, 184))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "year", [], "any", false, false, false, 184), "html", null, true)) : ("N/A"));
        yield "</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>Genre :</strong>
                    <span>";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "type", [], "any", false, false, false, 188), "html", null, true);
        yield "</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>Synopsis :</strong>
                    <span>";
        // line 192
        yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "synopsis", [], "any", false, false, false, 192))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "synopsis", [], "any", false, false, false, 192), "html", null, true)) : ("Aucun synopsis disponible."));
        yield "</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>Réalisateur :</strong>
                    <span>";
        // line 196
        yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "director", [], "any", false, false, false, 196))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "director", [], "any", false, false, false, 196), "html", null, true)) : ("Inconnu"));
        yield "</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>Créé le :</strong>
                    <span>";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "created_at", [], "any", false, false, false, 200), "d/m/Y H:i"), "html", null, true);
        yield "</span>
                </li>
            </ul>
        </div>
        <div class=\"card-footer text-center\">
            <a href=\"/films/list\" class=\"btn btn-success\">
                Retour à la liste des films
            </a>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "films/detail.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  299 => 200,  292 => 196,  285 => 192,  278 => 188,  271 => 184,  264 => 180,  257 => 176,  248 => 170,  234 => 158,  227 => 157,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homepage.html.twig' %}

{% block title %}
    Détails du Film - {{ film.title }}
{% endblock %}

{% block stylesheet %}
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXhW+ALEwIH\" crossorigin=\"anonymous\">
    <style>
        /* Custom primary background color */
        .bg-primary {
            background-color: #123456 !important;
        }

        /* Custom primary text color */
        .text-primary {
            color: rgb(14, 42, 107) !important;
        }

        /* Custom font size for navigation links */
        .nav-link {
            font-size: 1.2rem;
        }

        /* Custom styles for the header */
        header {
            padding: 1rem 0;
            background-color: #343a40 !important;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin: 0;
            letter-spacing: 1px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            opacity: 0;
            animation: fadeIn 2s forwards;
        }

        /* Custom styles for the navigation links */
        .nav {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-item {
            margin: 0 1rem;
        }

        .nav-link {
            color: #ffffff !important;
            padding: 0.5rem 1rem;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
            border-radius: 0.25rem;
            text-transform: uppercase;
            font-weight: bold;
            opacity: 0;
            animation: fadeIn 2s forwards;
            animation-delay: 0.5s;
        }

        .nav-link:hover {
            background-color: #495057 !important;
            color: #ffc107 !important;
        }

        /* Custom styles for buttons */
        .btn-success {
            background-color: #28a745 !important;
            border: none;
            font-size: 1.2rem;
            padding: 0.8rem 1.5rem;
            transition: transform 0.3s, background-color 0.3s, box-shadow 0.3s;
            border-radius: 0.5rem;
            text-transform: uppercase;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
            opacity: 0;
            animation: fadeIn 2s forwards;
            animation-delay: 1s;
        }

        .btn-success:hover {
            background-color: #218838 !important;
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Main container styles */
        main {
            padding: 2rem 1rem;
        }

        main h2 {
            font-size: 2.5rem;
            border-bottom: 4px solid #123456;
            display: inline-block;
            margin-bottom: 1.5rem;
            color: #343a40;
            text-transform: uppercase;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
            opacity: 0;
            animation: fadeIn 2s forwards;
            animation-delay: 1.5s;
        }

        /* Section styles */
        section {
            margin-bottom: 2rem;
        }

        section p {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #666;
            opacity: 0;
            animation: fadeIn 2s forwards;
            animation-delay: 2s;
        }

        /* Footer styles */
        footer {
            background-color: #123456;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
            border-top: 5px solid #343a40;
        }

        footer p {
            margin: 0;
            font-size: 1.2rem;
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <!-- En-tête avec titre principal -->
    <div class=\"row mb-4\">
        <div class=\"col text-center\">
            <h1 class=\"text-primary display-4\">Détails du Film</h1>
            <p class=\"text-muted\">Découvrez toutes les informations sur le film sélectionné</p>
        </div>
    </div>

    <!-- Carte des détails du film -->
    <div class=\"card shadow-lg\">
        <div class=\"card-header bg-dark text-light\">
            <h2 class=\"mb-0\">{{ film.title }}</h2>
        </div>
        <div class=\"card-body\">
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>ID :</strong>
                    <span>{{ film.id }}</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>Titre :</strong>
                    <span>{{ film.title }}</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>Année :</strong>
                    <span>{{ film.year is not null ? film.year : 'N/A' }}</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>Genre :</strong>
                    <span>{{ film.type }}</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>Synopsis :</strong>
                    <span>{{ film.synopsis is not null ? film.synopsis : 'Aucun synopsis disponible.' }}</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>Réalisateur :</strong>
                    <span>{{ film.director is not null ? film.director : 'Inconnu' }}</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>Créé le :</strong>
                    <span>{{ film.created_at|date('d/m/Y H:i') }}</span>
                </li>
            </ul>
        </div>
        <div class=\"card-footer text-center\">
            <a href=\"/films/list\" class=\"btn btn-success\">
                Retour à la liste des films
            </a>
        </div>
    </div>
</div>
{% endblock %}", "films/detail.html.twig", "/var/www/filmoteca/src/views/films/detail.html.twig");
    }
}
