<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_50425ac0cbb5ed9cc2df508a8080d662bcfd940cc44352ab3e85abbd26fe2d99 extends Twig_Template
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
        $__internal_6f6b339a4faf9449ed35561cc36aa5b3e8a716441f8311f4722325f62e01f0d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6b339a4faf9449ed35561cc36aa5b3e8a716441f8311f4722325f62e01f0d8->enter($__internal_6f6b339a4faf9449ed35561cc36aa5b3e8a716441f8311f4722325f62e01f0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_9c7197694d2022e51646e6ef173274272a5e88e880a158697cf8ffbdc3fc1b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7197694d2022e51646e6ef173274272a5e88e880a158697cf8ffbdc3fc1b9b->enter($__internal_9c7197694d2022e51646e6ef173274272a5e88e880a158697cf8ffbdc3fc1b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6f6b339a4faf9449ed35561cc36aa5b3e8a716441f8311f4722325f62e01f0d8->leave($__internal_6f6b339a4faf9449ed35561cc36aa5b3e8a716441f8311f4722325f62e01f0d8_prof);

        
        $__internal_9c7197694d2022e51646e6ef173274272a5e88e880a158697cf8ffbdc3fc1b9b->leave($__internal_9c7197694d2022e51646e6ef173274272a5e88e880a158697cf8ffbdc3fc1b9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
