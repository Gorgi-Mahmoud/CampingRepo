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

/* categorie/Categorieajaxfront.html.twig */
class __TwigTemplate_1090b783f7f60a26bebc97b13d88fbc7796427ed393ad37fe4ac6ec958c37115 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/Categorieajaxfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/Categorieajaxfront.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 3
            echo "    <tr>
        <td>
            <div class=\"posts__body\">
                <div class=\"posts__item bg-f2f4f6\">
                    <div class=\"posts__section-left\">
                        <div class=\"posts__topic\">
                            <div class=\"posts__content\" >
                                <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index", ["idcategorie" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 10)]), "html", null, true);
            echo "\" class=\"pn\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nameCategorie", [], "any", false, false, false, 10), "html", null, true);
            echo "</a>

                                <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">

                                    <div class=\"btn-group\" role=\"group\">
                                        <i id=\"btnGroupDrop1\" type=\"button\" class=\"fa fa-ellipsis-h\" data-toggle=\"dropdown\" aria-hidden=\"true\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        </i>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
                                            <a class=\"dropdown-item\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">modifier</a>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"posts__tags tags\">
                                    ";
            // line 24
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["categorie"], "tag", [], "any", false, false, false, 24))) {
                // line 25
                echo "                                        <a href=\"#\" class=\"bg-36b7d7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "tag", [], "any", false, false, false, 25), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 27
            echo "                                </div>
                                <div class=\"topic__footer\">
                                    <div class=\"col-md-pull-0\" >

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-4436f8\"></i>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nameCategorie", [], "any", false, false, false, 37), "html", null, true);
            echo "</a></div>
                    </div>
                    <div class=\"posts__section-right\">
                        <div class=\"posts__users\">
                            <div>
                                <a href=\"#\" class=\"avatar\"><img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/fonts/icons/avatars/L.svg"), "html", null, true);
            echo "\" alt=\"avatar\"></a>
                            </div>
                            <div>
                                <a href=\"#\" class=\"avatar\"><img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aassets/fonts/icons/avatars/T.svg"), "html", null, true);
            echo "\" alt=\"avatar\"></a>
                            </div>
                        </div>
                        <div class=\"posts__replies\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nbrQuestion", [], "any", false, false, false, 48), "html", null, true);
            echo "</div>
                        <div class=\"posts__views\">
                            ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nbrVueCategorie", [], "any", false, false, false, 50), "html", null, true);
            echo "

                        </div>
                    </div>
                </div>

            </div>

        </td>
    </tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "categorie/Categorieajaxfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 50,  121 => 48,  115 => 45,  109 => 42,  101 => 37,  89 => 27,  83 => 25,  81 => 24,  72 => 18,  59 => 10,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% for categorie in categories %}
    <tr>
        <td>
            <div class=\"posts__body\">
                <div class=\"posts__item bg-f2f4f6\">
                    <div class=\"posts__section-left\">
                        <div class=\"posts__topic\">
                            <div class=\"posts__content\" >
                                <a href=\"{{ path('question_index', {'idcategorie': categorie.id})}}\" class=\"pn\">{{ categorie.nameCategorie }}</a>

                                <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">

                                    <div class=\"btn-group\" role=\"group\">
                                        <i id=\"btnGroupDrop1\" type=\"button\" class=\"fa fa-ellipsis-h\" data-toggle=\"dropdown\" aria-hidden=\"true\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        </i>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
                                            <a class=\"dropdown-item\" href=\"{{ path('categorie_edit', {'id': categorie.id}) }}\">modifier</a>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"posts__tags tags\">
                                    {% if categorie.tag is not null %}
                                        <a href=\"#\" class=\"bg-36b7d7\">{{ categorie.tag }}</a>
                                    {% endif %}
                                </div>
                                <div class=\"topic__footer\">
                                    <div class=\"col-md-pull-0\" >

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-4436f8\"></i>{{ categorie.nameCategorie }}</a></div>
                    </div>
                    <div class=\"posts__section-right\">
                        <div class=\"posts__users\">
                            <div>
                                <a href=\"#\" class=\"avatar\"><img src=\"{{ asset('aassets/fonts/icons/avatars/L.svg') }}\" alt=\"avatar\"></a>
                            </div>
                            <div>
                                <a href=\"#\" class=\"avatar\"><img src=\"{{ asset('aassets/fonts/icons/avatars/T.svg') }}\" alt=\"avatar\"></a>
                            </div>
                        </div>
                        <div class=\"posts__replies\">{{ categorie.nbrQuestion }}</div>
                        <div class=\"posts__views\">
                            {{ categorie.nbrVueCategorie }}

                        </div>
                    </div>
                </div>

            </div>

        </td>
    </tr>


{% endfor %}
", "categorie/Categorieajaxfront.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\categorie\\Categorieajaxfront.html.twig");
    }
}
