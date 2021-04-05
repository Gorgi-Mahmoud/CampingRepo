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

/* exposee/afficherEX.html.twig */
class __TwigTemplate_e52ba58ccef7881d03f122c7fd5e67d1a1ede70bb684d917f733316993c04ba3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exposee/afficherEX.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exposee/afficherEX.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "exposee/afficherEX.html.twig", 1);
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

        echo "<title>Nos Exposee</title>";
        
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
        echo "    <section id=\"inner_pages\">
    <div class=\"container\">
        <div class=\"row\" >
            <div class=\"col-md-8\">
            <article class=\"article_wrap single_post\">

               <div class=\"post-thumbnail\">

                   <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">
                   <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
                   <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
                   <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                       <!-- Indicators -->
                       <ol class=\"carousel-indicators\">
                           <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                           ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exposee"]) || array_key_exists("exposee", $context) ? $context["exposee"] : (function () { throw new RuntimeError('Variable "exposee" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 20
            echo "                           <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                       </ol>

                       <!-- Wrapper for slides -->
                       <div class=\"carousel-inner\">
                           <div class=\"item active\">
                               <img src=\"https://medias.gazette-drouot.com/prod/medias/mediatheque/15463.jpg\" alt=\"Los Angeles\">
                           </div>
                           ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exposee"]) || array_key_exists("exposee", $context) ? $context["exposee"] : (function () { throw new RuntimeError('Variable "exposee" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 30
            echo "                           <div class=\"item\">

                                   <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/products/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 32))), "html", null, true);
            echo "  \" >


                           </div>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                       </div>

                       <!-- Left and right controls -->
                       <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
                           <span class=\"glyphicon glyphicon-chevron-left\"></span>
                           <span class=\"sr-only\">Previous</span>
                       </a>
                       <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
                           <span class=\"glyphicon glyphicon-chevron-right\"></span>
                           <span class=\"sr-only\">Next</span>
                       </a>
                   </div>

                   <div class=\"our_prtners text-center\">
                   </div>
               </div>


                <aside class=\"col-md-4\">
                    <div class=\"sidebar\">
                                <div class=\"sidebar_widgets\">
                                    <div class=\"widget_title\">
                                    <h1>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ex"]) || array_key_exists("ex", $context) ? $context["ex"] : (function () { throw new RuntimeError('Variable "ex" does not exist.', 59, $this->source); })()), "nom", [], "any", false, false, false, 59), "html", null, true);
        echo " </h1>
                                    <h4>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ex"]) || array_key_exists("ex", $context) ? $context["ex"] : (function () { throw new RuntimeError('Variable "ex" does not exist.', 60, $this->source); })()), "description", [], "any", false, false, false, 60), "html", null, true);
        echo " </h4>
                                    <p>";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ex"]) || array_key_exists("ex", $context) ? $context["ex"] : (function () { throw new RuntimeError('Variable "ex" does not exist.', 61, $this->source); })()), "dateC", [], "any", false, false, false, 61), "Y-m-d"), "html", null, true);
        echo " </p>
                                    </div>
                                </div>
                    </div>
                </aside>

            </article>
            </div>
        </div>


    </div>
    </section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "exposee/afficherEX.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 61,  172 => 60,  168 => 59,  144 => 37,  133 => 32,  129 => 30,  125 => 29,  116 => 22,  109 => 20,  105 => 19,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}
{% block title %}<title>Nos Exposee</title>{% endblock %}
{% block body %}
    <section id=\"inner_pages\">
    <div class=\"container\">
        <div class=\"row\" >
            <div class=\"col-md-8\">
            <article class=\"article_wrap single_post\">

               <div class=\"post-thumbnail\">

                   <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">
                   <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
                   <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
                   <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                       <!-- Indicators -->
                       <ol class=\"carousel-indicators\">
                           <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                           {% for image in exposee %}
                           <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                           {% endfor %}
                       </ol>

                       <!-- Wrapper for slides -->
                       <div class=\"carousel-inner\">
                           <div class=\"item active\">
                               <img src=\"https://medias.gazette-drouot.com/prod/medias/mediatheque/15463.jpg\" alt=\"Los Angeles\">
                           </div>
                           {% for image in exposee %}
                           <div class=\"item\">

                                   <img src=\"{{ asset('images/products/'~image.name)  }}  \" >


                           </div>
                           {% endfor %}
                       </div>

                       <!-- Left and right controls -->
                       <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
                           <span class=\"glyphicon glyphicon-chevron-left\"></span>
                           <span class=\"sr-only\">Previous</span>
                       </a>
                       <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
                           <span class=\"glyphicon glyphicon-chevron-right\"></span>
                           <span class=\"sr-only\">Next</span>
                       </a>
                   </div>

                   <div class=\"our_prtners text-center\">
                   </div>
               </div>


                <aside class=\"col-md-4\">
                    <div class=\"sidebar\">
                                <div class=\"sidebar_widgets\">
                                    <div class=\"widget_title\">
                                    <h1>{{ ex.nom }} </h1>
                                    <h4>{{ ex.description }} </h4>
                                    <p>{{ ex.dateC|date('Y-m-d') }} </p>
                                    </div>
                                </div>
                    </div>
                </aside>

            </article>
            </div>
        </div>


    </div>
    </section>


{% endblock %}", "exposee/afficherEX.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\exposee\\afficherEX.html.twig");
    }
}
