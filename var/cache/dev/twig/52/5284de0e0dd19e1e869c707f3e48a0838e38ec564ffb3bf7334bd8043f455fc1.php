<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b8613f298975553b790ae0955d0f96b25f85ed6a9974d3eb2378a6df2fe9246a extends Twig_Template
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
        $__internal_00c6837add4306aae4bccc73792fbd78ae083b220077e1e1ec3db41cae4e7075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00c6837add4306aae4bccc73792fbd78ae083b220077e1e1ec3db41cae4e7075->enter($__internal_00c6837add4306aae4bccc73792fbd78ae083b220077e1e1ec3db41cae4e7075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_a36865d591d1030b46b50bfee75d1e9ca964b99142c59c6e6fc2451e84ef3e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36865d591d1030b46b50bfee75d1e9ca964b99142c59c6e6fc2451e84ef3e13->enter($__internal_a36865d591d1030b46b50bfee75d1e9ca964b99142c59c6e6fc2451e84ef3e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_00c6837add4306aae4bccc73792fbd78ae083b220077e1e1ec3db41cae4e7075->leave($__internal_00c6837add4306aae4bccc73792fbd78ae083b220077e1e1ec3db41cae4e7075_prof);

        
        $__internal_a36865d591d1030b46b50bfee75d1e9ca964b99142c59c6e6fc2451e84ef3e13->leave($__internal_a36865d591d1030b46b50bfee75d1e9ca964b99142c59c6e6fc2451e84ef3e13_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
