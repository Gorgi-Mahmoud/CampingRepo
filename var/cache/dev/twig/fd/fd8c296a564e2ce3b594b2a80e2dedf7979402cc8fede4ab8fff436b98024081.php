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

/* base1.html.twig */
class __TwigTemplate_07495a6fda2d0e987f9b517a773c99b7621e5640cb4890affaa357144dbc3058 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1.html.twig"));

        // line 1
        echo "
<!DOCTYPE HTML>
<html lang=\"en\">

<!-- Mirrored from themes.webmasterdriver.net/Elemo/dashboard-my-events.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:32:41 GMT -->
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
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/dashboard.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <!--OWL Carousel slider-->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <!--FontAwesome Font Style -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/favicon.png"), "html", null, true);
        echo "\">
    <!-- Google-Font-->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
</head>
<body>
<div class=\"dashboard_container\">
    <!-- Header -->
    <header id=\"header\">
        <nav class=\"navbar navbar-expand-lg fixed-top\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <div class=\"logo\"> <a href=\"index-2.html\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/A&M.png"), "html", null, true);
        echo "\"  style=\"width: 70px\" alt=\"image\"/></a> </div>
                    <div id=\"dashboard-responsive-nav-trigger\"><i class=\"fa fa-reorder\"></i></div>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"\">
                    <div class=\"user_nav ml-auto\">
                        <div class=\"dropdown\">
                          <span id=\"dLabel\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/happy-client-01.jpg"), "html", null, true);
        echo "\" alt=\"img\">
                          </span>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dLabel\">
                                <li><a href=\"dashboard.html\"><i class=\"fa fa-cogs\"></i> Dashboard</a></li>
                                <li><a href=\"dashboard-my-profile.html\"><i class=\"fa fa-user-o\"></i> My Profile</a></li>
                                <li><a href=\"index-2.html\"><i class=\"fa fa-power-off\"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"submit_listing\">
                        <a href=\"dashboard-add-listing.html\" class=\"btn outline-btn\"><i class=\"fa  fa-plus-circle\"></i> Submit Listing</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- /Header -->

    <div id=\"dashboard\">
        <!-- Navigation -->
        <div id=\"dashboard-nav\" class=\"dashboard-nav\">
            <ul>
                <li class=\"active\"><a href=\"dashboard.html\"><i class=\"fa fa-cogs\"></i> Dashboard</a></li>
                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-th-list\"></i>Blog</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"#\">Active <span class=\"nav-tag green\">6</span></a></li>
                        <li><a href=\"#\">Pending <span class=\"nav-tag yellow\">1</span></a></li>
                        <li><a href=\"#\">Expired <span class=\"nav-tag red\">2</span></a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheU");
        echo "\"><i class=\"fa fa-star-o\"></i>User</a></li>
                <li><a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affiche");
        echo "\"><i class=\"fa fa-bookmark-o\"></i>Exposee</a></li>
                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-th-list\"></i>Events</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_indexback");
        echo "\">events</a></li>
";
        // line 86
        echo "                    </ul>
                </li>
                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-plus\"></i>Shop</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_new");
        echo "\">Add Product</a></li>
                        <li><a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_showback");
        echo "\">Orders</a></li>
                    </ul>
                </li>
                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-plus\"></i>Forum</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_index_back");
        echo "\">Categories</a></li>
                    </ul>
                </li>
                <li><a data-toggle=\"dropdown\" ><i class=\"fa fa-plus\"></i>Museum</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gmusee_new");
        echo "\">ADD musee </a></li>
                        <li><a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("siteh_index");
        echo "\">Site Historiue</a></li>
                    </ul>
                </li>
                <li><a data-toggle=\"dropdown\" ><i class=\"fa fa-plus\"></i>statistics</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test1");
        echo "\">Shop </a></li>
                        <li><a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("best");
        echo "\">Forum</a></li>
                        <li><a href=\"#\">Blog </a></li>
                    </ul>
                </li>

                <li><a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\"><i class=\"fa fa-user-o\"></i> My Profile</a></li>
                <li><a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheE");
        echo "\"><i class=\"fa fa-power-off\"></i> Go To Front</a></li>
            </ul>
        </div>
        <!-- Navigation / End -->

        <!-- Content -->
        <div class=\"dashboard-content\">
            ";
        // line 121
        $this->displayBlock('body', $context, $blocks);
        // line 124
        echo "            <!-- Content / End -->
        </div>
    </div> Go To Front

    <!-- Scripts -->
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/interface.js"), "html", null, true);
        echo "\"></script>
    <!--Carousel-JS-->
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

</div>
</body>

<!-- Mirrored from themes.webmasterdriver.net/Elemo/dashboard-my-events.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:32:41 GMT -->
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

    // line 121
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 122
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 122,  311 => 121,  292 => 12,  275 => 134,  270 => 132,  266 => 131,  262 => 130,  258 => 129,  251 => 124,  249 => 121,  239 => 114,  235 => 113,  227 => 108,  223 => 107,  215 => 102,  211 => 101,  203 => 96,  195 => 91,  191 => 90,  185 => 86,  181 => 84,  175 => 81,  171 => 80,  138 => 50,  128 => 43,  115 => 33,  111 => 32,  104 => 28,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  82 => 21,  77 => 19,  72 => 17,  68 => 16,  63 => 14,  60 => 13,  58 => 12,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE HTML>
<html lang=\"en\">

<!-- Mirrored from themes.webmasterdriver.net/Elemo/dashboard-my-events.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:32:41 GMT -->
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    {% block title %} {% endblock %}
    <!--Bootstrap -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\" type=\"text/css\">
    <!--Custome Style -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/dashboard.css')}}\" type=\"text/css\">
    <!--OWL Carousel slider-->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.carousel.css')}}\" type=\"text/css\">
    <!--FontAwesome Font Style -->
    <link href=\"{{ asset('assets/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ asset('assets/images/favicon-icon/apple-touch-icon-144-precomposed.png')}}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ asset('assets/images/favicon-icon/apple-touch-icon-72-precomposed.png')}}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('assets/images/favicon-icon/apple-touch-icon-57-precomposed.png')}}\">
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon-icon/favicon.png')}}\">
    <!-- Google-Font-->
    <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700')}}\" rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"{{ asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}\"></script>
    <script src=\"{{ asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}\"></script>
    <![endif]-->
</head>
<body>
<div class=\"dashboard_container\">
    <!-- Header -->
    <header id=\"header\">
        <nav class=\"navbar navbar-expand-lg fixed-top\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <div class=\"logo\"> <a href=\"index-2.html\"><img src=\"{{ asset('assets/images/A&M.png')}}\"  style=\"width: 70px\" alt=\"image\"/></a> </div>
                    <div id=\"dashboard-responsive-nav-trigger\"><i class=\"fa fa-reorder\"></i></div>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"\">
                    <div class=\"user_nav ml-auto\">
                        <div class=\"dropdown\">
                          <span id=\"dLabel\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img src=\"{{ asset('assets/images/happy-client-01.jpg')}}\" alt=\"img\">
                          </span>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dLabel\">
                                <li><a href=\"dashboard.html\"><i class=\"fa fa-cogs\"></i> Dashboard</a></li>
                                <li><a href=\"dashboard-my-profile.html\"><i class=\"fa fa-user-o\"></i> My Profile</a></li>
                                <li><a href=\"index-2.html\"><i class=\"fa fa-power-off\"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"submit_listing\">
                        <a href=\"dashboard-add-listing.html\" class=\"btn outline-btn\"><i class=\"fa  fa-plus-circle\"></i> Submit Listing</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- /Header -->

    <div id=\"dashboard\">
        <!-- Navigation -->
        <div id=\"dashboard-nav\" class=\"dashboard-nav\">
            <ul>
                <li class=\"active\"><a href=\"dashboard.html\"><i class=\"fa fa-cogs\"></i> Dashboard</a></li>
                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-th-list\"></i>Blog</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"#\">Active <span class=\"nav-tag green\">6</span></a></li>
                        <li><a href=\"#\">Pending <span class=\"nav-tag yellow\">1</span></a></li>
                        <li><a href=\"#\">Expired <span class=\"nav-tag red\">2</span></a></li>
                    </ul>
                </li>
                <li><a href=\"{{ path('afficheU') }}\"><i class=\"fa fa-star-o\"></i>User</a></li>
                <li><a href=\"{{ path('affiche') }}\"><i class=\"fa fa-bookmark-o\"></i>Exposee</a></li>
                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-th-list\"></i>Events</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"{{ path('event_indexback') }}\">events</a></li>
{#                        <li><a href=\"dashboard-add-event.html\">Add Event</a></li>#}
                    </ul>
                </li>
                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-plus\"></i>Shop</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"{{ path('produit_new') }}\">Add Product</a></li>
                        <li><a href=\"{{ path('commande_showback') }}\">Orders</a></li>
                    </ul>
                </li>
                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-plus\"></i>Forum</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"{{ path('categorie_index_back') }}\">Categories</a></li>
                    </ul>
                </li>
                <li><a data-toggle=\"dropdown\" ><i class=\"fa fa-plus\"></i>Museum</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"{{ path('gmusee_new') }}\">ADD musee </a></li>
                        <li><a href=\"{{ path('siteh_index') }}\">Site Historiue</a></li>
                    </ul>
                </li>
                <li><a data-toggle=\"dropdown\" ><i class=\"fa fa-plus\"></i>statistics</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"{{ path('test1') }}\">Shop </a></li>
                        <li><a href=\"{{ path('best') }}\">Forum</a></li>
                        <li><a href=\"#\">Blog </a></li>
                    </ul>
                </li>

                <li><a href=\"{{ path('profile') }}\"><i class=\"fa fa-user-o\"></i> My Profile</a></li>
                <li><a href=\"{{ path('afficheE') }}\"><i class=\"fa fa-power-off\"></i> Go To Front</a></li>
            </ul>
        </div>
        <!-- Navigation / End -->

        <!-- Content -->
        <div class=\"dashboard-content\">
            {% block body %}

            {% endblock %}
            <!-- Content / End -->
        </div>
    </div> Go To Front

    <!-- Scripts -->
    <script src=\"{{ asset('assets/js/jquery.min.js')}}\"></script>
    <script src=\"{{ asset('assets/js/popper.min.js')}}\"></script>
    <script src=\"{{ asset('assets/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{ asset('assets/js/interface.js')}}\"></script>
    <!--Carousel-JS-->
    <script src=\"{{ asset('assets/js/owl.carousel.min.js')}}\"></script>

</div>
</body>

<!-- Mirrored from themes.webmasterdriver.net/Elemo/dashboard-my-events.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:32:41 GMT -->
</html>", "base1.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\base1.html.twig");
    }
}
