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

/* blog/index.html.twig */
class __TwigTemplate_83e2978e7b1f9b70c05e2426531451fc8e6c2d50afef8c4386aebaf0ec733ab5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "blog/index.html.twig", 1);
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
        echo "    <input type=\"text\" name=\"search\" class=\"form-control js-user-search\" placeholder=\"Rechercher\">
    <input type=\"submit\" value=\"Search\" class=\"btn btn-block\">

<!-- Blog -->
<section id=\"inner_pages\">
    <div class=\"dropdown\">
        <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Sort
        </button>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
            <a class=\"dropdown-item\" href=\"/blog\">Sort by Flush</a>
            <a class=\"dropdown-item\" href=\"/blogV\">Sort by Vues</a>
            <a class=\"dropdown-item\" href=\"/blogD\">Sort by Date</a>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\" id=\"entitiesNavv\">
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Blog"]) || array_key_exists("Blog", $context) ? $context["Blog"] : (function () { throw new RuntimeError('Variable "Blog" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 23
            echo "                        <article  class=\"col-sm-6 article_wrap\">
                            <div class=\"post-thumbnail\">
                                ";
            // line 25
            $context["fa"] = 0;
            // line 26
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["s"], "photo", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 27
                echo "                                    ";
                if ((0 === twig_compare((isset($context["fa"]) || array_key_exists("fa", $context) ? $context["fa"] : (function () { throw new RuntimeError('Variable "fa" does not exist.', 27, $this->source); })()), 0))) {
                    // line 28
                    echo "                                    <a href=\"blog/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 28), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 28))), "html", null, true);
                    echo " \" style=\"width: 150px;\"></a>
                                    ";
                    // line 29
                    $context["fa"] = 7;
                    // line 30
                    echo "                                    ";
                }
                // line 31
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
                            <div class=\"entry-desc\">
                                <h3><a href=\"blog/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "titre", [], "any", false, false, false, 34), "html", null, true);
            echo "</a></h3>
                                <div class=\"entry-content\">
                                    <p>";
            // line 36
            (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "contenu", [], "any", false, false, false, 36)), 50))) ? (print (twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "contenu", [], "any", false, false, false, 36), 0, 50) . "..."), "html", null, true))) : (print (twig_get_attribute($this->env, $this->source, $context["s"], "contenu", [], "any", false, false, false, 36))));
            echo "</p>
                                </div>
                                <a href=\"/blog/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\" class=\"read_btn\">Read More <i class=\"fa fa-angle-right\"></i></a>
                            </div>
                        </article>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </div>
            </div>

            <aside class=\"col-md-4\">
                <div class=\"sidebar\">
                    <div class=\"sidebar_widgets\">
                        <div class=\"widget_title\">
                            <h4>Tags</h4>
                        </div>
                        <ul>
                            ";
        // line 52
        $context["foo"] = [];
        // line 53
        echo "
                            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Blog"]) || array_key_exists("Blog", $context) ? $context["Blog"] : (function () { throw new RuntimeError('Variable "Blog" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 55
            echo "                            ";
            $context["t"] = twig_split_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "tags", [], "any", false, false, false, 55)), " ");
            // line 56
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 57
                echo "                                ";
                $context["foo"] = twig_array_merge((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 57, $this->source); })()), [0 => $context["i"]]);
                // line 58
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
                                ";
        // line 62
        $context["newArray"] = [];
        // line 63
        echo "
                                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 65
            echo "                                    ";
            if (!twig_in_filter(twig_trim_filter($context["name"], " "), (isset($context["newArray"]) || array_key_exists("newArray", $context) ? $context["newArray"] : (function () { throw new RuntimeError('Variable "newArray" does not exist.', 65, $this->source); })()))) {
                // line 66
                echo "                                        ";
                $context["newArray"] = twig_array_merge((isset($context["newArray"]) || array_key_exists("newArray", $context) ? $context["newArray"] : (function () { throw new RuntimeError('Variable "newArray" does not exist.', 66, $this->source); })()), [0 => $context["name"]]);
                // line 67
                echo "                                        <li><a href=\"/blogT/";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</a></li>

                                    ";
            }
            // line 70
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "




                        </ul>
                    </div>
                    ";
        // line 78
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["Blog"]) || array_key_exists("Blog", $context) ? $context["Blog"] : (function () { throw new RuntimeError('Variable "Blog" does not exist.', 78, $this->source); })()));
        echo "


                </div>
            </aside>
        </div>
    </div>
</section>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            var searchRequest = null;
            \$(\".js-user-search\").keyup(function () {
                var minlength = 1;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNavv\").html('');
                console.log(value.length)

                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_ajax");
        echo "\",
                    data: {
                        'q': value
                    },
                    dataType: \"text\",
                    success: function (msg) {
                        //we need to check if the value is the same
                        if (value == \$(that).val()) {
                            var result = JSON.parse(msg);
                            \$.each(result, function (key, arr) {
                                \$.each(arr, function (id, value) {
                                    if (key == 'entities') {
                                        if (id != 'error') {
                                            ";
        // line 115
        echo "
                                            var contenu=value[0];
                                            var id=value[1];
                                            var titre=value[2]
                                            var date=value[3]['date'];
                                            var photo=value[4];
                                            ";
        // line 122
        echo "                                            entitySelector.append(
                                                +'<article  class=\"col-sm-6 article_wrap\">'
                                                +'<div class=\"post-thumbnail\">'
                                                +'<div class=\"entry-desc\">'
                                                +'<h3>'+titre+'</h3>'
                                                +'<div class=\"entry-content\">'
                                                +'<p>'+contenu+'</p>'
                                                +'</div>'
                                            +'<i class=\"fa fa-angle-right\"></i>'
                                        +'</div>'
                                        +'</article>'
                                                +'  </div>'

                                            );
                                            // document.getElementById(\"myImgTag\"+id).src= assetsDir + '/' + photo.name;
                                            // document.getElementById(\"mypath\"+idExposee).href= afficheEX +'/'+idExposee;





                                        } else {
                                            entitySelector.append('<li class=\"errorLi\">' + value + '</li>');
                                        }
                                    }
                                });
                            });


                        }
                    }
                });

            });
        });
    </script>
<!-- /Blog -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 122,  283 => 115,  267 => 101,  249 => 86,  238 => 78,  229 => 71,  223 => 70,  214 => 67,  211 => 66,  208 => 65,  204 => 64,  201 => 63,  199 => 62,  196 => 61,  189 => 59,  183 => 58,  180 => 57,  175 => 56,  172 => 55,  168 => 54,  165 => 53,  163 => 52,  151 => 42,  141 => 38,  136 => 36,  129 => 34,  125 => 32,  119 => 31,  116 => 30,  114 => 29,  107 => 28,  104 => 27,  99 => 26,  97 => 25,  93 => 23,  89 => 22,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}
{% block body %}
    <input type=\"text\" name=\"search\" class=\"form-control js-user-search\" placeholder=\"Rechercher\">
    <input type=\"submit\" value=\"Search\" class=\"btn btn-block\">

<!-- Blog -->
<section id=\"inner_pages\">
    <div class=\"dropdown\">
        <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Sort
        </button>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
            <a class=\"dropdown-item\" href=\"/blog\">Sort by Flush</a>
            <a class=\"dropdown-item\" href=\"/blogV\">Sort by Vues</a>
            <a class=\"dropdown-item\" href=\"/blogD\">Sort by Date</a>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\" id=\"entitiesNavv\">
                    {% for s in Blog %}
                        <article  class=\"col-sm-6 article_wrap\">
                            <div class=\"post-thumbnail\">
                                {% set fa =0 %}
                                {% for image in s.photo %}
                                    {% if fa ==0 %}
                                    <a href=\"blog/{{ s.id }}\"><img src=\"{{ asset('uploads/'~image.name) }} \" style=\"width: 150px;\"></a>
                                    {% set fa =7 %}
                                    {% endif %}
                                {% endfor %}

                            <div class=\"entry-desc\">
                                <h3><a href=\"blog/{{ s.id }}\">{{ s.titre }}</a></h3>
                                <div class=\"entry-content\">
                                    <p>{{ s.contenu |length > 50 ? s.contenu|raw|slice(0, 50) ~ '...' : s.contenu|raw  }}</p>
                                </div>
                                <a href=\"/blog/{{ s.id }}\" class=\"read_btn\">Read More <i class=\"fa fa-angle-right\"></i></a>
                            </div>
                        </article>
                    {% endfor %}
                </div>
            </div>

            <aside class=\"col-md-4\">
                <div class=\"sidebar\">
                    <div class=\"sidebar_widgets\">
                        <div class=\"widget_title\">
                            <h4>Tags</h4>
                        </div>
                        <ul>
                            {% set foo = [] %}

                            {% for s in Blog %}
                            {% set t = s.tags|upper|split(' ') %}
                            {% for i in t %}
                                {% set foo = foo|merge([i])%}
                            {% endfor %}

                            {% endfor %}

                                {% set newArray = [] %}

                                {% for name in foo %}
                                    {% if name|trim(' ') not in newArray %}
                                        {% set newArray = newArray|merge([name]) %}
                                        <li><a href=\"/blogT/{{ name }}\">{{ name }}</a></li>

                                    {% endif %}
                                {% endfor %}





                        </ul>
                    </div>
                    {{ knp_pagination_render(Blog) }}


                </div>
            </aside>
        </div>
    </div>
</section>
    <script src=\"{{ asset('assets/js/jquery.js') }}\"></script>
    <script>
        \$(document).ready(function () {
            var searchRequest = null;
            \$(\".js-user-search\").keyup(function () {
                var minlength = 1;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNavv\").html('');
                console.log(value.length)

                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"GET\",
                    url: \"{{ path('search_ajax') }}\",
                    data: {
                        'q': value
                    },
                    dataType: \"text\",
                    success: function (msg) {
                        //we need to check if the value is the same
                        if (value == \$(that).val()) {
                            var result = JSON.parse(msg);
                            \$.each(result, function (key, arr) {
                                \$.each(arr, function (id, value) {
                                    if (key == 'entities') {
                                        if (id != 'error') {
                                            {#var assetsDir = \"{{ asset('uploads') }}\";#}

                                            var contenu=value[0];
                                            var id=value[1];
                                            var titre=value[2]
                                            var date=value[3]['date'];
                                            var photo=value[4];
                                            {#var go = \"{{ path('afficheEX',{'id': }) }}\"#}
                                            entitySelector.append(
                                                +'<article  class=\"col-sm-6 article_wrap\">'
                                                +'<div class=\"post-thumbnail\">'
                                                +'<div class=\"entry-desc\">'
                                                +'<h3>'+titre+'</h3>'
                                                +'<div class=\"entry-content\">'
                                                +'<p>'+contenu+'</p>'
                                                +'</div>'
                                            +'<i class=\"fa fa-angle-right\"></i>'
                                        +'</div>'
                                        +'</article>'
                                                +'  </div>'

                                            );
                                            // document.getElementById(\"myImgTag\"+id).src= assetsDir + '/' + photo.name;
                                            // document.getElementById(\"mypath\"+idExposee).href= afficheEX +'/'+idExposee;





                                        } else {
                                            entitySelector.append('<li class=\"errorLi\">' + value + '</li>');
                                        }
                                    }
                                });
                            });


                        }
                    }
                });

            });
        });
    </script>
<!-- /Blog -->
{% endblock %}", "blog/index.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\blog\\index.html.twig");
    }
}
