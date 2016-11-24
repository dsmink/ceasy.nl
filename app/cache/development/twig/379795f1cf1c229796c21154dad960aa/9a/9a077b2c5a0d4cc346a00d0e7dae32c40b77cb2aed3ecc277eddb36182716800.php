<?php

/* @bolt/_buic/_info.twig */
class __TwigTemplate_74b1602dd2ec955096b49d1a5e02b99508f1e49f38dac91b25c32ca95c8d1c18 extends Twig_Template
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
        $__internal_9270d931f23e6acd585bbb51cb6f0bfec0f6873b6da02b38b33784e6143050d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9270d931f23e6acd585bbb51cb6f0bfec0f6873b6da02b38b33784e6143050d5->enter($__internal_9270d931f23e6acd585bbb51cb6f0bfec0f6873b6da02b38b33784e6143050d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_buic/_info.twig"));

        
        $__internal_9270d931f23e6acd585bbb51cb6f0bfec0f6873b6da02b38b33784e6143050d5->leave($__internal_9270d931f23e6acd585bbb51cb6f0bfec0f6873b6da02b38b33784e6143050d5_prof);

    }

    // line 7
    public function getbuic_info($__label__ = null, $__id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "id" => $__id__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_1b5c573965fe22500ef643fc18a9d99c9160a659af22f9bc0d61cf4cd5e6d6f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_1b5c573965fe22500ef643fc18a9d99c9160a659af22f9bc0d61cf4cd5e6d6f2->enter($__internal_1b5c573965fe22500ef643fc18a9d99c9160a659af22f9bc0d61cf4cd5e6d6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "buic_info"));

            // line 8
            echo "    ";
            $context["attributes"] = array("class" => "info-pop fa fa-info-circle", "data-content" => $this->getAttribute($this->getAttribute(            // line 10
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "translator", array()), "trans", array(0 => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), 1 => array(), 2 => "infos"), "method"), "data-html" => true, "data-title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(            // line 12
(isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))));
            // line 14
            echo "    <i";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hattr((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo "><span class=\"sr-only\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.info");
            echo "</span></i>
";
            
            $__internal_1b5c573965fe22500ef643fc18a9d99c9160a659af22f9bc0d61cf4cd5e6d6f2->leave($__internal_1b5c573965fe22500ef643fc18a9d99c9160a659af22f9bc0d61cf4cd5e6d6f2_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@bolt/_buic/_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  46 => 12,  45 => 10,  43 => 8,  27 => 7,);
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
 # Renders a info popup.
 #
 # @param string title
 # @param string id
 #}
{% macro buic_info(label, id) %}
    {% set attributes = {
        'class':         'info-pop fa fa-info-circle',
        'data-content':  app.translator.trans(id, {}, 'infos'),
        'data-html':     true,
        'data-title':    label|trans,
    } %}
    <i{{ hattr(attributes) }}><span class=\"sr-only\">{{ __('general.phrase.info') }}</span></i>
{% endmacro %}
", "@bolt/_buic/_info.twig", "app://view/twig/_buic/_info.twig");
    }
}
