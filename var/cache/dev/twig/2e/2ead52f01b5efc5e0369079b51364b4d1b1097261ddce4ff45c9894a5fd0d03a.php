<?php

/* form_div_layout.html.twig */
class __TwigTemplate_064f1d2551c63f9850db387c85e7d8798f8705da50b4c81d836c94d2cf8f4269 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'color_widget' => array($this, 'block_color_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a4cacbbe73474b68f926c3b5047df34adde12e1ec194c77a27d80512811f51d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4cacbbe73474b68f926c3b5047df34adde12e1ec194c77a27d80512811f51d->enter($__internal_4a4cacbbe73474b68f926c3b5047df34adde12e1ec194c77a27d80512811f51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_8392b1b67cb734cc7a3cea984076c9629ff92aa977273b1fa863672118abdfd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8392b1b67cb734cc7a3cea984076c9629ff92aa977273b1fa863672118abdfd0->enter($__internal_8392b1b67cb734cc7a3cea984076c9629ff92aa977273b1fa863672118abdfd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 242
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 247
        $this->displayBlock('color_widget', $context, $blocks);
        // line 254
        $this->displayBlock('form_label', $context, $blocks);
        // line 276
        $this->displayBlock('button_label', $context, $blocks);
        // line 280
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 288
        $this->displayBlock('form_row', $context, $blocks);
        // line 296
        $this->displayBlock('button_row', $context, $blocks);
        // line 302
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 308
        $this->displayBlock('form', $context, $blocks);
        // line 314
        $this->displayBlock('form_start', $context, $blocks);
        // line 328
        $this->displayBlock('form_end', $context, $blocks);
        // line 335
        $this->displayBlock('form_errors', $context, $blocks);
        // line 345
        $this->displayBlock('form_rest', $context, $blocks);
        // line 366
        echo "
";
        // line 369
        $this->displayBlock('form_rows', $context, $blocks);
        // line 375
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 382
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 387
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 392
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_4a4cacbbe73474b68f926c3b5047df34adde12e1ec194c77a27d80512811f51d->leave($__internal_4a4cacbbe73474b68f926c3b5047df34adde12e1ec194c77a27d80512811f51d_prof);

        
        $__internal_8392b1b67cb734cc7a3cea984076c9629ff92aa977273b1fa863672118abdfd0->leave($__internal_8392b1b67cb734cc7a3cea984076c9629ff92aa977273b1fa863672118abdfd0_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_b65ca0c8455fd3470e77449234b4c67a56b1941d81daae55296550c17019156d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b65ca0c8455fd3470e77449234b4c67a56b1941d81daae55296550c17019156d->enter($__internal_b65ca0c8455fd3470e77449234b4c67a56b1941d81daae55296550c17019156d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_de14a430883864d6869cfab719d14aa732dd4722c877747f85019386e78aa1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de14a430883864d6869cfab719d14aa732dd4722c877747f85019386e78aa1f6->enter($__internal_de14a430883864d6869cfab719d14aa732dd4722c877747f85019386e78aa1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_de14a430883864d6869cfab719d14aa732dd4722c877747f85019386e78aa1f6->leave($__internal_de14a430883864d6869cfab719d14aa732dd4722c877747f85019386e78aa1f6_prof);

        
        $__internal_b65ca0c8455fd3470e77449234b4c67a56b1941d81daae55296550c17019156d->leave($__internal_b65ca0c8455fd3470e77449234b4c67a56b1941d81daae55296550c17019156d_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c68b352c3136767d6b44802c3b7e9d85f19e76a402d60322993a448bcb3fdde7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68b352c3136767d6b44802c3b7e9d85f19e76a402d60322993a448bcb3fdde7->enter($__internal_c68b352c3136767d6b44802c3b7e9d85f19e76a402d60322993a448bcb3fdde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_5af31c57af4ff97fa790cd98759b07bf85bfaa7f929e2011b59bcf9d6412c091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af31c57af4ff97fa790cd98759b07bf85bfaa7f929e2011b59bcf9d6412c091->enter($__internal_5af31c57af4ff97fa790cd98759b07bf85bfaa7f929e2011b59bcf9d6412c091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_5af31c57af4ff97fa790cd98759b07bf85bfaa7f929e2011b59bcf9d6412c091->leave($__internal_5af31c57af4ff97fa790cd98759b07bf85bfaa7f929e2011b59bcf9d6412c091_prof);

        
        $__internal_c68b352c3136767d6b44802c3b7e9d85f19e76a402d60322993a448bcb3fdde7->leave($__internal_c68b352c3136767d6b44802c3b7e9d85f19e76a402d60322993a448bcb3fdde7_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_56e1a952b65685df1f984d3b75f44c4ddfaeb3b2d4fd5cb640a6a9c63b887c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e1a952b65685df1f984d3b75f44c4ddfaeb3b2d4fd5cb640a6a9c63b887c1e->enter($__internal_56e1a952b65685df1f984d3b75f44c4ddfaeb3b2d4fd5cb640a6a9c63b887c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_40eaaccf334f7aa33b2980df8d92349240d8ac930eab3daabdddd5e5f599e6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40eaaccf334f7aa33b2980df8d92349240d8ac930eab3daabdddd5e5f599e6fc->enter($__internal_40eaaccf334f7aa33b2980df8d92349240d8ac930eab3daabdddd5e5f599e6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_40eaaccf334f7aa33b2980df8d92349240d8ac930eab3daabdddd5e5f599e6fc->leave($__internal_40eaaccf334f7aa33b2980df8d92349240d8ac930eab3daabdddd5e5f599e6fc_prof);

        
        $__internal_56e1a952b65685df1f984d3b75f44c4ddfaeb3b2d4fd5cb640a6a9c63b887c1e->leave($__internal_56e1a952b65685df1f984d3b75f44c4ddfaeb3b2d4fd5cb640a6a9c63b887c1e_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_1220d8396fc534137087ab879ad16869272b2e50b7c86f92663a0935c29fd061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1220d8396fc534137087ab879ad16869272b2e50b7c86f92663a0935c29fd061->enter($__internal_1220d8396fc534137087ab879ad16869272b2e50b7c86f92663a0935c29fd061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_15d6f6bfcf4d3d22df705fd0fc2d3648057b88894210a07d78047babe8e2cc7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d6f6bfcf4d3d22df705fd0fc2d3648057b88894210a07d78047babe8e2cc7c->enter($__internal_15d6f6bfcf4d3d22df705fd0fc2d3648057b88894210a07d78047babe8e2cc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_15d6f6bfcf4d3d22df705fd0fc2d3648057b88894210a07d78047babe8e2cc7c->leave($__internal_15d6f6bfcf4d3d22df705fd0fc2d3648057b88894210a07d78047babe8e2cc7c_prof);

        
        $__internal_1220d8396fc534137087ab879ad16869272b2e50b7c86f92663a0935c29fd061->leave($__internal_1220d8396fc534137087ab879ad16869272b2e50b7c86f92663a0935c29fd061_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_94b34a81dc6e9cc452e9a3205b372b15069e7d9ab85aabe82b5af5dfb9234b17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b34a81dc6e9cc452e9a3205b372b15069e7d9ab85aabe82b5af5dfb9234b17->enter($__internal_94b34a81dc6e9cc452e9a3205b372b15069e7d9ab85aabe82b5af5dfb9234b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_cd63f836672bfb757abe06bc77ef418374649fa2eac2fbdfcee0391cac9f28e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd63f836672bfb757abe06bc77ef418374649fa2eac2fbdfcee0391cac9f28e5->enter($__internal_cd63f836672bfb757abe06bc77ef418374649fa2eac2fbdfcee0391cac9f28e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_cd63f836672bfb757abe06bc77ef418374649fa2eac2fbdfcee0391cac9f28e5->leave($__internal_cd63f836672bfb757abe06bc77ef418374649fa2eac2fbdfcee0391cac9f28e5_prof);

        
        $__internal_94b34a81dc6e9cc452e9a3205b372b15069e7d9ab85aabe82b5af5dfb9234b17->leave($__internal_94b34a81dc6e9cc452e9a3205b372b15069e7d9ab85aabe82b5af5dfb9234b17_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_f1d09a2c81481533af43fe7586edb380bd85bb66ae20440d512ba1126706df77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d09a2c81481533af43fe7586edb380bd85bb66ae20440d512ba1126706df77->enter($__internal_f1d09a2c81481533af43fe7586edb380bd85bb66ae20440d512ba1126706df77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_6ac362548482e22c4d8b221723a1cbc8259c5a55c29f99b9bc3545b45a2caa46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac362548482e22c4d8b221723a1cbc8259c5a55c29f99b9bc3545b45a2caa46->enter($__internal_6ac362548482e22c4d8b221723a1cbc8259c5a55c29f99b9bc3545b45a2caa46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_6ac362548482e22c4d8b221723a1cbc8259c5a55c29f99b9bc3545b45a2caa46->leave($__internal_6ac362548482e22c4d8b221723a1cbc8259c5a55c29f99b9bc3545b45a2caa46_prof);

        
        $__internal_f1d09a2c81481533af43fe7586edb380bd85bb66ae20440d512ba1126706df77->leave($__internal_f1d09a2c81481533af43fe7586edb380bd85bb66ae20440d512ba1126706df77_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_8ef4941009e2f5471c0be7fcf335f66fa96de8903da82a897a5167ffdb93f2b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef4941009e2f5471c0be7fcf335f66fa96de8903da82a897a5167ffdb93f2b6->enter($__internal_8ef4941009e2f5471c0be7fcf335f66fa96de8903da82a897a5167ffdb93f2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_34da00a70b6131aefdc2ac298b3c3adeae59032577992988830404455d266c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34da00a70b6131aefdc2ac298b3c3adeae59032577992988830404455d266c17->enter($__internal_34da00a70b6131aefdc2ac298b3c3adeae59032577992988830404455d266c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 49, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_34da00a70b6131aefdc2ac298b3c3adeae59032577992988830404455d266c17->leave($__internal_34da00a70b6131aefdc2ac298b3c3adeae59032577992988830404455d266c17_prof);

        
        $__internal_8ef4941009e2f5471c0be7fcf335f66fa96de8903da82a897a5167ffdb93f2b6->leave($__internal_8ef4941009e2f5471c0be7fcf335f66fa96de8903da82a897a5167ffdb93f2b6_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_ab815be627a9f9f10b2615a043555655fe96e7f66dfeb6855b884016f8e6c770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab815be627a9f9f10b2615a043555655fe96e7f66dfeb6855b884016f8e6c770->enter($__internal_ab815be627a9f9f10b2615a043555655fe96e7f66dfeb6855b884016f8e6c770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_a9fe5682ccf37cc1792bd50f68f02a4f7723e61c19b99c7fb8ab79cc44e22f0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9fe5682ccf37cc1792bd50f68f02a4f7723e61c19b99c7fb8ab79cc44e22f0f->enter($__internal_a9fe5682ccf37cc1792bd50f68f02a4f7723e61c19b99c7fb8ab79cc44e22f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 55, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 55, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 55, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 55, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 62, $this->getSourceContext()); })())) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 63, $this->getSourceContext()); })());
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 65, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 65, $this->getSourceContext()); })())))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 69, $this->getSourceContext()); })());
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_a9fe5682ccf37cc1792bd50f68f02a4f7723e61c19b99c7fb8ab79cc44e22f0f->leave($__internal_a9fe5682ccf37cc1792bd50f68f02a4f7723e61c19b99c7fb8ab79cc44e22f0f_prof);

        
        $__internal_ab815be627a9f9f10b2615a043555655fe96e7f66dfeb6855b884016f8e6c770->leave($__internal_ab815be627a9f9f10b2615a043555655fe96e7f66dfeb6855b884016f8e6c770_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_ccaa9149332c8daa7e3707289592da77aded6dbc023be5846209d782d79b16cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccaa9149332c8daa7e3707289592da77aded6dbc023be5846209d782d79b16cd->enter($__internal_ccaa9149332c8daa7e3707289592da77aded6dbc023be5846209d782d79b16cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_6cc2c0d36cd1cb40ed9650803b77a69e18398521d6454eb27030bd6a6db8d066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc2c0d36cd1cb40ed9650803b77a69e18398521d6454eb27030bd6a6db8d066->enter($__internal_6cc2c0d36cd1cb40ed9650803b77a69e18398521d6454eb27030bd6a6db8d066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 75, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array())) {
                    $__internal_7f5a9f9e0e1b6482b42b4dac314d395730a644bde2b1a324f84b2a3f228792dc = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_7f5a9f9e0e1b6482b42b4dac314d395730a644bde2b1a324f84b2a3f228792dc)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_7f5a9f9e0e1b6482b42b4dac314d395730a644bde2b1a324f84b2a3f228792dc);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6cc2c0d36cd1cb40ed9650803b77a69e18398521d6454eb27030bd6a6db8d066->leave($__internal_6cc2c0d36cd1cb40ed9650803b77a69e18398521d6454eb27030bd6a6db8d066_prof);

        
        $__internal_ccaa9149332c8daa7e3707289592da77aded6dbc023be5846209d782d79b16cd->leave($__internal_ccaa9149332c8daa7e3707289592da77aded6dbc023be5846209d782d79b16cd_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_38e58272744e4372bea6fd81d108cc419f348e764597cac5afd93c66d2ec2294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e58272744e4372bea6fd81d108cc419f348e764597cac5afd93c66d2ec2294->enter($__internal_38e58272744e4372bea6fd81d108cc419f348e764597cac5afd93c66d2ec2294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_d1977af3689249ba2dbb844eff04ceed0b57206d3d7c42eba9b24d9c43b88f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1977af3689249ba2dbb844eff04ceed0b57206d3d7c42eba9b24d9c43b88f68->enter($__internal_d1977af3689249ba2dbb844eff04ceed0b57206d3d7c42eba9b24d9c43b88f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 88, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_d1977af3689249ba2dbb844eff04ceed0b57206d3d7c42eba9b24d9c43b88f68->leave($__internal_d1977af3689249ba2dbb844eff04ceed0b57206d3d7c42eba9b24d9c43b88f68_prof);

        
        $__internal_38e58272744e4372bea6fd81d108cc419f348e764597cac5afd93c66d2ec2294->leave($__internal_38e58272744e4372bea6fd81d108cc419f348e764597cac5afd93c66d2ec2294_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_52c5175c45188622bb7ca4c9465293808daf1a79b24bfa8b71208e756f2e1734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c5175c45188622bb7ca4c9465293808daf1a79b24bfa8b71208e756f2e1734->enter($__internal_52c5175c45188622bb7ca4c9465293808daf1a79b24bfa8b71208e756f2e1734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f7a4319474fb07b9b451217b632110ebff6ab29f8112b16065ae48decd6fdaee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a4319474fb07b9b451217b632110ebff6ab29f8112b16065ae48decd6fdaee->enter($__internal_f7a4319474fb07b9b451217b632110ebff6ab29f8112b16065ae48decd6fdaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 92, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_f7a4319474fb07b9b451217b632110ebff6ab29f8112b16065ae48decd6fdaee->leave($__internal_f7a4319474fb07b9b451217b632110ebff6ab29f8112b16065ae48decd6fdaee_prof);

        
        $__internal_52c5175c45188622bb7ca4c9465293808daf1a79b24bfa8b71208e756f2e1734->leave($__internal_52c5175c45188622bb7ca4c9465293808daf1a79b24bfa8b71208e756f2e1734_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_48ed2ffe7a5f16926d4751bc5368e121133c20f3167f31b5abc19c1e0849f8f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ed2ffe7a5f16926d4751bc5368e121133c20f3167f31b5abc19c1e0849f8f7->enter($__internal_48ed2ffe7a5f16926d4751bc5368e121133c20f3167f31b5abc19c1e0849f8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_1a05588ebc0f1ea1572b2b97c8c17e5737e9e429bbce372ea3e1ac9879ed6be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a05588ebc0f1ea1572b2b97c8c17e5737e9e429bbce372ea3e1ac9879ed6be7->enter($__internal_1a05588ebc0f1ea1572b2b97c8c17e5737e9e429bbce372ea3e1ac9879ed6be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_1a05588ebc0f1ea1572b2b97c8c17e5737e9e429bbce372ea3e1ac9879ed6be7->leave($__internal_1a05588ebc0f1ea1572b2b97c8c17e5737e9e429bbce372ea3e1ac9879ed6be7_prof);

        
        $__internal_48ed2ffe7a5f16926d4751bc5368e121133c20f3167f31b5abc19c1e0849f8f7->leave($__internal_48ed2ffe7a5f16926d4751bc5368e121133c20f3167f31b5abc19c1e0849f8f7_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_80b0f85181e992676143c4204ce962287f7f1ed32b0172cc58f5c34c4e55622a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b0f85181e992676143c4204ce962287f7f1ed32b0172cc58f5c34c4e55622a->enter($__internal_80b0f85181e992676143c4204ce962287f7f1ed32b0172cc58f5c34c4e55622a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_aa8cf957f424ff844dff634647c91320d6a7f8704b80ebe315bdde18ff7cbe77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8cf957f424ff844dff634647c91320d6a7f8704b80ebe315bdde18ff7cbe77->enter($__internal_aa8cf957f424ff844dff634647c91320d6a7f8704b80ebe315bdde18ff7cbe77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 109, $this->getSourceContext()); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 113, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_aa8cf957f424ff844dff634647c91320d6a7f8704b80ebe315bdde18ff7cbe77->leave($__internal_aa8cf957f424ff844dff634647c91320d6a7f8704b80ebe315bdde18ff7cbe77_prof);

        
        $__internal_80b0f85181e992676143c4204ce962287f7f1ed32b0172cc58f5c34c4e55622a->leave($__internal_80b0f85181e992676143c4204ce962287f7f1ed32b0172cc58f5c34c4e55622a_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_3004271022cd897dbbfdb1dd3c38ae980fa99770665978776f7a0968ea652a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3004271022cd897dbbfdb1dd3c38ae980fa99770665978776f7a0968ea652a9a->enter($__internal_3004271022cd897dbbfdb1dd3c38ae980fa99770665978776f7a0968ea652a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_68208ce20a7f47149d848c4befb386c8dacc95ef78c63a3f39c6f90b31962719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68208ce20a7f47149d848c4befb386c8dacc95ef78c63a3f39c6f90b31962719->enter($__internal_68208ce20a7f47149d848c4befb386c8dacc95ef78c63a3f39c6f90b31962719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 123, $this->getSourceContext()); })()) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 126, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_68208ce20a7f47149d848c4befb386c8dacc95ef78c63a3f39c6f90b31962719->leave($__internal_68208ce20a7f47149d848c4befb386c8dacc95ef78c63a3f39c6f90b31962719_prof);

        
        $__internal_3004271022cd897dbbfdb1dd3c38ae980fa99770665978776f7a0968ea652a9a->leave($__internal_3004271022cd897dbbfdb1dd3c38ae980fa99770665978776f7a0968ea652a9a_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_76626e893a00115bbd7226c47204a203405fa07bec3498bd14af163c1869286e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76626e893a00115bbd7226c47204a203405fa07bec3498bd14af163c1869286e->enter($__internal_76626e893a00115bbd7226c47204a203405fa07bec3498bd14af163c1869286e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_f7c68d2b21d3d64a915f7ffafb00d9847f6a5a84976b1c561a7ba151ecc6419a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c68d2b21d3d64a915f7ffafb00d9847f6a5a84976b1c561a7ba151ecc6419a->enter($__internal_f7c68d2b21d3d64a915f7ffafb00d9847f6a5a84976b1c561a7ba151ecc6419a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 134, $this->getSourceContext()); })()) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->getSourceContext()); })()), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 139, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 142, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 143, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 144, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 145, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 146, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 147, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 148, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 153, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 154, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 155, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 155, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 156, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 157, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 158, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 159, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 163, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_f7c68d2b21d3d64a915f7ffafb00d9847f6a5a84976b1c561a7ba151ecc6419a->leave($__internal_f7c68d2b21d3d64a915f7ffafb00d9847f6a5a84976b1c561a7ba151ecc6419a_prof);

        
        $__internal_76626e893a00115bbd7226c47204a203405fa07bec3498bd14af163c1869286e->leave($__internal_76626e893a00115bbd7226c47204a203405fa07bec3498bd14af163c1869286e_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_fcab1d1bb51348d55528f24d54eedcdb5b374048a268c12a9fdc53cd94c489a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcab1d1bb51348d55528f24d54eedcdb5b374048a268c12a9fdc53cd94c489a6->enter($__internal_fcab1d1bb51348d55528f24d54eedcdb5b374048a268c12a9fdc53cd94c489a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_2c4e9c6406f949320167a5644d9f1bf25c97c30d6135ceae9d52d28af37e2dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4e9c6406f949320167a5644d9f1bf25c97c30d6135ceae9d52d28af37e2dc1->enter($__internal_2c4e9c6406f949320167a5644d9f1bf25c97c30d6135ceae9d52d28af37e2dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2c4e9c6406f949320167a5644d9f1bf25c97c30d6135ceae9d52d28af37e2dc1->leave($__internal_2c4e9c6406f949320167a5644d9f1bf25c97c30d6135ceae9d52d28af37e2dc1_prof);

        
        $__internal_fcab1d1bb51348d55528f24d54eedcdb5b374048a268c12a9fdc53cd94c489a6->leave($__internal_fcab1d1bb51348d55528f24d54eedcdb5b374048a268c12a9fdc53cd94c489a6_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_83b5788d06c335807d209612113a80054f5211d34e83d9fb024bc8bacfaebfa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b5788d06c335807d209612113a80054f5211d34e83d9fb024bc8bacfaebfa0->enter($__internal_83b5788d06c335807d209612113a80054f5211d34e83d9fb024bc8bacfaebfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_bf913306f2755ed0869ae955fa4fad453517111f2ac25df155070f80773a0cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf913306f2755ed0869ae955fa4fad453517111f2ac25df155070f80773a0cbf->enter($__internal_bf913306f2755ed0869ae955fa4fad453517111f2ac25df155070f80773a0cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bf913306f2755ed0869ae955fa4fad453517111f2ac25df155070f80773a0cbf->leave($__internal_bf913306f2755ed0869ae955fa4fad453517111f2ac25df155070f80773a0cbf_prof);

        
        $__internal_83b5788d06c335807d209612113a80054f5211d34e83d9fb024bc8bacfaebfa0->leave($__internal_83b5788d06c335807d209612113a80054f5211d34e83d9fb024bc8bacfaebfa0_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e5e2131a6cb98cf462955fbdc05efd0673e527c449470ee73d962458a8a0dfeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e2131a6cb98cf462955fbdc05efd0673e527c449470ee73d962458a8a0dfeb->enter($__internal_e5e2131a6cb98cf462955fbdc05efd0673e527c449470ee73d962458a8a0dfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_e9bfc66d39e855e708208299b84c422f894b24df4aa5da3d972462b8a67103cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9bfc66d39e855e708208299b84c422f894b24df4aa5da3d972462b8a67103cd->enter($__internal_e9bfc66d39e855e708208299b84c422f894b24df4aa5da3d972462b8a67103cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_e9bfc66d39e855e708208299b84c422f894b24df4aa5da3d972462b8a67103cd->leave($__internal_e9bfc66d39e855e708208299b84c422f894b24df4aa5da3d972462b8a67103cd_prof);

        
        $__internal_e5e2131a6cb98cf462955fbdc05efd0673e527c449470ee73d962458a8a0dfeb->leave($__internal_e5e2131a6cb98cf462955fbdc05efd0673e527c449470ee73d962458a8a0dfeb_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_7c9bca0ab171a1df0e3a8208d9a5c79e7f7320b99781fb84d4f4275ef07dd44e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c9bca0ab171a1df0e3a8208d9a5c79e7f7320b99781fb84d4f4275ef07dd44e->enter($__internal_7c9bca0ab171a1df0e3a8208d9a5c79e7f7320b99781fb84d4f4275ef07dd44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_609ac142d8a6ac38b1cfc2a5e2182426749f1a767e875a60ee6d62437dbca9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609ac142d8a6ac38b1cfc2a5e2182426749f1a767e875a60ee6d62437dbca9c9->enter($__internal_609ac142d8a6ac38b1cfc2a5e2182426749f1a767e875a60ee6d62437dbca9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_609ac142d8a6ac38b1cfc2a5e2182426749f1a767e875a60ee6d62437dbca9c9->leave($__internal_609ac142d8a6ac38b1cfc2a5e2182426749f1a767e875a60ee6d62437dbca9c9_prof);

        
        $__internal_7c9bca0ab171a1df0e3a8208d9a5c79e7f7320b99781fb84d4f4275ef07dd44e->leave($__internal_7c9bca0ab171a1df0e3a8208d9a5c79e7f7320b99781fb84d4f4275ef07dd44e_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_ed5b1d6a13f219167870dbf8978b461fd16b59329b7c6c84d935cfca22fccc05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5b1d6a13f219167870dbf8978b461fd16b59329b7c6c84d935cfca22fccc05->enter($__internal_ed5b1d6a13f219167870dbf8978b461fd16b59329b7c6c84d935cfca22fccc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_ce650e9202f1a946f78c86a6a3cdc0662ed22a30bb982ea4abff13e66a6c29d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce650e9202f1a946f78c86a6a3cdc0662ed22a30bb982ea4abff13e66a6c29d2->enter($__internal_ce650e9202f1a946f78c86a6a3cdc0662ed22a30bb982ea4abff13e66a6c29d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ce650e9202f1a946f78c86a6a3cdc0662ed22a30bb982ea4abff13e66a6c29d2->leave($__internal_ce650e9202f1a946f78c86a6a3cdc0662ed22a30bb982ea4abff13e66a6c29d2_prof);

        
        $__internal_ed5b1d6a13f219167870dbf8978b461fd16b59329b7c6c84d935cfca22fccc05->leave($__internal_ed5b1d6a13f219167870dbf8978b461fd16b59329b7c6c84d935cfca22fccc05_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_4164b0078ad16b8e602b3da0718a364f495fcf4a77acf9b6dfd2b865e1edfaf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4164b0078ad16b8e602b3da0718a364f495fcf4a77acf9b6dfd2b865e1edfaf5->enter($__internal_4164b0078ad16b8e602b3da0718a364f495fcf4a77acf9b6dfd2b865e1edfaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_4d3c34e691568e36273aea3acd22e33f1eea9165acf244cb624b0948ce49ee7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3c34e691568e36273aea3acd22e33f1eea9165acf244cb624b0948ce49ee7a->enter($__internal_4d3c34e691568e36273aea3acd22e33f1eea9165acf244cb624b0948ce49ee7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_4d3c34e691568e36273aea3acd22e33f1eea9165acf244cb624b0948ce49ee7a->leave($__internal_4d3c34e691568e36273aea3acd22e33f1eea9165acf244cb624b0948ce49ee7a_prof);

        
        $__internal_4164b0078ad16b8e602b3da0718a364f495fcf4a77acf9b6dfd2b865e1edfaf5->leave($__internal_4164b0078ad16b8e602b3da0718a364f495fcf4a77acf9b6dfd2b865e1edfaf5_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_0cfe0666f25f0a6e962b904bafa63dac22d57e2094714a74eadc1eb7b5fc42ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cfe0666f25f0a6e962b904bafa63dac22d57e2094714a74eadc1eb7b5fc42ac->enter($__internal_0cfe0666f25f0a6e962b904bafa63dac22d57e2094714a74eadc1eb7b5fc42ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_1e63b46d024dadbdd930f3e3cdd17440683006a4b811e91fa99ac60edacf706d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e63b46d024dadbdd930f3e3cdd17440683006a4b811e91fa99ac60edacf706d->enter($__internal_1e63b46d024dadbdd930f3e3cdd17440683006a4b811e91fa99ac60edacf706d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1e63b46d024dadbdd930f3e3cdd17440683006a4b811e91fa99ac60edacf706d->leave($__internal_1e63b46d024dadbdd930f3e3cdd17440683006a4b811e91fa99ac60edacf706d_prof);

        
        $__internal_0cfe0666f25f0a6e962b904bafa63dac22d57e2094714a74eadc1eb7b5fc42ac->leave($__internal_0cfe0666f25f0a6e962b904bafa63dac22d57e2094714a74eadc1eb7b5fc42ac_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_d5d0b7909fa800b49a6a8de3fef5d0b448f50fc287602ad4c2dea5e53450240a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5d0b7909fa800b49a6a8de3fef5d0b448f50fc287602ad4c2dea5e53450240a->enter($__internal_d5d0b7909fa800b49a6a8de3fef5d0b448f50fc287602ad4c2dea5e53450240a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_46d261d475975d253d75fb18ab5a6244e92bb8512bcc419c0232cbfe20f534d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d261d475975d253d75fb18ab5a6244e92bb8512bcc419c0232cbfe20f534d6->enter($__internal_46d261d475975d253d75fb18ab5a6244e92bb8512bcc419c0232cbfe20f534d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_46d261d475975d253d75fb18ab5a6244e92bb8512bcc419c0232cbfe20f534d6->leave($__internal_46d261d475975d253d75fb18ab5a6244e92bb8512bcc419c0232cbfe20f534d6_prof);

        
        $__internal_d5d0b7909fa800b49a6a8de3fef5d0b448f50fc287602ad4c2dea5e53450240a->leave($__internal_d5d0b7909fa800b49a6a8de3fef5d0b448f50fc287602ad4c2dea5e53450240a_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_81c1c0cc3570091fe5ab0ca228d8805526948fdf4a2b79f6ff3c6caeafb3983b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81c1c0cc3570091fe5ab0ca228d8805526948fdf4a2b79f6ff3c6caeafb3983b->enter($__internal_81c1c0cc3570091fe5ab0ca228d8805526948fdf4a2b79f6ff3c6caeafb3983b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_b3d4eb3323422cd4793efea5d3472f3ba4a0a98adbd9a7cf1689d94cd577428a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d4eb3323422cd4793efea5d3472f3ba4a0a98adbd9a7cf1689d94cd577428a->enter($__internal_b3d4eb3323422cd4793efea5d3472f3ba4a0a98adbd9a7cf1689d94cd577428a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b3d4eb3323422cd4793efea5d3472f3ba4a0a98adbd9a7cf1689d94cd577428a->leave($__internal_b3d4eb3323422cd4793efea5d3472f3ba4a0a98adbd9a7cf1689d94cd577428a_prof);

        
        $__internal_81c1c0cc3570091fe5ab0ca228d8805526948fdf4a2b79f6ff3c6caeafb3983b->leave($__internal_81c1c0cc3570091fe5ab0ca228d8805526948fdf4a2b79f6ff3c6caeafb3983b_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_3312d5a49c81b680697dbe468156e62bc7d619ff954a6b440845456dd87dc358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3312d5a49c81b680697dbe468156e62bc7d619ff954a6b440845456dd87dc358->enter($__internal_3312d5a49c81b680697dbe468156e62bc7d619ff954a6b440845456dd87dc358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_5148e47387e793959ef8b7cfa53b53cd033a47b756b39c340a8b79945fdb4e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5148e47387e793959ef8b7cfa53b53cd033a47b756b39c340a8b79945fdb4e4a->enter($__internal_5148e47387e793959ef8b7cfa53b53cd033a47b756b39c340a8b79945fdb4e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5148e47387e793959ef8b7cfa53b53cd033a47b756b39c340a8b79945fdb4e4a->leave($__internal_5148e47387e793959ef8b7cfa53b53cd033a47b756b39c340a8b79945fdb4e4a_prof);

        
        $__internal_3312d5a49c81b680697dbe468156e62bc7d619ff954a6b440845456dd87dc358->leave($__internal_3312d5a49c81b680697dbe468156e62bc7d619ff954a6b440845456dd87dc358_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_4324140ac55a6056293fffedebb05cf26f4e286e1bf7f715fee87d72118c9416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4324140ac55a6056293fffedebb05cf26f4e286e1bf7f715fee87d72118c9416->enter($__internal_4324140ac55a6056293fffedebb05cf26f4e286e1bf7f715fee87d72118c9416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_63bdabc5588deed324d81655552979d86e80ccc8379413cf641f368ae7252e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63bdabc5588deed324d81655552979d86e80ccc8379413cf641f368ae7252e46->enter($__internal_63bdabc5588deed324d81655552979d86e80ccc8379413cf641f368ae7252e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })())))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 220, $this->getSourceContext()); })()))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 221, $this->getSourceContext()); })()), array("%name%" =>                 // line 222
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 222, $this->getSourceContext()); })()), "%id%" =>                 // line 223
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 223, $this->getSourceContext()); })())));
            } else {
                // line 226
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 226, $this->getSourceContext()); })()));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 229, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_63bdabc5588deed324d81655552979d86e80ccc8379413cf641f368ae7252e46->leave($__internal_63bdabc5588deed324d81655552979d86e80ccc8379413cf641f368ae7252e46_prof);

        
        $__internal_4324140ac55a6056293fffedebb05cf26f4e286e1bf7f715fee87d72118c9416->leave($__internal_4324140ac55a6056293fffedebb05cf26f4e286e1bf7f715fee87d72118c9416_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_3fe61307ea400f4c0403ec7c0a132369082df2a977bec54fa3f7f510b6f6defe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe61307ea400f4c0403ec7c0a132369082df2a977bec54fa3f7f510b6f6defe->enter($__internal_3fe61307ea400f4c0403ec7c0a132369082df2a977bec54fa3f7f510b6f6defe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_d396e6093bc2ff1271792dbc7ebe31fc27c6fa8db6c42b29fe72a1a6f1e45dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d396e6093bc2ff1271792dbc7ebe31fc27c6fa8db6c42b29fe72a1a6f1e45dd1->enter($__internal_d396e6093bc2ff1271792dbc7ebe31fc27c6fa8db6c42b29fe72a1a6f1e45dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_d396e6093bc2ff1271792dbc7ebe31fc27c6fa8db6c42b29fe72a1a6f1e45dd1->leave($__internal_d396e6093bc2ff1271792dbc7ebe31fc27c6fa8db6c42b29fe72a1a6f1e45dd1_prof);

        
        $__internal_3fe61307ea400f4c0403ec7c0a132369082df2a977bec54fa3f7f510b6f6defe->leave($__internal_3fe61307ea400f4c0403ec7c0a132369082df2a977bec54fa3f7f510b6f6defe_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_9edbbe6f7820762489818102b2d77875e9ed90d40b65241ed0bfd9e8b2e7b641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9edbbe6f7820762489818102b2d77875e9ed90d40b65241ed0bfd9e8b2e7b641->enter($__internal_9edbbe6f7820762489818102b2d77875e9ed90d40b65241ed0bfd9e8b2e7b641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_3fc0fd724e5caf612f5c5f0522cda3ecd307a80670d9caec6d5b4926a8998366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc0fd724e5caf612f5c5f0522cda3ecd307a80670d9caec6d5b4926a8998366->enter($__internal_3fc0fd724e5caf612f5c5f0522cda3ecd307a80670d9caec6d5b4926a8998366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_3fc0fd724e5caf612f5c5f0522cda3ecd307a80670d9caec6d5b4926a8998366->leave($__internal_3fc0fd724e5caf612f5c5f0522cda3ecd307a80670d9caec6d5b4926a8998366_prof);

        
        $__internal_9edbbe6f7820762489818102b2d77875e9ed90d40b65241ed0bfd9e8b2e7b641->leave($__internal_9edbbe6f7820762489818102b2d77875e9ed90d40b65241ed0bfd9e8b2e7b641_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_db4d34a5154539443eb9f22e8ea173b7ef08b888348dfb0ef654e4e11effff44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4d34a5154539443eb9f22e8ea173b7ef08b888348dfb0ef654e4e11effff44->enter($__internal_db4d34a5154539443eb9f22e8ea173b7ef08b888348dfb0ef654e4e11effff44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_bf8167faa1224583c1bf5a8b93ac5842aa994cd1f058e608712feacda63d34ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8167faa1224583c1bf5a8b93ac5842aa994cd1f058e608712feacda63d34ec->enter($__internal_bf8167faa1224583c1bf5a8b93ac5842aa994cd1f058e608712feacda63d34ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bf8167faa1224583c1bf5a8b93ac5842aa994cd1f058e608712feacda63d34ec->leave($__internal_bf8167faa1224583c1bf5a8b93ac5842aa994cd1f058e608712feacda63d34ec_prof);

        
        $__internal_db4d34a5154539443eb9f22e8ea173b7ef08b888348dfb0ef654e4e11effff44->leave($__internal_db4d34a5154539443eb9f22e8ea173b7ef08b888348dfb0ef654e4e11effff44_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_3211a9b7e3255e3745d71d0aab065df4e2466188c38888a3e09e3458e04cfdd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3211a9b7e3255e3745d71d0aab065df4e2466188c38888a3e09e3458e04cfdd0->enter($__internal_3211a9b7e3255e3745d71d0aab065df4e2466188c38888a3e09e3458e04cfdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_07122bdcf7ab47326cc069c087a78c2d2197206be0ddd0181fe90be7b00f7666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07122bdcf7ab47326cc069c087a78c2d2197206be0ddd0181fe90be7b00f7666->enter($__internal_07122bdcf7ab47326cc069c087a78c2d2197206be0ddd0181fe90be7b00f7666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_07122bdcf7ab47326cc069c087a78c2d2197206be0ddd0181fe90be7b00f7666->leave($__internal_07122bdcf7ab47326cc069c087a78c2d2197206be0ddd0181fe90be7b00f7666_prof);

        
        $__internal_3211a9b7e3255e3745d71d0aab065df4e2466188c38888a3e09e3458e04cfdd0->leave($__internal_3211a9b7e3255e3745d71d0aab065df4e2466188c38888a3e09e3458e04cfdd0_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_96645eb4e6a3af187861baa5cedd5bbc4419f3665b669ccb4c8a9b4510197dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96645eb4e6a3af187861baa5cedd5bbc4419f3665b669ccb4c8a9b4510197dd1->enter($__internal_96645eb4e6a3af187861baa5cedd5bbc4419f3665b669ccb4c8a9b4510197dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1c72df23a42817f69931d45ee8ae9c297fd1c63e409213f9da9fe396b82d98eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c72df23a42817f69931d45ee8ae9c297fd1c63e409213f9da9fe396b82d98eb->enter($__internal_1c72df23a42817f69931d45ee8ae9c297fd1c63e409213f9da9fe396b82d98eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 255
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 255, $this->getSourceContext()); })()) === false)) {
            // line 256
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 256, $this->getSourceContext()); })())) {
                // line 257
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 257, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 257, $this->getSourceContext()); })())));
            }
            // line 259
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 259, $this->getSourceContext()); })())) {
                // line 260
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 260, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 262
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 262, $this->getSourceContext()); })()))) {
                // line 263
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 263, $this->getSourceContext()); })()))) {
                    // line 264
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 264, $this->getSourceContext()); })()), array("%name%" =>                     // line 265
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 265, $this->getSourceContext()); })()), "%id%" =>                     // line 266
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 266, $this->getSourceContext()); })())));
                } else {
                    // line 269
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 269, $this->getSourceContext()); })()));
                }
            }
            // line 272
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })())) {
                $__internal_d507b17f2e3b098f877a22f5e7ba476afc6c81063a200491ab12c0dcba3d1ee2 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_d507b17f2e3b098f877a22f5e7ba476afc6c81063a200491ab12c0dcba3d1ee2)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_d507b17f2e3b098f877a22f5e7ba476afc6c81063a200491ab12c0dcba3d1ee2);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_1c72df23a42817f69931d45ee8ae9c297fd1c63e409213f9da9fe396b82d98eb->leave($__internal_1c72df23a42817f69931d45ee8ae9c297fd1c63e409213f9da9fe396b82d98eb_prof);

        
        $__internal_96645eb4e6a3af187861baa5cedd5bbc4419f3665b669ccb4c8a9b4510197dd1->leave($__internal_96645eb4e6a3af187861baa5cedd5bbc4419f3665b669ccb4c8a9b4510197dd1_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_37824571eb5afbc2e2b6187f636fe6f57888ba2561417273bdc3f9413980fa7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37824571eb5afbc2e2b6187f636fe6f57888ba2561417273bdc3f9413980fa7a->enter($__internal_37824571eb5afbc2e2b6187f636fe6f57888ba2561417273bdc3f9413980fa7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_68a1d82052bb9cc639dbc91442f7e62a2ddb8490b44d2e9c78dd01f1b37a1f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a1d82052bb9cc639dbc91442f7e62a2ddb8490b44d2e9c78dd01f1b37a1f98->enter($__internal_68a1d82052bb9cc639dbc91442f7e62a2ddb8490b44d2e9c78dd01f1b37a1f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_68a1d82052bb9cc639dbc91442f7e62a2ddb8490b44d2e9c78dd01f1b37a1f98->leave($__internal_68a1d82052bb9cc639dbc91442f7e62a2ddb8490b44d2e9c78dd01f1b37a1f98_prof);

        
        $__internal_37824571eb5afbc2e2b6187f636fe6f57888ba2561417273bdc3f9413980fa7a->leave($__internal_37824571eb5afbc2e2b6187f636fe6f57888ba2561417273bdc3f9413980fa7a_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_c923e5c58c761ae0009edfac63cc5b0954d8560655322efc5f1a7ee85905ef66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c923e5c58c761ae0009edfac63cc5b0954d8560655322efc5f1a7ee85905ef66->enter($__internal_c923e5c58c761ae0009edfac63cc5b0954d8560655322efc5f1a7ee85905ef66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_7f8e7bc23c5a9a881583e042e4a977fa121dabb660360cecfe83022a3b41b51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8e7bc23c5a9a881583e042e4a977fa121dabb660360cecfe83022a3b41b51f->enter($__internal_7f8e7bc23c5a9a881583e042e4a977fa121dabb660360cecfe83022a3b41b51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_7f8e7bc23c5a9a881583e042e4a977fa121dabb660360cecfe83022a3b41b51f->leave($__internal_7f8e7bc23c5a9a881583e042e4a977fa121dabb660360cecfe83022a3b41b51f_prof);

        
        $__internal_c923e5c58c761ae0009edfac63cc5b0954d8560655322efc5f1a7ee85905ef66->leave($__internal_c923e5c58c761ae0009edfac63cc5b0954d8560655322efc5f1a7ee85905ef66_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_39e6b74db5dc1b6e67cd3709be8bf21d923da055d56eb620b41c45a8cda447d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e6b74db5dc1b6e67cd3709be8bf21d923da055d56eb620b41c45a8cda447d8->enter($__internal_39e6b74db5dc1b6e67cd3709be8bf21d923da055d56eb620b41c45a8cda447d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0bf69a024a4ffbc9beffa2a12a272e266efec1345f6c2add602be67a6ad20c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf69a024a4ffbc9beffa2a12a272e266efec1345f6c2add602be67a6ad20c73->enter($__internal_0bf69a024a4ffbc9beffa2a12a272e266efec1345f6c2add602be67a6ad20c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 289
        echo "<div>";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->getSourceContext()); })()), 'label');
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 291, $this->getSourceContext()); })()), 'errors');
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 292, $this->getSourceContext()); })()), 'widget');
        // line 293
        echo "</div>";
        
        $__internal_0bf69a024a4ffbc9beffa2a12a272e266efec1345f6c2add602be67a6ad20c73->leave($__internal_0bf69a024a4ffbc9beffa2a12a272e266efec1345f6c2add602be67a6ad20c73_prof);

        
        $__internal_39e6b74db5dc1b6e67cd3709be8bf21d923da055d56eb620b41c45a8cda447d8->leave($__internal_39e6b74db5dc1b6e67cd3709be8bf21d923da055d56eb620b41c45a8cda447d8_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1469a756624198a359b6998230240d62e29e95dd3c044ca4cf33815924e3ad71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1469a756624198a359b6998230240d62e29e95dd3c044ca4cf33815924e3ad71->enter($__internal_1469a756624198a359b6998230240d62e29e95dd3c044ca4cf33815924e3ad71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_1d24971dda7ab5d3c58b65300588ec1d4d8e0461de09bb69412a6cfaf5b69ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d24971dda7ab5d3c58b65300588ec1d4d8e0461de09bb69412a6cfaf5b69ee2->enter($__internal_1d24971dda7ab5d3c58b65300588ec1d4d8e0461de09bb69412a6cfaf5b69ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_1d24971dda7ab5d3c58b65300588ec1d4d8e0461de09bb69412a6cfaf5b69ee2->leave($__internal_1d24971dda7ab5d3c58b65300588ec1d4d8e0461de09bb69412a6cfaf5b69ee2_prof);

        
        $__internal_1469a756624198a359b6998230240d62e29e95dd3c044ca4cf33815924e3ad71->leave($__internal_1469a756624198a359b6998230240d62e29e95dd3c044ca4cf33815924e3ad71_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_c7e1c07e0aeb552e994a905395537337b778ec5e695c993113d2d56f3aab256c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e1c07e0aeb552e994a905395537337b778ec5e695c993113d2d56f3aab256c->enter($__internal_c7e1c07e0aeb552e994a905395537337b778ec5e695c993113d2d56f3aab256c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_746b24a43696b11ad6ce99abe574a6536df6b64252c74fda413c0169bd2a1ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746b24a43696b11ad6ce99abe574a6536df6b64252c74fda413c0169bd2a1ff7->enter($__internal_746b24a43696b11ad6ce99abe574a6536df6b64252c74fda413c0169bd2a1ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_746b24a43696b11ad6ce99abe574a6536df6b64252c74fda413c0169bd2a1ff7->leave($__internal_746b24a43696b11ad6ce99abe574a6536df6b64252c74fda413c0169bd2a1ff7_prof);

        
        $__internal_c7e1c07e0aeb552e994a905395537337b778ec5e695c993113d2d56f3aab256c->leave($__internal_c7e1c07e0aeb552e994a905395537337b778ec5e695c993113d2d56f3aab256c_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_a7378cdec0eed21cc3c417b35db8c09610f329a69273784d066d4cde484a3f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7378cdec0eed21cc3c417b35db8c09610f329a69273784d066d4cde484a3f42->enter($__internal_a7378cdec0eed21cc3c417b35db8c09610f329a69273784d066d4cde484a3f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_39d404148b4384fcdf0ede9084f17dc787711d82a920d9cb54d843822a42d8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d404148b4384fcdf0ede9084f17dc787711d82a920d9cb54d843822a42d8ad->enter($__internal_39d404148b4384fcdf0ede9084f17dc787711d82a920d9cb54d843822a42d8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_39d404148b4384fcdf0ede9084f17dc787711d82a920d9cb54d843822a42d8ad->leave($__internal_39d404148b4384fcdf0ede9084f17dc787711d82a920d9cb54d843822a42d8ad_prof);

        
        $__internal_a7378cdec0eed21cc3c417b35db8c09610f329a69273784d066d4cde484a3f42->leave($__internal_a7378cdec0eed21cc3c417b35db8c09610f329a69273784d066d4cde484a3f42_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_07481490b883ba5dc2b3a8450e33e5a3f18db7744096e27c198635a1159a80fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07481490b883ba5dc2b3a8450e33e5a3f18db7744096e27c198635a1159a80fe->enter($__internal_07481490b883ba5dc2b3a8450e33e5a3f18db7744096e27c198635a1159a80fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_b079325a8bc4429ce4133f7932baeed7664b34151c56af33e80444a7a15a2e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b079325a8bc4429ce4133f7932baeed7664b34151c56af33e80444a7a15a2e52->enter($__internal_b079325a8bc4429ce4133f7932baeed7664b34151c56af33e80444a7a15a2e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 315
        twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 315, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
        // line 316
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 316, $this->getSourceContext()); })()));
        // line 317
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 317, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 318
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 318, $this->getSourceContext()); })());
        } else {
            // line 320
            $context["form_method"] = "POST";
        }
        // line 322
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 322, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 322, $this->getSourceContext()); })()));
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
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 322, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 323
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 323, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 323, $this->getSourceContext()); })()))) {
            // line 324
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_b079325a8bc4429ce4133f7932baeed7664b34151c56af33e80444a7a15a2e52->leave($__internal_b079325a8bc4429ce4133f7932baeed7664b34151c56af33e80444a7a15a2e52_prof);

        
        $__internal_07481490b883ba5dc2b3a8450e33e5a3f18db7744096e27c198635a1159a80fe->leave($__internal_07481490b883ba5dc2b3a8450e33e5a3f18db7744096e27c198635a1159a80fe_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_fc56a006468e126e6b667cdccec8f834dccc023a67b5a42b8930bf5c4dcb9bf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc56a006468e126e6b667cdccec8f834dccc023a67b5a42b8930bf5c4dcb9bf3->enter($__internal_fc56a006468e126e6b667cdccec8f834dccc023a67b5a42b8930bf5c4dcb9bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_e4bf5f890f391c9d6420cc0331cbb24d1ed979691c6cba1198945f309c0a0c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bf5f890f391c9d6420cc0331cbb24d1ed979691c6cba1198945f309c0a0c39->enter($__internal_e4bf5f890f391c9d6420cc0331cbb24d1ed979691c6cba1198945f309c0a0c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_e4bf5f890f391c9d6420cc0331cbb24d1ed979691c6cba1198945f309c0a0c39->leave($__internal_e4bf5f890f391c9d6420cc0331cbb24d1ed979691c6cba1198945f309c0a0c39_prof);

        
        $__internal_fc56a006468e126e6b667cdccec8f834dccc023a67b5a42b8930bf5c4dcb9bf3->leave($__internal_fc56a006468e126e6b667cdccec8f834dccc023a67b5a42b8930bf5c4dcb9bf3_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_c6bbdf941084424eb33d3468fa34d6b4be0a0d662b4ba32f7125f3fe7e94baac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6bbdf941084424eb33d3468fa34d6b4be0a0d662b4ba32f7125f3fe7e94baac->enter($__internal_c6bbdf941084424eb33d3468fa34d6b4be0a0d662b4ba32f7125f3fe7e94baac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_21bc6ffcc91ed4b389dfc997ef90974f13134c7b12581b523708bba66ed0a2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21bc6ffcc91ed4b389dfc997ef90974f13134c7b12581b523708bba66ed0a2ed->enter($__internal_21bc6ffcc91ed4b389dfc997ef90974f13134c7b12581b523708bba66ed0a2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 336
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 336, $this->getSourceContext()); })())) > 0)) {
            // line 337
            echo "<ul>";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 338, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 339
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "</ul>";
        }
        
        $__internal_21bc6ffcc91ed4b389dfc997ef90974f13134c7b12581b523708bba66ed0a2ed->leave($__internal_21bc6ffcc91ed4b389dfc997ef90974f13134c7b12581b523708bba66ed0a2ed_prof);

        
        $__internal_c6bbdf941084424eb33d3468fa34d6b4be0a0d662b4ba32f7125f3fe7e94baac->leave($__internal_c6bbdf941084424eb33d3468fa34d6b4be0a0d662b4ba32f7125f3fe7e94baac_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_3aead9d678635c955e7a7487849b36d73382014d1523d806158512c66b852956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aead9d678635c955e7a7487849b36d73382014d1523d806158512c66b852956->enter($__internal_3aead9d678635c955e7a7487849b36d73382014d1523d806158512c66b852956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_0794bc1c551d01353eea371af2c8db82ed07ab9467f814ca590d1ef45528588a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0794bc1c551d01353eea371af2c8db82ed07ab9467f814ca590d1ef45528588a->enter($__internal_0794bc1c551d01353eea371af2c8db82ed07ab9467f814ca590d1ef45528588a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 346, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 347
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 348
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })()), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })())))) {
            // line 353
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 353, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
            // line 354
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 354, $this->getSourceContext()); })()));
            // line 355
            if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 355, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
                // line 356
                $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 356, $this->getSourceContext()); })());
            } else {
                // line 358
                $context["form_method"] = "POST";
            }
            // line 361
            if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 361, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 361, $this->getSourceContext()); })()))) {
                // line 362
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 362, $this->getSourceContext()); })()), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_0794bc1c551d01353eea371af2c8db82ed07ab9467f814ca590d1ef45528588a->leave($__internal_0794bc1c551d01353eea371af2c8db82ed07ab9467f814ca590d1ef45528588a_prof);

        
        $__internal_3aead9d678635c955e7a7487849b36d73382014d1523d806158512c66b852956->leave($__internal_3aead9d678635c955e7a7487849b36d73382014d1523d806158512c66b852956_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_60f13f2e2e0a4b89c173dc36f1121692a79d518a8974129f89b5d70e3431cd05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f13f2e2e0a4b89c173dc36f1121692a79d518a8974129f89b5d70e3431cd05->enter($__internal_60f13f2e2e0a4b89c173dc36f1121692a79d518a8974129f89b5d70e3431cd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_e6211cf1ff70d792678ba5881f7acbbf60a675280973aa5da0305a760ef70c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6211cf1ff70d792678ba5881f7acbbf60a675280973aa5da0305a760ef70c51->enter($__internal_e6211cf1ff70d792678ba5881f7acbbf60a675280973aa5da0305a760ef70c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 370, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 371
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e6211cf1ff70d792678ba5881f7acbbf60a675280973aa5da0305a760ef70c51->leave($__internal_e6211cf1ff70d792678ba5881f7acbbf60a675280973aa5da0305a760ef70c51_prof);

        
        $__internal_60f13f2e2e0a4b89c173dc36f1121692a79d518a8974129f89b5d70e3431cd05->leave($__internal_60f13f2e2e0a4b89c173dc36f1121692a79d518a8974129f89b5d70e3431cd05_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_f1f2e11a7c3ae68aa0f1c504b2975ba46e67776128f443424dc95f8df507844d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f2e11a7c3ae68aa0f1c504b2975ba46e67776128f443424dc95f8df507844d->enter($__internal_f1f2e11a7c3ae68aa0f1c504b2975ba46e67776128f443424dc95f8df507844d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_83a7742cbd7db5a3c4c4c2c86a9a204edd381a477d585dd1ba0827b1c17c8e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a7742cbd7db5a3c4c4c2c86a9a204edd381a477d585dd1ba0827b1c17c8e64->enter($__internal_83a7742cbd7db5a3c4c4c2c86a9a204edd381a477d585dd1ba0827b1c17c8e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 376
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 377
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 377, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 378
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 378, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 379
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_83a7742cbd7db5a3c4c4c2c86a9a204edd381a477d585dd1ba0827b1c17c8e64->leave($__internal_83a7742cbd7db5a3c4c4c2c86a9a204edd381a477d585dd1ba0827b1c17c8e64_prof);

        
        $__internal_f1f2e11a7c3ae68aa0f1c504b2975ba46e67776128f443424dc95f8df507844d->leave($__internal_f1f2e11a7c3ae68aa0f1c504b2975ba46e67776128f443424dc95f8df507844d_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_2c1f5988992e5287cea99cbe05cec275942b3f93fa6f316e27c21259789442e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1f5988992e5287cea99cbe05cec275942b3f93fa6f316e27c21259789442e8->enter($__internal_2c1f5988992e5287cea99cbe05cec275942b3f93fa6f316e27c21259789442e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_bfdae31826c458cd8bc9314bf875892d0fe341a2046f3e2e30cebfc65b14df74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfdae31826c458cd8bc9314bf875892d0fe341a2046f3e2e30cebfc65b14df74->enter($__internal_bfdae31826c458cd8bc9314bf875892d0fe341a2046f3e2e30cebfc65b14df74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_bfdae31826c458cd8bc9314bf875892d0fe341a2046f3e2e30cebfc65b14df74->leave($__internal_bfdae31826c458cd8bc9314bf875892d0fe341a2046f3e2e30cebfc65b14df74_prof);

        
        $__internal_2c1f5988992e5287cea99cbe05cec275942b3f93fa6f316e27c21259789442e8->leave($__internal_2c1f5988992e5287cea99cbe05cec275942b3f93fa6f316e27c21259789442e8_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_0ff79ec2e855b1978a51d7c23f4ae54a0e10e891ac4572054662279b9a7ed19e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff79ec2e855b1978a51d7c23f4ae54a0e10e891ac4572054662279b9a7ed19e->enter($__internal_0ff79ec2e855b1978a51d7c23f4ae54a0e10e891ac4572054662279b9a7ed19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_c43007ac9eb0daad76eb6e398a96f569c1c11c5e8a9c4ae8bef05137053107cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43007ac9eb0daad76eb6e398a96f569c1c11c5e8a9c4ae8bef05137053107cb->enter($__internal_c43007ac9eb0daad76eb6e398a96f569c1c11c5e8a9c4ae8bef05137053107cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 388
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 388, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 389
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_c43007ac9eb0daad76eb6e398a96f569c1c11c5e8a9c4ae8bef05137053107cb->leave($__internal_c43007ac9eb0daad76eb6e398a96f569c1c11c5e8a9c4ae8bef05137053107cb_prof);

        
        $__internal_0ff79ec2e855b1978a51d7c23f4ae54a0e10e891ac4572054662279b9a7ed19e->leave($__internal_0ff79ec2e855b1978a51d7c23f4ae54a0e10e891ac4572054662279b9a7ed19e_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_02ee255af8b4c4b0150e32190f7a437a791eacb619e3a3f59b383218c4dbda0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ee255af8b4c4b0150e32190f7a437a791eacb619e3a3f59b383218c4dbda0c->enter($__internal_02ee255af8b4c4b0150e32190f7a437a791eacb619e3a3f59b383218c4dbda0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_e790d4c224346b69dd6c4e0b751257647b4ad873a97b93cdc105f107634cb017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e790d4c224346b69dd6c4e0b751257647b4ad873a97b93cdc105f107634cb017->enter($__internal_e790d4c224346b69dd6c4e0b751257647b4ad873a97b93cdc105f107634cb017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 393, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 394
            echo " ";
            // line 395
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 397
$context["attrvalue"] === true)) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 399
$context["attrvalue"] === false)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e790d4c224346b69dd6c4e0b751257647b4ad873a97b93cdc105f107634cb017->leave($__internal_e790d4c224346b69dd6c4e0b751257647b4ad873a97b93cdc105f107634cb017_prof);

        
        $__internal_02ee255af8b4c4b0150e32190f7a437a791eacb619e3a3f59b383218c4dbda0c->leave($__internal_02ee255af8b4c4b0150e32190f7a437a791eacb619e3a3f59b383218c4dbda0c_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1654 => 400,  1652 => 399,  1647 => 398,  1645 => 397,  1640 => 396,  1638 => 395,  1636 => 394,  1632 => 393,  1623 => 392,  1613 => 389,  1604 => 388,  1595 => 387,  1585 => 384,  1579 => 383,  1570 => 382,  1560 => 379,  1556 => 378,  1552 => 377,  1546 => 376,  1537 => 375,  1523 => 371,  1519 => 370,  1510 => 369,  1496 => 362,  1494 => 361,  1491 => 358,  1488 => 356,  1486 => 355,  1484 => 354,  1482 => 353,  1480 => 352,  1473 => 348,  1471 => 347,  1467 => 346,  1458 => 345,  1447 => 341,  1439 => 339,  1435 => 338,  1433 => 337,  1431 => 336,  1422 => 335,  1412 => 332,  1409 => 330,  1407 => 329,  1398 => 328,  1385 => 324,  1383 => 323,  1356 => 322,  1353 => 320,  1350 => 318,  1348 => 317,  1346 => 316,  1344 => 315,  1335 => 314,  1325 => 311,  1323 => 310,  1321 => 309,  1312 => 308,  1302 => 303,  1293 => 302,  1283 => 299,  1281 => 298,  1279 => 297,  1270 => 296,  1260 => 293,  1258 => 292,  1256 => 291,  1254 => 290,  1252 => 289,  1243 => 288,  1233 => 285,  1224 => 280,  1207 => 276,  1180 => 272,  1176 => 269,  1173 => 266,  1172 => 265,  1171 => 264,  1169 => 263,  1167 => 262,  1164 => 260,  1162 => 259,  1159 => 257,  1157 => 256,  1155 => 255,  1146 => 254,  1136 => 249,  1134 => 248,  1125 => 247,  1115 => 244,  1113 => 243,  1104 => 242,  1094 => 239,  1092 => 238,  1083 => 237,  1073 => 234,  1071 => 233,  1062 => 232,  1046 => 229,  1042 => 226,  1039 => 223,  1038 => 222,  1037 => 221,  1035 => 220,  1033 => 219,  1024 => 218,  1014 => 215,  1012 => 214,  1003 => 213,  993 => 210,  991 => 209,  982 => 208,  972 => 205,  970 => 204,  961 => 203,  951 => 200,  949 => 199,  940 => 198,  929 => 195,  927 => 194,  918 => 193,  908 => 190,  906 => 189,  897 => 188,  887 => 185,  885 => 184,  876 => 183,  866 => 180,  857 => 179,  847 => 176,  845 => 175,  836 => 174,  826 => 171,  824 => 170,  815 => 168,  804 => 164,  800 => 163,  796 => 160,  790 => 159,  784 => 158,  778 => 157,  772 => 156,  766 => 155,  760 => 154,  754 => 153,  749 => 149,  743 => 148,  737 => 147,  731 => 146,  725 => 145,  719 => 144,  713 => 143,  707 => 142,  701 => 139,  699 => 138,  695 => 137,  692 => 135,  690 => 134,  681 => 133,  670 => 129,  660 => 128,  655 => 127,  653 => 126,  650 => 124,  648 => 123,  639 => 122,  628 => 118,  626 => 116,  625 => 115,  624 => 114,  623 => 113,  619 => 112,  616 => 110,  614 => 109,  605 => 108,  594 => 104,  592 => 103,  590 => 102,  588 => 101,  586 => 100,  582 => 99,  579 => 97,  577 => 96,  568 => 95,  548 => 92,  539 => 91,  519 => 88,  510 => 87,  469 => 82,  466 => 80,  464 => 79,  462 => 78,  457 => 77,  455 => 76,  438 => 75,  429 => 74,  419 => 71,  417 => 70,  415 => 69,  409 => 66,  407 => 65,  405 => 64,  403 => 63,  401 => 62,  392 => 60,  390 => 59,  383 => 58,  380 => 56,  378 => 55,  369 => 54,  359 => 51,  353 => 49,  351 => 48,  347 => 47,  343 => 46,  334 => 45,  323 => 41,  320 => 39,  318 => 38,  309 => 37,  295 => 34,  286 => 33,  276 => 30,  273 => 28,  271 => 27,  262 => 26,  252 => 23,  250 => 22,  248 => 21,  245 => 19,  243 => 18,  239 => 17,  230 => 16,  210 => 13,  208 => 12,  199 => 11,  188 => 7,  185 => 5,  183 => 4,  174 => 3,  164 => 392,  162 => 387,  160 => 382,  158 => 375,  156 => 369,  153 => 366,  151 => 345,  149 => 335,  147 => 328,  145 => 314,  143 => 308,  141 => 302,  139 => 296,  137 => 288,  135 => 280,  133 => 276,  131 => 254,  129 => 247,  127 => 242,  125 => 237,  123 => 232,  121 => 218,  119 => 213,  117 => 208,  115 => 203,  113 => 198,  111 => 193,  109 => 188,  107 => 183,  105 => 179,  103 => 174,  101 => 168,  99 => 133,  97 => 122,  95 => 108,  93 => 95,  91 => 91,  89 => 87,  87 => 74,  85 => 54,  83 => 45,  81 => 37,  79 => 33,  77 => 26,  75 => 16,  73 => 11,  71 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
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
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is not same as(false) and label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{%- block tel_widget -%}
    {%- set type = type|default('tel') -%}
    {{ block('form_widget_simple') }}
{%- endblock tel_widget -%}

{%- block color_widget -%}
    {%- set type = type|default('color') -%}
    {{ block('form_widget_simple') }}
{%- endblock color_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bridge/Resources/views/Form/form_div_layout.html.twig");
    }
}
