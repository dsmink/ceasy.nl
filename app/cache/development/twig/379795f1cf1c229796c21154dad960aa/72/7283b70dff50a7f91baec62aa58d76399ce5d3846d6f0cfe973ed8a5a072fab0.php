<?php

/* @bolt/_nav/_primary.twig */
class __TwigTemplate_354d55654f7c78a4fc1c6883011a466d7480947455c711bbc7ec7d388e8b4d1a extends Twig_Template
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
        $__internal_aa6acc8028f3095bff670685f4b55c4acc2f782d9b35b512cc5d0322df11d73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6acc8028f3095bff670685f4b55c4acc2f782d9b35b512cc5d0322df11d73f->enter($__internal_aa6acc8028f3095bff670685f4b55c4acc2f782d9b35b512cc5d0322df11d73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_primary.twig"));

        // line 1
        echo "<div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-xaction=\"bolt.sidebar.toggle()\">
        <i class=\"fa fa-fw fa-bars\"></i> MENU
    </button>
    <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\">
        ";
        // line 7
        echo "        ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "get", array(0 => "general/branding/name"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "get", array(0 => "general/branding/name"), "method"), "Bolt")) : ("Bolt")), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\" class=\"navbar-site hidden-xs\"><span>";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config", array()), "get", array(0 => "general/sitename"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        } else {
            echo "Site";
        }
        echo "</span></a>
</div>


<ul class=\"nav navbar-top-links navbar-right\">

    <li>
        ";
        // line 17
        echo "        <form class=\"navbar-form hidden-xs\">
            <div class=\"form-group has-feedback omnisearch\" role=\"search\">
                <select class=\"form-control\"></select>
                <span class=\"form-control-feedback\"><i class=\"fa fa-search\"></i></span>
            </div>
        </form>
    </li>

    <li>
        <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" target=\"_blank\" class=\"hidden-xs\">
            <i class=\"fa fa-fw fa-external-link-square\"></i>
            ";
        // line 28
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.view-site");
        echo "
        </a>
    </li>

    <li class=\"close-live-editor\">
        <a>
            <i class=\"fa fa-fw fa-times-circle-o\"></i>
            ";
        // line 35
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.close-editor");
        echo "
        </a>
    </li>

    <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"fa fa-fw fa-user\"></i> <span>";
        // line 41
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "displayname", array()), 16);
        echo "</span> <i class=\"fa fa-caret-down\"></i>
        </a>
        <ul class=\"dropdown-menu dropdown-user\" role=\"menu\" >
            <li>
                <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile");
        echo "\" role=\"menuitem\" tabindex=\"-1\"><i class=\"fa fa-fw fa-gear\"></i> ";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.profile");
        echo "</a>
            </li>
            <li>
                <form action=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\" method=\"POST\">
                    <button class=\"btn btn-link btn-block\" type=\"submit\">
                        <span class=\"pull-left\"><i class=\"fa fa-fw fa-sign-out\" style=\"margin-left: 4px;\"></i> ";
        // line 50
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.logout");
        echo "</span>
                    </button>
                </form>
            </li>
        </ul>
    </li>

</ul>
";
        
        $__internal_aa6acc8028f3095bff670685f4b55c4acc2f782d9b35b512cc5d0322df11d73f->leave($__internal_aa6acc8028f3095bff670685f4b55c4acc2f782d9b35b512cc5d0322df11d73f_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_primary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 50,  104 => 48,  96 => 45,  89 => 41,  80 => 35,  70 => 28,  65 => 26,  54 => 17,  38 => 9,  32 => 7,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-xaction=\"bolt.sidebar.toggle()\">
        <i class=\"fa fa-fw fa-bars\"></i> MENU
    </button>
    <a class=\"navbar-brand\" href=\"{{ path('dashboard') }}\">
        {# <img src=\"{{ asset('img/bolt-icon.svg', 'bolt') }}\"> #}
        {{ app.config.get('general/branding/name')|default('Bolt') }}
    </a>
    <a href=\"{{ path('dashboard') }}\" class=\"navbar-site hidden-xs\"><span>{% if app.config.get('general/sitename') %}{{ app.config.get('general/sitename') }}{% else %}Site{% endif %}</span></a>
</div>


<ul class=\"nav navbar-top-links navbar-right\">

    <li>
        {# one omnisearch here, for \"small and up\", the other in the side-navbar #}
        <form class=\"navbar-form hidden-xs\">
            <div class=\"form-group has-feedback omnisearch\" role=\"search\">
                <select class=\"form-control\"></select>
                <span class=\"form-control-feedback\"><i class=\"fa fa-search\"></i></span>
            </div>
        </form>
    </li>

    <li>
        <a href=\"{{ path('homepage') }}\" target=\"_blank\" class=\"hidden-xs\">
            <i class=\"fa fa-fw fa-external-link-square\"></i>
            {{ __('general.phrase.view-site') }}
        </a>
    </li>

    <li class=\"close-live-editor\">
        <a>
            <i class=\"fa fa-fw fa-times-circle-o\"></i>
            {{ __('general.phrase.close-editor') }}
        </a>
    </li>

    <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"fa fa-fw fa-user\"></i> <span>{{ user.displayname|excerpt(16) }}</span> <i class=\"fa fa-caret-down\"></i>
        </a>
        <ul class=\"dropdown-menu dropdown-user\" role=\"menu\" >
            <li>
                <a href=\"{{ path('profile') }}\" role=\"menuitem\" tabindex=\"-1\"><i class=\"fa fa-fw fa-gear\"></i> {{ __('general.phrase.profile') }}</a>
            </li>
            <li>
                <form action=\"{{ path('logout') }}\" method=\"POST\">
                    <button class=\"btn btn-link btn-block\" type=\"submit\">
                        <span class=\"pull-left\"><i class=\"fa fa-fw fa-sign-out\" style=\"margin-left: 4px;\"></i> {{ __('general.phrase.logout') }}</span>
                    </button>
                </form>
            </li>
        </ul>
    </li>

</ul>
", "@bolt/_nav/_primary.twig", "app://view/twig/_nav/_primary.twig");
    }
}
