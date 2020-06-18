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

/* item.html.twig */
class __TwigTemplate_6a64a028d4ff6778d8dc94cc254413c6837303821f3ca9b7e90fdbee0349bbae extends \Twig\Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "1511790729")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
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

    {% block content %}
        <div class=\"blog-item-wrapper\">
            <div id=\"blog-item\">
                {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
            </div>
        </div>
    {% endblock %}
{% endembed %}
", "item.html.twig", "C:\\Users\\Jovanie\\Documents\\GitHub\\professional-outdoor-solutions-grav\\user\\themes\\professional-outdoor-solutions\\templates\\item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_6a64a028d4ff6778d8dc94cc254413c6837303821f3ca9b7e90fdbee0349bbae___1511790729 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "        <div class=\"blog-item-wrapper\">
            <div id=\"blog-item\">
                ";
        // line 6
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 6)->display(twig_array_merge($context, ["blog" => $this->getAttribute(($context["page"] ?? null), "parent", []), "truncate" => false]));
        // line 7
        echo "            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 7,  99 => 6,  95 => 4,  92 => 3,  30 => 1,);
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

    {% block content %}
        <div class=\"blog-item-wrapper\">
            <div id=\"blog-item\">
                {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
            </div>
        </div>
    {% endblock %}
{% endembed %}
", "item.html.twig", "C:\\Users\\Jovanie\\Documents\\GitHub\\professional-outdoor-solutions-grav\\user\\themes\\professional-outdoor-solutions\\templates\\item.html.twig");
    }
}
