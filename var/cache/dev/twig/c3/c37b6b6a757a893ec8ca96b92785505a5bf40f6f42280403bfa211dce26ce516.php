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

/* UserTemp.html.twig */
class __TwigTemplate_9085c0cabb8f88892dee9da029fc93e28c9591c031e9366dd549bb0b363c9831 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserTemp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserTemp.html.twig"));

        // line 1
        echo "
<!DOCTYPE HTML>
<html lang=\"en\">

<!-- Mirrored from themes.webmasterdriver.net/Elemo/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:33:17 GMT -->
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
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/switcher.css"), "html", null, true);
        echo "\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/blue.css"), "html", null, true);
        echo "\" title=\"blue\" media=\"all\" data-default-color=\"true\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/pink.css"), "html", null, true);
        echo "\" title=\"pink\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/orange.css"), "html", null, true);
        echo "\" title=\"orange\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/green.css"), "html", null, true);
        echo "\" title=\"green\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/red.css"), "html", null, true);
        echo "\" title=\"red\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/css/purple.css"), "html", null, true);
        echo "\" title=\"purple\" media=\"all\" />

    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon-icon/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 34
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

<section class=\"primary-bg\">
    <div class=\"container\">
        <div id=\"login_signup\">
            <div class=\"form_wrap_m\">
                ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 97
        echo "            </div>
        </div>
    </div>
</section>

<!-- Scripts -->
<script src=\"assets/js/jquery.min.js\"></script><script src=\"assets/js/popper.min.js\"></script>
<script src=\"assets/js/bootstrap.min.js\"></script>
<script src=\"assets/js/interface.js\"></script>
<!--Carousel-JS-->
<script src=\"assets/js/owl.carousel.min.js\"></script>
<!--Switcher-->
<script src=\"assets/switcher/js/switcher.js\"></script>

<!-- Scripts -->
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/interface.js"), "html", null, true);
        echo "\"></script>
<!--Carousel-JS-->
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!--Switcher-->
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/switcher/js/switcher.js"), "html", null, true);
        echo "\"></script>


<!-- Mirrored from themes.webmasterdriver.net/Elemo/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:33:21 GMT -->
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

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 76
        echo "                    <div class=\"white_box\">
                    <h3>Sign Up</h3>
                    <form action=\"#\" method=\"get\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Username\">
                        </div>
                        <div class=\"form-group\">
                             ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), "plainPassword", [], "any", false, false, false, 83), 'row', ["label" => "Password"]);
        // line 85
        echo "
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-block\">Register</button>
                        </div>

                    </form>
                    <p>Don't have an account? <a href=\"signup.html\">Signup Here</a></p>
                    <p><a href=\"lost-password.html\">Lost your password?</a></p>
                    <div class=\"back_home\"><a href=\"index-2.html\" class=\"btn outline-btn btn-sm\"><i class=\"fa fa-angle-double-left\"></i> Back to Home</a></div>
                </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "UserTemp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 85,  261 => 83,  252 => 76,  242 => 75,  223 => 12,  208 => 118,  203 => 116,  198 => 114,  194 => 113,  188 => 112,  171 => 97,  169 => 75,  125 => 34,  121 => 33,  117 => 32,  113 => 31,  107 => 28,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  78 => 20,  73 => 18,  68 => 16,  63 => 14,  60 => 13,  58 => 12,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE HTML>
<html lang=\"en\">

<!-- Mirrored from themes.webmasterdriver.net/Elemo/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:33:17 GMT -->
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
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"{{ asset('assets/switcher/css/blue.css')}}\" title=\"blue\" media=\"all\" data-default-color=\"true\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"{{ asset('assets/switcher/css/pink.css')}}\" title=\"pink\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"{{ asset('assets/switcher/css/orange.css')}}\" title=\"orange\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"{{ asset('assets/switcher/css/green.css')}}\" title=\"green\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"{{ asset('assets/switcher/css/red.css')}}\" title=\"red\" media=\"all\" />
    <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"{{ asset('assets/switcher/css/purple.css')}}\" title=\"purple\" media=\"all\" />

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

<section class=\"primary-bg\">
    <div class=\"container\">
        <div id=\"login_signup\">
            <div class=\"form_wrap_m\">
                {% block body %}
                    <div class=\"white_box\">
                    <h3>Sign Up</h3>
                    <form action=\"#\" method=\"get\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Username\">
                        </div>
                        <div class=\"form-group\">
                             {{ form_row(registrationForm.plainPassword, {
                                label: 'Password'
                            }) }}
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-block\">Register</button>
                        </div>

                    </form>
                    <p>Don't have an account? <a href=\"signup.html\">Signup Here</a></p>
                    <p><a href=\"lost-password.html\">Lost your password?</a></p>
                    <div class=\"back_home\"><a href=\"index-2.html\" class=\"btn outline-btn btn-sm\"><i class=\"fa fa-angle-double-left\"></i> Back to Home</a></div>
                </div>
                {% endblock %}
            </div>
        </div>
    </div>
</section>

<!-- Scripts -->
<script src=\"assets/js/jquery.min.js\"></script><script src=\"assets/js/popper.min.js\"></script>
<script src=\"assets/js/bootstrap.min.js\"></script>
<script src=\"assets/js/interface.js\"></script>
<!--Carousel-JS-->
<script src=\"assets/js/owl.carousel.min.js\"></script>
<!--Switcher-->
<script src=\"assets/switcher/js/switcher.js\"></script>

<!-- Scripts -->
<script src=\"{{ asset('assets/js/jquery.min.js')}}\"></script><script src=\"{{ asset('assets/js/popper.min.js')}}\"></script>
<script src=\"{{ asset('assets/js/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset('assets/js/interface.js')}}\"></script>
<!--Carousel-JS-->
<script src=\"{{ asset('assets/js/owl.carousel.min.js')}}\"></script>
<!--Switcher-->
<script src=\"{{ asset('assets/switcher/js/switcher.js')}}\"></script>


<!-- Mirrored from themes.webmasterdriver.net/Elemo/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 20:33:21 GMT -->
</html>", "UserTemp.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\UserTemp.html.twig");
    }
}
