<?php

/* ziekteverzuim.twig */
class __TwigTemplate_354d7316cdefe90bd902b2f2ad9de863f49197c251905b5721de6b2d48a6ce59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("page.twig", "ziekteverzuim.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'secondary' => array($this, 'block_secondary'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_805619afb37eb571b7f547792038ff7238695b695601980d5ae751fa39b482e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805619afb37eb571b7f547792038ff7238695b695601980d5ae751fa39b482e0->enter($__internal_805619afb37eb571b7f547792038ff7238695b695601980d5ae751fa39b482e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ziekteverzuim.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_805619afb37eb571b7f547792038ff7238695b695601980d5ae751fa39b482e0->leave($__internal_805619afb37eb571b7f547792038ff7238695b695601980d5ae751fa39b482e0_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_058a677a5a48a6cb7aa670bb2fc041b3aa5ebeb755269d763255b8ab9adb71a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058a677a5a48a6cb7aa670bb2fc041b3aa5ebeb755269d763255b8ab9adb71a2->enter($__internal_058a677a5a48a6cb7aa670bb2fc041b3aa5ebeb755269d763255b8ab9adb71a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "title", array()), "html", null, true);
        echo " | Ziekteverzuim
";
        
        $__internal_058a677a5a48a6cb7aa670bb2fc041b3aa5ebeb755269d763255b8ab9adb71a2->leave($__internal_058a677a5a48a6cb7aa670bb2fc041b3aa5ebeb755269d763255b8ab9adb71a2_prof);

    }

    // line 9
    public function block_secondary($context, array $blocks = array())
    {
        $__internal_b549dc9d8d8889fdbac734a2c4de784f0e409cfb8cae83f5c2aef24399e69465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b549dc9d8d8889fdbac734a2c4de784f0e409cfb8cae83f5c2aef24399e69465->enter($__internal_b549dc9d8d8889fdbac734a2c4de784f0e409cfb8cae83f5c2aef24399e69465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondary"));

        // line 10
        echo "    ";
        $template_storage = $context['app']['storage'];
        $context['links'] =         $template_storage->getContent("blocks/handige-links-ziekteverzuim", array() );
        // line 11
        echo "    ";
        $template_storage = $context['app']['storage'];
        $context['social'] =         $template_storage->getContent("blocks/volg-ons-op-social-media", array() );
        // line 12
        echo "    <aside id=\"\" class=\"widget\">
        <h3 class=\"widget-title\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["links"]) ? $context["links"] : $this->getContext($context, "links")), "title", array()), "html", null, true);
        echo "</h3>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["links"]) ? $context["links"] : $this->getContext($context, "links")), "content", array()), "html", null, true);
        // line 15
        echo "</aside>
    <aside id=\"\" class=\"widget\">
        <h3 class=\"widget-title\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : $this->getContext($context, "social")), "title", array()), "html", null, true);
        echo "</h3>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : $this->getContext($context, "social")), "content", array()), "html", null, true);
        // line 19
        echo "</aside>
";
        
        $__internal_b549dc9d8d8889fdbac734a2c4de784f0e409cfb8cae83f5c2aef24399e69465->leave($__internal_b549dc9d8d8889fdbac734a2c4de784f0e409cfb8cae83f5c2aef24399e69465_prof);

    }

    public function getTemplateName()
    {
        return "ziekteverzuim.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  80 => 18,  77 => 17,  73 => 15,  71 => 14,  68 => 13,  65 => 12,  61 => 11,  57 => 10,  51 => 9,  41 => 5,  35 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'page.twig' %}

{# Page title #}
{% block title %}
    {{ record.title }} | Ziekteverzuim
{% endblock title %}

{# Secondary #}
{% block secondary %}
    {% setcontent links = 'blocks/handige-links-ziekteverzuim' %}
    {% setcontent social = 'blocks/volg-ons-op-social-media' %}
    <aside id=\"\" class=\"widget\">
        <h3 class=\"widget-title\">{{ links.title }}</h3>
        {{- links.content -}}
    </aside>
    <aside id=\"\" class=\"widget\">
        <h3 class=\"widget-title\">{{ social.title }}</h3>
        {{- social.content -}}
    </aside>
{% endblock secondary %}", "ziekteverzuim.twig", "theme://ziekteverzuim.twig");
    }
}
