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

/* homepage.html.twig */
class __TwigTemplate_feb30d7889fb9d173aea7a7f1686d4367169f188eabcedbe769ea4136fbd2d4a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage.html.twig", 1);
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
        echo "<h1> Search </h1>
    <section class=\"ui container\">

        <div class=\"field\">
            <label>Key word</label>
            <input type=\"text\" name=\"keyWord\">
        </div>

        <button class=\"ui button\">Send</button>

    </section>
";
        // line 19
        echo "    <div id=\"videos\">

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "<script language = \"javascript\"
        src = \"https://code.jquery.com/jquery-3.5.1.min.js\"></script>

    <script language = \"javascript\">
        \$(document).ready(function(){
            \$(\".button\").on(\"click\", function(event){
                \$.post({
                    url:        '/keyWordQuery',
                    data:       {\"keyword\": \$('.keyWord').val()},
                    type:       'POST',
                    dataType:   'json',

                    success: function(data, status) {
                        // console.log(data);
                        for(i = 0; i < data.length; i += 3) {
                            video1 = data[i];
                            video2 = data[i + 1];
                            video3 = data[i + 2];

                            let e = \$('<div class=\"row\">' +
                                '<div class=\"col-md-4\">' +
                                    '<h2>' + video1.title + '</h2>' +
                                    '<p>' + video1.description + '</p>' +
                                    '<img src=\"'+ video1.thumbnails.default.url +'\" />' +
                                '</div>' +
                                '<div class=\"col-md-4\">' +
                                    '<h2>' + video2.title + '</h2>' +
                                    '<p>' + video2.description + '</p>' +
                                    '<img src=\"'+ video2.thumbnails.default.url +'\" />' +
                                '</div>' +
                                '<div class=\"col-md-4\">' +
                                    '<h2>' + video3.title + '</h2>' +
                                    '<p>' + video3.description + '</p>' +
                                    '<img src=\"'+ video3.thumbnails.default.url +'\" />' +
                                '</div>' +
                                '</div><hr>');
                            \$('#videos').append(e);
                            //
                            // \$('#name', e).html(student['name']);
                            // \$('#address', e).html(student['address']);
                            // \$('#student').append(e);
                        }
                    },
                    error : function(xhr, textStatus, errorThrown) {
                        alert(errorThrown);
                    }
                });
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  95 => 24,  82 => 19,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<h1> Search </h1>
    <section class=\"ui container\">

        <div class=\"field\">
            <label>Key word</label>
            <input type=\"text\" name=\"keyWord\">
        </div>

        <button class=\"ui button\">Send</button>

    </section>
{#{% for video in videos %}#}
{#    <p>{{ video.title }}</p>#}
{#    <p>{{ video.description }}</p>#}
{#    <img src=\"{{ video.thumbnails.default.url }}\" width=\"{{ video.thumbnails.default.width }}\" height=\"{{ video.thumbnails.default.height }}\">#}
    <div id=\"videos\">

    </div>
{% endblock %}

{% block javascripts %}
<script language = \"javascript\"
        src = \"https://code.jquery.com/jquery-3.5.1.min.js\"></script>

    <script language = \"javascript\">
        \$(document).ready(function(){
            \$(\".button\").on(\"click\", function(event){
                \$.post({
                    url:        '/keyWordQuery',
                    data:       {\"keyword\": \$('.keyWord').val()},
                    type:       'POST',
                    dataType:   'json',

                    success: function(data, status) {
                        // console.log(data);
                        for(i = 0; i < data.length; i += 3) {
                            video1 = data[i];
                            video2 = data[i + 1];
                            video3 = data[i + 2];

                            let e = \$('<div class=\"row\">' +
                                '<div class=\"col-md-4\">' +
                                    '<h2>' + video1.title + '</h2>' +
                                    '<p>' + video1.description + '</p>' +
                                    '<img src=\"'+ video1.thumbnails.default.url +'\" />' +
                                '</div>' +
                                '<div class=\"col-md-4\">' +
                                    '<h2>' + video2.title + '</h2>' +
                                    '<p>' + video2.description + '</p>' +
                                    '<img src=\"'+ video2.thumbnails.default.url +'\" />' +
                                '</div>' +
                                '<div class=\"col-md-4\">' +
                                    '<h2>' + video3.title + '</h2>' +
                                    '<p>' + video3.description + '</p>' +
                                    '<img src=\"'+ video3.thumbnails.default.url +'\" />' +
                                '</div>' +
                                '</div><hr>');
                            \$('#videos').append(e);
                            //
                            // \$('#name', e).html(student['name']);
                            // \$('#address', e).html(student['address']);
                            // \$('#student').append(e);
                        }
                    },
                    error : function(xhr, textStatus, errorThrown) {
                        alert(errorThrown);
                    }
                });
            });
        });
    </script>
{% endblock %}", "homepage.html.twig", "/Users/hins/my_project/templates/homepage.html.twig");
    }
}
