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

/* modular/services_articles-static.html.twig */
class __TwigTemplate_e2430586086ca56c27bfc1eb0e4737f5dfd60479b6de43b4d68c51ed5aa201f2 extends \Twig\Template
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
        echo "<div class=\"services__articles white-margin\">
  <div class=\"services__articles__body\">
    ";
        // line 3
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
  </div>
  <div class=\"services__articles__sidebar\">
  <h4>";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h4>
      ";
        // line 7
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 8
        echo "      ";
        // line 9
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 10
            echo "        ";
            $this->loadTemplate("modular/services_articles-static_services.html.twig", "modular/services_articles-static.html.twig", 10)->display(twig_array_merge($context, ["@self.parent" =>             // line 11
($context["page"] ?? null), "page" =>             // line 12
$context["child"]]));
            // line 14
            echo "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/services_articles-static.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 15,  71 => 14,  69 => 12,  68 => 11,  66 => 10,  48 => 9,  46 => 8,  44 => 7,  40 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"services__articles white-margin\">
  <div class=\"services__articles__body\">
    {{ page.content }}
  </div>
  <div class=\"services__articles__sidebar\">
  <h4>{{ page.title}}</h4>
      {% set collection = page.collection() %}
      {# Render the pagination list #}
      {% for child in collection %}
        {% include 'modular/services_articles-static_services.html.twig' with {
          '@self.parent' : page,
          'page' : child
        } %}
      {% endfor %}
  </div>
</div>
", "modular/services_articles-static.html.twig", "C:\\Users\\Jovanie\\Documents\\Web_Development\\professional-outdoor-solutions\\professional-outdoor-solutions-grav-dev\\user\\themes\\professional-outdoor-solutions-grav-theme\\templates\\modular\\services_articles-static.html.twig");
    }
}
