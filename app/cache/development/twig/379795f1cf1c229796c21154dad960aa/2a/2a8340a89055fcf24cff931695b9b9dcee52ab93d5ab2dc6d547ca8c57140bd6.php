<?php

/* @bolt/_nav/_secondary-filemanagement.twig */
class __TwigTemplate_5c8d4648e432cb5c4d1e4123f487129f329d8612c0f4d979ed6bfd156df93546 extends Twig_Template
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
        $__internal_20cd02c22e80c5a6760393e58e88ed3e7cfefb9000fbf86075ee7731d77a9831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cd02c22e80c5a6760393e58e88ed3e7cfefb9000fbf86075ee7731d77a9831->enter($__internal_20cd02c22e80c5a6760393e58e88ed3e7cfefb9000fbf86075ee7731d77a9831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary-filemanagement.twig"));

        // line 1
        $context["files_menu"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "menu.admin", array(), "array"), "get", array(0 => "files"), "method");
        // line 2
        $context["sub"] = array(0 => array("icon" => $this->getAttribute($this->getAttribute(        // line 4
(isset($context["files_menu"]) ? $context["files_menu"] : $this->getContext($context, "files_menu")), "get", array(0 => "files_uploads"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 5
(isset($context["files_menu"]) ? $context["files_menu"] : $this->getContext($context, "files_menu")), "get", array(0 => "files_uploads"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 6
(isset($context["files_menu"]) ? $context["files_menu"] : $this->getContext($context, "files_menu")), "get", array(0 => "files_uploads"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 7
(isset($context["files_menu"]) ? $context["files_menu"] : $this->getContext($context, "files_menu")), "get", array(0 => "files_uploads"), "method"), "permission", array())), 1 => array("icon" => $this->getAttribute($this->getAttribute(        // line 9
(isset($context["files_menu"]) ? $context["files_menu"] : $this->getContext($context, "files_menu")), "get", array(0 => "files_themes"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["files_menu"]) ? $context["files_menu"] : $this->getContext($context, "files_menu")), "get", array(0 => "files_themes"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["files_menu"]) ? $context["files_menu"] : $this->getContext($context, "files_menu")), "get", array(0 => "files_themes"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 12
(isset($context["files_menu"]) ? $context["files_menu"] : $this->getContext($context, "files_menu")), "get", array(0 => "files_themes"), "method"), "permission", array())));
        // line 15
        echo "
";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")), "submenu", array(0 => "fa:folder-open", 1 => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.file-management"), 2 => (isset($context["sub"]) ? $context["sub"] : $this->getContext($context, "sub")), 3 => ((isset($context["page_nav"]) ? $context["page_nav"] : $this->getContext($context, "page_nav")) == "Settings/FileManagement")), "method"), "html", null, true);
        echo "
";
        
        $__internal_20cd02c22e80c5a6760393e58e88ed3e7cfefb9000fbf86075ee7731d77a9831->leave($__internal_20cd02c22e80c5a6760393e58e88ed3e7cfefb9000fbf86075ee7731d77a9831_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-filemanagement.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 16,  34 => 15,  32 => 12,  31 => 11,  30 => 10,  29 => 9,  28 => 7,  27 => 6,  26 => 5,  25 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set files_menu = app['menu.admin'].get('files') %}
{% set sub = [
    {
        icon: files_menu.get('files_uploads').icon,
        label: files_menu.get('files_uploads').label,
        link: files_menu.get('files_uploads').uri,
        isallowed: files_menu.get('files_uploads').permission
    }, {
        icon: files_menu.get('files_themes').icon,
        label: files_menu.get('files_themes').label,
        link: files_menu.get('files_themes').uri,
        isallowed: files_menu.get('files_themes').permission
    }
] %}

{{ nav.submenu('fa:folder-open', __('general.phrase.file-management'), sub, (page_nav == 'Settings/FileManagement')) }}
", "@bolt/_nav/_secondary-filemanagement.twig", "app://view/twig/_nav/_secondary-filemanagement.twig");
    }
}
