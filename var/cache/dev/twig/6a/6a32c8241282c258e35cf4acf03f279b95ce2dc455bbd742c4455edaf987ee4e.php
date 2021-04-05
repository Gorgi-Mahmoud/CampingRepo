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

/* reponse/editReponse.html.twig */
class __TwigTemplate_5c69e89ea798cf1bde0aee35d6acb1c73243ce5baa7ed450026d5c379e2e93e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/editReponse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/editReponse.html.twig"));

        // line 1
        echo "
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
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800"), "html", null, true);
        echo "\" >

    <!-- icon -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/fonts/icons/main/mainfont/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/fonts/icons/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">

    <!-- Vendor -->
    <link rel=\"stylesheet\" href=";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/vendor/bootstrap/v3/bootstrap.min.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/vendor/bootstrap/v4/bootstrap-grid.css"), "html", null, true);
        echo ">
    <!-- Custom -->
    <link rel=\"stylesheet\" href=";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/css/style.css"), "html", null, true);
        echo ">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 30
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class=\"container\">
        <div class=\"create\">
            <div class=\"create__head\">
                <div class=\"create__title\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/fonts/icons/main/New_Topic.svg"), "html", null, true);
        echo "\" alt=\"New topic\">Modifier</div>
                <span>Forum Guidelines</span>
            </div>
            <div class=\"create__section\">

            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"create__section\">

                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"create__section\">

                        </div>
                    </div>
                </div>

                <div class=\"create__advanced\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-xl-4\">
                            <div class=\"create__section\">
                                <div class=\"create__radio\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-xl-3\">
                            <div class=\"create__section\">
                                <div class=\"create__radio\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-xl-5\">
                            <div class=\"create__section\">

                                <div class=\"create__radio\">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"create__footer\">

                </div>
            </div>

            ";
        // line 101
        echo twig_include($this->env, $context, "reponse/_form.html.twig", ["button_label" => "Update"]);
        echo "

            ";
        // line 103
        echo twig_include($this->env, $context, "reponse/_delete_form.html.twig");
        echo "
            <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponse_index", ["idquestion" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 104, $this->source); })()), "question", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104)]), "html", null, true);
        echo "\">Afficher les commentaires</a>

            <table>

                <br>
                <br>

                <tr class=\"posts\" >
                    <div class=\"posts__head\">
                        <div class=\"posts__topic\">Categorie</div>
                        <div class=\"posts__category\">Catégorie</div>
                        <div class=\"posts__users\">Users</div>
                        <div class=\"posts__replies\">Questions</div>
                        <div class=\"posts__views\">Vues</div>
                </tr>
        </div>

        ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 122
            echo "
        <div class=\"posts__body\">

            <div class=\"posts__item bg-f2f4f6\">
                <div class=\"posts__section-left\">
                    <div class=\"posts__topic\">
                        <div class=\"posts__content\">
                            <a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index", ["idcategorie" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 129)]), "html", null, true);
            echo "\" class=\"pn\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "nameCategorie", [], "any", false, false, false, 129), "html", null, true);
            echo "</a>

                            <div class=\"posts__tags tags\">
                                ";
            // line 132
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["question"], "tag", [], "any", false, false, false, 132))) {
                // line 133
                echo "                                    <a href=\"#\" class=\"bg-36b7d7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "tag", [], "any", false, false, false, 133), "html", null, true);
                echo "</a>
                                ";
            }
            // line 135
            echo "                            </div>
                        </div>
                    </div>
                    <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-4436f8\"></i>";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "nameCategorie", [], "any", false, false, false, 138), "html", null, true);
            echo "</a></div>
                </div>
                <div class=\"posts__section-right\">
                    <div class=\"posts__users\">
                        <div>
                            <a href=\"#\" class=\"avatar\"><img src=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/fonts/icons/avatars/L.svg"), "html", null, true);
            echo "\" alt=\"avatar\"></a>
                        </div>
                        <div>
                            <a href=\"#\" class=\"avatar\"><img src=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/fonts/icons/avatars/T.svg"), "html", null, true);
            echo "\" alt=\"avatar\"></a>
                        </div>
                    </div>
                    <div class=\"posts__replies\">";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "nbrQuestion", [], "any", false, false, false, 149), "html", null, true);
            echo "</div>
                    <div class=\"posts__views\">
                        ";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "nbrVueCategorie", [], "any", false, false, false, 151), "html", null, true);
            echo "
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "    </table>
</main>

<!-- FOOTER -->
<footer>

</footer>

<!-- JAVA SCRIPT -->
<script src=";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/vendor/velocity/velocity.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/js/app.js"), "html", null, true);
        echo "></script>

</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reponse/editReponse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 172,  291 => 171,  287 => 170,  276 => 161,  260 => 151,  255 => 149,  249 => 146,  243 => 143,  235 => 138,  230 => 135,  224 => 133,  222 => 132,  214 => 129,  205 => 122,  201 => 121,  181 => 104,  177 => 103,  172 => 101,  121 => 53,  95 => 30,  91 => 29,  84 => 25,  79 => 23,  75 => 22,  69 => 19,  65 => 18,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
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
    <link rel=\"stylesheet\" href=\"{{ asset(\"https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800\")}}\" >

    <!-- icon -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"aassets/fonts/icons/main/mainfont/style.css\")}}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"aassets/fonts/icons/font-awesome/css/font-awesome.min.css\")}}\">

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
<main>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class=\"container\">
        <div class=\"create\">
            <div class=\"create__head\">
                <div class=\"create__title\"><img src=\"{{ asset('aassets/fonts/icons/main/New_Topic.svg') }}\" alt=\"New topic\">Modifier</div>
                <span>Forum Guidelines</span>
            </div>
            <div class=\"create__section\">

            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"create__section\">

                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"create__section\">

                        </div>
                    </div>
                </div>

                <div class=\"create__advanced\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-xl-4\">
                            <div class=\"create__section\">
                                <div class=\"create__radio\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-xl-3\">
                            <div class=\"create__section\">
                                <div class=\"create__radio\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-xl-5\">
                            <div class=\"create__section\">

                                <div class=\"create__radio\">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"create__footer\">

                </div>
            </div>

            {{ include('reponse/_form.html.twig', {'button_label': 'Update'}) }}

            {{ include('reponse/_delete_form.html.twig') }}
            <a href=\"{{ path('reponse_index',{'idquestion':reponse.question.id}) }}\">Afficher les commentaires</a>

            <table>

                <br>
                <br>

                <tr class=\"posts\" >
                    <div class=\"posts__head\">
                        <div class=\"posts__topic\">Categorie</div>
                        <div class=\"posts__category\">Catégorie</div>
                        <div class=\"posts__users\">Users</div>
                        <div class=\"posts__replies\">Questions</div>
                        <div class=\"posts__views\">Vues</div>
                </tr>
        </div>

        {% for question in categories %}

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
    {% endfor %}
    </table>
</main>

<!-- FOOTER -->
<footer>

</footer>

<!-- JAVA SCRIPT -->
<script src={{ asset('aassets/vendor/jquery/jquery.min.js')}}></script>
<script src={{ asset('aassets/vendor/velocity/velocity.min.js')}}></script>
<script src={{ asset('aassets/js/app.js')}}></script>

</body>
</html>

", "reponse/editReponse.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\reponse\\editReponse.html.twig");
    }
}
