<?php

/* login.twig */
class __TwigTemplate_461e8dd4a518d47038327f436b5e305692003b4cf77f1f709c13f7fae21d1912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login.twig", 1);
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
        $__internal_5ada3173b476fa02a012fcd5daa3582ad5ce307e2ba13cb2d98ab739a230184c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ada3173b476fa02a012fcd5daa3582ad5ce307e2ba13cb2d98ab739a230184c->enter($__internal_5ada3173b476fa02a012fcd5daa3582ad5ce307e2ba13cb2d98ab739a230184c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.twig"));

        $__internal_1b627607c5a5f1da56d5d91cd2364fc730fa861d1eb5bf22adcbbe2c10cf6fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b627607c5a5f1da56d5d91cd2364fc730fa861d1eb5bf22adcbbe2c10cf6fdc->enter($__internal_1b627607c5a5f1da56d5d91cd2364fc730fa861d1eb5bf22adcbbe2c10cf6fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ada3173b476fa02a012fcd5daa3582ad5ce307e2ba13cb2d98ab739a230184c->leave($__internal_5ada3173b476fa02a012fcd5daa3582ad5ce307e2ba13cb2d98ab739a230184c_prof);

        
        $__internal_1b627607c5a5f1da56d5d91cd2364fc730fa861d1eb5bf22adcbbe2c10cf6fdc->leave($__internal_1b627607c5a5f1da56d5d91cd2364fc730fa861d1eb5bf22adcbbe2c10cf6fdc_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6d92855a66536fa065d6eff9fb1090982edb08b2c9186b026bd1a1224516933c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d92855a66536fa065d6eff9fb1090982edb08b2c9186b026bd1a1224516933c->enter($__internal_6d92855a66536fa065d6eff9fb1090982edb08b2c9186b026bd1a1224516933c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1e73e2ed6cfc54c6e876d5e21b36145c0fd8df1c51c88c942722743c9e17fea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e73e2ed6cfc54c6e876d5e21b36145c0fd8df1c51c88c942722743c9e17fea2->enter($__internal_1e73e2ed6cfc54c6e876d5e21b36145c0fd8df1c51c88c942722743c9e17fea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->getSourceContext()); })())) {
            // line 6
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 9
            echo "        Hi ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->getSourceContext()); })()), "user", array()), "name", array()), "html", null, true);
            echo ",
        you're logged in. Wanna to logout?
        --> <a href=\"logout\">Logout</a>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 15
            echo "        Hey, please login to use some special features
        <form action=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" method=\"post\">
            <label for=\"username\">Username:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />

            <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />

            ";
            // line 28
            echo "
            <button type=\"submit\">login</button>
        </form>
    ";
        }
        // line 32
        echo "



";
        
        $__internal_1e73e2ed6cfc54c6e876d5e21b36145c0fd8df1c51c88c942722743c9e17fea2->leave($__internal_1e73e2ed6cfc54c6e876d5e21b36145c0fd8df1c51c88c942722743c9e17fea2_prof);

        
        $__internal_6d92855a66536fa065d6eff9fb1090982edb08b2c9186b026bd1a1224516933c->leave($__internal_6d92855a66536fa065d6eff9fb1090982edb08b2c9186b026bd1a1224516933c_prof);

    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 32,  92 => 28,  84 => 18,  79 => 16,  76 => 15,  74 => 14,  71 => 13,  63 => 9,  60 => 8,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block content %}

    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    {% if is_granted(\"ROLE_USER\") %}
        Hi {{ app.user.name }},
        you're logged in. Wanna to logout?
        --> <a href=\"logout\">Logout</a>
    {% endif %}

    {% if  not is_granted(\"ROLE_USER\") %}
        Hey, please login to use some special features
        <form action=\"{{ path('login') }}\" method=\"post\">
            <label for=\"username\">Username:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

            <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />

            {#
                If you want to control the URL the user
                is redirected to on success (more details below)
                <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
            #}

            <button type=\"submit\">login</button>
        </form>
    {% endif %}




{% endblock %}", "login.twig", "/Users/marvinkruger/uebung6/templates/login.twig");
    }
}
