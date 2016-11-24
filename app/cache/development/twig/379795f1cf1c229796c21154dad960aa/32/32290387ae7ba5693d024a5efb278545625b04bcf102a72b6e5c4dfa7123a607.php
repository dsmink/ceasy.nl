<?php

/* @bolt/exception/_request.twig */
class __TwigTemplate_758f37ea1c955fe1ad317d908f8f74386f58b966a9f59453d2e1869939af4c4b extends Twig_Template
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
        $__internal_6d9c2357073510d9a781e14e9b8aab873d4630c4596829728c6ef83bc848e140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9c2357073510d9a781e14e9b8aab873d4630c4596829728c6ef83bc848e140->enter($__internal_6d9c2357073510d9a781e14e9b8aab873d4630c4596829728c6ef83bc848e140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/exception/_request.twig"));

        // line 16
        echo "
";
        // line 30
        echo "
";
        // line 31
        $context["macros"] = $this;
        // line 32
        echo "
<h1>Request data</h1>

";
        // line 35
        $context["bags"] = array(0 => "attributes", 1 => "query", 2 => "files", 3 => "cookies", 4 => "headers", 5 => "server", 6 => "session");
        // line 36
        $context["values"] = array(0 => "content", 1 => "languages", 2 => "charsets", 3 => "encodings", 4 => "acceptableContentTypes", 5 => "pathInfo", 6 => "requestUri", 7 => "baseUrl", 8 => "basePath", 9 => "method");
        // line 37
        echo "
<table class=\"table table-striped table-hover table-condensed\">
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : $this->getContext($context, "values")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 40
            echo "    ";
            $context["value"] = (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), $context["key"], array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), $context["key"]))) : (""));
            // line 41
            echo "    ";
            echo $context["macros"]->getprintrow($context["key"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</table>


";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bags"]) ? $context["bags"] : $this->getContext($context, "bags")));
        foreach ($context['_seq'] as $context["_key"] => $context["bag"]) {
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), $context["bag"], array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), $context["bag"]), "all", array())))) {
                // line 47
                echo "
    ";
                // line 48
                $context["values"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), $context["bag"]), "all", array());
                // line 49
                echo "
    <h2>";
                // line 50
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["bag"]), "html", null, true);
                echo "</h2>

    <table class=\"table table-striped table-hover table-condensed\">
        ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : $this->getContext($context, "values")));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 54
                    echo "            ";
                    echo $context["macros"]->getprintrow($context["key"], $context["value"]);
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "    </table>

";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6d9c2357073510d9a781e14e9b8aab873d4630c4596829728c6ef83bc848e140->leave($__internal_6d9c2357073510d9a781e14e9b8aab873d4630c4596829728c6ef83bc848e140_prof);

    }

    // line 1
    public function getprintvalue($__value__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3e49baf196aca8175d9a0a740493d9dfc9899b5c33c2fa425af0b71a1010a324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_3e49baf196aca8175d9a0a740493d9dfc9899b5c33c2fa425af0b71a1010a324->enter($__internal_3e49baf196aca8175d9a0a740493d9dfc9899b5c33c2fa425af0b71a1010a324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "printvalue"));

            // line 2
            echo "    ";
            if ((twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) &&  !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                // line 3
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
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
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 4
                    echo "            ";
                    if ( !($context["k"] === $this->getAttribute($context["loop"], "index0", array()))) {
                        echo " ";
                        echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                        echo " =&gt; ";
                    }
                    // line 5
                    echo "            ";
                    if (twig_test_iterable($context["v"])) {
                        // line 6
                        echo "                <em>(object / array)</em>
            ";
                    } else {
                        // line 8
                        echo "                ";
                        echo _twig_default_filter($this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($context["v"], 200), "<em>(empty)</em>");
                        echo "
            ";
                    }
                    // line 10
                    echo "            ";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo "<br>";
                    }
                    // line 11
                    echo "        ";
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
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "    ";
            } else {
                // line 13
                echo "        ";
                echo _twig_default_filter($this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 200), "<em>(empty)</em>");
                echo "
    ";
            }
            
            $__internal_3e49baf196aca8175d9a0a740493d9dfc9899b5c33c2fa425af0b71a1010a324->leave($__internal_3e49baf196aca8175d9a0a740493d9dfc9899b5c33c2fa425af0b71a1010a324_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 17
    public function getprintrow($__key__ = null, $__value__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "value" => $__value__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ac31beb9004c1916a08a543c6b8dfc67f0ce6d521576cbee4a840a4bf81980b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ac31beb9004c1916a08a543c6b8dfc67f0ce6d521576cbee4a840a4bf81980b3->enter($__internal_ac31beb9004c1916a08a543c6b8dfc67f0ce6d521576cbee4a840a4bf81980b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "printrow"));

            // line 18
            echo "    ";
            $context["macros"] = $this;
            // line 19
            echo "    ";
            $context["obfuscated"] = array(0 => "cookie", 1 => "_csrf/bolt", 2 => "_csrf/form", 3 => "bolt_authtoke", 4 => "bolt_session_", 5 => "authenticatio", 6 => "HTTP_COOKIE");
            // line 20
            echo "
    <tr>
        <th>";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "</th>
        <td>
            ";
            // line 24
            if (twig_in_filter(twig_slice($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), 0, 13), (isset($context["obfuscated"]) ? $context["obfuscated"] : $this->getContext($context, "obfuscated")))) {
                echo "<span class='obfuscated' data-value=\"";
            }
            // line 25
            echo $context["macros"]->getprintvalue((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            // line 26
            if (twig_in_filter(twig_slice($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), 0, 13), (isset($context["obfuscated"]) ? $context["obfuscated"] : $this->getContext($context, "obfuscated")))) {
                echo "\">(Click to reveal sensitive data)</span>";
            }
            // line 27
            echo "        </td>
    </tr>
";
            
            $__internal_ac31beb9004c1916a08a543c6b8dfc67f0ce6d521576cbee4a840a4bf81980b3->leave($__internal_ac31beb9004c1916a08a543c6b8dfc67f0ce6d521576cbee4a840a4bf81980b3_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@bolt/exception/_request.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 27,  247 => 26,  245 => 25,  241 => 24,  236 => 22,  232 => 20,  229 => 19,  226 => 18,  210 => 17,  188 => 13,  185 => 12,  171 => 11,  166 => 10,  160 => 8,  156 => 6,  153 => 5,  146 => 4,  128 => 3,  125 => 2,  110 => 1,  96 => 56,  87 => 54,  83 => 53,  77 => 50,  74 => 49,  72 => 48,  69 => 47,  64 => 46,  59 => 43,  50 => 41,  47 => 40,  43 => 39,  39 => 37,  37 => 36,  35 => 35,  30 => 32,  28 => 31,  25 => 30,  22 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro printvalue(value) %}
    {% if value is iterable and value is not empty %}
        {% for k, v in value %}
            {% if k is not same as(loop.index0) %} {{ k }} =&gt; {% endif %}
            {% if v is iterable %}
                <em>(object / array)</em>
            {% else %}
                {{ v|excerpt(200)|default('<em>(empty)</em>')|raw }}
            {% endif %}
            {% if not loop.last %}<br>{% endif %}
        {% endfor %}
    {% else %}
        {{ value|excerpt(200)|default('<em>(empty)</em>')|raw }}
    {% endif %}
{% endmacro %}

{% macro printrow(key, value) %}
    {% import _self as macros %}
    {% set obfuscated = ['cookie', '_csrf/bolt', '_csrf/form', 'bolt_authtoke', 'bolt_session_', 'authenticatio', 'HTTP_COOKIE'] %}

    <tr>
        <th>{{ key }}</th>
        <td>
            {% if key|slice(0, 13) in obfuscated %}<span class='obfuscated' data-value=\"{% endif %}
            {{- macros.printvalue(value) -}}
            {%- if key|slice(0, 13) in obfuscated -%}\">(Click to reveal sensitive data)</span>{% endif %}
        </td>
    </tr>
{% endmacro %}

{% import _self as macros %}

<h1>Request data</h1>

{% set bags = ['attributes', 'query', 'files', 'cookies', 'headers', 'server', 'session'] %}
{% set values = ['content', 'languages', 'charsets', 'encodings' , 'acceptableContentTypes', 'pathInfo', 'requestUri', 'baseUrl', 'basePath', 'method'] %}

<table class=\"table table-striped table-hover table-condensed\">
{% for key in values %}
    {% set value = attribute(request, key)|default() %}
    {{ macros.printrow(key, value) }}
{% endfor %}
</table>


{% for bag in bags if (attribute(request, bag) is defined) and (attribute(request, bag).all is not empty)%}

    {% set values = attribute(request, bag).all %}

    <h2>{{ bag|ucfirst }}</h2>

    <table class=\"table table-striped table-hover table-condensed\">
        {% for key, value in values %}
            {{ macros.printrow(key, value) }}
        {% endfor %}
    </table>

{% endfor %}
", "@bolt/exception/_request.twig", "app://view/twig/exception/_request.twig");
    }
}
