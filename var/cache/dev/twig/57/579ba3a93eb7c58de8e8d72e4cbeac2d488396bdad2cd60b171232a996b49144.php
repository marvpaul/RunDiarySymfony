<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b6d7b883851805ba1bb8f096e734332e09d8d5dfb3228d31bf797828e38e2547 extends Twig_Template
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
        $__internal_d6d333783c53319533ecca6e1bfd054586960b10d9fd83b657724d0ab4d7ab59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d333783c53319533ecca6e1bfd054586960b10d9fd83b657724d0ab4d7ab59->enter($__internal_d6d333783c53319533ecca6e1bfd054586960b10d9fd83b657724d0ab4d7ab59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_a08f9ff079e31016ad39e8a4687344bf3ad4d19dd069cd94a9e5b0e44d90ca8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08f9ff079e31016ad39e8a4687344bf3ad4d19dd069cd94a9e5b0e44d90ca8b->enter($__internal_a08f9ff079e31016ad39e8a4687344bf3ad4d19dd069cd94a9e5b0e44d90ca8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d6d333783c53319533ecca6e1bfd054586960b10d9fd83b657724d0ab4d7ab59->leave($__internal_d6d333783c53319533ecca6e1bfd054586960b10d9fd83b657724d0ab4d7ab59_prof);

        
        $__internal_a08f9ff079e31016ad39e8a4687344bf3ad4d19dd069cd94a9e5b0e44d90ca8b->leave($__internal_a08f9ff079e31016ad39e8a4687344bf3ad4d19dd069cd94a9e5b0e44d90ca8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
