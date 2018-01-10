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
        $__internal_420dfd438d23ecf1342a03c9e42627d6dfa7be553796044a028433b9bbc91a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420dfd438d23ecf1342a03c9e42627d6dfa7be553796044a028433b9bbc91a93->enter($__internal_420dfd438d23ecf1342a03c9e42627d6dfa7be553796044a028433b9bbc91a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "overview.twig"));

        $__internal_0d40374e56e5347459ce8a78099d0bd573623cf1b22330ebb7cd60573cbcf908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d40374e56e5347459ce8a78099d0bd573623cf1b22330ebb7cd60573cbcf908->enter($__internal_0d40374e56e5347459ce8a78099d0bd573623cf1b22330ebb7cd60573cbcf908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "overview.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_420dfd438d23ecf1342a03c9e42627d6dfa7be553796044a028433b9bbc91a93->leave($__internal_420dfd438d23ecf1342a03c9e42627d6dfa7be553796044a028433b9bbc91a93_prof);

        
        $__internal_0d40374e56e5347459ce8a78099d0bd573623cf1b22330ebb7cd60573cbcf908->leave($__internal_0d40374e56e5347459ce8a78099d0bd573623cf1b22330ebb7cd60573cbcf908_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_a7d14261426c733620e00d6d58b9ab37312d6e1ec788ee0a681fd55d656574b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d14261426c733620e00d6d58b9ab37312d6e1ec788ee0a681fd55d656574b9->enter($__internal_a7d14261426c733620e00d6d58b9ab37312d6e1ec788ee0a681fd55d656574b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d375bb3c4fbd4f55a13bbbd04c6f121452ce2abc5659c859107d53d91c3af9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d375bb3c4fbd4f55a13bbbd04c6f121452ce2abc5659c859107d53d91c3af9fb->enter($__internal_d375bb3c4fbd4f55a13bbbd04c6f121452ce2abc5659c859107d53d91c3af9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo "    <br>
    <a href=\"/public/index.php/language/de_DE\">Deutsch</a>
    <br>
    <a href=\"/public/index.php/language/en_US\">Englisch</a>
    <div class=\"card text-white bg-primary\">
        <div class=\"card-body\" id=\"overview\">
            <div class=\"alert alert-dismissible alert-success col-3\" style=\"text-align: center; margin: auto; \">
                <table>
                    <tr>
                        <td>";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Username", array(), "messages");
        echo "</td>
                        <td>";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Days trained", array(), "messages");
        echo "</td>
                        <td>";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Entire distance", array(), "messages");
        echo "</td>
                    </tr>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 24, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo "                    <tr>
                        <td><a href=\"/public/index.php/profile/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "days_trained", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "entire_distance", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </table>
            </div>
        </div>
    </div>

    ";
        // line 36
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), array(0 => "bootstrap_3_layout.html.twig"), true);
        // line 37
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), 'widget');
        echo "
    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'form_end');
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
        
        $__internal_d375bb3c4fbd4f55a13bbbd04c6f121452ce2abc5659c859107d53d91c3af9fb->leave($__internal_d375bb3c4fbd4f55a13bbbd04c6f121452ce2abc5659c859107d53d91c3af9fb_prof);

        
        $__internal_a7d14261426c733620e00d6d58b9ab37312d6e1ec788ee0a681fd55d656574b9->leave($__internal_a7d14261426c733620e00d6d58b9ab37312d6e1ec788ee0a681fd55d656574b9_prof);

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
        return array (  132 => 39,  128 => 38,  123 => 37,  121 => 36,  114 => 31,  105 => 28,  101 => 27,  95 => 26,  92 => 25,  88 => 24,  83 => 22,  79 => 21,  75 => 20,  64 => 11,  56 => 9,  54 => 8,  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"base.html.twig\" %}

{% block content %}



    {% if not is_granted(\"ROLE_USER\") %}
        {% trans %}Hi there, {% endtrans %} <a href=\"/public/index.php/login\"> {% trans %}Login{% endtrans %}</a>
    {% endif %}
    <br>
    <a href=\"/public/index.php/language/de_DE\">Deutsch</a>
    <br>
    <a href=\"/public/index.php/language/en_US\">Englisch</a>
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
