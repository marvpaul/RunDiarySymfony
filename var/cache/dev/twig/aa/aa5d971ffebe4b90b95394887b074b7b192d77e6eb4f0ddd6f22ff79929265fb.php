<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1ab746585daafb2155160267c6fe5ac84f12d50e8e1e77c963a94608ad4b5c9d extends Twig_Template
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
        $__internal_e8706edce95125bb0f77fe8230d7c4dc1107345c196249ad24d670ebd4bc58dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8706edce95125bb0f77fe8230d7c4dc1107345c196249ad24d670ebd4bc58dc->enter($__internal_e8706edce95125bb0f77fe8230d7c4dc1107345c196249ad24d670ebd4bc58dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c76c0c93723a6d91183e396c8f3ed74809793f6afb8b4139e2eeb5adcee45cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76c0c93723a6d91183e396c8f3ed74809793f6afb8b4139e2eeb5adcee45cc6->enter($__internal_c76c0c93723a6d91183e396c8f3ed74809793f6afb8b4139e2eeb5adcee45cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e8706edce95125bb0f77fe8230d7c4dc1107345c196249ad24d670ebd4bc58dc->leave($__internal_e8706edce95125bb0f77fe8230d7c4dc1107345c196249ad24d670ebd4bc58dc_prof);

        
        $__internal_c76c0c93723a6d91183e396c8f3ed74809793f6afb8b4139e2eeb5adcee45cc6->leave($__internal_c76c0c93723a6d91183e396c8f3ed74809793f6afb8b4139e2eeb5adcee45cc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
