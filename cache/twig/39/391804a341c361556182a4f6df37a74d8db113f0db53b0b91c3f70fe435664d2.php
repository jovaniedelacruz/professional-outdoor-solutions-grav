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

/* partials/footer_lessfooter.html.twig */
class __TwigTemplate_1426014fbbbd6d96dac1968edffe24e28860d62528eba9603e33a20a223cf227 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = [])
    {
        // line 2
        echo "
  <footer class=\"footer footer--lessfooter\">
    <div class=\"footer__waves footer__waves--lessfooter\">
      <img class=\"footer__waves__img\" src=\"";
        // line 5
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/svg/POS_Waves.svg");
        echo "\"/>
    </div>
    <ul class=\"footer__nav\">
      <li class=\"footer__nav__column footer__nav__column--1\">
        <ul class=\"footer__nav__column__list\">
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--title\">
            <span>Navigation</span>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--link\">
            <a href=\"/\">
              <span>Home</span>
            </a>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--link\">
            <a href=\"#\">
              <span>Athletic</span>
            </a>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--link\">
            <a href=\"#\">
              <span>Commercial</span>
            </a>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--link\">
            <a href=\"#\">
              <span>Residential</span>
            </a>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--link\">
            <a href=\"#\">
              <span>Projects</span>
            </a>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--link\">
            <a href=\"#\">
              <span>About</span>
            </a>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--link\">
            <a href=\"#\">
              <span>Contact</span>
            </a>
          </li>

        </ul>
      </li>
      <li class=\"footer__nav__column footer__nav__column--2\">
        <ul class=\"footer__nav__column__list\">
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--title\">
            <span>SERVICES</span>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Aeration</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Athletic field development</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Athletic field renovation</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Athletic field maintenance</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Commercial lawn care</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Fertilization control</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Weed control</li>
        </ul>
      </li>
      <li class=\"footer__nav__column footer__nav__column--3\">
        <ul class=\"footer__nav__column__list\">
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--title\">
            <span>&nbsp;</span>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Irrigation systems</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Mosquito and pest control</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Pond maintenance</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Residential lawn care</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Sodding and seeding</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Turf management</li>
        </ul>
      </li>
      <li class=\"footer__nav__column footer__nav__column--4\">
        <ul class=\"footer__nav__column__list footer__nav__column__list--contact\">
          <li>
            <span>&nbsp;</span>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--title\">
            <span>EMAIL</span>
          </li>
          <li>
            <a href=\"mailto:allen@professionaloutdoor.solutions\">
              allen@professionaloutdoor.solutions
            </a>
          </li>

          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--title\">
            <span>CALL</span>
          </li>

          <li>
            <a href=\"tel:2177223948\">217-722-3948</a>
          </li>

        </ul>
        <ul class=\"footer__nav__column__list footer__nav__column__list--social\">

          <li>
            <a href=\"https://www.facebook.com/professionaloutdoorsolutions/\" target=\"_blank\">

              <i class=\"fab fa-facebook-square fa-2x\"></i>
            </a>
          </li>
          <li>
            <a href=\"https://twitter.com/ProfOutdoorSol\" target=\"_blank\">
              <i class=\"fab fa-twitter-square fa-2x\"></i>
            </a>
          </li>
          <li>
            <a href=\"https://www.linkedin.com/company/professional-outdoor-solutions/\" target=\"_blank\">
              <i class=\"fab fa-linkedin fa-2x\"></i>
            </a>
          </li>
          <li>
            <a href=\"mailto:allen@professionaloutdoor.solutions\">
              <i class=\"fas fa-envelope-square fa-2x\"></i>
            </a>
          </li>
          <li>
            <script language=\"javascript\">
              function emailCurrentPage() {
                window.location.href = \"mailto:?subject=Check out this page from \" + document.title + \"&body=\" + escape(window.location.href);
              }
            </script>
            <a href=\"javascript:emailCurrentPage()\">
              Email this page!</i>
          </a>
        </li>

      </ul>
    </li>
    <div class=\"footer__copy\">
      <p>
        © 2020 Professional Outdoor Soutions, LLC
      </p>
    </div>
  </footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer_lessfooter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block footer %}

  <footer class=\"footer footer--lessfooter\">
    <div class=\"footer__waves footer__waves--lessfooter\">
      <img class=\"footer__waves__img\" src=\"{{url('theme://images/svg/POS_Waves.svg') }}\"/>
    </div>
    <ul class=\"footer__nav\">
      <li class=\"footer__nav__column footer__nav__column--1\">
        <ul class=\"footer__nav__column__list\">
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--title\">
            <span>Navigation</span>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--link\">
            <a href=\"/\">
              <span>Home</span>
            </a>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--link\">
            <a href=\"#\">
              <span>Athletic</span>
            </a>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--link\">
            <a href=\"#\">
              <span>Commercial</span>
            </a>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--link\">
            <a href=\"#\">
              <span>Residential</span>
            </a>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--link\">
            <a href=\"#\">
              <span>Projects</span>
            </a>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--link\">
            <a href=\"#\">
              <span>About</span>
            </a>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--link\">
            <a href=\"#\">
              <span>Contact</span>
            </a>
          </li>

        </ul>
      </li>
      <li class=\"footer__nav__column footer__nav__column--2\">
        <ul class=\"footer__nav__column__list\">
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--title\">
            <span>SERVICES</span>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Aeration</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Athletic field development</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Athletic field renovation</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Athletic field maintenance</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Commercial lawn care</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Fertilization control</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Weed control</li>
        </ul>
      </li>
      <li class=\"footer__nav__column footer__nav__column--3\">
        <ul class=\"footer__nav__column__list\">
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--title\">
            <span>&nbsp;</span>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Irrigation systems</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Mosquito and pest control</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Pond maintenance</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Residential lawn care</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Sodding and seeding</li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--text\">Turf management</li>
        </ul>
      </li>
      <li class=\"footer__nav__column footer__nav__column--4\">
        <ul class=\"footer__nav__column__list footer__nav__column__list--contact\">
          <li>
            <span>&nbsp;</span>
          </li>
          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--title\">
            <span>EMAIL</span>
          </li>
          <li>
            <a href=\"mailto:allen@professionaloutdoor.solutions\">
              allen@professionaloutdoor.solutions
            </a>
          </li>

          <li class=\"footer__nav__column__list__entry footer__nav__column__list__entry--title\">
            <span>CALL</span>
          </li>

          <li>
            <a href=\"tel:2177223948\">217-722-3948</a>
          </li>

        </ul>
        <ul class=\"footer__nav__column__list footer__nav__column__list--social\">

          <li>
            <a href=\"https://www.facebook.com/professionaloutdoorsolutions/\" target=\"_blank\">

              <i class=\"fab fa-facebook-square fa-2x\"></i>
            </a>
          </li>
          <li>
            <a href=\"https://twitter.com/ProfOutdoorSol\" target=\"_blank\">
              <i class=\"fab fa-twitter-square fa-2x\"></i>
            </a>
          </li>
          <li>
            <a href=\"https://www.linkedin.com/company/professional-outdoor-solutions/\" target=\"_blank\">
              <i class=\"fab fa-linkedin fa-2x\"></i>
            </a>
          </li>
          <li>
            <a href=\"mailto:allen@professionaloutdoor.solutions\">
              <i class=\"fas fa-envelope-square fa-2x\"></i>
            </a>
          </li>
          <li>
            <script language=\"javascript\">
              function emailCurrentPage() {
                window.location.href = \"mailto:?subject=Check out this page from \" + document.title + \"&body=\" + escape(window.location.href);
              }
            </script>
            <a href=\"javascript:emailCurrentPage()\">
              Email this page!</i>
          </a>
        </li>

      </ul>
    </li>
    <div class=\"footer__copy\">
      <p>
        © 2020 Professional Outdoor Soutions, LLC
      </p>
    </div>
  </footer>
{% endblock %}
", "partials/footer_lessfooter.html.twig", "C:\\Users\\Jovanie\\Documents\\Web_Development\\professional-outdoor-solutions\\professional-outdoor-solutions-grav-dev\\user\\themes\\professional-outdoor-solutions-grav-theme\\templates\\partials\\footer_lessfooter.html.twig");
    }
}
