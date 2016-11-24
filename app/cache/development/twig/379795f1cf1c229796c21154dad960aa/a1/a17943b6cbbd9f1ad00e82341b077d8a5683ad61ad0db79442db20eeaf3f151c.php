<?php

/* @bolt/extend/_package.twig */
class __TwigTemplate_9fef33b52d290ef06c89ed13a185adf77da250a6857a2f69c3e2612d2b48ae0a extends Twig_Template
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
        $__internal_e4792987607a44fc5ce365599437e117027f8ec2a74f4913c4217365815138c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4792987607a44fc5ce365599437e117027f8ec2a74f4913c4217365815138c1->enter($__internal_e4792987607a44fc5ce365599437e117027f8ec2a74f4913c4217365815138c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/extend/_package.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    <div class=\"ext-list\"><strong class=\"no-results\">";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.no-bolt-extensions-installed");
        echo "</strong></div>
";
        $context["package_empty"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 4
        echo "
";
        // line 5
        $context["package_item"] = ('' === $tmp = "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <em class=\"%TYPE%\" title=\"%TYPE%\">%TITLE%%STATUS%%ENABLED%</em>
            <div><em>%VERSION%</em><small>%NAME%</small></div>
        </div>

        <div class=\"panel-body\">
            %DESCRIPTION%
            %KEYWORDS%
            %AUTHORS%
            %CONSTRAINT%
        </div>

        <div class=\"panel-footer\">
            %DETAILS%
            %MANAGE%
        </div>
    </div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        echo "
";
        // line 26
        $context["package_description"] = ('' === $tmp = "    <div class=\"description\">%DESCRIPTION%</div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
";
        // line 30
        $context["package_author"] = ('' === $tmp = "    %AUTHOR%
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
";
        // line 34
        $context["package_authors"] = ('' === $tmp = "    <div class=\"author\">%AUTHORS%</div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 37
        echo "
";
        // line 38
        $context["package_keyword"] = ('' === $tmp = "    <span class=\"tag label label-default\">%KEYWORD%</span>&nbsp;
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
";
        // line 42
        $context["package_keywords"] = ('' === $tmp = "    <div class=\"tags\">%KEYWORDS%</div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 45
        echo "
";
        // line 49
        ob_start();
        // line 50
        echo "    <div class=\"btn-group pull-right\">
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle\" data-toggle=\"dropdown\">
            <i class=\"fa fa-flag\"></i> ";
        // line 52
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.manage");
        echo "
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu\" role=\"menu\">
            <li>
                <a href=\"#\" data-request=\"package-available\" data-available=\"%NAME%\" data-toggle=\"modal\" data-target=\"#installModal\">
                    <i class='fa fa-list fa-fw'></i> ";
        // line 60
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-versions");
        echo "
                </a>
            </li>
            <li>
                <a href=\"%MARKETPLACE_URL%\" target=\"_blank\">
                    <i class=\"fa fa-cart-plus fa-fw\"></i> ";
        // line 65
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-marketplace");
        echo "
                </a>
            </li>
            <li>
                <a href=\"%REPOSITORY_URL%\" target=\"_blank\">
                    <i class=\"fa fa-file-code-o fa-fw\"></i> ";
        // line 70
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-repository");
        echo "
                </a>
            </li>
            <li>
                <a href=\"#\" data-request=\"package-depends\" data-toggle=\"modal\" data-target=\"#installModal\" data-needle=\"%NAME%\" data-constraint=\"%VERSION%\">
                    <i class=\"fa fa-group fa-fw\"></i> ";
        // line 75
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.package-dependencies");
        echo "
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a data-request=\"uninstall-package\" class=\"clickspinner\" href=\"%BASEURL%uninstall?package=%NAME%\">
                    <i class=\"fa fa-trash-o fa-fw\"></i> ";
        // line 81
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-uninstall");
        echo "
                </a>
            </li>
        </ul>
    </div>
";
        $context["package_manage_dropdown_installed"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 87
        echo "
";
        // line 91
        ob_start();
        // line 92
        echo "    <div class=\"btn-group pull-right\">
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle\" data-toggle=\"dropdown\">
            <i class=\"fa fa-flag\"></i> ";
        // line 94
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.manage");
        echo "
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu\" role=\"menu\">
            <li>
                <a href=\"#\" data-request=\"package-available\" data-available=\"%NAME%\" data-toggle=\"modal\" data-target=\"#installModal\">
                    <i class='fa fa-list fa-fw'></i> ";
        // line 102
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-versions");
        echo "
                </a>
            </li>
            <li>
                <a href=\"%MARKETPLACE_URL%\" target=\"_blank\">
                    <i class=\"fa fa-cart-plus fa-fw\"></i> ";
        // line 107
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-marketplace");
        echo "
                </a>
            </li>
            <li>
                <a href=\"%REPOSITORY_URL%\" target=\"_blank\">
                    <i class=\"fa fa-file-code-o fa-fw\"></i> ";
        // line 112
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-repository");
        echo "
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a data-request=\"uninstall-package\" class=\"clickspinner\" href=\"%BASEURL%uninstall?package=%NAME%\">
                    <i class=\"fa fa-trash-o fa-fw\"></i> ";
        // line 118
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-uninstall");
        echo "
                </a>
            </li>
        </ul>
    </div>
";
        $context["package_manage_dropdown_uninstalled"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 124
        echo "


";
        // line 130
        $context["package_left_buttons"] = ('' === $tmp = "    <div class=\"pull-left\">
        %README%
        %THEME%
        %CONFIG%
    </div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 137
        echo "
";
        // line 138
        ob_start();
        // line 139
        echo "    <a data-request=\"package-readme\" data-readme=\"%README%\" class=\"btn btn-sm btn-default\">
        <i class=\"fa fa-quote-right fa-fw\"></i> ";
        // line 140
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-readme");
        echo "
    </a>
";
        $context["package_readme_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 143
        echo "
";
        // line 144
        ob_start();
        // line 145
        echo "    <a data-request=\"package-copy\" data-theme=\"%NAME%\" class=\"btn btn-sm btn-silent-danger\">
        <i class=\"fa fa-copy fa-fw\"></i> ";
        // line 146
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.copy-to-theme-folder");
        echo "
    </a>
";
        $context["package_theme_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 149
        echo "
";
        // line 150
        ob_start();
        // line 151
        echo "    <a href=\"%CONFIG%\" class=\"btn btn-sm btn-default\">
        <i class=\"fa fa-cog fa-fw\"></i> ";
        // line 152
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-config");
        echo "
    </a>
";
        $context["package_config_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 155
        echo "
";
        // line 156
        ob_start();
        // line 157
        echo "    <tr>
        <td>%NAME%</td>
        <td>%VERSION%</td>
        <td><span class=\"label label-default-%CLASS%\">%BUILDSTATUS%</span></td>
        <td>
            <div class=\"btn-group\"><a href=\"#\" data-request=\"install-package\" class=\"btn btn-primary btn-sm\" data-package=\"%NAME%\" data-version=\"%VERSION%\">
            <i class=\"icon-gears\"></i> ";
        // line 163
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.install-this-version");
        echo "</a></div>
        </td>
    </tr>
";
        $context["package_versions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 167
        echo "
";
        // line 168
        ob_start();
        // line 169
        echo "    <tr data-package=\"%PACKAGE%\">
        <td class=\"ext-list\"><strong class=\"title\">%PACKAGE%</strong></td>
        <td class=\"ext-list\">%PRETTYVERSION%</td>
        <td><a data-request=\"update-package\" class=\"btn btn-sm btn-warning\" data-package=\"%PACKAGE%\" data-version=\"%VERSION%\">";
        // line 172
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.install-package");
        echo "</a></td>
    </tr>
";
        $context["package_install_new"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 175
        echo "
";
        // line 176
        ob_start();
        // line 177
        echo "    <tr data-package=\"%PACKAGE%\">
        <td class=\"ext-list\"><strong class=\"title\">%PACKAGE%</strong></td>
        <td class=\"ext-list\">%PRETTYVERSION%</td>
        <td><a data-request=\"update-package\" class=\"btn btn-sm btn-tertiary\" data-package=\"%PACKAGE%\" data-version=\"%VERSION%\">";
        // line 180
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.update-package");
        echo "</a></td>
    </tr>
";
        $context["package_install_update"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 183
        echo "
";
        // line 184
        $context["package_error"] = ('' === $tmp = "    <div id=\"extension-error\">
        <h3>%ERROR_TYPE%</h3>
        <code>%ERROR_MESSAGE%</code>
        <p>%ERROR_LOCATION%</p>
    </div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 191
        echo "
";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.empty", trim((isset($context["package_empty"]) ? $context["package_empty"] : $this->getContext($context, "package_empty")))), "html", null, true);
        echo "
";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.item", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["package_item"]) ? $context["package_item"] : $this->getContext($context, "package_item"))), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.description", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["package_description"]) ? $context["package_description"] : $this->getContext($context, "package_description"))), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.versions", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["package_versions"]) ? $context["package_versions"] : $this->getContext($context, "package_versions"))), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.author", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["package_author"]) ? $context["package_author"] : $this->getContext($context, "package_author"))), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.authors", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["package_authors"]) ? $context["package_authors"] : $this->getContext($context, "package_authors"))), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.keyword", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["package_keyword"]) ? $context["package_keyword"] : $this->getContext($context, "package_keyword"))), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.keywords", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["package_keywords"]) ? $context["package_keywords"] : $this->getContext($context, "package_keywords"))), "/>\\s+</", "><")), "html", null, true);
        echo "

";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.manage_dropdown_installed", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["package_manage_dropdown_installed"]) ? $context["package_manage_dropdown_installed"] : $this->getContext($context, "package_manage_dropdown_installed"))), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.manage_dropdown_uninstalled", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["package_manage_dropdown_uninstalled"]) ? $context["package_manage_dropdown_uninstalled"] : $this->getContext($context, "package_manage_dropdown_uninstalled"))), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.left_buttons", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["package_left_buttons"]) ? $context["package_left_buttons"] : $this->getContext($context, "package_left_buttons"))), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.theme_button", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["package_theme_button"]) ? $context["package_theme_button"] : $this->getContext($context, "package_theme_button"))), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.config_button", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["package_config_button"]) ? $context["package_config_button"] : $this->getContext($context, "package_config_button"))), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.readme_button", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["package_readme_button"]) ? $context["package_readme_button"] : $this->getContext($context, "package_readme_button"))), "/>\\s+</", "><")), "html", null, true);
        echo "

";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.install_new", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["package_install_new"]) ? $context["package_install_new"] : $this->getContext($context, "package_install_new"))), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.install_update", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["package_install_update"]) ? $context["package_install_update"] : $this->getContext($context, "package_install_update"))), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.error", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["package_error"]) ? $context["package_error"] : $this->getContext($context, "package_error"))), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        
        $__internal_e4792987607a44fc5ce365599437e117027f8ec2a74f4913c4217365815138c1->leave($__internal_e4792987607a44fc5ce365599437e117027f8ec2a74f4913c4217365815138c1_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/extend/_package.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 210,  380 => 209,  376 => 208,  371 => 206,  367 => 205,  363 => 204,  359 => 203,  355 => 202,  351 => 201,  346 => 199,  342 => 198,  338 => 197,  334 => 196,  330 => 195,  326 => 194,  322 => 193,  318 => 192,  315 => 191,  308 => 184,  305 => 183,  299 => 180,  294 => 177,  292 => 176,  289 => 175,  283 => 172,  278 => 169,  276 => 168,  273 => 167,  266 => 163,  258 => 157,  256 => 156,  253 => 155,  247 => 152,  244 => 151,  242 => 150,  239 => 149,  233 => 146,  230 => 145,  228 => 144,  225 => 143,  219 => 140,  216 => 139,  214 => 138,  211 => 137,  204 => 130,  199 => 124,  190 => 118,  181 => 112,  173 => 107,  165 => 102,  154 => 94,  150 => 92,  148 => 91,  145 => 87,  136 => 81,  127 => 75,  119 => 70,  111 => 65,  103 => 60,  92 => 52,  88 => 50,  86 => 49,  83 => 45,  80 => 42,  77 => 41,  74 => 38,  71 => 37,  68 => 34,  65 => 33,  62 => 30,  59 => 29,  56 => 26,  53 => 25,  33 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set package_empty %}
    <div class=\"ext-list\"><strong class=\"no-results\">{{ __('page.extend.message.no-bolt-extensions-installed') }}</strong></div>
{% endset %}

{% set package_item %}
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <em class=\"%TYPE%\" title=\"%TYPE%\">%TITLE%%STATUS%%ENABLED%</em>
            <div><em>%VERSION%</em><small>%NAME%</small></div>
        </div>

        <div class=\"panel-body\">
            %DESCRIPTION%
            %KEYWORDS%
            %AUTHORS%
            %CONSTRAINT%
        </div>

        <div class=\"panel-footer\">
            %DETAILS%
            %MANAGE%
        </div>
    </div>
{% endset %}

{% set package_description %}
    <div class=\"description\">%DESCRIPTION%</div>
{% endset %}

{% set package_author %}
    %AUTHOR%
{% endset %}

{% set package_authors %}
    <div class=\"author\">%AUTHORS%</div>
{% endset %}

{% set package_keyword %}
    <span class=\"tag label label-default\">%KEYWORD%</span>&nbsp;
{% endset %}

{% set package_keywords %}
    <div class=\"tags\">%KEYWORDS%</div>
{% endset %}

{#
 # Contains the version and uninstall buttons for INSTALLED extensions
 #}
{% set package_manage_dropdown_installed %}
    <div class=\"btn-group pull-right\">
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle\" data-toggle=\"dropdown\">
            <i class=\"fa fa-flag\"></i> {{ __('page.extend.button.manage') }}
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu\" role=\"menu\">
            <li>
                <a href=\"#\" data-request=\"package-available\" data-available=\"%NAME%\" data-toggle=\"modal\" data-target=\"#installModal\">
                    <i class='fa fa-list fa-fw'></i> {{ __('page.extend.button.link-versions') }}
                </a>
            </li>
            <li>
                <a href=\"%MARKETPLACE_URL%\" target=\"_blank\">
                    <i class=\"fa fa-cart-plus fa-fw\"></i> {{ __('page.extend.button.link-marketplace') }}
                </a>
            </li>
            <li>
                <a href=\"%REPOSITORY_URL%\" target=\"_blank\">
                    <i class=\"fa fa-file-code-o fa-fw\"></i> {{ __('page.extend.button.link-repository') }}
                </a>
            </li>
            <li>
                <a href=\"#\" data-request=\"package-depends\" data-toggle=\"modal\" data-target=\"#installModal\" data-needle=\"%NAME%\" data-constraint=\"%VERSION%\">
                    <i class=\"fa fa-group fa-fw\"></i> {{ __('page.extend.button.package-dependencies') }}
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a data-request=\"uninstall-package\" class=\"clickspinner\" href=\"%BASEURL%uninstall?package=%NAME%\">
                    <i class=\"fa fa-trash-o fa-fw\"></i> {{ __('page.extend.button.link-uninstall') }}
                </a>
            </li>
        </ul>
    </div>
{% endset %}

{#
 # Contains the version and uninstall buttons for UNINSTALLED extensions
 #}
{% set package_manage_dropdown_uninstalled %}
    <div class=\"btn-group pull-right\">
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle\" data-toggle=\"dropdown\">
            <i class=\"fa fa-flag\"></i> {{ __('page.extend.button.manage') }}
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu\" role=\"menu\">
            <li>
                <a href=\"#\" data-request=\"package-available\" data-available=\"%NAME%\" data-toggle=\"modal\" data-target=\"#installModal\">
                    <i class='fa fa-list fa-fw'></i> {{ __('page.extend.button.link-versions') }}
                </a>
            </li>
            <li>
                <a href=\"%MARKETPLACE_URL%\" target=\"_blank\">
                    <i class=\"fa fa-cart-plus fa-fw\"></i> {{ __('page.extend.button.link-marketplace') }}
                </a>
            </li>
            <li>
                <a href=\"%REPOSITORY_URL%\" target=\"_blank\">
                    <i class=\"fa fa-file-code-o fa-fw\"></i> {{ __('page.extend.button.link-repository') }}
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a data-request=\"uninstall-package\" class=\"clickspinner\" href=\"%BASEURL%uninstall?package=%NAME%\">
                    <i class=\"fa fa-trash-o fa-fw\"></i> {{ __('page.extend.button.link-uninstall') }}
                </a>
            </li>
        </ul>
    </div>
{% endset %}



{#
 # Contains the README
 #}
{% set package_left_buttons %}
    <div class=\"pull-left\">
        %README%
        %THEME%
        %CONFIG%
    </div>
{% endset %}

{% set package_readme_button %}
    <a data-request=\"package-readme\" data-readme=\"%README%\" class=\"btn btn-sm btn-default\">
        <i class=\"fa fa-quote-right fa-fw\"></i> {{ __('page.extend.button.link-readme') }}
    </a>
{% endset %}

{% set package_theme_button %}
    <a data-request=\"package-copy\" data-theme=\"%NAME%\" class=\"btn btn-sm btn-silent-danger\">
        <i class=\"fa fa-copy fa-fw\"></i> {{ __('page.extend.button.copy-to-theme-folder') }}
    </a>
{% endset %}

{% set package_config_button %}
    <a href=\"%CONFIG%\" class=\"btn btn-sm btn-default\">
        <i class=\"fa fa-cog fa-fw\"></i> {{ __('page.extend.button.link-config') }}
    </a>
{% endset %}

{% set package_versions %}
    <tr>
        <td>%NAME%</td>
        <td>%VERSION%</td>
        <td><span class=\"label label-default-%CLASS%\">%BUILDSTATUS%</span></td>
        <td>
            <div class=\"btn-group\"><a href=\"#\" data-request=\"install-package\" class=\"btn btn-primary btn-sm\" data-package=\"%NAME%\" data-version=\"%VERSION%\">
            <i class=\"icon-gears\"></i> {{ __('page.extend.button.install-this-version') }}</a></div>
        </td>
    </tr>
{% endset %}

{% set package_install_new %}
    <tr data-package=\"%PACKAGE%\">
        <td class=\"ext-list\"><strong class=\"title\">%PACKAGE%</strong></td>
        <td class=\"ext-list\">%PRETTYVERSION%</td>
        <td><a data-request=\"update-package\" class=\"btn btn-sm btn-warning\" data-package=\"%PACKAGE%\" data-version=\"%VERSION%\">{{ __('page.extend.button.install-package') }}</a></td>
    </tr>
{% endset %}

{% set package_install_update %}
    <tr data-package=\"%PACKAGE%\">
        <td class=\"ext-list\"><strong class=\"title\">%PACKAGE%</strong></td>
        <td class=\"ext-list\">%PRETTYVERSION%</td>
        <td><a data-request=\"update-package\" class=\"btn btn-sm btn-tertiary\" data-package=\"%PACKAGE%\" data-version=\"%VERSION%\">{{ __('page.extend.button.update-package') }}</a></td>
    </tr>
{% endset %}

{% set package_error %}
    <div id=\"extension-error\">
        <h3>%ERROR_TYPE%</h3>
        <code>%ERROR_MESSAGE%</code>
        <p>%ERROR_LOCATION%</p>
    </div>
{% endset %}

{{ data('extend.packages.empty',                       package_empty|trim) }}
{{ data('extend.packages.item',                        package_item|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.description',                 package_description|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.versions',                    package_versions|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.author',                      package_author|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.authors',                     package_authors|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.keyword',                     package_keyword|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.keywords',                    package_keywords|trim|preg_replace('/>\\\\s+</', '><')) }}

{{ data('extend.packages.manage_dropdown_installed',   package_manage_dropdown_installed|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.manage_dropdown_uninstalled', package_manage_dropdown_uninstalled|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.left_buttons',                package_left_buttons|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.theme_button',                package_theme_button|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.config_button',               package_config_button|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.readme_button',               package_readme_button|trim|preg_replace('/>\\\\s+</', '><')) }}

{{ data('extend.packages.install_new',                 package_install_new|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.install_update',              package_install_update|trim|preg_replace('/>\\\\s+</', '><')) }}
{{ data('extend.packages.error',                       package_error|trim|preg_replace('/>\\\\s+</', '><')) }}
", "@bolt/extend/_package.twig", "app://view/twig/extend/_package.twig");
    }
}
