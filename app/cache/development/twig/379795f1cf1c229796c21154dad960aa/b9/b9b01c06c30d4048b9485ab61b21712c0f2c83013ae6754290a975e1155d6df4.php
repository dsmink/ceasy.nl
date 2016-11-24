<?php

/* @bolt/extend/_readme.twig */
class __TwigTemplate_b92e8c0e2492e609b2187211ab715575b902c9a06637c28720bb3a1ca5038d34 extends Twig_Template
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
        $__internal_0db35af137780ab8356ee4cb664411b0fa45f73d0f702493a80bbb8b0a3cc2ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db35af137780ab8356ee4cb664411b0fa45f73d0f702493a80bbb8b0a3cc2ab->enter($__internal_0db35af137780ab8356ee4cb664411b0fa45f73d0f702493a80bbb8b0a3cc2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/extend/_readme.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"readmeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Read Me</h4>
            </div>
            <div class=\"modal-body\">
                …
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_0db35af137780ab8356ee4cb664411b0fa45f73d0f702493a80bbb8b0a3cc2ab->leave($__internal_0db35af137780ab8356ee4cb664411b0fa45f73d0f702493a80bbb8b0a3cc2ab_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/extend/_readme.twig";
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
        return new Twig_Source("<div class=\"modal fade\" id=\"readmeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Read Me</h4>
            </div>
            <div class=\"modal-body\">
                …
            </div>
        </div>
    </div>
</div>
", "@bolt/extend/_readme.twig", "app://view/twig/extend/_readme.twig");
    }
}
