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

/* reponse/index.html.twig */
class __TwigTemplate_aa6ab981f2722d4639199c5fd12bed0c9b8d567d2bd69b369bcd16cb3f023d13 extends Template
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
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/index.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "reponse/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <table class=\"table\">
        <thead>


        </thead>
        <tbody>
     <h2>  ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 19, $this->source); })()), "question", [], "any", false, false, false, 19), "html", null, true);
        echo " </h2>
     ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 20, $this->source); })()), "reponse", [], "any", false, false, false, 20));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 21
            echo "
            ";
            // line 22
            $context["nb1"] = 0;
            // line 23
            echo "            ";
            $context["nb0"] = 0;
            // line 24
            echo "            <tr>

                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 26), "html", null, true);
            echo "
                    <div class=\"pull-right\" >
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addreaction", ["idquestion" => (isset($context["idquestion"]) || array_key_exists("idquestion", $context) ? $context["idquestion"] : (function () { throw new RuntimeError('Variable "idquestion" does not exist.', 28, $this->source); })()), "idreponse" => twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 28), "reaction" => 1]), "html", null, true);
            echo "\" style=\"color: green; margin: 5px;\"> <i class=\"fa fa-thumbs-up\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["reponse"], "reaction", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["reactions"]) {
                echo " ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["reactions"], "reaction", [], "any", false, false, false, 28), 1))) {
                    echo " ";
                    $context["nb1"] = ((isset($context["nb1"]) || array_key_exists("nb1", $context) ? $context["nb1"] : (function () { throw new RuntimeError('Variable "nb1" does not exist.', 28, $this->source); })()) + 1);
                    echo " ";
                }
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reactions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["nb1"]) || array_key_exists("nb1", $context) ? $context["nb1"] : (function () { throw new RuntimeError('Variable "nb1" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "</i></a>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addreaction", ["idquestion" => (isset($context["idquestion"]) || array_key_exists("idquestion", $context) ? $context["idquestion"] : (function () { throw new RuntimeError('Variable "idquestion" does not exist.', 29, $this->source); })()), "idreponse" => twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 29), "reaction" => 0]), "html", null, true);
            echo "\" style=\"color: red; margin: 5px;\">  <i class=\"fa fa-thumbs-down\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["reponse"], "reaction", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["reactions"]) {
                echo " ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["reactions"], "reaction", [], "any", false, false, false, 29), 0))) {
                    echo " ";
                    $context["nb0"] = ((isset($context["nb0"]) || array_key_exists("nb0", $context) ? $context["nb0"] : (function () { throw new RuntimeError('Variable "nb0" does not exist.', 29, $this->source); })()) + 1);
                    echo " ";
                }
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reactions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["nb0"]) || array_key_exists("nb0", $context) ? $context["nb0"] : (function () { throw new RuntimeError('Variable "nb0" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "</i></a>
                    </div>


                    ";
            // line 39
            echo "                    <div class=\"col-md-pull-0\" >
<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponse_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">edit</a></td>

                <style type=\"text/css\">
                    .btn-like{
                        color: black;
                    }
                    .liked{
                        color: royalblue;
                    }
                </style>


            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponse_new", ["idquestion" => (isset($context["idquestion"]) || array_key_exists("idquestion", $context) ? $context["idquestion"] : (function () { throw new RuntimeError('Variable "idquestion" does not exist.', 61, $this->source); })())]), "html", null, true);
        echo "\">Ajouter une commentaire</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reponse/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 61,  186 => 58,  177 => 54,  158 => 40,  155 => 39,  131 => 29,  110 => 28,  105 => 26,  101 => 24,  98 => 23,  96 => 22,  93 => 21,  88 => 20,  84 => 19,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}


{% block body %}

<br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <table class=\"table\">
        <thead>


        </thead>
        <tbody>
     <h2>  {{ question.question }} </h2>
     {% for reponse in question.reponse %}

            {% set nb1=0 %}
            {% set nb0=0 %}
            <tr>

                <td>{{ reponse.reponse }}
                    <div class=\"pull-right\" >
                        <a href=\"{{ path('addreaction',{'idquestion':idquestion , 'idreponse' : reponse.id , 'reaction':1}) }}\" style=\"color: green; margin: 5px;\"> <i class=\"fa fa-thumbs-up\">{% for reactions in reponse.reaction %} {% if reactions.reaction==1 %} {% set nb1=nb1+1 %} {% endif%} {% endfor %} {{ nb1 }}</i></a>
                        <a href=\"{{ path('addreaction',{'idquestion':idquestion , 'idreponse' : reponse.id , 'reaction':0}) }}\" style=\"color: red; margin: 5px;\">  <i class=\"fa fa-thumbs-down\">{% for reactions in reponse.reaction %} {% if reactions.reaction==0 %} {% set nb0=nb0+1 %} {% endif%} {% endfor %} {{ nb0 }}</i></a>
                    </div>


                    {#  <a href=\"#\" class=\"btn btn-primary\"> Lire la suite</a>
                    <a href=\"#\" class=\"btn btn-link\">
                        <i class=\"far fa-thumbs-up\"></i>
                        <span class=\"js-likes\">10</span>
                        <span class=\"js-label\">j'aime</span>
                    </a> #}
                    <div class=\"col-md-pull-0\" >
<a href=\"{{ path('reponse_edit', {'id': reponse.id}) }}\">edit</a></td>

                <style type=\"text/css\">
                    .btn-like{
                        color: black;
                    }
                    .liked{
                        color: royalblue;
                    }
                </style>


            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('reponse_new',{'idquestion': idquestion }) }}\">Ajouter une commentaire</a>
{% endblock %}

", "reponse/index.html.twig", "C:\\Users\\Admin\\Desktop\\piuser\\mydir\\templates\\reponse\\index.html.twig");
    }
}
