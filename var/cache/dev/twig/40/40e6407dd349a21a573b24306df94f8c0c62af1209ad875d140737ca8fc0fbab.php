<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d34f443f4d9f69b597969f63cbe04705d2626e325eed0e00375cbb1184d22aa5 extends Twig_Template
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
        $__internal_af0703e1d6dff31fff20e87f9378f1380907e33487f1af7ae9a96186e5bd6d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af0703e1d6dff31fff20e87f9378f1380907e33487f1af7ae9a96186e5bd6d8f->enter($__internal_af0703e1d6dff31fff20e87f9378f1380907e33487f1af7ae9a96186e5bd6d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6bd821b317f4e9b4e2293f01b17790966fc78411295319e1006340f54a67ffd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd821b317f4e9b4e2293f01b17790966fc78411295319e1006340f54a67ffd8->enter($__internal_6bd821b317f4e9b4e2293f01b17790966fc78411295319e1006340f54a67ffd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af0703e1d6dff31fff20e87f9378f1380907e33487f1af7ae9a96186e5bd6d8f->leave($__internal_af0703e1d6dff31fff20e87f9378f1380907e33487f1af7ae9a96186e5bd6d8f_prof);

        
        $__internal_6bd821b317f4e9b4e2293f01b17790966fc78411295319e1006340f54a67ffd8->leave($__internal_6bd821b317f4e9b4e2293f01b17790966fc78411295319e1006340f54a67ffd8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06f92dc963608083644ed1d43fb850c6ee0db8ce1c7e55e7cc4724b2eb1abfd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f92dc963608083644ed1d43fb850c6ee0db8ce1c7e55e7cc4724b2eb1abfd9->enter($__internal_06f92dc963608083644ed1d43fb850c6ee0db8ce1c7e55e7cc4724b2eb1abfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_62e369a34745cc7e8f40570ef8cdb4bd56089eb5eb05d3b29d232532fc01276a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e369a34745cc7e8f40570ef8cdb4bd56089eb5eb05d3b29d232532fc01276a->enter($__internal_62e369a34745cc7e8f40570ef8cdb4bd56089eb5eb05d3b29d232532fc01276a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_62e369a34745cc7e8f40570ef8cdb4bd56089eb5eb05d3b29d232532fc01276a->leave($__internal_62e369a34745cc7e8f40570ef8cdb4bd56089eb5eb05d3b29d232532fc01276a_prof);

        
        $__internal_06f92dc963608083644ed1d43fb850c6ee0db8ce1c7e55e7cc4724b2eb1abfd9->leave($__internal_06f92dc963608083644ed1d43fb850c6ee0db8ce1c7e55e7cc4724b2eb1abfd9_prof);

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
