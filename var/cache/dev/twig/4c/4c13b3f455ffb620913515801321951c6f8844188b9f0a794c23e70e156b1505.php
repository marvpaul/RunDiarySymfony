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
        $__internal_51d6724d844831b777a1179d9baa242b5e2c5427683c1eda4927fb753b6d3d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d6724d844831b777a1179d9baa242b5e2c5427683c1eda4927fb753b6d3d81->enter($__internal_51d6724d844831b777a1179d9baa242b5e2c5427683c1eda4927fb753b6d3d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "not_found.twig"));

        $__internal_ea73663a967924062b7ca60caeaa21039fbff00da05409b4c56256211fe3d6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea73663a967924062b7ca60caeaa21039fbff00da05409b4c56256211fe3d6f9->enter($__internal_ea73663a967924062b7ca60caeaa21039fbff00da05409b4c56256211fe3d6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "not_found.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51d6724d844831b777a1179d9baa242b5e2c5427683c1eda4927fb753b6d3d81->leave($__internal_51d6724d844831b777a1179d9baa242b5e2c5427683c1eda4927fb753b6d3d81_prof);

        
        $__internal_ea73663a967924062b7ca60caeaa21039fbff00da05409b4c56256211fe3d6f9->leave($__internal_ea73663a967924062b7ca60caeaa21039fbff00da05409b4c56256211fe3d6f9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c74f2e949fde5833cf12ac2f833e586e8e0554cc475c3afdbe9b4e87f5d0b6a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74f2e949fde5833cf12ac2f833e586e8e0554cc475c3afdbe9b4e87f5d0b6a1->enter($__internal_c74f2e949fde5833cf12ac2f833e586e8e0554cc475c3afdbe9b4e87f5d0b6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f5810e5028d5c04d5f57efa711df2b459acf25dca4b729f7aa00d9958f2dbfea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5810e5028d5c04d5f57efa711df2b459acf25dca4b729f7aa00d9958f2dbfea->enter($__internal_f5810e5028d5c04d5f57efa711df2b459acf25dca4b729f7aa00d9958f2dbfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f5810e5028d5c04d5f57efa711df2b459acf25dca4b729f7aa00d9958f2dbfea->leave($__internal_f5810e5028d5c04d5f57efa711df2b459acf25dca4b729f7aa00d9958f2dbfea_prof);

        
        $__internal_c74f2e949fde5833cf12ac2f833e586e8e0554cc475c3afdbe9b4e87f5d0b6a1->leave($__internal_c74f2e949fde5833cf12ac2f833e586e8e0554cc475c3afdbe9b4e87f5d0b6a1_prof);

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
