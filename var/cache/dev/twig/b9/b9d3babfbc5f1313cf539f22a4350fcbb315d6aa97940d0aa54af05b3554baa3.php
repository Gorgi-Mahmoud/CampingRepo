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

/* back.html.twig */
class __TwigTemplate_b66f2bdb221cd0421e5589fb250681107131614524af539aa1fb30d609397a40 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body1' => [$this, 'block_body1'],
            'body2' => [$this, 'block_body2'],
            'body3' => [$this, 'block_body3'],
            'body4' => [$this, 'block_body4'],
            'body5' => [$this, 'block_body5'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"en\">

<!-- Mirrored from themes.webmasterdriver.net/Elemo/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:31:20 GMT -->
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <title>Elemo - Directory & Listings HTML Template</title>
    <script src=";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://kit.fontawesome.com/8cf25a15a6.js"), "html", null, true);
        echo " crossorigin=\"anonymous\"></script>
    <!--Bootstrap -->
    <link rel=\"stylesheet\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo " type=\"text/css\">
    <!--Custome Style -->
    <link rel=\"stylesheet\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo " type=\"text/css\">
    <link rel=\"stylesheet\" href=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/dashboard.css"), "html", null, true);
        echo " type=\"text/css\">
    <!--OWL Carousel slider-->
    <link rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.css"), "html", null, true);
        echo " type=\"text/css\">
    <!--FontAwesome Font Style -->
    <link href=";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo ">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo ">
    <link rel=\"apple-touch-icon-precomposed\" href=";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo ">
    <link rel=\"shortcut icon\" href=";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/favicon.png"), "html", null, true);
        echo ">
    <!-- Google-Font-->
    <link href=";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"), "html", null, true);
        echo " rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"), "html", null, true);
        echo "></script>
    <![endif]-->


</head>
<body>

<div class=\"dashboard_container\">
    <!-- Header -->
    <header id=\"header\">
        ";
        // line 44
        $this->displayBlock('body1', $context, $blocks);
        // line 71
        echo "    </header>
    <!-- /Header -->
    ";
        // line 73
        $this->displayBlock('body2', $context, $blocks);
        // line 123
        echo "        <!-- Navigation / End -->
        ";
        // line 124
        $this->displayBlock('body3', $context, $blocks);
        // line 143
        echo "
            <!-- Notice -->
            ";
        // line 145
        $this->displayBlock('body4', $context, $blocks);
        // line 179
        echo "            <!-- Recent Activity -->
            ";
        // line 180
        $this->displayBlock('body5', $context, $blocks);
        // line 217
        echo "            <div class=\"row\">
                <!-- Copyrights -->
                <div class=\"col-md-12\">
                    <div class=\"copyrights\">Copyright &copy; 2020 Elemo. All Rights Reserved</div>
                </div>
            </div>
        </div>
        <!-- Content / End -->
    </div>
</div>

<!-- Scripts -->
<script src=\"assets/js/jquery.min.js\"></script>
<script src=\"assets/js/popper.min.js\"></script>
<script src=\"assets/js/bootstrap.min.js\"></script>
<script src=\"assets/js/interface.js\"></script>
<!--Carousel-JS-->
<script src=\"assets/js/owl.carousel.min.js\"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/Elemo/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:32:41 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_body1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body1"));

        // line 45
        echo "            <nav class=\"navbar navbar-expand-lg fixed-top\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <div class=\"logo\"> <a href=";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index-2.html"), "html", null, true);
        echo "><img src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo " alt=\"image\"/></a> </div>
                        <div id=\"dashboard-responsive-nav-trigger\"><i class=\"fa fa-reorder\"></i></div>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"\">
                        <div class=\"user_nav ml-auto\">
                            <div class=\"dropdown\">
                          <span id=\"dLabel\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img src=";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/happy-client-01.jpg"), "html", null, true);
        echo " alt=\"img\">
                          </span>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"dLabel\">
                                    <li><a href=";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard.html"), "html", null, true);
        echo "><i class=\"fa fa-cogs\"></i> Dashboard</a></li>
                                    <li><a href=";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard-my-profile.html"), "html", null, true);
        echo "><i class=\"fa fa-user-o\"></i> My Profile</a></li>
                                    <li><a href=";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index-2.html"), "html", null, true);
        echo "><i class=\"fa fa-power-off\"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"submit_listing\">
                            <a href=";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard-add-listing.html"), "html", null, true);
        echo " class=\"btn outline-btn\"><i class=\"fa  fa-plus-circle\"></i> Submit Listing</a>
                        </div>
                    </div>
                </div>
            </nav>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        // line 74
        echo "    <div id=\"dashboard\">
        <!-- Navigation -->
        <div id=\"dashboard-nav\" class=\"dashboard-nav\">
            <ul>
                <li class=\"active\"><a href=\"#\"> <i class=\"fa fa-cogs\"></i>Dashboard  </a></li>



                        <li><a data-toggle=\"dropdown\"><i class=\"fa fa-th-list\"></i> Blog</a>

                        </li>
                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-th-list\"></i> Event</a>

                </li>
                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-th-list\"></i> Museum</a>

                </li>


                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-shopping-basket\"></i>Shop</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_new");
        echo "\">Add Product <span class=\"nav-tag green\">6</span></a></li>
                        <li><a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_showback");
        echo "\">Orders <span class=\"nav-tag yellow\">1</span></a></li>
                    </ul>
                </li>

                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-th-list\"></i> Forum</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_index_back");
        echo "\">Categories</a></li>


                    </ul>
                </li>

                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-th-list\"></i> Statistiques</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">

                        <li><a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("best");
        echo "\">Forum </a></li>
                        <li><a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test1");
        echo "\">Shop </a></li>

                    </ul>
                </li>


                <li><a href=";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard-my-profile.html"), "html", null, true);
        echo "><i class=\"fa fa-user-o\"></i> My Profile</a></li>
                <li><a href=";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index-2.html"), "html", null, true);
        echo "><i class=\"fa fa-power-off\"></i> Logout</a></li>
            </ul>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 124
    public function block_body3($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body3"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body3"));

        // line 125
        echo "        <!-- Content -->
        <div class=\"dashboard-content\">
            <!-- Titlebar -->
            <div id=\"titlebar\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2>Dashboard</h2>
                        <!-- Breadcrumbs -->
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li><a href=\"#\">Home</a></li>
                                <li>Dashboard</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_body4($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body4"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body4"));

        // line 146
        echo "                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"notification alert alert-success alert-dismissible\" role=\"alert\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                            <p>Your listing <strong>Hotel Govendor</strong> has been approved!</p>
                        </div>
                    </div>
                </div>


                <div class=\"row\">
                    <div class=\"dashboard-info-box\">
                        <div class=\"dashboard-info color-1\">
                            <h4>6</h4> <span>Published Listings</span>
                        </div>
                        <div class=\"dashboard-info color-2\">
                            <h4>1</h4> <span>Pending  Listings</span>
                        </div>
                        <div class=\"dashboard-info color-3\">
                            <h4>2</h4> <span>Expired  Listings</span>
                        </div>
                        <div class=\"dashboard-info color-4\">
                            <h4>520</h4> <span>Total Views</span>
                        </div>
                        <div class=\"dashboard-info color-5\">
                            <h4>820</h4> <span>Total Reviews</span>
                        </div>
                        <div class=\"dashboard-info color-6\">
                            <h4>15</h4> <span>Bookmarked Listings</span>
                        </div>
                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 180
    public function block_body5($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body5"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body5"));

        // line 181
        echo "                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"dashboard-list-box with-icons margin-top-20\">
                            <h4>Recent Activities</h4>
                            <ul>
                                <li>
                                    <i class=\"list-box-icon fa fa-list\"></i> Your listing <strong><a href=\"#\">The Morning Hotel</a></strong> has been approved!
                                    <a href=\"#\" class=\"close-list-item\"><i class=\"fa fa-close\"></i></a>
                                </li>

                                <li>
                                    <i class=\"list-box-icon fa fa-star-o\"></i> Kathy Brown left a review on <strong>
                                        <a href=\"#\">The Morning Hotel</a></strong>
                                    <a href=\"#\" class=\"close-list-item\"><i class=\"fa fa-close\"></i></a>
                                </li>

                                <li>
                                    <i class=\"list-box-icon fa fa-bookmark-o\"></i> Someone bookmarked your <strong><a href=\"#\">Laisa Spa Center</a></strong> listing!
                                    <a href=\"#\" class=\"close-list-item\"><i class=\"fa fa-close\"></i></a>
                                </li>

                                <li>
                                    <i class=\"list-box-icon fa fa-star-o\"></i> Kathy Brown left a review on <strong>
                                        <a href=\"#\">Auto Repair Shop</a></strong>
                                    <a href=\"#\" class=\"close-list-item\"><i class=\"fa fa-close\"></i></a>
                                </li>

                                <li>
                                    <i class=\"list-box-icon fa fa-bookmark-o\"></i> Someone bookmarked your <strong><a href=\"#\">The Shelby Apartment</a></strong> listing!
                                    <a href=\"#\" class=\"close-list-item\"><i class=\"fa fa-close\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 181,  431 => 180,  389 => 146,  379 => 145,  352 => 125,  342 => 124,  328 => 119,  324 => 118,  315 => 112,  311 => 111,  299 => 102,  290 => 96,  286 => 95,  263 => 74,  253 => 73,  237 => 65,  229 => 60,  225 => 59,  221 => 58,  215 => 55,  203 => 48,  198 => 45,  188 => 44,  156 => 217,  154 => 180,  151 => 179,  149 => 145,  145 => 143,  143 => 124,  140 => 123,  138 => 73,  134 => 71,  132 => 44,  119 => 34,  115 => 33,  108 => 29,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  85 => 21,  80 => 19,  75 => 17,  71 => 16,  66 => 14,  61 => 12,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html lang=\"en\">

<!-- Mirrored from themes.webmasterdriver.net/Elemo/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:31:20 GMT -->
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <title>Elemo - Directory & Listings HTML Template</title>
    <script src={{ asset(\"https://kit.fontawesome.com/8cf25a15a6.js\")}} crossorigin=\"anonymous\"></script>
    <!--Bootstrap -->
    <link rel=\"stylesheet\" href={{ asset('assets/css/bootstrap.min.css')}} type=\"text/css\">
    <!--Custome Style -->
    <link rel=\"stylesheet\" href={{ asset ('assets/css/style.css')}} type=\"text/css\">
    <link rel=\"stylesheet\" href={{asset('assets/css/dashboard.css')}} type=\"text/css\">
    <!--OWL Carousel slider-->
    <link rel=\"stylesheet\" href={{ asset('assets/css/owl.carousel.css')}} type=\"text/css\">
    <!--FontAwesome Font Style -->
    <link href={{ asset(\"assets/css/font-awesome.min.css\")}} rel=\"stylesheet\">

    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href={{ asset(\"assets/images/favicon-icon/apple-touch-icon-144-precomposed.png\")}}>
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href={{ asset(\"assets/images/favicon-icon/apple-touch-icon-72-precomposed.png\")}}>
    <link rel=\"apple-touch-icon-precomposed\" href={{ asset(\"assets/images/favicon-icon/apple-touch-icon-57-precomposed.png\")}}>
    <link rel=\"shortcut icon\" href={{ asset(\"assets/images/favicon-icon/favicon.png\")}}>
    <!-- Google-Font-->
    <link href={{ asset(\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\")}} rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src={{ asset(\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\")}}></script>
    <script src={{ asset(\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\")}}></script>
    <![endif]-->


</head>
<body>

<div class=\"dashboard_container\">
    <!-- Header -->
    <header id=\"header\">
        {% block body1 %}
            <nav class=\"navbar navbar-expand-lg fixed-top\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <div class=\"logo\"> <a href={{ asset(\"index-2.html\")}}><img src={{ asset(\"assets/images/logo.png\")}} alt=\"image\"/></a> </div>
                        <div id=\"dashboard-responsive-nav-trigger\"><i class=\"fa fa-reorder\"></i></div>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"\">
                        <div class=\"user_nav ml-auto\">
                            <div class=\"dropdown\">
                          <span id=\"dLabel\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img src={{ asset(\"assets/images/happy-client-01.jpg\")}} alt=\"img\">
                          </span>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"dLabel\">
                                    <li><a href={{ asset(\"dashboard.html\")}}><i class=\"fa fa-cogs\"></i> Dashboard</a></li>
                                    <li><a href={{ asset(\"dashboard-my-profile.html\")}}><i class=\"fa fa-user-o\"></i> My Profile</a></li>
                                    <li><a href={{ asset(\"index-2.html\")}}><i class=\"fa fa-power-off\"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"submit_listing\">
                            <a href={{ asset(\"dashboard-add-listing.html\")}} class=\"btn outline-btn\"><i class=\"fa  fa-plus-circle\"></i> Submit Listing</a>
                        </div>
                    </div>
                </div>
            </nav>
        {% endblock %}
    </header>
    <!-- /Header -->
    {% block body2 %}
    <div id=\"dashboard\">
        <!-- Navigation -->
        <div id=\"dashboard-nav\" class=\"dashboard-nav\">
            <ul>
                <li class=\"active\"><a href=\"#\"> <i class=\"fa fa-cogs\"></i>Dashboard  </a></li>



                        <li><a data-toggle=\"dropdown\"><i class=\"fa fa-th-list\"></i> Blog</a>

                        </li>
                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-th-list\"></i> Event</a>

                </li>
                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-th-list\"></i> Museum</a>

                </li>


                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-shopping-basket\"></i>Shop</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"{{ path('produit_new') }}\">Add Product <span class=\"nav-tag green\">6</span></a></li>
                        <li><a href=\"{{ path('commande_showback') }}\">Orders <span class=\"nav-tag yellow\">1</span></a></li>
                    </ul>
                </li>

                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-th-list\"></i> Forum</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"{{ path('categorie_index_back') }}\">Categories</a></li>


                    </ul>
                </li>

                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-th-list\"></i> Statistiques</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">

                        <li><a href=\"{{ path('best') }}\">Forum </a></li>
                        <li><a href=\"{{ path('test1') }}\">Shop </a></li>

                    </ul>
                </li>


                <li><a href={{ asset(\"dashboard-my-profile.html\")}}><i class=\"fa fa-user-o\"></i> My Profile</a></li>
                <li><a href={{ asset(\"index-2.html\")}}><i class=\"fa fa-power-off\"></i> Logout</a></li>
            </ul>
        </div>
        {% endblock %}
        <!-- Navigation / End -->
        {% block body3 %}
        <!-- Content -->
        <div class=\"dashboard-content\">
            <!-- Titlebar -->
            <div id=\"titlebar\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2>Dashboard</h2>
                        <!-- Breadcrumbs -->
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li><a href=\"#\">Home</a></li>
                                <li>Dashboard</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            {% endblock %}

            <!-- Notice -->
            {% block body4 %}
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"notification alert alert-success alert-dismissible\" role=\"alert\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                            <p>Your listing <strong>Hotel Govendor</strong> has been approved!</p>
                        </div>
                    </div>
                </div>


                <div class=\"row\">
                    <div class=\"dashboard-info-box\">
                        <div class=\"dashboard-info color-1\">
                            <h4>6</h4> <span>Published Listings</span>
                        </div>
                        <div class=\"dashboard-info color-2\">
                            <h4>1</h4> <span>Pending  Listings</span>
                        </div>
                        <div class=\"dashboard-info color-3\">
                            <h4>2</h4> <span>Expired  Listings</span>
                        </div>
                        <div class=\"dashboard-info color-4\">
                            <h4>520</h4> <span>Total Views</span>
                        </div>
                        <div class=\"dashboard-info color-5\">
                            <h4>820</h4> <span>Total Reviews</span>
                        </div>
                        <div class=\"dashboard-info color-6\">
                            <h4>15</h4> <span>Bookmarked Listings</span>
                        </div>
                    </div>
                </div>
            {% endblock %}
            <!-- Recent Activity -->
            {% block body5 %}
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"dashboard-list-box with-icons margin-top-20\">
                            <h4>Recent Activities</h4>
                            <ul>
                                <li>
                                    <i class=\"list-box-icon fa fa-list\"></i> Your listing <strong><a href=\"#\">The Morning Hotel</a></strong> has been approved!
                                    <a href=\"#\" class=\"close-list-item\"><i class=\"fa fa-close\"></i></a>
                                </li>

                                <li>
                                    <i class=\"list-box-icon fa fa-star-o\"></i> Kathy Brown left a review on <strong>
                                        <a href=\"#\">The Morning Hotel</a></strong>
                                    <a href=\"#\" class=\"close-list-item\"><i class=\"fa fa-close\"></i></a>
                                </li>

                                <li>
                                    <i class=\"list-box-icon fa fa-bookmark-o\"></i> Someone bookmarked your <strong><a href=\"#\">Laisa Spa Center</a></strong> listing!
                                    <a href=\"#\" class=\"close-list-item\"><i class=\"fa fa-close\"></i></a>
                                </li>

                                <li>
                                    <i class=\"list-box-icon fa fa-star-o\"></i> Kathy Brown left a review on <strong>
                                        <a href=\"#\">Auto Repair Shop</a></strong>
                                    <a href=\"#\" class=\"close-list-item\"><i class=\"fa fa-close\"></i></a>
                                </li>

                                <li>
                                    <i class=\"list-box-icon fa fa-bookmark-o\"></i> Someone bookmarked your <strong><a href=\"#\">The Shelby Apartment</a></strong> listing!
                                    <a href=\"#\" class=\"close-list-item\"><i class=\"fa fa-close\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            {% endblock %}
            <div class=\"row\">
                <!-- Copyrights -->
                <div class=\"col-md-12\">
                    <div class=\"copyrights\">Copyright &copy; 2020 Elemo. All Rights Reserved</div>
                </div>
            </div>
        </div>
        <!-- Content / End -->
    </div>
</div>

<!-- Scripts -->
<script src=\"assets/js/jquery.min.js\"></script>
<script src=\"assets/js/popper.min.js\"></script>
<script src=\"assets/js/bootstrap.min.js\"></script>
<script src=\"assets/js/interface.js\"></script>
<!--Carousel-JS-->
<script src=\"assets/js/owl.carousel.min.js\"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/Elemo/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:32:41 GMT -->
</html>", "back.html.twig", "C:\\Users\\21624\\Downloads\\integrationfinalpi\\mydir\\templates\\back.html.twig");
    }
}
