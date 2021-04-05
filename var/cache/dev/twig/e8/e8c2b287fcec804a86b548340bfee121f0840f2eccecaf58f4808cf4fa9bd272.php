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

/* reponse/statistique.html.twig */
class __TwigTemplate_c40f7e0b03a6b910e77322fc1a8a9186e075a56f9edded4a7f4d169f3909c43b extends Template
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
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/statistique.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/statistique.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "reponse/statistique.html.twig", 1);
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
        echo "<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <title>Elemo - Directory & Listings HTML Template</title>
    <!--Bootstrap -->
    <link rel=\"stylesheet\" href=";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo " type=\"text/css\">
    <!--Custome Style -->
    <link rel=\"stylesheet\" href=";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo " type=\"text/css\">
    <!--OWL Carousel slider-->
    <link rel=\"stylesheet\" href=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.css"), "html", null, true);
        echo " type=\"text/css\">
    <!--FontAwesome Font Style -->
    <link href=";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo ">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo ">
    <link rel=\"apple-touch-icon-precomposed\" href=\"assets/images/favicon-icon/apple-touch-icon-57-precomposed.png\">
    <link rel=\"shortcut icon\" href=\"assets/images/favicon-icon/favicon.png\">
    <!-- Google-Font-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"), "html", null, true);
        echo ")></script>
    <![endif]-->
    <!--icone-->
    <script src=";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://kit.fontawesome.com/f324d78908.js"), "html", null, true);
        echo " crossorigin=\"anonymous\"></script>
</head>
<section id=\"main-content\">
    <section class=\"wrapper\">
        <div class=\"container-fluid\">
            <!--overview start-->

            <div class=\"row\">


                <div class=\"col-lg-3\">
                    <div class=\"card bg-primary text-white mb-3 text-center\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <i class=\"fas fa-users fa-3x \"></i>
                                </div>
                                <div class=\"col-8\">
                                    <h4 class=\"card-title\">";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "html", null, true);
        echo " utilisateur</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class=\"col-md-3\">
                    <div class=\"card bg-info text-white mb-3 text-center\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <i class=\"far fa-comment-dots fa-3x\"></i>
                                </div>
                                <div class=\"col-8\">
                                    <h4 class=\"card-title\">";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 71, $this->source); })()), "html", null, true);
        echo " Categories </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class=\"col-md-3\">
                    <div class=\"card bg-warning text-white mb-3 text-center\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <i class=\"fas fa-question fa-3x\"></i>
                                </div>
                                <div class=\"col-8\">
                                    <h4 class=\"card-title\">";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 87, $this->source); })()), "html", null, true);
        echo " question</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-3\">
                    <div class=\"card bg-success text-white mb-3 text-center\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <i class=\"fas fa-reply fa-3x\"></i>
                                </div>
                                <div class=\"col-8\">
                                    <h4 class=\"card-title\">";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 102, $this->source); })()), "html", null, true);
        echo " reponses</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"alert alert-success\">
                        <h1 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-up\"></i> les questions les plus vues : </h1>
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th>question</th>
                                <th>nbr Vues</th>

                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bestquestion"]) || array_key_exists("bestquestion", $context) ? $context["bestquestion"] : (function () { throw new RuntimeError('Variable "bestquestion" does not exist.', 124, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 125
            echo "                                <tr>
                                    <td>
                                         ";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 127), "html", null, true);
            echo "
                                    </td>
                                    <td >
                                    <span class=\"badge badge-dark\">
                                        ";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "nbrVue", [], "any", false, false, false, 131), "html", null, true);
            echo "
                                    </span>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                            </tbody>
                        </table>
                    </div>
                </div>






                    <div class=\"col-lg-6\">
                        <div class=\"alert alert-danger\">
                            <h1 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-down\"></i> les questions les moins vues : </h1>
                            <table class=\"table table-hover\">
                                <thead>
                                <tr>
                                    <th>question</th>
                                    <th>nbr Vues</th>

                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["worstquestion"]) || array_key_exists("worstquestion", $context) ? $context["worstquestion"] : (function () { throw new RuntimeError('Variable "worstquestion" does not exist.', 158, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 159
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 161), "html", null, true);
            echo "
                                        </td>
                                        <td >
                                    <span class=\"badge badge-dark\">
                                        ";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "nbrVue", [], "any", false, false, false, 165), "html", null, true);
            echo "
                                    </span>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>

        </div>



        </div>
    </section>

    <!--main content end-->
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reponse/statistique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 170,  293 => 165,  286 => 161,  282 => 159,  278 => 158,  254 => 136,  243 => 131,  236 => 127,  232 => 125,  228 => 124,  203 => 102,  185 => 87,  166 => 71,  145 => 53,  124 => 35,  118 => 32,  114 => 31,  102 => 22,  98 => 21,  93 => 19,  88 => 17,  83 => 15,  78 => 13,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}


{% block body %}
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <title>Elemo - Directory & Listings HTML Template</title>
    <!--Bootstrap -->
    <link rel=\"stylesheet\" href={{ asset('assets/css/bootstrap.min.css')}} type=\"text/css\">
    <!--Custome Style -->
    <link rel=\"stylesheet\" href={{ asset('assets/css/style.css')}} type=\"text/css\">
    <!--OWL Carousel slider-->
    <link rel=\"stylesheet\" href={{ asset ('assets/css/owl.carousel.css')}} type=\"text/css\">
    <!--FontAwesome Font Style -->
    <link href={{ asset('assets/css/font-awesome.min.css')}} rel=\"stylesheet\">
    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href={{ asset('assets/images/favicon-icon/apple-touch-icon-144-precomposed.png')}}>
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href={{ asset('assets/images/favicon-icon/apple-touch-icon-72-precomposed.png')}}>
    <link rel=\"apple-touch-icon-precomposed\" href=\"assets/images/favicon-icon/apple-touch-icon-57-precomposed.png\">
    <link rel=\"shortcut icon\" href=\"assets/images/favicon-icon/favicon.png\">
    <!-- Google-Font-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src={{ asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}></script>
    <script src={{ asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}})></script>
    <![endif]-->
    <!--icone-->
    <script src={{ asset('https://kit.fontawesome.com/f324d78908.js')}} crossorigin=\"anonymous\"></script>
</head>
<section id=\"main-content\">
    <section class=\"wrapper\">
        <div class=\"container-fluid\">
            <!--overview start-->

            <div class=\"row\">


                <div class=\"col-lg-3\">
                    <div class=\"card bg-primary text-white mb-3 text-center\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <i class=\"fas fa-users fa-3x \"></i>
                                </div>
                                <div class=\"col-8\">
                                    <h4 class=\"card-title\">{{ user }} utilisateur</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class=\"col-md-3\">
                    <div class=\"card bg-info text-white mb-3 text-center\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <i class=\"far fa-comment-dots fa-3x\"></i>
                                </div>
                                <div class=\"col-8\">
                                    <h4 class=\"card-title\">{{ categorie }} Categories </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class=\"col-md-3\">
                    <div class=\"card bg-warning text-white mb-3 text-center\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <i class=\"fas fa-question fa-3x\"></i>
                                </div>
                                <div class=\"col-8\">
                                    <h4 class=\"card-title\">{{ question }} question</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-3\">
                    <div class=\"card bg-success text-white mb-3 text-center\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <i class=\"fas fa-reply fa-3x\"></i>
                                </div>
                                <div class=\"col-8\">
                                    <h4 class=\"card-title\">{{ reponse }} reponses</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"alert alert-success\">
                        <h1 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-up\"></i> les questions les plus vues : </h1>
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th>question</th>
                                <th>nbr Vues</th>

                            </tr>
                            </thead>
                            <tbody>
                            {% for question in bestquestion %}
                                <tr>
                                    <td>
                                         {{ question.question }}
                                    </td>
                                    <td >
                                    <span class=\"badge badge-dark\">
                                        {{ question.nbrVue}}
                                    </span>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>






                    <div class=\"col-lg-6\">
                        <div class=\"alert alert-danger\">
                            <h1 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-down\"></i> les questions les moins vues : </h1>
                            <table class=\"table table-hover\">
                                <thead>
                                <tr>
                                    <th>question</th>
                                    <th>nbr Vues</th>

                                </tr>
                                </thead>
                                <tbody>
                                {% for question in worstquestion %}
                                    <tr>
                                        <td>
                                            {{ question.question }}
                                        </td>
                                        <td >
                                    <span class=\"badge badge-dark\">
                                        {{ question.nbrVue}}
                                    </span>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>

        </div>



        </div>
    </section>

    <!--main content end-->
</section>

{% endblock %}

", "reponse/statistique.html.twig", "C:\\Users\\Admin\\Desktop\\piuser\\mydir\\templates\\reponse\\statistique.html.twig");
    }
}
