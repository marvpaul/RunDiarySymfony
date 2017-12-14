<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_1a6709f6ae1045e0bf51eab4a6252676cb5d6d00be7916af860eda912d0350e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d91e524ce47c69cfdf43a902965b2cf651a0ac521f3d415373c5fd7584aa6bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91e524ce47c69cfdf43a902965b2cf651a0ac521f3d415373c5fd7584aa6bcf->enter($__internal_d91e524ce47c69cfdf43a902965b2cf651a0ac521f3d415373c5fd7584aa6bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_a7f77579dfc4d7b6735410b636bfad17550be1dfeac1b24e0861286b7a65e7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f77579dfc4d7b6735410b636bfad17550be1dfeac1b24e0861286b7a65e7dd->enter($__internal_a7f77579dfc4d7b6735410b636bfad17550be1dfeac1b24e0861286b7a65e7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_d91e524ce47c69cfdf43a902965b2cf651a0ac521f3d415373c5fd7584aa6bcf->leave($__internal_d91e524ce47c69cfdf43a902965b2cf651a0ac521f3d415373c5fd7584aa6bcf_prof);

        
        $__internal_a7f77579dfc4d7b6735410b636bfad17550be1dfeac1b24e0861286b7a65e7dd->leave($__internal_a7f77579dfc4d7b6735410b636bfad17550be1dfeac1b24e0861286b7a65e7dd_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_661cc94b7cedc478292995136fabe75f02ed4f20354c2428d228ce7c13c160b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_661cc94b7cedc478292995136fabe75f02ed4f20354c2428d228ce7c13c160b8->enter($__internal_661cc94b7cedc478292995136fabe75f02ed4f20354c2428d228ce7c13c160b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_2a2984a70cb9dc8d2cac15db521c40f39beb394fd63b0ab5efa6991d74b45401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2984a70cb9dc8d2cac15db521c40f39beb394fd63b0ab5efa6991d74b45401->enter($__internal_2a2984a70cb9dc8d2cac15db521c40f39beb394fd63b0ab5efa6991d74b45401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_2a2984a70cb9dc8d2cac15db521c40f39beb394fd63b0ab5efa6991d74b45401->leave($__internal_2a2984a70cb9dc8d2cac15db521c40f39beb394fd63b0ab5efa6991d74b45401_prof);

        
        $__internal_661cc94b7cedc478292995136fabe75f02ed4f20354c2428d228ce7c13c160b8->leave($__internal_661cc94b7cedc478292995136fabe75f02ed4f20354c2428d228ce7c13c160b8_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_9280ef13f945ba5509ecf32b57cd07f1f8f7bef472710b17b6da7e7250a60cc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9280ef13f945ba5509ecf32b57cd07f1f8f7bef472710b17b6da7e7250a60cc6->enter($__internal_9280ef13f945ba5509ecf32b57cd07f1f8f7bef472710b17b6da7e7250a60cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_891c4910b6ef8b4acdec5425720b220f7ee7e31bf440ef5a977b491c7b785913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891c4910b6ef8b4acdec5425720b220f7ee7e31bf440ef5a977b491c7b785913->enter($__internal_891c4910b6ef8b4acdec5425720b220f7ee7e31bf440ef5a977b491c7b785913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_891c4910b6ef8b4acdec5425720b220f7ee7e31bf440ef5a977b491c7b785913->leave($__internal_891c4910b6ef8b4acdec5425720b220f7ee7e31bf440ef5a977b491c7b785913_prof);

        
        $__internal_9280ef13f945ba5509ecf32b57cd07f1f8f7bef472710b17b6da7e7250a60cc6->leave($__internal_9280ef13f945ba5509ecf32b57cd07f1f8f7bef472710b17b6da7e7250a60cc6_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d05b7881f994ff4cff9a1b3c3b126aaab62b796f2f3cebce209883516426ece7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05b7881f994ff4cff9a1b3c3b126aaab62b796f2f3cebce209883516426ece7->enter($__internal_d05b7881f994ff4cff9a1b3c3b126aaab62b796f2f3cebce209883516426ece7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_338e1d7629d50f756eeefbfdacf3664604291b61269574d2d339f4be90ed7382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338e1d7629d50f756eeefbfdacf3664604291b61269574d2d339f4be90ed7382->enter($__internal_338e1d7629d50f756eeefbfdacf3664604291b61269574d2d339f4be90ed7382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_338e1d7629d50f756eeefbfdacf3664604291b61269574d2d339f4be90ed7382->leave($__internal_338e1d7629d50f756eeefbfdacf3664604291b61269574d2d339f4be90ed7382_prof);

        
        $__internal_d05b7881f994ff4cff9a1b3c3b126aaab62b796f2f3cebce209883516426ece7->leave($__internal_d05b7881f994ff4cff9a1b3c3b126aaab62b796f2f3cebce209883516426ece7_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_133437c3f53fc70ab544aaa89809791e7d2db4b271ff0baa52be109953dec48a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133437c3f53fc70ab544aaa89809791e7d2db4b271ff0baa52be109953dec48a->enter($__internal_133437c3f53fc70ab544aaa89809791e7d2db4b271ff0baa52be109953dec48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_efcd398b801d5a9d2a2b9111d2f535b8a89934c1b075814d6fbb12760db82e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efcd398b801d5a9d2a2b9111d2f535b8a89934c1b075814d6fbb12760db82e95->enter($__internal_efcd398b801d5a9d2a2b9111d2f535b8a89934c1b075814d6fbb12760db82e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_efcd398b801d5a9d2a2b9111d2f535b8a89934c1b075814d6fbb12760db82e95->leave($__internal_efcd398b801d5a9d2a2b9111d2f535b8a89934c1b075814d6fbb12760db82e95_prof);

        
        $__internal_133437c3f53fc70ab544aaa89809791e7d2db4b271ff0baa52be109953dec48a->leave($__internal_133437c3f53fc70ab544aaa89809791e7d2db4b271ff0baa52be109953dec48a_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_a765eebbdfa6c464c92619eed3f24d71988e27bda922ed32ffb611d21f1e508f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a765eebbdfa6c464c92619eed3f24d71988e27bda922ed32ffb611d21f1e508f->enter($__internal_a765eebbdfa6c464c92619eed3f24d71988e27bda922ed32ffb611d21f1e508f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_3bb2afbc981e7b4b4d53483da88f2e62a38e52faa058b7f417c5bc81c96bcab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb2afbc981e7b4b4d53483da88f2e62a38e52faa058b7f417c5bc81c96bcab5->enter($__internal_3bb2afbc981e7b4b4d53483da88f2e62a38e52faa058b7f417c5bc81c96bcab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_3bb2afbc981e7b4b4d53483da88f2e62a38e52faa058b7f417c5bc81c96bcab5->leave($__internal_3bb2afbc981e7b4b4d53483da88f2e62a38e52faa058b7f417c5bc81c96bcab5_prof);

        
        $__internal_a765eebbdfa6c464c92619eed3f24d71988e27bda922ed32ffb611d21f1e508f->leave($__internal_a765eebbdfa6c464c92619eed3f24d71988e27bda922ed32ffb611d21f1e508f_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_edca5a9fc33c254d8266f4a5ad7dcb6ad285285d060c1c347c759cd7237ff70b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edca5a9fc33c254d8266f4a5ad7dcb6ad285285d060c1c347c759cd7237ff70b->enter($__internal_edca5a9fc33c254d8266f4a5ad7dcb6ad285285d060c1c347c759cd7237ff70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_dbed35ed1acaf31a19eaa4729921e50db19ddce0232db3e55aa3c48d41c19481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbed35ed1acaf31a19eaa4729921e50db19ddce0232db3e55aa3c48d41c19481->enter($__internal_dbed35ed1acaf31a19eaa4729921e50db19ddce0232db3e55aa3c48d41c19481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_dbed35ed1acaf31a19eaa4729921e50db19ddce0232db3e55aa3c48d41c19481->leave($__internal_dbed35ed1acaf31a19eaa4729921e50db19ddce0232db3e55aa3c48d41c19481_prof);

        
        $__internal_edca5a9fc33c254d8266f4a5ad7dcb6ad285285d060c1c347c759cd7237ff70b->leave($__internal_edca5a9fc33c254d8266f4a5ad7dcb6ad285285d060c1c347c759cd7237ff70b_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_5547c54111708f38edb0658a466f920a2526a7a6fab76d23f4e6fd43bb729209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5547c54111708f38edb0658a466f920a2526a7a6fab76d23f4e6fd43bb729209->enter($__internal_5547c54111708f38edb0658a466f920a2526a7a6fab76d23f4e6fd43bb729209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_048ddcf4dfb62869ca493cf15e79325bdc07990057460f6778e2a582b767b6b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048ddcf4dfb62869ca493cf15e79325bdc07990057460f6778e2a582b767b6b7->enter($__internal_048ddcf4dfb62869ca493cf15e79325bdc07990057460f6778e2a582b767b6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_048ddcf4dfb62869ca493cf15e79325bdc07990057460f6778e2a582b767b6b7->leave($__internal_048ddcf4dfb62869ca493cf15e79325bdc07990057460f6778e2a582b767b6b7_prof);

        
        $__internal_5547c54111708f38edb0658a466f920a2526a7a6fab76d23f4e6fd43bb729209->leave($__internal_5547c54111708f38edb0658a466f920a2526a7a6fab76d23f4e6fd43bb729209_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c4071b9ce325382d372889f52ff0405e53ed088a8369b6cbe32623f585ede889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4071b9ce325382d372889f52ff0405e53ed088a8369b6cbe32623f585ede889->enter($__internal_c4071b9ce325382d372889f52ff0405e53ed088a8369b6cbe32623f585ede889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7952d33f817c4b0ef9084420b15c11ac521f931d42776597782f8566640b3e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7952d33f817c4b0ef9084420b15c11ac521f931d42776597782f8566640b3e23->enter($__internal_7952d33f817c4b0ef9084420b15c11ac521f931d42776597782f8566640b3e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_7952d33f817c4b0ef9084420b15c11ac521f931d42776597782f8566640b3e23->leave($__internal_7952d33f817c4b0ef9084420b15c11ac521f931d42776597782f8566640b3e23_prof);

        
        $__internal_c4071b9ce325382d372889f52ff0405e53ed088a8369b6cbe32623f585ede889->leave($__internal_c4071b9ce325382d372889f52ff0405e53ed088a8369b6cbe32623f585ede889_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
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
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
