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

/* forms/fields/column/column.html.twig */
class __TwigTemplate_4ed11f7dee792ddb31d8327c938542ee41936ceae94769c07ce363e758e9fc7d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/column/column.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 5
            echo "        <div class=\"form-column ";
            echo $this->getAttribute(($context["field"] ?? null), "classes", []);
            echo "\">
            ";
            // line 6
            $this->loadTemplate("forms/default/fields.html.twig", "forms/fields/column/column.html.twig", 6)->display(twig_array_merge($context, ["name" => $this->getAttribute(($context["field"] ?? null), "name", []), "fields" => $this->getAttribute(($context["field"] ?? null), "fields", [])]));
            // line 7
            echo "        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/column/column.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  50 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
    {% if field.fields %}
        <div class=\"form-column {{ field.classes }}\">
            {% include 'forms/default/fields.html.twig' with {name: field.name, fields: field.fields} %}
        </div>
    {% endif %}
{% endblock %}
", "forms/fields/column/column.html.twig", "C:\\Users\\Jovanie\\Documents\\Web_Development\\professional-outdoor-solutions\\professional-outdoor-solutions-grav-dev\\user\\plugins\\form\\templates\\forms\\fields\\column\\column.html.twig");
    }
}
