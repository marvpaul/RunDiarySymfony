<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_91d607776d43c9e906e0bd8e0a68f40f466e3587a8cdf788275c3c87aae140e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_45b5d4747b874e640ed24daadc6284750ce8acf1e9bf569db214a4021c407787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b5d4747b874e640ed24daadc6284750ce8acf1e9bf569db214a4021c407787->enter($__internal_45b5d4747b874e640ed24daadc6284750ce8acf1e9bf569db214a4021c407787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_17d98031efd0c10ba890b0c6c7231167e1b56065136af863b3e5c5e984323621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d98031efd0c10ba890b0c6c7231167e1b56065136af863b3e5c5e984323621->enter($__internal_17d98031efd0c10ba890b0c6c7231167e1b56065136af863b3e5c5e984323621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45b5d4747b874e640ed24daadc6284750ce8acf1e9bf569db214a4021c407787->leave($__internal_45b5d4747b874e640ed24daadc6284750ce8acf1e9bf569db214a4021c407787_prof);

        
        $__internal_17d98031efd0c10ba890b0c6c7231167e1b56065136af863b3e5c5e984323621->leave($__internal_17d98031efd0c10ba890b0c6c7231167e1b56065136af863b3e5c5e984323621_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ef9711502a52ae5338604d148c7642a9edeff44c5fb330fb49b43f5c0a85631d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef9711502a52ae5338604d148c7642a9edeff44c5fb330fb49b43f5c0a85631d->enter($__internal_ef9711502a52ae5338604d148c7642a9edeff44c5fb330fb49b43f5c0a85631d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aa335bdbbd7dcd908fc6b118b3f9e4d8105abc32b4dceea02ad8384791b83d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa335bdbbd7dcd908fc6b118b3f9e4d8105abc32b4dceea02ad8384791b83d02->enter($__internal_aa335bdbbd7dcd908fc6b118b3f9e4d8105abc32b4dceea02ad8384791b83d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aa335bdbbd7dcd908fc6b118b3f9e4d8105abc32b4dceea02ad8384791b83d02->leave($__internal_aa335bdbbd7dcd908fc6b118b3f9e4d8105abc32b4dceea02ad8384791b83d02_prof);

        
        $__internal_ef9711502a52ae5338604d148c7642a9edeff44c5fb330fb49b43f5c0a85631d->leave($__internal_ef9711502a52ae5338604d148c7642a9edeff44c5fb330fb49b43f5c0a85631d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eb16c84d81548eb8cb02eab5d3b1339f915a43ef833a7b470bfb42e89c288d20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb16c84d81548eb8cb02eab5d3b1339f915a43ef833a7b470bfb42e89c288d20->enter($__internal_eb16c84d81548eb8cb02eab5d3b1339f915a43ef833a7b470bfb42e89c288d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_354a358d83800222ac6e4fdfa6985e015f8d2e95b6e0ad7f00dbd66fe30ab61b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354a358d83800222ac6e4fdfa6985e015f8d2e95b6e0ad7f00dbd66fe30ab61b->enter($__internal_354a358d83800222ac6e4fdfa6985e015f8d2e95b6e0ad7f00dbd66fe30ab61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_354a358d83800222ac6e4fdfa6985e015f8d2e95b6e0ad7f00dbd66fe30ab61b->leave($__internal_354a358d83800222ac6e4fdfa6985e015f8d2e95b6e0ad7f00dbd66fe30ab61b_prof);

        
        $__internal_eb16c84d81548eb8cb02eab5d3b1339f915a43ef833a7b470bfb42e89c288d20->leave($__internal_eb16c84d81548eb8cb02eab5d3b1339f915a43ef833a7b470bfb42e89c288d20_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce3fcbc01a334f68484e3cade792c03cffc4d06a405c8b45e08351358637a004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce3fcbc01a334f68484e3cade792c03cffc4d06a405c8b45e08351358637a004->enter($__internal_ce3fcbc01a334f68484e3cade792c03cffc4d06a405c8b45e08351358637a004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_91985a71259c50c669bbf42b1d79aeb09b7add057c721e1519620e7be4cdd791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91985a71259c50c669bbf42b1d79aeb09b7add057c721e1519620e7be4cdd791->enter($__internal_91985a71259c50c669bbf42b1d79aeb09b7add057c721e1519620e7be4cdd791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_91985a71259c50c669bbf42b1d79aeb09b7add057c721e1519620e7be4cdd791->leave($__internal_91985a71259c50c669bbf42b1d79aeb09b7add057c721e1519620e7be4cdd791_prof);

        
        $__internal_ce3fcbc01a334f68484e3cade792c03cffc4d06a405c8b45e08351358637a004->leave($__internal_ce3fcbc01a334f68484e3cade792c03cffc4d06a405c8b45e08351358637a004_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
