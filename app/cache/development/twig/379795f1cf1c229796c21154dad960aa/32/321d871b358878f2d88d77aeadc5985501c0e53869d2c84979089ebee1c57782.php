<?php

/* @bolt/overview/overview.twig */
class __TwigTemplate_09b8532a548aaaa365dda4327b58ef7377efa0611b5913350e2cd52b6f2675fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/overview/overview.twig", 6);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dc112ee7b1cc48bc0180b3de220a297202bd310ce0808b2707f4dbc7bdc0ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc112ee7b1cc48bc0180b3de220a297202bd310ce0808b2707f4dbc7bdc0ec6->enter($__internal_2dc112ee7b1cc48bc0180b3de220a297202bd310ce0808b2707f4dbc7bdc0ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/overview/overview.twig"));

        // line 3
        $context["__internal_3306d52c3eab08a48975a5a439362da5ebd8e3967ae451ad0bed0106e887cd87"] = $this->loadTemplate("@bolt/_sub/_record_list.twig", "@bolt/overview/overview.twig", 3);
        // line 4
        $context["panels"] = $this->loadTemplate("@bolt/_macro/_panels.twig", "@bolt/overview/overview.twig", 4);
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dc112ee7b1cc48bc0180b3de220a297202bd310ce0808b2707f4dbc7bdc0ec6->leave($__internal_2dc112ee7b1cc48bc0180b3de220a297202bd310ce0808b2707f4dbc7bdc0ec6_prof);

    }

    // line 8
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_b3f075013792fa2b80931fb23adcb9edbf44654a9b433043e75b4f6873f5a314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f075013792fa2b80931fb23adcb9edbf44654a9b433043e75b4f6873f5a314->enter($__internal_b3f075013792fa2b80931fb23adcb9edbf44654a9b433043e75b4f6873f5a314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo "Content/*";
        
        $__internal_b3f075013792fa2b80931fb23adcb9edbf44654a9b433043e75b4f6873f5a314->leave($__internal_b3f075013792fa2b80931fb23adcb9edbf44654a9b433043e75b4f6873f5a314_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_dec8103bad9519a5272ae68ed2083febc7201af69af82145fa696d8fd4180b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec8103bad9519a5272ae68ed2083febc7201af69af82145fa696d8fd4180b23->enter($__internal_dec8103bad9519a5272ae68ed2083febc7201af69af82145fa696d8fd4180b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.overview");
        
        $__internal_dec8103bad9519a5272ae68ed2083febc7201af69af82145fa696d8fd4180b23->leave($__internal_dec8103bad9519a5272ae68ed2083febc7201af69af82145fa696d8fd4180b23_prof);

    }

    // line 12
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_c563f8903423f5e616671d9168ead0ec8d55ae7ef8bd119231c63c383b7724a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c563f8903423f5e616671d9168ead0ec8d55ae7ef8bd119231c63c383b7724a5->enter($__internal_c563f8903423f5e616671d9168ead0ec8d55ae7ef8bd119231c63c383b7724a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array()), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "name", array())));
        echo "
    ";
        // line 14
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "filter", array())) {
            // line 15
            echo "        <small>(";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("filtered by <em>'%filter%'</em>", array("%filter%" => twig_join_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "filter", array()), ", ")));
            echo ")</small>
    ";
        }
        
        $__internal_c563f8903423f5e616671d9168ead0ec8d55ae7ef8bd119231c63c383b7724a5->leave($__internal_c563f8903423f5e616671d9168ead0ec8d55ae7ef8bd119231c63c383b7724a5_prof);

    }

    // line 20
    public function block_messages($context, array $blocks = array())
    {
        $__internal_4bfdc56b3dbdf198b6c1f05004427bd01e1f908990410e946bf70d11232b02d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfdc56b3dbdf198b6c1f05004427bd01e1f908990410e946bf70d11232b02d0->enter($__internal_4bfdc56b3dbdf198b6c1f05004427bd01e1f908990410e946bf70d11232b02d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        echo "";
        
        $__internal_4bfdc56b3dbdf198b6c1f05004427bd01e1f908990410e946bf70d11232b02d0->leave($__internal_4bfdc56b3dbdf198b6c1f05004427bd01e1f908990410e946bf70d11232b02d0_prof);

    }

    // line 22
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_b480959a7fea22ab5fad9c627aa3e7d2f8803ee9790b4ab5e6eab35ae72f3fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b480959a7fea22ab5fad9c627aa3e7d2f8803ee9790b4ab5e6eab35ae72f3fbc->enter($__internal_b480959a7fea22ab5fad9c627aa3e7d2f8803ee9790b4ab5e6eab35ae72f3fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 23
        echo "
    <div class=\"row\">
        <div class=\"col-md-8\">

            ";
        // line 27
        echo twig_include($this->env, $context, "@bolt/_sub/_messages.twig");
        echo "

            ";
        // line 29
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("overview_below_header", "backend");
        echo "

            ";
        // line 31
        echo $context["__internal_3306d52c3eab08a48975a5a439362da5ebd8e3967ae451ad0bed0106e887cd87"]->getrecord_list($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "multiplecontent", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "permissions", array()), "", "", twig_join_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "filter", array()), " "));
        echo "

            ";
        // line 33
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("overview_bottom", "backend");
        echo "

        </div>

        <aside class=\"col-md-4\">

            ";
        // line 39
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("overview_aside_top", "backend");
        echo "

            ";
        // line 41
        echo twig_include($this->env, $context, "@bolt/overview/_panel-actions_overview.twig");
        echo "

            ";
        // line 43
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("overview_aside_middle", "backend");
        echo "

            ";
        // line 45
        echo $context["panels"]->getlastmodified($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array()));
        echo "

            ";
        // line 47
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("overview_aside_bottom", "backend");
        echo "

        </aside>
    </div>

";
        
        $__internal_b480959a7fea22ab5fad9c627aa3e7d2f8803ee9790b4ab5e6eab35ae72f3fbc->leave($__internal_b480959a7fea22ab5fad9c627aa3e7d2f8803ee9790b4ab5e6eab35ae72f3fbc_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/overview/overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 47,  154 => 45,  149 => 43,  144 => 41,  139 => 39,  130 => 33,  125 => 31,  120 => 29,  115 => 27,  109 => 23,  103 => 22,  91 => 20,  80 => 15,  78 => 14,  73 => 13,  67 => 12,  55 => 10,  43 => 8,  36 => 6,  34 => 4,  32 => 3,  11 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Page: NavSecondary > Content ... > #}

{% from '@bolt/_sub/_record_list.twig' import record_list as list %}
{% import '@bolt/_macro/_panels.twig' as panels %}

{% extends '@bolt/_base/_page-nav.twig' %}

{% block page_nav 'Content/*' %}

{% block page_title __('general.phrase.overview') %}

{% block page_subtitle %}
    {{ __(['contenttypes', context.contenttype.slug, 'name', 'plural'], {DEFAULT: context.contenttype.name}) }}
    {% if context.filter %}
        <small>({{ __(\"filtered by <em>'%filter%'</em>\", {'%filter%': context.filter|join(', ') }) }})</small>
    {% endif %}
{% endblock %}

{# clear default messages, because we use them in a different spot, in this template #}
{% block messages \"\" %}

{% block page_main %}

    <div class=\"row\">
        <div class=\"col-md-8\">

            {{ include('@bolt/_sub/_messages.twig') }}

            {{ widgets('overview_below_header', 'backend') }}

            {{ list(context.contenttype, context.multiplecontent, context.permissions, '', '', context.filter|join(' ')) }}

            {{ widgets('overview_bottom', 'backend') }}

        </div>

        <aside class=\"col-md-4\">

            {{ widgets('overview_aside_top', 'backend') }}

            {{ include('@bolt/overview/_panel-actions_overview.twig') }}

            {{ widgets('overview_aside_middle', 'backend') }}

            {{ panels.lastmodified(context.contenttype.slug) }}

            {{ widgets('overview_aside_bottom', 'backend') }}

        </aside>
    </div>

{% endblock page_main %}
", "@bolt/overview/overview.twig", "app://view/twig/overview/overview.twig");
    }
}
