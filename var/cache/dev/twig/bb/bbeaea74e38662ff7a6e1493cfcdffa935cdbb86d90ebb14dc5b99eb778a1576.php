<?php

/* @WebProfiler/Router/panel.html.twig */
class __TwigTemplate_2f36680308f2a8075acdbe84fe9733331fec677ba7d3ba79149249668d13dc5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59637d19845ebe5881ce35fdeca11966acd5dbb0264ad027b48a2288488e75a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59637d19845ebe5881ce35fdeca11966acd5dbb0264ad027b48a2288488e75a6->enter($__internal_59637d19845ebe5881ce35fdeca11966acd5dbb0264ad027b48a2288488e75a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Router/panel.html.twig"));

        $__internal_e7ee3e2394b11adaaf48b9a2b50b50887dd6ac05d4aba97b7645461902032ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ee3e2394b11adaaf48b9a2b50b50887dd6ac05d4aba97b7645461902032ce7->enter($__internal_e7ee3e2394b11adaaf48b9a2b50b50887dd6ac05d4aba97b7645461902032ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Router/panel.html.twig"));

        // line 1
        echo "<h2>Routing</h2>

<div class=\"metrics\">
    <div class=\"metric\">
        <span class=\"value\">";
        // line 5
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 5, $this->getSourceContext()); })()), "route", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 5, $this->getSourceContext()); })()), "route", array())) : ("(none)")), "html", null, true);
        echo "</span>
        <span class=\"label\">Matched route</span>
    </div>

    ";
        // line 9
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 9, $this->getSourceContext()); })()), "route", array())) {
            // line 10
            echo "        <div class=\"metric\">
            <span class=\"value\">";
            // line 11
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["traces"]) || array_key_exists("traces", $context) ? $context["traces"] : (function () { throw new Twig_Error_Runtime('Variable "traces" does not exist.', 11, $this->getSourceContext()); })())), "html", null, true);
            echo "</span>
            <span class=\"label\">Tested routes before match</span>
        </div>
    ";
        }
        // line 15
        echo "</div>

";
        // line 17
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 17, $this->getSourceContext()); })()), "route", array())) {
            // line 18
            echo "    <h3>Route Parameters</h3>

    ";
            // line 20
            if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 20, $this->getSourceContext()); })()), "routeParams", array()))) {
                // line 21
                echo "        <div class=\"empty\">
            <p>No parameters.</p>
        </div>
    ";
            } else {
                // line 25
                echo "        ";
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 25, $this->getSourceContext()); })()), "routeParams", array()), "labels" => array(0 => "Name", 1 => "Value")), false);
                echo "
    ";
            }
        }
        // line 28
        echo "
";
        // line 29
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["router"]) || array_key_exists("router", $context) ? $context["router"] : (function () { throw new Twig_Error_Runtime('Variable "router" does not exist.', 29, $this->getSourceContext()); })()), "redirect", array())) {
            // line 30
            echo "    <h3>Route Redirection</h3>

    <p>This page redirects to:</p>
    <div class=\"card break-long-words\">
        ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["router"]) || array_key_exists("router", $context) ? $context["router"] : (function () { throw new Twig_Error_Runtime('Variable "router" does not exist.', 34, $this->getSourceContext()); })()), "targetUrl", array()), "html", null, true);
            echo "
        ";
            // line 35
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["router"]) || array_key_exists("router", $context) ? $context["router"] : (function () { throw new Twig_Error_Runtime('Variable "router" does not exist.', 35, $this->getSourceContext()); })()), "targetRoute", array())) {
                echo "<span class=\"text-muted\">(route: \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["router"]) || array_key_exists("router", $context) ? $context["router"] : (function () { throw new Twig_Error_Runtime('Variable "router" does not exist.', 35, $this->getSourceContext()); })()), "targetRoute", array()), "html", null, true);
                echo "\")</span>";
            }
            // line 36
            echo "    </div>
";
        }
        // line 38
        echo "
<h3>Route Matching Logs</h3>

<div class=\"card\">
    <strong>Path to match:</strong> <code>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 42, $this->getSourceContext()); })()), "pathinfo", array()), "html", null, true);
        echo "</code>
</div>

<table id=\"router-logs\">
    <thead>
        <tr>
            <th>#</th>
            <th>Route name</th>
            <th>Path</th>
            <th>Log</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) || array_key_exists("traces", $context) ? $context["traces"] : (function () { throw new Twig_Error_Runtime('Variable "traces" does not exist.', 55, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 56
            echo "        <tr class=\"";
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "level", array()) == 1)) ? ("status-warning") : ((((twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "level", array()) == 2)) ? ("status-success") : (""))));
            echo "\">
            <td class=\"font-normal text-muted nowrap\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "path", array()), "html", null, true);
            echo "</td>
            <td class=\"font-normal\">
                ";
            // line 61
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "level", array()) == 1)) {
                // line 62
                echo "                    Path almost matches, but
                    <span class=\"newline\">";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "log", array()), "html", null, true);
                echo "</span>
                ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 64
$context["trace"], "level", array()) == 2)) {
                // line 65
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "log", array()), "html", null, true);
                echo "
                ";
            } else {
                // line 67
                echo "                    Path does not match
                ";
            }
            // line 69
            echo "            </td>
        </tr>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </tbody>
</table>

<p class=\"help\">
    Note: These matching logs are based on the current router configuration,
    which might differ from the configuration used when profiling this request.
</p>
";
        
        $__internal_59637d19845ebe5881ce35fdeca11966acd5dbb0264ad027b48a2288488e75a6->leave($__internal_59637d19845ebe5881ce35fdeca11966acd5dbb0264ad027b48a2288488e75a6_prof);

        
        $__internal_e7ee3e2394b11adaaf48b9a2b50b50887dd6ac05d4aba97b7645461902032ce7->leave($__internal_e7ee3e2394b11adaaf48b9a2b50b50887dd6ac05d4aba97b7645461902032ce7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Router/panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 72,  178 => 69,  174 => 67,  168 => 65,  166 => 64,  162 => 63,  159 => 62,  157 => 61,  152 => 59,  148 => 58,  144 => 57,  139 => 56,  122 => 55,  106 => 42,  100 => 38,  96 => 36,  90 => 35,  86 => 34,  80 => 30,  78 => 29,  75 => 28,  68 => 25,  62 => 21,  60 => 20,  56 => 18,  54 => 17,  50 => 15,  43 => 11,  40 => 10,  38 => 9,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Routing</h2>

<div class=\"metrics\">
    <div class=\"metric\">
        <span class=\"value\">{{ request.route ?: '(none)' }}</span>
        <span class=\"label\">Matched route</span>
    </div>

    {% if request.route %}
        <div class=\"metric\">
            <span class=\"value\">{{ traces|length }}</span>
            <span class=\"label\">Tested routes before match</span>
        </div>
    {% endif %}
</div>

{% if request.route %}
    <h3>Route Parameters</h3>

    {% if request.routeParams is empty %}
        <div class=\"empty\">
            <p>No parameters.</p>
        </div>
    {% else %}
        {{ include('@WebProfiler/Profiler/table.html.twig', { data: request.routeParams, labels: ['Name', 'Value'] }, with_context = false) }}
    {% endif %}
{% endif %}

{% if router.redirect %}
    <h3>Route Redirection</h3>

    <p>This page redirects to:</p>
    <div class=\"card break-long-words\">
        {{ router.targetUrl }}
        {% if router.targetRoute %}<span class=\"text-muted\">(route: \"{{ router.targetRoute }}\")</span>{% endif %}
    </div>
{% endif %}

<h3>Route Matching Logs</h3>

<div class=\"card\">
    <strong>Path to match:</strong> <code>{{ request.pathinfo }}</code>
</div>

<table id=\"router-logs\">
    <thead>
        <tr>
            <th>#</th>
            <th>Route name</th>
            <th>Path</th>
            <th>Log</th>
        </tr>
    </thead>
    <tbody>
    {% for trace in traces %}
        <tr class=\"{{ trace.level == 1 ? 'status-warning' : trace.level == 2 ? 'status-success' }}\">
            <td class=\"font-normal text-muted nowrap\">{{ loop.index }}</td>
            <td>{{ trace.name }}</td>
            <td>{{ trace.path }}</td>
            <td class=\"font-normal\">
                {% if trace.level == 1 %}
                    Path almost matches, but
                    <span class=\"newline\">{{ trace.log }}</span>
                {% elseif trace.level == 2 %}
                    {{ trace.log }}
                {% else %}
                    Path does not match
                {% endif %}
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>

<p class=\"help\">
    Note: These matching logs are based on the current router configuration,
    which might differ from the configuration used when profiling this request.
</p>
", "@WebProfiler/Router/panel.html.twig", "/Users/marvinkruger/uebung6/vendor/symfony/web-profiler-bundle/Resources/views/Router/panel.html.twig");
    }
}
