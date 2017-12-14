<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_93d683b55a6ab93fbb8b5509acf05e38c0cae18f5368ff9829e5632b4d4386a0 extends Twig_Template
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
        $__internal_b1b0e45421401f1aa7073c214aafc894ed80e36329b4eeab52c97c2321612bc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b0e45421401f1aa7073c214aafc894ed80e36329b4eeab52c97c2321612bc1->enter($__internal_b1b0e45421401f1aa7073c214aafc894ed80e36329b4eeab52c97c2321612bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_20fc848bf16c9414e2337b7ee01d31fe8bf4f683ad94ae12c6a328b94fa3ff1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20fc848bf16c9414e2337b7ee01d31fe8bf4f683ad94ae12c6a328b94fa3ff1b->enter($__internal_20fc848bf16c9414e2337b7ee01d31fe8bf4f683ad94ae12c6a328b94fa3ff1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b1b0e45421401f1aa7073c214aafc894ed80e36329b4eeab52c97c2321612bc1->leave($__internal_b1b0e45421401f1aa7073c214aafc894ed80e36329b4eeab52c97c2321612bc1_prof);

        
        $__internal_20fc848bf16c9414e2337b7ee01d31fe8bf4f683ad94ae12c6a328b94fa3ff1b->leave($__internal_20fc848bf16c9414e2337b7ee01d31fe8bf4f683ad94ae12c6a328b94fa3ff1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
