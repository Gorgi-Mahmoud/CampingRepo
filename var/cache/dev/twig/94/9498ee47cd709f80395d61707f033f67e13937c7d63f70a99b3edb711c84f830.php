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

/* reponse/_delete_form_back.html.twig */
class __TwigTemplate_023469c02c25cab1572604cc375264b424519d99689ffab92eddaaf007adf532 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/_delete_form_back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/_delete_form_back.html.twig"));

        // line 1
        echo "
    <form method=\"post\" action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponse_delete_back", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reponseBack"]) || array_key_exists("reponseBack", $context) ? $context["reponseBack"] : (function () { throw new RuntimeError('Variable "reponseBack" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["reponseBack"]) || array_key_exists("reponseBack", $context) ? $context["reponseBack"] : (function () { throw new RuntimeError('Variable "reponseBack" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4))), "html", null, true);
        echo "\">
        <button class=\"btn\">Supprimer</button>
    </form>



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reponse/_delete_form_back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    <form method=\"post\" action=\"{{ path('reponse_delete_back', {'id': reponseBack.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reponseBack.id) }}\">
        <button class=\"btn\">Supprimer</button>
    </form>



", "reponse/_delete_form_back.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\reponse\\_delete_form_back.html.twig");
    }
}
