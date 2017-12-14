<?php

/* overview.twig */
class __TwigTemplate_e5b0817e18e566ad3da892e18da26301f2768ca2cfef26635823c7aec2dc5fc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "overview.twig", 1);
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
        $__internal_e231c5c3ce5349ad40a9426555c75135e5343995cf5a2d9d8baccc3587528570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e231c5c3ce5349ad40a9426555c75135e5343995cf5a2d9d8baccc3587528570->enter($__internal_e231c5c3ce5349ad40a9426555c75135e5343995cf5a2d9d8baccc3587528570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "overview.twig"));

        $__internal_1da06804a6601de0d1098cd2f75c1ad8aebc48c98b561e3df0d1218c5b1a05c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da06804a6601de0d1098cd2f75c1ad8aebc48c98b561e3df0d1218c5b1a05c2->enter($__internal_1da06804a6601de0d1098cd2f75c1ad8aebc48c98b561e3df0d1218c5b1a05c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "overview.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e231c5c3ce5349ad40a9426555c75135e5343995cf5a2d9d8baccc3587528570->leave($__internal_e231c5c3ce5349ad40a9426555c75135e5343995cf5a2d9d8baccc3587528570_prof);

        
        $__internal_1da06804a6601de0d1098cd2f75c1ad8aebc48c98b561e3df0d1218c5b1a05c2->leave($__internal_1da06804a6601de0d1098cd2f75c1ad8aebc48c98b561e3df0d1218c5b1a05c2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_20057707f70c26279da9867362578315511a2c8b735bd832f95d364a62fb4f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20057707f70c26279da9867362578315511a2c8b735bd832f95d364a62fb4f47->enter($__internal_20057707f70c26279da9867362578315511a2c8b735bd832f95d364a62fb4f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d8df8bb00f19e5929572b59c8b1a4585af200c577c1b13ee8b00c3903ac75db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8df8bb00f19e5929572b59c8b1a4585af200c577c1b13ee8b00c3903ac75db7->enter($__internal_d8df8bb00f19e5929572b59c8b1a4585af200c577c1b13ee8b00c3903ac75db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 6
            echo "        Hi there --> <a href=\"/public/login\"> login</a>
    ";
        }
        // line 8
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
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "
                    <tr>
                        <td><a href=\"profile/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "days_trained", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "entire_distance", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </table>
            </div>
        </div>
    </div>

";
        
        $__internal_d8df8bb00f19e5929572b59c8b1a4585af200c577c1b13ee8b00c3903ac75db7->leave($__internal_d8df8bb00f19e5929572b59c8b1a4585af200c577c1b13ee8b00c3903ac75db7_prof);

        
        $__internal_20057707f70c26279da9867362578315511a2c8b735bd832f95d364a62fb4f47->leave($__internal_20057707f70c26279da9867362578315511a2c8b735bd832f95d364a62fb4f47_prof);

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
        return array (  96 => 25,  87 => 22,  83 => 21,  77 => 20,  73 => 18,  69 => 17,  58 => 8,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block content %}

    {% if not is_granted(\"ROLE_USER\") %}
        Hi there --> <a href=\"/public/login\"> login</a>
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
                        <td><a href=\"profile/{{ user.name }}\">{{ user.name }}</a></td>
                        <td>{{ user.days_trained }}</td>
                        <td>{{ user.entire_distance }}</td>
                    </tr>
                {% endfor %}
                </table>
            </div>
        </div>
    </div>

{% endblock %}", "overview.twig", "/Users/marvinkruger/uebung6/templates/overview.twig");
    }
}
