<?php

/* not_found.twig */
class __TwigTemplate_81fd9a32834afed20523a9afcf8c6050cbe4246e17e24858eaed1ce79dcd032a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "not_found.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"card text-white bg-primary\">
        <div class=\"card-body\" id=\"overview\">
            <div class=\"alert alert-dismissible alert-warning col-3\" style=\"text-align: center; margin: auto; \">
                ";
        // line 7
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "not_found.twig", "/Users/marvinkruger/uebung6/templates/not_found.twig");
    }
}
