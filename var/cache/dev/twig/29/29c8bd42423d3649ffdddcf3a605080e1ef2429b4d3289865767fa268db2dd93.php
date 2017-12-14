<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_d340a8bdfd5165573d48472154942cc6647b68a8b64339be5b5ab35ec949b7fc extends Twig_Template
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
        $__internal_5b06e8245b41b3f996456fe975acef9ce3a9ac9feca428c05e9c2b131a5fd0eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b06e8245b41b3f996456fe975acef9ce3a9ac9feca428c05e9c2b131a5fd0eb->enter($__internal_5b06e8245b41b3f996456fe975acef9ce3a9ac9feca428c05e9c2b131a5fd0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_17461ab65b3de0a1d12f42171e8f695fe6822b6815d084b236c671ea5087f594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17461ab65b3de0a1d12f42171e8f695fe6822b6815d084b236c671ea5087f594->enter($__internal_17461ab65b3de0a1d12f42171e8f695fe6822b6815d084b236c671ea5087f594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_5b06e8245b41b3f996456fe975acef9ce3a9ac9feca428c05e9c2b131a5fd0eb->leave($__internal_5b06e8245b41b3f996456fe975acef9ce3a9ac9feca428c05e9c2b131a5fd0eb_prof);

        
        $__internal_17461ab65b3de0a1d12f42171e8f695fe6822b6815d084b236c671ea5087f594->leave($__internal_17461ab65b3de0a1d12f42171e8f695fe6822b6815d084b236c671ea5087f594_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
