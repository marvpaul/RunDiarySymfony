<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_81bd5c360003809944869732f5a9861ac425d9de1ef75c817237ed9f10f61d06 extends Twig_Template
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
        $__internal_7508ba80a3ed486c5ea6c35c0df5f266d63a4e201fe1cc950ec00111884699f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7508ba80a3ed486c5ea6c35c0df5f266d63a4e201fe1cc950ec00111884699f7->enter($__internal_7508ba80a3ed486c5ea6c35c0df5f266d63a4e201fe1cc950ec00111884699f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_073696a9b6a446e33641855a5b78e239238aa0ca305cf8558eda714607026eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073696a9b6a446e33641855a5b78e239238aa0ca305cf8558eda714607026eaf->enter($__internal_073696a9b6a446e33641855a5b78e239238aa0ca305cf8558eda714607026eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_7508ba80a3ed486c5ea6c35c0df5f266d63a4e201fe1cc950ec00111884699f7->leave($__internal_7508ba80a3ed486c5ea6c35c0df5f266d63a4e201fe1cc950ec00111884699f7_prof);

        
        $__internal_073696a9b6a446e33641855a5b78e239238aa0ca305cf8558eda714607026eaf->leave($__internal_073696a9b6a446e33641855a5b78e239238aa0ca305cf8558eda714607026eaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
