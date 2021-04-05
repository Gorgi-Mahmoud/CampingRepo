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
class __TwigTemplate_a4c7c132e2a5bbd0437fb8f30b7d23f7c03bb2280102977d3bcb251686d9108a extends Template
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
        echo "
<!DOCTYPE HTML>
<html lang=\"en\">

<!-- Mirrored from themes.webmasterdriver.net/Elemo/listing-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:22:50 GMT -->
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "    <!--Bootstrap -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <!--Custome Style -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <!--OWL Carousel slider-->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <!--FontAwesome Font Style -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- SWITCHER -->
    <link rel=\"stylesheet\" id=\"switcher-css\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/switcher.css"), "html", null, true);
        echo "\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\" integrity=\"sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=\" crossorigin=\"anonymous\"/>
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/blue.css"), "html", null, true);
        echo "\" title=\"blue\" media=\"all\" data-default-color=\"true\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/pink.css"), "html", null, true);
        echo "\" title=\"pink\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/orange.css"), "html", null, true);
        echo "\" title=\"orange\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/green.css"), "html", null, true);
        echo "\" title=\"green\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/red.css"), "html", null, true);
        echo "\" title=\"red\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/purple.css"), "html", null, true);
        echo "\" title=\"purple\" media=\"all\" />
    <link href=";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\" type='text/css'>
    <link href=";
        // line 32
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
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 46
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
        // line 90
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
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_index");
        echo "\">Event</a> <span class=\"arrow\"></span>
                            </li>
                            <li class=\"menu-item\"><a href=\"#\">Museum</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showproduit");
        echo "\">Shop</a> <span class=\"arrow\"></span>

                            </li>
                            <li class=\"menu-item\"><a href=\"";
        // line 114
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

<!-- Inner-Banner -->


<!-- /Inner-Banner -->

<!-- Listings -->
<section id=\"inner_pages\">
    ";
        // line 145
        $this->displayBlock('content', $context, $blocks);
        // line 146
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 150
        echo "
</section>
<!-- /Listings -->

<!-- Footer -->
<footer id=\"footer\" class=\"secondary-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"footer_widgets\">
                    <h5>Connect with Us</h5>
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
        // line 189
        $this->displayBlock('script', $context, $blocks);
        // line 201
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/interface.js"), "html", null, true);
        echo "\"></script>
<!--Carousel-JS-->
<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!--Switcher-->
<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/js/switcher.js"), "html", null, true);
        echo "\"></script>
</body>

<!-- Mirrored from themes.webmasterdriver.net/Elemo/listing-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:22:52 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
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

    // line 145
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

    // line 146
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 147
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 189
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 190
        echo "    <!-- Scripts -->
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/interface.js"), "html", null, true);
        echo "\"></script>
    <!--Carousel-JS-->
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <!--Switcher-->
    <script src=\"";
        // line 198
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
        return array (  440 => 198,  435 => 196,  430 => 194,  426 => 193,  422 => 192,  418 => 191,  415 => 190,  405 => 189,  393 => 147,  383 => 146,  364 => 145,  345 => 12,  330 => 208,  325 => 206,  320 => 204,  316 => 203,  312 => 202,  307 => 201,  305 => 189,  264 => 150,  261 => 146,  259 => 145,  225 => 114,  219 => 111,  211 => 106,  192 => 90,  145 => 46,  141 => 45,  137 => 44,  133 => 43,  119 => 32,  115 => 31,  111 => 30,  107 => 29,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  86 => 23,  80 => 20,  75 => 18,  70 => 16,  65 => 14,  62 => 13,  60 => 12,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE HTML>
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
                <div class=\"footer_widgets\">
                    <h5>Connect with Us</h5>
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
