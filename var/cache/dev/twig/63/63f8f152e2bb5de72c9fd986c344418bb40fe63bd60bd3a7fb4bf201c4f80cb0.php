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
        $__internal_0bca4d0e48183583991e2ef8f38b1b5f84a3ecbf7a9529e6d431e3cd3e64abfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bca4d0e48183583991e2ef8f38b1b5f84a3ecbf7a9529e6d431e3cd3e64abfc->enter($__internal_0bca4d0e48183583991e2ef8f38b1b5f84a3ecbf7a9529e6d431e3cd3e64abfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_69c14583428082e67ad93c98fa9257561f4e6f985b0b569fa81052ff843bc707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c14583428082e67ad93c98fa9257561f4e6f985b0b569fa81052ff843bc707->enter($__internal_69c14583428082e67ad93c98fa9257561f4e6f985b0b569fa81052ff843bc707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bca4d0e48183583991e2ef8f38b1b5f84a3ecbf7a9529e6d431e3cd3e64abfc->leave($__internal_0bca4d0e48183583991e2ef8f38b1b5f84a3ecbf7a9529e6d431e3cd3e64abfc_prof);

        
        $__internal_69c14583428082e67ad93c98fa9257561f4e6f985b0b569fa81052ff843bc707->leave($__internal_69c14583428082e67ad93c98fa9257561f4e6f985b0b569fa81052ff843bc707_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1e53cf07bf15f10be15db5be29a4c39f20d42b9ae5add8776ac46035d5fe25e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e53cf07bf15f10be15db5be29a4c39f20d42b9ae5add8776ac46035d5fe25e9->enter($__internal_1e53cf07bf15f10be15db5be29a4c39f20d42b9ae5add8776ac46035d5fe25e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0854cf7e420c85c5597aa0560cd5259c10a6bcf82b7111853c1b3db48c2b543b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0854cf7e420c85c5597aa0560cd5259c10a6bcf82b7111853c1b3db48c2b543b->enter($__internal_0854cf7e420c85c5597aa0560cd5259c10a6bcf82b7111853c1b3db48c2b543b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_0854cf7e420c85c5597aa0560cd5259c10a6bcf82b7111853c1b3db48c2b543b->leave($__internal_0854cf7e420c85c5597aa0560cd5259c10a6bcf82b7111853c1b3db48c2b543b_prof);

        
        $__internal_1e53cf07bf15f10be15db5be29a4c39f20d42b9ae5add8776ac46035d5fe25e9->leave($__internal_1e53cf07bf15f10be15db5be29a4c39f20d42b9ae5add8776ac46035d5fe25e9_prof);

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
