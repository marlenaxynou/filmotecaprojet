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
class __TwigTemplate_8c1086f57044d05a9afb44103764a294 extends Template
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
    <title>Liste des Films</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">  
</head>
<body>
    <div class=\"container mt-5\">
        <h1 class=\"text-center text-primary\">Liste des films</h1>
        <ul class=\"list-group\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["films"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 14
            yield "                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <a href=\"/films/read?id=";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 15), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "title", [], "any", false, false, false, 15), "html", null, true);
            yield "</a>
                    <span class=\"badge bg-primary rounded-pill\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "year", [], "any", false, false, false, 16), "html", null, true);
            yield "</span>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['film'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "        </ul>
    </div>

</body>
</html>
";
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
        return array (  78 => 19,  69 => 16,  63 => 15,  60 => 14,  56 => 13,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Liste des Films</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">  
</head>
<body>
    <div class=\"container mt-5\">
        <h1 class=\"text-center text-primary\">Liste des films</h1>
        <ul class=\"list-group\">
            {% for film in films %}
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    <a href=\"/films/read?id={{ film.id }}\" class=\"text-decoration-none text-dark\">{{ film.title }}</a>
                    <span class=\"badge bg-primary rounded-pill\">{{ film.year }}</span>
                </li>
            {% endfor %}
        </ul>
    </div>

</body>
</html>
", "films/list.html.twig", "/var/www/filmoteca/src/views/films/list.html.twig");
    }
}
