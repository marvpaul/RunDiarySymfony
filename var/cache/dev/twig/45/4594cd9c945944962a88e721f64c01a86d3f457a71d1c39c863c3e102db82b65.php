<?php

/* @Security/Collector/security.html.twig */
class __TwigTemplate_e7163e3fb736914d26e8f93aa10442ebc2052db038acef782620acb70b4e776c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f47c681e240e94d024a4f608b9b5b86b96057b01944ec6c084d5c32304178118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f47c681e240e94d024a4f608b9b5b86b96057b01944ec6c084d5c32304178118->enter($__internal_f47c681e240e94d024a4f608b9b5b86b96057b01944ec6c084d5c32304178118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $__internal_2dfceca4a78e7ff79ee0ea79e7b78cfd6c1291be4697fe0f8c77bcedc614d4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dfceca4a78e7ff79ee0ea79e7b78cfd6c1291be4697fe0f8c77bcedc614d4c6->enter($__internal_2dfceca4a78e7ff79ee0ea79e7b78cfd6c1291be4697fe0f8c77bcedc614d4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f47c681e240e94d024a4f608b9b5b86b96057b01944ec6c084d5c32304178118->leave($__internal_f47c681e240e94d024a4f608b9b5b86b96057b01944ec6c084d5c32304178118_prof);

        
        $__internal_2dfceca4a78e7ff79ee0ea79e7b78cfd6c1291be4697fe0f8c77bcedc614d4c6->leave($__internal_2dfceca4a78e7ff79ee0ea79e7b78cfd6c1291be4697fe0f8c77bcedc614d4c6_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_bbb66e2082522941754017b20a5537d6e6005704ff5e1970caf224f27cbd38a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb66e2082522941754017b20a5537d6e6005704ff5e1970caf224f27cbd38a4->enter($__internal_bbb66e2082522941754017b20a5537d6e6005704ff5e1970caf224f27cbd38a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_3baf5f280b7b9c18e43c87493cb82475b4e0ac41223e66cf49e573899dbba80d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3baf5f280b7b9c18e43c87493cb82475b4e0ac41223e66cf49e573899dbba80d->enter($__internal_3baf5f280b7b9c18e43c87493cb82475b4e0ac41223e66cf49e573899dbba80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Security";
        
        $__internal_3baf5f280b7b9c18e43c87493cb82475b4e0ac41223e66cf49e573899dbba80d->leave($__internal_3baf5f280b7b9c18e43c87493cb82475b4e0ac41223e66cf49e573899dbba80d_prof);

        
        $__internal_bbb66e2082522941754017b20a5537d6e6005704ff5e1970caf224f27cbd38a4->leave($__internal_bbb66e2082522941754017b20a5537d6e6005704ff5e1970caf224f27cbd38a4_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ed8646cb05d09c3eba04ff9670c387ce128f86ef649407f595a6b2a383decd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed8646cb05d09c3eba04ff9670c387ce128f86ef649407f595a6b2a383decd8->enter($__internal_5ed8646cb05d09c3eba04ff9670c387ce128f86ef649407f595a6b2a383decd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_38b578b089b81d8f0e3d8b2735dfbb9f252f71467613bf627da05dc71c174333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b578b089b81d8f0e3d8b2735dfbb9f252f71467613bf627da05dc71c174333->enter($__internal_38b578b089b81d8f0e3d8b2735dfbb9f252f71467613bf627da05dc71c174333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->getSourceContext()); })()), "token", array())) {
            // line 7
            echo "        ";
            $context["is_authenticated"] = (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 7, $this->getSourceContext()); })()), "enabled", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 7, $this->getSourceContext()); })()), "authenticated", array()));
            // line 8
            echo "        ";
            $context["color_code"] = (((isset($context["is_authenticated"]) || array_key_exists("is_authenticated", $context) ? $context["is_authenticated"] : (function () { throw new Twig_Error_Runtime('Variable "is_authenticated" does not exist.', 8, $this->getSourceContext()); })())) ? ("") : ("yellow"));
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            $context["color_code"] = ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "enabled", array())) ? ("red") : (""));
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        ";
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 15
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "user", array()), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "
    ";
        // line 18
        ob_start();
        // line 19
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 19, $this->getSourceContext()); })()), "impersonated", array())) {
            // line 20
            echo "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Impersonator</b>
                    <span>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 23, $this->getSourceContext()); })()), "impersonatorUser", array()), "html", null, true);
            echo "</span>
                </div>
            </div>
        ";
        }
        // line 27
        echo "
        <div class=\"sf-toolbar-info-group\">
            ";
        // line 29
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 29, $this->getSourceContext()); })()), "enabled", array())) {
            // line 30
            echo "                ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 30, $this->getSourceContext()); })()), "token", array())) {
                // line 31
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Logged in as</b>
                        <span>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 33, $this->getSourceContext()); })()), "user", array()), "html", null, true);
                echo "</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 38
                echo (((isset($context["is_authenticated"]) || array_key_exists("is_authenticated", $context) ? $context["is_authenticated"] : (function () { throw new Twig_Error_Runtime('Variable "is_authenticated" does not exist.', 38, $this->getSourceContext()); })())) ? ("green") : ("red"));
                echo "\">";
                echo (((isset($context["is_authenticated"]) || array_key_exists("is_authenticated", $context) ? $context["is_authenticated"] : (function () { throw new Twig_Error_Runtime('Variable "is_authenticated" does not exist.', 38, $this->getSourceContext()); })())) ? ("Yes") : ("No"));
                echo "</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Token class</b>
                        <span>";
                // line 43
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 43, $this->getSourceContext()); })()), "tokenClass", array()));
                echo "</span>
                    </div>
                ";
            } else {
                // line 46
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-red\">No</span>
                    </div>
                ";
            }
            // line 51
            echo "
                ";
            // line 52
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 52, $this->getSourceContext()); })()), "firewall", array())) {
                // line 53
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Firewall name</b>
                        <span>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 55, $this->getSourceContext()); })()), "firewall", array()), "name", array()), "html", null, true);
                echo "</span>
                    </div>
                ";
            }
            // line 58
            echo "
                ";
            // line 59
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 59, $this->getSourceContext()); })()), "token", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 59, $this->getSourceContext()); })()), "logoutUrl", array()))) {
                // line 60
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Actions</b>
                        <span>
                            <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 63, $this->getSourceContext()); })()), "logoutUrl", array()), "html", null, true);
                echo "\">Logout</a>
                            ";
                // line 64
                if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 64, $this->getSourceContext()); })()), "impersonated", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 64, $this->getSourceContext()); })()), "impersonationExitPath", array()))) {
                    // line 65
                    echo "                                | <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 65, $this->getSourceContext()); })()), "impersonationExitPath", array()), "html", null, true);
                    echo "\">Exit impersonation</a>
                            ";
                }
                // line 67
                echo "                        </span>
                    </div>
                ";
            }
            // line 70
            echo "            ";
        } else {
            // line 71
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <span>The security is disabled.</span>
                </div>
            ";
        }
        // line 75
        echo "        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 77
        echo "
    ";
        // line 78
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 78, $this->getSourceContext()); })()), "status" => (isset($context["color_code"]) || array_key_exists("color_code", $context) ? $context["color_code"] : (function () { throw new Twig_Error_Runtime('Variable "color_code" does not exist.', 78, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_38b578b089b81d8f0e3d8b2735dfbb9f252f71467613bf627da05dc71c174333->leave($__internal_38b578b089b81d8f0e3d8b2735dfbb9f252f71467613bf627da05dc71c174333_prof);

        
        $__internal_5ed8646cb05d09c3eba04ff9670c387ce128f86ef649407f595a6b2a383decd8->leave($__internal_5ed8646cb05d09c3eba04ff9670c387ce128f86ef649407f595a6b2a383decd8_prof);

    }

    // line 81
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d58769e3f5420e5e08b2d8493d63a1dee2de1aa0f707528765eaf863ee44bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d58769e3f5420e5e08b2d8493d63a1dee2de1aa0f707528765eaf863ee44bcf->enter($__internal_6d58769e3f5420e5e08b2d8493d63a1dee2de1aa0f707528765eaf863ee44bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_655a432313ecb517b55a07daf7caf1cb7fac4a0b07b4eebb2e3cd407806e2146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655a432313ecb517b55a07daf7caf1cb7fac4a0b07b4eebb2e3cd407806e2146->enter($__internal_655a432313ecb517b55a07daf7caf1cb7fac4a0b07b4eebb2e3cd407806e2146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 82
        echo "    <span class=\"label ";
        echo ((( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 82, $this->getSourceContext()); })()), "enabled", array()) ||  !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 82, $this->getSourceContext()); })()), "token", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 83
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "</span>
        <strong>Security</strong>
    </span>
";
        
        $__internal_655a432313ecb517b55a07daf7caf1cb7fac4a0b07b4eebb2e3cd407806e2146->leave($__internal_655a432313ecb517b55a07daf7caf1cb7fac4a0b07b4eebb2e3cd407806e2146_prof);

        
        $__internal_6d58769e3f5420e5e08b2d8493d63a1dee2de1aa0f707528765eaf863ee44bcf->leave($__internal_6d58769e3f5420e5e08b2d8493d63a1dee2de1aa0f707528765eaf863ee44bcf_prof);

    }

    // line 88
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d250d5053642df1f45cc9e43bcb868e8cf4987489db7d2fe5c5266d0e2f198e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d250d5053642df1f45cc9e43bcb868e8cf4987489db7d2fe5c5266d0e2f198e5->enter($__internal_d250d5053642df1f45cc9e43bcb868e8cf4987489db7d2fe5c5266d0e2f198e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d3a533b928eb96f891781698ce44d40b669de03e381c935c5f82f38e7ea4dd89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a533b928eb96f891781698ce44d40b669de03e381c935c5f82f38e7ea4dd89->enter($__internal_d3a533b928eb96f891781698ce44d40b669de03e381c935c5f82f38e7ea4dd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 89
        echo "    <h2>Security Token</h2>

    ";
        // line 91
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 91, $this->getSourceContext()); })()), "enabled", array())) {
            // line 92
            echo "        ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 92, $this->getSourceContext()); })()), "token", array())) {
                // line 93
                echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 95
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 95, $this->getSourceContext()); })()), "user", array()) == "anon.")) ? ("Anonymous") : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 95, $this->getSourceContext()); })()), "user", array()))), "html", null, true);
                echo "</span>
                    <span class=\"label\">Username</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
                // line 100
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 100, $this->getSourceContext()); })()), "authenticated", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Authenticated</span>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th scope=\"col\" class=\"key\">Property</th>
                        <th scope=\"col\">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Roles</th>
                        <td>
                            ";
                // line 116
                echo ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 116, $this->getSourceContext()); })()), "roles", array()))) ? ("none") : ($this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpData($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 116, $this->getSourceContext()); })()), "roles", array()), 1)));
                echo "

                            ";
                // line 118
                if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 118, $this->getSourceContext()); })()), "authenticated", array()) && twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 118, $this->getSourceContext()); })()), "roles", array())))) {
                    // line 119
                    echo "                                <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                            ";
                }
                // line 121
                echo "                        </td>
                    </tr>

                    ";
                // line 124
                if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 124, $this->getSourceContext()); })()), "supportsRoleHierarchy", array())) {
                    // line 125
                    echo "                    <tr>
                        <th>Inherited Roles</th>
                        <td>";
                    // line 127
                    echo ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 127, $this->getSourceContext()); })()), "inheritedRoles", array()))) ? ("none") : ($this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpData($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 127, $this->getSourceContext()); })()), "inheritedRoles", array()), 1)));
                    echo "</td>
                    </tr>
                    ";
                }
                // line 130
                echo "
                    ";
                // line 131
                if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 131, $this->getSourceContext()); })()), "token", array())) {
                    // line 132
                    echo "                    <tr>
                        <th>Token</th>
                        <td>";
                    // line 134
                    echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpData($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 134, $this->getSourceContext()); })()), "token", array()));
                    echo "</td>
                    </tr>
                    ";
                }
                // line 137
                echo "                </tbody>
            </table>
        ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 139
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 139, $this->getSourceContext()); })()), "enabled", array())) {
                // line 140
                echo "            <div class=\"empty\">
                <p>There is no security token.</p>
            </div>
        ";
            }
            // line 144
            echo "

        <h2>Security Firewall</h2>

        ";
            // line 148
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 148, $this->getSourceContext()); })()), "firewall", array())) {
                // line 149
                echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 151, $this->getSourceContext()); })()), "firewall", array()), "name", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Name</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 155
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 155, $this->getSourceContext()); })()), "firewall", array()), "security_enabled", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Security enabled</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 159
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 159, $this->getSourceContext()); })()), "firewall", array()), "stateless", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Stateless</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 163
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 163, $this->getSourceContext()); })()), "firewall", array()), "allows_anonymous", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Allows anonymous</span>
                </div>
            </div>

            ";
                // line 168
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 168, $this->getSourceContext()); })()), "firewall", array()), "security_enabled", array())) {
                    // line 169
                    echo "                <h4>Configuration</h4>

                <table>
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">Key</th>
                            <th scope=\"col\">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>provider</th>
                            <td>";
                    // line 181
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 181, $this->getSourceContext()); })()), "firewall", array()), "provider", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 181, $this->getSourceContext()); })()), "firewall", array()), "provider", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>context</th>
                            <td>";
                    // line 185
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 185, $this->getSourceContext()); })()), "firewall", array()), "context", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 185, $this->getSourceContext()); })()), "firewall", array()), "context", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>entry_point</th>
                            <td>";
                    // line 189
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 189, $this->getSourceContext()); })()), "firewall", array()), "entry_point", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 189, $this->getSourceContext()); })()), "firewall", array()), "entry_point", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>user_checker</th>
                            <td>";
                    // line 193
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 193, $this->getSourceContext()); })()), "firewall", array()), "user_checker", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 193, $this->getSourceContext()); })()), "firewall", array()), "user_checker", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>access_denied_handler</th>
                            <td>";
                    // line 197
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 197, $this->getSourceContext()); })()), "firewall", array()), "access_denied_handler", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 197, $this->getSourceContext()); })()), "firewall", array()), "access_denied_handler", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>access_denied_url</th>
                            <td>";
                    // line 201
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 201, $this->getSourceContext()); })()), "firewall", array()), "access_denied_url", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 201, $this->getSourceContext()); })()), "firewall", array()), "access_denied_url", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>listeners</th>
                            <td>";
                    // line 205
                    echo ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 205, $this->getSourceContext()); })()), "firewall", array()), "listeners", array()))) ? ("(none)") : ($this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpData($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 205, $this->getSourceContext()); })()), "firewall", array()), "listeners", array()), 1)));
                    echo "</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Listeners</h4>

                ";
                    // line 212
                    if (twig_test_empty(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "listeners", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "listeners", array()), array())) : (array())))) {
                        // line 213
                        echo "                    <div class=\"empty\">
                        <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                    </div>
                ";
                    } else {
                        // line 217
                        echo "                    <table>
                        <thead>
                        <tr>
                            <th>Listener</th>
                            <th>Duration</th>
                            <th>Response</th>
                        </tr>
                        </thead>

                        ";
                        // line 226
                        $context["previous_event"] = twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 226, $this->getSourceContext()); })()), "listeners", array()));
                        // line 227
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 227, $this->getSourceContext()); })()), "listeners", array()));
                        $context['loop'] = array(
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        );
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                            // line 228
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array()) || ($context["listener"] != (isset($context["previous_event"]) || array_key_exists("previous_event", $context) ? $context["previous_event"] : (function () { throw new Twig_Error_Runtime('Variable "previous_event" does not exist.', 228, $this->getSourceContext()); })())))) {
                                // line 229
                                echo "                                ";
                                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                                    // line 230
                                    echo "                                    </tbody>
                                ";
                                }
                                // line 232
                                echo "
                                <tbody>
                                ";
                                // line 234
                                $context["previous_event"] = $context["listener"];
                                // line 235
                                echo "                            ";
                            }
                            // line 236
                            echo "
                            <tr>
                                <td class=\"font-normal\">";
                            // line 238
                            echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpData($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "stub", array()));
                            echo "</td>
                                <td class=\"no-wrap\">";
                            // line 239
                            echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "time", array()) * 1000)), "html", null, true);
                            echo " ms</td>
                                <td class=\"font-normal\">";
                            // line 240
                            echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "response", array())) ? ($this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpData($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "response", array()))) : ("(none)"));
                            echo "</td>
                            </tr>

                            ";
                            // line 243
                            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                                // line 244
                                echo "                                </tbody>
                            ";
                            }
                            // line 246
                            echo "                        ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 247
                        echo "                    </table>
                ";
                    }
                    // line 249
                    echo "            ";
                }
                // line 250
                echo "        ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 250, $this->getSourceContext()); })()), "enabled", array())) {
                // line 251
                echo "            <div class=\"empty\">
                <p>This request was not covered by any firewall.</p>
            </div>
        ";
            }
            // line 255
            echo "    ";
        } else {
            // line 256
            echo "        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    ";
        }
        // line 260
        echo "
    ";
        // line 261
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "voters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "voters", array()), array())) : (array())))) {
            // line 262
            echo "        <h2>Security Voters <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 262, $this->getSourceContext()); })()), "voters", array())), "html", null, true);
            echo ")</small></h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 266
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "voterStrategy", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "voterStrategy", array()), "unknown")) : ("unknown")), "html", null, true);
            echo "</span>
                <span class=\"label\">Strategy</span>
            </div>
        </div>

        <table class=\"voters\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Voter class</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 280
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 280, $this->getSourceContext()); })()), "voters", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["voter"]) {
                // line 281
                echo "                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 282
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">";
                // line 283
                echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpData($this->env, $context["voter"]);
                echo "</td>
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 286
            echo "            </tbody>
        </table>
    ";
        }
        // line 289
        echo "
    ";
        // line 290
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "accessDecisionLog", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "accessDecisionLog", array()), array())) : (array())))) {
            // line 291
            echo "        <h2>Access decision log</h2>

        <table class=\"decision-log\">
            <col style=\"width: 30px\">
            <col style=\"width: 120px\">
            <col style=\"width: 25%\">
            <col style=\"width: 60%\">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Result</th>
                    <th>Attributes</th>
                    <th>Object</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 309
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 309, $this->getSourceContext()); })()), "accessDecisionLog", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["decision"]) {
                // line 310
                echo "                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 311
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">
                            ";
                // line 313
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["decision"], "result", array())) ? ("<span class=\"label status-success same-width\">GRANTED</span>") : ("<span class=\"label status-error same-width\">DENIED</span>"));
                // line 316
                echo "
                        </td>
                        <td>
                            ";
                // line 319
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["decision"], "attributes", array())) == 1)) {
                    // line 320
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["decision"], "attributes", array())), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 322
                    echo "                                ";
                    echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpData($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["decision"], "attributes", array()));
                    echo "
                            ";
                }
                // line 324
                echo "                        </td>
                        <td>";
                // line 325
                echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpData($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["decision"], "seek", array(0 => "object"), "method"));
                echo "</td>
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 328
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_d3a533b928eb96f891781698ce44d40b669de03e381c935c5f82f38e7ea4dd89->leave($__internal_d3a533b928eb96f891781698ce44d40b669de03e381c935c5f82f38e7ea4dd89_prof);

        
        $__internal_d250d5053642df1f45cc9e43bcb868e8cf4987489db7d2fe5c5266d0e2f198e5->leave($__internal_d250d5053642df1f45cc9e43bcb868e8cf4987489db7d2fe5c5266d0e2f198e5_prof);

    }

    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  766 => 328,  749 => 325,  746 => 324,  740 => 322,  734 => 320,  732 => 319,  727 => 316,  725 => 313,  720 => 311,  717 => 310,  700 => 309,  680 => 291,  678 => 290,  675 => 289,  670 => 286,  653 => 283,  649 => 282,  646 => 281,  629 => 280,  612 => 266,  604 => 262,  602 => 261,  599 => 260,  593 => 256,  590 => 255,  584 => 251,  581 => 250,  578 => 249,  574 => 247,  560 => 246,  556 => 244,  554 => 243,  548 => 240,  544 => 239,  540 => 238,  536 => 236,  533 => 235,  531 => 234,  527 => 232,  523 => 230,  520 => 229,  517 => 228,  499 => 227,  497 => 226,  486 => 217,  480 => 213,  478 => 212,  468 => 205,  461 => 201,  454 => 197,  447 => 193,  440 => 189,  433 => 185,  426 => 181,  412 => 169,  410 => 168,  402 => 163,  395 => 159,  388 => 155,  381 => 151,  377 => 149,  375 => 148,  369 => 144,  363 => 140,  361 => 139,  357 => 137,  351 => 134,  347 => 132,  345 => 131,  342 => 130,  336 => 127,  332 => 125,  330 => 124,  325 => 121,  321 => 119,  319 => 118,  314 => 116,  295 => 100,  287 => 95,  283 => 93,  280 => 92,  278 => 91,  274 => 89,  265 => 88,  251 => 83,  246 => 82,  237 => 81,  225 => 78,  222 => 77,  218 => 75,  212 => 71,  209 => 70,  204 => 67,  198 => 65,  196 => 64,  192 => 63,  187 => 60,  185 => 59,  182 => 58,  176 => 55,  172 => 53,  170 => 52,  167 => 51,  160 => 46,  154 => 43,  144 => 38,  136 => 33,  132 => 31,  129 => 30,  127 => 29,  123 => 27,  116 => 23,  111 => 20,  108 => 19,  106 => 18,  103 => 17,  98 => 15,  93 => 14,  91 => 13,  88 => 12,  85 => 11,  82 => 10,  79 => 9,  76 => 8,  73 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block page_title 'Security' %}

{% block toolbar %}
    {% if collector.token %}
        {% set is_authenticated = collector.enabled and collector.authenticated  %}
        {% set color_code = is_authenticated ? '' : 'yellow' %}
    {% else %}
        {% set color_code = collector.enabled ? 'red' : '' %}
    {% endif %}

    {% set icon %}
        {{ include('@Security/Collector/icon.svg') }}
        <span class=\"sf-toolbar-value\">{{ collector.user|default('n/a') }}</span>
    {% endset %}

    {% set text %}
        {% if collector.impersonated %}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Impersonator</b>
                    <span>{{ collector.impersonatorUser }}</span>
                </div>
            </div>
        {% endif %}

        <div class=\"sf-toolbar-info-group\">
            {% if collector.enabled %}
                {% if collector.token %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Logged in as</b>
                        <span>{{ collector.user }}</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-{{ is_authenticated ? 'green' : 'red' }}\">{{ is_authenticated ? 'Yes' : 'No' }}</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Token class</b>
                        <span>{{ collector.tokenClass|abbr_class }}</span>
                    </div>
                {% else %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-red\">No</span>
                    </div>
                {% endif %}

                {% if collector.firewall %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Firewall name</b>
                        <span>{{ collector.firewall.name }}</span>
                    </div>
                {% endif %}

                {% if collector.token and collector.logoutUrl %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Actions</b>
                        <span>
                            <a href=\"{{ collector.logoutUrl }}\">Logout</a>
                            {% if collector.impersonated and collector.impersonationExitPath %}
                                | <a href=\"{{ collector.impersonationExitPath }}\">Exit impersonation</a>
                            {% endif %}
                        </span>
                    </div>
                {% endif %}
            {% else %}
                <div class=\"sf-toolbar-info-piece\">
                    <span>The security is disabled.</span>
                </div>
            {% endif %}
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: color_code }) }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.enabled or not collector.token ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Security/Collector/icon.svg') }}</span>
        <strong>Security</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Security Token</h2>

    {% if collector.enabled %}
        {% if collector.token %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.user == 'anon.' ? 'Anonymous' : collector.user }}</span>
                    <span class=\"label\">Username</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.authenticated ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Authenticated</span>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th scope=\"col\" class=\"key\">Property</th>
                        <th scope=\"col\">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Roles</th>
                        <td>
                            {{ collector.roles is empty ? 'none' : profiler_dump(collector.roles, maxDepth=1) }}

                            {% if not collector.authenticated and collector.roles is empty %}
                                <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                            {% endif %}
                        </td>
                    </tr>

                    {% if collector.supportsRoleHierarchy %}
                    <tr>
                        <th>Inherited Roles</th>
                        <td>{{ collector.inheritedRoles is empty ? 'none' : profiler_dump(collector.inheritedRoles, maxDepth=1) }}</td>
                    </tr>
                    {% endif %}

                    {% if collector.token %}
                    <tr>
                        <th>Token</th>
                        <td>{{ profiler_dump(collector.token) }}</td>
                    </tr>
                    {% endif %}
                </tbody>
            </table>
        {% elseif collector.enabled %}
            <div class=\"empty\">
                <p>There is no security token.</p>
            </div>
        {% endif %}


        <h2>Security Firewall</h2>

        {% if collector.firewall %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.firewall.name }}</span>
                    <span class=\"label\">Name</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.security_enabled ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Security enabled</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.stateless ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Stateless</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.allows_anonymous ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Allows anonymous</span>
                </div>
            </div>

            {% if collector.firewall.security_enabled %}
                <h4>Configuration</h4>

                <table>
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">Key</th>
                            <th scope=\"col\">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>provider</th>
                            <td>{{ collector.firewall.provider ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>context</th>
                            <td>{{ collector.firewall.context ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>entry_point</th>
                            <td>{{ collector.firewall.entry_point ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>user_checker</th>
                            <td>{{ collector.firewall.user_checker ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>access_denied_handler</th>
                            <td>{{ collector.firewall.access_denied_handler ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>access_denied_url</th>
                            <td>{{ collector.firewall.access_denied_url ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>listeners</th>
                            <td>{{ collector.firewall.listeners is empty ? '(none)' : profiler_dump(collector.firewall.listeners, maxDepth=1) }}</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Listeners</h4>

                {% if collector.listeners|default([]) is empty %}
                    <div class=\"empty\">
                        <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                    </div>
                {% else %}
                    <table>
                        <thead>
                        <tr>
                            <th>Listener</th>
                            <th>Duration</th>
                            <th>Response</th>
                        </tr>
                        </thead>

                        {% set previous_event = (collector.listeners|first) %}
                        {% for listener in collector.listeners %}
                            {% if loop.first or listener != previous_event %}
                                {% if not loop.first %}
                                    </tbody>
                                {% endif %}

                                <tbody>
                                {% set previous_event = listener %}
                            {% endif %}

                            <tr>
                                <td class=\"font-normal\">{{ profiler_dump(listener.stub) }}</td>
                                <td class=\"no-wrap\">{{ '%0.2f'|format(listener.time * 1000) }} ms</td>
                                <td class=\"font-normal\">{{ listener.response ? profiler_dump(listener.response) : '(none)' }}</td>
                            </tr>

                            {% if loop.last %}
                                </tbody>
                            {% endif %}
                        {% endfor %}
                    </table>
                {% endif %}
            {% endif %}
        {% elseif collector.enabled %}
            <div class=\"empty\">
                <p>This request was not covered by any firewall.</p>
            </div>
        {% endif %}
    {% else %}
        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    {% endif %}

    {% if collector.voters|default([]) is not empty %}
        <h2>Security Voters <small>({{ collector.voters|length }})</small></h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.voterStrategy|default('unknown') }}</span>
                <span class=\"label\">Strategy</span>
            </div>
        </div>

        <table class=\"voters\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Voter class</th>
                </tr>
            </thead>

            <tbody>
                {% for voter in collector.voters %}
                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                        <td class=\"font-normal\">{{ profiler_dump(voter) }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if collector.accessDecisionLog|default([]) is not empty %}
        <h2>Access decision log</h2>

        <table class=\"decision-log\">
            <col style=\"width: 30px\">
            <col style=\"width: 120px\">
            <col style=\"width: 25%\">
            <col style=\"width: 60%\">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Result</th>
                    <th>Attributes</th>
                    <th>Object</th>
                </tr>
            </thead>

            <tbody>
                {% for decision in collector.accessDecisionLog %}
                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                        <td class=\"font-normal\">
                            {{ decision.result
                                ? '<span class=\"label status-success same-width\">GRANTED</span>'
                                : '<span class=\"label status-error same-width\">DENIED</span>'
                            }}
                        </td>
                        <td>
                            {% if decision.attributes|length == 1 %}
                                {{ decision.attributes|first }}
                            {% else %}
                                {{ profiler_dump(decision.attributes) }}
                            {% endif %}
                        </td>
                        <td>{{ profiler_dump(decision.seek('object')) }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "@Security/Collector/security.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/security-bundle/Resources/views/Collector/security.html.twig");
    }
}
