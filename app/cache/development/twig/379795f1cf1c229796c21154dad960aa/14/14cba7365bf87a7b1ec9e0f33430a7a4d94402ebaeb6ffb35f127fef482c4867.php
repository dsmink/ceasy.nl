<?php

/* @bolt/editcontent/_aside-status.twig */
class __TwigTemplate_ecceae08abd56bbf7d891eaf788cc5dc6a450db847e3bd2e392b8b02492620a4 extends Twig_Template
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
        $__internal_485d49991a2edeaa1e72f95e4db44e67a9960a4902e9e7221b74bd07b553aa6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485d49991a2edeaa1e72f95e4db44e67a9960a4902e9e7221b74bd07b553aa6c->enter($__internal_485d49991a2edeaa1e72f95e4db44e67a9960a4902e9e7221b74bd07b553aa6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_aside-status.twig"));

        // line 1
        $context["__internal_7835589585fcc79d2a33223ea9cb0f056a3db770b8b9827d5a5c3ecbaf428585"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/editcontent/_aside-status.twig", 1);
        // line 2
        echo "
<p>
    ";
        // line 4
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Current (saved) status:");
        echo "
    <a href=\"#statusselect\" id=\"lastsavedstatus\" title=\"";
        // line 5
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.change-current-status");
        echo "\">
        <strong>
            <i class=\"fa fa-circle status-";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "status", array()), $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.none"))) : ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.none"))), "html", null, true);
        echo "\"></i>
            ";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : null), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "status", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : null), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "status", array()), array(), "array"), $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.none"))) : ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.none"))), "html", null, true);
        echo "
        </strong>
    </a>
</p>

<p class=\"lastsaved\">
    ";
        // line 14
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "id", array()))) {
            // line 15
            echo "    ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.saved-on-colon");
            echo " <strong>";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->localeDateTime($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "datechanged", array()), "%c");
            echo "</strong>
    <small>(";
            // line 16
            echo $context["__internal_7835589585fcc79d2a33223ea9cb0f056a3db770b8b9827d5a5c3ecbaf428585"]->getbuic_moment($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "datechanged", array()));
            echo ")</small>
";
        } else {
            // line 18
            echo "    ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.not-saved-yet", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array())));
            echo "
";
        }
        // line 20
        echo "</p>
";
        
        $__internal_485d49991a2edeaa1e72f95e4db44e67a9960a4902e9e7221b74bd07b553aa6c->leave($__internal_485d49991a2edeaa1e72f95e4db44e67a9960a4902e9e7221b74bd07b553aa6c_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_aside-status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  64 => 18,  59 => 16,  52 => 15,  50 => 14,  41 => 8,  37 => 7,  32 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@bolt/_buic/_moment.twig' import buic_moment %}

<p>
    {{ __(\"Current (saved) status:\") }}
    <a href=\"#statusselect\" id=\"lastsavedstatus\" title=\"{{ __('general.phrase.change-current-status') }}\">
        <strong>
            <i class=\"fa fa-circle status-{{ context.content.status|default(__('general.phrase.none')) }}\"></i>
            {{ status_names[context.content.status]|default(__('general.phrase.none')) }}
        </strong>
    </a>
</p>

<p class=\"lastsaved\">
    {% if context.content.id is not empty %}
    {{ __('general.phrase.saved-on-colon') }} <strong>{{ context.content.datechanged|localedatetime(\"%c\") }}</strong>
    <small>({{ buic_moment(context.content.datechanged) }})</small>
{% else %}
    {{ __('contenttypes.generic.not-saved-yet', {'%contenttype%': context.contenttype.slug}) }}
{% endif %}
</p>
", "@bolt/editcontent/_aside-status.twig", "app://view/twig/editcontent/_aside-status.twig");
    }
}
