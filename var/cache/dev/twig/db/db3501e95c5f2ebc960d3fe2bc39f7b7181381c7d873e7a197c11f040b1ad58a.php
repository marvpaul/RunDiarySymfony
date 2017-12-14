<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_81cb707c2d032be0d74a28fdeef85f827a47fd4b06ffd079f51b75401b1e4d92 extends Twig_Template
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
        $__internal_aed830512b47d19e3533f002d246875e5f71cc27b26097876bb3a15181ea31e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed830512b47d19e3533f002d246875e5f71cc27b26097876bb3a15181ea31e5->enter($__internal_aed830512b47d19e3533f002d246875e5f71cc27b26097876bb3a15181ea31e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_88549e5fc6487aea30e22945da39d6d185b476b6e5b0fd901065797cb8c01a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88549e5fc6487aea30e22945da39d6d185b476b6e5b0fd901065797cb8c01a09->enter($__internal_88549e5fc6487aea30e22945da39d6d185b476b6e5b0fd901065797cb8c01a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_aed830512b47d19e3533f002d246875e5f71cc27b26097876bb3a15181ea31e5->leave($__internal_aed830512b47d19e3533f002d246875e5f71cc27b26097876bb3a15181ea31e5_prof);

        
        $__internal_88549e5fc6487aea30e22945da39d6d185b476b6e5b0fd901065797cb8c01a09->leave($__internal_88549e5fc6487aea30e22945da39d6d185b476b6e5b0fd901065797cb8c01a09_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
