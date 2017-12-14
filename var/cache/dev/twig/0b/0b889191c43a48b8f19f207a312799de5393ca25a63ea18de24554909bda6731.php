<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_bb61051bf8bd00854eade221e99401b8af36e04bf1544172e13f8249da769a2a extends Twig_Template
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
        $__internal_d11999114b98b1ce832d242dc972e462293dbe215b2086a942bc898c8f72c229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11999114b98b1ce832d242dc972e462293dbe215b2086a942bc898c8f72c229->enter($__internal_d11999114b98b1ce832d242dc972e462293dbe215b2086a942bc898c8f72c229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_6c9e290f823d07541090030c001b72590ea90412dbe64dc25d76fbea0f5f1683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9e290f823d07541090030c001b72590ea90412dbe64dc25d76fbea0f5f1683->enter($__internal_6c9e290f823d07541090030c001b72590ea90412dbe64dc25d76fbea0f5f1683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d11999114b98b1ce832d242dc972e462293dbe215b2086a942bc898c8f72c229->leave($__internal_d11999114b98b1ce832d242dc972e462293dbe215b2086a942bc898c8f72c229_prof);

        
        $__internal_6c9e290f823d07541090030c001b72590ea90412dbe64dc25d76fbea0f5f1683->leave($__internal_6c9e290f823d07541090030c001b72590ea90412dbe64dc25d76fbea0f5f1683_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bundle/Resources/views/Exception/error.txt.twig");
    }
}
