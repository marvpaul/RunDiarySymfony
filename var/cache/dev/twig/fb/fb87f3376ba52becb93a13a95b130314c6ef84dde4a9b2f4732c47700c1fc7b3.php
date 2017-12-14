<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_c3e57d5b64db9ed7d68b9e7e029f5ecad58ebb79e5b468ff6be58a8cca1a20cf extends Twig_Template
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
        $__internal_af0f7ea22773b31828d9b95417d594277c41182704d523d05ce0c6dda7265ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af0f7ea22773b31828d9b95417d594277c41182704d523d05ce0c6dda7265ce0->enter($__internal_af0f7ea22773b31828d9b95417d594277c41182704d523d05ce0c6dda7265ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_098f80026519edcb2f984533597e242e7152ead70678f469b5ee8b9410857d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098f80026519edcb2f984533597e242e7152ead70678f469b5ee8b9410857d1d->enter($__internal_098f80026519edcb2f984533597e242e7152ead70678f469b5ee8b9410857d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_af0f7ea22773b31828d9b95417d594277c41182704d523d05ce0c6dda7265ce0->leave($__internal_af0f7ea22773b31828d9b95417d594277c41182704d523d05ce0c6dda7265ce0_prof);

        
        $__internal_098f80026519edcb2f984533597e242e7152ead70678f469b5ee8b9410857d1d->leave($__internal_098f80026519edcb2f984533597e242e7152ead70678f469b5ee8b9410857d1d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
