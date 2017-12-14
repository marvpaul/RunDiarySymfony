<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b43c8f5c98b3009407fa5b55a7bed83db0770a384cee9ee54d4f32177fad22b3 extends Twig_Template
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
        $__internal_0c2f323f8e3fdc3b7f605de76430527a94e333e232ed27ff8101898c4fb88449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c2f323f8e3fdc3b7f605de76430527a94e333e232ed27ff8101898c4fb88449->enter($__internal_0c2f323f8e3fdc3b7f605de76430527a94e333e232ed27ff8101898c4fb88449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_cc9fc724a9afc7f60bf27174b4f316837667446da310f1e36cf712ad96d4bae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9fc724a9afc7f60bf27174b4f316837667446da310f1e36cf712ad96d4bae2->enter($__internal_cc9fc724a9afc7f60bf27174b4f316837667446da310f1e36cf712ad96d4bae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0c2f323f8e3fdc3b7f605de76430527a94e333e232ed27ff8101898c4fb88449->leave($__internal_0c2f323f8e3fdc3b7f605de76430527a94e333e232ed27ff8101898c4fb88449_prof);

        
        $__internal_cc9fc724a9afc7f60bf27174b4f316837667446da310f1e36cf712ad96d4bae2->leave($__internal_cc9fc724a9afc7f60bf27174b4f316837667446da310f1e36cf712ad96d4bae2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
