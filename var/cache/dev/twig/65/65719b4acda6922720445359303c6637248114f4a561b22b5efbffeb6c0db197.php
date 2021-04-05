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

/* home.html.twig */
class __TwigTemplate_69fd6e81bcb8df1a0b7a21932dd4f77d58ea59b3a9065232eaba67fb48662741 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        // line 1
        echo "
<!DOCTYPE HTML>
<html lang=\"en\">

<!-- Mirrored from themes.webmasterdriver.net/Elemo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:22:00 GMT -->
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <title> A&M Home</title>
    <!--Bootstrap -->
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\" type=\"text/css\">
    <!--Custome Style -->
    <link rel=\"stylesheet\" href=\"assets/css/style.css\" type=\"text/css\">
    <!--OWL Carousel slider-->
    <link rel=\"stylesheet\" href=\"assets/css/owl.carousel.css\" type=\"text/css\">
    <!--FontAwesome Font Style -->
    <link href=\"assets/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"assets/images/favicon-icon/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"assets/images/favicon-icon/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"assets/images/favicon-icon/apple-touch-icon-57-precomposed.png\">
    <link rel=\"shortcut icon\" href=\"assets/images/favicon-icon/favicon.png\">
    <!-- Google-Font-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<!-- Header -->
<header id=\"header\" class=\"transparent-header\">
    <nav class=\"navbar navbar-expand-lg fixed-top\" id=\"header_nav\">
        <div class=\"container-fluid\">
            <div class=\"row header_row\">
                <div class=\"col-md-3 col-sm-12 col-xs-12\">
                    <div class=\"navbar-header\">
                        <div class=\"logo\"> <a href=\"#\"><img style=\"width: 70px\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/A&M.png"), "html", null, true);
        echo "\" alt=\"image\"/></a> </div>
                    </div>
                    <button id=\"menu_slide\" data-target=\"#navigation\" aria-expanded=\"false\" data-toggle=\"collapse\" class=\"navbar-toggler\" type=\"button\">
                        <i class=\"fa fa-bars\"></i>
                    </button>
                </div>


                <div class=\"col-md-9 col-sm-12 col-xs-12\">
                    <div class=\"collapse navbar-collapse\" id=\"navigation\">
                        <ul class=\"nav navbar-nav mr-auto\">
                            <li class=\"menu-item\"><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("");
        echo "\">Home</a> <span class=\"arrow\"></span>
                            </li>
                            <li class=\"menu-item\"><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Blog</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_index");
        echo "\">Event</a> <span class=\"arrow\"></span>
                            </li>
                            <li class=\"menu-item\"><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gmusee_index");
        echo "\">Museum</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showproduit");
        echo "\">Shop</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_index");
        echo "\">Forum</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\">My profile</a> <span class=\"arrow\"></span>

                            </li>
                            </li>
                            ";
        // line 75
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 76
            echo "                            ";
            // line 77
            echo "                            <li class=\"\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affiche");
            echo "\">User Panel </a> <span class=\"arrow\"></span>
                                ";
        }
        // line 79
        echo "                            </li>
                            ";
        // line 80
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80)) {
            // line 81
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Sign In</a></li>
                            ";
        }
        // line 83
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83)) {
            // line 84
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Sign Out</a></li>
                                ";
            // line 85
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "code", [], "any", false, false, false, 85), 1))) {
                // line 86
                echo "                                    <div class=\"submit_listing\">
                                        <i class=\"fa  fa-plus-circle\">Votre compte est activer</i>
                                    </div>
                                ";
            }
            // line 90
            echo "                            ";
        }
        // line 91
        echo "                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- /Header -->

<!-- Banner -->
<section id=\"banner\" class=\"intro-bg parallex-bg section-padding\">
    <div class=\"container\">

        <div class=\"categories-list div_zindex\">
            <div class=\"all-categories-header\">
                <div class=\"listing_header\">
                    <h5>Nos Exposee</h5>
                    <div class=\"layout-switcher\">
                        <button><a  href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trieex");
        echo "\">Sort</a></button>
                    </div>
                </div>
                <div class=\"row\"  id=\"entitiesNavv\">
                    ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exposee"]) || array_key_exists("exposee", $context) ? $context["exposee"] : (function () { throw new RuntimeError('Variable "exposee" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 115
            echo "                        <div class=\"col-md-4 grid_view show_listing\">
                            <div  class=\"listing_wrap\" >

                                <a   href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheEX", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            echo "\">
                                    <div class=\"listing_img\" >
                                        ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["c"], "photo", [], "any", false, false, false, 120));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 121
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/products/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 121))), "html", null, true);
                echo " \" style=\"width: 50px;\">
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "
                                        <div class=\"listing_info\">
                                            <h1>";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 125), "html", null, true);
            echo " </h1>
                                            <h4>";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "description", [], "any", false, false, false, 126), "html", null, true);
            echo " </h4>
                                            <p>";
            // line 127
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "dateC", [], "any", false, false, false, 127), "m/d/Y"), "html", null, true);
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
        // line 135
        echo "


                </div>
                <div class=\"our_prtners text-center\">
                    ";
        // line 140
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["exposee"]) || array_key_exists("exposee", $context) ? $context["exposee"] : (function () { throw new RuntimeError('Variable "exposee" does not exist.', 140, $this->source); })()));
        echo "
                </div>
            </div>
          
        </div>
    </div>
    <div class=\"dark-overlay\"></div>
</section>
<!-- /Banner -->

<!-- About-us -->

<!-- /About-us -->


<!-- Footer -->
<footer id=\"footer\" class=\"footer_2 secondary-bg\">

    <div class=\"footer_bottom\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-md-6\">
                    <p>Copyright &copy; A&m</p>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"follow_us\">
                        <ul>
                            <li><a href=\"https://www.facebook.com/ArtMuseum-111851127671094\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->

<!-- Scripts -->
<script src=\"assets/js/jquery.min.js\"></script>
<script src=\"assets/js/popper.min.js\"></script>
<script src=\"assets/js/bootstrap.min.js\"></script>
<script src=\"assets/js/interface.js\"></script>
<!--Carousel-JS-->
<script src=\"assets/js/owl.carousel.min.js\"></script>
<!--Switcher-->
<script src=\"assets/switcher/js/switcher.js\"></script>
</body>

<!-- Mirrored from themes.webmasterdriver.net/Elemo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:22:00 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 140,  264 => 135,  250 => 127,  246 => 126,  242 => 125,  238 => 123,  229 => 121,  225 => 120,  220 => 118,  215 => 115,  211 => 114,  204 => 110,  183 => 91,  180 => 90,  174 => 86,  172 => 85,  167 => 84,  164 => 83,  158 => 81,  156 => 80,  153 => 79,  147 => 77,  145 => 76,  143 => 75,  136 => 71,  130 => 68,  124 => 65,  118 => 62,  113 => 60,  107 => 57,  102 => 55,  88 => 44,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE HTML>
<html lang=\"en\">

<!-- Mirrored from themes.webmasterdriver.net/Elemo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:22:00 GMT -->
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <title> A&M Home</title>
    <!--Bootstrap -->
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\" type=\"text/css\">
    <!--Custome Style -->
    <link rel=\"stylesheet\" href=\"assets/css/style.css\" type=\"text/css\">
    <!--OWL Carousel slider-->
    <link rel=\"stylesheet\" href=\"assets/css/owl.carousel.css\" type=\"text/css\">
    <!--FontAwesome Font Style -->
    <link href=\"assets/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"assets/images/favicon-icon/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"assets/images/favicon-icon/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"assets/images/favicon-icon/apple-touch-icon-57-precomposed.png\">
    <link rel=\"shortcut icon\" href=\"assets/images/favicon-icon/favicon.png\">
    <!-- Google-Font-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<!-- Header -->
<header id=\"header\" class=\"transparent-header\">
    <nav class=\"navbar navbar-expand-lg fixed-top\" id=\"header_nav\">
        <div class=\"container-fluid\">
            <div class=\"row header_row\">
                <div class=\"col-md-3 col-sm-12 col-xs-12\">
                    <div class=\"navbar-header\">
                        <div class=\"logo\"> <a href=\"#\"><img style=\"width: 70px\" src=\"{{ asset('assets/images/A&M.png')}}\" alt=\"image\"/></a> </div>
                    </div>
                    <button id=\"menu_slide\" data-target=\"#navigation\" aria-expanded=\"false\" data-toggle=\"collapse\" class=\"navbar-toggler\" type=\"button\">
                        <i class=\"fa fa-bars\"></i>
                    </button>
                </div>


                <div class=\"col-md-9 col-sm-12 col-xs-12\">
                    <div class=\"collapse navbar-collapse\" id=\"navigation\">
                        <ul class=\"nav navbar-nav mr-auto\">
                            <li class=\"menu-item\"><a href=\"{{ path('') }}\">Home</a> <span class=\"arrow\"></span>
                            </li>
                            <li class=\"menu-item\"><a href=\"{{ path('blog') }}\">Blog</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"{{ path('event_index') }}\">Event</a> <span class=\"arrow\"></span>
                            </li>
                            <li class=\"menu-item\"><a href=\"{{ path('gmusee_index') }}\">Museum</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"{{ path('showproduit') }}\">Shop</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"{{ path('categorie_index') }}\">Forum</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"{{ path('profile') }}\">My profile</a> <span class=\"arrow\"></span>

                            </li>
                            </li>
                            {% if is_granted('ROLE_ADMIN') %}
                            {#                            {%  if  not app.user %}#}
                            <li class=\"\"><a href=\"{{ path('affiche') }}\">User Panel </a> <span class=\"arrow\"></span>
                                {% endif %}
                            </li>
                            {% if not app.user %}
                                <li><a href=\"{{ path('app_login') }}\">Sign In</a></li>
                            {% endif %}
                            {% if app.user %}
                                <li><a href=\"{{ path('app_logout')}}\">Sign Out</a></li>
                                {% if  app.user.code==1 %}
                                    <div class=\"submit_listing\">
                                        <i class=\"fa  fa-plus-circle\">Votre compte est activer</i>
                                    </div>
                                {% endif %}
                            {% endif %}
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- /Header -->

<!-- Banner -->
<section id=\"banner\" class=\"intro-bg parallex-bg section-padding\">
    <div class=\"container\">

        <div class=\"categories-list div_zindex\">
            <div class=\"all-categories-header\">
                <div class=\"listing_header\">
                    <h5>Nos Exposee</h5>
                    <div class=\"layout-switcher\">
                        <button><a  href=\"{{ path('trieex') }}\">Sort</a></button>
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
          
        </div>
    </div>
    <div class=\"dark-overlay\"></div>
</section>
<!-- /Banner -->

<!-- About-us -->

<!-- /About-us -->


<!-- Footer -->
<footer id=\"footer\" class=\"footer_2 secondary-bg\">

    <div class=\"footer_bottom\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-md-6\">
                    <p>Copyright &copy; A&m</p>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"follow_us\">
                        <ul>
                            <li><a href=\"https://www.facebook.com/ArtMuseum-111851127671094\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->

<!-- Scripts -->
<script src=\"assets/js/jquery.min.js\"></script>
<script src=\"assets/js/popper.min.js\"></script>
<script src=\"assets/js/bootstrap.min.js\"></script>
<script src=\"assets/js/interface.js\"></script>
<!--Carousel-JS-->
<script src=\"assets/js/owl.carousel.min.js\"></script>
<!--Switcher-->
<script src=\"assets/switcher/js/switcher.js\"></script>
</body>

<!-- Mirrored from themes.webmasterdriver.net/Elemo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:22:00 GMT -->
</html>", "home.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\home.html.twig");
    }
}
