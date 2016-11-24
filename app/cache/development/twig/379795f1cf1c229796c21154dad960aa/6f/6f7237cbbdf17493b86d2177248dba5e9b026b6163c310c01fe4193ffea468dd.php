<?php

/* @bolt/editcontent/fields/_slug.twig */
class __TwigTemplate_8952655624829a898f5cb63de3dc33523fbe04c4130fef1ab47969e8b66a42ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 47
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_slug.twig", 47);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
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
        $__internal_1e19199616f9d4eeff5f14fd98b8eee2a583d72edc522a61f11718ede47e6db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e19199616f9d4eeff5f14fd98b8eee2a583d72edc522a61f11718ede47e6db2->enter($__internal_1e19199616f9d4eeff5f14fd98b8eee2a583d72edc522a61f11718ede47e6db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_slug.twig"));

        // line 3
        $context["option"] = array("uses" => ((twig_test_iterable((($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "uses", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array()), array())) : (array())))) ? ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array()), array())) : (array()))) : (array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "uses", array())))), "viewless" => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 5
(isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "contenttype", array(), "any", false, true), "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "contenttype", array(), "any", false, true), "viewless", array()), false)) : (false)));
        // line 10
        $context["is_empty"] = ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : $this->getContext($context, "contentkey"))), "method") == "");
        // line 11
        $context["has_uses"] = (twig_length_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "uses", array())) > 0);
        // line 13
        if ((isset($context["is_empty"]) ? $context["is_empty"] : $this->getContext($context, "is_empty"))) {
            // line 14
            $context["mode"] = (((isset($context["has_uses"]) ? $context["has_uses"] : $this->getContext($context, "has_uses"))) ? ("linked") : ("editable"));
        } else {
            // line 16
            $context["mode"] = "locked";
        }
        // line 19
        $context["uses"] = array();
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "uses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 21
            $context["uses"] = twig_array_merge((isset($context["uses"]) ? $context["uses"] : $this->getContext($context, "uses")), array(0 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "fields", array()), $context["key"], array(), "array"), "label", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "fields", array()), $context["key"], array(), "array"), "label", array())) : (twig_capitalize_string_filter($this->env, $context["key"])))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        $context["attributes"] = array("slug" => array("class" => "form-control", "id" =>         // line 28
(isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "name" =>         // line 29
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "readonly" => (        // line 30
(isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) != "editable"), "type" => "text", "value" => $this->getAttribute($this->getAttribute(        // line 32
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method")));
        // line 36
        $context["trans"] = array("label_alias" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.slug.unique-alias"), "label_permalink" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.slug.permalink"), "menu_edit" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.slug.button.edit"), "menu_generate" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.slug.button.generate"), "menu_lock" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.slug.button.lock"), "warning" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.slug.message.warning"));
        // line 49
        $context["fieldset_conf"] = array("contentId" => $this->getAttribute($this->getAttribute(        // line 50
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "id", array()), "key" =>         // line 51
(isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "slug" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 52
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "contenttype", array()), "slug", array()), "uses" => $this->getAttribute(        // line 53
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "uses", array()));
        // line 47
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e19199616f9d4eeff5f14fd98b8eee2a583d72edc522a61f11718ede47e6db2->leave($__internal_1e19199616f9d4eeff5f14fd98b8eee2a583d72edc522a61f11718ede47e6db2_prof);

    }

    // line 56
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_2991ab199802bfa09743f72455390f06e539bf7654ceef65776a0da2c8eaeded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2991ab199802bfa09743f72455390f06e539bf7654ceef65776a0da2c8eaeded->enter($__internal_2991ab199802bfa09743f72455390f06e539bf7654ceef65776a0da2c8eaeded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo "slug";
        
        $__internal_2991ab199802bfa09743f72455390f06e539bf7654ceef65776a0da2c8eaeded->leave($__internal_2991ab199802bfa09743f72455390f06e539bf7654ceef65776a0da2c8eaeded_prof);

    }

    // line 57
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_537cfae07039f99b93d406170895dad438881e865fe1d7a0372a4eef8462212e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537cfae07039f99b93d406170895dad438881e865fe1d7a0372a4eef8462212e->enter($__internal_537cfae07039f99b93d406170895dad438881e865fe1d7a0372a4eef8462212e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo "fieldSlug";
        
        $__internal_537cfae07039f99b93d406170895dad438881e865fe1d7a0372a4eef8462212e->leave($__internal_537cfae07039f99b93d406170895dad438881e865fe1d7a0372a4eef8462212e_prof);

    }

    // line 59
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_3d3e7eb1d9cc6a1e71db0b37dc6d9b857fd23896001e6ee9205c468f7d5259b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3e7eb1d9cc6a1e71db0b37dc6d9b857fd23896001e6ee9205c468f7d5259b6->enter($__internal_3d3e7eb1d9cc6a1e71db0b37dc6d9b857fd23896001e6ee9205c468f7d5259b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "viewless", array())) ? ($this->getAttribute((isset($context["trans"]) ? $context["trans"] : $this->getContext($context, "trans")), "label_alias", array())) : ($this->getAttribute((isset($context["trans"]) ? $context["trans"] : $this->getContext($context, "trans")), "label_permalink", array()))), "html", null, true);
        
        $__internal_3d3e7eb1d9cc6a1e71db0b37dc6d9b857fd23896001e6ee9205c468f7d5259b6->leave($__internal_3d3e7eb1d9cc6a1e71db0b37dc6d9b857fd23896001e6ee9205c468f7d5259b6_prof);

    }

    // line 60
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_bd1dea3ff04cb2ada63919d7f842e1262e203eeb020517c9b343818cb1b5fe51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1dea3ff04cb2ada63919d7f842e1262e203eeb020517c9b343818cb1b5fe51->enter($__internal_bd1dea3ff04cb2ada63919d7f842e1262e203eeb020517c9b343818cb1b5fe51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo "col-sm-12";
        
        $__internal_bd1dea3ff04cb2ada63919d7f842e1262e203eeb020517c9b343818cb1b5fe51->leave($__internal_bd1dea3ff04cb2ada63919d7f842e1262e203eeb020517c9b343818cb1b5fe51_prof);

    }

    // line 62
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_f93a32c650068a58812c11c20ead3d1e84cd55c1af1a869dc78e75f7b7d09f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93a32c650068a58812c11c20ead3d1e84cd55c1af1a869dc78e75f7b7d09f8d->enter($__internal_f93a32c650068a58812c11c20ead3d1e84cd55c1af1a869dc78e75f7b7d09f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 63
        echo "    <div class=\"col-sm-12\">
        <div class=\"input-group ";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), "html", null, true);
        echo "\">";
        // line 66
        echo "            <span class=\"input-group-addon\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "route_prefix", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "route_prefix", array()), (("/" . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "singular_slug", array())) . "/"))) : ((("/" . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "singular_slug", array())) . "/"))), "html", null, true);
        echo "</span>

            <input";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "slug", array())), "method"), "html", null, true);
        echo ">

            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                    <li class=\"lock";
        // line 75
        echo ((((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "locked")) ? (" disabled") : (""));
        echo "\">
                        <a href=\"#\"><i class=\"fa fa-fw fa-lock\"></i> ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trans"]) ? $context["trans"] : $this->getContext($context, "trans")), "menu_lock", array()), "html", null, true);
        echo "</a>
                    </li>
                    ";
        // line 78
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "uses", array()))) {
            // line 79
            echo "                        <li class=\"link";
            echo ((((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "linked")) ? (" disabled") : (""));
            echo "\" style=\"min-width: 200px;\">
                            <a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> <span>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trans"]) ? $context["trans"] : $this->getContext($context, "trans")), "menu_generate", array()), "html", null, true);
            echo " <var>";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["uses"]) ? $context["uses"] : $this->getContext($context, "uses")), " + "), "html", null, true);
            echo "</var></span></a>
                        </li>
                    ";
        }
        // line 83
        echo "                    <li class=\"edit";
        echo ((((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "editable")) ? (" disabled") : (""));
        echo "\">
                        <a href=\"#\"><i class=\"fa fa-fw fa-pencil\"></i> ";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trans"]) ? $context["trans"] : $this->getContext($context, "trans")), "menu_edit", array()), "html", null, true);
        echo "</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    ";
        // line 90
        if ( !(isset($context["is_empty"]) ? $context["is_empty"] : $this->getContext($context, "is_empty"))) {
            // line 91
            echo "        <div class=\"col-sm-12 warning hidden\">
            <i class=\"fa fa-exclamation-triangle\"></i> ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trans"]) ? $context["trans"] : $this->getContext($context, "trans")), "warning", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        
        $__internal_f93a32c650068a58812c11c20ead3d1e84cd55c1af1a869dc78e75f7b7d09f8d->leave($__internal_f93a32c650068a58812c11c20ead3d1e84cd55c1af1a869dc78e75f7b7d09f8d_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_slug.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 92,  197 => 91,  195 => 90,  186 => 84,  181 => 83,  173 => 80,  168 => 79,  166 => 78,  161 => 76,  157 => 75,  147 => 68,  141 => 66,  138 => 64,  135 => 63,  129 => 62,  117 => 60,  105 => 59,  93 => 57,  81 => 56,  74 => 47,  72 => 53,  71 => 52,  70 => 51,  69 => 50,  68 => 49,  66 => 36,  64 => 32,  63 => 30,  62 => 29,  61 => 28,  60 => 25,  54 => 21,  50 => 20,  48 => 19,  45 => 16,  42 => 14,  40 => 13,  38 => 11,  36 => 10,  34 => 5,  33 => 4,  32 => 3,  11 => 47,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#=== OPTIONS ========================================================================================================#}

{% set option = {
    uses:  field.uses|default([]) is iterable ? field.uses|default([]) : [field.uses],
    viewless: context.content.contenttype.viewless|default(false)
} %}

{#=== INIT ===========================================================================================================#}

{% set is_empty = context.content.get(contentkey) == '' %}
{% set has_uses = option.uses|length > 0 %}

{% if is_empty %}
    {% set mode = has_uses ? 'linked' : 'editable' %}
{% else %}
    {% set mode = 'locked' %}
{% endif %}

{% set uses = [] %}
{% for key in option.uses %}
    {% set uses = uses|merge([context.contenttype.fields[key].label ?: key|ucfirst]) %}
{% endfor %}


{% set attributes = {
    slug: {
        class:     'form-control',
        id:        key,
        name:      name,
        readonly:  mode != 'editable',
        type:      'text',
        value:     context.content.get(key),
    }
} %}

{% set trans = {
    label_alias:     __('field.slug.unique-alias'),
    label_permalink: __('field.slug.permalink'),
    menu_edit:       __('field.slug.button.edit'),
    menu_generate:   __('field.slug.button.generate'),
    menu_lock:       __('field.slug.button.lock'),
    warning:         __('field.slug.message.warning'),
} %}

{#=== FIELDSET =======================================================================================================#}

{% extends '@bolt/_base/_fieldset.twig' %}

{% set fieldset_conf = {
    contentId: context.content.id,
    key:       key,
    slug:      context.content.contenttype.slug,
    uses:      option.uses,
}%}

{% block fieldset_type 'slug' %}
{% block fieldset_widget 'fieldSlug' %}

{% block fieldset_label_text option.viewless ? trans.label_alias : trans.label_permalink %}
{% block fieldset_label_class 'col-sm-12' %}

{% block fieldset_controls %}
    <div class=\"col-sm-12\">
        <div class=\"input-group {{ mode }}\">
                                            {#- https://github.com/bolt/bolt/pull/4766 #}
            <span class=\"input-group-addon\">{{ field.route_prefix|default('/' ~ context.contenttype.singular_slug ~ '/') }}</span>

            <input{{ macro.attr(attributes.slug) }}>

            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                    <li class=\"lock{{ mode == 'locked' ? ' disabled' : '' }}\">
                        <a href=\"#\"><i class=\"fa fa-fw fa-lock\"></i> {{ trans.menu_lock }}</a>
                    </li>
                    {% if option.uses|length %}
                        <li class=\"link{{ mode == 'linked' ? ' disabled' : '' }}\" style=\"min-width: 200px;\">
                            <a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> <span>{{ trans.menu_generate }} <var>{{ uses|join(' + ')}}</var></span></a>
                        </li>
                    {% endif %}
                    <li class=\"edit{{ mode == 'editable' ? ' disabled' : '' }}\">
                        <a href=\"#\"><i class=\"fa fa-fw fa-pencil\"></i> {{ trans.menu_edit }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {% if not is_empty %}
        <div class=\"col-sm-12 warning hidden\">
            <i class=\"fa fa-exclamation-triangle\"></i> {{ trans.warning }}
        </div>
    {% endif %}
{% endblock fieldset_controls %}
", "@bolt/editcontent/fields/_slug.twig", "app://view/twig/editcontent/fields/_slug.twig");
    }
}
