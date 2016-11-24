<?php

/* @bolt/editcontent/_aside-live-editor.twig */
class __TwigTemplate_cb8b6a39541866d768f0f0a7e59ee005cf7d3723d7ed99ca0c9bd634bf5e9d3c extends Twig_Template
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
        $__internal_f8cf67e545b697ba48c2eaa8c8dc159aa431d275c13142b44d4f7f847a7c8bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8cf67e545b697ba48c2eaa8c8dc159aa431d275c13142b44d4f7f847a7c8bdf->enter($__internal_f8cf67e545b697ba48c2eaa8c8dc159aa431d275c13142b44d4f7f847a7c8bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_aside-live-editor.twig"));

        // line 1
        if (( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "liveeditor", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "liveeditor", array()))) {
            // line 2
            echo "<div class=\"btn-group hidden-xs\">
    <button type=\"button\" class=\"btn btn-secondary\" id=\"sidebar-live-editor-button\">
        <i class=\"fa fa-pencil\"></i> ";
            // line 4
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.live-edit");
            echo "
    </button>
</div>
";
        }
        
        $__internal_f8cf67e545b697ba48c2eaa8c8dc159aa431d275c13142b44d4f7f847a7c8bdf->leave($__internal_f8cf67e545b697ba48c2eaa8c8dc159aa431d275c13142b44d4f7f847a7c8bdf_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_aside-live-editor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if context.contenttype.liveeditor is not defined or context.contenttype.liveeditor %}{# don't show for viewless contenttypes. #}
<div class=\"btn-group hidden-xs\">
    <button type=\"button\" class=\"btn btn-secondary\" id=\"sidebar-live-editor-button\">
        <i class=\"fa fa-pencil\"></i> {{ __('general.phrase.live-edit') }}
    </button>
</div>
{% endif %}
", "@bolt/editcontent/_aside-live-editor.twig", "app://view/twig/editcontent/_aside-live-editor.twig");
    }
}
