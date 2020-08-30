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

/* modular/contact_content.html.twig */
class __TwigTemplate_da16fdf774c818769c5fe675692faabab307a9c518fc26524976b1a0863030b7 extends \Twig\Template
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
        echo "<div class=\"contact__content\">
  <div class=\"contact__content__info\">
    ";
        // line 3
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
  </div>

  <div class=\"contact__content__image\">
    ";
        // line 7
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 8
        echo "    ";
        if (($context["image"] ?? null)) {
            // line 9
            echo "      <img src=\"";
            echo $this->getAttribute(($context["image"] ?? null), "url", []);
            echo "\" class=\"contact__content__image__img\" alt=\"\">
    ";
        }
        // line 11
        echo "  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "modular/contact_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  46 => 9,  43 => 8,  41 => 7,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"contact__content\">
  <div class=\"contact__content__info\">
    {{ page.content|raw }}
  </div>

  <div class=\"contact__content__image\">
    {% set image = page.media.images | first %}
    {% if image %}
      <img src=\"{{ image.url }}\" class=\"contact__content__image__img\" alt=\"\">
    {% endif %}
  </div>

</div>
", "modular/contact_content.html.twig", "C:\\Users\\Jovanie\\Documents\\Web_Development\\professional-outdoor-solutions\\professional-outdoor-solutions-grav-dev\\user\\themes\\professional-outdoor-solutions-grav-theme\\templates\\modular\\contact_content.html.twig");
    }
}
