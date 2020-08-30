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

/* partials/logo.html.twig */
class __TwigTemplate_37783694357d0abf1bfd3377825741bd5ead4b3cbeb9f32e439493b5455a775e extends \Twig\Template
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
        echo "
<a href=\"";
        // line 2
        echo ($context["home_url"] ?? null);
        echo "\" class=\"header__logo\">
  <object type=\"image/svg+xml\" data=\"";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo/logo.svg");
        echo "\" class=\"header__logo__img\" alt=\"";
        echo $this->getAttribute(($context["site"] ?? null), "name", []);
        echo "\" style=\"pointer-events: none;\"></object>
</a>
";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<a href=\"{{ home_url }}\" class=\"header__logo\">
  <object type=\"image/svg+xml\" data=\"{{ url('theme://images/logo/logo.svg')  }}\" class=\"header__logo__img\" alt=\"{{ site.name }}\" style=\"pointer-events: none;\"></object>
</a>
", "partials/logo.html.twig", "C:\\Users\\Jovanie\\Documents\\Web_Development\\professional-outdoor-solutions\\professional-outdoor-solutions-grav-dev\\user\\themes\\professional-outdoor-solutions-grav-theme\\templates\\partials\\logo.html.twig");
    }
}
