<?php

/* @bolt/exception/_trace.twig */
class __TwigTemplate_fa8ed7d1e3c288994873c320b549f8cda449d6cdef730e3149aa359ebd120754 extends Twig_Template
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
        $__internal_3bcb443c30119b5d0ab394364a671252cec776361723709f826338753e808728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bcb443c30119b5d0ab394364a671252cec776361723709f826338753e808728->enter($__internal_3bcb443c30119b5d0ab394364a671252cec776361723709f826338753e808728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/exception/_trace.twig"));

        // line 1
        echo "<h2>Stack trace</h2>

<table class=\"table table-striped table-hover table-condensed\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 5
            echo "    <tr>
        <th># ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " </th>
        <td>
            ";
            // line 8
            if ($this->getAttribute($context["t"], "class", array(), "any", true, true)) {
                // line 9
                echo "                ";
                echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, (($this->getAttribute($context["t"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["t"], "class", array()))) : ("")), "\\"), 0,  -1), "\\"), "html", null, true);
                echo "\\<strong>";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trim(twig_last($this->env, twig_split_filter($this->env, (($this->getAttribute($context["t"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["t"], "class", array()))) : ("")), "\\")), 32);
                echo "</strong>::";
            }
            // line 11
            echo twig_escape_filter($this->env, (($this->getAttribute($context["t"], "function", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["t"], "function", array()))) : ("")), "html", null, true);
            echo "(";
            // line 13
            if ( !twig_test_empty($this->getAttribute($context["t"], "args_safe", array()))) {
                // line 14
                $context["index"] = $this->getAttribute($context["loop"], "index", array());
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["t"], "args_safe", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["arg"]) {
                    // line 16
                    echo "<tt><a href=\"#trace-arguments-";
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\" onclick=\"javascript:\$('#trace-arguments-";
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "').slideDown('fast'); return false;\">";
                    echo $context["arg"];
                    echo "</a></tt>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 19
            echo ")
            <br>

            ";
            // line 22
            if ((($this->getAttribute($context["t"], "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["t"], "file", array()))) : (""))) {
                // line 23
                echo "                <em class='dim'>";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["t"], "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["t"], "file", array()))) : ("")), "html", null, true);
                echo " # line <strong>";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["t"], "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["t"], "line", array()))) : ("")), "html", null, true);
                echo "</strong></em>
            ";
            }
            // line 25
            echo "
            ";
            // line 26
            if ( !twig_test_empty($this->getAttribute($context["t"], "args_safe", array()))) {
                // line 27
                echo "            <div id='trace-arguments-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "' style=\"display: none;\">
                <em>(Arguments are loading)</em>
            </div>
            ";
            }
            // line 31
            echo "        </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</table>

";
        
        $__internal_3bcb443c30119b5d0ab394364a671252cec776361723709f826338753e808728->leave($__internal_3bcb443c30119b5d0ab394364a671252cec776361723709f826338753e808728_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/exception/_trace.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 34,  137 => 31,  129 => 27,  127 => 26,  124 => 25,  116 => 23,  114 => 22,  109 => 19,  85 => 16,  68 => 15,  66 => 14,  64 => 13,  61 => 11,  54 => 9,  52 => 8,  47 => 6,  44 => 5,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Stack trace</h2>

<table class=\"table table-striped table-hover table-condensed\">
{% for t in exception.trace %}
    <tr>
        <th># {{ loop.index }} </th>
        <td>
            {% if t.class is defined %}
                {{ t.class|default()|split(\"\\\\\")[0:-1]|join(\"\\\\\") -}}\\<strong>{{- t.class|default()|split(\"\\\\\")|last|trimtext(32) -}}</strong>::
            {%- endif -%}
            {{ t.function|default() }}(

            {%- if t.args_safe is not empty -%}
                {% set index = loop.index %}
                {%- for arg in t.args_safe -%}
                    <tt><a href=\"#trace-arguments-{{index}}\" onclick=\"javascript:\$('#trace-arguments-{{index}}').slideDown('fast'); return false;\">{{ arg|raw }}</a></tt>{% if not loop.last %}, {% endif %}
                {%- endfor -%}
            {%- endif -%}
            )
            <br>

            {% if t.file|default() %}
                <em class='dim'>{{ t.file|default() }} # line <strong>{{ t.line|default() }}</strong></em>
            {% endif %}

            {% if t.args_safe is not empty %}
            <div id='trace-arguments-{{loop.index}}' style=\"display: none;\">
                <em>(Arguments are loading)</em>
            </div>
            {% endif %}
        </td>
    </tr>
{% endfor %}
</table>

", "@bolt/exception/_trace.twig", "app://view/twig/exception/_trace.twig");
    }
}
