<?php

/* @bolt/editcontent/_buttons.twig */
class __TwigTemplate_fc9e7b75212dc79c0ee950f4e9ea586cf5752f1bb79c2ffe71e97d7c24766fee extends Twig_Template
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
        $__internal_fcf02339f68fb6d451faa925af69413840ca31a5c108ad4d0f891cc0123a05d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf02339f68fb6d451faa925af69413840ca31a5c108ad4d0f891cc0123a05d7->enter($__internal_fcf02339f68fb6d451faa925af69413840ca31a5c108ad4d0f891cc0123a05d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_buttons.twig"));

        // line 1
        $context["__internal_f7cf34e509c3f00f23007821f45b61f0db701241852df1648ae1bb95bf46309f"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/editcontent/_buttons.twig", 1);
        // line 2
        echo "
<div class=\"form-group hidden-xs\">
    <div class=\"col-xs-12\">

        ";
        // line 7
        echo "        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-primary\" id=\"savecontinuebutton\">
                <i class=\"fa fa-fw fa-flag\"></i> ";
        // line 9
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.save", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array())));
        echo "
            </button>
            ";
        // line 12
        echo "            <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
                <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li>
                    <button type=\"submit\" class=\"btn btn-link\" id=\"savebutton\">
                        <i class=\"fa fa-fw fa-flag\"></i> ";
        // line 19
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.save-and-return-overview");
        echo "
                    </button>
                </li>
                <li>
                    <button type=\"submit\" class=\"btn btn-link\" id=\"savenewbutton\">
                        <i class=\"fa fa-fw fa-flag\"></i> ";
        // line 24
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.save-and-create-new-record");
        echo "
                    </button>
                </li>
            </ul>
        </div>

        ";
        // line 31
        echo "        ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "liveeditor", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "liveeditor", array()))) {
            // line 32
            echo "            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-secondary\" id=\"live-editor-button\">
                    <i class=\"fa fa-pencil\"></i> ";
            // line 34
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.live-edit");
            echo "
                </button>
            </div>
        ";
        }
        // line 38
        echo "
        ";
        // line 40
        echo "        ";
        if ( !(($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array()), false)) : (false))) {
            // line 41
            echo "            <div class=\"btn-group\">
                ";
            // line 42
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "routes", array()), "get", array(0 => "preview"), "method")) {
                // line 43
                echo "                    <button type=\"button\" class=\"btn btn-default\" id=\"previewbutton\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("preview", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "singular_slug", array()))), "html", null, true);
                echo "\">
                        <i class=\"fa fa-external-link-square\"></i> ";
                // line 44
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.preview");
                echo "
                    </button>
                ";
            } else {
                // line 47
                echo "                    <button type=\"button\" class=\"btn btn-disabled\">
                        <i class=\"fa fa-external-link-square\"></i> ";
                // line 48
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-preview");
                echo "
                    </button>
                ";
            }
            // line 51
            echo "
                ";
            // line 53
            echo "                ";
            if ((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "status", array()) == "published") && $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "link", array(), "any", true, true))) {
                // line 54
                echo "                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "link", array()), "html", null, true);
                echo "\" target=\"_blank\">
                                <i class=\"fa fa-external-link-square\"></i> ";
                // line 61
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("View (saved version) on site");
                echo "
                            </a>
                        </li>
                    </ul>
                ";
            }
            // line 66
            echo "            </div>
        ";
        }
        // line 68
        echo "
        ";
        // line 70
        echo "        <p class=\"lastsaved form-control-static\">
            ";
        // line 71
        if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "id", array()) != 0)) {
            // line 72
            echo "                ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.saved-on-colon");
            echo "
                <strong>";
            // line 73
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->localeDateTime($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "datechanged", array()), "%c");
            echo "</strong>
                <small>(";
            // line 74
            echo $context["__internal_f7cf34e509c3f00f23007821f45b61f0db701241852df1648ae1bb95bf46309f"]->getbuic_moment($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "content", array()), "datechanged", array()));
            echo ")</small>
            ";
        } else {
            // line 76
            echo "                ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.not-saved-yet", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "contenttype", array()), "slug", array())));
            echo "
            ";
        }
        // line 78
        echo "        </p>

    </div>

</div>
";
        
        $__internal_fcf02339f68fb6d451faa925af69413840ca31a5c108ad4d0f891cc0123a05d7->leave($__internal_fcf02339f68fb6d451faa925af69413840ca31a5c108ad4d0f891cc0123a05d7_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 78,  162 => 76,  157 => 74,  153 => 73,  148 => 72,  146 => 71,  143 => 70,  140 => 68,  136 => 66,  128 => 61,  124 => 60,  116 => 54,  113 => 53,  110 => 51,  104 => 48,  101 => 47,  95 => 44,  90 => 43,  88 => 42,  85 => 41,  82 => 40,  79 => 38,  72 => 34,  68 => 32,  65 => 31,  56 => 24,  48 => 19,  39 => 12,  34 => 9,  30 => 7,  24 => 2,  22 => 1,);
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

<div class=\"form-group hidden-xs\">
    <div class=\"col-xs-12\">

        {# Save Contentype #}
        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-primary\" id=\"savecontinuebutton\">
                <i class=\"fa fa-fw fa-flag\"></i> {{ __('contenttypes.generic.save', {'%contenttype%': context.contenttype.slug}) }}
            </button>
            {# Dropdown #}
            <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
                <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li>
                    <button type=\"submit\" class=\"btn btn-link\" id=\"savebutton\">
                        <i class=\"fa fa-fw fa-flag\"></i> {{ __('general.phrase.save-and-return-overview') }}
                    </button>
                </li>
                <li>
                    <button type=\"submit\" class=\"btn btn-link\" id=\"savenewbutton\">
                        <i class=\"fa fa-fw fa-flag\"></i> {{ __('general.phrase.save-and-create-new-record') }}
                    </button>
                </li>
            </ul>
        </div>

        {# Live Edit #}
        {% if context.contenttype.liveeditor is not defined or context.contenttype.liveeditor %}
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-secondary\" id=\"live-editor-button\">
                    <i class=\"fa fa-pencil\"></i> {{ __('general.phrase.live-edit') }}
                </button>
            </div>
        {% endif %}

        {# Preview (Don't show for viewless contenttypes.) #}
        {% if not context.contenttype.viewless|default(false) %}
            <div class=\"btn-group\">
                {% if app.routes.get('preview') %}
                    <button type=\"button\" class=\"btn btn-default\" id=\"previewbutton\" data-url=\"{{ path('preview', {'contenttypeslug': context.contenttype.singular_slug}) }}\">
                        <i class=\"fa fa-external-link-square\"></i> {{ __('general.phrase.preview') }}
                    </button>
                {% else %}
                    <button type=\"button\" class=\"btn btn-disabled\">
                        <i class=\"fa fa-external-link-square\"></i> {{ __('general.phrase.no-preview') }}
                    </button>
                {% endif %}

                {# Dropdown #}
                {% if context.content.status == \"published\" and context.content.link is defined %}
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            <a href=\"{{ context.content.link }}\" target=\"_blank\">
                                <i class=\"fa fa-external-link-square\"></i> {{ __('View (saved version) on site') }}
                            </a>
                        </li>
                    </ul>
                {% endif %}
            </div>
        {% endif %}

        {# Last saved #}
        <p class=\"lastsaved form-control-static\">
            {% if context.content.id != 0 %}
                {{ __('general.phrase.saved-on-colon') }}
                <strong>{{ context.content.datechanged|localedatetime(\"%c\") }}</strong>
                <small>({{ buic_moment(context.content.datechanged) }})</small>
            {% else %}
                {{ __('contenttypes.generic.not-saved-yet', {'%contenttype%': context.contenttype.slug}) }}
            {% endif %}
        </p>

    </div>

</div>
", "@bolt/editcontent/_buttons.twig", "app://view/twig/editcontent/_buttons.twig");
    }
}
