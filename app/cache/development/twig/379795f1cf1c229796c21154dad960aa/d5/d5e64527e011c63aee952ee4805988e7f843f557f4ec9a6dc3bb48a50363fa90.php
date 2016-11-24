<?php

/* @bolt/_macro/_pager.twig */
class __TwigTemplate_f5a126c0e22e3e66023c035cedf69ac816258c2e1e04ea135eccc6dc0ef49096 extends Twig_Template
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
        $__internal_a251cd567528189d6d4e116b20e4e69717bc34b1274b16f49138b33ca472d0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a251cd567528189d6d4e116b20e4e69717bc34b1274b16f49138b33ca472d0dc->enter($__internal_a251cd567528189d6d4e116b20e4e69717bc34b1274b16f49138b33ca472d0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_macro/_pager.twig"));

        
        $__internal_a251cd567528189d6d4e116b20e4e69717bc34b1274b16f49138b33ca472d0dc->leave($__internal_a251cd567528189d6d4e116b20e4e69717bc34b1274b16f49138b33ca472d0dc_prof);

    }

    // line 7
    public function getpager($__pager__ = null, $__pagerName__ = null, $__surr__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pager" => $__pager__,
            "pagerName" => $__pagerName__,
            "surr" => $__surr__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_977524cf0b9f91360b1dac4a354d02957748ed8984dcb7fc0e438166be1daa04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_977524cf0b9f91360b1dac4a354d02957748ed8984dcb7fc0e438166be1daa04->enter($__internal_977524cf0b9f91360b1dac4a354d02957748ed8984dcb7fc0e438166be1daa04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "pager"));

            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->pager($this->env, ((array_key_exists("pagerName", $context)) ? (_twig_default_filter((isset($context["pagerName"]) ? $context["pagerName"] : $this->getContext($context, "pagerName")), "")) : ("")), ((array_key_exists("surr", $context)) ? (_twig_default_filter((isset($context["surr"]) ? $context["surr"] : $this->getContext($context, "surr")), 4)) : (4)), "backend"), "html", null, true);
            echo "
";
            
            $__internal_977524cf0b9f91360b1dac4a354d02957748ed8984dcb7fc0e438166be1daa04->leave($__internal_977524cf0b9f91360b1dac4a354d02957748ed8984dcb7fc0e438166be1daa04_prof);

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
        return "@bolt/_macro/_pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  27 => 7,);
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
 # Renders a backend pager
 #
 # @param string  pagerName (default: '')
 # @param int     surr (default: 4)
 #}
{% macro pager(pager, pagerName, surr) %}
    {{ pager(pagerName|default(''), surr|default(4), 'backend') }}
{% endmacro %}
", "@bolt/_macro/_pager.twig", "app://view/twig/_macro/_pager.twig");
    }
}
