<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_19022d2f4244e772afcc78094da57f62ce29c2fb65feb4583f62e1da4ccf0d75 extends Twig_Template
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
        $__internal_9a978862e38f38f045e6e21bed0cb3012f8d30dbec18debac03a4685ae923c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a978862e38f38f045e6e21bed0cb3012f8d30dbec18debac03a4685ae923c41->enter($__internal_9a978862e38f38f045e6e21bed0cb3012f8d30dbec18debac03a4685ae923c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_8d79f83f7b34135e46d073f008e9148dbc141b553036a675204668b0f1eb9ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d79f83f7b34135e46d073f008e9148dbc141b553036a675204668b0f1eb9ef1->enter($__internal_8d79f83f7b34135e46d073f008e9148dbc141b553036a675204668b0f1eb9ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

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
        
        $__internal_9a978862e38f38f045e6e21bed0cb3012f8d30dbec18debac03a4685ae923c41->leave($__internal_9a978862e38f38f045e6e21bed0cb3012f8d30dbec18debac03a4685ae923c41_prof);

        
        $__internal_8d79f83f7b34135e46d073f008e9148dbc141b553036a675204668b0f1eb9ef1->leave($__internal_8d79f83f7b34135e46d073f008e9148dbc141b553036a675204668b0f1eb9ef1_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_00c283af5c2784ec593cbf7d60a4f2eddbcc05b373d4c9381b2b75382d5aebf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00c283af5c2784ec593cbf7d60a4f2eddbcc05b373d4c9381b2b75382d5aebf7->enter($__internal_00c283af5c2784ec593cbf7d60a4f2eddbcc05b373d4c9381b2b75382d5aebf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_5c8c8205df6a31da4d29e45cd2ad69df7b8038fd59025c0d1999bf22181052af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8c8205df6a31da4d29e45cd2ad69df7b8038fd59025c0d1999bf22181052af->enter($__internal_5c8c8205df6a31da4d29e45cd2ad69df7b8038fd59025c0d1999bf22181052af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 6, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_5c8c8205df6a31da4d29e45cd2ad69df7b8038fd59025c0d1999bf22181052af->leave($__internal_5c8c8205df6a31da4d29e45cd2ad69df7b8038fd59025c0d1999bf22181052af_prof);

        
        $__internal_00c283af5c2784ec593cbf7d60a4f2eddbcc05b373d4c9381b2b75382d5aebf7->leave($__internal_00c283af5c2784ec593cbf7d60a4f2eddbcc05b373d4c9381b2b75382d5aebf7_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_3ccf69ba60531e27a34d0171ca4e1ee7c360b80158f4603e1b4e025850293a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ccf69ba60531e27a34d0171ca4e1ee7c360b80158f4603e1b4e025850293a1c->enter($__internal_3ccf69ba60531e27a34d0171ca4e1ee7c360b80158f4603e1b4e025850293a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_7a2737542de32b88cd9de6d94f1b578ce7d2856fd26e60f290c1ba6663e0116d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2737542de32b88cd9de6d94f1b578ce7d2856fd26e60f290c1ba6663e0116d->enter($__internal_7a2737542de32b88cd9de6d94f1b578ce7d2856fd26e60f290c1ba6663e0116d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        echo "<div class=\"input-group";
        echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter((isset($context["group_class"]) || array_key_exists("group_class", $context) ? $context["group_class"] : (function () { throw new Twig_Error_Runtime('Variable "group_class" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 12
        $context["append"] = (is_string($__internal_472c2386dc7739f912e4c86c8e54d4f9d03fd38f6343b781e2aee09890fb2202 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 12, $this->getSourceContext()); })())) && is_string($__internal_39d8820f75781c6c2bcb5ed494b939534253cebbcac6510582941439e7186e27 = "{{") && ('' === $__internal_39d8820f75781c6c2bcb5ed494b939534253cebbcac6510582941439e7186e27 || 0 === strpos($__internal_472c2386dc7739f912e4c86c8e54d4f9d03fd38f6343b781e2aee09890fb2202, $__internal_39d8820f75781c6c2bcb5ed494b939534253cebbcac6510582941439e7186e27)));
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
        
        $__internal_7a2737542de32b88cd9de6d94f1b578ce7d2856fd26e60f290c1ba6663e0116d->leave($__internal_7a2737542de32b88cd9de6d94f1b578ce7d2856fd26e60f290c1ba6663e0116d_prof);

        
        $__internal_3ccf69ba60531e27a34d0171ca4e1ee7c360b80158f4603e1b4e025850293a1c->leave($__internal_3ccf69ba60531e27a34d0171ca4e1ee7c360b80158f4603e1b4e025850293a1c_prof);

    }

    // line 23
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_dd55c268ec28191670343f7534f06ba9111fa95ee8f620550c32faca16d1146a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd55c268ec28191670343f7534f06ba9111fa95ee8f620550c32faca16d1146a->enter($__internal_dd55c268ec28191670343f7534f06ba9111fa95ee8f620550c32faca16d1146a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_a3a1b474e60de96f5ff5d7fc9c26cdb96bd6e2f6e4d256740ba0c37330f26ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a1b474e60de96f5ff5d7fc9c26cdb96bd6e2f6e4d256740ba0c37330f26ef0->enter($__internal_a3a1b474e60de96f5ff5d7fc9c26cdb96bd6e2f6e4d256740ba0c37330f26ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 24
        echo "<div class=\"input-group\">";
        // line 25
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 26
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_a3a1b474e60de96f5ff5d7fc9c26cdb96bd6e2f6e4d256740ba0c37330f26ef0->leave($__internal_a3a1b474e60de96f5ff5d7fc9c26cdb96bd6e2f6e4d256740ba0c37330f26ef0_prof);

        
        $__internal_dd55c268ec28191670343f7534f06ba9111fa95ee8f620550c32faca16d1146a->leave($__internal_dd55c268ec28191670343f7534f06ba9111fa95ee8f620550c32faca16d1146a_prof);

    }

    // line 30
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_309444a5311f2a67ac6abadd0c50ed8b0db3a74e802c05e15b103559a8b13a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309444a5311f2a67ac6abadd0c50ed8b0db3a74e802c05e15b103559a8b13a99->enter($__internal_309444a5311f2a67ac6abadd0c50ed8b0db3a74e802c05e15b103559a8b13a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_ef83b8c3570fd249361b053305e1d8d12f7c3d01c08669dcf7d21f67e05bda6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef83b8c3570fd249361b053305e1d8d12f7c3d01c08669dcf7d21f67e05bda6e->enter($__internal_ef83b8c3570fd249361b053305e1d8d12f7c3d01c08669dcf7d21f67e05bda6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_ef83b8c3570fd249361b053305e1d8d12f7c3d01c08669dcf7d21f67e05bda6e->leave($__internal_ef83b8c3570fd249361b053305e1d8d12f7c3d01c08669dcf7d21f67e05bda6e_prof);

        
        $__internal_309444a5311f2a67ac6abadd0c50ed8b0db3a74e802c05e15b103559a8b13a99->leave($__internal_309444a5311f2a67ac6abadd0c50ed8b0db3a74e802c05e15b103559a8b13a99_prof);

    }

    // line 44
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_78afedfcb93727b0ff6459574c0b252729546ad77daf0b1e3e3a97cec9b154f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78afedfcb93727b0ff6459574c0b252729546ad77daf0b1e3e3a97cec9b154f3->enter($__internal_78afedfcb93727b0ff6459574c0b252729546ad77daf0b1e3e3a97cec9b154f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_28512af23f17a588f5c851a33918b673446089376190801c9f471e0d1b5a299b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28512af23f17a588f5c851a33918b673446089376190801c9f471e0d1b5a299b->enter($__internal_28512af23f17a588f5c851a33918b673446089376190801c9f471e0d1b5a299b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_28512af23f17a588f5c851a33918b673446089376190801c9f471e0d1b5a299b->leave($__internal_28512af23f17a588f5c851a33918b673446089376190801c9f471e0d1b5a299b_prof);

        
        $__internal_78afedfcb93727b0ff6459574c0b252729546ad77daf0b1e3e3a97cec9b154f3->leave($__internal_78afedfcb93727b0ff6459574c0b252729546ad77daf0b1e3e3a97cec9b154f3_prof);

    }

    // line 63
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_81afa8faf05d2fa89b5768d7245660a1b2779e878c19e56cd336e2dea2c2ad2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81afa8faf05d2fa89b5768d7245660a1b2779e878c19e56cd336e2dea2c2ad2e->enter($__internal_81afa8faf05d2fa89b5768d7245660a1b2779e878c19e56cd336e2dea2c2ad2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_f379992c96729816a531d72187666097a20354f09ea21f0aa19f3dcbbcb28d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f379992c96729816a531d72187666097a20354f09ea21f0aa19f3dcbbcb28d44->enter($__internal_f379992c96729816a531d72187666097a20354f09ea21f0aa19f3dcbbcb28d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_f379992c96729816a531d72187666097a20354f09ea21f0aa19f3dcbbcb28d44->leave($__internal_f379992c96729816a531d72187666097a20354f09ea21f0aa19f3dcbbcb28d44_prof);

        
        $__internal_81afa8faf05d2fa89b5768d7245660a1b2779e878c19e56cd336e2dea2c2ad2e->leave($__internal_81afa8faf05d2fa89b5768d7245660a1b2779e878c19e56cd336e2dea2c2ad2e_prof);

    }

    // line 78
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_e6abe6b3c6a575091d49948e68aaaece72c2186a69dd38f3e47c7c09ebfed4ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6abe6b3c6a575091d49948e68aaaece72c2186a69dd38f3e47c7c09ebfed4ca->enter($__internal_e6abe6b3c6a575091d49948e68aaaece72c2186a69dd38f3e47c7c09ebfed4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_b4cb1cdd5e99373cad4a803158957070c86bf6d2edc0b8be549a7554331921b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4cb1cdd5e99373cad4a803158957070c86bf6d2edc0b8be549a7554331921b2->enter($__internal_b4cb1cdd5e99373cad4a803158957070c86bf6d2edc0b8be549a7554331921b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_b4cb1cdd5e99373cad4a803158957070c86bf6d2edc0b8be549a7554331921b2->leave($__internal_b4cb1cdd5e99373cad4a803158957070c86bf6d2edc0b8be549a7554331921b2_prof);

        
        $__internal_e6abe6b3c6a575091d49948e68aaaece72c2186a69dd38f3e47c7c09ebfed4ca->leave($__internal_e6abe6b3c6a575091d49948e68aaaece72c2186a69dd38f3e47c7c09ebfed4ca_prof);

    }

    // line 116
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_c39b319ef712aa11cd3cbe16c99e08dcc49fc5d34396fb2afc9f0ed701cddaa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c39b319ef712aa11cd3cbe16c99e08dcc49fc5d34396fb2afc9f0ed701cddaa8->enter($__internal_c39b319ef712aa11cd3cbe16c99e08dcc49fc5d34396fb2afc9f0ed701cddaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_95739675e20e9fe28c2bd1acb2623a07f898ff0dd57c1f6fdaf07c23e5051adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95739675e20e9fe28c2bd1acb2623a07f898ff0dd57c1f6fdaf07c23e5051adc->enter($__internal_95739675e20e9fe28c2bd1acb2623a07f898ff0dd57c1f6fdaf07c23e5051adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 117
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 117, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 118
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_95739675e20e9fe28c2bd1acb2623a07f898ff0dd57c1f6fdaf07c23e5051adc->leave($__internal_95739675e20e9fe28c2bd1acb2623a07f898ff0dd57c1f6fdaf07c23e5051adc_prof);

        
        $__internal_c39b319ef712aa11cd3cbe16c99e08dcc49fc5d34396fb2afc9f0ed701cddaa8->leave($__internal_c39b319ef712aa11cd3cbe16c99e08dcc49fc5d34396fb2afc9f0ed701cddaa8_prof);

    }

    // line 121
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_745a54f89a7304a0540a508710948cec5b0a874d0f2c8336e9c3792d41debc44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_745a54f89a7304a0540a508710948cec5b0a874d0f2c8336e9c3792d41debc44->enter($__internal_745a54f89a7304a0540a508710948cec5b0a874d0f2c8336e9c3792d41debc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_c2957bddadd40faa960ce928fba2a032762ed08a10027e585492fa2906a333ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2957bddadd40faa960ce928fba2a032762ed08a10027e585492fa2906a333ff->enter($__internal_c2957bddadd40faa960ce928fba2a032762ed08a10027e585492fa2906a333ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_c2957bddadd40faa960ce928fba2a032762ed08a10027e585492fa2906a333ff->leave($__internal_c2957bddadd40faa960ce928fba2a032762ed08a10027e585492fa2906a333ff_prof);

        
        $__internal_745a54f89a7304a0540a508710948cec5b0a874d0f2c8336e9c3792d41debc44->leave($__internal_745a54f89a7304a0540a508710948cec5b0a874d0f2c8336e9c3792d41debc44_prof);

    }

    // line 143
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_a129770d165d1fe0b834e542836d5c4832d092eaceadeef284177f84df9391a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a129770d165d1fe0b834e542836d5c4832d092eaceadeef284177f84df9391a7->enter($__internal_a129770d165d1fe0b834e542836d5c4832d092eaceadeef284177f84df9391a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_45d6727b26c3ab53cb02785c57b7516b6ace4d1be789c8809f98a05f2b03be6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d6727b26c3ab53cb02785c57b7516b6ace4d1be789c8809f98a05f2b03be6d->enter($__internal_45d6727b26c3ab53cb02785c57b7516b6ace4d1be789c8809f98a05f2b03be6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 145
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 145, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 146
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_45d6727b26c3ab53cb02785c57b7516b6ace4d1be789c8809f98a05f2b03be6d->leave($__internal_45d6727b26c3ab53cb02785c57b7516b6ace4d1be789c8809f98a05f2b03be6d_prof);

        
        $__internal_a129770d165d1fe0b834e542836d5c4832d092eaceadeef284177f84df9391a7->leave($__internal_a129770d165d1fe0b834e542836d5c4832d092eaceadeef284177f84df9391a7_prof);

    }

    // line 149
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_399197236a5c3cd6d3bfd832e19d564c835cf174639554440c5521a2364053dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399197236a5c3cd6d3bfd832e19d564c835cf174639554440c5521a2364053dc->enter($__internal_399197236a5c3cd6d3bfd832e19d564c835cf174639554440c5521a2364053dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_953e4ab440c74e39cd822e9efe724c5ef6c7e0f5bdd3c42b1f33556f7797cf9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953e4ab440c74e39cd822e9efe724c5ef6c7e0f5bdd3c42b1f33556f7797cf9a->enter($__internal_953e4ab440c74e39cd822e9efe724c5ef6c7e0f5bdd3c42b1f33556f7797cf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 150
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_953e4ab440c74e39cd822e9efe724c5ef6c7e0f5bdd3c42b1f33556f7797cf9a->leave($__internal_953e4ab440c74e39cd822e9efe724c5ef6c7e0f5bdd3c42b1f33556f7797cf9a_prof);

        
        $__internal_399197236a5c3cd6d3bfd832e19d564c835cf174639554440c5521a2364053dc->leave($__internal_399197236a5c3cd6d3bfd832e19d564c835cf174639554440c5521a2364053dc_prof);

    }

    // line 153
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_8c2e2b88653d15cab367cf57d492f19143f88065eac67d64b0c3d739b34e3bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2e2b88653d15cab367cf57d492f19143f88065eac67d64b0c3d739b34e3bb3->enter($__internal_8c2e2b88653d15cab367cf57d492f19143f88065eac67d64b0c3d739b34e3bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_b69c1eaf8cce2c1bdbfa67d43e20b9961ef11205d8a1c8cea4aa6e9d15d0fdf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69c1eaf8cce2c1bdbfa67d43e20b9961ef11205d8a1c8cea4aa6e9d15d0fdf4->enter($__internal_b69c1eaf8cce2c1bdbfa67d43e20b9961ef11205d8a1c8cea4aa6e9d15d0fdf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 154
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b69c1eaf8cce2c1bdbfa67d43e20b9961ef11205d8a1c8cea4aa6e9d15d0fdf4->leave($__internal_b69c1eaf8cce2c1bdbfa67d43e20b9961ef11205d8a1c8cea4aa6e9d15d0fdf4_prof);

        
        $__internal_8c2e2b88653d15cab367cf57d492f19143f88065eac67d64b0c3d739b34e3bb3->leave($__internal_8c2e2b88653d15cab367cf57d492f19143f88065eac67d64b0c3d739b34e3bb3_prof);

    }

    // line 159
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_6132ebb994efb6d9e502bba18880d5b5c23a0e3869550349013d6027ebb2c9b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6132ebb994efb6d9e502bba18880d5b5c23a0e3869550349013d6027ebb2c9b3->enter($__internal_6132ebb994efb6d9e502bba18880d5b5c23a0e3869550349013d6027ebb2c9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c08d01b59ebb347b94e7e205a28650f93dc1f64fb43dfd1fec17c61d4d44f285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08d01b59ebb347b94e7e205a28650f93dc1f64fb43dfd1fec17c61d4d44f285->enter($__internal_c08d01b59ebb347b94e7e205a28650f93dc1f64fb43dfd1fec17c61d4d44f285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 160
        echo "<div class=\"form-group\">";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 161, $this->getSourceContext()); })()), 'widget');
        // line 162
        echo "</div>";
        
        $__internal_c08d01b59ebb347b94e7e205a28650f93dc1f64fb43dfd1fec17c61d4d44f285->leave($__internal_c08d01b59ebb347b94e7e205a28650f93dc1f64fb43dfd1fec17c61d4d44f285_prof);

        
        $__internal_6132ebb994efb6d9e502bba18880d5b5c23a0e3869550349013d6027ebb2c9b3->leave($__internal_6132ebb994efb6d9e502bba18880d5b5c23a0e3869550349013d6027ebb2c9b3_prof);

    }

    // line 165
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_2618af60ee1e214373e627b8482766e952ea82feff3fe72b9ffc9918115e7baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2618af60ee1e214373e627b8482766e952ea82feff3fe72b9ffc9918115e7baf->enter($__internal_2618af60ee1e214373e627b8482766e952ea82feff3fe72b9ffc9918115e7baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_20f60b5724f21ee8ed6f7df3c4686eb1098b03d8959ccb26f8546572b0a33532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f60b5724f21ee8ed6f7df3c4686eb1098b03d8959ccb26f8546572b0a33532->enter($__internal_20f60b5724f21ee8ed6f7df3c4686eb1098b03d8959ccb26f8546572b0a33532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 166
        $context["force_error"] = true;
        // line 167
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_20f60b5724f21ee8ed6f7df3c4686eb1098b03d8959ccb26f8546572b0a33532->leave($__internal_20f60b5724f21ee8ed6f7df3c4686eb1098b03d8959ccb26f8546572b0a33532_prof);

        
        $__internal_2618af60ee1e214373e627b8482766e952ea82feff3fe72b9ffc9918115e7baf->leave($__internal_2618af60ee1e214373e627b8482766e952ea82feff3fe72b9ffc9918115e7baf_prof);

    }

    // line 170
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_72a14a86883e346692252f99b545c640a0b8ff047eaa6f9f31b5551d5ac990ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a14a86883e346692252f99b545c640a0b8ff047eaa6f9f31b5551d5ac990ee->enter($__internal_72a14a86883e346692252f99b545c640a0b8ff047eaa6f9f31b5551d5ac990ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_a649c1648f8dd6d3e7136d575bf3d5e0cdd9ab6323d3fd1c835e815875fd579f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a649c1648f8dd6d3e7136d575bf3d5e0cdd9ab6323d3fd1c835e815875fd579f->enter($__internal_a649c1648f8dd6d3e7136d575bf3d5e0cdd9ab6323d3fd1c835e815875fd579f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a649c1648f8dd6d3e7136d575bf3d5e0cdd9ab6323d3fd1c835e815875fd579f->leave($__internal_a649c1648f8dd6d3e7136d575bf3d5e0cdd9ab6323d3fd1c835e815875fd579f_prof);

        
        $__internal_72a14a86883e346692252f99b545c640a0b8ff047eaa6f9f31b5551d5ac990ee->leave($__internal_72a14a86883e346692252f99b545c640a0b8ff047eaa6f9f31b5551d5ac990ee_prof);

    }

    // line 175
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_4c29b2c01e8faf997b271c498321ce124190f047037374e920f1c7bd9d4388c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c29b2c01e8faf997b271c498321ce124190f047037374e920f1c7bd9d4388c8->enter($__internal_4c29b2c01e8faf997b271c498321ce124190f047037374e920f1c7bd9d4388c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_a0f82fdeefd0d19360dd41b5e09088ff021f6350192ea4e694fc0831c33668c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f82fdeefd0d19360dd41b5e09088ff021f6350192ea4e694fc0831c33668c9->enter($__internal_a0f82fdeefd0d19360dd41b5e09088ff021f6350192ea4e694fc0831c33668c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a0f82fdeefd0d19360dd41b5e09088ff021f6350192ea4e694fc0831c33668c9->leave($__internal_a0f82fdeefd0d19360dd41b5e09088ff021f6350192ea4e694fc0831c33668c9_prof);

        
        $__internal_4c29b2c01e8faf997b271c498321ce124190f047037374e920f1c7bd9d4388c8->leave($__internal_4c29b2c01e8faf997b271c498321ce124190f047037374e920f1c7bd9d4388c8_prof);

    }

    // line 180
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_311f6153ba832726f01afaa01cec952178e44481f74c08ac73787f23191b4963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311f6153ba832726f01afaa01cec952178e44481f74c08ac73787f23191b4963->enter($__internal_311f6153ba832726f01afaa01cec952178e44481f74c08ac73787f23191b4963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_35ecb7ddc6b4373e37be9a1adbd9a7a434d18034eb6de4c836866523b9363ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ecb7ddc6b4373e37be9a1adbd9a7a434d18034eb6de4c836866523b9363ca5->enter($__internal_35ecb7ddc6b4373e37be9a1adbd9a7a434d18034eb6de4c836866523b9363ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_35ecb7ddc6b4373e37be9a1adbd9a7a434d18034eb6de4c836866523b9363ca5->leave($__internal_35ecb7ddc6b4373e37be9a1adbd9a7a434d18034eb6de4c836866523b9363ca5_prof);

        
        $__internal_311f6153ba832726f01afaa01cec952178e44481f74c08ac73787f23191b4963->leave($__internal_311f6153ba832726f01afaa01cec952178e44481f74c08ac73787f23191b4963_prof);

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
