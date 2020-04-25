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

/* blueprints.yaml.twig */
class __TwigTemplate_31de1436a7476217133ebb3ed59a2b0b57de2a7c73be51661b10ae115fd69f27 extends \Twig\Template
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
        $context["githubid"] = (($this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "githubid", [])) ? ($this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "githubid", [])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "name", []))));
        // line 2
        echo "name: ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "
version: 0.1.0
description: ";
        // line 4
        echo $this->getAttribute(($context["component"] ?? null), "description", []);
        echo "
icon: rebel
author:
  name: ";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "name", []);
        echo "
  email: ";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "email", []);
        echo "
homepage: https://github.com/";
        // line 9
        echo ($context["githubid"] ?? null);
        echo "/grav-theme-";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "
demo: http://demo.yoursite.com
keywords: grav, theme, etc
bugs: https://github.com/";
        // line 12
        echo ($context["githubid"] ?? null);
        echo "/grav-theme-";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "/issues
readme: https://github.com/";
        // line 13
        echo ($context["githubid"] ?? null);
        echo "/grav-theme-";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "/blob/develop/README.md
license: MIT

dependencies:
  - { name: grav, version: '>=1.6.0' }
";
    }

    public function getTemplateName()
    {
        return "blueprints.yaml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  60 => 12,  52 => 9,  48 => 8,  44 => 7,  38 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set githubid = component.author.githubid ?: component.author.name|hyphenize -%}
name: {{ component.name|titleize }}
version: 0.1.0
description: {{ component.description }}
icon: rebel
author:
  name: {{ component.author.name }}
  email: {{ component.author.email }}
homepage: https://github.com/{{ githubid }}/grav-theme-{{ component.name|hyphenize }}
demo: http://demo.yoursite.com
keywords: grav, theme, etc
bugs: https://github.com/{{ githubid }}/grav-theme-{{ component.name|hyphenize }}/issues
readme: https://github.com/{{ githubid }}/grav-theme-{{ component.name|hyphenize }}/blob/develop/README.md
license: MIT

dependencies:
  - { name: grav, version: '>=1.6.0' }
", "blueprints.yaml.twig", "C:\\Users\\Jovanie\\Documents\\Git\\Professional-Outdoor-Solutions\\grav\\user\\plugins\\devtools\\components\\theme\\inheritance\\blueprints.yaml.twig");
    }
}
