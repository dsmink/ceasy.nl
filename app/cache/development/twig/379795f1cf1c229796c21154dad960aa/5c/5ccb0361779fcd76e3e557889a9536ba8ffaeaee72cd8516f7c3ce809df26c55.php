<?php

/* @bolt/_sub/_csrf_token.twig */
class __TwigTemplate_6fb471efd69f5eee1cc6235858537d65f136b1ab9953446a1165cac10c4b7b9f extends Twig_Template
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
        $__internal_7c645c3a310f4ea3ab4dea2defb4d3ba9b9601db524a6e92da9cf831d3c18756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c645c3a310f4ea3ab4dea2defb4d3ba9b9601db524a6e92da9cf831d3c18756->enter($__internal_7c645c3a310f4ea3ab4dea2defb4d3ba9b9601db524a6e92da9cf831d3c18756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_sub/_csrf_token.twig"));

        // line 1
        echo "<input type=\"hidden\" name=\"bolt_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->token(), "html", null, true);
        echo "\">
";
        
        $__internal_7c645c3a310f4ea3ab4dea2defb4d3ba9b9601db524a6e92da9cf831d3c18756->leave($__internal_7c645c3a310f4ea3ab4dea2defb4d3ba9b9601db524a6e92da9cf831d3c18756_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_sub/_csrf_token.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<input type=\"hidden\" name=\"bolt_csrf_token\" value=\"{{ token() }}\">
", "@bolt/_sub/_csrf_token.twig", "app://view/twig/_sub/_csrf_token.twig");
    }
}
