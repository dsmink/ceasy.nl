<?php

/* @bolt/editcontent/_aside.twig */
class __TwigTemplate_5a79d3c021f10088949e2123a6ee3fd8fc664aeb6ca57bfa712f9b0fb1760b31 extends Twig_Template
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
        $__internal_9ba9b54ff1fa1465657731583a91fee618d9d51d24e7f63308c91e99b876b7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba9b54ff1fa1465657731583a91fee618d9d51d24e7f63308c91e99b876b7e7->enter($__internal_9ba9b54ff1fa1465657731583a91fee618d9d51d24e7f63308c91e99b876b7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_aside.twig"));

        // line 1
        $context["panels"] = $this->loadTemplate("@bolt/_macro/_panels.twig", "@bolt/editcontent/_aside.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("editcontent_aside_top", "backend");
        echo "

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <i class=\"fa fa-cog fa-fw\"></i> ";
        // line 7
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.actions-one", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array())));
        echo "
    </div>

    <div class=\"panel-body\">
        ";
        // line 11
        echo twig_include($this->env, $context, "@bolt/editcontent/_aside-save.twig");
        echo "
        ";
        // line 12
        echo twig_include($this->env, $context, "@bolt/editcontent/_aside-live-editor.twig");
        echo "
        ";
        // line 13
        echo twig_include($this->env, $context, "@bolt/editcontent/_aside-preview.twig");
        echo "
        ";
        // line 14
        echo twig_include($this->env, $context, "@bolt/editcontent/_aside-status.twig");
        echo "
        ";
        // line 15
        if (($this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed("delete", $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array())) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "id", array())))) {
            // line 16
            echo "            ";
            echo twig_include($this->env, $context, "@bolt/editcontent/_aside-delete.twig");
            echo "
        ";
        }
        // line 18
        echo "    </div>
</div>

";
        // line 21
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("editcontent_aside_middle", "backend");
        echo "

";
        // line 23
        echo $context["panels"]->getchanges($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array()), (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "id", array()), null)) : (null)));
        echo "

";
        // line 25
        echo $context["panels"]->getlastmodified($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array()), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "id", array()));
        echo "

";
        // line 27
        echo $context["panels"]->getstack(5);
        echo "

";
        // line 29
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("editcontent_aside_bottom", "backend");
        echo "
";
        
        $__internal_9ba9b54ff1fa1465657731583a91fee618d9d51d24e7f63308c91e99b876b7e7->leave($__internal_9ba9b54ff1fa1465657731583a91fee618d9d51d24e7f63308c91e99b876b7e7_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  85 => 27,  80 => 25,  75 => 23,  70 => 21,  65 => 18,  59 => 16,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  34 => 7,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@bolt/_macro/_panels.twig' as panels %}

{{ widgets('editcontent_aside_top', 'backend') }}

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <i class=\"fa fa-cog fa-fw\"></i> {{ __('contenttypes.generic.actions-one',{'%contenttype%': context.contenttype.slug}) }}
    </div>

    <div class=\"panel-body\">
        {{ include('@bolt/editcontent/_aside-save.twig') }}
        {{ include('@bolt/editcontent/_aside-live-editor.twig') }}
        {{ include('@bolt/editcontent/_aside-preview.twig') }}
        {{ include('@bolt/editcontent/_aside-status.twig') }}
        {% if isallowed('delete', context.contenttype) and context.content.id is not empty %}
            {{ include('@bolt/editcontent/_aside-delete.twig') }}
        {% endif %}
    </div>
</div>

{{ widgets('editcontent_aside_middle', 'backend') }}

{{ panels.changes(context.contenttype.slug, context.content.id|default(null)) }}

{{ panels.lastmodified(context.contenttype.slug, context.content.id) }}

{{ panels.stack(5) }}

{{ widgets('editcontent_aside_bottom', 'backend') }}
", "@bolt/editcontent/_aside.twig", "app://view/twig/editcontent/_aside.twig");
    }
}
