<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_8ee79bb08937b502b6c812bce6a1c87dcb16d0df7668549c3476989a6c2e4491 extends Twig_Template
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
        $__internal_6f6f9507d713a1e5382ae6884a19bb0396af6b07cbcc643d4e6680b1edacf578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6f9507d713a1e5382ae6884a19bb0396af6b07cbcc643d4e6680b1edacf578->enter($__internal_6f6f9507d713a1e5382ae6884a19bb0396af6b07cbcc643d4e6680b1edacf578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_fde313b3c0e10f0465e1feb738bf8602692be48d2bcdc352a53483b987729031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde313b3c0e10f0465e1feb738bf8602692be48d2bcdc352a53483b987729031->enter($__internal_fde313b3c0e10f0465e1feb738bf8602692be48d2bcdc352a53483b987729031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_6f6f9507d713a1e5382ae6884a19bb0396af6b07cbcc643d4e6680b1edacf578->leave($__internal_6f6f9507d713a1e5382ae6884a19bb0396af6b07cbcc643d4e6680b1edacf578_prof);

        
        $__internal_fde313b3c0e10f0465e1feb738bf8602692be48d2bcdc352a53483b987729031->leave($__internal_fde313b3c0e10f0465e1feb738bf8602692be48d2bcdc352a53483b987729031_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
