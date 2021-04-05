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

/* front.html.twig */
class __TwigTemplate_2b2d2a51dffaf4bffee1a7ac89f6982d33b39466f5e20a9ebca450e4ea77ebfd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"en\">

<!-- Mirrored from themes.webmasterdriver.net/Elemo/listing-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:22:50 GMT -->
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "    <!--Bootstrap -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <!--Custome Style -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <!--OWL Carousel slider-->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <!--FontAwesome Font Style -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- SWITCHER -->
    <link rel=\"stylesheet\" id=\"switcher-css\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/switcher.css"), "html", null, true);
        echo "\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\" integrity=\"sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=\" crossorigin=\"anonymous\"/>
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/blue.css"), "html", null, true);
        echo "\" title=\"blue\" media=\"all\" data-default-color=\"true\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/pink.css"), "html", null, true);
        echo "\" title=\"pink\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/orange.css"), "html", null, true);
        echo "\" title=\"orange\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/green.css"), "html", null, true);
        echo "\" title=\"green\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/red.css"), "html", null, true);
        echo "\" title=\"red\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/purple.css"), "html", null, true);
        echo "\" title=\"purple\" media=\"all\" />
    <link href=";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\" type='text/css'>
    <link href=";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo " rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='fonts/lovelo/stylesheet.css' rel='stylesheet' type='text/css'>

    <link href='css/owl.carousel.css' rel='stylesheet' type='text/css'>
    <link href='css/owl.theme.css' rel='stylesheet' type='text/css'>
    <link href=\"rs-plugin/css/settings.css\" rel=\"stylesheet\" type='text/css'>
    <link href=\"css/custom.css\" rel=\"stylesheet\" type='text/css'>


    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/favicon.png"), "html", null, true);
        echo "\">
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
<!-- Start Switcher -->
<div class=\"switcher-wrapper\">
    <div class=\"demo_changer\">
        <div class=\"demo-icon customBgColor\"><i class=\"fa fa-cog fa-spin fa-2x\"></i></div>
        <div class=\"form_holder\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"predefined_styles\">
                        <div class=\"skin-theme-switcher\">
                            <h4>Color</h4>
                            <a href=\"#\" data-switchcolor=\"blue\" class=\"styleswitch\" style=\"background-color:#38ccff;\"> </a>
                            <a href=\"#\" data-switchcolor=\"pink\" class=\"styleswitch\" style=\"background-color:#FF2761;\"> </a>
                            <a href=\"#\" data-switchcolor=\"orange\" class=\"styleswitch\" style=\"background-color:#f76d2b;\"> </a>
                            <a href=\"#\" data-switchcolor=\"green\" class=\"styleswitch\" style=\"background-color:#2dcc70;\"> </a>
                            <a href=\"#\" data-switchcolor=\"red\" class=\"styleswitch\" style=\"background-color:#de302f;\"> </a>
                            <a href=\"#\" data-switchcolor=\"purple\" class=\"styleswitch\" style=\"background-color:#6054c2;\"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Switcher -->

<!-- Header -->
<header id=\"header\" class=\"transparent-header\">
    <nav class=\"navbar navbar-expand-lg fixed-top\" id=\"header_nav\">
        <div class=\"container-fluid\">
            <div class=\"row header_row\">
                <div class=\"col-md-3 col-sm-12 col-xs-12\">
                    <div class=\"navbar-header\">
                        <div class=\"logo\"> <a href=\"#\"><img style=\"width: 70px\" src=\"";
        // line 89
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
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("");
        echo "\">Home</a> <span class=\"arrow\"></span>
                            </li>
                            <li class=\"menu-item\"><a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Blog</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_index");
        echo "\">Event</a> <span class=\"arrow\"></span>
                            </li>
                            <li class=\"menu-item\"><a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gmusee_index");
        echo "\">Museum</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showproduit");
        echo "\">Shop</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_index");
        echo "\">Forum</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\">My profile</a> <span class=\"arrow\"></span>

                            </li>
                            </li>
                            ";
        // line 120
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 121
            echo "                            ";
            // line 122
            echo "                            <li class=\"\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affiche");
            echo "\">User Panel </a> <span class=\"arrow\"></span>
                                ";
        }
        // line 124
        echo "                            </li>
                            ";
        // line 125
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "user", [], "any", false, false, false, 125)) {
            // line 126
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Sign In</a></li>
                            ";
        }
        // line 128
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128)) {
            // line 129
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Sign Out</a></li>
                                ";
            // line 130
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130), "code", [], "any", false, false, false, 130), 1))) {
                // line 131
                echo "                                    <div class=\"submit_listing\">
                                        <i class=\"fa  fa-plus-circle\">Votre compte est activer</i>
                                    </div>
                                ";
            }
            // line 135
            echo "                            ";
        }
        // line 136
        echo "                        </ul>

                    </div>
                </div>

            </div>

        </div>

    </nav>

</header>
<!-- /Header -->

<!-- Inner-Banner -->


<!-- /Inner-Banner -->

<!-- Listings -->
<section id=\"inner_pages\">
    ";
        // line 157
        $this->displayBlock('content', $context, $blocks);
        // line 158
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 162
        echo "
</section>
<!-- /Listings -->

<!-- Footer -->
<footer id=\"footer\" class=\"secondary-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <a class=\"footer_widgets\">
                    <h3> <a href=\"https://www.facebook.com/ArtMuseum-111851127671094\"> Connect with Us</a></h3>
                </div>
            </div>




        </div>
    </div>

    <div class=\"footer_bottom\">
        <div class=\"container\">
            <p>Copyright &copy; 2020 A&M. All Rights Reserved</p>
        </div>
    </div>
</footer>
<!-- /Footer -->
<script src=\"https://js.stripe.com/v3/\"></script>

<!-- Scripts -->
";
        // line 192
        $this->displayBlock('script', $context, $blocks);
        // line 204
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/interface.js"), "html", null, true);
        echo "\"></script>
<!--Carousel-JS-->
<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!--Switcher-->
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/js/switcher.js"), "html", null, true);
        echo "\"></script>
</body>

<!-- Mirrored from themes.webmasterdriver.net/Elemo/listing-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:22:52 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 157
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 158
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 159
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 192
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 193
        echo "    <!-- Scripts -->
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/interface.js"), "html", null, true);
        echo "\"></script>
    <!--Carousel-JS-->
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <!--Switcher-->
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/js/switcher.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 201,  476 => 199,  471 => 197,  467 => 196,  463 => 195,  459 => 194,  456 => 193,  446 => 192,  434 => 159,  424 => 158,  405 => 157,  386 => 11,  371 => 211,  366 => 209,  361 => 207,  357 => 206,  353 => 205,  348 => 204,  346 => 192,  314 => 162,  311 => 158,  309 => 157,  286 => 136,  283 => 135,  277 => 131,  275 => 130,  270 => 129,  267 => 128,  261 => 126,  259 => 125,  256 => 124,  250 => 122,  248 => 121,  246 => 120,  239 => 116,  233 => 113,  227 => 110,  221 => 107,  216 => 105,  210 => 102,  205 => 100,  191 => 89,  144 => 45,  140 => 44,  136 => 43,  132 => 42,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  98 => 26,  94 => 25,  90 => 24,  85 => 22,  79 => 19,  74 => 17,  69 => 15,  64 => 13,  61 => 12,  59 => 11,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html lang=\"en\">

<!-- Mirrored from themes.webmasterdriver.net/Elemo/listing-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:22:50 GMT -->
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    {% block title %} {% endblock %}
    <!--Bootstrap -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css')}}\" type=\"text/css\">
    <!--Custome Style -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css')}}\" type=\"text/css\">
    <!--OWL Carousel slider-->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.carousel.css')}}\" type=\"text/css\">
    <!--FontAwesome Font Style -->
    <link href=\"{{ asset('assets/css/font-awesome.min.css')}}\" rel=\"stylesheet\">

    <!-- SWITCHER -->
    <link rel=\"stylesheet\" id=\"switcher-css\" type=\"text/css\" href=\"{{ asset('assets/switcher/css/switcher.css')}}\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\" integrity=\"sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=\" crossorigin=\"anonymous\"/>
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"{{ asset('assets/switcher/css/blue.css')}}\" title=\"blue\" media=\"all\" data-default-color=\"true\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"{{ asset('assets/switcher/css/pink.css')}}\" title=\"pink\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"{{ asset('assets/switcher/css/orange.css')}}\" title=\"orange\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"{{ asset('assets/switcher/css/green.css')}}\" title=\"green\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"{{ asset('assets/switcher/css/red.css')}}\" title=\"red\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"{{ asset('assets/switcher/css/purple.css')}}\" title=\"purple\" media=\"all\" />
    <link href={{ asset(\"css/bootstrap.min.css\")}} rel=\"stylesheet\" type='text/css'>
    <link href={{ asset('fonts/font-awesome/css/font-awesome.min.css')}} rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='fonts/lovelo/stylesheet.css' rel='stylesheet' type='text/css'>

    <link href='css/owl.carousel.css' rel='stylesheet' type='text/css'>
    <link href='css/owl.theme.css' rel='stylesheet' type='text/css'>
    <link href=\"rs-plugin/css/settings.css\" rel=\"stylesheet\" type='text/css'>
    <link href=\"css/custom.css\" rel=\"stylesheet\" type='text/css'>


    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ asset('assets/images/favicon-icon/apple-touch-icon-144-precomposed.png')}}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ asset('assets/images/favicon-icon/apple-touch-icon-72-precomposed.png')}}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('assets/images/favicon-icon/apple-touch-icon-57-precomposed.png')}}\">
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon-icon/favicon.png')}}\">
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
<!-- Start Switcher -->
<div class=\"switcher-wrapper\">
    <div class=\"demo_changer\">
        <div class=\"demo-icon customBgColor\"><i class=\"fa fa-cog fa-spin fa-2x\"></i></div>
        <div class=\"form_holder\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"predefined_styles\">
                        <div class=\"skin-theme-switcher\">
                            <h4>Color</h4>
                            <a href=\"#\" data-switchcolor=\"blue\" class=\"styleswitch\" style=\"background-color:#38ccff;\"> </a>
                            <a href=\"#\" data-switchcolor=\"pink\" class=\"styleswitch\" style=\"background-color:#FF2761;\"> </a>
                            <a href=\"#\" data-switchcolor=\"orange\" class=\"styleswitch\" style=\"background-color:#f76d2b;\"> </a>
                            <a href=\"#\" data-switchcolor=\"green\" class=\"styleswitch\" style=\"background-color:#2dcc70;\"> </a>
                            <a href=\"#\" data-switchcolor=\"red\" class=\"styleswitch\" style=\"background-color:#de302f;\"> </a>
                            <a href=\"#\" data-switchcolor=\"purple\" class=\"styleswitch\" style=\"background-color:#6054c2;\"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Switcher -->

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

<!-- Inner-Banner -->


<!-- /Inner-Banner -->

<!-- Listings -->
<section id=\"inner_pages\">
    {% block content%} {% endblock %}
    {% block body %}


    {% endblock %}

</section>
<!-- /Listings -->

<!-- Footer -->
<footer id=\"footer\" class=\"secondary-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <a class=\"footer_widgets\">
                    <h3> <a href=\"https://www.facebook.com/ArtMuseum-111851127671094\"> Connect with Us</a></h3>
                </div>
            </div>




        </div>
    </div>

    <div class=\"footer_bottom\">
        <div class=\"container\">
            <p>Copyright &copy; 2020 A&M. All Rights Reserved</p>
        </div>
    </div>
</footer>
<!-- /Footer -->
<script src=\"https://js.stripe.com/v3/\"></script>

<!-- Scripts -->
{% block script %}
    <!-- Scripts -->
    <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/popper.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/interface.js') }}\"></script>
    <!--Carousel-JS-->
    <script src=\"{{ asset('assets/js/owl.carousel.min.js') }}\"></script>
    <!--Switcher-->
    <script src=\"{{ asset('assets/switcher/js/switcher.js') }}\"></script>

{% endblock %}
<script src=\"{{ asset('assets/js/jquery.min.js')}}\"></script>
<script src=\"{{ asset('assets/js/popper.min.js')}}\"></script>
<script src=\"{{ asset('assets/js/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset('assets/js/interface.js')}}\"></script>
<!--Carousel-JS-->
<script src=\"{{ asset('assets/js/owl.carousel.min.js')}}\"></script>
<!--Switcher-->
<script src=\"{{ asset('assets/switcher/js/switcher.js')}}\"></script>
</body>

<!-- Mirrored from themes.webmasterdriver.net/Elemo/listing-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:22:52 GMT -->
</html>", "front.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\front.html.twig");
    }
}
