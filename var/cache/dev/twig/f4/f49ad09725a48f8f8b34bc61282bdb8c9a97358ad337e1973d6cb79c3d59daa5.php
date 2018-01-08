<?php

/* user.twig */
class __TwigTemplate_a1d6dd2fcb5535dda1d6f5c8810e01bea9b4d6615a33706334da1393057aacd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user.twig", 1);
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
        $__internal_8eb763163d6382b7bcd1864fe96b5ca123b340854c674f55af098f6334ef1c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb763163d6382b7bcd1864fe96b5ca123b340854c674f55af098f6334ef1c14->enter($__internal_8eb763163d6382b7bcd1864fe96b5ca123b340854c674f55af098f6334ef1c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user.twig"));

        $__internal_9e10a8f72e6374dd73ed8793903e795eada640493b0acef65a3e175b4ba3893a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e10a8f72e6374dd73ed8793903e795eada640493b0acef65a3e175b4ba3893a->enter($__internal_9e10a8f72e6374dd73ed8793903e795eada640493b0acef65a3e175b4ba3893a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eb763163d6382b7bcd1864fe96b5ca123b340854c674f55af098f6334ef1c14->leave($__internal_8eb763163d6382b7bcd1864fe96b5ca123b340854c674f55af098f6334ef1c14_prof);

        
        $__internal_9e10a8f72e6374dd73ed8793903e795eada640493b0acef65a3e175b4ba3893a->leave($__internal_9e10a8f72e6374dd73ed8793903e795eada640493b0acef65a3e175b4ba3893a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5d661b5a7c964f5c13f579f803d411f802f26c3846516ca371516393ff16a212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d661b5a7c964f5c13f579f803d411f802f26c3846516ca371516393ff16a212->enter($__internal_5d661b5a7c964f5c13f579f803d411f802f26c3846516ca371516393ff16a212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f0025d3d102e772dcc06fc577de9bcf776f18ff0ad089543fbbb5950e4984644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0025d3d102e772dcc06fc577de9bcf776f18ff0ad089543fbbb5950e4984644->enter($__internal_f0025d3d102e772dcc06fc577de9bcf776f18ff0ad089543fbbb5950e4984644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        $context["can_edit"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("edit", (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()));
        // line 6
        echo "
    ";
        // line 7
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Hi there,", array(), "messages");
            echo " <a href=\"/public/index.php/login\"> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Login", array(), "messages");
            echo "</a>
    ";
        }
        // line 10
        echo "
    <div class=\"card text-white bg-primary\">
        <div class=\"card-body\" id=\"overview\">
            <div class=\"alert alert-dismissible alert-success col-6\" style=\"text-align: center; margin: auto; \">


                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Username", array(), "messages");
        echo " -> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 16, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "<br>

                <!--Summarized information -->
                ";
        // line 19
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->getSourceContext()); })()), "entries", array())) > 0)) {
            // line 20
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Days trained", array(), "messages");
            echo " -> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 20, $this->getSourceContext()); })()), "days_trained", array()), "html", null, true);
            echo "<br>
                    ";
            // line 21
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 22
                echo "                        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Time from first entry to today", array(), "messages");
                echo "-> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 22, $this->getSourceContext()); })()), "entire_time", array()), "html", null, true);
                echo "<br>
                    ";
            }
            // line 24
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Entire distance", array(), "messages");
            echo " -> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 24, $this->getSourceContext()); })()), "entire_distance", array()), "html", null, true);
            echo "<br>

                    <h2>";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("All entries", array(), "messages");
            echo "</h2>

                    <!-- Table with entries-->
                    <table class=\"table-info table table-striped\">
                        <tr>
                            <td>";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Date", array(), "messages");
            echo "</td>
                            <td>";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Distance in km", array(), "messages");
            echo "</td>
                            ";
            // line 33
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 34
                echo "                                <td>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Time in h", array(), "messages");
                echo "</td>
                                <td>";
                // line 35
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Avg. speed in km/h", array(), "messages");
                echo "</td>
                            ";
            }
            // line 37
            echo "                            ";
            if ((isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new Twig_Error_Runtime('Variable "can_edit" does not exist.', 37, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Delete", array(), "messages");
                echo "</td>";
            }
            // line 38
            echo "                        </tr>
                        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 39, $this->getSourceContext()); })()), "entries", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 40
                echo "                            <tr>
                                <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "date", array()), "Y-m-d"), "html", null, true);
                echo "</td>
                                <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "distance", array()), "html", null, true);
                echo "</td>
                                ";
                // line 43
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                    // line 44
                    echo "                                    <td>";
                    echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "time", array()), 2, "floor"), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "getAvgSpeed", array(), "method"), "html", null, true);
                    echo "</td>
                                ";
                }
                // line 47
                echo "                                ";
                if ((isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new Twig_Error_Runtime('Variable "can_edit" does not exist.', 47, $this->getSourceContext()); })())) {
                    echo "<td><a href=\"/public/index.php/delete/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 47, $this->getSourceContext()); })()), "id", array()), "html", null, true);
                    echo "\" class=\"delete-button btn btn-block btn-info\">";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Delete", array(), "messages");
                    echo "</a></td>";
                }
                // line 48
                echo "                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                    </table>

                ";
        } else {
            // line 53
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("No entries so far", array(), "messages");
            // line 54
            echo "                ";
        }
        // line 55
        echo "            </div>
        </div>
    </div>

    ";
        // line 59
        if ((isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new Twig_Error_Runtime('Variable "can_edit" does not exist.', 59, $this->getSourceContext()); })())) {
            // line 60
            echo "        <!-- Error log -->
        ";
            // line 61
            if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 61, $this->getSourceContext()); })())) > 0)) {
                // line 62
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 62, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 63
                    echo "                ";
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "<br>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "        ";
            }
            // line 66
            echo "
        <!--Form for new entry -->
        ";
            // line 68
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->getSourceContext()); })()), array(0 => "bootstrap_3_layout.html.twig"), true);
            // line 69
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->getSourceContext()); })()), 'form_start');
            echo "
        ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->getSourceContext()); })()), 'widget');
            echo "
        ";
            // line 71
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->getSourceContext()); })()), 'form_end');
            echo "
    ";
        }
        // line 73
        echo "
";
        
        $__internal_f0025d3d102e772dcc06fc577de9bcf776f18ff0ad089543fbbb5950e4984644->leave($__internal_f0025d3d102e772dcc06fc577de9bcf776f18ff0ad089543fbbb5950e4984644_prof);

        
        $__internal_5d661b5a7c964f5c13f579f803d411f802f26c3846516ca371516393ff16a212->leave($__internal_5d661b5a7c964f5c13f579f803d411f802f26c3846516ca371516393ff16a212_prof);

    }

    public function getTemplateName()
    {
        return "user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 73,  249 => 71,  245 => 70,  240 => 69,  238 => 68,  234 => 66,  231 => 65,  222 => 63,  217 => 62,  215 => 61,  212 => 60,  210 => 59,  204 => 55,  201 => 54,  198 => 53,  193 => 50,  186 => 48,  175 => 47,  170 => 45,  165 => 44,  163 => 43,  159 => 42,  155 => 41,  152 => 40,  148 => 39,  145 => 38,  138 => 37,  133 => 35,  128 => 34,  126 => 33,  122 => 32,  118 => 31,  110 => 26,  102 => 24,  94 => 22,  92 => 21,  85 => 20,  83 => 19,  75 => 16,  67 => 10,  59 => 8,  57 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block content %}

    {% set can_edit = is_granted('edit', user) %}

    {% if not is_granted(\"ROLE_USER\") %}
        {% trans %}Hi there, {% endtrans %} <a href=\"/public/index.php/login\"> {% trans %}Login{% endtrans %}</a>
    {% endif %}

    <div class=\"card text-white bg-primary\">
        <div class=\"card-body\" id=\"overview\">
            <div class=\"alert alert-dismissible alert-success col-6\" style=\"text-align: center; margin: auto; \">


                {% trans %}Username {% endtrans %} -> {{ user.name }}<br>

                <!--Summarized information -->
                {%  if user.entries|length > 0%}
                    {% trans %}Days trained {% endtrans %} -> {{ user.days_trained }}<br>
                    {% if is_granted(\"ROLE_USER\") %}
                        {% trans %}Time from first entry to today {% endtrans %}-> {{ user.entire_time }}<br>
                    {% endif %}
                    {% trans %}Entire distance{% endtrans %} -> {{ user.entire_distance }}<br>

                    <h2>{% trans %}All entries{% endtrans %}</h2>

                    <!-- Table with entries-->
                    <table class=\"table-info table table-striped\">
                        <tr>
                            <td>{% trans %}Date{% endtrans %}</td>
                            <td>{% trans %}Distance in km{% endtrans %}</td>
                            {% if is_granted(\"ROLE_USER\") %}
                                <td>{% trans %}Time in h{% endtrans %}</td>
                                <td>{% trans %}Avg. speed in km/h{% endtrans %}</td>
                            {% endif %}
                            {% if can_edit %}<td>{% trans %}Delete{% endtrans %}</td>{% endif %}
                        </tr>
                        {% for entry in user.entries %}
                            <tr>
                                <td>{{ entry.date |date('Y-m-d')}}</td>
                                <td>{{ entry.distance }}</td>
                                {% if is_granted(\"ROLE_USER\") %}
                                    <td>{{ entry.time|round(2, 'floor') }}</td>
                                    <td>{{ entry.getAvgSpeed() }}</td>
                                {% endif %}
                                {% if can_edit %}<td><a href=\"/public/index.php/delete/{{ entry.id}}/{{ user.id }}\" class=\"delete-button btn btn-block btn-info\">{% trans %}Delete{% endtrans %}</a></td>{% endif %}
                            </tr>
                        {% endfor %}
                    </table>

                {% else %}
                    {% trans %}No entries so far{% endtrans %}
                {% endif %}
            </div>
        </div>
    </div>

    {% if can_edit %}
        <!-- Error log -->
        {% if errors|length > 0 %}
            {% for error in errors %}
                {{ error }}<br>
            {% endfor %}
        {% endif %}

        <!--Form for new entry -->
        {% form_theme form 'bootstrap_3_layout.html.twig' %}
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
    {% endif %}

{% endblock %}", "user.twig", "/Users/marvinkruger/uebung6/templates/user.twig");
    }
}
