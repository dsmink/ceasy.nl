<?php

/* @bolt/_nav/_secondary-translations.twig */
class __TwigTemplate_d8daba5d42a2894b2afc02c5e19cf6885e3ff168c40c04b47aefd9e0cc87f7f5 extends Twig_Template
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
        $__internal_ca9c182df3408e0383fcc14bf390b2239d43dcb2996a76369544a152084c0a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9c182df3408e0383fcc14bf390b2239d43dcb2996a76369544a152084c0a9d->enter($__internal_ca9c182df3408e0383fcc14bf390b2239d43dcb2996a76369544a152084c0a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary-translations.twig"));

        // line 1
        $context["tr_menu"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "menu.admin", array(), "array"), "get", array(0 => "translations"), "method");
        // line 2
        $context["sub"] = array(0 => array("icon" => $this->getAttribute($this->getAttribute(        // line 4
(isset($context["tr_menu"]) ? $context["tr_menu"] : $this->getContext($context, "tr_menu")), "get", array(0 => "tr_messages"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 5
(isset($context["tr_menu"]) ? $context["tr_menu"] : $this->getContext($context, "tr_menu")), "get", array(0 => "tr_messages"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 6
(isset($context["tr_menu"]) ? $context["tr_menu"] : $this->getContext($context, "tr_menu")), "get", array(0 => "tr_messages"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 7
(isset($context["tr_menu"]) ? $context["tr_menu"] : $this->getContext($context, "tr_menu")), "get", array(0 => "tr_messages"), "method"), "permission", array())), 1 => array("icon" => $this->getAttribute($this->getAttribute(        // line 9
(isset($context["tr_menu"]) ? $context["tr_menu"] : $this->getContext($context, "tr_menu")), "get", array(0 => "tr_long_messages"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["tr_menu"]) ? $context["tr_menu"] : $this->getContext($context, "tr_menu")), "get", array(0 => "tr_long_messages"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["tr_menu"]) ? $context["tr_menu"] : $this->getContext($context, "tr_menu")), "get", array(0 => "tr_long_messages"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 12
(isset($context["tr_menu"]) ? $context["tr_menu"] : $this->getContext($context, "tr_menu")), "get", array(0 => "tr_long_messages"), "method"), "permission", array())), 2 => array("icon" => $this->getAttribute($this->getAttribute(        // line 14
(isset($context["tr_menu"]) ? $context["tr_menu"] : $this->getContext($context, "tr_menu")), "get", array(0 => "tr_contenttypes"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 15
(isset($context["tr_menu"]) ? $context["tr_menu"] : $this->getContext($context, "tr_menu")), "get", array(0 => "tr_contenttypes"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 16
(isset($context["tr_menu"]) ? $context["tr_menu"] : $this->getContext($context, "tr_menu")), "get", array(0 => "tr_contenttypes"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 17
(isset($context["tr_menu"]) ? $context["tr_menu"] : $this->getContext($context, "tr_menu")), "get", array(0 => "tr_contenttypes"), "method"), "permission", array())));
        // line 20
        echo "
";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")), "submenu", array(0 => "fa:flag", 1 => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.translations"), 2 => (isset($context["sub"]) ? $context["sub"] : $this->getContext($context, "sub")), 3 => ((isset($context["page_nav"]) ? $context["page_nav"] : $this->getContext($context, "page_nav")) == "Settings/Translations")), "method"), "html", null, true);
        echo "
";
        
        $__internal_ca9c182df3408e0383fcc14bf390b2239d43dcb2996a76369544a152084c0a9d->leave($__internal_ca9c182df3408e0383fcc14bf390b2239d43dcb2996a76369544a152084c0a9d_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-translations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 21,  38 => 20,  36 => 17,  35 => 16,  34 => 15,  33 => 14,  32 => 12,  31 => 11,  30 => 10,  29 => 9,  28 => 7,  27 => 6,  26 => 5,  25 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set tr_menu = app['menu.admin'].get('translations') %}
{% set sub = [
    {
        icon: tr_menu.get('tr_messages').icon,
        label: tr_menu.get('tr_messages').label,
        link: tr_menu.get('tr_messages').uri,
        isallowed: tr_menu.get('tr_messages').permission
    }, {
        icon: tr_menu.get('tr_long_messages').icon,
        label: tr_menu.get('tr_long_messages').label,
        link: tr_menu.get('tr_long_messages').uri,
        isallowed: tr_menu.get('tr_long_messages').permission
    }, {
        icon: tr_menu.get('tr_contenttypes').icon,
        label: tr_menu.get('tr_contenttypes').label,
        link: tr_menu.get('tr_contenttypes').uri,
        isallowed: tr_menu.get('tr_contenttypes').permission
    }
] %}

{{ nav.submenu('fa:flag', __('general.phrase.translations'), sub, (page_nav == 'Settings/Translations')) }}
", "@bolt/_nav/_secondary-translations.twig", "app://view/twig/_nav/_secondary-translations.twig");
    }
}
