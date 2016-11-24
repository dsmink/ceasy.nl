<?php

/* splash.twig */
class __TwigTemplate_4b91d9a5345bdda2f2db0f5f360a0761368469a8190c26d09970cc4e06da706d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "splash.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'primary' => array($this, 'block_primary'),
            'splashitem' => array($this, 'block_splashitem'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/_master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f25c6df902f8242e39a70cf5347609387b4a35ba6c6f20fe44fe884ad471417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f25c6df902f8242e39a70cf5347609387b4a35ba6c6f20fe44fe884ad471417->enter($__internal_4f25c6df902f8242e39a70cf5347609387b4a35ba6c6f20fe44fe884ad471417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "splash.twig"));

        // line 4
        $template_storage = $context['app']['storage'];
        $context['itemsZ'] =         $template_storage->getContent("ziekteverzuim", array("limit" => 1), $pager, array("categories" => "splash") );
        // line 5
        $template_storage = $context['app']['storage'];
        $context['itemsB'] =         $template_storage->getContent("bemiddeling", array("limit" => 1), $pager, array("categories" => "splash") );
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f25c6df902f8242e39a70cf5347609387b4a35ba6c6f20fe44fe884ad471417->leave($__internal_4f25c6df902f8242e39a70cf5347609387b4a35ba6c6f20fe44fe884ad471417_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2de2b4f5e46d733a47a051cb08c197a6584631dd7470bca6fcd591c4a7b55e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de2b4f5e46d733a47a051cb08c197a6584631dd7470bca6fcd591c4a7b55e25->enter($__internal_2de2b4f5e46d733a47a051cb08c197a6584631dd7470bca6fcd591c4a7b55e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div id=\"primary\" class=\"col-md-12 content-area\">
        <main id=\"main\" class=\"site-main\" role=\"main\">";
        // line 13
        $this->displayBlock("primary", $context, $blocks);
        // line 14
        echo "</main>
    </div>";
        
        $__internal_2de2b4f5e46d733a47a051cb08c197a6584631dd7470bca6fcd591c4a7b55e25->leave($__internal_2de2b4f5e46d733a47a051cb08c197a6584631dd7470bca6fcd591c4a7b55e25_prof);

    }

    // line 19
    public function block_primary($context, array $blocks = array())
    {
        $__internal_589e7f9c7a0def130cef036c2943947d4794ea5be1699eb06a8b5b60c63a5c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589e7f9c7a0def130cef036c2943947d4794ea5be1699eb06a8b5b60c63a5c76->enter($__internal_589e7f9c7a0def130cef036c2943947d4794ea5be1699eb06a8b5b60c63a5c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "primary"));

        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["itemsZ"]) ? $context["itemsZ"] : $this->getContext($context, "itemsZ")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "        <div class=\"col-sm-6 col-xs-12\">";
            // line 23
            $this->displayBlock("splashitem", $context, $blocks);
            // line 24
            echo "</div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo " 

    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["itemsB"]) ? $context["itemsB"] : $this->getContext($context, "itemsB")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "        <div class=\"col-sm-6 col-xs-12\">";
            // line 29
            $this->displayBlock("splashitem", $context, $blocks);
            // line 30
            echo "</div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_589e7f9c7a0def130cef036c2943947d4794ea5be1699eb06a8b5b60c63a5c76->leave($__internal_589e7f9c7a0def130cef036c2943947d4794ea5be1699eb06a8b5b60c63a5c76_prof);

    }

    // line 35
    public function block_splashitem($context, array $blocks = array())
    {
        $__internal_5272c3123bd35b66d484e9f5cd9f8e314d2eb1020305343a0fd137391ad25c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5272c3123bd35b66d484e9f5cd9f8e314d2eb1020305343a0fd137391ad25c4d->enter($__internal_5272c3123bd35b66d484e9f5cd9f8e314d2eb1020305343a0fd137391ad25c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "splashitem"));

        // line 36
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title text-center\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title", array()), "html", null, true);
        echo "</h3>
        </div>
        ";
        // line 40
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "image", array(), "any", true, true)) {
            // line 41
            echo "            <div class=\"panel-body text-center\">
                <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "image", array()), 250, 250), "html", null, true);
            echo "\" style=\"display:inline-block; float: none;\">
            </div>
        ";
        }
        // line 45
        echo "        <div class=\"panel-body text-center\">
            <a class=\"btn btn-primary\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "contenttype", array()), "slug", array()) . "/") . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "slug", array())), "html", null, true);
        echo "\">
                ";
        // line 47
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "contenttype", array()), "name", array()) . " ") . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name", array())), "html", null, true);
        echo "
            </a>
        </div>
    </div>
";
        
        $__internal_5272c3123bd35b66d484e9f5cd9f8e314d2eb1020305343a0fd137391ad25c4d->leave($__internal_5272c3123bd35b66d484e9f5cd9f8e314d2eb1020305343a0fd137391ad25c4d_prof);

    }

    public function getTemplateName()
    {
        return "splash.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 47,  178 => 46,  175 => 45,  169 => 42,  166 => 41,  164 => 40,  159 => 38,  155 => 36,  149 => 35,  129 => 30,  127 => 29,  125 => 28,  108 => 27,  104 => 25,  89 => 24,  87 => 23,  85 => 22,  68 => 21,  62 => 19,  54 => 14,  52 => 13,  49 => 11,  43 => 10,  36 => 1,  33 => 5,  30 => 4,  11 => 1,);
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

{# Set Content #}
{%- setcontent itemsZ = 'ziekteverzuim' where { categories : 'splash' } limit 1 -%}
{%- setcontent itemsB = 'bemiddeling' where { categories : 'splash' } limit 1 -%}

{#where { categories = 'splash'}#}

{# Body #}
{% block body -%}
    <div id=\"primary\" class=\"col-md-12 content-area\">
        <main id=\"main\" class=\"site-main\" role=\"main\">
            {{- block( 'primary' ) -}}
        </main>
    </div>
{%- endblock body %}

{# Primary #}
{% block primary -%}

    {% for item in itemsZ %}
        <div class=\"col-sm-6 col-xs-12\">
            {{- block( 'splashitem' ) -}}
        </div>
    {% endfor %} 

    {% for item in itemsB %}
        <div class=\"col-sm-6 col-xs-12\">
            {{- block( 'splashitem' ) -}}
        </div>
    {% endfor %}
{%- endblock primary %}

{# Splashitem #}
{% block splashitem %}
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title text-center\">{{- item.title -}}</h3>
        </div>
        {% if item.image is defined %}
            <div class=\"panel-body text-center\">
                <img src=\"{{- thumbnail(item.image, 250, 250) -}}\" style=\"display:inline-block; float: none;\">
            </div>
        {% endif %}
        <div class=\"panel-body text-center\">
            <a class=\"btn btn-primary\" href=\"{{ item.contenttype.slug ~ '/' ~ item.slug }}\">
                {{ item.contenttype.name ~ ' ' ~ item.name }}
            </a>
        </div>
    </div>
{% endblock splashitem %}", "splash.twig", "theme://splash.twig");
    }
}
