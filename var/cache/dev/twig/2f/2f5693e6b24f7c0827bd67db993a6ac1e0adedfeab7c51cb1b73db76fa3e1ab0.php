<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_d7b6e13858bb3e8d76b74b0f35e4afd5dfb2b06b6fa7ccac6c69866b84c53f3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_382f904c3684281be8e431f190b88df5d932a7088bf61a5aebab3398cdd2836c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382f904c3684281be8e431f190b88df5d932a7088bf61a5aebab3398cdd2836c->enter($__internal_382f904c3684281be8e431f190b88df5d932a7088bf61a5aebab3398cdd2836c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_a88abad40c936315564f90f292d665f1d835665cfd61c49c01da344bc0921fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88abad40c936315564f90f292d665f1d835665cfd61c49c01da344bc0921fc2->enter($__internal_a88abad40c936315564f90f292d665f1d835665cfd61c49c01da344bc0921fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('date_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('time_widget', $context, $blocks);
        // line 78
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 116
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 120
        echo "
";
        // line 121
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 140
        echo "
";
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('choice_label', $context, $blocks);
        // line 148
        echo "
";
        // line 149
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('radio_label', $context, $blocks);
        // line 156
        echo "
";
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('button_row', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('choice_row', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('date_row', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('time_row', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('datetime_row', $context, $blocks);
        
        $__internal_382f904c3684281be8e431f190b88df5d932a7088bf61a5aebab3398cdd2836c->leave($__internal_382f904c3684281be8e431f190b88df5d932a7088bf61a5aebab3398cdd2836c_prof);

        
        $__internal_a88abad40c936315564f90f292d665f1d835665cfd61c49c01da344bc0921fc2->leave($__internal_a88abad40c936315564f90f292d665f1d835665cfd61c49c01da344bc0921fc2_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_4341a3cf4b646f60943e31b1c14ab537d791ccadc08b6a0d159f60b98b7d4ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4341a3cf4b646f60943e31b1c14ab537d791ccadc08b6a0d159f60b98b7d4ad8->enter($__internal_4341a3cf4b646f60943e31b1c14ab537d791ccadc08b6a0d159f60b98b7d4ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_9472290fead66da38e5017f002c2e7f9699770c9f6850a99cf5f1d02bbbe1517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9472290fead66da38e5017f002c2e7f9699770c9f6850a99cf5f1d02bbbe1517->enter($__internal_9472290fead66da38e5017f002c2e7f9699770c9f6850a99cf5f1d02bbbe1517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 6, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_9472290fead66da38e5017f002c2e7f9699770c9f6850a99cf5f1d02bbbe1517->leave($__internal_9472290fead66da38e5017f002c2e7f9699770c9f6850a99cf5f1d02bbbe1517_prof);

        
        $__internal_4341a3cf4b646f60943e31b1c14ab537d791ccadc08b6a0d159f60b98b7d4ad8->leave($__internal_4341a3cf4b646f60943e31b1c14ab537d791ccadc08b6a0d159f60b98b7d4ad8_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_0214961c92a732a3cbb05d24b38ad22d2e0038b58e707a83bf5f66fab8746023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0214961c92a732a3cbb05d24b38ad22d2e0038b58e707a83bf5f66fab8746023->enter($__internal_0214961c92a732a3cbb05d24b38ad22d2e0038b58e707a83bf5f66fab8746023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_b59e5d1e10a92c29df1277050ea456ae5965dbecb9e18e34da4c3bb56365a9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59e5d1e10a92c29df1277050ea456ae5965dbecb9e18e34da4c3bb56365a9c2->enter($__internal_b59e5d1e10a92c29df1277050ea456ae5965dbecb9e18e34da4c3bb56365a9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        echo "<div class=\"input-group";
        echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter((isset($context["group_class"]) || array_key_exists("group_class", $context) ? $context["group_class"] : (function () { throw new Twig_Error_Runtime('Variable "group_class" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 12
        $context["append"] = (is_string($__internal_4e95428a5f3098fff64c1728b8499fe89052f24d57fc57090a12fd7677fbfde3 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 12, $this->getSourceContext()); })())) && is_string($__internal_c9ff4e14a5910d25ed4b769536ebc86f1359f81a4d78872449b9f819c0f9eba9 = "{{") && ('' === $__internal_c9ff4e14a5910d25ed4b769536ebc86f1359f81a4d78872449b9f819c0f9eba9 || 0 === strpos($__internal_4e95428a5f3098fff64c1728b8499fe89052f24d57fc57090a12fd7677fbfde3, $__internal_c9ff4e14a5910d25ed4b769536ebc86f1359f81a4d78872449b9f819c0f9eba9)));
        // line 13
        if ( !(isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new Twig_Error_Runtime('Variable "append" does not exist.', 13, $this->getSourceContext()); })())) {
            // line 14
            echo "<span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 14, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>";
        }
        // line 16
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 17
        if ((isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new Twig_Error_Runtime('Variable "append" does not exist.', 17, $this->getSourceContext()); })())) {
            // line 18
            echo "<span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 18, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>";
        }
        // line 20
        echo "</div>";
        
        $__internal_b59e5d1e10a92c29df1277050ea456ae5965dbecb9e18e34da4c3bb56365a9c2->leave($__internal_b59e5d1e10a92c29df1277050ea456ae5965dbecb9e18e34da4c3bb56365a9c2_prof);

        
        $__internal_0214961c92a732a3cbb05d24b38ad22d2e0038b58e707a83bf5f66fab8746023->leave($__internal_0214961c92a732a3cbb05d24b38ad22d2e0038b58e707a83bf5f66fab8746023_prof);

    }

    // line 23
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_761ade73c98502cb7e6361b2840b47cb8129fbaafd2955cd912aa95ba75bb648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_761ade73c98502cb7e6361b2840b47cb8129fbaafd2955cd912aa95ba75bb648->enter($__internal_761ade73c98502cb7e6361b2840b47cb8129fbaafd2955cd912aa95ba75bb648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_c557801fd5ad5f201d8405fb3f5f08d4323139750e7b7797c3373eeb2f6acdef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c557801fd5ad5f201d8405fb3f5f08d4323139750e7b7797c3373eeb2f6acdef->enter($__internal_c557801fd5ad5f201d8405fb3f5f08d4323139750e7b7797c3373eeb2f6acdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 24
        echo "<div class=\"input-group\">";
        // line 25
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 26
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_c557801fd5ad5f201d8405fb3f5f08d4323139750e7b7797c3373eeb2f6acdef->leave($__internal_c557801fd5ad5f201d8405fb3f5f08d4323139750e7b7797c3373eeb2f6acdef_prof);

        
        $__internal_761ade73c98502cb7e6361b2840b47cb8129fbaafd2955cd912aa95ba75bb648->leave($__internal_761ade73c98502cb7e6361b2840b47cb8129fbaafd2955cd912aa95ba75bb648_prof);

    }

    // line 30
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_7c6f963560fbca068083cbc866aaa5da8a1e2561c7edc33fc8a0ccb85f345da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6f963560fbca068083cbc866aaa5da8a1e2561c7edc33fc8a0ccb85f345da5->enter($__internal_7c6f963560fbca068083cbc866aaa5da8a1e2561c7edc33fc8a0ccb85f345da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_f5c8c96e7baaf821e763d2eae3c0ea711d794a1aa87e4051da61a09adb849e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c8c96e7baaf821e763d2eae3c0ea711d794a1aa87e4051da61a09adb849e28->enter($__internal_f5c8c96e7baaf821e763d2eae3c0ea711d794a1aa87e4051da61a09adb849e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 31
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 31, $this->getSourceContext()); })()) == "single_text")) {
            // line 32
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 34
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 34, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 35
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "date", array()), 'widget', array("datetime" => true));
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "time", array()), 'widget', array("datetime" => true));
            // line 40
            echo "</div>";
        }
        
        $__internal_f5c8c96e7baaf821e763d2eae3c0ea711d794a1aa87e4051da61a09adb849e28->leave($__internal_f5c8c96e7baaf821e763d2eae3c0ea711d794a1aa87e4051da61a09adb849e28_prof);

        
        $__internal_7c6f963560fbca068083cbc866aaa5da8a1e2561c7edc33fc8a0ccb85f345da5->leave($__internal_7c6f963560fbca068083cbc866aaa5da8a1e2561c7edc33fc8a0ccb85f345da5_prof);

    }

    // line 44
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_323695570632a25046d103b9e6f9d93f3bf37546cd8bfeba81422588d1b73c91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323695570632a25046d103b9e6f9d93f3bf37546cd8bfeba81422588d1b73c91->enter($__internal_323695570632a25046d103b9e6f9d93f3bf37546cd8bfeba81422588d1b73c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d7e60a5faecbb2b5bd995c94683cbaf94f39541f063d617a7554bd4ea495d90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e60a5faecbb2b5bd995c94683cbaf94f39541f063d617a7554bd4ea495d90d->enter($__internal_d7e60a5faecbb2b5bd995c94683cbaf94f39541f063d617a7554bd4ea495d90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 45
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 45, $this->getSourceContext()); })()) == "single_text")) {
            // line 46
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 48
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 49
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 49, $this->getSourceContext()); })()))) {
                // line 50
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 52
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 52, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 53
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 54
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 55
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 57
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 57, $this->getSourceContext()); })()))) {
                // line 58
                echo "</div>";
            }
        }
        
        $__internal_d7e60a5faecbb2b5bd995c94683cbaf94f39541f063d617a7554bd4ea495d90d->leave($__internal_d7e60a5faecbb2b5bd995c94683cbaf94f39541f063d617a7554bd4ea495d90d_prof);

        
        $__internal_323695570632a25046d103b9e6f9d93f3bf37546cd8bfeba81422588d1b73c91->leave($__internal_323695570632a25046d103b9e6f9d93f3bf37546cd8bfeba81422588d1b73c91_prof);

    }

    // line 63
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_eee6cbc3eabc429826f0e4bfdc6081318c06d6f2c005598a372767fb67bd8283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eee6cbc3eabc429826f0e4bfdc6081318c06d6f2c005598a372767fb67bd8283->enter($__internal_eee6cbc3eabc429826f0e4bfdc6081318c06d6f2c005598a372767fb67bd8283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_8ea0cf71d2bfd9d0c4743e54e21aeff12a8d560a3eecd434d924a1bf2006d966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea0cf71d2bfd9d0c4743e54e21aeff12a8d560a3eecd434d924a1bf2006d966->enter($__internal_8ea0cf71d2bfd9d0c4743e54e21aeff12a8d560a3eecd434d924a1bf2006d966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 64
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 64, $this->getSourceContext()); })()) == "single_text")) {
            // line 65
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 67
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 67, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 68
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 68, $this->getSourceContext()); })())))) {
                // line 69
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->getSourceContext()); })()), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 71, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->getSourceContext()); })()), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 71, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->getSourceContext()); })()), "second", array()), 'widget');
            }
            // line 72
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 72, $this->getSourceContext()); })())))) {
                // line 73
                echo "</div>";
            }
        }
        
        $__internal_8ea0cf71d2bfd9d0c4743e54e21aeff12a8d560a3eecd434d924a1bf2006d966->leave($__internal_8ea0cf71d2bfd9d0c4743e54e21aeff12a8d560a3eecd434d924a1bf2006d966_prof);

        
        $__internal_eee6cbc3eabc429826f0e4bfdc6081318c06d6f2c005598a372767fb67bd8283->leave($__internal_eee6cbc3eabc429826f0e4bfdc6081318c06d6f2c005598a372767fb67bd8283_prof);

    }

    // line 78
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_0f41f1cc0a15fede607885efcd73c48275cf1a4f26101a6828ef4c6812121f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f41f1cc0a15fede607885efcd73c48275cf1a4f26101a6828ef4c6812121f2d->enter($__internal_0f41f1cc0a15fede607885efcd73c48275cf1a4f26101a6828ef4c6812121f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_392c8e97660365e3618b1a9ac07baf335cca0e16244d06f3ac3b987df3dd9b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392c8e97660365e3618b1a9ac07baf335cca0e16244d06f3ac3b987df3dd9b9a->enter($__internal_392c8e97660365e3618b1a9ac07baf335cca0e16244d06f3ac3b987df3dd9b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 79
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 79, $this->getSourceContext()); })()) == "single_text")) {
            // line 80
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 82
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 82, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 83
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->getSourceContext()); })()), 'errors');
            // line 85
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 86
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 86, $this->getSourceContext()); })()), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 89
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 89, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 90
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 90, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 91
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 91, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 92
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 92, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 92, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 93
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 93, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 94
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 94, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 95
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 95, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 96
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 100
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 100, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 101
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 101, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 102
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 102, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 103
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 103, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 104
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 104, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 104, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 105
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 105, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 105, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 106
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 106, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 107
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 111
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 111, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 111, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 112
            echo "</div>";
        }
        
        $__internal_392c8e97660365e3618b1a9ac07baf335cca0e16244d06f3ac3b987df3dd9b9a->leave($__internal_392c8e97660365e3618b1a9ac07baf335cca0e16244d06f3ac3b987df3dd9b9a_prof);

        
        $__internal_0f41f1cc0a15fede607885efcd73c48275cf1a4f26101a6828ef4c6812121f2d->leave($__internal_0f41f1cc0a15fede607885efcd73c48275cf1a4f26101a6828ef4c6812121f2d_prof);

    }

    // line 116
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_5ab4db872f6685b2846588d7f0c1e4814719a917ba71ad54d5661171e6e623eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab4db872f6685b2846588d7f0c1e4814719a917ba71ad54d5661171e6e623eb->enter($__internal_5ab4db872f6685b2846588d7f0c1e4814719a917ba71ad54d5661171e6e623eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1b33e640ad0535ff9bfd913962eb8b8f58ba4039099522b13d2bc3d5adc786df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b33e640ad0535ff9bfd913962eb8b8f58ba4039099522b13d2bc3d5adc786df->enter($__internal_1b33e640ad0535ff9bfd913962eb8b8f58ba4039099522b13d2bc3d5adc786df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 117
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 117, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 118
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_1b33e640ad0535ff9bfd913962eb8b8f58ba4039099522b13d2bc3d5adc786df->leave($__internal_1b33e640ad0535ff9bfd913962eb8b8f58ba4039099522b13d2bc3d5adc786df_prof);

        
        $__internal_5ab4db872f6685b2846588d7f0c1e4814719a917ba71ad54d5661171e6e623eb->leave($__internal_5ab4db872f6685b2846588d7f0c1e4814719a917ba71ad54d5661171e6e623eb_prof);

    }

    // line 121
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_ba91495469618c8ea1ecae833c9df1e48933cf6057845d829e31168babcbb103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba91495469618c8ea1ecae833c9df1e48933cf6057845d829e31168babcbb103->enter($__internal_ba91495469618c8ea1ecae833c9df1e48933cf6057845d829e31168babcbb103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_3a1293d2e61fc2d17759add762b120a6c22bec86500adf4c41f979a0ff2682bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1293d2e61fc2d17759add762b120a6c22bec86500adf4c41f979a0ff2682bf->enter($__internal_3a1293d2e61fc2d17759add762b120a6c22bec86500adf4c41f979a0ff2682bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 122
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 124
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 125
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 126
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 126, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 130
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 131, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 132
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 133
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 134
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 134, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "</div>";
        }
        
        $__internal_3a1293d2e61fc2d17759add762b120a6c22bec86500adf4c41f979a0ff2682bf->leave($__internal_3a1293d2e61fc2d17759add762b120a6c22bec86500adf4c41f979a0ff2682bf_prof);

        
        $__internal_ba91495469618c8ea1ecae833c9df1e48933cf6057845d829e31168babcbb103->leave($__internal_ba91495469618c8ea1ecae833c9df1e48933cf6057845d829e31168babcbb103_prof);

    }

    // line 143
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_d6c81531765e7ac5a27bce72253baa19e1ba4945f48b2af921aa3e6e0f5db4a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c81531765e7ac5a27bce72253baa19e1ba4945f48b2af921aa3e6e0f5db4a0->enter($__internal_d6c81531765e7ac5a27bce72253baa19e1ba4945f48b2af921aa3e6e0f5db4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_d2d118aba3cf8a63f43865d37b182d9356055ae6bcfe7b922be858d63293cb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d118aba3cf8a63f43865d37b182d9356055ae6bcfe7b922be858d63293cb43->enter($__internal_d2d118aba3cf8a63f43865d37b182d9356055ae6bcfe7b922be858d63293cb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 145
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 145, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 146
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_d2d118aba3cf8a63f43865d37b182d9356055ae6bcfe7b922be858d63293cb43->leave($__internal_d2d118aba3cf8a63f43865d37b182d9356055ae6bcfe7b922be858d63293cb43_prof);

        
        $__internal_d6c81531765e7ac5a27bce72253baa19e1ba4945f48b2af921aa3e6e0f5db4a0->leave($__internal_d6c81531765e7ac5a27bce72253baa19e1ba4945f48b2af921aa3e6e0f5db4a0_prof);

    }

    // line 149
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_d76eb6b781639ca4e8c82b8c91a32780c0d77f24444207da9e1f35cd9a826309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d76eb6b781639ca4e8c82b8c91a32780c0d77f24444207da9e1f35cd9a826309->enter($__internal_d76eb6b781639ca4e8c82b8c91a32780c0d77f24444207da9e1f35cd9a826309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_4392a941b61f01ae63f52f16d34f505635245dbae61d7e44a5f88d22e74e5ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4392a941b61f01ae63f52f16d34f505635245dbae61d7e44a5f88d22e74e5ad2->enter($__internal_4392a941b61f01ae63f52f16d34f505635245dbae61d7e44a5f88d22e74e5ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 150
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_4392a941b61f01ae63f52f16d34f505635245dbae61d7e44a5f88d22e74e5ad2->leave($__internal_4392a941b61f01ae63f52f16d34f505635245dbae61d7e44a5f88d22e74e5ad2_prof);

        
        $__internal_d76eb6b781639ca4e8c82b8c91a32780c0d77f24444207da9e1f35cd9a826309->leave($__internal_d76eb6b781639ca4e8c82b8c91a32780c0d77f24444207da9e1f35cd9a826309_prof);

    }

    // line 153
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_f00f5c376b319f9e25b41d9d569f3a3036a9d8ed24cdf4d7eb7cb326d780a808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00f5c376b319f9e25b41d9d569f3a3036a9d8ed24cdf4d7eb7cb326d780a808->enter($__internal_f00f5c376b319f9e25b41d9d569f3a3036a9d8ed24cdf4d7eb7cb326d780a808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_d24eff4088657e09526325fb24bc3992b95e100c2a2d6edd348114931d8e1f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24eff4088657e09526325fb24bc3992b95e100c2a2d6edd348114931d8e1f91->enter($__internal_d24eff4088657e09526325fb24bc3992b95e100c2a2d6edd348114931d8e1f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 154
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d24eff4088657e09526325fb24bc3992b95e100c2a2d6edd348114931d8e1f91->leave($__internal_d24eff4088657e09526325fb24bc3992b95e100c2a2d6edd348114931d8e1f91_prof);

        
        $__internal_f00f5c376b319f9e25b41d9d569f3a3036a9d8ed24cdf4d7eb7cb326d780a808->leave($__internal_f00f5c376b319f9e25b41d9d569f3a3036a9d8ed24cdf4d7eb7cb326d780a808_prof);

    }

    // line 159
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_6d1df47d9e4c0bf14cb92f5a00c0992f5d6d4cf5ac967134c53d0bf20b2a4911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d1df47d9e4c0bf14cb92f5a00c0992f5d6d4cf5ac967134c53d0bf20b2a4911->enter($__internal_6d1df47d9e4c0bf14cb92f5a00c0992f5d6d4cf5ac967134c53d0bf20b2a4911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_072128156d91c47fa31d514421a891e9586766aa57db4e0b892ff28fbbd5a423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072128156d91c47fa31d514421a891e9586766aa57db4e0b892ff28fbbd5a423->enter($__internal_072128156d91c47fa31d514421a891e9586766aa57db4e0b892ff28fbbd5a423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 160
        echo "<div class=\"form-group\">";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 161, $this->getSourceContext()); })()), 'widget');
        // line 162
        echo "</div>";
        
        $__internal_072128156d91c47fa31d514421a891e9586766aa57db4e0b892ff28fbbd5a423->leave($__internal_072128156d91c47fa31d514421a891e9586766aa57db4e0b892ff28fbbd5a423_prof);

        
        $__internal_6d1df47d9e4c0bf14cb92f5a00c0992f5d6d4cf5ac967134c53d0bf20b2a4911->leave($__internal_6d1df47d9e4c0bf14cb92f5a00c0992f5d6d4cf5ac967134c53d0bf20b2a4911_prof);

    }

    // line 165
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_5e2a310c63158e855c9ac8be8f85468922c2f26b6968700ab4d5936f8979c48c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e2a310c63158e855c9ac8be8f85468922c2f26b6968700ab4d5936f8979c48c->enter($__internal_5e2a310c63158e855c9ac8be8f85468922c2f26b6968700ab4d5936f8979c48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_488987763c161ebe839dc498792ec0ff362376d4fe567a143bae1099f7504268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488987763c161ebe839dc498792ec0ff362376d4fe567a143bae1099f7504268->enter($__internal_488987763c161ebe839dc498792ec0ff362376d4fe567a143bae1099f7504268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 166
        $context["force_error"] = true;
        // line 167
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_488987763c161ebe839dc498792ec0ff362376d4fe567a143bae1099f7504268->leave($__internal_488987763c161ebe839dc498792ec0ff362376d4fe567a143bae1099f7504268_prof);

        
        $__internal_5e2a310c63158e855c9ac8be8f85468922c2f26b6968700ab4d5936f8979c48c->leave($__internal_5e2a310c63158e855c9ac8be8f85468922c2f26b6968700ab4d5936f8979c48c_prof);

    }

    // line 170
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_f2147ffff16212861105f2aee2b250755c8818d4bd90da0e2bd9433b703eb46e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2147ffff16212861105f2aee2b250755c8818d4bd90da0e2bd9433b703eb46e->enter($__internal_f2147ffff16212861105f2aee2b250755c8818d4bd90da0e2bd9433b703eb46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_4baa8449e84f39f5fafa9d1fbe6967dbe14ef06f5782aafe805ecf3b2ccef981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4baa8449e84f39f5fafa9d1fbe6967dbe14ef06f5782aafe805ecf3b2ccef981->enter($__internal_4baa8449e84f39f5fafa9d1fbe6967dbe14ef06f5782aafe805ecf3b2ccef981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4baa8449e84f39f5fafa9d1fbe6967dbe14ef06f5782aafe805ecf3b2ccef981->leave($__internal_4baa8449e84f39f5fafa9d1fbe6967dbe14ef06f5782aafe805ecf3b2ccef981_prof);

        
        $__internal_f2147ffff16212861105f2aee2b250755c8818d4bd90da0e2bd9433b703eb46e->leave($__internal_f2147ffff16212861105f2aee2b250755c8818d4bd90da0e2bd9433b703eb46e_prof);

    }

    // line 175
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_66a1777e8d2f50dcdea5dba19df9c2e987aaec191251b26df287db35ab3d9d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a1777e8d2f50dcdea5dba19df9c2e987aaec191251b26df287db35ab3d9d74->enter($__internal_66a1777e8d2f50dcdea5dba19df9c2e987aaec191251b26df287db35ab3d9d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_98de3bbdd0bea86dc9adee6d0d2ba8318bff83d41ebc3db0fdf3230907df7fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98de3bbdd0bea86dc9adee6d0d2ba8318bff83d41ebc3db0fdf3230907df7fd7->enter($__internal_98de3bbdd0bea86dc9adee6d0d2ba8318bff83d41ebc3db0fdf3230907df7fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_98de3bbdd0bea86dc9adee6d0d2ba8318bff83d41ebc3db0fdf3230907df7fd7->leave($__internal_98de3bbdd0bea86dc9adee6d0d2ba8318bff83d41ebc3db0fdf3230907df7fd7_prof);

        
        $__internal_66a1777e8d2f50dcdea5dba19df9c2e987aaec191251b26df287db35ab3d9d74->leave($__internal_66a1777e8d2f50dcdea5dba19df9c2e987aaec191251b26df287db35ab3d9d74_prof);

    }

    // line 180
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_20a5a46d856e0cdb7cbd885bd4421743f61339255d13836dbcc16b21debe9a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a5a46d856e0cdb7cbd885bd4421743f61339255d13836dbcc16b21debe9a46->enter($__internal_20a5a46d856e0cdb7cbd885bd4421743f61339255d13836dbcc16b21debe9a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e2b0efe7a604c73254f75080cc5d6c991aca66d9b0c490cdff738d7b03cc9e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b0efe7a604c73254f75080cc5d6c991aca66d9b0c490cdff738d7b03cc9e21->enter($__internal_e2b0efe7a604c73254f75080cc5d6c991aca66d9b0c490cdff738d7b03cc9e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e2b0efe7a604c73254f75080cc5d6c991aca66d9b0c490cdff738d7b03cc9e21->leave($__internal_e2b0efe7a604c73254f75080cc5d6c991aca66d9b0c490cdff738d7b03cc9e21_prof);

        
        $__internal_20a5a46d856e0cdb7cbd885bd4421743f61339255d13836dbcc16b21debe9a46->leave($__internal_20a5a46d856e0cdb7cbd885bd4421743f61339255d13836dbcc16b21debe9a46_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  731 => 182,  729 => 181,  720 => 180,  710 => 177,  708 => 176,  699 => 175,  689 => 172,  687 => 171,  678 => 170,  668 => 167,  666 => 166,  657 => 165,  647 => 162,  645 => 161,  643 => 160,  634 => 159,  624 => 154,  615 => 153,  605 => 150,  596 => 149,  586 => 146,  584 => 145,  575 => 143,  564 => 137,  558 => 134,  557 => 133,  556 => 132,  552 => 131,  548 => 130,  541 => 126,  540 => 125,  539 => 124,  535 => 123,  533 => 122,  524 => 121,  514 => 118,  512 => 117,  503 => 116,  492 => 112,  488 => 111,  483 => 107,  477 => 106,  471 => 105,  465 => 104,  459 => 103,  453 => 102,  447 => 101,  441 => 100,  436 => 96,  430 => 95,  424 => 94,  418 => 93,  412 => 92,  406 => 91,  400 => 90,  394 => 89,  389 => 86,  386 => 85,  384 => 84,  380 => 83,  378 => 82,  375 => 80,  373 => 79,  364 => 78,  352 => 73,  350 => 72,  340 => 71,  335 => 69,  333 => 68,  331 => 67,  328 => 65,  326 => 64,  317 => 63,  305 => 58,  303 => 57,  301 => 55,  300 => 54,  299 => 53,  298 => 52,  293 => 50,  291 => 49,  289 => 48,  286 => 46,  284 => 45,  275 => 44,  264 => 40,  262 => 39,  260 => 38,  258 => 37,  256 => 36,  252 => 35,  250 => 34,  247 => 32,  245 => 31,  236 => 30,  225 => 26,  223 => 25,  221 => 24,  212 => 23,  202 => 20,  197 => 18,  195 => 17,  193 => 16,  188 => 14,  186 => 13,  184 => 12,  180 => 11,  171 => 10,  161 => 7,  159 => 6,  150 => 5,  140 => 180,  137 => 179,  135 => 175,  132 => 174,  130 => 170,  127 => 169,  125 => 165,  122 => 164,  120 => 159,  117 => 158,  114 => 156,  112 => 153,  109 => 152,  107 => 149,  104 => 148,  102 => 143,  99 => 142,  96 => 140,  94 => 121,  91 => 120,  89 => 116,  87 => 78,  85 => 63,  82 => 62,  80 => 44,  77 => 43,  75 => 30,  72 => 29,  70 => 23,  67 => 22,  65 => 10,  62 => 9,  60 => 5,  57 => 4,  54 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block money_widget -%}
    <div class=\"input-group{{ group_class|default('') }}\">
        {%- set append = money_pattern starts with '{{' -%}
        {%- if not append -%}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {%- endif -%}
        {{- block('form_widget_simple') -}}
        {%- if append -%}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {%- endif -%}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {%- if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {%- if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {{- parent() -}}
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {%- if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {%- endfor -%}
        </div>
    {%- endif -%}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{# Rows #}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock choice_row %}

{% block date_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock date_row %}

{% block time_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock time_row %}

{% block datetime_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock datetime_row %}
", "bootstrap_base_layout.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_base_layout.html.twig");
    }
}
