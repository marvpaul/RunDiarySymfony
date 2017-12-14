<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_2857c5ba99e5cd3e6581f8d83b700deac43d116c0e4b00cfb0bb57442c58daec extends Twig_Template
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
        $__internal_07dcd3bd7a198c8aea75499124808afbc3a60b6ebb0b500fd3f43cd886b57657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07dcd3bd7a198c8aea75499124808afbc3a60b6ebb0b500fd3f43cd886b57657->enter($__internal_07dcd3bd7a198c8aea75499124808afbc3a60b6ebb0b500fd3f43cd886b57657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_6b6dc4c1ee54e20ce2faba832ddd71085edff6595159e722cbc493438e66b422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6dc4c1ee54e20ce2faba832ddd71085edff6595159e722cbc493438e66b422->enter($__internal_6b6dc4c1ee54e20ce2faba832ddd71085edff6595159e722cbc493438e66b422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_07dcd3bd7a198c8aea75499124808afbc3a60b6ebb0b500fd3f43cd886b57657->leave($__internal_07dcd3bd7a198c8aea75499124808afbc3a60b6ebb0b500fd3f43cd886b57657_prof);

        
        $__internal_6b6dc4c1ee54e20ce2faba832ddd71085edff6595159e722cbc493438e66b422->leave($__internal_6b6dc4c1ee54e20ce2faba832ddd71085edff6595159e722cbc493438e66b422_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_5dd172175c8d93a0cac5eebcd7bb1cf4f92d3dc4aee0c24288ca209fb131cbef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd172175c8d93a0cac5eebcd7bb1cf4f92d3dc4aee0c24288ca209fb131cbef->enter($__internal_5dd172175c8d93a0cac5eebcd7bb1cf4f92d3dc4aee0c24288ca209fb131cbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_a621afc8e045ed399395c365d7e9838304a2892f42401c1bc1ebdbefc5740672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a621afc8e045ed399395c365d7e9838304a2892f42401c1bc1ebdbefc5740672->enter($__internal_a621afc8e045ed399395c365d7e9838304a2892f42401c1bc1ebdbefc5740672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a621afc8e045ed399395c365d7e9838304a2892f42401c1bc1ebdbefc5740672->leave($__internal_a621afc8e045ed399395c365d7e9838304a2892f42401c1bc1ebdbefc5740672_prof);

        
        $__internal_5dd172175c8d93a0cac5eebcd7bb1cf4f92d3dc4aee0c24288ca209fb131cbef->leave($__internal_5dd172175c8d93a0cac5eebcd7bb1cf4f92d3dc4aee0c24288ca209fb131cbef_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_3a6ffac37247d5875519976afc6b1a8dd4c15625c6f471dd44b7463e399691b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a6ffac37247d5875519976afc6b1a8dd4c15625c6f471dd44b7463e399691b1->enter($__internal_3a6ffac37247d5875519976afc6b1a8dd4c15625c6f471dd44b7463e399691b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_906185ef5073c520eb4e2b0c25ca26bcd229e0d7e2b4bed00b656b91895bd75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906185ef5073c520eb4e2b0c25ca26bcd229e0d7e2b4bed00b656b91895bd75b->enter($__internal_906185ef5073c520eb4e2b0c25ca26bcd229e0d7e2b4bed00b656b91895bd75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_906185ef5073c520eb4e2b0c25ca26bcd229e0d7e2b4bed00b656b91895bd75b->leave($__internal_906185ef5073c520eb4e2b0c25ca26bcd229e0d7e2b4bed00b656b91895bd75b_prof);

        
        $__internal_3a6ffac37247d5875519976afc6b1a8dd4c15625c6f471dd44b7463e399691b1->leave($__internal_3a6ffac37247d5875519976afc6b1a8dd4c15625c6f471dd44b7463e399691b1_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_99a49e79d0c9b5007d092decf3d74799631686bd182357303a9fca056babbe4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a49e79d0c9b5007d092decf3d74799631686bd182357303a9fca056babbe4c->enter($__internal_99a49e79d0c9b5007d092decf3d74799631686bd182357303a9fca056babbe4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_5e0bf9948fc90a991579f5113b7029464463ce300b94610a94940057a378ec78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0bf9948fc90a991579f5113b7029464463ce300b94610a94940057a378ec78->enter($__internal_5e0bf9948fc90a991579f5113b7029464463ce300b94610a94940057a378ec78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_5e0bf9948fc90a991579f5113b7029464463ce300b94610a94940057a378ec78->leave($__internal_5e0bf9948fc90a991579f5113b7029464463ce300b94610a94940057a378ec78_prof);

        
        $__internal_99a49e79d0c9b5007d092decf3d74799631686bd182357303a9fca056babbe4c->leave($__internal_99a49e79d0c9b5007d092decf3d74799631686bd182357303a9fca056babbe4c_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_70c7cc6addffb938e784d9fad7d55f2e4db4b1f9f4c8c1bb49e80b5d51d3483e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c7cc6addffb938e784d9fad7d55f2e4db4b1f9f4c8c1bb49e80b5d51d3483e->enter($__internal_70c7cc6addffb938e784d9fad7d55f2e4db4b1f9f4c8c1bb49e80b5d51d3483e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_c1004ff0d39e0fa5e9054abe477e5f82aad71f15f1925c5220e039759378e71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1004ff0d39e0fa5e9054abe477e5f82aad71f15f1925c5220e039759378e71c->enter($__internal_c1004ff0d39e0fa5e9054abe477e5f82aad71f15f1925c5220e039759378e71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_c1004ff0d39e0fa5e9054abe477e5f82aad71f15f1925c5220e039759378e71c->leave($__internal_c1004ff0d39e0fa5e9054abe477e5f82aad71f15f1925c5220e039759378e71c_prof);

        
        $__internal_70c7cc6addffb938e784d9fad7d55f2e4db4b1f9f4c8c1bb49e80b5d51d3483e->leave($__internal_70c7cc6addffb938e784d9fad7d55f2e4db4b1f9f4c8c1bb49e80b5d51d3483e_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_32d70b7bc459e5dcbd9eb635146d5bdda7bebc5f8bc6e5f043d3aac7330ee3c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d70b7bc459e5dcbd9eb635146d5bdda7bebc5f8bc6e5f043d3aac7330ee3c5->enter($__internal_32d70b7bc459e5dcbd9eb635146d5bdda7bebc5f8bc6e5f043d3aac7330ee3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c9aee12750642dbb5b1537b3bb5bee72e00e6931d2ccaf4e86dcef4235fbe551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9aee12750642dbb5b1537b3bb5bee72e00e6931d2ccaf4e86dcef4235fbe551->enter($__internal_c9aee12750642dbb5b1537b3bb5bee72e00e6931d2ccaf4e86dcef4235fbe551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_c9aee12750642dbb5b1537b3bb5bee72e00e6931d2ccaf4e86dcef4235fbe551->leave($__internal_c9aee12750642dbb5b1537b3bb5bee72e00e6931d2ccaf4e86dcef4235fbe551_prof);

        
        $__internal_32d70b7bc459e5dcbd9eb635146d5bdda7bebc5f8bc6e5f043d3aac7330ee3c5->leave($__internal_32d70b7bc459e5dcbd9eb635146d5bdda7bebc5f8bc6e5f043d3aac7330ee3c5_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_d21193238a4c32f92334c268e4564e887bd6964d2ac839ea9bdb328bc5e24be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d21193238a4c32f92334c268e4564e887bd6964d2ac839ea9bdb328bc5e24be3->enter($__internal_d21193238a4c32f92334c268e4564e887bd6964d2ac839ea9bdb328bc5e24be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_b375d77b316510dc26abf23b90dae3fac880a1723d14f61e26e14a27ed1416eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b375d77b316510dc26abf23b90dae3fac880a1723d14f61e26e14a27ed1416eb->enter($__internal_b375d77b316510dc26abf23b90dae3fac880a1723d14f61e26e14a27ed1416eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_b375d77b316510dc26abf23b90dae3fac880a1723d14f61e26e14a27ed1416eb->leave($__internal_b375d77b316510dc26abf23b90dae3fac880a1723d14f61e26e14a27ed1416eb_prof);

        
        $__internal_d21193238a4c32f92334c268e4564e887bd6964d2ac839ea9bdb328bc5e24be3->leave($__internal_d21193238a4c32f92334c268e4564e887bd6964d2ac839ea9bdb328bc5e24be3_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_37f125dcc373598cc295112fbb6c2eec8e1f26a7a76317ee401695c8165813de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f125dcc373598cc295112fbb6c2eec8e1f26a7a76317ee401695c8165813de->enter($__internal_37f125dcc373598cc295112fbb6c2eec8e1f26a7a76317ee401695c8165813de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_54d78657daf2cae0b72d78e10dc1379ab5c603c149d72a955cfc55f08e637cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d78657daf2cae0b72d78e10dc1379ab5c603c149d72a955cfc55f08e637cc8->enter($__internal_54d78657daf2cae0b72d78e10dc1379ab5c603c149d72a955cfc55f08e637cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_54d78657daf2cae0b72d78e10dc1379ab5c603c149d72a955cfc55f08e637cc8->leave($__internal_54d78657daf2cae0b72d78e10dc1379ab5c603c149d72a955cfc55f08e637cc8_prof);

        
        $__internal_37f125dcc373598cc295112fbb6c2eec8e1f26a7a76317ee401695c8165813de->leave($__internal_37f125dcc373598cc295112fbb6c2eec8e1f26a7a76317ee401695c8165813de_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_16da34ef63e4e9f878badb158ad12a3d89c0d489a0e1171a2e8527198666f859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16da34ef63e4e9f878badb158ad12a3d89c0d489a0e1171a2e8527198666f859->enter($__internal_16da34ef63e4e9f878badb158ad12a3d89c0d489a0e1171a2e8527198666f859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_acafc8d34cf32f706e064afc048d420d3b74f7b928f0bd37cbc8b91787c93551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acafc8d34cf32f706e064afc048d420d3b74f7b928f0bd37cbc8b91787c93551->enter($__internal_acafc8d34cf32f706e064afc048d420d3b74f7b928f0bd37cbc8b91787c93551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_acafc8d34cf32f706e064afc048d420d3b74f7b928f0bd37cbc8b91787c93551->leave($__internal_acafc8d34cf32f706e064afc048d420d3b74f7b928f0bd37cbc8b91787c93551_prof);

        
        $__internal_16da34ef63e4e9f878badb158ad12a3d89c0d489a0e1171a2e8527198666f859->leave($__internal_16da34ef63e4e9f878badb158ad12a3d89c0d489a0e1171a2e8527198666f859_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_06636affb91579cda8671e47792c2cbdc66244c4078975ce99a68f896bcb0ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06636affb91579cda8671e47792c2cbdc66244c4078975ce99a68f896bcb0ddd->enter($__internal_06636affb91579cda8671e47792c2cbdc66244c4078975ce99a68f896bcb0ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_bfa97ccc37e96c16fc106bf3e3055ef3808d233d50b809ce9a22ddecb8a78a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa97ccc37e96c16fc106bf3e3055ef3808d233d50b809ce9a22ddecb8a78a4e->enter($__internal_bfa97ccc37e96c16fc106bf3e3055ef3808d233d50b809ce9a22ddecb8a78a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_bfa97ccc37e96c16fc106bf3e3055ef3808d233d50b809ce9a22ddecb8a78a4e->leave($__internal_bfa97ccc37e96c16fc106bf3e3055ef3808d233d50b809ce9a22ddecb8a78a4e_prof);

        
        $__internal_06636affb91579cda8671e47792c2cbdc66244c4078975ce99a68f896bcb0ddd->leave($__internal_06636affb91579cda8671e47792c2cbdc66244c4078975ce99a68f896bcb0ddd_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_bb589e084c550f4548cb0134bbc205e19466dd76485538ee40b66ec5c3063bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb589e084c550f4548cb0134bbc205e19466dd76485538ee40b66ec5c3063bde->enter($__internal_bb589e084c550f4548cb0134bbc205e19466dd76485538ee40b66ec5c3063bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4020c35c16cfb824b1c915893a09718830030b22e50a25cc48e5fff68b3e1e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4020c35c16cfb824b1c915893a09718830030b22e50a25cc48e5fff68b3e1e52->enter($__internal_4020c35c16cfb824b1c915893a09718830030b22e50a25cc48e5fff68b3e1e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_4020c35c16cfb824b1c915893a09718830030b22e50a25cc48e5fff68b3e1e52->leave($__internal_4020c35c16cfb824b1c915893a09718830030b22e50a25cc48e5fff68b3e1e52_prof);

        
        $__internal_bb589e084c550f4548cb0134bbc205e19466dd76485538ee40b66ec5c3063bde->leave($__internal_bb589e084c550f4548cb0134bbc205e19466dd76485538ee40b66ec5c3063bde_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e00fdaed07cb9642a2b337eef0cf19b928f293fe178a3f19ce5b5929d25fe198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00fdaed07cb9642a2b337eef0cf19b928f293fe178a3f19ce5b5929d25fe198->enter($__internal_e00fdaed07cb9642a2b337eef0cf19b928f293fe178a3f19ce5b5929d25fe198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_64e8bc8953de557f97b5324229554c9978e21efc947f9642618248219a75436e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e8bc8953de557f97b5324229554c9978e21efc947f9642618248219a75436e->enter($__internal_64e8bc8953de557f97b5324229554c9978e21efc947f9642618248219a75436e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_64e8bc8953de557f97b5324229554c9978e21efc947f9642618248219a75436e->leave($__internal_64e8bc8953de557f97b5324229554c9978e21efc947f9642618248219a75436e_prof);

        
        $__internal_e00fdaed07cb9642a2b337eef0cf19b928f293fe178a3f19ce5b5929d25fe198->leave($__internal_e00fdaed07cb9642a2b337eef0cf19b928f293fe178a3f19ce5b5929d25fe198_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_d10534989470e738d736fd73564d9436cd60917cfe6d33d50b4846680aefbbf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10534989470e738d736fd73564d9436cd60917cfe6d33d50b4846680aefbbf1->enter($__internal_d10534989470e738d736fd73564d9436cd60917cfe6d33d50b4846680aefbbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_f770619afc3651ea716122be2d8d3d20620ffabe898b421935a85d93053a1e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f770619afc3651ea716122be2d8d3d20620ffabe898b421935a85d93053a1e9f->enter($__internal_f770619afc3651ea716122be2d8d3d20620ffabe898b421935a85d93053a1e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f770619afc3651ea716122be2d8d3d20620ffabe898b421935a85d93053a1e9f->leave($__internal_f770619afc3651ea716122be2d8d3d20620ffabe898b421935a85d93053a1e9f_prof);

        
        $__internal_d10534989470e738d736fd73564d9436cd60917cfe6d33d50b4846680aefbbf1->leave($__internal_d10534989470e738d736fd73564d9436cd60917cfe6d33d50b4846680aefbbf1_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_90cccde9344a4ac085187cff7f5dd613fef23afaca0d292f91efb109e86ed83c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90cccde9344a4ac085187cff7f5dd613fef23afaca0d292f91efb109e86ed83c->enter($__internal_90cccde9344a4ac085187cff7f5dd613fef23afaca0d292f91efb109e86ed83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_454e4fa1949636f84e0d037f65c4c08018c6deb821bca61ea1741e24d48b3ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454e4fa1949636f84e0d037f65c4c08018c6deb821bca61ea1741e24d48b3ffe->enter($__internal_454e4fa1949636f84e0d037f65c4c08018c6deb821bca61ea1741e24d48b3ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_454e4fa1949636f84e0d037f65c4c08018c6deb821bca61ea1741e24d48b3ffe->leave($__internal_454e4fa1949636f84e0d037f65c4c08018c6deb821bca61ea1741e24d48b3ffe_prof);

        
        $__internal_90cccde9344a4ac085187cff7f5dd613fef23afaca0d292f91efb109e86ed83c->leave($__internal_90cccde9344a4ac085187cff7f5dd613fef23afaca0d292f91efb109e86ed83c_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_cd76d3bb82299629ccaf1a46ab7bd2d2a43ba75e2b9ab631e197a201a41bfdfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd76d3bb82299629ccaf1a46ab7bd2d2a43ba75e2b9ab631e197a201a41bfdfb->enter($__internal_cd76d3bb82299629ccaf1a46ab7bd2d2a43ba75e2b9ab631e197a201a41bfdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_80e778ae38c7236dfbe977c995e1a314283e1f30a886d9142e3a17ba69ffff33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e778ae38c7236dfbe977c995e1a314283e1f30a886d9142e3a17ba69ffff33->enter($__internal_80e778ae38c7236dfbe977c995e1a314283e1f30a886d9142e3a17ba69ffff33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_80e778ae38c7236dfbe977c995e1a314283e1f30a886d9142e3a17ba69ffff33->leave($__internal_80e778ae38c7236dfbe977c995e1a314283e1f30a886d9142e3a17ba69ffff33_prof);

        
        $__internal_cd76d3bb82299629ccaf1a46ab7bd2d2a43ba75e2b9ab631e197a201a41bfdfb->leave($__internal_cd76d3bb82299629ccaf1a46ab7bd2d2a43ba75e2b9ab631e197a201a41bfdfb_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_c878aa923ef693746056b1a420be20196c78ab61e81cc1f224d63a5106062e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c878aa923ef693746056b1a420be20196c78ab61e81cc1f224d63a5106062e5b->enter($__internal_c878aa923ef693746056b1a420be20196c78ab61e81cc1f224d63a5106062e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_4288a27914cafbfc23ef73e5baec4d2d5ef697ba70a171837a0a761c072a17e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4288a27914cafbfc23ef73e5baec4d2d5ef697ba70a171837a0a761c072a17e4->enter($__internal_4288a27914cafbfc23ef73e5baec4d2d5ef697ba70a171837a0a761c072a17e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4288a27914cafbfc23ef73e5baec4d2d5ef697ba70a171837a0a761c072a17e4->leave($__internal_4288a27914cafbfc23ef73e5baec4d2d5ef697ba70a171837a0a761c072a17e4_prof);

        
        $__internal_c878aa923ef693746056b1a420be20196c78ab61e81cc1f224d63a5106062e5b->leave($__internal_c878aa923ef693746056b1a420be20196c78ab61e81cc1f224d63a5106062e5b_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4c06f54fe2b1110a066009d475c6daf99bd2c884b851b492803930ae47ca461e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c06f54fe2b1110a066009d475c6daf99bd2c884b851b492803930ae47ca461e->enter($__internal_4c06f54fe2b1110a066009d475c6daf99bd2c884b851b492803930ae47ca461e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_443c1e464e56ceb7b4a1df10996f2663b55059bd48a67ae1b604f89691f8fa2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443c1e464e56ceb7b4a1df10996f2663b55059bd48a67ae1b604f89691f8fa2f->enter($__internal_443c1e464e56ceb7b4a1df10996f2663b55059bd48a67ae1b604f89691f8fa2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_443c1e464e56ceb7b4a1df10996f2663b55059bd48a67ae1b604f89691f8fa2f->leave($__internal_443c1e464e56ceb7b4a1df10996f2663b55059bd48a67ae1b604f89691f8fa2f_prof);

        
        $__internal_4c06f54fe2b1110a066009d475c6daf99bd2c884b851b492803930ae47ca461e->leave($__internal_4c06f54fe2b1110a066009d475c6daf99bd2c884b851b492803930ae47ca461e_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_bf1b328f0613f3855e8f0852cb65f3069d8fc2edab05cb7f790733c49f1cd0a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf1b328f0613f3855e8f0852cb65f3069d8fc2edab05cb7f790733c49f1cd0a9->enter($__internal_bf1b328f0613f3855e8f0852cb65f3069d8fc2edab05cb7f790733c49f1cd0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_5a5a90da2ec1b5b2a6908322cec7970a9b800056b0aaac3de457ca933575ab77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5a90da2ec1b5b2a6908322cec7970a9b800056b0aaac3de457ca933575ab77->enter($__internal_5a5a90da2ec1b5b2a6908322cec7970a9b800056b0aaac3de457ca933575ab77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_5a5a90da2ec1b5b2a6908322cec7970a9b800056b0aaac3de457ca933575ab77->leave($__internal_5a5a90da2ec1b5b2a6908322cec7970a9b800056b0aaac3de457ca933575ab77_prof);

        
        $__internal_bf1b328f0613f3855e8f0852cb65f3069d8fc2edab05cb7f790733c49f1cd0a9->leave($__internal_bf1b328f0613f3855e8f0852cb65f3069d8fc2edab05cb7f790733c49f1cd0a9_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_7849563c893e88d8bd94bf401d7fe713c3f2c0160dec2494b36fcbb2009e214a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7849563c893e88d8bd94bf401d7fe713c3f2c0160dec2494b36fcbb2009e214a->enter($__internal_7849563c893e88d8bd94bf401d7fe713c3f2c0160dec2494b36fcbb2009e214a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_59279a94f62af48904fcb61c81334f18cfa118051ffe3cb8d4ce5e22b3046860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59279a94f62af48904fcb61c81334f18cfa118051ffe3cb8d4ce5e22b3046860->enter($__internal_59279a94f62af48904fcb61c81334f18cfa118051ffe3cb8d4ce5e22b3046860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_59279a94f62af48904fcb61c81334f18cfa118051ffe3cb8d4ce5e22b3046860->leave($__internal_59279a94f62af48904fcb61c81334f18cfa118051ffe3cb8d4ce5e22b3046860_prof);

        
        $__internal_7849563c893e88d8bd94bf401d7fe713c3f2c0160dec2494b36fcbb2009e214a->leave($__internal_7849563c893e88d8bd94bf401d7fe713c3f2c0160dec2494b36fcbb2009e214a_prof);

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
