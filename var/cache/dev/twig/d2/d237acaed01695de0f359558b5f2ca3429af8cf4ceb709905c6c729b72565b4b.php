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
        $__internal_1c19223d1539513621260dd68426228cc949b385900558499b5ed2d1d8cd7a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c19223d1539513621260dd68426228cc949b385900558499b5ed2d1d8cd7a66->enter($__internal_1c19223d1539513621260dd68426228cc949b385900558499b5ed2d1d8cd7a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.twig"));

        $__internal_192be49d4d63834cd9fb27972685f7a6491f2d85ab958acc27cf124d533554e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192be49d4d63834cd9fb27972685f7a6491f2d85ab958acc27cf124d533554e4->enter($__internal_192be49d4d63834cd9fb27972685f7a6491f2d85ab958acc27cf124d533554e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c19223d1539513621260dd68426228cc949b385900558499b5ed2d1d8cd7a66->leave($__internal_1c19223d1539513621260dd68426228cc949b385900558499b5ed2d1d8cd7a66_prof);

        
        $__internal_192be49d4d63834cd9fb27972685f7a6491f2d85ab958acc27cf124d533554e4->leave($__internal_192be49d4d63834cd9fb27972685f7a6491f2d85ab958acc27cf124d533554e4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_885d80e01be94ce757afcb4f449bb12ccc11e0b4e90edcde74dce5a225141884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885d80e01be94ce757afcb4f449bb12ccc11e0b4e90edcde74dce5a225141884->enter($__internal_885d80e01be94ce757afcb4f449bb12ccc11e0b4e90edcde74dce5a225141884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_454576cecea84a5e19cd83682555a91de5cf36f240a69e6ef2e8f1702eb4204e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454576cecea84a5e19cd83682555a91de5cf36f240a69e6ef2e8f1702eb4204e->enter($__internal_454576cecea84a5e19cd83682555a91de5cf36f240a69e6ef2e8f1702eb4204e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        --> <a href=\"/public/index.php/logout\">";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Logout", array(), "messages");
            echo "</a>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 15
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Hey, please login to use some special features", array(), "messages");
            // line 16
            echo "        <form action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" method=\"post\">
            <label for=\"username\">";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Username", array(), "messages");
            echo "</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />

            <label for=\"password\">";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Password", array(), "messages");
            echo "</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />

            ";
            // line 28
            echo "
            <button action=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" method=\"post\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Login", array(), "messages");
            echo "</button>
        </form>
    ";
        }
        // line 32
        echo "



";
        
        $__internal_454576cecea84a5e19cd83682555a91de5cf36f240a69e6ef2e8f1702eb4204e->leave($__internal_454576cecea84a5e19cd83682555a91de5cf36f240a69e6ef2e8f1702eb4204e_prof);

        
        $__internal_885d80e01be94ce757afcb4f449bb12ccc11e0b4e90edcde74dce5a225141884->leave($__internal_885d80e01be94ce757afcb4f449bb12ccc11e0b4e90edcde74dce5a225141884_prof);

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
        return array (  113 => 32,  105 => 29,  102 => 28,  96 => 20,  91 => 18,  87 => 17,  82 => 16,  79 => 15,  77 => 14,  74 => 13,  69 => 11,  63 => 9,  60 => 8,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        --> <a href=\"/public/index.php/logout\">{% trans %}Logout{% endtrans %}</a>
    {% endif %}

    {% if  not is_granted(\"ROLE_USER\") %}
        {% trans %}Hey, please login to use some special features{% endtrans %}
        <form action=\"{{ path('login') }}\" method=\"post\">
            <label for=\"username\">{% trans %}Username{% endtrans %}</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

            <label for=\"password\">{% trans %}Password{% endtrans %}</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />

            {#
                If you want to control the URL the user
                is redirected to on success (more details below)
                <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
            #}

            <button action=\"{{ path('login') }}\" method=\"post\">{% trans %}Login{% endtrans %}</button>
        </form>
    {% endif %}




{% endblock %}", "login.twig", "/Users/marvinkruger/uebung6/templates/login.twig");
    }
}
