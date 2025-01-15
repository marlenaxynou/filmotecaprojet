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

/* films/update.html.twig */
class __TwigTemplate_3775e79ff246907350d1fcdd6bbd3c5d extends Template
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
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Modifier un Film</title>
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
    <header class=\"bg-primary text-white text-center py-3\">
        <h1>Modifier un Film</h1>
    </header>
    <main class=\"container mt-5\">
        <form action=\"/films/update\" method=\"post\" class=\"bg-light p-4 rounded shadow-sm\">
            <input type=\"hidden\" id=\"id\" name=\"id\" value=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "id", [], "any", false, false, false, 162), "html", null, true);
        yield "\" required>

            <div class=\"mb-3\">
                <label for=\"title\" class=\"form-label\">Titre :</label>
                <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" value=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 166), "html", null, true);
        yield "\" required>
            </div>

            <div class=\"mb-3\">
                <label for=\"director\" class=\"form-label\">Réalisateur :</label>
                <input type=\"text\" id=\"director\" name=\"director\" class=\"form-control\" value=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "director", [], "any", false, false, false, 171), "html", null, true);
        yield "\" required>
            </div>

            <div class=\"mb-3\">
                <label for=\"year\" class=\"form-label\">Année :</label>
                <input type=\"number\" id=\"year\" name=\"year\" class=\"form-control\" value=\"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "year", [], "any", false, false, false, 176), "html", null, true);
        yield "\" required>
            </div>

            <div class=\"mb-3\">
                <label for=\"type\" class=\"form-label\">Genre :</label>
                <input type=\"text\" id=\"type\" name=\"type\" class=\"form-control\" value=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "type", [], "any", false, false, false, 181), "html", null, true);
        yield "\" required>
            </div>

            <div class=\"mb-3\">
                <label for=\"synopsis\" class=\"form-label\">Synopsis :</label>
                <textarea id=\"synopsis\" name=\"synopsis\" class=\"form-control\" required>";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "synopsis", [], "any", false, false, false, 186), "html", null, true);
        yield "</textarea>
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Modifier le Film</button>
        </form>
    </main>
</body>

</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "films/update.html.twig";
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
        return array (  244 => 186,  236 => 181,  228 => 176,  220 => 171,  212 => 166,  205 => 162,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Modifier un Film</title>
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
    <header class=\"bg-primary text-white text-center py-3\">
        <h1>Modifier un Film</h1>
    </header>
    <main class=\"container mt-5\">
        <form action=\"/films/update\" method=\"post\" class=\"bg-light p-4 rounded shadow-sm\">
            <input type=\"hidden\" id=\"id\" name=\"id\" value=\"{{ film.id }}\" required>

            <div class=\"mb-3\">
                <label for=\"title\" class=\"form-label\">Titre :</label>
                <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" value=\"{{ film.title }}\" required>
            </div>

            <div class=\"mb-3\">
                <label for=\"director\" class=\"form-label\">Réalisateur :</label>
                <input type=\"text\" id=\"director\" name=\"director\" class=\"form-control\" value=\"{{ film.director }}\" required>
            </div>

            <div class=\"mb-3\">
                <label for=\"year\" class=\"form-label\">Année :</label>
                <input type=\"number\" id=\"year\" name=\"year\" class=\"form-control\" value=\"{{ film.year }}\" required>
            </div>

            <div class=\"mb-3\">
                <label for=\"type\" class=\"form-label\">Genre :</label>
                <input type=\"text\" id=\"type\" name=\"type\" class=\"form-control\" value=\"{{ film.type }}\" required>
            </div>

            <div class=\"mb-3\">
                <label for=\"synopsis\" class=\"form-label\">Synopsis :</label>
                <textarea id=\"synopsis\" name=\"synopsis\" class=\"form-control\" required>{{ film.synopsis }}</textarea>
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Modifier le Film</button>
        </form>
    </main>
</body>

</html>", "films/update.html.twig", "/var/www/filmoteca/src/views/films/update.html.twig");
    }
}
