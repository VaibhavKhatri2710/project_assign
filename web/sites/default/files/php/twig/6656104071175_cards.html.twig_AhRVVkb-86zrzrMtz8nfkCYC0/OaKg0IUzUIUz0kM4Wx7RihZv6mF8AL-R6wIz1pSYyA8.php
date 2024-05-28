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

/* @pippip/templates/partials/cards.html.twig */
class __TwigTemplate_29f637f998efa79014102e774d22363f extends Template
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
        echo "<section class=\"card-wrapper\">
\t<div class=\"card\">
\t\t<div class=\"card-img-top\">
\t\t\t";
        // line 4
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_teaser_image", [], "any", false, false, true, 4))) {
            // line 5
            echo "\t\t\t\t<img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_teaser_image", [], "any", false, false, true, 5)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), "entity", [], "any", false, false, true, 5), "uri", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5), 5, $this->source)), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_teaser_image", [], "any", false, false, true, 5), "alt", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "\">
\t\t\t";
        } else {
            // line 7
            echo "\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "
\t\t\t";
        }
        // line 9
        echo "\t\t</div>
\t\t<div class=\"card-image-content\">
\t\t\t<h5 class=\"card-title\">
\t\t\t\t";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</h5>
\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t";
        // line 15
        $this->loadTemplate("@pippip/assets/img/tags-fill.svg", "@pippip/templates/partials/cards.html.twig", 15)->display($context);
        // line 16
        echo "\t\t\t\t\tManagement, Leadership</li>
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t";
        // line 18
        $this->loadTemplate("@pippip/assets/img/calendar.svg", "@pippip/templates/partials/cards.html.twig", 18)->display($context);
        // line 19
        echo "\t\t\t\t\tDapibus ac facilisis in</li>
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t";
        // line 21
        $this->loadTemplate("@pippip/assets/img/geo-alt-fill.svg", "@pippip/templates/partials/cards.html.twig", 21)->display($context);
        // line 22
        echo "\t\t\t\t\tVestibulum at eros</li>
\t\t\t</ul>
\t\t\t<div class=\"card-body card-body-visit\">
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t";
        // line 27
        $this->loadTemplate("@pippip/assets/img/heart.svg", "@pippip/templates/partials/cards.html.twig", 27)->display($context);
        // line 28
        echo "\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t";
        // line 30
        $this->loadTemplate("@pippip/assets/img/cloud-arrow-down-fill.svg", "@pippip/templates/partials/cards.html.twig", 30)->display($context);
        // line 31
        echo "\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t";
        // line 33
        $this->loadTemplate("@pippip/assets/img/share-fill.svg", "@pippip/templates/partials/cards.html.twig", 33)->display($context);
        // line 34
        echo "\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<a href=\"#\" class=\"card-link\">View More</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "node"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@pippip/templates/partials/cards.html.twig";
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
        return array (  106 => 34,  104 => 33,  100 => 31,  98 => 30,  94 => 28,  92 => 27,  85 => 22,  83 => 21,  79 => 19,  77 => 18,  73 => 16,  71 => 15,  65 => 12,  60 => 9,  54 => 7,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@pippip/templates/partials/cards.html.twig", "/var/www/html/web/themes/pippip/templates/partials/cards.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "include" => 15);
        static $filters = array("render" => 4, "escape" => 5);
        static $functions = array("file_url" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['render', 'escape'],
                ['file_url']
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
