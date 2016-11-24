<?php

/* partials/_footer.twig */
class __TwigTemplate_ef9a0f8f1cc447fec0a0f9fa187969debe40ce0813615c6f5baf3133bbb95248 extends Twig_Template
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
        $__internal_86511d95545e0ef544b8e10f78bdd9ba06eb255f97078fe5a63b465c10ecdc0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86511d95545e0ef544b8e10f78bdd9ba06eb255f97078fe5a63b465c10ecdc0c->enter($__internal_86511d95545e0ef544b8e10f78bdd9ba06eb255f97078fe5a63b465c10ecdc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_footer.twig"));

        // line 1
        echo "<div class=\"row site-info\">
    </p>&copy; 2016 - CEasy.nl</p>
    <h6 class=\"h6\">
        Website: WebniX
        <span class=\"sep\"> | </span>
        Design: Nisarg door <a href=\"http://www.falgunidesai.com/\" rel=\"nofollow\" target=\"_blank\">Falguni Desai</a>.
    </h6>
</div>";
        
        $__internal_86511d95545e0ef544b8e10f78bdd9ba06eb255f97078fe5a63b465c10ecdc0c->leave($__internal_86511d95545e0ef544b8e10f78bdd9ba06eb255f97078fe5a63b465c10ecdc0c_prof);

    }

    public function getTemplateName()
    {
        return "partials/_footer.twig";
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
        return new Twig_Source("<div class=\"row site-info\">
    </p>&copy; 2016 - CEasy.nl</p>
    <h6 class=\"h6\">
        Website: WebniX
        <span class=\"sep\"> | </span>
        Design: Nisarg door <a href=\"http://www.falgunidesai.com/\" rel=\"nofollow\" target=\"_blank\">Falguni Desai</a>.
    </h6>
</div>", "partials/_footer.twig", "theme://partials/_footer.twig");
    }
}
