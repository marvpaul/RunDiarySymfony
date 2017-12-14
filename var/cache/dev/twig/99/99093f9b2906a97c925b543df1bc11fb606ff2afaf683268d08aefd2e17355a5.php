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
        $__internal_36a688885160e1f9ee3c79e28316933951999cc244aa45286c4e98c95bd2e319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36a688885160e1f9ee3c79e28316933951999cc244aa45286c4e98c95bd2e319->enter($__internal_36a688885160e1f9ee3c79e28316933951999cc244aa45286c4e98c95bd2e319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d2749869cfcc2856e9e6ca4a5b88600dcfefd078bbfad09140dad74e0829b85f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2749869cfcc2856e9e6ca4a5b88600dcfefd078bbfad09140dad74e0829b85f->enter($__internal_d2749869cfcc2856e9e6ca4a5b88600dcfefd078bbfad09140dad74e0829b85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_36a688885160e1f9ee3c79e28316933951999cc244aa45286c4e98c95bd2e319->leave($__internal_36a688885160e1f9ee3c79e28316933951999cc244aa45286c4e98c95bd2e319_prof);

        
        $__internal_d2749869cfcc2856e9e6ca4a5b88600dcfefd078bbfad09140dad74e0829b85f->leave($__internal_d2749869cfcc2856e9e6ca4a5b88600dcfefd078bbfad09140dad74e0829b85f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_47575c6df520b72753494a5d919eec2f66a012950a6596abf1da1e241ec89da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47575c6df520b72753494a5d919eec2f66a012950a6596abf1da1e241ec89da7->enter($__internal_47575c6df520b72753494a5d919eec2f66a012950a6596abf1da1e241ec89da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10145f230aff257cefe531858f543c9a141113367620c044344be0671ed31e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10145f230aff257cefe531858f543c9a141113367620c044344be0671ed31e8f->enter($__internal_10145f230aff257cefe531858f543c9a141113367620c044344be0671ed31e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_10145f230aff257cefe531858f543c9a141113367620c044344be0671ed31e8f->leave($__internal_10145f230aff257cefe531858f543c9a141113367620c044344be0671ed31e8f_prof);

        
        $__internal_47575c6df520b72753494a5d919eec2f66a012950a6596abf1da1e241ec89da7->leave($__internal_47575c6df520b72753494a5d919eec2f66a012950a6596abf1da1e241ec89da7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_42f7b72a352410f95b42e6a5fe44ca7f0c9a890a5181164b3d86faa35a2a3c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42f7b72a352410f95b42e6a5fe44ca7f0c9a890a5181164b3d86faa35a2a3c0e->enter($__internal_42f7b72a352410f95b42e6a5fe44ca7f0c9a890a5181164b3d86faa35a2a3c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8815e8c67cb76f5a72d2aeb2fd3cc4113c88d3bcdb0d1e2ffa4dccf5565f0925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8815e8c67cb76f5a72d2aeb2fd3cc4113c88d3bcdb0d1e2ffa4dccf5565f0925->enter($__internal_8815e8c67cb76f5a72d2aeb2fd3cc4113c88d3bcdb0d1e2ffa4dccf5565f0925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8815e8c67cb76f5a72d2aeb2fd3cc4113c88d3bcdb0d1e2ffa4dccf5565f0925->leave($__internal_8815e8c67cb76f5a72d2aeb2fd3cc4113c88d3bcdb0d1e2ffa4dccf5565f0925_prof);

        
        $__internal_42f7b72a352410f95b42e6a5fe44ca7f0c9a890a5181164b3d86faa35a2a3c0e->leave($__internal_42f7b72a352410f95b42e6a5fe44ca7f0c9a890a5181164b3d86faa35a2a3c0e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_79a221625721a7a42cd7118f3e0b2e2d03477f4bed2048bd347ffdb70e2bb39c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a221625721a7a42cd7118f3e0b2e2d03477f4bed2048bd347ffdb70e2bb39c->enter($__internal_79a221625721a7a42cd7118f3e0b2e2d03477f4bed2048bd347ffdb70e2bb39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49eeac9d176563a32ef435aace98bc0ba42b1da8ecafa8dea762f2c6a0baa491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49eeac9d176563a32ef435aace98bc0ba42b1da8ecafa8dea762f2c6a0baa491->enter($__internal_49eeac9d176563a32ef435aace98bc0ba42b1da8ecafa8dea762f2c6a0baa491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_49eeac9d176563a32ef435aace98bc0ba42b1da8ecafa8dea762f2c6a0baa491->leave($__internal_49eeac9d176563a32ef435aace98bc0ba42b1da8ecafa8dea762f2c6a0baa491_prof);

        
        $__internal_79a221625721a7a42cd7118f3e0b2e2d03477f4bed2048bd347ffdb70e2bb39c->leave($__internal_79a221625721a7a42cd7118f3e0b2e2d03477f4bed2048bd347ffdb70e2bb39c_prof);

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
