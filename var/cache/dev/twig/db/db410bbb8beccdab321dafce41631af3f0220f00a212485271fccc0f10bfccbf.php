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
        $__internal_2ffc5ed2abbde7037a24a2413dc38461eb3588dfe8d89283a68de094d7d4ed1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ffc5ed2abbde7037a24a2413dc38461eb3588dfe8d89283a68de094d7d4ed1e->enter($__internal_2ffc5ed2abbde7037a24a2413dc38461eb3588dfe8d89283a68de094d7d4ed1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_a47682f1112267a65b27677f68e6b3de6f84a823e5c6281e1ad66489cece9dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47682f1112267a65b27677f68e6b3de6f84a823e5c6281e1ad66489cece9dd9->enter($__internal_a47682f1112267a65b27677f68e6b3de6f84a823e5c6281e1ad66489cece9dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_2ffc5ed2abbde7037a24a2413dc38461eb3588dfe8d89283a68de094d7d4ed1e->leave($__internal_2ffc5ed2abbde7037a24a2413dc38461eb3588dfe8d89283a68de094d7d4ed1e_prof);

        
        $__internal_a47682f1112267a65b27677f68e6b3de6f84a823e5c6281e1ad66489cece9dd9->leave($__internal_a47682f1112267a65b27677f68e6b3de6f84a823e5c6281e1ad66489cece9dd9_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6c15d9a1f64b7cf85963ea86f9b223d10e76f5edc6b33f92d713842f9f229212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c15d9a1f64b7cf85963ea86f9b223d10e76f5edc6b33f92d713842f9f229212->enter($__internal_6c15d9a1f64b7cf85963ea86f9b223d10e76f5edc6b33f92d713842f9f229212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_08375c1bc5da491d1418abf8e31b1184eda8dc79a2dd8d5be7731d3dbf3981b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08375c1bc5da491d1418abf8e31b1184eda8dc79a2dd8d5be7731d3dbf3981b2->enter($__internal_08375c1bc5da491d1418abf8e31b1184eda8dc79a2dd8d5be7731d3dbf3981b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_08375c1bc5da491d1418abf8e31b1184eda8dc79a2dd8d5be7731d3dbf3981b2->leave($__internal_08375c1bc5da491d1418abf8e31b1184eda8dc79a2dd8d5be7731d3dbf3981b2_prof);

        
        $__internal_6c15d9a1f64b7cf85963ea86f9b223d10e76f5edc6b33f92d713842f9f229212->leave($__internal_6c15d9a1f64b7cf85963ea86f9b223d10e76f5edc6b33f92d713842f9f229212_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ca808bf42987f4a6af7a16d05d686b74fab5baafe1395f66655f3148c4aeffbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca808bf42987f4a6af7a16d05d686b74fab5baafe1395f66655f3148c4aeffbd->enter($__internal_ca808bf42987f4a6af7a16d05d686b74fab5baafe1395f66655f3148c4aeffbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_06afd876283fa84810eee3a2e7747b0bed94b9518f1cc1dde2d1d5a384e6c6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06afd876283fa84810eee3a2e7747b0bed94b9518f1cc1dde2d1d5a384e6c6d3->enter($__internal_06afd876283fa84810eee3a2e7747b0bed94b9518f1cc1dde2d1d5a384e6c6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_06afd876283fa84810eee3a2e7747b0bed94b9518f1cc1dde2d1d5a384e6c6d3->leave($__internal_06afd876283fa84810eee3a2e7747b0bed94b9518f1cc1dde2d1d5a384e6c6d3_prof);

        
        $__internal_ca808bf42987f4a6af7a16d05d686b74fab5baafe1395f66655f3148c4aeffbd->leave($__internal_ca808bf42987f4a6af7a16d05d686b74fab5baafe1395f66655f3148c4aeffbd_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0e1548219b384dfd9a44d2980dd865052401afbc901f1e8ffc971dc6cf32be1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e1548219b384dfd9a44d2980dd865052401afbc901f1e8ffc971dc6cf32be1a->enter($__internal_0e1548219b384dfd9a44d2980dd865052401afbc901f1e8ffc971dc6cf32be1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_cb76710ebdd89f182533a64d88123adcf2eb87c29b11e8d4fa7375c5f049f24e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb76710ebdd89f182533a64d88123adcf2eb87c29b11e8d4fa7375c5f049f24e->enter($__internal_cb76710ebdd89f182533a64d88123adcf2eb87c29b11e8d4fa7375c5f049f24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_cb76710ebdd89f182533a64d88123adcf2eb87c29b11e8d4fa7375c5f049f24e->leave($__internal_cb76710ebdd89f182533a64d88123adcf2eb87c29b11e8d4fa7375c5f049f24e_prof);

        
        $__internal_0e1548219b384dfd9a44d2980dd865052401afbc901f1e8ffc971dc6cf32be1a->leave($__internal_0e1548219b384dfd9a44d2980dd865052401afbc901f1e8ffc971dc6cf32be1a_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_d37fed64a044e24e195011f86a535b8e87e27a366cb1e2a8ae76680715147a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37fed64a044e24e195011f86a535b8e87e27a366cb1e2a8ae76680715147a7c->enter($__internal_d37fed64a044e24e195011f86a535b8e87e27a366cb1e2a8ae76680715147a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_7804335af9c24ff581c11f36f2b0086c3c98ec106c425405e0ca807116abe860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7804335af9c24ff581c11f36f2b0086c3c98ec106c425405e0ca807116abe860->enter($__internal_7804335af9c24ff581c11f36f2b0086c3c98ec106c425405e0ca807116abe860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_7804335af9c24ff581c11f36f2b0086c3c98ec106c425405e0ca807116abe860->leave($__internal_7804335af9c24ff581c11f36f2b0086c3c98ec106c425405e0ca807116abe860_prof);

        
        $__internal_d37fed64a044e24e195011f86a535b8e87e27a366cb1e2a8ae76680715147a7c->leave($__internal_d37fed64a044e24e195011f86a535b8e87e27a366cb1e2a8ae76680715147a7c_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_1dc544fdb1e4c28ca1982f93ac8a389565a11a4e6158b3c28fcd1f648d715f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dc544fdb1e4c28ca1982f93ac8a389565a11a4e6158b3c28fcd1f648d715f90->enter($__internal_1dc544fdb1e4c28ca1982f93ac8a389565a11a4e6158b3c28fcd1f648d715f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a174cb6b730a1a04bbbd0475ae5681ddb49f265bdb66c5f8288648c5aebfcce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a174cb6b730a1a04bbbd0475ae5681ddb49f265bdb66c5f8288648c5aebfcce0->enter($__internal_a174cb6b730a1a04bbbd0475ae5681ddb49f265bdb66c5f8288648c5aebfcce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_a174cb6b730a1a04bbbd0475ae5681ddb49f265bdb66c5f8288648c5aebfcce0->leave($__internal_a174cb6b730a1a04bbbd0475ae5681ddb49f265bdb66c5f8288648c5aebfcce0_prof);

        
        $__internal_1dc544fdb1e4c28ca1982f93ac8a389565a11a4e6158b3c28fcd1f648d715f90->leave($__internal_1dc544fdb1e4c28ca1982f93ac8a389565a11a4e6158b3c28fcd1f648d715f90_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_219868afc342860f96d47d253c153d51b4a9722bfac0cff7701fa86345d6f0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219868afc342860f96d47d253c153d51b4a9722bfac0cff7701fa86345d6f0fc->enter($__internal_219868afc342860f96d47d253c153d51b4a9722bfac0cff7701fa86345d6f0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_9b65b4ee0f3b7b0f99e4c383541753f21b82dd09fbf439d0e1cb2e2419e6ae45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b65b4ee0f3b7b0f99e4c383541753f21b82dd09fbf439d0e1cb2e2419e6ae45->enter($__internal_9b65b4ee0f3b7b0f99e4c383541753f21b82dd09fbf439d0e1cb2e2419e6ae45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_9b65b4ee0f3b7b0f99e4c383541753f21b82dd09fbf439d0e1cb2e2419e6ae45->leave($__internal_9b65b4ee0f3b7b0f99e4c383541753f21b82dd09fbf439d0e1cb2e2419e6ae45_prof);

        
        $__internal_219868afc342860f96d47d253c153d51b4a9722bfac0cff7701fa86345d6f0fc->leave($__internal_219868afc342860f96d47d253c153d51b4a9722bfac0cff7701fa86345d6f0fc_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_6fc411318cd525f4ed8c6cf5537833fe1222492a67915c9fe01959a11c709d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc411318cd525f4ed8c6cf5537833fe1222492a67915c9fe01959a11c709d74->enter($__internal_6fc411318cd525f4ed8c6cf5537833fe1222492a67915c9fe01959a11c709d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_4ab391bc99ad46475081a749382b02ebf0cf10c00f9a8bc12f04e89a32a52bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab391bc99ad46475081a749382b02ebf0cf10c00f9a8bc12f04e89a32a52bf8->enter($__internal_4ab391bc99ad46475081a749382b02ebf0cf10c00f9a8bc12f04e89a32a52bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_4ab391bc99ad46475081a749382b02ebf0cf10c00f9a8bc12f04e89a32a52bf8->leave($__internal_4ab391bc99ad46475081a749382b02ebf0cf10c00f9a8bc12f04e89a32a52bf8_prof);

        
        $__internal_6fc411318cd525f4ed8c6cf5537833fe1222492a67915c9fe01959a11c709d74->leave($__internal_6fc411318cd525f4ed8c6cf5537833fe1222492a67915c9fe01959a11c709d74_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_e210978586630d8c8cbaf66b88c88a3ee4c8c8a2f879131cd0b957d3d86ae04e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e210978586630d8c8cbaf66b88c88a3ee4c8c8a2f879131cd0b957d3d86ae04e->enter($__internal_e210978586630d8c8cbaf66b88c88a3ee4c8c8a2f879131cd0b957d3d86ae04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_d54b3a10237e70ec348b7a84801e14853d4ee50697c0e2ae5f0e354a71b5feb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54b3a10237e70ec348b7a84801e14853d4ee50697c0e2ae5f0e354a71b5feb3->enter($__internal_d54b3a10237e70ec348b7a84801e14853d4ee50697c0e2ae5f0e354a71b5feb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d54b3a10237e70ec348b7a84801e14853d4ee50697c0e2ae5f0e354a71b5feb3->leave($__internal_d54b3a10237e70ec348b7a84801e14853d4ee50697c0e2ae5f0e354a71b5feb3_prof);

        
        $__internal_e210978586630d8c8cbaf66b88c88a3ee4c8c8a2f879131cd0b957d3d86ae04e->leave($__internal_e210978586630d8c8cbaf66b88c88a3ee4c8c8a2f879131cd0b957d3d86ae04e_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_0e400d3135efab737b9f004425003879fd7b9b837b2547f5d2781c965ca8196e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e400d3135efab737b9f004425003879fd7b9b837b2547f5d2781c965ca8196e->enter($__internal_0e400d3135efab737b9f004425003879fd7b9b837b2547f5d2781c965ca8196e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_cd0432fa605f29978d6b9b5ec8b7f190e6846b2d6e988050b02dba94aa52155e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0432fa605f29978d6b9b5ec8b7f190e6846b2d6e988050b02dba94aa52155e->enter($__internal_cd0432fa605f29978d6b9b5ec8b7f190e6846b2d6e988050b02dba94aa52155e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_cd0432fa605f29978d6b9b5ec8b7f190e6846b2d6e988050b02dba94aa52155e->leave($__internal_cd0432fa605f29978d6b9b5ec8b7f190e6846b2d6e988050b02dba94aa52155e_prof);

        
        $__internal_0e400d3135efab737b9f004425003879fd7b9b837b2547f5d2781c965ca8196e->leave($__internal_0e400d3135efab737b9f004425003879fd7b9b837b2547f5d2781c965ca8196e_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fcdd80b61e1322fe12bf3345a76bbb7ad57373762e67758054d508aa37450ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcdd80b61e1322fe12bf3345a76bbb7ad57373762e67758054d508aa37450ea4->enter($__internal_fcdd80b61e1322fe12bf3345a76bbb7ad57373762e67758054d508aa37450ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4c07e0fabcb9f107c3d60a0c7aacfad408dcf2a0e69825473362c522f34d0e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c07e0fabcb9f107c3d60a0c7aacfad408dcf2a0e69825473362c522f34d0e69->enter($__internal_4c07e0fabcb9f107c3d60a0c7aacfad408dcf2a0e69825473362c522f34d0e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_4c07e0fabcb9f107c3d60a0c7aacfad408dcf2a0e69825473362c522f34d0e69->leave($__internal_4c07e0fabcb9f107c3d60a0c7aacfad408dcf2a0e69825473362c522f34d0e69_prof);

        
        $__internal_fcdd80b61e1322fe12bf3345a76bbb7ad57373762e67758054d508aa37450ea4->leave($__internal_fcdd80b61e1322fe12bf3345a76bbb7ad57373762e67758054d508aa37450ea4_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_00e9c377eecc2e5cd493bff980c983364cc96da3462a8da94c89e1a5c81339b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e9c377eecc2e5cd493bff980c983364cc96da3462a8da94c89e1a5c81339b8->enter($__internal_00e9c377eecc2e5cd493bff980c983364cc96da3462a8da94c89e1a5c81339b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c6cd51d07ac3ad4aa8ba333e64e3e74891d957fc7dabeba1e31aa142560bc525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6cd51d07ac3ad4aa8ba333e64e3e74891d957fc7dabeba1e31aa142560bc525->enter($__internal_c6cd51d07ac3ad4aa8ba333e64e3e74891d957fc7dabeba1e31aa142560bc525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_c6cd51d07ac3ad4aa8ba333e64e3e74891d957fc7dabeba1e31aa142560bc525->leave($__internal_c6cd51d07ac3ad4aa8ba333e64e3e74891d957fc7dabeba1e31aa142560bc525_prof);

        
        $__internal_00e9c377eecc2e5cd493bff980c983364cc96da3462a8da94c89e1a5c81339b8->leave($__internal_00e9c377eecc2e5cd493bff980c983364cc96da3462a8da94c89e1a5c81339b8_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_57e17b74e59ee505bd113d992d897902189274b1ea8483e25f9548c638fc21bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e17b74e59ee505bd113d992d897902189274b1ea8483e25f9548c638fc21bb->enter($__internal_57e17b74e59ee505bd113d992d897902189274b1ea8483e25f9548c638fc21bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_de7b4a9b107b3576f3bab4cc9cef9eb2033414f6cb40da4235066c239bb4de69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7b4a9b107b3576f3bab4cc9cef9eb2033414f6cb40da4235066c239bb4de69->enter($__internal_de7b4a9b107b3576f3bab4cc9cef9eb2033414f6cb40da4235066c239bb4de69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_de7b4a9b107b3576f3bab4cc9cef9eb2033414f6cb40da4235066c239bb4de69->leave($__internal_de7b4a9b107b3576f3bab4cc9cef9eb2033414f6cb40da4235066c239bb4de69_prof);

        
        $__internal_57e17b74e59ee505bd113d992d897902189274b1ea8483e25f9548c638fc21bb->leave($__internal_57e17b74e59ee505bd113d992d897902189274b1ea8483e25f9548c638fc21bb_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_447e173c8706e655d703d5e4fe728415372a839731ec4bebaa23e8754604e814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447e173c8706e655d703d5e4fe728415372a839731ec4bebaa23e8754604e814->enter($__internal_447e173c8706e655d703d5e4fe728415372a839731ec4bebaa23e8754604e814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_54f1ce082c2be12d7a05b1f948f6337aa1992dbcd28b96c23afd910d0be65b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f1ce082c2be12d7a05b1f948f6337aa1992dbcd28b96c23afd910d0be65b52->enter($__internal_54f1ce082c2be12d7a05b1f948f6337aa1992dbcd28b96c23afd910d0be65b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_54f1ce082c2be12d7a05b1f948f6337aa1992dbcd28b96c23afd910d0be65b52->leave($__internal_54f1ce082c2be12d7a05b1f948f6337aa1992dbcd28b96c23afd910d0be65b52_prof);

        
        $__internal_447e173c8706e655d703d5e4fe728415372a839731ec4bebaa23e8754604e814->leave($__internal_447e173c8706e655d703d5e4fe728415372a839731ec4bebaa23e8754604e814_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_a4319c7bc0eefdbc55afbbe22ffb61f5d062c0ff75a1ec6a3e54444402313e2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4319c7bc0eefdbc55afbbe22ffb61f5d062c0ff75a1ec6a3e54444402313e2b->enter($__internal_a4319c7bc0eefdbc55afbbe22ffb61f5d062c0ff75a1ec6a3e54444402313e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_4c843127bf4f75b7bb16d0663bdfff87b0da36933630ed0f75b68c970a0ba096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c843127bf4f75b7bb16d0663bdfff87b0da36933630ed0f75b68c970a0ba096->enter($__internal_4c843127bf4f75b7bb16d0663bdfff87b0da36933630ed0f75b68c970a0ba096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4c843127bf4f75b7bb16d0663bdfff87b0da36933630ed0f75b68c970a0ba096->leave($__internal_4c843127bf4f75b7bb16d0663bdfff87b0da36933630ed0f75b68c970a0ba096_prof);

        
        $__internal_a4319c7bc0eefdbc55afbbe22ffb61f5d062c0ff75a1ec6a3e54444402313e2b->leave($__internal_a4319c7bc0eefdbc55afbbe22ffb61f5d062c0ff75a1ec6a3e54444402313e2b_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_f7f2209e16e356437bd2b93cb35c4efadadd9450db4f8c0a4c58074e99c3216f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7f2209e16e356437bd2b93cb35c4efadadd9450db4f8c0a4c58074e99c3216f->enter($__internal_f7f2209e16e356437bd2b93cb35c4efadadd9450db4f8c0a4c58074e99c3216f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_46848d5443e67f1ec8a5ae66184a2f771de9d498af4cbee811ae94b7d697392e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46848d5443e67f1ec8a5ae66184a2f771de9d498af4cbee811ae94b7d697392e->enter($__internal_46848d5443e67f1ec8a5ae66184a2f771de9d498af4cbee811ae94b7d697392e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_46848d5443e67f1ec8a5ae66184a2f771de9d498af4cbee811ae94b7d697392e->leave($__internal_46848d5443e67f1ec8a5ae66184a2f771de9d498af4cbee811ae94b7d697392e_prof);

        
        $__internal_f7f2209e16e356437bd2b93cb35c4efadadd9450db4f8c0a4c58074e99c3216f->leave($__internal_f7f2209e16e356437bd2b93cb35c4efadadd9450db4f8c0a4c58074e99c3216f_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_52a7b369307ff0f835c12266df1c0c19fd16c11a9398d6cba50023e0edbc7e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a7b369307ff0f835c12266df1c0c19fd16c11a9398d6cba50023e0edbc7e47->enter($__internal_52a7b369307ff0f835c12266df1c0c19fd16c11a9398d6cba50023e0edbc7e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_997a8884b202fdcbe2f670a474e04d8b62e3d111ccb35d9e1336ec7f05a1fff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997a8884b202fdcbe2f670a474e04d8b62e3d111ccb35d9e1336ec7f05a1fff4->enter($__internal_997a8884b202fdcbe2f670a474e04d8b62e3d111ccb35d9e1336ec7f05a1fff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_997a8884b202fdcbe2f670a474e04d8b62e3d111ccb35d9e1336ec7f05a1fff4->leave($__internal_997a8884b202fdcbe2f670a474e04d8b62e3d111ccb35d9e1336ec7f05a1fff4_prof);

        
        $__internal_52a7b369307ff0f835c12266df1c0c19fd16c11a9398d6cba50023e0edbc7e47->leave($__internal_52a7b369307ff0f835c12266df1c0c19fd16c11a9398d6cba50023e0edbc7e47_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a3f6fd3be6e15e76bcc13fd64b848d89db191f5c30dc2215f3f5e325a611a82b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f6fd3be6e15e76bcc13fd64b848d89db191f5c30dc2215f3f5e325a611a82b->enter($__internal_a3f6fd3be6e15e76bcc13fd64b848d89db191f5c30dc2215f3f5e325a611a82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_371de28180a3cb0de7d7259e32d51245b4b9fffe2e2fc06e603078e0831ba48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371de28180a3cb0de7d7259e32d51245b4b9fffe2e2fc06e603078e0831ba48c->enter($__internal_371de28180a3cb0de7d7259e32d51245b4b9fffe2e2fc06e603078e0831ba48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_371de28180a3cb0de7d7259e32d51245b4b9fffe2e2fc06e603078e0831ba48c->leave($__internal_371de28180a3cb0de7d7259e32d51245b4b9fffe2e2fc06e603078e0831ba48c_prof);

        
        $__internal_a3f6fd3be6e15e76bcc13fd64b848d89db191f5c30dc2215f3f5e325a611a82b->leave($__internal_a3f6fd3be6e15e76bcc13fd64b848d89db191f5c30dc2215f3f5e325a611a82b_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_491110f6aa1f6f9a1ae75f40e55849346f444c30ebbad83172145f96d2a8fc23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491110f6aa1f6f9a1ae75f40e55849346f444c30ebbad83172145f96d2a8fc23->enter($__internal_491110f6aa1f6f9a1ae75f40e55849346f444c30ebbad83172145f96d2a8fc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_2a55efd6ccf84a1b36f265b6aae384821b22ff2e94693294f7233b6e14622208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a55efd6ccf84a1b36f265b6aae384821b22ff2e94693294f7233b6e14622208->enter($__internal_2a55efd6ccf84a1b36f265b6aae384821b22ff2e94693294f7233b6e14622208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_2a55efd6ccf84a1b36f265b6aae384821b22ff2e94693294f7233b6e14622208->leave($__internal_2a55efd6ccf84a1b36f265b6aae384821b22ff2e94693294f7233b6e14622208_prof);

        
        $__internal_491110f6aa1f6f9a1ae75f40e55849346f444c30ebbad83172145f96d2a8fc23->leave($__internal_491110f6aa1f6f9a1ae75f40e55849346f444c30ebbad83172145f96d2a8fc23_prof);

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
