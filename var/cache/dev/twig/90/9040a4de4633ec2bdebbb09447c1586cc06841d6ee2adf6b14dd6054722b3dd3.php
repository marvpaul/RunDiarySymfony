<?php

/* base.html.twig */
class __TwigTemplate_a2d2a5d184e7436889470173e2f1e066fbcc7e70513d75d09f74a3d1e88ac279 extends Twig_Template
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
        $__internal_a520edcb31fb0c74ca5c1b1da93ee677d3de9c4ca1d53d921a540a153f1e1714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a520edcb31fb0c74ca5c1b1da93ee677d3de9c4ca1d53d921a540a153f1e1714->enter($__internal_a520edcb31fb0c74ca5c1b1da93ee677d3de9c4ca1d53d921a540a153f1e1714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ea7db961849fe31056f9cad71a2f9f6e2df375345ff3dbe6ebd454563943849b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7db961849fe31056f9cad71a2f9f6e2df375345ff3dbe6ebd454563943849b->enter($__internal_ea7db961849fe31056f9cad71a2f9f6e2df375345ff3dbe6ebd454563943849b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_a520edcb31fb0c74ca5c1b1da93ee677d3de9c4ca1d53d921a540a153f1e1714->leave($__internal_a520edcb31fb0c74ca5c1b1da93ee677d3de9c4ca1d53d921a540a153f1e1714_prof);

        
        $__internal_ea7db961849fe31056f9cad71a2f9f6e2df375345ff3dbe6ebd454563943849b->leave($__internal_ea7db961849fe31056f9cad71a2f9f6e2df375345ff3dbe6ebd454563943849b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c05f05009caa49550e5d5af247a3a139e754ef57b5b010715a55cfbab904656c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05f05009caa49550e5d5af247a3a139e754ef57b5b010715a55cfbab904656c->enter($__internal_c05f05009caa49550e5d5af247a3a139e754ef57b5b010715a55cfbab904656c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3c862ed4292a541946eafaa56e42badfc9b6325e09a19d444076476902dca3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c862ed4292a541946eafaa56e42badfc9b6325e09a19d444076476902dca3d->enter($__internal_f3c862ed4292a541946eafaa56e42badfc9b6325e09a19d444076476902dca3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f3c862ed4292a541946eafaa56e42badfc9b6325e09a19d444076476902dca3d->leave($__internal_f3c862ed4292a541946eafaa56e42badfc9b6325e09a19d444076476902dca3d_prof);

        
        $__internal_c05f05009caa49550e5d5af247a3a139e754ef57b5b010715a55cfbab904656c->leave($__internal_c05f05009caa49550e5d5af247a3a139e754ef57b5b010715a55cfbab904656c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3808d5191aa18264f2b63ceedc037ee5888e3048347999cb2badcbaf0bdaf8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3808d5191aa18264f2b63ceedc037ee5888e3048347999cb2badcbaf0bdaf8b1->enter($__internal_3808d5191aa18264f2b63ceedc037ee5888e3048347999cb2badcbaf0bdaf8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dc8e3e876b974e06996c919ec32e5f88b977d16efa32c28da2304e5733f73674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8e3e876b974e06996c919ec32e5f88b977d16efa32c28da2304e5733f73674->enter($__internal_dc8e3e876b974e06996c919ec32e5f88b977d16efa32c28da2304e5733f73674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_dc8e3e876b974e06996c919ec32e5f88b977d16efa32c28da2304e5733f73674->leave($__internal_dc8e3e876b974e06996c919ec32e5f88b977d16efa32c28da2304e5733f73674_prof);

        
        $__internal_3808d5191aa18264f2b63ceedc037ee5888e3048347999cb2badcbaf0bdaf8b1->leave($__internal_3808d5191aa18264f2b63ceedc037ee5888e3048347999cb2badcbaf0bdaf8b1_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4321fe1b250eb66b23892b00a463a8965c2a70ea76c87b3a04c86c6cf361493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4321fe1b250eb66b23892b00a463a8965c2a70ea76c87b3a04c86c6cf361493->enter($__internal_b4321fe1b250eb66b23892b00a463a8965c2a70ea76c87b3a04c86c6cf361493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15fa31befc2137e07bad395ad63ac6f293cfb99193dac4ddeab2547b5fd7e5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fa31befc2137e07bad395ad63ac6f293cfb99193dac4ddeab2547b5fd7e5c8->enter($__internal_15fa31befc2137e07bad395ad63ac6f293cfb99193dac4ddeab2547b5fd7e5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            <h1 style=\"text-align: center; \">My awesome run diary</h1>
            ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "        ";
        
        $__internal_15fa31befc2137e07bad395ad63ac6f293cfb99193dac4ddeab2547b5fd7e5c8->leave($__internal_15fa31befc2137e07bad395ad63ac6f293cfb99193dac4ddeab2547b5fd7e5c8_prof);

        
        $__internal_b4321fe1b250eb66b23892b00a463a8965c2a70ea76c87b3a04c86c6cf361493->leave($__internal_b4321fe1b250eb66b23892b00a463a8965c2a70ea76c87b3a04c86c6cf361493_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_06063440a2c24c460220f5e5475444da8df23eadaca28343ff9a6ef00c519c91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06063440a2c24c460220f5e5475444da8df23eadaca28343ff9a6ef00c519c91->enter($__internal_06063440a2c24c460220f5e5475444da8df23eadaca28343ff9a6ef00c519c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c6ec867acbbf8bfd80d1c266f687de011385685c35b80b19dc27028eb75f69a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ec867acbbf8bfd80d1c266f687de011385685c35b80b19dc27028eb75f69a2->enter($__internal_c6ec867acbbf8bfd80d1c266f687de011385685c35b80b19dc27028eb75f69a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c6ec867acbbf8bfd80d1c266f687de011385685c35b80b19dc27028eb75f69a2->leave($__internal_c6ec867acbbf8bfd80d1c266f687de011385685c35b80b19dc27028eb75f69a2_prof);

        
        $__internal_06063440a2c24c460220f5e5475444da8df23eadaca28343ff9a6ef00c519c91->leave($__internal_06063440a2c24c460220f5e5475444da8df23eadaca28343ff9a6ef00c519c91_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40103d03f6ab6625dd2278d228188f3ea5d96a9db2cc0e667b595eadbd3dd2d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40103d03f6ab6625dd2278d228188f3ea5d96a9db2cc0e667b595eadbd3dd2d9->enter($__internal_40103d03f6ab6625dd2278d228188f3ea5d96a9db2cc0e667b595eadbd3dd2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_14b5897761a769701ef1467d7750a9fd77e13c4a9eaf5f53c74b825d8a21ec11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b5897761a769701ef1467d7750a9fd77e13c4a9eaf5f53c74b825d8a21ec11->enter($__internal_14b5897761a769701ef1467d7750a9fd77e13c4a9eaf5f53c74b825d8a21ec11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_14b5897761a769701ef1467d7750a9fd77e13c4a9eaf5f53c74b825d8a21ec11->leave($__internal_14b5897761a769701ef1467d7750a9fd77e13c4a9eaf5f53c74b825d8a21ec11_prof);

        
        $__internal_40103d03f6ab6625dd2278d228188f3ea5d96a9db2cc0e667b595eadbd3dd2d9->leave($__internal_40103d03f6ab6625dd2278d228188f3ea5d96a9db2cc0e667b595eadbd3dd2d9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  159 => 18,  150 => 17,  133 => 15,  123 => 16,  121 => 15,  118 => 14,  109 => 13,  97 => 9,  93 => 8,  90 => 7,  81 => 6,  63 => 5,  51 => 22,  48 => 17,  46 => 13,  42 => 11,  40 => 6,  36 => 5,  30 => 1,);
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
            <h1 style=\"text-align: center; \">My awesome run diary</h1>
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
