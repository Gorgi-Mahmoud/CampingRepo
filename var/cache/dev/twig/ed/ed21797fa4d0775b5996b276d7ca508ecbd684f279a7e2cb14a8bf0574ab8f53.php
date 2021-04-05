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

/* gmusee/show.html.twig */
class __TwigTemplate_2e1bb6adc1bc9bac00c2482add1b6db3a087cc0c3c1b18b11f65587e7c98803e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gmusee/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gmusee/show.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "gmusee/show.html.twig", 1);
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

        echo "Gmusee";
        
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
    <h1>Musée</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gmusee"]) || array_key_exists("gmusee", $context) ? $context["gmusee"] : (function () { throw new RuntimeError('Variable "gmusee" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>

            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gmusee"]) || array_key_exists("gmusee", $context) ? $context["gmusee"] : (function () { throw new RuntimeError('Variable "gmusee" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Place</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gmusee"]) || array_key_exists("gmusee", $context) ? $context["gmusee"] : (function () { throw new RuntimeError('Variable "gmusee" does not exist.', 22, $this->source); })()), "place", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gmusee"]) || array_key_exists("gmusee", $context) ? $context["gmusee"] : (function () { throw new RuntimeError('Variable "gmusee" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Images</th>

                <td>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["gmusee"]) || array_key_exists("gmusee", $context) ? $context["gmusee"] : (function () { throw new RuntimeError('Variable "gmusee" does not exist.', 32, $this->source); })()), "images", [], "any", false, false, false, 32));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 33
            echo "
                        <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 34))), "html", null, true);
            echo "\"
                             alt=\"image\" width=\"150\">


                <td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gmusee_index_back");
            echo "\">back to list</a>


    ";
            // line 46
            echo twig_include($this->env, $context, "gmusee/_delete_form.html.twig");
            echo "

    <script
            src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
    </script>
    <script>
        \$( document ).ready(function() {
            \$(\"#search\").keyup(function(e){
                let value = \$(this).val();
                \$.ajax({

                    url : \"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gmusee_index_back");
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
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gmusee/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 57,  166 => 46,  160 => 43,  148 => 34,  145 => 33,  128 => 32,  119 => 26,  112 => 22,  105 => 18,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Gmusee{% endblock %}

{% block body %}

    <h1>Musée</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ gmusee.id }}</td>

            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ gmusee.nom }}</td>
            </tr>
            <tr>
                <th>Place</th>
                <td>{{ gmusee.place }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ gmusee.description }}</td>
            </tr>
            <tr>
                <th>Images</th>

                <td>
                    {% for image in gmusee.images %}

                        <img src=\"{{ asset ('/uploads/' ~ image.name ) }}\"
                             alt=\"image\" width=\"150\">


                <td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('gmusee_index_back') }}\">back to list</a>


    {{ include('gmusee/_delete_form.html.twig') }}

    <script
            src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
    </script>
    <script>
        \$( document ).ready(function() {
            \$(\"#search\").keyup(function(e){
                let value = \$(this).val();
                \$.ajax({

                    url : \"{{ path('gmusee_index_back') }}\",
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
{% endblock %}
", "gmusee/show.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\gmusee\\show.html.twig");
    }
}
