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

/* categorie/indexBackCategorie.html.twig */
class __TwigTemplate_7c0e0e7d8ba02dc07be2c3768b6dcc30975d54eaf227ba0c39bccf589cff0eae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/indexBackCategorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/indexBackCategorie.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "categorie/indexBackCategorie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "


    <table class=\"table table-stripe\">



        <thead class=\"thead-dark\">
        <tr>
            <th>Id</th>
            <th>Categories</th>
            <th>Nombre de vue</th>
            <th>nombre de questions</th>

        </tr>
        </thead>



        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriesBack"]) || array_key_exists("categoriesBack", $context) ? $context["categoriesBack"] : (function () { throw new RuntimeError('Variable "categoriesBack" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 29
            echo "            <tbody>

            <tr>
                <th>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "</th>
                <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index_back", ["idcategorie" => twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"pn\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "nameCategorie", [], "any", false, false, false, 33), "html", null, true);
            echo "</a></td>

                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "nbrVueCategorie", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "nbrQuestion", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_edit_Back", ["id" => twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" ";
            echo "><i class=\"fas fa-edit\"></i></a>
                </td>

            </tr>
            </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "




    </table>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$( document ).ready(function() {
            var currentRequest = null;
            \$(\"#search\").keyup(function(e){

                var value = \$(this).val();
                if(currentRequest != null) {
                    currentRequest.abort();
                }

                currentRequest = \$.ajax({

                    url : \"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercheajaxBack");
        echo "\",
                    type : 'GET',
                    data: {
                        'searchValue' : value
                    },

                    success : function(retour)
                    {
                        \$('#all').html(retour);

                    },
                });
                return false;
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categorie/indexBackCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 63,  131 => 44,  118 => 38,  113 => 36,  109 => 35,  102 => 33,  98 => 32,  93 => 29,  89 => 28,  68 => 9,  58 => 8,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}






{% block body %}



    <table class=\"table table-stripe\">



        <thead class=\"thead-dark\">
        <tr>
            <th>Id</th>
            <th>Categories</th>
            <th>Nombre de vue</th>
            <th>nombre de questions</th>

        </tr>
        </thead>



        {% for s in categoriesBack %}
            <tbody>

            <tr>
                <th>{{ s.id }}</th>
                <td><a href=\"{{ path('question_index_back', {'idcategorie': s.id})}}\" class=\"pn\">{{ s.nameCategorie }}</a></td>

                <td>{{ s.nbrVueCategorie }}</td>
                <td>{{ s.nbrQuestion }}</td>
                <td>
                    <a href=\"{{ path('categorie_edit_Back', {'id': s.id}) }}\" {#  class=\"btn\"#}><i class=\"fas fa-edit\"></i></a>
                </td>

            </tr>
            </tbody>
        {% endfor %}





    </table>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$( document ).ready(function() {
            var currentRequest = null;
            \$(\"#search\").keyup(function(e){

                var value = \$(this).val();
                if(currentRequest != null) {
                    currentRequest.abort();
                }

                currentRequest = \$.ajax({

                    url : \"{{ path('rechercheajaxBack') }}\",
                    type : 'GET',
                    data: {
                        'searchValue' : value
                    },

                    success : function(retour)
                    {
                        \$('#all').html(retour);

                    },
                });
                return false;
            });
        });
    </script>
{% endblock %}", "categorie/indexBackCategorie.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\categorie\\indexBackCategorie.html.twig");
    }
}
