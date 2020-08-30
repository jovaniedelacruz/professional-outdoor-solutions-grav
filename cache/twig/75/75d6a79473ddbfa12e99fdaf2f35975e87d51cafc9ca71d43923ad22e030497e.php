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

/* modular/reveal_cards_entry.html.twig */
class __TwigTemplate_0597ad03302fc232d72cf14ff3feedbdb0c8a186142bd0725b30f25d2190edab extends \Twig\Template
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
        if ($this->getAttribute(($context["page"] ?? null), "redirect", [])) {
            // line 2
            echo "  <a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "redirect", []);
            echo "\">
  ";
        } else {
            // line 4
            echo "    <a>
    ";
        }
        // line 6
        echo "
    <div class=\"reveal_cards__entry\" >
      <div class=\"reveal_cards_entry__overlay\">
        <img class=\"reveal_cards_entry__overlay__img\" src=\"";
        // line 9
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "url", []);
        echo "\" alt=\"\">
        <div class=\"reveal_cards_entry__overlay__reveal\">
          <div class=\"reveal_cards_entry__overlay__reveal__title\">
            <span>";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</span>
          </div>
          <div class=\"reveal_cards_entry__overlay__reveal__content\">
          ";
        // line 15
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
          </div>
        </div>
      </div>
    </div>
  </a>
";
    }

    public function getTemplateName()
    {
        return "modular/reveal_cards_entry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  53 => 12,  47 => 9,  42 => 6,  38 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.redirect %}
  <a href=\"{{page.redirect}}\">
  {% else %}
    <a>
    {% endif %}

    <div class=\"reveal_cards__entry\" >
      <div class=\"reveal_cards_entry__overlay\">
        <img class=\"reveal_cards_entry__overlay__img\" src=\"{{page.media.images|first.url }}\" alt=\"\">
        <div class=\"reveal_cards_entry__overlay__reveal\">
          <div class=\"reveal_cards_entry__overlay__reveal__title\">
            <span>{{ page.title }}</span>
          </div>
          <div class=\"reveal_cards_entry__overlay__reveal__content\">
          {{ page.content}}
          </div>
        </div>
      </div>
    </div>
  </a>
", "modular/reveal_cards_entry.html.twig", "C:\\Users\\Jovanie\\Documents\\Web_Development\\professional-outdoor-solutions\\professional-outdoor-solutions-grav-dev\\user\\themes\\professional-outdoor-solutions-grav-theme\\templates\\modular\\reveal_cards_entry.html.twig");
    }
}
