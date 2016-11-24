<?php

/* @bolt/_sub/_listing.twig */
class __TwigTemplate_5a0e6ce4cc05f11e93f932af0c7409e0018bd35f79140a7c63df32bbbb1794fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@bolt/_base/_listing.twig", "@bolt/_sub/_listing.twig", 1);
        $this->blocks = array(
            'listing_columns' => array($this, 'block_listing_columns'),
            'listing_header' => array($this, 'block_listing_header'),
            'listing_id' => array($this, 'block_listing_id'),
            'listing_content' => array($this, 'block_listing_content'),
            'listing_meta' => array($this, 'block_listing_meta'),
            'listing_actions' => array($this, 'block_listing_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_listing.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1606718f51b22025932f3b9f8a0545cfe104b446b1e1a8f7199b10a7855763e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1606718f51b22025932f3b9f8a0545cfe104b446b1e1a8f7199b10a7855763e8->enter($__internal_1606718f51b22025932f3b9f8a0545cfe104b446b1e1a8f7199b10a7855763e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_sub/_listing.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1606718f51b22025932f3b9f8a0545cfe104b446b1e1a8f7199b10a7855763e8->leave($__internal_1606718f51b22025932f3b9f8a0545cfe104b446b1e1a8f7199b10a7855763e8_prof);

    }

    // line 3
    public function block_listing_columns($context, array $blocks = array())
    {
        $__internal_7625e8de6fed87f34118646d066f1fd09a5f88af40735a5f7ea6451a33235737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7625e8de6fed87f34118646d066f1fd09a5f88af40735a5f7ea6451a33235737->enter($__internal_7625e8de6fed87f34118646d066f1fd09a5f88af40735a5f7ea6451a33235737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_columns"));

        $this->displayParentBlock("listing_columns", $context, $blocks);
        
        $__internal_7625e8de6fed87f34118646d066f1fd09a5f88af40735a5f7ea6451a33235737->leave($__internal_7625e8de6fed87f34118646d066f1fd09a5f88af40735a5f7ea6451a33235737_prof);

    }

    // line 5
    public function block_listing_header($context, array $blocks = array())
    {
        $__internal_c2887dec6427caa973f19ffeff8c2675e3ca048200f7d4c1a38db0cbf1de8588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2887dec6427caa973f19ffeff8c2675e3ca048200f7d4c1a38db0cbf1de8588->enter($__internal_c2887dec6427caa973f19ffeff8c2675e3ca048200f7d4c1a38db0cbf1de8588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_header"));

        $this->displayParentBlock("listing_header", $context, $blocks);
        
        $__internal_c2887dec6427caa973f19ffeff8c2675e3ca048200f7d4c1a38db0cbf1de8588->leave($__internal_c2887dec6427caa973f19ffeff8c2675e3ca048200f7d4c1a38db0cbf1de8588_prof);

    }

    // line 7
    public function block_listing_id($context, array $blocks = array())
    {
        $__internal_4fc21458d8562ca609752a57f689ac9a805eae98c23ea9f1277992181fbc7208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc21458d8562ca609752a57f689ac9a805eae98c23ea9f1277992181fbc7208->enter($__internal_4fc21458d8562ca609752a57f689ac9a805eae98c23ea9f1277992181fbc7208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_id"));

        $this->displayParentBlock("listing_id", $context, $blocks);
        
        $__internal_4fc21458d8562ca609752a57f689ac9a805eae98c23ea9f1277992181fbc7208->leave($__internal_4fc21458d8562ca609752a57f689ac9a805eae98c23ea9f1277992181fbc7208_prof);

    }

    // line 9
    public function block_listing_content($context, array $blocks = array())
    {
        $__internal_3cc17d9e945f18622b908535341af8a4baa15f5d68e6335401dd4d57c718c9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc17d9e945f18622b908535341af8a4baa15f5d68e6335401dd4d57c718c9ac->enter($__internal_3cc17d9e945f18622b908535341af8a4baa15f5d68e6335401dd4d57c718c9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_content"));

        $this->displayParentBlock("listing_content", $context, $blocks);
        
        $__internal_3cc17d9e945f18622b908535341af8a4baa15f5d68e6335401dd4d57c718c9ac->leave($__internal_3cc17d9e945f18622b908535341af8a4baa15f5d68e6335401dd4d57c718c9ac_prof);

    }

    // line 11
    public function block_listing_meta($context, array $blocks = array())
    {
        $__internal_fce86eee0ce18ed0d044bdb6e431d5ac0fbe239a8f62c230e9e82e04312aac73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce86eee0ce18ed0d044bdb6e431d5ac0fbe239a8f62c230e9e82e04312aac73->enter($__internal_fce86eee0ce18ed0d044bdb6e431d5ac0fbe239a8f62c230e9e82e04312aac73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_meta"));

        $this->displayParentBlock("listing_meta", $context, $blocks);
        
        $__internal_fce86eee0ce18ed0d044bdb6e431d5ac0fbe239a8f62c230e9e82e04312aac73->leave($__internal_fce86eee0ce18ed0d044bdb6e431d5ac0fbe239a8f62c230e9e82e04312aac73_prof);

    }

    // line 13
    public function block_listing_actions($context, array $blocks = array())
    {
        $__internal_16ab1cc27f2d29e1127c7a8c7048d8654541a3e82718b0e687728e68d31ff56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ab1cc27f2d29e1127c7a8c7048d8654541a3e82718b0e687728e68d31ff56b->enter($__internal_16ab1cc27f2d29e1127c7a8c7048d8654541a3e82718b0e687728e68d31ff56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_actions"));

        $this->displayParentBlock("listing_actions", $context, $blocks);
        
        $__internal_16ab1cc27f2d29e1127c7a8c7048d8654541a3e82718b0e687728e68d31ff56b->leave($__internal_16ab1cc27f2d29e1127c7a8c7048d8654541a3e82718b0e687728e68d31ff56b_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_sub/_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 13,  87 => 11,  75 => 9,  63 => 7,  51 => 5,  39 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@bolt/_base/_listing.twig' %}

{% block listing_columns %}{{ parent() }}{% endblock %}

{% block listing_header %}{{ parent() }}{% endblock %}

{% block listing_id %}{{ parent() }}{% endblock %}

{% block listing_content %}{{ parent() }}{% endblock %}

{% block listing_meta %}{{ parent() }}{% endblock %}

{% block listing_actions %}{{ parent() }}{% endblock %}
", "@bolt/_sub/_listing.twig", "app://view/twig/_sub/_listing.twig");
    }
}
