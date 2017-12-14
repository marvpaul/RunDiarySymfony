<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_1094a03276d2bc917796ea9c3330763fd2c970b9638484de20667c4ba623d2b8 extends Twig_Template
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
        $__internal_6ed2416af2f1a416996d38f07b6eec845fc8b2104e39ca7ae32fbd03783223a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed2416af2f1a416996d38f07b6eec845fc8b2104e39ca7ae32fbd03783223a1->enter($__internal_6ed2416af2f1a416996d38f07b6eec845fc8b2104e39ca7ae32fbd03783223a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_156fb2d6804657296472a779123600c8bb4b3f6ceb0c406c269b99173cb00f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156fb2d6804657296472a779123600c8bb4b3f6ceb0c406c269b99173cb00f89->enter($__internal_156fb2d6804657296472a779123600c8bb4b3f6ceb0c406c269b99173cb00f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_6ed2416af2f1a416996d38f07b6eec845fc8b2104e39ca7ae32fbd03783223a1->leave($__internal_6ed2416af2f1a416996d38f07b6eec845fc8b2104e39ca7ae32fbd03783223a1_prof);

        
        $__internal_156fb2d6804657296472a779123600c8bb4b3f6ceb0c406c269b99173cb00f89->leave($__internal_156fb2d6804657296472a779123600c8bb4b3f6ceb0c406c269b99173cb00f89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/attributes.html.php");
    }
}
