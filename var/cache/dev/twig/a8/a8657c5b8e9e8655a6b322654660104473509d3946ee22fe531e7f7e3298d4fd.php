<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9617b5eedc5aea72dfd87f822ccffd436c8b977185d81c8bc136a5b4f8780cf5 extends Twig_Template
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
        $__internal_1757c10e6b715ff84812c14abf577f6406bbc3026d2b36e568af4f38eccf8c9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1757c10e6b715ff84812c14abf577f6406bbc3026d2b36e568af4f38eccf8c9b->enter($__internal_1757c10e6b715ff84812c14abf577f6406bbc3026d2b36e568af4f38eccf8c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_780f549c24d6d97faa52cf70783d19c6d2be9aa68ada1f496f44d0c3e284f6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780f549c24d6d97faa52cf70783d19c6d2be9aa68ada1f496f44d0c3e284f6f1->enter($__internal_780f549c24d6d97faa52cf70783d19c6d2be9aa68ada1f496f44d0c3e284f6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1757c10e6b715ff84812c14abf577f6406bbc3026d2b36e568af4f38eccf8c9b->leave($__internal_1757c10e6b715ff84812c14abf577f6406bbc3026d2b36e568af4f38eccf8c9b_prof);

        
        $__internal_780f549c24d6d97faa52cf70783d19c6d2be9aa68ada1f496f44d0c3e284f6f1->leave($__internal_780f549c24d6d97faa52cf70783d19c6d2be9aa68ada1f496f44d0c3e284f6f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
