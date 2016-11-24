<?php

/* @bolt/editcontent/_aside-save.twig */
class __TwigTemplate_4edbf555e4f53129f1a1f8f48ae6bb73b6651092593fbeaaba5da8b2dd815ecc extends Twig_Template
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
        $__internal_2c74c844db96f82e31abe7d64f031227ef2bc03611152216996799825cdf27e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c74c844db96f82e31abe7d64f031227ef2bc03611152216996799825cdf27e0->enter($__internal_2c74c844db96f82e31abe7d64f031227ef2bc03611152216996799825cdf27e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_aside-save.twig"));

        // line 1
        echo "<div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-primary\" id=\"sidebarsavecontinuebutton\">
        <i class=\"fa fa-flag\"></i> ";
        // line 3
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.save", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array())));
        echo "
    </button>

    <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
        <span class=\"sr-only\">Toggle Dropdown</span>
    </button>

    <ul class=\"dropdown-menu\" role=\"menu\">
        <li>
            <button type=\"submit\" class=\"btn btn-link\" id=\"sidebarsavebutton\">
                <i class=\"fa fa-fw fa-flag\"></i> ";
        // line 14
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.save-and-return-overview");
        echo "
            </button>
        </li>

        <li>
            <button type=\"submit\" class=\"btn btn-link\" id=\"sidebarsavenewbutton\">
                <i class=\"fa fa-fw fa-flag\"></i> ";
        // line 20
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.save-and-create-new-record");
        echo "
            </button>
        </li>
    </ul>
</div>
";
        
        $__internal_2c74c844db96f82e31abe7d64f031227ef2bc03611152216996799825cdf27e0->leave($__internal_2c74c844db96f82e31abe7d64f031227ef2bc03611152216996799825cdf27e0_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_aside-save.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  40 => 14,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-primary\" id=\"sidebarsavecontinuebutton\">
        <i class=\"fa fa-flag\"></i> {{ __('contenttypes.generic.save', {'%contenttype%': context.contenttype.slug}) }}
    </button>

    <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
        <span class=\"sr-only\">Toggle Dropdown</span>
    </button>

    <ul class=\"dropdown-menu\" role=\"menu\">
        <li>
            <button type=\"submit\" class=\"btn btn-link\" id=\"sidebarsavebutton\">
                <i class=\"fa fa-fw fa-flag\"></i> {{ __('general.phrase.save-and-return-overview') }}
            </button>
        </li>

        <li>
            <button type=\"submit\" class=\"btn btn-link\" id=\"sidebarsavenewbutton\">
                <i class=\"fa fa-fw fa-flag\"></i> {{ __('general.phrase.save-and-create-new-record') }}
            </button>
        </li>
    </ul>
</div>
", "@bolt/editcontent/_aside-save.twig", "app://view/twig/editcontent/_aside-save.twig");
    }
}
