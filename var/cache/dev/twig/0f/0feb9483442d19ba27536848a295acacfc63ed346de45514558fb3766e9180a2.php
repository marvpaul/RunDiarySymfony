<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_0db77e0873cf06f54a7d12d69a8d71475364d0f784a5b0db4be16c0e174ede4d extends Twig_Template
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
        $__internal_6d6e7b589f228e7d515632533b3003d2d7bef9681f8bef92a8865a8f1368cd80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d6e7b589f228e7d515632533b3003d2d7bef9681f8bef92a8865a8f1368cd80->enter($__internal_6d6e7b589f228e7d515632533b3003d2d7bef9681f8bef92a8865a8f1368cd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_721d6a53bc3a093efe7cdf5b246851e4572b007d6aa6bd9e8f00dbabcadfb5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721d6a53bc3a093efe7cdf5b246851e4572b007d6aa6bd9e8f00dbabcadfb5cc->enter($__internal_721d6a53bc3a093efe7cdf5b246851e4572b007d6aa6bd9e8f00dbabcadfb5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6d6e7b589f228e7d515632533b3003d2d7bef9681f8bef92a8865a8f1368cd80->leave($__internal_6d6e7b589f228e7d515632533b3003d2d7bef9681f8bef92a8865a8f1368cd80_prof);

        
        $__internal_721d6a53bc3a093efe7cdf5b246851e4572b007d6aa6bd9e8f00dbabcadfb5cc->leave($__internal_721d6a53bc3a093efe7cdf5b246851e4572b007d6aa6bd9e8f00dbabcadfb5cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
