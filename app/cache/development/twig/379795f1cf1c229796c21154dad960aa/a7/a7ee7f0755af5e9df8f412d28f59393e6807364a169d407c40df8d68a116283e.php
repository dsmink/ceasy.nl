<?php

/* @bolt/_macro/_files_path.twig */
class __TwigTemplate_1ee1be23381d017afd1f18b7ca5d074573312c31b3fd3b1128ef5296d2f97ae1 extends Twig_Template
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
        $__internal_026ca29bb65738de1ef3bc866f5111793eb9f0387686b3da8360718c6e2d5f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026ca29bb65738de1ef3bc866f5111793eb9f0387686b3da8360718c6e2d5f1f->enter($__internal_026ca29bb65738de1ef3bc866f5111793eb9f0387686b3da8360718c6e2d5f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_macro/_files_path.twig"));

        
        $__internal_026ca29bb65738de1ef3bc866f5111793eb9f0387686b3da8360718c6e2d5f1f->leave($__internal_026ca29bb65738de1ef3bc866f5111793eb9f0387686b3da8360718c6e2d5f1f_prof);

    }

    // line 1
    public function getfiles_path($__pathsegments__ = null, $__namespace__ = null, $__pathoptions__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pathsegments" => $__pathsegments__,
            "namespace" => $__namespace__,
            "pathoptions" => $__pathoptions__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c52d64d566f8138a9917dad8a40ae22fecf96f6bab414bc424cd3529ff6a0dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c52d64d566f8138a9917dad8a40ae22fecf96f6bab414bc424cd3529ff6a0dde->enter($__internal_c52d64d566f8138a9917dad8a40ae22fecf96f6bab414bc424cd3529ff6a0dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "files_path"));

            // line 2
            echo "    ";
            $context["namespace_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("files", (isset($context["pathoptions"]) ? $context["pathoptions"] : $this->getContext($context, "pathoptions")));
            // line 3
            echo "    <p>
        ";
            // line 4
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.path-colon");
            echo "
        <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["namespace_path"]) ? $context["namespace_path"] : $this->getContext($context, "namespace_path")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")), "html", null, true);
            echo "</a>

        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pathsegments"]) ? $context["pathsegments"] : $this->getContext($context, "pathsegments")));
            foreach ($context['_seq'] as $context["path"] => $context["segment"]) {
                // line 8
                echo "            /
            ";
                // line 9
                $context["pathoptions"] = twig_array_merge((isset($context["pathoptions"]) ? $context["pathoptions"] : $this->getContext($context, "pathoptions")), array("path" => $context["path"], "namespace" => (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace"))));
                // line 10
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("files", (isset($context["pathoptions"]) ? $context["pathoptions"] : $this->getContext($context, "pathoptions"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["segment"], "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </p>
";
            
            $__internal_c52d64d566f8138a9917dad8a40ae22fecf96f6bab414bc424cd3529ff6a0dde->leave($__internal_c52d64d566f8138a9917dad8a40ae22fecf96f6bab414bc424cd3529ff6a0dde_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@bolt/_macro/_files_path.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 12,  70 => 10,  68 => 9,  65 => 8,  61 => 7,  54 => 5,  50 => 4,  47 => 3,  44 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro files_path(pathsegments, namespace, pathoptions) %}
    {% set namespace_path = path('files', pathoptions) %}
    <p>
        {{ __('general.phrase.path-colon') }}
        <a href=\"{{ namespace_path }}\">{{ namespace }}</a>

        {% for path, segment in pathsegments %}
            /
            {% set pathoptions = pathoptions|merge({'path': path, 'namespace': namespace}) %}
            <a href=\"{{ path('files', pathoptions) }}\">{{ segment }}</a>
        {% endfor %}
    </p>
{% endmacro %}
", "@bolt/_macro/_files_path.twig", "app://view/twig/_macro/_files_path.twig");
    }
}
