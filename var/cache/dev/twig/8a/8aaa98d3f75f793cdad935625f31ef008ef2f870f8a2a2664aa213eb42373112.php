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
        $__internal_8e62fb29ef54febea9cee01e8fc8d6040968167498359fe7a96293474e218dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e62fb29ef54febea9cee01e8fc8d6040968167498359fe7a96293474e218dca->enter($__internal_8e62fb29ef54febea9cee01e8fc8d6040968167498359fe7a96293474e218dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_851cee0001251e2818577ae9f3c20f15639f80472b4c639e07ba5b52613e8e37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851cee0001251e2818577ae9f3c20f15639f80472b4c639e07ba5b52613e8e37->enter($__internal_851cee0001251e2818577ae9f3c20f15639f80472b4c639e07ba5b52613e8e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e62fb29ef54febea9cee01e8fc8d6040968167498359fe7a96293474e218dca->leave($__internal_8e62fb29ef54febea9cee01e8fc8d6040968167498359fe7a96293474e218dca_prof);

        
        $__internal_851cee0001251e2818577ae9f3c20f15639f80472b4c639e07ba5b52613e8e37->leave($__internal_851cee0001251e2818577ae9f3c20f15639f80472b4c639e07ba5b52613e8e37_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2af7d01309026fbd5164544eb892c12439afb755efe18ad83b291aa626772e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af7d01309026fbd5164544eb892c12439afb755efe18ad83b291aa626772e09->enter($__internal_2af7d01309026fbd5164544eb892c12439afb755efe18ad83b291aa626772e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_beb061011c7bb745d3b87254b9b9e1e948838d8f14a075bf3ba9105cd8b6740b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb061011c7bb745d3b87254b9b9e1e948838d8f14a075bf3ba9105cd8b6740b->enter($__internal_beb061011c7bb745d3b87254b9b9e1e948838d8f14a075bf3ba9105cd8b6740b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_beb061011c7bb745d3b87254b9b9e1e948838d8f14a075bf3ba9105cd8b6740b->leave($__internal_beb061011c7bb745d3b87254b9b9e1e948838d8f14a075bf3ba9105cd8b6740b_prof);

        
        $__internal_2af7d01309026fbd5164544eb892c12439afb755efe18ad83b291aa626772e09->leave($__internal_2af7d01309026fbd5164544eb892c12439afb755efe18ad83b291aa626772e09_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7a0d4ce893fe3c867f60d8dddf1ace2e290862effc46cc0a563b236967e15d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a0d4ce893fe3c867f60d8dddf1ace2e290862effc46cc0a563b236967e15d81->enter($__internal_7a0d4ce893fe3c867f60d8dddf1ace2e290862effc46cc0a563b236967e15d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_88fc875904332b4846e7676c0950bb8208ab43ef28120a67ce0520e333587b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88fc875904332b4846e7676c0950bb8208ab43ef28120a67ce0520e333587b1a->enter($__internal_88fc875904332b4846e7676c0950bb8208ab43ef28120a67ce0520e333587b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_88fc875904332b4846e7676c0950bb8208ab43ef28120a67ce0520e333587b1a->leave($__internal_88fc875904332b4846e7676c0950bb8208ab43ef28120a67ce0520e333587b1a_prof);

        
        $__internal_7a0d4ce893fe3c867f60d8dddf1ace2e290862effc46cc0a563b236967e15d81->leave($__internal_7a0d4ce893fe3c867f60d8dddf1ace2e290862effc46cc0a563b236967e15d81_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5e0bb55ad1d3f72da40ddd6305ebc09ead7355fbff1e5ce80b8bd4f277abcc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e0bb55ad1d3f72da40ddd6305ebc09ead7355fbff1e5ce80b8bd4f277abcc9->enter($__internal_e5e0bb55ad1d3f72da40ddd6305ebc09ead7355fbff1e5ce80b8bd4f277abcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48884106774ec9cf7ba28ff1d4d79c1169946aa09d3e45028d26a83053f345a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48884106774ec9cf7ba28ff1d4d79c1169946aa09d3e45028d26a83053f345a9->enter($__internal_48884106774ec9cf7ba28ff1d4d79c1169946aa09d3e45028d26a83053f345a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_48884106774ec9cf7ba28ff1d4d79c1169946aa09d3e45028d26a83053f345a9->leave($__internal_48884106774ec9cf7ba28ff1d4d79c1169946aa09d3e45028d26a83053f345a9_prof);

        
        $__internal_e5e0bb55ad1d3f72da40ddd6305ebc09ead7355fbff1e5ce80b8bd4f277abcc9->leave($__internal_e5e0bb55ad1d3f72da40ddd6305ebc09ead7355fbff1e5ce80b8bd4f277abcc9_prof);

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
