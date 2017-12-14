<?php

/* user.twig */
class __TwigTemplate_f5c19cdaced6dcc721d5d98567151dcf946d98203a832dc73f7ba1a3963249d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user.twig", 1);
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
        $context["can_edit"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("edit", ($context["user"] ?? null));
        // line 6
        echo "    ";
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 7
            echo "        Hi there --> <a href=\"/public/login\"> login</a>
    ";
        }
        // line 9
        echo "    <div class=\"card text-white bg-primary\">
        <div class=\"card-body\" id=\"overview\">
            <div class=\"alert alert-dismissible alert-success col-6\" style=\"text-align: center; margin: auto; \">
                Name -> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "<br>
                ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "entries", array())) > 0)) {
            // line 14
            echo "                    ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 15
                echo "                        Days_trained -> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "days_trained", array()), "html", null, true);
                echo "<br>
                        Time from first entry to today -> ";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "entire_time", array()), "html", null, true);
                echo "<br>
                        Entire distance -> ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "entire_distance", array()), "html", null, true);
                echo "<br>
                    ";
            }
            // line 19
            echo "                    <h2>All entries</h2>
                    <table class=\"table-info table table-striped\">
                        <tr>
                            <td>Date</td>
                            <td>Distance</td>
                            <td>Time</td>
                            <td>Avg. speed</td>
                            ";
            // line 26
            if (($context["can_edit"] ?? null)) {
                echo "<td>Delete</td>";
            }
            // line 27
            echo "                        </tr>
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "entries", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 29
                echo "                            <tr>
                                <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "date", array()), "Y-m-d"), "html", null, true);
                echo "</td>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "distance", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "time", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "getAvgSpeed", array(), "method"), "html", null, true);
                echo "</td>
                                ";
                // line 34
                if (($context["can_edit"] ?? null)) {
                    echo "<td><a href=\"/public/delete/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "id", array()), "html", null, true);
                    echo "\" class=\"delete-button btn btn-block btn-info\">Delete</a></td>";
                }
                // line 35
                echo "                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                    </table>
                ";
        } else {
            // line 39
            echo "                    No entries so far
                ";
        }
        // line 41
        echo "            </div>
        </div>
    </div>
    ";
        // line 44
        if (($context["can_edit"] ?? null)) {
            // line 45
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 46
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 47
                    echo "                ";
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "<br>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "        ";
            }
            // line 50
            echo "        ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), array(0 => "bootstrap_3_layout.html.twig"), true);
            // line 51
            echo "        ";
            // line 52
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
        ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
        ";
            // line 54
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
    ";
        }
        // line 56
        echo "
";
    }

    public function getTemplateName()
    {
        return "user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 56,  174 => 54,  170 => 53,  165 => 52,  163 => 51,  160 => 50,  157 => 49,  148 => 47,  143 => 46,  140 => 45,  138 => 44,  133 => 41,  129 => 39,  125 => 37,  118 => 35,  110 => 34,  106 => 33,  102 => 32,  98 => 31,  94 => 30,  91 => 29,  87 => 28,  84 => 27,  80 => 26,  71 => 19,  66 => 17,  62 => 16,  57 => 15,  54 => 14,  52 => 13,  48 => 12,  43 => 9,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user.twig", "/Users/marvinkruger/uebung6/templates/user.twig");
    }
}
