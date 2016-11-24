<?php

/* boltforms_form.twig */
class __TwigTemplate_1836a630a39911125ce05e8d4c59e8e3e9eb9db715e6058206f66c14d814d332 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'boltforms_css' => array($this, 'block_boltforms_css'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_400c2703ea4da1ed2d372b07acf4c2ffe46bf739ce9188663344db42f963dbdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400c2703ea4da1ed2d372b07acf4c2ffe46bf739ce9188663344db42f963dbdd->enter($__internal_400c2703ea4da1ed2d372b07acf4c2ffe46bf739ce9188663344db42f963dbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "boltforms_form.twig"));

        // line 5
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "boltforms_custom.twig"));
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('boltforms_css', $context, $blocks);
        // line 10
        echo "
<div class=\"boltform\">
";
        // line 12
        if ((isset($context["debug"]) ? $context["debug"] : $this->getContext($context, "debug"))) {
            // line 13
            echo "    <p class=\"boltform-error\">[Debug] Notification debug mode enabled!</p>
";
        }
        // line 15
        echo "
";
        // line 16
        if (((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => (isset($context["formname"]) ? $context["formname"] : $this->getContext($context, "formname"))), "method"))) {
            // line 17
            echo "    <p class=\"boltform-error\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</p>
";
        }
        // line 19
        echo "
";
        // line 20
        if (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => (isset($context["formname"]) ? $context["formname"] : $this->getContext($context, "formname"))), "method"))) {
            // line 21
            echo "    <p class=\"boltform-message\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
";
        }
        // line 23
        echo "
";
        // line 24
        if ( !(isset($context["sent"]) ? $context["sent"] : $this->getContext($context, "sent"))) {
            // line 25
            echo "
    ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["html_pre"]) ? $context["html_pre"] : $this->getContext($context, "html_pre")), "html", null, true);
            echo "

    ";
            // line 28
            if (($this->getAttribute((isset($context["recaptcha"]) ? $context["recaptcha"] : $this->getContext($context, "recaptcha")), "enabled", array()) && (($this->getAttribute((isset($context["recaptcha"]) ? $context["recaptcha"] : null), "theme", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["recaptcha"]) ? $context["recaptcha"] : null), "theme", array()), "clean")) : ("clean")))) {
                // line 29
                echo "    <script>
        var RecaptchaOptions = {
            theme : '";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recaptcha"]) ? $context["recaptcha"] : $this->getContext($context, "recaptcha")), "theme", array()), "html", null, true);
                echo "'
        };
    </script>
    ";
            }
            // line 35
            echo "
    ";
            // line 36
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("name" => (isset($context["formname"]) ? $context["formname"] : $this->getContext($context, "formname")))));
            echo "
        ";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "

        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 40
                echo "            ";
                if (($this->getAttribute($this->getAttribute($context["value"], "config", array()), "name", array()) != "submit")) {
                    // line 41
                    echo "            <div class=\"boltforms-row";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $context["key"], array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) {
                        echo " boltforms-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["key"], array(), "array"), "vars", array()), "attr", array()), "class", array()), "html", null, true);
                        echo "-row";
                    }
                    echo "\">
                <span class=\"boltforms-label\">";
                    // line 42
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["key"], array(), "array"), 'label');
                    echo "</span>
                <span class=\"boltforms-error\">";
                    // line 43
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["key"], array(), "array"), 'errors');
                    echo "</span>
                ";
                    // line 44
                    $context["value"] = array();
                    // line 45
                    echo "                ";
                    if ((($this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), $context["key"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), $context["key"], array(), "array"))) : (""))) {
                        // line 46
                        echo "                    ";
                        $context["value"] = array("value" => (($this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), $context["key"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), $context["key"], array(), "array"))) : ("")));
                        // line 47
                        echo "                ";
                    }
                    // line 48
                    echo "                <span class=\"boltforms-value\">";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["key"], array(), "array"), 'widget', $context["value"]);
                    echo "</span>
            </div>
            ";
                }
                // line 51
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
        ";
            // line 53
            if ($this->getAttribute((isset($context["recaptcha"]) ? $context["recaptcha"] : $this->getContext($context, "recaptcha")), "enabled", array())) {
                // line 54
                echo "
            ";
                // line 55
                if ( !$this->getAttribute((isset($context["recaptcha"]) ? $context["recaptcha"] : $this->getContext($context, "recaptcha")), "valid", array())) {
                    // line 56
                    echo "            <ul class=\"boltform-error\">
                <li class=\"boltform-errors\">";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recaptcha"]) ? $context["recaptcha"] : $this->getContext($context, "recaptcha")), "error_message", array()), "html", null, true);
                    echo "</li>
            </ul>
            ";
                }
                // line 60
                echo "
            <div class=\"boltform-row\">
                <label for=\"form_message\" class=\"required\">";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["recaptcha"]) ? $context["recaptcha"] : $this->getContext($context, "recaptcha")), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</label>
                <script src=\"https://www.google.com/recaptcha/api.js?hl=";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->htmlLang(), "html", null, true);
                echo "\" async defer></script>
                <div class=\"g-recaptcha\" data-sitekey=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recaptcha"]) ? $context["recaptcha"] : $this->getContext($context, "recaptcha")), "public_key", array()), "html", null, true);
                echo "\"></div>
            </div>

        ";
            }
            // line 68
            echo "
        <br>

        <div class=\"boltforms-row";
            // line 71
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array(), "any", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) {
                echo " boltforms-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), "vars", array()), "attr", array()), "class", array()), "html", null, true);
                echo "-row";
            }
            echo "\">
            ";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
            echo "
        </div>

    ";
            // line 75
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "

";
        } else {
            // line 78
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["html_post"]) ? $context["html_post"] : $this->getContext($context, "html_post")), "html", null, true);
            echo "
";
        }
        // line 80
        echo "</div>

";
        
        $__internal_400c2703ea4da1ed2d372b07acf4c2ffe46bf739ce9188663344db42f963dbdd->leave($__internal_400c2703ea4da1ed2d372b07acf4c2ffe46bf739ce9188663344db42f963dbdd_prof);

    }

    // line 7
    public function block_boltforms_css($context, array $blocks = array())
    {
        $__internal_0971a2d055088c1d49ad2067a3bdb1678a2c3a7c0b828eeab7d65b56fa83e207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0971a2d055088c1d49ad2067a3bdb1678a2c3a7c0b828eeab7d65b56fa83e207->enter($__internal_0971a2d055088c1d49ad2067a3bdb1678a2c3a7c0b828eeab7d65b56fa83e207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boltforms_css"));

        // line 8
        echo "<link href=\"";
        echo twig_escape_filter($this->env, (isset($context["webpath"]) ? $context["webpath"] : $this->getContext($context, "webpath")), "html", null, true);
        echo "/boltforms.css\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_0971a2d055088c1d49ad2067a3bdb1678a2c3a7c0b828eeab7d65b56fa83e207->leave($__internal_0971a2d055088c1d49ad2067a3bdb1678a2c3a7c0b828eeab7d65b56fa83e207_prof);

    }

    public function getTemplateName()
    {
        return "boltforms_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 8,  226 => 7,  217 => 80,  211 => 78,  205 => 75,  199 => 72,  191 => 71,  186 => 68,  179 => 64,  175 => 63,  171 => 62,  167 => 60,  161 => 57,  158 => 56,  156 => 55,  153 => 54,  151 => 53,  148 => 52,  142 => 51,  135 => 48,  132 => 47,  129 => 46,  126 => 45,  124 => 44,  120 => 43,  116 => 42,  107 => 41,  104 => 40,  100 => 39,  95 => 37,  91 => 36,  88 => 35,  81 => 31,  77 => 29,  75 => 28,  70 => 26,  67 => 25,  65 => 24,  62 => 23,  56 => 21,  54 => 20,  51 => 19,  45 => 17,  43 => 16,  40 => 15,  36 => 13,  34 => 12,  30 => 10,  28 => 7,  25 => 6,  23 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
 # Passed in variables:
 #   webpath     - URI for the default web assets
 #}
{% form_theme form 'boltforms_custom.twig' %}

{% block boltforms_css %}
<link href=\"{{ webpath }}/boltforms.css\" rel=\"stylesheet\" type=\"text/css\" />
{% endblock boltforms_css %}

<div class=\"boltform\">
{% if debug %}
    <p class=\"boltform-error\">[Debug] Notification debug mode enabled!</p>
{% endif %}

{% if error and app.request.get(formname) %}
    <p class=\"boltform-error\">{{ error }}</p>
{% endif %}

{% if message and app.request.get(formname) %}
    <p class=\"boltform-message\">{{ message }}</p>
{% endif %}

{% if not sent %}

    {{ html_pre }}

    {% if recaptcha.enabled and recaptcha.theme|default('clean') %}
    <script>
        var RecaptchaOptions = {
            theme : '{{ recaptcha.theme }}'
        };
    </script>
    {% endif %}

    {{ form_start(form, {'attr': {'name': formname}}) }}
        {{ form_errors(form) }}

        {% for key, value in fields  %}
            {% if value.config.name != 'submit' %}
            <div class=\"boltforms-row{% if form[key].vars.attr.class is defined %} boltforms-{{ form[key].vars.attr.class }}-row{% endif %}\">
                <span class=\"boltforms-label\">{{ form_label(form[key]) }}</span>
                <span class=\"boltforms-error\">{{ form_errors(form[key]) }}</span>
                {% set value = {} %}
                {% if defaults[key]|default() %}
                    {% set value = { 'value': defaults[key]|default() } %}
                {% endif %}
                <span class=\"boltforms-value\">{{ form_widget(form[key], value) }}</span>
            </div>
            {% endif %}
        {% endfor %}

        {% if recaptcha.enabled %}

            {% if not recaptcha.valid %}
            <ul class=\"boltform-error\">
                <li class=\"boltform-errors\">{{ recaptcha.error_message }}</li>
            </ul>
            {% endif %}

            <div class=\"boltform-row\">
                <label for=\"form_message\" class=\"required\">{{ recaptcha.label|trans({}, translation_domain) }}</label>
                <script src=\"https://www.google.com/recaptcha/api.js?hl={{ htmllang() }}\" async defer></script>
                <div class=\"g-recaptcha\" data-sitekey=\"{{ recaptcha.public_key }}\"></div>
            </div>

        {% endif %}

        <br>

        <div class=\"boltforms-row{% if form.submit.vars.attr.class is defined %} boltforms-{{ form.submit.vars.attr.class }}-row{% endif %}\">
            {{ form_widget(form.submit) }}
        </div>

    {{ form_end(form) }}

{% else %}
    {{ html_post }}
{% endif %}
</div>

", "boltforms_form.twig", "extensions://vendor/bolt/boltforms/templates/boltforms_form.twig");
    }
}
