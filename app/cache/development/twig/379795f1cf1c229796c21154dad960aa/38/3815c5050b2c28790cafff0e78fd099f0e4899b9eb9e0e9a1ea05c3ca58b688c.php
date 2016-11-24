<?php

/* @bolt/editcontent/fields/_image.twig */
class __TwigTemplate_dbdf306d3a81e122967431dfb45ee28f74117af7e0935ed246a9d89e6f5a45f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 85
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_image.twig", 85);
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
        $__internal_bb5ad6b8e38c8deafb58c3142435d4cd43aff4e8f2e550ce9976fcfa99667ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5ad6b8e38c8deafb58c3142435d4cd43aff4e8f2e550ce9976fcfa99667ccb->enter($__internal_bb5ad6b8e38c8deafb58c3142435d4cd43aff4e8f2e550ce9976fcfa99667ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_image.twig"));

        // line 3
        $context["option"] = array("class" => trim(("form-control " . $this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "class", array()))), "label" => $this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label", array()), "extensions" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "extensions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions", array()), array())) : (array())), "attrib" => ((($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "attrib", array(), "any", true, true) && twig_test_iterable($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "attrib", array())))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "attrib", array())) : (array(0 => (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array()), null)) : (null))))), "upload" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "upload", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "upload", array()), "")) : ("")), "can_upload" => (($this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "canUpload", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "canUpload", array()), false)) : (false)), "info" => (($this->getAttribute(        // line 10
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "info.upload.image")) : ("info.upload.image")));
        // line 15
        $context["preview_w"] = 200;
        // line 16
        $context["preview_h"] = 150;
        // line 19
        $context["image"] = (((twig_test_iterable($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : $this->getContext($context, "contentkey"))), "method")) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : $this->getContext($context, "contentkey"))), "method")))) ? ($this->getAttribute($this->getAttribute(        // line 20
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : $this->getContext($context, "contentkey"))), "method")) : (array("file" => $this->getAttribute($this->getAttribute(        // line 21
(isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : $this->getContext($context, "contentkey"))), "method"))));
        // line 24
        $context["hattr"] = array("path" => array("class" => ($this->getAttribute(        // line 26
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "class", array()) . " wide path"), "id" => ("field-" .         // line 27
(isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "name" => (        // line 28
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "[file]"), "placeholder" => ((($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.general.allowed-filetypes") . " ") . twig_join_filter($this->getAttribute(        // line 29
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "extensions", array()), ", ")) . " …"), "type" => "text", "value" => (($this->getAttribute(        // line 31
(isset($context["image"]) ? $context["image"] : null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file", array()), "")) : (""))), "path_label" => array("for" => ("field-" .         // line 35
(isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "upload" => array("accept" => (($this->getAttribute(        // line 39
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "extensions", array())) ? (("." . twig_join_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "extensions", array()), ",."))) : ("")), "data-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("upload", array("handler" => $this->getAttribute(        // line 40
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "upload", array())), true), "id" => ("fileupload-" .         // line 41
(isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "name" => "files[]", "type" => "file"), "preview" => array("alt" => "Preview", "height" =>         // line 48
(isset($context["preview_h"]) ? $context["preview_h"] : $this->getContext($context, "preview_h")), "src" => (( !twig_test_empty($this->getAttribute(        // line 49
(isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "file", array()))) ? ($this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "file", array()), (isset($context["preview_w"]) ? $context["preview_w"] : $this->getContext($context, "preview_w")), (isset($context["preview_h"]) ? $context["preview_h"] : $this->getContext($context, "preview_h")), "b")) : (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "paths", array()), "app", array()) . "view/img/default_empty_4x3.png"))), "width" =>         // line 50
(isset($context["preview_w"]) ? $context["preview_w"] : $this->getContext($context, "preview_w"))));
        // line 54
        $context["attribute_fields"] = array();
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "attrib", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "attrib", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["attrib"]) {
            // line 56
            $context["aid"] = twig_replace_filter(twig_lower_filter($this->env, $context["attrib"]), array("alt text" => "alt"));
            // line 58
            if (twig_in_filter((isset($context["aid"]) ? $context["aid"] : $this->getContext($context, "aid")), array(0 => "title", 1 => "alt"))) {
                // line 59
                if (((isset($context["aid"]) ? $context["aid"] : $this->getContext($context, "aid")) == "title")) {
                    // line 60
                    $context["atitle"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Title");
                } elseif ((                // line 61
(isset($context["aid"]) ? $context["aid"] : $this->getContext($context, "aid")) == "alt")) {
                    // line 62
                    $context["atitle"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.image.label.alt");
                }
                // line 65
                $context["uid"] = (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) . "-") . (isset($context["aid"]) ? $context["aid"] : $this->getContext($context, "aid")));
                // line 67
                $context["attribute_fields"] = twig_array_merge((isset($context["attribute_fields"]) ? $context["attribute_fields"] : $this->getContext($context, "attribute_fields")), array(0 => array("title" =>                 // line 68
(isset($context["atitle"]) ? $context["atitle"] : $this->getContext($context, "atitle")), "label" => array("for" =>                 // line 70
(isset($context["uid"]) ? $context["uid"] : $this->getContext($context, "uid"))), "input" => array("class" => "form-control", "id" =>                 // line 74
(isset($context["uid"]) ? $context["uid"] : $this->getContext($context, "uid")), "name" => (((                // line 75
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "[") . (isset($context["aid"]) ? $context["aid"] : $this->getContext($context, "aid"))) . "]"), "type" => "text", "value" => (($this->getAttribute(                // line 77
(isset($context["image"]) ? $context["image"] : null), (isset($context["aid"]) ? $context["aid"] : $this->getContext($context, "aid")), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), (isset($context["aid"]) ? $context["aid"] : $this->getContext($context, "aid")), array(), "array"), "")) : (""))))));
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attrib'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb5ad6b8e38c8deafb58c3142435d4cd43aff4e8f2e550ce9976fcfa99667ccb->leave($__internal_bb5ad6b8e38c8deafb58c3142435d4cd43aff4e8f2e550ce9976fcfa99667ccb_prof);

    }

    // line 87
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_8616a8e238f9c8d3ced4b4f6ac8083871d1905a623b004d2f61cdd5f94dfc357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8616a8e238f9c8d3ced4b4f6ac8083871d1905a623b004d2f61cdd5f94dfc357->enter($__internal_8616a8e238f9c8d3ced4b4f6ac8083871d1905a623b004d2f61cdd5f94dfc357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo "image";
        
        $__internal_8616a8e238f9c8d3ced4b4f6ac8083871d1905a623b004d2f61cdd5f94dfc357->leave($__internal_8616a8e238f9c8d3ced4b4f6ac8083871d1905a623b004d2f61cdd5f94dfc357_prof);

    }

    // line 88
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_c3031d745421ad462dec97afe039dda51e5fe475e4894f7e9a9ce9b0a2da3b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3031d745421ad462dec97afe039dda51e5fe475e4894f7e9a9ce9b0a2da3b1f->enter($__internal_c3031d745421ad462dec97afe039dda51e5fe475e4894f7e9a9ce9b0a2da3b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo "fieldImage";
        
        $__internal_c3031d745421ad462dec97afe039dda51e5fe475e4894f7e9a9ce9b0a2da3b1f->leave($__internal_c3031d745421ad462dec97afe039dda51e5fe475e4894f7e9a9ce9b0a2da3b1f_prof);

    }

    // line 90
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_0e4b7f150c34ce05736fc26a3a3fac6a9e594d34de3cc91b8ad7478c80973428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4b7f150c34ce05736fc26a3a3fac6a9e594d34de3cc91b8ad7478c80973428->enter($__internal_0e4b7f150c34ce05736fc26a3a3fac6a9e594d34de3cc91b8ad7478c80973428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo twig_escape_filter($this->env, (isset($context["labelkey"]) ? $context["labelkey"] : $this->getContext($context, "labelkey")), "html", null, true);
        
        $__internal_0e4b7f150c34ce05736fc26a3a3fac6a9e594d34de3cc91b8ad7478c80973428->leave($__internal_0e4b7f150c34ce05736fc26a3a3fac6a9e594d34de3cc91b8ad7478c80973428_prof);

    }

    // line 91
    public function block_fieldset_label_info($context, array $blocks = array())
    {
        $__internal_9a5a83b1b0a25659403c05350516020dcf98216a1634e85a5ee408557d19c888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5a83b1b0a25659403c05350516020dcf98216a1634e85a5ee408557d19c888->enter($__internal_9a5a83b1b0a25659403c05350516020dcf98216a1634e85a5ee408557d19c888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_info"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "info", array()), "html", null, true);
        
        $__internal_9a5a83b1b0a25659403c05350516020dcf98216a1634e85a5ee408557d19c888->leave($__internal_9a5a83b1b0a25659403c05350516020dcf98216a1634e85a5ee408557d19c888_prof);

    }

    // line 92
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_b4d863b64984b97fd22ab3419b88b054e12c5f453f0b787846ef18a983e662fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d863b64984b97fd22ab3419b88b054e12c5f453f0b787846ef18a983e662fd->enter($__internal_b4d863b64984b97fd22ab3419b88b054e12c5f453f0b787846ef18a983e662fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo "col-xs-12 control-label";
        
        $__internal_b4d863b64984b97fd22ab3419b88b054e12c5f453f0b787846ef18a983e662fd->leave($__internal_b4d863b64984b97fd22ab3419b88b054e12c5f453f0b787846ef18a983e662fd_prof);

    }

    // line 94
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_15610ff8665a8b5f5662b7395f81d6b8869864273a27749e1a93e00da059f741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15610ff8665a8b5f5662b7395f81d6b8869864273a27749e1a93e00da059f741->enter($__internal_15610ff8665a8b5f5662b7395f81d6b8869864273a27749e1a93e00da059f741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 95
        echo "    <div class=\"col-xs-12 dropzone\">
        <div class=\"row\">
            <div class=\"col-xs-8\">
                ";
        // line 99
        echo "                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        <label";
        // line 101
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hattr($this->getAttribute((isset($context["hattr"]) ? $context["hattr"] : $this->getContext($context, "hattr")), "path_label", array()));
        echo ">";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.path-image-file");
        echo "</label><input";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hattr($this->getAttribute((isset($context["hattr"]) ? $context["hattr"] : $this->getContext($context, "hattr")), "path", array()));
        echo ">
                    </div>
                </div>

                ";
        // line 106
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attribute_fields"]) ? $context["attribute_fields"] : $this->getContext($context, "attribute_fields")));
        foreach ($context['_seq'] as $context["_key"] => $context["afield"]) {
            // line 107
            echo "                    <div class=\"form-group\">
                        <div class=\"col-sm-2\">
                            <label";
            // line 109
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hattr($this->getAttribute($context["afield"], "label", array()));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["afield"], "title", array()), "html", null, true);
            echo "</label>
                        </div>
                        <div class=\"col-sm-10\">
                            <input";
            // line 112
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hattr($this->getAttribute($context["afield"], "input", array()));
            echo ">
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['afield'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "
                ";
        // line 118
        echo "                <div class=\"buic-progress\" data-bolt-widget=\"buicProgress\"></div>

                ";
        // line 121
        echo "                ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "upload_buttons", array(0 => "image", 1 => $this->getAttribute((isset($context["hattr"]) ? $context["hattr"] : $this->getContext($context, "hattr")), "upload", array()), 2 => $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "upload", array()), 3 => ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "can", array()), "upload", array()) && $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "can_upload", array())), 4 => false), "method"), "html", null, true);
        echo "
            </div>

            ";
        // line 125
        echo "            <div class=\"col-xs-4\">
                <div class=\"right-on-large\">
                    <label>";
        // line 127
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.preview");
        echo "</label>
                    <div class=\"content-preview imageholder\">
                        <img";
        // line 129
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hattr($this->getAttribute((isset($context["hattr"]) ? $context["hattr"] : $this->getContext($context, "hattr")), "preview", array()));
        echo ">
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_15610ff8665a8b5f5662b7395f81d6b8869864273a27749e1a93e00da059f741->leave($__internal_15610ff8665a8b5f5662b7395f81d6b8869864273a27749e1a93e00da059f741_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 129,  235 => 127,  231 => 125,  224 => 121,  220 => 118,  217 => 116,  207 => 112,  199 => 109,  195 => 107,  190 => 106,  179 => 101,  175 => 99,  170 => 95,  164 => 94,  152 => 92,  140 => 91,  128 => 90,  116 => 88,  104 => 87,  97 => 85,  90 => 77,  89 => 75,  88 => 74,  87 => 70,  86 => 68,  85 => 67,  83 => 65,  80 => 62,  78 => 61,  76 => 60,  74 => 59,  72 => 58,  70 => 56,  66 => 55,  64 => 54,  62 => 50,  61 => 49,  60 => 48,  59 => 41,  58 => 40,  57 => 39,  56 => 35,  55 => 31,  54 => 29,  53 => 28,  52 => 27,  51 => 26,  50 => 24,  48 => 21,  47 => 20,  46 => 19,  44 => 16,  42 => 15,  40 => 10,  39 => 9,  38 => 8,  37 => 7,  36 => 6,  35 => 5,  34 => 4,  33 => 3,  11 => 85,);
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
    class:       ('form-control ' ~ field.class)|trim,
    label:       field.label,
    extensions:  field.extensions|default([]),
    attrib:      (field.attrib is defined and field.attrib is iterable) ? field.attrib : [ field.attrib|default(null) ],
    upload:      field.upload|default(''),
    can_upload:  field.canUpload|default(false),
    info:        field.info|default('info.upload.image')
} %}

{#=== INIT ===========================================================================================================#}

{% set preview_w = 200 %}
{% set preview_h = 150 %}

{# Convert from old stored image format that is used until re-saved #}
{% set image = (context.content.get(contentkey) is iterable) and (context.content.get(contentkey) is not empty)
           ? context.content.get(contentkey)
           : {'file': context.content.get(contentkey)}
%}

{% set hattr = {
    path: {
        'class':        option.class ~ ' wide path',
        'id':           'field-' ~ key,
        'name':         name ~ '[file]',
        'placeholder':  __('field.general.allowed-filetypes') ~ ' ' ~ option.extensions|join(', ') ~ ' …',
        'type':         'text',
        'value':        image.file|default(''),
    },

    path_label: {
        'for':          'field-' ~ key,
    },

    upload: {
        'accept':       option.extensions ? '.' ~ option.extensions|join(',.') : '',
        'data-url':     url('upload', { 'handler': option.upload }, true),
        'id':           'fileupload-' ~ key,
        'name':         'files[]',
        'type':         'file',
    },

    preview: {
        'alt':          'Preview',
        'height':       preview_h,
        'src':          image.file is not empty ? image.file|thumbnail(preview_w, preview_h, 'b') : app.paths.app ~ 'view/img/default_empty_4x3.png',
        'width':        preview_w,
    },
} %}

{% set attribute_fields = [] %}
{% for attrib in option.attrib|default([]) %}
    {% set aid = attrib|lower|replace({'alt text': 'alt'}) %}

    {% if aid in ['title', 'alt'] %}
        {% if aid == 'title' %}
            {% set atitle = __('Title') %}
        {% elseif aid == 'alt' %}
            {% set atitle = __('field.image.label.alt') %}
        {% endif %}

        {% set uid = key ~ '-' ~ aid %}

        {% set attribute_fields = attribute_fields|merge([{
            title: atitle,
            label: {
                for:    uid
            },
            input: {
                class:  'form-control',
                id:     uid,
                name:   name ~ '[' ~ aid ~ ']',
                type:   'text',
                value:  image[aid]|default(''),
            }
        }]) %}
    {% endif %}
{% endfor %}

{#=== FIELDSET =======================================================================================================#}

{% extends '@bolt/_base/_fieldset.twig' %}

{% block fieldset_type 'image' %}
{% block fieldset_widget 'fieldImage' %}

{% block fieldset_label_text  labelkey %}
{% block fieldset_label_info  option.info %}
{% block fieldset_label_class 'col-xs-12 control-label' %}

{% block fieldset_controls %}
    <div class=\"col-xs-12 dropzone\">
        <div class=\"row\">
            <div class=\"col-xs-8\">
                {# Path #}
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        <label{{ hattr(hattr.path_label) }}>{{ __('general.phrase.path-image-file') }}</label><input{{ hattr(hattr.path) }}>
                    </div>
                </div>

                {# Attribute fields #}
                {% for afield in attribute_fields %}
                    <div class=\"form-group\">
                        <div class=\"col-sm-2\">
                            <label{{ hattr(afield.label) }}>{{ afield.title }}</label>
                        </div>
                        <div class=\"col-sm-10\">
                            <input{{ hattr(afield.input) }}>
                        </div>
                    </div>
                {% endfor %}

                {# Progressbar #}
                <div class=\"buic-progress\" data-bolt-widget=\"buicProgress\"></div>

                {# Uploadbuttons #}
                {{ macro.upload_buttons('image', hattr.upload, option.upload, context.can.upload and option.can_upload, false) }}
            </div>

            {# Preview #}
            <div class=\"col-xs-4\">
                <div class=\"right-on-large\">
                    <label>{{ __('general.phrase.preview') }}</label>
                    <div class=\"content-preview imageholder\">
                        <img{{ hattr(hattr.preview) }}>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock fieldset_controls %}
", "@bolt/editcontent/fields/_image.twig", "app://view/twig/editcontent/fields/_image.twig");
    }
}
