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

/* gmusee/index1.html.twig */
class __TwigTemplate_2bbd9284eb2a15ae97d13cd48c5a3936af3f0151e9fbda0d51ab4a677b6b5a60 extends Template
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
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gmusee/index1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gmusee/index1.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "gmusee/index1.html.twig", 1);
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

        echo "<title> Gmusee </title>";
        
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

    <!-- Inner-Banner -->
    <section id=\"inner_banner\" class=\"parallex-bg\">
        <div class=\"container\">
            <div class=\"white-text text-center div_zindex\">
                <h1>Musée</h1>
            </div>
        </div>
        <div class=\"dark-overlay\"></div>
    </section>
    <!-- /Inner-Banner -->

    <section id=\"inner_pages\">
        <div class=\"d-flex align-items-center\">
            <input class=\"form-control\" type=\"search\" id=\"search\" placeholder=\"Search by Nom\">

        </div>

        <tbody align=\"left\" border=\"2\" id=\"search\">
        </tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gmusees"]) || array_key_exists("gmusees", $context) ? $context["gmusees"] : (function () { throw new RuntimeError('Variable "gmusees" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["gmusee"]) {
            // line 26
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["gmusee"], "images", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 27
                echo "            </tbody>
            <tbody id=\"all\">
            </tbody>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <div class=\"row\">
                            <article class=\"col-md-12 article_wrap\">
                                <div class=\"post-thumbnail\">
                                
                                    <a href=\"\"><img src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 38))), "html", null, true);
                echo "\" alt=\"image\"></a>
                                </div>


                                <div class=\"entry-desc\">
                                    <h3><a href=\"blog-single.html\">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gmusee"], "nom", [], "any", false, false, false, 43), "html", null, true);
                echo " </a></h3>
                                    <div class=\"entry_meta\">
                                        <span ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gmusee"], "description", [], "any", false, false, false, 45), "html", null, true);
                echo "><i class=\"fa fa-eye\"></i> 48 Views</span>
                                        <span class=\"meta_m\"><i class=\"fa fa-heart-o\"></i> <a href=\"#\">4 Likes</a></span>
                                    </div>
                                    <div class=\"entry-content\">
                                        <p>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gmusee"], "description", [], "any", false, false, false, 49), "html", null, true);
                echo "</p>
                                    </div>
                                    <a href=\"blog-single.html\" class=\"read_btn\">Read More <i class=\"fa fa-angle-right\"></i></a>
                                </div>
                            </article>


                        </div>
                    </div>

                    <aside class=\"col-md-4\">
                        <div class=\"sidebar\">
                            <div class=\"sidebar_widgets\">
                                <div class=\"widget_title\">
                                    <h4>Categories</h4>
                                </div>
                                <ul>
                                    <li><a href=\"#\">Populaire</a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>

                                </ul>
                            </div>

                    </aside>
                </div>
            </div>
            </tbody>
            <tbody id=\"search\">
            </tbody>
        ";
                // line 79
                echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["gmusees"]) || array_key_exists("gmusees", $context) ? $context["gmusees"] : (function () { throw new RuntimeError('Variable "gmusees" does not exist.', 79, $this->source); })()));
                echo "

            </section>

<script
        src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
</script>
<script>
    \$( document ).ready(function() {
        \$(\"#search\").keyup(function(e){
            let value = \$(this).val();
            \$.ajax({

                url : \"";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gmusee_show", ["id" => twig_get_attribute($this->env, $this->source, $context["gmusee"], "id", [], "any", false, false, false, 92)]), "html", null, true);
                echo "\",
                type : 'GET',
                data: {
                    searchValue: value
                },
                success : function(retour){
                    if(retour){
                        \$('#t tbody#search').empty();
                        \$.each(JSON.parse(retour), function(i, obj) {
                            \$('#t tbody#all').hide();
                            \$('#t tbody#search').append('<tr><td> '+obj.id+'  </td><td>'+obj.nom+' </td><td>'+obj.place+' </td><td>'+obj.description+' </td><td></td></tr>');
                        });
                    }
                    else
                    {
                        \$('#t tbody#all').show();
                        \$(`#t tbody#search`).empty();
                        \$('#t tbody#search').fadeIn('fast');
                    }
                },
            });
            return false;
        });
    });
</script>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gmusee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "    ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["gmusees"]) || array_key_exists("gmusees", $context) ? $context["gmusees"] : (function () { throw new RuntimeError('Variable "gmusees" does not exist.', 120, $this->source); })()));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gmusee/index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 120,  234 => 118,  202 => 92,  186 => 79,  153 => 49,  146 => 45,  141 => 43,  133 => 38,  120 => 27,  115 => 26,  111 => 25,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}
{% block title %}<title> Gmusee </title>{% endblock %}
    {% block body %}


    <!-- Inner-Banner -->
    <section id=\"inner_banner\" class=\"parallex-bg\">
        <div class=\"container\">
            <div class=\"white-text text-center div_zindex\">
                <h1>Musée</h1>
            </div>
        </div>
        <div class=\"dark-overlay\"></div>
    </section>
    <!-- /Inner-Banner -->

    <section id=\"inner_pages\">
        <div class=\"d-flex align-items-center\">
            <input class=\"form-control\" type=\"search\" id=\"search\" placeholder=\"Search by Nom\">

        </div>

        <tbody align=\"left\" border=\"2\" id=\"search\">
        </tbody>
        {% for gmusee in gmusees %}
        {% for image in gmusee.images %}
            </tbody>
            <tbody id=\"all\">
            </tbody>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <div class=\"row\">
                            <article class=\"col-md-12 article_wrap\">
                                <div class=\"post-thumbnail\">
                                
                                    <a href=\"\"><img src=\"{{ asset ('/uploads/' ~ image.name ) }}\" alt=\"image\"></a>
                                </div>


                                <div class=\"entry-desc\">
                                    <h3><a href=\"blog-single.html\">{{ gmusee.nom }} </a></h3>
                                    <div class=\"entry_meta\">
                                        <span {{ gmusee.description }}><i class=\"fa fa-eye\"></i> 48 Views</span>
                                        <span class=\"meta_m\"><i class=\"fa fa-heart-o\"></i> <a href=\"#\">4 Likes</a></span>
                                    </div>
                                    <div class=\"entry-content\">
                                        <p>{{ gmusee.description }}</p>
                                    </div>
                                    <a href=\"blog-single.html\" class=\"read_btn\">Read More <i class=\"fa fa-angle-right\"></i></a>
                                </div>
                            </article>


                        </div>
                    </div>

                    <aside class=\"col-md-4\">
                        <div class=\"sidebar\">
                            <div class=\"sidebar_widgets\">
                                <div class=\"widget_title\">
                                    <h4>Categories</h4>
                                </div>
                                <ul>
                                    <li><a href=\"#\">Populaire</a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>

                                </ul>
                            </div>

                    </aside>
                </div>
            </div>
            </tbody>
            <tbody id=\"search\">
            </tbody>
        {{ knp_pagination_render(gmusees) }}

            </section>

<script
        src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
</script>
<script>
    \$( document ).ready(function() {
        \$(\"#search\").keyup(function(e){
            let value = \$(this).val();
            \$.ajax({

                url : \"{{ path('gmusee_show', {'id': gmusee.id}) }}\",
                type : 'GET',
                data: {
                    searchValue: value
                },
                success : function(retour){
                    if(retour){
                        \$('#t tbody#search').empty();
                        \$.each(JSON.parse(retour), function(i, obj) {
                            \$('#t tbody#all').hide();
                            \$('#t tbody#search').append('<tr><td> '+obj.id+'  </td><td>'+obj.nom+' </td><td>'+obj.place+' </td><td>'+obj.description+' </td><td></td></tr>');
                        });
                    }
                    else
                    {
                        \$('#t tbody#all').show();
                        \$(`#t tbody#search`).empty();
                        \$('#t tbody#search').fadeIn('fast');
                    }
                },
            });
            return false;
        });
    });
</script>
{% endfor %}

            {% endfor %}
    {{ knp_pagination_render(gmusees) }}
{% endblock %}








", "gmusee/index1.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\gmusee\\index1.html.twig");
    }
}
