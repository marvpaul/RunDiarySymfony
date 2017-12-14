<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_ed5bed519ddb453657579d5ee3342dc3b01e640643621998ace697c763553d65 extends Twig_Template
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
        $__internal_9b3946756a5a36f0d76cb391451918cdc816ef3e3e7a213c45d44c69407f0106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b3946756a5a36f0d76cb391451918cdc816ef3e3e7a213c45d44c69407f0106->enter($__internal_9b3946756a5a36f0d76cb391451918cdc816ef3e3e7a213c45d44c69407f0106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0897e31296d04c86fa9932af5a86828772cfc56e96d4f7216801926bb19c67da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0897e31296d04c86fa9932af5a86828772cfc56e96d4f7216801926bb19c67da->enter($__internal_0897e31296d04c86fa9932af5a86828772cfc56e96d4f7216801926bb19c67da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9b3946756a5a36f0d76cb391451918cdc816ef3e3e7a213c45d44c69407f0106->leave($__internal_9b3946756a5a36f0d76cb391451918cdc816ef3e3e7a213c45d44c69407f0106_prof);

        
        $__internal_0897e31296d04c86fa9932af5a86828772cfc56e96d4f7216801926bb19c67da->leave($__internal_0897e31296d04c86fa9932af5a86828772cfc56e96d4f7216801926bb19c67da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
