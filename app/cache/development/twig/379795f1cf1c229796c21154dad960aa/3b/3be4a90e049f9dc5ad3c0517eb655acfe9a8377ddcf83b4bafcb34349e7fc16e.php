<?php

/* @bolt/editcontent/_live-editor.twig */
class __TwigTemplate_67d2ef66901483bb046803bc0d3f0482ea369e29919f51383f53ffc200550c20 extends Twig_Template
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
        $__internal_3297e2cdd14ecaf168bd0fd0d346bbba4ac187c318c87e49ad2a350be7da3b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3297e2cdd14ecaf168bd0fd0d346bbba4ac187c318c87e49ad2a350be7da3b7e->enter($__internal_3297e2cdd14ecaf168bd0fd0d346bbba4ac187c318c87e49ad2a350be7da3b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_live-editor.twig"));

        // line 1
        if (( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "liveeditor", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "liveeditor", array()))) {
            // line 2
            echo "<div class=\"live-editor\">
    <iframe id=\"live-editor-iframe\" name=\"live-editor-iframe\"></iframe>
</div>
";
        }
        
        $__internal_3297e2cdd14ecaf168bd0fd0d346bbba4ac187c318c87e49ad2a350be7da3b7e->leave($__internal_3297e2cdd14ecaf168bd0fd0d346bbba4ac187c318c87e49ad2a350be7da3b7e_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_live-editor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
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
<div class=\"live-editor\">
    <iframe id=\"live-editor-iframe\" name=\"live-editor-iframe\"></iframe>
</div>
{% endif %}
", "@bolt/editcontent/_live-editor.twig", "app://view/twig/editcontent/_live-editor.twig");
    }
}
