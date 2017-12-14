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
        $__internal_1ca41e8d8aaa625afa24ef1a51a18b94dcf5c52314cd0ec5d28e96c75c7bbc4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca41e8d8aaa625afa24ef1a51a18b94dcf5c52314cd0ec5d28e96c75c7bbc4c->enter($__internal_1ca41e8d8aaa625afa24ef1a51a18b94dcf5c52314cd0ec5d28e96c75c7bbc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7f29634fea6f8062f500e6974fd481d272c5f6db95c3cf94b862efd115a36540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f29634fea6f8062f500e6974fd481d272c5f6db95c3cf94b862efd115a36540->enter($__internal_7f29634fea6f8062f500e6974fd481d272c5f6db95c3cf94b862efd115a36540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ca41e8d8aaa625afa24ef1a51a18b94dcf5c52314cd0ec5d28e96c75c7bbc4c->leave($__internal_1ca41e8d8aaa625afa24ef1a51a18b94dcf5c52314cd0ec5d28e96c75c7bbc4c_prof);

        
        $__internal_7f29634fea6f8062f500e6974fd481d272c5f6db95c3cf94b862efd115a36540->leave($__internal_7f29634fea6f8062f500e6974fd481d272c5f6db95c3cf94b862efd115a36540_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5bc92f8495576bda019dd08d9e0fcd259762f05ff9a87032ea56caf9a707bce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc92f8495576bda019dd08d9e0fcd259762f05ff9a87032ea56caf9a707bce6->enter($__internal_5bc92f8495576bda019dd08d9e0fcd259762f05ff9a87032ea56caf9a707bce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_851e8c80458fb28d8d726a7d0239074170eeef343359f5544835188d1bb50ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851e8c80458fb28d8d726a7d0239074170eeef343359f5544835188d1bb50ed8->enter($__internal_851e8c80458fb28d8d726a7d0239074170eeef343359f5544835188d1bb50ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_851e8c80458fb28d8d726a7d0239074170eeef343359f5544835188d1bb50ed8->leave($__internal_851e8c80458fb28d8d726a7d0239074170eeef343359f5544835188d1bb50ed8_prof);

        
        $__internal_5bc92f8495576bda019dd08d9e0fcd259762f05ff9a87032ea56caf9a707bce6->leave($__internal_5bc92f8495576bda019dd08d9e0fcd259762f05ff9a87032ea56caf9a707bce6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_31525ce9e7b558a7513828effc1bf11ef16eaf3dd2bfee2da181b5f84551ebba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31525ce9e7b558a7513828effc1bf11ef16eaf3dd2bfee2da181b5f84551ebba->enter($__internal_31525ce9e7b558a7513828effc1bf11ef16eaf3dd2bfee2da181b5f84551ebba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9e24451ad6f19e2886baaa9d271cdd94e074ae23531c302814601ac17c0f6d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e24451ad6f19e2886baaa9d271cdd94e074ae23531c302814601ac17c0f6d49->enter($__internal_9e24451ad6f19e2886baaa9d271cdd94e074ae23531c302814601ac17c0f6d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_9e24451ad6f19e2886baaa9d271cdd94e074ae23531c302814601ac17c0f6d49->leave($__internal_9e24451ad6f19e2886baaa9d271cdd94e074ae23531c302814601ac17c0f6d49_prof);

        
        $__internal_31525ce9e7b558a7513828effc1bf11ef16eaf3dd2bfee2da181b5f84551ebba->leave($__internal_31525ce9e7b558a7513828effc1bf11ef16eaf3dd2bfee2da181b5f84551ebba_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_65a76177286c63dcd5a6a4dface7ecba241d89f7f9703e6b685cb87adc360770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a76177286c63dcd5a6a4dface7ecba241d89f7f9703e6b685cb87adc360770->enter($__internal_65a76177286c63dcd5a6a4dface7ecba241d89f7f9703e6b685cb87adc360770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5a6325702e39e81659c81184a9387830b078d1b06c74f045405124f330532c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a6325702e39e81659c81184a9387830b078d1b06c74f045405124f330532c3->enter($__internal_b5a6325702e39e81659c81184a9387830b078d1b06c74f045405124f330532c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b5a6325702e39e81659c81184a9387830b078d1b06c74f045405124f330532c3->leave($__internal_b5a6325702e39e81659c81184a9387830b078d1b06c74f045405124f330532c3_prof);

        
        $__internal_65a76177286c63dcd5a6a4dface7ecba241d89f7f9703e6b685cb87adc360770->leave($__internal_65a76177286c63dcd5a6a4dface7ecba241d89f7f9703e6b685cb87adc360770_prof);

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
