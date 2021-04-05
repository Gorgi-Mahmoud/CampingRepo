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

/* blog/aff.html.twig */
class __TwigTemplate_45706d2a775de889f2a7eca24bccd3f71994eb00142664684c4a3ee4ffc78bc3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'titre' => [$this, 'block_titre'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/aff.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/aff.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "blog/aff.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        // line 3
        echo "    ";
        $this->displayBlock('title', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Blog"]) || array_key_exists("Blog", $context) ? $context["Blog"] : (function () { throw new RuntimeError('Variable "Blog" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        echo "</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section id=\"inner_pages\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <article class=\"article_wrap single_post\">
                    <div class=\"post-thumbnail\">
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Blog"]) || array_key_exists("Blog", $context) ? $context["Blog"] : (function () { throw new RuntimeError('Variable "Blog" does not exist.', 12, $this->source); })()), "photo", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 13
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 13))), "html", null, true);
            echo " \" style=\"width: 300px;\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "

                    </div>
                    <div class=\"entry-desc\">
                        <div class=\"entry-content\">
                            <p>";
        // line 20
        echo twig_get_attribute($this->env, $this->source, (isset($context["Blog"]) || array_key_exists("Blog", $context) ? $context["Blog"] : (function () { throw new RuntimeError('Variable "Blog" does not exist.', 20, $this->source); })()), "contenu", [], "any", false, false, false, 20);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"post_tag\">
                        <span>Tag:</span>
                        ";
        // line 25
        $context["foo"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Blog"]) || array_key_exists("Blog", $context) ? $context["Blog"] : (function () { throw new RuntimeError('Variable "Blog" does not exist.', 25, $this->source); })()), "tags", [], "any", false, false, false, 25), " ");
        // line 26
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 27
            echo "                        <a href=\"#\">";
            echo twig_escape_filter($this->env, $context["s"], "html", null, true);
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
                    </div>
                    <!-- You can use Open Graph tags to customize link previews.
Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
                    <meta property=\"og:url\"           href=\"blog/";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Blog"]) || array_key_exists("Blog", $context) ? $context["Blog"] : (function () { throw new RuntimeError('Variable "Blog" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33), "html", null, true);
        echo "\" />
                    <meta property=\"og:type\"          content=\"website\" />
                    <meta property=\"og:title\"         content=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Blog"]) || array_key_exists("Blog", $context) ? $context["Blog"] : (function () { throw new RuntimeError('Variable "Blog" does not exist.', 35, $this->source); })()), "titre", [], "any", false, false, false, 35), "html", null, true);
        echo "\" />
                    <meta property=\"og:description\"   content=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Blog"]) || array_key_exists("Blog", $context) ? $context["Blog"] : (function () { throw new RuntimeError('Variable "Blog" does not exist.', 36, $this->source); })()), "contenu", [], "any", false, false, false, 36), "html", null, true);
        echo "\" />
                    <meta property=\"og:image\"         content=\"asset('uploads/'~image.name\" />

                    <!-- Load Facebook SDK for JavaScript -->
                    <div id=\"fb-root\"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = \"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0\";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                    <div class=\"fb-share-button\"
                         data-href=\"/your-page.html\"
                         data-layout=\"button_count\">
                    </div>
                </article>

                <!-- All-Comments -->
                <div class=\"articale_comments\">
                    <div id=\"comments\">
                        <h4 class=\"block-head\"> Number Of Comments : ";
        // line 58
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 58, $this->source); })())), "html", null, true);
        echo "</h4>
                        <ul class=\"commentlist\">
                            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 61
            echo "                            <li class=\"comment\">
                                <div class=\"comment-body\">
                                    <div class=\"comment-author\">

                                        <span class=\"fn\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 65), "html", null, true);
            echo "</span>
                                    </div>
                                    <div class=\"comment-meta commentmetadata\"> <a href=\"#\">Feb 23, 2020 at 12:52 pm</a> </div>
                                    <div class=\"comment-content\">
                                        <p>";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["s"], "contenu", [], "any", false, false, false, 69);
            echo "</p>

                                </div>


                            </li>
                        </ul>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                    </div>
                </div>

                <!-- Comment-Form -->
                <div class=\"comment-respond\">
                    <h4 class=\"block-head\">Leave A Comment</h4>

                        <a class=\"form-group\">
                            <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterC", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Blog"]) || array_key_exists("Blog", $context) ? $context["Blog"] : (function () { throw new RuntimeError('Variable "Blog" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)]), "html", null, true);
        echo "\"><button class=\"btn\" name=\"submit\" type=\"submit\">Post Comment</button></a>
                        </div>
                </div>
            </div>

            <aside class=\"col-md-4\">
                <div class=\"sidebar\">
                    <div class=\"sidebar_widgets\">

                    </div>

                </div>
            </aside>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/aff.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 85,  239 => 77,  225 => 69,  218 => 65,  212 => 61,  208 => 60,  203 => 58,  178 => 36,  174 => 35,  169 => 33,  163 => 29,  154 => 27,  149 => 26,  147 => 25,  139 => 20,  132 => 15,  123 => 13,  119 => 12,  111 => 6,  101 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}
{% block titre %}
    {% block title %}<title>{{ Blog.titre }}</title>{% endblock %}
{% endblock %}
{% block body %}
<section id=\"inner_pages\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <article class=\"article_wrap single_post\">
                    <div class=\"post-thumbnail\">
                        {% for image in Blog.photo %}
                            <img src=\"{{ asset('uploads/'~image.name) }} \" style=\"width: 300px;\">
                        {% endfor %}


                    </div>
                    <div class=\"entry-desc\">
                        <div class=\"entry-content\">
                            <p>{{ Blog.contenu|raw }}</p>
                        </div>
                    </div>
                    <div class=\"post_tag\">
                        <span>Tag:</span>
                        {%  set foo = Blog.tags|split(' ') %}
                        {% for s in foo %}
                        <a href=\"#\">{{ s }}</a>
                        {% endfor %}

                    </div>
                    <!-- You can use Open Graph tags to customize link previews.
Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
                    <meta property=\"og:url\"           href=\"blog/{{ Blog.id }}\" />
                    <meta property=\"og:type\"          content=\"website\" />
                    <meta property=\"og:title\"         content=\"{{ Blog.titre }}\" />
                    <meta property=\"og:description\"   content=\"{{ Blog.contenu }}\" />
                    <meta property=\"og:image\"         content=\"asset('uploads/'~image.name\" />

                    <!-- Load Facebook SDK for JavaScript -->
                    <div id=\"fb-root\"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = \"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0\";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                    <div class=\"fb-share-button\"
                         data-href=\"/your-page.html\"
                         data-layout=\"button_count\">
                    </div>
                </article>

                <!-- All-Comments -->
                <div class=\"articale_comments\">
                    <div id=\"comments\">
                        <h4 class=\"block-head\"> Number Of Comments : {{ comments|length }}</h4>
                        <ul class=\"commentlist\">
                            {% for s in comments %}
                            <li class=\"comment\">
                                <div class=\"comment-body\">
                                    <div class=\"comment-author\">

                                        <span class=\"fn\">{{ s.name }}</span>
                                    </div>
                                    <div class=\"comment-meta commentmetadata\"> <a href=\"#\">Feb 23, 2020 at 12:52 pm</a> </div>
                                    <div class=\"comment-content\">
                                        <p>{{ s.contenu|raw }}</p>

                                </div>


                            </li>
                        </ul>
                        {% endfor %}
                    </div>
                </div>

                <!-- Comment-Form -->
                <div class=\"comment-respond\">
                    <h4 class=\"block-head\">Leave A Comment</h4>

                        <a class=\"form-group\">
                            <a href=\"{{ path('ajouterC',{'id': Blog.id })}}\"><button class=\"btn\" name=\"submit\" type=\"submit\">Post Comment</button></a>
                        </div>
                </div>
            </div>

            <aside class=\"col-md-4\">
                <div class=\"sidebar\">
                    <div class=\"sidebar_widgets\">

                    </div>

                </div>
            </aside>
        </div>
    </div>
</section>
{% endblock %}", "blog/aff.html.twig", "C:\\Users\\Admin\\Desktop\\integrationfinalpi\\mydir\\templates\\blog\\aff.html.twig");
    }
}
