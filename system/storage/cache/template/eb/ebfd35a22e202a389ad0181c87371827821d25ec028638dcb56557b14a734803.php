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

/* default/template/common/menu.twig */
class __TwigTemplate_bc3b117a7284fca7694b45c3eb9b439c5ae3a4b66863d2c196efcb6d3c6511ec extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<div id=\"product-category\" class=\"container\">
<div class=\"row\"> ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 4
            echo "        <div class=\"category-layout category-list col-xs-12\">
          <div class=\"category-thumb\">
            <div class=\"image\"><a href=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 6);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 6);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6);
            echo "\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
            echo "</a></h4>
                <p>";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 10);
            echo "</p>
                ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["category"], "price", [], "any", false, false, false, 11)) {
                // line 12
                echo "                <p class=\"price\"> ";
                if ( !twig_get_attribute($this->env, $this->source, $context["category"], "special", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "                  ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "price", [], "any", false, false, false, 13);
                    echo "
                  ";
                } else {
                    // line 14
                    echo " <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "special", [], "any", false, false, false, 14);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "price", [], "any", false, false, false, 14);
                    echo "</span> ";
                }
                // line 15
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "tax", [], "any", false, false, false, 15)) {
                    echo " <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "tax", [], "any", false, false, false, 15);
                    echo "</span> ";
                }
                echo " </p>
                ";
            }
            // line 17
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "rating", [], "any", false, false, false, 17)) {
                // line 18
                echo "                <div class=\"rating\"> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 19
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "rating", [], "any", false, false, false, 19) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                    }
                    // line 20
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " </div>
                ";
            }
            // line 21
            echo " </div>              
            </div>
          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo " </div>
        </div>

";
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 25,  125 => 21,  116 => 20,  109 => 19,  104 => 18,  101 => 17,  89 => 15,  82 => 14,  76 => 13,  73 => 12,  71 => 11,  67 => 10,  61 => 9,  49 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
