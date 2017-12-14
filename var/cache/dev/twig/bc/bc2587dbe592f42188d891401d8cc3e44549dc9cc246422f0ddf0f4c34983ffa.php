<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b48e6c9ab0fb81f77bbff0dc7e4c94683d9965f10022257cebae8e9067a76f24 extends Twig_Template
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
        $__internal_4f2601a8412bde226fc7050643ed24189637ab597853b1679f8a80b3d118fc32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2601a8412bde226fc7050643ed24189637ab597853b1679f8a80b3d118fc32->enter($__internal_4f2601a8412bde226fc7050643ed24189637ab597853b1679f8a80b3d118fc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_baa37c3ca77cec4edb428fcec53e67486f74abcbe9913e5c88ddf973124bfb5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa37c3ca77cec4edb428fcec53e67486f74abcbe9913e5c88ddf973124bfb5e->enter($__internal_baa37c3ca77cec4edb428fcec53e67486f74abcbe9913e5c88ddf973124bfb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_4f2601a8412bde226fc7050643ed24189637ab597853b1679f8a80b3d118fc32->leave($__internal_4f2601a8412bde226fc7050643ed24189637ab597853b1679f8a80b3d118fc32_prof);

        
        $__internal_baa37c3ca77cec4edb428fcec53e67486f74abcbe9913e5c88ddf973124bfb5e->leave($__internal_baa37c3ca77cec4edb428fcec53e67486f74abcbe9913e5c88ddf973124bfb5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
