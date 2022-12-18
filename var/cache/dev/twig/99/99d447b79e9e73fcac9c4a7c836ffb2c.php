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

/* cart/cart.html.twig */
class __TwigTemplate_2290be3e36eee32ca1f10f44f95a4451 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/cart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/cart.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/cart.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"cart--container\">
        <h3 class=\"mt-5 ms-3\">Votre panier (";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 6, $this->source); })())), "html", null, true);
        echo "):</h3>

        <table class=\"table w-75 m-auto\">
            <thead>
                <tr>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Quantité</th>
                    <th scope=\"col\">Prix</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 19
            echo "                    <tr>
                        <th scope=\"row\" class=\"fw-normal\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], 0, [], "array", false, false, false, 20), "html", null, true);
            echo "</th>
                        <th class=\"fw-normal\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], 1, [], "array", false, false, false, 21), "html", null, true);
            echo "</th>
                        <th class=\"fw-normal\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], 2, [], "array", false, false, false, 22), "html", null, true);
            echo "</th>
                        <th class=\"fw-normal\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], 3, [], "array", false, false, false, 23), "html", null, true);
            echo "</th>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </tbody>
        </table>

        <div class=\"d-flex flex-row justify-content-between w-75 m-auto mt-5\">
            <p><span class=\"fw-semibold\">Total:</span> ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["priceTotal"]) || array_key_exists("priceTotal", $context) ? $context["priceTotal"] : (function () { throw new RuntimeError('Variable "priceTotal" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "</p>
            <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_clear");
        echo "\"><button class=\"btn btn-dark\" id=\"clearCart\">Vider le panier</button></a>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 31,  120 => 30,  114 => 26,  105 => 23,  101 => 22,  97 => 21,  93 => 20,  90 => 19,  86 => 18,  71 => 6,  68 => 5,  58 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/cart/cart.html.twig #}
{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"cart--container\">
        <h3 class=\"mt-5 ms-3\">Votre panier ({{ products|length }}):</h3>

        <table class=\"table w-75 m-auto\">
            <thead>
                <tr>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Quantité</th>
                    <th scope=\"col\">Prix</th>
                </tr>
            </thead>
            <tbody>
                {% for product in products %}
                    <tr>
                        <th scope=\"row\" class=\"fw-normal\">{{ product[0] }}</th>
                        <th class=\"fw-normal\">{{ product[1] }}</th>
                        <th class=\"fw-normal\">{{ product[2] }}</th>
                        <th class=\"fw-normal\">{{ product[3] }}</th>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <div class=\"d-flex flex-row justify-content-between w-75 m-auto mt-5\">
            <p><span class=\"fw-semibold\">Total:</span> {{ priceTotal }}</p>
            <a href=\"{{ path('cart_clear') }}\"><button class=\"btn btn-dark\" id=\"clearCart\">Vider le panier</button></a>
        </div>
    </div>
{% endblock %}", "cart/cart.html.twig", "/Users/millanr/Documents/spiriit-test-symfony/templates/cart/cart.html.twig");
    }
}
