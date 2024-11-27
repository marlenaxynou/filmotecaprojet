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
        yield "\tDétails du Film -
\t";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheet(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "\t<link rel=\"stylesheet\" href=\"/style/style2.css\">
";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "\t<div class=\"detailsFilm\">
\t\t<h1>Détails du Film :
\t\t\t<br>
\t\t\t<a>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 16), "html", null, true);
        yield "</a>
\t\t</h1>
\t\t<ul>
\t\t\t<li>
\t\t\t\t<strong>ID :</strong>
\t\t\t\t";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "id", [], "any", false, false, false, 21), "html", null, true);
        yield "</li>
\t\t\t<li>
\t\t\t\t<strong>Titre :</strong>
\t\t\t\t";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 24), "html", null, true);
        yield "</li>
\t\t\t<li>
\t\t\t\t<strong>Année :</strong>
\t\t\t\t";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "year", [], "any", false, false, false, 27), "html", null, true);
        yield "</li>
\t\t\t<li>
\t\t\t\t<strong>Genre :</strong>
\t\t\t\t";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "type", [], "any", false, false, false, 30), "html", null, true);
        yield "</li>
\t\t\t<li>
\t\t\t\t<strong>Synopsis :</strong>
\t\t\t\t";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "synopsis", [], "any", false, false, false, 33), "html", null, true);
        yield "</li>
\t\t\t<li>
\t\t\t\t<strong>Réalisateur :</strong>
\t\t\t\t";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "director", [], "any", false, false, false, 36), "html", null, true);
        yield "</li>
\t\t</ul>

\t\t<a href=\"/films\" class=\"btnActions vert\">Retour à la liste des films</a>
\t</div>
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
        return array (  133 => 36,  127 => 33,  121 => 30,  115 => 27,  109 => 24,  103 => 21,  95 => 16,  90 => 13,  83 => 12,  77 => 9,  70 => 8,  63 => 5,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'homepage.html.twig' %}

{% block title %}
\tDétails du Film -
\t{{ film.title }}
{% endblock %}

{% block stylesheet %}
\t<link rel=\"stylesheet\" href=\"/style/style2.css\">
{% endblock %}

{% block body %}
\t<div class=\"detailsFilm\">
\t\t<h1>Détails du Film :
\t\t\t<br>
\t\t\t<a>{{ film.title }}</a>
\t\t</h1>
\t\t<ul>
\t\t\t<li>
\t\t\t\t<strong>ID :</strong>
\t\t\t\t{{ film.id }}</li>
\t\t\t<li>
\t\t\t\t<strong>Titre :</strong>
\t\t\t\t{{ film.title }}</li>
\t\t\t<li>
\t\t\t\t<strong>Année :</strong>
\t\t\t\t{{ film.year }}</li>
\t\t\t<li>
\t\t\t\t<strong>Genre :</strong>
\t\t\t\t{{ film.type }}</li>
\t\t\t<li>
\t\t\t\t<strong>Synopsis :</strong>
\t\t\t\t{{ film.synopsis }}</li>
\t\t\t<li>
\t\t\t\t<strong>Réalisateur :</strong>
\t\t\t\t{{ film.director }}</li>
\t\t</ul>

\t\t<a href=\"/films\" class=\"btnActions vert\">Retour à la liste des films</a>
\t</div>
{% endblock %}", "films/detail.html.twig", "/var/www/filmoteca/src/views/films/detail.html.twig");
    }
}
