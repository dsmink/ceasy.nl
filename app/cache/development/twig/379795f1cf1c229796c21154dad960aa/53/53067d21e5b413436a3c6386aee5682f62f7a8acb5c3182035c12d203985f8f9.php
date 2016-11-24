<?php

/* partials/_main_menu.twig */
class __TwigTemplate_f3f258f2ac61996f2b545442b32bb4eb4891986351f81d966893328a00a57760 extends Twig_Template
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
        $__internal_c11b11a1e7065f0eaed4aec8fd6c8bf708d2c19ca50c9125cb2c3444cde5e250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11b11a1e7065f0eaed4aec8fd6c8bf708d2c19ca50c9125cb2c3444cde5e250->enter($__internal_c11b11a1e7065f0eaed4aec8fd6c8bf708d2c19ca50c9125cb2c3444cde5e250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_main_menu.twig"));

        // line 1
        echo "<ul id=\"menu-hoofd-menu\" class=\"nav navbar-nav\">";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown\">
        <a title=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
            echo "\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
            echo " <span class=\"caret\"></span>
        </a>";
            // line 7
            if ($this->getAttribute($context["item"], "submenu", array(), "any", true, true)) {
                // line 8
                echo "<ul role=\"menu\" class=\" dropdown-menu\">";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "submenu", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 10
                    echo "<li class=\"menu-item menu-item-type-post_type menu-item-object-page\">
                        <a title=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "label", array()), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "link", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "label", array()), "html", null, true);
                    echo "</a>
                    </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "</ul>";
            }
            // line 16
            echo "</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</ul>";
        
        $__internal_c11b11a1e7065f0eaed4aec8fd6c8bf708d2c19ca50c9125cb2c3444cde5e250->leave($__internal_c11b11a1e7065f0eaed4aec8fd6c8bf708d2c19ca50c9125cb2c3444cde5e250_prof);

    }

    public function getTemplateName()
    {
        return "partials/_main_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  66 => 16,  63 => 14,  51 => 11,  48 => 10,  44 => 9,  42 => 8,  40 => 7,  36 => 5,  31 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul id=\"menu-hoofd-menu\" class=\"nav navbar-nav\">
    {%- for item in menu -%}
    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown\">
        <a title=\"{{- item.label }}\" href=\"{{ item.link }}\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">
            {{- item.label }} <span class=\"caret\"></span>
        </a>
        {%- if item.submenu is defined -%}
            <ul role=\"menu\" class=\" dropdown-menu\">
                {%- for child in item.submenu -%}
                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page\">
                        <a title=\"{{- child.label -}}\" href=\"{{- child.link }}\">{{- child.label -}}</a>
                    </li>
                {%- endfor -%}
            </ul>
        {%- endif -%}
    </li>
    {%- endfor -%}
</ul>", "partials/_main_menu.twig", "theme://partials/_main_menu.twig");
    }
}
