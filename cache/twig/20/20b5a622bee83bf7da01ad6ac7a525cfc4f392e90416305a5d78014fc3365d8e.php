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

/* modular/home_carousel_entry.html.twig */
class __TwigTemplate_ca2abc8f67a39b1d1f0e20d15c9ad4e24830ce4368cf344be85c0c20dcc88074 extends \Twig\Template
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
        echo "<span class=\"outdoor_slider__wrapper__slides__item\" id=\"outdoor_slider__wrapper__slides__item--0";
        echo $this->getAttribute(($context["loop"] ?? null), "index0", []);
        echo "\">
  <img src=\"";
        // line 2
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "url", []);
        echo " \" class=\"outdoor_slider__wrapper__slides__item__img\"/>
  <div class=\"outdoor_slider__wrapper__slides__item__info\">
    <h1 class=\"outdoor_slider__wrapper__slides__item__info__h1 noselect\">
    ";
        // line 5
        echo $this->getAttribute(twig_split_filter($this->env, (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), "<h1>"), 1, [], "array", true, true)) ? (_twig_default_filter($this->getAttribute(twig_split_filter($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), "<h1>"), 1, [], "array"))) : ("")), "</h1>"), 0, [], "array");
        echo "
    <div class=\"outdoor_slider__wrapper__slides__item__info__cta noselect\">
      <a href=\"/projects/\">
        <button type=\"button\" name=\"outdoor_slider__wrapper__slides__item__info__cta__button\" class=\"outdoor_slider__wrapper__slides__item__info__cta__button\">
          <h4 class=\"outdoor_slider__wrapper__slides__item__info__cta__button__h4\">
            &nbsp;More Projects
          </h4>
        </button>
      </a>
    </div>
  </div>
</span>
";
    }

    public function getTemplateName()
    {
        return "modular/home_carousel_entry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<span class=\"outdoor_slider__wrapper__slides__item\" id=\"outdoor_slider__wrapper__slides__item--0{{loop.index0}}\">
  <img src=\"{{page.media.images|first.url }} \" class=\"outdoor_slider__wrapper__slides__item__img\"/>
  <div class=\"outdoor_slider__wrapper__slides__item__info\">
    <h1 class=\"outdoor_slider__wrapper__slides__item__info__h1 noselect\">
    {{ page.content|split('<h1>')[1]|default|raw|split('</h1>')[0] }}
    <div class=\"outdoor_slider__wrapper__slides__item__info__cta noselect\">
      <a href=\"/projects/\">
        <button type=\"button\" name=\"outdoor_slider__wrapper__slides__item__info__cta__button\" class=\"outdoor_slider__wrapper__slides__item__info__cta__button\">
          <h4 class=\"outdoor_slider__wrapper__slides__item__info__cta__button__h4\">
            &nbsp;More Projects
          </h4>
        </button>
      </a>
    </div>
  </div>
</span>
", "modular/home_carousel_entry.html.twig", "C:\\Users\\Jovanie\\Documents\\Web_Development\\professional-outdoor-solutions\\professional-outdoor-solutions-grav-dev\\user\\themes\\professional-outdoor-solutions-grav-theme\\templates\\modular\\home_carousel_entry.html.twig");
    }
}
