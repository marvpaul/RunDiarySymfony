<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_2bf66ee62a766df339df85c22f268d052fd6b6a37bbf6b3104d7f17dedd6482b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff4b0b675aa7f888bbace8d031824c1f486f4bc9f9dc155547490335e2539ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff4b0b675aa7f888bbace8d031824c1f486f4bc9f9dc155547490335e2539ded->enter($__internal_ff4b0b675aa7f888bbace8d031824c1f486f4bc9f9dc155547490335e2539ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f49cff011dde3ee349557f7bcfa4ec44a5d3ba79171b0601eb490e2a14bb808b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49cff011dde3ee349557f7bcfa4ec44a5d3ba79171b0601eb490e2a14bb808b->enter($__internal_f49cff011dde3ee349557f7bcfa4ec44a5d3ba79171b0601eb490e2a14bb808b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_ff4b0b675aa7f888bbace8d031824c1f486f4bc9f9dc155547490335e2539ded->leave($__internal_ff4b0b675aa7f888bbace8d031824c1f486f4bc9f9dc155547490335e2539ded_prof);

        
        $__internal_f49cff011dde3ee349557f7bcfa4ec44a5d3ba79171b0601eb490e2a14bb808b->leave($__internal_f49cff011dde3ee349557f7bcfa4ec44a5d3ba79171b0601eb490e2a14bb808b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_759a4f6fe9cc849f5039919c24ec40a10379ec74cc4a1a99e920bdb4443ce970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_759a4f6fe9cc849f5039919c24ec40a10379ec74cc4a1a99e920bdb4443ce970->enter($__internal_759a4f6fe9cc849f5039919c24ec40a10379ec74cc4a1a99e920bdb4443ce970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34b0fa79e1f70be8821e22868ed22ff66655314b65e1db0e5c70666ca5045028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b0fa79e1f70be8821e22868ed22ff66655314b65e1db0e5c70666ca5045028->enter($__internal_34b0fa79e1f70be8821e22868ed22ff66655314b65e1db0e5c70666ca5045028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_34b0fa79e1f70be8821e22868ed22ff66655314b65e1db0e5c70666ca5045028->leave($__internal_34b0fa79e1f70be8821e22868ed22ff66655314b65e1db0e5c70666ca5045028_prof);

        
        $__internal_759a4f6fe9cc849f5039919c24ec40a10379ec74cc4a1a99e920bdb4443ce970->leave($__internal_759a4f6fe9cc849f5039919c24ec40a10379ec74cc4a1a99e920bdb4443ce970_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_db8c954ba2cd9042e8b540dc3e0d0c69c6d848fb0fbcbd41a5f31a909a29d177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db8c954ba2cd9042e8b540dc3e0d0c69c6d848fb0fbcbd41a5f31a909a29d177->enter($__internal_db8c954ba2cd9042e8b540dc3e0d0c69c6d848fb0fbcbd41a5f31a909a29d177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_493e7f7a61fd4e4414236b585bb82d2edadc3685ee7abc93ef8ec6bbcac4dd4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493e7f7a61fd4e4414236b585bb82d2edadc3685ee7abc93ef8ec6bbcac4dd4d->enter($__internal_493e7f7a61fd4e4414236b585bb82d2edadc3685ee7abc93ef8ec6bbcac4dd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_493e7f7a61fd4e4414236b585bb82d2edadc3685ee7abc93ef8ec6bbcac4dd4d->leave($__internal_493e7f7a61fd4e4414236b585bb82d2edadc3685ee7abc93ef8ec6bbcac4dd4d_prof);

        
        $__internal_db8c954ba2cd9042e8b540dc3e0d0c69c6d848fb0fbcbd41a5f31a909a29d177->leave($__internal_db8c954ba2cd9042e8b540dc3e0d0c69c6d848fb0fbcbd41a5f31a909a29d177_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_453ad20ebb19de6242115ce384f3ada32e8b5b96c6fcc9b632e91db745497be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_453ad20ebb19de6242115ce384f3ada32e8b5b96c6fcc9b632e91db745497be0->enter($__internal_453ad20ebb19de6242115ce384f3ada32e8b5b96c6fcc9b632e91db745497be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39fe4e946d26a578b4c9b45490265e86a3b7ef03765249feaf12f666d9bd912f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39fe4e946d26a578b4c9b45490265e86a3b7ef03765249feaf12f666d9bd912f->enter($__internal_39fe4e946d26a578b4c9b45490265e86a3b7ef03765249feaf12f666d9bd912f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_39fe4e946d26a578b4c9b45490265e86a3b7ef03765249feaf12f666d9bd912f->leave($__internal_39fe4e946d26a578b4c9b45490265e86a3b7ef03765249feaf12f666d9bd912f_prof);

        
        $__internal_453ad20ebb19de6242115ce384f3ada32e8b5b96c6fcc9b632e91db745497be0->leave($__internal_453ad20ebb19de6242115ce384f3ada32e8b5b96c6fcc9b632e91db745497be0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
