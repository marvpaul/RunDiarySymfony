<?php

/* overview.twig */
class __TwigTemplate_1e68c84361d8525d45e9fbcc62702247621093383259d0b599259f3b93df402a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "overview.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 6
            echo "        Hi there --> <a href=\"/public/login\"> login</a>
    ";
        }
        // line 8
        echo "    <div class=\"card text-white bg-primary\">
        <div class=\"card-body\" id=\"overview\">
            <div class=\"alert alert-dismissible alert-success col-3\" style=\"text-align: center; margin: auto; \">
                <table>
                    <tr>
                        <td>Username</td>
                        <td>Day trained</td>
                        <td>Entire distance</td>
                    </tr>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "
                    <tr>
                        <td><a href=\"profile/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "days_trained", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "entire_distance", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </table>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  69 => 22,  65 => 21,  59 => 20,  55 => 18,  51 => 17,  40 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overview.twig", "/Users/marvinkruger/uebung6/templates/overview.twig");
    }
}
