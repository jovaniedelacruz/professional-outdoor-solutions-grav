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

/* partials/blog_item.html.twig */
class __TwigTemplate_cdc36ec12eb222b7e4aadbe9ccc3a1e38d370cd63b8b4d44eb06c5ecce3a2b60 extends \Twig\Template
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
        $context["hero_image"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", [])) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))));
        // line 2
        echo "
<div class=\"articles\">

  <div class=\"article__banner\">
    <img src=\"";
        // line 6
        echo $this->getAttribute(($context["hero_image"] ?? null), "url", []);
        echo "\" class=\"article__banner__img\" alt=\"\">
  </div>
  <div class=\"article__body\">

    <div class=\"article__body__content\">

      <h1 class=\"article__body__content__title\">";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>
      <p class=\"article__body__content__date\">
        <strong><time class=\"date\" datetime=\"";
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
        </time></strong>
      </p>
      <div class=\"article__body__content__text\">
        ";
        // line 21
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
      </div>
      <div class=\"article__body__content__meta\">
        ";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "readingtime", []), "enabled", [])) {
            // line 25
            echo "          <span class=\"reading\">";
            echo call_user_func_array($this->env->getFilter('readingtime')->getCallable(), [$this->getAttribute(($context["page"] ?? null), "content", [])]);
            echo "</span>
        ";
        }
        // line 27
        echo "
        ";
        // line 28
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 29
            echo "          <span class=\"tags\">
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 31
                echo "              <a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["blog"] ?? null), "url", []), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "          </span>
        ";
        }
        // line 35
        echo "      </div>
    </div>
    <div class=\"article__body__recent\">
      <div class=\"\">
        <h1 class=\"article__body__recent__h1\">Recent Posts</h1>
      </div>
      <div class=\"article__body__recent__article\">
        <a href=\"#\">
          <div class=\"article__body__recent__article__banner\">
            <img src=\"https://professionaloutdoorsolutions.xurweb.design/img/jpg/2020-05-06-HGT%20Ridewood%20Generals.jpg\" class=\"article__body__recent__article__banner__img\" alt=\"\">
          </div>
        </a>
        <a href=\"#\">
          <h3 class=\"article__body__recent__article__title\">Grass is now GREENER</h3>
        </a>
      </div>
      <div class=\"article__body__recent__article\">
        <a href=\"#\">
          <div class=\"article__body__recent__article__banner\">
            <img src=\"https://professionaloutdoorsolutions.xurweb.design/img/opt/il-sadorus/il-village-of-sadorus-01.jpg\" class=\"article__body__recent__article__banner__img\" alt=\"\">
          </div>
        </a>
        <a href=\"#\">
          <h3 class=\"article__body__recent__article__title\">Grass is now GREENER</h3>
        </a>
      </div>
      <div class=\"article__body__recent__article\">
        <a href=\"#\">
          <div class=\"article__body__recent__article__banner\">
            <img src=\"https://professionaloutdoorsolutions.xurweb.design/img/opt/il-sadorus/il-village-of-sadorus-01.jpg\" class=\"article__body__recent__article__banner__img\" alt=\"\">
          </div>
        </a>
        <a href=\"#\">
          <h3 class=\"article__body__recent__article__title\">Grass is now GREENER</h3>
        </a>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 35,  111 => 33,  97 => 31,  93 => 30,  90 => 29,  88 => 28,  85 => 27,  79 => 25,  77 => 24,  71 => 21,  64 => 17,  60 => 16,  56 => 15,  52 => 14,  47 => 12,  38 => 6,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set hero_image = page.header.hero_image ? page.media[page.header.hero_image] : page.media.images|first %}

<div class=\"articles\">

  <div class=\"article__banner\">
    <img src=\"{{ hero_image.url }}\" class=\"article__banner__img\" alt=\"\">
  </div>
  <div class=\"article__body\">

    <div class=\"article__body__content\">

      <h1 class=\"article__body__content__title\">{{ page.title }}</h1>
      <p class=\"article__body__content__date\">
        <strong><time class=\"date\" datetime=\"{{ page.date|date(\" c\") }}\"=\"c\" )=\")\" }}\"\"=\"}}\" \"\">
          <span>{{ page.date|date(\"d\") }}</span>
          <em>{{ page.date|date(\"M\") }}</em>
          <em>{{ page.date|date(\"Y\") }}</em>
        </time></strong>
      </p>
      <div class=\"article__body__content__text\">
        {{ page.content }}
      </div>
      <div class=\"article__body__content__meta\">
        {% if config.plugins.readingtime.enabled %}
          <span class=\"reading\">{{ page.content|readingtime }}</span>
        {% endif %}

        {% if page.taxonomy.tag %}
          <span class=\"tags\">
            {% for tag in page.taxonomy.tag %}
              <a href=\"{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a>
            {% endfor %}
          </span>
        {% endif %}
      </div>
    </div>
    <div class=\"article__body__recent\">
      <div class=\"\">
        <h1 class=\"article__body__recent__h1\">Recent Posts</h1>
      </div>
      <div class=\"article__body__recent__article\">
        <a href=\"#\">
          <div class=\"article__body__recent__article__banner\">
            <img src=\"https://professionaloutdoorsolutions.xurweb.design/img/jpg/2020-05-06-HGT%20Ridewood%20Generals.jpg\" class=\"article__body__recent__article__banner__img\" alt=\"\">
          </div>
        </a>
        <a href=\"#\">
          <h3 class=\"article__body__recent__article__title\">Grass is now GREENER</h3>
        </a>
      </div>
      <div class=\"article__body__recent__article\">
        <a href=\"#\">
          <div class=\"article__body__recent__article__banner\">
            <img src=\"https://professionaloutdoorsolutions.xurweb.design/img/opt/il-sadorus/il-village-of-sadorus-01.jpg\" class=\"article__body__recent__article__banner__img\" alt=\"\">
          </div>
        </a>
        <a href=\"#\">
          <h3 class=\"article__body__recent__article__title\">Grass is now GREENER</h3>
        </a>
      </div>
      <div class=\"article__body__recent__article\">
        <a href=\"#\">
          <div class=\"article__body__recent__article__banner\">
            <img src=\"https://professionaloutdoorsolutions.xurweb.design/img/opt/il-sadorus/il-village-of-sadorus-01.jpg\" class=\"article__body__recent__article__banner__img\" alt=\"\">
          </div>
        </a>
        <a href=\"#\">
          <h3 class=\"article__body__recent__article__title\">Grass is now GREENER</h3>
        </a>
      </div>
    </div>
  </div>
</div>
", "partials/blog_item.html.twig", "C:\\Users\\Jovanie\\Documents\\GitHub\\professional-outdoor-solutions-grav\\user\\themes\\professional-outdoor-solutions\\templates\\partials\\blog_item.html.twig");
    }
}
