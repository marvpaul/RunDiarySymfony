<?php

/* index.html.twig */
class __TwigTemplate_990d7affa4f23a54e55aca9a28e6570a7cd519a1b4352e5383f19c12d2dc89b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68f625671f6e1c5377daf169d58766aea3bc124dcbcfebe280c8d9647f29e908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f625671f6e1c5377daf169d58766aea3bc124dcbcfebe280c8d9647f29e908->enter($__internal_68f625671f6e1c5377daf169d58766aea3bc124dcbcfebe280c8d9647f29e908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_cfbbd2362a52350974590635cb401dbc6227bb1c9422597e1ccc94026ef780bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfbbd2362a52350974590635cb401dbc6227bb1c9422597e1ccc94026ef780bf->enter($__internal_cfbbd2362a52350974590635cb401dbc6227bb1c9422597e1ccc94026ef780bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68f625671f6e1c5377daf169d58766aea3bc124dcbcfebe280c8d9647f29e908->leave($__internal_68f625671f6e1c5377daf169d58766aea3bc124dcbcfebe280c8d9647f29e908_prof);

        
        $__internal_cfbbd2362a52350974590635cb401dbc6227bb1c9422597e1ccc94026ef780bf->leave($__internal_cfbbd2362a52350974590635cb401dbc6227bb1c9422597e1ccc94026ef780bf_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_52d7dd827c9353edae204f4825a069739a446a44742965737a231b3eefc14f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d7dd827c9353edae204f4825a069739a446a44742965737a231b3eefc14f0f->enter($__internal_52d7dd827c9353edae204f4825a069739a446a44742965737a231b3eefc14f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c87246b86b5a078cf02c6093d9b26600e5b374d0c42611a8ef058192e4002039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87246b86b5a078cf02c6093d9b26600e5b374d0c42611a8ef058192e4002039->enter($__internal_c87246b86b5a078cf02c6093d9b26600e5b374d0c42611a8ef058192e4002039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"breadcrumb\">
        <!-- Nav tabs -->
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#overview-tab\" role=\"tab\">Overview</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#diary-tab\" role=\"tab\">Detailed</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#new-entry-tab\" role=\"tab\">New entry</a>
            </li>
        </ul>
    </div>

    <!-- Tab panes -->

    <div class=\"tab-content\">
        <div class=\"overview col-12 tab-pane active\" id=\"overview-tab\" role=\"tabpanel\">
            <div class=\"card text-white bg-primary\">
                <div class=\"card-body\" id=\"overview\">
                    ";
        // line 26
        echo twig_include($this->env, $context, "overview.twig");
        echo "
                </div>
            </div>
        </div>
        <div class=\"diary col-12 tab-pane\" id=\"diary-tab\" role=\"tabpanel\">
            <div class=\"card text-white bg-primary\">
                <div>
                    <div id=\"diaryMess\" class=\"alert alert-success\" style=\"display: none;\"></div>
                </div>
                <div class=\"card-body\" id=\"diary\">
                    ";
        // line 36
        echo twig_include($this->env, $context, "diary.twig");
        echo "
                </div>
            </div>
        </div>
        <div class=\"newEntry col-12 tab-pane\" id=\"new-entry-tab\" role=\"tabpanel\">
            <div class=\"card text-white bg-primary\">
                <div class=\"card-body\" id=\"entry\">
                    ";
        // line 43
        echo twig_include($this->env, $context, "newEntryForm.twig");
        echo "
                </div>
            </div>

        </div>
    </div>

";
        
        $__internal_c87246b86b5a078cf02c6093d9b26600e5b374d0c42611a8ef058192e4002039->leave($__internal_c87246b86b5a078cf02c6093d9b26600e5b374d0c42611a8ef058192e4002039_prof);

        
        $__internal_52d7dd827c9353edae204f4825a069739a446a44742965737a231b3eefc14f0f->leave($__internal_52d7dd827c9353edae204f4825a069739a446a44742965737a231b3eefc14f0f_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 43,  86 => 36,  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block content %}

    <div class=\"breadcrumb\">
        <!-- Nav tabs -->
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#overview-tab\" role=\"tab\">Overview</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#diary-tab\" role=\"tab\">Detailed</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#new-entry-tab\" role=\"tab\">New entry</a>
            </li>
        </ul>
    </div>

    <!-- Tab panes -->

    <div class=\"tab-content\">
        <div class=\"overview col-12 tab-pane active\" id=\"overview-tab\" role=\"tabpanel\">
            <div class=\"card text-white bg-primary\">
                <div class=\"card-body\" id=\"overview\">
                    {{ include('overview.twig') }}
                </div>
            </div>
        </div>
        <div class=\"diary col-12 tab-pane\" id=\"diary-tab\" role=\"tabpanel\">
            <div class=\"card text-white bg-primary\">
                <div>
                    <div id=\"diaryMess\" class=\"alert alert-success\" style=\"display: none;\"></div>
                </div>
                <div class=\"card-body\" id=\"diary\">
                    {{ include('diary.twig') }}
                </div>
            </div>
        </div>
        <div class=\"newEntry col-12 tab-pane\" id=\"new-entry-tab\" role=\"tabpanel\">
            <div class=\"card text-white bg-primary\">
                <div class=\"card-body\" id=\"entry\">
                    {{ include('newEntryForm.twig') }}
                </div>
            </div>

        </div>
    </div>

{% endblock %}", "index.html.twig", "/Users/marvinkruger/uebung6/templates/index.html.twig");
    }
}
