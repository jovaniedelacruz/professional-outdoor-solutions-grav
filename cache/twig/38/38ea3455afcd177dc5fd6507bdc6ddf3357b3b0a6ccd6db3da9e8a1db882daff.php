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

/* error.html.twig */
class __TwigTemplate_2ee1ee79b5e81060582f102f3b2df33b47d7f03786f22f85a53ec66bae00a962 extends \Twig\Template
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
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "    <div id=\"error\">
        <div>
            <h2>";
        // line 5
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "ERROR");
        echo " ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []);
        echo "</h2>
            <p>
                ";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  46 => 5,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block content %}
    <div id=\"error\">
        <div>
            <h2>{{ 'ERROR'|t }} {{ page.header.http_response_code }}</h2>
            <p>
                {{ page.content }}
            </p>
        </div>
    </div>
{% endblock %}
", "error.html.twig", "C:\\Users\\Jovanie\\Documents\\GitHub\\professional-outdoor-solutions-grav\\user\\themes\\professional-outdoor-solutions\\templates\\error.html.twig");
    }
}
