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
        $__internal_1f91f097711beaedaa1718da8e13510baf274263c1673b010369e190d3cdbabf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f91f097711beaedaa1718da8e13510baf274263c1673b010369e190d3cdbabf->enter($__internal_1f91f097711beaedaa1718da8e13510baf274263c1673b010369e190d3cdbabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ziekteverzuim.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f91f097711beaedaa1718da8e13510baf274263c1673b010369e190d3cdbabf->leave($__internal_1f91f097711beaedaa1718da8e13510baf274263c1673b010369e190d3cdbabf_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_477b272cceabc43759ae7fe24489c2df6821442889d2e30c9e743ada01148c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477b272cceabc43759ae7fe24489c2df6821442889d2e30c9e743ada01148c30->enter($__internal_477b272cceabc43759ae7fe24489c2df6821442889d2e30c9e743ada01148c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "title", array()), "html", null, true);
        echo " | Ziekteverzuim
";
        
        $__internal_477b272cceabc43759ae7fe24489c2df6821442889d2e30c9e743ada01148c30->leave($__internal_477b272cceabc43759ae7fe24489c2df6821442889d2e30c9e743ada01148c30_prof);

    }

    // line 9
    public function block_secondary($context, array $blocks = array())
    {
        $__internal_2d128f053c37b9335daed5fa76d004ac83a007b985b117c3bc8ed874b42d6289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d128f053c37b9335daed5fa76d004ac83a007b985b117c3bc8ed874b42d6289->enter($__internal_2d128f053c37b9335daed5fa76d004ac83a007b985b117c3bc8ed874b42d6289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondary"));

        // line 10
        echo "    ";
        $template_storage = $context['app']['storage'];
        $context['contact'] =         $template_storage->getContent("blocks/contact-gegevens-ziekteverzuim", array() );
        // line 11
        echo "    ";
        $template_storage = $context['app']['storage'];
        $context['social'] =         $template_storage->getContent("blocks/volg-ons-op-social-media", array() );
        // line 12
        echo "    <aside id=\"\" class=\"widget\">
        <h3 class=\"widget-title\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "title", array()), "html", null, true);
        echo "</h3>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "content", array()), "html", null, true);
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
        
        $__internal_2d128f053c37b9335daed5fa76d004ac83a007b985b117c3bc8ed874b42d6289->leave($__internal_2d128f053c37b9335daed5fa76d004ac83a007b985b117c3bc8ed874b42d6289_prof);

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
    {% setcontent contact = 'blocks/contact-gegevens-ziekteverzuim' %}
    {% setcontent social = 'blocks/volg-ons-op-social-media' %}
    <aside id=\"\" class=\"widget\">
        <h3 class=\"widget-title\">{{ contact.title }}</h3>
        {{- contact.content -}}
    </aside>
    <aside id=\"\" class=\"widget\">
        <h3 class=\"widget-title\">{{ social.title }}</h3>
        {{- social.content -}}
    </aside>
{% endblock secondary %}", "ziekteverzuim.twig", "theme://ziekteverzuim.twig");
    }
}
