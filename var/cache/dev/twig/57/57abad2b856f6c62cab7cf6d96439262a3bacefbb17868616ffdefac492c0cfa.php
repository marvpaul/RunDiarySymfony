<?php

/* base.html.twig */
class __TwigTemplate_d801709a2f8f2569e1c74212714746e33a87fffe8f1a6d30a12cd53348fa8e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff113f51dc3c31b9f3fa948304fbfc709c7a8c228f3c19d262e381b2db8a7f95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff113f51dc3c31b9f3fa948304fbfc709c7a8c228f3c19d262e381b2db8a7f95->enter($__internal_ff113f51dc3c31b9f3fa948304fbfc709c7a8c228f3c19d262e381b2db8a7f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7e0c433ea562fb9564034f1a3e4e35767d3d829f1d9e0393247e664bb3ee03c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0c433ea562fb9564034f1a3e4e35767d3d829f1d9e0393247e664bb3ee03c6->enter($__internal_7e0c433ea562fb9564034f1a3e4e35767d3d829f1d9e0393247e664bb3ee03c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "


        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    </head>
    <body>
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "    </body>
</html>
";
        
        $__internal_ff113f51dc3c31b9f3fa948304fbfc709c7a8c228f3c19d262e381b2db8a7f95->leave($__internal_ff113f51dc3c31b9f3fa948304fbfc709c7a8c228f3c19d262e381b2db8a7f95_prof);

        
        $__internal_7e0c433ea562fb9564034f1a3e4e35767d3d829f1d9e0393247e664bb3ee03c6->leave($__internal_7e0c433ea562fb9564034f1a3e4e35767d3d829f1d9e0393247e664bb3ee03c6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_196ae162088eb1ed322d7cfbb2a68ce2ccb7a1371836b854397099bef3a032ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196ae162088eb1ed322d7cfbb2a68ce2ccb7a1371836b854397099bef3a032ff->enter($__internal_196ae162088eb1ed322d7cfbb2a68ce2ccb7a1371836b854397099bef3a032ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a7ba09468766a68f554004fe03ead49b704f85b8bdfeb89f440145e7a17d412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7ba09468766a68f554004fe03ead49b704f85b8bdfeb89f440145e7a17d412->enter($__internal_4a7ba09468766a68f554004fe03ead49b704f85b8bdfeb89f440145e7a17d412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Welcome", array(), "messages");
        
        $__internal_4a7ba09468766a68f554004fe03ead49b704f85b8bdfeb89f440145e7a17d412->leave($__internal_4a7ba09468766a68f554004fe03ead49b704f85b8bdfeb89f440145e7a17d412_prof);

        
        $__internal_196ae162088eb1ed322d7cfbb2a68ce2ccb7a1371836b854397099bef3a032ff->leave($__internal_196ae162088eb1ed322d7cfbb2a68ce2ccb7a1371836b854397099bef3a032ff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_96c6366fd605b9080f4a69386c87a326b013cefcd7328b091fdf39e869c82d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c6366fd605b9080f4a69386c87a326b013cefcd7328b091fdf39e869c82d9d->enter($__internal_96c6366fd605b9080f4a69386c87a326b013cefcd7328b091fdf39e869c82d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0947afdeadfe6f829519da7bf0d4a6c1827c187da7fde4ac8c6f774deca22a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0947afdeadfe6f829519da7bf0d4a6c1827c187da7fde4ac8c6f774deca22a10->enter($__internal_0947afdeadfe6f829519da7bf0d4a6c1827c187da7fde4ac8c6f774deca22a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\">
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootswacht.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_0947afdeadfe6f829519da7bf0d4a6c1827c187da7fde4ac8c6f774deca22a10->leave($__internal_0947afdeadfe6f829519da7bf0d4a6c1827c187da7fde4ac8c6f774deca22a10_prof);

        
        $__internal_96c6366fd605b9080f4a69386c87a326b013cefcd7328b091fdf39e869c82d9d->leave($__internal_96c6366fd605b9080f4a69386c87a326b013cefcd7328b091fdf39e869c82d9d_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_f713a91b1de9c1dab4e29d180db2081c90f93723e761a3d4564de88542df99f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f713a91b1de9c1dab4e29d180db2081c90f93723e761a3d4564de88542df99f6->enter($__internal_f713a91b1de9c1dab4e29d180db2081c90f93723e761a3d4564de88542df99f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d0b8aa075927d7981eb340703a5288fbc928477776131dea4b0dcd9d198376a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0b8aa075927d7981eb340703a5288fbc928477776131dea4b0dcd9d198376a->enter($__internal_8d0b8aa075927d7981eb340703a5288fbc928477776131dea4b0dcd9d198376a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "            <h1 style=\"text-align: center; \"><a href=\"/public/index.php/\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("My awesome run diary", array(), "messages");
        echo "</a></h1>
            ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 22
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Hi", array(), "messages");
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->getSourceContext()); })()), "user", array()), "name", array()), "html", null, true);
            echo "
                --> <a href=\"/public/index.php/logout\">";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Logout", array(), "messages");
            echo "</a>
            ";
        }
        // line 25
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "        ";
        
        $__internal_8d0b8aa075927d7981eb340703a5288fbc928477776131dea4b0dcd9d198376a->leave($__internal_8d0b8aa075927d7981eb340703a5288fbc928477776131dea4b0dcd9d198376a_prof);

        
        $__internal_f713a91b1de9c1dab4e29d180db2081c90f93723e761a3d4564de88542df99f6->leave($__internal_f713a91b1de9c1dab4e29d180db2081c90f93723e761a3d4564de88542df99f6_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_fee0151be1cbe250c79ee2b3d2c136fc5f20e9c66fd9d9930f7223ce02c127fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee0151be1cbe250c79ee2b3d2c136fc5f20e9c66fd9d9930f7223ce02c127fc->enter($__internal_fee0151be1cbe250c79ee2b3d2c136fc5f20e9c66fd9d9930f7223ce02c127fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fad7ecc133f01b803ae97924c7355f247f74a65aaa7be5a3b2738e7684c757e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad7ecc133f01b803ae97924c7355f247f74a65aaa7be5a3b2738e7684c757e8->enter($__internal_fad7ecc133f01b803ae97924c7355f247f74a65aaa7be5a3b2738e7684c757e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_fad7ecc133f01b803ae97924c7355f247f74a65aaa7be5a3b2738e7684c757e8->leave($__internal_fad7ecc133f01b803ae97924c7355f247f74a65aaa7be5a3b2738e7684c757e8_prof);

        
        $__internal_fee0151be1cbe250c79ee2b3d2c136fc5f20e9c66fd9d9930f7223ce02c127fc->leave($__internal_fee0151be1cbe250c79ee2b3d2c136fc5f20e9c66fd9d9930f7223ce02c127fc_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5fa0e5933a4083153c901e24b0366958b5520bbcc215932d54f7b91e3fd0e891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fa0e5933a4083153c901e24b0366958b5520bbcc215932d54f7b91e3fd0e891->enter($__internal_5fa0e5933a4083153c901e24b0366958b5520bbcc215932d54f7b91e3fd0e891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_06ffd7feeb66af42152cf2fbf7e11f9aa984debc723adb6e3a9c649a7fd14ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ffd7feeb66af42152cf2fbf7e11f9aa984debc723adb6e3a9c649a7fd14ad3->enter($__internal_06ffd7feeb66af42152cf2fbf7e11f9aa984debc723adb6e3a9c649a7fd14ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_06ffd7feeb66af42152cf2fbf7e11f9aa984debc723adb6e3a9c649a7fd14ad3->leave($__internal_06ffd7feeb66af42152cf2fbf7e11f9aa984debc723adb6e3a9c649a7fd14ad3_prof);

        
        $__internal_5fa0e5933a4083153c901e24b0366958b5520bbcc215932d54f7b91e3fd0e891->leave($__internal_5fa0e5933a4083153c901e24b0366958b5520bbcc215932d54f7b91e3fd0e891_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  182 => 28,  173 => 27,  156 => 25,  146 => 26,  143 => 25,  138 => 23,  131 => 22,  129 => 21,  124 => 20,  115 => 19,  103 => 9,  99 => 8,  96 => 7,  87 => 6,  69 => 5,  57 => 31,  54 => 27,  52 => 19,  42 => 11,  40 => 6,  36 => 5,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}{% trans %}Welcome{% endtrans %}{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\">
            <link href=\"{{ asset('bootswacht.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('style.css') }}\" rel=\"stylesheet\">
        {% endblock %}



        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    </head>
    <body>
        {% block body %}
            <h1 style=\"text-align: center; \"><a href=\"/public/index.php/\">{% trans %}My awesome run diary{% endtrans %}</a></h1>
            {% if is_granted(\"ROLE_USER\") %}
                {% trans %}Hi{% endtrans %} {{ app.user.name }}
                --> <a href=\"/public/index.php/logout\">{% trans %}Logout{% endtrans %}</a>
            {% endif %}
            {% block content %}{% endblock %}
        {% endblock %}
        {% block javascripts %}
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/marvinkruger/uebung6/templates/base.html.twig");
    }
}
