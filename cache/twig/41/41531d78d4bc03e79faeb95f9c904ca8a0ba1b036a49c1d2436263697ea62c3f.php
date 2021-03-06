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
class __TwigTemplate_6c86453dbe691c25dd7da1abb25c89a11a92bdaa93faae293d8d1b43859bf35f extends \Twig\Template
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
        $context["logo"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc(((($context["mobile"] ?? null)) ? ("custom_logo_mobile") : ("custom_logo")));
        // line 2
        echo "<a href=\"";
        echo ($context["home_url"] ?? null);
        echo "\" class=\"header__logo\">
";
        // line 3
        if (($context["logo"] ?? null)) {
            // line 4
            echo "  ";
            $context["logo_file"] = $this->getAttribute(twig_first($this->env, ($context["logo"] ?? null)), "name", []);
            // line 5
            echo "  <object type=\"image/svg+xml\" data=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/logo/" . ($context["logo_file"] ?? null)));
            echo "\" class=\"header__logo__img\" alt=\"";
            echo $this->getAttribute(($context["site"] ?? null), "name", []);
            echo "\" ></object>

";
        } else {
            // line 8
            echo "  <object type=\"image/svg+xml\" data=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/grav-logo.svg");
            echo "\" class=\"header__logo__img\" alt=\"";
            echo $this->getAttribute(($context["site"] ?? null), "name", []);
            echo "\" ></object>
";
        }
        // line 10
        echo "</a>
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
        return array (  59 => 10,  51 => 8,  42 => 5,  39 => 4,  37 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set logo = theme_var(mobile ? 'custom_logo_mobile' : 'custom_logo') %}
<a href=\"{{ home_url }}\" class=\"header__logo\">
{% if logo %}
  {% set logo_file = (logo|first).name %}
  <object type=\"image/svg+xml\" data=\"{{ url('theme://images/logo/' ~ logo_file)  }}\" class=\"header__logo__img\" alt=\"{{ site.name }}\" ></object>

{% else %}
  <object type=\"image/svg+xml\" data=\"{{ url('theme://images/grav-logo.svg')  }}\" class=\"header__logo__img\" alt=\"{{ site.name }}\" ></object>
{% endif %}
</a>
", "partials/logo.html.twig", "C:\\Users\\Jovanie\\Documents\\GitHub\\professional-outdoor-solutions-grav\\user\\themes\\professional-outdoor-solutions\\templates\\partials\\logo.html.twig");
    }
}
