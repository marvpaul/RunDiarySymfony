<?php

/* @Maker/demoPage.html.twig */
class __TwigTemplate_a743ac3ce6e94db8ecc0cf033f26d505cde458df2ef801a5020eda035accb984 extends Twig_Template
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
        $__internal_4d774397aa6477e3f2df1eeba105410cf67a5fda18196bbdbff8f5106d5852ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d774397aa6477e3f2df1eeba105410cf67a5fda18196bbdbff8f5106d5852ae->enter($__internal_4d774397aa6477e3f2df1eeba105410cf67a5fda18196bbdbff8f5106d5852ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Maker/demoPage.html.twig"));

        $__internal_49c05d0d0f9d87dc191c42d1fdda1c0284705ae4ae259a00c4eee17e6bf9a3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c05d0d0f9d87dc191c42d1fdda1c0284705ae4ae259a00c4eee17e6bf9a3cc->enter($__internal_49c05d0d0f9d87dc191c42d1fdda1c0284705ae4ae259a00c4eee17e6bf9a3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Maker/demoPage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>Welcome!</title>
    <style>
        body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
        h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
        h1 { font-size: 36px; }
        h2 { font-size: 21px; margin-bottom: 1em; }
        p { margin: 0 0 1em 0; }
        a { color: #0000F0; }
        a:hover { text-decoration: none; }
        code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
        #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
        #container { padding: 2em; }
        #welcome, #status { margin-bottom: 2em; }
        #welcome h1 span { display: block; font-size: 75%; }
        #comment p { margin-bottom: 0; }
        #icon-status { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
        @media (min-width: 768px) {
            #wrapper { width: 80%; margin: 2em auto; }
            #status a, #next a { display: block; }
            @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
        }
    </style>
</head>
<body>
<div id=\"wrapper\">
    <div id=\"container\">
        <div id=\"welcome\">
            <h1><span>You just generated a new controller!</span></h1>
        </div>

        <div id=\"status\">
            <p>
                <svg id=\"icon-status\" width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\" fill=\"#759E1A\"/></svg>

                Now, modify it at<br>
                <code>";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 42, $this->getSourceContext()); })()), "html", null, true);
        echo "</code>
            </p>
        </div>
    </div>
</div>
</body>
</html>
";
        
        $__internal_4d774397aa6477e3f2df1eeba105410cf67a5fda18196bbdbff8f5106d5852ae->leave($__internal_4d774397aa6477e3f2df1eeba105410cf67a5fda18196bbdbff8f5106d5852ae_prof);

        
        $__internal_49c05d0d0f9d87dc191c42d1fdda1c0284705ae4ae259a00c4eee17e6bf9a3cc->leave($__internal_49c05d0d0f9d87dc191c42d1fdda1c0284705ae4ae259a00c4eee17e6bf9a3cc_prof);

    }

    public function getTemplateName()
    {
        return "@Maker/demoPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 42,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>Welcome!</title>
    <style>
        body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
        h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
        h1 { font-size: 36px; }
        h2 { font-size: 21px; margin-bottom: 1em; }
        p { margin: 0 0 1em 0; }
        a { color: #0000F0; }
        a:hover { text-decoration: none; }
        code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
        #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
        #container { padding: 2em; }
        #welcome, #status { margin-bottom: 2em; }
        #welcome h1 span { display: block; font-size: 75%; }
        #comment p { margin-bottom: 0; }
        #icon-status { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
        @media (min-width: 768px) {
            #wrapper { width: 80%; margin: 2em auto; }
            #status a, #next a { display: block; }
            @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
        }
    </style>
</head>
<body>
<div id=\"wrapper\">
    <div id=\"container\">
        <div id=\"welcome\">
            <h1><span>You just generated a new controller!</span></h1>
        </div>

        <div id=\"status\">
            <p>
                <svg id=\"icon-status\" width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\" fill=\"#759E1A\"/></svg>

                Now, modify it at<br>
                <code>{{ path }}</code>
            </p>
        </div>
    </div>
</div>
</body>
</html>
", "@Maker/demoPage.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/maker-bundle/src/Resources/views/demoPage.html.twig");
    }
}
