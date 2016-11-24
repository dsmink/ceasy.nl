<?php

/* @bolt/_base/_panel.twig */
class __TwigTemplate_da027f00ec62208b9dfb34a2f13a5dd517df1d96acd71d80fea5cbd9e4d1ecce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_alert' => array($this, 'block_panel_alert'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7ef836b7f10e18c50d437a2ed25a64beed3d7c6e7f759493b3d48d15e004c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ef836b7f10e18c50d437a2ed25a64beed3d7c6e7f759493b3d48d15e004c43->enter($__internal_d7ef836b7f10e18c50d437a2ed25a64beed3d7c6e7f759493b3d48d15e004c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_base/_panel.twig"));

        // line 9
        echo "<div class=\"panel panel-default ";
        $this->displayBlock('panel_class', $context, $blocks);
        echo "\">
    <div ";
        // line 10
        $this->displayBlock('panel_alert', $context, $blocks);
        echo ">
        <i class=\"fa fa-fw ";
        // line 11
        $this->displayBlock('panel_icon', $context, $blocks);
        echo "\"></i>
        ";
        // line 12
        $this->displayBlock('panel_head', $context, $blocks);
        // line 13
        echo "    </div>

    <div class=\"panel-body\">
        ";
        // line 16
        $this->displayBlock('panel_body', $context, $blocks);
        // line 17
        echo "    </div>
</div>
";
        
        $__internal_d7ef836b7f10e18c50d437a2ed25a64beed3d7c6e7f759493b3d48d15e004c43->leave($__internal_d7ef836b7f10e18c50d437a2ed25a64beed3d7c6e7f759493b3d48d15e004c43_prof);

    }

    // line 9
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_0d60d7fbe940c0968c0f89b45dc8565c50bd5d9c7f464286ee8c49622fc531d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d60d7fbe940c0968c0f89b45dc8565c50bd5d9c7f464286ee8c49622fc531d4->enter($__internal_0d60d7fbe940c0968c0f89b45dc8565c50bd5d9c7f464286ee8c49622fc531d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        
        $__internal_0d60d7fbe940c0968c0f89b45dc8565c50bd5d9c7f464286ee8c49622fc531d4->leave($__internal_0d60d7fbe940c0968c0f89b45dc8565c50bd5d9c7f464286ee8c49622fc531d4_prof);

    }

    // line 10
    public function block_panel_alert($context, array $blocks = array())
    {
        $__internal_28854228850c76273257b9c115e9aa4ef84491fd46abde59e3d9ea88d3e31745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28854228850c76273257b9c115e9aa4ef84491fd46abde59e3d9ea88d3e31745->enter($__internal_28854228850c76273257b9c115e9aa4ef84491fd46abde59e3d9ea88d3e31745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_alert"));

        echo "class=\"panel-heading\"";
        
        $__internal_28854228850c76273257b9c115e9aa4ef84491fd46abde59e3d9ea88d3e31745->leave($__internal_28854228850c76273257b9c115e9aa4ef84491fd46abde59e3d9ea88d3e31745_prof);

    }

    // line 11
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_d364470fbad8ecd3115c817b5c2244d0c83f4caa987e7119f6f0677bd3101077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d364470fbad8ecd3115c817b5c2244d0c83f4caa987e7119f6f0677bd3101077->enter($__internal_d364470fbad8ecd3115c817b5c2244d0c83f4caa987e7119f6f0677bd3101077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo "fa-circle-o";
        
        $__internal_d364470fbad8ecd3115c817b5c2244d0c83f4caa987e7119f6f0677bd3101077->leave($__internal_d364470fbad8ecd3115c817b5c2244d0c83f4caa987e7119f6f0677bd3101077_prof);

    }

    // line 12
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_d5b8b85f67a3c294cafe9864cb78f267c86094d49bce0a944fcc1c9205043dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b8b85f67a3c294cafe9864cb78f267c86094d49bce0a944fcc1c9205043dea->enter($__internal_d5b8b85f67a3c294cafe9864cb78f267c86094d49bce0a944fcc1c9205043dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo "[PANEL_HEAD]";
        
        $__internal_d5b8b85f67a3c294cafe9864cb78f267c86094d49bce0a944fcc1c9205043dea->leave($__internal_d5b8b85f67a3c294cafe9864cb78f267c86094d49bce0a944fcc1c9205043dea_prof);

    }

    // line 16
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_33d114d15f39fbe31148298939be770ac74d0b31f93cfcd444324894f075b6bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d114d15f39fbe31148298939be770ac74d0b31f93cfcd444324894f075b6bb->enter($__internal_33d114d15f39fbe31148298939be770ac74d0b31f93cfcd444324894f075b6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        echo "[PANEL_BODY]";
        
        $__internal_33d114d15f39fbe31148298939be770ac74d0b31f93cfcd444324894f075b6bb->leave($__internal_33d114d15f39fbe31148298939be770ac74d0b31f93cfcd444324894f075b6bb_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_base/_panel.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 16,  93 => 12,  81 => 11,  69 => 10,  58 => 9,  49 => 17,  47 => 16,  42 => 13,  40 => 12,  36 => 11,  32 => 10,  27 => 9,);
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
 # Template for sidebar panels
 #
 # Blocks: panel_class:  A classname used for styling
 #         panel_icon:   A fontawsome CSS class name (Optional)
 #         panel_head:   The headline
 #         panel_body:   The Body
 #}
<div class=\"panel panel-default {% block panel_class %}{% endblock panel_class %}\">
    <div {% block panel_alert %}class=\"panel-heading\"{% endblock panel_alert %}>
        <i class=\"fa fa-fw {% block panel_icon %}fa-circle-o{% endblock panel_icon %}\"></i>
        {% block panel_head %}[PANEL_HEAD]{% endblock panel_head %}
    </div>

    <div class=\"panel-body\">
        {% block panel_body %}[PANEL_BODY]{% endblock panel_body %}
    </div>
</div>
", "@bolt/_base/_panel.twig", "app://view/twig/_base/_panel.twig");
    }
}
