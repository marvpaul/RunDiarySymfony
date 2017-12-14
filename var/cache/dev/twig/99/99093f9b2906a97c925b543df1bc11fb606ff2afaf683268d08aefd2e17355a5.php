<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_a34e71ddb434ce54e9d5a56ffa884511ed0b22fe3ecff24918e71bffdf71bec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fc3ead050e90c742075029354acd0cf7c1cf904865bb379b9d5a77f1b0c79db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc3ead050e90c742075029354acd0cf7c1cf904865bb379b9d5a77f1b0c79db->enter($__internal_3fc3ead050e90c742075029354acd0cf7c1cf904865bb379b9d5a77f1b0c79db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_eca94add90c1222e53571a0c409971d3004bbfe85e4f940034126ec39c2d212d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca94add90c1222e53571a0c409971d3004bbfe85e4f940034126ec39c2d212d->enter($__internal_eca94add90c1222e53571a0c409971d3004bbfe85e4f940034126ec39c2d212d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_3fc3ead050e90c742075029354acd0cf7c1cf904865bb379b9d5a77f1b0c79db->leave($__internal_3fc3ead050e90c742075029354acd0cf7c1cf904865bb379b9d5a77f1b0c79db_prof);

        
        $__internal_eca94add90c1222e53571a0c409971d3004bbfe85e4f940034126ec39c2d212d->leave($__internal_eca94add90c1222e53571a0c409971d3004bbfe85e4f940034126ec39c2d212d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5182c6d2c1ba9186ddb4304982c1a89144f70b6d1ca24e5821ded14c7f73e5cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5182c6d2c1ba9186ddb4304982c1a89144f70b6d1ca24e5821ded14c7f73e5cc->enter($__internal_5182c6d2c1ba9186ddb4304982c1a89144f70b6d1ca24e5821ded14c7f73e5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca6fc655ace4784d8266f159c6297e0d376b951b761ff13944ec9381d60de7f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6fc655ace4784d8266f159c6297e0d376b951b761ff13944ec9381d60de7f3->enter($__internal_ca6fc655ace4784d8266f159c6297e0d376b951b761ff13944ec9381d60de7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ca6fc655ace4784d8266f159c6297e0d376b951b761ff13944ec9381d60de7f3->leave($__internal_ca6fc655ace4784d8266f159c6297e0d376b951b761ff13944ec9381d60de7f3_prof);

        
        $__internal_5182c6d2c1ba9186ddb4304982c1a89144f70b6d1ca24e5821ded14c7f73e5cc->leave($__internal_5182c6d2c1ba9186ddb4304982c1a89144f70b6d1ca24e5821ded14c7f73e5cc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5baa338510e4e8e492d068ff2055ea9748d533d8b344171412501748c6f9c749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5baa338510e4e8e492d068ff2055ea9748d533d8b344171412501748c6f9c749->enter($__internal_5baa338510e4e8e492d068ff2055ea9748d533d8b344171412501748c6f9c749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f4ad235008f23f656afc6d81786ad1a5792bbe123f6bbbce75ca9d98ba91223c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ad235008f23f656afc6d81786ad1a5792bbe123f6bbbce75ca9d98ba91223c->enter($__internal_f4ad235008f23f656afc6d81786ad1a5792bbe123f6bbbce75ca9d98ba91223c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f4ad235008f23f656afc6d81786ad1a5792bbe123f6bbbce75ca9d98ba91223c->leave($__internal_f4ad235008f23f656afc6d81786ad1a5792bbe123f6bbbce75ca9d98ba91223c_prof);

        
        $__internal_5baa338510e4e8e492d068ff2055ea9748d533d8b344171412501748c6f9c749->leave($__internal_5baa338510e4e8e492d068ff2055ea9748d533d8b344171412501748c6f9c749_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_def56f448e1b9d0fb19f15e6a1cdc9a5387c3f01c11801ebe96ae63af67af44a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def56f448e1b9d0fb19f15e6a1cdc9a5387c3f01c11801ebe96ae63af67af44a->enter($__internal_def56f448e1b9d0fb19f15e6a1cdc9a5387c3f01c11801ebe96ae63af67af44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30222c67b9d9b68f600fceeed3533bfc9da12000b424c7b59d90555b7d868751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30222c67b9d9b68f600fceeed3533bfc9da12000b424c7b59d90555b7d868751->enter($__internal_30222c67b9d9b68f600fceeed3533bfc9da12000b424c7b59d90555b7d868751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_30222c67b9d9b68f600fceeed3533bfc9da12000b424c7b59d90555b7d868751->leave($__internal_30222c67b9d9b68f600fceeed3533bfc9da12000b424c7b59d90555b7d868751_prof);

        
        $__internal_def56f448e1b9d0fb19f15e6a1cdc9a5387c3f01c11801ebe96ae63af67af44a->leave($__internal_def56f448e1b9d0fb19f15e6a1cdc9a5387c3f01c11801ebe96ae63af67af44a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
