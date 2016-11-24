<?php

/* boltforms_custom.twig */
class __TwigTemplate_78d36c8a72329e10345cc72e22fdc595b82b5121bd8d1c27da5944c16a076986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d5f1f9249ec7d07135298e8fcc81d65fd3689c986b2f1fa37d1b99e73657337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5f1f9249ec7d07135298e8fcc81d65fd3689c986b2f1fa37d1b99e73657337->enter($__internal_8d5f1f9249ec7d07135298e8fcc81d65fd3689c986b2f1fa37d1b99e73657337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "boltforms_custom.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_8d5f1f9249ec7d07135298e8fcc81d65fd3689c986b2f1fa37d1b99e73657337->leave($__internal_8d5f1f9249ec7d07135298e8fcc81d65fd3689c986b2f1fa37d1b99e73657337_prof);

    }

    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_845dc483e64f2b4d638a2f1133eca8f0643ceffac91b5f41d87b7c9020c772e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845dc483e64f2b4d638a2f1133eca8f0643ceffac91b5f41d87b7c9020c772e6->enter($__internal_845dc483e64f2b4d638a2f1133eca8f0643ceffac91b5f41d87b7c9020c772e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 3
        echo "    ";
        ob_start();
        // line 4
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 5
            echo "        <ul class=\"boltform-error\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 7
                echo "                <li class=\"boltform-error\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </ul>
        ";
        }
        // line 11
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_845dc483e64f2b4d638a2f1133eca8f0643ceffac91b5f41d87b7c9020c772e6->leave($__internal_845dc483e64f2b4d638a2f1133eca8f0643ceffac91b5f41d87b7c9020c772e6_prof);

    }

    public function getTemplateName()
    {
        return "boltforms_custom.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  60 => 9,  51 => 7,  47 => 6,  44 => 5,  41 => 4,  38 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block form_errors %}
    {% spaceless %}
        {% if errors|length > 0 %}
        <ul class=\"boltform-error\">
            {% for error in errors %}
                <li class=\"boltform-error\">{{ error.message }}</li>
            {% endfor %}
        </ul>
        {% endif %}
    {% endspaceless %}
{% endblock form_errors %}
", "boltforms_custom.twig", "extensions://vendor/bolt/boltforms/templates/boltforms_custom.twig");
    }
}
