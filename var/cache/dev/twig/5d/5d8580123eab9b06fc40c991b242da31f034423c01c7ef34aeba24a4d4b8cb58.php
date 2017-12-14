<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_21b90461452eac482b79fe72988db52082c4aa52bb38133c794ebc6005478f89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71c815cc227dc1729230b9ea0882a24ba3f1af782bcfb5222ef9dc33c5c0d3dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c815cc227dc1729230b9ea0882a24ba3f1af782bcfb5222ef9dc33c5c0d3dc->enter($__internal_71c815cc227dc1729230b9ea0882a24ba3f1af782bcfb5222ef9dc33c5c0d3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_b0ae60ee6c8635e94e78bb3777a16bcf00f40628b016882d5ab83743cea6f4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ae60ee6c8635e94e78bb3777a16bcf00f40628b016882d5ab83743cea6f4a3->enter($__internal_b0ae60ee6c8635e94e78bb3777a16bcf00f40628b016882d5ab83743cea6f4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_71c815cc227dc1729230b9ea0882a24ba3f1af782bcfb5222ef9dc33c5c0d3dc->leave($__internal_71c815cc227dc1729230b9ea0882a24ba3f1af782bcfb5222ef9dc33c5c0d3dc_prof);

        
        $__internal_b0ae60ee6c8635e94e78bb3777a16bcf00f40628b016882d5ab83743cea6f4a3->leave($__internal_b0ae60ee6c8635e94e78bb3777a16bcf00f40628b016882d5ab83743cea6f4a3_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_560a99686a18b7e59d9a85216fc2907c34f08d2854ee3983a392b3912e5fba77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560a99686a18b7e59d9a85216fc2907c34f08d2854ee3983a392b3912e5fba77->enter($__internal_560a99686a18b7e59d9a85216fc2907c34f08d2854ee3983a392b3912e5fba77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_09cefc25805185ddac0d83a174b2a94d427ed68244d1b8d00cb7b8a59f9d8b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09cefc25805185ddac0d83a174b2a94d427ed68244d1b8d00cb7b8a59f9d8b1f->enter($__internal_09cefc25805185ddac0d83a174b2a94d427ed68244d1b8d00cb7b8a59f9d8b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_09cefc25805185ddac0d83a174b2a94d427ed68244d1b8d00cb7b8a59f9d8b1f->leave($__internal_09cefc25805185ddac0d83a174b2a94d427ed68244d1b8d00cb7b8a59f9d8b1f_prof);

        
        $__internal_560a99686a18b7e59d9a85216fc2907c34f08d2854ee3983a392b3912e5fba77->leave($__internal_560a99686a18b7e59d9a85216fc2907c34f08d2854ee3983a392b3912e5fba77_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_834035328caf3eb9701a3f46334614897221da3712f31cbfa462ef8009b0ec0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_834035328caf3eb9701a3f46334614897221da3712f31cbfa462ef8009b0ec0f->enter($__internal_834035328caf3eb9701a3f46334614897221da3712f31cbfa462ef8009b0ec0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e2aac9d7ce8d659527754ba3f9bf1357515f621ee7d70a82e67b7139117de6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2aac9d7ce8d659527754ba3f9bf1357515f621ee7d70a82e67b7139117de6df->enter($__internal_e2aac9d7ce8d659527754ba3f9bf1357515f621ee7d70a82e67b7139117de6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_e2aac9d7ce8d659527754ba3f9bf1357515f621ee7d70a82e67b7139117de6df->leave($__internal_e2aac9d7ce8d659527754ba3f9bf1357515f621ee7d70a82e67b7139117de6df_prof);

        
        $__internal_834035328caf3eb9701a3f46334614897221da3712f31cbfa462ef8009b0ec0f->leave($__internal_834035328caf3eb9701a3f46334614897221da3712f31cbfa462ef8009b0ec0f_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_de20ff12f4ac81f6d72aa4d28d07257e4ec9f2df4a236868db3a3bdc088f1cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de20ff12f4ac81f6d72aa4d28d07257e4ec9f2df4a236868db3a3bdc088f1cb5->enter($__internal_de20ff12f4ac81f6d72aa4d28d07257e4ec9f2df4a236868db3a3bdc088f1cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_e9cc114a1789cd3a29727465c0f293afa98329febe566de8049de65a6619669a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9cc114a1789cd3a29727465c0f293afa98329febe566de8049de65a6619669a->enter($__internal_e9cc114a1789cd3a29727465c0f293afa98329febe566de8049de65a6619669a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_e9cc114a1789cd3a29727465c0f293afa98329febe566de8049de65a6619669a->leave($__internal_e9cc114a1789cd3a29727465c0f293afa98329febe566de8049de65a6619669a_prof);

        
        $__internal_de20ff12f4ac81f6d72aa4d28d07257e4ec9f2df4a236868db3a3bdc088f1cb5->leave($__internal_de20ff12f4ac81f6d72aa4d28d07257e4ec9f2df4a236868db3a3bdc088f1cb5_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_05d870b04e7307dc2c25152abcb27bc2711b3a9c8ea5a0ec14bb0bb1adc2004d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d870b04e7307dc2c25152abcb27bc2711b3a9c8ea5a0ec14bb0bb1adc2004d->enter($__internal_05d870b04e7307dc2c25152abcb27bc2711b3a9c8ea5a0ec14bb0bb1adc2004d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7f5731ec94c7f02fbdbb52b1f03e2abcf235b366b1c4f8d386ebc62600a2b201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5731ec94c7f02fbdbb52b1f03e2abcf235b366b1c4f8d386ebc62600a2b201->enter($__internal_7f5731ec94c7f02fbdbb52b1f03e2abcf235b366b1c4f8d386ebc62600a2b201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_7f5731ec94c7f02fbdbb52b1f03e2abcf235b366b1c4f8d386ebc62600a2b201->leave($__internal_7f5731ec94c7f02fbdbb52b1f03e2abcf235b366b1c4f8d386ebc62600a2b201_prof);

        
        $__internal_05d870b04e7307dc2c25152abcb27bc2711b3a9c8ea5a0ec14bb0bb1adc2004d->leave($__internal_05d870b04e7307dc2c25152abcb27bc2711b3a9c8ea5a0ec14bb0bb1adc2004d_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_ce76073bdebd42376ab3ed35f5e25d422e3b29a790d612089f7c66c08e123663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce76073bdebd42376ab3ed35f5e25d422e3b29a790d612089f7c66c08e123663->enter($__internal_ce76073bdebd42376ab3ed35f5e25d422e3b29a790d612089f7c66c08e123663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_447ec6266d15d7c32c3225ced99576c1f1b76a89e7544b64214b64e0d41b93af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447ec6266d15d7c32c3225ced99576c1f1b76a89e7544b64214b64e0d41b93af->enter($__internal_447ec6266d15d7c32c3225ced99576c1f1b76a89e7544b64214b64e0d41b93af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_447ec6266d15d7c32c3225ced99576c1f1b76a89e7544b64214b64e0d41b93af->leave($__internal_447ec6266d15d7c32c3225ced99576c1f1b76a89e7544b64214b64e0d41b93af_prof);

        
        $__internal_ce76073bdebd42376ab3ed35f5e25d422e3b29a790d612089f7c66c08e123663->leave($__internal_ce76073bdebd42376ab3ed35f5e25d422e3b29a790d612089f7c66c08e123663_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_6d9a6dbcdf6f7122edfa7bc0ca56df84b7ebf01c9fd633a85815399190b375d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d9a6dbcdf6f7122edfa7bc0ca56df84b7ebf01c9fd633a85815399190b375d8->enter($__internal_6d9a6dbcdf6f7122edfa7bc0ca56df84b7ebf01c9fd633a85815399190b375d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_d44c31bb3b334c72f395c9e75541337ed83da513701a72838b577d7059ba3cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d44c31bb3b334c72f395c9e75541337ed83da513701a72838b577d7059ba3cab->enter($__internal_d44c31bb3b334c72f395c9e75541337ed83da513701a72838b577d7059ba3cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_d44c31bb3b334c72f395c9e75541337ed83da513701a72838b577d7059ba3cab->leave($__internal_d44c31bb3b334c72f395c9e75541337ed83da513701a72838b577d7059ba3cab_prof);

        
        $__internal_6d9a6dbcdf6f7122edfa7bc0ca56df84b7ebf01c9fd633a85815399190b375d8->leave($__internal_6d9a6dbcdf6f7122edfa7bc0ca56df84b7ebf01c9fd633a85815399190b375d8_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_5b216c278e144913ec0b103d8fe016f6c16bf48c2c9063adfe7e569d70e9bc84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b216c278e144913ec0b103d8fe016f6c16bf48c2c9063adfe7e569d70e9bc84->enter($__internal_5b216c278e144913ec0b103d8fe016f6c16bf48c2c9063adfe7e569d70e9bc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_8a09dab973ff73bebc3495eed410832ea746cf305070c2038a1d5a2b99b95bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a09dab973ff73bebc3495eed410832ea746cf305070c2038a1d5a2b99b95bdd->enter($__internal_8a09dab973ff73bebc3495eed410832ea746cf305070c2038a1d5a2b99b95bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_8a09dab973ff73bebc3495eed410832ea746cf305070c2038a1d5a2b99b95bdd->leave($__internal_8a09dab973ff73bebc3495eed410832ea746cf305070c2038a1d5a2b99b95bdd_prof);

        
        $__internal_5b216c278e144913ec0b103d8fe016f6c16bf48c2c9063adfe7e569d70e9bc84->leave($__internal_5b216c278e144913ec0b103d8fe016f6c16bf48c2c9063adfe7e569d70e9bc84_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0bcd97eadf866889b47f5bcb45776274b518afde9f91bcd3b5550e7b20514311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bcd97eadf866889b47f5bcb45776274b518afde9f91bcd3b5550e7b20514311->enter($__internal_0bcd97eadf866889b47f5bcb45776274b518afde9f91bcd3b5550e7b20514311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b79b13cf0465fec66b7207e9adb46fae44a9dcea9665de851bb6f69e451b426a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79b13cf0465fec66b7207e9adb46fae44a9dcea9665de851bb6f69e451b426a->enter($__internal_b79b13cf0465fec66b7207e9adb46fae44a9dcea9665de851bb6f69e451b426a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_b79b13cf0465fec66b7207e9adb46fae44a9dcea9665de851bb6f69e451b426a->leave($__internal_b79b13cf0465fec66b7207e9adb46fae44a9dcea9665de851bb6f69e451b426a_prof);

        
        $__internal_0bcd97eadf866889b47f5bcb45776274b518afde9f91bcd3b5550e7b20514311->leave($__internal_0bcd97eadf866889b47f5bcb45776274b518afde9f91bcd3b5550e7b20514311_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
