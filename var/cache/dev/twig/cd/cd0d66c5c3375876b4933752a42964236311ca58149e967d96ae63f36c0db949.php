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

/* produit/listeproduit.html.twig */
class __TwigTemplate_859601dbbb668b99bc8f25c1df1e56f65fb5ad5aeb0a6672d1baee0c1f7306f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/listeproduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/listeproduit.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "produit/listeproduit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

    <h3>A&M Products</h3>

    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showcart");
        echo "\" class=\"btn float-right\" >

        Cart

        <i class=\"fas fa-shopping-cart\"></i>
    </a>



    <hr noshade style=\" color:yellow; :5px; text-align:right; border:1px solid grey;\">





    <div style=\"text-align: center\"; class=\"col-5\">
    <div class=\"\">
    <div class=\"d-flex align-items-center\">
        <input class=\"form-control\" type=\"search\" id=\"search\" placeholder=\"Search Products\" >
        <a  href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchrdvzz");
        echo "\"></a>
    </div>
    </div>
    </div>



    <!--Start class site-->

    <!--End class header top-->

    <!--Start header content-->
    <div class=\"header-content\">

        <div class=\"tz-search pull-right\">

            <!--Start form search-->

            <!--End Form search-->

            <!--live search-->
";
        // line 51
        echo "


";
        // line 71
        echo "            <!--End live search-->
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

                <div class=\"col-md-9 w-100\">

                    <!--Start shop content-->



                        <!--Product item-->
                        <div id=\"all\">
                        ";
        // line 103
        $this->loadTemplate("produit/produitajax.html.twig", "produit/listeproduit.html.twig", 103)->display($context);
        // line 104
        echo "                        </div>
                        <tbody align=\"left\" border=\"2\" id=\"search\">
                        </tbody


                        <br>
                        <br>
                        <div style=\"text-align: center;\">";
        // line 111
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["listproduit"]) || array_key_exists("listproduit", $context) ? $context["listproduit"] : (function () { throw new RuntimeError('Variable "listproduit" does not exist.', 111, $this->source); })()));
        echo "</div>
                </div>
                <!--End shop content-->
            </div>
        </div>
    </div>
    </div>
    <!--End Shop-->


    </div><!--End class site-->
    ";
        // line 122
        $this->displayBlock('js', $context, $blocks);
        // line 184
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 122
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 123
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

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$( document ).ready(function() {
        var currentRequest = null;
        \$(\"#search\").keyup(function(e){

            var value = \$(this).val();
            if(currentRequest != null) {
                currentRequest.abort();
            }

            currentRequest = \$.ajax({

                url : \"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchrdvzz");
        echo "\",
                type : 'GET',
                data: {
                    'searchValue' : value
                },

                success : function(retour)
                {
                    \$('#all').html(retour);

                },
            });
            return false;
        });
    });
</script>
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/listeproduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 164,  209 => 123,  199 => 122,  187 => 184,  185 => 122,  171 => 111,  162 => 104,  160 => 103,  126 => 71,  121 => 51,  97 => 28,  75 => 9,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}


{% block body %}


    <h3>A&M Products</h3>

    <a href=\"{{ path('showcart') }}\" class=\"btn float-right\" >

        Cart

        <i class=\"fas fa-shopping-cart\"></i>
    </a>



    <hr noshade style=\" color:yellow; :5px; text-align:right; border:1px solid grey;\">





    <div style=\"text-align: center\"; class=\"col-5\">
    <div class=\"\">
    <div class=\"d-flex align-items-center\">
        <input class=\"form-control\" type=\"search\" id=\"search\" placeholder=\"Search Products\" >
        <a  href=\"{{ path('searchrdvzz') }}\"></a>
    </div>
    </div>
    </div>



    <!--Start class site-->

    <!--End class header top-->

    <!--Start header content-->
    <div class=\"header-content\">

        <div class=\"tz-search pull-right\">

            <!--Start form search-->

            <!--End Form search-->

            <!--live search-->
{#            <div class=\"live-search\">#}
{#                <ul>#}



{#                    <li>#}
{#                        <div class=\"live-img\"><img src=\"images/product/product-search3.jpg\" alt=\"product search one\"></div>#}
{#                        <div class=\"live-search-content\">#}
{#                            <h6><a href=\"single-product.html\">Defy Advanced</a></h6>#}
{#                            <span class=\"live-meta\">#}
{#                                            <a href=\"single-product.html\">\$2650.00</a>#}
{#                                            <span class=\"product-color\">#}
{#                                                <i class=\"blueviolet\"></i>#}
{#                                                <i class=\"light-blue\"></i>#}
{#                                                <i class=\"orange-dark\"></i>#}
{#                                                <i class=\"orange\"></i>#}
{#                                            </span>#}
{#                                        </span>#}
{#                        </div>#}
{#                    </li>#}
{#                </ul>#}
{#            </div>#}
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

                <div class=\"col-md-9 w-100\">

                    <!--Start shop content-->



                        <!--Product item-->
                        <div id=\"all\">
                        {% include 'produit/produitajax.html.twig' %}
                        </div>
                        <tbody align=\"left\" border=\"2\" id=\"search\">
                        </tbody


                        <br>
                        <br>
                        <div style=\"text-align: center;\">{{ knp_pagination_render(listproduit) }}</div>
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

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$( document ).ready(function() {
        var currentRequest = null;
        \$(\"#search\").keyup(function(e){

            var value = \$(this).val();
            if(currentRequest != null) {
                currentRequest.abort();
            }

            currentRequest = \$.ajax({

                url : \"{{ path('searchrdvzz') }}\",
                type : 'GET',
                data: {
                    'searchValue' : value
                },

                success : function(retour)
                {
                    \$('#all').html(retour);

                },
            });
            return false;
        });
    });
</script>
</script>


{% endblock %}


{% endblock %}

", "produit/listeproduit.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\produit\\listeproduit.html.twig");
    }
}
