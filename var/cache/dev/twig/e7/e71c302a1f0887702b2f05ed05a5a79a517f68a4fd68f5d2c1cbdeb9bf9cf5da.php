<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_16b68dbcca82d6fb51e201eb07f4ac1baecfcf64fafc327419eea8beb45be0c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8a280e52bc72188cf3ab343527f55bf368c984e9ec75e12c74168889f3b7f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8a280e52bc72188cf3ab343527f55bf368c984e9ec75e12c74168889f3b7f50->enter($__internal_b8a280e52bc72188cf3ab343527f55bf368c984e9ec75e12c74168889f3b7f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_52081322a86e10af7979a373ba086ba74fea07a1b2eb8d9da9a5b5a55649cdac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52081322a86e10af7979a373ba086ba74fea07a1b2eb8d9da9a5b5a55649cdac->enter($__internal_52081322a86e10af7979a373ba086ba74fea07a1b2eb8d9da9a5b5a55649cdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8a280e52bc72188cf3ab343527f55bf368c984e9ec75e12c74168889f3b7f50->leave($__internal_b8a280e52bc72188cf3ab343527f55bf368c984e9ec75e12c74168889f3b7f50_prof);

        
        $__internal_52081322a86e10af7979a373ba086ba74fea07a1b2eb8d9da9a5b5a55649cdac->leave($__internal_52081322a86e10af7979a373ba086ba74fea07a1b2eb8d9da9a5b5a55649cdac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea1218a12653f1a4ccd72f98ec5cb190824968697430a872565f9c8fcd0a68a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1218a12653f1a4ccd72f98ec5cb190824968697430a872565f9c8fcd0a68a8->enter($__internal_ea1218a12653f1a4ccd72f98ec5cb190824968697430a872565f9c8fcd0a68a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_245b549d698a341cc952074471f54145738e172df7eb87dbab5f6bdd083337b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245b549d698a341cc952074471f54145738e172df7eb87dbab5f6bdd083337b8->enter($__internal_245b549d698a341cc952074471f54145738e172df7eb87dbab5f6bdd083337b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_245b549d698a341cc952074471f54145738e172df7eb87dbab5f6bdd083337b8->leave($__internal_245b549d698a341cc952074471f54145738e172df7eb87dbab5f6bdd083337b8_prof);

        
        $__internal_ea1218a12653f1a4ccd72f98ec5cb190824968697430a872565f9c8fcd0a68a8->leave($__internal_ea1218a12653f1a4ccd72f98ec5cb190824968697430a872565f9c8fcd0a68a8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_582f0ca81ed58a35f4d2b9eaf37c1eef7f379b015365ab2bfd168de8f82db03d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_582f0ca81ed58a35f4d2b9eaf37c1eef7f379b015365ab2bfd168de8f82db03d->enter($__internal_582f0ca81ed58a35f4d2b9eaf37c1eef7f379b015365ab2bfd168de8f82db03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_268137d8de6abc59087bde47a76b8ae86ea1dfd17ac1b52ffc6cc47a0e72c549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268137d8de6abc59087bde47a76b8ae86ea1dfd17ac1b52ffc6cc47a0e72c549->enter($__internal_268137d8de6abc59087bde47a76b8ae86ea1dfd17ac1b52ffc6cc47a0e72c549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_268137d8de6abc59087bde47a76b8ae86ea1dfd17ac1b52ffc6cc47a0e72c549->leave($__internal_268137d8de6abc59087bde47a76b8ae86ea1dfd17ac1b52ffc6cc47a0e72c549_prof);

        
        $__internal_582f0ca81ed58a35f4d2b9eaf37c1eef7f379b015365ab2bfd168de8f82db03d->leave($__internal_582f0ca81ed58a35f4d2b9eaf37c1eef7f379b015365ab2bfd168de8f82db03d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
