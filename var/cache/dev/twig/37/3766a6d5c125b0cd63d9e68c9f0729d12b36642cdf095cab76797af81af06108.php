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

/* question/index.html.twig */
class __TwigTemplate_be6f665962e6459018bff667868de576807a3191bba7ac6a552156d74930f862 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "question/index.html.twig", 1);
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


    <style>
        .pn{
            color: black;
        }

        .Vue {


            margin-top : 10px;
            margin-left: 543px;
        }


    </style>
    <br>
    <br>
    <br>
    <br><br> <br>
    <h1>Questions</h1>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <table id=\"tableac\" class=\"table\">
        <thead>

        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 34
            echo "            <tr>

<div class=\"question\">
                <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponse_index", ["idquestion" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"pn\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 37), "html", null, true);
            echo "</a>
</div>
                    <div class=\"col-md-pull-0\" >
                  <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">modifier </a>
                    </div>
                   <d-iv class=\"Vue\">
                      NombreDeVue <br> ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "nbrVue", [], "any", false, false, false, 43), "html", null, true);
            echo "
                   </d-iv>
                </td>

            </tr>

        </tbody>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
        <div class=\"pull-left\" >
            <label></label>
            <label>

                <input type=\"text\" id=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Search\">


            </label>


            <input type=\"submit\" class=\"btn btn-success\" value=\"RECHERCHER\">
        </div>
    </table>

    <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_new", ["idcategorie" => (isset($context["idcategorie"]) || array_key_exists("idcategorie", $context) ? $context["idcategorie"] : (function () { throw new RuntimeError('Variable "idcategorie" does not exist.', 94, $this->source); })())]), "html", null, true);
        echo "\">Ajouter une question</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "question/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 94,  166 => 79,  124 => 43,  118 => 40,  110 => 37,  105 => 34,  101 => 33,  92 => 27,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}


{% block body %}



    <style>
        .pn{
            color: black;
        }

        .Vue {


            margin-top : 10px;
            margin-left: 543px;
        }


    </style>
    <br>
    <br>
    <br>
    <br><br> <br>
    <h1>Questions</h1>
    <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
    <table id=\"tableac\" class=\"table\">
        <thead>

        </thead>
        <tbody>
        {% for question in questions %}
            <tr>

<div class=\"question\">
                <td><a href=\"{{ path('reponse_index', {'idquestion': question.id})}}\" class=\"pn\">{{ question.question }}</a>
</div>
                    <div class=\"col-md-pull-0\" >
                  <a href=\"{{ path('question_edit', {'id': question.id}) }}\">modifier </a>
                    </div>
                   <d-iv class=\"Vue\">
                      NombreDeVue <br> {{ question.nbrVue }}
                   </d-iv>
                </td>

            </tr>

        </tbody>
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

        <div class=\"pull-left\" >
            <label></label>
            <label>

                <input type=\"text\" id=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Search\">


            </label>


            <input type=\"submit\" class=\"btn btn-success\" value=\"RECHERCHER\">
        </div>
    </table>

    <a href=\"{{ path('question_new' ,{'idcategorie': idcategorie }) }}\">Ajouter une question</a>

{% endblock %}


", "question/index.html.twig", "C:\\Users\\Admin\\Desktop\\piuser\\mydir\\templates\\question\\index.html.twig");
    }
}
