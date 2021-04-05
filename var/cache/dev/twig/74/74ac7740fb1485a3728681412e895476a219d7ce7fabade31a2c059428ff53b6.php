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

/* reponse/indexReponse.html.twig */
class __TwigTemplate_158a51db8c7a07af4d127a1d691cde17cf0cd208f68a8b1be768035332a0f4bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascipt' => [$this, 'block_javascipt'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/indexReponse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/indexReponse.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "reponse/indexReponse.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/fonts/icons/main/mainfont/style.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=\"fonts/icons/font-awesome/css/font-awesome.min.css\")}}>

    <!-- Vendor -->
    <link rel=\"stylesheet\" href=";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/vendor/bootstrap/v3/bootstrap.min.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/vendor/bootstrap/v4/bootstrap-grid.css"), "html", null, true);
        echo ">
    <!-- Custom -->
    <link rel=\"stylesheet\" href=";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/css/style.css"), "html", null, true);
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
<>
    <div class=\"container\">
        <div class=\"nav\">
            <div class=\"nav__categories js-dropdown\">
                <div class=\"nav__select\">
                    <div class=\"btn-select\" data-dropdown-btn=\"categories\">All Categories</div>
                    <nav class=\"dropdown dropdown--design-01\" data-dropdown-list=\"categories\">
                        <ul class=\"dropdown__catalog row\">

                            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 53
            echo "                                <li class=\"col-xs-6\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("findcategorie");
            echo "\" class=\"category\"><i class=\"bg-4436f8\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nameCategorie", [], "any", false, false, false, 53), "html", null, true);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                        </ul>
                    </nav>
                </div>
                <div class=\"nav__select\">
                    <div class=\"btn-select\" data-dropdown-btn=\"tags\">Tags</div>
                    <div class=\"dropdown dropdown--design-01\" data-dropdown-list=\"tags\">
                        <div class=\"tags\">
                            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 63
            echo "                            ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["c"], "tag", [], "any", false, false, false, 63))) {
                // line 64
                echo "                            <a href=\"#\" class=\"bg-36b7d7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Tag", [], "any", false, false, false, 64), "html", null, true);
                echo "</a>
                            ";
            }
            // line 66
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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
        <div class=\"topics\">
            <div class=\"topics__heading\">
                <h1>  ";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 91, $this->source); })()), "question", [], "any", false, false, false, 91), "html", null, true);
        echo " </h1>
                <div class=\"topics__heading-info\">
                    <a href=\"#\" class=\"category\"><i class=\"bg-3ebafa\"></i> Tags :</a>
                    <div class=\"tags\">
                        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 95, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 96
            echo "                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["c"], "tag", [], "any", false, false, false, 96))) {
                // line 97
                echo "                        <a href=\"#\" class=\"bg-36b7d7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Tag", [], "any", false, false, false, 97), "html", null, true);
                echo "</a>
                        ";
            }
            // line 99
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                    </div>
                </div>
            </div>
            ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 103, $this->source); })()), "reponse", [], "any", false, false, false, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 104
            echo "
                ";
            // line 105
            $context["nb1"] = 0;
            // line 106
            echo "                ";
            $context["nb0"] = 0;
            // line 107
            echo "
            <div class=\"topics__body\">
                <div class=\"topics__content\">
                    <div class=\"topic\">
                        <div class=\"topic__head\">
                            <div class=\"topic__avatar\">
                                <a  class=\"avatar\"><img src=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("mydir/public/images/products" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponse"], "user", [], "any", false, false, false, 113), "image", [], "any", false, false, false, 113))), "html", null, true);
            echo " \"alt=\"avatar\"></a>
                            </div>
                            <div class=\"topic__caption\">
                                <div class=\"topic__name\">
                                    <a href=\"#\">";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponse"], "user", [], "any", false, false, false, 117), "name", [], "any", false, false, false, 117), "html", null, true);
            echo "</a>
                                </div>
                                <div class=\"topic__date\"><i class=\"icon-Watch_Later\"></i>";
            // line 119
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "datereponse", [], "any", false, false, false, 119)), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                        <div class=\"topic__content\">
                            <div class=\"topic__text\">

                                <td>";
            // line 125
            echo twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 125);
            echo "



                                    <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">

                                        <div class=\"btn-group\" role=\"group\">
                                            <i id=\"btnGroupDrop1\" type=\"button\" class=\"fa fa-ellipsis-h\" data-toggle=\"dropdown\" aria-hidden=\"true\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            </i>
                                            <div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
                                                ";
            // line 135
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 135), "id", [], "any", true, true, false, 135)) {
                // line 136
                echo "                                                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "user", [], "any", false, false, false, 136), "id", [], "any", false, false, false, 136), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 136, $this->source); })()), "user", [], "any", false, false, false, 136), "id", [], "any", false, false, false, 136)))) {
                    // line 137
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponse_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 137)]), "html", null, true);
                    echo "\">modifier</a>
                                                ";
                }
                // line 139
                echo "                                                ";
            }
            // line 140
            echo "                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class=\"topic__footer\">

                                    <div class=\"pull-right\" >
                                        <a href=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addreaction", ["idquestion" => (isset($context["idquestion"]) || array_key_exists("idquestion", $context) ? $context["idquestion"] : (function () { throw new RuntimeError('Variable "idquestion" does not exist.', 147, $this->source); })()), "idreponse" => twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 147), "reaction" => 1]), "html", null, true);
            echo "\" style=\"color: green; margin: 5px;\"> <i class=\"fa fa-thumbs-up\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["reponse"], "reaction", [], "any", false, false, false, 147));
            foreach ($context['_seq'] as $context["_key"] => $context["reactions"]) {
                echo " ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["reactions"], "reaction", [], "any", false, false, false, 147), 1))) {
                    echo " ";
                    $context["nb1"] = ((isset($context["nb1"]) || array_key_exists("nb1", $context) ? $context["nb1"] : (function () { throw new RuntimeError('Variable "nb1" does not exist.', 147, $this->source); })()) + 1);
                    echo " ";
                }
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reactions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <span>";
            echo twig_escape_filter($this->env, (isset($context["nb1"]) || array_key_exists("nb1", $context) ? $context["nb1"] : (function () { throw new RuntimeError('Variable "nb1" does not exist.', 147, $this->source); })()), "html", null, true);
            echo "</span></i></a>
                                        <a href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addreaction", ["idquestion" => (isset($context["idquestion"]) || array_key_exists("idquestion", $context) ? $context["idquestion"] : (function () { throw new RuntimeError('Variable "idquestion" does not exist.', 148, $this->source); })()), "idreponse" => twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 148), "reaction" => 0]), "html", null, true);
            echo "\" style=\"color: red; margin: 5px;\">  <i class=\"fa fa-thumbs-down\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["reponse"], "reaction", [], "any", false, false, false, 148));
            foreach ($context['_seq'] as $context["_key"] => $context["reactions"]) {
                echo " ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["reactions"], "reaction", [], "any", false, false, false, 148), 0))) {
                    echo " ";
                    $context["nb0"] = ((isset($context["nb0"]) || array_key_exists("nb0", $context) ? $context["nb0"] : (function () { throw new RuntimeError('Variable "nb0" does not exist.', 148, $this->source); })()) + 1);
                    echo " ";
                }
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reactions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <span>";
            echo twig_escape_filter($this->env, (isset($context["nb0"]) || array_key_exists("nb0", $context) ? $context["nb0"] : (function () { throw new RuntimeError('Variable "nb0" does not exist.', 148, $this->source); })()), "html", null, true);
            echo "</span></i></a>
                                    </div>




                                <div class=\"topic__footer-share\">
                                    <div data-visible=\"desktop\">
                                        <a href=\"#\"><i class=\"icon-Share_Topic\"></i></a>
                                        <a href=\"#\"><i class=\"icon-Flag_Topic\"></i></a>
                                        <a href=\"#\"><i class=\"icon-Bookmark\"></i></a>
                                    </div>
                                    <div data-visible=\"mobile\">
                                        <a href=\"#\"><i class=\"icon-More_Options\"></i></a>
                                    </div>
                                    <a href=\"#\"><i class=\"icon-Reply_Fill\"></i></a>
                                </div>
                            </div>
                        </td>
                        </div>
                    </div>











                </div>

            </div>

                <br>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "
        ";
        // line 188
        echo twig_include($this->env, $context, "reponse/_form.html.twig");
        echo "

        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


        <div class=\"topics__title\">Categories proposées</div>
        <table class=\"table table-stripe\">
            <br>


            <tr class=\"posts\" >
                <div class=\"posts__head\">
                    <div class=\"posts__topic\">Categorie</div>
                    <div class=\"posts__category\"></div>
                    <div class=\"posts__users\">Users</div>
                    <div class=\"posts__replies\">Questions</div>
                    <div class=\"posts__views\">Vues</div>
            </tr>
    </div>

    ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 214, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 215
            echo "        <tr>
            <td>


        <div class=\"posts__body\">

            <div class=\"posts__item bg-f2f4f6\">
                <div class=\"posts__section-left\">
                    <div class=\"posts__topic\">
                        <div class=\"posts__content\">
                            <a href=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index", ["idcategorie" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 225)]), "html", null, true);
            echo "\" class=\"pn\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "nameCategorie", [], "any", false, false, false, 225), "html", null, true);
            echo "</a>

                            <div class=\"posts__tags tags\">
                                ";
            // line 228
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["question"], "tag", [], "any", false, false, false, 228))) {
                // line 229
                echo "                                    <a href=\"#\" class=\"bg-36b7d7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "tag", [], "any", false, false, false, 229), "html", null, true);
                echo "</a>
                                ";
            }
            // line 231
            echo "                            </div>
                        </div>
                    </div>
                    <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-4436f8\"></i>";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "nameCategorie", [], "any", false, false, false, 234), "html", null, true);
            echo "</a></div>
                </div>
                <div class=\"posts__section-right\">
                    <div class=\"posts__users\">
                        <div>
                            <a href=\"#\" class=\"avatar\"><img src=\"";
            // line 239
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/fonts/icons/avatars/L.svg"), "html", null, true);
            echo "\" alt=\"avatar\"></a>
                        </div>
                        <div>
                            <a href=\"#\" class=\"avatar\"><img src=\"";
            // line 242
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/fonts/icons/avatars/T.svg"), "html", null, true);
            echo "\" alt=\"avatar\"></a>
                        </div>
                    </div>
                    <div class=\"posts__replies\">";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "nbrQuestion", [], "any", false, false, false, 245), "html", null, true);
            echo "</div>
                    <div class=\"posts__views\">
                        ";
            // line 247
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "nbrVueCategorie", [], "any", false, false, false, 247), "html", null, true);
            echo "

                    </div>
                </div>
            </div>

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
        // line 261
        echo "    </table>

</main>
<br>
<br>
<br>
<!-- FOOTER -->
<footer>

</footer>

<!-- JAVA SCRIPT -->
<script src=";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/vendor/velocity/velocity.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/js/app.js"), "html", null, true);
        echo "></script>

</body>
</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 281
    public function block_javascipt($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascipt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascipt"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reponse/indexReponse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 281,  535 => 275,  531 => 274,  527 => 273,  513 => 261,  493 => 247,  488 => 245,  482 => 242,  476 => 239,  468 => 234,  463 => 231,  457 => 229,  455 => 228,  447 => 225,  435 => 215,  431 => 214,  402 => 188,  399 => 187,  337 => 148,  316 => 147,  307 => 140,  304 => 139,  298 => 137,  295 => 136,  293 => 135,  280 => 125,  271 => 119,  266 => 117,  259 => 113,  251 => 107,  248 => 106,  246 => 105,  243 => 104,  239 => 103,  234 => 100,  228 => 99,  222 => 97,  219 => 96,  215 => 95,  208 => 91,  182 => 67,  176 => 66,  170 => 64,  167 => 63,  163 => 62,  154 => 55,  143 => 53,  139 => 52,  117 => 33,  113 => 32,  106 => 28,  101 => 26,  97 => 25,  90 => 21,  84 => 18,  69 => 5,  59 => 4,  36 => 1,);
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
    <link rel=\"stylesheet\" href={{ asset(\"aassets/fonts/icons/main/mainfont/style.css\")}}>
    <link rel=\"stylesheet\" href=\"fonts/icons/font-awesome/css/font-awesome.min.css\")}}>

    <!-- Vendor -->
    <link rel=\"stylesheet\" href={{ asset(\"aassets/vendor/bootstrap/v3/bootstrap.min.css\")}}>
    <link rel=\"stylesheet\" href={{ asset(\"aassets/vendor/bootstrap/v4/bootstrap-grid.css\")}}>
    <!-- Custom -->
    <link rel=\"stylesheet\" href={{ asset(\"aassets/css/style.css\")}}>

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
<>
    <div class=\"container\">
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
        <div class=\"topics\">
            <div class=\"topics__heading\">
                <h1>  {{ question.question }} </h1>
                <div class=\"topics__heading-info\">
                    <a href=\"#\" class=\"category\"><i class=\"bg-3ebafa\"></i> Tags :</a>
                    <div class=\"tags\">
                        {% for c in questions %}
                        {% if c.tag is not null %}
                        <a href=\"#\" class=\"bg-36b7d7\">{{ c.Tag }}</a>
                        {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </div>
            {% for reponse in question.reponse %}

                {% set nb1=0 %}
                {% set nb0=0 %}

            <div class=\"topics__body\">
                <div class=\"topics__content\">
                    <div class=\"topic\">
                        <div class=\"topic__head\">
                            <div class=\"topic__avatar\">
                                <a  class=\"avatar\"><img src=\"{{ asset('mydir/public/images/products' ~ reponse.user.image)}} \"alt=\"avatar\"></a>
                            </div>
                            <div class=\"topic__caption\">
                                <div class=\"topic__name\">
                                    <a href=\"#\">{{ reponse.user.name }}</a>
                                </div>
                                <div class=\"topic__date\"><i class=\"icon-Watch_Later\"></i>{{ reponse.datereponse|date }}</div>
                            </div>
                        </div>
                        <div class=\"topic__content\">
                            <div class=\"topic__text\">

                                <td>{{ reponse.reponse|raw }}



                                    <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">

                                        <div class=\"btn-group\" role=\"group\">
                                            <i id=\"btnGroupDrop1\" type=\"button\" class=\"fa fa-ellipsis-h\" data-toggle=\"dropdown\" aria-hidden=\"true\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            </i>
                                            <div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
                                                {% if app.user.id is defined %}
                                                {% if app.user.id == question.user.id %}
                                                <a href=\"{{ path('reponse_edit', {'id': reponse.id}) }}\">modifier</a>
                                                {% endif %}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class=\"topic__footer\">

                                    <div class=\"pull-right\" >
                                        <a href=\"{{ path('addreaction',{'idquestion':idquestion , 'idreponse' : reponse.id , 'reaction':1}) }}\" style=\"color: green; margin: 5px;\"> <i class=\"fa fa-thumbs-up\">{% for reactions in reponse.reaction %} {% if reactions.reaction==1 %} {% set nb1=nb1+1 %} {% endif%} {% endfor %} <span>{{ nb1 }}</span></i></a>
                                        <a href=\"{{ path('addreaction',{'idquestion':idquestion , 'idreponse' : reponse.id , 'reaction':0}) }}\" style=\"color: red; margin: 5px;\">  <i class=\"fa fa-thumbs-down\">{% for reactions in reponse.reaction %} {% if reactions.reaction==0 %} {% set nb0=nb0+1 %} {% endif%} {% endfor %} <span>{{ nb0 }}</span></i></a>
                                    </div>




                                <div class=\"topic__footer-share\">
                                    <div data-visible=\"desktop\">
                                        <a href=\"#\"><i class=\"icon-Share_Topic\"></i></a>
                                        <a href=\"#\"><i class=\"icon-Flag_Topic\"></i></a>
                                        <a href=\"#\"><i class=\"icon-Bookmark\"></i></a>
                                    </div>
                                    <div data-visible=\"mobile\">
                                        <a href=\"#\"><i class=\"icon-More_Options\"></i></a>
                                    </div>
                                    <a href=\"#\"><i class=\"icon-Reply_Fill\"></i></a>
                                </div>
                            </div>
                        </td>
                        </div>
                    </div>











                </div>

            </div>

                <br>

            {% endfor %}

        {{ include('reponse/_form.html.twig') }}

        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


        <div class=\"topics__title\">Categories proposées</div>
        <table class=\"table table-stripe\">
            <br>


            <tr class=\"posts\" >
                <div class=\"posts__head\">
                    <div class=\"posts__topic\">Categorie</div>
                    <div class=\"posts__category\"></div>
                    <div class=\"posts__users\">Users</div>
                    <div class=\"posts__replies\">Questions</div>
                    <div class=\"posts__views\">Vues</div>
            </tr>
    </div>

    {% for question in categories %}
        <tr>
            <td>


        <div class=\"posts__body\">

            <div class=\"posts__item bg-f2f4f6\">
                <div class=\"posts__section-left\">
                    <div class=\"posts__topic\">
                        <div class=\"posts__content\">
                            <a href=\"{{ path('question_index', {'idcategorie': question.id})}}\" class=\"pn\">{{ question.nameCategorie }}</a>

                            <div class=\"posts__tags tags\">
                                {% if question.tag is not null %}
                                    <a href=\"#\" class=\"bg-36b7d7\">{{ question.tag }}</a>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-4436f8\"></i>{{ question.nameCategorie }}</a></div>
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
                    <div class=\"posts__replies\">{{ question.nbrQuestion }}</div>
                    <div class=\"posts__views\">
                        {{ question.nbrVueCategorie }}

                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>
        </div>
            </td>
        </tr>

    {% endfor %}
    </table>

</main>
<br>
<br>
<br>
<!-- FOOTER -->
<footer>

</footer>

<!-- JAVA SCRIPT -->
<script src={{ asset(\"aassets/vendor/jquery/jquery.min.js\")}}></script>
<script src={{ asset(\"aassets/vendor/velocity/velocity.min.js\")}}></script>
<script src={{ asset(\"aassets/js/app.js\")}}></script>

</body>
</html>

{% endblock %}
{% block javascipt %}
{% endblock %}

", "reponse/indexReponse.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\reponse\\indexReponse.html.twig");
    }
}
