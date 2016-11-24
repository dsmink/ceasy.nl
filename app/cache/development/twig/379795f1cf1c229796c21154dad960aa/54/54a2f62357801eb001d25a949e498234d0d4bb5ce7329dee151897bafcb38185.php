<?php

/* @bolt/editcontent/fielddata/_taxonomy.twig */
class __TwigTemplate_67fcaf1ab86af530cb8c993987a60b4edd5e9fe4c5ba5664a743e780b4a8d252 extends Twig_Template
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
        $__internal_9e0a4487042f0603408d661fc60231c6166dd89d69707281590ceec2b162346c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0a4487042f0603408d661fc60231c6166dd89d69707281590ceec2b162346c->enter($__internal_9e0a4487042f0603408d661fc60231c6166dd89d69707281590ceec2b162346c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fielddata/_taxonomy.twig"));

        // line 2
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("field.categories.text.placeholder", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("(no category)")), "html", null, true);
        echo "
";
        
        $__internal_9e0a4487042f0603408d661fc60231c6166dd89d69707281590ceec2b162346c->leave($__internal_9e0a4487042f0603408d661fc60231c6166dd89d69707281590ceec2b162346c_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fielddata/_taxonomy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{### Messages ###}

{{ data('field.categories.text.placeholder', __('(no category)')) }}
", "@bolt/editcontent/fielddata/_taxonomy.twig", "app://view/twig/editcontent/fielddata/_taxonomy.twig");
    }
}
