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

/* utilis/profil.html.twig */
class __TwigTemplate_fe93ed1f3ad81b46c589cfd2734221ea9b6a590dfc4b7547fd455b9bd1fd09a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilis/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilis/profil.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "utilis/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Profile</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <!-- Titlebar -->
        <div id=\"titlebar\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>My Profile</h2>
                    <!-- Breadcrumbs -->
                    <nav id=\"breadcrumbs\">
                        <ul>
                            <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exposee");
        echo "\">Let me See how Happy are You?</a></li>
                            <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("");
        echo "\">Home</a></li>
                            <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dprofile", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\">Delete my account</a></li>
                            <li>My Profile</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Profile -->
            <div class=\"col-lg-12 col-md-12\">
                <div class=\"dashboard-list-box\">
                    <div class=\"user_image\">
                        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/products/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "image", [], "any", false, false, false, 28))), "html", null, true);
        echo " \" alt=\"image\"  style=\"width: 300px;\">
                        <div class=\"buttons-to-right\">
                            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateprofile", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        echo "\" class=\"button gray\"><i class=\"fa fa-pencil\"></i> Edit Profile</a>
                        </div>
                    </div>
                    <div class=\"user_info\">
                        <ul>
                            <li><span>Name:</span>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), "html", null, true);
        echo "</li>
                            <li><span>Email:</span> ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), "html", null, true);
        echo "</li>
                            <li><span>Phone:</span>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "tel", [], "any", false, false, false, 37), "html", null, true);
        echo "</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "utilis/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 37,  140 => 36,  136 => 35,  128 => 30,  123 => 28,  107 => 15,  103 => 14,  99 => 13,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}
{% block title %}<title>Profile</title>{% endblock %}
{% block body %}
    <div class=\"container\">
        <!-- Titlebar -->
        <div id=\"titlebar\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>My Profile</h2>
                    <!-- Breadcrumbs -->
                    <nav id=\"breadcrumbs\">
                        <ul>
                            <li><a href=\"{{ path('exposee') }}\">Let me See how Happy are You?</a></li>
                            <li><a href=\"{{ path('') }}\">Home</a></li>
                            <li><a href=\"{{ path('dprofile',{'id':user.id }) }}\">Delete my account</a></li>
                            <li>My Profile</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Profile -->
            <div class=\"col-lg-12 col-md-12\">
                <div class=\"dashboard-list-box\">
                    <div class=\"user_image\">
                        <img src=\"{{ asset('images/products/'~user.image) }} \" alt=\"image\"  style=\"width: 300px;\">
                        <div class=\"buttons-to-right\">
                            <a href=\"{{ path('updateprofile',{'id':user.id }) }}\" class=\"button gray\"><i class=\"fa fa-pencil\"></i> Edit Profile</a>
                        </div>
                    </div>
                    <div class=\"user_info\">
                        <ul>
                            <li><span>Name:</span>{{ user.name }}</li>
                            <li><span>Email:</span> {{ user.email }}</li>
                            <li><span>Phone:</span>{{ user.tel }}</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>



{% endblock %}", "utilis/profil.html.twig", "C:\\Users\\Admin\\Desktop\\piuser\\mydir\\templates\\utilis\\profil.html.twig");
    }
}
