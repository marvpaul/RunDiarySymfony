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
        $__internal_b51ce1000cfa1dfd8d3ce14255a1f846017b64418d1b607700c297d08d861600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51ce1000cfa1dfd8d3ce14255a1f846017b64418d1b607700c297d08d861600->enter($__internal_b51ce1000cfa1dfd8d3ce14255a1f846017b64418d1b607700c297d08d861600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user.twig"));

        $__internal_a80cbf7e9332b7629f1b9f8110020aa6f86ce9b65000e621a67e184bd0961302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a80cbf7e9332b7629f1b9f8110020aa6f86ce9b65000e621a67e184bd0961302->enter($__internal_a80cbf7e9332b7629f1b9f8110020aa6f86ce9b65000e621a67e184bd0961302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b51ce1000cfa1dfd8d3ce14255a1f846017b64418d1b607700c297d08d861600->leave($__internal_b51ce1000cfa1dfd8d3ce14255a1f846017b64418d1b607700c297d08d861600_prof);

        
        $__internal_a80cbf7e9332b7629f1b9f8110020aa6f86ce9b65000e621a67e184bd0961302->leave($__internal_a80cbf7e9332b7629f1b9f8110020aa6f86ce9b65000e621a67e184bd0961302_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b0820f7f0c507d0c6575495a60d8468189a7e6cdc951aedce09ab38a7be39306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0820f7f0c507d0c6575495a60d8468189a7e6cdc951aedce09ab38a7be39306->enter($__internal_b0820f7f0c507d0c6575495a60d8468189a7e6cdc951aedce09ab38a7be39306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0e98a1907ed1a43df6845bd3aac90de905b01607926c1f721df21baafbb4b519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e98a1907ed1a43df6845bd3aac90de905b01607926c1f721df21baafbb4b519->enter($__internal_0e98a1907ed1a43df6845bd3aac90de905b01607926c1f721df21baafbb4b519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo "        Hi there --> <a href=\"/public/index.php/login\"> login</a>
    ";
        }
        // line 10
        echo "
    <div class=\"card text-white bg-primary\">
        <div class=\"card-body\" id=\"overview\">
            <div class=\"alert alert-dismissible alert-success col-6\" style=\"text-align: center; margin: auto; \">


                Name -> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 16, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "<br>

                <!--Summarized information -->
                ";
        // line 19
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->getSourceContext()); })()), "entries", array())) > 0)) {
            // line 20
            echo "                        Days_trained -> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 20, $this->getSourceContext()); })()), "days_trained", array()), "html", null, true);
            echo "<br>
                    ";
            // line 21
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 22
                echo "                        Time from first entry to today -> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 22, $this->getSourceContext()); })()), "entire_time", array()), "html", null, true);
                echo "<br>
                    ";
            }
            // line 24
            echo "                        Entire distance -> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 24, $this->getSourceContext()); })()), "entire_distance", array()), "html", null, true);
            echo "<br>

                    <h2>All entries</h2>

                    <!-- Table with entries-->
                    <table class=\"table-info table table-striped\">
                        <tr>
                            <td>Date</td>
                            <td>Distance in km</td>
                            ";
            // line 33
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 34
                echo "                                <td>Time in h</td>
                                <td>Avg. speed in km/h</td>
                            ";
            }
            // line 37
            echo "                            ";
            if ((isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new Twig_Error_Runtime('Variable "can_edit" does not exist.', 37, $this->getSourceContext()); })())) {
                echo "<td>Delete</td>";
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
                    echo "\" class=\"delete-button btn btn-block btn-info\">Delete</a></td>";
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
            echo "                    No entries so far
                ";
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
        
        $__internal_0e98a1907ed1a43df6845bd3aac90de905b01607926c1f721df21baafbb4b519->leave($__internal_0e98a1907ed1a43df6845bd3aac90de905b01607926c1f721df21baafbb4b519_prof);

        
        $__internal_b0820f7f0c507d0c6575495a60d8468189a7e6cdc951aedce09ab38a7be39306->leave($__internal_b0820f7f0c507d0c6575495a60d8468189a7e6cdc951aedce09ab38a7be39306_prof);

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
        return array (  222 => 73,  217 => 71,  213 => 70,  208 => 69,  206 => 68,  202 => 66,  199 => 65,  190 => 63,  185 => 62,  183 => 61,  180 => 60,  178 => 59,  172 => 55,  168 => 53,  163 => 50,  156 => 48,  147 => 47,  142 => 45,  137 => 44,  135 => 43,  131 => 42,  127 => 41,  124 => 40,  120 => 39,  117 => 38,  112 => 37,  107 => 34,  105 => 33,  92 => 24,  86 => 22,  84 => 21,  79 => 20,  77 => 19,  71 => 16,  63 => 10,  59 => 8,  57 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block content %}

    {% set can_edit = is_granted('edit', user) %}

    {% if not is_granted(\"ROLE_USER\") %}
        Hi there --> <a href=\"/public/index.php/login\"> login</a>
    {% endif %}

    <div class=\"card text-white bg-primary\">
        <div class=\"card-body\" id=\"overview\">
            <div class=\"alert alert-dismissible alert-success col-6\" style=\"text-align: center; margin: auto; \">


                Name -> {{ user.name }}<br>

                <!--Summarized information -->
                {%  if user.entries|length > 0%}
                        Days_trained -> {{ user.days_trained }}<br>
                    {% if is_granted(\"ROLE_USER\") %}
                        Time from first entry to today -> {{ user.entire_time }}<br>
                    {% endif %}
                        Entire distance -> {{ user.entire_distance }}<br>

                    <h2>All entries</h2>

                    <!-- Table with entries-->
                    <table class=\"table-info table table-striped\">
                        <tr>
                            <td>Date</td>
                            <td>Distance in km</td>
                            {% if is_granted(\"ROLE_USER\") %}
                                <td>Time in h</td>
                                <td>Avg. speed in km/h</td>
                            {% endif %}
                            {% if can_edit %}<td>Delete</td>{% endif %}
                        </tr>
                        {% for entry in user.entries %}
                            <tr>
                                <td>{{ entry.date |date('Y-m-d')}}</td>
                                <td>{{ entry.distance }}</td>
                                {% if is_granted(\"ROLE_USER\") %}
                                    <td>{{ entry.time|round(2, 'floor') }}</td>
                                    <td>{{ entry.getAvgSpeed() }}</td>
                                {% endif %}
                                {% if can_edit %}<td><a href=\"/public/index.php/delete/{{ entry.id}}/{{ user.id }}\" class=\"delete-button btn btn-block btn-info\">Delete</a></td>{% endif %}
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
