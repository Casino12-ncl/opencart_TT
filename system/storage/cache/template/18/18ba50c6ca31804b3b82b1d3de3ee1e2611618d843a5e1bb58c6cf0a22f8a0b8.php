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
class __TwigTemplate_5d3b19a0d79babbc1d13ffdbb5dd1bbe9cdcc642eafc113022f41acbf3b51d29 extends \Twig\Template
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

      <div class=\"row\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_list"] ?? null);
        echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_grid"] ?? null);
        echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\"><a href=\"";
        // line 11
        echo ($context["compare"] ?? null);
        echo "\" id=\"compare-total\" class=\"btn btn-link\">";
        echo ($context["text_compare"] ?? null);
        echo "</a></div>
        </div>
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 15
        echo ($context["text_sort"] ?? null);
        echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 18
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 18) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                // line 19
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 19);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 19);
                echo "</option>
              ";
            } else {
                // line 21
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 21);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 21);
                echo "</option>
              ";
            }
            // line 23
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
        // line 29
        echo ($context["text_limit"] ?? null);
        echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 32
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 32) == ($context["limit"] ?? null))) {
                // line 33
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 33);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 33);
                echo "</option>
              ";
            } else {
                // line 35
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 35);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 35);
                echo "</option>
              ";
            }
            // line 37
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </select>
          </div>
        </div>
      </div>
      <div class=\"row\"> ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 43
            echo "        <div class=\"category-layout category-list col-xs-12\">
          <div class=\"category-thumb\">
            <div class=\"image\"><a href=\"";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 45);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 45);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 45);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 45);
            echo "\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 48);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 48);
            echo "</a></h4>
                <p>";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 49);
            echo "</p>
                ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, $context["category"], "price", [], "any", false, false, false, 50)) {
                // line 51
                echo "                <p class=\"price\"> ";
                if ( !twig_get_attribute($this->env, $this->source, $context["category"], "special", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "                  ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "price", [], "any", false, false, false, 52);
                    echo "
                  ";
                } else {
                    // line 53
                    echo " <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "special", [], "any", false, false, false, 53);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "price", [], "any", false, false, false, 53);
                    echo "</span> ";
                }
                // line 54
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "tax", [], "any", false, false, false, 54)) {
                    echo " <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "tax", [], "any", false, false, false, 54);
                    echo "</span> ";
                }
                echo " </p>
                ";
            }
            // line 56
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "rating", [], "any", false, false, false, 56)) {
                // line 57
                echo "                <div class=\"rating\"> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 58
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "rating", [], "any", false, false, false, 58) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                    }
                    // line 59
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " </div>
                ";
            }
            // line 60
            echo " </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 62);
            echo "', '";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "minimum", [], "any", false, false, false, 62);
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 63
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 63);
            echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 64
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 64);
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
        // line 69
        echo " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
        // line 71
        echo ($context["pagination"] ?? null);
        echo "</div>
        <div class=\"col-sm-6 text-right\">";
        // line 72
        echo ($context["results"] ?? null);
        echo "</div>
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
        return array (  269 => 72,  265 => 71,  261 => 69,  247 => 64,  241 => 63,  233 => 62,  229 => 60,  220 => 59,  213 => 58,  208 => 57,  205 => 56,  193 => 54,  186 => 53,  180 => 52,  177 => 51,  175 => 50,  171 => 49,  165 => 48,  153 => 45,  149 => 43,  145 => 42,  139 => 38,  133 => 37,  125 => 35,  117 => 33,  114 => 32,  110 => 31,  105 => 29,  98 => 24,  92 => 23,  84 => 21,  76 => 19,  73 => 18,  69 => 17,  64 => 15,  55 => 11,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
