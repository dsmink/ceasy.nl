<?php

/* @bolt/_nav/_secondary-search.twig */
class __TwigTemplate_0a48ab5f895f974879099ad5bdfdfc15682e300a7f2c01f9e854b1602227957e extends Twig_Template
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
        $__internal_dc6890c1fad4a2b9b201c407a70ff5204f26752f967e2796d744c68d2e72fc6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc6890c1fad4a2b9b201c407a70ff5204f26752f967e2796d744c68d2e72fc6c->enter($__internal_dc6890c1fad4a2b9b201c407a70ff5204f26752f967e2796d744c68d2e72fc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary-search.twig"));

        // line 1
        echo "<li class=\"search\">
    <form class=\"navbar-form\">
        <i class=\"icon fa fa-search\"></i><div class=\"form-group has-feedback omnisearch\" role=\"search\">
            <select class=\"form-control\"></select>
        </div>
    </form>
</li>
";
        
        $__internal_dc6890c1fad4a2b9b201c407a70ff5204f26752f967e2796d744c68d2e72fc6c->leave($__internal_dc6890c1fad4a2b9b201c407a70ff5204f26752f967e2796d744c68d2e72fc6c_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-search.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"search\">
    <form class=\"navbar-form\">
        <i class=\"icon fa fa-search\"></i><div class=\"form-group has-feedback omnisearch\" role=\"search\">
            <select class=\"form-control\"></select>
        </div>
    </form>
</li>
", "@bolt/_nav/_secondary-search.twig", "app://view/twig/_nav/_secondary-search.twig");
    }
}
