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

/* categorie/indexCategorie.html.twig */
class __TwigTemplate_d064a647cb4deaf19b1ab7e0bc0e63a156d5361de8d37ff6c3d61c8cfd02d10e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/indexCategorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/indexCategorie.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "categorie/indexCategorie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "    <!doctype html>
    <html lang=\"en-US\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1, maximum-scale=1\">
        <meta name=\"keywords\" content=\"HTML5 Template\">
        <meta name=\"description\" content=\"Responsive HTML5 Template\">
        <meta name=\"author\" content=\"author.com\">
        <title>Responsive HTML5 Template</title>

        <!-- STYLESHEET -->
        <!-- fonts -->
        <link href=";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800"), "html", null, true);
        echo " rel=\"stylesheet\">

        <!-- icon -->
        <link rel=\"stylesheet\" href=";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aaassets/fonts/icons/main/mainfont/style.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aaassets/fonts/icons/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo ">

        <!-- Vendor -->
        <link rel=\"stylesheet\" href=";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aaassets/vendor/bootstrap/v3/bootstrap.min.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aaassets/vendor/bootstrap/v4/bootstrap-grid.css"), "html", null, true);
        echo ">
        <!-- Custom -->
        <link rel=\"stylesheet\" href=";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aaassets/css/style.css"), "html", null, true);
        echo ">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
    <script src=";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"), "html", null, true);
        echo "></script>
    <![endif]-->
    </head>
    <body>
    <!-- HEADER -->
    <header>

    </header>

    <!-- MAIN -->
    <main>

        <br>

        <div class=\"container\">
            <br>
            <br>



            <div class=\"nav\">
                <div class=\"nav__categories js-dropdown\">
                    <div class=\"nav__select\">
                        <div class=\"btn-select\" data-dropdown-btn=\"categories\">All Categories</div>
                        <nav class=\"dropdown dropdown--design-01\" data-dropdown-list=\"categories\">
                            <ul class=\"dropdown__catalog row\">
                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 61
            echo "
                                <li class=\"col-xs-6\"><a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("findcategorie");
            echo "\" class=\"category\"><i class=\"bg-4436f8\"></i><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index", ["idcategorie" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nameCategorie", [], "any", false, false, false, 62), "html", null, true);
            echo "</a></a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                            </ul>
                        </nav>
                    </div>
                    <div class=\"nav__select\">
                        <div class=\"btn-select\" data-dropdown-btn=\"tags\">Tags</div>
                        <div class=\"dropdown dropdown--design-01\" data-dropdown-list=\"tags\">
                            <div class=\"tags\">
                                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 72
            echo "                                    ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["c"], "tag", [], "any", false, false, false, 72))) {
                // line 73
                echo "                                <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("findcategorie");
                echo "\" class=\"bg-36b7d7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "tag", [], "any", false, false, false, 73), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 75
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class=\"d-flex align-items-center\">
                <input class=\"form-control\" type=\"search\" id=\"search\" placeholder=\"Rechercher\">
                <a  href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercheajax");
        echo "\"><i class=\"fa fa-sort\"></i></a>
            </div>




                    <div class=\"posts__head\">
                        <div class=\"posts__topic\">Categorie</div>
                        <div class=\"posts__category\"></div>
                        <div class=\"posts__users\">Users</div>
                        <div class=\"posts__replies\">Questions</div>
                        <div class=\"posts__views\">Vues</div>
                        </div>




  <table class=\"table table-stripe\">
  <tbody>
               <tbody id=\"all\">
        ";
        // line 105
        $this->loadTemplate("categorie/Categorieajaxfront.html.twig", "categorie/indexCategorie.html.twig", 105)->display($context);
        // line 106
        echo "                </tbody>
            <tbody align=\"left\" border=\"2\" id=\"search\">
        </tbody>
    </tbody>
</table>



        ";
        // line 114
        echo twig_include($this->env, $context, "categorie/_form.html.twig");
        echo "

    </main>
    <!-- FOOTER -->
    <footer>
    </footer>

    <!-- JAVA SCRIPT -->
    <script src=";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aaassets/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aaassets/vendor/velocity/velocity.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aaassets/js/app.js"), "html", null, true);
        echo "></script>
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
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercheajax");
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

    </body>
    </html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categorie/indexCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 138,  262 => 124,  258 => 123,  254 => 122,  243 => 114,  233 => 106,  231 => 105,  208 => 85,  197 => 76,  191 => 75,  183 => 73,  180 => 72,  176 => 71,  167 => 64,  155 => 62,  152 => 61,  148 => 60,  119 => 34,  115 => 33,  108 => 29,  103 => 27,  99 => 26,  93 => 23,  89 => 22,  83 => 19,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}



{% block body %}
    <!doctype html>
    <html lang=\"en-US\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1, maximum-scale=1\">
        <meta name=\"keywords\" content=\"HTML5 Template\">
        <meta name=\"description\" content=\"Responsive HTML5 Template\">
        <meta name=\"author\" content=\"author.com\">
        <title>Responsive HTML5 Template</title>

        <!-- STYLESHEET -->
        <!-- fonts -->
        <link href={{ asset(\"https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800\")}} rel=\"stylesheet\">

        <!-- icon -->
        <link rel=\"stylesheet\" href={{ asset('aaassets/fonts/icons/main/mainfont/style.css')}}>
        <link rel=\"stylesheet\" href={{ asset('aaassets/fonts/icons/font-awesome/css/font-awesome.min.css')}}>

        <!-- Vendor -->
        <link rel=\"stylesheet\" href={{ asset(\"aaassets/vendor/bootstrap/v3/bootstrap.min.css\")}}>
        <link rel=\"stylesheet\" href={{ asset(\"aaassets/vendor/bootstrap/v4/bootstrap-grid.css\")}}>
        <!-- Custom -->
        <link rel=\"stylesheet\" href={{ asset(\"aaassets/css/style.css\")}}>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
    <script src={{ asset(\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\")}}></script>
    <script src={{ asset(\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\")}}></script>
    <![endif]-->
    </head>
    <body>
    <!-- HEADER -->
    <header>

    </header>

    <!-- MAIN -->
    <main>

        <br>

        <div class=\"container\">
            <br>
            <br>



            <div class=\"nav\">
                <div class=\"nav__categories js-dropdown\">
                    <div class=\"nav__select\">
                        <div class=\"btn-select\" data-dropdown-btn=\"categories\">All Categories</div>
                        <nav class=\"dropdown dropdown--design-01\" data-dropdown-list=\"categories\">
                            <ul class=\"dropdown__catalog row\">
                                {% for c in categories %}

                                <li class=\"col-xs-6\"><a href=\"{{ path('findcategorie') }}\" class=\"category\"><i class=\"bg-4436f8\"></i><a href=\"{{ path('question_index', {'idcategorie': c.id})}}\"> {{ c.nameCategorie }}</a></a></li>
                                {% endfor %}
                            </ul>
                        </nav>
                    </div>
                    <div class=\"nav__select\">
                        <div class=\"btn-select\" data-dropdown-btn=\"tags\">Tags</div>
                        <div class=\"dropdown dropdown--design-01\" data-dropdown-list=\"tags\">
                            <div class=\"tags\">
                                {% for c in categories %}
                                    {% if c.tag is not null %}
                                <a href=\"{{ path('findcategorie') }}\" class=\"bg-36b7d7\">{{ c.tag }}</a>
                                    {% endif %}
                                    {% endfor %}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class=\"d-flex align-items-center\">
                <input class=\"form-control\" type=\"search\" id=\"search\" placeholder=\"Rechercher\">
                <a  href=\"{{ path('rechercheajax') }}\"><i class=\"fa fa-sort\"></i></a>
            </div>




                    <div class=\"posts__head\">
                        <div class=\"posts__topic\">Categorie</div>
                        <div class=\"posts__category\"></div>
                        <div class=\"posts__users\">Users</div>
                        <div class=\"posts__replies\">Questions</div>
                        <div class=\"posts__views\">Vues</div>
                        </div>




  <table class=\"table table-stripe\">
  <tbody>
               <tbody id=\"all\">
        {% include 'categorie/Categorieajaxfront.html.twig' %}
                </tbody>
            <tbody align=\"left\" border=\"2\" id=\"search\">
        </tbody>
    </tbody>
</table>



        {{ include('categorie/_form.html.twig') }}

    </main>
    <!-- FOOTER -->
    <footer>
    </footer>

    <!-- JAVA SCRIPT -->
    <script src={{ asset(\"aaassets/vendor/jquery/jquery.min.js\")}}></script>
    <script src={{ asset(\"aaassets/vendor/velocity/velocity.min.js\")}}></script>
    <script src={{ asset(\"aaassets/js/app.js\")}}></script>
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

                    url : \"{{ path('rechercheajax') }}\",
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

    </body>
    </html>

{% endblock %}



", "categorie/indexCategorie.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\categorie\\indexCategorie.html.twig");
    }
}
