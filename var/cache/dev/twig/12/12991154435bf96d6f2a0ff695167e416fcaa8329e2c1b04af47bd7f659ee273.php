<?php

/* @Twig/Exception/traces_text.html.twig */
class __TwigTemplate_ed0e17eaf2f1ff7606ab35f6ac957c7912f8ea11e074058515445e10398837ee extends Twig_Template
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
        $__internal_6ad137ddb98e541171f6f119ccab1e895e25a763aad572644b3bbcda33ec9e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad137ddb98e541171f6f119ccab1e895e25a763aad572644b3bbcda33ec9e02->enter($__internal_6ad137ddb98e541171f6f119ccab1e895e25a763aad572644b3bbcda33ec9e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));

        $__internal_35b4413a8c3aa1054c3d4b4517975477627cfd96afa82510bad8a2034bb37b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b4413a8c3aa1054c3d4b4517975477627cfd96afa82510bad8a2034bb37b07->enter($__internal_35b4413a8c3aa1054c3d4b4517975477627cfd96afa82510bad8a2034bb37b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));

        // line 1
        echo "<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo (((1 == (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 4, $this->getSourceContext()); })()))) ? ("display") : (""));
        echo "\">
                <h3 class=\"trace-class\">
                    ";
        // line 6
        if (((isset($context["num_exceptions"]) || array_key_exists("num_exceptions", $context) ? $context["num_exceptions"] : (function () { throw new Twig_Error_Runtime('Variable "num_exceptions" does not exist.', 6, $this->getSourceContext()); })()) > 1)) {
            // line 7
            echo "                        <span class=\"text-muted\">[";
            echo twig_escape_filter($this->env, (((isset($context["num_exceptions"]) || array_key_exists("num_exceptions", $context) ? $context["num_exceptions"] : (function () { throw new Twig_Error_Runtime('Variable "num_exceptions" does not exist.', 7, $this->getSourceContext()); })()) - (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 7, $this->getSourceContext()); })())) + 1), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["num_exceptions"]) || array_key_exists("num_exceptions", $context) ? $context["num_exceptions"] : (function () { throw new Twig_Error_Runtime('Variable "num_exceptions" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
            echo "]</span>
                    ";
        }
        // line 9
        echo "                    ";
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 9, $this->getSourceContext()); })()), "class", array()), "\\")), "html", null, true);
        echo "
                    <span class=\"icon icon-close\">";
        // line 10
        echo twig_include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        echo "</span>
                    <span class=\"icon icon-open\">";
        // line 11
        echo twig_include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        echo "</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        <tr>
            <td>
                ";
        // line 20
        echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 20, $this->getSourceContext()); })())), false);
        echo "
            </td>
        </tr>
    </tbody>
</table>
";
        
        $__internal_6ad137ddb98e541171f6f119ccab1e895e25a763aad572644b3bbcda33ec9e02->leave($__internal_6ad137ddb98e541171f6f119ccab1e895e25a763aad572644b3bbcda33ec9e02_prof);

        
        $__internal_35b4413a8c3aa1054c3d4b4517975477627cfd96afa82510bad8a2034bb37b07->leave($__internal_35b4413a8c3aa1054c3d4b4517975477627cfd96afa82510bad8a2034bb37b07_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  65 => 17,  56 => 11,  52 => 10,  47 => 9,  39 => 7,  37 => 6,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-{{ index }}\" data-toggle-initial=\"{{ 1 == index ? 'display' }}\">
                <h3 class=\"trace-class\">
                    {% if num_exceptions > 1 %}
                        <span class=\"text-muted\">[{{ num_exceptions - index + 1 }}/{{ num_exceptions }}]</span>
                    {% endif %}
                    {{ exception.class|split('\\\\')|last }}
                    <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square-o.svg') }}</span>
                    <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square-o.svg') }}</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-{{ index }}\">
        <tr>
            <td>
                {{ include('@Twig/Exception/traces.txt.twig', { exception: exception }, with_context = false) }}
            </td>
        </tr>
    </tbody>
</table>
", "@Twig/Exception/traces_text.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bundle/Resources/views/Exception/traces_text.html.twig");
    }
}
