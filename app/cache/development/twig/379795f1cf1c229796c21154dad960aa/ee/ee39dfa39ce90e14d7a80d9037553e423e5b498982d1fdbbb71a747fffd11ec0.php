<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5de0569c33dac1adf119a660dfb52945cb3b9f912636cfc26ab99080f9d1d580 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70f8b51110591437c27383a7cdb3a952e8ee631afb407d0178b630faf8e1f8b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f8b51110591437c27383a7cdb3a952e8ee631afb407d0178b630faf8e1f8b9->enter($__internal_70f8b51110591437c27383a7cdb3a952e8ee631afb407d0178b630faf8e1f8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70f8b51110591437c27383a7cdb3a952e8ee631afb407d0178b630faf8e1f8b9->leave($__internal_70f8b51110591437c27383a7cdb3a952e8ee631afb407d0178b630faf8e1f8b9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ebd9d0c91a5f8a04d2589b000f0293fd20a7bc9b43bb185723538bf097d51b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd9d0c91a5f8a04d2589b000f0293fd20a7bc9b43bb185723538bf097d51b41->enter($__internal_ebd9d0c91a5f8a04d2589b000f0293fd20a7bc9b43bb185723538bf097d51b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ebd9d0c91a5f8a04d2589b000f0293fd20a7bc9b43bb185723538bf097d51b41->leave($__internal_ebd9d0c91a5f8a04d2589b000f0293fd20a7bc9b43bb185723538bf097d51b41_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94770c42b27f0726dd0ecbe01db6d21097335cfc9ed57560651515ba32ebac9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94770c42b27f0726dd0ecbe01db6d21097335cfc9ed57560651515ba32ebac9b->enter($__internal_94770c42b27f0726dd0ecbe01db6d21097335cfc9ed57560651515ba32ebac9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94770c42b27f0726dd0ecbe01db6d21097335cfc9ed57560651515ba32ebac9b->leave($__internal_94770c42b27f0726dd0ecbe01db6d21097335cfc9ed57560651515ba32ebac9b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00625601325ba6c3bd268a9f856839a0276c50b03aaced4d1f7697496fd8dca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00625601325ba6c3bd268a9f856839a0276c50b03aaced4d1f7697496fd8dca2->enter($__internal_00625601325ba6c3bd268a9f856839a0276c50b03aaced4d1f7697496fd8dca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_00625601325ba6c3bd268a9f856839a0276c50b03aaced4d1f7697496fd8dca2->leave($__internal_00625601325ba6c3bd268a9f856839a0276c50b03aaced4d1f7697496fd8dca2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/dennis.smink/Sites/ceasy.nl/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
