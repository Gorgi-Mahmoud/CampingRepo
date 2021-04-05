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

/* event/recherche1.html.twig */
class __TwigTemplate_f54025c3a06217ec3f6c3688db315a76c99ae265b932e848e3b18fa18f64b35c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/recherche1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/recherche1.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 2
            echo "<div class=\"col-md-'4\" >
        <div class=\"row\">

    <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_show", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 5)]), "html", null, true);
            echo "\" style=\"color: black\">
        <div class=\"col-md-4\">
            <div class=\"card mb-4 card-shadow \">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail\" alt=\"Thumbnail [100%x225]\" style=\"height: 225px; width: 100%; display: block;\" src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "nom_image", [], "any", false, false, false, 8), "html", null, true);
            echo "\" data-holder-rendered=\"true\">
                <div class=\"card-body\">
                    <strong> <p class=\"card-text \" style=\"font-size: 20px\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "Nom", [], "any", false, false, false, 10), "html", null, true);
            echo "</p></strong>


                    <p class=\"card-text b\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>
                    <div class=\"btn-group\">
                    </div>
                    <div class=\"card-footer\" style=\"padding: .80rem 1.5rem\">
                        <div class=\"d-flex justify-content-between align-items-center\">



                            <button type=\"button\" class=\"btn btn-sm btn-primary\"><a  href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_participer", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">participer</a></button>
                            <button type=\"button\" class=\"btn btn-sm btn-success\"><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_signal", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">Signaler</a></button>


                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\"><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_annuler", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">annuler</a></button>


                        </div>
                        <br>
                        ";
            // line 30
            ((twig_get_attribute($this->env, $this->source, $context["event"], "DateDebut", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "DateDebut", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "
                    </div>
                </div>
            </div>
        </div>
    </a>
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "event/recherche1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  99 => 30,  91 => 25,  85 => 22,  81 => 21,  70 => 13,  64 => 10,  58 => 8,  52 => 5,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for event in events %}
<div class=\"col-md-'4\" >
        <div class=\"row\">

    <a href=\"{{ path('event_show', { 'id': event.id }) }}\" style=\"color: black\">
        <div class=\"col-md-4\">
            <div class=\"card mb-4 card-shadow \">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail\" alt=\"Thumbnail [100%x225]\" style=\"height: 225px; width: 100%; display: block;\" src=\"{{ asset('assets/images/') }}{{ event.nom_image }}\" data-holder-rendered=\"true\">
                <div class=\"card-body\">
                    <strong> <p class=\"card-text \" style=\"font-size: 20px\">{{ event.Nom}}</p></strong>


                    <p class=\"card-text b\">{{ event.description}}</p>
                    <div class=\"btn-group\">
                    </div>
                    <div class=\"card-footer\" style=\"padding: .80rem 1.5rem\">
                        <div class=\"d-flex justify-content-between align-items-center\">



                            <button type=\"button\" class=\"btn btn-sm btn-primary\"><a  href=\"{{ path('event_participer', { 'id': event.id }) }}\">participer</a></button>
                            <button type=\"button\" class=\"btn btn-sm btn-success\"><a href=\"{{ path('event_signal', { 'id': event.id }) }}\">Signaler</a></button>


                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\"><a href=\"{{ path('event_annuler', { 'id': event.id }) }}\">annuler</a></button>


                        </div>
                        <br>
                        {{ event.DateDebut ? event.DateDebut|date('Y-m-d') : '' }}
                    </div>
                </div>
            </div>
        </div>
    </a>
        </div>
{% endfor %}
</div>", "event/recherche1.html.twig", "C:\\Users\\Admin\\Desktop\\piuser\\mydir\\templates\\event\\recherche1.html.twig");
    }
}
