<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_0985e87658c60e05e35abbc791bc658e3dca66e63e085e7051f0cbaf18a97502 extends Twig_Template
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
        $__internal_7048b57c5ed0b428e91dc45967bcf1ba1eea8d7756b541caf0c4ec121ca29314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7048b57c5ed0b428e91dc45967bcf1ba1eea8d7756b541caf0c4ec121ca29314->enter($__internal_7048b57c5ed0b428e91dc45967bcf1ba1eea8d7756b541caf0c4ec121ca29314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_55e7ab357b2bc8f70be48192fe8eb164ea151b1eeb489c59379c3240da72c942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e7ab357b2bc8f70be48192fe8eb164ea151b1eeb489c59379c3240da72c942->enter($__internal_55e7ab357b2bc8f70be48192fe8eb164ea151b1eeb489c59379c3240da72c942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7048b57c5ed0b428e91dc45967bcf1ba1eea8d7756b541caf0c4ec121ca29314->leave($__internal_7048b57c5ed0b428e91dc45967bcf1ba1eea8d7756b541caf0c4ec121ca29314_prof);

        
        $__internal_55e7ab357b2bc8f70be48192fe8eb164ea151b1eeb489c59379c3240da72c942->leave($__internal_55e7ab357b2bc8f70be48192fe8eb164ea151b1eeb489c59379c3240da72c942_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
