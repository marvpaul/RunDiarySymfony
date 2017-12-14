<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_97f9aa04d9a4f63e4182b8bc86dd6790519fd907594ffffe3a6118097e92b101 extends Twig_Template
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
        $__internal_3df140467abe15c183f70eae321f0e83456603856f1c0ec2e94d27100b4f10ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df140467abe15c183f70eae321f0e83456603856f1c0ec2e94d27100b4f10ee->enter($__internal_3df140467abe15c183f70eae321f0e83456603856f1c0ec2e94d27100b4f10ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_082d7cb2a003f6c4572689d760af6923341adb2f4a3914c3c3c976d915620158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082d7cb2a003f6c4572689d760af6923341adb2f4a3914c3c3c976d915620158->enter($__internal_082d7cb2a003f6c4572689d760af6923341adb2f4a3914c3c3c976d915620158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_3df140467abe15c183f70eae321f0e83456603856f1c0ec2e94d27100b4f10ee->leave($__internal_3df140467abe15c183f70eae321f0e83456603856f1c0ec2e94d27100b4f10ee_prof);

        
        $__internal_082d7cb2a003f6c4572689d760af6923341adb2f4a3914c3c3c976d915620158->leave($__internal_082d7cb2a003f6c4572689d760af6923341adb2f4a3914c3c3c976d915620158_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/form_start.html.php");
    }
}
