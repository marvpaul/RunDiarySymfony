<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3a12218daac9e12f63e6cd2448c0cc2cd20edbcbb1330997ab5b49af715f42b3 extends Twig_Template
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
        $__internal_7d1bbf7c86612b0d11e3a2563ef1a6ab468fe623ab3126b0d870b6d484804aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1bbf7c86612b0d11e3a2563ef1a6ab468fe623ab3126b0d870b6d484804aa0->enter($__internal_7d1bbf7c86612b0d11e3a2563ef1a6ab468fe623ab3126b0d870b6d484804aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5fcebb5190c6bf17fddbfd75f18eda7cc3fab32f6b1502cb90daa09cd57fa9e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fcebb5190c6bf17fddbfd75f18eda7cc3fab32f6b1502cb90daa09cd57fa9e6->enter($__internal_5fcebb5190c6bf17fddbfd75f18eda7cc3fab32f6b1502cb90daa09cd57fa9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7d1bbf7c86612b0d11e3a2563ef1a6ab468fe623ab3126b0d870b6d484804aa0->leave($__internal_7d1bbf7c86612b0d11e3a2563ef1a6ab468fe623ab3126b0d870b6d484804aa0_prof);

        
        $__internal_5fcebb5190c6bf17fddbfd75f18eda7cc3fab32f6b1502cb90daa09cd57fa9e6->leave($__internal_5fcebb5190c6bf17fddbfd75f18eda7cc3fab32f6b1502cb90daa09cd57fa9e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
