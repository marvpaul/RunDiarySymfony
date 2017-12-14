<?php

/* not_found.twig */
class __TwigTemplate_f4c7fed09b57fa32e490b6e60051d73c816ba2c1a13e3de70a551c4d321053e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "not_found.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65c9428ddbe7a9dc982fa3ea56f0ceed185c460e17d6022c94c65f059f8871c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65c9428ddbe7a9dc982fa3ea56f0ceed185c460e17d6022c94c65f059f8871c8->enter($__internal_65c9428ddbe7a9dc982fa3ea56f0ceed185c460e17d6022c94c65f059f8871c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "not_found.twig"));

        $__internal_215ebfe94cbdf01da4722b74fdb628101197ab74af0771ea03cdfb147ffa3334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215ebfe94cbdf01da4722b74fdb628101197ab74af0771ea03cdfb147ffa3334->enter($__internal_215ebfe94cbdf01da4722b74fdb628101197ab74af0771ea03cdfb147ffa3334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "not_found.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65c9428ddbe7a9dc982fa3ea56f0ceed185c460e17d6022c94c65f059f8871c8->leave($__internal_65c9428ddbe7a9dc982fa3ea56f0ceed185c460e17d6022c94c65f059f8871c8_prof);

        
        $__internal_215ebfe94cbdf01da4722b74fdb628101197ab74af0771ea03cdfb147ffa3334->leave($__internal_215ebfe94cbdf01da4722b74fdb628101197ab74af0771ea03cdfb147ffa3334_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_629eacf1700e7a745fee81099ee3c0b8a13768b943ab99eef829930222a53549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629eacf1700e7a745fee81099ee3c0b8a13768b943ab99eef829930222a53549->enter($__internal_629eacf1700e7a745fee81099ee3c0b8a13768b943ab99eef829930222a53549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7689e44e44327b2bdf62540f69c8494e9db70a6376335252517f030214eb94f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7689e44e44327b2bdf62540f69c8494e9db70a6376335252517f030214eb94f1->enter($__internal_7689e44e44327b2bdf62540f69c8494e9db70a6376335252517f030214eb94f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"card text-white bg-primary\">
        <div class=\"card-body\" id=\"overview\">
            <div class=\"alert alert-dismissible alert-warning col-3\" style=\"text-align: center; margin: auto; \">
                ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_7689e44e44327b2bdf62540f69c8494e9db70a6376335252517f030214eb94f1->leave($__internal_7689e44e44327b2bdf62540f69c8494e9db70a6376335252517f030214eb94f1_prof);

        
        $__internal_629eacf1700e7a745fee81099ee3c0b8a13768b943ab99eef829930222a53549->leave($__internal_629eacf1700e7a745fee81099ee3c0b8a13768b943ab99eef829930222a53549_prof);

    }

    public function getTemplateName()
    {
        return "not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block content %}
    <div class=\"card text-white bg-primary\">
        <div class=\"card-body\" id=\"overview\">
            <div class=\"alert alert-dismissible alert-warning col-3\" style=\"text-align: center; margin: auto; \">
                {{ message }}
            </div>
        </div>
    </div>

{% endblock %}", "not_found.twig", "/Users/marvinkruger/uebung6/templates/not_found.twig");
    }
}
