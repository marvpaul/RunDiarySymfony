<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_28ad6c153cf86fc85596ddc09b682fcff44316e324fd511ad42afaf3c183e57a extends Twig_Template
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
        $__internal_3555d5ab2f92a783adae2db012378cc74f8a1c605b7d40587553b957172d14d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3555d5ab2f92a783adae2db012378cc74f8a1c605b7d40587553b957172d14d4->enter($__internal_3555d5ab2f92a783adae2db012378cc74f8a1c605b7d40587553b957172d14d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_1d0ac9f2e0189af6e628f098f31b07e114aa962b41022d53ae2353df96f736fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0ac9f2e0189af6e628f098f31b07e114aa962b41022d53ae2353df96f736fc->enter($__internal_1d0ac9f2e0189af6e628f098f31b07e114aa962b41022d53ae2353df96f736fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_3555d5ab2f92a783adae2db012378cc74f8a1c605b7d40587553b957172d14d4->leave($__internal_3555d5ab2f92a783adae2db012378cc74f8a1c605b7d40587553b957172d14d4_prof);

        
        $__internal_1d0ac9f2e0189af6e628f098f31b07e114aa962b41022d53ae2353df96f736fc->leave($__internal_1d0ac9f2e0189af6e628f098f31b07e114aa962b41022d53ae2353df96f736fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
