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

/* commande/test.html.twig */
class __TwigTemplate_7aee8b2e65b511632dc6fed20bcc1dc938d5b55f01c83e6c38fba6e863d9f4e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body1' => [$this, 'block_body1'],
            'Mahmoud' => [$this, 'block_Mahmoud'],
            'body2' => [$this, 'block_body2'],
            'body3' => [$this, 'block_body3'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/test.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/test.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body1"));

        // line 5
        echo "
    <br>
    <br>
    <h3>A&M Products</h3>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_Mahmoud($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Mahmoud"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Mahmoud"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        // line 16
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body3($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body3"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body3"));

        // line 20
        echo "

    <!--Start class site-->

                <!--End class header top-->

                <!--Start header content-->
                <div class=\"header-content\">

                    <div class=\"tz-search pull-right\">

                        <!--Start form search-->

                        <!--End Form search-->

                        <!--live search-->
                        <div class=\"live-search\">
                            <ul>
                                <li>
                                    <div class=\"live-img\"><img src=\"images/product/product-search1.jpg\" alt=\"product search one\"></div>
                                    <div class=\"live-search-content\">
                                        <h6><a href=\"single-product.html\">Defy Advanced</a></h6>
                                        <span class=\"live-meta\">
                                            <a href=\"single-product.html\">\$2650.00</a>
                                            <span class=\"product-color\">
                                                <i class=\"light-blue\"></i>
                                                <i class=\"orange\"></i>
                                                <i class=\"orange-dark\"></i>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"live-img\"><img src=\"images/product/product-search2.jpg\" alt=\"product search two\"></div>
                                    <div class=\"live-search-content\">
                                        <h6><a href=\"single-product.html\">Defy Advanced</a></h6>
                                        <span class=\"live-meta\">
                                            <a href=\"single-product.html\">\$2650.00</a>
                                            <span class=\"product-color\">
                                                <i class=\"light-blue\"></i>
                                                <i class=\"orange\"></i>
                                                <i class=\"blueviolet\"></i>
                                                <i class=\"orange-dark\"></i>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"live-img\"><img src=\"images/product/product-search3.jpg\" alt=\"product search one\"></div>
                                    <div class=\"live-search-content\">
                                        <h6><a href=\"single-product.html\">Defy Advanced</a></h6>
                                        <span class=\"live-meta\">
                                            <a href=\"single-product.html\">\$2650.00</a>
                                            <span class=\"product-color\">
                                                <i class=\"blueviolet\"></i>
                                                <i class=\"light-blue\"></i>
                                                <i class=\"orange-dark\"></i>
                                                <i class=\"orange\"></i>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--End live search-->
                    </div>
                </div>
                <!--End class header content-->
            </div>

            <!--Start main menu -->

            <!--End stat main menu-->

        </header>
        <!--End id tz header-->

        <!--Start shop-->
        <div class=\"tz-shop\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <!--Start for shop sidebar-->

                        <!--End shop sidebar-->

                    </div>

                    <div class=\"col-md-9\">

                        <!--Start shop content-->

                            <div class=\"catalog-meta\">
                                <div class=\"catalog_top\">
                                <span class=\"style-switch\">
                                    <a class=\"nav-grid-view fa fa-th-large active\"></a>
                                    <a class=\"nav-list-view fa fa-list\"></a>
                                </span>
                                    <form class=\"shop-order\">
                                        <label class=\"form-arrow\">
                                            <select class=\"number-item\" name=\"number_item\">
                                                <option value=\"12\">12 items/page</option>
                                                <option value=\"6\">6 items/page</option>
                                                <option value=\"3\">3 items/page</option>
                                            </select>
                                        </label>
                                        <label class=\"form-arrow\">
                                            <select name=\"orderby\" class=\"orderby\">
                                                <option value=\"'\">Sort By: Position</option>
                                                <option value=\"rating\">Sort by rating</option>
                                                <option value=\"date\">Sort by newness</option>
                                            </select>
                                        </label>
                                    </form>
                                </div>
                            </div>

                            <div class=\"tz-product row grid-eff\">

                                <!--Product item-->
                                ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listproduit"]) || array_key_exists("listproduit", $context) ? $context["listproduit"] : (function () { throw new RuntimeError('Variable "listproduit" does not exist.', 140, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 141
            echo "                                    <div class=\"product-item col-md-4 col-sm-6\">
                                        <div class=\"item\">
                                            <div class=\"product-item-inner\">
                                                <div class=\"product-thumb\">
                                                    <img src=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, $context["i"], "imgprod", [], "any", false, false, false, 145))), "html", null, true);
            echo "\">
                                                </div>
                                                <div class=\"product-info\">
                                                    <h4><a href=\"shop.html\">";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nomprod", [], "any", false, false, false, 148), "html", null, true);
            echo "</a></h4>
                                                    <span class=\"p-meta\">
                                                <span class=\"p-price\">";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "prixprod", [], "any", false, false, false, 150), "html", null, true);
            echo " Dt</span>
                                                <span class=\"p-vote\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star-half-o\"></i>
                                                </span>
                                            </span>
                                                    <span class=\"p-color\">
                                                 <i class=\"fa fa-circle light-blue\"></i>
                                                <i class=\"fa fa-circle orange\"></i>
                                                <i class=\"fa fa-circle blueviolet\"></i>
                                                <i class=\"fa fa-circle orange-dark\"></i>
                                                <i class=\"fa fa-circle steelblue\"></i>
                                            </span>
                                                    <p>
                                                        Excellence is never an accident. It is always the result of high intention and intelligent execution; it represents the wise choice of many alternatives.
                                                    </p>
                                                    <span class=\"p-mask\">
                                                <a href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Paniers", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 170)]), "html", null, true);
            echo " \"class=\"add-to-cart\">Buy</a>
                                                <a href=\"#\" class=\"add-to-wishlist\"><i class=\"fa fa-heart\"></i> Add to wishlist</a>

                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "
                                <div style=\"text-align: center\">";
        // line 180
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["listproduit"]) || array_key_exists("listproduit", $context) ? $context["listproduit"] : (function () { throw new RuntimeError('Variable "listproduit" does not exist.', 180, $this->source); })()));
        echo "</div>


                                <!--End product item-->
                                ";
        // line 646
        echo "                                <!--End product item-->

                            </div>


                        </div>
                        <!--End shop content-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Shop-->


    </div><!--End class site-->
    ";
        // line 661
        $this->displayBlock('js', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 662
        echo "        <script src=\"js/jquery.min.js\"></script>
        <script src=\"js/jquery-ui.js\"></script>
        <script src=\"js/bootstrap.min.js\"></script>
        <script type='text/javascript' src=\"js/off-canvas.js\"></script>
        <!--jQuery Countdow-->
        <script src=\"js/jquery.plugin.min.js\"></script>
        <script src=\"js/jquery.countdown.min.js\"></script>
        <!--End Countdow-->

        <script src=\"js/owl.carousel.js\"></script>
        <script src=\"js/custom.js\"></script>
        <script>
            jQuery(function() {
                jQuery( \"#slider-range\" ).slider({
                    range: true,
                    min: 0,
                    max: 500,
                    values: [ 75, 300 ],
                    slide: function( event, ui ) {
                        jQuery('.from').text('\$' + ui.values[ 0 ]);
                        jQuery('.to').text('\$' + ui.values[ 1 ]);
                    }
                });
                jQuery('.from').text('\$' + jQuery( \"#slider-range\" ).slider( \"values\", 0 ));
                jQuery('.to').text('\$' + jQuery( \"#slider-range\" ).slider( \"values\", 1 ));
            });
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commande/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 662,  343 => 661,  326 => 646,  319 => 180,  316 => 179,  301 => 170,  278 => 150,  273 => 148,  267 => 145,  261 => 141,  257 => 140,  135 => 20,  125 => 19,  114 => 16,  104 => 15,  86 => 11,  72 => 5,  62 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body1 %}

    <br>
    <br>
    <h3>A&M Products</h3>
{% endblock %}

{% block Mahmoud %}
{% endblock %}


{% block body2 %}

{% endblock %}

{% block body3 %}


    <!--Start class site-->

                <!--End class header top-->

                <!--Start header content-->
                <div class=\"header-content\">

                    <div class=\"tz-search pull-right\">

                        <!--Start form search-->

                        <!--End Form search-->

                        <!--live search-->
                        <div class=\"live-search\">
                            <ul>
                                <li>
                                    <div class=\"live-img\"><img src=\"images/product/product-search1.jpg\" alt=\"product search one\"></div>
                                    <div class=\"live-search-content\">
                                        <h6><a href=\"single-product.html\">Defy Advanced</a></h6>
                                        <span class=\"live-meta\">
                                            <a href=\"single-product.html\">\$2650.00</a>
                                            <span class=\"product-color\">
                                                <i class=\"light-blue\"></i>
                                                <i class=\"orange\"></i>
                                                <i class=\"orange-dark\"></i>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"live-img\"><img src=\"images/product/product-search2.jpg\" alt=\"product search two\"></div>
                                    <div class=\"live-search-content\">
                                        <h6><a href=\"single-product.html\">Defy Advanced</a></h6>
                                        <span class=\"live-meta\">
                                            <a href=\"single-product.html\">\$2650.00</a>
                                            <span class=\"product-color\">
                                                <i class=\"light-blue\"></i>
                                                <i class=\"orange\"></i>
                                                <i class=\"blueviolet\"></i>
                                                <i class=\"orange-dark\"></i>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"live-img\"><img src=\"images/product/product-search3.jpg\" alt=\"product search one\"></div>
                                    <div class=\"live-search-content\">
                                        <h6><a href=\"single-product.html\">Defy Advanced</a></h6>
                                        <span class=\"live-meta\">
                                            <a href=\"single-product.html\">\$2650.00</a>
                                            <span class=\"product-color\">
                                                <i class=\"blueviolet\"></i>
                                                <i class=\"light-blue\"></i>
                                                <i class=\"orange-dark\"></i>
                                                <i class=\"orange\"></i>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--End live search-->
                    </div>
                </div>
                <!--End class header content-->
            </div>

            <!--Start main menu -->

            <!--End stat main menu-->

        </header>
        <!--End id tz header-->

        <!--Start shop-->
        <div class=\"tz-shop\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <!--Start for shop sidebar-->

                        <!--End shop sidebar-->

                    </div>

                    <div class=\"col-md-9\">

                        <!--Start shop content-->

                            <div class=\"catalog-meta\">
                                <div class=\"catalog_top\">
                                <span class=\"style-switch\">
                                    <a class=\"nav-grid-view fa fa-th-large active\"></a>
                                    <a class=\"nav-list-view fa fa-list\"></a>
                                </span>
                                    <form class=\"shop-order\">
                                        <label class=\"form-arrow\">
                                            <select class=\"number-item\" name=\"number_item\">
                                                <option value=\"12\">12 items/page</option>
                                                <option value=\"6\">6 items/page</option>
                                                <option value=\"3\">3 items/page</option>
                                            </select>
                                        </label>
                                        <label class=\"form-arrow\">
                                            <select name=\"orderby\" class=\"orderby\">
                                                <option value=\"'\">Sort By: Position</option>
                                                <option value=\"rating\">Sort by rating</option>
                                                <option value=\"date\">Sort by newness</option>
                                            </select>
                                        </label>
                                    </form>
                                </div>
                            </div>

                            <div class=\"tz-product row grid-eff\">

                                <!--Product item-->
                                {% for i in listproduit %}
                                    <div class=\"product-item col-md-4 col-sm-6\">
                                        <div class=\"item\">
                                            <div class=\"product-item-inner\">
                                                <div class=\"product-thumb\">
                                                    <img src=\"{{ asset('uploads/photos/' ~ i.imgprod) }}\">
                                                </div>
                                                <div class=\"product-info\">
                                                    <h4><a href=\"shop.html\">{{ i.nomprod }}</a></h4>
                                                    <span class=\"p-meta\">
                                                <span class=\"p-price\">{{ i.prixprod }} Dt</span>
                                                <span class=\"p-vote\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star-half-o\"></i>
                                                </span>
                                            </span>
                                                    <span class=\"p-color\">
                                                 <i class=\"fa fa-circle light-blue\"></i>
                                                <i class=\"fa fa-circle orange\"></i>
                                                <i class=\"fa fa-circle blueviolet\"></i>
                                                <i class=\"fa fa-circle orange-dark\"></i>
                                                <i class=\"fa fa-circle steelblue\"></i>
                                            </span>
                                                    <p>
                                                        Excellence is never an accident. It is always the result of high intention and intelligent execution; it represents the wise choice of many alternatives.
                                                    </p>
                                                    <span class=\"p-mask\">
                                                <a href=\"{{ path('Paniers',{'id':i.id}) }} \"class=\"add-to-cart\">Buy</a>
                                                <a href=\"#\" class=\"add-to-wishlist\"><i class=\"fa fa-heart\"></i> Add to wishlist</a>

                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}

                                <div style=\"text-align: center\">{{ knp_pagination_render(listproduit) }}</div>


                                <!--End product item-->
                                {#
                                <!--Product item-->
                                <div class=\"product-item col-md-4 col-sm-6\">
                                    <div class=\"item\">
                                        <div class=\"product-item-inner\">
                                            <div class=\"product-thumb\">
                                                <img src=\"images/product/shop2.jpg\" alt=\"Team Hoody\">
                                            </div>
                                            <div class=\"product-info\">
                                                <h4><a href=\"shop.html\">Team Hoody</a></h4>
                                                <span class=\"p-meta\">
                                                <span class=\"p-price\">\$105.00</span>
                                                <span class=\"p-vote\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star-half-o\"></i>
                                                </span>
                                            </span>
                                                <span class=\"p-color\">
                                                <i class=\"fa fa-circle steelblue\"></i>
                                                <i class=\"fa fa-circle light-blue\"></i>
                                                <i class=\"fa fa-circle orange\"></i>
                                                <i class=\"fa fa-circle blueviolet\"></i>
                                                <i class=\"fa fa-circle orange-dark\"></i>
                                            </span>
                                                <p>
                                                    Excellence is never an accident. It is always the result of high intention and intelligent execution; it represents the wise choice of many alternatives.
                                                </p>
                                                <span class=\"p-mask\">
                                                <a href=\"shop-cart.html\" class=\"add-to-cart\">Add to cart</a>
                                                <a href=\"#\" class=\"add-to-wishlist\"><i class=\"fa fa-heart\"></i> Add to wishlist</a>
                                               <span class=\"quick-view\">
                                                    <a href=\"#\"><i class=\"fa fa-eye\"></i> Quick view</a>
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End product item-->

                                <!--Product item-->
                                <div class=\"product-item col-md-4 col-sm-6\">
                                    <div class=\"item\">
                                        <div class=\"product-item-inner\">
                                            <div class=\"product-thumb\">
                                                <img src=\"images/product/shop3.jpg\" alt=\"Team Hoody\">
                                            </div>
                                            <div class=\"product-info\">
                                                <h4><a href=\"shop.html\">Defy Advanced</a></h4>
                                                <span class=\"p-meta\">
                                                <span class=\"p-price\">\$2650.00</span>
                                                <span class=\"p-vote\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star-half-o\"></i>
                                                </span>
                                            </span>
                                                <span class=\"p-color\">
                                                <i class=\"fa fa-circle steelblue\"></i>
                                                <i class=\"fa fa-circle light-blue\"></i>
                                                <i class=\"fa fa-circle orange\"></i>
                                                <i class=\"fa fa-circle blueviolet\"></i>
                                                <i class=\"fa fa-circle orange-dark\"></i>
                                            </span>
                                                <p>
                                                    Excellence is never an accident. It is always the result of high intention and intelligent execution; it represents the wise choice of many alternatives.
                                                </p>
                                                <span class=\"p-mask\">
                                                <a href=\"shop-cart.html\" class=\"add-to-cart\">Add to cart</a>
                                                <a href=\"#\" class=\"add-to-wishlist\"><i class=\"fa fa-heart\"></i> Add to wishlist</a>
                                               <span class=\"quick-view\">
                                                    <a href=\"#\"><i class=\"fa fa-eye\"></i> Quick view</a>
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End product item-->

                                <!--Product item-->
                                <div class=\"product-item col-md-4 col-sm-6\">
                                    <div class=\"item\">
                                        <div class=\"product-item-inner\">
                                            <div class=\"product-thumb\">
                                                <img src=\"images/product/shop4.jpg\" alt=\"Team Hoody\">
                                            </div>
                                            <div class=\"product-info\">
                                                <h4><a href=\"shop.html\">Defy Advanced 2</a></h4>
                                                <span class=\"p-meta\">
                                                <span class=\"p-price\">\$2125.00</span>
                                                <span class=\"p-vote\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star-half-o\"></i>
                                                </span>
                                            </span>
                                                <span class=\"p-color\">
                                                <i class=\"fa fa-circle orange\"></i>
                                                <i class=\"fa fa-circle steelblue\"></i>
                                                <i class=\"fa fa-circle light-blue\"></i>
                                                <i class=\"fa fa-circle blueviolet\"></i>
                                                <i class=\"fa fa-circle orange-dark\"></i>
                                            </span>
                                                <p>
                                                    Excellence is never an accident. It is always the result of high intention and intelligent execution; it represents the wise choice of many alternatives.
                                                </p>
                                                <span class=\"p-mask\">
                                                <a href=\"shop-cart.html\" class=\"add-to-cart\">Add to cart</a>
                                                <a href=\"#\" class=\"add-to-wishlist\"><i class=\"fa fa-heart\"></i> Add to wishlist</a>
                                               <span class=\"quick-view\">
                                                    <a href=\"#\"><i class=\"fa fa-eye\"></i> Quick view</a>
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End product item-->

                                <!--Product item-->
                                <div class=\"product-item col-md-4 col-sm-6\">
                                    <div class=\"item\">
                                        <div class=\"product-item-inner\">
                                            <div class=\"product-thumb\">
                                                <img src=\"images/product/shop5.jpg\" alt=\"Team Hoody\">
                                            </div>
                                            <div class=\"product-info\">
                                                <h4><a href=\"shop.html\">City Pedals Sport</a></h4>
                                                <span class=\"p-meta\">
                                                <span class=\"p-price\">\$18.00</span>
                                                <span class=\"p-vote\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star-half-o\"></i>
                                                </span>
                                            </span>
                                                <span class=\"p-color\">
                                                <i class=\"fa fa-circle orange\"></i>
                                                <i class=\"fa fa-circle steelblue\"></i>
                                                <i class=\"fa fa-circle light-blue\"></i>
                                                <i class=\"fa fa-circle blueviolet\"></i>
                                                <i class=\"fa fa-circle orange-dark\"></i>
                                            </span>
                                                <p>
                                                    Excellence is never an accident. It is always the result of high intention and intelligent execution; it represents the wise choice of many alternatives.
                                                </p>
                                                <span class=\"p-mask\">
                                                <a href=\"shop-cart.html\" class=\"add-to-cart\">Add to cart</a>
                                                <a href=\"#\" class=\"add-to-wishlist\"><i class=\"fa fa-heart\"></i> Add to wishlist</a>
                                               <span class=\"quick-view\">
                                                    <a href=\"#\"><i class=\"fa fa-eye\"></i> Quick view</a>
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End product item-->

                                <!--Product item-->
                                <div class=\"product-item col-md-4 col-sm-6\">
                                    <div class=\"item\">
                                        <div class=\"product-item-inner\">
                                            <div class=\"product-thumb\">
                                                <img src=\"images/product/shop6.jpg\" alt=\"Neos Ant+ Wireless\">
                                            </div>
                                            <div class=\"product-info\">
                                                <h4><a href=\"shop.html\">Neos Ant+ Wireless</a></h4>
                                                <span class=\"p-meta\">
                                                <span class=\"p-price\">\$70.00</span>
                                                <span class=\"p-vote\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star-half-o\"></i>
                                                </span>
                                            </span>
                                                <span class=\"p-color\">
                                                <i class=\"fa fa-circle orange\"></i>
                                                <i class=\"fa fa-circle steelblue\"></i>
                                                <i class=\"fa fa-circle light-blue\"></i>
                                                <i class=\"fa fa-circle blueviolet\"></i>
                                                <i class=\"fa fa-circle orange-dark\"></i>
                                            </span>
                                                <p>
                                                    Excellence is never an accident. It is always the result of high intention and intelligent execution; it represents the wise choice of many alternatives.
                                                </p>
                                                <span class=\"p-mask\">
                                                <a href=\"shop-cart.html\" class=\"add-to-cart\">Add to cart</a>
                                                <a href=\"#\" class=\"add-to-wishlist\"><i class=\"fa fa-heart\"></i> Add to wishlist</a>
                                               <span class=\"quick-view\">
                                                    <a href=\"#\"><i class=\"fa fa-eye\"></i> Quick view</a>
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End product item-->

                                <!--Product item-->
                                <div class=\"product-item col-md-4 col-sm-6\">
                                    <div class=\"item\">
                                        <div class=\"product-item-inner\">
                                            <div class=\"product-thumb\">
                                                <img src=\"images/product/shop7.jpg\" alt=\"Neos Ant+ Wireless\">
                                            </div>
                                            <div class=\"product-info\">
                                                <h4><a href=\"shop.html\">Rack-It Tour Rack</a></h4>
                                                <span class=\"p-meta\">
                                                <span class=\"p-price\">\$480.00</span>
                                                <span class=\"p-vote\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star-half-o\"></i>
                                                </span>
                                            </span>
                                                <span class=\"p-color\">
                                                <i class=\"fa fa-circle orange\"></i>
                                                <i class=\"fa fa-circle steelblue\"></i>
                                                <i class=\"fa fa-circle light-blue\"></i>
                                                <i class=\"fa fa-circle blueviolet\"></i>
                                                <i class=\"fa fa-circle orange-dark\"></i>
                                            </span>
                                                <p>
                                                    Excellence is never an accident. It is always the result of high intention and intelligent execution; it represents the wise choice of many alternatives.
                                                </p>
                                                <span class=\"p-mask\">
                                                <a href=\"shop-cart.html\" class=\"add-to-cart\">Add to cart</a>
                                                <a href=\"#\" class=\"add-to-wishlist\"><i class=\"fa fa-heart\"></i> Add to wishlist</a>
                                               <span class=\"quick-view\">
                                                    <a href=\"#\"><i class=\"fa fa-eye\"></i> Quick view</a>
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End product item-->

                                <!--Product item-->
                                <div class=\"product-item col-md-4 col-sm-6\">
                                    <div class=\"item\">
                                        <div class=\"product-item-inner\">
                                            <div class=\"product-thumb\">
                                                <img src=\"images/product/shop8.jpg\" alt=\"Lust Advanced\">
                                            </div>
                                            <div class=\"product-info\">
                                                <h4><a href=\"shop.html\">Lust Advanced</a></h4>
                                                <span class=\"p-meta\">
                                                <span class=\"p-price\">\$8050.00</span>
                                                <span class=\"p-vote\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star-half-o\"></i>
                                                </span>
                                            </span>
                                                <span class=\"p-color\">
                                                <i class=\"fa fa-circle orange\"></i>
                                                <i class=\"fa fa-circle steelblue\"></i>
                                                <i class=\"fa fa-circle light-blue\"></i>
                                                <i class=\"fa fa-circle blueviolet\"></i>
                                                <i class=\"fa fa-circle orange-dark\"></i>
                                            </span>
                                                <p>
                                                    Excellence is never an accident. It is always the result of high intention and intelligent execution; it represents the wise choice of many alternatives.
                                                </p>
                                                <span class=\"p-mask\">
                                                <a href=\"shop-cart.html\" class=\"add-to-cart\">Add to cart</a>
                                                <a href=\"#\" class=\"add-to-wishlist\"><i class=\"fa fa-heart\"></i> Add to wishlist</a>
                                               <span class=\"quick-view\">
                                                    <a href=\"#\"><i class=\"fa fa-eye\"></i> Quick view</a>
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End product item-->

                                <!--Product item-->
                                <div class=\"product-item col-md-4 col-sm-6\">
                                    <div class=\"item\">
                                        <div class=\"product-item-inner\">
                                            <div class=\"product-thumb\">
                                                <img src=\"images/product/shop9.jpg\" alt=\"Cruiser Bells\">
                                            </div>
                                            <div class=\"product-info\">
                                                <h4><a href=\"shop.html\">Cruiser Bells</a></h4>
                                                <span class=\"p-meta\">
                                                <span class=\"p-price\">\$10.00</span>
                                                <span class=\"p-vote\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star-half-o\"></i>
                                                </span>
                                            </span>
                                                <span class=\"p-color\">
                                                <i class=\"fa fa-circle orange\"></i>
                                                <i class=\"fa fa-circle steelblue\"></i>
                                                <i class=\"fa fa-circle light-blue\"></i>
                                                <i class=\"fa fa-circle blueviolet\"></i>
                                                <i class=\"fa fa-circle orange-dark\"></i>
                                            </span>
                                                <p>
                                                    Excellence is never an accident. It is always the result of high intention and intelligent execution; it represents the wise choice of many alternatives.
                                                </p>
                                                <span class=\"p-mask\">
                                                <a href=\"shop-cart.html\" class=\"add-to-cart\">Add to cart</a>
                                                <a href=\"#\" class=\"add-to-wishlist\"><i class=\"fa fa-heart\"></i> Add to wishlist</a>
                                               <span class=\"quick-view\">
                                                    <a href=\"#\"><i class=\"fa fa-eye\"></i> Quick view</a>
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End product item-->

                                <!--Product item-->
                                <div class=\"product-item col-md-4 col-sm-6\">
                                    <div class=\"item\">
                                        <div class=\"product-item-inner\">
                                            <div class=\"product-thumb\">
                                                <img src=\"images/product/shop10.jpg\" alt=\"GFR\">
                                            </div>
                                            <div class=\"product-info\">
                                                <h4><a href=\"shop.html\">GFR F/W</a></h4>
                                                <span class=\"p-meta\">
                                                <span class=\"p-price\">\$270.00</span>
                                                <span class=\"p-vote\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star-half-o\"></i>
                                                </span>
                                            </span>
                                                <span class=\"p-color\">
                                                <i class=\"fa fa-circle orange\"></i>
                                                <i class=\"fa fa-circle steelblue\"></i>
                                                <i class=\"fa fa-circle light-blue\"></i>
                                                <i class=\"fa fa-circle blueviolet\"></i>
                                                <i class=\"fa fa-circle orange-dark\"></i>
                                            </span>
                                                <p>
                                                    Excellence is never an accident. It is always the result of high intention and intelligent execution; it represents the wise choice of many alternatives.
                                                </p>
                                                <span class=\"p-mask\">
                                                <a href=\"shop-cart.html\" class=\"add-to-cart\">Add to cart</a>
                                                <a href=\"#\" class=\"add-to-wishlist\"><i class=\"fa fa-heart\"></i> Add to wishlist</a>
                                               <span class=\"quick-view\">
                                                    <a href=\"#\"><i class=\"fa fa-eye\"></i> Quick view</a>
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End product item-->

                                <!--Product item-->
                                <div class=\"product-item col-md-4 col-sm-6\">
                                    <div class=\"item\">
                                        <div class=\"product-item-inner\">
                                            <div class=\"product-thumb\">
                                                <img src=\"images/product/shop11.jpg\" alt=\"Race Day Tri Suit\">
                                            </div>
                                            <div class=\"product-info\">
                                                <h4><a href=\"shop.html\">Race Day Tri Suit</a></h4>
                                                <span class=\"p-meta\">
                                                <span class=\"p-price\">\$270.00</span>
                                                <span class=\"p-vote\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star-half-o\"></i>
                                                </span>
                                            </span>
                                                <span class=\"p-color\">
                                                <i class=\"fa fa-circle orange\"></i>
                                                <i class=\"fa fa-circle steelblue\"></i>
                                                <i class=\"fa fa-circle light-blue\"></i>
                                                <i class=\"fa fa-circle blueviolet\"></i>
                                                <i class=\"fa fa-circle orange-dark\"></i>
                                            </span>
                                                <p>
                                                    Excellence is never an accident. It is always the result of high intention and intelligent execution; it represents the wise choice of many alternatives.
                                                </p>
                                                <span class=\"p-mask\">
                                                <a href=\"shop-cart.html\" class=\"add-to-cart\">Add to cart</a>
                                                <a href=\"#\" class=\"add-to-wishlist\"><i class=\"fa fa-heart\"></i> Add to wishlist</a>
                                               <span class=\"quick-view\">
                                                    <a href=\"#\"><i class=\"fa fa-eye\"></i> Quick view</a>
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End product item-->

                                <!--Product item-->
                                <div class=\"product-item col-md-4 col-sm-6\">
                                    <div class=\"item\">
                                        <div class=\"product-item-inner\">
                                            <div class=\"product-thumb\">
                                                <img src=\"images/product/shop12.jpg\" alt=\"Gloss\">
                                            </div>
                                            <div class=\"product-info\">
                                                <h4><a href=\"shop.html\">Gloss</a></h4>
                                                <span class=\"p-meta\">
                                                <span class=\"p-price\">\$325.00</span>
                                                <span class=\"p-vote\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star-half-o\"></i>
                                                </span>
                                            </span>
                                                <span class=\"p-color\">
                                                <i class=\"fa fa-circle orange\"></i>
                                                <i class=\"fa fa-circle steelblue\"></i>
                                                <i class=\"fa fa-circle light-blue\"></i>
                                                <i class=\"fa fa-circle blueviolet\"></i>
                                                <i class=\"fa fa-circle orange-dark\"></i>
                                            </span>
                                                <p>
                                                    Excellence is never an accident. It is always the result of high intention and intelligent execution; it represents the wise choice of many alternatives.
                                                </p>
                                                <span class=\"p-mask\">
                                                <a href=\"shop-cart.html\" class=\"add-to-cart\">Add to cart</a>
                                                <a href=\"#\" class=\"add-to-wishlist\"><i class=\"fa fa-heart\"></i> Add to wishlist</a>
                                               <span class=\"quick-view\">
                                                    <a href=\"#\"><i class=\"fa fa-eye\"></i> Quick view</a>
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                #}
                                <!--End product item-->

                            </div>


                        </div>
                        <!--End shop content-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Shop-->


    </div><!--End class site-->
    {% block js %}
        <script src=\"js/jquery.min.js\"></script>
        <script src=\"js/jquery-ui.js\"></script>
        <script src=\"js/bootstrap.min.js\"></script>
        <script type='text/javascript' src=\"js/off-canvas.js\"></script>
        <!--jQuery Countdow-->
        <script src=\"js/jquery.plugin.min.js\"></script>
        <script src=\"js/jquery.countdown.min.js\"></script>
        <!--End Countdow-->

        <script src=\"js/owl.carousel.js\"></script>
        <script src=\"js/custom.js\"></script>
        <script>
            jQuery(function() {
                jQuery( \"#slider-range\" ).slider({
                    range: true,
                    min: 0,
                    max: 500,
                    values: [ 75, 300 ],
                    slide: function( event, ui ) {
                        jQuery('.from').text('\$' + ui.values[ 0 ]);
                        jQuery('.to').text('\$' + ui.values[ 1 ]);
                    }
                });
                jQuery('.from').text('\$' + jQuery( \"#slider-range\" ).slider( \"values\", 0 ));
                jQuery('.to').text('\$' + jQuery( \"#slider-range\" ).slider( \"values\", 1 ));
            });
        </script>
    {% endblock %}
{% endblock %}", "commande/test.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\commande\\test.html.twig");
    }
}
