<?php

/* @bolt/editcontent/fields/_text.twig */
class __TwigTemplate_5d133e3839d637505537db22adf3c52043f44ae2fbb4e98591100144b8339e85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 40
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_text.twig", 40);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
            'fieldset_label_info' => array($this, 'block_fieldset_label_info'),
            'fieldset_label_class' => array($this, 'block_fieldset_label_class'),
            'fieldset_label_for' => array($this, 'block_fieldset_label_for'),
            'fieldset_controls' => array($this, 'block_fieldset_controls'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_fieldset.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82a85b2336d60cd167ee188414825e66ab1b1f6ca97fdde49feef797e50e2f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a85b2336d60cd167ee188414825e66ab1b1f6ca97fdde49feef797e50e2f27->enter($__internal_82a85b2336d60cd167ee188414825e66ab1b1f6ca97fdde49feef797e50e2f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_text.twig"));

        // line 3
        $context["option"] = array("class" => trim(("form-control " . $this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "class", array()))), "label" => $this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label", array()), "pattern" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "pattern", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern", array()), "")) : ("")), "placeholder" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "placeholder", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array()), "")) : ("")), "required" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), false)) : (false)), "errortext" => (($this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "error", array()), "")) : ("")), "readonly" => (($this->getAttribute(        // line 10
(isset($context["field"]) ? $context["field"] : null), "readonly", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), false)) : (false)), "title" => (($this->getAttribute(        // line 11
(isset($context["field"]) ? $context["field"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array()), "")) : ("")), "variant" => $this->getAttribute(        // line 12
(isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "variant", array()), "info" => (($this->getAttribute(        // line 13
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")));
        // line 19
        $context["attributes"] = array("text" => array("class" => $this->getAttribute(        // line 21
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "class", array()), "data_errortext" => $this->getAttribute(        // line 22
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "errortext", array()), "id" =>         // line 23
(isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "maxlength" => 255, "name" =>         // line 25
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "pattern" => ((($this->getAttribute(        // line 26
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "pattern", array()) && !twig_in_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "pattern", array()), array(0 => "url", 1 => "email")))) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "pattern", array())) : ("")), "placeholder" => $this->getAttribute(        // line 27
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "placeholder", array()), "readonly" => $this->getAttribute(        // line 28
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "readonly", array()), "required" => $this->getAttribute(        // line 29
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "required", array()), "title" => $this->getAttribute(        // line 30
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "title", array()), "type" => ((twig_in_filter($this->getAttribute(        // line 31
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "pattern", array()), array(0 => "url", 1 => "email"))) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "pattern", array())) : ("text")), "value" => (($this->getAttribute($this->getAttribute(        // line 32
(isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : $this->getContext($context, "contentkey"))), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : $this->getContext($context, "contentkey"))), "method"), "")) : (""))));
        // line 36
        $context["class"] = ((($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "variant", array()) == "inline")) ? (array(0 => "col-sm-3", 1 => "col-sm-9")) : (array(0 => "col-xs-12", 1 => "col-xs-12")));
        // line 40
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82a85b2336d60cd167ee188414825e66ab1b1f6ca97fdde49feef797e50e2f27->leave($__internal_82a85b2336d60cd167ee188414825e66ab1b1f6ca97fdde49feef797e50e2f27_prof);

    }

    // line 42
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_8e217597c108df76ded3d0787a1bfffcd614072ba2ee9a01d3896f843d66aa83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e217597c108df76ded3d0787a1bfffcd614072ba2ee9a01d3896f843d66aa83->enter($__internal_8e217597c108df76ded3d0787a1bfffcd614072ba2ee9a01d3896f843d66aa83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo "text";
        
        $__internal_8e217597c108df76ded3d0787a1bfffcd614072ba2ee9a01d3896f843d66aa83->leave($__internal_8e217597c108df76ded3d0787a1bfffcd614072ba2ee9a01d3896f843d66aa83_prof);

    }

    // line 43
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_49f3e9d71c9390fedc01af73a4fc158d40a1ec2426c4d1e283d35a2267916435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f3e9d71c9390fedc01af73a4fc158d40a1ec2426c4d1e283d35a2267916435->enter($__internal_49f3e9d71c9390fedc01af73a4fc158d40a1ec2426c4d1e283d35a2267916435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo "fieldText";
        
        $__internal_49f3e9d71c9390fedc01af73a4fc158d40a1ec2426c4d1e283d35a2267916435->leave($__internal_49f3e9d71c9390fedc01af73a4fc158d40a1ec2426c4d1e283d35a2267916435_prof);

    }

    // line 45
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_7afdea72b16afea8e77b33a3d406c50d7659a59690445b6ed520f860b791b028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afdea72b16afea8e77b33a3d406c50d7659a59690445b6ed520f860b791b028->enter($__internal_7afdea72b16afea8e77b33a3d406c50d7659a59690445b6ed520f860b791b028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo twig_escape_filter($this->env, (isset($context["labelkey"]) ? $context["labelkey"] : $this->getContext($context, "labelkey")), "html", null, true);
        
        $__internal_7afdea72b16afea8e77b33a3d406c50d7659a59690445b6ed520f860b791b028->leave($__internal_7afdea72b16afea8e77b33a3d406c50d7659a59690445b6ed520f860b791b028_prof);

    }

    // line 46
    public function block_fieldset_label_info($context, array $blocks = array())
    {
        $__internal_368236cac923c39aa13a8d91d01cfac19f7a884782320d65a36d7e1b3cf94d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368236cac923c39aa13a8d91d01cfac19f7a884782320d65a36d7e1b3cf94d58->enter($__internal_368236cac923c39aa13a8d91d01cfac19f7a884782320d65a36d7e1b3cf94d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_info"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "info", array()), "html", null, true);
        
        $__internal_368236cac923c39aa13a8d91d01cfac19f7a884782320d65a36d7e1b3cf94d58->leave($__internal_368236cac923c39aa13a8d91d01cfac19f7a884782320d65a36d7e1b3cf94d58_prof);

    }

    // line 47
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_745d34d94961d4ed74c766d58752015ed1ef8b17bcdf123b94eb5b0f58fc5347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745d34d94961d4ed74c766d58752015ed1ef8b17bcdf123b94eb5b0f58fc5347->enter($__internal_745d34d94961d4ed74c766d58752015ed1ef8b17bcdf123b94eb5b0f58fc5347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo twig_escape_filter($this->env, ("control-label " . $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), 0, array(), "array")), "html", null, true);
        
        $__internal_745d34d94961d4ed74c766d58752015ed1ef8b17bcdf123b94eb5b0f58fc5347->leave($__internal_745d34d94961d4ed74c766d58752015ed1ef8b17bcdf123b94eb5b0f58fc5347_prof);

    }

    // line 48
    public function block_fieldset_label_for($context, array $blocks = array())
    {
        $__internal_04f7eb32afdc560f20cbec0eb1219edbe095a4f49fdb098fc6107975ab0c968d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f7eb32afdc560f20cbec0eb1219edbe095a4f49fdb098fc6107975ab0c968d->enter($__internal_04f7eb32afdc560f20cbec0eb1219edbe095a4f49fdb098fc6107975ab0c968d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_for"));

        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
        
        $__internal_04f7eb32afdc560f20cbec0eb1219edbe095a4f49fdb098fc6107975ab0c968d->leave($__internal_04f7eb32afdc560f20cbec0eb1219edbe095a4f49fdb098fc6107975ab0c968d_prof);

    }

    // line 50
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_5af07ab9dbd67a19f45c7a3be290dcc372404669ae640d789f87844493d17232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af07ab9dbd67a19f45c7a3be290dcc372404669ae640d789f87844493d17232->enter($__internal_5af07ab9dbd67a19f45c7a3be290dcc372404669ae640d789f87844493d17232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 51
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), 1, array(), "array"), "html", null, true);
        echo "\">
        <input";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "text", array())), "method"), "html", null, true);
        echo ">
    </div>
";
        
        $__internal_5af07ab9dbd67a19f45c7a3be290dcc372404669ae640d789f87844493d17232->leave($__internal_5af07ab9dbd67a19f45c7a3be290dcc372404669ae640d789f87844493d17232_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 52,  146 => 51,  140 => 50,  128 => 48,  116 => 47,  104 => 46,  92 => 45,  80 => 43,  68 => 42,  61 => 40,  59 => 36,  57 => 32,  56 => 31,  55 => 30,  54 => 29,  53 => 28,  52 => 27,  51 => 26,  50 => 25,  49 => 23,  48 => 22,  47 => 21,  46 => 19,  44 => 13,  43 => 12,  42 => 11,  41 => 10,  40 => 9,  39 => 8,  38 => 7,  37 => 6,  36 => 5,  35 => 4,  34 => 3,  11 => 40,);
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
    class:        ('form-control ' ~ field.class)|trim,
    label:        field.label,
    pattern:      field.pattern|default(''),
    placeholder:  field.placeholder|default(''),
    required:     field.required|default(false),
    errortext:    field.error|default(''),
    readonly:     field.readonly|default(false),
    title:        field.title|default(''),
    variant:      field.variant,
    info:         field.info|default('')
} %}
{# variant[inline] #}

{#=== INIT ===========================================================================================================#}

{% set attributes = {
    text: {
        class:           option.class,
        data_errortext:  option.errortext,
        id:              key,
        maxlength:       255,
        name:            name,
        pattern:         (option.pattern and option.pattern not in ['url', 'email']) ? option.pattern : '',
        placeholder:     option.placeholder,
        readonly:        option.readonly,
        required:        option.required,
        title:           option.title,
        type:            (option.pattern in ['url', 'email']) ? option.pattern : 'text',
        value:           context.content.get(contentkey)|default(''),
    }
} %}

{% set class = option.variant == 'inline' ? ['col-sm-3', 'col-sm-9'] : ['col-xs-12', 'col-xs-12'] %}

{#=== FIELDSET =======================================================================================================#}

{% extends '@bolt/_base/_fieldset.twig' %}

{% block fieldset_type 'text' %}
{% block fieldset_widget 'fieldText' %}

{% block fieldset_label_text  labelkey %}
{% block fieldset_label_info  option.info %}
{% block fieldset_label_class 'control-label ' ~ class[0] %}
{% block fieldset_label_for   key %}

{% block fieldset_controls %}
    <div class=\"{{ class[1] }}\">
        <input{{ macro.attr(attributes.text) }}>
    </div>
{% endblock fieldset_controls %}
", "@bolt/editcontent/fields/_text.twig", "app://view/twig/editcontent/fields/_text.twig");
    }
}
