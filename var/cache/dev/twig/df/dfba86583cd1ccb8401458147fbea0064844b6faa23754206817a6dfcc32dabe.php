<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_b6d97c8e73a98ee764e90c10d5d66efd6344f10f7c9b580536dd309fcd8576ac extends Twig_Template
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
        $__internal_2e1230123bcb86a0e7407955f4e9ab471b9f3f0012c8cda6a2f965e747c453ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1230123bcb86a0e7407955f4e9ab471b9f3f0012c8cda6a2f965e747c453ae->enter($__internal_2e1230123bcb86a0e7407955f4e9ab471b9f3f0012c8cda6a2f965e747c453ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_6e51d0c94dc2d1a97ca2debdd75d19277733a28ed4dfc818631570bda4946c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e51d0c94dc2d1a97ca2debdd75d19277733a28ed4dfc818631570bda4946c3f->enter($__internal_6e51d0c94dc2d1a97ca2debdd75d19277733a28ed4dfc818631570bda4946c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_2e1230123bcb86a0e7407955f4e9ab471b9f3f0012c8cda6a2f965e747c453ae->leave($__internal_2e1230123bcb86a0e7407955f4e9ab471b9f3f0012c8cda6a2f965e747c453ae_prof);

        
        $__internal_6e51d0c94dc2d1a97ca2debdd75d19277733a28ed4dfc818631570bda4946c3f->leave($__internal_6e51d0c94dc2d1a97ca2debdd75d19277733a28ed4dfc818631570bda4946c3f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bundle/Resources/views/Exception/traces.xml.twig");
    }
}
