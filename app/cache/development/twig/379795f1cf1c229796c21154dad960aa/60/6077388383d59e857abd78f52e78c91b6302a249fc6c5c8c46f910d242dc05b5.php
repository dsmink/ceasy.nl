<?php

/* @bolt/editcontent/_field.twig */
class __TwigTemplate_4e008ae962e4280fe32c5500a0a05590360e9781ee90cdff65de5b46df00f35a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cb39aecf0a70e956476bf231956500c33b4cb81d113a9affe1caa2659bf8994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb39aecf0a70e956476bf231956500c33b4cb81d113a9affe1caa2659bf8994->enter($__internal_0cb39aecf0a70e956476bf231956500c33b4cb81d113a9affe1caa2659bf8994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_field.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/editcontent/_field.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["field"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "fields", array()), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array");
        // line 4
        echo "
<div data-bolt-fieldset=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type", array()), "html", null, true);
        echo "\">
    ";
        // line 7
        echo "    ";
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "prefix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "prefix", array())))) {
            // line 8
            echo "        <div class=\"prefix\">
            ";
            // line 9
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->markdown($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "prefix", array()));
            echo "
        </div>
    ";
        }
        // line 12
        echo "
    ";
        // line 14
        echo "    ";
        $context["labelkey"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label", array())) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label", array())) : (twig_capitalize_string_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))));
        // line 15
        echo "
    ";
        // line 17
        echo "    ";
        $context["templatename"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "fields", array()), $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type", array()), array(), "array"), "template", array());
        // line 18
        echo "    ";
        $context["templatename"] = array(0 => (isset($context["templatename"]) ? $context["templatename"] : $this->getContext($context, "templatename")), 1 => ("@bolt/" . (isset($context["templatename"]) ? $context["templatename"] : $this->getContext($context, "templatename"))), 2 => "@bolt/editcontent/fields/_not_found.twig");
        // line 19
        echo "    ";
        $this->loadTemplate((isset($context["templatename"]) ? $context["templatename"] : $this->getContext($context, "templatename")), "@bolt/editcontent/_field.twig", 19)->display(array_merge($context, array("key" =>         // line 20
(isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "name" =>         // line 21
(isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "contentkey" =>         // line 22
(isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))));
        // line 24
        echo "
    ";
        // line 26
        echo "    ";
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "postfix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "postfix", array())))) {
            // line 27
            echo "        <div class=\"postfix\">
            ";
            // line 28
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->markdown($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "postfix", array()));
            echo "
        </div>
    ";
        }
        // line 31
        echo "
    ";
        // line 33
        echo "    ";
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "separator", array(), "any", true, true) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "separator", array()) == true))) {
            // line 34
            echo "        <hr>
    ";
        }
        // line 36
        echo "</div>
";
        
        $__internal_0cb39aecf0a70e956476bf231956500c33b4cb81d113a9affe1caa2659bf8994->leave($__internal_0cb39aecf0a70e956476bf231956500c33b4cb81d113a9affe1caa2659bf8994_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 36,  90 => 34,  87 => 33,  84 => 31,  78 => 28,  75 => 27,  72 => 26,  69 => 24,  67 => 22,  66 => 21,  65 => 20,  63 => 19,  60 => 18,  57 => 17,  54 => 15,  51 => 14,  48 => 12,  42 => 9,  39 => 8,  36 => 7,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@bolt/_macro/_macro.twig' as macro %}

{% set field = context.contenttype.fields[key] %}

<div data-bolt-fieldset=\"{{ field.type }}\">
    {# Prefix #}
    {% if field.prefix is defined and field.prefix is not empty %}
        <div class=\"prefix\">
            {{ field.prefix|markdown }}
        </div>
    {% endif %}

    {# Fields #}
    {% set labelkey = field.label ?: key|ucfirst %}

    {# Temporary approach until v4. @see https://github.com/bolt/bolt/issues/5237 #}
    {% set templatename = context.fields[field.type].template %}
    {% set templatename = [ templatename, '@bolt/' ~ templatename, '@bolt/editcontent/fields/_not_found.twig' ] %}
    {% include templatename with {
        'key': key,
        'name': key,
        'contentkey': key
    } %}

    {# Postfix #}
    {% if field.postfix is defined and field.postfix is not empty %}
        <div class=\"postfix\">
            {{ field.postfix|markdown }}
        </div>
    {% endif %}

    {# Divider #}
    {% if field.separator is defined and field.separator == true %}
        <hr>
    {% endif %}
</div>
", "@bolt/editcontent/_field.twig", "app://view/twig/editcontent/_field.twig");
    }
}
