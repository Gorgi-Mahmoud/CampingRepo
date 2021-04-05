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

/* exposee/affiche.html.twig */
class __TwigTemplate_fd9b7c404b3f5abfdb0734312b83c0fc08d29e775199efa7f9a9362d4e25bb34 extends Template
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
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exposee/affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exposee/affiche.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "exposee/affiche.html.twig", 1);
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

        echo "<title> Exposee</title>";
        
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
        echo "
    <button><a  href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterEx");
        echo "\"> ADD <i class=\"fa fa-align-justify\"></i></a></button>
    <button><a  href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trie");
        echo "\"> TRIE BY Nom <i class=\"fa fa-align-justify\"></i></a></button>

    <table border=\"1\">
        <tr>
            <th>Id</th>
            <th>image</th>
            <th>date</th>
            <th>nom</th>
            <th>description</th>
        </tr>
        <tr ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exposee"]) || array_key_exists("exposee", $context) ? $context["exposee"] : (function () { throw new RuntimeError('Variable "exposee" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo ">
            <th>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Id", [], "any", false, false, false, 17), "html", null, true);
            echo "</th>

            <th > ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["c"], "photo", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 20
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/products/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 20))), "html", null, true);
                echo " \" style=\"width: 50px;\">
                    <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_delete_image", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 21), "idPhotos" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\" data-delete data-token=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 21))), "html", null, true);
                echo "\">Supprimer</a>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            <th>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "dateC", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true);
            echo "</th>
            <th>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 24), "html", null, true);
            echo "</th>
            <th>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "description", [], "any", false, false, false, 25), "html", null, true);
            echo "</th>

            <th><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("d", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\"> Delete</a></th>

            <th><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">Update</a> </th>

        </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo ">

    </table>
    <div class=\"our_prtners text-center\">
        ";
        // line 35
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["exposee"]) || array_key_exists("exposee", $context) ? $context["exposee"] : (function () { throw new RuntimeError('Variable "exposee" does not exist.', 35, $this->source); })()));
        echo "
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "exposee/affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 35,  166 => 31,  157 => 29,  152 => 27,  147 => 25,  143 => 24,  138 => 23,  128 => 21,  123 => 20,  119 => 19,  114 => 17,  108 => 16,  95 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}
{% block title %}<title> Exposee</title>{% endblock %}
{% block body %}

    <button><a  href=\"{{ path('ajouterEx') }}\"> ADD <i class=\"fa fa-align-justify\"></i></a></button>
    <button><a  href=\"{{ path('trie') }}\"> TRIE BY Nom <i class=\"fa fa-align-justify\"></i></a></button>

    <table border=\"1\">
        <tr>
            <th>Id</th>
            <th>image</th>
            <th>date</th>
            <th>nom</th>
            <th>description</th>
        </tr>
        <tr {% for c in exposee %}>
            <th>{{ c.Id }}</th>

            <th > {% for image in c.photo %}
                    <img src=\"{{ asset('images/products/'~image.name) }} \" style=\"width: 50px;\">
                    <a href=\"{{ path('annonces_delete_image', {id: c.id , idPhotos:image.id })}}\" data-delete data-token=\"{{ csrf_token('delete' ~ image.id )}}\">Supprimer</a>
                  {% endfor %}
            <th>{{ c.dateC|date('Y-m-d') }}</th>
            <th>{{ c.nom }}</th>
            <th>{{ c.description }}</th>

            <th><a href=\"{{ path('d',{'id':c.id}) }}\"> Delete</a></th>

            <th><a href=\"{{ path('update',{'id':c.id }) }}\">Update</a> </th>

        </tr {% endfor %}>

    </table>
    <div class=\"our_prtners text-center\">
        {{ knp_pagination_render(exposee) }}
    </div>



{% endblock %}
", "exposee/affiche.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\exposee\\affiche.html.twig");
    }
}
