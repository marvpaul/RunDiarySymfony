<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_26650aa22c3534ef24dee90426476f306f6dec1d3f1470476ecb553567642576 extends Twig_Template
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
        $__internal_1a82adb6628a971a2a7fa303646f8b5d44f0951239d5a7cf185f4ee842a3932a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a82adb6628a971a2a7fa303646f8b5d44f0951239d5a7cf185f4ee842a3932a->enter($__internal_1a82adb6628a971a2a7fa303646f8b5d44f0951239d5a7cf185f4ee842a3932a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_66b63c0d79171a6c5f1dfb06dd5fda5e28e12f67454cf5abfa39798ca40dca1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b63c0d79171a6c5f1dfb06dd5fda5e28e12f67454cf5abfa39798ca40dca1a->enter($__internal_66b63c0d79171a6c5f1dfb06dd5fda5e28e12f67454cf5abfa39798ca40dca1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new Twig_Error_Runtime('Variable "month" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new Twig_Error_Runtime('Variable "day" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1a82adb6628a971a2a7fa303646f8b5d44f0951239d5a7cf185f4ee842a3932a->leave($__internal_1a82adb6628a971a2a7fa303646f8b5d44f0951239d5a7cf185f4ee842a3932a_prof);

        
        $__internal_66b63c0d79171a6c5f1dfb06dd5fda5e28e12f67454cf5abfa39798ca40dca1a->leave($__internal_66b63c0d79171a6c5f1dfb06dd5fda5e28e12f67454cf5abfa39798ca40dca1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/date_widget.html.php");
    }
}
