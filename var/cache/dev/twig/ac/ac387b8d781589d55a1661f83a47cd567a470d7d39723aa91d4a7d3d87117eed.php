<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b59a279d83c341a599d89e06220daac9c7118e40b323185242ae5cc1bf761a37 extends Twig_Template
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
        $__internal_ddf021d20794b9fa5e050487435443e018ce89bc0eae4c21132e97c16bd1dda4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf021d20794b9fa5e050487435443e018ce89bc0eae4c21132e97c16bd1dda4->enter($__internal_ddf021d20794b9fa5e050487435443e018ce89bc0eae4c21132e97c16bd1dda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6a5928b37a21db1292a832bcf6e82a5d6c7bffa72657f1ddfd038a294df5cefe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5928b37a21db1292a832bcf6e82a5d6c7bffa72657f1ddfd038a294df5cefe->enter($__internal_6a5928b37a21db1292a832bcf6e82a5d6c7bffa72657f1ddfd038a294df5cefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddf021d20794b9fa5e050487435443e018ce89bc0eae4c21132e97c16bd1dda4->leave($__internal_ddf021d20794b9fa5e050487435443e018ce89bc0eae4c21132e97c16bd1dda4_prof);

        
        $__internal_6a5928b37a21db1292a832bcf6e82a5d6c7bffa72657f1ddfd038a294df5cefe->leave($__internal_6a5928b37a21db1292a832bcf6e82a5d6c7bffa72657f1ddfd038a294df5cefe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_33675e40bed592ec9a57428948ed033a5a7a7a3ba9020c821066dcf02139ad25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33675e40bed592ec9a57428948ed033a5a7a7a3ba9020c821066dcf02139ad25->enter($__internal_33675e40bed592ec9a57428948ed033a5a7a7a3ba9020c821066dcf02139ad25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8634fcaf7668101af9174bac71437c1f87d61a2bb8463e3f0f1f9225b53ff001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8634fcaf7668101af9174bac71437c1f87d61a2bb8463e3f0f1f9225b53ff001->enter($__internal_8634fcaf7668101af9174bac71437c1f87d61a2bb8463e3f0f1f9225b53ff001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8634fcaf7668101af9174bac71437c1f87d61a2bb8463e3f0f1f9225b53ff001->leave($__internal_8634fcaf7668101af9174bac71437c1f87d61a2bb8463e3f0f1f9225b53ff001_prof);

        
        $__internal_33675e40bed592ec9a57428948ed033a5a7a7a3ba9020c821066dcf02139ad25->leave($__internal_33675e40bed592ec9a57428948ed033a5a7a7a3ba9020c821066dcf02139ad25_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0fe187e9d474ebf92476a72639e494a26133ad08d98594ea76dc90674cbf6d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe187e9d474ebf92476a72639e494a26133ad08d98594ea76dc90674cbf6d97->enter($__internal_0fe187e9d474ebf92476a72639e494a26133ad08d98594ea76dc90674cbf6d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_02f3fca14cd86ccbab6967069c8e96569b18e069560b4151cd265d58f07bb5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f3fca14cd86ccbab6967069c8e96569b18e069560b4151cd265d58f07bb5e6->enter($__internal_02f3fca14cd86ccbab6967069c8e96569b18e069560b4151cd265d58f07bb5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_02f3fca14cd86ccbab6967069c8e96569b18e069560b4151cd265d58f07bb5e6->leave($__internal_02f3fca14cd86ccbab6967069c8e96569b18e069560b4151cd265d58f07bb5e6_prof);

        
        $__internal_0fe187e9d474ebf92476a72639e494a26133ad08d98594ea76dc90674cbf6d97->leave($__internal_0fe187e9d474ebf92476a72639e494a26133ad08d98594ea76dc90674cbf6d97_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6629d38b3d307411c473875d94bfda546b4dc31e817d2e0de645c46ea1d32676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6629d38b3d307411c473875d94bfda546b4dc31e817d2e0de645c46ea1d32676->enter($__internal_6629d38b3d307411c473875d94bfda546b4dc31e817d2e0de645c46ea1d32676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_623afe5e25941a973dcbbec05a73531402baaf3cbc1096fd1138da556022073d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623afe5e25941a973dcbbec05a73531402baaf3cbc1096fd1138da556022073d->enter($__internal_623afe5e25941a973dcbbec05a73531402baaf3cbc1096fd1138da556022073d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_623afe5e25941a973dcbbec05a73531402baaf3cbc1096fd1138da556022073d->leave($__internal_623afe5e25941a973dcbbec05a73531402baaf3cbc1096fd1138da556022073d_prof);

        
        $__internal_6629d38b3d307411c473875d94bfda546b4dc31e817d2e0de645c46ea1d32676->leave($__internal_6629d38b3d307411c473875d94bfda546b4dc31e817d2e0de645c46ea1d32676_prof);

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
