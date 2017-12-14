<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_61f2282526f2bc992103c448207fa4d7bf71d87003cd7dfc8f7941e5431d37e0 extends Twig_Template
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
        $__internal_cd485ca4bae0abf2ad1231b52cc2ce27d5742db593c95071ff729ef3b711107d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd485ca4bae0abf2ad1231b52cc2ce27d5742db593c95071ff729ef3b711107d->enter($__internal_cd485ca4bae0abf2ad1231b52cc2ce27d5742db593c95071ff729ef3b711107d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_779f98f6c336de9eef7dd58fe319b53a6e4acfdc3cc6f874cf709c0fd99ed359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_779f98f6c336de9eef7dd58fe319b53a6e4acfdc3cc6f874cf709c0fd99ed359->enter($__internal_779f98f6c336de9eef7dd58fe319b53a6e4acfdc3cc6f874cf709c0fd99ed359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cd485ca4bae0abf2ad1231b52cc2ce27d5742db593c95071ff729ef3b711107d->leave($__internal_cd485ca4bae0abf2ad1231b52cc2ce27d5742db593c95071ff729ef3b711107d_prof);

        
        $__internal_779f98f6c336de9eef7dd58fe319b53a6e4acfdc3cc6f874cf709c0fd99ed359->leave($__internal_779f98f6c336de9eef7dd58fe319b53a6e4acfdc3cc6f874cf709c0fd99ed359_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
