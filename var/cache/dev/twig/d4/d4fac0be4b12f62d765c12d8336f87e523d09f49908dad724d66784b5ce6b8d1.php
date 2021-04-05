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

/* commande/showback.html.twig */
class __TwigTemplate_5afa8063f12bc7e6844bb7fc8f59d40bcaae4834ffd28c2458beb36190bc885f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/showback.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/showback.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "commande/showback.html.twig", 1);
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

        echo "Commandes";
        
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
        echo "    <h3>Liste Commandes:</h3>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <table id=\"tableac\" class=\"table\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Order Date</th>
            <th>Client Address</th>
            <th>Payment Mode</th>
            <th>Phone Number</th>
            <th>Mail Address</th>
            <th>Total Price</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["commande"], "datecomm", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "datecomm", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "addressecom", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "etatcomm", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "numtel", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "mail", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "prixtot", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>

                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_editback", ["id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">modifier/supprimer</a>

                </td>
                <script>
                    \$(document).ready(function(){
                        \$('#search').keyup(function(){
                            search_table(\$(this).val());
                        });
                        function search_table(value){
                            \$('#tableac tbody tr').each(function(){
                                var found = 'false';
                                \$(this).each(function(){
                                    if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                                    {
                                        found = 'true';
                                    }
                                });
                                if(found == 'true')
                                {
                                    \$(this).show();

                                }
                                else
                                {
                                    \$(this).hide();

                                }
                            });
                        }
                    });
                </script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                <input type=\"text\" id=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Search\">
        </tbody>

    </table>

    <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_newback");
        echo "\">Créer Commande</a>
    <a href =\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impp");
        echo "\" class=\"btn btn-primary\" >imprimer</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commande/showback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 71,  191 => 70,  184 => 65,  146 => 33,  140 => 30,  136 => 29,  132 => 28,  128 => 27,  124 => 26,  120 => 25,  116 => 24,  113 => 23,  109 => 22,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Commandes{% endblock %}

{% block body %}
    <h3>Liste Commandes:</h3>
    <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
    <table id=\"tableac\" class=\"table\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Order Date</th>
            <th>Client Address</th>
            <th>Payment Mode</th>
            <th>Phone Number</th>
            <th>Mail Address</th>
            <th>Total Price</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for commande in commandes %}
            <tr>
                <td>{{ commande.id }}</td>
                <td>{{ commande.datecomm ? commande.datecomm|date('Y-m-d') : '' }}</td>
                <td>{{ commande.addressecom }}</td>
                <td>{{ commande.etatcomm }}</td>
                <td>{{ commande.numtel }}</td>
                <td>{{ commande.mail }}</td>
                <td>{{ commande.prixtot }}</td>
                <td>

                    <a href=\"{{ path('commande_editback', {'id': commande.id}) }}\">modifier/supprimer</a>

                </td>
                <script>
                    \$(document).ready(function(){
                        \$('#search').keyup(function(){
                            search_table(\$(this).val());
                        });
                        function search_table(value){
                            \$('#tableac tbody tr').each(function(){
                                var found = 'false';
                                \$(this).each(function(){
                                    if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                                    {
                                        found = 'true';
                                    }
                                });
                                if(found == 'true')
                                {
                                    \$(this).show();

                                }
                                else
                                {
                                    \$(this).hide();

                                }
                            });
                        }
                    });
                </script>
        {% endfor %}
                <input type=\"text\" id=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Search\">
        </tbody>

    </table>

    <a href=\"{{ path('commande_newback') }}\">Créer Commande</a>
    <a href =\"{{ path('impp') }}\" class=\"btn btn-primary\" >imprimer</a>
{% endblock %}

", "commande/showback.html.twig", "C:\\Users\\21624\\Downloads\\integrationfinalpi\\mydir\\templates\\commande\\showback.html.twig");
    }
}
