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

/* modular/services_articles.html.twig */
class __TwigTemplate_e41c63225f66fb8ddcb4e8470b3ed6c7e53551a4b54958aead6ca296a54b6ecb extends \Twig\Template
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
        // line 4
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 5
        echo "    ";
        // line 6
        echo "    ";
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
            // line 7
            echo "      ";
            $this->loadTemplate("modular/services_articles_entry.html.twig", "modular/services_articles.html.twig", 7)->display(twig_array_merge($context, ["@self.parent" =>             // line 8
($context["page"] ?? null), "page" =>             // line 9
$context["child"]]));
            // line 11
            echo "    ";
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
        // line 12
        echo "  </div>
  <div class=\"services__articles__nav\">
  <h4>";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h4>
    <ul>
      ";
        // line 16
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 17
        echo "      ";
        // line 18
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
            // line 19
            echo "        ";
            $this->loadTemplate("modular/services_articles_nav_link.html.twig", "modular/services_articles.html.twig", 19)->display(twig_array_merge($context, ["@self.parent" =>             // line 20
($context["page"] ?? null), "page" =>             // line 21
$context["child"]]));
            // line 23
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
        // line 24
        echo "    </ul>
  </div>
</div>
<script type=\"text/javascript\">
  \$(\".services__articles__body__entry:first-child\").addClass(\"active\");
  \$(\".services__articles__nav__li:first-child\").addClass(\"active\");
  \$(\".services__articles__nav__li\").click(function() {
    var serviceArticleId = \$(this).attr('id');
    \$(\".services__articles__nav__li.active\").removeClass(\"active\");
    \$(this).addClass(\"active\");

    \$(\".services__articles__body__entry.active\").removeClass(\"active\");
    \$(\".services__articles__body__entry#\" + serviceArticleId).addClass(\"active\");
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "modular/services_articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 24,  112 => 23,  110 => 21,  109 => 20,  107 => 19,  89 => 18,  87 => 17,  85 => 16,  80 => 14,  76 => 12,  62 => 11,  60 => 9,  59 => 8,  57 => 7,  39 => 6,  37 => 5,  35 => 4,  30 => 1,);
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

    {% set collection = page.collection() %}
    {# Render the pagination list #}
    {% for child in collection %}
      {% include 'modular/services_articles_entry.html.twig' with {
        '@self.parent' : page,
        'page' : child
      } %}
    {% endfor %}
  </div>
  <div class=\"services__articles__nav\">
  <h4>{{ page.title}}</h4>
    <ul>
      {% set collection = page.collection() %}
      {# Render the pagination list #}
      {% for child in collection %}
        {% include 'modular/services_articles_nav_link.html.twig' with {
          '@self.parent' : page,
          'page' : child
        } %}
      {% endfor %}
    </ul>
  </div>
</div>
<script type=\"text/javascript\">
  \$(\".services__articles__body__entry:first-child\").addClass(\"active\");
  \$(\".services__articles__nav__li:first-child\").addClass(\"active\");
  \$(\".services__articles__nav__li\").click(function() {
    var serviceArticleId = \$(this).attr('id');
    \$(\".services__articles__nav__li.active\").removeClass(\"active\");
    \$(this).addClass(\"active\");

    \$(\".services__articles__body__entry.active\").removeClass(\"active\");
    \$(\".services__articles__body__entry#\" + serviceArticleId).addClass(\"active\");
  });
</script>
", "modular/services_articles.html.twig", "C:\\Users\\Jovanie\\Documents\\Web_Development\\professional-outdoor-solutions\\professional-outdoor-solutions-grav-dev\\user\\themes\\professional-outdoor-solutions-grav-theme\\templates\\modular\\services_articles.html.twig");
    }
}
