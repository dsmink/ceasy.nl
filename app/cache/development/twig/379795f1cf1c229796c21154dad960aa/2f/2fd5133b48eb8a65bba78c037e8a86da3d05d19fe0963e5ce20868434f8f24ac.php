<?php

/* @bolt/overview/_panel-actions_overview.twig */
class __TwigTemplate_fce45be9d4e784eab995d13167bab512537a6130d37d74ecb756a42c262553a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("@bolt/_base/_panel.twig", "@bolt/overview/_panel-actions_overview.twig", 4);
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
        $__internal_da038ce04ffce740b7535fa30c64149241b1a3add8ecc263d4a1fcb810a76348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da038ce04ffce740b7535fa30c64149241b1a3add8ecc263d4a1fcb810a76348->enter($__internal_da038ce04ffce740b7535fa30c64149241b1a3add8ecc263d4a1fcb810a76348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/overview/_panel-actions_overview.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da038ce04ffce740b7535fa30c64149241b1a3add8ecc263d4a1fcb810a76348->leave($__internal_da038ce04ffce740b7535fa30c64149241b1a3add8ecc263d4a1fcb810a76348_prof);

    }

    // line 6
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_709cd885c9acd9354a2775bd7b70a0bf3a5e481c8c5ef83aac889ee28c4f2f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709cd885c9acd9354a2775bd7b70a0bf3a5e481c8c5ef83aac889ee28c4f2f48->enter($__internal_709cd885c9acd9354a2775bd7b70a0bf3a5e481c8c5ef83aac889ee28c4f2f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo "panel-news";
        
        $__internal_709cd885c9acd9354a2775bd7b70a0bf3a5e481c8c5ef83aac889ee28c4f2f48->leave($__internal_709cd885c9acd9354a2775bd7b70a0bf3a5e481c8c5ef83aac889ee28c4f2f48_prof);

    }

    // line 8
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_8047abce1fb86ed334a4103d032827d6f257c3962d545fafb859d6ac2b122ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8047abce1fb86ed334a4103d032827d6f257c3962d545fafb859d6ac2b122ba6->enter($__internal_8047abce1fb86ed334a4103d032827d6f257c3962d545fafb859d6ac2b122ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo "fa-cog";
        
        $__internal_8047abce1fb86ed334a4103d032827d6f257c3962d545fafb859d6ac2b122ba6->leave($__internal_8047abce1fb86ed334a4103d032827d6f257c3962d545fafb859d6ac2b122ba6_prof);

    }

    // line 10
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_79c42586186db3a735024ba09c1fb08eb3a276a4101897d82a3eb0f0e3dd2ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c42586186db3a735024ba09c1fb08eb3a276a4101897d82a3eb0f0e3dd2ac0->enter($__internal_79c42586186db3a735024ba09c1fb08eb3a276a4101897d82a3eb0f0e3dd2ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.actions-all", array("%contenttypes%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array())));
        
        $__internal_79c42586186db3a735024ba09c1fb08eb3a276a4101897d82a3eb0f0e3dd2ac0->leave($__internal_79c42586186db3a735024ba09c1fb08eb3a276a4101897d82a3eb0f0e3dd2ac0_prof);

    }

    // line 12
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_cb24aa3d8d2e3d635e35619e5617da2e1c47cd59aa9e5a9c4ba1044fae6e40cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb24aa3d8d2e3d635e35619e5617da2e1c47cd59aa9e5a9c4ba1044fae6e40cf->enter($__internal_cb24aa3d8d2e3d635e35619e5617da2e1c47cd59aa9e5a9c4ba1044fae6e40cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 13
        echo "    ";
        if ($this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed((("contenttype:" . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array())) . ":create"))) {
            // line 14
            echo "        <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array()))), "html", null, true);
            echo "\">
            <i class=\"fa fa-plus\"></i> ";
            // line 15
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.new", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array())));
            echo "
        </a>
    ";
        }
        // line 18
        echo "
    <p style=\"margin-top: 15px;\"><strong>";
        // line 19
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.filter");
        echo "</strong></p>

    <form class=\"form-inline\">

        ";
        // line 23
        $context["taxonomyfilter"] = false;
        // line 24
        echo "
        <div class=\"form-group\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["taxonomy"]) {
            // line 27
            echo "            ";
            if (twig_test_iterable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config", array()), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/options")), "method"))) {
                // line 28
                echo "                ";
                if ($this->env->getExtension('Bolt\Twig\TwigExtension')->request(("taxonomy-" . $context["taxonomy"]))) {
                    // line 29
                    echo "                    ";
                    $context["taxonomyfilter"] = true;
                    // line 30
                    echo "                ";
                }
                // line 31
                echo "                <select name='taxonomy-";
                echo twig_escape_filter($this->env, $context["taxonomy"], "html", null, true);
                echo "' class='form-control'>
                    <option value=''>
                        (";
                // line 33
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/name")), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/name")), "method"), $context["taxonomy"])) : ($context["taxonomy"])), "html", null, true);
                echo ")
                    </option>
                ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config", array()), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/options")), "method"));
                foreach ($context['_seq'] as $context["slug"] => $context["name"]) {
                    // line 36
                    echo "                    <option value='";
                    echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                    echo "' ";
                    if (($this->env->getExtension('Bolt\Twig\TwigExtension')->request(("taxonomy-" . $context["taxonomy"])) == $context["slug"])) {
                        echo "selected";
                    }
                    echo ">
                        ";
                    // line 37
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "
                    </option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['slug'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                </select>
                ";
                // line 41
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.or");
                echo "
            ";
            }
            // line 43
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            <input type=\"text\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->request("filter", "", true), "html", null, true);
        echo "\" name=\"filter\" style=\"width: 110px;\" placeholder=\"";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.keyword-ellipsis");
        echo "\">
        </div>

        <div class=\"form-group\" style=\"display: block; margin-top: 12px;\">
            <button type=\"submit\" class=\"btn btn-tertiary\"><i class=\"fa fa-filter\"></i> ";
        // line 48
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.filter");
        echo "</button>

            ";
        // line 50
        if ((($this->env->getExtension('Bolt\Twig\TwigExtension')->request("filter") || $this->env->getExtension('Bolt\Twig\TwigExtension')->request("order")) || (isset($context["taxonomyfilter"]) ? $context["taxonomyfilter"] : $this->getContext($context, "taxonomyfilter")))) {
            // line 51
            echo "                <a class=\"btn btn-tertiary\" href=\"?\"><i class=\"fa fa-close\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.clear-filter-sort");
            echo "</a>
            ";
        }
        // line 53
        echo "        </div>

    </form>


    ";
        // line 58
        $context["description"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array()), 2 => "description"), array("DEFAULT" => (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "description", array()))) : (""))));
        // line 59
        echo "    <div class=\"description\">
        ";
        // line 60
        if ((isset($context["description"]) ? $context["description"] : $this->getContext($context, "description"))) {
            // line 61
            echo "            ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->markdown((isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")));
            echo "
        ";
        }
        // line 63
        echo "    </div>

    <p><strong>";
        // line 65
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.details");
        echo "</strong></p>
    <ul>
        <li>";
        // line 67
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-default");
        echo ": ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "default_status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "default_status", array()), "published")) : ("published")), "html", null, true);
        echo "</li>
        <li>";
        // line 68
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.listing-template");
        echo ": <code>";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "listing_template", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "listing_template", array()), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config", array()), "get", array(0 => "general/listing_template"), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config", array()), "get", array(0 => "general/listing_template"), "method"))), "html", null, true);
        echo "</code></li>
        <li>";
        // line 69
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.template-detail");
        echo ": <code>";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "record_template", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "record_template", array()), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config", array()), "get", array(0 => "general/record_template"), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config", array()), "get", array(0 => "general/record_template"), "method"))), "html", null, true);
        echo "</code></li>
        ";
        // line 70
        if (twig_test_iterable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array()), "")) : ("")))) {
            // line 71
            echo "            <li>";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.taxonomy");
            echo ": ";
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "taxonomy", array()), ", "), "html", null, true);
            echo "</li>
        ";
        }
        // line 73
        echo "        ";
        if (twig_test_iterable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "relations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "relations", array()), "")) : ("")))) {
            // line 74
            echo "            <li>
                ";
            // line 75
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.relationships");
            echo ":
                ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "relations", array()));
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
            foreach ($context['_seq'] as $context["rel"] => $context["data"]) {
                // line 77
                echo "                    ";
                echo twig_escape_filter($this->env, $context["rel"], "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 78
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['rel'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "            </li>
        ";
        }
        // line 81
        echo "    </ul>

";
        
        $__internal_cb24aa3d8d2e3d635e35619e5617da2e1c47cd59aa9e5a9c4ba1044fae6e40cf->leave($__internal_cb24aa3d8d2e3d635e35619e5617da2e1c47cd59aa9e5a9c4ba1044fae6e40cf_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/overview/_panel-actions_overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 81,  299 => 79,  285 => 78,  279 => 77,  262 => 76,  258 => 75,  255 => 74,  252 => 73,  244 => 71,  242 => 70,  236 => 69,  230 => 68,  224 => 67,  219 => 65,  215 => 63,  209 => 61,  207 => 60,  204 => 59,  202 => 58,  195 => 53,  189 => 51,  187 => 50,  182 => 48,  172 => 44,  166 => 43,  161 => 41,  158 => 40,  149 => 37,  140 => 36,  136 => 35,  131 => 33,  125 => 31,  122 => 30,  119 => 29,  116 => 28,  113 => 27,  109 => 26,  105 => 24,  103 => 23,  96 => 19,  93 => 18,  87 => 15,  82 => 14,  79 => 13,  73 => 12,  61 => 10,  49 => 8,  37 => 6,  11 => 4,);
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
 # Sidebar-Panel: Displays actions for contenttype
 #}
{% extends '@bolt/_base/_panel.twig' %}

{% block panel_class 'panel-news' %}

{% block panel_icon 'fa-cog' %}

{% block panel_head __('contenttypes.generic.actions-all', {'%contenttypes%': context.contenttype.slug}) %}

{% block panel_body %}
    {% if isallowed('contenttype:' ~ context.contenttype.slug ~ ':create') %}
        <a class=\"btn btn-primary\" href=\"{{ path('editcontent', {'contenttypeslug': context.contenttype.slug}) }}\">
            <i class=\"fa fa-plus\"></i> {{ __('contenttypes.generic.new', {'%contenttype%': context.contenttype.slug}) }}
        </a>
    {% endif %}

    <p style=\"margin-top: 15px;\"><strong>{{ __('general.phrase.filter') }}</strong></p>

    <form class=\"form-inline\">

        {% set taxonomyfilter = false %}

        <div class=\"form-group\">
        {% for taxonomy in context.contenttype.taxonomy|default([]) %}
            {% if app.config.get('taxonomy/' ~ taxonomy ~ '/options') is iterable %}
                {% if request('taxonomy-' ~ taxonomy ) %}
                    {% set taxonomyfilter = true %}
                {% endif %}
                <select name='taxonomy-{{taxonomy}}' class='form-control'>
                    <option value=''>
                        ({{ app.config.get('taxonomy/' ~ taxonomy ~ '/name')|default(taxonomy) }})
                    </option>
                {% for slug, name in app.config.get('taxonomy/' ~ taxonomy ~ '/options') %}
                    <option value='{{slug}}' {% if request('taxonomy-' ~ taxonomy ) == slug %}selected{% endif %}>
                        {{name}}
                    </option>
                {% endfor %}
                </select>
                {{ __('general.phrase.or') }}
            {% endif %}
        {% endfor %}
            <input type=\"text\" class=\"form-control\" value=\"{{ request('filter', '', true) }}\" name=\"filter\" style=\"width: 110px;\" placeholder=\"{{ __('general.phrase.keyword-ellipsis') }}\">
        </div>

        <div class=\"form-group\" style=\"display: block; margin-top: 12px;\">
            <button type=\"submit\" class=\"btn btn-tertiary\"><i class=\"fa fa-filter\"></i> {{ __('general.phrase.filter') }}</button>

            {% if request('filter') or request('order') or taxonomyfilter %}
                <a class=\"btn btn-tertiary\" href=\"?\"><i class=\"fa fa-close\"></i> {{ __('general.phrase.clear-filter-sort') }}</a>
            {% endif %}
        </div>

    </form>


    {% set description = __(['contenttypes', context.contenttype.slug, 'description'], {DEFAULT: context.contenttype.description|default()}) %}
    <div class=\"description\">
        {% if description %}
            {{ description|markdown }}
        {% endif %}
    </div>

    <p><strong>{{ __('general.phrase.details') }}</strong></p>
    <ul>
        <li>{{ __('general.phrase.status-default') }}: {{ context.contenttype.default_status|default('published') }}</li>
        <li>{{ __('general.phrase.listing-template') }}: <code>{{ context.contenttype.listing_template|default( app.config.get('general/listing_template') ) }}</code></li>
        <li>{{ __('general.phrase.template-detail') }}: <code>{{ context.contenttype.record_template|default( app.config.get('general/record_template') ) }}</code></li>
        {% if context.contenttype.taxonomy|default('') is iterable %}
            <li>{{ __('general.phrase.taxonomy') }}: {{ context.contenttype.taxonomy|join(', ') }}</li>
        {% endif %}
        {% if context.contenttype.relations|default('') is iterable %}
            <li>
                {{ __('general.phrase.relationships') }}:
                {% for rel, data in context.contenttype.relations %}
                    {{ rel }}{% if not loop.last %}, {% endif %}
                {% endfor %}
            </li>
        {% endif %}
    </ul>

{% endblock panel_body %}
", "@bolt/overview/_panel-actions_overview.twig", "app://view/twig/overview/_panel-actions_overview.twig");
    }
}
