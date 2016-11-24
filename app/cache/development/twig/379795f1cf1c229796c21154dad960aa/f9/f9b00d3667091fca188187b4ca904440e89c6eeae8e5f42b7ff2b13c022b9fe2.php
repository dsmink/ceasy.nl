<?php

/* @bolt/extend/extend.twig */
class __TwigTemplate_30fa57a513a7d27b9ecff1895bc2409a11698042a26055c5fa97c18d6e508b3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/extend/extend.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb1d341116cd36c7c8ae16871aa731c7911714ce6c7ba588937aee1e4756ff54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1d341116cd36c7c8ae16871aa731c7911714ce6c7ba588937aee1e4756ff54->enter($__internal_eb1d341116cd36c7c8ae16871aa731c7911714ce6c7ba588937aee1e4756ff54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/extend/extend.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb1d341116cd36c7c8ae16871aa731c7911714ce6c7ba588937aee1e4756ff54->leave($__internal_eb1d341116cd36c7c8ae16871aa731c7911714ce6c7ba588937aee1e4756ff54_prof);

    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_bf09563ffff3f233575850fcf913adaf72cb220e38019efb93e56c4d2cab5b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf09563ffff3f233575850fcf913adaf72cb220e38019efb93e56c4d2cab5b44->enter($__internal_bf09563ffff3f233575850fcf913adaf72cb220e38019efb93e56c4d2cab5b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo "ExtendBolt";
        
        $__internal_bf09563ffff3f233575850fcf913adaf72cb220e38019efb93e56c4d2cab5b44->leave($__internal_bf09563ffff3f233575850fcf913adaf72cb220e38019efb93e56c4d2cab5b44_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_31c57740fb9ec64029b6a857483e6c7af511168de2d0e7cf129b45f4fa89d6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c57740fb9ec64029b6a857483e6c7af511168de2d0e7cf129b45f4fa89d6d0->enter($__internal_31c57740fb9ec64029b6a857483e6c7af511168de2d0e7cf129b45f4fa89d6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.pagetitle", array("%BOLTNAME%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config", array()), "get", array(0 => "general/branding/name"), "method")));
        
        $__internal_31c57740fb9ec64029b6a857483e6c7af511168de2d0e7cf129b45f4fa89d6d0->leave($__internal_31c57740fb9ec64029b6a857483e6c7af511168de2d0e7cf129b45f4fa89d6d0_prof);

    }

    // line 10
    public function block_messages($context, array $blocks = array())
    {
        $__internal_74587a540de92683b193c22a7f4e939d599e9c400c6c92a9cd50c6bb3142df0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74587a540de92683b193c22a7f4e939d599e9c400c6c92a9cd50c6bb3142df0c->enter($__internal_74587a540de92683b193c22a7f4e939d599e9c400c6c92a9cd50c6bb3142df0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        echo "";
        
        $__internal_74587a540de92683b193c22a7f4e939d599e9c400c6c92a9cd50c6bb3142df0c->leave($__internal_74587a540de92683b193c22a7f4e939d599e9c400c6c92a9cd50c6bb3142df0c_prof);

    }

    // line 12
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_6abaf4dba5ee3ad419ba0060492a1dcb98b5e0f56486511a78785934e7f525f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abaf4dba5ee3ad419ba0060492a1dcb98b5e0f56486511a78785934e7f525f8->enter($__internal_6abaf4dba5ee3ad419ba0060492a1dcb98b5e0f56486511a78785934e7f525f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 13
        echo "    ";
        echo twig_include($this->env, $context, "@bolt/extend/_package.twig");
        echo "

    ";
        // line 15
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "messages", array())) {
            // line 16
            echo "        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"alert alert-info alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "messages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
                echo "                        ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "<br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                </div>
            </div>
        </div>
    ";
        }
        // line 27
        echo "
    <div class=\"row extend-bolt-container\">
        <div class=\"col-md-9\">

            ";
        // line 31
        if ( !$this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "writeable", array())) {
            // line 32
            echo "            ";
            $context["msg"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.ext-dir-missing", array("%DIRECTORY%" => $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "extensionsPath", array())));
            // line 33
            echo "            <div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    ";
            // line 35
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->ymllink((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")));
            echo "
            </div>
            ";
        }
        // line 38
        echo "
            ";
        // line 39
        if ( !$this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "enabled", array())) {
            // line 40
            echo "            ";
            $context["msg"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.loading-disabled", array("%CONFIG%" => $this->env->getExtension('Bolt\Twig\TwigExtension')->ymllink("config.yml")));
            // line 41
            echo "            <div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    ";
            // line 43
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->ymllink((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")));
            echo "
            </div>
            ";
        }
        // line 46
        echo "
            ";
        // line 47
        echo twig_include($this->env, $context, "@bolt/_sub/_messages.twig");
        echo "

            <section>
                <h2>";
        // line 50
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.headline.install-new-extension");
        echo "</h2>
                <p>
                    ";
        // line 52
        if (($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "writeable", array()) && $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "online", array()))) {
            // line 53
            echo "                    ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.add-extension-with-form");
            echo "
                    ";
        }
        // line 55
        echo "                    ";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.discover-by-visiting");
        echo "
                    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "site", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "site", array()), "html", null, true);
        echo "</a>
                </p>
                ";
        // line 58
        if (($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "writeable", array()) && $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "online", array()))) {
            // line 59
            echo "                <div class=\"install-container\">
                        <div class=\"auto-search hide-block\"></div>
                        <input type=\"text\" name=\"check-package\" placeholder=\"Extension name eg: bolt/widget\">
                        <a class=\"btn btn-primary check-package\" data-request=\"check-package\" data-toggle=\"modal\" data-target=\"#installModal\">
                            <i class=\"icon-gears\"></i> ";
            // line 63
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.browse-versions");
            echo "
                        </a>

                        <div class=\"modal fade\" id=\"installModal\" tabindex=\"-1\" role=\"dialog\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    ";
            // line 69
            echo twig_include($this->env, $context, "@bolt/extend/_action-modal.twig");
            echo "
                                </div>
                            </div>
                        </div>
                </div>
                ";
        }
        // line 75
        echo "            </section>

            <hr>

            ";
        // line 80
        echo "            ";
        echo twig_include($this->env, $context, "@bolt/extend/_feedback.twig");
        echo "

            <section class=\"installed-container\">
                <h2>";
        // line 83
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.headline.currently-installed");
        echo "</h2>
                ";
        // line 84
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "writeable", array())) {
            // line 85
            echo "                <pre class=\"installed console\" data-request=\"installed\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.checking-installed-packages");
            echo "..</pre>
                ";
        } else {
            // line 87
            echo "                <pre class=\"installed\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.no-package-check-in-readmode");
            echo "</pre>
                ";
        }
        // line 89
        echo "                <div class=\"installed-list hide-block\">
                    <div class=\"installed-list-items\">

                    </div>
                </div>
            </section>

            ";
        // line 97
        echo "            ";
        echo twig_include($this->env, $context, "@bolt/extend/_readme.twig");
        echo "

        </div>

        <aside class=\"col-md-3\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><i class=\"fa fa-cog fa-fw\"></i>Extensions Options</div>
                <div class=\"panel-body\">
                        <p><strong>";
        // line 105
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.check-for-updates");
        echo "</strong></p>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-tertiary";
        // line 107
        if (( !$this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "writeable", array()) ||  !$this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "online", array()))) {
            echo " disabled";
        }
        echo " clickspinner\" data-request=\"update-check\">
                                <i class=\"fa fa-refresh fa-fw\"></i> ";
        // line 108
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.update-check");
        echo "
                            </a>
                        </div>
                        <p>";
        // line 111
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.shows-updates");
        echo "</p>
                        <hr>
                        <p><strong>";
        // line 113
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.maintenance");
        echo "</strong></p>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-tertiary";
        // line 115
        if (( !$this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "writeable", array()) ||  !$this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "online", array()))) {
            echo " disabled";
        }
        echo " clickspinner\" data-request=\"update-run\">
                                <i class=\"fa fa-refresh fa-fw\"></i> ";
        // line 116
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.update-all");
        echo "
                            </a>
                            <button type=\"button\" class=\"btn btn-tertiary dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"caret\"></span>
                                <span class=\"sr-only\">Toggle Dropdown</span>
                            </button>
                            <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                <li>
                                    <a href=\"#\" class=\"";
        // line 124
        if (( !$this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "writeable", array()) ||  !$this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "online", array()))) {
            echo " disabled";
        }
        echo " clickspinner\" data-request=\"install-run\">
                                        <i class=\"fa fa-download fa-fw\"></i> ";
        // line 125
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.install-all");
        echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"";
        // line 129
        if (( !$this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "writeable", array()) ||  !$this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "online", array()))) {
            echo " disabled";
        }
        echo " clickspinner\" data-request=\"autoload-dump\">
                                        <i class=\"fa fa-refresh fa-fw\"></i> ";
        // line 130
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.autoload-dump");
        echo "
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <p>
                            <strong>";
        // line 136
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.update-all");
        echo ":</strong>
                            ";
        // line 137
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.installs-updates");
        echo "
                        </p>
                        <p>
                            <strong>";
        // line 140
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.install-all");
        echo ":</strong>
                            ";
        // line 141
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.installs-all-listed-packages");
        echo "
                        </p>
                        <p>
                            <strong>";
        // line 144
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.autoload-dump");
        echo ":</strong>
                            ";
        // line 145
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.autoload-dump");
        echo "
                        </p>
                </div>
            </div>
        </aside>

    </div>

    ";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.autoloader-start", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.autoloader-start")), "html", null, true);
        echo "
    ";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.autoloader-update", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.autoloader-update")), "html", null, true);
        echo "
    ";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.bad-json", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.bad-json")), "html", null, true);
        echo "
    ";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.confirm-remove", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.confirm-remove")), "html", null, true);
        echo "
    ";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.copying", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.copying")), "html", null, true);
        echo "
    ";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.install-all", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.install-all")), "html", null, true);
        echo "
    ";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.install-running", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.installation-running")), "html", null, true);
        echo "
    ";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.installing", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.installing")), "html", null, true);
        echo "
    ";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.no-stable", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.no-stable-versions-available")), "html", null, true);
        echo "
    ";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.no-test", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.no-test-versions-available")), "html", null, true);
        echo "
    ";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.overwrite", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.overwrite")), "html", null, true);
        echo "
    ";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.removing", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.removing")), "html", null, true);
        echo "
    ";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.running-update", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.running-update")), "html", null, true);
        echo "
    ";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.running-update-all", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.running-update-all")), "html", null, true);
        echo "
    ";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.updating", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.updating")), "html", null, true);
        echo "
    ";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.updated", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.updated")), "html", null, true);
        echo "

    ";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.siteurl", $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "site", array())), "html", null, true);
        echo "
    ";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.baseurl", (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "resources", array(), "array"), "url", array(0 => "bolt"), "method") . trim("extend", "/")) . "/")), "html", null, true);
        echo "
    ";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.rootpath", $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "rootpath", array())), "html", null, true);
        echo "

";
        
        $__internal_6abaf4dba5ee3ad419ba0060492a1dcb98b5e0f56486511a78785934e7f525f8->leave($__internal_6abaf4dba5ee3ad419ba0060492a1dcb98b5e0f56486511a78785934e7f525f8_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/extend/extend.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 172,  439 => 171,  435 => 170,  430 => 168,  426 => 167,  422 => 166,  418 => 165,  414 => 164,  410 => 163,  406 => 162,  402 => 161,  398 => 160,  394 => 159,  390 => 158,  386 => 157,  382 => 156,  378 => 155,  374 => 154,  370 => 153,  359 => 145,  355 => 144,  349 => 141,  345 => 140,  339 => 137,  335 => 136,  326 => 130,  320 => 129,  313 => 125,  307 => 124,  296 => 116,  290 => 115,  285 => 113,  280 => 111,  274 => 108,  268 => 107,  263 => 105,  251 => 97,  242 => 89,  236 => 87,  230 => 85,  228 => 84,  224 => 83,  217 => 80,  211 => 75,  202 => 69,  193 => 63,  187 => 59,  185 => 58,  178 => 56,  173 => 55,  167 => 53,  165 => 52,  160 => 50,  154 => 47,  151 => 46,  145 => 43,  141 => 41,  138 => 40,  136 => 39,  133 => 38,  127 => 35,  123 => 33,  120 => 32,  118 => 31,  112 => 27,  106 => 23,  97 => 21,  93 => 20,  87 => 16,  85 => 15,  79 => 13,  73 => 12,  61 => 10,  49 => 7,  37 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Page: NavSecondary > Extend Bolt #}

{% extends '@bolt/_base/_page-nav.twig' %}

{% block page_nav 'ExtendBolt' %}

{% block page_title __('page.extend.pagetitle', {'%BOLTNAME%': app.config.get('general/branding/name')}) %}

{# clear default messages, because we use them in a different spot, in this template #}
{% block messages \"\" %}

{% block page_main %}
    {{ include('@bolt/extend/_package.twig') }}

    {% if context.messages %}
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"alert alert-info alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    {% for message in context.messages %}
                        {{ message }}<br>
                    {% endfor %}
                </div>
            </div>
        </div>
    {% endif %}

    <div class=\"row extend-bolt-container\">
        <div class=\"col-md-9\">

            {% if not context.writeable %}
            {% set msg = __('page.extend.message.ext-dir-missing', {'%DIRECTORY%': context.extensionsPath}) %}
            <div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    {{ msg|ymllink }}
            </div>
            {% endif %}

            {% if not context.enabled %}
            {% set msg = __('page.extend.message.loading-disabled', {'%CONFIG%': 'config.yml'|ymllink }) %}
            <div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    {{ msg|ymllink }}
            </div>
            {% endif %}

            {{ include('@bolt/_sub/_messages.twig') }}

            <section>
                <h2>{{ __('page.extend.headline.install-new-extension') }}</h2>
                <p>
                    {% if context.writeable and context.online %}
                    {{ __('page.extend.message.add-extension-with-form') }}
                    {% endif %}
                    {{ __('page.extend.message.discover-by-visiting') }}
                    <a href=\"{{ context.site }}\" target=\"_blank\">{{ context.site }}</a>
                </p>
                {% if context.writeable and context.online %}
                <div class=\"install-container\">
                        <div class=\"auto-search hide-block\"></div>
                        <input type=\"text\" name=\"check-package\" placeholder=\"Extension name eg: bolt/widget\">
                        <a class=\"btn btn-primary check-package\" data-request=\"check-package\" data-toggle=\"modal\" data-target=\"#installModal\">
                            <i class=\"icon-gears\"></i> {{ __('page.extend.button.browse-versions') }}
                        </a>

                        <div class=\"modal fade\" id=\"installModal\" tabindex=\"-1\" role=\"dialog\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    {{ include('@bolt/extend/_action-modal.twig') }}
                                </div>
                            </div>
                        </div>
                </div>
                {% endif %}
            </section>

            <hr>

            {# Console for UI feedback #}
            {{ include('@bolt/extend/_feedback.twig') }}

            <section class=\"installed-container\">
                <h2>{{ __('page.extend.headline.currently-installed') }}</h2>
                {% if context.writeable %}
                <pre class=\"installed console\" data-request=\"installed\">{{ __('page.extend.message.checking-installed-packages') }}..</pre>
                {% else %}
                <pre class=\"installed\">{{ __('page.extend.message.no-package-check-in-readmode') }}</pre>
                {% endif %}
                <div class=\"installed-list hide-block\">
                    <div class=\"installed-list-items\">

                    </div>
                </div>
            </section>

            {# Modal for readmes  #}
            {{ include('@bolt/extend/_readme.twig') }}

        </div>

        <aside class=\"col-md-3\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><i class=\"fa fa-cog fa-fw\"></i>Extensions Options</div>
                <div class=\"panel-body\">
                        <p><strong>{{ __('page.extend.message.check-for-updates') }}</strong></p>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-tertiary{% if not context.writeable or not context.online %} disabled{% endif %} clickspinner\" data-request=\"update-check\">
                                <i class=\"fa fa-refresh fa-fw\"></i> {{ __('page.extend.button.update-check') }}
                            </a>
                        </div>
                        <p>{{ __('page.extend.message.shows-updates') }}</p>
                        <hr>
                        <p><strong>{{ __('page.extend.message.maintenance') }}</strong></p>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-tertiary{% if not context.writeable or not context.online %} disabled{% endif %} clickspinner\" data-request=\"update-run\">
                                <i class=\"fa fa-refresh fa-fw\"></i> {{ __('page.extend.button.update-all') }}
                            </a>
                            <button type=\"button\" class=\"btn btn-tertiary dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"caret\"></span>
                                <span class=\"sr-only\">Toggle Dropdown</span>
                            </button>
                            <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                <li>
                                    <a href=\"#\" class=\"{% if not context.writeable or not context.online %} disabled{% endif %} clickspinner\" data-request=\"install-run\">
                                        <i class=\"fa fa-download fa-fw\"></i> {{ __('page.extend.button.install-all') }}
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"{% if not context.writeable or not context.online %} disabled{% endif %} clickspinner\" data-request=\"autoload-dump\">
                                        <i class=\"fa fa-refresh fa-fw\"></i> {{ __('page.extend.button.autoload-dump') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <p>
                            <strong>{{ __('page.extend.button.update-all') }}:</strong>
                            {{ __('page.extend.message.installs-updates') }}
                        </p>
                        <p>
                            <strong>{{ __('page.extend.button.install-all') }}:</strong>
                            {{ __('page.extend.message.installs-all-listed-packages') }}
                        </p>
                        <p>
                            <strong>{{ __('page.extend.button.autoload-dump') }}:</strong>
                            {{ __('page.extend.message.autoload-dump') }}
                        </p>
                </div>
            </div>
        </aside>

    </div>

    {{ data('extend.text.autoloader-start',   __('page.extend.message.autoloader-start')) }}
    {{ data('extend.text.autoloader-update',  __('page.extend.message.autoloader-update')) }}
    {{ data('extend.text.bad-json',           __('page.extend.message.bad-json')) }}
    {{ data('extend.text.confirm-remove',     __('page.extend.message.confirm-remove')) }}
    {{ data('extend.text.copying',            __('page.extend.message.copying')) }}
    {{ data('extend.text.install-all',        __('page.extend.message.install-all')) }}
    {{ data('extend.text.install-running',    __('page.extend.message.installation-running')) }}
    {{ data('extend.text.installing',         __('page.extend.message.installing')) }}
    {{ data('extend.text.no-stable',          __('page.extend.message.no-stable-versions-available')) }}
    {{ data('extend.text.no-test',            __('page.extend.message.no-test-versions-available')) }}
    {{ data('extend.text.overwrite',          __('page.extend.message.overwrite')) }}
    {{ data('extend.text.removing',           __('page.extend.message.removing')) }}
    {{ data('extend.text.running-update',     __('page.extend.message.running-update')) }}
    {{ data('extend.text.running-update-all', __('page.extend.message.running-update-all')) }}
    {{ data('extend.text.updating',           __('page.extend.message.updating')) }}
    {{ data('extend.text.updated',            __('page.extend.message.updated')) }}

    {{ data('extend.siteurl',             context.site) }}
    {{ data('extend.baseurl',             app['resources'].url('bolt') ~ 'extend'|trim('/') ~ '/') }}
    {{ data('extend.rootpath',            paths.rootpath) }}

{% endblock page_main %}
", "@bolt/extend/extend.twig", "app://view/twig/extend/extend.twig");
    }
}
