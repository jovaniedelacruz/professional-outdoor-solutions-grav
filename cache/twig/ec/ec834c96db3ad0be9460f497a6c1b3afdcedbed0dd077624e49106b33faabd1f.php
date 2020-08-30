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

/* blog-feed.html.twig */
class __TwigTemplate_43fa3f671d6de5f506712970115234622d323e47f99071874bca9cc87ffa41c3 extends \Twig\Template
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
        $this->loadTemplate("blog-feed.html.twig", "blog-feed.html.twig", 1, "1876690308")->display($context);
    }

    public function getTemplateName()
    {
        return "blog-feed.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

  {% set collection = page.collection() %}

  {% block content %}

    <div class=\"news\">
      <div class=\"news__banner\" style=\"\">
        <img src=\"https://professionaloutdoorsolutions.xurweb.design/img/jpg/il-university-of-illinois/archive/2020-04-18-U_of_I_practice_field.jpg\" class=\"news__banner__img\" alt=\"\">
      </div>
      <div class=\"news__feed\">
        <div class=\"news__feed__entries\">
          {% for child in collection %}
            {% include 'partials/blog/blog-feed-entry.html.twig' with {
              'blog' : page,
              'page' : child,
              'truncate' : true
            } %}
          {% endfor %}
        </div>
        <div class=\"news__feed__pages\">

          {% set collection = page.collection() %}
          {# Render the pagination list #}
          {% if config.plugins.pagination.enabled and collection.params.pagination %}
            {% include 'partials/blog/blog-feed-pagination.html.twig' with {
              'base_url' : page.url,
              'pagination' : collection.params.pagination
            } %}
          {% endif %}
        </div>
      </div>

    </div>

  {% endblock %}
{% endembed %}
", "blog-feed.html.twig", "C:\\Users\\Jovanie\\Documents\\Web_Development\\professional-outdoor-solutions\\professional-outdoor-solutions-grav-dev\\user\\themes\\professional-outdoor-solutions-grav-theme\\templates\\blog-feed.html.twig");
    }
}


/* blog-feed.html.twig */
class __TwigTemplate_43fa3f671d6de5f506712970115234622d323e47f99071874bca9cc87ffa41c3___1876690308 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog-feed.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "
    <div class=\"news\">
      <div class=\"news__banner\" style=\"\">
        <img src=\"https://professionaloutdoorsolutions.xurweb.design/img/jpg/il-university-of-illinois/archive/2020-04-18-U_of_I_practice_field.jpg\" class=\"news__banner__img\" alt=\"\">
      </div>
      <div class=\"news__feed\">
        <div class=\"news__feed__entries\">
          ";
        // line 13
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
            echo "            ";
            $this->loadTemplate("partials/blog/blog-feed-entry.html.twig", "blog-feed.html.twig", 14)->display(twig_array_merge($context, ["blog" =>             // line 15
($context["page"] ?? null), "page" =>             // line 16
$context["child"], "truncate" => true]));
            // line 19
            echo "          ";
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
        echo "        </div>
        <div class=\"news__feed__pages\">

          ";
        // line 23
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 24
        echo "          ";
        // line 25
        echo "          ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 26
            echo "            ";
            $this->loadTemplate("partials/blog/blog-feed-pagination.html.twig", "blog-feed.html.twig", 26)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(            // line 27
($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(            // line 28
($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 30
            echo "          ";
        }
        // line 31
        echo "        </div>
      </div>

    </div>

  ";
    }

    public function getTemplateName()
    {
        return "blog-feed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 31,  187 => 30,  185 => 28,  184 => 27,  182 => 26,  179 => 25,  177 => 24,  175 => 23,  170 => 20,  156 => 19,  154 => 16,  153 => 15,  151 => 14,  134 => 13,  125 => 6,  122 => 5,  117 => 1,  115 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

  {% set collection = page.collection() %}

  {% block content %}

    <div class=\"news\">
      <div class=\"news__banner\" style=\"\">
        <img src=\"https://professionaloutdoorsolutions.xurweb.design/img/jpg/il-university-of-illinois/archive/2020-04-18-U_of_I_practice_field.jpg\" class=\"news__banner__img\" alt=\"\">
      </div>
      <div class=\"news__feed\">
        <div class=\"news__feed__entries\">
          {% for child in collection %}
            {% include 'partials/blog/blog-feed-entry.html.twig' with {
              'blog' : page,
              'page' : child,
              'truncate' : true
            } %}
          {% endfor %}
        </div>
        <div class=\"news__feed__pages\">

          {% set collection = page.collection() %}
          {# Render the pagination list #}
          {% if config.plugins.pagination.enabled and collection.params.pagination %}
            {% include 'partials/blog/blog-feed-pagination.html.twig' with {
              'base_url' : page.url,
              'pagination' : collection.params.pagination
            } %}
          {% endif %}
        </div>
      </div>

    </div>

  {% endblock %}
{% endembed %}
", "blog-feed.html.twig", "C:\\Users\\Jovanie\\Documents\\Web_Development\\professional-outdoor-solutions\\professional-outdoor-solutions-grav-dev\\user\\themes\\professional-outdoor-solutions-grav-theme\\templates\\blog-feed.html.twig");
    }
}
