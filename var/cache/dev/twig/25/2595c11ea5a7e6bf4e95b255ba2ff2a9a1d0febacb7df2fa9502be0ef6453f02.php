<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_64f943f2c534974e9422cef1adfb4f167a1e2109f962f3566a9ecdc31622fa22 extends Twig_Template
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
        $__internal_c82139a5fceaf6417024d1c3df2d57539a8860a345a2abe0b002ebf8d023cd02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82139a5fceaf6417024d1c3df2d57539a8860a345a2abe0b002ebf8d023cd02->enter($__internal_c82139a5fceaf6417024d1c3df2d57539a8860a345a2abe0b002ebf8d023cd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c27f1b80100bc0fa3796c71de96c1259c320ab6b92f933ce2bed45c82ef640aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27f1b80100bc0fa3796c71de96c1259c320ab6b92f933ce2bed45c82ef640aa->enter($__internal_c27f1b80100bc0fa3796c71de96c1259c320ab6b92f933ce2bed45c82ef640aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c82139a5fceaf6417024d1c3df2d57539a8860a345a2abe0b002ebf8d023cd02->leave($__internal_c82139a5fceaf6417024d1c3df2d57539a8860a345a2abe0b002ebf8d023cd02_prof);

        
        $__internal_c27f1b80100bc0fa3796c71de96c1259c320ab6b92f933ce2bed45c82ef640aa->leave($__internal_c27f1b80100bc0fa3796c71de96c1259c320ab6b92f933ce2bed45c82ef640aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
