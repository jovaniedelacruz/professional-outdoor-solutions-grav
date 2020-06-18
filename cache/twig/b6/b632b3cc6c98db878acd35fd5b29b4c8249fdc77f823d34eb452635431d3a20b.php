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

/* partials/blog_list_item.html.twig */
class __TwigTemplate_7ba497c2c717ab2c8564eff5ef38b75bc9a61e53cbd2f3d2ce7103437e0933e7 extends \Twig\Template
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
        echo "<div class=\"news__feed__entries__article\">
  <div class=\"news__feed__entries__article__banner\">
    ";
        // line 3
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 4
        echo "    ";
        if (($context["image"] ?? null)) {
            // line 5
            echo "      <a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">
        <img src=\"";
            // line 6
            echo $this->getAttribute(($context["image"] ?? null), "url", []);
            echo "\" class=\"news__feed__entries__article__banner__img\" alt=\"\">
      </a>
    ";
        }
        // line 9
        echo "  </div>
  <div class=\"news__feed__entries__article__text\">
    <h3 class=\"news__feed__entries__article__text__title\">";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h3>
    <p class=\"news__feed__entries__article__text__date\">
      <strong>
        <time class=\"date\" datetime=\"";
        // line 14
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), " c");
        echo "\"=\"c\" )=\")\" }}\"\"=\"}}\" \"\">
          <span>";
        // line 15
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d");
        echo "</span>
          <em>";
        // line 16
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "M");
        echo "</em>
          <em>";
        // line 17
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "Y");
        echo "</em>
        </time>
      </strong>
    </p>
    <p class=\"news__feed__entries__article__text__blurb\">

      ";
        // line 23
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "</p>
    <a href=\"";
        // line 24
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
        return "partials/blog_list_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  81 => 23,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  54 => 11,  50 => 9,  44 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"news__feed__entries__article\">
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
      <strong>
        <time class=\"date\" datetime=\"{{ page.date|date(\" c\") }}\"=\"c\" )=\")\" }}\"\"=\"}}\" \"\">
          <span>{{ page.date|date(\"d\") }}</span>
          <em>{{ page.date|date(\"M\") }}</em>
          <em>{{ page.date|date(\"Y\") }}</em>
        </time>
      </strong>
    </p>
    <p class=\"news__feed__entries__article__text__blurb\">

      {{ page.content }}</p>
    <a href=\"{{ page.url }}\" class=\"news__feed__entries__article__text__button\">
      <div class=\"news__feed__entries__article__text__button__text\">
        <span>Read More</span>
      </div>
    </a>
  </div>
</div>
", "partials/blog_list_item.html.twig", "C:\\Users\\Jovanie\\Documents\\GitHub\\professional-outdoor-solutions-grav\\user\\themes\\professional-outdoor-solutions\\templates\\partials\\blog_list_item.html.twig");
    }
}
