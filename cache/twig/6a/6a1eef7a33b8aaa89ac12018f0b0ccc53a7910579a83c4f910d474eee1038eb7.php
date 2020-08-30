<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modular/services_articles_nav_link.html.twig */
class __TwigTemplate_cd0a6852e6ca54eb618d5248fe9ca4715dbcc52f73d7921bcd6e6f7af8b1ebdc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<li class=\"services__articles__nav__li\" id=\"";
        echo $this->getAttribute(($context["page"] ?? null), "slug", []);
        echo "\">
  ";
        // line 2
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "modular/services_articles_nav_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"services__articles__nav__li\" id=\"{{ page.slug }}\">
  {{ page.title }}
</li>
", "modular/services_articles_nav_link.html.twig", "C:\\Users\\Jovanie\\Documents\\Web_Development\\professional-outdoor-solutions\\professional-outdoor-solutions-grav-dev\\user\\themes\\professional-outdoor-solutions-grav-theme\\templates\\modular\\services_articles_nav_link.html.twig");
    }
}
