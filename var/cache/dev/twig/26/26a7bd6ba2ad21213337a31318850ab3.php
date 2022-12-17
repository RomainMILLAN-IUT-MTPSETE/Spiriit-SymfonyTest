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

/* base.html.twig */
class __TwigTemplate_b186d09bda893d5a4a4c3e15b2a1783c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 2
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <!--Link to CSS-->
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    
    <title>";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
    <header class=\"sts-header bg-light\">
        <div class=\"d-flex align-items-center ms-3\">
            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/spiriit-logo.svg"), "html", null, true);
        echo "\" class=\"h-auto\" alt=\"Logo spiriit\"/>
            <h1 class=\"ms-2\">Test-Symfony</h1>
        </div>
        <nav class=\"navbar m-md-3\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"nav-link\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_list");
        echo "\" class=\"nav-link\">Produit</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        echo "\"><button class=\"btn btn-primary\">Panier (";
        echo twig_escape_filter($this->env, (isset($context["numberProductOnCart"]) || array_key_exists("numberProductOnCart", $context) ? $context["numberProductOnCart"] : (function () { throw new RuntimeError('Variable "numberProductOnCart" does not exist.', 36, $this->source); })()), "html", null, true);
        echo ")</button></a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "flashes", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 43
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 44
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\" role=\"alert\">
                    ";
                // line 45
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "    </main>
    <footer class=\"footer\">
        <p class=\"m-3\">Romain MILLAN © 2022 - Tous droits réservés - <a href=\"#\">Mentions légales</a></p>
    </footer>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "STS / Homepage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 50
        echo "            <div>
                <div class=\"mt-5 d-flex flex-column align-items-center h-auto\">
                    <img class=\"h-auto\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/spiriit-logo.svg"), "html", null, true);
        echo "\" alt=\"Logo spiriit\">
                    <h3 class=\"ms-3 h-auto fw-semibold\">Test-Symfony</h3>
                </div>

                <p class=\"fs-4 text-center mt-5 w-25 m-auto\">Un test fait par Romain MILLAN pour obtenir un stage dans l'entreprise <span class=\"fw-bolder\">spiri<span class=\"text-primary\">i</span>t</span></p>
            </div>
            
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 52,  230 => 50,  220 => 49,  201 => 19,  188 => 16,  178 => 15,  165 => 12,  155 => 11,  140 => 60,  137 => 49,  131 => 48,  122 => 45,  117 => 44,  112 => 43,  108 => 42,  97 => 36,  91 => 33,  85 => 30,  76 => 24,  68 => 19,  65 => 18,  63 => 15,  60 => 14,  58 => 11,  47 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/base.html.twig #}
<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <!--Link to CSS-->
    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}

    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %}
    
    <title>{% block title %}STS / Homepage{% endblock %}</title>
</head>
<body>
    <header class=\"sts-header bg-light\">
        <div class=\"d-flex align-items-center ms-3\">
            <img src=\"{{ asset('img/spiriit-logo.svg') }}\" class=\"h-auto\" alt=\"Logo spiriit\"/>
            <h1 class=\"ms-2\">Test-Symfony</h1>
        </div>
        <nav class=\"navbar m-md-3\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a href=\"{{ path('homepage') }}\" class=\"nav-link\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('product_list') }}\" class=\"nav-link\">Produit</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('cart_index') }}\"><button class=\"btn btn-primary\">Panier ({{ numberProductOnCart }})</button></a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }}\" role=\"alert\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
        {% block content %}
            <div>
                <div class=\"mt-5 d-flex flex-column align-items-center h-auto\">
                    <img class=\"h-auto\" src=\"{{ asset('img/spiriit-logo.svg') }}\" alt=\"Logo spiriit\">
                    <h3 class=\"ms-3 h-auto fw-semibold\">Test-Symfony</h3>
                </div>

                <p class=\"fs-4 text-center mt-5 w-25 m-auto\">Un test fait par Romain MILLAN pour obtenir un stage dans l'entreprise <span class=\"fw-bolder\">spiri<span class=\"text-primary\">i</span>t</span></p>
            </div>
            
        {% endblock %}
    </main>
    <footer class=\"footer\">
        <p class=\"m-3\">Romain MILLAN © 2022 - Tous droits réservés - <a href=\"#\">Mentions légales</a></p>
    </footer>
</body>
</html>", "base.html.twig", "/Users/millanr/Documents/spiriit-test-symfony/templates/base.html.twig");
    }
}
