<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_420d43a3583c7c4410a38fe260e02d8a77c9c23433001f2e3ba4b8aa7b6638a2 extends Twig_Template
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
        $__internal_6ea041206f3bff21e80b3ae791960913030506612f8c5da2a64b86b6fb61a561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea041206f3bff21e80b3ae791960913030506612f8c5da2a64b86b6fb61a561->enter($__internal_6ea041206f3bff21e80b3ae791960913030506612f8c5da2a64b86b6fb61a561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b3eec8942ed7042c8caea8aa27b6ab133300c45f7ad92bafda026ca76b6f99cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3eec8942ed7042c8caea8aa27b6ab133300c45f7ad92bafda026ca76b6f99cf->enter($__internal_b3eec8942ed7042c8caea8aa27b6ab133300c45f7ad92bafda026ca76b6f99cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6ea041206f3bff21e80b3ae791960913030506612f8c5da2a64b86b6fb61a561->leave($__internal_6ea041206f3bff21e80b3ae791960913030506612f8c5da2a64b86b6fb61a561_prof);

        
        $__internal_b3eec8942ed7042c8caea8aa27b6ab133300c45f7ad92bafda026ca76b6f99cf->leave($__internal_b3eec8942ed7042c8caea8aa27b6ab133300c45f7ad92bafda026ca76b6f99cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
