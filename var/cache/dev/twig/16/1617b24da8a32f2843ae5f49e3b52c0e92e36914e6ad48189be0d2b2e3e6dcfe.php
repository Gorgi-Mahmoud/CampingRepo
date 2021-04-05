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

/* event/show.html.twig */
class __TwigTemplate_0b47a26768e50886ab6b320e47108b6d23c7e1a6b56e0c4b24b3fb87fa3a1593 extends Template
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
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/show.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "event/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <h1>Event</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 14, $this->source); })()), "Nom", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_debut</th>
                <td>";
        // line 18
        ((twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 18, $this->source); })()), "DateDebut", [], "any", false, false, false, 18)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 18, $this->source); })()), "DateDebut", [], "any", false, false, false, 18), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Date_fin</th>
                <td>";
        // line 22
        ((twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "dateFin", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "dateFin", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 30, $this->source); })()), "lieu", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 34, $this->source); })()), "prix", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nb_places</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 38, $this->source); })()), "nbPlaces", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 42, $this->source); })()), "type", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nb_signal</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 46, $this->source); })()), "nbSignal", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
            </tr>
            <tr>

                <!-- Preview Image -->

                <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/../../../assets/images/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 52, $this->source); })()), "nom_image", [], "any", false, false, false, 52), "html", null, true);
        echo "\" style=\"width: 200px;height: 100px\">

            </tr>
        </tbody>
    </table>
";
        // line 57
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 58
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_index");
            echo "\">back to list</a>

    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">edit</a>
    ";
        }
        // line 62
        echo "

    ";
        // line 64
        echo twig_include($this->env, $context, "event/_form.html.twig");
        echo "

<div class=\"top-campaign\">
        <table>
            <tbody>
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 70
            echo "            <tr>
               <td>
                ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "commentaire", [], "any", false, false, false, 72), "html", null, true);
            echo " </td>
                <Td>
                <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>

            </tbody>
        </table>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    <br>
    <br>
    <br>
    <br>

    <div class=\"card my-4\">
        <br>


    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 81,  196 => 74,  191 => 72,  187 => 70,  183 => 69,  175 => 64,  171 => 62,  166 => 60,  160 => 58,  158 => 57,  149 => 52,  140 => 46,  133 => 42,  126 => 38,  119 => 34,  112 => 30,  105 => 26,  98 => 22,  91 => 18,  84 => 14,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}
{% block body%}

    <h1>Event</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ event.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ event.Nom }}</td>
            </tr>
            <tr>
                <th>Date_debut</th>
                <td>{{ event.DateDebut ? event.DateDebut|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Date_fin</th>
                <td>{{ event.dateFin ? event.dateFin|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ event.description }}</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>{{ event.lieu }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ event.prix }}</td>
            </tr>
            <tr>
                <th>Nb_places</th>
                <td>{{ event.nbPlaces }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ event.type }}</td>
            </tr>
            <tr>
                <th>Nb_signal</th>
                <td>{{ event.nbSignal }}</td>
            </tr>
            <tr>

                <!-- Preview Image -->

                <img src=\"{{ asset('/../../../assets/images/') }}{{ event.nom_image}}\" style=\"width: 200px;height: 100px\">

            </tr>
        </tbody>
    </table>
{% if is_granted('ROLE_ADMIN') %}
    <a href=\"{{ path('event_index') }}\">back to list</a>

    <a href=\"{{ path('event_edit', {'id': event.id}) }}\">edit</a>
    {% endif %}


    {{ include('event/_form.html.twig') }}

<div class=\"top-campaign\">
        <table>
            <tbody>
            {% for c in comments %}
            <tr>
               <td>
                {{ c.commentaire }} </td>
                <Td>
                <a href=\"{{ path('commentaire_edit', {'id': c.id}) }}\">edit</a>
                </td>
            </tr>

            </tbody>
        </table>
            {% endfor %}
    <br>
    <br>
    <br>
    <br>

    <div class=\"card my-4\">
        <br>


    </div>
{% endblock %}

", "event/show.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\event\\show.html.twig");
    }
}
