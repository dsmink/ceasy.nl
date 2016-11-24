<?php

/* @bolt/editcontent/_aside-preview.twig */
class __TwigTemplate_58ebcfa0cf96b761137eef895c2c7733b2fddcaf5f960f0bc89589868ab16a67 extends Twig_Template
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
        $__internal_87c597615c63a58c53a94767f8df3f912062ccb0b84afa78c3b815b3b35ecc52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c597615c63a58c53a94767f8df3f912062ccb0b84afa78c3b815b3b35ecc52->enter($__internal_87c597615c63a58c53a94767f8df3f912062ccb0b84afa78c3b815b3b35ecc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_aside-preview.twig"));

        // line 1
        if ( !(($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array()), false)) : (false))) {
            // line 2
            echo "<div class=\"btn-group\">
    ";
            // line 3
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "routes", array()), "get", array(0 => "preview"), "method")) {
                // line 4
                echo "        <button type=\"button\" class=\"btn btn-default\" id=\"sidebarpreviewbutton\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("preview", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "singular_slug", array()))), "html", null, true);
                echo "\">
            <i class=\"fa fa-external-link-square\"></i> ";
                // line 5
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.preview");
                echo "
        </button>
    ";
            } else {
                // line 8
                echo "        <button type=\"button\" class=\"btn btn-disabled\">
            <i class=\"fa fa-external-link-square\"></i> ";
                // line 9
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-preview");
                echo "
        </button>
    ";
            }
            // line 12
            echo "
    ";
            // line 13
            if ((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "status", array()) == "published") && $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "link", array(), "any", true, true))) {
                // line 14
                echo "        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu pull-right\" role=\"menu\">
            <li>
                <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "link", array()), "html", null, true);
                echo "\" target=\"_blank\">
                    <i class=\"fa fa-external-link-square\"></i> ";
                // line 22
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("View (saved version) on site");
                echo "
                </a>
            </li>
        </ul>
    ";
            }
            // line 27
            echo "</div>
";
        }
        
        $__internal_87c597615c63a58c53a94767f8df3f912062ccb0b84afa78c3b815b3b35ecc52->leave($__internal_87c597615c63a58c53a94767f8df3f912062ccb0b84afa78c3b815b3b35ecc52_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_aside-preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 27,  67 => 22,  63 => 21,  54 => 14,  52 => 13,  49 => 12,  43 => 9,  40 => 8,  34 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not context.contenttype.viewless|default(false) %}{# don't show for viewless contenttypes. #}
<div class=\"btn-group\">
    {% if app.routes.get('preview') %}
        <button type=\"button\" class=\"btn btn-default\" id=\"sidebarpreviewbutton\" data-url=\"{{ path('preview', {'contenttypeslug': context.contenttype.singular_slug}) }}\">
            <i class=\"fa fa-external-link-square\"></i> {{ __('general.phrase.preview') }}
        </button>
    {% else %}
        <button type=\"button\" class=\"btn btn-disabled\">
            <i class=\"fa fa-external-link-square\"></i> {{ __('general.phrase.no-preview') }}
        </button>
    {% endif %}

    {% if context.content.status == \"published\" and context.content.link is defined %}
        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu pull-right\" role=\"menu\">
            <li>
                <a href=\"{{ context.content.link }}\" target=\"_blank\">
                    <i class=\"fa fa-external-link-square\"></i> {{ __('View (saved version) on site') }}
                </a>
            </li>
        </ul>
    {% endif %}
</div>
{% endif %}
", "@bolt/editcontent/_aside-preview.twig", "app://view/twig/editcontent/_aside-preview.twig");
    }
}
