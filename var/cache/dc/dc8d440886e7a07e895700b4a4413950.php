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

/* homepage.html.twig */
class __TwigTemplate_971cba93860131cf7b149d2e78e8099f extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
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
            color:rgb(178, 188, 235) !important;
        }

        /* Custom styles for buttons */
        .btn-success {
            background-color:rgb(40, 70, 167) !important;
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
            background-color:rgb(40, 100, 169) !important;
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
        <h1>Bienvenue sur Filmoteca</h1>
        <nav>
            <ul class=\"nav\">
                <li class=\"nav-item\"><a href=\"/\" class=\"nav-link\">Accueil</a></li>
                <li class=\"nav-item\"><a href=\"#about\" class=\"nav-link\">À propos</a></li>
                <li class=\"nav-item\"><a href=\"/films/list\" class=\"nav-link\">Films</a></li>
                <li class=\"nav-item\"><a href=\"#contact\" class=\"nav-link\">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main class=\"container mt-5\">
        ";
        // line 169
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 226
        yield "    </main>
    <footer class=\"bg-primary text-white text-center py-3\">
        <p>&copy; 2025 Filmoteca. Tous droits réservés.</p>
    </footer>


</body>

</html>";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Filmoteca";
        yield from [];
    }

    // line 169
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 170
        yield "        <section id=\"home\" class=\"mb-5\">
            <h2 class=\"text-primary\">Découvrez le monde des films</h2>
            <p>Explorez notre vaste collection de films de divers genres et époques.</p>
            <a href=\"/films/create\" class=\"btn btn-success\">Ajouter un Film</a>
        </section>
        <section id=\"about\" class=\"mb-5\">
            <h2 class=\"text-primary\">À propos de Filmoteca</h2>
            <p>Filmoteca est votre destination de choix pour découvrir et apprécier des films. Notre collection comprend des classiques, des nouveautés et tout ce qui se trouve entre les deux.</p>
        </section>
        <section id=\"films\" class=\"mb-5\">
            <h2 class=\"text-primary\">Nos Films</h2>
            <div class=\"film-list row\">
                ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["films"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 183
            yield "                <div class=\"film col-md-4 mb-4\">
                    <div class=\"card h-100\">
                        <div class=\"card-body\">
                            <h3 class=\"card-title\">";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "title", [], "any", false, false, false, 186), "html", null, true);
            yield "</h3>
                            <p class=\"card-text\">Réalisateur : ";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "director", [], "any", false, false, false, 187), "html", null, true);
            yield "</p>
                            <p class=\"card-text\">Année : ";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "year", [], "any", false, false, false, 188), "html", null, true);
            yield "</p>
                            <p class=\"card-text\">Genre : ";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "type", [], "any", false, false, false, 189), "html", null, true);
            yield "</p>
                            <div class=\"film-actions\">
                                <a href=\"/films/read?id=";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 191), "html", null, true);
            yield "\" class=\"btn btn-info\">Détails</a>
                                <a href=\"/films/update?id=";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 192), "html", null, true);
            yield "\" class=\"btn btn-warning\">Modifier</a>
                                <form action=\"/films/delete\" method=\"post\" class=\"delete-form d-inline\">
                                    <input type=\"hidden\" name=\"id\" value=\"";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 194), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 202
            yield "                <p>Aucun film trouvé.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['film'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        yield "            </div>
        </section>
        <section id=\"contact\" class=\"mb-5\">
            <h2 class=\"text-primary\">Contactez-nous</h2>
            <p>Si vous avez des questions ou des suggestions, n'hésitez pas à <a href=\"mailto:info@filmoteca.com\">nous envoyer un email</a>.</p>
            <form action=\"#\" method=\"post\">
                <div class=\"mb-3\">
                    <label for=\"name\" class=\"form-label\">Nom :</label>
                    <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"email\" class=\"form-label\">Email :</label>
                    <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"message\" class=\"form-label\">Message :</label>
                    <textarea id=\"message\" name=\"message\" class=\"form-control\" required></textarea>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
            </form>
        </section>
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "homepage.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  320 => 204,  313 => 202,  300 => 194,  295 => 192,  291 => 191,  286 => 189,  282 => 188,  278 => 187,  274 => 186,  269 => 183,  264 => 182,  250 => 170,  243 => 169,  232 => 7,  219 => 226,  217 => 169,  52 => 7,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Filmoteca{% endblock %}</title>
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
            color:rgb(178, 188, 235) !important;
        }

        /* Custom styles for buttons */
        .btn-success {
            background-color:rgb(40, 70, 167) !important;
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
            background-color:rgb(40, 100, 169) !important;
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
        <h1>Bienvenue sur Filmoteca</h1>
        <nav>
            <ul class=\"nav\">
                <li class=\"nav-item\"><a href=\"/\" class=\"nav-link\">Accueil</a></li>
                <li class=\"nav-item\"><a href=\"#about\" class=\"nav-link\">À propos</a></li>
                <li class=\"nav-item\"><a href=\"/films/list\" class=\"nav-link\">Films</a></li>
                <li class=\"nav-item\"><a href=\"#contact\" class=\"nav-link\">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main class=\"container mt-5\">
        {% block body %}
        <section id=\"home\" class=\"mb-5\">
            <h2 class=\"text-primary\">Découvrez le monde des films</h2>
            <p>Explorez notre vaste collection de films de divers genres et époques.</p>
            <a href=\"/films/create\" class=\"btn btn-success\">Ajouter un Film</a>
        </section>
        <section id=\"about\" class=\"mb-5\">
            <h2 class=\"text-primary\">À propos de Filmoteca</h2>
            <p>Filmoteca est votre destination de choix pour découvrir et apprécier des films. Notre collection comprend des classiques, des nouveautés et tout ce qui se trouve entre les deux.</p>
        </section>
        <section id=\"films\" class=\"mb-5\">
            <h2 class=\"text-primary\">Nos Films</h2>
            <div class=\"film-list row\">
                {% for film in films %}
                <div class=\"film col-md-4 mb-4\">
                    <div class=\"card h-100\">
                        <div class=\"card-body\">
                            <h3 class=\"card-title\">{{ film.title }}</h3>
                            <p class=\"card-text\">Réalisateur : {{ film.director }}</p>
                            <p class=\"card-text\">Année : {{ film.year }}</p>
                            <p class=\"card-text\">Genre : {{ film.type }}</p>
                            <div class=\"film-actions\">
                                <a href=\"/films/read?id={{ film.id }}\" class=\"btn btn-info\">Détails</a>
                                <a href=\"/films/update?id={{ film.id }}\" class=\"btn btn-warning\">Modifier</a>
                                <form action=\"/films/delete\" method=\"post\" class=\"delete-form d-inline\">
                                    <input type=\"hidden\" name=\"id\" value=\"{{ film.id }}\">
                                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {% else %}
                <p>Aucun film trouvé.</p>
                {% endfor %}
            </div>
        </section>
        <section id=\"contact\" class=\"mb-5\">
            <h2 class=\"text-primary\">Contactez-nous</h2>
            <p>Si vous avez des questions ou des suggestions, n'hésitez pas à <a href=\"mailto:info@filmoteca.com\">nous envoyer un email</a>.</p>
            <form action=\"#\" method=\"post\">
                <div class=\"mb-3\">
                    <label for=\"name\" class=\"form-label\">Nom :</label>
                    <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"email\" class=\"form-label\">Email :</label>
                    <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"message\" class=\"form-label\">Message :</label>
                    <textarea id=\"message\" name=\"message\" class=\"form-control\" required></textarea>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
            </form>
        </section>
        {% endblock %}
    </main>
    <footer class=\"bg-primary text-white text-center py-3\">
        <p>&copy; 2025 Filmoteca. Tous droits réservés.</p>
    </footer>


</body>

</html>", "homepage.html.twig", "/var/www/filmoteca/src/views/homepage.html.twig");
    }
}
