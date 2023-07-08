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

/* register.html.twig */
class __TwigTemplate_49b4ecbbf4d103d7856bcd2666ed1950 extends Template
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
        echo "<form method=\"post\" action=\"/register\">
    <input type=\"text\" name=\"username\" placeholder=\"Username\" required>
    <input type=\"email\" name=\"email\" placeholder=\"Email\" required>
    <input type=\"password\" name=\"password\" placeholder=\"Password\" required>
    <input type=\"submit\" value=\"Sign Up\">
</form>
";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" action=\"/register\">
    <input type=\"text\" name=\"username\" placeholder=\"Username\" required>
    <input type=\"email\" name=\"email\" placeholder=\"Email\" required>
    <input type=\"password\" name=\"password\" placeholder=\"Password\" required>
    <input type=\"submit\" value=\"Sign Up\">
</form>
", "register.html.twig", "/workspaces/MVC_PHP_TP/templates/register.html.twig");
    }
}
