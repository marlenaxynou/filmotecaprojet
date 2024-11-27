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
class __TwigTemplate_5154cd0b186e0498e0ee8722333e9ab1 extends Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>
        ";
        // line 8
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 9
        yield "    </title>
    <link rel=\"stylesheet\" href=\"/style/style1.css\">
    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('stylesheet', $context, $blocks);
        // line 12
        yield "</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href=\"/\" class=\"nav-link\">Home</a></li>
                <li><a href=\"/films\" class=\"nav-link\">Films</a></li>
                <li><a href=\"/contact\" class=\"nav-link\">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        ";
        // line 27
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 28
        yield "    </main>

    <footer>
        <p>Copyright © 2024 Filmoteca. All rights reserved.</p>
    </footer>

    <script src=\"/scripts/navigation.js\"></script>

</body>

</html>";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Filmoteca";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheet(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  117 => 27,  107 => 11,  96 => 8,  81 => 28,  79 => 27,  62 => 12,  60 => 11,  56 => 9,  54 => 8,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>
        {% block title %}Filmoteca{% endblock %}
    </title>
    <link rel=\"stylesheet\" href=\"/style/style1.css\">
    {% block stylesheet %}{% endblock %}
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href=\"/\" class=\"nav-link\">Home</a></li>
                <li><a href=\"/films\" class=\"nav-link\">Films</a></li>
                <li><a href=\"/contact\" class=\"nav-link\">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        {% block body %}{% endblock %}
    </main>

    <footer>
        <p>Copyright © 2024 Filmoteca. All rights reserved.</p>
    </footer>

    <script src=\"/scripts/navigation.js\"></script>

</body>

</html>", "homepage.html.twig", "/var/www/filmoteca/src/views/homepage.html.twig");
    }
}
