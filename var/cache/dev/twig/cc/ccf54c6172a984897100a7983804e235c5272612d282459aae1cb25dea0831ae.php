<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_b72fcf51f7bf4da1e5bd84ad248470a447125aa101b163cd3001c97fe88addaa extends Twig_Template
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
        $__internal_45db78d0fbf09ac869386ab81d88dbd584b774f358a76201235ec78d38100c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45db78d0fbf09ac869386ab81d88dbd584b774f358a76201235ec78d38100c05->enter($__internal_45db78d0fbf09ac869386ab81d88dbd584b774f358a76201235ec78d38100c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_385fa61f4ad45aa96025bc31577443d3dc5a8374bed7660d526522036cc07dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385fa61f4ad45aa96025bc31577443d3dc5a8374bed7660d526522036cc07dc4->enter($__internal_385fa61f4ad45aa96025bc31577443d3dc5a8374bed7660d526522036cc07dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_45db78d0fbf09ac869386ab81d88dbd584b774f358a76201235ec78d38100c05->leave($__internal_45db78d0fbf09ac869386ab81d88dbd584b774f358a76201235ec78d38100c05_prof);

        
        $__internal_385fa61f4ad45aa96025bc31577443d3dc5a8374bed7660d526522036cc07dc4->leave($__internal_385fa61f4ad45aa96025bc31577443d3dc5a8374bed7660d526522036cc07dc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/repeated_row.html.php");
    }
}
