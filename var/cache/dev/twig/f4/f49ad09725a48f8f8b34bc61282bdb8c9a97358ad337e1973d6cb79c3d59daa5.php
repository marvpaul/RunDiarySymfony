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
        $__internal_2986bd8556ba71f9915dd16b3f1e11ac47b555e93452e73a8c700716e9cdff4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2986bd8556ba71f9915dd16b3f1e11ac47b555e93452e73a8c700716e9cdff4d->enter($__internal_2986bd8556ba71f9915dd16b3f1e11ac47b555e93452e73a8c700716e9cdff4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user.twig"));

        $__internal_257bacde1ae73d2a4cc7218934e797dcf8afbfee614036fbb06b27780d1f9056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257bacde1ae73d2a4cc7218934e797dcf8afbfee614036fbb06b27780d1f9056->enter($__internal_257bacde1ae73d2a4cc7218934e797dcf8afbfee614036fbb06b27780d1f9056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2986bd8556ba71f9915dd16b3f1e11ac47b555e93452e73a8c700716e9cdff4d->leave($__internal_2986bd8556ba71f9915dd16b3f1e11ac47b555e93452e73a8c700716e9cdff4d_prof);

        
        $__internal_257bacde1ae73d2a4cc7218934e797dcf8afbfee614036fbb06b27780d1f9056->leave($__internal_257bacde1ae73d2a4cc7218934e797dcf8afbfee614036fbb06b27780d1f9056_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_dd25a04d6c8c191070b72ece91cf385292318c60936b1f19d7f84e70326f312c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd25a04d6c8c191070b72ece91cf385292318c60936b1f19d7f84e70326f312c->enter($__internal_dd25a04d6c8c191070b72ece91cf385292318c60936b1f19d7f84e70326f312c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_00f61b1961f716366ab1a0ac6fac7afea2ad3e8c2a5a610e9b5981b11e122d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f61b1961f716366ab1a0ac6fac7afea2ad3e8c2a5a610e9b5981b11e122d6c->enter($__internal_00f61b1961f716366ab1a0ac6fac7afea2ad3e8c2a5a610e9b5981b11e122d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        $context["can_edit"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("edit", (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()));
        // line 6
        echo "    ";
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 7
            echo "        Hi there --> <a href=\"/public/login\"> login</a>
    ";
        }
        // line 9
        echo "    <div class=\"card text-white bg-primary\">
        <div class=\"card-body\" id=\"overview\">
            <div class=\"alert alert-dismissible alert-success col-6\" style=\"text-align: center; margin: auto; \">
                Name -> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 12, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "<br>
                ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->getSourceContext()); })()), "entries", array())) > 0)) {
            // line 14
            echo "                    ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 15
                echo "                        Days_trained -> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->getSourceContext()); })()), "days_trained", array()), "html", null, true);
                echo "<br>
                        Time from first entry to today -> ";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 16, $this->getSourceContext()); })()), "entire_time", array()), "html", null, true);
                echo "<br>
                        Entire distance -> ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 17, $this->getSourceContext()); })()), "entire_distance", array()), "html", null, true);
                echo "<br>
                    ";
            }
            // line 19
            echo "                    <h2>All entries</h2>
                    <table class=\"table-info table table-striped\">
                        <tr>
                            <td>Date</td>
                            <td>Distance</td>
                            <td>Time</td>
                            <td>Avg. speed</td>
                            ";
            // line 26
            if ((isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new Twig_Error_Runtime('Variable "can_edit" does not exist.', 26, $this->getSourceContext()); })())) {
                echo "<td>Delete</td>";
            }
            // line 27
            echo "                        </tr>
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 28, $this->getSourceContext()); })()), "entries", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 29
                echo "                            <tr>
                                <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "date", array()), "Y-m-d"), "html", null, true);
                echo "</td>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "distance", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "time", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "getAvgSpeed", array(), "method"), "html", null, true);
                echo "</td>
                                ";
                // line 34
                if ((isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new Twig_Error_Runtime('Variable "can_edit" does not exist.', 34, $this->getSourceContext()); })())) {
                    echo "<td><a href=\"/public/delete/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 34, $this->getSourceContext()); })()), "id", array()), "html", null, true);
                    echo "\" class=\"delete-button btn btn-block btn-info\">Delete</a></td>";
                }
                // line 35
                echo "                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                    </table>
                ";
        } else {
            // line 39
            echo "                    No entries so far
                ";
        }
        // line 41
        echo "            </div>
        </div>
    </div>
    ";
        // line 44
        if ((isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new Twig_Error_Runtime('Variable "can_edit" does not exist.', 44, $this->getSourceContext()); })())) {
            // line 45
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 45, $this->getSourceContext()); })())) > 0)) {
                // line 46
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 46, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 47
                    echo "                ";
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "<br>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "        ";
            }
            // line 50
            echo "        ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), array(0 => "bootstrap_3_layout.html.twig"), true);
            // line 51
            echo "        ";
            // line 52
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), 'form_start');
            echo "
        ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
            echo "
        ";
            // line 54
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), 'form_end');
            echo "
    ";
        }
        // line 56
        echo "
";
        
        $__internal_00f61b1961f716366ab1a0ac6fac7afea2ad3e8c2a5a610e9b5981b11e122d6c->leave($__internal_00f61b1961f716366ab1a0ac6fac7afea2ad3e8c2a5a610e9b5981b11e122d6c_prof);

        
        $__internal_dd25a04d6c8c191070b72ece91cf385292318c60936b1f19d7f84e70326f312c->leave($__internal_dd25a04d6c8c191070b72ece91cf385292318c60936b1f19d7f84e70326f312c_prof);

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
        return array (  197 => 56,  192 => 54,  188 => 53,  183 => 52,  181 => 51,  178 => 50,  175 => 49,  166 => 47,  161 => 46,  158 => 45,  156 => 44,  151 => 41,  147 => 39,  143 => 37,  136 => 35,  128 => 34,  124 => 33,  120 => 32,  116 => 31,  112 => 30,  109 => 29,  105 => 28,  102 => 27,  98 => 26,  89 => 19,  84 => 17,  80 => 16,  75 => 15,  72 => 14,  70 => 13,  66 => 12,  61 => 9,  57 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block content %}

    {% set can_edit = is_granted('edit', user) %}
    {% if not is_granted(\"ROLE_USER\") %}
        Hi there --> <a href=\"/public/login\"> login</a>
    {% endif %}
    <div class=\"card text-white bg-primary\">
        <div class=\"card-body\" id=\"overview\">
            <div class=\"alert alert-dismissible alert-success col-6\" style=\"text-align: center; margin: auto; \">
                Name -> {{ user.name }}<br>
                {%  if user.entries|length > 0%}
                    {% if is_granted(\"ROLE_USER\") %}
                        Days_trained -> {{ user.days_trained }}<br>
                        Time from first entry to today -> {{ user.entire_time }}<br>
                        Entire distance -> {{ user.entire_distance }}<br>
                    {% endif %}
                    <h2>All entries</h2>
                    <table class=\"table-info table table-striped\">
                        <tr>
                            <td>Date</td>
                            <td>Distance</td>
                            <td>Time</td>
                            <td>Avg. speed</td>
                            {% if can_edit %}<td>Delete</td>{% endif %}
                        </tr>
                        {% for entry in user.entries %}
                            <tr>
                                <td>{{ entry.date |date('Y-m-d')}}</td>
                                <td>{{ entry.distance }}</td>
                                <td>{{ entry.time}}</td>
                                <td>{{ entry.getAvgSpeed() }}</td>
                                {% if can_edit %}<td><a href=\"/public/delete/{{ entry.id}}/{{ user.id }}\" class=\"delete-button btn btn-block btn-info\">Delete</a></td>{% endif %}
                            </tr>
                        {% endfor %}
                    </table>
                {% else %}
                    No entries so far
                {% endif %}
            </div>
        </div>
    </div>
    {% if can_edit %}
        {% if errors|length > 0 %}
            {% for error in errors %}
                {{ error }}<br>
            {% endfor %}
        {% endif %}
        {% form_theme form 'bootstrap_3_layout.html.twig' %}
        {# templates/default/new.html.twig #}
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
    {% endif %}

{% endblock %}", "user.twig", "/Users/marvinkruger/uebung6/templates/user.twig");
    }
}
