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

/* partials/base.html.twig */
class __TwigTemplate_e4845f4f74718a14cee23b34e35599623b337bb082d118b599f42c1ff1a7be99 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">

<head>
  ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "
  ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
  ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "
  ";
        // line 29
        $this->displayBlock('assets', $context, $blocks);
        // line 33
        echo "
</head>

<body id=\"top\" class=\"";
        // line 36
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">

  ";
        // line 38
        $this->displayBlock('header', $context, $blocks);
        // line 53
        echo "  <script>
  \$(document).ready(function () {

    \$(\".header__wrapper__button_icon\").click(function () {
      if (\$(\"nav ul\").hasClass('hidden')) {
        \$(\"nav ul\").slideDown();
        \$(\"nav ul\").removeClass('hidden');
      } else {
        \$(\"nav ul\").slideUp();
        \$(\"nav ul\").addClass('hidden');
      }
    });
    if (\$(window).width() <= 751) {
      \$(\"nav ul\").addClass('hidden');
    } else {
      \$(\"nav ul\").removeClass('hidden');
    }

  });
  \$(window).resize(function() {
    if (\$(window).width() <= 751) {
      \$(\"nav ul\").hide();
      \$(\"nav ul\").addClass('hidden');
    } else {
      \$(\"nav ul\").show();
      \$(\"nav ul\").removeClass('hidden');
    }
  });
</script>

  ";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 91
        echo "
  ";
        // line 92
        $this->displayBlock('footer', $context, $blocks);
        // line 98
        echo "
  ";
        // line 99
        $this->displayBlock('bottom', $context, $blocks);
        // line 102
        echo "
</body>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        // line 7
        echo "  <meta charset=\"utf-8\" />
  <title>";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  ";
        // line 12
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 12)->display($context);
        // line 13
        echo "
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
  <link rel=\"canonical\" href=\"";
        // line 15
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />
  ";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 19
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/reset.css", 1 => 98], "method");
        // line 20
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://scss/theme.min.css", 1 => 98], "method");
        // line 21
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://scss/progress.min.css", 1 => 98], "method");
        // line 22
        echo "  ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        // line 25
        echo "  <script defer src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>
  ";
        // line 26
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 27
        echo "  ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 29
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 30
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
  ";
        // line 31
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
  ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 38
    public function block_header($context, array $blocks = [])
    {
        // line 39
        echo "  <div class=\"header\">
    <div class=\"header__wrapper\">
      ";
        // line 41
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 41)->display($context);
        // line 42
        echo "      <div class=\"header__wrapper__button\">
        <a href=\"#\" class=\"header__wrapper__button_icon\"><i class=\"fas fa-bars\"></i></a>
      </div>
      ";
        // line 45
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 50
        echo "    </div>
  </div>
  ";
    }

    // line 45
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 46
        echo "      <nav class=\"header__wrapper__nav\">
        ";
        // line 47
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 47)->display($context);
        // line 48
        echo "      </nav>
      ";
    }

    // line 83
    public function block_body($context, array $blocks = [])
    {
        // line 84
        echo "  <section id=\"body\">
    <div class=\"wrapper padding\">
      ";
        // line 86
        $this->displayBlock('content', $context, $blocks);
        // line 88
        echo "    </div>
  </section>
  ";
    }

    // line 86
    public function block_content($context, array $blocks = [])
    {
        // line 87
        echo "      ";
    }

    // line 92
    public function block_footer($context, array $blocks = [])
    {
        // line 93
        echo "  <div class=\"footer text-center\">
    <div class=\"wrapper padding\">
    </div>
  </div>
  ";
    }

    // line 99
    public function block_bottom($context, array $blocks = [])
    {
        // line 100
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 100,  279 => 99,  271 => 93,  268 => 92,  264 => 87,  261 => 86,  255 => 88,  253 => 86,  249 => 84,  246 => 83,  241 => 48,  239 => 47,  236 => 46,  233 => 45,  227 => 50,  225 => 45,  220 => 42,  218 => 41,  214 => 39,  211 => 38,  204 => 31,  199 => 30,  196 => 29,  187 => 27,  185 => 26,  182 => 25,  179 => 24,  175 => 22,  172 => 21,  169 => 20,  166 => 19,  163 => 18,  157 => 15,  153 => 14,  150 => 13,  148 => 12,  137 => 8,  134 => 7,  131 => 6,  124 => 102,  122 => 99,  119 => 98,  117 => 92,  114 => 91,  112 => 83,  80 => 53,  78 => 38,  73 => 36,  68 => 33,  66 => 29,  63 => 28,  61 => 24,  58 => 23,  56 => 18,  53 => 17,  51 => 6,  45 => 3,  42 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">

<head>
  {% block head %}
  <meta charset=\"utf-8\" />
  <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  {% include 'partials/metadata.html.twig' %}

  <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
  <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
  {% endblock head %}

  {% block stylesheets %}
  {% do assets.addCss('theme://css/reset.css', 98) %}
  {% do assets.addCss('theme://scss/theme.min.css', 98) %}
  {% do assets.addCss('theme://scss/progress.min.css', 98) %}
  {% endblock %}

  {% block javascripts %}
  <script defer src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>
  {% do assets.addJs('jquery', 100) %}
  {% endblock %}

  {% block assets deferred %}
  {{ assets.css()|raw }}
  {{ assets.js()|raw }}
  {% endblock %}

</head>

<body id=\"top\" class=\"{{ page.header.body_classes }}\">

  {% block header %}
  <div class=\"header\">
    <div class=\"header__wrapper\">
      {% include 'partials/logo.html.twig' %}
      <div class=\"header__wrapper__button\">
        <a href=\"#\" class=\"header__wrapper__button_icon\"><i class=\"fas fa-bars\"></i></a>
      </div>
      {% block header_navigation %}
      <nav class=\"header__wrapper__nav\">
        {% include 'partials/navigation.html.twig' %}
      </nav>
      {% endblock %}
    </div>
  </div>
  {% endblock %}
  <script>
  \$(document).ready(function () {

    \$(\".header__wrapper__button_icon\").click(function () {
      if (\$(\"nav ul\").hasClass('hidden')) {
        \$(\"nav ul\").slideDown();
        \$(\"nav ul\").removeClass('hidden');
      } else {
        \$(\"nav ul\").slideUp();
        \$(\"nav ul\").addClass('hidden');
      }
    });
    if (\$(window).width() <= 751) {
      \$(\"nav ul\").addClass('hidden');
    } else {
      \$(\"nav ul\").removeClass('hidden');
    }

  });
  \$(window).resize(function() {
    if (\$(window).width() <= 751) {
      \$(\"nav ul\").hide();
      \$(\"nav ul\").addClass('hidden');
    } else {
      \$(\"nav ul\").show();
      \$(\"nav ul\").removeClass('hidden');
    }
  });
</script>

  {% block body %}
  <section id=\"body\">
    <div class=\"wrapper padding\">
      {% block content %}
      {% endblock %}
    </div>
  </section>
  {% endblock %}

  {% block footer %}
  <div class=\"footer text-center\">
    <div class=\"wrapper padding\">
    </div>
  </div>
  {% endblock %}

  {% block bottom %}
  {{ assets.js('bottom')|raw }}
  {% endblock %}

</body>
", "partials/base.html.twig", "C:\\Users\\Jovanie\\Documents\\Git\\Professional-Outdoor-Solutions\\grav\\user\\themes\\professional-outdoor-solutions\\templates\\partials\\base.html.twig");
    }
}
