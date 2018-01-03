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
        $__internal_af0e290ca99c4cdd77cdcbb2e3ce4ea5e6540e34ee8a7071c5bc7edaabc1d5ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af0e290ca99c4cdd77cdcbb2e3ce4ea5e6540e34ee8a7071c5bc7edaabc1d5ca->enter($__internal_af0e290ca99c4cdd77cdcbb2e3ce4ea5e6540e34ee8a7071c5bc7edaabc1d5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "overview.twig"));

        $__internal_67d0e1f6fec155306a38b686f6ab158f467361270df7344cce2ce14038221032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d0e1f6fec155306a38b686f6ab158f467361270df7344cce2ce14038221032->enter($__internal_67d0e1f6fec155306a38b686f6ab158f467361270df7344cce2ce14038221032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "overview.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af0e290ca99c4cdd77cdcbb2e3ce4ea5e6540e34ee8a7071c5bc7edaabc1d5ca->leave($__internal_af0e290ca99c4cdd77cdcbb2e3ce4ea5e6540e34ee8a7071c5bc7edaabc1d5ca_prof);

        
        $__internal_67d0e1f6fec155306a38b686f6ab158f467361270df7344cce2ce14038221032->leave($__internal_67d0e1f6fec155306a38b686f6ab158f467361270df7344cce2ce14038221032_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_5a1156677d83d2273d307e9ebfdf8ae3793d2681460c343dab6ef68423788af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1156677d83d2273d307e9ebfdf8ae3793d2681460c343dab6ef68423788af3->enter($__internal_5a1156677d83d2273d307e9ebfdf8ae3793d2681460c343dab6ef68423788af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ca1ec05a882fdbcf40c5285cbbf4dfa8ded6691d7b03e170b83ae62c75668da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1ec05a882fdbcf40c5285cbbf4dfa8ded6691d7b03e170b83ae62c75668da0->enter($__internal_ca1ec05a882fdbcf40c5285cbbf4dfa8ded6691d7b03e170b83ae62c75668da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "


    ";
        // line 8
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 9
            echo "        Hi there --> <a href=\"/public/index.php/login\"> login</a>
    ";
        }
        // line 11
        echo "    <div class=\"card text-white bg-primary\">
        <div class=\"card-body\" id=\"overview\">
            <div class=\"alert alert-dismissible alert-success col-3\" style=\"text-align: center; margin: auto; \">
                <table>
                    <tr>
                        <td>Username</td>
                        <td>Day trained</td>
                        <td>Entire distance</td>
                    </tr>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 20, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "
                    <tr>
                        <td><a href=\"/public/index.php/profile/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "days_trained", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "entire_distance", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </table>
            </div>
        </div>
    </div>

    ";
        // line 33
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), array(0 => "bootstrap_3_layout.html.twig"), true);
        // line 34
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), 'widget');
        echo "
    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), 'form_end');
        echo "


    <script>
        \$(function(){
            \$(\"#form_user\").autocomplete({
                source: \"search/\",
                minLength: 3
            });
        } );
    </script>

";
        
        $__internal_ca1ec05a882fdbcf40c5285cbbf4dfa8ded6691d7b03e170b83ae62c75668da0->leave($__internal_ca1ec05a882fdbcf40c5285cbbf4dfa8ded6691d7b03e170b83ae62c75668da0_prof);

        
        $__internal_5a1156677d83d2273d307e9ebfdf8ae3793d2681460c343dab6ef68423788af3->leave($__internal_5a1156677d83d2273d307e9ebfdf8ae3793d2681460c343dab6ef68423788af3_prof);

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
        return array (  116 => 36,  112 => 35,  107 => 34,  105 => 33,  98 => 28,  89 => 25,  85 => 24,  79 => 23,  75 => 21,  71 => 20,  60 => 11,  56 => 9,  54 => 8,  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"base.html.twig\" %}

{% block content %}



    {% if not is_granted(\"ROLE_USER\") %}
        Hi there --> <a href=\"/public/index.php/login\"> login</a>
    {% endif %}
    <div class=\"card text-white bg-primary\">
        <div class=\"card-body\" id=\"overview\">
            <div class=\"alert alert-dismissible alert-success col-3\" style=\"text-align: center; margin: auto; \">
                <table>
                    <tr>
                        <td>Username</td>
                        <td>Day trained</td>
                        <td>Entire distance</td>
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
            \$(\"#form_user\").autocomplete({
                source: \"search/\",
                minLength: 3
            });
        } );
    </script>

{% endblock %}", "overview.twig", "/Users/marvinkruger/uebung6/templates/overview.twig");
    }
}
