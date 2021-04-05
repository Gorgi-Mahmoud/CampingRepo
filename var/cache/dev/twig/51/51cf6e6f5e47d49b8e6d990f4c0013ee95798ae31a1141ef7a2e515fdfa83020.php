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
class __TwigTemplate_e56b6ab197a68db62e47f7154a9ebdfa4121bed104eedc364fd568243bd4fa2e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "blog/index.html.twig", 1);
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

        echo "<title>Blog</title>";
        
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
        echo "    <input type=\"text\" name=\"search\" class=\"form-control js-user-search\" placeholder=\"Rechercher\">
    <input type=\"submit\" value=\"Search\" class=\"btn btn-block\">

<!-- Blog -->
<section id=\"inner_pages\">
    <div class=\"dropdown\">
            <a class=\"read_btn\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Sort by Flush</a><br>
            <a class=\"read_btn\"  href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Topvue");
        echo "\">Sort by Vues</a><br>
            <a class=\"read_btn\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Topnews");
        echo "\">Sort by Date</a>

    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\" id=\"entitiesNavv\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Blog"]) || array_key_exists("Blog", $context) ? $context["Blog"] : (function () { throw new RuntimeError('Variable "Blog" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 20
            echo "                        <article  class=\"col-sm-6 article_wrap\">
                            <div class=\"post-thumbnail\">
                                ";
            // line 22
            $context["fa"] = 0;
            // line 23
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["s"], "photo", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 24
                echo "                                    ";
                if ((0 === twig_compare((isset($context["fa"]) || array_key_exists("fa", $context) ? $context["fa"] : (function () { throw new RuntimeError('Variable "fa" does not exist.', 24, $this->source); })()), 0))) {
                    // line 25
                    echo "                                    <a href=\"blog/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 25), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 25))), "html", null, true);
                    echo " \" style=\"width: 150px;\"></a>
                                    ";
                    // line 26
                    $context["fa"] = 7;
                    // line 27
                    echo "                                    ";
                }
                // line 28
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "
                            <div class=\"entry-desc\">
                                <h3><a href=\"blog/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "titre", [], "any", false, false, false, 31), "html", null, true);
            echo "</a></h3>
                                <div class=\"entry-content\">
                                    <p>";
            // line 33
            (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "contenu", [], "any", false, false, false, 33)), 50))) ? (print (twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "contenu", [], "any", false, false, false, 33), 0, 50) . "..."), "html", null, true))) : (print (twig_get_attribute($this->env, $this->source, $context["s"], "contenu", [], "any", false, false, false, 33))));
            echo "</p>
                                </div>
                                <a href=\"/b/blog/";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\" class=\"read_btn\">Read More <i class=\"fa fa-angle-right\"></i></a>
                            </div>
                        </article>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
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
        // line 49
        $context["foo"] = [];
        // line 50
        echo "
                            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Blog"]) || array_key_exists("Blog", $context) ? $context["Blog"] : (function () { throw new RuntimeError('Variable "Blog" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 52
            echo "                            ";
            $context["t"] = twig_split_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "tags", [], "any", false, false, false, 52)), " ");
            // line 53
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 53, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 54
                echo "                                ";
                $context["foo"] = twig_array_merge((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 54, $this->source); })()), [0 => $context["i"]]);
                // line 55
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
                                ";
        // line 59
        $context["newArray"] = [];
        // line 60
        echo "
                                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 62
            echo "                                    ";
            if (!twig_in_filter(twig_trim_filter($context["name"], " "), (isset($context["newArray"]) || array_key_exists("newArray", $context) ? $context["newArray"] : (function () { throw new RuntimeError('Variable "newArray" does not exist.', 62, $this->source); })()))) {
                // line 63
                echo "                                        ";
                $context["newArray"] = twig_array_merge((isset($context["newArray"]) || array_key_exists("newArray", $context) ? $context["newArray"] : (function () { throw new RuntimeError('Variable "newArray" does not exist.', 63, $this->source); })()), [0 => $context["name"]]);
                // line 64
                echo "                                        <li><a href=\"/b/blogT/";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</a></li>

                                    ";
            }
            // line 67
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "




                        </ul>
                    </div>
                    ";
        // line 75
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["Blog"]) || array_key_exists("Blog", $context) ? $context["Blog"] : (function () { throw new RuntimeError('Variable "Blog" does not exist.', 75, $this->source); })()));
        echo "


                </div>
            </aside>
        </div>
    </div>
</section>
    <script src=\"";
        // line 83
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
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_ajaxblog");
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
        // line 112
        echo "
                                            var contenu=value[0];
                                            var id=value[1];
                                            var titre=value[2]
                                            var date=value[3]['date'];
                                            var photo=value[4];
                                            ";
        // line 119
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
        return array (  316 => 119,  308 => 112,  292 => 98,  274 => 83,  263 => 75,  254 => 68,  248 => 67,  239 => 64,  236 => 63,  233 => 62,  229 => 61,  226 => 60,  224 => 59,  221 => 58,  214 => 56,  208 => 55,  205 => 54,  200 => 53,  197 => 52,  193 => 51,  190 => 50,  188 => 49,  176 => 39,  166 => 35,  161 => 33,  154 => 31,  150 => 29,  144 => 28,  141 => 27,  139 => 26,  132 => 25,  129 => 24,  124 => 23,  122 => 22,  118 => 20,  114 => 19,  104 => 12,  100 => 11,  96 => 10,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}
{% block title %}<title>Blog</title>{% endblock %}
{% block body %}
    <input type=\"text\" name=\"search\" class=\"form-control js-user-search\" placeholder=\"Rechercher\">
    <input type=\"submit\" value=\"Search\" class=\"btn btn-block\">

<!-- Blog -->
<section id=\"inner_pages\">
    <div class=\"dropdown\">
            <a class=\"read_btn\" href=\"{{ path('blog') }}\">Sort by Flush</a><br>
            <a class=\"read_btn\"  href=\"{{ path('Topvue') }}\">Sort by Vues</a><br>
            <a class=\"read_btn\" href=\"{{ path('Topnews') }}\">Sort by Date</a>

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
                                <a href=\"/b/blog/{{ s.id }}\" class=\"read_btn\">Read More <i class=\"fa fa-angle-right\"></i></a>
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
                                        <li><a href=\"/b/blogT/{{ name }}\">{{ name }}</a></li>

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
                    url: \"{{ path('search_ajaxblog') }}\",
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
