<?php

/* @bolt/editcontent/_aside-delete.twig */
class __TwigTemplate_a6493daee63b22ee7416dcfb554b507a3068d8cc628bc472957f4a1d140bac4f extends Twig_Template
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
        $__internal_a9a03d056e44184a8d84550146e009b9150344cd30497851c8dd92a482629e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a03d056e44184a8d84550146e009b9150344cd30497851c8dd92a482629e95->enter($__internal_a9a03d056e44184a8d84550146e009b9150344cd30497851c8dd92a482629e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_aside-delete.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("editcontent.delete", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Are you sure you wish to delete this record? There is no undo.")), "html", null, true);
        echo "

<div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-silent-danger\" id=\"sidebardeletebutton\">
        <i class=\"fa fa-trash\"></i> ";
        // line 5
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.delete", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array())));
        echo "
    </button>

</div>
";
        
        $__internal_a9a03d056e44184a8d84550146e009b9150344cd30497851c8dd92a482629e95->leave($__internal_a9a03d056e44184a8d84550146e009b9150344cd30497851c8dd92a482629e95_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_aside-delete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ data('editcontent.delete', __('Are you sure you wish to delete this record? There is no undo.')) }}

<div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-silent-danger\" id=\"sidebardeletebutton\">
        <i class=\"fa fa-trash\"></i> {{ __('contenttypes.generic.delete', {'%contenttype%': context.contenttype.slug}) }}
    </button>

</div>
", "@bolt/editcontent/_aside-delete.twig", "app://view/twig/editcontent/_aside-delete.twig");
    }
}
