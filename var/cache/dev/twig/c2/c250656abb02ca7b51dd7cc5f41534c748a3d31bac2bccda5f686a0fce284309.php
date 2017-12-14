<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a0e1d361db3081119d7cf5ebb741e25e68318bebcab331d64df5527c1adb299f extends Twig_Template
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
        $__internal_85152072025015d5287857fbe29e256217fd046ed57f5a0f5f758ef5d327155a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85152072025015d5287857fbe29e256217fd046ed57f5a0f5f758ef5d327155a->enter($__internal_85152072025015d5287857fbe29e256217fd046ed57f5a0f5f758ef5d327155a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_46bf4c0dd4e4f1724a618488f8d1154ab5bf067cb4581bc6536520e46f87b998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46bf4c0dd4e4f1724a618488f8d1154ab5bf067cb4581bc6536520e46f87b998->enter($__internal_46bf4c0dd4e4f1724a618488f8d1154ab5bf067cb4581bc6536520e46f87b998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_85152072025015d5287857fbe29e256217fd046ed57f5a0f5f758ef5d327155a->leave($__internal_85152072025015d5287857fbe29e256217fd046ed57f5a0f5f758ef5d327155a_prof);

        
        $__internal_46bf4c0dd4e4f1724a618488f8d1154ab5bf067cb4581bc6536520e46f87b998->leave($__internal_46bf4c0dd4e4f1724a618488f8d1154ab5bf067cb4581bc6536520e46f87b998_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
