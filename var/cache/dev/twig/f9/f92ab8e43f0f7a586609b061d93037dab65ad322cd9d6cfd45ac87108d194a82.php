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
class __TwigTemplate_96ea08f88ad9c88bef8016ba9b673dc7ce3c098cbd00df77c8d23a33bb2653ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'ajax' => [$this, 'block_ajax'],
            'high' => [$this, 'block_high'],
            'body1' => [$this, 'block_body1'],
            'body2' => [$this, 'block_body2'],
            'body3' => [$this, 'block_body3'],
            'body4' => [$this, 'block_body4'],
            'body5' => [$this, 'block_body5'],
            'body6' => [$this, 'block_body6'],
            'footer' => [$this, 'block_footer'],
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
        echo "<!DOCTYPE HTML>
<html lang=\"en\">

<!-- Mirrored from themes.webmasterdriver.net/Elemo/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:14:51 GMT -->
<head>
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
<body>
";
        // line 38
        $this->displayBlock('ajax', $context, $blocks);
        // line 72
        echo "<!-- Header -->
";
        // line 73
        $this->displayBlock('high', $context, $blocks);
        // line 174
        echo "<!-- /Header -->
";
        // line 175
        $this->displayBlock('body1', $context, $blocks);
        // line 273
        echo "<!-- /Banner -->
";
        // line 274
        $this->displayBlock('body2', $context, $blocks);
        // line 318
        echo "<!-- /About-us -->

<!-- Listings -->
";
        // line 321
        $this->displayBlock('body3', $context, $blocks);
        // line 426
        echo "<!-- Listings -->
";
        // line 427
        $this->displayBlock('body4', $context, $blocks);
        // line 451
        echo "<!-- /Intro-Video -->
";
        // line 452
        $this->displayBlock('body5', $context, $blocks);
        // line 518
        echo "<!-- Blog -->
";
        // line 519
        $this->displayBlock('body6', $context, $blocks);
        // line 590
        echo "<!-- /Blog -->
";
        // line 591
        $this->displayBlock('footer', $context, $blocks);
        // line 645
        echo "<!-- /Footer -->

<!-- Scripts -->
<script src=";
        // line 648
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 649
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 650
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 651
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/interface.js"), "html", null, true);
        echo "></script>
<!--Carousel-JS-->
<script src=";
        // line 653
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "></script>
<!--Switcher-->
<script src=";
        // line 655
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/js/switcher.js"), "html", null, true);
        echo "></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/Elemo/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:16:42 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_ajax($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ajax"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ajax"));

        // line 39
        echo "    <script>
        \$(document).on('click', \"#blog-like\", function (e)){
            e.preventDefault();
            var url = \$(this).attr('href');
            var entityId = \$(this).attr('data-entity-id');
            var csrfToken = \$(this).attr('data-csrf-token');
            var isLiked = \$(this).attr('data-liked');

            if(isLiked ===\"0\"){
                \$(this).attr('data-liked',1);
                \$('.fa-thumbs-up').addClass('liked').text('Unlike')
            }
            else{
                \$(this).attr('data-liked',0);
                \$('.fa-thumbs-up').removeClass('liked').text('Like')

            }
            \$.ajax({
                type:'POST',
                dataType:'json',
                data:{'entityId': entityId, 'csrfToken': csrfToken},
                url: url,
                success: function (){
                    console.log('Success');
                },
                error: function (){

                }
            });

        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_high($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "high"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "high"));

        // line 74
        echo "    <header id=\"header\" class=\"transparent-header\">
        <nav class=\"navbar navbar-expand-lg fixed-top\" id=\"header_nav\">
            <div class=\"container-fluid\">
                <div class=\"row header_row\">
                    <div class=\"col-md-3 col-sm-12 col-xs-12\">
                        <div class=\"navbar-header\">
                            <div class=\"logo\"> <a href=\"index-2.html\"><img src=\"assets/images/logo.png\" alt=\"image\"/></a> </div>
                        </div>
                        <button id=\"menu_slide\" data-target=\"#navigation\" aria-expanded=\"false\" data-toggle=\"collapse\" class=\"navbar-toggler\" type=\"button\">
                            <i class=\"fa fa-bars\"></i>
                        </button>
                    </div>


                    <div class=\"col-md-9 col-sm-12 col-xs-12\">
                        <div class=\"collapse navbar-collapse\" id=\"navigation\">
                            <ul class=\"nav navbar-nav mr-auto\">
                                <li class=\"menu-item-has-children\"><a href=\"#\">Home</a> <span class=\"arrow\"></span>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"index-2.html\">Home 1</a></li>
                                        <li><a href=\"index-3.html\">Home 2</a></li>
                                        <li><a href=\"index-4.html\">Home 3</a></li>
                                        <li><a href=\"index-5.html\">Home 4</a></li>
                                    </ul>
                                </li>
                                <li class=\"menu-item-has-children\"><a href=\"#\">Listing</a> <span class=\"arrow\"></span>
                                    <ul class=\"sub-menu\">
                                        <li class=\"menu-item-has-children\"><a href=\"#\">Grid Layout</a> <span class=\"arrow\"></span>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"listing-grid.html\">Listing Gird</a></li>
                                                <li><a href=\"listing-grid-sidebar.html\">Listing Gird Sidebar</a></li>
                                                <li><a href=\"listing-grid-map.html\">Listing Gird Half Map</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"menu-item-has-children\"><a href=\"#\">List Layout</a> <span class=\"arrow\"></span>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"listing-listview.html\">Listing List</a></li>
                                                <li><a href=\"listing-listview-sidebar.html\">Listing List Sidebar</a></li>
                                                <li><a href=\"listing-listview-map.html\">Listing List Half Map</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"menu-item-has-children\"><a href=\"#\">Single Listing</a> <span class=\"arrow\"></span>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"listing-detail-1.html\">Style 1</a></li>
                                                <li><a href=\"listing-detail-2.html\">Style 2</a></li>
                                                <li><a href=\"listing-detail-3.html\">Style 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"event-detail.html\">Event Detail</a></li>
                                    </ul>
                                </li>
                                <li class=\"menu-item-has-children\"><a href=\"#\">Pages</a> <span class=\"arrow\"></span>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"about-us.html\">About Us</a></li>
                                        <li><a href=\"how-it-work.html\">How it Work</a></li>
                                        <li><a href=\"pricing.html\">Pricing</a></li>
                                        <li><a href=\"contact-us.html\">Contact Us</a></li>
                                        <li><a href=\"404-error.html\">404 Error</a></li>
                                        <li><a href=\"user_listing_list.html\">User Listing Page</a></li>
                                    </ul>
                                </li>
                                <li class=\"menu-item-has-children\"><a href=\"#\">Blog</a> <span class=\"arrow\"></span>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"blog-grid-style.html\">Blog Grid Style</a></li>
                                        <li><a href=\"blog-list-style.html\">Blog List Style</a></li>
                                        <li><a href=\"blog-single.html\">Single Blog</a></li>
                                    </ul>
                                </li>
                                <li class=\"menu-item-has-children\">
                                    <a href=\"#\">Elements</a>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"header.html\">Header Style</a></li>
                                        <li><a href=\"footer.html\">Footer Style</a></li>
                                    </ul>
                                </li>
                                <li class=\"menu-item-has-children\"><a href=\"#\">User Panel</a> <span class=\"arrow\"></span>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"dashboard.html\">Dashboard</a></li>
                                        <li><a href=\"dashboard-my-listings.html\">My Listings</a></li>
                                        <li><a href=\"dashboard-reviews.html\">Reviews</a></li>
                                        <li><a href=\"dashboard-bookmarks.html\">Bookmarks</a></li>
                                        <li><a href=\"dashboard-add-listing.html\">Add Listing</a></li>
                                        <li><a href=\"dashboard-my-events.html\">My Events</a></li>
                                        <li><a href=\"dashboard-add-event.html\">Add Event</a></li>
                                        <li><a href=\"dashboard-my-profile.html\">My Profile</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"signin.html\">Sign In</a></li>
                                <li><a href=\"";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_index");
        echo "\">Forum</a></li>
                            </ul>
                            <div class=\"submit_listing\">
                                <a href=\"pricing.html\" class=\"btn outline-btn\"><i class=\"fa  fa-plus-circle\"></i> Submit Listing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 175
    public function block_body1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body1"));

        // line 176
        echo "    <!-- Banner -->
    <section id=\"banner\" class=\"intro-bg parallex-bg section-padding\">
        <div class=\"container\">
            <div class=\"intro_text white-text div_zindex\">
                <h1>Find & Explore Nearest Stores</h1>
                <h5>Search the best places to eat, drink, and shop nearest to you</h5>
                <div class=\"search_form style3\">
                    <form action=\"http://themes.webmasterdriver.net/Elemo/listing-grid-map.html\" method=\"get\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search By Title\">
                        </div>
                        <div class=\"form-group select\">
                            <select class=\"form-control\">
                                <option>What are you looking for?</option>
                                <option>Real Estate</option>
                                <option>Restaurant</option>
                                <option>Real Estate</option>
                                <option>Health & Fitness</option>
                                <option>Beauty & Spas</option>
                                <option>Hotels & Travel</option>
                                <option>Automotive</option>
                            </select>
                        </div>
                        <div class=\"form-group select\">
                            <select class=\"form-control\">
                                <option>Select a Location</option>
                                <option>Location 1</option>
                                <option>Location 2</option>
                                <option>Location 3</option>
                                <option>Location 4</option>
                            </select>
                        </div>

                        <div class=\"form-group search_btn\">
                            <input type=\"submit\" value=\"Search\" class=\"btn btn-block\">
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"categories-list div_zindex\">
                <div class=\"all-categories-header\">
                    <h6>Or browse the Listings</h6>
                    <div class=\"all-categories-btn\">
                        <a href=\"listing-grid.html\">View More Listings</a>
                    </div>
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 274
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        // line 275
        echo "    <!-- About-us -->
    <section id=\"why-choose\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Why Elemo for your Business?</h2>
                <p>Olomo provides the various ways that help you can
                    earn money from your site.</p>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"about-img text-center\">
                        <img src=\"assets/images/about-img-3.png\" alt=\"image\">
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"why-list\">
                        <div class=\"list-icon-wp\">
                            <i class=\"fa fa-check\"></i>
                        </div>
                        <h5>Claim Listing</h5>
                        <p>Another revenue model to monetize from listing. You create a listing on your site and allow the business owner to claim it.</p>
                    </div>
                    <div class=\"why-list\">
                        <div class=\"list-icon-wp\">
                            <i class=\"fa fa-money\"></i>
                        </div>
                        <h5>Paid Listing</h5>
                        <p>This is the big money maker of your directory site. Listing owners will pay to get their places listed on your site.</p>
                    </div>
                    <div class=\"why-list\">
                        <div class=\"list-icon-wp\">
                            <i class=\"fa fa-area-chart\"></i>
                        </div>
                        <h5>Promote your Business</h5>
                        <p>You offer Promotion Plans, listing owners will have directories appeared at special spots on site, and at the top of search results page.</p>
                    </div>
                    <a href=\"pricing.html\" class=\"btn mr-2\">See Our Pricing</a>
                    <a href=\"pricing.html\" class=\"btn black-bg\">Submit Listing</a>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 321
    public function block_body3($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body3"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body3"));

        // line 322
        echo "    <section id=\"listing\" class=\"section-padding gray_bg\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Popular Exclusive Listings</h2>
                <p>Hotels, Resorts, Motels… It’s there for your choosing. Do a search or check Olomo’s selection below.</p>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"listing-wp\">
                        <div class=\"listing-thumb\">
                            <span class=\"like_post\"><i class=\"fa fa-bookmark-o\"></i></span>
                            <div class=\"listing_cate\">
                                <span class=\"cate_icon\"><a href=\"#\"><img src=\"assets/images/category-icon1.png\" alt=\"icon-img\"></a></span>
                                <span class=\"listing_like\"><a href=\"#\"><i class=\"fa fa-heart-o\"></i></a></span>
                            </div>
                            <div class=\"featured_label\">Featured</div>
                            <a href=\"listing-detail-1.html\"><img src=\"assets/images/listing_img6.jpg\" alt=\"image\"></a>
                        </div>
                        <div class=\"listing-info-wp\">
                            <h5><a href=\"listing-detail-1.html\">The Morning Hotel</a></h5>
                            <div class=\"listing-rating\">
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star\"></i>
                                <span>(15 reviews)</span>
                            </div>
                            <p>Hotel, Fitness Center Gym, Healthcare</p>
                            <div class=\"listing-categories\">
                                <a href=\"#\">Hotels & Travel</a>
                            </div>
                        </div>
                        <div class=\"listing-footer\">
                            <i class=\"fa fa-map-marker\"></i> Los Angeles
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"listing-wp\">
                        <div class=\"listing-thumb\">
                            <span class=\"like_post\"><i class=\"fa fa-bookmark-o\"></i></span>
                            <div class=\"listing_cate\">
                                <span class=\"cate_icon\"><a href=\"#\"><img src=\"assets/images/category-icon1.png\" alt=\"icon-img\"></a></span>
                                <span class=\"listing_like\"><a href=\"#\"><i class=\"fa fa-heart-o\"></i></a></span>
                            </div>

                            <a href=\"listing-detail-2.html\"><img src=\"assets/images/listing_img4.jpg\" alt=\"image\"></a>
                        </div>
                        <div class=\"listing-info-wp\">
                            <h5><a href=\"listing-detail-2.html\">Laisa Spa Center</a></h5>
                            <div class=\"listing-rating\">
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star\"></i>
                                <span>(21 reviews)</span>
                            </div>
                            <p>Beauty & Spas</p>
                            <div class=\"listing-categories\">
                                <a href=\"#\">Beauty & Spas</a>
                            </div>
                        </div>
                        <div class=\"listing-footer\">
                            <i class=\"fa fa-map-marker\"></i> Los Angeles
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"listing-wp\">
                        <div class=\"listing-thumb\">
                            <span class=\"like_post\"><i class=\"fa fa-bookmark-o\"></i></span>
                            <div class=\"listing_cate\">
                                <span class=\"cate_icon\"><a href=\"#\"><img src=\"assets/images/category-icon1.png\" alt=\"icon-img\"></a></span>
                                <span class=\"listing_like\"><a href=\"#\"><i class=\"fa fa-heart-o\"></i></a></span>
                            </div>
                            <div class=\"featured_label\">Featured</div>
                            <a href=\"listing-detail-3.html\"><img src=\"assets/images/listing_img5.jpg\" alt=\"image\"></a>
                        </div>
                        <div class=\"listing-info-wp\">
                            <h5><a href=\"listing-detail-3.html\">Auto Repair Shop</a></h5>
                            <div class=\"listing-rating\">
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star\"></i>
                                <span>(20 reviews)</span>
                            </div>
                            <p>Via Annia Regilla, Auto Repair Shop</p>
                            <div class=\"listing-categories\">
                                <a href=\"#\">Automotive</a>
                            </div>
                        </div>
                        <div class=\"listing-footer\">
                            <i class=\"fa fa-map-marker\"></i> Los Angeles
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 427
    public function block_body4($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body4"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body4"));

        // line 428
        echo "    <!-- Intro-Video -->
    <section id=\"intro-video\" class=\"section-padding dark_mask\">
        <div class=\"container\">
            <div class=\"video-wrap\">
                <div id=\"video-button\"><i class=\"fa fa-play\"></i></div>
                <h2>Save time and hassle. Let us find Quick and Easy</h2>
            </div>
            <div class=\"ques-wrap\">
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <h2>Do You Have Questions ?</h2>
                        <p>If you have any question reach us to ask your questions.</p>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"ques-btn\">
                            <a href=\"contact-us.html\" class=\"btn\">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 452
    public function block_body5($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body5"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body5"));

        // line 453
        echo "    <!-- Testimonials -->
    <section id=\"reviews\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Words From Our Customer</h2>
                <p>Hearing from our users will make you choose your mind!</p>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div id=\"reviews-slider\" class=\"owl-carousel\">
                        <div class=\"item\">
                            <div class=\"reviews-content\">
                                <div class=\"reviews-header\">
                                    <div class=\"img-wp\">
                                        <img src=\"assets/images/happy-client-01.jpg\" alt=\"image\">
                                    </div>
                                    <h6>LEVI RATH</h6>
                                    <p>Vice Director - Wilson Media</p>
                                </div>
                                <p>Life before Olomo was very chaotic – we got a lot of phone calls, a lot of mistyped orders. So with Olomo, the ability to see the order directly from the customer makes it so streamlined.</p>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"reviews-content\">
                                <div class=\"reviews-header\">
                                    <div class=\"img-wp\">
                                        <img src=\"assets/images/happy-client-03.jpg\" alt=\"image\">
                                    </div>
                                    <h6>WILLIAM STEVES</h6>
                                    <p>CEO of - XYZ PVT.</p>
                                </div>
                                <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible procedures.</p>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"reviews-content\">
                                <div class=\"reviews-header\">
                                    <div class=\"img-wp\">
                                        <img src=\"assets/images/happy-client-02.jpg\" alt=\"image\">
                                    </div>
                                    <h6>ESTHER BUECHE</h6>
                                    <p>Vice Director - Wilson Media</p>
                                </div>
                                <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible procedures.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"ratings-wrap\">
                        <div class=\"ratings-inner-wp\">
                            <div class=\"our-ratings\">4.8/5</div>
                            <p class=\"ratings-label\">Rating in</p>
                            <div class=\"playstore-btn\">
                                <a href=\"#\"><img src=\"assets/images/google-play.png\" alt=\"image\"></a>
                            </div>
                            <p>Great app showing all Listing data at one platform in detailed in secured way.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Testimonials -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 519
    public function block_body6($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body6"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body6"));

        // line 520
        echo "    <section id=\"blog\" class=\"section-padding gray_bg\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Articles from Elemo</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer.</p>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"blog-wrap\">
                        <div class=\"blog-img\">
                            <a href=\"#\"><img src=\"assets/images/blog-img-1.jpg\" alt=\"image\"></a>
                        </div>
                        <div class=\"blog-content\">
                            <div class=\"blog-categories\">
                                <a href=\"#\">Restaurant</a>
                                <a href=\"#\">Tips & Tricks</a>
                            </div>
                            <h5><a href=\"#\">It has survived not only</a></h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class=\"blog-meta\">
                            <p>By: <a href=\"#\">admin</a></p>
                            <p>On: <a href=\"#\">Feb 28, 2020</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"blog-wrap\">
                        <div class=\"blog-img\">
                            <a href=\"#\"><img src=\"assets/images/blog-img-2.jpg\" alt=\"image\"></a>
                        </div>
                        <div class=\"blog-content\">
                            <div class=\"blog-categories\">
                                <a href=\"#\">Restaurant</a>
                                <a href=\"#\">Tips & Tricks</a>
                            </div>
                            <h5><a href=\"#\">It has survived not only</a></h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class=\"blog-meta\">
                            <p>By: <a href=\"#\">admin</a></p>
                            <p>On: <a href=\"#\">Feb 28, 2020</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"blog-wrap\">
                        <div class=\"blog-img\">
                            <a href=\"#\"><img src=\"assets/images/blog-img-3.jpg\" alt=\"image\"></a>
                        </div>
                        <div class=\"blog-content\">
                            <div class=\"blog-categories\">
                                <a href=\"#\">Restaurant</a>
                                <a href=\"#\">Tips & Tricks</a>
                            </div>
                            <h5><a href=\"#\">It has survived not only</a></h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class=\"blog-meta\">
                            <p>By: <a href=\"#\">admin</a></p>
                            <p>On: <a href=\"#\">Feb 28, 2020</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 591
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 592
        echo "    <!-- Footer -->
    <footer id=\"footer\" class=\"footer_2 secondary-bg\">
        <div class=\"container\">
            <div class=\"footer_widgets\">
                <h5>Our Newsletter</h5>
                <div class=\"newsletter_wrap\">
                    <form action=\"#\" method=\"get\">
                        <input type=\"email\" class=\"form-control\" placeholder=\"Enter Email Address\">
                        <input type=\"submit\" value=\"subscribe\" class=\"btn\">
                    </form>
                </div>
            </div>

            <div class=\"footer_widgets\">
                <div class=\"footer_nav\">
                    <ul>
                        <li><a href=\"how-it-work.html\">How it Work</a></li>
                        <li><a href=\"pricing.html\">Pricing</a></li>
                        <li><a href=\"blog-grid-style.html\">Blog</a></li>
                        <li><a href=\"contact-us.html\">Contact Us</a></li>
                        <li><a href=\"#\">Privacy Policy</a></li>
                        <li><a href=\"#\">Terms & condition</a></li>
                    </ul>
                </div>
            </div>

        </div>

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
        return array (  905 => 592,  895 => 591,  816 => 520,  806 => 519,  732 => 453,  722 => 452,  690 => 428,  680 => 427,  567 => 322,  557 => 321,  505 => 275,  495 => 274,  389 => 176,  379 => 175,  357 => 162,  267 => 74,  257 => 73,  215 => 39,  205 => 38,  189 => 655,  184 => 653,  179 => 651,  175 => 650,  171 => 649,  167 => 648,  162 => 645,  160 => 591,  157 => 590,  155 => 519,  152 => 518,  150 => 452,  147 => 451,  145 => 427,  142 => 426,  140 => 321,  135 => 318,  133 => 274,  130 => 273,  128 => 175,  125 => 174,  123 => 73,  120 => 72,  118 => 38,  112 => 35,  106 => 32,  102 => 31,  90 => 22,  86 => 21,  81 => 19,  76 => 17,  71 => 15,  66 => 13,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html lang=\"en\">

<!-- Mirrored from themes.webmasterdriver.net/Elemo/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:14:51 GMT -->
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
<body>
{% block ajax %}
    <script>
        \$(document).on('click', \"#blog-like\", function (e)){
            e.preventDefault();
            var url = \$(this).attr('href');
            var entityId = \$(this).attr('data-entity-id');
            var csrfToken = \$(this).attr('data-csrf-token');
            var isLiked = \$(this).attr('data-liked');

            if(isLiked ===\"0\"){
                \$(this).attr('data-liked',1);
                \$('.fa-thumbs-up').addClass('liked').text('Unlike')
            }
            else{
                \$(this).attr('data-liked',0);
                \$('.fa-thumbs-up').removeClass('liked').text('Like')

            }
            \$.ajax({
                type:'POST',
                dataType:'json',
                data:{'entityId': entityId, 'csrfToken': csrfToken},
                url: url,
                success: function (){
                    console.log('Success');
                },
                error: function (){

                }
            });

        });
    </script>
{% endblock %}
<!-- Header -->
{% block high %}
    <header id=\"header\" class=\"transparent-header\">
        <nav class=\"navbar navbar-expand-lg fixed-top\" id=\"header_nav\">
            <div class=\"container-fluid\">
                <div class=\"row header_row\">
                    <div class=\"col-md-3 col-sm-12 col-xs-12\">
                        <div class=\"navbar-header\">
                            <div class=\"logo\"> <a href=\"index-2.html\"><img src=\"assets/images/logo.png\" alt=\"image\"/></a> </div>
                        </div>
                        <button id=\"menu_slide\" data-target=\"#navigation\" aria-expanded=\"false\" data-toggle=\"collapse\" class=\"navbar-toggler\" type=\"button\">
                            <i class=\"fa fa-bars\"></i>
                        </button>
                    </div>


                    <div class=\"col-md-9 col-sm-12 col-xs-12\">
                        <div class=\"collapse navbar-collapse\" id=\"navigation\">
                            <ul class=\"nav navbar-nav mr-auto\">
                                <li class=\"menu-item-has-children\"><a href=\"#\">Home</a> <span class=\"arrow\"></span>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"index-2.html\">Home 1</a></li>
                                        <li><a href=\"index-3.html\">Home 2</a></li>
                                        <li><a href=\"index-4.html\">Home 3</a></li>
                                        <li><a href=\"index-5.html\">Home 4</a></li>
                                    </ul>
                                </li>
                                <li class=\"menu-item-has-children\"><a href=\"#\">Listing</a> <span class=\"arrow\"></span>
                                    <ul class=\"sub-menu\">
                                        <li class=\"menu-item-has-children\"><a href=\"#\">Grid Layout</a> <span class=\"arrow\"></span>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"listing-grid.html\">Listing Gird</a></li>
                                                <li><a href=\"listing-grid-sidebar.html\">Listing Gird Sidebar</a></li>
                                                <li><a href=\"listing-grid-map.html\">Listing Gird Half Map</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"menu-item-has-children\"><a href=\"#\">List Layout</a> <span class=\"arrow\"></span>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"listing-listview.html\">Listing List</a></li>
                                                <li><a href=\"listing-listview-sidebar.html\">Listing List Sidebar</a></li>
                                                <li><a href=\"listing-listview-map.html\">Listing List Half Map</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"menu-item-has-children\"><a href=\"#\">Single Listing</a> <span class=\"arrow\"></span>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"listing-detail-1.html\">Style 1</a></li>
                                                <li><a href=\"listing-detail-2.html\">Style 2</a></li>
                                                <li><a href=\"listing-detail-3.html\">Style 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"event-detail.html\">Event Detail</a></li>
                                    </ul>
                                </li>
                                <li class=\"menu-item-has-children\"><a href=\"#\">Pages</a> <span class=\"arrow\"></span>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"about-us.html\">About Us</a></li>
                                        <li><a href=\"how-it-work.html\">How it Work</a></li>
                                        <li><a href=\"pricing.html\">Pricing</a></li>
                                        <li><a href=\"contact-us.html\">Contact Us</a></li>
                                        <li><a href=\"404-error.html\">404 Error</a></li>
                                        <li><a href=\"user_listing_list.html\">User Listing Page</a></li>
                                    </ul>
                                </li>
                                <li class=\"menu-item-has-children\"><a href=\"#\">Blog</a> <span class=\"arrow\"></span>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"blog-grid-style.html\">Blog Grid Style</a></li>
                                        <li><a href=\"blog-list-style.html\">Blog List Style</a></li>
                                        <li><a href=\"blog-single.html\">Single Blog</a></li>
                                    </ul>
                                </li>
                                <li class=\"menu-item-has-children\">
                                    <a href=\"#\">Elements</a>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"header.html\">Header Style</a></li>
                                        <li><a href=\"footer.html\">Footer Style</a></li>
                                    </ul>
                                </li>
                                <li class=\"menu-item-has-children\"><a href=\"#\">User Panel</a> <span class=\"arrow\"></span>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"dashboard.html\">Dashboard</a></li>
                                        <li><a href=\"dashboard-my-listings.html\">My Listings</a></li>
                                        <li><a href=\"dashboard-reviews.html\">Reviews</a></li>
                                        <li><a href=\"dashboard-bookmarks.html\">Bookmarks</a></li>
                                        <li><a href=\"dashboard-add-listing.html\">Add Listing</a></li>
                                        <li><a href=\"dashboard-my-events.html\">My Events</a></li>
                                        <li><a href=\"dashboard-add-event.html\">Add Event</a></li>
                                        <li><a href=\"dashboard-my-profile.html\">My Profile</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"signin.html\">Sign In</a></li>
                                <li><a href=\"{{ path('categorie_index') }}\">Forum</a></li>
                            </ul>
                            <div class=\"submit_listing\">
                                <a href=\"pricing.html\" class=\"btn outline-btn\"><i class=\"fa  fa-plus-circle\"></i> Submit Listing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
{% endblock %}
<!-- /Header -->
{% block body1 %}
    <!-- Banner -->
    <section id=\"banner\" class=\"intro-bg parallex-bg section-padding\">
        <div class=\"container\">
            <div class=\"intro_text white-text div_zindex\">
                <h1>Find & Explore Nearest Stores</h1>
                <h5>Search the best places to eat, drink, and shop nearest to you</h5>
                <div class=\"search_form style3\">
                    <form action=\"http://themes.webmasterdriver.net/Elemo/listing-grid-map.html\" method=\"get\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search By Title\">
                        </div>
                        <div class=\"form-group select\">
                            <select class=\"form-control\">
                                <option>What are you looking for?</option>
                                <option>Real Estate</option>
                                <option>Restaurant</option>
                                <option>Real Estate</option>
                                <option>Health & Fitness</option>
                                <option>Beauty & Spas</option>
                                <option>Hotels & Travel</option>
                                <option>Automotive</option>
                            </select>
                        </div>
                        <div class=\"form-group select\">
                            <select class=\"form-control\">
                                <option>Select a Location</option>
                                <option>Location 1</option>
                                <option>Location 2</option>
                                <option>Location 3</option>
                                <option>Location 4</option>
                            </select>
                        </div>

                        <div class=\"form-group search_btn\">
                            <input type=\"submit\" value=\"Search\" class=\"btn btn-block\">
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"categories-list div_zindex\">
                <div class=\"all-categories-header\">
                    <h6>Or browse the Listings</h6>
                    <div class=\"all-categories-btn\">
                        <a href=\"listing-grid.html\">View More Listings</a>
                    </div>
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
{% endblock %}
<!-- /Banner -->
{% block body2 %}
    <!-- About-us -->
    <section id=\"why-choose\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Why Elemo for your Business?</h2>
                <p>Olomo provides the various ways that help you can
                    earn money from your site.</p>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"about-img text-center\">
                        <img src=\"assets/images/about-img-3.png\" alt=\"image\">
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"why-list\">
                        <div class=\"list-icon-wp\">
                            <i class=\"fa fa-check\"></i>
                        </div>
                        <h5>Claim Listing</h5>
                        <p>Another revenue model to monetize from listing. You create a listing on your site and allow the business owner to claim it.</p>
                    </div>
                    <div class=\"why-list\">
                        <div class=\"list-icon-wp\">
                            <i class=\"fa fa-money\"></i>
                        </div>
                        <h5>Paid Listing</h5>
                        <p>This is the big money maker of your directory site. Listing owners will pay to get their places listed on your site.</p>
                    </div>
                    <div class=\"why-list\">
                        <div class=\"list-icon-wp\">
                            <i class=\"fa fa-area-chart\"></i>
                        </div>
                        <h5>Promote your Business</h5>
                        <p>You offer Promotion Plans, listing owners will have directories appeared at special spots on site, and at the top of search results page.</p>
                    </div>
                    <a href=\"pricing.html\" class=\"btn mr-2\">See Our Pricing</a>
                    <a href=\"pricing.html\" class=\"btn black-bg\">Submit Listing</a>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
<!-- /About-us -->

<!-- Listings -->
{% block body3 %}
    <section id=\"listing\" class=\"section-padding gray_bg\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Popular Exclusive Listings</h2>
                <p>Hotels, Resorts, Motels… It’s there for your choosing. Do a search or check Olomo’s selection below.</p>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"listing-wp\">
                        <div class=\"listing-thumb\">
                            <span class=\"like_post\"><i class=\"fa fa-bookmark-o\"></i></span>
                            <div class=\"listing_cate\">
                                <span class=\"cate_icon\"><a href=\"#\"><img src=\"assets/images/category-icon1.png\" alt=\"icon-img\"></a></span>
                                <span class=\"listing_like\"><a href=\"#\"><i class=\"fa fa-heart-o\"></i></a></span>
                            </div>
                            <div class=\"featured_label\">Featured</div>
                            <a href=\"listing-detail-1.html\"><img src=\"assets/images/listing_img6.jpg\" alt=\"image\"></a>
                        </div>
                        <div class=\"listing-info-wp\">
                            <h5><a href=\"listing-detail-1.html\">The Morning Hotel</a></h5>
                            <div class=\"listing-rating\">
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star\"></i>
                                <span>(15 reviews)</span>
                            </div>
                            <p>Hotel, Fitness Center Gym, Healthcare</p>
                            <div class=\"listing-categories\">
                                <a href=\"#\">Hotels & Travel</a>
                            </div>
                        </div>
                        <div class=\"listing-footer\">
                            <i class=\"fa fa-map-marker\"></i> Los Angeles
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"listing-wp\">
                        <div class=\"listing-thumb\">
                            <span class=\"like_post\"><i class=\"fa fa-bookmark-o\"></i></span>
                            <div class=\"listing_cate\">
                                <span class=\"cate_icon\"><a href=\"#\"><img src=\"assets/images/category-icon1.png\" alt=\"icon-img\"></a></span>
                                <span class=\"listing_like\"><a href=\"#\"><i class=\"fa fa-heart-o\"></i></a></span>
                            </div>

                            <a href=\"listing-detail-2.html\"><img src=\"assets/images/listing_img4.jpg\" alt=\"image\"></a>
                        </div>
                        <div class=\"listing-info-wp\">
                            <h5><a href=\"listing-detail-2.html\">Laisa Spa Center</a></h5>
                            <div class=\"listing-rating\">
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star\"></i>
                                <span>(21 reviews)</span>
                            </div>
                            <p>Beauty & Spas</p>
                            <div class=\"listing-categories\">
                                <a href=\"#\">Beauty & Spas</a>
                            </div>
                        </div>
                        <div class=\"listing-footer\">
                            <i class=\"fa fa-map-marker\"></i> Los Angeles
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"listing-wp\">
                        <div class=\"listing-thumb\">
                            <span class=\"like_post\"><i class=\"fa fa-bookmark-o\"></i></span>
                            <div class=\"listing_cate\">
                                <span class=\"cate_icon\"><a href=\"#\"><img src=\"assets/images/category-icon1.png\" alt=\"icon-img\"></a></span>
                                <span class=\"listing_like\"><a href=\"#\"><i class=\"fa fa-heart-o\"></i></a></span>
                            </div>
                            <div class=\"featured_label\">Featured</div>
                            <a href=\"listing-detail-3.html\"><img src=\"assets/images/listing_img5.jpg\" alt=\"image\"></a>
                        </div>
                        <div class=\"listing-info-wp\">
                            <h5><a href=\"listing-detail-3.html\">Auto Repair Shop</a></h5>
                            <div class=\"listing-rating\">
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star active\"></i>
                                <i class=\"fa fa-star\"></i>
                                <span>(20 reviews)</span>
                            </div>
                            <p>Via Annia Regilla, Auto Repair Shop</p>
                            <div class=\"listing-categories\">
                                <a href=\"#\">Automotive</a>
                            </div>
                        </div>
                        <div class=\"listing-footer\">
                            <i class=\"fa fa-map-marker\"></i> Los Angeles
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
<!-- Listings -->
{% block body4 %}
    <!-- Intro-Video -->
    <section id=\"intro-video\" class=\"section-padding dark_mask\">
        <div class=\"container\">
            <div class=\"video-wrap\">
                <div id=\"video-button\"><i class=\"fa fa-play\"></i></div>
                <h2>Save time and hassle. Let us find Quick and Easy</h2>
            </div>
            <div class=\"ques-wrap\">
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <h2>Do You Have Questions ?</h2>
                        <p>If you have any question reach us to ask your questions.</p>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"ques-btn\">
                            <a href=\"contact-us.html\" class=\"btn\">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
<!-- /Intro-Video -->
{% block body5 %}
    <!-- Testimonials -->
    <section id=\"reviews\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Words From Our Customer</h2>
                <p>Hearing from our users will make you choose your mind!</p>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div id=\"reviews-slider\" class=\"owl-carousel\">
                        <div class=\"item\">
                            <div class=\"reviews-content\">
                                <div class=\"reviews-header\">
                                    <div class=\"img-wp\">
                                        <img src=\"assets/images/happy-client-01.jpg\" alt=\"image\">
                                    </div>
                                    <h6>LEVI RATH</h6>
                                    <p>Vice Director - Wilson Media</p>
                                </div>
                                <p>Life before Olomo was very chaotic – we got a lot of phone calls, a lot of mistyped orders. So with Olomo, the ability to see the order directly from the customer makes it so streamlined.</p>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"reviews-content\">
                                <div class=\"reviews-header\">
                                    <div class=\"img-wp\">
                                        <img src=\"assets/images/happy-client-03.jpg\" alt=\"image\">
                                    </div>
                                    <h6>WILLIAM STEVES</h6>
                                    <p>CEO of - XYZ PVT.</p>
                                </div>
                                <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible procedures.</p>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"reviews-content\">
                                <div class=\"reviews-header\">
                                    <div class=\"img-wp\">
                                        <img src=\"assets/images/happy-client-02.jpg\" alt=\"image\">
                                    </div>
                                    <h6>ESTHER BUECHE</h6>
                                    <p>Vice Director - Wilson Media</p>
                                </div>
                                <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible procedures.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"ratings-wrap\">
                        <div class=\"ratings-inner-wp\">
                            <div class=\"our-ratings\">4.8/5</div>
                            <p class=\"ratings-label\">Rating in</p>
                            <div class=\"playstore-btn\">
                                <a href=\"#\"><img src=\"assets/images/google-play.png\" alt=\"image\"></a>
                            </div>
                            <p>Great app showing all Listing data at one platform in detailed in secured way.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Testimonials -->
{% endblock %}
<!-- Blog -->
{% block body6 %}
    <section id=\"blog\" class=\"section-padding gray_bg\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Articles from Elemo</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer.</p>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"blog-wrap\">
                        <div class=\"blog-img\">
                            <a href=\"#\"><img src=\"assets/images/blog-img-1.jpg\" alt=\"image\"></a>
                        </div>
                        <div class=\"blog-content\">
                            <div class=\"blog-categories\">
                                <a href=\"#\">Restaurant</a>
                                <a href=\"#\">Tips & Tricks</a>
                            </div>
                            <h5><a href=\"#\">It has survived not only</a></h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class=\"blog-meta\">
                            <p>By: <a href=\"#\">admin</a></p>
                            <p>On: <a href=\"#\">Feb 28, 2020</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"blog-wrap\">
                        <div class=\"blog-img\">
                            <a href=\"#\"><img src=\"assets/images/blog-img-2.jpg\" alt=\"image\"></a>
                        </div>
                        <div class=\"blog-content\">
                            <div class=\"blog-categories\">
                                <a href=\"#\">Restaurant</a>
                                <a href=\"#\">Tips & Tricks</a>
                            </div>
                            <h5><a href=\"#\">It has survived not only</a></h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class=\"blog-meta\">
                            <p>By: <a href=\"#\">admin</a></p>
                            <p>On: <a href=\"#\">Feb 28, 2020</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"blog-wrap\">
                        <div class=\"blog-img\">
                            <a href=\"#\"><img src=\"assets/images/blog-img-3.jpg\" alt=\"image\"></a>
                        </div>
                        <div class=\"blog-content\">
                            <div class=\"blog-categories\">
                                <a href=\"#\">Restaurant</a>
                                <a href=\"#\">Tips & Tricks</a>
                            </div>
                            <h5><a href=\"#\">It has survived not only</a></h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class=\"blog-meta\">
                            <p>By: <a href=\"#\">admin</a></p>
                            <p>On: <a href=\"#\">Feb 28, 2020</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
{% endblock %}
<!-- /Blog -->
{% block footer %}
    <!-- Footer -->
    <footer id=\"footer\" class=\"footer_2 secondary-bg\">
        <div class=\"container\">
            <div class=\"footer_widgets\">
                <h5>Our Newsletter</h5>
                <div class=\"newsletter_wrap\">
                    <form action=\"#\" method=\"get\">
                        <input type=\"email\" class=\"form-control\" placeholder=\"Enter Email Address\">
                        <input type=\"submit\" value=\"subscribe\" class=\"btn\">
                    </form>
                </div>
            </div>

            <div class=\"footer_widgets\">
                <div class=\"footer_nav\">
                    <ul>
                        <li><a href=\"how-it-work.html\">How it Work</a></li>
                        <li><a href=\"pricing.html\">Pricing</a></li>
                        <li><a href=\"blog-grid-style.html\">Blog</a></li>
                        <li><a href=\"contact-us.html\">Contact Us</a></li>
                        <li><a href=\"#\">Privacy Policy</a></li>
                        <li><a href=\"#\">Terms & condition</a></li>
                    </ul>
                </div>
            </div>

        </div>

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
{% endblock %}
<!-- /Footer -->

<!-- Scripts -->
<script src={{ asset('assets/js/jquery.min.js')}}></script>
<script src={{ asset('assets/js/popper.min.js')}}></script>
<script src={{ asset('assets/js/bootstrap.min.js')}}></script>
<script src={{ asset('assets/js/interface.js')}}></script>
<!--Carousel-JS-->
<script src={{ asset('assets/js/owl.carousel.min.js')}}></script>
<!--Switcher-->
<script src={{ asset('assets/switcher/js/switcher.js')}}></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/Elemo/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:16:42 GMT -->
</html>", "base.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\base.html.twig");
    }
}
