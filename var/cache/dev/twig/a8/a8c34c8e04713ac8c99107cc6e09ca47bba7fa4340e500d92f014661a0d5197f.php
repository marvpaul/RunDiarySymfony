<?php

/* overview.twig */
class __TwigTemplate_e5b0817e18e566ad3da892e18da26301f2768ca2cfef26635823c7aec2dc5fc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "overview.twig", 2);
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
        $__internal_ea2e48d8e2943af263a714e91c08229c71e5f145e2a9d4eac2d69d7f4663fbfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea2e48d8e2943af263a714e91c08229c71e5f145e2a9d4eac2d69d7f4663fbfd->enter($__internal_ea2e48d8e2943af263a714e91c08229c71e5f145e2a9d4eac2d69d7f4663fbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "overview.twig"));

        $__internal_f6f040b509423ff32a702b24c1d1c4f5feb270c7b6dc452a0c714b56e7412ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f040b509423ff32a702b24c1d1c4f5feb270c7b6dc452a0c714b56e7412ef0->enter($__internal_f6f040b509423ff32a702b24c1d1c4f5feb270c7b6dc452a0c714b56e7412ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "overview.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea2e48d8e2943af263a714e91c08229c71e5f145e2a9d4eac2d69d7f4663fbfd->leave($__internal_ea2e48d8e2943af263a714e91c08229c71e5f145e2a9d4eac2d69d7f4663fbfd_prof);

        
        $__internal_f6f040b509423ff32a702b24c1d1c4f5feb270c7b6dc452a0c714b56e7412ef0->leave($__internal_f6f040b509423ff32a702b24c1d1c4f5feb270c7b6dc452a0c714b56e7412ef0_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_cd3be323ec5f7f36dc77fc1dd9c9e6aa0f2f98e9b8f7748a1201552ff333eb61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3be323ec5f7f36dc77fc1dd9c9e6aa0f2f98e9b8f7748a1201552ff333eb61->enter($__internal_cd3be323ec5f7f36dc77fc1dd9c9e6aa0f2f98e9b8f7748a1201552ff333eb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_11892beb8fbd53e1924ed9be494fd8a3366c3c14ab378ccd27906e54fd2d1fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11892beb8fbd53e1924ed9be494fd8a3366c3c14ab378ccd27906e54fd2d1fde->enter($__internal_11892beb8fbd53e1924ed9be494fd8a3366c3c14ab378ccd27906e54fd2d1fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "


    ";
        // line 8
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 9
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Hi there,", array(), "messages");
            echo " <a href=\"/public/index.php/login\"> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Login", array(), "messages");
            echo "</a>
    ";
        }
        // line 11
        echo "    <div class=\"card text-white bg-primary\">
        <div class=\"card-body\" id=\"overview\">
            <div class=\"alert alert-dismissible alert-success col-3\" style=\"text-align: center; margin: auto; \">
                <table>
                    <tr>
                        <td>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Username", array(), "messages");
        echo "</td>
                        <td>";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Days trained", array(), "messages");
        echo "</td>
                        <td>";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Entire distance", array(), "messages");
        echo "</td>
                    </tr>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 20, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "                    <tr>
                        <td><a href=\"/public/index.php/profile/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "days_trained", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "entire_distance", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </table>
            </div>
        </div>
    </div>

    ";
        // line 32
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), array(0 => "bootstrap_3_layout.html.twig"), true);
        // line 33
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'widget');
        echo "
    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), 'form_end');
        echo "


    <script>
        \$(function(){
            \$(\"#form_name\").autocomplete({
                source: \"search/\",
                minLength: 3
            });
        } );
    </script>

";
        
        $__internal_11892beb8fbd53e1924ed9be494fd8a3366c3c14ab378ccd27906e54fd2d1fde->leave($__internal_11892beb8fbd53e1924ed9be494fd8a3366c3c14ab378ccd27906e54fd2d1fde_prof);

        
        $__internal_cd3be323ec5f7f36dc77fc1dd9c9e6aa0f2f98e9b8f7748a1201552ff333eb61->leave($__internal_cd3be323ec5f7f36dc77fc1dd9c9e6aa0f2f98e9b8f7748a1201552ff333eb61_prof);

    }

    public function getTemplateName()
    {
        return "overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  124 => 34,  119 => 33,  117 => 32,  110 => 27,  101 => 24,  97 => 23,  91 => 22,  88 => 21,  84 => 20,  79 => 18,  75 => 17,  71 => 16,  64 => 11,  56 => 9,  54 => 8,  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"base.html.twig\" %}

{% block content %}



    {% if not is_granted(\"ROLE_USER\") %}
        {% trans %}Hi there, {% endtrans %} <a href=\"/public/index.php/login\"> {% trans %}Login{% endtrans %}</a>
    {% endif %}
    <div class=\"card text-white bg-primary\">
        <div class=\"card-body\" id=\"overview\">
            <div class=\"alert alert-dismissible alert-success col-3\" style=\"text-align: center; margin: auto; \">
                <table>
                    <tr>
                        <td>{% trans %}Username{% endtrans %}</td>
                        <td>{% trans %}Days trained{% endtrans %}</td>
                        <td>{% trans %}Entire distance{% endtrans %}</td>
                    </tr>
                {% for user in users %}
                    <tr>
                        <td><a href=\"/public/index.php/profile/{{ user.name }}\">{{ user.name }}</a></td>
                        <td>{{ user.days_trained }}</td>
                        <td>{{ user.entire_distance }}</td>
                    </tr>
                {% endfor %}
                </table>
            </div>
        </div>
    </div>

    {% form_theme form 'bootstrap_3_layout.html.twig' %}
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}


    <script>
        \$(function(){
            \$(\"#form_name\").autocomplete({
                source: \"search/\",
                minLength: 3
            });
        } );
    </script>

{% endblock %}", "overview.twig", "/Users/marvinkruger/uebung6/templates/overview.twig");
    }
}
