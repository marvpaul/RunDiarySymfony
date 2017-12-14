<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_11e92aad335abcb4b3f84deef96f22a56245b21263faddc066af00b0ceb8bc0e extends Twig_Template
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
        $__internal_a0ee1a1375e9d12785b8b0adb0f79bc9dd06f8950b11c78cda7928d67c4f6717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ee1a1375e9d12785b8b0adb0f79bc9dd06f8950b11c78cda7928d67c4f6717->enter($__internal_a0ee1a1375e9d12785b8b0adb0f79bc9dd06f8950b11c78cda7928d67c4f6717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_8111e3ea7368e609d275dbdb8aecac520b7134e9d0da58bd9a4b24a09051b404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8111e3ea7368e609d275dbdb8aecac520b7134e9d0da58bd9a4b24a09051b404->enter($__internal_8111e3ea7368e609d275dbdb8aecac520b7134e9d0da58bd9a4b24a09051b404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a0ee1a1375e9d12785b8b0adb0f79bc9dd06f8950b11c78cda7928d67c4f6717->leave($__internal_a0ee1a1375e9d12785b8b0adb0f79bc9dd06f8950b11c78cda7928d67c4f6717_prof);

        
        $__internal_8111e3ea7368e609d275dbdb8aecac520b7134e9d0da58bd9a4b24a09051b404->leave($__internal_8111e3ea7368e609d275dbdb8aecac520b7134e9d0da58bd9a4b24a09051b404_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
