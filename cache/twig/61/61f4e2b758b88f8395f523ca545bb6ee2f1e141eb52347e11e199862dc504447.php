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

/* modular/home_carousel.html.twig */
class __TwigTemplate_dce8743831e18a0a931451802d249722994122bd482a03d78f427314954f4910 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'slides' => [$this, 'block_slides'],
            'thumbnails' => [$this, 'block_thumbnails'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        // line 5
        echo "<script type=\"“text/javascript”\" src=\"“";
        echo ($context["theme_dir"] ?? null);
        echo "\" /js/pureJSCarousel.js”></script>

<div class=\"row outdoor_slider white-margin\" id=\"outdoor_slider\">
  <div class=\"outdoor_slider__wrapper\">
    <div id=\"outdoor_slider__wrapper__slides\" class=\"outdoor_slider__wrapper__slides\">
      ";
        // line 10
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 11
        echo "
      ";
        // line 12
        $this->displayBlock('slides', $context, $blocks);
        // line 21
        echo "
    </div>

    <a id=\"outdoor_slider__wrapper__prev\" class=\"control prev noselect outdoor_slider__wrapper__prev\">
      <i class=\"fas fa-chevron-left outdoor_slider__wrapper__prev__svg\"></i>
    </a>
    <a id=\"outdoor_slider__wrapper__next\" class=\"control next noselect outdoor_slider__wrapper__next\">
      <i class=\"fas fa-chevron-right outdoor_slider__wrapper__next__svg\"></i>
    </a>

    <!--<div class=\"outdoor_slider__wrapper__header\"> <h1 class=\"outdoor_slider__wrapper__header__h1 noselect\">Turf<br>Specialists</h1> <div class=\"outdoor_slider__wrapper__header__cta noselect\"> <a href=\"/projects/\"> <button type=\"button\"
    name=\"outdoor_slider__wrapper__header__cta__button\" class=\"outdoor_slider__wrapper__header__cta__button\"> <h4> &nbsp;More Projects </h4> </button> </a> </div> </div>-->
    <div id=\"outdoor_slider__wrapper__thumbnails\" class=\"outdoor_slider__wrapper__thumbnails noselect\">

      ";
        // line 35
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 36
        echo "
      ";
        // line 37
        $this->displayBlock('thumbnails', $context, $blocks);
        // line 46
        echo "    </div>
  </div>

  ";
        // line 49
        $this->displayBlock('bottom', $context, $blocks);
        // line 52
        echo "

</div>
";
    }

    // line 1
    public function block_javascripts($context, array $blocks = [])
    {
        // line 2
        echo "  ";
        $this->getAttribute(        // line 3
($context["assets"] ?? null), "addJs", [0 => "theme://js/pureJSCarousel.js", 1 => ["group" => "bottom"]], "method");
    }

    // line 12
    public function block_slides($context, array $blocks = [])
    {
        // line 13
        echo "        ";
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
            // line 14
            echo "          ";
            $this->loadTemplate("modular/home_carousel_entry.html.twig", "modular/home_carousel.html.twig", 14)->display(twig_array_merge($context, ["home" =>             // line 15
($context["page"] ?? null), "page" =>             // line 16
$context["child"], "truncate" => true]));
            // line 19
            echo "        ";
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
        // line 20
        echo "      ";
    }

    // line 37
    public function block_thumbnails($context, array $blocks = [])
    {
        // line 38
        echo "        ";
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
            // line 39
            echo "          ";
            $this->loadTemplate("modular/home_carousel_thumbnail.html.twig", "modular/home_carousel.html.twig", 39)->display(twig_array_merge($context, ["home" =>             // line 40
($context["page"] ?? null), "page" =>             // line 41
$context["child"], "truncate" => true]));
            // line 44
            echo "        ";
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
        // line 45
        echo "      ";
    }

    // line 49
    public function block_bottom($context, array $blocks = [])
    {
        // line 50
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "modular/home_carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 50,  186 => 49,  182 => 45,  168 => 44,  166 => 41,  165 => 40,  163 => 39,  145 => 38,  142 => 37,  138 => 20,  124 => 19,  122 => 16,  121 => 15,  119 => 14,  101 => 13,  98 => 12,  94 => 3,  92 => 2,  89 => 1,  82 => 52,  80 => 49,  75 => 46,  73 => 37,  70 => 36,  68 => 35,  52 => 21,  50 => 12,  47 => 11,  45 => 10,  36 => 5,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block javascripts %}
  {% do
    assets.addJs('theme://js/pureJSCarousel.js', {group: 'bottom'}) %}
{% endblock %}
<script type=\"“text/javascript”\" src=\"“{{ theme_dir }}\" /js/pureJSCarousel.js”></script>

<div class=\"row outdoor_slider white-margin\" id=\"outdoor_slider\">
  <div class=\"outdoor_slider__wrapper\">
    <div id=\"outdoor_slider__wrapper__slides\" class=\"outdoor_slider__wrapper__slides\">
      {% set collection = page.collection() %}

      {% block slides %}
        {% for child in collection %}
          {% include 'modular/home_carousel_entry.html.twig' with {
            'home' : page,
            'page' : child,
            'truncate' : true
          } %}
        {% endfor %}
      {% endblock %}

    </div>

    <a id=\"outdoor_slider__wrapper__prev\" class=\"control prev noselect outdoor_slider__wrapper__prev\">
      <i class=\"fas fa-chevron-left outdoor_slider__wrapper__prev__svg\"></i>
    </a>
    <a id=\"outdoor_slider__wrapper__next\" class=\"control next noselect outdoor_slider__wrapper__next\">
      <i class=\"fas fa-chevron-right outdoor_slider__wrapper__next__svg\"></i>
    </a>

    <!--<div class=\"outdoor_slider__wrapper__header\"> <h1 class=\"outdoor_slider__wrapper__header__h1 noselect\">Turf<br>Specialists</h1> <div class=\"outdoor_slider__wrapper__header__cta noselect\"> <a href=\"/projects/\"> <button type=\"button\"
    name=\"outdoor_slider__wrapper__header__cta__button\" class=\"outdoor_slider__wrapper__header__cta__button\"> <h4> &nbsp;More Projects </h4> </button> </a> </div> </div>-->
    <div id=\"outdoor_slider__wrapper__thumbnails\" class=\"outdoor_slider__wrapper__thumbnails noselect\">

      {% set collection = page.collection() %}

      {% block thumbnails %}
        {% for child in collection %}
          {% include 'modular/home_carousel_thumbnail.html.twig' with {
            'home' : page,
            'page' : child,
            'truncate' : true
          } %}
        {% endfor %}
      {% endblock %}
    </div>
  </div>

  {% block bottom %}
    {{ assets.js('bottom')|raw }}
  {% endblock %}


</div>
", "modular/home_carousel.html.twig", "C:\\Users\\Jovanie\\Documents\\Web_Development\\professional-outdoor-solutions\\professional-outdoor-solutions-grav-dev\\user\\themes\\professional-outdoor-solutions-grav-theme\\templates\\modular\\home_carousel.html.twig");
    }
}
