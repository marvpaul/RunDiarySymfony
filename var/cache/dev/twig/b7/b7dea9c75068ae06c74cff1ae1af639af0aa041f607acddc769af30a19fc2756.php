<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_8b933c74b72a06df10deda1854cca78e8478952b6498979d6d7c1c08bcfbdfbb extends Twig_Template
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
        $__internal_d40b9b802fc1beaf009a80d81dcb5ad02597dd1826ecc7f7ad926352d54238d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d40b9b802fc1beaf009a80d81dcb5ad02597dd1826ecc7f7ad926352d54238d8->enter($__internal_d40b9b802fc1beaf009a80d81dcb5ad02597dd1826ecc7f7ad926352d54238d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_fd944e303725b9d362e5b7dacce81203f336f6a4b62ef58fcde7b384ee91449c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd944e303725b9d362e5b7dacce81203f336f6a4b62ef58fcde7b384ee91449c->enter($__internal_fd944e303725b9d362e5b7dacce81203f336f6a4b62ef58fcde7b384ee91449c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_d40b9b802fc1beaf009a80d81dcb5ad02597dd1826ecc7f7ad926352d54238d8->leave($__internal_d40b9b802fc1beaf009a80d81dcb5ad02597dd1826ecc7f7ad926352d54238d8_prof);

        
        $__internal_fd944e303725b9d362e5b7dacce81203f336f6a4b62ef58fcde7b384ee91449c->leave($__internal_fd944e303725b9d362e5b7dacce81203f336f6a4b62ef58fcde7b384ee91449c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/Users/marvinkruger/uebung6/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.css.twig");
    }
}
