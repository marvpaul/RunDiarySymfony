<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_adf9ce0da3f25a309821ca44205d383fccb4671642d56f34775eb78d007fd74d extends Twig_Template
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
        $__internal_fade15e5cae46c528a8d1b26306727091e617b2f66ba0e302fd659c408bc550e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fade15e5cae46c528a8d1b26306727091e617b2f66ba0e302fd659c408bc550e->enter($__internal_fade15e5cae46c528a8d1b26306727091e617b2f66ba0e302fd659c408bc550e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_c67c44b97c51c088f82a3cc838ccbc7a3bd72629502f7f7615dc32d92b2270f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67c44b97c51c088f82a3cc838ccbc7a3bd72629502f7f7615dc32d92b2270f5->enter($__internal_c67c44b97c51c088f82a3cc838ccbc7a3bd72629502f7f7615dc32d92b2270f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_fade15e5cae46c528a8d1b26306727091e617b2f66ba0e302fd659c408bc550e->leave($__internal_fade15e5cae46c528a8d1b26306727091e617b2f66ba0e302fd659c408bc550e_prof);

        
        $__internal_c67c44b97c51c088f82a3cc838ccbc7a3bd72629502f7f7615dc32d92b2270f5->leave($__internal_c67c44b97c51c088f82a3cc838ccbc7a3bd72629502f7f7615dc32d92b2270f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/time_widget.html.php");
    }
}
