<?php

/* @bolt/editcontent/fielddata/_html.twig */
class __TwigTemplate_23efa4996fa263e6c912a61cb8e0abfda4071277db251773a5a9cfe3b9139cb6 extends Twig_Template
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
        $__internal_1b6bf45de916f67c58b5bc109fe3e05d15400f9126365c91cc7702c753dee803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6bf45de916f67c58b5bc109fe3e05d15400f9126365c91cc7702c753dee803->enter($__internal_1b6bf45de916f67c58b5bc109fe3e05d15400f9126365c91cc7702c753dee803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fielddata/_html.twig"));

        // line 2
        echo "
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ckeditor/ckeditor.js", "bolt"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1b6bf45de916f67c58b5bc109fe3e05d15400f9126365c91cc7702c753dee803->leave($__internal_1b6bf45de916f67c58b5bc109fe3e05d15400f9126365c91cc7702c753dee803_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fielddata/_html.twig";
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
        return new Twig_Source("{### Scripts ###}

<script src=\"{{ asset('js/ckeditor/ckeditor.js', 'bolt') }}\"></script>
", "@bolt/editcontent/fielddata/_html.twig", "app://view/twig/editcontent/fielddata/_html.twig");
    }
}
