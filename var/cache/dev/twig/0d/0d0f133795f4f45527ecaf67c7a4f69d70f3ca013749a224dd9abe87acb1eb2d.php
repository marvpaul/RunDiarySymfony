<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_447f5f00c73b387f907e095a040dcca1e47917191a93d323fc3d7d1044f4ef1f extends Twig_Template
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
        $__internal_84be9dd6cc9b4b59c226fc236e1bdaf9f732e427714efebd840cb829c9a8e5b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84be9dd6cc9b4b59c226fc236e1bdaf9f732e427714efebd840cb829c9a8e5b7->enter($__internal_84be9dd6cc9b4b59c226fc236e1bdaf9f732e427714efebd840cb829c9a8e5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_cdbe381dc04504316d36fd0460fd5ee79e35e74a4cd892a431e214cd81085fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdbe381dc04504316d36fd0460fd5ee79e35e74a4cd892a431e214cd81085fe2->enter($__internal_cdbe381dc04504316d36fd0460fd5ee79e35e74a4cd892a431e214cd81085fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_84be9dd6cc9b4b59c226fc236e1bdaf9f732e427714efebd840cb829c9a8e5b7->leave($__internal_84be9dd6cc9b4b59c226fc236e1bdaf9f732e427714efebd840cb829c9a8e5b7_prof);

        
        $__internal_cdbe381dc04504316d36fd0460fd5ee79e35e74a4cd892a431e214cd81085fe2->leave($__internal_cdbe381dc04504316d36fd0460fd5ee79e35e74a4cd892a431e214cd81085fe2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
