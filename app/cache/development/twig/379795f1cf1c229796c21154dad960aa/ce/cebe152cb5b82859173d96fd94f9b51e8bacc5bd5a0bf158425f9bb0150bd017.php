<?php

/* @bolt/exception/exception.twig */
class __TwigTemplate_47c3e7ce3410283f513ce6a8d9348ba09b7ef89ab5928711f0999149b26709db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'page_main' => array($this, 'block_page_main'),
            'title' => array($this, 'block_title'),
            'exception' => array($this, 'block_exception'),
            'trace' => array($this, 'block_trace'),
            'request' => array($this, 'block_request'),
            'tracedumps' => array($this, 'block_tracedumps'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_603adc64c1846ccd8b5692c2f5f819a43d1197091d764139563bcf9cb05de2fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603adc64c1846ccd8b5692c2f5f819a43d1197091d764139563bcf9cb05de2fd->enter($__internal_603adc64c1846ccd8b5692c2f5f819a43d1197091d764139563bcf9cb05de2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/exception/exception.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">

    <title>Uncaught Exception: ";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_name", array()), "unknown")) : ("unknown")), "html", null, true);
        echo "</title>

    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bolt.css", "bolt"), "html", null, true);
        echo "\">
    ";
        // line 11
        if (((isset($context["debug"]) ? $context["debug"] : $this->getContext($context, "debug")) && $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "snippet", array()))) {
            // line 12
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bolt_exception.css", "bolt"), "html", null, true);
            echo "\">
        <script src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js", "bolt"), "html", null, true);
            echo "\" defer></script>
        <script src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bolt_exception.js", "bolt"), "html", null, true);
            echo "\" defer></script>
    ";
        }
        // line 16
        echo "</head>

<body class=\"login exception\">

    ";
        // line 20
        $this->displayBlock('page_plain', $context, $blocks);
        // line 96
        echo "
</body>
</html>

";
        // line 100
        $this->displayBlock('tracedumps', $context, $blocks);
        
        $__internal_603adc64c1846ccd8b5692c2f5f819a43d1197091d764139563bcf9cb05de2fd->leave($__internal_603adc64c1846ccd8b5692c2f5f819a43d1197091d764139563bcf9cb05de2fd_prof);

    }

    // line 20
    public function block_page_plain($context, array $blocks = array())
    {
        $__internal_367337515a440f6423cd4295bb8220cfc3e02217ce6bfbfc1b4ecf6382a538b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367337515a440f6423cd4295bb8220cfc3e02217ce6bfbfc1b4ecf6382a538b5->enter($__internal_367337515a440f6423cd4295bb8220cfc3e02217ce6bfbfc1b4ecf6382a538b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plain"));

        // line 21
        echo "    <div class=\"container\">

        <div class=\"row\">
            <div class=\"";
        // line 24
        echo twig_escape_filter($this->env, ((array_key_exists("form_class", $context)) ? (_twig_default_filter((isset($context["form_class"]) ? $context["form_class"] : $this->getContext($context, "form_class")), "col-md-10 col-md-offset-1 col-sm-12")) : ("col-md-10 col-md-offset-1 col-sm-12")), "html", null, true);
        echo "\">

                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bolt-logo.png", "bolt"), "html", null, true);
        echo "\" width=\"100\" height=\"41\" alt=\"Bolt\" class=\"logo\">

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        ";
        // line 30
        $this->displayBlock('page_main', $context, $blocks);
        // line 89
        echo "                    </div>
                </div>

            </div>
        </div>
    </div>
    ";
        
        $__internal_367337515a440f6423cd4295bb8220cfc3e02217ce6bfbfc1b4ecf6382a538b5->leave($__internal_367337515a440f6423cd4295bb8220cfc3e02217ce6bfbfc1b4ecf6382a538b5_prof);

    }

    // line 30
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_5ef2d9c6f20e131ac2f99507edee435c170d8400370bbfc480df15565364de17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef2d9c6f20e131ac2f99507edee435c170d8400370bbfc480df15565364de17->enter($__internal_5ef2d9c6f20e131ac2f99507edee435c170d8400370bbfc480df15565364de17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 31
        echo "                        <div class=\"row\">
                            ";
        // line 33
        echo "
                            ";
        // line 34
        $this->displayBlock('title', $context, $blocks);
        // line 37
        echo "
                            ";
        // line 38
        $this->displayBlock('exception', $context, $blocks);
        // line 40
        echo "
                            <p class='exception'>
                                <tt><abbr title=\"";
        // line 42
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_fqn", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_fqn", array()), "unknown")) : ("unknown")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_name", array()), "unknown")) : ("unknown")), "html", null, true);
        echo "</abbr></tt> in <tt>";
        if ((isset($context["debug"]) ? $context["debug"] : $this->getContext($context, "debug"))) {
            echo "<abbr title=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "file_path", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "file_path", array()), "unknown")) : ("unknown")), "html", null, true);
            echo "\">";
        }
        // line 43
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "file_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "file_name", array()), "unknown")) : ("unknown")), "html", null, true);
        if ((isset($context["debug"]) ? $context["debug"] : $this->getContext($context, "debug"))) {
            echo "</abbr>";
        }
        echo "</tt> line <tt>";
        // line 44
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "object", array(), "any", false, true), "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "object", array(), "any", false, true), "line", array()), "unknown")) : ("unknown")), "html", null, true);
        echo "</tt>: <br>
                                <em><strong>";
        // line 45
        echo nl2br(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "object", array(), "any", false, true), "message", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "object", array(), "any", false, true), "message", array()), "unknown")) : ("unknown")), "html", null, true));
        echo "</strong></em>
                            </p>

                            ";
        // line 48
        if (((isset($context["debug"]) ? $context["debug"] : $this->getContext($context, "debug")) && $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "snippet", array()))) {
            // line 49
            echo "<pre class='line-numbers' data-start='";
            echo twig_escape_filter($this->env, max(($this->getAttribute($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "object", array()), "line", array()) - 5), 1), "html", null, true);
            echo "' data-line='6'><code class='language-php'>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "snippet", array()), "html", null, true);
            // line 51
            echo "</code></pre>";
        }
        // line 53
        echo "
                            <p class='exception'>
                                ";
        // line 56
        echo "                                ";
        $context["query"] = ((((((("Bolt " . (($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_name", array()), "unknown")) : ("unknown"))) . " in ") . (($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "file_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "file_name", array()), "unknown")) : ("unknown"))) . " line ") . (($this->getAttribute($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "object", array(), "any", false, true), "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "object", array(), "any", false, true), "line", array()), "unknown")) : ("unknown"))) . ": ") . (($this->getAttribute($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "object", array(), "any", false, true), "message", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "object", array(), "any", false, true), "message", array()), "unknown")) : ("unknown")));
        // line 57
        echo "                                <a class='btn btn-default' href='https://www.google.com/search?q=";
        echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "html", null, true);
        echo "' target='_blank'>Google this Exception</a>
                            </p>

                            ";
        // line 60
        $this->displayBlock('trace', $context, $blocks);
        // line 65
        echo "
                            <hr>

                            ";
        // line 68
        $this->displayBlock('request', $context, $blocks);
        // line 74
        echo "
                            ";
        // line 75
        if ( !(isset($context["debug"]) ? $context["debug"] : $this->getContext($context, "debug"))) {
            // line 76
            echo "                                <p>Debug is not available, and/or you are not logged on. To see a full backtrace of the
                                    Exception, do one of the following: </p>

                                <ul>
                                    <li>Set <tt>debug: true</tt> in <tt>config.yml</tt>, and make sure you're logged in
                                        to the Bolt Backend.</li>
                                    <li>Set both <tt>debug: true</tt> and <tt>debug_show_loggedoff: true</tt> in
                                        <tt>config.yml</tt>.
                                </ul>
                            ";
        }
        // line 86
        echo "
                        </div>
                        ";
        
        $__internal_5ef2d9c6f20e131ac2f99507edee435c170d8400370bbfc480df15565364de17->leave($__internal_5ef2d9c6f20e131ac2f99507edee435c170d8400370bbfc480df15565364de17_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ea901da628291c27423d5612fc06a7ab28009b94ca59dec4a97d27a743421bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea901da628291c27423d5612fc06a7ab28009b94ca59dec4a97d27a743421bf->enter($__internal_8ea901da628291c27423d5612fc06a7ab28009b94ca59dec4a97d27a743421bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 35
        echo "                                <h1>Uncaught Exception: ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_name", array()), "unknown")) : ("unknown")), "html", null, true);
        echo "</h1>
                            ";
        
        $__internal_8ea901da628291c27423d5612fc06a7ab28009b94ca59dec4a97d27a743421bf->leave($__internal_8ea901da628291c27423d5612fc06a7ab28009b94ca59dec4a97d27a743421bf_prof);

    }

    // line 38
    public function block_exception($context, array $blocks = array())
    {
        $__internal_03c1201b92ebf19a1dfcada6e6ba738b889d5f87519b4b5c332f4ab7496ed117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c1201b92ebf19a1dfcada6e6ba738b889d5f87519b4b5c332f4ab7496ed117->enter($__internal_03c1201b92ebf19a1dfcada6e6ba738b889d5f87519b4b5c332f4ab7496ed117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "exception"));

        // line 39
        echo "                            ";
        
        $__internal_03c1201b92ebf19a1dfcada6e6ba738b889d5f87519b4b5c332f4ab7496ed117->leave($__internal_03c1201b92ebf19a1dfcada6e6ba738b889d5f87519b4b5c332f4ab7496ed117_prof);

    }

    // line 60
    public function block_trace($context, array $blocks = array())
    {
        $__internal_a1a0ff74239b5f85a91aa293715fdce1a9d407f1e7c80b33031476cd99170f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a0ff74239b5f85a91aa293715fdce1a9d407f1e7c80b33031476cd99170f1e->enter($__internal_a1a0ff74239b5f85a91aa293715fdce1a9d407f1e7c80b33031476cd99170f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "trace"));

        // line 61
        echo "                                ";
        if ((isset($context["debug"]) ? $context["debug"] : $this->getContext($context, "debug"))) {
            // line 62
            echo "                                    ";
            echo twig_include($this->env, $context, "@bolt/exception/_trace.twig");
            echo "
                                ";
        }
        // line 64
        echo "                            ";
        
        $__internal_a1a0ff74239b5f85a91aa293715fdce1a9d407f1e7c80b33031476cd99170f1e->leave($__internal_a1a0ff74239b5f85a91aa293715fdce1a9d407f1e7c80b33031476cd99170f1e_prof);

    }

    // line 68
    public function block_request($context, array $blocks = array())
    {
        $__internal_8bda84f895720bc6efb8910d7eacba8f1b15de7e2427a75ebe336bce8a5aed01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bda84f895720bc6efb8910d7eacba8f1b15de7e2427a75ebe336bce8a5aed01->enter($__internal_8bda84f895720bc6efb8910d7eacba8f1b15de7e2427a75ebe336bce8a5aed01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "request"));

        // line 69
        echo "                                ";
        if (((isset($context["debug"]) ? $context["debug"] : $this->getContext($context, "debug")) && array_key_exists("request", $context))) {
            // line 70
            echo "                                    <hr>
                                    ";
            // line 71
            echo twig_include($this->env, $context, "@bolt/exception/_request.twig");
            echo "
                                ";
        }
        // line 73
        echo "                            ";
        
        $__internal_8bda84f895720bc6efb8910d7eacba8f1b15de7e2427a75ebe336bce8a5aed01->leave($__internal_8bda84f895720bc6efb8910d7eacba8f1b15de7e2427a75ebe336bce8a5aed01_prof);

    }

    // line 100
    public function block_tracedumps($context, array $blocks = array())
    {
        $__internal_7ae6ff1bf7695be01dc75cfd8d638f5cb104ef54cd498275b3433230482e48e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae6ff1bf7695be01dc75cfd8d638f5cb104ef54cd498275b3433230482e48e0->enter($__internal_7ae6ff1bf7695be01dc75cfd8d638f5cb104ef54cd498275b3433230482e48e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tracedumps"));

        // line 101
        echo "    ";
        if ((isset($context["debug"]) ? $context["debug"] : $this->getContext($context, "debug"))) {
            // line 102
            echo "        ";
            echo twig_include($this->env, $context, "@bolt/exception/_tracedumps.twig");
            echo "
    ";
        }
        
        $__internal_7ae6ff1bf7695be01dc75cfd8d638f5cb104ef54cd498275b3433230482e48e0->leave($__internal_7ae6ff1bf7695be01dc75cfd8d638f5cb104ef54cd498275b3433230482e48e0_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/exception/exception.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 102,  312 => 101,  306 => 100,  299 => 73,  294 => 71,  291 => 70,  288 => 69,  282 => 68,  275 => 64,  269 => 62,  266 => 61,  260 => 60,  253 => 39,  247 => 38,  237 => 35,  231 => 34,  222 => 86,  210 => 76,  208 => 75,  205 => 74,  203 => 68,  198 => 65,  196 => 60,  189 => 57,  186 => 56,  182 => 53,  179 => 51,  177 => 50,  173 => 49,  171 => 48,  165 => 45,  161 => 44,  155 => 43,  145 => 42,  141 => 40,  139 => 38,  136 => 37,  134 => 34,  131 => 33,  128 => 31,  122 => 30,  109 => 89,  107 => 30,  100 => 26,  95 => 24,  90 => 21,  84 => 20,  77 => 100,  71 => 96,  69 => 20,  63 => 16,  58 => 14,  54 => 13,  49 => 12,  47 => 11,  43 => 10,  38 => 8,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">

    <title>Uncaught Exception: {{ exception.class_name|default('unknown') }}</title>

    <link rel=\"stylesheet\" href=\"{{ asset('css/bolt.css', 'bolt') }}\">
    {% if debug and exception.snippet %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/bolt_exception.css', 'bolt') }}\">
        <script src=\"{{ asset('js/jquery-2.2.4.min.js', 'bolt') }}\" defer></script>
        <script src=\"{{ asset('js/bolt_exception.js', 'bolt') }}\" defer></script>
    {% endif %}
</head>

<body class=\"login exception\">

    {% block page_plain %}
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"{{ form_class|default('col-md-10 col-md-offset-1 col-sm-12') }}\">

                <img src=\"{{ asset('img/bolt-logo.png', 'bolt') }}\" width=\"100\" height=\"41\" alt=\"Bolt\" class=\"logo\">

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        {% block page_main %}
                        <div class=\"row\">
                            {# Note: Do not translate / localise this, because people _will_ google for this. #}

                            {% block title %}
                                <h1>Uncaught Exception: {{ exception.class_name|default('unknown') }}</h1>
                            {% endblock title %}

                            {% block exception %}
                            {% endblock exception %}

                            <p class='exception'>
                                <tt><abbr title=\"{{ exception.class_fqn|default('unknown') }}\">{{ exception.class_name|default('unknown') }}</abbr></tt> in <tt>{% if debug %}<abbr title=\"{{ exception.file_path|default('unknown') }}\">{% endif %}
                                {{- exception.file_name|default('unknown') }}{% if debug %}</abbr>{% endif %}</tt> line <tt>
                                {{- exception.object.line|default('unknown') }}</tt>: <br>
                                <em><strong>{{ exception.object.message|default('unknown')|nl2br }}</strong></em>
                            </p>

                            {% if debug and exception.snippet -%}
<pre class='line-numbers' data-start='{{ max(exception.object.line - 5, 1) }}' data-line='6'><code class='language-php'>
{{- exception.snippet -}}
</code></pre>
                            {%- endif %}

                            <p class='exception'>
                                {# Based on this classic tweet: https://twitter.com/divineomega/status/695744177557106688 #}
                                {% set query = 'Bolt ' ~ exception.class_name|default('unknown') ~ ' in ' ~ exception.file_name|default('unknown') ~ ' line ' ~ exception.object.line|default('unknown') ~ ': ' ~ exception.object.message|default('unknown') %}
                                <a class='btn btn-default' href='https://www.google.com/search?q={{ query|url_encode }}' target='_blank'>Google this Exception</a>
                            </p>

                            {% block trace %}
                                {% if debug %}
                                    {{ include('@bolt/exception/_trace.twig') }}
                                {% endif %}
                            {% endblock trace %}

                            <hr>

                            {% block request %}
                                {% if debug and request is defined %}
                                    <hr>
                                    {{ include('@bolt/exception/_request.twig') }}
                                {% endif %}
                            {% endblock request %}

                            {% if not debug %}
                                <p>Debug is not available, and/or you are not logged on. To see a full backtrace of the
                                    Exception, do one of the following: </p>

                                <ul>
                                    <li>Set <tt>debug: true</tt> in <tt>config.yml</tt>, and make sure you're logged in
                                        to the Bolt Backend.</li>
                                    <li>Set both <tt>debug: true</tt> and <tt>debug_show_loggedoff: true</tt> in
                                        <tt>config.yml</tt>.
                                </ul>
                            {% endif %}

                        </div>
                        {% endblock page_main %}
                    </div>
                </div>

            </div>
        </div>
    </div>
    {% endblock page_plain %}

</body>
</html>

{% block tracedumps %}
    {% if debug %}
        {{ include('@bolt/exception/_tracedumps.twig') }}
    {% endif %}
{% endblock tracedumps %}
", "@bolt/exception/exception.twig", "app://view/twig/exception/exception.twig");
    }
}
