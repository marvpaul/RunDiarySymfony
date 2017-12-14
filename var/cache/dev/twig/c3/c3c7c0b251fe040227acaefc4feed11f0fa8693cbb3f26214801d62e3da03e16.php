<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a2bc2775c37c7cc3b8288eabdc8b110252f36f82e63911fca9c2ec5e671aa149 extends Twig_Template
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
        $__internal_289437ce4085afd8d294b108a8d3cdfe1b5fc8236b0b3a5f21a2e771d236b49f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289437ce4085afd8d294b108a8d3cdfe1b5fc8236b0b3a5f21a2e771d236b49f->enter($__internal_289437ce4085afd8d294b108a8d3cdfe1b5fc8236b0b3a5f21a2e771d236b49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_5628c05ea1ae740f9fcaf08c568b072c8882bf9ca21bc3a7035d81299ce4061f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5628c05ea1ae740f9fcaf08c568b072c8882bf9ca21bc3a7035d81299ce4061f->enter($__internal_5628c05ea1ae740f9fcaf08c568b072c8882bf9ca21bc3a7035d81299ce4061f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_289437ce4085afd8d294b108a8d3cdfe1b5fc8236b0b3a5f21a2e771d236b49f->leave($__internal_289437ce4085afd8d294b108a8d3cdfe1b5fc8236b0b3a5f21a2e771d236b49f_prof);

        
        $__internal_5628c05ea1ae740f9fcaf08c568b072c8882bf9ca21bc3a7035d81299ce4061f->leave($__internal_5628c05ea1ae740f9fcaf08c568b072c8882bf9ca21bc3a7035d81299ce4061f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
