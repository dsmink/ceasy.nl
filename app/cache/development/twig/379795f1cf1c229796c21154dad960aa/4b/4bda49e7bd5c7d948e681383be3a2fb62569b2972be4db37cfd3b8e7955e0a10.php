<?php

/* @bolt/_base/_fieldset.twig */
class __TwigTemplate_5238c46bf6d2c5ea2fabe1299a0699b00659ae186b041fbc23f8d92ae3cac6ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
            'fieldset_controls' => array($this, 'block_fieldset_controls'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bd9ad02c3d6e2a892dec7b6c7e13bde6ea85b10447b1688415c667d99d4382f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd9ad02c3d6e2a892dec7b6c7e13bde6ea85b10447b1688415c667d99d4382f->enter($__internal_6bd9ad02c3d6e2a892dec7b6c7e13bde6ea85b10447b1688415c667d99d4382f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_base/_fieldset.twig"));

        // line 1
        $context["__internal_4a5c2f9892bdefd09d58710a76be0e24f9df940dab6874fe56e912e424b7211d"] = $this->loadTemplate("@bolt/_buic/_info.twig", "@bolt/_base/_fieldset.twig", 1);
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $context["widget_name"] =         $this->renderBlock("fieldset_widget", $context, $blocks);
        // line 6
        echo "
";
        // line 7
        if ( !(isset($context["widget_name"]) ? $context["widget_name"] : $this->getContext($context, "widget_name"))) {
            // line 8
            echo "    ";
            $context["data_bolt_widget"] = "";
        } elseif (twig_test_iterable(((        // line 9
array_key_exists("fieldset_conf", $context)) ? (_twig_default_filter((isset($context["fieldset_conf"]) ? $context["fieldset_conf"] : $this->getContext($context, "fieldset_conf")))) : ("")))) {
            // line 10
            echo "    ";
            $context["data_bolt_widget"] = twig_jsonencode_filter(array((isset($context["widget_name"]) ? $context["widget_name"] : $this->getContext($context, "widget_name")) => (isset($context["fieldset_conf"]) ? $context["fieldset_conf"] : $this->getContext($context, "fieldset_conf"))));
        } else {
            // line 12
            echo "    ";
            $context["data_bolt_widget"] = (isset($context["widget_name"]) ? $context["widget_name"] : $this->getContext($context, "widget_name"));
        }
        // line 14
        echo "
";
        // line 15
        $context["attributes_fieldset"] = array("class" => ("form-group bolt-field-" .         $this->renderBlock("fieldset_type", $context, $blocks)), "data-bolt-widget" =>         // line 17
(isset($context["data_bolt_widget"]) ? $context["data_bolt_widget"] : $this->getContext($context, "data_bolt_widget")));
        // line 19
        echo "
";
        // line 20
        $context["attributes_label"] = array("class" => (("main " .         $this->renderBlock("fieldset_label_class", $context, $blocks)) . (((        $this->renderBlock("fieldset_label_class", $context, $blocks) == "col-xs-12")) ? ("") : (" control-label"))), "for" =>         $this->renderBlock("fieldset_label_for", $context, $blocks));
        // line 24
        echo "
";
        // line 25
        if (        $this->renderBlock("fieldset_label_info", $context, $blocks)) {
            // line 26
            echo "    ";
            $context["field_info"] = $context["__internal_4a5c2f9892bdefd09d58710a76be0e24f9df940dab6874fe56e912e424b7211d"]->getbuic_info(            $this->renderBlock("fieldset_label_text", $context, $blocks),             $this->renderBlock("fieldset_label_info", $context, $blocks));
        }
        // line 28
        echo "
";
        // line 30
        echo "
<fieldset";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "attr", array(0 => (isset($context["attributes_fieldset"]) ? $context["attributes_fieldset"] : $this->getContext($context, "attributes_fieldset"))), "method"), "html", null, true);
        echo ">
    <legend class=\"sr-only\">";
        // line 32
        $this->displayBlock('fieldset_label_text', $context, $blocks);
        echo "</legend>
    ";
        // line 33
        if (        $this->renderBlock("fieldset_label_text", $context, $blocks)) {
            // line 34
            echo "        <label";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "attr", array(0 => (isset($context["attributes_label"]) ? $context["attributes_label"] : $this->getContext($context, "attributes_label"))), "method"), "html", null, true);
            echo ">";
            $this->displayBlock("fieldset_label_text", $context, $blocks);
            echo ": ";
            echo twig_escape_filter($this->env, ((array_key_exists("field_info", $context)) ? (_twig_default_filter((isset($context["field_info"]) ? $context["field_info"] : $this->getContext($context, "field_info")), "")) : ("")), "html", null, true);
            echo "</label>
    ";
        }
        // line 36
        echo "    ";
        $this->displayBlock('fieldset_controls', $context, $blocks);
        // line 37
        echo "</fieldset>
";
        
        $__internal_6bd9ad02c3d6e2a892dec7b6c7e13bde6ea85b10447b1688415c667d99d4382f->leave($__internal_6bd9ad02c3d6e2a892dec7b6c7e13bde6ea85b10447b1688415c667d99d4382f_prof);

    }

    // line 32
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_f30fe33a47a90988ea034a1adcb7be3b9bec10fe8c11530855bc745ce4c1f398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30fe33a47a90988ea034a1adcb7be3b9bec10fe8c11530855bc745ce4c1f398->enter($__internal_f30fe33a47a90988ea034a1adcb7be3b9bec10fe8c11530855bc745ce4c1f398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        
        $__internal_f30fe33a47a90988ea034a1adcb7be3b9bec10fe8c11530855bc745ce4c1f398->leave($__internal_f30fe33a47a90988ea034a1adcb7be3b9bec10fe8c11530855bc745ce4c1f398_prof);

    }

    // line 36
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_81cd7eacf972b60f055cc011259da5374b84c6c7e6fcf43b9d19b8432b07991b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81cd7eacf972b60f055cc011259da5374b84c6c7e6fcf43b9d19b8432b07991b->enter($__internal_81cd7eacf972b60f055cc011259da5374b84c6c7e6fcf43b9d19b8432b07991b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        
        $__internal_81cd7eacf972b60f055cc011259da5374b84c6c7e6fcf43b9d19b8432b07991b->leave($__internal_81cd7eacf972b60f055cc011259da5374b84c6c7e6fcf43b9d19b8432b07991b_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_base/_fieldset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 36,  109 => 32,  101 => 37,  98 => 36,  88 => 34,  86 => 33,  82 => 32,  78 => 31,  75 => 30,  72 => 28,  68 => 26,  66 => 25,  63 => 24,  61 => 20,  58 => 19,  56 => 17,  55 => 15,  52 => 14,  48 => 12,  44 => 10,  42 => 9,  39 => 8,  37 => 7,  34 => 6,  32 => 5,  29 => 4,  26 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@bolt/_buic/_info.twig' import buic_info %}

{#=== INIT ===========================================================================================================#}

{% set widget_name = block('fieldset_widget') %}

{% if not widget_name %}
    {% set data_bolt_widget = '' %}
{% elseif fieldset_conf|default() is iterable %}
    {% set data_bolt_widget = {(widget_name): fieldset_conf}|json_encode %}
{% else %}
    {% set data_bolt_widget = widget_name %}
{% endif %}

{% set attributes_fieldset = {
    'class':             'form-group bolt-field-' ~ block('fieldset_type'),
    'data-bolt-widget':  data_bolt_widget,
} %}

{% set attributes_label = {
    class:  'main ' ~ block('fieldset_label_class') ~ (block('fieldset_label_class') == 'col-xs-12' ? '' : ' control-label'),
    for:    block('fieldset_label_for'),
} %}

{% if block('fieldset_label_info') %}
    {% set field_info = buic_info(block('fieldset_label_text'), block('fieldset_label_info')) %}
{% endif %}

{#=== OUTPUT =========================================================================================================#}

<fieldset{{ macro.attr(attributes_fieldset) }}>
    <legend class=\"sr-only\">{% block fieldset_label_text %}{% endblock fieldset_label_text %}</legend>
    {% if block('fieldset_label_text') %}
        <label{{ macro.attr(attributes_label) }}>{{ block('fieldset_label_text') }}: {{ field_info|default('') }}</label>
    {% endif %}
    {% block fieldset_controls %}{% endblock fieldset_controls %}
</fieldset>
", "@bolt/_base/_fieldset.twig", "app://view/twig/_base/_fieldset.twig");
    }
}
