<?php

/* overview.twig */
class __TwigTemplate_a968d8c9d31773d8cddcaf45c8b7517674be2b4a84bdc944f2c4391a9c490341 extends Twig_Template
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
        $__internal_cf5665da6eb660dd5cec4618d6be5c690489a4c4996ec5e7406de457cdc43504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf5665da6eb660dd5cec4618d6be5c690489a4c4996ec5e7406de457cdc43504->enter($__internal_cf5665da6eb660dd5cec4618d6be5c690489a4c4996ec5e7406de457cdc43504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "overview.twig"));

        $__internal_f1e9d4c04c649edfe9d41222c7848399f89455be3bd6441c9a011b7a64339205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e9d4c04c649edfe9d41222c7848399f89455be3bd6441c9a011b7a64339205->enter($__internal_f1e9d4c04c649edfe9d41222c7848399f89455be3bd6441c9a011b7a64339205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "overview.twig"));

        // line 1
        echo "<div class=\"alert alert-dismissible alert-success col-3\" style=\"text-align: center; margin: auto; \">
    Entire entries: <br>
    <div class=\"text-shadow\">
        ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["entireDays"]) || array_key_exists("entireDays", $context) ? $context["entireDays"] : (function () { throw new Twig_Error_Runtime('Variable "entireDays" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "
    </div>
    <br>
</div>
<br>
<div class=\"alert alert-dismissible alert-success col-3\" style=\"text-align: center; margin: auto; \">
    Amount of days between first and last entry: <br>
    <div class=\"text-shadow\">
        ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["daysBetweenEndAndBeginning"]) || array_key_exists("daysBetweenEndAndBeginning", $context) ? $context["daysBetweenEndAndBeginning"] : (function () { throw new Twig_Error_Runtime('Variable "daysBetweenEndAndBeginning" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo " days
    </div>
    <br>
</div>
";
        
        $__internal_cf5665da6eb660dd5cec4618d6be5c690489a4c4996ec5e7406de457cdc43504->leave($__internal_cf5665da6eb660dd5cec4618d6be5c690489a4c4996ec5e7406de457cdc43504_prof);

        
        $__internal_f1e9d4c04c649edfe9d41222c7848399f89455be3bd6441c9a011b7a64339205->leave($__internal_f1e9d4c04c649edfe9d41222c7848399f89455be3bd6441c9a011b7a64339205_prof);

    }

    public function getTemplateName()
    {
        return "overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"alert alert-dismissible alert-success col-3\" style=\"text-align: center; margin: auto; \">
    Entire entries: <br>
    <div class=\"text-shadow\">
        {{ entireDays }}
    </div>
    <br>
</div>
<br>
<div class=\"alert alert-dismissible alert-success col-3\" style=\"text-align: center; margin: auto; \">
    Amount of days between first and last entry: <br>
    <div class=\"text-shadow\">
        {{ daysBetweenEndAndBeginning }} days
    </div>
    <br>
</div>
", "overview.twig", "/Users/marvinkruger/uebung6/templates/overview.twig");
    }
}
