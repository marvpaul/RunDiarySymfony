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
        $__internal_426fe65544a80d67feb93a014e008d602aa9c97c9c32980236dda8aa82df6acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426fe65544a80d67feb93a014e008d602aa9c97c9c32980236dda8aa82df6acf->enter($__internal_426fe65544a80d67feb93a014e008d602aa9c97c9c32980236dda8aa82df6acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_487baa8bda7bed887d05046e48ee8251fb1b4e859c654f1f3666a4d1b74aca7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487baa8bda7bed887d05046e48ee8251fb1b4e859c654f1f3666a4d1b74aca7f->enter($__internal_487baa8bda7bed887d05046e48ee8251fb1b4e859c654f1f3666a4d1b74aca7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
";
        
        $__internal_426fe65544a80d67feb93a014e008d602aa9c97c9c32980236dda8aa82df6acf->leave($__internal_426fe65544a80d67feb93a014e008d602aa9c97c9c32980236dda8aa82df6acf_prof);

        
        $__internal_487baa8bda7bed887d05046e48ee8251fb1b4e859c654f1f3666a4d1b74aca7f->leave($__internal_487baa8bda7bed887d05046e48ee8251fb1b4e859c654f1f3666a4d1b74aca7f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee9010a79990527e8359a115be5bed8a70cffc8527e1b789d7ac730d60747f14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9010a79990527e8359a115be5bed8a70cffc8527e1b789d7ac730d60747f14->enter($__internal_ee9010a79990527e8359a115be5bed8a70cffc8527e1b789d7ac730d60747f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d872b42102dd932bad678071b69bf8492850c6b707c47650964e3e84d237cb19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d872b42102dd932bad678071b69bf8492850c6b707c47650964e3e84d237cb19->enter($__internal_d872b42102dd932bad678071b69bf8492850c6b707c47650964e3e84d237cb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d872b42102dd932bad678071b69bf8492850c6b707c47650964e3e84d237cb19->leave($__internal_d872b42102dd932bad678071b69bf8492850c6b707c47650964e3e84d237cb19_prof);

        
        $__internal_ee9010a79990527e8359a115be5bed8a70cffc8527e1b789d7ac730d60747f14->leave($__internal_ee9010a79990527e8359a115be5bed8a70cffc8527e1b789d7ac730d60747f14_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a01b6e04136d381debb6351b751695d13af0d5efef15fc0c282eb5f0131030d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01b6e04136d381debb6351b751695d13af0d5efef15fc0c282eb5f0131030d4->enter($__internal_a01b6e04136d381debb6351b751695d13af0d5efef15fc0c282eb5f0131030d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0aa9444bae12a65df3c077a81fb021f7adce0eb6c61007e6eb268fabaa1469ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa9444bae12a65df3c077a81fb021f7adce0eb6c61007e6eb268fabaa1469ce->enter($__internal_0aa9444bae12a65df3c077a81fb021f7adce0eb6c61007e6eb268fabaa1469ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0aa9444bae12a65df3c077a81fb021f7adce0eb6c61007e6eb268fabaa1469ce->leave($__internal_0aa9444bae12a65df3c077a81fb021f7adce0eb6c61007e6eb268fabaa1469ce_prof);

        
        $__internal_a01b6e04136d381debb6351b751695d13af0d5efef15fc0c282eb5f0131030d4->leave($__internal_a01b6e04136d381debb6351b751695d13af0d5efef15fc0c282eb5f0131030d4_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_48abd925a8a563455d19b7b495e124dde168e1ea0ba96eb3737e40a37e0f889e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48abd925a8a563455d19b7b495e124dde168e1ea0ba96eb3737e40a37e0f889e->enter($__internal_48abd925a8a563455d19b7b495e124dde168e1ea0ba96eb3737e40a37e0f889e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2fc35dc90d47ed7b2ead6f6254c85fd8dc20cde382e920dcdcd51700570d1213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fc35dc90d47ed7b2ead6f6254c85fd8dc20cde382e920dcdcd51700570d1213->enter($__internal_2fc35dc90d47ed7b2ead6f6254c85fd8dc20cde382e920dcdcd51700570d1213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "            <h1 style=\"text-align: center; \"><a href=\"/public/index.php/\">My awesome run diary</a></h1>
            ";
        // line 20
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 21
            echo "                Hi ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->getSourceContext()); })()), "user", array()), "name", array()), "html", null, true);
            echo "
                --> <a href=\"/public/index.php/logout\">Logout</a>
            ";
        }
        // line 24
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "        ";
        
        $__internal_2fc35dc90d47ed7b2ead6f6254c85fd8dc20cde382e920dcdcd51700570d1213->leave($__internal_2fc35dc90d47ed7b2ead6f6254c85fd8dc20cde382e920dcdcd51700570d1213_prof);

        
        $__internal_48abd925a8a563455d19b7b495e124dde168e1ea0ba96eb3737e40a37e0f889e->leave($__internal_48abd925a8a563455d19b7b495e124dde168e1ea0ba96eb3737e40a37e0f889e_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_ec9d0503a5813efd61806f414dae12df2731acaa7699a68fb3e2f66eaba6eaa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec9d0503a5813efd61806f414dae12df2731acaa7699a68fb3e2f66eaba6eaa5->enter($__internal_ec9d0503a5813efd61806f414dae12df2731acaa7699a68fb3e2f66eaba6eaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5de3733fd8c34043a7307194441f2a937e6e3abdae5798300e660f830c87b2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de3733fd8c34043a7307194441f2a937e6e3abdae5798300e660f830c87b2f7->enter($__internal_5de3733fd8c34043a7307194441f2a937e6e3abdae5798300e660f830c87b2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5de3733fd8c34043a7307194441f2a937e6e3abdae5798300e660f830c87b2f7->leave($__internal_5de3733fd8c34043a7307194441f2a937e6e3abdae5798300e660f830c87b2f7_prof);

        
        $__internal_ec9d0503a5813efd61806f414dae12df2731acaa7699a68fb3e2f66eaba6eaa5->leave($__internal_ec9d0503a5813efd61806f414dae12df2731acaa7699a68fb3e2f66eaba6eaa5_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe072c7a935226ec6a7438524f6cbea8ecf9bc03cf30b099a9c6657717ef9efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe072c7a935226ec6a7438524f6cbea8ecf9bc03cf30b099a9c6657717ef9efe->enter($__internal_fe072c7a935226ec6a7438524f6cbea8ecf9bc03cf30b099a9c6657717ef9efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b69a0201fa86321e032c0906b9f5f3e783873c73691fd9a7f0a3d923c5703e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69a0201fa86321e032c0906b9f5f3e783873c73691fd9a7f0a3d923c5703e71->enter($__internal_b69a0201fa86321e032c0906b9f5f3e783873c73691fd9a7f0a3d923c5703e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_b69a0201fa86321e032c0906b9f5f3e783873c73691fd9a7f0a3d923c5703e71->leave($__internal_b69a0201fa86321e032c0906b9f5f3e783873c73691fd9a7f0a3d923c5703e71_prof);

        
        $__internal_fe072c7a935226ec6a7438524f6cbea8ecf9bc03cf30b099a9c6657717ef9efe->leave($__internal_fe072c7a935226ec6a7438524f6cbea8ecf9bc03cf30b099a9c6657717ef9efe_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 27,  165 => 26,  148 => 24,  138 => 25,  135 => 24,  128 => 21,  126 => 20,  123 => 19,  114 => 18,  102 => 9,  98 => 8,  95 => 7,  86 => 6,  68 => 5,  56 => 30,  53 => 26,  51 => 18,  42 => 11,  40 => 6,  36 => 5,  30 => 1,);
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


        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    </head>
    <body>
        {% block body %}
            <h1 style=\"text-align: center; \"><a href=\"/public/index.php/\">My awesome run diary</a></h1>
            {% if is_granted(\"ROLE_USER\") %}
                Hi {{ app.user.name }}
                --> <a href=\"/public/index.php/logout\">Logout</a>
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
