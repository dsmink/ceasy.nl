<?php

/* partials/_master.twig */
class __TwigTemplate_6f6555108a800f6ee321efc53a1726c118c1c4289777883033f806a70877b4ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15a221ad825b4d981efbe7f917d2b60f810e06fb44a5e81b90bb3843c7f0d681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a221ad825b4d981efbe7f917d2b60f810e06fb44a5e81b90bb3843c7f0d681->enter($__internal_15a221ad825b4d981efbe7f917d2b60f810e06fb44a5e81b90bb3843c7f0d681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_master.twig"));

        // line 1
        ob_start();
        echo "<!DOCTYPE html>
<!--[if IE 8]>
    <html class=\"no-js\" id=\"ie8\" lang=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->htmlLang(), "html", null, true);
        echo "\">
<![endif]-->
<!--[if !(IE 8) ]><!-->
    <html class=\"no-js\" lang=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->htmlLang(), "html", null, true);
        echo "\">
<!--<![endif]-->
<html class=\"no-js\" lang=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->htmlLang(), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width\">
        <meta name=\"generator\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, ("Bolt CM " . (isset($context["bolt_version"]) ? $context["bolt_version"] : $this->getContext($context, "bolt_version"))), "html", null, true);
        echo "\">
        <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "| CEasy</title>
        <link rel=\"dns-prefetch' href='//fonts.googleapis.com\" />
        <link rel=\"dns-prefetch' href='//maxcdn.bootstrapcdn.com\" />";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        $this->loadTemplate("partials/_favicon.twig", "partials/_master.twig", 24)->display($context);
        // line 25
        echo "</head>
    <body class=\"home page page-template-default custom-background\">
        <div id=\"page\" class=\"hfeed site\">

            ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 37
        echo "            <div id=\"content\" class=\"site-content\">
\t\t        <div class=\"container\">
                    <div class=\"row\">";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "</div>
                </div>
            </div>

            ";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 60
        echo "</div>

        ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "</body>
</html>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_15a221ad825b4d981efbe7f917d2b60f810e06fb44a5e81b90bb3843c7f0d681->leave($__internal_15a221ad825b4d981efbe7f917d2b60f810e06fb44a5e81b90bb3843c7f0d681_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_42ef4277f00959edbb2ec778401187bbd7494873c42613bbdca38d9c2d9d4089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ef4277f00959edbb2ec778401187bbd7494873c42613bbdca38d9c2d9d4089->enter($__internal_42ef4277f00959edbb2ec778401187bbd7494873c42613bbdca38d9c2d9d4089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bemiddeling in ziekteverzuim";
        
        $__internal_42ef4277f00959edbb2ec778401187bbd7494873c42613bbdca38d9c2d9d4089->leave($__internal_42ef4277f00959edbb2ec778401187bbd7494873c42613bbdca38d9c2d9d4089_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_500f60d218a76b8715082fa09aa9d00dda2fea94c7eab7e0cf4cfccac3197ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500f60d218a76b8715082fa09aa9d00dda2fea94c7eab7e0cf4cfccac3197ee4->enter($__internal_500f60d218a76b8715082fa09aa9d00dda2fea94c7eab7e0cf4cfccac3197ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "            <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            ";
        // line 20
        echo "            <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700\" rel=\"stylesheet\">
            ";
        // line 22
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.min.css", "theme"), "html", null, true);
        echo "\" rel=\"stylesheet\">";
        
        $__internal_500f60d218a76b8715082fa09aa9d00dda2fea94c7eab7e0cf4cfccac3197ee4->leave($__internal_500f60d218a76b8715082fa09aa9d00dda2fea94c7eab7e0cf4cfccac3197ee4_prof);

    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        $__internal_0070d8003fdf93e45dcd601de70aaf8f9d0ace1a3a39aec37eaf67edc15dadab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0070d8003fdf93e45dcd601de70aaf8f9d0ace1a3a39aec37eaf67edc15dadab->enter($__internal_0070d8003fdf93e45dcd601de70aaf8f9d0ace1a3a39aec37eaf67edc15dadab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 31
        echo "<header id=\"masthead\" role=\"banner\">";
        // line 32
        echo twig_include($this->env, $context, "partials/_header.twig");
        // line 33
        echo "</header>";
        
        $__internal_0070d8003fdf93e45dcd601de70aaf8f9d0ace1a3a39aec37eaf67edc15dadab->leave($__internal_0070d8003fdf93e45dcd601de70aaf8f9d0ace1a3a39aec37eaf67edc15dadab_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_1feeee38301d3c9729153f1d48d09728285e7801fd337bfc0a2b35b6e7df212b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1feeee38301d3c9729153f1d48d09728285e7801fd337bfc0a2b35b6e7df212b->enter($__internal_1feeee38301d3c9729153f1d48d09728285e7801fd337bfc0a2b35b6e7df212b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "<div id=\"primary\" class=\"col-md-9 content-area\">
                                <main id=\"main\" class=\"site-main\" role=\"main\">";
        // line 43
        $this->displayBlock("primary", $context, $blocks);
        // line 44
        echo "</main>
                            </div>
                            <div id=\"secondary\" class=\"col-md-3 sidebar widget-area\" role=\"complementary\">";
        // line 47
        $this->displayBlock("secondary", $context, $blocks);
        // line 48
        echo "</div>";
        
        $__internal_1feeee38301d3c9729153f1d48d09728285e7801fd337bfc0a2b35b6e7df212b->leave($__internal_1feeee38301d3c9729153f1d48d09728285e7801fd337bfc0a2b35b6e7df212b_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_00c97ec2bc8fb2ba1f9940cfacf42d3df8b9525fc07fe71db3043a2b34af8022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c97ec2bc8fb2ba1f9940cfacf42d3df8b9525fc07fe71db3043a2b34af8022->enter($__internal_00c97ec2bc8fb2ba1f9940cfacf42d3df8b9525fc07fe71db3043a2b34af8022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 56
        echo "<footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">";
        // line 57
        echo twig_include($this->env, $context, "partials/_footer.twig");
        // line 58
        echo "</footer>";
        
        $__internal_00c97ec2bc8fb2ba1f9940cfacf42d3df8b9525fc07fe71db3043a2b34af8022->leave($__internal_00c97ec2bc8fb2ba1f9940cfacf42d3df8b9525fc07fe71db3043a2b34af8022_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3968b04f017dbde5901ded6bd194b2e93f5917299183e0d82934eb5e932d750f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3968b04f017dbde5901ded6bd194b2e93f5917299183e0d82934eb5e932d750f->enter($__internal_3968b04f017dbde5901ded6bd194b2e93f5917299183e0d82934eb5e932d750f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
            ";
        // line 67
        echo "            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\" async></script>
            ";
        // line 69
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/main.min.js", "theme"), "html", null, true);
        echo "\" async></script>
            ";
        // line 71
        echo "            <script type=\"text/javascript\">var switchTo5x=true;</script>
            <script type=\"text/javascript\" async id=\"st_insights_js\" src=\"http://w.sharethis.com/button/buttons.js?publisher=349a7359-9428-4fb4-bec9-fabfc97cb3ad\"></script>
            <script type=\"text/javascript\">stLight.options({publisher: \"349a7359-9428-4fb4-bec9-fabfc97cb3ad\", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>";
        
        $__internal_3968b04f017dbde5901ded6bd194b2e93f5917299183e0d82934eb5e932d750f->leave($__internal_3968b04f017dbde5901ded6bd194b2e93f5917299183e0d82934eb5e932d750f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 71,  204 => 69,  201 => 67,  198 => 65,  192 => 63,  185 => 58,  183 => 57,  181 => 56,  175 => 55,  168 => 48,  166 => 47,  162 => 44,  160 => 43,  157 => 41,  151 => 40,  144 => 33,  142 => 32,  140 => 31,  134 => 30,  125 => 22,  122 => 20,  119 => 18,  113 => 16,  101 => 13,  92 => 75,  90 => 63,  86 => 60,  84 => 55,  78 => 50,  76 => 40,  72 => 37,  70 => 30,  64 => 25,  62 => 24,  60 => 16,  55 => 13,  51 => 12,  44 => 8,  39 => 6,  33 => 3,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless -%}<!DOCTYPE html>
<!--[if IE 8]>
    <html class=\"no-js\" id=\"ie8\" lang=\"{{- htmllang() -}}\">
<![endif]-->
<!--[if !(IE 8) ]><!-->
    <html class=\"no-js\" lang=\"{{- htmllang() -}}\">
<!--<![endif]-->
<html class=\"no-js\" lang=\"{{- htmllang() -}}\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width\">
        <meta name=\"generator\" content=\"{{ 'Bolt CM ' ~ bolt_version }}\">
        <title>{%- block title %}Bemiddeling in ziekteverzuim{% endblock title -%} | CEasy</title>
        <link rel=\"dns-prefetch' href='//fonts.googleapis.com\" />
        <link rel=\"dns-prefetch' href='//maxcdn.bootstrapcdn.com\" />
        {%- block stylesheets -%}
            {# Latest compiled and minified CSS #}
            <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            {# Google Font #}
            <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700\" rel=\"stylesheet\">
            {# Custom #}
            <link href=\"{{ asset( 'css/style.min.css', 'theme') }}\" rel=\"stylesheet\">
        {%- endblock stylesheets -%}
        {%- include( 'partials/_favicon.twig' ) -%}
    </head>
    <body class=\"home page page-template-default custom-background\">
        <div id=\"page\" class=\"hfeed site\">

            {# Header content #}
            {%- block header -%}
                <header id=\"masthead\" role=\"banner\">
                    {{- include( 'partials/_header.twig' ) -}}
                </header>
            {%- endblock header -%}

            {# Body #}
            <div id=\"content\" class=\"site-content\">
\t\t        <div class=\"container\">
                    <div class=\"row\">
                        {%- block body -%}
                            <div id=\"primary\" class=\"col-md-9 content-area\">
                                <main id=\"main\" class=\"site-main\" role=\"main\">
                                    {{- block( 'primary' ) -}}
                                </main>
                            </div>
                            <div id=\"secondary\" class=\"col-md-3 sidebar widget-area\" role=\"complementary\">
                                {{- block( 'secondary' ) -}}
                            </div>
                        {%- endblock body -%}
                    </div>
                </div>
            </div>

            {# Footer content #}
            {%- block footer -%}
                <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
                    {{- include( 'partials/_footer.twig' ) -}}
                </footer>
            {%- endblock footer -%}
        </div>

        {# Scripts #}
        {%- block javascripts -%}
            {# jQuery #}
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
            {# Latest compiled and minified JavaScript #}
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\" async></script>
            {# My scripts #}
            <script src=\"{{ asset( '/js/main.min.js', 'theme' ) }}\" async></script>
            {# Social media #}
            <script type=\"text/javascript\">var switchTo5x=true;</script>
            <script type=\"text/javascript\" async id=\"st_insights_js\" src=\"http://w.sharethis.com/button/buttons.js?publisher=349a7359-9428-4fb4-bec9-fabfc97cb3ad\"></script>
            <script type=\"text/javascript\">stLight.options({publisher: \"349a7359-9428-4fb4-bec9-fabfc97cb3ad\", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
        {%- endblock javascripts -%}
    </body>
</html>{%- endspaceless %}", "partials/_master.twig", "theme://partials/_master.twig");
    }
}
