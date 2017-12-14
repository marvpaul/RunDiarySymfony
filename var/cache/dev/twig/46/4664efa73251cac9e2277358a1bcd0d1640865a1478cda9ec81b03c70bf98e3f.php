<?php

/* diary.twig */
class __TwigTemplate_c3ed6295b71713f210b456d7e47906e118c4512c2b93020ff83f95aab23ed74e extends Twig_Template
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
        $__internal_b3a451ca0d5eb378abc2e8feef2c12cad0a0985de99bdf8cc97067d0cadaef25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a451ca0d5eb378abc2e8feef2c12cad0a0985de99bdf8cc97067d0cadaef25->enter($__internal_b3a451ca0d5eb378abc2e8feef2c12cad0a0985de99bdf8cc97067d0cadaef25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "diary.twig"));

        $__internal_448c835af5a35593929b35c737035974ab49bd69e81d9dbedafdb7cbbb1fb517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448c835af5a35593929b35c737035974ab49bd69e81d9dbedafdb7cbbb1fb517->enter($__internal_448c835af5a35593929b35c737035974ab49bd69e81d9dbedafdb7cbbb1fb517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "diary.twig"));

        // line 1
        echo "<table class=\"table table-striped col-12\" id=\"diary\">
    <thead>
    <tr>
        <th>Date</th>
        <th>Distance</th>
        <th>Time</th>
        <th>Average Speed</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diary"]) || array_key_exists("diary", $context) ? $context["diary"] : (function () { throw new Twig_Error_Runtime('Variable "diary" does not exist.', 11, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["date"] => $context["runEntry"]) {
            // line 12
            echo "        <tr>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $context["date"], "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["runEntry"], "distance", array()), "html", null, true);
            echo " km </td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["runEntry"], "time", array()), "html", null, true);
            echo " h</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["runEntry"], "avgSpeed", array()), 2, "floor"), "html", null, true);
            echo " km/h</td>
            <td><a href=\"delete/";
            // line 17
            echo twig_escape_filter($this->env, $context["date"], "html", null, true);
            echo "\" class=\"delete-button btn btn-block btn-info\">Delete</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['date'], $context['runEntry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </tbody>
</table>";
        
        $__internal_b3a451ca0d5eb378abc2e8feef2c12cad0a0985de99bdf8cc97067d0cadaef25->leave($__internal_b3a451ca0d5eb378abc2e8feef2c12cad0a0985de99bdf8cc97067d0cadaef25_prof);

        
        $__internal_448c835af5a35593929b35c737035974ab49bd69e81d9dbedafdb7cbbb1fb517->leave($__internal_448c835af5a35593929b35c737035974ab49bd69e81d9dbedafdb7cbbb1fb517_prof);

    }

    public function getTemplateName()
    {
        return "diary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  60 => 17,  56 => 16,  52 => 15,  48 => 14,  44 => 13,  41 => 12,  37 => 11,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"table table-striped col-12\" id=\"diary\">
    <thead>
    <tr>
        <th>Date</th>
        <th>Distance</th>
        <th>Time</th>
        <th>Average Speed</th>
    </tr>
    </thead>
    <tbody>
    {% for date, runEntry in diary %}
        <tr>
            <td>{{ date }}</td>
            <td>{{ runEntry.distance }} km </td>
            <td>{{ runEntry.time }} h</td>
            <td>{{ runEntry.avgSpeed|round(2, 'floor') }} km/h</td>
            <td><a href=\"delete/{{ date}}\" class=\"delete-button btn btn-block btn-info\">Delete</a></td>
        </tr>
    {% endfor %}
    </tbody>
</table>", "diary.twig", "/Users/marvinkruger/uebung6/templates/diary.twig");
    }
}
