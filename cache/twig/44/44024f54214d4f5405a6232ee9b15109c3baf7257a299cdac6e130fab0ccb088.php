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

/* partials/base_lessfooter.html.twig */
class __TwigTemplate_db140efb1469c7e4f68dd7113977c80cfc7fae8c4e082a51d7c10d05ce7fe5dc extends \Twig\Template
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
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
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
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
    ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "
    ";
        // line 34
        $this->displayBlock('assets', $context, $blocks);
        // line 38
        echo "
  </head>

  <body id=\"top\" class=\"";
        // line 41
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">

    ";
        // line 43
        $this->loadTemplate("partials/navigation.html.twig", "partials/base_lessfooter.html.twig", 43)->display($context);
        // line 44
        echo "
    ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "
    ";
        // line 53
        $this->loadTemplate("partials/footer_lessfooter.html.twig", "partials/base_lessfooter.html.twig", 53)->display($context);
        // line 54
        echo "
    ";
        // line 55
        $this->displayBlock('bottom', $context, $blocks);
        // line 58
        echo "
  </body>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        // line 7
        echo "      <meta charset=\"utf-8\"/>
      <title>
        ";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo "
          |
        ";
        }
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      ";
        // line 15
        $this->loadTemplate("partials/metadata.html.twig", "partials/base_lessfooter.html.twig", 15)->display($context);
        // line 16
        echo "
      <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\"/>
      <link rel=\"canonical\" href=\"";
        // line 18
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\"/>
    ";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 22
        echo "      ";
        $this->getAttribute(        // line 23
($context["assets"] ?? null), "addCss", [0 => "theme://css/reset.css", 1 => 98], "method");
        // line 24
        echo "      ";
        $this->getAttribute(        // line 25
($context["assets"] ?? null), "addCss", [0 => "theme://scss/theme.min.css", 1 => 98], "method");
        // line 26
        echo "    ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        // line 29
        echo "      <script defer=\"defer\" src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>
      ";
        // line 30
        $this->getAttribute(        // line 31
($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 32
        echo "    ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 34
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 35
        echo "      ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
      ";
        // line 36
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 45
    public function block_body($context, array $blocks = [])
    {
        // line 46
        echo "      <section class=\"body\">
        <div class=\"wrapper main-wrapper padding\">
          ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "        </div>
      </section>
    ";
    }

    // line 48
    public function block_content($context, array $blocks = [])
    {
    }

    // line 55
    public function block_bottom($context, array $blocks = [])
    {
        // line 56
        echo "      ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/base_lessfooter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 56,  203 => 55,  198 => 48,  192 => 49,  190 => 48,  186 => 46,  183 => 45,  176 => 36,  171 => 35,  168 => 34,  159 => 32,  157 => 31,  156 => 30,  153 => 29,  150 => 28,  146 => 26,  144 => 25,  142 => 24,  140 => 23,  138 => 22,  135 => 21,  129 => 18,  125 => 17,  122 => 16,  120 => 15,  113 => 11,  106 => 9,  102 => 7,  99 => 6,  92 => 58,  90 => 55,  87 => 54,  85 => 53,  82 => 52,  80 => 45,  77 => 44,  75 => 43,  70 => 41,  65 => 38,  63 => 34,  60 => 33,  58 => 28,  55 => 27,  53 => 21,  50 => 20,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
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
      <meta charset=\"utf-8\"/>
      <title>
        {% if header.title %}{{ header.title|e('html') }}
          |
        {% endif %}{{ site.title|e('html') }}</title>

      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      {% include 'partials/metadata.html.twig' %}

      <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\"/>
      <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>
    {% endblock head %}

    {% block stylesheets %}
      {% do
        assets.addCss('theme://css/reset.css', 98) %}
      {% do
        assets.addCss('theme://scss/theme.min.css', 98) %}
    {% endblock %}

    {% block javascripts %}
      <script defer=\"defer\" src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>
      {% do
        assets.addJs('jquery', 100) %}
    {% endblock %}

    {% block assets deferred %}
      {{ assets.css()|raw }}
      {{ assets.js()|raw }}
    {% endblock %}

  </head>

  <body id=\"top\" class=\"{{ page.header.body_classes }}\">

    {% include 'partials/navigation.html.twig' %}

    {% block body %}
      <section class=\"body\">
        <div class=\"wrapper main-wrapper padding\">
          {% block content %}{% endblock %}
        </div>
      </section>
    {% endblock %}

    {% include 'partials/footer_lessfooter.html.twig' %}

    {% block bottom %}
      {{ assets.js('bottom')|raw }}
    {% endblock %}

  </body>
", "partials/base_lessfooter.html.twig", "C:\\Users\\Jovanie\\Documents\\Web_Development\\professional-outdoor-solutions\\professional-outdoor-solutions-grav-dev\\user\\themes\\professional-outdoor-solutions-grav-theme\\templates\\partials\\base_lessfooter.html.twig");
    }
}
