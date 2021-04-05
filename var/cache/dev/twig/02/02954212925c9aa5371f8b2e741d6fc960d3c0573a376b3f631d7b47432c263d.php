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

/* gmusee/index.html.twig */
class __TwigTemplate_7636138f1907d175583a227395895a7d5dc0aa7b641b63f93bcd3cec2ea64995 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gmusee/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gmusee/index.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "gmusee/index.html.twig", 1);
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

        echo "Gmusee index";
        
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
<div class=\"col-lg-12 col-md-12\">
    <div class=\"dashboard-list-box\">
        <div class=\"post-thumbnail\">
    <label for=\"search\"></label><input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">



        <h4>Musée</h4>
        <ul>
    </tr>
    </thead>
    <tbody id=\"all\">




    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gmusee"]) || array_key_exists("gmusee", $context) ? $context["gmusee"] : (function () { throw new RuntimeError('Variable "gmusee" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["gmusees"]) {
            // line 24
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["gmusees"], "images", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 25
                echo "
            <li>

                <div class=\"list-box-listing\">
                    <div class=\"list-box-listing-img\"><a href=\"#\"><img src=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 29))), "html", null, true);
                echo "\" alt=\"\"></a></div>
                    <div class=\"list-box-listing-content\">
                        <div class=\"inner\">
                            <h3><a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gmusee_show", ["id" => twig_get_attribute($this->env, $this->source, $context["gmusees"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gmusees"], "nom", [], "any", false, false, false, 32), "html", null, true);
                echo "</a></h3>
                            <i class=\"fa fa-map-o\"></i>  <span>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gmusees"], "place", [], "any", false, false, false, 33), "html", null, true);
                echo "</span>
                            <div class=\"star-rating\">
                                <div class=\"rating-counter\">";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gmusees"], "description", [], "any", false, false, false, 35), "html", null, true);
                echo "</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"buttons-to-right\">
                <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gmusee_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["gmusees"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\" class=\"button gray\"><i class=\"fa fa-pencil\"></i> Edit</a>
                <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gmusee_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["gmusees"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\" class=\"button red\"><i class=\"fa fa-trash-o\"></i> Delete</a>
                <tbody>  <a  href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gmusee_show", ["id" => twig_get_attribute($this->env, $this->source, $context["gmusees"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\" class=\"button gray\"><i class=\"fa fa-eye\"></i>show</a>
                </tbody>
                <tbody id=\"search\">
                </tbody>

            </li>











            <script
                    src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
            <script>
                \$( document ).ready(function() {
                    \$(\"#search\").keyup(function(e){
                        let value = \$(this).val();
                        \$.ajax({

                            url : \"";
                // line 68
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchStudentx");
                echo "\",
                            type : 'GET',
                            data: {
                                searchValue: value
                            },
                            success : function(retour){
                                if(retour){
                                    \$('#t tbody#search').empty();
                                    \$.each(JSON.parse(retour), function(i, obj) {
                                        \$('#t tbody#all').hide();
                                        \$('#t tbody#search').append('<tr><td> '+obj.id+'  </td><td>'+obj.description+' </td><td></td></tr>');
                                    });
                                }
                                else
                                {
                                    \$('#t tbody#all').show();
                                    \$(`#t tbody#search`).empty();
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gmusees'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
    ";
        // line 97
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["gmusee"]) || array_key_exists("gmusee", $context) ? $context["gmusee"] : (function () { throw new RuntimeError('Variable "gmusee" does not exist.', 97, $this->source); })()));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gmusee/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 97,  223 => 96,  216 => 94,  184 => 68,  156 => 43,  152 => 42,  148 => 41,  139 => 35,  134 => 33,  128 => 32,  122 => 29,  116 => 25,  111 => 24,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Gmusee index{% endblock %}

{% block body %}

<div class=\"col-lg-12 col-md-12\">
    <div class=\"dashboard-list-box\">
        <div class=\"post-thumbnail\">
    <label for=\"search\"></label><input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">



        <h4>Musée</h4>
        <ul>
    </tr>
    </thead>
    <tbody id=\"all\">




    {% for gmusees in gmusee %}
    {% for image in gmusees.images %}

            <li>

                <div class=\"list-box-listing\">
                    <div class=\"list-box-listing-img\"><a href=\"#\"><img src=\"{{ asset ('/uploads/' ~ image.name ) }}\" alt=\"\"></a></div>
                    <div class=\"list-box-listing-content\">
                        <div class=\"inner\">
                            <h3><a href=\"{{ path('gmusee_show', {'id': gmusees.id}) }}\">{{ gmusees.nom }}</a></h3>
                            <i class=\"fa fa-map-o\"></i>  <span>{{ gmusees.place }}</span>
                            <div class=\"star-rating\">
                                <div class=\"rating-counter\">{{ gmusees.description }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"buttons-to-right\">
                <a href=\"{{ path('gmusee_edit', {'id': gmusees.id}) }}\" class=\"button gray\"><i class=\"fa fa-pencil\"></i> Edit</a>
                <a href=\"{{ path('gmusee_delete', {'id': gmusees.id}) }}\" class=\"button red\"><i class=\"fa fa-trash-o\"></i> Delete</a>
                <tbody>  <a  href=\"{{ path('gmusee_show', {'id': gmusees.id}) }}\" class=\"button gray\"><i class=\"fa fa-eye\"></i>show</a>
                </tbody>
                <tbody id=\"search\">
                </tbody>

            </li>











            <script
                    src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
            <script>
                \$( document ).ready(function() {
                    \$(\"#search\").keyup(function(e){
                        let value = \$(this).val();
                        \$.ajax({

                            url : \"{{ path('searchStudentx') }}\",
                            type : 'GET',
                            data: {
                                searchValue: value
                            },
                            success : function(retour){
                                if(retour){
                                    \$('#t tbody#search').empty();
                                    \$.each(JSON.parse(retour), function(i, obj) {
                                        \$('#t tbody#all').hide();
                                        \$('#t tbody#search').append('<tr><td> '+obj.id+'  </td><td>'+obj.description+' </td><td></td></tr>');
                                    });
                                }
                                else
                                {
                                    \$('#t tbody#all').show();
                                    \$(`#t tbody#search`).empty();
                                    \$('#t tbody#search').fadeIn('fast');
                                }
                            },
                        });
                        return false;
                    });
                });
            </script>
            {% endfor %}

            {% endfor %}

    {{ knp_pagination_render(gmusee) }}
{% endblock %}", "gmusee/index.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\gmusee\\index.html.twig");
    }
}
