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
class __TwigTemplate_f9262097e9d7b6769bc65d5bd0a61ad3434b1933e74e24099d31f5eef5c03e7d extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "<div id=\"product-category\" class=\"container\">
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
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 23);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "minimum", [], "any", false, false, false, 23);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 24
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 24);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 25
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 25);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo " </div>
        </div>
";
        }
        // line 32
        echo " 
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
        return array (  163 => 32,  158 => 30,  144 => 25,  138 => 24,  130 => 23,  126 => 21,  117 => 20,  110 => 19,  105 => 18,  102 => 17,  90 => 15,  83 => 14,  77 => 13,  74 => 12,  72 => 11,  68 => 10,  62 => 9,  50 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
