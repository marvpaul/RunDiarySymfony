<?php

/* form_table_layout.html.twig */
class __TwigTemplate_cd9fcbabe549e1281ca9d2c0175a419ef7e153f11a33dc0095b76d1143f0c038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8df3ac94cea9e359c1eaffa8285e0fc116c08dcae554089df947f211d94dbff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df3ac94cea9e359c1eaffa8285e0fc116c08dcae554089df947f211d94dbff1->enter($__internal_8df3ac94cea9e359c1eaffa8285e0fc116c08dcae554089df947f211d94dbff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_b9523f3aba20b6627dfbc4f195d9ca4abd92c8c90c72bbf5eb25a14fd96f5c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9523f3aba20b6627dfbc4f195d9ca4abd92c8c90c72bbf5eb25a14fd96f5c53->enter($__internal_b9523f3aba20b6627dfbc4f195d9ca4abd92c8c90c72bbf5eb25a14fd96f5c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_8df3ac94cea9e359c1eaffa8285e0fc116c08dcae554089df947f211d94dbff1->leave($__internal_8df3ac94cea9e359c1eaffa8285e0fc116c08dcae554089df947f211d94dbff1_prof);

        
        $__internal_b9523f3aba20b6627dfbc4f195d9ca4abd92c8c90c72bbf5eb25a14fd96f5c53->leave($__internal_b9523f3aba20b6627dfbc4f195d9ca4abd92c8c90c72bbf5eb25a14fd96f5c53_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_acf08305a31154716b7c4f86507fe543093c7e111b3c58570f5c8e350ed5d908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf08305a31154716b7c4f86507fe543093c7e111b3c58570f5c8e350ed5d908->enter($__internal_acf08305a31154716b7c4f86507fe543093c7e111b3c58570f5c8e350ed5d908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_39debe0e8af122db54f703e0ae20ceb0ed826e4baaafb03c86b8e47469c5bf1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39debe0e8af122db54f703e0ae20ceb0ed826e4baaafb03c86b8e47469c5bf1d->enter($__internal_39debe0e8af122db54f703e0ae20ceb0ed826e4baaafb03c86b8e47469c5bf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_39debe0e8af122db54f703e0ae20ceb0ed826e4baaafb03c86b8e47469c5bf1d->leave($__internal_39debe0e8af122db54f703e0ae20ceb0ed826e4baaafb03c86b8e47469c5bf1d_prof);

        
        $__internal_acf08305a31154716b7c4f86507fe543093c7e111b3c58570f5c8e350ed5d908->leave($__internal_acf08305a31154716b7c4f86507fe543093c7e111b3c58570f5c8e350ed5d908_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3830e9f422d8f9741fea38114c6de480030b0ffe1294c6ba28fe3323d2c9dcbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3830e9f422d8f9741fea38114c6de480030b0ffe1294c6ba28fe3323d2c9dcbf->enter($__internal_3830e9f422d8f9741fea38114c6de480030b0ffe1294c6ba28fe3323d2c9dcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_8d05ccf2ea0d19b400f034487014f4008ffc8348c300add83e0c5d8acb6c8b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d05ccf2ea0d19b400f034487014f4008ffc8348c300add83e0c5d8acb6c8b57->enter($__internal_8d05ccf2ea0d19b400f034487014f4008ffc8348c300add83e0c5d8acb6c8b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_8d05ccf2ea0d19b400f034487014f4008ffc8348c300add83e0c5d8acb6c8b57->leave($__internal_8d05ccf2ea0d19b400f034487014f4008ffc8348c300add83e0c5d8acb6c8b57_prof);

        
        $__internal_3830e9f422d8f9741fea38114c6de480030b0ffe1294c6ba28fe3323d2c9dcbf->leave($__internal_3830e9f422d8f9741fea38114c6de480030b0ffe1294c6ba28fe3323d2c9dcbf_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_38763f86a97994ff212a01b2f09b91cffe98ebb6204f326462459a9255676f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38763f86a97994ff212a01b2f09b91cffe98ebb6204f326462459a9255676f8d->enter($__internal_38763f86a97994ff212a01b2f09b91cffe98ebb6204f326462459a9255676f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_d9d5af6a1d4eacf392d6da0af9259ed9a4cb835a389bd88ddc7ffa228a3deca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d5af6a1d4eacf392d6da0af9259ed9a4cb835a389bd88ddc7ffa228a3deca1->enter($__internal_d9d5af6a1d4eacf392d6da0af9259ed9a4cb835a389bd88ddc7ffa228a3deca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_d9d5af6a1d4eacf392d6da0af9259ed9a4cb835a389bd88ddc7ffa228a3deca1->leave($__internal_d9d5af6a1d4eacf392d6da0af9259ed9a4cb835a389bd88ddc7ffa228a3deca1_prof);

        
        $__internal_38763f86a97994ff212a01b2f09b91cffe98ebb6204f326462459a9255676f8d->leave($__internal_38763f86a97994ff212a01b2f09b91cffe98ebb6204f326462459a9255676f8d_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_452648a54ffe9187c4aaffa33e4ffdbf1fa5f703985cd3403a14a3e3158f3a49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_452648a54ffe9187c4aaffa33e4ffdbf1fa5f703985cd3403a14a3e3158f3a49->enter($__internal_452648a54ffe9187c4aaffa33e4ffdbf1fa5f703985cd3403a14a3e3158f3a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_8ed9b6e2eb8b21e885929112f3ac6a9556046b83e73bde2e8fe45bcb48aee523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed9b6e2eb8b21e885929112f3ac6a9556046b83e73bde2e8fe45bcb48aee523->enter($__internal_8ed9b6e2eb8b21e885929112f3ac6a9556046b83e73bde2e8fe45bcb48aee523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_8ed9b6e2eb8b21e885929112f3ac6a9556046b83e73bde2e8fe45bcb48aee523->leave($__internal_8ed9b6e2eb8b21e885929112f3ac6a9556046b83e73bde2e8fe45bcb48aee523_prof);

        
        $__internal_452648a54ffe9187c4aaffa33e4ffdbf1fa5f703985cd3403a14a3e3158f3a49->leave($__internal_452648a54ffe9187c4aaffa33e4ffdbf1fa5f703985cd3403a14a3e3158f3a49_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/twig-bridge/Resources/views/Form/form_table_layout.html.twig");
    }
}
