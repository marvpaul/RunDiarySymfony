<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ec3079291d017768f7e23001233e0dead12761f064dded209cfab3bdc63fd8fc extends Twig_Template
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
        $__internal_dbee9dd71d5e5256421644731d2adcfdc68ffd936f15115d5550543e11187a6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbee9dd71d5e5256421644731d2adcfdc68ffd936f15115d5550543e11187a6a->enter($__internal_dbee9dd71d5e5256421644731d2adcfdc68ffd936f15115d5550543e11187a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_58688e51163ef75cdd459bf62d8f4db3d338c8532413f44974eb804d4dde4a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58688e51163ef75cdd459bf62d8f4db3d338c8532413f44974eb804d4dde4a82->enter($__internal_58688e51163ef75cdd459bf62d8f4db3d338c8532413f44974eb804d4dde4a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_dbee9dd71d5e5256421644731d2adcfdc68ffd936f15115d5550543e11187a6a->leave($__internal_dbee9dd71d5e5256421644731d2adcfdc68ffd936f15115d5550543e11187a6a_prof);

        
        $__internal_58688e51163ef75cdd459bf62d8f4db3d338c8532413f44974eb804d4dde4a82->leave($__internal_58688e51163ef75cdd459bf62d8f4db3d338c8532413f44974eb804d4dde4a82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
