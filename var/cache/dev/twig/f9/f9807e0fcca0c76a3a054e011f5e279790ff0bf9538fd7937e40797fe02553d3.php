<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1ae3884bed14bd6dd569c6c8a0e691041648d110744ea8a5bb544e5da6f46421 extends Twig_Template
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
        $__internal_79b3d56bee88894bc20d0eabe2105580182a5441f34c00d400dfc06e87d22557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b3d56bee88894bc20d0eabe2105580182a5441f34c00d400dfc06e87d22557->enter($__internal_79b3d56bee88894bc20d0eabe2105580182a5441f34c00d400dfc06e87d22557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_a0b04359dfbab7e327f46de636bedfbac8699d901c9fc7bcd6f59683c2755ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b04359dfbab7e327f46de636bedfbac8699d901c9fc7bcd6f59683c2755ee0->enter($__internal_a0b04359dfbab7e327f46de636bedfbac8699d901c9fc7bcd6f59683c2755ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_79b3d56bee88894bc20d0eabe2105580182a5441f34c00d400dfc06e87d22557->leave($__internal_79b3d56bee88894bc20d0eabe2105580182a5441f34c00d400dfc06e87d22557_prof);

        
        $__internal_a0b04359dfbab7e327f46de636bedfbac8699d901c9fc7bcd6f59683c2755ee0->leave($__internal_a0b04359dfbab7e327f46de636bedfbac8699d901c9fc7bcd6f59683c2755ee0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
