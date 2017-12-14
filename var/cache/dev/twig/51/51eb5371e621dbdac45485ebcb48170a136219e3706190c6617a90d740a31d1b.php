<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_326d3b8dc47747c81b76125b764441df4f94fb45d2ac6a46c64de3ba7bb7e2a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_199286ad95e95a4eacfc6d51ea6ec9f64ca56871e3fb2d2a3a5d9879aafed515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_199286ad95e95a4eacfc6d51ea6ec9f64ca56871e3fb2d2a3a5d9879aafed515->enter($__internal_199286ad95e95a4eacfc6d51ea6ec9f64ca56871e3fb2d2a3a5d9879aafed515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_e014a8a9190f881c1be0a096f4491636ee773e5a553f45ed9af8f70f5c276bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e014a8a9190f881c1be0a096f4491636ee773e5a553f45ed9af8f70f5c276bc0->enter($__internal_e014a8a9190f881c1be0a096f4491636ee773e5a553f45ed9af8f70f5c276bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_199286ad95e95a4eacfc6d51ea6ec9f64ca56871e3fb2d2a3a5d9879aafed515->leave($__internal_199286ad95e95a4eacfc6d51ea6ec9f64ca56871e3fb2d2a3a5d9879aafed515_prof);

        
        $__internal_e014a8a9190f881c1be0a096f4491636ee773e5a553f45ed9af8f70f5c276bc0->leave($__internal_e014a8a9190f881c1be0a096f4491636ee773e5a553f45ed9af8f70f5c276bc0_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_fc32694686f3ca8b6b7aa57832cbd3e4913eb66d8a88d9d626cd1f77538236a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc32694686f3ca8b6b7aa57832cbd3e4913eb66d8a88d9d626cd1f77538236a1->enter($__internal_fc32694686f3ca8b6b7aa57832cbd3e4913eb66d8a88d9d626cd1f77538236a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_6595a3826bb33a8e4e0d8b300f00f7d53c0e4ba698e4af4c7774094a80587981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6595a3826bb33a8e4e0d8b300f00f7d53c0e4ba698e4af4c7774094a80587981->enter($__internal_6595a3826bb33a8e4e0d8b300f00f7d53c0e4ba698e4af4c7774094a80587981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6595a3826bb33a8e4e0d8b300f00f7d53c0e4ba698e4af4c7774094a80587981->leave($__internal_6595a3826bb33a8e4e0d8b300f00f7d53c0e4ba698e4af4c7774094a80587981_prof);

        
        $__internal_fc32694686f3ca8b6b7aa57832cbd3e4913eb66d8a88d9d626cd1f77538236a1->leave($__internal_fc32694686f3ca8b6b7aa57832cbd3e4913eb66d8a88d9d626cd1f77538236a1_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_bd45bea92ecf8b26396baaed0bdae115897f080a8a0af945708712e9e0521481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd45bea92ecf8b26396baaed0bdae115897f080a8a0af945708712e9e0521481->enter($__internal_bd45bea92ecf8b26396baaed0bdae115897f080a8a0af945708712e9e0521481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_c180185ee1cda0a936d7f628c05e8c0654062fc317dda0f04155495d88cb1f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c180185ee1cda0a936d7f628c05e8c0654062fc317dda0f04155495d88cb1f1e->enter($__internal_c180185ee1cda0a936d7f628c05e8c0654062fc317dda0f04155495d88cb1f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_c180185ee1cda0a936d7f628c05e8c0654062fc317dda0f04155495d88cb1f1e->leave($__internal_c180185ee1cda0a936d7f628c05e8c0654062fc317dda0f04155495d88cb1f1e_prof);

        
        $__internal_bd45bea92ecf8b26396baaed0bdae115897f080a8a0af945708712e9e0521481->leave($__internal_bd45bea92ecf8b26396baaed0bdae115897f080a8a0af945708712e9e0521481_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_bc39e5e3a5219b80e714f136716c842f3b7e63effaf5c6974dec9684d928e623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc39e5e3a5219b80e714f136716c842f3b7e63effaf5c6974dec9684d928e623->enter($__internal_bc39e5e3a5219b80e714f136716c842f3b7e63effaf5c6974dec9684d928e623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_1f16c9d03a34fc7dd00f176798f13ff6755ab358adea8651f075f113422de029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f16c9d03a34fc7dd00f176798f13ff6755ab358adea8651f075f113422de029->enter($__internal_1f16c9d03a34fc7dd00f176798f13ff6755ab358adea8651f075f113422de029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_1f16c9d03a34fc7dd00f176798f13ff6755ab358adea8651f075f113422de029->leave($__internal_1f16c9d03a34fc7dd00f176798f13ff6755ab358adea8651f075f113422de029_prof);

        
        $__internal_bc39e5e3a5219b80e714f136716c842f3b7e63effaf5c6974dec9684d928e623->leave($__internal_bc39e5e3a5219b80e714f136716c842f3b7e63effaf5c6974dec9684d928e623_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_802ad477d92579f15e241fe93d71ae1fea38bd2a1f479c534587be923a08a2ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802ad477d92579f15e241fe93d71ae1fea38bd2a1f479c534587be923a08a2ad->enter($__internal_802ad477d92579f15e241fe93d71ae1fea38bd2a1f479c534587be923a08a2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_e3280af4ec722aaeb56780e6d5cec59d916e3357eb9acc97120035f28c96bf1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3280af4ec722aaeb56780e6d5cec59d916e3357eb9acc97120035f28c96bf1c->enter($__internal_e3280af4ec722aaeb56780e6d5cec59d916e3357eb9acc97120035f28c96bf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_e3280af4ec722aaeb56780e6d5cec59d916e3357eb9acc97120035f28c96bf1c->leave($__internal_e3280af4ec722aaeb56780e6d5cec59d916e3357eb9acc97120035f28c96bf1c_prof);

        
        $__internal_802ad477d92579f15e241fe93d71ae1fea38bd2a1f479c534587be923a08a2ad->leave($__internal_802ad477d92579f15e241fe93d71ae1fea38bd2a1f479c534587be923a08a2ad_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ea7be62861f312bc0aaa91329f84ad2265559b7f88a98642709bc6707afcb0bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7be62861f312bc0aaa91329f84ad2265559b7f88a98642709bc6707afcb0bb->enter($__internal_ea7be62861f312bc0aaa91329f84ad2265559b7f88a98642709bc6707afcb0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_21160f1f461c3bffb4e1344338766ce51258f053f7fb43b9e0f4e11d67c2cb15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21160f1f461c3bffb4e1344338766ce51258f053f7fb43b9e0f4e11d67c2cb15->enter($__internal_21160f1f461c3bffb4e1344338766ce51258f053f7fb43b9e0f4e11d67c2cb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_21160f1f461c3bffb4e1344338766ce51258f053f7fb43b9e0f4e11d67c2cb15->leave($__internal_21160f1f461c3bffb4e1344338766ce51258f053f7fb43b9e0f4e11d67c2cb15_prof);

        
        $__internal_ea7be62861f312bc0aaa91329f84ad2265559b7f88a98642709bc6707afcb0bb->leave($__internal_ea7be62861f312bc0aaa91329f84ad2265559b7f88a98642709bc6707afcb0bb_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_705f106ba021ffd4b092c174cce56f0bac45beae1c0d78bc726f19ac90d14e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_705f106ba021ffd4b092c174cce56f0bac45beae1c0d78bc726f19ac90d14e11->enter($__internal_705f106ba021ffd4b092c174cce56f0bac45beae1c0d78bc726f19ac90d14e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_d1ebbcdc44b45a741f81b37bf29e2ba8f3bfe65eca634f8644269720522cee76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ebbcdc44b45a741f81b37bf29e2ba8f3bfe65eca634f8644269720522cee76->enter($__internal_d1ebbcdc44b45a741f81b37bf29e2ba8f3bfe65eca634f8644269720522cee76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_d1ebbcdc44b45a741f81b37bf29e2ba8f3bfe65eca634f8644269720522cee76->leave($__internal_d1ebbcdc44b45a741f81b37bf29e2ba8f3bfe65eca634f8644269720522cee76_prof);

        
        $__internal_705f106ba021ffd4b092c174cce56f0bac45beae1c0d78bc726f19ac90d14e11->leave($__internal_705f106ba021ffd4b092c174cce56f0bac45beae1c0d78bc726f19ac90d14e11_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_5142356d8ce5e3e1387d1db771afc94196ad5715a576018e44b3576712f849ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5142356d8ce5e3e1387d1db771afc94196ad5715a576018e44b3576712f849ac->enter($__internal_5142356d8ce5e3e1387d1db771afc94196ad5715a576018e44b3576712f849ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_c2623dadc34af6fdb444714b3199dd5f53eaf02ccf01cc5cd71ec65391caf388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2623dadc34af6fdb444714b3199dd5f53eaf02ccf01cc5cd71ec65391caf388->enter($__internal_c2623dadc34af6fdb444714b3199dd5f53eaf02ccf01cc5cd71ec65391caf388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c2623dadc34af6fdb444714b3199dd5f53eaf02ccf01cc5cd71ec65391caf388->leave($__internal_c2623dadc34af6fdb444714b3199dd5f53eaf02ccf01cc5cd71ec65391caf388_prof);

        
        $__internal_5142356d8ce5e3e1387d1db771afc94196ad5715a576018e44b3576712f849ac->leave($__internal_5142356d8ce5e3e1387d1db771afc94196ad5715a576018e44b3576712f849ac_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_98af69194ab9e68b0a437169879c82721710a71b974f4f8f81cec39cc8940cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98af69194ab9e68b0a437169879c82721710a71b974f4f8f81cec39cc8940cb8->enter($__internal_98af69194ab9e68b0a437169879c82721710a71b974f4f8f81cec39cc8940cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_58c6fafd980a75b58e0923e3d7521f4168dd3077352b48fda6068c41a05ac27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c6fafd980a75b58e0923e3d7521f4168dd3077352b48fda6068c41a05ac27c->enter($__internal_58c6fafd980a75b58e0923e3d7521f4168dd3077352b48fda6068c41a05ac27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_58c6fafd980a75b58e0923e3d7521f4168dd3077352b48fda6068c41a05ac27c->leave($__internal_58c6fafd980a75b58e0923e3d7521f4168dd3077352b48fda6068c41a05ac27c_prof);

        
        $__internal_98af69194ab9e68b0a437169879c82721710a71b974f4f8f81cec39cc8940cb8->leave($__internal_98af69194ab9e68b0a437169879c82721710a71b974f4f8f81cec39cc8940cb8_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_ced97ad7c746191f19f56757d2624f68a429d3e346887958a0e749af789c2132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced97ad7c746191f19f56757d2624f68a429d3e346887958a0e749af789c2132->enter($__internal_ced97ad7c746191f19f56757d2624f68a429d3e346887958a0e749af789c2132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_0d623143733cff4b572875d66f5b3603de130b5cd700f67f8cda8200b8284c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d623143733cff4b572875d66f5b3603de130b5cd700f67f8cda8200b8284c53->enter($__internal_0d623143733cff4b572875d66f5b3603de130b5cd700f67f8cda8200b8284c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_0d623143733cff4b572875d66f5b3603de130b5cd700f67f8cda8200b8284c53->leave($__internal_0d623143733cff4b572875d66f5b3603de130b5cd700f67f8cda8200b8284c53_prof);

        
        $__internal_ced97ad7c746191f19f56757d2624f68a429d3e346887958a0e749af789c2132->leave($__internal_ced97ad7c746191f19f56757d2624f68a429d3e346887958a0e749af789c2132_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_07a6047647447bc0c41dbe82921ceb405884251e7a984c84fbbd92f4a72d9bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a6047647447bc0c41dbe82921ceb405884251e7a984c84fbbd92f4a72d9bed->enter($__internal_07a6047647447bc0c41dbe82921ceb405884251e7a984c84fbbd92f4a72d9bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3a8b56804d4c41217bec336804a152feaf73cf2133441391ebaa8dd392b3c9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8b56804d4c41217bec336804a152feaf73cf2133441391ebaa8dd392b3c9a5->enter($__internal_3a8b56804d4c41217bec336804a152feaf73cf2133441391ebaa8dd392b3c9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_3a8b56804d4c41217bec336804a152feaf73cf2133441391ebaa8dd392b3c9a5->leave($__internal_3a8b56804d4c41217bec336804a152feaf73cf2133441391ebaa8dd392b3c9a5_prof);

        
        $__internal_07a6047647447bc0c41dbe82921ceb405884251e7a984c84fbbd92f4a72d9bed->leave($__internal_07a6047647447bc0c41dbe82921ceb405884251e7a984c84fbbd92f4a72d9bed_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_49f63d666b7cc26334921bc3d20b3bfd158abb325b9a85f2786da8679261a784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49f63d666b7cc26334921bc3d20b3bfd158abb325b9a85f2786da8679261a784->enter($__internal_49f63d666b7cc26334921bc3d20b3bfd158abb325b9a85f2786da8679261a784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_874f81e6476ab96209afa2e31eaafd9981f0a6e30cfd4b26b05593e2939337d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874f81e6476ab96209afa2e31eaafd9981f0a6e30cfd4b26b05593e2939337d9->enter($__internal_874f81e6476ab96209afa2e31eaafd9981f0a6e30cfd4b26b05593e2939337d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_874f81e6476ab96209afa2e31eaafd9981f0a6e30cfd4b26b05593e2939337d9->leave($__internal_874f81e6476ab96209afa2e31eaafd9981f0a6e30cfd4b26b05593e2939337d9_prof);

        
        $__internal_49f63d666b7cc26334921bc3d20b3bfd158abb325b9a85f2786da8679261a784->leave($__internal_49f63d666b7cc26334921bc3d20b3bfd158abb325b9a85f2786da8679261a784_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_78f6bd74c364b85df88383b451e121f1ff8534be584b34ec6f14063ea9c2b440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f6bd74c364b85df88383b451e121f1ff8534be584b34ec6f14063ea9c2b440->enter($__internal_78f6bd74c364b85df88383b451e121f1ff8534be584b34ec6f14063ea9c2b440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_867023fe17db0aa0942b38ba86cb7c87c1532152988ac5bb3fa8c299c490c86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867023fe17db0aa0942b38ba86cb7c87c1532152988ac5bb3fa8c299c490c86e->enter($__internal_867023fe17db0aa0942b38ba86cb7c87c1532152988ac5bb3fa8c299c490c86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_867023fe17db0aa0942b38ba86cb7c87c1532152988ac5bb3fa8c299c490c86e->leave($__internal_867023fe17db0aa0942b38ba86cb7c87c1532152988ac5bb3fa8c299c490c86e_prof);

        
        $__internal_78f6bd74c364b85df88383b451e121f1ff8534be584b34ec6f14063ea9c2b440->leave($__internal_78f6bd74c364b85df88383b451e121f1ff8534be584b34ec6f14063ea9c2b440_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_bb6b52804a4e95f65fb213128874c768498935c670ac52a6ed3e9234eeb89477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb6b52804a4e95f65fb213128874c768498935c670ac52a6ed3e9234eeb89477->enter($__internal_bb6b52804a4e95f65fb213128874c768498935c670ac52a6ed3e9234eeb89477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_d779ae2db49a15872e84c35e50084f7bbba0722837cac271966b975f0be962e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d779ae2db49a15872e84c35e50084f7bbba0722837cac271966b975f0be962e1->enter($__internal_d779ae2db49a15872e84c35e50084f7bbba0722837cac271966b975f0be962e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d779ae2db49a15872e84c35e50084f7bbba0722837cac271966b975f0be962e1->leave($__internal_d779ae2db49a15872e84c35e50084f7bbba0722837cac271966b975f0be962e1_prof);

        
        $__internal_bb6b52804a4e95f65fb213128874c768498935c670ac52a6ed3e9234eeb89477->leave($__internal_bb6b52804a4e95f65fb213128874c768498935c670ac52a6ed3e9234eeb89477_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c73f19252009005f978e7ca8d8b21bf542d1dbb649c6bd18f469e0a4cebb3b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c73f19252009005f978e7ca8d8b21bf542d1dbb649c6bd18f469e0a4cebb3b16->enter($__internal_c73f19252009005f978e7ca8d8b21bf542d1dbb649c6bd18f469e0a4cebb3b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_37b4ba152db25f86bd405a9a31d079ee37f1d6c895daefd918bfa54e20055c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b4ba152db25f86bd405a9a31d079ee37f1d6c895daefd918bfa54e20055c93->enter($__internal_37b4ba152db25f86bd405a9a31d079ee37f1d6c895daefd918bfa54e20055c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_37b4ba152db25f86bd405a9a31d079ee37f1d6c895daefd918bfa54e20055c93->leave($__internal_37b4ba152db25f86bd405a9a31d079ee37f1d6c895daefd918bfa54e20055c93_prof);

        
        $__internal_c73f19252009005f978e7ca8d8b21bf542d1dbb649c6bd18f469e0a4cebb3b16->leave($__internal_c73f19252009005f978e7ca8d8b21bf542d1dbb649c6bd18f469e0a4cebb3b16_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_25e344b3b74f4c6e2a86a5e03a5d2d69f674efbf911a55b39584a7c178451c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25e344b3b74f4c6e2a86a5e03a5d2d69f674efbf911a55b39584a7c178451c7a->enter($__internal_25e344b3b74f4c6e2a86a5e03a5d2d69f674efbf911a55b39584a7c178451c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_09d193564035e164d073f76c3e0c519dd3912a9bbd6dc596bfca6076fae31ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d193564035e164d073f76c3e0c519dd3912a9bbd6dc596bfca6076fae31ebe->enter($__internal_09d193564035e164d073f76c3e0c519dd3912a9bbd6dc596bfca6076fae31ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_09d193564035e164d073f76c3e0c519dd3912a9bbd6dc596bfca6076fae31ebe->leave($__internal_09d193564035e164d073f76c3e0c519dd3912a9bbd6dc596bfca6076fae31ebe_prof);

        
        $__internal_25e344b3b74f4c6e2a86a5e03a5d2d69f674efbf911a55b39584a7c178451c7a->leave($__internal_25e344b3b74f4c6e2a86a5e03a5d2d69f674efbf911a55b39584a7c178451c7a_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_89b4c460c932a17597b590d0440226d02b2d093578323c30e9f9e31bf6ef4578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b4c460c932a17597b590d0440226d02b2d093578323c30e9f9e31bf6ef4578->enter($__internal_89b4c460c932a17597b590d0440226d02b2d093578323c30e9f9e31bf6ef4578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_09538f24d8e2c94798d2404b68e71ab722aeb66d2392139320e32e4b45f1488f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09538f24d8e2c94798d2404b68e71ab722aeb66d2392139320e32e4b45f1488f->enter($__internal_09538f24d8e2c94798d2404b68e71ab722aeb66d2392139320e32e4b45f1488f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_09538f24d8e2c94798d2404b68e71ab722aeb66d2392139320e32e4b45f1488f->leave($__internal_09538f24d8e2c94798d2404b68e71ab722aeb66d2392139320e32e4b45f1488f_prof);

        
        $__internal_89b4c460c932a17597b590d0440226d02b2d093578323c30e9f9e31bf6ef4578->leave($__internal_89b4c460c932a17597b590d0440226d02b2d093578323c30e9f9e31bf6ef4578_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e9a0785cb6dc686bf8206c4c49501990e6a9b010a103c77529c6b0c48dd4a6b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9a0785cb6dc686bf8206c4c49501990e6a9b010a103c77529c6b0c48dd4a6b5->enter($__internal_e9a0785cb6dc686bf8206c4c49501990e6a9b010a103c77529c6b0c48dd4a6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a57c1580940b6842a379b7fab8517470555d7ebdb028dbdbb78d3a1653f8c283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57c1580940b6842a379b7fab8517470555d7ebdb028dbdbb78d3a1653f8c283->enter($__internal_a57c1580940b6842a379b7fab8517470555d7ebdb028dbdbb78d3a1653f8c283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_a57c1580940b6842a379b7fab8517470555d7ebdb028dbdbb78d3a1653f8c283->leave($__internal_a57c1580940b6842a379b7fab8517470555d7ebdb028dbdbb78d3a1653f8c283_prof);

        
        $__internal_e9a0785cb6dc686bf8206c4c49501990e6a9b010a103c77529c6b0c48dd4a6b5->leave($__internal_e9a0785cb6dc686bf8206c4c49501990e6a9b010a103c77529c6b0c48dd4a6b5_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8af0ab721e0936a4c006f09127c0bc7e40e516ec1aa4b4aa0e3e32089d94edf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af0ab721e0936a4c006f09127c0bc7e40e516ec1aa4b4aa0e3e32089d94edf0->enter($__internal_8af0ab721e0936a4c006f09127c0bc7e40e516ec1aa4b4aa0e3e32089d94edf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5394984a599a3de7a0df16c4208f32269c1e9f365f9aea4b3bdb4d82d94a2cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5394984a599a3de7a0df16c4208f32269c1e9f365f9aea4b3bdb4d82d94a2cc2->enter($__internal_5394984a599a3de7a0df16c4208f32269c1e9f365f9aea4b3bdb4d82d94a2cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_5394984a599a3de7a0df16c4208f32269c1e9f365f9aea4b3bdb4d82d94a2cc2->leave($__internal_5394984a599a3de7a0df16c4208f32269c1e9f365f9aea4b3bdb4d82d94a2cc2_prof);

        
        $__internal_8af0ab721e0936a4c006f09127c0bc7e40e516ec1aa4b4aa0e3e32089d94edf0->leave($__internal_8af0ab721e0936a4c006f09127c0bc7e40e516ec1aa4b4aa0e3e32089d94edf0_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
