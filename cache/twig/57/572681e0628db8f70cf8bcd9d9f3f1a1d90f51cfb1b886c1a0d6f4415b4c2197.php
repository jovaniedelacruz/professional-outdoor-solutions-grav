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

/* modular/services_banner.html.twig */
class __TwigTemplate_80d4e9b08835c6286753983a107a0c83006689d1b64b6329eeb3ea8bce4425b4 extends \Twig\Template
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
        echo "<div class=\"services__banner white-margin\">
  <img src=\"";
        // line 2
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "url", []);
        echo " \" class=\"services__banner__img\"/>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/services_banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"services__banner white-margin\">
  <img src=\"{{page.media.images|first.url }} \" class=\"services__banner__img\"/>
</div>
", "modular/services_banner.html.twig", "C:\\Users\\Jovanie\\Documents\\Web_Development\\professional-outdoor-solutions\\professional-outdoor-solutions-grav-dev\\user\\themes\\professional-outdoor-solutions-grav-theme\\templates\\modular\\services_banner.html.twig");
    }
}
