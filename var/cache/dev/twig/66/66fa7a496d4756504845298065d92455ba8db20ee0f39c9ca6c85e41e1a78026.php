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

/* exposee/afficherE.html.twig */
class __TwigTemplate_8eb2c10c97cc1fe65baad8f63f2ef1f0a61c74aa7f2c404771c82c526d7e70af extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exposee/afficherE.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exposee/afficherE.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "exposee/afficherE.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Nos Exposee</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"listing_header\">
            <h5>Nos Exposee</h5>
            <div class=\"layout-switcher\">
                <button><a  href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trieex");
        echo "\"> TRIE BY Nom</a></button>
            </div>
        </div>
    <div class=\"row\"  id=\"entitiesNavv\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exposee"]) || array_key_exists("exposee", $context) ? $context["exposee"] : (function () { throw new RuntimeError('Variable "exposee" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 13
            echo "            <div class=\"col-md-4 grid_view show_listing\">
              <div  class=\"listing_wrap\" >

                  <a   href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheEX", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\">
                  <div class=\"listing_img\" >
                      ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["c"], "photo", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 19
                echo "                      <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/products/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 19))), "html", null, true);
                echo " \" style=\"width: 50px;\">
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "
                     <div class=\"listing_info\">
                         <h1>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 23), "html", null, true);
            echo " </h1>
                         <h4>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "description", [], "any", false, false, false, 24), "html", null, true);
            echo " </h4>
                        <p>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "dateC", [], "any", false, false, false, 25), "m/d/Y"), "html", null, true);
            echo " </p>
                     </div>
            </div>
                 </a>
            </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "


    </div>
     <div class=\"our_prtners text-center\">
        ";
        // line 38
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["exposee"]) || array_key_exists("exposee", $context) ? $context["exposee"] : (function () { throw new RuntimeError('Variable "exposee" does not exist.', 38, $this->source); })()));
        echo "
     </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 45
        echo "
    <div class=\"search_form\">
        <form action=\"#\" method=\"get\">

            <div class=\"form-group\">



            </div>
            ";
        // line 54
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "get", [0 => "_route"], "method", false, false, false, 54), "afficheE"))) {
            // line 55
            echo "                <div class=\"form-group\">
                        <input type=\"text\"  name=\"search\" class=\"form-control js-user-search\" placeholder=\"Rechercher\">
                </div>

                <div class=\"btn_group\">
                    <input type=\"submit\" value=\"Search\" class=\"btn btn-block\">
                </div>
            ";
        }
        // line 63
        echo "        </form>
    </div>




    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            var searchRequest = null;
            \$(\".js-user-search\").keyup(function () {
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNavv\").html('');
             //   console.log(value.length)

                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_ajax");
        echo "\",
                        data: {
                            'q': value
                        },
                        dataType: \"text\",
                        success: function (msg) {
                            //we need to check if the value is the same
                            console.log(\"here\")

                                var result = JSON.parse(msg);

                                \$.each(result, function (key, arr) {
                                    \$.each(arr, function (id, value) {
                                        if (key == 'entities') {
                                            if (id != 'error') {
                                                ";
        // line 99
        echo "
                                                var exposeeName=value[0];
                                                var description=value[1];

                                                var idExposee=value[2]
                                                var exposeeDate=value[3]['date'];
                                                var photo=value[4];
                                                ";
        // line 107
        echo "                                                entitySelector.append(
                                                    '<div class=\"col-md-4 grid_view show_listing\">'
                                                    +'  <div  class=\"listing_wrap\" >'
                                                    +'<a  id=\"mypath'+idExposee+'\" href=\"afficheEX/'+idExposee+'\">'
                                                    +'<div class=\"listing_img\" >'
                                                      + '<div class=\"listing_info\">'
                                                      +  ' <h1>'+exposeeName+' </h1>'
                                                     +   '  <h4>'+description+ '</h4>'
                                                  +  '<p>'+ new Date(exposeeDate).toLocaleDateString(\"en-FR\")+' </p>'
                                                   + '<div class=\"listing_img\" >'
                                                   + '<img id=\"myImgTag'+idExposee+'\" src=\"\" style=\"width:300px\">'
                                                    +'</div>'
                                                    +'</div>'
                                                    +'</a>'
                                                    +'</div>'
                                                    +'</div>'

                                                );
                                                console.log(value)
                                                // document.getElementById(\"myImgTag\"+idExposee).src= assetsDir + '/' + photo.name;
                                                // document.getElementById(\"mypath\"+idExposee).href= afficheEX +'/'+idExposee;





                                            } else {
                                                entitySelector.append('<li class=\"errorLi\">' + value + '</li>');
                                            }
                                        }
                                    });
                                });


                            }

                    });

            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "exposee/afficherE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 107,  254 => 99,  236 => 83,  219 => 69,  211 => 63,  201 => 55,  199 => 54,  188 => 45,  178 => 44,  162 => 38,  155 => 33,  141 => 25,  137 => 24,  133 => 23,  129 => 21,  120 => 19,  116 => 18,  111 => 16,  106 => 13,  102 => 12,  95 => 8,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}
{% block title %}<title>Nos Exposee</title>{% endblock %}
{% block body %}
    <div class=\"container\">
        <div class=\"listing_header\">
            <h5>Nos Exposee</h5>
            <div class=\"layout-switcher\">
                <button><a  href=\"{{ path('trieex') }}\"> TRIE BY Nom</a></button>
            </div>
        </div>
    <div class=\"row\"  id=\"entitiesNavv\">
        {% for c in exposee %}
            <div class=\"col-md-4 grid_view show_listing\">
              <div  class=\"listing_wrap\" >

                  <a   href=\"{{ path('afficheEX',{'id':c.id }) }}\">
                  <div class=\"listing_img\" >
                      {% for image in c.photo %}
                      <img src=\"{{ asset('images/products/'~image.name) }} \" style=\"width: 50px;\">
                      {% endfor %}

                     <div class=\"listing_info\">
                         <h1>{{ c.nom }} </h1>
                         <h4>{{ c.description }} </h4>
                        <p>{{ c.dateC|date('m/d/Y') }} </p>
                     </div>
            </div>
                 </a>
            </div>
            </div>

        {% endfor %}



    </div>
     <div class=\"our_prtners text-center\">
        {{ knp_pagination_render(exposee) }}
     </div>

    </div>

{% endblock %}
{% block content %}

    <div class=\"search_form\">
        <form action=\"#\" method=\"get\">

            <div class=\"form-group\">



            </div>
            {% if app.request.get('_route') == 'afficheE' %}
                <div class=\"form-group\">
                        <input type=\"text\"  name=\"search\" class=\"form-control js-user-search\" placeholder=\"Rechercher\">
                </div>

                <div class=\"btn_group\">
                    <input type=\"submit\" value=\"Search\" class=\"btn btn-block\">
                </div>
            {% endif %}
        </form>
    </div>




    <script src=\"{{ asset('assets/js/jquery.js') }}\"></script>
    <script>
        \$(document).ready(function () {
            var searchRequest = null;
            \$(\".js-user-search\").keyup(function () {
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNavv\").html('');
             //   console.log(value.length)

                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"{{ path('search_ajax') }}\",
                        data: {
                            'q': value
                        },
                        dataType: \"text\",
                        success: function (msg) {
                            //we need to check if the value is the same
                            console.log(\"here\")

                                var result = JSON.parse(msg);

                                \$.each(result, function (key, arr) {
                                    \$.each(arr, function (id, value) {
                                        if (key == 'entities') {
                                            if (id != 'error') {
                                                {#var assetsDir = \"{{ asset('images/products') }}\";#}

                                                var exposeeName=value[0];
                                                var description=value[1];

                                                var idExposee=value[2]
                                                var exposeeDate=value[3]['date'];
                                                var photo=value[4];
                                                {#var go = \"{{ path('afficheEX',{'id': }) }}\"#}
                                                entitySelector.append(
                                                    '<div class=\"col-md-4 grid_view show_listing\">'
                                                    +'  <div  class=\"listing_wrap\" >'
                                                    +'<a  id=\"mypath'+idExposee+'\" href=\"afficheEX/'+idExposee+'\">'
                                                    +'<div class=\"listing_img\" >'
                                                      + '<div class=\"listing_info\">'
                                                      +  ' <h1>'+exposeeName+' </h1>'
                                                     +   '  <h4>'+description+ '</h4>'
                                                  +  '<p>'+ new Date(exposeeDate).toLocaleDateString(\"en-FR\")+' </p>'
                                                   + '<div class=\"listing_img\" >'
                                                   + '<img id=\"myImgTag'+idExposee+'\" src=\"\" style=\"width:300px\">'
                                                    +'</div>'
                                                    +'</div>'
                                                    +'</a>'
                                                    +'</div>'
                                                    +'</div>'

                                                );
                                                console.log(value)
                                                // document.getElementById(\"myImgTag\"+idExposee).src= assetsDir + '/' + photo.name;
                                                // document.getElementById(\"mypath\"+idExposee).href= afficheEX +'/'+idExposee;





                                            } else {
                                                entitySelector.append('<li class=\"errorLi\">' + value + '</li>');
                                            }
                                        }
                                    });
                                });


                            }

                    });

            });
        });
    </script>
{% endblock %}
", "exposee/afficherE.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\exposee\\afficherE.html.twig");
    }
}
