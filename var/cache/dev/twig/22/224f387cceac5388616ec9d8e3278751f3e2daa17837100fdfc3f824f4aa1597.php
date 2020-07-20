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
class __TwigTemplate_d72ee1d25572ed42f24a35a24e277222407a3f5674eb7b42a65e72c482689ed2 extends Template
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
        echo "<h1 > Search youtube videos by keywords </h1>
    <section class=\"ui container\" >



        <div class=\"input-group mb-3\">
            <input type=\"text\" name=\"keyword\" id=\"keyword\" class=\"form-control\" placeholder=\"keyword\" aria-label=\"keyword\" aria-describedby=\"button-addon2\">
            <button class=\"ui button \" >Search</button>
        </div>


    </section>

    <div id=\"videos\">
";
        // line 23
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "<script language = \"javascript\"
        src = \"https://code.jquery.com/jquery-3.5.1.min.js\"></script>

    <script language = \"javascript\">

        \$(document).ready(function(){
            \$(window).on('load', function() {
                \$.post({
                    url:        '/',
                    data:       {\"keyword\": null},
                    type:       'POST',
                    dataType:   'json',

                    success: function(data, status) {
                        // console.log(data);
                        \$('#videos').html('');
                        for(let i = 0; i < data.length; i += 3) {
                            video1 = data[i];
                            video2 = data[i + 1];
                            video3 = data[i + 2];

                            let e = \$('<div class=\"row\">' +
                                '<div class=\"col-md-4\">' +
                                '<h2>' + video1.title + '</h2>' +
                                '<p>' + video1.description + '</p>' +
                                '<img src=\"'+ video1.thumbnails.high.url +'\" class=\"img-fluid\" alt=\"Responsive image\" />' +
                                '</div>' +
                                '<div class=\"col-md-4\">' +
                                '<h2>' + video2.title + '</h2>' +
                                '<p>' + video2.description + '</p>' +
                                '<img src=\"'+ video2.thumbnails.high.url +'\" class=\"img-fluid\" alt=\"Responsive image\"/>' +
                                '</div>' +
                                '<div class=\"col-md-4\">' +
                                '<h2>' + video3.title + '</h2>' +
                                '<p>' + video3.description + '</p>' +
                                '<img src=\"'+ video3.thumbnails.high.url +'\" class=\"img-fluid\" alt=\"Responsive image\"/>' +
                                '</div>' +
                                '</div><hr>');
                            \$('#videos').append(e);
                            //
                            // \$('#name', e).html(student['name']);
                            // \$('#address', e).html(student['address']);
                            // \$('#student').append(e);
                        }

                        // let \$pagination = data['pagination'];
                        // \$('#pagination').html();
                    },
                    error : function(xhr, textStatus, errorThrown) {
                        alert(errorThrown);
                    }
                });
            });

            \$(\".button\").on(\"click\", function(event){
                console.log(\$('#keyword').val());
                \$.post({
                    url:        '/',
                    data:       {\"keyword\": \$('#keyword').val()},
                    type:       'POST',
                    dataType:   'json',

                    success: function(data, status) {
                        // console.log(data);
                        \$('#videos').html('');
                        for(let i = 0; i < data.length; i += 3) {
                            video1 = data[i];
                            video2 = data[i + 1];
                            video3 = data[i + 2];

                            let e = \$('<div class=\"row\">' +
                                '<div class=\"col-md-4\">' +
                                    '<h2>' + video1.title + '</h2>' +
                                    '<p>' + video1.description + '</p>' +
                                    '<img src=\"'+ video1.thumbnails.high.url +'\" class=\"img-fluid\" alt=\"Responsive image\"/>' +
                                '</div>' +
                                '<div class=\"col-md-4\">' +
                                    '<h2>' + video2.title + '</h2>' +
                                    '<p>' + video2.description + '</p>' +
                                    '<img src=\"'+ video2.thumbnails.high.url +'\" class=\"img-fluid\" alt=\"Responsive image\"/>' +
                                '</div>' +
                                '<div class=\"col-md-4\">' +
                                    '<h2>' + video3.title + '</h2>' +
                                    '<p>' + video3.description + '</p>' +
                                    '<img src=\"'+ video3.thumbnails.high.url +'\" class=\"img-fluid\" alt=\"Responsive image\"/>' +
                                '</div>' +
                                '</div><hr>');
                            \$('#videos').append(e);
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
        return array (  107 => 31,  97 => 30,  85 => 23,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<h1 > Search youtube videos by keywords </h1>
    <section class=\"ui container\" >



        <div class=\"input-group mb-3\">
            <input type=\"text\" name=\"keyword\" id=\"keyword\" class=\"form-control\" placeholder=\"keyword\" aria-label=\"keyword\" aria-describedby=\"button-addon2\">
            <button class=\"ui button \" >Search</button>
        </div>


    </section>

    <div id=\"videos\">
{#        {% for video in videos %}#}
{#            <p>{{ video.title }}</p>#}
{#            <p>{{ video.description }}</p>#}
{#            <img src=\"{{ video.thumbnails.default.url }}\" width=\"{{ video.thumbnails.default.width }}\" height=\"{{ video.thumbnails.default.height }}\">#}
{#        {% endfor %}#}
    </div>

{#    <nav id=\"pagination\">#}
{#        {{ knp_pagination_render(pagination) }}#}
{#    </nav>#}
{% endblock %}

{% block javascripts %}
<script language = \"javascript\"
        src = \"https://code.jquery.com/jquery-3.5.1.min.js\"></script>

    <script language = \"javascript\">

        \$(document).ready(function(){
            \$(window).on('load', function() {
                \$.post({
                    url:        '/',
                    data:       {\"keyword\": null},
                    type:       'POST',
                    dataType:   'json',

                    success: function(data, status) {
                        // console.log(data);
                        \$('#videos').html('');
                        for(let i = 0; i < data.length; i += 3) {
                            video1 = data[i];
                            video2 = data[i + 1];
                            video3 = data[i + 2];

                            let e = \$('<div class=\"row\">' +
                                '<div class=\"col-md-4\">' +
                                '<h2>' + video1.title + '</h2>' +
                                '<p>' + video1.description + '</p>' +
                                '<img src=\"'+ video1.thumbnails.high.url +'\" class=\"img-fluid\" alt=\"Responsive image\" />' +
                                '</div>' +
                                '<div class=\"col-md-4\">' +
                                '<h2>' + video2.title + '</h2>' +
                                '<p>' + video2.description + '</p>' +
                                '<img src=\"'+ video2.thumbnails.high.url +'\" class=\"img-fluid\" alt=\"Responsive image\"/>' +
                                '</div>' +
                                '<div class=\"col-md-4\">' +
                                '<h2>' + video3.title + '</h2>' +
                                '<p>' + video3.description + '</p>' +
                                '<img src=\"'+ video3.thumbnails.high.url +'\" class=\"img-fluid\" alt=\"Responsive image\"/>' +
                                '</div>' +
                                '</div><hr>');
                            \$('#videos').append(e);
                            //
                            // \$('#name', e).html(student['name']);
                            // \$('#address', e).html(student['address']);
                            // \$('#student').append(e);
                        }

                        // let \$pagination = data['pagination'];
                        // \$('#pagination').html();
                    },
                    error : function(xhr, textStatus, errorThrown) {
                        alert(errorThrown);
                    }
                });
            });

            \$(\".button\").on(\"click\", function(event){
                console.log(\$('#keyword').val());
                \$.post({
                    url:        '/',
                    data:       {\"keyword\": \$('#keyword').val()},
                    type:       'POST',
                    dataType:   'json',

                    success: function(data, status) {
                        // console.log(data);
                        \$('#videos').html('');
                        for(let i = 0; i < data.length; i += 3) {
                            video1 = data[i];
                            video2 = data[i + 1];
                            video3 = data[i + 2];

                            let e = \$('<div class=\"row\">' +
                                '<div class=\"col-md-4\">' +
                                    '<h2>' + video1.title + '</h2>' +
                                    '<p>' + video1.description + '</p>' +
                                    '<img src=\"'+ video1.thumbnails.high.url +'\" class=\"img-fluid\" alt=\"Responsive image\"/>' +
                                '</div>' +
                                '<div class=\"col-md-4\">' +
                                    '<h2>' + video2.title + '</h2>' +
                                    '<p>' + video2.description + '</p>' +
                                    '<img src=\"'+ video2.thumbnails.high.url +'\" class=\"img-fluid\" alt=\"Responsive image\"/>' +
                                '</div>' +
                                '<div class=\"col-md-4\">' +
                                    '<h2>' + video3.title + '</h2>' +
                                    '<p>' + video3.description + '</p>' +
                                    '<img src=\"'+ video3.thumbnails.high.url +'\" class=\"img-fluid\" alt=\"Responsive image\"/>' +
                                '</div>' +
                                '</div><hr>');
                            \$('#videos').append(e);
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
