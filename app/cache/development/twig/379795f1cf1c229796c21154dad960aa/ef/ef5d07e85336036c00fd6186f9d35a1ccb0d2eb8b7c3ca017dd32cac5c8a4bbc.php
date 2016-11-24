<?php

/* @bolt/menueditor.twig */
class __TwigTemplate_c544d081a64f731988257433fc0be0b955eccb1b1c8ec525174f1f4c4a90b250 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_base/_page-nav.twig", "@bolt/menueditor.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_nav' => array($this, 'block_page_nav'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67f567e5ef7129cfd005ddefd853126f482765aa8dacbcc9eab9f5a5dfe7f89c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f567e5ef7129cfd005ddefd853126f482765aa8dacbcc9eab9f5a5dfe7f89c->enter($__internal_67f567e5ef7129cfd005ddefd853126f482765aa8dacbcc9eab9f5a5dfe7f89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/menueditor.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67f567e5ef7129cfd005ddefd853126f482765aa8dacbcc9eab9f5a5dfe7f89c->leave($__internal_67f567e5ef7129cfd005ddefd853126f482765aa8dacbcc9eab9f5a5dfe7f89c_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_fda1ee5f823c7f308766f404e12c907e9fc5c865012ad781ba27d58e5396e384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda1ee5f823c7f308766f404e12c907e9fc5c865012ad781ba27d58e5396e384->enter($__internal_fda1ee5f823c7f308766f404e12c907e9fc5c865012ad781ba27d58e5396e384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 4
        echo "<form type=\"post\" class=\"saveform\" method=\"post\">
    <input type=\"hidden\" name=\"menus\" value=\"\">
    <div class=\"form-group\">
        <button type=\"submit\" class=\"btn btn-success\" data-content=\"";
        // line 7
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.actions.save");
        echo " \"> <i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i></button>
    </div>
</form>
";
        // line 10
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.title");
        echo "
";
        
        $__internal_fda1ee5f823c7f308766f404e12c907e9fc5c865012ad781ba27d58e5396e384->leave($__internal_fda1ee5f823c7f308766f404e12c907e9fc5c865012ad781ba27d58e5396e384_prof);

    }

    // line 12
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_baa436be80727b8b89eb1b6753a4a54bb70e9fc4870568c86a267f9629b4f08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa436be80727b8b89eb1b6753a4a54bb70e9fc4870568c86a267f9629b4f08d->enter($__internal_baa436be80727b8b89eb1b6753a4a54bb70e9fc4870568c86a267f9629b4f08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo "Settings/Extensions";
        
        $__internal_baa436be80727b8b89eb1b6753a4a54bb70e9fc4870568c86a267f9629b4f08d->leave($__internal_baa436be80727b8b89eb1b6753a4a54bb70e9fc4870568c86a267f9629b4f08d_prof);

    }

    // line 60
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_53bfb321589b475b1836713a98535c5233652fd8319a2c7aa4a2a720d836acc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53bfb321589b475b1836713a98535c5233652fd8319a2c7aa4a2a720d836acc7->enter($__internal_53bfb321589b475b1836713a98535c5233652fd8319a2c7aa4a2a720d836acc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 61
        echo "    <div class=\"row\">
        <div class=\"col-md-8 menus\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["menu"]) {
            // line 65
            echo "                    <li role=\"presentation\" class=\"";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("active") : (""));
            echo "\"><a href=\"#";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" aria-controls=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" role=\"tab\" data-toggle=\"tab\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a></li>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </ul>

            <div class=\"tab-content\">
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["menu"]) {
            // line 71
            echo "                    <div role=\"tabpanel\" class=\"tab-pane ";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("active") : (""));
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">
                        <ol class=\"sortable\">
                            ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["menu"]);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["menuitem"]) {
                // line 74
                echo "                                ";
                echo $this->getAttribute($this, "menuitem", array(0 => $context["menuitem"], 1 => $this->getAttribute($context["loop"], "index", array()), 2 => (isset($context["menu_config"]) ? $context["menu_config"] : $this->getContext($context, "menu_config"))), "method");
                echo "
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                        </ol>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "            </div>
        </div>

        <aside class=\"col-md-4 sidebar\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li role=\"presentation\" class=\"active\"><a href=\"#add-menu-item\" aria-controls=\"add-menu-item\" role=\"tab\" data-toggle=\"tab\">";
        // line 84
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.actions.add");
        echo "</a></li>
                ";
        // line 85
        if ($this->getAttribute($this->getAttribute((isset($context["menu_config"]) ? $context["menu_config"] : $this->getContext($context, "menu_config")), "backups", array()), "enable", array())) {
            // line 86
            echo "                    <li role=\"presentation\" class=\"\"><a href=\"#restore-backups\" aria-controls=\"restore-backups\" role=\"tab\" data-toggle=\"tab\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.actions.restorebackups");
            echo "</a></li>
                ";
        }
        // line 88
        echo "            </ul>
            <div class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"add-menu-item\">
                    <form class=\"form-horizontal additem\">
                        <div class=\"form-group\">
                            <label for=\"exampleInputEmail1\" class=\"col-sm-4 control-label\">";
        // line 93
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.fields.label");
        echo "</label>
                            <div class=\"col-sm-8\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 95
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.fields.label");
        echo "\" name=\"label\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"exampleInputPassword1\" class=\"col-sm-4 control-label\">";
        // line 99
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.fields.link");
        echo "/";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.fields.path");
        echo "</label>
                            <div class=\"col-sm-8\">
                                <select class=\"js-data-example-ajax\" name=\"link\" style=\"width: 100%;\">
                                    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("items", $context)) ? (_twig_default_filter((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 103
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                ";
        // line 110
        if ($this->getAttribute($this->getAttribute((isset($context["menu_config"]) ? $context["menu_config"] : $this->getContext($context, "menu_config")), "backups", array()), "enable", array())) {
            // line 111
            echo "                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"restore-backups\">
                        ";
            // line 112
            if ((isset($context["backups"]) ? $context["backups"] : $this->getContext($context, "backups"))) {
                // line 113
                echo "                            <table class=\"table\">
                                <tr>
                                    <th>";
                // line 115
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.backups.from");
                echo "
                                    <th>";
                // line 116
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.backups.date");
                echo "
                                    <th>
                                ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["backups"]) ? $context["backups"] : $this->getContext($context, "backups")));
                foreach ($context['_seq'] as $context["_key"] => $context["backup"]) {
                    // line 119
                    echo "                                    <tr>
                                        <td>";
                    // line 120
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["backup"], "carbon", array()), "diffForHumans", array(), "method"), "html", null, true);
                    echo "
                                        <td>";
                    // line 121
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["backup"], "carbon", array()), "toDateTimeString", array(), "method"), "html", null, true);
                    echo "
                                        <td>
                                            <form method=\"post\">
                                                <input type=\"hidden\" name=\"backup\" value=\"";
                    // line 124
                    echo twig_escape_filter($this->env, $this->getAttribute($context["backup"], "filename", array()), "html", null, true);
                    echo "\">
                                                <button type=\"submit\" class=\"btn btn-warning btn-xs\">";
                    // line 125
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.backups.restore");
                    echo "</button>
                                            </form>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['backup'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "                            </table>
                        ";
            } else {
                // line 130
                echo "                            <p>";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.backups.nobackups");
                echo "</p>
                        ";
            }
            // line 132
            echo "                    </div>
                ";
        }
        // line 134
        echo "            </div>
        </aside>
    </div>
    <script>var menuEditorTranslations = ";
        // line 137
        echo (isset($context["JsTranslations"]) ? $context["JsTranslations"] : $this->getContext($context, "JsTranslations"));
        echo "</script>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"new-field\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 144
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.modal.close");
        echo "\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 145
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.modal.title");
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <form>
                        <input type=\"hidden\" class=\"form-control\" id=\"field-id\">
                        <div class=\"form-group\">
                            <label for=\"field-label\" class=\"control-label\">";
        // line 151
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.modal.label");
        echo ":</label>
                            <input type=\"text\" class=\"form-control\" id=\"field-label\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"field-value\" class=\"control-label\">";
        // line 155
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.modal.value");
        echo ":</label>
                            <textarea class=\"form-control\" id=\"field-value\"></textarea>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 161
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.modal.close");
        echo "</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"add-new-field\">";
        // line 162
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.modal.add");
        echo "</button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_53bfb321589b475b1836713a98535c5233652fd8319a2c7aa4a2a720d836acc7->leave($__internal_53bfb321589b475b1836713a98535c5233652fd8319a2c7aa4a2a720d836acc7_prof);

    }

    // line 14
    public function getmenuitem($__menuitem__ = null, $__id__ = null, $__menu_config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "menuitem" => $__menuitem__,
            "id" => $__id__,
            "menu_config" => $__menu_config__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b76fb6613fea486d6cc9b0848495b2352bd7cbfdd5696a7024901dec4f1a035c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b76fb6613fea486d6cc9b0848495b2352bd7cbfdd5696a7024901dec4f1a035c->enter($__internal_b76fb6613fea486d6cc9b0848495b2352bd7cbfdd5696a7024901dec4f1a035c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menuitem"));

            // line 15
            echo "    <li class=\"mjs-nestedSortable-expanded\"";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_merge((isset($context["menuitem"]) ? $context["menuitem"] : $this->getContext($context, "menuitem")), $this->getAttribute((isset($context["menu_config"]) ? $context["menu_config"] : $this->getContext($context, "menu_config")), "fields", array())));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if (!twig_in_filter($context["key"], array(0 => "submenu"))) {
                    echo "data-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " id=\"menuitem-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">
        <div>
            <div class=\"flex-row\">
                <span title=\"";
            // line 18
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.action.showhidechildren");
            echo "\" class=\"no-grow disclose\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i></span>
                <span title=\"";
            // line 19
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.action.showhideeditor");
            echo "\" class=\"no-grow expandEditor\"><i class=\"fa fa-chevron-down\" aria-hidden=\"true\"></i></span>
                <span class=\"itemTitle\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menuitem"]) ? $context["menuitem"] : $this->getContext($context, "menuitem")), "label", array()), "html", null, true);
            echo "</span>
                <span title=\"";
            // line 21
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.action.delete");
            echo "\" class=\"no-grow deleteMenu\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></span>
            </div>

            <div class=\"form-horizontal editor\" style=\"display:none;\">
                <div class=\"fields\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
            // line 27
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.fields.label");
            echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 29
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.fields.label");
            echo "\" name=\"label\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menuitem"]) ? $context["menuitem"] : $this->getContext($context, "menuitem")), "label", array()), "html", null, true);
            echo "\">
                        </div>
                    </div>
                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_merge((isset($context["menuitem"]) ? $context["menuitem"] : $this->getContext($context, "menuitem")), $this->getAttribute((isset($context["menu_config"]) ? $context["menu_config"] : $this->getContext($context, "menu_config")), "fields", array())));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if (!twig_in_filter($context["key"], array(0 => "submenu", 1 => "label"))) {
                    // line 33
                    echo "                        <div class=\"form-group\" id=\"group-";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                            <label class=\"col-sm-2 control-label\">";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize($this->env->getExtension('Bolt\Twig\TwigExtension')->trans($context["key"])), "html", null, true);
                    echo "</label>
                            <div class=\"col-sm-8 col-xs-9\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize($this->env->getExtension('Bolt\Twig\TwigExtension')->trans($context["key"])), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\">
                            </div>
                            <div class=\"col-sm-2 col-xs-3\">
                                <button class=\"btn btn-danger remove-field\" data-id=\"";
                    // line 39
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "\" data-key=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.actions.removefield");
                    echo "\"><i class=\"fa fa-remove\"></i></button>
                            </div>
                        </div>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                </div>

                <div class=\"footer clearfix text-right\" id=\"footer";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">
                    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#new-field\" data-id=\"";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"><i class=\"fa fa-plus\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("menueditor.actions.addfield");
            echo "</button>
                </div>
            </div>
        </div>
        <ol>
            ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["menuitem"]) ? $context["menuitem"] : null), "submenu", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menuitem"]) ? $context["menuitem"] : null), "submenu", array()), array())) : (array())));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["submenuitem"]) {
                // line 52
                echo "                ";
                $context["id"] = (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "-") . $this->getAttribute($context["loop"], "index", array()));
                // line 53
                echo "                ";
                echo $this->getAttribute($this, "menuitem", array(0 => $context["submenuitem"], 1 => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), 2 => (isset($context["menu_config"]) ? $context["menu_config"] : $this->getContext($context, "menu_config"))), "method");
                echo "
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenuitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "        </ol>

    </li>
";
            
            $__internal_b76fb6613fea486d6cc9b0848495b2352bd7cbfdd5696a7024901dec4f1a035c->leave($__internal_b76fb6613fea486d6cc9b0848495b2352bd7cbfdd5696a7024901dec4f1a035c_prof);

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
        return "@bolt/menueditor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 55,  551 => 53,  548 => 52,  531 => 51,  521 => 46,  517 => 45,  513 => 43,  498 => 39,  488 => 36,  483 => 34,  476 => 33,  471 => 32,  463 => 29,  458 => 27,  449 => 21,  445 => 20,  441 => 19,  437 => 18,  415 => 15,  398 => 14,  385 => 162,  381 => 161,  372 => 155,  365 => 151,  356 => 145,  352 => 144,  342 => 137,  337 => 134,  333 => 132,  327 => 130,  323 => 128,  314 => 125,  310 => 124,  304 => 121,  300 => 120,  297 => 119,  293 => 118,  288 => 116,  284 => 115,  280 => 113,  278 => 112,  275 => 111,  273 => 110,  266 => 105,  255 => 103,  251 => 102,  243 => 99,  236 => 95,  231 => 93,  224 => 88,  218 => 86,  216 => 85,  212 => 84,  205 => 79,  189 => 76,  172 => 74,  155 => 73,  147 => 71,  130 => 70,  125 => 67,  102 => 65,  85 => 64,  80 => 61,  74 => 60,  62 => 12,  53 => 10,  47 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_base/_page-nav.twig\" %}

{% block page_title %}
<form type=\"post\" class=\"saveform\" method=\"post\">
    <input type=\"hidden\" name=\"menus\" value=\"\">
    <div class=\"form-group\">
        <button type=\"submit\" class=\"btn btn-success\" data-content=\"{{ __('menueditor.actions.save')}} \"> <i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i></button>
    </div>
</form>
{{ __('menueditor.title')}}
{% endblock %}
{% block page_nav 'Settings/Extensions' %}

{% macro menuitem(menuitem, id, menu_config) %}
    <li class=\"mjs-nestedSortable-expanded\"{% for key, value in menuitem|merge(menu_config.fields) if key not in ['submenu'] %}data-{{key}}=\"{{value}}\"{% endfor %} id=\"menuitem-{{id}}\">
        <div>
            <div class=\"flex-row\">
                <span title=\"{{ __('menueditor.action.showhidechildren')}}\" class=\"no-grow disclose\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i></span>
                <span title=\"{{ __('menueditor.action.showhideeditor')}}\" class=\"no-grow expandEditor\"><i class=\"fa fa-chevron-down\" aria-hidden=\"true\"></i></span>
                <span class=\"itemTitle\">{{menuitem.label}}</span>
                <span title=\"{{ __('menueditor.action.delete')}}\" class=\"no-grow deleteMenu\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></span>
            </div>

            <div class=\"form-horizontal editor\" style=\"display:none;\">
                <div class=\"fields\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">{{ __('menueditor.fields.label')}}</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"{{ __('menueditor.fields.label')}}\" name=\"label\" value=\"{{menuitem.label}}\">
                        </div>
                    </div>
                    {% for key, value in menuitem|merge(menu_config.fields) if key not in ['submenu', 'label'] %}
                        <div class=\"form-group\" id=\"group-{{ id }}-{{ key }}\">
                            <label class=\"col-sm-2 control-label\">{{__(key)|humanize}}</label>
                            <div class=\"col-sm-8 col-xs-9\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"{{__(key)|humanize}}\" name=\"{{key}}\" value=\"{{value}}\">
                            </div>
                            <div class=\"col-sm-2 col-xs-3\">
                                <button class=\"btn btn-danger remove-field\" data-id=\"{{id}}\" data-key=\"{{key}}\" title=\"{{ __('menueditor.actions.removefield')}}\"><i class=\"fa fa-remove\"></i></button>
                            </div>
                        </div>
                    {% endfor %}
                </div>

                <div class=\"footer clearfix text-right\" id=\"footer{{ id }}\">
                    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#new-field\" data-id=\"{{ id }}\"><i class=\"fa fa-plus\"></i> {{ __('menueditor.actions.addfield') }}</button>
                </div>
            </div>
        </div>
        <ol>
            {% for submenuitem in menuitem.submenu|default([]) %}
                {% set id = id ~ '-' ~ loop.index %}
                {{ _self.menuitem(submenuitem, id, menu_config)}}
            {% endfor %}
        </ol>

    </li>
{% endmacro %}

{% block page_main %}
    <div class=\"row\">
        <div class=\"col-md-8 menus\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                {% for name, menu in menus %}
                    <li role=\"presentation\" class=\"{{loop.first ? 'active'}}\"><a href=\"#{{name}}\" aria-controls=\"{{name}}\" role=\"tab\" data-toggle=\"tab\">{{name}}</a></li>
                {% endfor %}
            </ul>

            <div class=\"tab-content\">
                {% for name, menu in menus %}
                    <div role=\"tabpanel\" class=\"tab-pane {{loop.first ? 'active'}}\" id=\"{{name}}\">
                        <ol class=\"sortable\">
                            {% for menuitem in menu %}
                                {{ _self.menuitem(menuitem, loop.index, menu_config)}}
                            {% endfor %}
                        </ol>
                    </div>
                {% endfor %}
            </div>
        </div>

        <aside class=\"col-md-4 sidebar\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li role=\"presentation\" class=\"active\"><a href=\"#add-menu-item\" aria-controls=\"add-menu-item\" role=\"tab\" data-toggle=\"tab\">{{ __('menueditor.actions.add')}}</a></li>
                {% if menu_config.backups.enable %}
                    <li role=\"presentation\" class=\"\"><a href=\"#restore-backups\" aria-controls=\"restore-backups\" role=\"tab\" data-toggle=\"tab\">{{ __('menueditor.actions.restorebackups')}}</a></li>
                {% endif %}
            </ul>
            <div class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"add-menu-item\">
                    <form class=\"form-horizontal additem\">
                        <div class=\"form-group\">
                            <label for=\"exampleInputEmail1\" class=\"col-sm-4 control-label\">{{ __('menueditor.fields.label')}}</label>
                            <div class=\"col-sm-8\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"{{ __('menueditor.fields.label')}}\" name=\"label\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"exampleInputPassword1\" class=\"col-sm-4 control-label\">{{ __('menueditor.fields.link')}}/{{ __('menueditor.fields.path')}}</label>
                            <div class=\"col-sm-8\">
                                <select class=\"js-data-example-ajax\" name=\"link\" style=\"width: 100%;\">
                                    {% for item in items|default([]) %}
                                        <option value=\"{{ item.link }}\">{{item.name}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                {% if menu_config.backups.enable %}
                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"restore-backups\">
                        {% if backups %}
                            <table class=\"table\">
                                <tr>
                                    <th>{{ __('menueditor.backups.from')}}
                                    <th>{{ __('menueditor.backups.date')}}
                                    <th>
                                {% for backup in backups %}
                                    <tr>
                                        <td>{{backup.carbon.diffForHumans()}}
                                        <td>{{backup.carbon.toDateTimeString()}}
                                        <td>
                                            <form method=\"post\">
                                                <input type=\"hidden\" name=\"backup\" value=\"{{backup.filename}}\">
                                                <button type=\"submit\" class=\"btn btn-warning btn-xs\">{{ __('menueditor.backups.restore')}}</button>
                                            </form>
                                {% endfor %}
                            </table>
                        {% else %}
                            <p>{{ __('menueditor.backups.nobackups')}}</p>
                        {% endif %}
                    </div>
                {% endif %}
            </div>
        </aside>
    </div>
    <script>var menuEditorTranslations = {{JsTranslations|raw}}</script>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"new-field\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"{{ __('menueditor.modal.close') }}\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">{{ __('menueditor.modal.title') }}</h4>
                </div>
                <div class=\"modal-body\">
                    <form>
                        <input type=\"hidden\" class=\"form-control\" id=\"field-id\">
                        <div class=\"form-group\">
                            <label for=\"field-label\" class=\"control-label\">{{ __('menueditor.modal.label') }}:</label>
                            <input type=\"text\" class=\"form-control\" id=\"field-label\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"field-value\" class=\"control-label\">{{ __('menueditor.modal.value') }}:</label>
                            <textarea class=\"form-control\" id=\"field-value\"></textarea>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">{{ __('menueditor.modal.close') }}</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"add-new-field\">{{ __('menueditor.modal.add') }}</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@bolt/menueditor.twig", "extensions://vendor/bacboslab/menueditor/templates/menueditor.twig");
    }
}
