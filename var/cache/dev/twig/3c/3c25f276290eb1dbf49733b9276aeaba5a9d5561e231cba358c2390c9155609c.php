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
        $__internal_273a4c95ca691c31c8cd7a3d0a506859bddc87dd164ce496d1ee4918c9136d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_273a4c95ca691c31c8cd7a3d0a506859bddc87dd164ce496d1ee4918c9136d8f->enter($__internal_273a4c95ca691c31c8cd7a3d0a506859bddc87dd164ce496d1ee4918c9136d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_ed7c4cc67a7f84c2454fa73c6c4b818a042916b0c89f6fab0ce9aab0fad08959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed7c4cc67a7f84c2454fa73c6c4b818a042916b0c89f6fab0ce9aab0fad08959->enter($__internal_ed7c4cc67a7f84c2454fa73c6c4b818a042916b0c89f6fab0ce9aab0fad08959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_273a4c95ca691c31c8cd7a3d0a506859bddc87dd164ce496d1ee4918c9136d8f->leave($__internal_273a4c95ca691c31c8cd7a3d0a506859bddc87dd164ce496d1ee4918c9136d8f_prof);

        
        $__internal_ed7c4cc67a7f84c2454fa73c6c4b818a042916b0c89f6fab0ce9aab0fad08959->leave($__internal_ed7c4cc67a7f84c2454fa73c6c4b818a042916b0c89f6fab0ce9aab0fad08959_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6997b591cd8e8cf882ae4b42b9e1787d2a2593d394c61a1d9bb83c61af14629c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6997b591cd8e8cf882ae4b42b9e1787d2a2593d394c61a1d9bb83c61af14629c->enter($__internal_6997b591cd8e8cf882ae4b42b9e1787d2a2593d394c61a1d9bb83c61af14629c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_332c1be5feab666fbf43f6a51ed061837ad190d089d16d977028423401d9c090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332c1be5feab666fbf43f6a51ed061837ad190d089d16d977028423401d9c090->enter($__internal_332c1be5feab666fbf43f6a51ed061837ad190d089d16d977028423401d9c090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_332c1be5feab666fbf43f6a51ed061837ad190d089d16d977028423401d9c090->leave($__internal_332c1be5feab666fbf43f6a51ed061837ad190d089d16d977028423401d9c090_prof);

        
        $__internal_6997b591cd8e8cf882ae4b42b9e1787d2a2593d394c61a1d9bb83c61af14629c->leave($__internal_6997b591cd8e8cf882ae4b42b9e1787d2a2593d394c61a1d9bb83c61af14629c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc05a85b819ee6a0be4d6171ed6021688526f7bfc2ff3f2be3b58e68aaf42e0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc05a85b819ee6a0be4d6171ed6021688526f7bfc2ff3f2be3b58e68aaf42e0c->enter($__internal_fc05a85b819ee6a0be4d6171ed6021688526f7bfc2ff3f2be3b58e68aaf42e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d38f508bc12ffce84c098d98be9596a49c483f6ec4064f04ad4226463f86b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d38f508bc12ffce84c098d98be9596a49c483f6ec4064f04ad4226463f86b07->enter($__internal_6d38f508bc12ffce84c098d98be9596a49c483f6ec4064f04ad4226463f86b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6d38f508bc12ffce84c098d98be9596a49c483f6ec4064f04ad4226463f86b07->leave($__internal_6d38f508bc12ffce84c098d98be9596a49c483f6ec4064f04ad4226463f86b07_prof);

        
        $__internal_fc05a85b819ee6a0be4d6171ed6021688526f7bfc2ff3f2be3b58e68aaf42e0c->leave($__internal_fc05a85b819ee6a0be4d6171ed6021688526f7bfc2ff3f2be3b58e68aaf42e0c_prof);

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
