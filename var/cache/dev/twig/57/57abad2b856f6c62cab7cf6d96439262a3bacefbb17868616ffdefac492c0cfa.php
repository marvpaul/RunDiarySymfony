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
        $__internal_250b535f9603cf01f0a73fd673a7186b468d1db41ebcfcabb48ec86f818d2ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_250b535f9603cf01f0a73fd673a7186b468d1db41ebcfcabb48ec86f818d2ffc->enter($__internal_250b535f9603cf01f0a73fd673a7186b468d1db41ebcfcabb48ec86f818d2ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3f607bcb64916aaec6a10cc2d83f3d4f3fca93b4a5ab59e4f38dcd0b88ead3b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f607bcb64916aaec6a10cc2d83f3d4f3fca93b4a5ab59e4f38dcd0b88ead3b9->enter($__internal_3f607bcb64916aaec6a10cc2d83f3d4f3fca93b4a5ab59e4f38dcd0b88ead3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_250b535f9603cf01f0a73fd673a7186b468d1db41ebcfcabb48ec86f818d2ffc->leave($__internal_250b535f9603cf01f0a73fd673a7186b468d1db41ebcfcabb48ec86f818d2ffc_prof);

        
        $__internal_3f607bcb64916aaec6a10cc2d83f3d4f3fca93b4a5ab59e4f38dcd0b88ead3b9->leave($__internal_3f607bcb64916aaec6a10cc2d83f3d4f3fca93b4a5ab59e4f38dcd0b88ead3b9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c318e67b1f61763e0cb7a7ae429c87d3175bbe2223676bf101a6dcd76bf350c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c318e67b1f61763e0cb7a7ae429c87d3175bbe2223676bf101a6dcd76bf350c7->enter($__internal_c318e67b1f61763e0cb7a7ae429c87d3175bbe2223676bf101a6dcd76bf350c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af54a62b32987dd24d68b0904fcec640fe01bc48c783d0b981121ea7858dea07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af54a62b32987dd24d68b0904fcec640fe01bc48c783d0b981121ea7858dea07->enter($__internal_af54a62b32987dd24d68b0904fcec640fe01bc48c783d0b981121ea7858dea07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_af54a62b32987dd24d68b0904fcec640fe01bc48c783d0b981121ea7858dea07->leave($__internal_af54a62b32987dd24d68b0904fcec640fe01bc48c783d0b981121ea7858dea07_prof);

        
        $__internal_c318e67b1f61763e0cb7a7ae429c87d3175bbe2223676bf101a6dcd76bf350c7->leave($__internal_c318e67b1f61763e0cb7a7ae429c87d3175bbe2223676bf101a6dcd76bf350c7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_68363dbc606898a2a7126cd82e068bbfe059a1bbe01c2ef2532964e01fc1be64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68363dbc606898a2a7126cd82e068bbfe059a1bbe01c2ef2532964e01fc1be64->enter($__internal_68363dbc606898a2a7126cd82e068bbfe059a1bbe01c2ef2532964e01fc1be64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_58fa8ebf4f78581f6d20af1850beb70b78e2e1ab184e33d85fcc4302a4efd785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fa8ebf4f78581f6d20af1850beb70b78e2e1ab184e33d85fcc4302a4efd785->enter($__internal_58fa8ebf4f78581f6d20af1850beb70b78e2e1ab184e33d85fcc4302a4efd785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_58fa8ebf4f78581f6d20af1850beb70b78e2e1ab184e33d85fcc4302a4efd785->leave($__internal_58fa8ebf4f78581f6d20af1850beb70b78e2e1ab184e33d85fcc4302a4efd785_prof);

        
        $__internal_68363dbc606898a2a7126cd82e068bbfe059a1bbe01c2ef2532964e01fc1be64->leave($__internal_68363dbc606898a2a7126cd82e068bbfe059a1bbe01c2ef2532964e01fc1be64_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bbd80b1de196da984ba570681d1c78219527fb3e755486136a5f4923cf48bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bbd80b1de196da984ba570681d1c78219527fb3e755486136a5f4923cf48bd4->enter($__internal_4bbd80b1de196da984ba570681d1c78219527fb3e755486136a5f4923cf48bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7d84049a3ff4097ad6b63b137aadbfbe0abbe58619ff023d69c765538031443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d84049a3ff4097ad6b63b137aadbfbe0abbe58619ff023d69c765538031443->enter($__internal_c7d84049a3ff4097ad6b63b137aadbfbe0abbe58619ff023d69c765538031443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c7d84049a3ff4097ad6b63b137aadbfbe0abbe58619ff023d69c765538031443->leave($__internal_c7d84049a3ff4097ad6b63b137aadbfbe0abbe58619ff023d69c765538031443_prof);

        
        $__internal_4bbd80b1de196da984ba570681d1c78219527fb3e755486136a5f4923cf48bd4->leave($__internal_4bbd80b1de196da984ba570681d1c78219527fb3e755486136a5f4923cf48bd4_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_26539e0e57055fab6ad5e3a5cc395d6f793f83d1fce86942a595b73a31edbd7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26539e0e57055fab6ad5e3a5cc395d6f793f83d1fce86942a595b73a31edbd7e->enter($__internal_26539e0e57055fab6ad5e3a5cc395d6f793f83d1fce86942a595b73a31edbd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fc944e33e0919da550d4f073e3ddd16ce935ba2ed3b42f810cd6e289fb34243e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc944e33e0919da550d4f073e3ddd16ce935ba2ed3b42f810cd6e289fb34243e->enter($__internal_fc944e33e0919da550d4f073e3ddd16ce935ba2ed3b42f810cd6e289fb34243e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_fc944e33e0919da550d4f073e3ddd16ce935ba2ed3b42f810cd6e289fb34243e->leave($__internal_fc944e33e0919da550d4f073e3ddd16ce935ba2ed3b42f810cd6e289fb34243e_prof);

        
        $__internal_26539e0e57055fab6ad5e3a5cc395d6f793f83d1fce86942a595b73a31edbd7e->leave($__internal_26539e0e57055fab6ad5e3a5cc395d6f793f83d1fce86942a595b73a31edbd7e_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a0e27eabd66f7ea08e05cb5967025f5f1a7bd090d104fb95762bae0d3686c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0e27eabd66f7ea08e05cb5967025f5f1a7bd090d104fb95762bae0d3686c3d->enter($__internal_0a0e27eabd66f7ea08e05cb5967025f5f1a7bd090d104fb95762bae0d3686c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ed473b31fc5bbda8eacdf2983f122ea63ddf8dba58b6ed7c1035439d902db9e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed473b31fc5bbda8eacdf2983f122ea63ddf8dba58b6ed7c1035439d902db9e0->enter($__internal_ed473b31fc5bbda8eacdf2983f122ea63ddf8dba58b6ed7c1035439d902db9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_ed473b31fc5bbda8eacdf2983f122ea63ddf8dba58b6ed7c1035439d902db9e0->leave($__internal_ed473b31fc5bbda8eacdf2983f122ea63ddf8dba58b6ed7c1035439d902db9e0_prof);

        
        $__internal_0a0e27eabd66f7ea08e05cb5967025f5f1a7bd090d104fb95762bae0d3686c3d->leave($__internal_0a0e27eabd66f7ea08e05cb5967025f5f1a7bd090d104fb95762bae0d3686c3d_prof);

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
