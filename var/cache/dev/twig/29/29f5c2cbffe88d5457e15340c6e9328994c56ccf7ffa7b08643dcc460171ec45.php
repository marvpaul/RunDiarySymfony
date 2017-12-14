<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_20a91a9abc505ed34acc5c346a1be3ad57918c1b8ae15430e4b07f9e54e99cf7 extends Twig_Template
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
        $__internal_e243fd906af856779f24289946ba6610483870fbcc322b7ad9b14d6cb1df1449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e243fd906af856779f24289946ba6610483870fbcc322b7ad9b14d6cb1df1449->enter($__internal_e243fd906af856779f24289946ba6610483870fbcc322b7ad9b14d6cb1df1449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_d6948d1d0ac99ea2a6a282776ef4225dcdb27330f3c066477b0d74de6f8159a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6948d1d0ac99ea2a6a282776ef4225dcdb27330f3c066477b0d74de6f8159a1->enter($__internal_d6948d1d0ac99ea2a6a282776ef4225dcdb27330f3c066477b0d74de6f8159a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_e243fd906af856779f24289946ba6610483870fbcc322b7ad9b14d6cb1df1449->leave($__internal_e243fd906af856779f24289946ba6610483870fbcc322b7ad9b14d6cb1df1449_prof);

        
        $__internal_d6948d1d0ac99ea2a6a282776ef4225dcdb27330f3c066477b0d74de6f8159a1->leave($__internal_d6948d1d0ac99ea2a6a282776ef4225dcdb27330f3c066477b0d74de6f8159a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/form_label.html.php");
    }
}
