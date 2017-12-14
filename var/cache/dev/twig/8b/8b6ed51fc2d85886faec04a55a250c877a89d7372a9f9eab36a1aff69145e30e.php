<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_02bdb7621d0824e41709b6ce4817624468dfea84da033f7f7a270a49f307f7c1 extends Twig_Template
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
        $__internal_6b746ec896caadb6abab6a3833092b0af0fa1d57cba2ade2c8688c84f3f9e035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b746ec896caadb6abab6a3833092b0af0fa1d57cba2ade2c8688c84f3f9e035->enter($__internal_6b746ec896caadb6abab6a3833092b0af0fa1d57cba2ade2c8688c84f3f9e035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_3239901be02436f74e9652885870bc02d88b43a4afa6a9453714ff64a95e3ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3239901be02436f74e9652885870bc02d88b43a4afa6a9453714ff64a95e3ed0->enter($__internal_3239901be02436f74e9652885870bc02d88b43a4afa6a9453714ff64a95e3ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6b746ec896caadb6abab6a3833092b0af0fa1d57cba2ade2c8688c84f3f9e035->leave($__internal_6b746ec896caadb6abab6a3833092b0af0fa1d57cba2ade2c8688c84f3f9e035_prof);

        
        $__internal_3239901be02436f74e9652885870bc02d88b43a4afa6a9453714ff64a95e3ed0->leave($__internal_3239901be02436f74e9652885870bc02d88b43a4afa6a9453714ff64a95e3ed0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
