<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_3b5c3aa52ec1b5db2bd0cdb78cc8515bd29cbdbe76869bdaedc258363a7b7873 extends Twig_Template
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
        $__internal_c68265850c04c8da77768ec86c27aa7843a60d262d013cbeb7ed19c80684cbda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68265850c04c8da77768ec86c27aa7843a60d262d013cbeb7ed19c80684cbda->enter($__internal_c68265850c04c8da77768ec86c27aa7843a60d262d013cbeb7ed19c80684cbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ca2c591c68b70676e48c5a4743679bb947c48032779601c3c7b495255ca940af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2c591c68b70676e48c5a4743679bb947c48032779601c3c7b495255ca940af->enter($__internal_ca2c591c68b70676e48c5a4743679bb947c48032779601c3c7b495255ca940af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c68265850c04c8da77768ec86c27aa7843a60d262d013cbeb7ed19c80684cbda->leave($__internal_c68265850c04c8da77768ec86c27aa7843a60d262d013cbeb7ed19c80684cbda_prof);

        
        $__internal_ca2c591c68b70676e48c5a4743679bb947c48032779601c3c7b495255ca940af->leave($__internal_ca2c591c68b70676e48c5a4743679bb947c48032779601c3c7b495255ca940af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
