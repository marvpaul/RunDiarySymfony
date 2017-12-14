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
        $__internal_0d27c3cb4524d204c05b624e506b3bf9b7a3e6e3bdcb3ed3a24d59a08287ecfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d27c3cb4524d204c05b624e506b3bf9b7a3e6e3bdcb3ed3a24d59a08287ecfb->enter($__internal_0d27c3cb4524d204c05b624e506b3bf9b7a3e6e3bdcb3ed3a24d59a08287ecfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f5c6f492956a851278eb760c04b6110932120f34399bdc91b8e79bd2edd2de29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c6f492956a851278eb760c04b6110932120f34399bdc91b8e79bd2edd2de29->enter($__internal_f5c6f492956a851278eb760c04b6110932120f34399bdc91b8e79bd2edd2de29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    </body>
</html>
";
        
        $__internal_0d27c3cb4524d204c05b624e506b3bf9b7a3e6e3bdcb3ed3a24d59a08287ecfb->leave($__internal_0d27c3cb4524d204c05b624e506b3bf9b7a3e6e3bdcb3ed3a24d59a08287ecfb_prof);

        
        $__internal_f5c6f492956a851278eb760c04b6110932120f34399bdc91b8e79bd2edd2de29->leave($__internal_f5c6f492956a851278eb760c04b6110932120f34399bdc91b8e79bd2edd2de29_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3504c8c4aa497627d1a5312b3a19ced0cac21ed9a9c382823a4106cba6adef7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3504c8c4aa497627d1a5312b3a19ced0cac21ed9a9c382823a4106cba6adef7b->enter($__internal_3504c8c4aa497627d1a5312b3a19ced0cac21ed9a9c382823a4106cba6adef7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1f135f6562bd7b66f49f3c202c9ec9462335ded5d41b26cc77408721dd2f09ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f135f6562bd7b66f49f3c202c9ec9462335ded5d41b26cc77408721dd2f09ed->enter($__internal_1f135f6562bd7b66f49f3c202c9ec9462335ded5d41b26cc77408721dd2f09ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1f135f6562bd7b66f49f3c202c9ec9462335ded5d41b26cc77408721dd2f09ed->leave($__internal_1f135f6562bd7b66f49f3c202c9ec9462335ded5d41b26cc77408721dd2f09ed_prof);

        
        $__internal_3504c8c4aa497627d1a5312b3a19ced0cac21ed9a9c382823a4106cba6adef7b->leave($__internal_3504c8c4aa497627d1a5312b3a19ced0cac21ed9a9c382823a4106cba6adef7b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ed8c84a3878dfe1c3e5c4172e9b1ecf376bbedf91365f8a70d153152f7086ba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8c84a3878dfe1c3e5c4172e9b1ecf376bbedf91365f8a70d153152f7086ba3->enter($__internal_ed8c84a3878dfe1c3e5c4172e9b1ecf376bbedf91365f8a70d153152f7086ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2f71a293d9d4ce82177a89bc8cf2464cdbe83307315164c87e1cf0bc5159796c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f71a293d9d4ce82177a89bc8cf2464cdbe83307315164c87e1cf0bc5159796c->enter($__internal_2f71a293d9d4ce82177a89bc8cf2464cdbe83307315164c87e1cf0bc5159796c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2f71a293d9d4ce82177a89bc8cf2464cdbe83307315164c87e1cf0bc5159796c->leave($__internal_2f71a293d9d4ce82177a89bc8cf2464cdbe83307315164c87e1cf0bc5159796c_prof);

        
        $__internal_ed8c84a3878dfe1c3e5c4172e9b1ecf376bbedf91365f8a70d153152f7086ba3->leave($__internal_ed8c84a3878dfe1c3e5c4172e9b1ecf376bbedf91365f8a70d153152f7086ba3_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad71752e58c4cf2044eb25c31808bcad58f1459e8f280dd4dae2f006dc065356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad71752e58c4cf2044eb25c31808bcad58f1459e8f280dd4dae2f006dc065356->enter($__internal_ad71752e58c4cf2044eb25c31808bcad58f1459e8f280dd4dae2f006dc065356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df0e2a93ccc07cccbe0a5ba7200cbd140a26a4334b07bb69ae9b0da909080084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0e2a93ccc07cccbe0a5ba7200cbd140a26a4334b07bb69ae9b0da909080084->enter($__internal_df0e2a93ccc07cccbe0a5ba7200cbd140a26a4334b07bb69ae9b0da909080084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            <h1 style=\"text-align: center; \"><a href=\"/public/\">My awesome run diary</a></h1>
            ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 16
            echo "                Hi ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->getSourceContext()); })()), "user", array()), "name", array()), "html", null, true);
            echo "
                --> <a href=\"/public/logout\">Logout</a>
            ";
        }
        // line 19
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "        ";
        
        $__internal_df0e2a93ccc07cccbe0a5ba7200cbd140a26a4334b07bb69ae9b0da909080084->leave($__internal_df0e2a93ccc07cccbe0a5ba7200cbd140a26a4334b07bb69ae9b0da909080084_prof);

        
        $__internal_ad71752e58c4cf2044eb25c31808bcad58f1459e8f280dd4dae2f006dc065356->leave($__internal_ad71752e58c4cf2044eb25c31808bcad58f1459e8f280dd4dae2f006dc065356_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_fef59da7933b1d92ff0bcbceabd075cf838f35f61e16386f4d3d3e8030c48185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef59da7933b1d92ff0bcbceabd075cf838f35f61e16386f4d3d3e8030c48185->enter($__internal_fef59da7933b1d92ff0bcbceabd075cf838f35f61e16386f4d3d3e8030c48185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4e95a171c8c8855429603d819f3068ba7b899bba271da4a8a0708adc52032268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e95a171c8c8855429603d819f3068ba7b899bba271da4a8a0708adc52032268->enter($__internal_4e95a171c8c8855429603d819f3068ba7b899bba271da4a8a0708adc52032268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4e95a171c8c8855429603d819f3068ba7b899bba271da4a8a0708adc52032268->leave($__internal_4e95a171c8c8855429603d819f3068ba7b899bba271da4a8a0708adc52032268_prof);

        
        $__internal_fef59da7933b1d92ff0bcbceabd075cf838f35f61e16386f4d3d3e8030c48185->leave($__internal_fef59da7933b1d92ff0bcbceabd075cf838f35f61e16386f4d3d3e8030c48185_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d3a5e05373697e9ddc01a9e8ff31347a636144a91ab5f6f9d65399c030e31484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a5e05373697e9ddc01a9e8ff31347a636144a91ab5f6f9d65399c030e31484->enter($__internal_d3a5e05373697e9ddc01a9e8ff31347a636144a91ab5f6f9d65399c030e31484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dd241da64d0cf4e6705873ca1856009b208a4497735ad53f01ee49845de2bb09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd241da64d0cf4e6705873ca1856009b208a4497735ad53f01ee49845de2bb09->enter($__internal_dd241da64d0cf4e6705873ca1856009b208a4497735ad53f01ee49845de2bb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_dd241da64d0cf4e6705873ca1856009b208a4497735ad53f01ee49845de2bb09->leave($__internal_dd241da64d0cf4e6705873ca1856009b208a4497735ad53f01ee49845de2bb09_prof);

        
        $__internal_d3a5e05373697e9ddc01a9e8ff31347a636144a91ab5f6f9d65399c030e31484->leave($__internal_d3a5e05373697e9ddc01a9e8ff31347a636144a91ab5f6f9d65399c030e31484_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  169 => 22,  160 => 21,  143 => 19,  133 => 20,  130 => 19,  123 => 16,  121 => 15,  118 => 14,  109 => 13,  97 => 9,  93 => 8,  90 => 7,  81 => 6,  63 => 5,  51 => 26,  48 => 21,  46 => 13,  42 => 11,  40 => 6,  36 => 5,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\">
            <link href=\"{{ asset('bootswacht.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('style.css') }}\" rel=\"stylesheet\">
        {% endblock %}
    </head>
    <body>
        {% block body %}
            <h1 style=\"text-align: center; \"><a href=\"/public/\">My awesome run diary</a></h1>
            {% if is_granted(\"ROLE_USER\") %}
                Hi {{ app.user.name }}
                --> <a href=\"/public/logout\">Logout</a>
            {% endif %}
            {% block content %}{% endblock %}
        {% endblock %}
        {% block javascripts %}
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/marvinkruger/uebung6/templates/base.html.twig");
    }
}
