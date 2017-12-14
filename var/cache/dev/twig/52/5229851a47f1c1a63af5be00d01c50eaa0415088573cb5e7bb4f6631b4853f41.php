<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_2e0e43f7402fd290907cd9f4cebf9c47a7187347932cf69d79ff931fa0493337 extends Twig_Template
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
        $__internal_cbf1b3def8eaea609bbebe20fb4e307b848712d281f3be34fdb0e8dd6b43fc1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbf1b3def8eaea609bbebe20fb4e307b848712d281f3be34fdb0e8dd6b43fc1e->enter($__internal_cbf1b3def8eaea609bbebe20fb4e307b848712d281f3be34fdb0e8dd6b43fc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_4309ffd3e24ad3691b645f2ba62bfc9c72e05926a16753c54fa918c01386e068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4309ffd3e24ad3691b645f2ba62bfc9c72e05926a16753c54fa918c01386e068->enter($__internal_4309ffd3e24ad3691b645f2ba62bfc9c72e05926a16753c54fa918c01386e068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_cbf1b3def8eaea609bbebe20fb4e307b848712d281f3be34fdb0e8dd6b43fc1e->leave($__internal_cbf1b3def8eaea609bbebe20fb4e307b848712d281f3be34fdb0e8dd6b43fc1e_prof);

        
        $__internal_4309ffd3e24ad3691b645f2ba62bfc9c72e05926a16753c54fa918c01386e068->leave($__internal_4309ffd3e24ad3691b645f2ba62bfc9c72e05926a16753c54fa918c01386e068_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
