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

/* commande/mail.html.twig */
class __TwigTemplate_668f0c7f5ee20e26bdddb3da0d7fc258fdeb437890b6786aea918f91f25d6904 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/mail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/mail.html.twig"));

        // line 1
        echo "<h3>Confirmation Of Order</h3>
<h4>Order N°";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        echo "</h4>
<br>
<br>
<p>Date of Order: ";
        // line 5
        ((twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 5, $this->source); })()), "datecomm", [], "any", false, false, false, 5)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 5, $this->source); })()), "datecomm", [], "any", false, false, false, 5), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</p>
<p>Total Price: ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 6, $this->source); })()), "prixtot", [], "any", false, false, false, 6), "html", null, true);
        echo " TND</p>
<br>
<br>
<br>
<h6>A&M Shop Services</h6>
<h7>Thank For Your Order, See You Soon </h7>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "commande/mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Confirmation Of Order</h3>
<h4>Order N°{{ commande.id }}</h4>
<br>
<br>
<p>Date of Order: {{ commande.datecomm ? commande.datecomm|date('Y-m-d') : '' }}</p>
<p>Total Price: {{ commande.prixtot }} TND</p>
<br>
<br>
<br>
<h6>A&M Shop Services</h6>
<h7>Thank For Your Order, See You Soon </h7>", "commande/mail.html.twig", "C:\\Users\\Admin\\Desktop\\piuser\\mydir\\templates\\commande\\mail.html.twig");
    }
}
