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

/* panier/index.html.twig */
class __TwigTemplate_6a57a36fe2d5fc04416928fc236f6e22fb203c6711c5daa5dbf18a3890ea801e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "panier/index.html.twig", 1);
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
    <br>
    <br>
    <h3>Your cart </h3>





    ";
        // line 12
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 12, $this->source); })())), 0))) {
            // line 13
            echo "    <table class=\"table\">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>

            </tr>
        </thead>
        <tbody>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 25
                echo "                <tr>
                    <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 26), "nomprod", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                    <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 27), "prixprod", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                    <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                    <td>";
                // line 29
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 29), "prixprod", [], "any", false, false, false, 29) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 29)), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\">
                          <i class=\"fas fa-trash\"></i>
                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_new", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo " \"class=\"btn float-right\">
                            <i class=\"fas text-right\"></i>
                            Order
                        </a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"3\" class=\"text-right\">Total : </td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "</td>

            </tr>

        </tfoot>
    </table>
    ";
        } else {
            // line 54
            echo "        <br>

        <br>
        <br>
        <h1 class=\"bg-danger\" style=\"text-align: center\">Your cart is empty go fill it !!</h1>
        <br>
        <br>
        <br>
        <br>
        <br>

    ";
        }
        // line 66
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 66,  155 => 54,  145 => 47,  139 => 43,  126 => 36,  118 => 31,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  98 => 25,  94 => 24,  81 => 13,  79 => 12,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}
{% block body %}

    <br>
    <br>
    <h3>Your cart </h3>





    {% if items | length > 0 %}
    <table class=\"table\">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>

            </tr>
        </thead>
        <tbody>
            {% for item in items %}
                <tr>
                    <td>{{ item.product.nomprod }}</td>
                    <td>{{ item.product.prixprod }}</td>
                    <td>{{ item.quantity }}</td>
                    <td>{{ item.product.prixprod * item.quantity }}</td>
                    <td>
                        <a href=\"{{ path('cart_remove',{'id': item.product.id}) }}\" class=\"btn btn-danger btn-sm\">
                          <i class=\"fas fa-trash\"></i>
                        </a>
                    </td>
                    <td>
                        <a href=\"{{ path('commande_new',{'id':item.product.id}) }} \"class=\"btn float-right\">
                            <i class=\"fas text-right\"></i>
                            Order
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"3\" class=\"text-right\">Total : </td>
                <td>{{ total }}</td>

            </tr>

        </tfoot>
    </table>
    {% else %}
        <br>

        <br>
        <br>
        <h1 class=\"bg-danger\" style=\"text-align: center\">Your cart is empty go fill it !!</h1>
        <br>
        <br>
        <br>
        <br>
        <br>

    {% endif %}


{% endblock %}", "panier/index.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\panier\\index.html.twig");
    }
}
