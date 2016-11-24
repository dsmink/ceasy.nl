<?php

/* @bolt/components/panel-lastmodified.twig */
class __TwigTemplate_696e7e24b8e4101ac6a7cc7c9fea8b15adec3aa299a87872cd0e111e714ecca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("@bolt/_base/_panel.twig", "@bolt/components/panel-lastmodified.twig", 5);
        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_panel.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69db2748b5b7d523d2839e402b8f3cf1d7aa64d6bd10d00fe3765b8898d645c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69db2748b5b7d523d2839e402b8f3cf1d7aa64d6bd10d00fe3765b8898d645c7->enter($__internal_69db2748b5b7d523d2839e402b8f3cf1d7aa64d6bd10d00fe3765b8898d645c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/panel-lastmodified.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69db2748b5b7d523d2839e402b8f3cf1d7aa64d6bd10d00fe3765b8898d645c7->leave($__internal_69db2748b5b7d523d2839e402b8f3cf1d7aa64d6bd10d00fe3765b8898d645c7_prof);

    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_fc3273e6bdfadfcdcda4483c6845f7890708254a7baa197c023a91a1ea0cce38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3273e6bdfadfcdcda4483c6845f7890708254a7baa197c023a91a1ea0cce38->enter($__internal_fc3273e6bdfadfcdcda4483c6845f7890708254a7baa197c023a91a1ea0cce38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo "panel-lastmodified";
        
        $__internal_fc3273e6bdfadfcdcda4483c6845f7890708254a7baa197c023a91a1ea0cce38->leave($__internal_fc3273e6bdfadfcdcda4483c6845f7890708254a7baa197c023a91a1ea0cce38_prof);

    }

    // line 9
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_92a1549e6634a2a753dcd5116521c9432d49f036c02765f97923880356f1997c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a1549e6634a2a753dcd5116521c9432d49f036c02765f97923880356f1997c->enter($__internal_92a1549e6634a2a753dcd5116521c9432d49f036c02765f97923880356f1997c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo "fa-clock-o";
        
        $__internal_92a1549e6634a2a753dcd5116521c9432d49f036c02765f97923880356f1997c->leave($__internal_92a1549e6634a2a753dcd5116521c9432d49f036c02765f97923880356f1997c_prof);

    }

    // line 11
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_3989450f02a282d948d7d9984ecb0515e00137b5836933d3a7f111c834654ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3989450f02a282d948d7d9984ecb0515e00137b5836933d3a7f111c834654ebf->enter($__internal_3989450f02a282d948d7d9984ecb0515e00137b5836933d3a7f111c834654ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        // line 12
        echo "
    ";
        // line 13
        if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array()))) : (""))) {
            // line 14
            echo "        ";
            echo "Recent modifications";
            echo "
    ";
        } else {
            // line 16
            echo "        ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.last-modified", array("%contenttypes%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array())));
            echo "
    ";
        }
        // line 18
        echo "
";
        
        $__internal_3989450f02a282d948d7d9984ecb0515e00137b5836933d3a7f111c834654ebf->leave($__internal_3989450f02a282d948d7d9984ecb0515e00137b5836933d3a7f111c834654ebf_prof);

    }

    // line 21
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_b6ad745de2e11adb383c4dd2f17b7e1c26a4c773e5486626a092cb9e29961a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ad745de2e11adb383c4dd2f17b7e1c26a4c773e5486626a092cb9e29961a99->enter($__internal_b6ad745de2e11adb383c4dd2f17b7e1c26a4c773e5486626a092cb9e29961a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 22
        echo "
    ";
        // line 23
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/components/panel-lastmodified.twig", 23);
        // line 24
        echo "    ";
        $context["__internal_30d08018e640982c6eafa55f7ea0ac712462467114707cb5bde8827b7ee0b767"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/components/panel-lastmodified.twig", 24);
        // line 25
        echo "    ";
        $context["__internal_0e1f36a9f898dde05a0e63ae99f6c45ae376d223b12bc71de6ad2ba40bbafad8"] = $this->loadTemplate("@bolt/changelog/_macros.twig", "@bolt/components/panel-lastmodified.twig", 25);
        // line 26
        echo "
    <ul>
        ";
        // line 28
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "changelog", array(), "any", true, true)) {
            // line 29
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "changelog", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["index"] => $context["entry"]) {
                // line 30
                echo "                <li>
                    ";
                // line 31
                if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array()))) : (""))) {
                    // line 32
                    echo "                        ";
                    $context["title"] = $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "singular_name", array());
                    // line 33
                    echo "                    ";
                } else {
                    // line 34
                    echo "                        ";
                    if ($this->getAttribute($context["entry"], "title", array())) {
                        // line 35
                        echo "                            ";
                        $context["title"] = $context["macro"]->getcontentlink_by_id($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), $this->getAttribute($context["entry"], "title", array()), $this->getAttribute($context["entry"], "contentid", array()));
                        // line 36
                        echo "                        ";
                    } else {
                        // line 37
                        echo "                            ";
                        $context["title"] = twig_replace_filter("%name% № %id%", array("%name%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "singular_name", array()), "%id%" => $this->getAttribute($context["entry"], "contentid", array())));
                        // line 38
                        echo "                        ";
                    }
                    // line 39
                    echo "                        № ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "contentid", array()), "html", null, true);
                    echo ".
                    ";
                }
                // line 41
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
                echo "
                    ";
                // line 42
                echo $context["__internal_0e1f36a9f898dde05a0e63ae99f6c45ae376d223b12bc71de6ad2ba40bbafad8"]->getchangelog_mutation($this->getAttribute($context["entry"], "mutation_type", array()));
                echo "
                    ";
                // line 43
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.by");
                echo " <em>";
                echo $context["macro"]->getuserlink((($this->getAttribute($context["entry"], "ownerid", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "ownerid", array()), "")) : ("")));
                echo "</em>
                    <small>(";
                // line 44
                echo $context["__internal_30d08018e640982c6eafa55f7ea0ac712462467114707cb5bde8827b7ee0b767"]->getbuic_moment($this->getAttribute($context["entry"], "date", array()));
                echo ")</small>
                    <small><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changelogrecordsingle", array("contenttype" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array()), "contentid" => $this->getAttribute($context["entry"], "contentid", array()), "id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\">view</a></small>
                </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 48
                echo "                <li><em>";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.no-latest", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array())));
                echo ".</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        ";
        } else {
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "latest", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                // line 52
                echo "                <li>
                    № ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "id", array()), "html", null, true);
                echo ".
                    ";
                // line 54
                echo $context["macro"]->getcontentlink($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), $context["content"]);
                echo "
                    <small>(";
                // line 55
                echo $context["__internal_30d08018e640982c6eafa55f7ea0ac712462467114707cb5bde8827b7ee0b767"]->getbuic_moment($this->getAttribute($context["content"], "datechanged", array()));
                echo ")</small>
                </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 58
                echo "                <li><em>";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.no-latest", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array())));
                echo ".</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        ";
        }
        // line 61
        echo "    </ul>
    ";
        // line 62
        if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "changelog", array(), "any", true, true) && $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contentid", array())) && $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "filtered", array()))) {
            // line 63
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changelogrecordall", array("contenttype" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array()), "contentid" => $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contentid", array()))), "html", null, true);
            echo "\">
            ";
            // line 64
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.full-list-ellipsis");
            echo "
        </a>
    ";
        }
        // line 67
        echo "
";
        
        $__internal_b6ad745de2e11adb383c4dd2f17b7e1c26a4c773e5486626a092cb9e29961a99->leave($__internal_b6ad745de2e11adb383c4dd2f17b7e1c26a4c773e5486626a092cb9e29961a99_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-lastmodified.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 67,  239 => 64,  234 => 63,  232 => 62,  229 => 61,  226 => 60,  217 => 58,  209 => 55,  205 => 54,  201 => 53,  198 => 52,  192 => 51,  189 => 50,  180 => 48,  172 => 45,  168 => 44,  162 => 43,  158 => 42,  153 => 41,  147 => 39,  144 => 38,  141 => 37,  138 => 36,  135 => 35,  132 => 34,  129 => 33,  126 => 32,  124 => 31,  121 => 30,  115 => 29,  113 => 28,  109 => 26,  106 => 25,  103 => 24,  101 => 23,  98 => 22,  92 => 21,  84 => 18,  78 => 16,  72 => 14,  70 => 13,  67 => 12,  61 => 11,  49 => 9,  37 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # Sidebar-Panel: Displays recent modifications or last modified contenttypes
 # (Usage Example: Content-editor)
 #}
{% extends '@bolt/_base/_panel.twig' %}

{% block panel_class 'panel-lastmodified' %}

{% block panel_icon 'fa-clock-o' %}

{% block panel_head %}

    {% if context.filtered|default %}
        {{ 'Recent modifications' }}
    {% else %}
        {{ __('contenttypes.generic.last-modified', {'%contenttypes%': context.contenttype.slug}) }}
    {% endif %}

{% endblock panel_head %}

{% block panel_body %}

    {% import '@bolt/_macro/_macro.twig' as macro %}
    {% from '@bolt/_buic/_moment.twig' import buic_moment %}
    {% from '@bolt/changelog/_macros.twig' import changelog_mutation %}

    <ul>
        {% if context.changelog is defined %}
            {% for index, entry in context.changelog %}
                <li>
                    {% if context.filtered|default %}
                        {% set title = context.contenttype.singular_name %}
                    {% else %}
                        {% if entry.title %}
                            {% set title = macro.contentlink_by_id(context.contenttype, entry.title, entry.contentid) %}
                        {% else %}
                            {% set title = '%name% № %id%'|replace({'%name%': context.contenttype.singular_name, '%id%': entry.contentid}) %}
                        {% endif %}
                        № {{ entry.contentid }}.
                    {% endif %}
                    {{ title }}
                    {{ changelog_mutation(entry.mutation_type) }}
                    {{ __('general.phrase.by') }} <em>{{ macro.userlink(entry.ownerid|default('')) }}</em>
                    <small>({{ buic_moment(entry.date) }})</small>
                    <small><a href=\"{{ path('changelogrecordsingle', {'contenttype': context.contenttype.slug, 'contentid': entry.contentid, 'id': entry.id}) }}\">view</a></small>
                </li>
            {% else %}
                <li><em>{{ __('contenttypes.generic.no-latest', {'%contenttype%': context.contenttype.slug}) }}.</em></li>
            {% endfor %}
        {% else %}
            {% for content in context.latest %}
                <li>
                    № {{ content.id }}.
                    {{ macro.contentlink(context.contenttype, content) }}
                    <small>({{ buic_moment(content.datechanged) }})</small>
                </li>
            {% else %}
                <li><em>{{ __('contenttypes.generic.no-latest', {'%contenttype%': context.contenttype.slug}) }}.</em></li>
            {% endfor %}
        {% endif %}
    </ul>
    {% if context.changelog is defined and context.contentid and context.filtered %}
        <a href=\"{{ path('changelogrecordall', {'contenttype': context.contenttype.slug, 'contentid': context.contentid}) }}\">
            {{ __('general.phrase.full-list-ellipsis') }}
        </a>
    {% endif %}

{% endblock panel_body %}
", "@bolt/components/panel-lastmodified.twig", "app://view/twig/components/panel-lastmodified.twig");
    }
}
