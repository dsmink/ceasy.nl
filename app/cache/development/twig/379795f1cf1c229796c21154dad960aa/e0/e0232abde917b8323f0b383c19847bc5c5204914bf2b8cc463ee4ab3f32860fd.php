<?php

/* @bolt/editcontent/fields/_html.twig */
class __TwigTemplate_00f1e02ed27b8d7ea6f40a2e3060c0028e458bb07b0236b76917e19222eee4af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 38
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_html.twig", 38);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
            'fieldset_label_info' => array($this, 'block_fieldset_label_info'),
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
        $__internal_0d957c8d9f10e5107226b1253802a67c54eaba909b16cdb34ed1a9a01077189b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d957c8d9f10e5107226b1253802a67c54eaba909b16cdb34ed1a9a01077189b->enter($__internal_0d957c8d9f10e5107226b1253802a67c54eaba909b16cdb34ed1a9a01077189b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_html.twig"));

        // line 3
        $context["option"] = array("class" => trim(("form-control " . $this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "class", array()))), "height" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array()), "")) : ("")), "label" => $this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label", array()), "required" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), false)) : (false)), "errortext" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "error", array()), "")) : ("")), "info" => (($this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")), "options" => (($this->getAttribute($this->getAttribute(        // line 10
(isset($context["field"]) ? $context["field"] : null), "options", array(), "any", false, true), "ckeditor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array(), "any", false, true), "ckeditor", array()), "")) : ("")));
        // line 15
        $context["param"] = array();
        // line 17
        if ($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "height", array())) {
            // line 18
            $context["param"] = twig_array_merge((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), array("height" => $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "height", array())));
        }
        // line 21
        if ($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "options", array())) {
            // line 22
            $context["param"] = twig_array_merge((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), array("ckeditor" => $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "options", array())));
        }
        // line 25
        $context["attributes"] = array("html" => array("class" => ($this->getAttribute(        // line 27
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "class", array()) . " ckeditor"), "data_errortext" => $this->getAttribute(        // line 28
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "errortext", array()), "data_param" => ((        // line 29
(isset($context["param"]) ? $context["param"] : $this->getContext($context, "param"))) ? (twig_jsonencode_filter((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")))) : ("")), "id" =>         // line 30
(isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "name" =>         // line 31
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "required" => $this->getAttribute(        // line 32
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "required", array())));
        // line 38
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d957c8d9f10e5107226b1253802a67c54eaba909b16cdb34ed1a9a01077189b->leave($__internal_0d957c8d9f10e5107226b1253802a67c54eaba909b16cdb34ed1a9a01077189b_prof);

    }

    // line 40
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_b7bc64fd15a4ed1c930925e24652c43d0760acc76412fb78559d8827b7a0bcda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7bc64fd15a4ed1c930925e24652c43d0760acc76412fb78559d8827b7a0bcda->enter($__internal_b7bc64fd15a4ed1c930925e24652c43d0760acc76412fb78559d8827b7a0bcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo "html";
        
        $__internal_b7bc64fd15a4ed1c930925e24652c43d0760acc76412fb78559d8827b7a0bcda->leave($__internal_b7bc64fd15a4ed1c930925e24652c43d0760acc76412fb78559d8827b7a0bcda_prof);

    }

    // line 41
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_1227779f06ebf89960941fdaf30891edfbd556e8705b0e2e2c887cc111a7920d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1227779f06ebf89960941fdaf30891edfbd556e8705b0e2e2c887cc111a7920d->enter($__internal_1227779f06ebf89960941fdaf30891edfbd556e8705b0e2e2c887cc111a7920d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo "fieldHtml";
        
        $__internal_1227779f06ebf89960941fdaf30891edfbd556e8705b0e2e2c887cc111a7920d->leave($__internal_1227779f06ebf89960941fdaf30891edfbd556e8705b0e2e2c887cc111a7920d_prof);

    }

    // line 43
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_612acaa79e1c9f3923d41468bc86b81a436be5a9712d2f59a6677c804bbf12a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612acaa79e1c9f3923d41468bc86b81a436be5a9712d2f59a6677c804bbf12a4->enter($__internal_612acaa79e1c9f3923d41468bc86b81a436be5a9712d2f59a6677c804bbf12a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo twig_escape_filter($this->env, (isset($context["labelkey"]) ? $context["labelkey"] : $this->getContext($context, "labelkey")), "html", null, true);
        
        $__internal_612acaa79e1c9f3923d41468bc86b81a436be5a9712d2f59a6677c804bbf12a4->leave($__internal_612acaa79e1c9f3923d41468bc86b81a436be5a9712d2f59a6677c804bbf12a4_prof);

    }

    // line 44
    public function block_fieldset_label_info($context, array $blocks = array())
    {
        $__internal_538ffbb3488443c417f105676df67d04439312c8c702ed6a0fe622c6f44f68d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538ffbb3488443c417f105676df67d04439312c8c702ed6a0fe622c6f44f68d1->enter($__internal_538ffbb3488443c417f105676df67d04439312c8c702ed6a0fe622c6f44f68d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_info"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "info", array()), "html", null, true);
        
        $__internal_538ffbb3488443c417f105676df67d04439312c8c702ed6a0fe622c6f44f68d1->leave($__internal_538ffbb3488443c417f105676df67d04439312c8c702ed6a0fe622c6f44f68d1_prof);

    }

    // line 45
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_248facee78f72455b034b55a774cb0738d122de8f303f6226c48286da9769ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248facee78f72455b034b55a774cb0738d122de8f303f6226c48286da9769ae2->enter($__internal_248facee78f72455b034b55a774cb0738d122de8f303f6226c48286da9769ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo "col-xs-12";
        
        $__internal_248facee78f72455b034b55a774cb0738d122de8f303f6226c48286da9769ae2->leave($__internal_248facee78f72455b034b55a774cb0738d122de8f303f6226c48286da9769ae2_prof);

    }

    // line 47
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_f6fd65658bcb9aeb376f76ee98f93567e823b4d6c078f664b6772f599c92710c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fd65658bcb9aeb376f76ee98f93567e823b4d6c078f664b6772f599c92710c->enter($__internal_f6fd65658bcb9aeb376f76ee98f93567e823b4d6c078f664b6772f599c92710c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 48
        echo "    <div class=\"col-xs-12\">
        <textarea";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "html", array())), "method"), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : $this->getContext($context, "contentkey"))), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : $this->getContext($context, "contentkey"))), "method"), "")) : ("")), "html", null, true);
        echo "</textarea>
    </div>
";
        
        $__internal_f6fd65658bcb9aeb376f76ee98f93567e823b4d6c078f664b6772f599c92710c->leave($__internal_f6fd65658bcb9aeb376f76ee98f93567e823b4d6c078f664b6772f599c92710c_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 49,  135 => 48,  129 => 47,  117 => 45,  105 => 44,  93 => 43,  81 => 41,  69 => 40,  62 => 38,  60 => 32,  59 => 31,  58 => 30,  57 => 29,  56 => 28,  55 => 27,  54 => 25,  51 => 22,  49 => 21,  46 => 18,  44 => 17,  42 => 15,  40 => 10,  39 => 9,  38 => 8,  37 => 7,  36 => 6,  35 => 5,  34 => 4,  33 => 3,  11 => 38,);
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
    class:     ('form-control ' ~ field.class)|trim,
    height:    field.height|default(''),
    label:     field.label,
    required:  field.required|default(false),
    errortext: field.error|default(''),
    info:      field.info|default(''),
    options:   field.options.ckeditor|default('')
} %}

{#=== INIT ===========================================================================================================#}

{% set param = {} %}

{% if option.height %}
    {% set param = param|merge({height: option.height}) %}
{% endif %}

{% if option.options %}
    {% set param = param|merge({ckeditor: option.options}) %}
{% endif %}

{% set attributes = {
    html: {
        class:           option.class ~ ' ckeditor',
        data_errortext:  option.errortext,
        data_param:      param ? param|json_encode : '',
        id:              key,
        name:            name,
        required:        option.required,
    }
} %}

{#=== FIELDSET =======================================================================================================#}

{% extends '@bolt/_base/_fieldset.twig' %}

{% block fieldset_type 'html' %}
{% block fieldset_widget 'fieldHtml' %}

{% block fieldset_label_text  labelkey %}
{% block fieldset_label_info  option.info %}
{% block fieldset_label_class 'col-xs-12' %}

{% block fieldset_controls %}
    <div class=\"col-xs-12\">
        <textarea{{ macro.attr(attributes.html) }}>{{ context.content.get(contentkey)|default('') }}</textarea>
    </div>
{% endblock fieldset_controls %}
", "@bolt/editcontent/fields/_html.twig", "app://view/twig/editcontent/fields/_html.twig");
    }
}
