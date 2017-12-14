<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_92e1355df436cabf6ce16efa7552c7f920fc8c503f956b373675362be953925a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b68b7c1aa466543af5920aaf153f9fc896e3a809f890db408b44354fb38c0e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b68b7c1aa466543af5920aaf153f9fc896e3a809f890db408b44354fb38c0e9d->enter($__internal_b68b7c1aa466543af5920aaf153f9fc896e3a809f890db408b44354fb38c0e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_69ddf4861549075d4661f1ae2439f5f54b4c40d0544481840d8514c8665b2ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ddf4861549075d4661f1ae2439f5f54b4c40d0544481840d8514c8665b2ff9->enter($__internal_69ddf4861549075d4661f1ae2439f5f54b4c40d0544481840d8514c8665b2ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b68b7c1aa466543af5920aaf153f9fc896e3a809f890db408b44354fb38c0e9d->leave($__internal_b68b7c1aa466543af5920aaf153f9fc896e3a809f890db408b44354fb38c0e9d_prof);

        
        $__internal_69ddf4861549075d4661f1ae2439f5f54b4c40d0544481840d8514c8665b2ff9->leave($__internal_69ddf4861549075d4661f1ae2439f5f54b4c40d0544481840d8514c8665b2ff9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f2b982f52d9d09b30f1c5668f672902f44b3176ed92cdc7728c38503b35a529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2b982f52d9d09b30f1c5668f672902f44b3176ed92cdc7728c38503b35a529->enter($__internal_6f2b982f52d9d09b30f1c5668f672902f44b3176ed92cdc7728c38503b35a529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d5b20b9a12023bbc624677a89a0ae354363e4bb636a3972cfc704278661d3247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b20b9a12023bbc624677a89a0ae354363e4bb636a3972cfc704278661d3247->enter($__internal_d5b20b9a12023bbc624677a89a0ae354363e4bb636a3972cfc704278661d3247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d5b20b9a12023bbc624677a89a0ae354363e4bb636a3972cfc704278661d3247->leave($__internal_d5b20b9a12023bbc624677a89a0ae354363e4bb636a3972cfc704278661d3247_prof);

        
        $__internal_6f2b982f52d9d09b30f1c5668f672902f44b3176ed92cdc7728c38503b35a529->leave($__internal_6f2b982f52d9d09b30f1c5668f672902f44b3176ed92cdc7728c38503b35a529_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2644f4a5d79de6e6118e2384c40d3fb377dda50f0d68b009df6b6dd3628baac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2644f4a5d79de6e6118e2384c40d3fb377dda50f0d68b009df6b6dd3628baac->enter($__internal_d2644f4a5d79de6e6118e2384c40d3fb377dda50f0d68b009df6b6dd3628baac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_186c63e327de6af4c18133ce88bc9dd73a30f8eb4c3f9e8e7c620e12b2958e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186c63e327de6af4c18133ce88bc9dd73a30f8eb4c3f9e8e7c620e12b2958e2c->enter($__internal_186c63e327de6af4c18133ce88bc9dd73a30f8eb4c3f9e8e7c620e12b2958e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_186c63e327de6af4c18133ce88bc9dd73a30f8eb4c3f9e8e7c620e12b2958e2c->leave($__internal_186c63e327de6af4c18133ce88bc9dd73a30f8eb4c3f9e8e7c620e12b2958e2c_prof);

        
        $__internal_d2644f4a5d79de6e6118e2384c40d3fb377dda50f0d68b009df6b6dd3628baac->leave($__internal_d2644f4a5d79de6e6118e2384c40d3fb377dda50f0d68b009df6b6dd3628baac_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36e1c244547bea524f1d657146a82da4b08a10d74cab75000dd849a8b448c878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e1c244547bea524f1d657146a82da4b08a10d74cab75000dd849a8b448c878->enter($__internal_36e1c244547bea524f1d657146a82da4b08a10d74cab75000dd849a8b448c878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8b6660403f53fe45c8b25d63bb1952f6b0785f22371cfc8a84abc837ba879287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6660403f53fe45c8b25d63bb1952f6b0785f22371cfc8a84abc837ba879287->enter($__internal_8b6660403f53fe45c8b25d63bb1952f6b0785f22371cfc8a84abc837ba879287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_8b6660403f53fe45c8b25d63bb1952f6b0785f22371cfc8a84abc837ba879287->leave($__internal_8b6660403f53fe45c8b25d63bb1952f6b0785f22371cfc8a84abc837ba879287_prof);

        
        $__internal_36e1c244547bea524f1d657146a82da4b08a10d74cab75000dd849a8b448c878->leave($__internal_36e1c244547bea524f1d657146a82da4b08a10d74cab75000dd849a8b448c878_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
