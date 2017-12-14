<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b2b93cb77b5247989ed5f8cc2d3cfb026973d52137544ff5f6368b0490411e1d extends Twig_Template
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
        $__internal_e9a68585d43d0cc851eb246d7c61cda76860a91390d43fa4875a7178e89fc754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9a68585d43d0cc851eb246d7c61cda76860a91390d43fa4875a7178e89fc754->enter($__internal_e9a68585d43d0cc851eb246d7c61cda76860a91390d43fa4875a7178e89fc754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_91983e6490d0ed8be70dc0d7d57c0714bce5ad2bb1e1bd9f8144e2229d37ae20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91983e6490d0ed8be70dc0d7d57c0714bce5ad2bb1e1bd9f8144e2229d37ae20->enter($__internal_91983e6490d0ed8be70dc0d7d57c0714bce5ad2bb1e1bd9f8144e2229d37ae20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e9a68585d43d0cc851eb246d7c61cda76860a91390d43fa4875a7178e89fc754->leave($__internal_e9a68585d43d0cc851eb246d7c61cda76860a91390d43fa4875a7178e89fc754_prof);

        
        $__internal_91983e6490d0ed8be70dc0d7d57c0714bce5ad2bb1e1bd9f8144e2229d37ae20->leave($__internal_91983e6490d0ed8be70dc0d7d57c0714bce5ad2bb1e1bd9f8144e2229d37ae20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
