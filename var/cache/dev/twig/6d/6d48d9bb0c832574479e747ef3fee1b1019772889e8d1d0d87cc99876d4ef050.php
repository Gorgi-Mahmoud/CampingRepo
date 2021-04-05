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

/* siteh/index1.html.twig */
class __TwigTemplate_bd2a9a1f7d9515abb525a554341b47ce695a07b6a8f22944e57bcc82b7fabcbb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "siteh/index1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "siteh/index1.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "siteh/index1.html.twig", 1);
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

        echo "siteh index";
        
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
        echo "    <!-- Inner-Banner -->
    <section id=\"inner_banner\" class=\"parallex-bg\">
        <div class=\"container\">
            <div class=\"white-text text-center div_zindex\">
                <h1>Site Historique</h1>
            </div>
        </div>
        <div class=\"dark-overlay\"></div>
    </section>
    <!-- /Inner-Banner -->


    <section id=\"inner_pages\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sitehs"]) || array_key_exists("sitehs", $context) ? $context["sitehs"] : (function () { throw new RuntimeError('Variable "sitehs" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["siteh"]) {
            // line 18
            echo "
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-8\">
                            <div class=\"row\">
                                <article class=\"col-md-12 article_wrap\">
                                    <div class=\"post-thumbnail\">

                                        <a href=\"\"><img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26))), "html", null, true);
            echo "\" alt=\"photo\"></a>
                                    </div>


                                    <div class=\"entry-desc\">
                                        <h3><a href=\"blog-single.html\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["siteh"], "nom", [], "any", false, false, false, 31), "html", null, true);
            echo " </a></h3>
                                        <div class=\"entry_meta\">
                                            <span ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["siteh"], "description", [], "any", false, false, false, 33), "html", null, true);
            echo "><i class=\"fa fa-eye\"></i> 48 Views</span>
                                            <span class=\"meta_m\"><i class=\"fa fa-heart-o\"></i> <a href=\"#\">4 Likes</a></span>
                                        </div>
                                        <div class=\"entry-content\">
                                            <p>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["siteh"], "description", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
                                        </div>
                                        <a href=\"blog-single.html\" class=\"read_btn\">Read More <i class=\"fa fa-angle-right\"></i></a>
                                    </div>
                                </article>


                            </div>
                        </div>

                        <aside class=\"col-md-4\">
                            <div class=\"sidebar\">
                                <div class=\"sidebar_widgets\">
                                    <div class=\"widget_title\">
                                        <h4>Categories</h4>
                                    </div>
                                    <ul>
                                        <li><a href=\"#\">Populaire</a></li>
                                        <li><a href=\"#\"></a></li>
                                        <li><a href=\"#\"></a></li>

                                    </ul>
                                </div>

                        </aside>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['siteh'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "siteh/index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 65,  137 => 37,  130 => 33,  125 => 31,  117 => 26,  107 => 18,  103 => 17,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}
{% block title %}siteh index{% endblock %}
{% block body %}
    <!-- Inner-Banner -->
    <section id=\"inner_banner\" class=\"parallex-bg\">
        <div class=\"container\">
            <div class=\"white-text text-center div_zindex\">
                <h1>Site Historique</h1>
            </div>
        </div>
        <div class=\"dark-overlay\"></div>
    </section>
    <!-- /Inner-Banner -->


    <section id=\"inner_pages\">
        {% for siteh in sitehs %}

                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-8\">
                            <div class=\"row\">
                                <article class=\"col-md-12 article_wrap\">
                                    <div class=\"post-thumbnail\">

                                        <a href=\"\"><img src=\"{{ asset ('/uploads/' ~ image.name ) }}\" alt=\"photo\"></a>
                                    </div>


                                    <div class=\"entry-desc\">
                                        <h3><a href=\"blog-single.html\">{{ siteh.nom }} </a></h3>
                                        <div class=\"entry_meta\">
                                            <span {{ siteh.description }}><i class=\"fa fa-eye\"></i> 48 Views</span>
                                            <span class=\"meta_m\"><i class=\"fa fa-heart-o\"></i> <a href=\"#\">4 Likes</a></span>
                                        </div>
                                        <div class=\"entry-content\">
                                            <p>{{ siteh.description }}</p>
                                        </div>
                                        <a href=\"blog-single.html\" class=\"read_btn\">Read More <i class=\"fa fa-angle-right\"></i></a>
                                    </div>
                                </article>


                            </div>
                        </div>

                        <aside class=\"col-md-4\">
                            <div class=\"sidebar\">
                                <div class=\"sidebar_widgets\">
                                    <div class=\"widget_title\">
                                        <h4>Categories</h4>
                                    </div>
                                    <ul>
                                        <li><a href=\"#\">Populaire</a></li>
                                        <li><a href=\"#\"></a></li>
                                        <li><a href=\"#\"></a></li>

                                    </ul>
                                </div>

                        </aside>
                    </div>
                </div>
            {% endfor %}

    </section>

{% endblock %}", "siteh/index1.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\siteh\\index1.html.twig");
    }
}
