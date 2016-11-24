<?php

/* @bolt/exception/general.twig */
class __TwigTemplate_44aa8e0928c46088bfe218760b954dbfd2059e213bebc904369f715122973ef9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@bolt/exception/exception.twig", "@bolt/exception/general.twig", 1);
        $this->blocks = array(
            'exception' => array($this, 'block_exception'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/exception/exception.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_889c54a0c90e38b5f921d5634a1f8438b45ac6c590c101a6e20b2d662b1bb30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889c54a0c90e38b5f921d5634a1f8438b45ac6c590c101a6e20b2d662b1bb30e->enter($__internal_889c54a0c90e38b5f921d5634a1f8438b45ac6c590c101a6e20b2d662b1bb30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/exception/general.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_889c54a0c90e38b5f921d5634a1f8438b45ac6c590c101a6e20b2d662b1bb30e->leave($__internal_889c54a0c90e38b5f921d5634a1f8438b45ac6c590c101a6e20b2d662b1bb30e_prof);

    }

    // line 3
    public function block_exception($context, array $blocks = array())
    {
        $__internal_af39e7b43bf440b72021ff52a2430ba124c5d24a6f9540ddc811f4b1b0b85d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af39e7b43bf440b72021ff52a2430ba124c5d24a6f9540ddc811f4b1b0b85d20->enter($__internal_af39e7b43bf440b72021ff52a2430ba124c5d24a6f9540ddc811f4b1b0b85d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "exception"));

        
        $__internal_af39e7b43bf440b72021ff52a2430ba124c5d24a6f9540ddc811f4b1b0b85d20->leave($__internal_af39e7b43bf440b72021ff52a2430ba124c5d24a6f9540ddc811f4b1b0b85d20_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/exception/general.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@bolt/exception/exception.twig' %}

{% block exception %}
{% endblock exception %}
", "@bolt/exception/general.twig", "app://view/twig/exception/general.twig");
    }
}
