<?php

/* @bolt/components/pager.twig */
class __TwigTemplate_d2b54c939a92c4de2db92d6866dfce567126a30b0149709e2336ffebf9d00a4c extends Twig_Template
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
        $__internal_c9314ddfb5ddcfa0789283123a9f4ee34b48fbac32cb99162f508ebbbfada591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9314ddfb5ddcfa0789283123a9f4ee34b48fbac32cb99162f508ebbbfada591->enter($__internal_c9314ddfb5ddcfa0789283123a9f4ee34b48fbac32cb99162f508ebbbfada591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/pager.twig"));

        // line 1
        $context["link"] = $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "makelink", array(), "method");
        // line 2
        echo "
";
        // line 3
        if (((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array(), "any", false, true), "totalpages", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array(), "any", false, true), "totalpages", array()), 0)) : (0)) > 1)) {
            // line 4
            echo "    <div style=\"text-align: center\">
        <ul class=\"pagination pagination-centered\">
            ";
            // line 7
            echo "            <li><span>";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.pager-showing-from-to-of", array("%pager_for%" => $this->getAttribute($this->getAttribute(            // line 8
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "for", array()), "%from%" => $this->getAttribute($this->getAttribute(            // line 9
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "showingFrom", array()), "%to%" => $this->getAttribute($this->getAttribute(            // line 10
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "showingTo", array()), "%count%" => $this->getAttribute($this->getAttribute(            // line 11
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "count", array())));
            // line 12
            echo "</span>
            </li>

            ";
            // line 16
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "current", array()) > 1)) {
                // line 17
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "current", array()) - 1), "html", null, true);
                echo "\"><i class=\"fa fa-angle-left\" style=\"font-weight: bold;\"></i></a></li>
            ";
            }
            // line 19
            echo "
            ";
            // line 20
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "current", array()) > ($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "surr", array()) + 1))) {
                // line 21
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                echo 1;
                echo "\"><i class=\"fa fa-double-angle-left\" style=\"font-weight: bold;\"></i> 1</a></li>
            ";
            }
            // line 23
            echo "
            ";
            // line 25
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "current", array()) > ($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "surr", array()) + 2))) {
                // line 26
                echo "                <li class=\"disabled\"><a href=\"#\">...</a></li>
            ";
            }
            // line 28
            echo "
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(1, ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "current", array()) - $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "surr", array()))), min(($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "current", array()) + $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "surr", array())), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "totalpages", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 30
                echo "                <li ";
                if (($context["i"] == $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "current", array()))) {
                    echo "class=\"active\"";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
            ";
            // line 34
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "current", array()) < (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "totalpages", array()) - $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "surr", array())) - 1))) {
                // line 35
                echo "                <li class=\"disabled\"><a href=\"#\">...</a></li>
            ";
            }
            // line 37
            echo "
            ";
            // line 39
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "current", array()) < ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "totalpages", array()) - $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "surr", array())))) {
                // line 40
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "totalpages", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "totalpages", array()), "html", null, true);
                echo " <i class=\"fa fa-double-angle-right\" style=\"font-weight: bold;\"></i></a></li>
            ";
            }
            // line 42
            echo "
            ";
            // line 43
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "current", array()) < $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "totalpages", array()))) {
                // line 44
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "pager", array()), "current", array()) + 1), "html", null, true);
                echo "\"><i class=\"fa fa-angle-right\" style=\"font-weight: bold;\"></i></a></li>
            ";
            }
            // line 46
            echo "        </ul>
    </div>
";
        }
        
        $__internal_c9314ddfb5ddcfa0789283123a9f4ee34b48fbac32cb99162f508ebbbfada591->leave($__internal_c9314ddfb5ddcfa0789283123a9f4ee34b48fbac32cb99162f508ebbbfada591_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 46,  130 => 44,  128 => 43,  125 => 42,  116 => 40,  113 => 39,  110 => 37,  106 => 35,  103 => 34,  100 => 32,  84 => 30,  80 => 29,  77 => 28,  73 => 26,  70 => 25,  67 => 23,  60 => 21,  58 => 20,  55 => 19,  48 => 17,  45 => 16,  40 => 12,  38 => 11,  37 => 10,  36 => 9,  35 => 8,  33 => 7,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set link = context.pager.makelink() %}

{% if context.pager.totalpages|default(0) > 1 %}
    <div style=\"text-align: center\">
        <ul class=\"pagination pagination-centered\">
            {# Showing {{ context.pager.for }} {{ context.pager.showingFrom }} - {{ context.pager.showingTo }} of {{ context.pager.count }} #}
            <li><span>{{ __('general.phrase.pager-showing-from-to-of', {
                    '%pager_for%': context.pager.for,
                    '%from%': context.pager.showingFrom,
                    '%to%': context.pager.showingTo,
                    '%count%': context.pager.count})
                }}</span>
            </li>

            {# 'first' and 'prev' #}
            {% if context.pager.current > 1 %}
                <li><a href=\"{{ link }}{{ context.pager.current - 1 }}\"><i class=\"fa fa-angle-left\" style=\"font-weight: bold;\"></i></a></li>
            {% endif %}

            {% if context.pager.current > context.surr+1 %}
                <li><a href=\"{{ link }}{{ 1 }}\"><i class=\"fa fa-double-angle-left\" style=\"font-weight: bold;\"></i> 1</a></li>
            {% endif %}

            {# start with '...' if there are more than context.surr+1 before currentpage. #}
            {% if context.pager.current > context.surr + 2 %}
                <li class=\"disabled\"><a href=\"#\">...</a></li>
            {% endif %}

            {% for i in max(1, context.pager.current - context.surr) .. min(context.pager.current + context.surr, context.pager.totalpages) %}
                <li {% if i == context.pager.current %}class=\"active\"{% endif %}><a href=\"{{ link }}{{ i }}\">{{ i }}</a></li>
            {% endfor %}

            {# end with '...' if there are more than context.surr+1 after currentpage. #}
            {% if context.pager.current < (context.pager.totalpages - context.surr - 1) %}
                <li class=\"disabled\"><a href=\"#\">...</a></li>
            {% endif %}

            {# 'next' and 'last' #}
            {% if context.pager.current < context.pager.totalpages - context.surr %}
                <li><a href=\"{{ link }}{{ context.pager.totalpages }}\">{{ context.pager.totalpages }} <i class=\"fa fa-double-angle-right\" style=\"font-weight: bold;\"></i></a></li>
            {% endif %}

            {% if context.pager.current < context.pager.totalpages %}
                <li><a href=\"{{ link }}{{ context.pager.current + 1 }}\"><i class=\"fa fa-angle-right\" style=\"font-weight: bold;\"></i></a></li>
            {% endif %}
        </ul>
    </div>
{% endif %}
", "@bolt/components/pager.twig", "app://view/twig/components/pager.twig");
    }
}
