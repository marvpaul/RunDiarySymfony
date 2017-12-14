<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_a60d6a52cbfab6cbf2194b7e3ea9b31a71da2b7755c190366f5a57974483f20e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2e50fc58513601267ed22f3e566329c4e593d32191a259441a71bd7848ad075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e50fc58513601267ed22f3e566329c4e593d32191a259441a71bd7848ad075->enter($__internal_f2e50fc58513601267ed22f3e566329c4e593d32191a259441a71bd7848ad075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_ef0f46018e7462245a1370d5aee0e469dcc587d485c5c7c7953ed5b093aa5412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0f46018e7462245a1370d5aee0e469dcc587d485c5c7c7953ed5b093aa5412->enter($__internal_ef0f46018e7462245a1370d5aee0e469dcc587d485c5c7c7953ed5b093aa5412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2e50fc58513601267ed22f3e566329c4e593d32191a259441a71bd7848ad075->leave($__internal_f2e50fc58513601267ed22f3e566329c4e593d32191a259441a71bd7848ad075_prof);

        
        $__internal_ef0f46018e7462245a1370d5aee0e469dcc587d485c5c7c7953ed5b093aa5412->leave($__internal_ef0f46018e7462245a1370d5aee0e469dcc587d485c5c7c7953ed5b093aa5412_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_acc698994dce537519b2125fdc439af966aa872c97b02a459374f305b7be805a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acc698994dce537519b2125fdc439af966aa872c97b02a459374f305b7be805a->enter($__internal_acc698994dce537519b2125fdc439af966aa872c97b02a459374f305b7be805a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b73948b7a1cfd9714fce4c2c0723e06d2cfb20afa34f06b9ce2c2bbb3e6c4f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b73948b7a1cfd9714fce4c2c0723e06d2cfb20afa34f06b9ce2c2bbb3e6c4f23->enter($__internal_b73948b7a1cfd9714fce4c2c0723e06d2cfb20afa34f06b9ce2c2bbb3e6c4f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b73948b7a1cfd9714fce4c2c0723e06d2cfb20afa34f06b9ce2c2bbb3e6c4f23->leave($__internal_b73948b7a1cfd9714fce4c2c0723e06d2cfb20afa34f06b9ce2c2bbb3e6c4f23_prof);

        
        $__internal_acc698994dce537519b2125fdc439af966aa872c97b02a459374f305b7be805a->leave($__internal_acc698994dce537519b2125fdc439af966aa872c97b02a459374f305b7be805a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d33f2682a27bf5605ce4d99616a42af1c7b2269e372c3fc34163aef3750bfc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d33f2682a27bf5605ce4d99616a42af1c7b2269e372c3fc34163aef3750bfc2->enter($__internal_3d33f2682a27bf5605ce4d99616a42af1c7b2269e372c3fc34163aef3750bfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ad848867b4de6fe50e626eb6765ea3957ec0f2890f4ac74460b508c85800297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad848867b4de6fe50e626eb6765ea3957ec0f2890f4ac74460b508c85800297->enter($__internal_9ad848867b4de6fe50e626eb6765ea3957ec0f2890f4ac74460b508c85800297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_9ad848867b4de6fe50e626eb6765ea3957ec0f2890f4ac74460b508c85800297->leave($__internal_9ad848867b4de6fe50e626eb6765ea3957ec0f2890f4ac74460b508c85800297_prof);

        
        $__internal_3d33f2682a27bf5605ce4d99616a42af1c7b2269e372c3fc34163aef3750bfc2->leave($__internal_3d33f2682a27bf5605ce4d99616a42af1c7b2269e372c3fc34163aef3750bfc2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
