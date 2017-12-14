<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_95fe2df36ed8680c797cb9ef8df5c8d320f151d99d5796a951f0c80592d13810 extends Twig_Template
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
        $__internal_4c1a0a3cc14718373fdd79bccc0c32c7c0c9826572842ea05c7515872f3045f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1a0a3cc14718373fdd79bccc0c32c7c0c9826572842ea05c7515872f3045f8->enter($__internal_4c1a0a3cc14718373fdd79bccc0c32c7c0c9826572842ea05c7515872f3045f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8a104ae7c94685d89ba75191a1278a9b01d0ad01a2191e2be00bb3228dad77bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a104ae7c94685d89ba75191a1278a9b01d0ad01a2191e2be00bb3228dad77bf->enter($__internal_8a104ae7c94685d89ba75191a1278a9b01d0ad01a2191e2be00bb3228dad77bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c1a0a3cc14718373fdd79bccc0c32c7c0c9826572842ea05c7515872f3045f8->leave($__internal_4c1a0a3cc14718373fdd79bccc0c32c7c0c9826572842ea05c7515872f3045f8_prof);

        
        $__internal_8a104ae7c94685d89ba75191a1278a9b01d0ad01a2191e2be00bb3228dad77bf->leave($__internal_8a104ae7c94685d89ba75191a1278a9b01d0ad01a2191e2be00bb3228dad77bf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_421206a1feddc4ad589021bb8a7b7020f814f67cffb1a957db0571e4244a8316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_421206a1feddc4ad589021bb8a7b7020f814f67cffb1a957db0571e4244a8316->enter($__internal_421206a1feddc4ad589021bb8a7b7020f814f67cffb1a957db0571e4244a8316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c45a40bbb70573230c94476b923ca33a5a3e667f914b359177965936b0aba442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45a40bbb70573230c94476b923ca33a5a3e667f914b359177965936b0aba442->enter($__internal_c45a40bbb70573230c94476b923ca33a5a3e667f914b359177965936b0aba442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c45a40bbb70573230c94476b923ca33a5a3e667f914b359177965936b0aba442->leave($__internal_c45a40bbb70573230c94476b923ca33a5a3e667f914b359177965936b0aba442_prof);

        
        $__internal_421206a1feddc4ad589021bb8a7b7020f814f67cffb1a957db0571e4244a8316->leave($__internal_421206a1feddc4ad589021bb8a7b7020f814f67cffb1a957db0571e4244a8316_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92f48173d79df2f18aa07e247fac8c3dd515bcfe8b49d099c08600097a33be5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f48173d79df2f18aa07e247fac8c3dd515bcfe8b49d099c08600097a33be5f->enter($__internal_92f48173d79df2f18aa07e247fac8c3dd515bcfe8b49d099c08600097a33be5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c471a6e5bdce54f8b7c969f9137860a398e271ab53921e2011ab89679cb67ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c471a6e5bdce54f8b7c969f9137860a398e271ab53921e2011ab89679cb67ea6->enter($__internal_c471a6e5bdce54f8b7c969f9137860a398e271ab53921e2011ab89679cb67ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c471a6e5bdce54f8b7c969f9137860a398e271ab53921e2011ab89679cb67ea6->leave($__internal_c471a6e5bdce54f8b7c969f9137860a398e271ab53921e2011ab89679cb67ea6_prof);

        
        $__internal_92f48173d79df2f18aa07e247fac8c3dd515bcfe8b49d099c08600097a33be5f->leave($__internal_92f48173d79df2f18aa07e247fac8c3dd515bcfe8b49d099c08600097a33be5f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f5ea6ad91c3812628359ee66a481ca578d2d4c79b046ea43b47f427be0bc28a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ea6ad91c3812628359ee66a481ca578d2d4c79b046ea43b47f427be0bc28a8->enter($__internal_f5ea6ad91c3812628359ee66a481ca578d2d4c79b046ea43b47f427be0bc28a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_091ef6baa1669a02132b6507e5a92106142630e93ea43c4880272e1ba29b1179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091ef6baa1669a02132b6507e5a92106142630e93ea43c4880272e1ba29b1179->enter($__internal_091ef6baa1669a02132b6507e5a92106142630e93ea43c4880272e1ba29b1179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_091ef6baa1669a02132b6507e5a92106142630e93ea43c4880272e1ba29b1179->leave($__internal_091ef6baa1669a02132b6507e5a92106142630e93ea43c4880272e1ba29b1179_prof);

        
        $__internal_f5ea6ad91c3812628359ee66a481ca578d2d4c79b046ea43b47f427be0bc28a8->leave($__internal_f5ea6ad91c3812628359ee66a481ca578d2d4c79b046ea43b47f427be0bc28a8_prof);

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
