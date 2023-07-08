<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html.twig */
class __TwigTemplate_032ab60619b2c5054920ce3c29b12794 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["message"] ?? null)) {
            // line 2
            echo "    <script>
        alert('";
            // line 3
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "');
    </script>
";
        }
        // line 6
        echo "
<h1>Bienvenu sur notre TD MVC !</h1>
<p>Réalisé par Cedric DOUSSET et Jeremy AUBRY</p>
<h2><a href=\"/register\">click pour créer un nouveau compte !</a></h2>
<h2>Liste des utilisateurs enregistré:</h2>
<ul>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 13
            echo "    <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 13), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  60 => 13,  56 => 12,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if message %}
    <script>
        alert('{{ message }}');
    </script>
{% endif %}

<h1>Bienvenu sur notre TD MVC !</h1>
<p>Réalisé par Cedric DOUSSET et Jeremy AUBRY</p>
<h2><a href=\"/register\">click pour créer un nouveau compte !</a></h2>
<h2>Liste des utilisateurs enregistré:</h2>
<ul>
{% for user in users %}
    <li>{{ user.username }}</li>
{% endfor %}
</ul>", "index.html.twig", "/workspaces/MVC_PHP_TP/templates/index.html.twig");
    }
}
