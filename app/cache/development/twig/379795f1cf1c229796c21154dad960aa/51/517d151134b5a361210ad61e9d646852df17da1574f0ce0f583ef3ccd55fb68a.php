<?php

/* partials/_header.twig */
class __TwigTemplate_ba2ae201399b5f9f5f129bd6bcb37cd984426093409c496e8106076bec13177d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_menu' => array($this, 'block_main_menu'),
            'site_branding' => array($this, 'block_site_branding'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f56a3fabc9a2d5d178c787107884c0b316af43083901bda22aa224789408d963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56a3fabc9a2d5d178c787107884c0b316af43083901bda22aa224789408d963->enter($__internal_f56a3fabc9a2d5d178c787107884c0b316af43083901bda22aa224789408d963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_header.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default navbar-fixed-top navbar-left\" role=\"navigation\"> 
    ";
        // line 3
        echo "    <div class=\"container\" id=\"navigation_menu\">
        <div class=\"navbar-header\"> 
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"> 
                <span class=\"sr-only\">Toggle navigation</span> 
                <span class=\"icon-bar\"></span> 
                <span class=\"icon-bar\"></span> 
                <span class=\"icon-bar\"></span> 
            </button> 
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "hosturl", array()), "html", null, true);
        echo "\" style=\"display: inline-block\">
                <img alt=\"Het CEasy logo\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/favicon/apple-icon-57x57.png", "theme"), "html", null, true);
        echo "\" height=\"32\" width=\"32\"/>
                <span class=\"pull-left h2\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "</span>
                <style scoped>
                    img { float: left }
                    .h2 { margin: 0 0 0 10px; text-transform: initial; }
                </style>
            </a>
        </div> 
        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            ";
        // line 21
        $this->displayBlock('main_menu', $context, $blocks);
        // line 24
        echo "        </div>        
    </div>
</nav>

<div id=\"cc_spacer\" style=\"height: 50px;\"></div>

<div class=\"site-header\">
    <div class=\"site-branding\">
        ";
        // line 32
        $this->displayBlock('site_branding', $context, $blocks);
        // line 38
        echo "    </div>
</div>";
        
        $__internal_f56a3fabc9a2d5d178c787107884c0b316af43083901bda22aa224789408d963->leave($__internal_f56a3fabc9a2d5d178c787107884c0b316af43083901bda22aa224789408d963_prof);

    }

    // line 21
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_c1c3870b7cd411745b4600e5fac1b5184c4e49d2b787571b0b542da5be7ed795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c3870b7cd411745b4600e5fac1b5184c4e49d2b787571b0b542da5be7ed795->enter($__internal_c1c3870b7cd411745b4600e5fac1b5184c4e49d2b787571b0b542da5be7ed795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 22
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->menu($this->env, "main", "partials/_main_menu.twig");
        
        $__internal_c1c3870b7cd411745b4600e5fac1b5184c4e49d2b787571b0b542da5be7ed795->leave($__internal_c1c3870b7cd411745b4600e5fac1b5184c4e49d2b787571b0b542da5be7ed795_prof);

    }

    // line 32
    public function block_site_branding($context, array $blocks = array())
    {
        $__internal_73731dc8509d928db3864ef632c66684d1938ad29ec90fea1c82795e35263a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73731dc8509d928db3864ef632c66684d1938ad29ec90fea1c82795e35263a96->enter($__internal_73731dc8509d928db3864ef632c66684d1938ad29ec90fea1c82795e35263a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "site_branding"));

        // line 33
        echo "            <a class=\"home-link\" href=\"#\" title=\"CEasy\" rel=\"home\">
                <h1 class=\"site-title\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "</h1>
                <h2 class=\"site-description\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config", array()), "get", array(0 => "general/payoff"), "method"), "html", null, true);
        echo "</h2>
            </a>
        ";
        
        $__internal_73731dc8509d928db3864ef632c66684d1938ad29ec90fea1c82795e35263a96->leave($__internal_73731dc8509d928db3864ef632c66684d1938ad29ec90fea1c82795e35263a96_prof);

    }

    public function getTemplateName()
    {
        return "partials/_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  100 => 34,  97 => 33,  91 => 32,  84 => 22,  78 => 21,  70 => 38,  68 => 32,  58 => 24,  56 => 21,  45 => 13,  41 => 12,  37 => 11,  27 => 3,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default navbar-fixed-top navbar-left\" role=\"navigation\"> 
    {# Brand and toggle get grouped for better mobile display #}
    <div class=\"container\" id=\"navigation_menu\">
        <div class=\"navbar-header\"> 
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"> 
                <span class=\"sr-only\">Toggle navigation</span> 
                <span class=\"icon-bar\"></span> 
                <span class=\"icon-bar\"></span> 
                <span class=\"icon-bar\"></span> 
            </button> 
            <a class=\"navbar-brand\" href=\"{{ paths.hosturl }}\" style=\"display: inline-block\">
                <img alt=\"Het CEasy logo\" src=\"{{ asset( '/img/favicon/apple-icon-57x57.png', 'theme' ) }}\" height=\"32\" width=\"32\"/>
                <span class=\"pull-left h2\">{{- app.config.get('general/sitename') -}}</span>
                <style scoped>
                    img { float: left }
                    .h2 { margin: 0 0 0 10px; text-transform: initial; }
                </style>
            </a>
        </div> 
        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            {% block main_menu %}
                {{- menu('main', 'partials/_main_menu.twig') -}}
            {% endblock main_menu %}
        </div>        
    </div>
</nav>

<div id=\"cc_spacer\" style=\"height: 50px;\"></div>

<div class=\"site-header\">
    <div class=\"site-branding\">
        {% block site_branding %}
            <a class=\"home-link\" href=\"#\" title=\"CEasy\" rel=\"home\">
                <h1 class=\"site-title\">{{- app.config.get('general/sitename') -}}</h1>
                <h2 class=\"site-description\">{{- app.config.get( 'general/payoff' ) -}}</h2>
            </a>
        {% endblock site_branding %}
    </div>
</div>", "partials/_header.twig", "theme://partials/_header.twig");
    }
}
