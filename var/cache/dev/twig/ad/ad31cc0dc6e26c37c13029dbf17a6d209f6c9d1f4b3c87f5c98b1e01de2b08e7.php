<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_29db75ec7ed0c0d9010fb19d852b68b5a7956608952b87d98b0f514f2f77db3c extends Twig_Template
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
        $__internal_00cfe7cab52c5023f553ea78505aec146b0a1c707269e3e54d18e38c61237345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00cfe7cab52c5023f553ea78505aec146b0a1c707269e3e54d18e38c61237345->enter($__internal_00cfe7cab52c5023f553ea78505aec146b0a1c707269e3e54d18e38c61237345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_8b7eaf627ff84d625571c1f86fce69c28822c1cee4ef0d33a2d1c09bd203c392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7eaf627ff84d625571c1f86fce69c28822c1cee4ef0d33a2d1c09bd203c392->enter($__internal_8b7eaf627ff84d625571c1f86fce69c28822c1cee4ef0d33a2d1c09bd203c392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_00cfe7cab52c5023f553ea78505aec146b0a1c707269e3e54d18e38c61237345->leave($__internal_00cfe7cab52c5023f553ea78505aec146b0a1c707269e3e54d18e38c61237345_prof);

        
        $__internal_8b7eaf627ff84d625571c1f86fce69c28822c1cee4ef0d33a2d1c09bd203c392->leave($__internal_8b7eaf627ff84d625571c1f86fce69c28822c1cee4ef0d33a2d1c09bd203c392_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/marvinkruger/uebung6/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
