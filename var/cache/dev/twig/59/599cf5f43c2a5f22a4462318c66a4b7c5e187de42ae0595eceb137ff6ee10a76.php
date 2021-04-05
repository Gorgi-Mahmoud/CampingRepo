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

/* gmusee/_form.html.twig */
class __TwigTemplate_c3bb2dca2346c513ff0b72d8f39eb6663b33a0642ea97dbaaa29e0aca1fad3f2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gmusee/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gmusee/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'widget');
        echo "

    ";
        // line 5
        echo "\t";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "attributes", [], "any", false, false, false, 5), "get", [0 => "_route"], "method", false, false, false, 5), "gmusee_edit"))) {
            // line 6
            echo "        <h2>Images</h2>
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["gmusee"]) || array_key_exists("gmusee", $context) ? $context["gmusee"] : (function () { throw new RuntimeError('Variable "gmusee" does not exist.', 7, $this->source); })()), "images", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 8
                echo "            <div>
                <img src=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 9))), "html", null, true);
                echo "\" alt=\"\" width=\"150\">

                ";
                // line 12
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gmusee_delete_image", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 12)]), "html", null, true);
                echo "\" data-delete data-token=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 12))), "html", null, true);
                echo "\">Supprimer</a>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
        }
        // line 16
        echo "<button class=\"btn\">";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 16, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "gmusee/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 17,  85 => 16,  82 => 15,  70 => 12,  65 => 9,  62 => 8,  58 => 7,  55 => 6,  52 => 5,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    {{ form_widget(form) }}

    {# Si la route est \"annonces_edit on affiche les images #}
\t{% if app.request.attributes.get('_route') == 'gmusee_edit' %}
        <h2>Images</h2>
        {% for image in gmusee.images %}
            <div>
                <img src=\"{{ asset('/uploads/'~image.name) }}\" alt=\"\" width=\"150\">

                {# On ajoute un lien permettant de supprimer une image (sera géré en Ajax) #}
                <a href=\"{{ path('gmusee_delete_image', {'id': image.id})}}\" data-delete data-token=\"{{ csrf_token('delete' ~ image.id )}}\">Supprimer</a>
            </div>
        {% endfor %}
    {% endif %}
<button class=\"btn\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}", "gmusee/_form.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\gmusee\\_form.html.twig");
    }
}
