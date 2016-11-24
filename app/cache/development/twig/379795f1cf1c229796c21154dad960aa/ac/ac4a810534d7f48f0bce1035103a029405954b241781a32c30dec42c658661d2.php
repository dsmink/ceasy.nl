<?php

/* @bolt/_macro/_panels.twig */
class __TwigTemplate_aba433162ad37ac198aa8de724a6480db04c814702063c76903e96fccffc5f86 extends Twig_Template
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
        $__internal_81e45e5679e62576500f05580b32144c3e7b9b8550b6a79622d89e063ea8ef9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e45e5679e62576500f05580b32144c3e7b9b8550b6a79622d89e063ea8ef9d->enter($__internal_81e45e5679e62576500f05580b32144c3e7b9b8550b6a79622d89e063ea8ef9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_macro/_panels.twig"));

        // line 14
        echo "

";
        // line 29
        echo "

";
        
        $__internal_81e45e5679e62576500f05580b32144c3e7b9b8550b6a79622d89e063ea8ef9d->leave($__internal_81e45e5679e62576500f05580b32144c3e7b9b8550b6a79622d89e063ea8ef9d_prof);

    }

    // line 7
    public function getstack($__items__ = null, $__ommit_empty__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "ommit_empty" => $__ommit_empty__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_02c765fda3e0c50f524576129a5d73545137ea43abb681cf6618afe99e4f0581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_02c765fda3e0c50f524576129a5d73545137ea43abb681cf6618afe99e4f0581->enter($__internal_02c765fda3e0c50f524576129a5d73545137ea43abb681cf6618afe99e4f0581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "stack"));

            // line 8
            echo "    ";
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config", array()), "get", array(0 => "general/backend/stack/disable", 1 => false), "method")) {
                // line 9
                echo "        ";
                if (( !((array_key_exists("ommit_empty", $context)) ? (_twig_default_filter((isset($context["ommit_empty"]) ? $context["ommit_empty"] : $this->getContext($context, "ommit_empty")), false)) : (false)) ||  !twig_test_empty($this->env->getExtension('Bolt\Twig\TwigExtension')->stackItems()))) {
                    // line 10
                    echo "            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stack/show", array("items" => ((array_key_exists("item", $context)) ? (_twig_default_filter((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 10)) : (10)))));
                    echo "
        ";
                }
                // line 12
                echo "    ";
            }
            
            $__internal_02c765fda3e0c50f524576129a5d73545137ea43abb681cf6618afe99e4f0581->leave($__internal_02c765fda3e0c50f524576129a5d73545137ea43abb681cf6618afe99e4f0581_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getlastmodified($__contenttype_slug__ = null, $__content_id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype_slug" => $__contenttype_slug__,
            "content_id" => $__content_id__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8c8099995155eba8f62068ae187d8a690ec157639826c64a692d4d78436148b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_8c8099995155eba8f62068ae187d8a690ec157639826c64a692d4d78436148b3->enter($__internal_8c8099995155eba8f62068ae187d8a690ec157639826c64a692d4d78436148b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "lastmodified"));

            // line 23
            echo "    ";
            if ((((array_key_exists("content_id", $context)) ? (_twig_default_filter((isset($context["content_id"]) ? $context["content_id"] : $this->getContext($context, "content_id")), false)) : (false)) ||  !twig_test_empty($this->env->getExtension('Bolt\Twig\TwigExtension')->stackItems()))) {
                // line 24
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lastmodified", array("contenttypeslug" => (isset($context["contenttype_slug"]) ? $context["contenttype_slug"] : $this->getContext($context, "contenttype_slug")))));
                echo "
    ";
            } else {
                // line 26
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lastmodified", array("contenttypeslug" => (isset($context["contenttype_slug"]) ? $context["contenttype_slug"] : $this->getContext($context, "contenttype_slug")), "contentid" => (isset($context["content_id"]) ? $context["content_id"] : $this->getContext($context, "content_id")))));
                echo "
    ";
            }
            
            $__internal_8c8099995155eba8f62068ae187d8a690ec157639826c64a692d4d78436148b3->leave($__internal_8c8099995155eba8f62068ae187d8a690ec157639826c64a692d4d78436148b3_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getchanges($__contenttype_slug__ = null, $__content_id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype_slug" => $__contenttype_slug__,
            "content_id" => $__content_id__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_1ea78c2b9b4363ea19b9b82bacf18ef382683337cfc9c7e3a86746664654aac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_1ea78c2b9b4363ea19b9b82bacf18ef382683337cfc9c7e3a86746664654aac0->enter($__internal_1ea78c2b9b4363ea19b9b82bacf18ef382683337cfc9c7e3a86746664654aac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "changes"));

            // line 38
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config", array()), "get", array(0 => "general/changelog/enabled", 1 => true), "method")) {
                // line 39
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changelogrecord", array("contenttype" => (isset($context["contenttype_slug"]) ? $context["contenttype_slug"] : $this->getContext($context, "contenttype_slug")), "contentid" => (isset($context["content_id"]) ? $context["content_id"] : $this->getContext($context, "content_id")))));
                echo "
    ";
            }
            
            $__internal_1ea78c2b9b4363ea19b9b82bacf18ef382683337cfc9c7e3a86746664654aac0->leave($__internal_1ea78c2b9b4363ea19b9b82bacf18ef382683337cfc9c7e3a86746664654aac0_prof);

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
        return "@bolt/_macro/_panels.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 39,  145 => 38,  129 => 37,  107 => 26,  101 => 24,  98 => 23,  82 => 22,  63 => 12,  57 => 10,  54 => 9,  51 => 8,  35 => 7,  26 => 29,  22 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # Renders a stack panel
 #
 # @param int  items (default: 10)
 # @param bool ommit_empty (default: false)
 #}
{% macro stack(items, ommit_empty) %}
    {% if not app.config.get('general/backend/stack/disable', false) %}
        {% if not ommit_empty|default(false) or stackitems() is not empty %}
            {{ render(path('stack/show', {'items': item|default(10)} )) }}
        {% endif %}
    {% endif %}
{% endmacro %}


{##
 # Renders a last modified panel
 #
 # @param string contenttype_slug
 # @param mixed  content_id (default: false)
 #}
{% macro lastmodified(contenttype_slug, content_id) %}
    {% if content_id|default(false) or stackitems() is not empty %}
        {{ render(path('lastmodified', {'contenttypeslug': contenttype_slug})) }}
    {% else %}
        {{ render(path('lastmodified', {'contenttypeslug': contenttype_slug, 'contentid': content_id})) }}
    {% endif %}
{% endmacro %}


{##
 # Renders a record changes panel
 #
 # @param string contenttype_slug
 # @param mixed  content_id (default: false)
 #}
{% macro changes(contenttype_slug, content_id) %}
    {% if app.config.get('general/changelog/enabled', true) %}
        {{ render(path('changelogrecord', {'contenttype': contenttype_slug, 'contentid': content_id})) }}
    {% endif %}
{% endmacro %}
", "@bolt/_macro/_panels.twig", "app://view/twig/_macro/_panels.twig");
    }
}
