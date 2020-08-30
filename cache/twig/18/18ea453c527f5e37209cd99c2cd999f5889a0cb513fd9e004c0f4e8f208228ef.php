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

/* modular/home_cards_entry.html.twig */
class __TwigTemplate_5a94dd25106f5f255e52d8aff4b05d91a75e042d9e9acfa3f2e5bc5e1e3663ca extends \Twig\Template
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
        echo "<a href=\"";
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "\">
  <div class=\"triple-cards__entry\">
    <div class=\"triple-cards__entry__thumbnail gray-reveal\">
      <img src=\"";
        // line 4
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "url", []);
        echo "\">
      <h3>
        ";
        // line 6
        echo $this->getAttribute(twig_split_filter($this->env, (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), "<h3>"), 1, [], "array", true, true)) ? (_twig_default_filter($this->getAttribute(twig_split_filter($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), "<h3>"), 1, [], "array"))) : ("")), "</h3>"), 0, [], "array");
        echo "
      </h3>

    </div>

  </div>

</a>
";
    }

    public function getTemplateName()
    {
        return "modular/home_cards_entry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  37 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"{{page.title}}\">
  <div class=\"triple-cards__entry\">
    <div class=\"triple-cards__entry__thumbnail gray-reveal\">
      <img src=\"{{page.media.images|first.url }}\">
      <h3>
        {{ page.content|split('<h3>')[1]|default|raw|split('</h3>')[0] }}
      </h3>

    </div>

  </div>

</a>
", "modular/home_cards_entry.html.twig", "C:\\Users\\Jovanie\\Documents\\Web_Development\\professional-outdoor-solutions\\professional-outdoor-solutions-grav-dev\\user\\themes\\professional-outdoor-solutions-grav-theme\\templates\\modular\\home_cards_entry.html.twig");
    }
}
