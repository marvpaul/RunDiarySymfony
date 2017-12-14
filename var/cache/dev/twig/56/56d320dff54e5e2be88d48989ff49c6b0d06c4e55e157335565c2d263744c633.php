<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_283a39bd582d7bbd1a7045cd03381a31b75dc05b1ee4dfe0233efb62c62a4d0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e67c9b2f10ef45711eac7401fd1388c99c20e1d587cb0c7b9d146eb77e627762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e67c9b2f10ef45711eac7401fd1388c99c20e1d587cb0c7b9d146eb77e627762->enter($__internal_e67c9b2f10ef45711eac7401fd1388c99c20e1d587cb0c7b9d146eb77e627762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_c78689e1c7189adcd8e8824f0791961ee80bef30b703f96927379c3c2dca2e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78689e1c7189adcd8e8824f0791961ee80bef30b703f96927379c3c2dca2e11->enter($__internal_c78689e1c7189adcd8e8824f0791961ee80bef30b703f96927379c3c2dca2e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e67c9b2f10ef45711eac7401fd1388c99c20e1d587cb0c7b9d146eb77e627762->leave($__internal_e67c9b2f10ef45711eac7401fd1388c99c20e1d587cb0c7b9d146eb77e627762_prof);

        
        $__internal_c78689e1c7189adcd8e8824f0791961ee80bef30b703f96927379c3c2dca2e11->leave($__internal_c78689e1c7189adcd8e8824f0791961ee80bef30b703f96927379c3c2dca2e11_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d44c15fca7911c3f5d49468d01648fe4b56be43e4c8bce64f1dc788acd39e88e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44c15fca7911c3f5d49468d01648fe4b56be43e4c8bce64f1dc788acd39e88e->enter($__internal_d44c15fca7911c3f5d49468d01648fe4b56be43e4c8bce64f1dc788acd39e88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_823e7b56f890c0da93132098758029b44c64cb0c363110575b09cced42a487b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823e7b56f890c0da93132098758029b44c64cb0c363110575b09cced42a487b9->enter($__internal_823e7b56f890c0da93132098758029b44c64cb0c363110575b09cced42a487b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_823e7b56f890c0da93132098758029b44c64cb0c363110575b09cced42a487b9->leave($__internal_823e7b56f890c0da93132098758029b44c64cb0c363110575b09cced42a487b9_prof);

        
        $__internal_d44c15fca7911c3f5d49468d01648fe4b56be43e4c8bce64f1dc788acd39e88e->leave($__internal_d44c15fca7911c3f5d49468d01648fe4b56be43e4c8bce64f1dc788acd39e88e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
