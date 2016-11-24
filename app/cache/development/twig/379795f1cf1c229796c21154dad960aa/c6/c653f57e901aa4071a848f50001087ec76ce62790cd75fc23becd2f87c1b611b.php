<?php

/* @bolt/editcontent/fields/_categories.twig */
class __TwigTemplate_fc798acba699d75a3c25406b2e585385c7bbbd0e867e51b237e29bcb35b37e08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_categories.twig", 25);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
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
        $__internal_557fff0c239969df835fe7579db3dba1c541a7f31ab87389cf8b2e5fdf1eb56e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557fff0c239969df835fe7579db3dba1c541a7f31ab87389cf8b2e5fdf1eb56e->enter($__internal_557fff0c239969df835fe7579db3dba1c541a7f31ab87389cf8b2e5fdf1eb56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_categories.twig"));

        // line 4
        $context["options"] = array();
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "options", array()));
        foreach ($context['_seq'] as $context["slug"] => $context["cat"]) {
            // line 6
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array(0 => array("value" =>             // line 7
$context["slug"], "text" =>             // line 8
$context["cat"], "selected" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 9
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "taxonomy", array()), "containsKeyValue", array(0 => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug", array()), 1 => $context["slug"]), "method"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        $context["buic_opt_select"] = array("all" => (($this->getAttribute(        // line 15
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array()), false)) : (false)), "clear" => true, "id" => ("taxonomy-" . $this->getAttribute(        // line 17
(isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug", array())), "multiple" => (($this->getAttribute(        // line 18
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array()), false)) : (false)), "name" => (("taxonomy[" . $this->getAttribute(        // line 19
(isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug", array())) . "][]"), "options" =>         // line 20
(isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_557fff0c239969df835fe7579db3dba1c541a7f31ab87389cf8b2e5fdf1eb56e->leave($__internal_557fff0c239969df835fe7579db3dba1c541a7f31ab87389cf8b2e5fdf1eb56e_prof);

    }

    // line 27
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_a8b6077ee880bb63b14e25b73b3971e860f5f36fb557607be4064abaa91e2ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b6077ee880bb63b14e25b73b3971e860f5f36fb557607be4064abaa91e2ec4->enter($__internal_a8b6077ee880bb63b14e25b73b3971e860f5f36fb557607be4064abaa91e2ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo "categories";
        
        $__internal_a8b6077ee880bb63b14e25b73b3971e860f5f36fb557607be4064abaa91e2ec4->leave($__internal_a8b6077ee880bb63b14e25b73b3971e860f5f36fb557607be4064abaa91e2ec4_prof);

    }

    // line 28
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_82c0e49250ae3ca7895dc108e7954306c7535c97d505c0aa9ef1b97ab815df6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c0e49250ae3ca7895dc108e7954306c7535c97d505c0aa9ef1b97ab815df6e->enter($__internal_82c0e49250ae3ca7895dc108e7954306c7535c97d505c0aa9ef1b97ab815df6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo "fieldCategories";
        
        $__internal_82c0e49250ae3ca7895dc108e7954306c7535c97d505c0aa9ef1b97ab815df6e->leave($__internal_82c0e49250ae3ca7895dc108e7954306c7535c97d505c0aa9ef1b97ab815df6e_prof);

    }

    // line 30
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_51f79892ed1bb5a8dfe56c118d69a7f90893799301695dc01f8d925f06258178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f79892ed1bb5a8dfe56c118d69a7f90893799301695dc01f8d925f06258178->enter($__internal_51f79892ed1bb5a8dfe56c118d69a7f90893799301695dc01f8d925f06258178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "name", array()), "html", null, true);
        
        $__internal_51f79892ed1bb5a8dfe56c118d69a7f90893799301695dc01f8d925f06258178->leave($__internal_51f79892ed1bb5a8dfe56c118d69a7f90893799301695dc01f8d925f06258178_prof);

    }

    // line 31
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_b1a37809a9e27c3f0639f037b98b2d2c2083f3d673e066b46401fff7c33ae90e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a37809a9e27c3f0639f037b98b2d2c2083f3d673e066b46401fff7c33ae90e->enter($__internal_b1a37809a9e27c3f0639f037b98b2d2c2083f3d673e066b46401fff7c33ae90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo "col-sm-3";
        
        $__internal_b1a37809a9e27c3f0639f037b98b2d2c2083f3d673e066b46401fff7c33ae90e->leave($__internal_b1a37809a9e27c3f0639f037b98b2d2c2083f3d673e066b46401fff7c33ae90e_prof);

    }

    // line 32
    public function block_fieldset_label_for($context, array $blocks = array())
    {
        $__internal_93fbba314f3c08b74bb0de8af540aceab67becdc2426bfbcc686256458d33dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fbba314f3c08b74bb0de8af540aceab67becdc2426bfbcc686256458d33dc2->enter($__internal_93fbba314f3c08b74bb0de8af540aceab67becdc2426bfbcc686256458d33dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_for"));

        echo twig_escape_filter($this->env, ("taxonomy-" . $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug", array())), "html", null, true);
        
        $__internal_93fbba314f3c08b74bb0de8af540aceab67becdc2426bfbcc686256458d33dc2->leave($__internal_93fbba314f3c08b74bb0de8af540aceab67becdc2426bfbcc686256458d33dc2_prof);

    }

    // line 34
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_5466fb4443769e61b922425b00b2548a56ece28091514f1838664ad767ec7b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5466fb4443769e61b922425b00b2548a56ece28091514f1838664ad767ec7b65->enter($__internal_5466fb4443769e61b922425b00b2548a56ece28091514f1838664ad767ec7b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 35
        echo "    ";
        $context["__internal_37f281f997bce6e7cd3cfed56a5baf33f7bbe88d8302a29c17102986a852cd04"] = $this->loadTemplate("@bolt/_buic/_select.twig", "@bolt/editcontent/fields/_categories.twig", 35);
        // line 36
        echo "
    <div class=\"col-sm-9\">
        ";
        // line 38
        echo $context["__internal_37f281f997bce6e7cd3cfed56a5baf33f7bbe88d8302a29c17102986a852cd04"]->getbuic_select((isset($context["buic_opt_select"]) ? $context["buic_opt_select"] : $this->getContext($context, "buic_opt_select")));
        echo "
    </div>
";
        
        $__internal_5466fb4443769e61b922425b00b2548a56ece28091514f1838664ad767ec7b65->leave($__internal_5466fb4443769e61b922425b00b2548a56ece28091514f1838664ad767ec7b65_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 38,  131 => 36,  128 => 35,  122 => 34,  110 => 32,  98 => 31,  86 => 30,  74 => 28,  62 => 27,  55 => 25,  53 => 20,  52 => 19,  51 => 18,  50 => 17,  49 => 15,  48 => 14,  42 => 9,  41 => 8,  40 => 7,  39 => 6,  35 => 5,  33 => 4,  11 => 25,);
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

{# Build the select options array #}
{% set options = [] %}
{% for slug, cat in taxonomy.options %}
    {% set options = options|merge([{
        value:     slug,
        text:      cat,
        selected:  context.content.taxonomy.containsKeyValue(taxonomy.slug, slug),
    }]) %}
{% endfor %}

{# BUIC options #}
{% set buic_opt_select = {
    'all':       taxonomy.multiple|default(false),
    'clear':     true,
    'id':        'taxonomy-' ~ taxonomy.slug,
    'multiple':  taxonomy.multiple|default(false),
    'name':      'taxonomy[' ~ taxonomy.slug ~ '][]',
    'options':   options,
} %}

{#=== FIELDSET =======================================================================================================#}

{% extends '@bolt/_base/_fieldset.twig' %}

{% block fieldset_type 'categories' %}
{% block fieldset_widget 'fieldCategories' %}

{% block fieldset_label_text  taxonomy.name %}
{% block fieldset_label_class 'col-sm-3' %}
{% block fieldset_label_for   'taxonomy-' ~ taxonomy.slug %}

{% block fieldset_controls %}
    {% from '@bolt/_buic/_select.twig' import buic_select %}

    <div class=\"col-sm-9\">
        {{ buic_select(buic_opt_select) }}
    </div>
{% endblock fieldset_controls %}
", "@bolt/editcontent/fields/_categories.twig", "app://view/twig/editcontent/fields/_categories.twig");
    }
}
