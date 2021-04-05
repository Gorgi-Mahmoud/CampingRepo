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

/* produit/produitajax.html.twig */
class __TwigTemplate_ce90f6561860966d74fada43d56a47b3d2e92ba4feea91f13a1839c2b1310752 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/produitajax.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/produitajax.html.twig"));

        // line 1
        echo "<div class=\"tz-product row grid-eff\">

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listproduit"]) || array_key_exists("listproduit", $context) ? $context["listproduit"] : (function () { throw new RuntimeError('Variable "listproduit" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "    <div class=\"product-item col-md-4 col-sm-6\">
        <div class=\"item\">
            <div class=\"product-item-inner\">
                <div class=\"product-thumb\">
                    <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, $context["i"], "imgprod", [], "any", false, false, false, 8))), "html", null, true);
            echo "\">
                </div>
                <div class=\"product-info\">
                    <h4><a href=\"shop.html\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nomprod", [], "any", false, false, false, 11), "html", null, true);
            echo "</a></h4>
                    <span class=\"p-meta\">
                                                <span class=\"p-price\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "prixprod", [], "any", false, false, false, 13), "html", null, true);
            echo " TND</span>
                                                <span class=\"p-vote\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star-half-o\"></i>
                                                </span>
                                            </span>
                    <span class=\"p-color\">
                                                <i class=\"fa fa-circle light-blue\"></i>
                                                <i class=\"fa fa-circle orange\"></i>
                                                <i class=\"fa fa-circle blueviolet\"></i>
                                                <i class=\"fa fa-circle orange-dark\"></i>
                                                <i class=\"fa fa-circle steelblue\"></i>
                                            </span>

                    <span class=\"p-mask\">
                                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Paniers", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo " \"class=\"add-to-cart\">Add To Cart</a>
                                                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Paniers", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo " \"class=\"add-to-cart\">Buy</a>

                                            </span>
                </div>
            </div>
        </div>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "produit/produitajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 41,  93 => 32,  89 => 31,  68 => 13,  63 => 11,  57 => 8,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tz-product row grid-eff\">

{% for i in listproduit %}
    <div class=\"product-item col-md-4 col-sm-6\">
        <div class=\"item\">
            <div class=\"product-item-inner\">
                <div class=\"product-thumb\">
                    <img src=\"{{ asset('uploads/photos/' ~ i.imgprod) }}\">
                </div>
                <div class=\"product-info\">
                    <h4><a href=\"shop.html\">{{ i.nomprod }}</a></h4>
                    <span class=\"p-meta\">
                                                <span class=\"p-price\">{{ i.prixprod }} TND</span>
                                                <span class=\"p-vote\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star-half-o\"></i>
                                                </span>
                                            </span>
                    <span class=\"p-color\">
                                                <i class=\"fa fa-circle light-blue\"></i>
                                                <i class=\"fa fa-circle orange\"></i>
                                                <i class=\"fa fa-circle blueviolet\"></i>
                                                <i class=\"fa fa-circle orange-dark\"></i>
                                                <i class=\"fa fa-circle steelblue\"></i>
                                            </span>

                    <span class=\"p-mask\">
                                                <a href=\"{{ path('Paniers',{'id':i.id}) }} \"class=\"add-to-cart\">Add To Cart</a>
                                                <a href=\"{{ path('Paniers',{'id':i.id}) }} \"class=\"add-to-cart\">Buy</a>

                                            </span>
                </div>
            </div>
        </div>
    </div>

{% endfor %}
</div>", "produit/produitajax.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\produit\\produitajax.html.twig");
    }
}
