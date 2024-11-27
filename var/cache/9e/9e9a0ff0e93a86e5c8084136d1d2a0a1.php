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
class __TwigTemplate_0f75339a42ef27f0bde58add939616fe extends Template
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
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"/style/style2.css\">
";
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
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
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 26), "html", null, true);
        yield "</h2>
        </div>
        <div class=\"card-body\">
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>ID :</strong>
                    <span>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "id", [], "any", false, false, false, 32), "html", null, true);
        yield "</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>Titre :</strong>
                    <span>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 36), "html", null, true);
        yield "</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>Année :</strong>
                    <span>";
        // line 40
        (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "year", [], "any", false, false, false, 40))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "year", [], "any", false, false, false, 40), "html", null, true)) : (yield "N/A"));
        yield "</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>Genre :</strong>
                    <span>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "type", [], "any", false, false, false, 44), "html", null, true);
        yield "</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>Synopsis :</strong>
                    <span>";
        // line 48
        (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "synopsis", [], "any", false, false, false, 48))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "synopsis", [], "any", false, false, false, 48), "html", null, true)) : (yield "Aucun synopsis disponible."));
        yield "</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>Réalisateur :</strong>
                    <span>";
        // line 52
        (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "director", [], "any", false, false, false, 52))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "director", [], "any", false, false, false, 52), "html", null, true)) : (yield "Inconnu"));
        yield "</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <strong>Créé le :</strong>
                    <span>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "created_at", [], "any", false, false, false, 56), "d/m/Y H:i"), "html", null, true);
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
        return array (  155 => 56,  148 => 52,  141 => 48,  134 => 44,  127 => 40,  120 => 36,  113 => 32,  104 => 26,  90 => 14,  83 => 13,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homepage.html.twig' %}

{% block title %}
    Détails du Film - {{ film.title }}
{% endblock %}

{% block stylesheet %}
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"/style/style2.css\">
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
{% endblock %}
", "films/detail.html.twig", "/var/www/filmoteca/src/views/films/detail.html.twig");
    }
}
