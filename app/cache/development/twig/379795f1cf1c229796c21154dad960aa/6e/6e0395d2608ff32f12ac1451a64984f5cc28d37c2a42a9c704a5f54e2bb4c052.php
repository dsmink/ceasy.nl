<?php

/* @bolt/editcontent/fields/_meta.twig */
class __TwigTemplate_a64cf08757f0471e2d76aec3090656904442bc1413cd7a7117ba71a870a669d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 50
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_meta.twig", 50);
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
        $__internal_83244d13354bd1eb3b8217da72a3efe632df88856ee98c44f22e8201a4ccdce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83244d13354bd1eb3b8217da72a3efe632df88856ee98c44f22e8201a4ccdce0->enter($__internal_83244d13354bd1eb3b8217da72a3efe632df88856ee98c44f22e8201a4ccdce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_meta.twig"));

        // line 3
        $context["attributes"] = array("id" => array("class" => "form-control narrow", "name_id" => "id", "readonly" => true, "type" => "text", "value" => $this->getAttribute($this->getAttribute(        // line 9
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "id", array())), "publish" => array("disabled" =>  !$this->getAttribute($this->getAttribute(        // line 13
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "can", array()), "publish", array()), "id" => "datepublish", "value" => ((($this->getAttribute($this->getAttribute(        // line 15
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "datepublish", array()) == "")) ? (twig_date_format_filter($this->env, "now", "Y-m-d H:i:s")) : ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "datepublish", array())))), "depublish" => array("disabled" =>  !$this->getAttribute($this->getAttribute(        // line 19
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "can", array()), "depublish", array()), "id" => "datedepublish", "value" => $this->getAttribute($this->getAttribute(        // line 21
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "values", array()), "datedepublish", array()), "notice" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.depublish-date-past")), "status" => array("class" => "form-control", "disabled" => (twig_length_filter($this->env, $this->getAttribute(        // line 27
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "allowed_status", array())) <= 1), "id" => "statusselect", "name" => "status"), "ownerid" => array("class" => "form-control", "disabled" =>  !$this->getAttribute($this->getAttribute(        // line 34
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "can", array()), "change_ownership", array()), "id" => "ownerid", "name" => "ownerid"), "comment" => array("class" => "form-control", "disabled" =>  !$this->getAttribute($this->getAttribute(        // line 41
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "can", array()), "change_ownership", array()), "name_id" => "changelog-comment", "placeholder" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Add a brief, optional comment to describe what's changed."), "type" => "text"));
        // line 50
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83244d13354bd1eb3b8217da72a3efe632df88856ee98c44f22e8201a4ccdce0->leave($__internal_83244d13354bd1eb3b8217da72a3efe632df88856ee98c44f22e8201a4ccdce0_prof);

    }

    // line 52
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_9af155701468663b0c13b35480ff7095b026b79dd98c0be79bd579d047a1cd09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af155701468663b0c13b35480ff7095b026b79dd98c0be79bd579d047a1cd09->enter($__internal_9af155701468663b0c13b35480ff7095b026b79dd98c0be79bd579d047a1cd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo "meta";
        
        $__internal_9af155701468663b0c13b35480ff7095b026b79dd98c0be79bd579d047a1cd09->leave($__internal_9af155701468663b0c13b35480ff7095b026b79dd98c0be79bd579d047a1cd09_prof);

    }

    // line 53
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_cb5630f4a1c7438c57795adfac6d9812b8dbd0b8d963a32ccf13ac92d55747ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5630f4a1c7438c57795adfac6d9812b8dbd0b8d963a32ccf13ac92d55747ff->enter($__internal_cb5630f4a1c7438c57795adfac6d9812b8dbd0b8d963a32ccf13ac92d55747ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo "fieldMeta";
        
        $__internal_cb5630f4a1c7438c57795adfac6d9812b8dbd0b8d963a32ccf13ac92d55747ff->leave($__internal_cb5630f4a1c7438c57795adfac6d9812b8dbd0b8d963a32ccf13ac92d55747ff_prof);

    }

    // line 55
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_a336648e0c540b76d1595da38a072d46d34ddcc7c9e5ce6a853c8ada31fef8f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a336648e0c540b76d1595da38a072d46d34ddcc7c9e5ce6a853c8ada31fef8f5->enter($__internal_a336648e0c540b76d1595da38a072d46d34ddcc7c9e5ce6a853c8ada31fef8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.meta-information");
        
        $__internal_a336648e0c540b76d1595da38a072d46d34ddcc7c9e5ce6a853c8ada31fef8f5->leave($__internal_a336648e0c540b76d1595da38a072d46d34ddcc7c9e5ce6a853c8ada31fef8f5_prof);

    }

    // line 56
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_98dd70d1f7a4f1f84f843a0161a2269ad01ac8d8078c63dd5b7e61d16b6c5427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98dd70d1f7a4f1f84f843a0161a2269ad01ac8d8078c63dd5b7e61d16b6c5427->enter($__internal_98dd70d1f7a4f1f84f843a0161a2269ad01ac8d8078c63dd5b7e61d16b6c5427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo twig_escape_filter($this->env, ("col-xs-12" . (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "has", array()), "tabs", array())) ? ("") : (" hidden"))), "html", null, true);
        
        $__internal_98dd70d1f7a4f1f84f843a0161a2269ad01ac8d8078c63dd5b7e61d16b6c5427->leave($__internal_98dd70d1f7a4f1f84f843a0161a2269ad01ac8d8078c63dd5b7e61d16b6c5427_prof);

    }

    // line 58
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_8a420a5409d15199af1f722d204ce4302fafb44f4bc113dfb5e5906eb77051fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a420a5409d15199af1f722d204ce4302fafb44f4bc113dfb5e5906eb77051fa->enter($__internal_8a420a5409d15199af1f722d204ce4302fafb44f4bc113dfb5e5906eb77051fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 59
        echo "    ";
        $context["__internal_f1a4fea3aa1c46732172dba2d233370b323d5e7d1aa73343348e62319cc2c513"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/editcontent/fields/_meta.twig", 59);
        // line 60
        echo "
    <div class=\"col-xs-12\">
        ";
        // line 62
        if ( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "has", array()), "tabs", array())) {
            // line 63
            echo "            <h3>
                ";
            // line 64
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.meta-information");
            echo "
            </h3>
        ";
        }
        // line 67
        echo "
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 69
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.id");
        echo " (№)</label>
            <div class=\"col-sm-8\">
                <input";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "id", array())), "method"), "html", null, true);
        echo ">
                ";
        // line 72
        if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "datecreated", array()) > "1970-01-01 01:01:01")) {
            // line 73
            echo "                    <p class=\"form-control-static\">
                        ";
            // line 74
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.created", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array())));
            echo "
                        ";
            // line 75
            echo $context["__internal_f1a4fea3aa1c46732172dba2d233370b323d5e7d1aa73343348e62319cc2c513"]->getbuic_moment($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "datecreated", array()));
            echo "
                        ";
            // line 76
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.edited");
            echo "
                        ";
            // line 77
            echo $context["__internal_f1a4fea3aa1c46732172dba2d233370b323d5e7d1aa73343348e62319cc2c513"]->getbuic_moment($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "datechanged", array()));
            echo ".
                    </p>
                ";
        }
        // line 80
        echo "            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 84
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-colon");
        echo "</label>
            <div class=\"col-sm-8\">
                <select";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "status", array())), "method"), "html", null, true);
        echo ">
                    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "allowed_status", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 88
            echo "                        ";
            $context["attr_opt"] = array("value" =>             // line 89
$context["status"], "selected" => ($this->getAttribute($this->getAttribute(            // line 90
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "status", array()) == $context["status"]));
            // line 92
            echo "                        <option";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "attr", array(0 => (isset($context["attr_opt"]) ? $context["attr_opt"] : $this->getContext($context, "attr_opt"))), "method"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : $this->getContext($context, "status_names")), $context["status"], array(), "array"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                </select>
                <p class=\"form-control-static\">
                    ";
        // line 96
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-explanation");
        echo "
                </p>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 102
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.publication-date-colon");
        echo "</label>
            <div class=\"col-sm-8\">
                ";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "input_datetime", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "publish", array())), "method"), "html", null, true);
        echo "
            </div>
        </div>

        <div class=\"form-group depublish-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 109
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.depublication-date-colon");
        echo "</label>
            <div class=\"col-sm-8\">
                ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "input_datetime", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "depublish", array())), "method"), "html", null, true);
        echo "
                <p class=\"form-control-static\">
                    ";
        // line 113
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.depublish-explanation");
        echo "
                </p>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 119
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.owner-colon");
        echo "</label>
            <div class=\"col-sm-8\">
                <select";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "ownerid", array())), "method"), "html", null, true);
        echo ">
                    ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 123
            echo "                        ";
            $context["attr_opt"] = array("value" => $this->getAttribute(            // line 124
$context["user"], "id", array()), "selected" => ($this->getAttribute(            // line 125
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contentowner", array()) && ($this->getAttribute($context["user"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contentowner", array()), "id", array()))));
            // line 127
            echo "                        <option";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "attr", array(0 => (isset($context["attr_opt"]) ? $context["attr_opt"] : $this->getContext($context, "attr_opt"))), "method"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "displayname", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                </select>
            </div>
        </div>

        ";
        // line 133
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "get", array(0 => "general/changelog/enabled"), "method")) {
            // line 134
            echo "            <div class=\"form-group\">
                <label class=\"col-sm-4 control-label\">";
            // line 135
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.record.comment-add-colon");
            echo "</label>
                <div class=\"col-sm-8\">
                    <input";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "comment", array())), "method"), "html", null, true);
            echo ">
                </div>
            </div>
        ";
        }
        // line 141
        echo "    </div>
";
        
        $__internal_8a420a5409d15199af1f722d204ce4302fafb44f4bc113dfb5e5906eb77051fa->leave($__internal_8a420a5409d15199af1f722d204ce4302fafb44f4bc113dfb5e5906eb77051fa_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_meta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 141,  282 => 137,  277 => 135,  274 => 134,  272 => 133,  266 => 129,  255 => 127,  253 => 125,  252 => 124,  250 => 123,  246 => 122,  242 => 121,  237 => 119,  228 => 113,  223 => 111,  218 => 109,  210 => 104,  205 => 102,  196 => 96,  192 => 94,  181 => 92,  179 => 90,  178 => 89,  176 => 88,  172 => 87,  168 => 86,  163 => 84,  157 => 80,  151 => 77,  147 => 76,  143 => 75,  139 => 74,  136 => 73,  134 => 72,  130 => 71,  125 => 69,  121 => 67,  115 => 64,  112 => 63,  110 => 62,  106 => 60,  103 => 59,  97 => 58,  85 => 56,  73 => 55,  61 => 53,  49 => 52,  42 => 50,  40 => 41,  39 => 34,  38 => 27,  37 => 21,  36 => 19,  35 => 15,  34 => 13,  33 => 9,  32 => 3,  11 => 50,);
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

{% set attributes = {
    id: {
        class:     'form-control narrow',
        name_id:   'id',
        readonly:  true,
        type:      'text',
        value:     context.content.id,
    },

    publish: {
        disabled: (not context.can.publish),
        id:       'datepublish',
        value:    (context.content.datepublish == '') ? \"now\"|date('Y-m-d H:i:s') : context.content.datepublish,
    },

    depublish: {
        disabled:  (not context.can.depublish),
        id:        'datedepublish',
        value:     context.values.datedepublish,
        notice:     __('general.phrase.depublish-date-past'),
    },

    status: {
        class:     'form-control',
        disabled:  (context.allowed_status|length <= 1),
        id:        'statusselect',
        name:      'status',
    },

    ownerid: {
        class:     'form-control',
        disabled:  (not context.can.change_ownership),
        id:        'ownerid',
        name:      'ownerid',
    },

    comment: {
        class:        'form-control',
        disabled:     (not context.can.change_ownership),
        name_id:      'changelog-comment',
        placeholder:  __('Add a brief, optional comment to describe what\\'s changed.'),
        type:         'text',
    },
} %}

{#=== FIELDSET =======================================================================================================#}

{% extends '@bolt/_base/_fieldset.twig' %}

{% block fieldset_type 'meta' %}
{% block fieldset_widget 'fieldMeta' %}

{% block fieldset_label_text  __('general.phrase.meta-information') %}
{% block fieldset_label_class 'col-xs-12' ~ (context.has.tabs ? '' : ' hidden') %}

{% block fieldset_controls %}
    {% from '@bolt/_buic/_moment.twig' import buic_moment %}

    <div class=\"col-xs-12\">
        {% if not context.has.tabs %}
            <h3>
                {{ __('general.phrase.meta-information') }}
            </h3>
        {% endif %}

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">{{ __('general.phrase.id') }} (№)</label>
            <div class=\"col-sm-8\">
                <input{{ macro.attr(attributes.id) }}>
                {% if context.content.datecreated > '1970-01-01 01:01:01' %}
                    <p class=\"form-control-static\">
                        {{ __('contenttypes.generic.created', {'%contenttype%': context.contenttype.slug}) }}
                        {{ buic_moment(context.content.datecreated) }}
                        {{ __('general.phrase.edited') }}
                        {{ buic_moment(context.content.datechanged) }}.
                    </p>
                {% endif %}
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">{{ __('general.phrase.status-colon') }}</label>
            <div class=\"col-sm-8\">
                <select{{ macro.attr(attributes.status) }}>
                    {% for status in context.allowed_status %}
                        {% set attr_opt = {
                            value:     status,
                            selected:  (context.content.status == status),
                        } %}
                        <option{{ macro.attr(attr_opt) }}>{{ status_names[status] }}</option>
                    {% endfor %}
                </select>
                <p class=\"form-control-static\">
                    {{ __('general.phrase.status-explanation') }}
                </p>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">{{ __('general.phrase.publication-date-colon') }}</label>
            <div class=\"col-sm-8\">
                {{ macro.input_datetime(attributes.publish) }}
            </div>
        </div>

        <div class=\"form-group depublish-group\">
            <label class=\"col-sm-4 control-label\">{{ __('general.phrase.depublication-date-colon') }}</label>
            <div class=\"col-sm-8\">
                {{ macro.input_datetime(attributes.depublish) }}
                <p class=\"form-control-static\">
                    {{ __('general.phrase.depublish-explanation') }}
                </p>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">{{ __('general.phrase.owner-colon') }}</label>
            <div class=\"col-sm-8\">
                <select{{ macro.attr(attributes.ownerid) }}>
                    {% for user in users %}
                        {% set attr_opt = {
                            value:     user.id,
                            selected:  (context.contentowner and user.id == context.contentowner.id),
                        } %}
                        <option{{ macro.attr(attr_opt) }}>{{ user.displayname }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>

        {% if config.get('general/changelog/enabled') %}
            <div class=\"form-group\">
                <label class=\"col-sm-4 control-label\">{{ __('contenttypes.record.comment-add-colon') }}</label>
                <div class=\"col-sm-8\">
                    <input{{ macro.attr(attributes.comment) }}>
                </div>
            </div>
        {% endif %}
    </div>
{% endblock fieldset_controls %}
", "@bolt/editcontent/fields/_meta.twig", "app://view/twig/editcontent/fields/_meta.twig");
    }
}
