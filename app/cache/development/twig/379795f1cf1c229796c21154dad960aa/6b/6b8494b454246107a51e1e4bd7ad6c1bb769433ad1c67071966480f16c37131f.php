<?php

/* bemiddeling.twig */
class __TwigTemplate_d075939768d20cc3b83298c2b98dbb57315e194f28f0e6a12df3c6d9abd6076c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("page.twig", "bemiddeling.twig", 1);
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
        $__internal_a997b90307bc4d100b56ead635a945ff9d975f7af02a31270269f43606efedff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a997b90307bc4d100b56ead635a945ff9d975f7af02a31270269f43606efedff->enter($__internal_a997b90307bc4d100b56ead635a945ff9d975f7af02a31270269f43606efedff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bemiddeling.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a997b90307bc4d100b56ead635a945ff9d975f7af02a31270269f43606efedff->leave($__internal_a997b90307bc4d100b56ead635a945ff9d975f7af02a31270269f43606efedff_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_415991a0e4b95089cd2be32dbe62f22ddc29f44e530b984b25ae3938bd12a868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415991a0e4b95089cd2be32dbe62f22ddc29f44e530b984b25ae3938bd12a868->enter($__internal_415991a0e4b95089cd2be32dbe62f22ddc29f44e530b984b25ae3938bd12a868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "title", array()), "html", null, true);
        echo " | Bemiddeling
";
        
        $__internal_415991a0e4b95089cd2be32dbe62f22ddc29f44e530b984b25ae3938bd12a868->leave($__internal_415991a0e4b95089cd2be32dbe62f22ddc29f44e530b984b25ae3938bd12a868_prof);

    }

    // line 9
    public function block_secondary($context, array $blocks = array())
    {
        $__internal_085e4318d2f85b3518506fc4f126257acfe3237ac0dffc96499acf02e5e02ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085e4318d2f85b3518506fc4f126257acfe3237ac0dffc96499acf02e5e02ad9->enter($__internal_085e4318d2f85b3518506fc4f126257acfe3237ac0dffc96499acf02e5e02ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondary"));

        // line 10
        echo "    ";
        $template_storage = $context['app']['storage'];
        $context['links'] =         $template_storage->getContent("blocks/handige-links-bemiddeling", array() );
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
        
        $__internal_085e4318d2f85b3518506fc4f126257acfe3237ac0dffc96499acf02e5e02ad9->leave($__internal_085e4318d2f85b3518506fc4f126257acfe3237ac0dffc96499acf02e5e02ad9_prof);

    }

    public function getTemplateName()
    {
        return "bemiddeling.twig";
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
    {{ record.title }} | Bemiddeling
{% endblock title %}

{# Secondary #}
{% block secondary %}
    {% setcontent links = 'blocks/handige-links-bemiddeling' %}
    {% setcontent social = 'blocks/volg-ons-op-social-media' %}
    <aside id=\"\" class=\"widget\">
        <h3 class=\"widget-title\">{{ links.title }}</h3>
        {{- links.content -}}
    </aside>
    <aside id=\"\" class=\"widget\">
        <h3 class=\"widget-title\">{{ social.title }}</h3>
        {{- social.content -}}
    </aside>
{% endblock secondary %}", "bemiddeling.twig", "theme://bemiddeling.twig");
    }
}
