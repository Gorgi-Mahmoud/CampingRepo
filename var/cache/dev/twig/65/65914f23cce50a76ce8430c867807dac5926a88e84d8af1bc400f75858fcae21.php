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

/* question/indexforum.html.twig */
class __TwigTemplate_66c43f11fdd2e3b944c6d15f98e149a743283c972ecb7c0701ec482931c2f3aa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/indexforum.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/indexforum.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "question/indexforum.html.twig", 1);
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
        echo "<!doctype html>
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
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- icon -->
    <link rel=\"stylesheet\" href=";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aaassets/fonts/icons/main/mainfont/style.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aaassets/fonts/icons/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo ">

    <!-- Vendor -->
    <link rel=\"stylesheet\" href=";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aaassets/vendor/bootstrap/v3/bootstrap.min.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aaassets/vendor/bootstrap/v4/bootstrap-grid.css"), "html", null, true);
        echo ">
    <!-- Custom -->
    <link rel=\"stylesheet\" href=";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aaassets/css/style.css"), "html", null, true);
        echo ">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 33
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
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 58
            echo "                                <li class=\"col-xs-6\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("findcategorie");
            echo "\" class=\"category\"><i class=\"bg-4436f8\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nameCategorie", [], "any", false, false, false, 58), "html", null, true);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                        </ul>
                    </nav>
                </div>
                <div class=\"nav__select\">
                    <div class=\"btn-select\" data-dropdown-btn=\"tags\">Tags</div>
                    <div class=\"dropdown dropdown--design-01\" data-dropdown-list=\"tags\">
                        <div class=\"tags\">
                            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 68
            echo "                            ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["c"], "tag", [], "any", false, false, false, 68))) {
                // line 69
                echo "                            <a href=\"#\" class=\"bg-36b7d7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Tag", [], "any", false, false, false, 69), "html", null, true);
                echo "</a>
                            ";
            }
            // line 71
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
                        </div>
                    </div>
                </div>
            </div>


            <div class=\"nav__menu js-dropdown\">
                <div class=\"nav__select\">
                    <div class=\"btn-select\" data-dropdown-btn=\"menu\">Latest</div>
                    <div class=\"dropdown dropdown--design-01\" data-dropdown-list=\"menu\">
                        <ul class=\"dropdown__catalog\">
                            <li><a href=\"#\">Latest</a></li>
                            <li><a href=\"#\">Unread</a></li>
                            <li><a href=\"#\">Rising</a></li>
                            <li><a href=\"#\">Most Liked</a></li>
                            <li><a href=\"#\">Follow Feed</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>





            <div class=\"posts__head\">
               <div class=\"posts__topic\">Question</div>
                    <div class=\"posts__category\">Catégorie</div>
                    <div class=\"posts__users\">Users</div>
                    <div class=\"posts__replies\">Réponses</div>
                    <div class=\"posts__views\">Vues</div>
            </div>


    <table class=\"table table-stripe\">
        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 111
            echo "            <tr>
                <td>
                    <div class=\"posts__body\">

                        <div class=\"posts__item bg-f2f4f6\">
                            <div class=\"posts__section-left\">
                                <div class=\"posts__topic\">
                                    <div class=\"posts__content\">
                                        <a href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponse_index", ["idquestion" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 119)]), "html", null, true);
            echo "\" class=\"pn\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 119), "html", null, true);
            echo "</a>



                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">

                                            <div class=\"btn-group\" role=\"group\">
                                                <i id=\"btnGroupDrop1\" type=\"button\" class=\"fa fa-ellipsis-h\" data-toggle=\"dropdown\" aria-hidden=\"true\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                </i>
                                                <div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
                                                    ";
            // line 129
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 129), "id", [], "any", true, true, false, 129)) {
                // line 130
                echo "                                                    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130), "id", [], "any", false, false, false, 130), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "user", [], "any", false, false, false, 130), "id", [], "any", false, false, false, 130)))) {
                    // line 131
                    echo "                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 131)]), "html", null, true);
                    echo "\">modifier</a>
                                                    ";
                }
                // line 133
                echo "                                                    ";
            }
            // line 134
            echo "                                                </div>
                                            </div>
                                        </div>
                                        ";
            // line 137
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 137), "id", [], "any", true, true, false, 137)) {
                // line 138
                echo "                                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "id", [], "any", false, false, false, 138), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "user", [], "any", false, false, false, 138), "id", [], "any", false, false, false, 138)))) {
                    // line 139
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 139)]), "html", null, true);
                    echo "\">modifier</a>
                                            ";
                }
                // line 141
                echo "                                        ";
            }
            // line 142
            echo "                                        <div class=\"posts__tags tags\">
                                            ";
            // line 143
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["question"], "Tag", [], "any", false, false, false, 143))) {
                // line 144
                echo "                                                <a href=\"#\" class=\"bg-36b7d7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "Tag", [], "any", false, false, false, 144), "html", null, true);
                echo "</a>
                                            ";
            }
            // line 146
            echo "                                        </div>
                                        <div class=\"topic__footer\">
                                            <div class=\"col-md-pull-0\" >

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-4436f8\"></i>";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 156, $this->source); })()), "namecategorie", [], "any", false, false, false, 156), "html", null, true);
            echo "</a></div>
                            </div>
                            <div class=\"posts__section-right\">
                                <div class=\"posts__users\">
                                    <div>
                                        <a href=\"#\" class=\"avatar\"><img src=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/fonts/icons/avatars/L.svg"), "html", null, true);
            echo "\" alt=\"avatar\"></a>
                                    </div>
                                    <div>
                                        <a href=\"#\" class=\"avatar\"><img src=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/fonts/icons/avatars/T.svg"), "html", null, true);
            echo "\" alt=\"avatar\"></a>
                                    </div>
                                </div>
                                <div class=\"posts__replies\">";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "nbrReponse", [], "any", false, false, false, 167), "html", null, true);
            echo "</div>
                                <div class=\"posts__views\">
                                    ";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "nbrVue", [], "any", false, false, false, 169), "html", null, true);
            echo "

                                </div>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "

        </table>
        <a href=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_new", ["idcategorie" => (isset($context["idcategorie"]) || array_key_exists("idcategorie", $context) ? $context["idcategorie"] : (function () { throw new RuntimeError('Variable "idcategorie" does not exist.', 183, $this->source); })())]), "html", null, true);
        echo "\">Ajouter une question</a>
</main>
<!-- FOOTER -->
<footer>
</footer>

<!-- JAVA SCRIPT -->
<script src=";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aaassets/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aaassets/vendor/velocity/velocity.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 192
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
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercheajaxQuestion");
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
        return "question/indexforum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 206,  379 => 192,  375 => 191,  371 => 190,  361 => 183,  356 => 180,  339 => 169,  334 => 167,  328 => 164,  322 => 161,  314 => 156,  302 => 146,  296 => 144,  294 => 143,  291 => 142,  288 => 141,  282 => 139,  279 => 138,  277 => 137,  272 => 134,  269 => 133,  263 => 131,  260 => 130,  258 => 129,  243 => 119,  233 => 111,  229 => 110,  189 => 72,  183 => 71,  177 => 69,  174 => 68,  170 => 67,  161 => 60,  150 => 58,  146 => 57,  119 => 33,  115 => 32,  108 => 28,  103 => 26,  99 => 25,  93 => 22,  89 => 21,  83 => 18,  68 => 5,  58 => 4,  35 => 1,);
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
                                <li class=\"col-xs-6\"><a href=\"{{ path('findcategorie') }}\" class=\"category\"><i class=\"bg-4436f8\"></i>{{ c.nameCategorie }}</a></li>
                            {% endfor %}
                        </ul>
                    </nav>
                </div>
                <div class=\"nav__select\">
                    <div class=\"btn-select\" data-dropdown-btn=\"tags\">Tags</div>
                    <div class=\"dropdown dropdown--design-01\" data-dropdown-list=\"tags\">
                        <div class=\"tags\">
                            {% for c in questions %}
                            {% if c.tag is not null %}
                            <a href=\"#\" class=\"bg-36b7d7\">{{ c.Tag }}</a>
                            {% endif %}
                            {% endfor %}

                        </div>
                    </div>
                </div>
            </div>


            <div class=\"nav__menu js-dropdown\">
                <div class=\"nav__select\">
                    <div class=\"btn-select\" data-dropdown-btn=\"menu\">Latest</div>
                    <div class=\"dropdown dropdown--design-01\" data-dropdown-list=\"menu\">
                        <ul class=\"dropdown__catalog\">
                            <li><a href=\"#\">Latest</a></li>
                            <li><a href=\"#\">Unread</a></li>
                            <li><a href=\"#\">Rising</a></li>
                            <li><a href=\"#\">Most Liked</a></li>
                            <li><a href=\"#\">Follow Feed</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>





            <div class=\"posts__head\">
               <div class=\"posts__topic\">Question</div>
                    <div class=\"posts__category\">Catégorie</div>
                    <div class=\"posts__users\">Users</div>
                    <div class=\"posts__replies\">Réponses</div>
                    <div class=\"posts__views\">Vues</div>
            </div>


    <table class=\"table table-stripe\">
        {% for question in questions %}
            <tr>
                <td>
                    <div class=\"posts__body\">

                        <div class=\"posts__item bg-f2f4f6\">
                            <div class=\"posts__section-left\">
                                <div class=\"posts__topic\">
                                    <div class=\"posts__content\">
                                        <a href=\"{{ path('reponse_index', {'idquestion': question.id})}}\" class=\"pn\">{{ question.question }}</a>



                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">

                                            <div class=\"btn-group\" role=\"group\">
                                                <i id=\"btnGroupDrop1\" type=\"button\" class=\"fa fa-ellipsis-h\" data-toggle=\"dropdown\" aria-hidden=\"true\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                </i>
                                                <div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
                                                    {% if app.user.id is defined %}
                                                    {% if app.user.id == question.user.id %}
                                                    <a href=\"{{ path('question_edit', {'id': question.id}) }}\">modifier</a>
                                                    {% endif %}
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                        {% if app.user.id is defined %}
                                            {% if app.user.id == question.user.id %}
                                                <a href=\"{{ path('question_edit', {'id': question.id}) }}\">modifier</a>
                                            {% endif %}
                                        {% endif %}
                                        <div class=\"posts__tags tags\">
                                            {% if question.Tag is not null %}
                                                <a href=\"#\" class=\"bg-36b7d7\">{{ question.Tag }}</a>
                                            {% endif %}
                                        </div>
                                        <div class=\"topic__footer\">
                                            <div class=\"col-md-pull-0\" >

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-4436f8\"></i>{{ categorie.namecategorie}}</a></div>
                            </div>
                            <div class=\"posts__section-right\">
                                <div class=\"posts__users\">
                                    <div>
                                        <a href=\"#\" class=\"avatar\"><img src=\"{{ asset('aassets/fonts/icons/avatars/L.svg') }}\" alt=\"avatar\"></a>
                                    </div>
                                    <div>
                                        <a href=\"#\" class=\"avatar\"><img src=\"{{ asset('aassets/fonts/icons/avatars/T.svg') }}\" alt=\"avatar\"></a>
                                    </div>
                                </div>
                                <div class=\"posts__replies\">{{ question.nbrReponse }}</div>
                                <div class=\"posts__views\">
                                    {{ question.nbrVue }}

                                </div>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>
        {% endfor %}


        </table>
        <a href=\"{{ path('question_new' ,{'idcategorie': idcategorie }) }}\">Ajouter une question</a>
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

                url : \"{{ path('rechercheajaxQuestion') }}\",
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

", "question/indexforum.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\question\\indexforum.html.twig");
    }
}
