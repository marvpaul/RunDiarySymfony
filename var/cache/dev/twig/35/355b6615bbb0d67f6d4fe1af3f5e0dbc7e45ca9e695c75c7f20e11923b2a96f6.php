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
        $__internal_49865fe833ea6be5aac7fd775dff808eb077600aedcf70665af5b9879042713c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49865fe833ea6be5aac7fd775dff808eb077600aedcf70665af5b9879042713c->enter($__internal_49865fe833ea6be5aac7fd775dff808eb077600aedcf70665af5b9879042713c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a64e338f4884267e75795ff977acbb066d887e8d8d91bab090e23b4de1105a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64e338f4884267e75795ff977acbb066d887e8d8d91bab090e23b4de1105a69->enter($__internal_a64e338f4884267e75795ff977acbb066d887e8d8d91bab090e23b4de1105a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49865fe833ea6be5aac7fd775dff808eb077600aedcf70665af5b9879042713c->leave($__internal_49865fe833ea6be5aac7fd775dff808eb077600aedcf70665af5b9879042713c_prof);

        
        $__internal_a64e338f4884267e75795ff977acbb066d887e8d8d91bab090e23b4de1105a69->leave($__internal_a64e338f4884267e75795ff977acbb066d887e8d8d91bab090e23b4de1105a69_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_262450b33371695be6ff3b92658fc1a896c7c9185820fcba00ceccd5ae7c5eba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262450b33371695be6ff3b92658fc1a896c7c9185820fcba00ceccd5ae7c5eba->enter($__internal_262450b33371695be6ff3b92658fc1a896c7c9185820fcba00ceccd5ae7c5eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_875362ef791d0471fdc1706a7704833a1918194ef269da699c9fb84e4c04e024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875362ef791d0471fdc1706a7704833a1918194ef269da699c9fb84e4c04e024->enter($__internal_875362ef791d0471fdc1706a7704833a1918194ef269da699c9fb84e4c04e024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_875362ef791d0471fdc1706a7704833a1918194ef269da699c9fb84e4c04e024->leave($__internal_875362ef791d0471fdc1706a7704833a1918194ef269da699c9fb84e4c04e024_prof);

        
        $__internal_262450b33371695be6ff3b92658fc1a896c7c9185820fcba00ceccd5ae7c5eba->leave($__internal_262450b33371695be6ff3b92658fc1a896c7c9185820fcba00ceccd5ae7c5eba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_00f072bb6b7f4a78990b1eb3f41d4b5898e6a93e30de2913f418e9b18ba5bef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f072bb6b7f4a78990b1eb3f41d4b5898e6a93e30de2913f418e9b18ba5bef3->enter($__internal_00f072bb6b7f4a78990b1eb3f41d4b5898e6a93e30de2913f418e9b18ba5bef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4b951fd16c3b4e70ce385b47c93547b193428e0c3efd085f97f366737652da9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b951fd16c3b4e70ce385b47c93547b193428e0c3efd085f97f366737652da9a->enter($__internal_4b951fd16c3b4e70ce385b47c93547b193428e0c3efd085f97f366737652da9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4b951fd16c3b4e70ce385b47c93547b193428e0c3efd085f97f366737652da9a->leave($__internal_4b951fd16c3b4e70ce385b47c93547b193428e0c3efd085f97f366737652da9a_prof);

        
        $__internal_00f072bb6b7f4a78990b1eb3f41d4b5898e6a93e30de2913f418e9b18ba5bef3->leave($__internal_00f072bb6b7f4a78990b1eb3f41d4b5898e6a93e30de2913f418e9b18ba5bef3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c8b4f75aabc2c5e29386e75bc2a9e5da070462dcd95e7ad75c216b2ffa97ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8b4f75aabc2c5e29386e75bc2a9e5da070462dcd95e7ad75c216b2ffa97ea1->enter($__internal_2c8b4f75aabc2c5e29386e75bc2a9e5da070462dcd95e7ad75c216b2ffa97ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ca51ffb8b2c5c87ed82b1b97ac9de3762bc222be2d3ef169043dc44c1cda8f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca51ffb8b2c5c87ed82b1b97ac9de3762bc222be2d3ef169043dc44c1cda8f39->enter($__internal_ca51ffb8b2c5c87ed82b1b97ac9de3762bc222be2d3ef169043dc44c1cda8f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ca51ffb8b2c5c87ed82b1b97ac9de3762bc222be2d3ef169043dc44c1cda8f39->leave($__internal_ca51ffb8b2c5c87ed82b1b97ac9de3762bc222be2d3ef169043dc44c1cda8f39_prof);

        
        $__internal_2c8b4f75aabc2c5e29386e75bc2a9e5da070462dcd95e7ad75c216b2ffa97ea1->leave($__internal_2c8b4f75aabc2c5e29386e75bc2a9e5da070462dcd95e7ad75c216b2ffa97ea1_prof);

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
