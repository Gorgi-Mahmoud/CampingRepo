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

/* commande/stat.html.twig */
class __TwigTemplate_bd64e96041e49987d634c2027a7e1dac5372ca877ee976c3e9c2fde9b047646d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/stat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/stat.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "commande/stat.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Statistics ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


<script src=\"https://kit.fontawesome.com/f821c4ac43.js\" crossorigin=\"anonymous\"></script>

<div class=\"container-fluid\">
    <h3>Statistics</h3>
    <div class=\"row\">

        <div class=\"col-md-3\">
            <div class=\"card bg-danger text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-shopping-bag fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "<br> Products</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class=\"col-md-3\">
            <div class=\"card bg-warning text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-4\">
                            <i class=\"far fa-credit-card fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 39, $this->source); })()), "html", null, true);
        echo " Purchases</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"alert alert-success\">
                <h3 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-up\"></i>the most popular products</h3>
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>number of sales</th>

                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topproduit"]) || array_key_exists("topproduit", $context) ? $context["topproduit"] : (function () { throw new RuntimeError('Variable "topproduit" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 62
            echo "                        <tr>
                            <td>
                                <img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, $context["produit"], "img_prod", [], "any", false, false, false, 64))), "html", null, true);
            echo "\" height=\"20\" width=\"20\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom_prod", [], "any", false, false, false, 64), "html", null, true);
            echo "
                            </td>
                            <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "qte_prod", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </tbody>
                </table>
            </div>
        </div>



        <div class=\"col-lg-6\">
            <div class=\"alert alert-danger\">
                <h3 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-down\"></i>the least popular products</h3>
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>number of sales</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["worstproduit"]) || array_key_exists("worstproduit", $context) ? $context["worstproduit"] : (function () { throw new RuntimeError('Variable "worstproduit" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 89
            echo "                        <tr>
                            <td>
                                <img src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, $context["p"], "img_prod", [], "any", false, false, false, 91))), "html", null, true);
            echo "\" height=\"20\" width=\"20\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom_prod", [], "any", false, false, false, 91), "html", null, true);
            echo "
                            </td>
                            <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "qte_prod", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commande/stat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 97,  211 => 93,  204 => 91,  200 => 89,  196 => 88,  176 => 70,  166 => 66,  159 => 64,  155 => 62,  151 => 61,  126 => 39,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Statistics {% endblock title %}

{% block body %}



<script src=\"https://kit.fontawesome.com/f821c4ac43.js\" crossorigin=\"anonymous\"></script>

<div class=\"container-fluid\">
    <h3>Statistics</h3>
    <div class=\"row\">

        <div class=\"col-md-3\">
            <div class=\"card bg-danger text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-shopping-bag fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">{{ produit }}<br> Products</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class=\"col-md-3\">
            <div class=\"card bg-warning text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-4\">
                            <i class=\"far fa-credit-card fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">{{ commande }} Purchases</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"alert alert-success\">
                <h3 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-up\"></i>the most popular products</h3>
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>number of sales</th>

                    </tr>
                    </thead>
                    <tbody>
                    {% for produit in topproduit %}
                        <tr>
                            <td>
                                <img src=\"{{ asset('uploads/photos/' ~ produit.img_prod) }}\" height=\"20\" width=\"20\"> {{ produit.nom_prod }}
                            </td>
                            <td>{{ produit.qte_prod }}</td>

                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>



        <div class=\"col-lg-6\">
            <div class=\"alert alert-danger\">
                <h3 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-down\"></i>the least popular products</h3>
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>number of sales</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for p in worstproduit %}
                        <tr>
                            <td>
                                <img src=\"{{ asset('uploads/photos/' ~ p.img_prod) }}\" height=\"20\" width=\"20\"> {{ p.nom_prod }}
                            </td>
                            <td>{{ p.qte_prod }}</td>

                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}


", "commande/stat.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\commande\\stat.html.twig");
    }
}
