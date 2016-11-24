<?php

/* @bolt/editcontent/fields/_grouping.twig */
class __TwigTemplate_695bbe48cebd891e330c0be02e0c813f92f174572d82bc78296c22c36536654c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_grouping.twig", 16);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
            'fieldset_label_class' => array($this, 'block_fieldset_label_class'),
            'fieldset_controls' => array($this, 'block_fieldset_controls'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_fieldset.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff8ae2cd3b742e1cb3351117c551d1f12ebffc83f99db6401c5fc3d7d0788e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8ae2cd3b742e1cb3351117c551d1f12ebffc83f99db6401c5fc3d7d0788e4a->enter($__internal_ff8ae2cd3b742e1cb3351117c551d1f12ebffc83f99db6401c5fc3d7d0788e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_grouping.twig"));

        // line 3
        $context["id_select"] = ("taxonomy-" . $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug", array()));
        // line 4
        $context["id_order"] = ("taxonomy-order-" . $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug", array()));
        // line 6
        $context["attributes"] = array("select" => array("name" => (("taxonomy[" . $this->getAttribute(        // line 8
(isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug", array())) . "][]"), "id" =>         // line 9
(isset($context["id_select"]) ? $context["id_select"] : $this->getContext($context, "id_select")), "class" => "form-control"));
        // line 16
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff8ae2cd3b742e1cb3351117c551d1f12ebffc83f99db6401c5fc3d7d0788e4a->leave($__internal_ff8ae2cd3b742e1cb3351117c551d1f12ebffc83f99db6401c5fc3d7d0788e4a_prof);

    }

    // line 18
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_8e58eb8cbb3ead57777c846976faae86e2358aa065d5e84ce9a6a034daa6936b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e58eb8cbb3ead57777c846976faae86e2358aa065d5e84ce9a6a034daa6936b->enter($__internal_8e58eb8cbb3ead57777c846976faae86e2358aa065d5e84ce9a6a034daa6936b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo "grouping";
        
        $__internal_8e58eb8cbb3ead57777c846976faae86e2358aa065d5e84ce9a6a034daa6936b->leave($__internal_8e58eb8cbb3ead57777c846976faae86e2358aa065d5e84ce9a6a034daa6936b_prof);

    }

    // line 20
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_0e257421542015978381fca8bb73cbb470782b59749aac7ccc8abc5f31c0566f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e257421542015978381fca8bb73cbb470782b59749aac7ccc8abc5f31c0566f->enter($__internal_0e257421542015978381fca8bb73cbb470782b59749aac7ccc8abc5f31c0566f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "name", array()), "html", null, true);
        
        $__internal_0e257421542015978381fca8bb73cbb470782b59749aac7ccc8abc5f31c0566f->leave($__internal_0e257421542015978381fca8bb73cbb470782b59749aac7ccc8abc5f31c0566f_prof);

    }

    // line 21
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_8351cd5ebc1c5558f3e791b0453ad405a81ea99c7fea79fad9b5d9a3ca3fa7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8351cd5ebc1c5558f3e791b0453ad405a81ea99c7fea79fad9b5d9a3ca3fa7b6->enter($__internal_8351cd5ebc1c5558f3e791b0453ad405a81ea99c7fea79fad9b5d9a3ca3fa7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo "col-sm-3";
        
        $__internal_8351cd5ebc1c5558f3e791b0453ad405a81ea99c7fea79fad9b5d9a3ca3fa7b6->leave($__internal_8351cd5ebc1c5558f3e791b0453ad405a81ea99c7fea79fad9b5d9a3ca3fa7b6_prof);

    }

    // line 23
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_cd96c7884d9d099e12a2350a40ca6eb1bdd2a54831eb15dd28677478bad11589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd96c7884d9d099e12a2350a40ca6eb1bdd2a54831eb15dd28677478bad11589->enter($__internal_cd96c7884d9d099e12a2350a40ca6eb1bdd2a54831eb15dd28677478bad11589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 24
        echo "    <div class=\"col-sm-9\">
        <div class=\"form-group\">
            <label for=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["id_select"]) ? $context["id_select"] : $this->getContext($context, "id_select")), "html", null, true);
        echo "\" class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "name", array()), "html", null, true);
        echo "</label>
            <div class=\"col-xs-12\">
                <select";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "select", array())), "method"), "html", null, true);
        echo ">
                    <option value=\"\">";
        // line 29
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("(no group)");
        echo "</option>
                    <option value=\"\" disabled>-----------</option>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "options", array()));
        foreach ($context['_seq'] as $context["slug"] => $context["group"]) {
            // line 32
            echo "                        ";
            $context["attr_opt"] = array("value" =>             // line 33
$context["slug"], "selected" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 34
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "taxonomy", array()), "containsKeyValue", array(0 => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug", array()), 1 => $context["slug"]), "method"));
            // line 36
            echo "                        <option";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "attr", array(0 => (isset($context["attr_opt"]) ? $context["attr_opt"] : $this->getContext($context, "attr_opt"))), "method"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $context["group"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </select>
            </div>
        </div>

        ";
        // line 42
        if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "has_sortorder", array(), "any", true, true) && ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "has_sortorder", array()) == true))) {
            // line 43
            echo "            ";
            $context["grouping"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "taxonomy", array()), "getField", array(0 => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug", array())), "method"), "first", array(), "method");
            // line 44
            echo "            ";
            if (((isset($context["grouping"]) ? $context["grouping"] : $this->getContext($context, "grouping")) && $this->getAttribute((isset($context["grouping"]) ? $context["grouping"] : $this->getContext($context, "grouping")), "sortorder", array()))) {
                // line 45
                echo "                ";
                $context["sortval"] = $this->getAttribute((isset($context["grouping"]) ? $context["grouping"] : $this->getContext($context, "grouping")), "sortorder", array());
                // line 46
                echo "            ";
            }
            // line 47
            echo "            ";
            $context["attr_order"] = array("class" => "form-control", "id" =>             // line 49
(isset($context["id_order"]) ? $context["id_order"] : $this->getContext($context, "id_order")), "name" => (("taxonomy-order[" . $this->getAttribute(            // line 50
(isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug", array())) . "]"), "step" => "1", "type" => "number", "value" => ((            // line 53
array_key_exists("sortval", $context)) ? (_twig_default_filter((isset($context["sortval"]) ? $context["sortval"] : $this->getContext($context, "sortval")), 0)) : (0)));
            // line 55
            echo "            <div class=\"form-group\">
                <label for=\"";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["id_order"]) ? $context["id_order"] : $this->getContext($context, "id_order")), "html", null, true);
            echo "\" class=\"control-label col-xs-3\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.order");
            echo "</label>
                <div class=\"col-xs-9\">
                    <input";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "attr", array(0 => (isset($context["attr_order"]) ? $context["attr_order"] : $this->getContext($context, "attr_order"))), "method"), "html", null, true);
            echo ">
                </div>
            </div>
        ";
        }
        // line 62
        echo "    </div>
";
        
        $__internal_cd96c7884d9d099e12a2350a40ca6eb1bdd2a54831eb15dd28677478bad11589->leave($__internal_cd96c7884d9d099e12a2350a40ca6eb1bdd2a54831eb15dd28677478bad11589_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_grouping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 62,  164 => 58,  157 => 56,  154 => 55,  152 => 53,  151 => 50,  150 => 49,  148 => 47,  145 => 46,  142 => 45,  139 => 44,  136 => 43,  134 => 42,  128 => 38,  117 => 36,  115 => 34,  114 => 33,  112 => 32,  108 => 31,  103 => 29,  99 => 28,  92 => 26,  88 => 24,  82 => 23,  70 => 21,  58 => 20,  46 => 18,  39 => 16,  37 => 9,  36 => 8,  35 => 6,  33 => 4,  31 => 3,  11 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#=== INIT ===========================================================================================================#}

{% set id_select = 'taxonomy-' ~ taxonomy.slug %}
{% set id_order = 'taxonomy-order-' ~ taxonomy.slug %}

{% set attributes = {
    select: {
        name:      'taxonomy[' ~ taxonomy.slug ~ '][]',
        id:        id_select,
        class:     'form-control',
    }
} %}

{#=== FIELDSET =======================================================================================================#}

{% extends '@bolt/_base/_fieldset.twig' %}

{% block fieldset_type 'grouping' %}

{% block fieldset_label_text  taxonomy.name %}
{% block fieldset_label_class 'col-sm-3' %}

{% block fieldset_controls %}
    <div class=\"col-sm-9\">
        <div class=\"form-group\">
            <label for=\"{{ id_select }}\" class=\"sr-only\">{{ taxonomy.name }}</label>
            <div class=\"col-xs-12\">
                <select{{ macro.attr(attributes.select) }}>
                    <option value=\"\">{{ __('(no group)') }}</option>
                    <option value=\"\" disabled>-----------</option>
                    {% for slug, group in taxonomy.options %}
                        {% set attr_opt = {
                            value:     slug,
                            selected:  context.content.taxonomy.containsKeyValue(taxonomy.slug, slug),
                        } %}
                        <option{{ macro.attr(attr_opt) }}>{{ group }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>

        {% if taxonomy.has_sortorder is defined and taxonomy.has_sortorder == true %}
            {% set grouping =  context.content.taxonomy.getField(taxonomy.slug).first() %}
            {% if grouping and grouping.sortorder %}
                {% set sortval =  grouping.sortorder %}
            {% endif %}
            {% set attr_order = {
                class:  'form-control',
                id:     id_order,
                name:   'taxonomy-order[' ~ taxonomy.slug ~ ']',
                step:   '1',
                type:   'number',
                value:  sortval|default(0),
            } %}
            <div class=\"form-group\">
                <label for=\"{{ id_order }}\" class=\"control-label col-xs-3\">{{ __('general.phrase.order') }}</label>
                <div class=\"col-xs-9\">
                    <input{{ macro.attr(attr_order) }}>
                </div>
            </div>
        {% endif %}
    </div>
{% endblock fieldset_controls %}
", "@bolt/editcontent/fields/_grouping.twig", "app://view/twig/editcontent/fields/_grouping.twig");
    }
}
