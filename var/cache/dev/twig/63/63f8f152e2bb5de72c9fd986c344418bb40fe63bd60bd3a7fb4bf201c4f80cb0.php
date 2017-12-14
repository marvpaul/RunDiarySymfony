<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d1f3fef73a0c20aaf22d22b39d78db793c13981f25dc1a3a4a1dd8fe63d4e970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62c7dd3ffc167604c6d2e33c207b977d5a01fb9ec6c69dea1352a6aed4d65b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c7dd3ffc167604c6d2e33c207b977d5a01fb9ec6c69dea1352a6aed4d65b9b->enter($__internal_62c7dd3ffc167604c6d2e33c207b977d5a01fb9ec6c69dea1352a6aed4d65b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_06acb14320fa04ddf576a0c9145329dd75bb84abc7eff360e4f02939db34bb23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06acb14320fa04ddf576a0c9145329dd75bb84abc7eff360e4f02939db34bb23->enter($__internal_06acb14320fa04ddf576a0c9145329dd75bb84abc7eff360e4f02939db34bb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62c7dd3ffc167604c6d2e33c207b977d5a01fb9ec6c69dea1352a6aed4d65b9b->leave($__internal_62c7dd3ffc167604c6d2e33c207b977d5a01fb9ec6c69dea1352a6aed4d65b9b_prof);

        
        $__internal_06acb14320fa04ddf576a0c9145329dd75bb84abc7eff360e4f02939db34bb23->leave($__internal_06acb14320fa04ddf576a0c9145329dd75bb84abc7eff360e4f02939db34bb23_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc5396a08390393698debf999311cb8a47792c976e665d4987d8f17c42eef4ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc5396a08390393698debf999311cb8a47792c976e665d4987d8f17c42eef4ac->enter($__internal_dc5396a08390393698debf999311cb8a47792c976e665d4987d8f17c42eef4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_564c0a3df485bf6fa90665f4333cf8874dbbec1b11616119692c1dc680fb44b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_564c0a3df485bf6fa90665f4333cf8874dbbec1b11616119692c1dc680fb44b2->enter($__internal_564c0a3df485bf6fa90665f4333cf8874dbbec1b11616119692c1dc680fb44b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_564c0a3df485bf6fa90665f4333cf8874dbbec1b11616119692c1dc680fb44b2->leave($__internal_564c0a3df485bf6fa90665f4333cf8874dbbec1b11616119692c1dc680fb44b2_prof);

        
        $__internal_dc5396a08390393698debf999311cb8a47792c976e665d4987d8f17c42eef4ac->leave($__internal_dc5396a08390393698debf999311cb8a47792c976e665d4987d8f17c42eef4ac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
