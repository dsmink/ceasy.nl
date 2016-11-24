<?php

/* @bolt/components/panel-stack.twig */
class __TwigTemplate_f75b346219ebb237796f1c934a233f68995393c6a0dc150c92f2d2e73016d682 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("@bolt/_base/_panel.twig", "@bolt/components/panel-stack.twig", 5);
        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_panel.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a58fa7d7e442146ce82b1f974e7b8fb6fc1d897c7839874a56e490542e70830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a58fa7d7e442146ce82b1f974e7b8fb6fc1d897c7839874a56e490542e70830->enter($__internal_2a58fa7d7e442146ce82b1f974e7b8fb6fc1d897c7839874a56e490542e70830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/panel-stack.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a58fa7d7e442146ce82b1f974e7b8fb6fc1d897c7839874a56e490542e70830->leave($__internal_2a58fa7d7e442146ce82b1f974e7b8fb6fc1d897c7839874a56e490542e70830_prof);

    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_7ffb80cf01b8df53ef531f6813f460ed6ed0322ded13fd12e4bdc6c155760ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ffb80cf01b8df53ef531f6813f460ed6ed0322ded13fd12e4bdc6c155760ce5->enter($__internal_7ffb80cf01b8df53ef531f6813f460ed6ed0322ded13fd12e4bdc6c155760ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo "panel-stack";
        
        $__internal_7ffb80cf01b8df53ef531f6813f460ed6ed0322ded13fd12e4bdc6c155760ce5->leave($__internal_7ffb80cf01b8df53ef531f6813f460ed6ed0322ded13fd12e4bdc6c155760ce5_prof);

    }

    // line 9
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_90f6b63efe8121a8fd2ba0d6de7933fa487b7fb3a081436defe9e48404b31544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f6b63efe8121a8fd2ba0d6de7933fa487b7fb3a081436defe9e48404b31544->enter($__internal_90f6b63efe8121a8fd2ba0d6de7933fa487b7fb3a081436defe9e48404b31544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo "fa-paperclip";
        
        $__internal_90f6b63efe8121a8fd2ba0d6de7933fa487b7fb3a081436defe9e48404b31544->leave($__internal_90f6b63efe8121a8fd2ba0d6de7933fa487b7fb3a081436defe9e48404b31544_prof);

    }

    // line 11
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_4567fac5f526066ceead094df221eeecff869eb187668c07c5068c19945506df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4567fac5f526066ceead094df221eeecff869eb187668c07c5068c19945506df->enter($__internal_4567fac5f526066ceead094df221eeecff869eb187668c07c5068c19945506df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.stack-files");
        
        $__internal_4567fac5f526066ceead094df221eeecff869eb187668c07c5068c19945506df->leave($__internal_4567fac5f526066ceead094df221eeecff869eb187668c07c5068c19945506df_prof);

    }

    // line 13
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_d4fcb29ecf3166be63d1dfe2e28c857aba4b3761f795a1a4b927f1c25cce498a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fcb29ecf3166be63d1dfe2e28c857aba4b3761f795a1a4b927f1c25cce498a->enter($__internal_d4fcb29ecf3166be63d1dfe2e28c857aba4b3761f795a1a4b927f1c25cce498a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 14
        echo "    <fieldset class=\"buic-stack\" data-bolt-widget=\"buicStack\">
        <div class=\"stackholder\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "stack", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["idx"] => $context["item"]) {
            if (($context["idx"] < 7)) {
                // line 17
                echo "                <div class=\"stackitem ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
                echo " info-pop\" data-placement=\"bottom\" data-html=\"true\" data-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "basename", array()), "html", null, true);
                echo "\" data-content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "info", array()), "html", null, true);
                echo "\">
                    ";
                // line 18
                if (($this->getAttribute($context["item"], "type", array()) == "image")) {
                    // line 19
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute($context["item"], "filepath", array()), 100, 100), "html", null, true);
                    echo "\" width=\"100\" height=\"100\" alt=\"";
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.thumbnail");
                    echo "\">
                    ";
                } else {
                    // line 21
                    echo "                       <strong>";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["item"], "extension", array())), "html", null, true);
                    echo "</strong>
                       <small>";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "basename", array()), "html", null, true);
                    echo "</small>
                    ";
                }
                // line 24
                echo "                </div>
            ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 26
            echo "                <div class=\"empty\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.stack-empty");
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>

        ";
        // line 30
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "canUpload", array())) {
            // line 31
            echo "            <div class=\"buic-progress\" data-bolt-widget=\"buicProgress\"></div>
        ";
        }
        // line 33
        echo "
        <div class=\"stackbuttons\">
            ";
        // line 35
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "canUpload", array())) {
            // line 36
            echo "                <div class=\"btn-group\">
                    <span class=\"btn btn-tertiary fileinput-button\">
                        <i class=\"fa fa-upload\"></i>
                        <span>";
            // line 39
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.upload");
            echo "</span>
                        <input id=\"fileupload-stack\"
                               type=\"file\"
                               name=\"files[]\"
                               data-url=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("upload", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "namespace", array())), true), "html", null, true);
            echo "\"
                               accept=\".";
            // line 44
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "filetypes", array()), ",."), "html", null, true);
            echo "\">
                    </span>
                </div>
            ";
        }
        // line 48
        echo "
            <div class=\"btn-group\">
                ";
        // line 50
        $context["attr"] = array("class" => "btn btn-tertiary", "data-bolt-widget" => array("buicBrowser" => array("namespace" => "files")), "type" => "button");
        // line 59
        echo "                <button";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hattr((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        echo "><i class=\"fa fa-download\"></i> ";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.select");
        echo "</button>
            </div>
        </div>

        <div class=\"templates\">
            <div class=\"stackitem image\">
                <img src=\"data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACwAAAAAAQABAAACAkQBADs=\" width=\"100\" height=\"100\" alt=\"";
        // line 65
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.thumbnail");
        echo "\">
            </div>

            <div class=\"stackitem other\">
                <strong></strong>
                <small></small>
            </div>
        </div>
    </fieldset>

";
        
        $__internal_d4fcb29ecf3166be63d1dfe2e28c857aba4b3761f795a1a4b927f1c25cce498a->leave($__internal_d4fcb29ecf3166be63d1dfe2e28c857aba4b3761f795a1a4b927f1c25cce498a_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-stack.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 65,  179 => 59,  177 => 50,  173 => 48,  166 => 44,  162 => 43,  155 => 39,  150 => 36,  148 => 35,  144 => 33,  140 => 31,  138 => 30,  134 => 28,  125 => 26,  118 => 24,  113 => 22,  108 => 21,  100 => 19,  98 => 18,  89 => 17,  83 => 16,  79 => 14,  73 => 13,  61 => 11,  49 => 9,  37 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # Sidebar-Panel: Displays the files located on the stack
 # (Usage Example: Dashboards sidebar)
 #}
{% extends '@bolt/_base/_panel.twig' %}

{% block panel_class 'panel-stack' %}

{% block panel_icon 'fa-paperclip' %}

{% block panel_head __('general.phrase.stack-files') %}

{% block panel_body %}
    <fieldset class=\"buic-stack\" data-bolt-widget=\"buicStack\">
        <div class=\"stackholder\">
            {% for idx, item in context.stack if idx < 7 %}
                <div class=\"stackitem {{ item.type }} info-pop\" data-placement=\"bottom\" data-html=\"true\" data-title=\"{{ item.basename }}\" data-content=\"{{ item.info }}\">
                    {% if item.type == 'image' %}
                        <img src=\"{{ item.filepath|thumbnail(100, 100) }}\" width=\"100\" height=\"100\" alt=\"{{ __('general.phrase.thumbnail') }}\">
                    {% else %}
                       <strong>{{ item.extension|upper }}</strong>
                       <small>{{ item.basename }}</small>
                    {% endif %}
                </div>
            {% else %}
                <div class=\"empty\">{{ __('general.phrase.stack-empty') }}</div>
            {% endfor %}
        </div>

        {% if context.canUpload %}
            <div class=\"buic-progress\" data-bolt-widget=\"buicProgress\"></div>
        {% endif %}

        <div class=\"stackbuttons\">
            {% if context.canUpload %}
                <div class=\"btn-group\">
                    <span class=\"btn btn-tertiary fileinput-button\">
                        <i class=\"fa fa-upload\"></i>
                        <span>{{ __('general.phrase.upload') }}</span>
                        <input id=\"fileupload-stack\"
                               type=\"file\"
                               name=\"files[]\"
                               data-url=\"{{ url('upload', { namespace: context.namespace }, true) }}\"
                               accept=\".{{ context.filetypes|join(',.') }}\">
                    </span>
                </div>
            {% endif %}

            <div class=\"btn-group\">
                {% set attr = {
                    'class': 'btn btn-tertiary',
                    'data-bolt-widget': {
                        buicBrowser: {
                            namespace: 'files',
                        },
                    },
                    'type': 'button',
                } %}
                <button{{ hattr(attr) }}><i class=\"fa fa-download\"></i> {{ __('general.phrase.select') }}</button>
            </div>
        </div>

        <div class=\"templates\">
            <div class=\"stackitem image\">
                <img src=\"data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACwAAAAAAQABAAACAkQBADs=\" width=\"100\" height=\"100\" alt=\"{{ __('general.phrase.thumbnail') }}\">
            </div>

            <div class=\"stackitem other\">
                <strong></strong>
                <small></small>
            </div>
        </div>
    </fieldset>

{% endblock panel_body %}
", "@bolt/components/panel-stack.twig", "app://view/twig/components/panel-stack.twig");
    }
}
