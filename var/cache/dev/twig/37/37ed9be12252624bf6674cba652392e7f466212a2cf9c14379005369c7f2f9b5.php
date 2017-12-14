<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2a74b68b07859ddb1273d5fe476dacd6f229594fd86179b1d1732e399f4d4241 extends Twig_Template
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
        $__internal_aed93f6e7506127b4b996bde0adb9b5599eeb4b1fdbfc6f65d976794a1b9aa2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed93f6e7506127b4b996bde0adb9b5599eeb4b1fdbfc6f65d976794a1b9aa2e->enter($__internal_aed93f6e7506127b4b996bde0adb9b5599eeb4b1fdbfc6f65d976794a1b9aa2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_436b87d275e3cfd2d8528c481603576878dca57d7a90b88e9bd03f9cfe923c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436b87d275e3cfd2d8528c481603576878dca57d7a90b88e9bd03f9cfe923c43->enter($__internal_436b87d275e3cfd2d8528c481603576878dca57d7a90b88e9bd03f9cfe923c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_aed93f6e7506127b4b996bde0adb9b5599eeb4b1fdbfc6f65d976794a1b9aa2e->leave($__internal_aed93f6e7506127b4b996bde0adb9b5599eeb4b1fdbfc6f65d976794a1b9aa2e_prof);

        
        $__internal_436b87d275e3cfd2d8528c481603576878dca57d7a90b88e9bd03f9cfe923c43->leave($__internal_436b87d275e3cfd2d8528c481603576878dca57d7a90b88e9bd03f9cfe923c43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
