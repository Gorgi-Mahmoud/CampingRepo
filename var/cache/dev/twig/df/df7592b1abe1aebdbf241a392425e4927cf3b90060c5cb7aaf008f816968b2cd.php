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
class __TwigTemplate_2650c87bb8b2327faa62098175b228ecf36bf59f8f57beed426205edcf03bd86 extends Template
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
    <title>Elemo - Directory & Listings HTML Template</title>
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
                            <li class=\"menu-item\"><a href=\"#\">Home</a> <span class=\"arrow\"></span>
                            </li>
                            <li class=\"menu-item\"><a href=\"#\">Blog</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_index");
        echo "\">Event</a> <span class=\"arrow\"></span>
                            </li>
                            <li class=\"menu-item\"><a href=\"#\">Museum</a> <span class=\"arrow\"></span>

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
                            <li class=\"menu-item\"><a href=\"#\">My profile</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"#\">User Panel</a> <span class=\"arrow\"></span>

                            </li>
                            <li><a href=\"#\">Sign In</a></li>
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
              <br>
                <br>
                <br>


                <br>






            </div>
            <div id=\"categories-slider\">
                <div class=\"owl-carousel\">
                    <div class=\"item\">
                        <a href=\"#\">
                            <div class=\"listing-no\">12</div>
                            <div class=\"category_icon\"><img src=\"assets/images/category-icon1.png\" alt=\"image\"></div>
                            <p>Hotels & Travel</p>
                        </a>
                    </div>
                    <div class=\"item\">
                        <a href=\"#\">
                            <div class=\"listing-no\">12</div>
                            <div class=\"category_icon\"><img src=\"assets/images/category-icon2.png\" alt=\"image\"></div>
                            <p>Hotels & Travel</p>
                        </a>
                    </div>
                    <div class=\"item\">
                        <a href=\"#\">
                            <div class=\"listing-no\">12</div>
                            <div class=\"category_icon\"><img src=\"assets/images/category-icon3.png\" alt=\"image\"></div>
                            <p>Hotels & Travel</p>
                        </a>
                    </div>
                    <div class=\"item\">
                        <a href=\"#\">
                            <div class=\"listing-no\">12</div>
                            <div class=\"category_icon\"><img src=\"assets/images/category-icon4.png\" alt=\"image\"></div>
                            <p>Hotels & Travel</p>
                        </a>
                    </div>
                    <div class=\"item\">
                        <a href=\"#\">
                            <div class=\"listing-no\">12</div>
                            <div class=\"category_icon\"><img src=\"assets/images/category-icon5.png\" alt=\"image\"></div>
                            <p>Hotels & Travel</p>
                        </a>
                    </div>
                    <div class=\"item\">
                        <a href=\"#\">
                            <div class=\"listing-no\">12</div>
                            <div class=\"category_icon\"><img src=\"assets/images/category-icon6.png\" alt=\"image\"></div>
                            <p>Hotels & Travel</p>
                        </a>
                    </div>
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
                    <p>Copyright &copy; 2020 Elemo. All Rights Reserved</p>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"follow_us\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
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
        return array (  121 => 68,  115 => 65,  107 => 60,  88 => 44,  43 => 1,);
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
    <title>Elemo - Directory & Listings HTML Template</title>
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
                            <li class=\"menu-item\"><a href=\"#\">Home</a> <span class=\"arrow\"></span>
                            </li>
                            <li class=\"menu-item\"><a href=\"#\">Blog</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"{{ path('event_index') }}\">Event</a> <span class=\"arrow\"></span>
                            </li>
                            <li class=\"menu-item\"><a href=\"#\">Museum</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"{{ path('showproduit') }}\">Shop</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"{{ path('categorie_index') }}\">Forum</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"#\">My profile</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"#\">User Panel</a> <span class=\"arrow\"></span>

                            </li>
                            <li><a href=\"#\">Sign In</a></li>
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
              <br>
                <br>
                <br>


                <br>






            </div>
            <div id=\"categories-slider\">
                <div class=\"owl-carousel\">
                    <div class=\"item\">
                        <a href=\"#\">
                            <div class=\"listing-no\">12</div>
                            <div class=\"category_icon\"><img src=\"assets/images/category-icon1.png\" alt=\"image\"></div>
                            <p>Hotels & Travel</p>
                        </a>
                    </div>
                    <div class=\"item\">
                        <a href=\"#\">
                            <div class=\"listing-no\">12</div>
                            <div class=\"category_icon\"><img src=\"assets/images/category-icon2.png\" alt=\"image\"></div>
                            <p>Hotels & Travel</p>
                        </a>
                    </div>
                    <div class=\"item\">
                        <a href=\"#\">
                            <div class=\"listing-no\">12</div>
                            <div class=\"category_icon\"><img src=\"assets/images/category-icon3.png\" alt=\"image\"></div>
                            <p>Hotels & Travel</p>
                        </a>
                    </div>
                    <div class=\"item\">
                        <a href=\"#\">
                            <div class=\"listing-no\">12</div>
                            <div class=\"category_icon\"><img src=\"assets/images/category-icon4.png\" alt=\"image\"></div>
                            <p>Hotels & Travel</p>
                        </a>
                    </div>
                    <div class=\"item\">
                        <a href=\"#\">
                            <div class=\"listing-no\">12</div>
                            <div class=\"category_icon\"><img src=\"assets/images/category-icon5.png\" alt=\"image\"></div>
                            <p>Hotels & Travel</p>
                        </a>
                    </div>
                    <div class=\"item\">
                        <a href=\"#\">
                            <div class=\"listing-no\">12</div>
                            <div class=\"category_icon\"><img src=\"assets/images/category-icon6.png\" alt=\"image\"></div>
                            <p>Hotels & Travel</p>
                        </a>
                    </div>
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
                    <p>Copyright &copy; 2020 Elemo. All Rights Reserved</p>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"follow_us\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
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
