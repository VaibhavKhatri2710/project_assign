<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/pippip/templates/node/node--page.html.twig */
class __TwigTemplate_6401c35342b45a595f8745933b354bdb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<h1 class=\"text-center\">Lorem Ipsum Dloar Ismet</h1>
<div class=\"container\">
\t<ul class=\"nav nav-tabs nav-fill\" id=\"myTab\" role=\"tablist\">
\t<div id=\"cursor\"></div>
\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link active\" id=\"reference-tab\" data-toggle=\"tab\" data-bs-target=\"#reference\" href=\"#reference\" role=\"tab\" aria-controls=\"references\" aria-selected=\"true\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Recommended Conferences"));
        echo "</a>
\t\t</li>
\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link\" id=\"feature-tab\" data-toggle=\"tab\" data-bs-target=\"#feature\" href=\"#feature\" role=\"tab\" aria-controls=\"feature\" aria-selected=\"false\">";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Featured Conferences"));
        echo "</a>
\t\t</li>
\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link\" id=\"past-tab\" data-toggle=\"tab\" href=\"#past\" data-bs-target=\"#past\" role=\"tab\" aria-controls=\"past\" aria-selected=\"false\">";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Past Conferences"));
        echo "</a>
\t\t</li>
\t
\t</ul>
\t<div class=\"tab-content\" id=\"myTabContent\">
\t\t<div class=\"tab-pane fade show active\" id=\"reference\" role=\"tabpanel\" aria-labelledby=\"reference-tab\">
\t\t\t<div class=\"card-content\">
\t\t\t\t<div>";
        // line 20
        $this->loadTemplate("@pippip/templates/partials/cards.html.twig", "themes/pippip/templates/node/node--page.html.twig", 20)->display($context);
        echo "</div>
\t\t\t\t<div>";
        // line 21
        $this->loadTemplate("@pippip/templates/partials/cards.html.twig", "themes/pippip/templates/node/node--page.html.twig", 21)->display($context);
        echo "</div>
\t\t\t\t<div>";
        // line 22
        $this->loadTemplate("@pippip/templates/partials/cards.html.twig", "themes/pippip/templates/node/node--page.html.twig", 22)->display($context);
        echo "</div>
\t\t\t\t<div>";
        // line 23
        $this->loadTemplate("@pippip/templates/partials/cards.html.twig", "themes/pippip/templates/node/node--page.html.twig", 23)->display($context);
        echo "</div>

\t\t\t</div>
\t\t</div>
\t\t<div class=\"tab-pane fade\" id=\"feature\" role=\"tabpanel\" aria-labelledby=\"feature-tab\">
\t\t\t<div class=\"card-content\">
\t\t\t\t<div>";
        // line 29
        $this->loadTemplate("@pippip/templates/partials/cards.html.twig", "themes/pippip/templates/node/node--page.html.twig", 29)->display($context);
        echo "</div>
\t\t\t\t<div>";
        // line 30
        $this->loadTemplate("@pippip/templates/partials/cards.html.twig", "themes/pippip/templates/node/node--page.html.twig", 30)->display($context);
        echo "</div>
\t\t\t\t<div>";
        // line 31
        $this->loadTemplate("@pippip/templates/partials/cards.html.twig", "themes/pippip/templates/node/node--page.html.twig", 31)->display($context);
        echo "</div>
\t\t\t\t<div>";
        // line 32
        $this->loadTemplate("@pippip/templates/partials/cards.html.twig", "themes/pippip/templates/node/node--page.html.twig", 32)->display($context);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"tab-pane fade\" id=\"past\" role=\"tabpanel\" aria-labelledby=\"past-tab\">
\t\t\t<div class=\"card-content\">
\t\t\t\t<div>";
        // line 37
        $this->loadTemplate("@pippip/templates/partials/cards.html.twig", "themes/pippip/templates/node/node--page.html.twig", 37)->display($context);
        echo "</div>
\t\t\t\t<div>";
        // line 38
        $this->loadTemplate("@pippip/templates/partials/cards.html.twig", "themes/pippip/templates/node/node--page.html.twig", 38)->display($context);
        echo "</div>
\t\t\t\t<div>";
        // line 39
        $this->loadTemplate("@pippip/templates/partials/cards.html.twig", "themes/pippip/templates/node/node--page.html.twig", 39)->display($context);
        echo "</div>
\t\t\t\t<div>";
        // line 40
        $this->loadTemplate("@pippip/templates/partials/cards.html.twig", "themes/pippip/templates/node/node--page.html.twig", 40)->display($context);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>

</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/pippip/templates/node/node--page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  122 => 40,  118 => 39,  114 => 38,  110 => 37,  102 => 32,  98 => 31,  94 => 30,  90 => 29,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  59 => 13,  53 => 10,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pippip/templates/node/node--page.html.twig", "/var/www/html/web/themes/pippip/templates/node/node--page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 20);
        static $filters = array("t" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['t'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
