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

/* partials/blog/blog-feed-entry.html.twig */
class __TwigTemplate_a692c1ff7c3a9c9a8fd93c0b440755139eea53e1b6c45afd8e00ad73eb49ecc7 extends \Twig\Template
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
        echo "<!-- <div class=\"news__feed__entries\"> &nbsp; </div>-->

<div class=\"news__feed__entries__article\">
  <div class=\"news__feed__entries__article__banner\">
    ";
        // line 5
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 6
        echo "    ";
        if (($context["image"] ?? null)) {
            // line 7
            echo "      <a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">
        <img src=\"";
            // line 8
            echo $this->getAttribute(($context["image"] ?? null), "url", []);
            echo "\" class=\"news__feed__entries__article__banner__img\" alt=\"\">
      </a>
    ";
        }
        // line 11
        echo "  </div>
  <div class=\"news__feed__entries__article__text\">
    <h3 class=\"news__feed__entries__article__text__title\">";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h3>
    <p class=\"news__feed__entries__article__text__date\">
      <span>
        <time class=\"date\" datetime=\"";
        // line 16
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "M d Y");
        echo "\">
          <span>";
        // line 17
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "M");
        echo "</span>
          <span>";
        // line 18
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d");
        echo "</span>
          <span>";
        // line 19
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "Y");
        echo "</span>
        </time>
      </span>
    </p>
    <div class=\"news__feed__entries__article__text__blurb\">
          ";
        // line 24
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "content", []));
        echo "
    </div>
    <a href=\"";
        // line 26
        echo $this->getAttribute(($context["page"] ?? null), "url", []);
        echo "\" class=\"news__feed__entries__article__text__button\">
      <div class=\"news__feed__entries__article__text__button__text\">
        <span>Read More</span>
      </div>
    </a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog/blog-feed-entry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 26,  82 => 24,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  56 => 13,  52 => 11,  46 => 8,  41 => 7,  38 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- <div class=\"news__feed__entries\"> &nbsp; </div>-->

<div class=\"news__feed__entries__article\">
  <div class=\"news__feed__entries__article__banner\">
    {% set image = page.media.images | first %}
    {% if image %}
      <a href=\"{{ page.url }}\">
        <img src=\"{{ image.url }}\" class=\"news__feed__entries__article__banner__img\" alt=\"\">
      </a>
    {% endif %}
  </div>
  <div class=\"news__feed__entries__article__text\">
    <h3 class=\"news__feed__entries__article__text__title\">{{ page.title }}</h3>
    <p class=\"news__feed__entries__article__text__date\">
      <span>
        <time class=\"date\" datetime=\"{{ page.date|date(\"M d Y\")}}\">
          <span>{{ page.date|date(\"M\") }}</span>
          <span>{{ page.date|date(\"d\") }}</span>
          <span>{{ page.date|date(\"Y\") }}</span>
        </time>
      </span>
    </p>
    <div class=\"news__feed__entries__article__text__blurb\">
          {{ page.content|striptags  }}
    </div>
    <a href=\"{{ page.url }}\" class=\"news__feed__entries__article__text__button\">
      <div class=\"news__feed__entries__article__text__button__text\">
        <span>Read More</span>
      </div>
    </a>
  </div>
</div>
", "partials/blog/blog-feed-entry.html.twig", "C:\\Users\\Jovanie\\Documents\\Web_Development\\professional-outdoor-solutions\\professional-outdoor-solutions-grav-dev\\user\\themes\\professional-outdoor-solutions-grav-theme\\templates\\partials\\blog\\blog-feed-entry.html.twig");
    }
}
