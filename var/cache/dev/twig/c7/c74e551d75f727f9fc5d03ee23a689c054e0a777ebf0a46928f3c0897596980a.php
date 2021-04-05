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

/* event/indexback.html.twig */
class __TwigTemplate_a6376b863c7f5c4f5045b80bf9ca8dd6e0e88b56c3214f0793430270a17fef4c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/indexback.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/indexback.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "event/indexback.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class=\"album py-5 bg-light\">
        <div class=\"container\">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class=\"row\">

                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 19
            echo "
                    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_show", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\" style=\"color: black\">
                        <div class=\"col-md-4\">
                            <div class=\"card mb-4 card-shadow \">
                                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail\" alt=\"Thumbnail [100%x225]\" style=\"height: 225px; width: 100%; display: block;\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, $context["event"], "nom_image", [], "any", false, false, false, 23))), "html", null, true);
            echo "\" data-holder-rendered=\"true\">
                                <div class=\"card-body\">
                                    <strong> <p class=\"card-text \" style=\"font-size: 20px\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "Nom", [], "any", false, false, false, 25), "html", null, true);
            echo "</p></strong>


                                    <p class=\"card-text b\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
                                    <div class=\"btn-group\">
                                    </div>
                                    <div class=\"card-footer\">
                                        <div class=\"d-flex justify-content-between align-items-center\">



                                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\"><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_participer", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">participer</a></button>
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\"><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">edit</a></button>
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_signal", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">Signaler</a></button>

                                            ";
            // line 40
            if (twig_in_filter((isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 40, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["event"], "users", [], "any", false, false, false, 40))) {
                // line 41
                echo "                                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_annuler", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\">annuler</a></button>
                                            ";
            }
            // line 43
            echo "
                                        </div>
                                        <br>
                                        ";
            // line 46
            ((twig_get_attribute($this->env, $this->source, $context["event"], "DateDebut", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "DateDebut", [], "any", false, false, false, 46), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>
        </div>
    </div>
    </br>
    </br>
    <center>
        <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_new");
        echo "\" class=\"btn btn-primary btn-lg\">
            Ajouter un nouvel évennement
        </a>
    </center>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/indexback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 60,  156 => 54,  142 => 46,  137 => 43,  131 => 41,  129 => 40,  124 => 38,  120 => 37,  116 => 36,  105 => 28,  99 => 25,  94 => 23,  88 => 20,  85 => 19,  81 => 18,  68 => 7,  58 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}




{% block body %}

    <div class=\"album py-5 bg-light\">
        <div class=\"container\">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class=\"row\">

                {% for event in events %}

                    <a href=\"{{ path('event_show', { 'id': event.id }) }}\" style=\"color: black\">
                        <div class=\"col-md-4\">
                            <div class=\"card mb-4 card-shadow \">
                                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail\" alt=\"Thumbnail [100%x225]\" style=\"height: 225px; width: 100%; display: block;\" src=\"{{ asset('assets/images/'~event.nom_image) }}\" data-holder-rendered=\"true\">
                                <div class=\"card-body\">
                                    <strong> <p class=\"card-text \" style=\"font-size: 20px\">{{ event.Nom}}</p></strong>


                                    <p class=\"card-text b\">{{ event.description}}</p>
                                    <div class=\"btn-group\">
                                    </div>
                                    <div class=\"card-footer\">
                                        <div class=\"d-flex justify-content-between align-items-center\">



                                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\"><a href=\"{{ path('event_participer', { 'id': event.id }) }}\">participer</a></button>
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\"><a href=\"{{ path('event_edit', {'id': event.id}) }}\">edit</a></button>
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\"><a href=\"{{ path('event_signal', { 'id': event.id }) }}\">Signaler</a></button>

                                            {% if  u  in event.users %}
                                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\"><a href=\"{{ path('event_annuler', { 'id': event.id }) }}\">annuler</a></button>
                                            {% endif%}

                                        </div>
                                        <br>
                                        {{ event.DateDebut ? event.DateDebut|date('Y-m-d') : '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                {% endfor %}
            </div>
        </div>
    </div>
    </br>
    </br>
    <center>
        <a href=\"{{ path('event_new') }}\" class=\"btn btn-primary btn-lg\">
            Ajouter un nouvel évennement
        </a>
    </center>
    </div>
{% endblock %}





", "event/indexback.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\event\\indexback.html.twig");
    }
}
