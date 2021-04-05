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

/* base.html.twig */
class __TwigTemplate_6dcf4a846023ce0e1368c51330704ad9b2aabef40197901fcc996a1ad667929d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"image\"/></a> </div>
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
                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-th-list\"></i> My Listings</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"dashboard-my-listings.html\">Active <span class=\"nav-tag green\">6</span></a></li>
                        <li><a href=\"dashboard-my-listings.html\">Pending <span class=\"nav-tag yellow\">1</span></a></li>
                        <li><a href=\"dashboard-my-listings.html\">Expired <span class=\"nav-tag red\">2</span></a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheU");
        echo "\"><i class=\"fa fa-star-o\"></i> Our User</a></li>
                <li><a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affiche");
        echo "\"><i class=\"fa fa-bookmark-o\"></i> Nos Exposee</a></li>
                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-th-list\"></i> My Events</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"dashboard-my-events.html\">Active <span class=\"nav-tag green\">6</span></a></li>
                        <li><a href=\"dashboard-add-event.html\">Add Event</a></li>
                    </ul>
                </li>
                <li><a href=\"dashboard-add-listing.html\"><i class=\"fa fa-plus\"></i> Add Listing</a></li>
                <li><a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\"><i class=\"fa fa-user-o\"></i> My Profile</a></li>
                <li><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheE");
        echo "\"><i class=\"fa fa-power-off\"></i> Go To Front</a></li>
            </ul>
        </div>
        <!-- Navigation / End -->

        <!-- Content -->
        <div class=\"dashboard-content\">
            ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo "            <!-- Content / End -->
        </div>
    </div> Go To Front

    <!-- Scripts -->
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/interface.js"), "html", null, true);
        echo "\"></script>
    <!--Carousel-JS-->
    <script src=\"";
        // line 110
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

    // line 97
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 98
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 98,  262 => 97,  243 => 12,  226 => 110,  221 => 108,  217 => 107,  213 => 106,  209 => 105,  202 => 100,  200 => 97,  190 => 90,  186 => 89,  175 => 81,  171 => 80,  138 => 50,  128 => 43,  115 => 33,  111 => 32,  104 => 28,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  82 => 21,  77 => 19,  72 => 17,  68 => 16,  63 => 14,  60 => 13,  58 => 12,  45 => 1,);
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
                    <div class=\"logo\"> <a href=\"index-2.html\"><img src=\"{{ asset('assets/images/logo.png')}}\" alt=\"image\"/></a> </div>
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
                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-th-list\"></i> My Listings</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"dashboard-my-listings.html\">Active <span class=\"nav-tag green\">6</span></a></li>
                        <li><a href=\"dashboard-my-listings.html\">Pending <span class=\"nav-tag yellow\">1</span></a></li>
                        <li><a href=\"dashboard-my-listings.html\">Expired <span class=\"nav-tag red\">2</span></a></li>
                    </ul>
                </li>
                <li><a href=\"{{ path('afficheU') }}\"><i class=\"fa fa-star-o\"></i> Our User</a></li>
                <li><a href=\"{{ path('affiche') }}\"><i class=\"fa fa-bookmark-o\"></i> Nos Exposee</a></li>
                <li><a data-toggle=\"dropdown\"><i class=\"fa fa-th-list\"></i> My Events</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"MLabel\">
                        <li><a href=\"dashboard-my-events.html\">Active <span class=\"nav-tag green\">6</span></a></li>
                        <li><a href=\"dashboard-add-event.html\">Add Event</a></li>
                    </ul>
                </li>
                <li><a href=\"dashboard-add-listing.html\"><i class=\"fa fa-plus\"></i> Add Listing</a></li>
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
</html>", "base.html.twig", "C:\\Users\\Admin\\Desktop\\piuser\\mydir\\templates\\base.html.twig");
    }
}
