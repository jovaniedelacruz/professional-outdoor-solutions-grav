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

/* partials/navigation.html.twig */
class __TwigTemplate_953ceab31fd12f9863685d3bd9bd563e5a81fb7a4612d3a108d775ed4fb7819d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 20
        echo "<script>
  \$(document).ready(function() {

    \$(\".header__button__icon\").click(function() {
      if (\$(\".header__nav__list\").hasClass('header__nav__list--hidden')) {
        \$(\".header__nav__list\").slideDown();
        \$(\".header__nav__list\").removeClass('header__nav__list--hidden');
      } else {
        \$(\".header__nav__list\").slideUp();
        \$(\".header__nav__list\").addClass('header__nav__list--hidden');
      }
    });
    if (\$(window).width() <= 768) {
      \$(\".header__nav__list\").addClass('header__nav__list--hidden');
    } else {
      \$(\".header__nav__list\").removeClass('header__nav__list--hidden');
    }

  });
  \$(window).resize(function() {
    if (\$(window).width() <= 751) {
      \$(\".header__nav__list\").hide();
      \$(\".header__nav__list\").addClass('header__nav__list--hidden');
    } else {
      \$(\".header__nav__list\").show();
      \$(\".header__nav__list\").removeClass('header__nav__list--hidden');
    }
  });
</script>
";
    }

    // line 1
    public function block_header($context, array $blocks = [])
    {
        // line 2
        echo "  <div class=\"header\">
      ";
        // line 3
        $this->loadTemplate("partials/logo.html.twig", "partials/navigation.html.twig", 3)->display($context);
        // line 4
        echo "      <div class=\"header__button\">
        <a href=\"#\" class=\"header__button__icon\">
          <i class=\"fas fa-bars\"></i>
        </a>
      </div>
      ";
        // line 9
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 18
        echo "  </div>
";
    }

    // line 9
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 10
        echo "        <nav class=\"header__nav\">
          ";
        // line 11
        $context["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/navigation.html.twig", 11)->unwrap();
        // line 12
        echo "
          <ul class=\"header__nav__list\" ";
        // line 13
        echo ((($context["tree"] ?? null)) ? ("class=\"tree\"") : (""));
        echo ">
            ";
        // line 14
        echo $this->getAttribute(($context["macros"] ?? null), "nav_loop", [0 => ($context["pages"] ?? null)], "method");
        echo "
          </ul>
        </nav>
      ";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 14,  100 => 13,  97 => 12,  95 => 11,  92 => 10,  89 => 9,  84 => 18,  82 => 9,  75 => 4,  73 => 3,  70 => 2,  67 => 1,  34 => 20,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}
  <div class=\"header\">
      {% include 'partials/logo.html.twig' %}
      <div class=\"header__button\">
        <a href=\"#\" class=\"header__button__icon\">
          <i class=\"fas fa-bars\"></i>
        </a>
      </div>
      {% block header_navigation %}
        <nav class=\"header__nav\">
          {% import 'macros/macros.html.twig' as macros %}

          <ul class=\"header__nav__list\" {{ tree ? 'class=\"tree\"' : '' }}>
            {{ macros.nav_loop(pages) }}
          </ul>
        </nav>
      {% endblock %}
  </div>
{% endblock %}
<script>
  \$(document).ready(function() {

    \$(\".header__button__icon\").click(function() {
      if (\$(\".header__nav__list\").hasClass('header__nav__list--hidden')) {
        \$(\".header__nav__list\").slideDown();
        \$(\".header__nav__list\").removeClass('header__nav__list--hidden');
      } else {
        \$(\".header__nav__list\").slideUp();
        \$(\".header__nav__list\").addClass('header__nav__list--hidden');
      }
    });
    if (\$(window).width() <= 768) {
      \$(\".header__nav__list\").addClass('header__nav__list--hidden');
    } else {
      \$(\".header__nav__list\").removeClass('header__nav__list--hidden');
    }

  });
  \$(window).resize(function() {
    if (\$(window).width() <= 751) {
      \$(\".header__nav__list\").hide();
      \$(\".header__nav__list\").addClass('header__nav__list--hidden');
    } else {
      \$(\".header__nav__list\").show();
      \$(\".header__nav__list\").removeClass('header__nav__list--hidden');
    }
  });
</script>
", "partials/navigation.html.twig", "C:\\Users\\Jovanie\\Documents\\GitHub\\professional-outdoor-solutions-grav\\user\\themes\\professional-outdoor-solutions\\templates\\partials\\navigation.html.twig");
    }
}
