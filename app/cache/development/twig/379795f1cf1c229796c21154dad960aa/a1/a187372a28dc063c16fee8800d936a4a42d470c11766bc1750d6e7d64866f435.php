<?php

/* @bolt/exception/_tracedumps.twig */
class __TwigTemplate_6d7450f4aa61850cbba0cc647a8a26beaeca114c3471bc2b074cd9a0b9597706 extends Twig_Template
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
        $__internal_ee4b0e9cddd27c92ada2c94230f66109546ed9f1c6edcd02991f0fc2cd6fed52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4b0e9cddd27c92ada2c94230f66109546ed9f1c6edcd02991f0fc2cd6fed52->enter($__internal_ee4b0e9cddd27c92ada2c94230f66109546ed9f1c6edcd02991f0fc2cd6fed52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/exception/_tracedumps.twig"));

        // line 1
        echo "<div style=\"display: none;\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 3
            echo "
    ";
            // line 4
            if ( !twig_test_empty($this->getAttribute($context["t"], "args_safe", array()))) {
                // line 5
                echo "    <div id='arguments-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "' class='trace-arguments-placeholder'>
        Arguments:
        ";
                // line 7
                echo $this->env->getExtension('Bolt\Twig\DumpExtension')->dump($this->env, $context, $this->getAttribute($context["t"], "args", array()));
                echo "
    </div>
    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>
";
        
        $__internal_ee4b0e9cddd27c92ada2c94230f66109546ed9f1c6edcd02991f0fc2cd6fed52->leave($__internal_ee4b0e9cddd27c92ada2c94230f66109546ed9f1c6edcd02991f0fc2cd6fed52_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/exception/_tracedumps.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  53 => 7,  47 => 5,  45 => 4,  42 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"display: none;\">
{% for t in exception.trace %}

    {% if t.args_safe is not empty %}
    <div id='arguments-{{loop.index}}' class='trace-arguments-placeholder'>
        Arguments:
        {{ dump(t.args) }}
    </div>
    {% endif %}
{% endfor %}
</div>
", "@bolt/exception/_tracedumps.twig", "app://view/twig/exception/_tracedumps.twig");
    }
}
