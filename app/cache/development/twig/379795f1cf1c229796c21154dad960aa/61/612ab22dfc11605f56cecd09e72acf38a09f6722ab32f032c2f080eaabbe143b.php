<?php

/* page.twig */
class __TwigTemplate_8485d8e7ef7df4ecb2d1af08dfdf5ef01012b812e17e0964ca4d377a831a13fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "page.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'primary' => array($this, 'block_primary'),
            'secondary' => array($this, 'block_secondary'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/_master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1414b54d9fa38504ac18314b86c783edce7af484915e9c7fc693c26ba1825ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1414b54d9fa38504ac18314b86c783edce7af484915e9c7fc693c26ba1825ad->enter($__internal_c1414b54d9fa38504ac18314b86c783edce7af484915e9c7fc693c26ba1825ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1414b54d9fa38504ac18314b86c783edce7af484915e9c7fc693c26ba1825ad->leave($__internal_c1414b54d9fa38504ac18314b86c783edce7af484915e9c7fc693c26ba1825ad_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fd35676e28d478c5d103c4deb8ddcb390417e3df1ad79373f4c73f1ba06e811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd35676e28d478c5d103c4deb8ddcb390417e3df1ad79373f4c73f1ba06e811->enter($__internal_9fd35676e28d478c5d103c4deb8ddcb390417e3df1ad79373f4c73f1ba06e811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_9fd35676e28d478c5d103c4deb8ddcb390417e3df1ad79373f4c73f1ba06e811->leave($__internal_9fd35676e28d478c5d103c4deb8ddcb390417e3df1ad79373f4c73f1ba06e811_prof);

    }

    // line 9
    public function block_primary($context, array $blocks = array())
    {
        $__internal_40be0bd2b917de6760135d2394234193dbf2155fc0ca663b6e12ed14bfc08295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40be0bd2b917de6760135d2394234193dbf2155fc0ca663b6e12ed14bfc08295->enter($__internal_40be0bd2b917de6760135d2394234193dbf2155fc0ca663b6e12ed14bfc08295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "primary"));

        // line 10
        echo "    <article class=\"post-content post-2 page type-page status-publish hentry\">
        <header class=\"entry-header\">
            <h1 class=\"entry-title\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "title", array()), "html", null, true);
        echo "</h1>
            <div class=\"entry-meta\"></div>
        </header>
        <div class=\"entry-content\">
            ";
        // line 16
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "teaser", array()))) {
            // line 17
            echo "                <strong>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "teaser", array()), "html", null, true);
            // line 19
            echo "</strong>
            ";
        }
        // line 21
        echo "        </div>
        <div class=\"entry-content\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "body", array()), "html", null, true);
        // line 24
        echo "</div>
        ";
        // line 25
        if ($this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "taxonomy", array(), "any", false, true), "forms", array(), "any", true, true)) {
            // line 26
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "taxonomy", array()), "forms", array()));
            foreach ($context['_seq'] as $context["name"] => $context["form"]) {
                // line 27
                echo "                ";
                $context["formname"] = twig_replace_filter($context["name"], array("/forms/" => ""));
                // line 28
                echo "                <div class=\"entry-content\">";
                // line 29
                echo call_user_func_array($this->env->getFunction('boltforms')->getCallable(), array((isset($context["formname"]) ? $context["formname"] : $this->getContext($context, "formname"))));
                // line 30
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        ";
        }
        // line 33
        echo "        <footer class=\"entry-footer\">";
        echo twig_include($this->env, $context, "partials/_social.twig");
        echo "</footer>
    </article>
";
        
        $__internal_40be0bd2b917de6760135d2394234193dbf2155fc0ca663b6e12ed14bfc08295->leave($__internal_40be0bd2b917de6760135d2394234193dbf2155fc0ca663b6e12ed14bfc08295_prof);

    }

    // line 38
    public function block_secondary($context, array $blocks = array())
    {
        $__internal_4a1200df31c16d8f298e14be27effdb2bb331f80cb5ae0f4cf2e86a316dedb1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1200df31c16d8f298e14be27effdb2bb331f80cb5ae0f4cf2e86a316dedb1a->enter($__internal_4a1200df31c16d8f298e14be27effdb2bb331f80cb5ae0f4cf2e86a316dedb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondary"));

        // line 39
        echo "    ";
        $template_storage = $context['app']['storage'];
        $context['links'] =         $template_storage->getContent("blocks/handige-links", array() );
        // line 40
        echo "    ";
        $template_storage = $context['app']['storage'];
        $context['social'] =         $template_storage->getContent("blocks/volg-ons-op-social-media", array() );
        // line 41
        echo "    <aside id=\"\" class=\"widget\">
        <h3 class=\"widget-title\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["links"]) ? $context["links"] : $this->getContext($context, "links")), "title", array()), "html", null, true);
        echo "</h3>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["links"]) ? $context["links"] : $this->getContext($context, "links")), "content", array()), "html", null, true);
        // line 44
        echo "</aside>
    <aside id=\"\" class=\"widget\">
        <h3 class=\"widget-title\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : $this->getContext($context, "social")), "title", array()), "html", null, true);
        echo "</h3>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : $this->getContext($context, "social")), "content", array()), "html", null, true);
        // line 48
        echo "</aside>
";
        
        $__internal_4a1200df31c16d8f298e14be27effdb2bb331f80cb5ae0f4cf2e86a316dedb1a->leave($__internal_4a1200df31c16d8f298e14be27effdb2bb331f80cb5ae0f4cf2e86a316dedb1a_prof);

    }

    public function getTemplateName()
    {
        return "page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 48,  151 => 47,  148 => 46,  144 => 44,  142 => 43,  139 => 42,  136 => 41,  132 => 40,  128 => 39,  122 => 38,  111 => 33,  108 => 32,  101 => 30,  99 => 29,  97 => 28,  94 => 27,  89 => 26,  87 => 25,  84 => 24,  82 => 23,  79 => 21,  75 => 19,  73 => 18,  71 => 17,  69 => 16,  62 => 12,  58 => 10,  52 => 9,  42 => 5,  36 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/_master.twig' %}

{# Page title #}
{% block title %}
    {{ record.title }}
{% endblock title %}

{# Primary #}
{% block primary %}
    <article class=\"post-content post-2 page type-page status-publish hentry\">
        <header class=\"entry-header\">
            <h1 class=\"entry-title\">{{ record.title }}</h1>
            <div class=\"entry-meta\"></div>
        </header>
        <div class=\"entry-content\">
            {% if record.teaser|length %}
                <strong>
                    {{- record.teaser -}}
                </strong>
            {% endif %}
        </div>
        <div class=\"entry-content\">
            {{- record.body -}}
        </div>
        {% if record.taxonomy.forms is defined %}
            {% for name,form in record.taxonomy.forms %}
                {% set formname = name|replace({ '/forms/':'' }) %}
                <div class=\"entry-content\">
                    {{- boltforms(formname) -}}
                </div>
            {% endfor %}
        {% endif %}
        <footer class=\"entry-footer\">{{- include( 'partials/_social.twig' ) -}}</footer>
    </article>
{% endblock primary %}

{# Secondary #}
{% block secondary %}
    {% setcontent links = 'blocks/handige-links' %}
    {% setcontent social = 'blocks/volg-ons-op-social-media' %}
    <aside id=\"\" class=\"widget\">
        <h3 class=\"widget-title\">{{ links.title }}</h3>
        {{- links.content -}}
    </aside>
    <aside id=\"\" class=\"widget\">
        <h3 class=\"widget-title\">{{ social.title }}</h3>
        {{- social.content -}}
    </aside>
{% endblock secondary %}", "page.twig", "theme://page.twig");
    }
}
