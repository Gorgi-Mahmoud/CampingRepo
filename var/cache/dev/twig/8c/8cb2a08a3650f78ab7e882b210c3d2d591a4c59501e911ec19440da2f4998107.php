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

/* question/indexBackQuestion.html.twig */
class __TwigTemplate_dbf7141f6abd5deaf56c25eeee9349e9d0448e12d88d5a9e4ced4074656c54ef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/indexBackQuestion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/indexBackQuestion.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "question/indexBackQuestion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    <table class=\"table\" >
        <thead class=\"thead-dark\">
        <tr>
            <th>Id</th>
            <th>Questions</th>
            <th>nombre de vue</th>
            <th>nombre de questions</th>

        </tr>
        </thead>
        <body>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questionsBack"]) || array_key_exists("questionsBack", $context) ? $context["questionsBack"] : (function () { throw new RuntimeError('Variable "questionsBack" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>

                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponse_index_back", ["idquestion" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"pn\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 25), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "nbrVue", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "nbrReponse", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_edit_back", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i> </a>
                    


                </td>
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </body>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "question/indexBackQuestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 37,  109 => 29,  104 => 27,  100 => 26,  94 => 25,  89 => 23,  86 => 22,  82 => 21,  68 => 9,  58 => 8,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}






{% block body %}

    <table class=\"table\" >
        <thead class=\"thead-dark\">
        <tr>
            <th>Id</th>
            <th>Questions</th>
            <th>nombre de vue</th>
            <th>nombre de questions</th>

        </tr>
        </thead>
        <body>
        {% for question in questionsBack %}
            <tr>
                <td>{{ question.id }}</td>

                <td><a href=\"{{ path('reponse_index_back', {'idquestion': question.id})}}\" class=\"pn\">{{ question.question }}</a></td>
                <td>{{ question.nbrVue }}</td>
                <td>{{  question.nbrReponse}}</td>
                <td>
                    <a href=\"{{ path('question_edit_back', {'id': question.id}) }}\"><i class=\"fas fa-edit\"></i> </a>
                    


                </td>
            </tr>

        {% endfor %}
        </body>
    </table>
{% endblock %}

", "question/indexBackQuestion.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\question\\indexBackQuestion.html.twig");
    }
}
