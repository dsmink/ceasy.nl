<?php

/* error404.twig */
class __TwigTemplate_53240ccc70e62d3bcada5dc0ebdfe44573343da6b618df1e0df882c310aedba8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("/page.twig", "error404.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'primary' => array($this, 'block_primary'),
            'secondary' => array($this, 'block_secondary'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d840f8c93502efe3192a2c0a36f1f814be3d68fbae63c36336c07c931c0b433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d840f8c93502efe3192a2c0a36f1f814be3d68fbae63c36336c07c931c0b433->enter($__internal_9d840f8c93502efe3192a2c0a36f1f814be3d68fbae63c36336c07c931c0b433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "error404.twig"));

        // line 4
        $template_storage = $context['app']['storage'];
        $context['block'] =         $template_storage->getContent("/block/pagina-niet-gevonden", array() );
        // line 5
        $template_storage = $context['app']['storage'];
        $context['social'] =         $template_storage->getContent("blocks/volg-ons-op-social-media", array() );
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d840f8c93502efe3192a2c0a36f1f814be3d68fbae63c36336c07c931c0b433->leave($__internal_9d840f8c93502efe3192a2c0a36f1f814be3d68fbae63c36336c07c931c0b433_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4d221618aaa30335dcf79d6e8cbe7e37fc67d9400a43326b0c6a5c462f10cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d221618aaa30335dcf79d6e8cbe7e37fc67d9400a43326b0c6a5c462f10cc7->enter($__internal_c4d221618aaa30335dcf79d6e8cbe7e37fc67d9400a43326b0c6a5c462f10cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_c4d221618aaa30335dcf79d6e8cbe7e37fc67d9400a43326b0c6a5c462f10cc7->leave($__internal_c4d221618aaa30335dcf79d6e8cbe7e37fc67d9400a43326b0c6a5c462f10cc7_prof);

    }

    // line 12
    public function block_primary($context, array $blocks = array())
    {
        $__internal_3c72f9f526b1568784cc23682198db0c48b2c0b572b7779819513d02b0b0932d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c72f9f526b1568784cc23682198db0c48b2c0b572b7779819513d02b0b0932d->enter($__internal_3c72f9f526b1568784cc23682198db0c48b2c0b572b7779819513d02b0b0932d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "primary"));

        // line 13
        echo "    <article class=\"post-content post-2 page type-page status-publish hentry\">
        <header class=\"entry-header\">
            <h1 class=\"entry-title\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "title", array()), "html", null, true);
        echo "</h1>
            <div class=\"entry-meta\"></div>
        </header>
        <div class=\"entry-content\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "content", array()), "html", null, true);
        // line 20
        echo "</div>
        <footer class=\"entry-footer\">";
        // line 21
        echo twig_include($this->env, $context, "partials/_social.twig");
        echo "</footer>
    </article>
";
        
        $__internal_3c72f9f526b1568784cc23682198db0c48b2c0b572b7779819513d02b0b0932d->leave($__internal_3c72f9f526b1568784cc23682198db0c48b2c0b572b7779819513d02b0b0932d_prof);

    }

    // line 26
    public function block_secondary($context, array $blocks = array())
    {
        $__internal_a54f0b65f29433db751c619797341b7f53ee8823b5d7583c87e0efee128c50a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54f0b65f29433db751c619797341b7f53ee8823b5d7583c87e0efee128c50a4->enter($__internal_a54f0b65f29433db751c619797341b7f53ee8823b5d7583c87e0efee128c50a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondary"));

        // line 27
        echo "    <aside id=\"\" class=\"widget\">
        <h3 class=\"widget-title\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : $this->getContext($context, "social")), "title", array()), "html", null, true);
        echo "</h3>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : $this->getContext($context, "social")), "content", array()), "html", null, true);
        // line 30
        echo "</aside>
";
        
        $__internal_a54f0b65f29433db751c619797341b7f53ee8823b5d7583c87e0efee128c50a4->leave($__internal_a54f0b65f29433db751c619797341b7f53ee8823b5d7583c87e0efee128c50a4_prof);

    }

    public function getTemplateName()
    {
        return "error404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 30,  102 => 29,  99 => 28,  96 => 27,  90 => 26,  80 => 21,  77 => 20,  75 => 19,  69 => 15,  65 => 13,  59 => 12,  49 => 8,  43 => 7,  36 => 1,  33 => 5,  30 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '/page.twig' %}

{# Set content #}
{% setcontent block = '/block/pagina-niet-gevonden' %}
{% setcontent social = 'blocks/volg-ons-op-social-media' %}

{% block title %}
    {{ block.title }}
{% endblock title %}

{# Primary #}
{% block primary %}
    <article class=\"post-content post-2 page type-page status-publish hentry\">
        <header class=\"entry-header\">
            <h1 class=\"entry-title\">{{ block.title }}</h1>
            <div class=\"entry-meta\"></div>
        </header>
        <div class=\"entry-content\">
            {{- block.content -}}
        </div>
        <footer class=\"entry-footer\">{{- include( 'partials/_social.twig' ) -}}</footer>
    </article>
{% endblock primary %}

{# Secondary #}
{% block secondary %}
    <aside id=\"\" class=\"widget\">
        <h3 class=\"widget-title\">{{ social.title }}</h3>
        {{- social.content -}}
    </aside>
{% endblock secondary %}", "error404.twig", "theme://error404.twig");
    }
}
