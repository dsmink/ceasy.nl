<?php

/* @bolt/_buic/_moment.twig */
class __TwigTemplate_1ffc603db6e2acf80c646fe00bd7e295423092ae2ef94268c6e9a08ad8b473b2 extends Twig_Template
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
        $__internal_1d06f47123f41e78774999c574af7f808381b6581132a85d79672b99e4266917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d06f47123f41e78774999c574af7f808381b6581132a85d79672b99e4266917->enter($__internal_1d06f47123f41e78774999c574af7f808381b6581132a85d79672b99e4266917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_buic/_moment.twig"));

        
        $__internal_1d06f47123f41e78774999c574af7f808381b6581132a85d79672b99e4266917->leave($__internal_1d06f47123f41e78774999c574af7f808381b6581132a85d79672b99e4266917_prof);

    }

    // line 6
    public function getbuic_moment($__datetime__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "datetime" => $__datetime__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c89f75ee6d58cc264cb1b96315c5b7d4a517a8f5639b05960d5a51cdbc17fa85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c89f75ee6d58cc264cb1b96315c5b7d4a517a8f5639b05960d5a51cdbc17fa85->enter($__internal_c89f75ee6d58cc264cb1b96315c5b7d4a517a8f5639b05960d5a51cdbc17fa85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "buic_moment"));

            // line 7
            $context["dt"] = twig_date_format_filter($this->env, (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")), "Y-m-d\\TH:i:sP");
            // line 8
            echo "<time class=\"buic-moment\" data-bolt-widget=\"buicMoment\" datetime=\"";
            echo twig_escape_filter($this->env, (isset($context["dt"]) ? $context["dt"] : $this->getContext($context, "dt")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["dt"]) ? $context["dt"] : $this->getContext($context, "dt")), "html", null, true);
            echo "</time>";
            
            $__internal_c89f75ee6d58cc264cb1b96315c5b7d4a517a8f5639b05960d5a51cdbc17fa85->leave($__internal_c89f75ee6d58cc264cb1b96315c5b7d4a517a8f5639b05960d5a51cdbc17fa85_prof);

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
        return "@bolt/_buic/_moment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  42 => 7,  27 => 6,);
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
 # Renders a datetime that displays relative time.
 #
 # @param string datetime ISO-datetime ('Y-m-d H:i:s') to display.
 #}
{% macro buic_moment(datetime) -%}
    {%- set dt = datetime|date('Y-m-d\\\\TH:i:sP') -%}
    <time class=\"buic-moment\" data-bolt-widget=\"buicMoment\" datetime=\"{{ dt }}\">{{ dt }}</time>
{%- endmacro %}
", "@bolt/_buic/_moment.twig", "app://view/twig/_buic/_moment.twig");
    }
}
