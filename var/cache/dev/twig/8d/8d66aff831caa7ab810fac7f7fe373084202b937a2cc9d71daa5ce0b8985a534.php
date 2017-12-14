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
        $__internal_50c41da18b50b6ccb48951887cfd2492a9c81c5dc41f7f0c680bf4aeaa4533ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50c41da18b50b6ccb48951887cfd2492a9c81c5dc41f7f0c680bf4aeaa4533ce->enter($__internal_50c41da18b50b6ccb48951887cfd2492a9c81c5dc41f7f0c680bf4aeaa4533ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_18b8f4669889974b43234aeffa912fc63e1fd09fce4e6a29a393f0f02251b83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b8f4669889974b43234aeffa912fc63e1fd09fce4e6a29a393f0f02251b83b->enter($__internal_18b8f4669889974b43234aeffa912fc63e1fd09fce4e6a29a393f0f02251b83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

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
        
        $__internal_50c41da18b50b6ccb48951887cfd2492a9c81c5dc41f7f0c680bf4aeaa4533ce->leave($__internal_50c41da18b50b6ccb48951887cfd2492a9c81c5dc41f7f0c680bf4aeaa4533ce_prof);

        
        $__internal_18b8f4669889974b43234aeffa912fc63e1fd09fce4e6a29a393f0f02251b83b->leave($__internal_18b8f4669889974b43234aeffa912fc63e1fd09fce4e6a29a393f0f02251b83b_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d2a11a4757961480fbf3282c3e8ce4455d67bd313587fc02881419fc9e95ff42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2a11a4757961480fbf3282c3e8ce4455d67bd313587fc02881419fc9e95ff42->enter($__internal_d2a11a4757961480fbf3282c3e8ce4455d67bd313587fc02881419fc9e95ff42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_3fbf85a23bdc3d26f54de4a153acd1d99f9388f6ce4e0517b444dd7cdcc2a1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fbf85a23bdc3d26f54de4a153acd1d99f9388f6ce4e0517b444dd7cdcc2a1db->enter($__internal_3fbf85a23bdc3d26f54de4a153acd1d99f9388f6ce4e0517b444dd7cdcc2a1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 6, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_3fbf85a23bdc3d26f54de4a153acd1d99f9388f6ce4e0517b444dd7cdcc2a1db->leave($__internal_3fbf85a23bdc3d26f54de4a153acd1d99f9388f6ce4e0517b444dd7cdcc2a1db_prof);

        
        $__internal_d2a11a4757961480fbf3282c3e8ce4455d67bd313587fc02881419fc9e95ff42->leave($__internal_d2a11a4757961480fbf3282c3e8ce4455d67bd313587fc02881419fc9e95ff42_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d01d4159a3c0b54882e6c84e34e2c69358694dab25c00a8dd7bbc0b60da75026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d01d4159a3c0b54882e6c84e34e2c69358694dab25c00a8dd7bbc0b60da75026->enter($__internal_d01d4159a3c0b54882e6c84e34e2c69358694dab25c00a8dd7bbc0b60da75026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_af2a76715a8593f1d7f19487c70f3935195ef297582faa37b452d53bba72a51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2a76715a8593f1d7f19487c70f3935195ef297582faa37b452d53bba72a51d->enter($__internal_af2a76715a8593f1d7f19487c70f3935195ef297582faa37b452d53bba72a51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        echo "<div class=\"input-group";
        echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter((isset($context["group_class"]) || array_key_exists("group_class", $context) ? $context["group_class"] : (function () { throw new Twig_Error_Runtime('Variable "group_class" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 12
        $context["append"] = (is_string($__internal_56cf5a9ba841499d62b945d7bb3f850fb9536e9da3973976192e07d3f29ae650 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 12, $this->getSourceContext()); })())) && is_string($__internal_c092472a08eb981b6c216818f549439d6868c3b2b0f4c575e58e666290f1b153 = "{{") && ('' === $__internal_c092472a08eb981b6c216818f549439d6868c3b2b0f4c575e58e666290f1b153 || 0 === strpos($__internal_56cf5a9ba841499d62b945d7bb3f850fb9536e9da3973976192e07d3f29ae650, $__internal_c092472a08eb981b6c216818f549439d6868c3b2b0f4c575e58e666290f1b153)));
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
        
        $__internal_af2a76715a8593f1d7f19487c70f3935195ef297582faa37b452d53bba72a51d->leave($__internal_af2a76715a8593f1d7f19487c70f3935195ef297582faa37b452d53bba72a51d_prof);

        
        $__internal_d01d4159a3c0b54882e6c84e34e2c69358694dab25c00a8dd7bbc0b60da75026->leave($__internal_d01d4159a3c0b54882e6c84e34e2c69358694dab25c00a8dd7bbc0b60da75026_prof);

    }

    // line 23
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_1d864c77516398829e7d136410995bf1444040af7cc9e2a2d99308079923a57b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d864c77516398829e7d136410995bf1444040af7cc9e2a2d99308079923a57b->enter($__internal_1d864c77516398829e7d136410995bf1444040af7cc9e2a2d99308079923a57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_e5a06d5eb7132b20cd7963199b1180827c312787c3b499f755b94422926c07f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a06d5eb7132b20cd7963199b1180827c312787c3b499f755b94422926c07f8->enter($__internal_e5a06d5eb7132b20cd7963199b1180827c312787c3b499f755b94422926c07f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 24
        echo "<div class=\"input-group\">";
        // line 25
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 26
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_e5a06d5eb7132b20cd7963199b1180827c312787c3b499f755b94422926c07f8->leave($__internal_e5a06d5eb7132b20cd7963199b1180827c312787c3b499f755b94422926c07f8_prof);

        
        $__internal_1d864c77516398829e7d136410995bf1444040af7cc9e2a2d99308079923a57b->leave($__internal_1d864c77516398829e7d136410995bf1444040af7cc9e2a2d99308079923a57b_prof);

    }

    // line 30
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_5358f077f89909b6e72118e2a419970a25a70abc5574fd321c8f63afbc47724a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5358f077f89909b6e72118e2a419970a25a70abc5574fd321c8f63afbc47724a->enter($__internal_5358f077f89909b6e72118e2a419970a25a70abc5574fd321c8f63afbc47724a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_5d5065c1a25cee86aae17bd5065b8915d0a7cf47f75c7a9ec3a9ea2211bd433e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5065c1a25cee86aae17bd5065b8915d0a7cf47f75c7a9ec3a9ea2211bd433e->enter($__internal_5d5065c1a25cee86aae17bd5065b8915d0a7cf47f75c7a9ec3a9ea2211bd433e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_5d5065c1a25cee86aae17bd5065b8915d0a7cf47f75c7a9ec3a9ea2211bd433e->leave($__internal_5d5065c1a25cee86aae17bd5065b8915d0a7cf47f75c7a9ec3a9ea2211bd433e_prof);

        
        $__internal_5358f077f89909b6e72118e2a419970a25a70abc5574fd321c8f63afbc47724a->leave($__internal_5358f077f89909b6e72118e2a419970a25a70abc5574fd321c8f63afbc47724a_prof);

    }

    // line 44
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_d1ae7bf013dff023aa6ad679ba993a1d2fc738a6b21240057ee7b764052decc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ae7bf013dff023aa6ad679ba993a1d2fc738a6b21240057ee7b764052decc9->enter($__internal_d1ae7bf013dff023aa6ad679ba993a1d2fc738a6b21240057ee7b764052decc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_7a2dc4acf5802215e7904da08137417f493ecd5c9afc07f905e6a14a6ccaba04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2dc4acf5802215e7904da08137417f493ecd5c9afc07f905e6a14a6ccaba04->enter($__internal_7a2dc4acf5802215e7904da08137417f493ecd5c9afc07f905e6a14a6ccaba04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_7a2dc4acf5802215e7904da08137417f493ecd5c9afc07f905e6a14a6ccaba04->leave($__internal_7a2dc4acf5802215e7904da08137417f493ecd5c9afc07f905e6a14a6ccaba04_prof);

        
        $__internal_d1ae7bf013dff023aa6ad679ba993a1d2fc738a6b21240057ee7b764052decc9->leave($__internal_d1ae7bf013dff023aa6ad679ba993a1d2fc738a6b21240057ee7b764052decc9_prof);

    }

    // line 63
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_9bb6d82e93d68172a5e9f876c5cf837736b12889b82e621fd4bb47076c7d4b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb6d82e93d68172a5e9f876c5cf837736b12889b82e621fd4bb47076c7d4b96->enter($__internal_9bb6d82e93d68172a5e9f876c5cf837736b12889b82e621fd4bb47076c7d4b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_a5e91aaecd7287476706b5ebc7d38aa932f2210e93ac6cc85ca6fc4a6f45cba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e91aaecd7287476706b5ebc7d38aa932f2210e93ac6cc85ca6fc4a6f45cba5->enter($__internal_a5e91aaecd7287476706b5ebc7d38aa932f2210e93ac6cc85ca6fc4a6f45cba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_a5e91aaecd7287476706b5ebc7d38aa932f2210e93ac6cc85ca6fc4a6f45cba5->leave($__internal_a5e91aaecd7287476706b5ebc7d38aa932f2210e93ac6cc85ca6fc4a6f45cba5_prof);

        
        $__internal_9bb6d82e93d68172a5e9f876c5cf837736b12889b82e621fd4bb47076c7d4b96->leave($__internal_9bb6d82e93d68172a5e9f876c5cf837736b12889b82e621fd4bb47076c7d4b96_prof);

    }

    // line 78
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_998d9d03da5105f413b850d436ffb9dc9c73dc6bedd75b1935726e5aa795d14c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_998d9d03da5105f413b850d436ffb9dc9c73dc6bedd75b1935726e5aa795d14c->enter($__internal_998d9d03da5105f413b850d436ffb9dc9c73dc6bedd75b1935726e5aa795d14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_fe95c3633bccb2fada587927496073a79a7394e8a41cc551b2720edfbb5e9eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe95c3633bccb2fada587927496073a79a7394e8a41cc551b2720edfbb5e9eaf->enter($__internal_fe95c3633bccb2fada587927496073a79a7394e8a41cc551b2720edfbb5e9eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_fe95c3633bccb2fada587927496073a79a7394e8a41cc551b2720edfbb5e9eaf->leave($__internal_fe95c3633bccb2fada587927496073a79a7394e8a41cc551b2720edfbb5e9eaf_prof);

        
        $__internal_998d9d03da5105f413b850d436ffb9dc9c73dc6bedd75b1935726e5aa795d14c->leave($__internal_998d9d03da5105f413b850d436ffb9dc9c73dc6bedd75b1935726e5aa795d14c_prof);

    }

    // line 116
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_4183e4969f2b812c13712670a1ecbdf026bbccb4d5202deb43c9077a185dec2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4183e4969f2b812c13712670a1ecbdf026bbccb4d5202deb43c9077a185dec2a->enter($__internal_4183e4969f2b812c13712670a1ecbdf026bbccb4d5202deb43c9077a185dec2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_6101aa8de79cd6fd49c3f6e951de709460eea93065346de04d2b9dfc9299faa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6101aa8de79cd6fd49c3f6e951de709460eea93065346de04d2b9dfc9299faa9->enter($__internal_6101aa8de79cd6fd49c3f6e951de709460eea93065346de04d2b9dfc9299faa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 117
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 117, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 118
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_6101aa8de79cd6fd49c3f6e951de709460eea93065346de04d2b9dfc9299faa9->leave($__internal_6101aa8de79cd6fd49c3f6e951de709460eea93065346de04d2b9dfc9299faa9_prof);

        
        $__internal_4183e4969f2b812c13712670a1ecbdf026bbccb4d5202deb43c9077a185dec2a->leave($__internal_4183e4969f2b812c13712670a1ecbdf026bbccb4d5202deb43c9077a185dec2a_prof);

    }

    // line 121
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_236d3714af343dc07d7f708289bad5460ad0ecc6e59233b7d50c03283468392e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236d3714af343dc07d7f708289bad5460ad0ecc6e59233b7d50c03283468392e->enter($__internal_236d3714af343dc07d7f708289bad5460ad0ecc6e59233b7d50c03283468392e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_c61e35f64ff8a9c49877f5a1983ef4e06fcd63bdf076e154b709d20649969dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61e35f64ff8a9c49877f5a1983ef4e06fcd63bdf076e154b709d20649969dd3->enter($__internal_c61e35f64ff8a9c49877f5a1983ef4e06fcd63bdf076e154b709d20649969dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_c61e35f64ff8a9c49877f5a1983ef4e06fcd63bdf076e154b709d20649969dd3->leave($__internal_c61e35f64ff8a9c49877f5a1983ef4e06fcd63bdf076e154b709d20649969dd3_prof);

        
        $__internal_236d3714af343dc07d7f708289bad5460ad0ecc6e59233b7d50c03283468392e->leave($__internal_236d3714af343dc07d7f708289bad5460ad0ecc6e59233b7d50c03283468392e_prof);

    }

    // line 143
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_e5b0fb586ce32c5287dd655c4c994a99056843a7be1cb10ea64725d794fbde71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b0fb586ce32c5287dd655c4c994a99056843a7be1cb10ea64725d794fbde71->enter($__internal_e5b0fb586ce32c5287dd655c4c994a99056843a7be1cb10ea64725d794fbde71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_b8f26fe6e5fd4fc534f3aff9dedf4855a11b7c6b6a4dbd15f1e77cf1a231f47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f26fe6e5fd4fc534f3aff9dedf4855a11b7c6b6a4dbd15f1e77cf1a231f47a->enter($__internal_b8f26fe6e5fd4fc534f3aff9dedf4855a11b7c6b6a4dbd15f1e77cf1a231f47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 145
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 145, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 146
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_b8f26fe6e5fd4fc534f3aff9dedf4855a11b7c6b6a4dbd15f1e77cf1a231f47a->leave($__internal_b8f26fe6e5fd4fc534f3aff9dedf4855a11b7c6b6a4dbd15f1e77cf1a231f47a_prof);

        
        $__internal_e5b0fb586ce32c5287dd655c4c994a99056843a7be1cb10ea64725d794fbde71->leave($__internal_e5b0fb586ce32c5287dd655c4c994a99056843a7be1cb10ea64725d794fbde71_prof);

    }

    // line 149
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_0efe21a34d5ea78b3a579b7da63c514da5a287789881897734c3e9b6836d5c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0efe21a34d5ea78b3a579b7da63c514da5a287789881897734c3e9b6836d5c3f->enter($__internal_0efe21a34d5ea78b3a579b7da63c514da5a287789881897734c3e9b6836d5c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_49d6e1249632512d511f6d38bfc822c05dfe0853da22bb9e739c4ca2d5425ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d6e1249632512d511f6d38bfc822c05dfe0853da22bb9e739c4ca2d5425ba2->enter($__internal_49d6e1249632512d511f6d38bfc822c05dfe0853da22bb9e739c4ca2d5425ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 150
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_49d6e1249632512d511f6d38bfc822c05dfe0853da22bb9e739c4ca2d5425ba2->leave($__internal_49d6e1249632512d511f6d38bfc822c05dfe0853da22bb9e739c4ca2d5425ba2_prof);

        
        $__internal_0efe21a34d5ea78b3a579b7da63c514da5a287789881897734c3e9b6836d5c3f->leave($__internal_0efe21a34d5ea78b3a579b7da63c514da5a287789881897734c3e9b6836d5c3f_prof);

    }

    // line 153
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_7f83fc5ae7d7004f10cce9aff64e212630ae462a577331e257221a33ac40dee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f83fc5ae7d7004f10cce9aff64e212630ae462a577331e257221a33ac40dee9->enter($__internal_7f83fc5ae7d7004f10cce9aff64e212630ae462a577331e257221a33ac40dee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_1a69abba665123fc49bb09c670fb6b7a3b28ab07b543dbd06eb5bb935e667f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a69abba665123fc49bb09c670fb6b7a3b28ab07b543dbd06eb5bb935e667f74->enter($__internal_1a69abba665123fc49bb09c670fb6b7a3b28ab07b543dbd06eb5bb935e667f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 154
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_1a69abba665123fc49bb09c670fb6b7a3b28ab07b543dbd06eb5bb935e667f74->leave($__internal_1a69abba665123fc49bb09c670fb6b7a3b28ab07b543dbd06eb5bb935e667f74_prof);

        
        $__internal_7f83fc5ae7d7004f10cce9aff64e212630ae462a577331e257221a33ac40dee9->leave($__internal_7f83fc5ae7d7004f10cce9aff64e212630ae462a577331e257221a33ac40dee9_prof);

    }

    // line 159
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_d2c6217e600f16486965aec6a73fa03ed68ea7fa32ca85aa2c4ff1d714403e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2c6217e600f16486965aec6a73fa03ed68ea7fa32ca85aa2c4ff1d714403e7b->enter($__internal_d2c6217e600f16486965aec6a73fa03ed68ea7fa32ca85aa2c4ff1d714403e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_a50252a0e44dd1e17ec162773d859b462fd000bc531a0e097fb8351f1a878dab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50252a0e44dd1e17ec162773d859b462fd000bc531a0e097fb8351f1a878dab->enter($__internal_a50252a0e44dd1e17ec162773d859b462fd000bc531a0e097fb8351f1a878dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 160
        echo "<div class=\"form-group\">";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 161, $this->getSourceContext()); })()), 'widget');
        // line 162
        echo "</div>";
        
        $__internal_a50252a0e44dd1e17ec162773d859b462fd000bc531a0e097fb8351f1a878dab->leave($__internal_a50252a0e44dd1e17ec162773d859b462fd000bc531a0e097fb8351f1a878dab_prof);

        
        $__internal_d2c6217e600f16486965aec6a73fa03ed68ea7fa32ca85aa2c4ff1d714403e7b->leave($__internal_d2c6217e600f16486965aec6a73fa03ed68ea7fa32ca85aa2c4ff1d714403e7b_prof);

    }

    // line 165
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_a17d1308d9a56f320e8c313b964d3ce10cb4559ae78a22885c48fe2ffcca0cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a17d1308d9a56f320e8c313b964d3ce10cb4559ae78a22885c48fe2ffcca0cef->enter($__internal_a17d1308d9a56f320e8c313b964d3ce10cb4559ae78a22885c48fe2ffcca0cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_96dd1c520ae61f190cb5886b453fc95cc9d74a1ca5af342a08ac89bea830ed40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96dd1c520ae61f190cb5886b453fc95cc9d74a1ca5af342a08ac89bea830ed40->enter($__internal_96dd1c520ae61f190cb5886b453fc95cc9d74a1ca5af342a08ac89bea830ed40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 166
        $context["force_error"] = true;
        // line 167
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_96dd1c520ae61f190cb5886b453fc95cc9d74a1ca5af342a08ac89bea830ed40->leave($__internal_96dd1c520ae61f190cb5886b453fc95cc9d74a1ca5af342a08ac89bea830ed40_prof);

        
        $__internal_a17d1308d9a56f320e8c313b964d3ce10cb4559ae78a22885c48fe2ffcca0cef->leave($__internal_a17d1308d9a56f320e8c313b964d3ce10cb4559ae78a22885c48fe2ffcca0cef_prof);

    }

    // line 170
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_e0059db298035a82354caf9cea5f91ae247e0f20f04f78b2a6d5a175b2942e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0059db298035a82354caf9cea5f91ae247e0f20f04f78b2a6d5a175b2942e13->enter($__internal_e0059db298035a82354caf9cea5f91ae247e0f20f04f78b2a6d5a175b2942e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_36d3a72f34375a8fd01c9c401e71ef106ec7e8b8ea1b1ac31b49cc0299462ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d3a72f34375a8fd01c9c401e71ef106ec7e8b8ea1b1ac31b49cc0299462ef4->enter($__internal_36d3a72f34375a8fd01c9c401e71ef106ec7e8b8ea1b1ac31b49cc0299462ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_36d3a72f34375a8fd01c9c401e71ef106ec7e8b8ea1b1ac31b49cc0299462ef4->leave($__internal_36d3a72f34375a8fd01c9c401e71ef106ec7e8b8ea1b1ac31b49cc0299462ef4_prof);

        
        $__internal_e0059db298035a82354caf9cea5f91ae247e0f20f04f78b2a6d5a175b2942e13->leave($__internal_e0059db298035a82354caf9cea5f91ae247e0f20f04f78b2a6d5a175b2942e13_prof);

    }

    // line 175
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_15e6e4ff77c7f9811b71711fc0b22369c6313105cbb9d4e632a0a80b10209f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15e6e4ff77c7f9811b71711fc0b22369c6313105cbb9d4e632a0a80b10209f2a->enter($__internal_15e6e4ff77c7f9811b71711fc0b22369c6313105cbb9d4e632a0a80b10209f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_6582449affefb23b319c765c04de9424b474540494cc0f5c31c4192ad5a37a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6582449affefb23b319c765c04de9424b474540494cc0f5c31c4192ad5a37a36->enter($__internal_6582449affefb23b319c765c04de9424b474540494cc0f5c31c4192ad5a37a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6582449affefb23b319c765c04de9424b474540494cc0f5c31c4192ad5a37a36->leave($__internal_6582449affefb23b319c765c04de9424b474540494cc0f5c31c4192ad5a37a36_prof);

        
        $__internal_15e6e4ff77c7f9811b71711fc0b22369c6313105cbb9d4e632a0a80b10209f2a->leave($__internal_15e6e4ff77c7f9811b71711fc0b22369c6313105cbb9d4e632a0a80b10209f2a_prof);

    }

    // line 180
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_587da889932fda6b27172772d9ea464b1098d66e9a676655789b8c7b946db26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_587da889932fda6b27172772d9ea464b1098d66e9a676655789b8c7b946db26d->enter($__internal_587da889932fda6b27172772d9ea464b1098d66e9a676655789b8c7b946db26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_c236c1863d4428202231faba4a42d0d8940f8782a08d6b6303687589a4412ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c236c1863d4428202231faba4a42d0d8940f8782a08d6b6303687589a4412ec7->enter($__internal_c236c1863d4428202231faba4a42d0d8940f8782a08d6b6303687589a4412ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c236c1863d4428202231faba4a42d0d8940f8782a08d6b6303687589a4412ec7->leave($__internal_c236c1863d4428202231faba4a42d0d8940f8782a08d6b6303687589a4412ec7_prof);

        
        $__internal_587da889932fda6b27172772d9ea464b1098d66e9a676655789b8c7b946db26d->leave($__internal_587da889932fda6b27172772d9ea464b1098d66e9a676655789b8c7b946db26d_prof);

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
