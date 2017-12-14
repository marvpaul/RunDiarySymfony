<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6890adf770e7101ac0118bb991243c4ba4525f373828976533083ca0e0a04a99 extends Twig_Template
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
        $__internal_c3092632a6e4b4d8bd0eca17affa26c2b40a79b054fa112222423c5f5dc0b2f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3092632a6e4b4d8bd0eca17affa26c2b40a79b054fa112222423c5f5dc0b2f3->enter($__internal_c3092632a6e4b4d8bd0eca17affa26c2b40a79b054fa112222423c5f5dc0b2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_6f7cf1cb9c3789c1b5e522f83f87d4aabb37d77482a7a0a32611f51232949c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7cf1cb9c3789c1b5e522f83f87d4aabb37d77482a7a0a32611f51232949c79->enter($__internal_6f7cf1cb9c3789c1b5e522f83f87d4aabb37d77482a7a0a32611f51232949c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_c3092632a6e4b4d8bd0eca17affa26c2b40a79b054fa112222423c5f5dc0b2f3->leave($__internal_c3092632a6e4b4d8bd0eca17affa26c2b40a79b054fa112222423c5f5dc0b2f3_prof);

        
        $__internal_6f7cf1cb9c3789c1b5e522f83f87d4aabb37d77482a7a0a32611f51232949c79->leave($__internal_6f7cf1cb9c3789c1b5e522f83f87d4aabb37d77482a7a0a32611f51232949c79_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
