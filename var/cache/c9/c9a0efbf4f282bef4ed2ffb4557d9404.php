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

/* films/list.html.twig */
class __TwigTemplate_ee28ec8b42f03c580e4824cffd0aa965 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Liste des Films</title>
    <link href=\"https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/flatly/bootstrap.min.css\" rel=\"stylesheet\">
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
</head>
<body>
    <div class=\"container mt-5\">
        <h1 class=\"text-center text-primary\">Liste des films</h1>
        
        <!-- Button to return to homepage -->
        <div class=\"mb-3 text-center\">
            <a href=\"/\" class=\"btn btn-secondary\">Retour à la page d'accueil</a>
        </div>

        <ul class=\"list-group\">
            ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["films"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 164
            yield "                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <a href=\"/films/read?id=";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 165), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "title", [], "any", false, false, false, 165), "html", null, true);
            yield "</a>
                    
                    <div>
                        <!-- Modifier Button -->
                        <a href=\"/films/update?id=";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 169), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm me-2\">Modifier</a>

                        <!-- Supprimer Button -->
                        <form action=\"/films/delete\" method=\"post\" class=\"d-inline delete-form\">
                            <input type=\"hidden\" name=\"id\" value=\"";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 173), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                        </form>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['film'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        yield "        </ul>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteForms = document.querySelectorAll('.delete-form');
            deleteForms.forEach(form => {
                form.addEventListener('submit', function (event) {
                    const confirmed = confirm('Êtes-vous sûr de vouloir supprimer ce film ?');
                    if (!confirmed) {
                        event.preventDefault();
                    }
                });
            });
        });
    </script>
</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "films/list.html.twig";
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
        return array (  241 => 179,  229 => 173,  222 => 169,  213 => 165,  210 => 164,  206 => 163,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Liste des Films</title>
    <link href=\"https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/flatly/bootstrap.min.css\" rel=\"stylesheet\">
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
</head>
<body>
    <div class=\"container mt-5\">
        <h1 class=\"text-center text-primary\">Liste des films</h1>
        
        <!-- Button to return to homepage -->
        <div class=\"mb-3 text-center\">
            <a href=\"/\" class=\"btn btn-secondary\">Retour à la page d'accueil</a>
        </div>

        <ul class=\"list-group\">
            {% for film in films %}
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <a href=\"/films/read?id={{ film.id }}\" class=\"text-decoration-none text-dark\">{{ film.title }}</a>
                    
                    <div>
                        <!-- Modifier Button -->
                        <a href=\"/films/update?id={{ film.id }}\" class=\"btn btn-warning btn-sm me-2\">Modifier</a>

                        <!-- Supprimer Button -->
                        <form action=\"/films/delete\" method=\"post\" class=\"d-inline delete-form\">
                            <input type=\"hidden\" name=\"id\" value=\"{{ film.id }}\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                        </form>
                    </div>
                </li>
            {% endfor %}
        </ul>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteForms = document.querySelectorAll('.delete-form');
            deleteForms.forEach(form => {
                form.addEventListener('submit', function (event) {
                    const confirmed = confirm('Êtes-vous sûr de vouloir supprimer ce film ?');
                    if (!confirmed) {
                        event.preventDefault();
                    }
                });
            });
        });
    </script>
</body>
</html>", "films/list.html.twig", "/var/www/filmoteca/src/views/films/list.html.twig");
    }
}
