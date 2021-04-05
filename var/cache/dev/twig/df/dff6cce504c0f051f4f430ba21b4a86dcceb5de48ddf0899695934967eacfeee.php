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

/* commande/pay.html.twig */
class __TwigTemplate_23cd1d99922c4579644fe2aadb76ce48f62dc686460770627d72cf3ef3787a57 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/pay.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/pay.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "commande/pay.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <h2 style=\"text-align: center\">";
        // line 16
        echo "Finalyse Your Order";
        echo "</h2>
    <div style=\"text-align: center\">
    <button  class=\"btn\"  id=\"checkout-button\" >Secure Payment</button>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 30
        echo "    <script type=\"text/javascript\">
        // Create an instance of the Stripe object with your publishable API key
        var stripe = Stripe('pk_test_51ITAkCA1lUiT8XfWdgHiBEU0s9pUmbygluXmHIxAVX1JBdP4f1CSTlMc0d3bD4Ms2Hrqyc8OoETPbI9Oe3Bqy0nI00LszG9mlP');
        var checkoutButton = document.getElementById('checkout-button');

        checkoutButton.addEventListener('click', function() {
            // Create a new Checkout Session using the server-side endpoint you
            // created in step 3.

            fetch('/commande/create-checkout-session', {

                method: 'POST',
            })
                .then(function(response) {
                    return response.json();
                })
                .then(function(session) {
                    return stripe.redirectToCheckout({ sessionId: session.id });
                })
                .then(function(result) {
                    // If `redirectToCheckout` fails due to a browser or network
                    // error, you should display the localized error message to your
                    // customer using `error.message`.
                    if (result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(function(error) {
                    console.error('Error:', error);
                });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commande/pay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 30,  105 => 29,  83 => 16,  69 => 4,  59 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'front.html.twig' %}
{% block body %}
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <h2 style=\"text-align: center\">{{ \"Finalyse Your Order\" }}</h2>
    <div style=\"text-align: center\">
    <button  class=\"btn\"  id=\"checkout-button\" >Secure Payment</button>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
{% endblock %}

{% block script %}
    <script type=\"text/javascript\">
        // Create an instance of the Stripe object with your publishable API key
        var stripe = Stripe('pk_test_51ITAkCA1lUiT8XfWdgHiBEU0s9pUmbygluXmHIxAVX1JBdP4f1CSTlMc0d3bD4Ms2Hrqyc8OoETPbI9Oe3Bqy0nI00LszG9mlP');
        var checkoutButton = document.getElementById('checkout-button');

        checkoutButton.addEventListener('click', function() {
            // Create a new Checkout Session using the server-side endpoint you
            // created in step 3.

            fetch('/commande/create-checkout-session', {

                method: 'POST',
            })
                .then(function(response) {
                    return response.json();
                })
                .then(function(session) {
                    return stripe.redirectToCheckout({ sessionId: session.id });
                })
                .then(function(result) {
                    // If `redirectToCheckout` fails due to a browser or network
                    // error, you should display the localized error message to your
                    // customer using `error.message`.
                    if (result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(function(error) {
                    console.error('Error:', error);
                });
        });
    </script>
{% endblock %}", "commande/pay.html.twig", "C:\\Users\\21624\\Downloads\\integrationfinalpi\\mydir\\templates\\commande\\pay.html.twig");
    }
}
