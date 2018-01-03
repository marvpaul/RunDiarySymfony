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
        $__internal_2636311a66b0fae654db564bc303fb523913433aba2ff5b7ddb6f2e55709d0f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2636311a66b0fae654db564bc303fb523913433aba2ff5b7ddb6f2e55709d0f0->enter($__internal_2636311a66b0fae654db564bc303fb523913433aba2ff5b7ddb6f2e55709d0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.twig"));

        $__internal_e94c073c080a4ecbfc9ac0889497ef68fcc9cd63beee57c6761d843594f748be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94c073c080a4ecbfc9ac0889497ef68fcc9cd63beee57c6761d843594f748be->enter($__internal_e94c073c080a4ecbfc9ac0889497ef68fcc9cd63beee57c6761d843594f748be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2636311a66b0fae654db564bc303fb523913433aba2ff5b7ddb6f2e55709d0f0->leave($__internal_2636311a66b0fae654db564bc303fb523913433aba2ff5b7ddb6f2e55709d0f0_prof);

        
        $__internal_e94c073c080a4ecbfc9ac0889497ef68fcc9cd63beee57c6761d843594f748be->leave($__internal_e94c073c080a4ecbfc9ac0889497ef68fcc9cd63beee57c6761d843594f748be_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7e8e415b5ffdd50c65442d759b9a117a59e5fbc84eb82114b5e232f20f1b81fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e8e415b5ffdd50c65442d759b9a117a59e5fbc84eb82114b5e232f20f1b81fc->enter($__internal_7e8e415b5ffdd50c65442d759b9a117a59e5fbc84eb82114b5e232f20f1b81fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ad04062af33c417d3c83d380570a421648d5ed716516001b8f440b0defa9a0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad04062af33c417d3c83d380570a421648d5ed716516001b8f440b0defa9a0f2->enter($__internal_ad04062af33c417d3c83d380570a421648d5ed716516001b8f440b0defa9a0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        --> <a href=\"/public/index.php/logout\">Logout</a>
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
            <button action=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" method=\"post\">login</button>
        </form>
    ";
        }
        // line 32
        echo "



";
        
        $__internal_ad04062af33c417d3c83d380570a421648d5ed716516001b8f440b0defa9a0f2->leave($__internal_ad04062af33c417d3c83d380570a421648d5ed716516001b8f440b0defa9a0f2_prof);

        
        $__internal_7e8e415b5ffdd50c65442d759b9a117a59e5fbc84eb82114b5e232f20f1b81fc->leave($__internal_7e8e415b5ffdd50c65442d759b9a117a59e5fbc84eb82114b5e232f20f1b81fc_prof);

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
        return array (  101 => 32,  95 => 29,  92 => 28,  84 => 18,  79 => 16,  76 => 15,  74 => 14,  71 => 13,  63 => 9,  60 => 8,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        --> <a href=\"/public/index.php/logout\">Logout</a>
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

            <button action=\"{{ path('login') }}\" method=\"post\">login</button>
        </form>
    {% endif %}




{% endblock %}", "login.twig", "/Users/marvinkruger/uebung6/templates/login.twig");
    }
}
