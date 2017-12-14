<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_5e203b51271782fb45cdfc4a8268cd72f076cd7a142ce6293043b99c04530654 extends Twig_Template
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
        $__internal_9a3d8ac8b0d2742143d2bf71f25a5f5d829d7439ab96102e114d954fe9d80226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3d8ac8b0d2742143d2bf71f25a5f5d829d7439ab96102e114d954fe9d80226->enter($__internal_9a3d8ac8b0d2742143d2bf71f25a5f5d829d7439ab96102e114d954fe9d80226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_7e960151cd3072737b45c3e32cb926f9f6b096939f18c03b094d7c057bdfdc0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e960151cd3072737b45c3e32cb926f9f6b096939f18c03b094d7c057bdfdc0e->enter($__internal_7e960151cd3072737b45c3e32cb926f9f6b096939f18c03b094d7c057bdfdc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_9a3d8ac8b0d2742143d2bf71f25a5f5d829d7439ab96102e114d954fe9d80226->leave($__internal_9a3d8ac8b0d2742143d2bf71f25a5f5d829d7439ab96102e114d954fe9d80226_prof);

        
        $__internal_7e960151cd3072737b45c3e32cb926f9f6b096939f18c03b094d7c057bdfdc0e->leave($__internal_7e960151cd3072737b45c3e32cb926f9f6b096939f18c03b094d7c057bdfdc0e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
