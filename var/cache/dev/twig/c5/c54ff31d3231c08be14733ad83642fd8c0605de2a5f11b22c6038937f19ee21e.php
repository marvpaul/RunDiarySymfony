<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8a8deb55ee4b0252475d7fdae0ba12f756a1b85d5214987834898bdb1198c8c7 extends Twig_Template
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
        $__internal_666cfdc295cb357326869531b149e3d863e577cb23e0a9f0af02cc78becc8c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666cfdc295cb357326869531b149e3d863e577cb23e0a9f0af02cc78becc8c07->enter($__internal_666cfdc295cb357326869531b149e3d863e577cb23e0a9f0af02cc78becc8c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_19b4979cfa18fc84a155d6b245a8624ebea5b4d843ad64ed0b9dca5b4523a1ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b4979cfa18fc84a155d6b245a8624ebea5b4d843ad64ed0b9dca5b4523a1ac->enter($__internal_19b4979cfa18fc84a155d6b245a8624ebea5b4d843ad64ed0b9dca5b4523a1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_666cfdc295cb357326869531b149e3d863e577cb23e0a9f0af02cc78becc8c07->leave($__internal_666cfdc295cb357326869531b149e3d863e577cb23e0a9f0af02cc78becc8c07_prof);

        
        $__internal_19b4979cfa18fc84a155d6b245a8624ebea5b4d843ad64ed0b9dca5b4523a1ac->leave($__internal_19b4979cfa18fc84a155d6b245a8624ebea5b4d843ad64ed0b9dca5b4523a1ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
