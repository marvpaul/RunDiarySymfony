<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_50f63d76896470b6e1e2ab1f95fda26a687b175390fa960a86d45ee1c51decaf extends Twig_Template
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
        $__internal_4881eb8ba4095274046ae093f0125c51bf447018f48b87a6b9078fee839a9944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4881eb8ba4095274046ae093f0125c51bf447018f48b87a6b9078fee839a9944->enter($__internal_4881eb8ba4095274046ae093f0125c51bf447018f48b87a6b9078fee839a9944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_21596953104eb950ce095f05ccbe4588648a2b2ee94a573a45e4376a133e893a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21596953104eb950ce095f05ccbe4588648a2b2ee94a573a45e4376a133e893a->enter($__internal_21596953104eb950ce095f05ccbe4588648a2b2ee94a573a45e4376a133e893a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4881eb8ba4095274046ae093f0125c51bf447018f48b87a6b9078fee839a9944->leave($__internal_4881eb8ba4095274046ae093f0125c51bf447018f48b87a6b9078fee839a9944_prof);

        
        $__internal_21596953104eb950ce095f05ccbe4588648a2b2ee94a573a45e4376a133e893a->leave($__internal_21596953104eb950ce095f05ccbe4588648a2b2ee94a573a45e4376a133e893a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/button_widget.html.php");
    }
}
