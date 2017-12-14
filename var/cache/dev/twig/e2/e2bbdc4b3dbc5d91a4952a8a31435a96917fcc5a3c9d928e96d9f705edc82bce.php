<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_a953993cc1352b7537f9a0075d02970fea9a71594c5766da877518edd1219c5a extends Twig_Template
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
        $__internal_1cdde69c903ca388cf29be1db2d5f925c67f05289e42bc93400289cca1b715be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cdde69c903ca388cf29be1db2d5f925c67f05289e42bc93400289cca1b715be->enter($__internal_1cdde69c903ca388cf29be1db2d5f925c67f05289e42bc93400289cca1b715be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_c930349bd20d3a271352f9bd2455be7efad18fee3acab58931296418411947b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c930349bd20d3a271352f9bd2455be7efad18fee3acab58931296418411947b1->enter($__internal_c930349bd20d3a271352f9bd2455be7efad18fee3acab58931296418411947b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1cdde69c903ca388cf29be1db2d5f925c67f05289e42bc93400289cca1b715be->leave($__internal_1cdde69c903ca388cf29be1db2d5f925c67f05289e42bc93400289cca1b715be_prof);

        
        $__internal_c930349bd20d3a271352f9bd2455be7efad18fee3acab58931296418411947b1->leave($__internal_c930349bd20d3a271352f9bd2455be7efad18fee3acab58931296418411947b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/container_attributes.html.php");
    }
}
