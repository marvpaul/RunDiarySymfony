<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_99209af928aff2b080defa62e2cd71403f326a9bd9bc30f4b066a93f68e9ed37 extends Twig_Template
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
        $__internal_75de635fad4d2f03f0a423c4895f12bee749e0718cb091814524dccdb3f93d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75de635fad4d2f03f0a423c4895f12bee749e0718cb091814524dccdb3f93d6b->enter($__internal_75de635fad4d2f03f0a423c4895f12bee749e0718cb091814524dccdb3f93d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_59059073b4697f397831e6df4e500e72c9dc3b594bf4e0879d058108dfc44e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59059073b4697f397831e6df4e500e72c9dc3b594bf4e0879d058108dfc44e23->enter($__internal_59059073b4697f397831e6df4e500e72c9dc3b594bf4e0879d058108dfc44e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_75de635fad4d2f03f0a423c4895f12bee749e0718cb091814524dccdb3f93d6b->leave($__internal_75de635fad4d2f03f0a423c4895f12bee749e0718cb091814524dccdb3f93d6b_prof);

        
        $__internal_59059073b4697f397831e6df4e500e72c9dc3b594bf4e0879d058108dfc44e23->leave($__internal_59059073b4697f397831e6df4e500e72c9dc3b594bf4e0879d058108dfc44e23_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
