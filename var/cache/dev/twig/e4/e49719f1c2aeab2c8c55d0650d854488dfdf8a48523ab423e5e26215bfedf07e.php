<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_0753a1a5a674cecb1faf2faae882d6c2a279c547f04a9457dd980c9e4783087c extends Twig_Template
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
        $__internal_d1cca929f822866af263acfe21c1be30003adbf02dba3500f54b14e3e3ea1e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1cca929f822866af263acfe21c1be30003adbf02dba3500f54b14e3e3ea1e6f->enter($__internal_d1cca929f822866af263acfe21c1be30003adbf02dba3500f54b14e3e3ea1e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_8c765234ed9f0a9256c78f9330e0e2453465475c5d88913b0b6569dcc67fb249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c765234ed9f0a9256c78f9330e0e2453465475c5d88913b0b6569dcc67fb249->enter($__internal_8c765234ed9f0a9256c78f9330e0e2453465475c5d88913b0b6569dcc67fb249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d1cca929f822866af263acfe21c1be30003adbf02dba3500f54b14e3e3ea1e6f->leave($__internal_d1cca929f822866af263acfe21c1be30003adbf02dba3500f54b14e3e3ea1e6f_prof);

        
        $__internal_8c765234ed9f0a9256c78f9330e0e2453465475c5d88913b0b6569dcc67fb249->leave($__internal_8c765234ed9f0a9256c78f9330e0e2453465475c5d88913b0b6569dcc67fb249_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
