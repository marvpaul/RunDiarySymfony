<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_2b0cc4300e76715f35d5f8a319d477542978c35b349945737a0697c787d15e9f extends Twig_Template
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
        $__internal_9780cc6c1d0e777b19946d26e4ae3fe9b9e5143a1f09f3f67aab7edf4a375ccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9780cc6c1d0e777b19946d26e4ae3fe9b9e5143a1f09f3f67aab7edf4a375ccf->enter($__internal_9780cc6c1d0e777b19946d26e4ae3fe9b9e5143a1f09f3f67aab7edf4a375ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_f9ce83c9b4bb81fd845ec1985c625084b42e5ea26ef3d9e44d49c55721308849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ce83c9b4bb81fd845ec1985c625084b42e5ea26ef3d9e44d49c55721308849->enter($__internal_f9ce83c9b4bb81fd845ec1985c625084b42e5ea26ef3d9e44d49c55721308849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_9780cc6c1d0e777b19946d26e4ae3fe9b9e5143a1f09f3f67aab7edf4a375ccf->leave($__internal_9780cc6c1d0e777b19946d26e4ae3fe9b9e5143a1f09f3f67aab7edf4a375ccf_prof);

        
        $__internal_f9ce83c9b4bb81fd845ec1985c625084b42e5ea26ef3d9e44d49c55721308849->leave($__internal_f9ce83c9b4bb81fd845ec1985c625084b42e5ea26ef3d9e44d49c55721308849_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
