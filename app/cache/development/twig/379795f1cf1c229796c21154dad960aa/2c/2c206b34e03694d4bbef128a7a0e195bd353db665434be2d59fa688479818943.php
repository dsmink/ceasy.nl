<?php

/* @bolt/_nav/_secondary.twig */
class __TwigTemplate_156a04c2b3282b52d8191ee2f47ad3d1bc3ee120ab6dc6b6c63f032709f071d6 extends Twig_Template
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
        $__internal_35b002e2bc3c9f7bbe765fd2acdc1b0735efe198c74d3892b8b49b422f4dbd9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b002e2bc3c9f7bbe765fd2acdc1b0735efe198c74d3892b8b49b422f4dbd9e->enter($__internal_35b002e2bc3c9f7bbe765fd2acdc1b0735efe198c74d3892b8b49b422f4dbd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary.twig"));

        // line 1
        $context["nav"] = $this->loadTemplate("@bolt/_nav/_macros.twig", "@bolt/_nav/_secondary.twig", 1);
        // line 2
        echo "
<ul class=\"nav\">
    ";
        // line 4
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "authentication"), "method"))) {
            // line 5
            echo "
        ";
            // line 7
            echo "        ";
            echo twig_include($this->env, $context, "@bolt/_nav/_secondary-search.twig");
            echo "

        ";
            // line 10
            echo "        ";
            echo $context["nav"]->getlink("fa:dashboard", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.dashboard"), "dashboard", ((isset($context["page_nav"]) ? $context["page_nav"] : $this->getContext($context, "page_nav")) == "Dashboard"));
            echo "

        ";
            // line 13
            echo "        <li class=\"visible-xs\">
            <a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" target=\"_blank\"><i class=\"icon fa fa-external-link-square\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.view-site");
            echo "</a>
        </li>

        ";
            // line 18
            echo "        ";
            echo $context["nav"]->getheading($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Content"), "fa:file-text");
            echo "
        ";
            // line 19
            echo twig_include($this->env, $context, "@bolt/_nav/_secondary-content.twig");
            echo "

        ";
            // line 22
            echo "        ";
            if ($this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed("settings")) {
                // line 23
                echo "            ";
                ob_start();
                echo twig_include($this->env, $context, "@bolt/_nav/_secondary-configuration.twig");
                $context["nav_config"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 24
                echo "            ";
                ob_start();
                echo twig_include($this->env, $context, "@bolt/_nav/_secondary-filemanagement.twig");
                $context["nav_files"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 25
                echo "            ";
                ob_start();
                echo twig_include($this->env, $context, "@bolt/_nav/_secondary-translations.twig");
                $context["nav_trans"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 26
                echo "            ";
                // line 27
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "menu.admin", array(), "array"), "get", array(0 => "extend"), "method"), "children", array()) || $this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed("extensions||extensions:config"))) {
                    // line 28
                    echo "                ";
                    ob_start();
                    echo twig_include($this->env, $context, "@bolt/_nav/_secondary-extensions.twig");
                    $context["nav_extend"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 29
                    echo "            ";
                } else {
                    // line 30
                    echo "                ";
                    $context["nav_extend"] = "";
                    // line 31
                    echo "            ";
                }
                // line 32
                echo "
            ";
                // line 33
                if ((((trim((isset($context["nav_config"]) ? $context["nav_config"] : $this->getContext($context, "nav_config"))) || trim((isset($context["nav_files"]) ? $context["nav_files"] : $this->getContext($context, "nav_files")))) || trim((isset($context["nav_trans"]) ? $context["nav_trans"] : $this->getContext($context, "nav_trans")))) || trim((isset($context["nav_extend"]) ? $context["nav_extend"] : $this->getContext($context, "nav_extend"))))) {
                    // line 34
                    echo "                ";
                    echo $context["nav"]->getheading($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.settings"), "fa:wrench");
                    echo "

                ";
                    // line 36
                    echo twig_escape_filter($this->env, (isset($context["nav_config"]) ? $context["nav_config"] : $this->getContext($context, "nav_config")), "html", null, true);
                    echo "
                ";
                    // line 37
                    echo twig_escape_filter($this->env, (isset($context["nav_files"]) ? $context["nav_files"] : $this->getContext($context, "nav_files")), "html", null, true);
                    echo "
                ";
                    // line 38
                    echo twig_escape_filter($this->env, (isset($context["nav_trans"]) ? $context["nav_trans"] : $this->getContext($context, "nav_trans")), "html", null, true);
                    echo "
                ";
                    // line 39
                    echo twig_escape_filter($this->env, (isset($context["nav_extend"]) ? $context["nav_extend"] : $this->getContext($context, "nav_extend")), "html", null, true);
                    echo "
            ";
                }
                // line 41
                echo "
        ";
            }
            // line 43
            echo "

        ";
            // line 45
            echo $context["nav"]->getcollapse();
            echo "

    ";
        } else {
            // line 48
            echo "
        ";
            // line 50
            echo "        <li>
            <a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" target=\"_blank\"><i class=\"fa fa-external-link-square\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.view-site");
            echo "</a>
        </li>

        ";
            // line 55
            echo "        <li>
            <a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"><i class=\"fa fa-signin\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.login");
            echo "</a>
        </li>
    ";
        }
        // line 59
        echo "</ul>
";
        
        $__internal_35b002e2bc3c9f7bbe765fd2acdc1b0735efe198c74d3892b8b49b422f4dbd9e->leave($__internal_35b002e2bc3c9f7bbe765fd2acdc1b0735efe198c74d3892b8b49b422f4dbd9e_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 59,  162 => 56,  159 => 55,  151 => 51,  148 => 50,  145 => 48,  139 => 45,  135 => 43,  131 => 41,  126 => 39,  122 => 38,  118 => 37,  114 => 36,  108 => 34,  106 => 33,  103 => 32,  100 => 31,  97 => 30,  94 => 29,  89 => 28,  86 => 27,  84 => 26,  79 => 25,  74 => 24,  69 => 23,  66 => 22,  61 => 19,  56 => 18,  48 => 14,  45 => 13,  39 => 10,  33 => 7,  30 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@bolt/_nav/_macros.twig' as nav %}

<ul class=\"nav\">
    {% if app.session.get('authentication') is not null %}

        {# Omnisearch: one here for \"extra small\", the other in the header-navbar #}
        {{ include('@bolt/_nav/_secondary-search.twig') }}

        {# Dashboard #}
        {{ nav.link('fa:dashboard', __('general.phrase.dashboard'), 'dashboard', (page_nav == 'Dashboard')) }}

        {# View site #}
        <li class=\"visible-xs\">
            <a href=\"{{ path('homepage') }}\" target=\"_blank\"><i class=\"icon fa fa-external-link-square\"></i> {{ __('general.phrase.view-site') }}</a>
        </li>

        {# ContentTypes #}
        {{ nav.heading(__('Content'), 'fa:file-text') }}
        {{ include('@bolt/_nav/_secondary-content.twig') }}

        {# Settings #}
        {% if isallowed('settings') %}
            {% set nav_config %}{{ include('@bolt/_nav/_secondary-configuration.twig') }}{% endset %}
            {% set nav_files %}{{ include('@bolt/_nav/_secondary-filemanagement.twig') }}{% endset %}
            {% set nav_trans %}{{ include('@bolt/_nav/_secondary-translations.twig') }}{% endset %}
            {# Link to Extend Bolt #}
            {% if app['menu.admin'].get('extend').children or isallowed('extensions||extensions:config') %}
                {% set nav_extend %}{{ include('@bolt/_nav/_secondary-extensions.twig') }}{% endset %}
            {% else %}
                {% set nav_extend = '' %}
            {% endif %}

            {% if nav_config|trim or nav_files|trim or nav_trans|trim or nav_extend|trim %}
                {{ nav.heading(__('general.phrase.settings'), 'fa:wrench') }}

                {{ nav_config }}
                {{ nav_files }}
                {{ nav_trans }}
                {{ nav_extend }}
            {% endif %}

        {% endif %}


        {{ nav.collapse() }}

    {% else %}

        {# View site #}
        <li>
            <a href=\"{{ path('homepage') }}\" target=\"_blank\"><i class=\"fa fa-external-link-square\"></i> {{ __('general.phrase.view-site') }}</a>
        </li>

        {# Login #}
        <li>
            <a href=\"{{ path('login') }}\"><i class=\"fa fa-signin\"></i> {{ __('general.phrase.login') }}</a>
        </li>
    {% endif %}
</ul>
", "@bolt/_nav/_secondary.twig", "app://view/twig/_nav/_secondary.twig");
    }
}
