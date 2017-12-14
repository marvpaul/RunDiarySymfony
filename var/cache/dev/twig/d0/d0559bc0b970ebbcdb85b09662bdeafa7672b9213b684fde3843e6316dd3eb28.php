<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_dfeae0148893db8b79fcd433e949752ebfc12245ca5744d882a230b14c2d73fb extends Twig_Template
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
        $__internal_b0003751436099af1d9820d016b526a9227e5442e29001e0d213f9feb186c64e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0003751436099af1d9820d016b526a9227e5442e29001e0d213f9feb186c64e->enter($__internal_b0003751436099af1d9820d016b526a9227e5442e29001e0d213f9feb186c64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_43d65e0734acadc6d357deaae5f072ece0139f630cee0caca9068e93a1e22596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d65e0734acadc6d357deaae5f072ece0139f630cee0caca9068e93a1e22596->enter($__internal_43d65e0734acadc6d357deaae5f072ece0139f630cee0caca9068e93a1e22596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b0003751436099af1d9820d016b526a9227e5442e29001e0d213f9feb186c64e->leave($__internal_b0003751436099af1d9820d016b526a9227e5442e29001e0d213f9feb186c64e_prof);

        
        $__internal_43d65e0734acadc6d357deaae5f072ece0139f630cee0caca9068e93a1e22596->leave($__internal_43d65e0734acadc6d357deaae5f072ece0139f630cee0caca9068e93a1e22596_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
