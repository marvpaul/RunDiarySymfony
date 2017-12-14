<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a0b5696a7f454b7104d05bf8aa42d63a3cc1e74aaff342bbf17c0171b2186157 extends Twig_Template
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
        $__internal_668667727e513a9c98c03a34c84d7c237d0e055c0a56eb984a2b4d7219989e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668667727e513a9c98c03a34c84d7c237d0e055c0a56eb984a2b4d7219989e68->enter($__internal_668667727e513a9c98c03a34c84d7c237d0e055c0a56eb984a2b4d7219989e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_15480102a5576aafa3498b25ae98ed02a37961494939869541810b4fb8045062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15480102a5576aafa3498b25ae98ed02a37961494939869541810b4fb8045062->enter($__internal_15480102a5576aafa3498b25ae98ed02a37961494939869541810b4fb8045062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_668667727e513a9c98c03a34c84d7c237d0e055c0a56eb984a2b4d7219989e68->leave($__internal_668667727e513a9c98c03a34c84d7c237d0e055c0a56eb984a2b4d7219989e68_prof);

        
        $__internal_15480102a5576aafa3498b25ae98ed02a37961494939869541810b4fb8045062->leave($__internal_15480102a5576aafa3498b25ae98ed02a37961494939869541810b4fb8045062_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}
