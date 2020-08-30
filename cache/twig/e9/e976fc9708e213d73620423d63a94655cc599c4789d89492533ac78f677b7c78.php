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

/* modular/home_carousel_thumbnail.html.twig */
class __TwigTemplate_d85966e2320086350d4d30f00a369b91557042bddcf8d92fadc7bad90a6cab44 extends \Twig\Template
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
        echo "<div class=\"outdoor_slider__wrapper__thumbnails__card slideTo\" data-index-number=\"";
        echo $this->getAttribute(($context["loop"] ?? null), "index0", []);
        echo "\" id=\"outdoor_slider__wrapper__thumbnails__card--0";
        echo $this->getAttribute(($context["loop"] ?? null), "index0", []);
        echo "\">
  <div class=\"outdoor_slider__wrapper__thumbnails__card__thumb\">
    <img class=\"outdoor_slider__wrapper__thumbnails__card__thumb__img\" src=\"";
        // line 3
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "url", []);
        echo "\" />
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/home_carousel_thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"outdoor_slider__wrapper__thumbnails__card slideTo\" data-index-number=\"{{loop.index0}}\" id=\"outdoor_slider__wrapper__thumbnails__card--0{{loop.index0}}\">
  <div class=\"outdoor_slider__wrapper__thumbnails__card__thumb\">
    <img class=\"outdoor_slider__wrapper__thumbnails__card__thumb__img\" src=\"{{page.media.images|first.url }}\" />
  </div>
</div>
", "modular/home_carousel_thumbnail.html.twig", "C:\\Users\\Jovanie\\Documents\\Web_Development\\professional-outdoor-solutions\\professional-outdoor-solutions-grav-dev\\user\\themes\\professional-outdoor-solutions-grav-theme\\templates\\modular\\home_carousel_thumbnail.html.twig");
    }
}
