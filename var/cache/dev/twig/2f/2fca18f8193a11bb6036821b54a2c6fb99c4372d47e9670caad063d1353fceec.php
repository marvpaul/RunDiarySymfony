<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3c56e609c2a6ef59a905353fd5c0a980d8d2bac79f257050a87be6102f1b6e95 extends Twig_Template
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
        $__internal_d2172fbe9f4b397a8a653afe937bd3e0b98e28231709a54c06daa03eb77d45cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2172fbe9f4b397a8a653afe937bd3e0b98e28231709a54c06daa03eb77d45cf->enter($__internal_d2172fbe9f4b397a8a653afe937bd3e0b98e28231709a54c06daa03eb77d45cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e61ef8c9cb858d20b98685b7ce322f01e7ba738dc78d6e4dd2f18dd49437dcd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61ef8c9cb858d20b98685b7ce322f01e7ba738dc78d6e4dd2f18dd49437dcd1->enter($__internal_e61ef8c9cb858d20b98685b7ce322f01e7ba738dc78d6e4dd2f18dd49437dcd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d2172fbe9f4b397a8a653afe937bd3e0b98e28231709a54c06daa03eb77d45cf->leave($__internal_d2172fbe9f4b397a8a653afe937bd3e0b98e28231709a54c06daa03eb77d45cf_prof);

        
        $__internal_e61ef8c9cb858d20b98685b7ce322f01e7ba738dc78d6e4dd2f18dd49437dcd1->leave($__internal_e61ef8c9cb858d20b98685b7ce322f01e7ba738dc78d6e4dd2f18dd49437dcd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
