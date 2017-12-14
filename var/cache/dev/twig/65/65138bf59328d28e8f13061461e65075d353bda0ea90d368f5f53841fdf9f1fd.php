<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_a1e8ca3c5afb77983764d05dccb06005a80925318ff3ef98c1a429c9791f0f16 extends Twig_Template
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
        $__internal_15eac4fc8d2c54d30076ee29f6864037c3f51d031436e42f58748afe3bfe7054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15eac4fc8d2c54d30076ee29f6864037c3f51d031436e42f58748afe3bfe7054->enter($__internal_15eac4fc8d2c54d30076ee29f6864037c3f51d031436e42f58748afe3bfe7054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_442b8b22d4a59852380941c423c793a20536ad12f01e3967f600f0304ddd91c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442b8b22d4a59852380941c423c793a20536ad12f01e3967f600f0304ddd91c9->enter($__internal_442b8b22d4a59852380941c423c793a20536ad12f01e3967f600f0304ddd91c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_15eac4fc8d2c54d30076ee29f6864037c3f51d031436e42f58748afe3bfe7054->leave($__internal_15eac4fc8d2c54d30076ee29f6864037c3f51d031436e42f58748afe3bfe7054_prof);

        
        $__internal_442b8b22d4a59852380941c423c793a20536ad12f01e3967f600f0304ddd91c9->leave($__internal_442b8b22d4a59852380941c423c793a20536ad12f01e3967f600f0304ddd91c9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
