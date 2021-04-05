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

/* siteh/index.html.twig */
class __TwigTemplate_7e5cc84f6a7990f8bf599fdba3c70f0c5664af3f0926973838962e16bfd2b5d6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "siteh/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "siteh/index.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "siteh/index.html.twig", 1);
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

        echo "Siteh index";
        
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
        echo "    <div class=\"col-lg-12 col-md-12\">
    <div class=\"dashboard-list-box\">
    <div class=\"post-thumbnail\">
    </div>
    <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">
    <div>

    <h4>Site Historique</h4>
    <ul>

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sitehs"]) || array_key_exists("sitehs", $context) ? $context["sitehs"] : (function () { throw new RuntimeError('Variable "sitehs" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["siteh"]) {
            // line 17
            echo "


        <li>
            <div class=\"list-box-listing\">
                <div class=\"list-box-listing-img\"><a href=\"#\"><img src=\"\" alt=\"\"></a></div>
                <div class=\"list-box-listing-content\">
                    <div class=\"inner\">
                        <h3><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("siteh_show", ["id" => twig_get_attribute($this->env, $this->source, $context["siteh"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["siteh"], "nom", [], "any", false, false, false, 25), "html", null, true);
            echo "</a></h3>
                        <i class=\"fa fa-map-o\"></i>  <span>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["siteh"], "place", [], "any", false, false, false, 26), "html", null, true);
            echo "</span>
                        <div class=\"star-rating\">
                            <div class=\"rating-counter\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["siteh"], "description", [], "any", false, false, false, 28), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"buttons-to-right\">
                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("siteh_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["siteh"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"button gray\"><i class=\"fa fa-pencil\"></i> Edit</a>
                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("siteh_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["siteh"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"button red\"><i class=\"fa fa-trash-o\"></i> Delete</a>
                <td> <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("siteh_show", ["id" => twig_get_attribute($this->env, $this->source, $context["siteh"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\"class=\"button gray\"><i class=\"fa fa-eye\"></i>show</a>
            </div>
        </li>



        </tbody>
        <tbody id=\"search\">
        </tbody>

        <script
                src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"), "html", null, true);
            echo "\">
        </script>
        <script>
            \$( document ).ready(function() {
                \$(\"#search\").keyup(function(e){

                    var value = \$(this).val();

                    \$.ajax({

                        url : \"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("siteh_show", ["id" => twig_get_attribute($this->env, $this->source, $context["siteh"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\",

                        type : 'GET',

                        data: {
                            'searchValue' : value
                        },

                        success : function(retour){
                            if(retour){
                                \$('#t tbody#search').empty();
                                \$.each(JSON.parse(retour), function(i, obj) {
                                    \$('#t tbody#all').hide();
                                    \$('#t tbody#search').append(<tr><td> '+obj.id+' </td> <td>' +obj.place+' </td><td> '+obj.nom+' </td><td> </td></tr>);
                                });
                            }
                            else
                            {
                                \$('#t tbody#all').show();
                                \$('#t tbody#search').empty();
                                \$('#t tbody#search').fadeIn('fast');
                            }
                        },
                    });
                    return false;
                });
            });
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['siteh'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "siteh/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 86,  169 => 57,  156 => 47,  142 => 36,  138 => 35,  134 => 34,  125 => 28,  120 => 26,  114 => 25,  104 => 17,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Siteh index{% endblock %}

{% block body %}
    <div class=\"col-lg-12 col-md-12\">
    <div class=\"dashboard-list-box\">
    <div class=\"post-thumbnail\">
    </div>
    <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">
    <div>

    <h4>Site Historique</h4>
    <ul>

    {% for siteh in sitehs %}



        <li>
            <div class=\"list-box-listing\">
                <div class=\"list-box-listing-img\"><a href=\"#\"><img src=\"\" alt=\"\"></a></div>
                <div class=\"list-box-listing-content\">
                    <div class=\"inner\">
                        <h3><a href=\"{{ path('siteh_show', {'id': siteh.id}) }}\">{{ siteh.nom }}</a></h3>
                        <i class=\"fa fa-map-o\"></i>  <span>{{ siteh.place }}</span>
                        <div class=\"star-rating\">
                            <div class=\"rating-counter\">{{ siteh.description }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"buttons-to-right\">
                <a href=\"{{ path('siteh_edit', {'id': siteh.id}) }}\" class=\"button gray\"><i class=\"fa fa-pencil\"></i> Edit</a>
                <a href=\"{{ path('siteh_delete', {'id': siteh.id}) }}\" class=\"button red\"><i class=\"fa fa-trash-o\"></i> Delete</a>
                <td> <a href=\"{{ path('siteh_show', {'id': siteh.id}) }}\"class=\"button gray\"><i class=\"fa fa-eye\"></i>show</a>
            </div>
        </li>



        </tbody>
        <tbody id=\"search\">
        </tbody>

        <script
                src=\"{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}\">
        </script>
        <script>
            \$( document ).ready(function() {
                \$(\"#search\").keyup(function(e){

                    var value = \$(this).val();

                    \$.ajax({

                        url : \"{{ path('siteh_show', {'id': siteh.id}) }}\",

                        type : 'GET',

                        data: {
                            'searchValue' : value
                        },

                        success : function(retour){
                            if(retour){
                                \$('#t tbody#search').empty();
                                \$.each(JSON.parse(retour), function(i, obj) {
                                    \$('#t tbody#all').hide();
                                    \$('#t tbody#search').append(<tr><td> '+obj.id+' </td> <td>' +obj.place+' </td><td> '+obj.nom+' </td><td> </td></tr>);
                                });
                            }
                            else
                            {
                                \$('#t tbody#all').show();
                                \$('#t tbody#search').empty();
                                \$('#t tbody#search').fadeIn('fast');
                            }
                        },
                    });
                    return false;
                });
            });
        </script>
    {% endfor %}

{% endblock %}", "siteh/index.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\siteh\\index.html.twig");
    }
}
