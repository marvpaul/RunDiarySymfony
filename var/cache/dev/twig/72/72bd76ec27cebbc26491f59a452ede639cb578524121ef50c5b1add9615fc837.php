<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_126d2eab433a7f149dbfaf3b6e698b799d6143f035cb0dfadf88a80697a35a03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b86574b7542492c9e8ad300cc17727faeae4201a10f97e03dc316973432db976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86574b7542492c9e8ad300cc17727faeae4201a10f97e03dc316973432db976->enter($__internal_b86574b7542492c9e8ad300cc17727faeae4201a10f97e03dc316973432db976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_c0a05c259ea4debccae93966867b6d244ffde4b7d696270c52553d3882294b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a05c259ea4debccae93966867b6d244ffde4b7d696270c52553d3882294b35->enter($__internal_c0a05c259ea4debccae93966867b6d244ffde4b7d696270c52553d3882294b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b86574b7542492c9e8ad300cc17727faeae4201a10f97e03dc316973432db976->leave($__internal_b86574b7542492c9e8ad300cc17727faeae4201a10f97e03dc316973432db976_prof);

        
        $__internal_c0a05c259ea4debccae93966867b6d244ffde4b7d696270c52553d3882294b35->leave($__internal_c0a05c259ea4debccae93966867b6d244ffde4b7d696270c52553d3882294b35_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_40a627c629dea43e14fcdbd093adaf296b9f9da1eb4aa3e5f2b55b17038047e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a627c629dea43e14fcdbd093adaf296b9f9da1eb4aa3e5f2b55b17038047e1->enter($__internal_40a627c629dea43e14fcdbd093adaf296b9f9da1eb4aa3e5f2b55b17038047e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_287e5edcc3c789389ede85105db60042b641a6f59c5465a22ea284d239a327fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_287e5edcc3c789389ede85105db60042b641a6f59c5465a22ea284d239a327fc->enter($__internal_287e5edcc3c789389ede85105db60042b641a6f59c5465a22ea284d239a327fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_287e5edcc3c789389ede85105db60042b641a6f59c5465a22ea284d239a327fc->leave($__internal_287e5edcc3c789389ede85105db60042b641a6f59c5465a22ea284d239a327fc_prof);

        
        $__internal_40a627c629dea43e14fcdbd093adaf296b9f9da1eb4aa3e5f2b55b17038047e1->leave($__internal_40a627c629dea43e14fcdbd093adaf296b9f9da1eb4aa3e5f2b55b17038047e1_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b2df7f6f70f0fac7fa70ea2e8bcc77ca6d9b568c53f65e9dc17a125e355c6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b2df7f6f70f0fac7fa70ea2e8bcc77ca6d9b568c53f65e9dc17a125e355c6a6->enter($__internal_8b2df7f6f70f0fac7fa70ea2e8bcc77ca6d9b568c53f65e9dc17a125e355c6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a301dcbff3641370d8124f2614c1c88ee3d0abab9da8d0907d793aac4153ef49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a301dcbff3641370d8124f2614c1c88ee3d0abab9da8d0907d793aac4153ef49->enter($__internal_a301dcbff3641370d8124f2614c1c88ee3d0abab9da8d0907d793aac4153ef49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a301dcbff3641370d8124f2614c1c88ee3d0abab9da8d0907d793aac4153ef49->leave($__internal_a301dcbff3641370d8124f2614c1c88ee3d0abab9da8d0907d793aac4153ef49_prof);

        
        $__internal_8b2df7f6f70f0fac7fa70ea2e8bcc77ca6d9b568c53f65e9dc17a125e355c6a6->leave($__internal_8b2df7f6f70f0fac7fa70ea2e8bcc77ca6d9b568c53f65e9dc17a125e355c6a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig");
    }
}
