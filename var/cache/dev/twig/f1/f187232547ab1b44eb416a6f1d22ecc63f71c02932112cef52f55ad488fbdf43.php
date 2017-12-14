<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_8a9fe13920f1e803f8e7d79a8b0bc435755b6eacd82dede5ffccd1f6c2daabca extends Twig_Template
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
        $__internal_a11d7749c4fd314ba2ccf0900b07ae95a7c57271eaf9c9fa2a462c00ac396fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11d7749c4fd314ba2ccf0900b07ae95a7c57271eaf9c9fa2a462c00ac396fab->enter($__internal_a11d7749c4fd314ba2ccf0900b07ae95a7c57271eaf9c9fa2a462c00ac396fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_83c1a317d198a2ea6effb94f96be136125816b083c49c15c405279f9bdf71a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c1a317d198a2ea6effb94f96be136125816b083c49c15c405279f9bdf71a76->enter($__internal_83c1a317d198a2ea6effb94f96be136125816b083c49c15c405279f9bdf71a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a11d7749c4fd314ba2ccf0900b07ae95a7c57271eaf9c9fa2a462c00ac396fab->leave($__internal_a11d7749c4fd314ba2ccf0900b07ae95a7c57271eaf9c9fa2a462c00ac396fab_prof);

        
        $__internal_83c1a317d198a2ea6effb94f96be136125816b083c49c15c405279f9bdf71a76->leave($__internal_83c1a317d198a2ea6effb94f96be136125816b083c49c15c405279f9bdf71a76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
