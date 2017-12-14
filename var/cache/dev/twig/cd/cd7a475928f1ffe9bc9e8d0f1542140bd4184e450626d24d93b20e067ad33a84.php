<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fb318516ec245a721e91cd63b317f59ebbe789a23bfe8a24b225deaafa340c56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_096b1621d51c45f34395ba2b6bbe9e0b05b1cc0ff64d10a6340b86b85ca1627f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_096b1621d51c45f34395ba2b6bbe9e0b05b1cc0ff64d10a6340b86b85ca1627f->enter($__internal_096b1621d51c45f34395ba2b6bbe9e0b05b1cc0ff64d10a6340b86b85ca1627f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c9390e32def026cec726e03b3d62e72f50e8b287d4c8582e639105642ed80c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9390e32def026cec726e03b3d62e72f50e8b287d4c8582e639105642ed80c39->enter($__internal_c9390e32def026cec726e03b3d62e72f50e8b287d4c8582e639105642ed80c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_096b1621d51c45f34395ba2b6bbe9e0b05b1cc0ff64d10a6340b86b85ca1627f->leave($__internal_096b1621d51c45f34395ba2b6bbe9e0b05b1cc0ff64d10a6340b86b85ca1627f_prof);

        
        $__internal_c9390e32def026cec726e03b3d62e72f50e8b287d4c8582e639105642ed80c39->leave($__internal_c9390e32def026cec726e03b3d62e72f50e8b287d4c8582e639105642ed80c39_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d30dcd030da9b24cd32652a28c762161835b978437b6d8ffd83e9d0bcbef55f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d30dcd030da9b24cd32652a28c762161835b978437b6d8ffd83e9d0bcbef55f8->enter($__internal_d30dcd030da9b24cd32652a28c762161835b978437b6d8ffd83e9d0bcbef55f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_48c219584bd2db27b2a07d13590b26f464c4739e301609e5ccba8d33199fd46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c219584bd2db27b2a07d13590b26f464c4739e301609e5ccba8d33199fd46b->enter($__internal_48c219584bd2db27b2a07d13590b26f464c4739e301609e5ccba8d33199fd46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_48c219584bd2db27b2a07d13590b26f464c4739e301609e5ccba8d33199fd46b->leave($__internal_48c219584bd2db27b2a07d13590b26f464c4739e301609e5ccba8d33199fd46b_prof);

        
        $__internal_d30dcd030da9b24cd32652a28c762161835b978437b6d8ffd83e9d0bcbef55f8->leave($__internal_d30dcd030da9b24cd32652a28c762161835b978437b6d8ffd83e9d0bcbef55f8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8fd62d9ee95124f8e2da032407b73f5c773e300e02f1afbcdb39d0fbcad9776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8fd62d9ee95124f8e2da032407b73f5c773e300e02f1afbcdb39d0fbcad9776->enter($__internal_e8fd62d9ee95124f8e2da032407b73f5c773e300e02f1afbcdb39d0fbcad9776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f188977094f7580f26ea3fd39d548b852d158d7b989e59964732f675ed1ed5b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f188977094f7580f26ea3fd39d548b852d158d7b989e59964732f675ed1ed5b9->enter($__internal_f188977094f7580f26ea3fd39d548b852d158d7b989e59964732f675ed1ed5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_f188977094f7580f26ea3fd39d548b852d158d7b989e59964732f675ed1ed5b9->leave($__internal_f188977094f7580f26ea3fd39d548b852d158d7b989e59964732f675ed1ed5b9_prof);

        
        $__internal_e8fd62d9ee95124f8e2da032407b73f5c773e300e02f1afbcdb39d0fbcad9776->leave($__internal_e8fd62d9ee95124f8e2da032407b73f5c773e300e02f1afbcdb39d0fbcad9776_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f0519d17581d2de21f39791541dde8d3c88a1da3c97a273975057fca09b0bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f0519d17581d2de21f39791541dde8d3c88a1da3c97a273975057fca09b0bd2->enter($__internal_4f0519d17581d2de21f39791541dde8d3c88a1da3c97a273975057fca09b0bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4a3379756f9755d54f3ac7dd82f6f178e4b40aa13e3a1a7095ae3ad838d43b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a3379756f9755d54f3ac7dd82f6f178e4b40aa13e3a1a7095ae3ad838d43b5->enter($__internal_c4a3379756f9755d54f3ac7dd82f6f178e4b40aa13e3a1a7095ae3ad838d43b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c4a3379756f9755d54f3ac7dd82f6f178e4b40aa13e3a1a7095ae3ad838d43b5->leave($__internal_c4a3379756f9755d54f3ac7dd82f6f178e4b40aa13e3a1a7095ae3ad838d43b5_prof);

        
        $__internal_4f0519d17581d2de21f39791541dde8d3c88a1da3c97a273975057fca09b0bd2->leave($__internal_4f0519d17581d2de21f39791541dde8d3c88a1da3c97a273975057fca09b0bd2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
