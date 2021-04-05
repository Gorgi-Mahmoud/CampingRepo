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

/* event/index.html.twig */
class __TwigTemplate_08313f93ce8d1a45541029de2ea6f136e39c8b0ced7ecbd9faac0b6eeff589e9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "event/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <br>
    <br>
    <br>

    <div class=\"album py-5 bg-light\">
        <div class=\"container\">
            <div class=\"d-flex align-items-center\">
                <input class=\"form-control\" type=\"search\" id=\"search\" placeholder=\"Search by Nom\">
                <a  href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchrdvvv");
        echo "\"><i class=\"fa fa-sort\"></i></a>
            </div>

            <div class=\"row\">
                <div class=\"col-md-12 col-sm-36 \">
                <div id=\"all\">
                ";
        // line 17
        $this->loadTemplate("event/recherche1.html.twig", "event/index.html.twig", 17)->display($context);
        // line 18
        echo "                    ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 18, $this->source); })()));
        echo "
                </div>
                <div align=\"left\" border=\"2\" id=\"search\">
                </div>
                </div>
                </div>
            </div>
        </div>



        <div>
            <center>
                ";
        // line 31
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 32
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_new");
            echo "\" class=\"btn btn-primary btn-lg\">
                        Ajouter un nouvel évennement
                    </a>
                    ";
        }
        // line 36
        echo "

    </center>
    </div>

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
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchrdvvv");
        echo "\",
                type : 'GET',
                data: {
                    'searchValue' : value
                },

                success : function(retour)
                {
                    \$('#all').html(retour);

                }

            });
            return false;
        });
    });
</script>
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 54,  116 => 36,  108 => 32,  106 => 31,  89 => 18,  87 => 17,  78 => 11,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}
{% block body %}
    <br>
    <br>
    <br>

    <div class=\"album py-5 bg-light\">
        <div class=\"container\">
            <div class=\"d-flex align-items-center\">
                <input class=\"form-control\" type=\"search\" id=\"search\" placeholder=\"Search by Nom\">
                <a  href=\"{{ path('searchrdvvv') }}\"><i class=\"fa fa-sort\"></i></a>
            </div>

            <div class=\"row\">
                <div class=\"col-md-12 col-sm-36 \">
                <div id=\"all\">
                {% include 'event/recherche1.html.twig' %}
                    {{ knp_pagination_render(events) }}
                </div>
                <div align=\"left\" border=\"2\" id=\"search\">
                </div>
                </div>
                </div>
            </div>
        </div>



        <div>
            <center>
                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('event_new') }}\" class=\"btn btn-primary btn-lg\">
                        Ajouter un nouvel évennement
                    </a>
                    {% endif %}


    </center>
    </div>

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

                url : \"{{ path('searchrdvvv') }}\",
                type : 'GET',
                data: {
                    'searchValue' : value
                },

                success : function(retour)
                {
                    \$('#all').html(retour);

                }

            });
            return false;
        });
    });
</script>
</script>

{% endblock %}

", "event/index.html.twig", "C:\\Users\\Admin\\Desktop\\piuser\\mydir\\templates\\event\\index.html.twig");
    }
}
