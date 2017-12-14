<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_c3e57d5b64db9ed7d68b9e7e029f5ecad58ebb79e5b468ff6be58a8cca1a20cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3224f5b0361991a31ccf321d2cedf488a36cb4b466cc5cd0bc7dd0dd3ba7b84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3224f5b0361991a31ccf321d2cedf488a36cb4b466cc5cd0bc7dd0dd3ba7b84->enter($__internal_b3224f5b0361991a31ccf321d2cedf488a36cb4b466cc5cd0bc7dd0dd3ba7b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_ce5431f3d40bb76f3956d929f870529f4d941838e48a13932819bf54de2216dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5431f3d40bb76f3956d929f870529f4d941838e48a13932819bf54de2216dc->enter($__internal_ce5431f3d40bb76f3956d929f870529f4d941838e48a13932819bf54de2216dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_b3224f5b0361991a31ccf321d2cedf488a36cb4b466cc5cd0bc7dd0dd3ba7b84->leave($__internal_b3224f5b0361991a31ccf321d2cedf488a36cb4b466cc5cd0bc7dd0dd3ba7b84_prof);

        
        $__internal_ce5431f3d40bb76f3956d929f870529f4d941838e48a13932819bf54de2216dc->leave($__internal_ce5431f3d40bb76f3956d929f870529f4d941838e48a13932819bf54de2216dc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
