<?php

/* newEntryForm.twig */
class __TwigTemplate_e3bd77e86e2380625a6d92f6eb2f0b99318199d4c531caa2ea51d6ffc4d20a34 extends Twig_Template
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
        $__internal_01a8bb068ae3bf5de4ee24e38839dbf6f94cf4567b697d1fb64e073d65324047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a8bb068ae3bf5de4ee24e38839dbf6f94cf4567b697d1fb64e073d65324047->enter($__internal_01a8bb068ae3bf5de4ee24e38839dbf6f94cf4567b697d1fb64e073d65324047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "newEntryForm.twig"));

        $__internal_fa46e7776519194201bbb8009eb4e4b9edafb8e475c27c626ef7fe8422d8b429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa46e7776519194201bbb8009eb4e4b9edafb8e475c27c626ef7fe8422d8b429->enter($__internal_fa46e7776519194201bbb8009eb4e4b9edafb8e475c27c626ef7fe8422d8b429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "newEntryForm.twig"));

        // line 1
        echo "<h2>Add a new entry</h2>
<form class=\"col-8\">
    <div class=\"form-group row\">
        <label for=\"input-date\" class=\"col-2 col-form-label\">Date</label>
        <div class=\"col-10\">
            <input  class=\"form-control\" type=\"date\" name=\"date\" value=\"2017-11-12\" id=\"input-date\">
        </div>
    </div>
    <div class=\"form-group row\">
        <label for=\"input-time\" class=\"col-2 col-form-label\">Time</label>
        <div class=\"col-10\">
            <input  class=\"form-control\" value=\"10:10:10\" type=\"time\" name=\"time\" id=\"input-time\">
            <br>
        </div>
    </div>
    <div class=\"form-group row\">
        <label for=\"input-distance\" class=\"col-2 col-form-label\">Distance</label>
        <div class=\"col-10\">
            <input  class=\"form-control\" type=\"number\" value=\"10\" name=\"distance\" id=\"input-distance\">
            <br>
        </div>
    </div>
    <div class=\"alert alert-success\" id=\"form-submit-mess\" role=\"alert\" style=\"display: none; \">
    </div>
    ";
        // line 25
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), array(0 => "bootstrap_3_layout.html.twig"), true);
        // line 26
        echo "    ";
        // line 27
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'widget');
        echo "
    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'form_end');
        echo "

    <div class=\"btn btn-warning\" id=\"submit-entry\">
        Save
    </div>
</form>";
        
        $__internal_01a8bb068ae3bf5de4ee24e38839dbf6f94cf4567b697d1fb64e073d65324047->leave($__internal_01a8bb068ae3bf5de4ee24e38839dbf6f94cf4567b697d1fb64e073d65324047_prof);

        
        $__internal_fa46e7776519194201bbb8009eb4e4b9edafb8e475c27c626ef7fe8422d8b429->leave($__internal_fa46e7776519194201bbb8009eb4e4b9edafb8e475c27c626ef7fe8422d8b429_prof);

    }

    public function getTemplateName()
    {
        return "newEntryForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 29,  60 => 28,  55 => 27,  53 => 26,  51 => 25,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Add a new entry</h2>
<form class=\"col-8\">
    <div class=\"form-group row\">
        <label for=\"input-date\" class=\"col-2 col-form-label\">Date</label>
        <div class=\"col-10\">
            <input  class=\"form-control\" type=\"date\" name=\"date\" value=\"2017-11-12\" id=\"input-date\">
        </div>
    </div>
    <div class=\"form-group row\">
        <label for=\"input-time\" class=\"col-2 col-form-label\">Time</label>
        <div class=\"col-10\">
            <input  class=\"form-control\" value=\"10:10:10\" type=\"time\" name=\"time\" id=\"input-time\">
            <br>
        </div>
    </div>
    <div class=\"form-group row\">
        <label for=\"input-distance\" class=\"col-2 col-form-label\">Distance</label>
        <div class=\"col-10\">
            <input  class=\"form-control\" type=\"number\" value=\"10\" name=\"distance\" id=\"input-distance\">
            <br>
        </div>
    </div>
    <div class=\"alert alert-success\" id=\"form-submit-mess\" role=\"alert\" style=\"display: none; \">
    </div>
    {% form_theme form 'bootstrap_3_layout.html.twig' %}
    {# templates/default/new.html.twig #}
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}

    <div class=\"btn btn-warning\" id=\"submit-entry\">
        Save
    </div>
</form>", "newEntryForm.twig", "/Users/marvinkruger/uebung6/templates/newEntryForm.twig");
    }
}
