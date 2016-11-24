<?php

/* @bolt/_base/_listing.twig */
class __TwigTemplate_d39d27e1e957d4f36444692e17c29e59c0ebdae3cfe71e35cb13b747dd2c9f0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'listing_columns' => array($this, 'block_listing_columns'),
            'listing_header' => array($this, 'block_listing_header'),
            'listing_id' => array($this, 'block_listing_id'),
            'listing_content' => array($this, 'block_listing_content'),
            'listing_meta' => array($this, 'block_listing_meta'),
            'listing_actions' => array($this, 'block_listing_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd6618fc9739c7e37fe8901c1217461c43689790e51e1a7c8d5837e2906dcdd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6618fc9739c7e37fe8901c1217461c43689790e51e1a7c8d5837e2906dcdd8->enter($__internal_cd6618fc9739c7e37fe8901c1217461c43689790e51e1a7c8d5837e2906dcdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_base/_listing.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/_base/_listing.twig", 1);
        // line 2
        $context["__internal_2b4cae9986eff23e2c6aa37e05abe162ada68d739e5c5290e95fae4ee2a96b6c"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/_base/_listing.twig", 2);
        // line 3
        $context["__internal_719b1d4fb5ebeb1587c96df34dbbddbdfc3c6be61bee64e910a0c4c943268e88"] = $this;
        // line 4
        echo "
";
        // line 13
        echo "
";
        // line 25
        echo "
";
        // line 26
        $context["modifiable"] = (((($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "create", array()) || $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "edit", array())) || $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "delete", array())) || $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "publish", array())) || $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "depublish", array()));
        // line 27
        echo "
";
        // line 28
        $context["prop"] = array("extended" =>  !        // line 29
(isset($context["compact"]) ? $context["compact"] : $this->getContext($context, "compact")), "has_groupname" => $this->getAttribute($this->getAttribute(        // line 30
(isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true), "nextgroup" => ((        // line 31
array_key_exists("new_group", $context)) ? (_twig_default_filter((isset($context["new_group"]) ? $context["new_group"] : $this->getContext($context, "new_group")), false)) : (false)), "unordered" => ($this->env->getExtension('Bolt\Twig\TwigExtension')->request("order") == ""), "first" => $this->getAttribute(        // line 33
(isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first", array()), "last" => $this->getAttribute(        // line 34
(isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last", array()));
        // line 36
        echo "
";
        // line 37
        $context["local"] = array("row_heading" => ((($this->getAttribute(        // line 38
(isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "extended", array()) && $this->getAttribute((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "unordered", array())) && $this->getAttribute((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "has_groupname", array())) && ($this->getAttribute((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "first", array()) || $this->getAttribute((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "nextgroup", array()))), "row_header" => ($this->getAttribute(        // line 39
(isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "extended", array()) && ($this->getAttribute((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "first", array()) || (($this->getAttribute((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "has_groupname", array()) && $this->getAttribute((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "nextgroup", array())) && $this->getAttribute((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "unordered", array())))));
        // line 41
        echo "
";
        // line 45
        if (($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "row_heading", array()) || (($this->getAttribute((isset($context["internal"]) ? $context["internal"] : null), "heading", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["internal"]) ? $context["internal"] : null), "heading", array()))) : ("")))) {
            // line 46
            echo "    ";
            if ( !$this->getAttribute((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "first", array())) {
                // line 47
                echo "        ";
                echo $context["__internal_719b1d4fb5ebeb1587c96df34dbbddbdfc3c6be61bee64e910a0c4c943268e88"]->gettbody_end((($this->getAttribute((isset($context["internal"]) ? $context["internal"] : null), "selection_toolbar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["internal"]) ? $context["internal"] : null), "selection_toolbar", array()))) : ("")));
                echo "
    ";
            }
            // line 49
            echo "
    ";
            // line 50
            echo $context["__internal_719b1d4fb5ebeb1587c96df34dbbddbdfc3c6be61bee64e910a0c4c943268e88"]->gettbody_beg((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), (isset($context["modifiable"]) ? $context["modifiable"] : $this->getContext($context, "modifiable")));
            echo "

    <tr class=\"heading\">
        ";
            // line 53
            if (false) {
                // line 54
                echo "            ";
                $this->displayBlock('listing_columns', $context, $blocks);
                // line 55
                echo "        ";
            }
            // line 56
            echo "        ";
            if ((isset($context["compact"]) ? $context["compact"] : $this->getContext($context, "compact"))) {
                // line 57
                echo "            ";
                $context["columns"] = (                $this->renderBlock("listing_columns", $context, $blocks) - 1);
                // line 58
                echo "        ";
            } else {
                // line 59
                echo "            ";
                $context["columns"] =                 $this->renderBlock("listing_columns", $context, $blocks);
                // line 60
                echo "        ";
            }
            // line 61
            echo "        <th colspan=\"";
            echo twig_escape_filter($this->env, (isset($context["columns"]) ? $context["columns"] : $this->getContext($context, "columns")), "html", null, true);
            echo "\">
            ";
            // line 62
            if ((($this->getAttribute((isset($context["internal"]) ? $context["internal"] : null), "heading", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["internal"]) ? $context["internal"] : null), "heading", array()))) : (""))) {
                // line 63
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["internal"]) ? $context["internal"] : $this->getContext($context, "internal")), "heading", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 65
                echo "                ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array()), $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("(no group)"))) : ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("(no group)"))), "html", null, true);
                echo "
            ";
            }
            // line 67
            echo "        </th>
    </tr>
";
        } elseif ($this->getAttribute(        // line 69
(isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "first", array())) {
            // line 70
            echo "    ";
            echo $context["__internal_719b1d4fb5ebeb1587c96df34dbbddbdfc3c6be61bee64e910a0c4c943268e88"]->gettbody_beg((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), (isset($context["modifiable"]) ? $context["modifiable"] : $this->getContext($context, "modifiable")));
            echo "
";
        }
        // line 72
        echo "
";
        // line 76
        if ($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "row_header", array())) {
            // line 77
            echo "    ";
            // line 78
            echo "    ";
            $context["params"] = array();
            // line 79
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                if (($context["key"] != "order")) {
                    // line 80
                    echo "        ";
                    $context["params"] = twig_array_merge((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), array($context["key"] => $context["val"]));
                    // line 81
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "    ";
            $context["link"] = ((("?" . twig_urlencode_filter((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")))) . ((twig_length_filter($this->env, (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")))) ? ("&") : (""))) . "order=");
            // line 83
            echo "    ";
            // line 84
            echo "
    <tr class=\"header\">
        ";
            // line 86
            $this->displayBlock('listing_header', $context, $blocks);
            // line 126
            echo "    </tr>
";
        }
        // line 128
        echo "
";
        // line 132
        echo "<tr ";
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "status", array()) != "published")) {
            echo "class=\"dim\"";
        }
        if ((isset($context["modifiable"]) ? $context["modifiable"] : $this->getContext($context, "modifiable"))) {
            echo " id=\"item_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()), "html", null, true);
            echo "\"";
        }
        echo ">

    ";
        // line 135
        echo "    ";
        $this->displayBlock('listing_id', $context, $blocks);
        // line 146
        echo "
    ";
        // line 148
        echo "    ";
        $this->displayBlock('listing_content', $context, $blocks);
        // line 182
        echo "
    ";
        // line 183
        if ($this->getAttribute((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "extended", array())) {
            // line 184
            echo "        ";
            $this->displayBlock('listing_meta', $context, $blocks);
            // line 206
            echo "    ";
        }
        // line 207
        echo "
    ";
        // line 209
        echo "    ";
        $this->displayBlock('listing_actions', $context, $blocks);
        // line 320
        echo "</tr>

";
        // line 322
        if ($this->getAttribute((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "last", array())) {
            // line 323
            echo "    ";
            echo $context["__internal_719b1d4fb5ebeb1587c96df34dbbddbdfc3c6be61bee64e910a0c4c943268e88"]->gettbody_end((($this->getAttribute((isset($context["internal"]) ? $context["internal"] : null), "selection_toolbar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["internal"]) ? $context["internal"] : null), "selection_toolbar", array()))) : ("")));
            echo "
";
        }
        
        $__internal_cd6618fc9739c7e37fe8901c1217461c43689790e51e1a7c8d5837e2906dcdd8->leave($__internal_cd6618fc9739c7e37fe8901c1217461c43689790e51e1a7c8d5837e2906dcdd8_prof);

    }

    // line 54
    public function block_listing_columns($context, array $blocks = array())
    {
        $__internal_f095f5a1b299490b6b8fbb50ba734ab1d1b21a8091355b1bad2aa24fcff674f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f095f5a1b299490b6b8fbb50ba734ab1d1b21a8091355b1bad2aa24fcff674f1->enter($__internal_f095f5a1b299490b6b8fbb50ba734ab1d1b21a8091355b1bad2aa24fcff674f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_columns"));

        echo "6";
        
        $__internal_f095f5a1b299490b6b8fbb50ba734ab1d1b21a8091355b1bad2aa24fcff674f1->leave($__internal_f095f5a1b299490b6b8fbb50ba734ab1d1b21a8091355b1bad2aa24fcff674f1_prof);

    }

    // line 86
    public function block_listing_header($context, array $blocks = array())
    {
        $__internal_d6376819750cc14b16fae8ca5b9cf84f3a2dead3d1d9ce4926c47ef463f1317c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6376819750cc14b16fae8ca5b9cf84f3a2dead3d1d9ce4926c47ef463f1317c->enter($__internal_d6376819750cc14b16fae8ca5b9cf84f3a2dead3d1d9ce4926c47ef463f1317c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_header"));

        // line 87
        echo "            ";
        $context["__internal_4fcd13a5df4022180e82fc817edb5f836daf28efba88de7c530b88d19b3c763f"] = $this->loadTemplate("@bolt/_buic/_listing.twig", "@bolt/_base/_listing.twig", 87);
        // line 88
        echo "
            ";
        // line 90
        echo "            ";
        if (($this->getAttribute((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "extended", array()) && (isset($context["modifiable"]) ? $context["modifiable"] : $this->getContext($context, "modifiable")))) {
            // line 91
            echo "                <th class=\"menu hidden-xs\">
                    <div class=\"btn-group\">
                        <button class=\"btn btn-default btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li class=\"select-all\"><a href=\"#\">";
            // line 97
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.select-all");
            echo "</a></li>
                            <li class=\"hidden select-none\"><a href=\"#\">";
            // line 98
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.select-none");
            echo "</a></li>
                            <li class=\"hidden divider\" role=\"separator\"></li>
                            <li class=\"hidden dropdown-header\">";
            // line 100
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.selection");
            echo " (#):</li>
                            <li class=\"hidden\"><a href=\"#\">• ";
            // line 101
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.delete");
            echo "</a></li>
                            <li class=\"hidden disabled\"><a href=\"#\">• ";
            // line 102
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.publish");
            echo "</a></li>
                            <li class=\"hidden disabled\"><a href=\"#\">• ";
            // line 103
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.depublish");
            echo "</a></li>
                        </ul>
                    </div>
                </th>
            ";
        } else {
            // line 108
            echo "                <th style=\"margin: 0; padding: 0;\"></th>
            ";
        }
        // line 110
        echo "
            ";
        // line 112
        echo "            <th class=\"hidden-xs\">";
        echo $context["__internal_4fcd13a5df4022180e82fc817edb5f836daf28efba88de7c530b88d19b3c763f"]->getbuic_listing_slink("id", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.id"));
        echo "</th>

            ";
        // line 115
        echo "            <th style=\"width:80%\">";
        echo $context["__internal_4fcd13a5df4022180e82fc817edb5f836daf28efba88de7c530b88d19b3c763f"]->getbuic_listing_slink(twig_first($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "TitleColumnName", array(), "method")), (($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Title") . " / ") . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Excerpt")));
        echo "</th>

            ";
        // line 118
        echo "            <th class=\"listthumb\"></th>

            ";
        // line 121
        echo "            <th class=\"username hidden-sm hidden-xs\">";
        echo $context["__internal_4fcd13a5df4022180e82fc817edb5f836daf28efba88de7c530b88d19b3c763f"]->getbuic_listing_slink("datecreated", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.meta"));
        echo "</th>

            ";
        // line 124
        echo "            <th><span class=\"hidden-xs\">";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.action-plural");
        echo "</span></th>
        ";
        
        $__internal_d6376819750cc14b16fae8ca5b9cf84f3a2dead3d1d9ce4926c47ef463f1317c->leave($__internal_d6376819750cc14b16fae8ca5b9cf84f3a2dead3d1d9ce4926c47ef463f1317c_prof);

    }

    // line 135
    public function block_listing_id($context, array $blocks = array())
    {
        $__internal_557a4f33ca9f380d47cb44cd93cf1a323ce13dc34db7135a350121ef29aeee63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557a4f33ca9f380d47cb44cd93cf1a323ce13dc34db7135a350121ef29aeee63->enter($__internal_557a4f33ca9f380d47cb44cd93cf1a323ce13dc34db7135a350121ef29aeee63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_id"));

        // line 136
        echo "        ";
        // line 137
        echo "        ";
        if (($this->getAttribute((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "extended", array()) && $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "delete", array()))) {
            // line 138
            echo "            <td class=\"check hidden-xs\"><input type=\"checkbox\" name=\"checkRow\"></td>
        ";
        } else {
            // line 140
            echo "            <td style=\"margin: 0; padding: 0;\"></td>
        ";
        }
        // line 142
        echo "
        ";
        // line 144
        echo "        <td class=\"id hidden-xs\">№ ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()), "html", null, true);
        echo "</td>
    ";
        
        $__internal_557a4f33ca9f380d47cb44cd93cf1a323ce13dc34db7135a350121ef29aeee63->leave($__internal_557a4f33ca9f380d47cb44cd93cf1a323ce13dc34db7135a350121ef29aeee63_prof);

    }

    // line 148
    public function block_listing_content($context, array $blocks = array())
    {
        $__internal_c721479631131f9d4c7f8742f627cf7db654b14f10e88703295927cc87fe5a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c721479631131f9d4c7f8742f627cf7db654b14f10e88703295927cc87fe5a6b->enter($__internal_c721479631131f9d4c7f8742f627cf7db654b14f10e88703295927cc87fe5a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_content"));

        // line 149
        echo "        ";
        // line 150
        echo "        <td class=\"excerpt ";
        if ($this->getAttribute((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "extended", array())) {
            echo "large";
        }
        echo "\">
            ";
        // line 151
        $context["title"] = (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array(0 => true), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array(0 => true), "method"), (("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-title")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-title")) . ")</em>")));
        // line 152
        echo "            <span>
                <strong class=\"visible-xs\">№ ";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()), "html", null, true);
        echo ". </strong>
                <strong>
                    ";
        // line 155
        if ((isset($context["modifiable"]) ? $context["modifiable"] : $this->getContext($context, "modifiable"))) {
            // line 156
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))), "html", null, true);
            echo "\" title=\"Slug: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "slug", array()), "html", null, true);
            echo "\">
                            ";
            // line 157
            echo (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"));
            // line 158
            echo "</a>
                    ";
        } else {
            // line 160
            echo "                        ";
            echo (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"));
            echo "
                    ";
        }
        // line 162
        echo "                </strong>
                ";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "excerpt", array(0 => ((isset($context["excerptlength"]) ? $context["excerptlength"] : $this->getContext($context, "excerptlength")) - twig_length_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))), 1 => false, 2 => ((array_key_exists("filter", $context)) ? (_twig_default_filter((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")))) : (""))), "method"), "html", null, true);
        echo "
            </span>
        </td>

        ";
        // line 168
        echo "        <td class=\"listthumb\">
            ";
        // line 169
        if ( !twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "getImage", array()))) {
            // line 170
            echo "                ";
            // line 171
            echo "                ";
            // line 172
            echo "                ";
            $context["thumb_height"] = twig_round(((isset($context["thumbsize"]) ? $context["thumbsize"] : $this->getContext($context, "thumbsize")) * 0.75));
            // line 173
            echo "                ";
            $context["thumb_small"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "getImage", array()), (isset($context["thumbsize"]) ? $context["thumbsize"] : $this->getContext($context, "thumbsize")), (isset($context["thumb_height"]) ? $context["thumb_height"] : $this->getContext($context, "thumb_height")), "c");
            // line 174
            echo "                ";
            $context["thumb_large"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "getImage", array()), 1000, 800, "r");
            // line 175
            echo "                ";
            $context["thumb_title"] = (($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Image") . ": ") . $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "getImage", array()));
            // line 176
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["thumb_large"]) ? $context["thumb_large"] : $this->getContext($context, "thumb_large")), "html", null, true);
            echo "\" class=\"magnific\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["thumb_title"]) ? $context["thumb_title"] : $this->getContext($context, "thumb_title")), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 177
            echo twig_escape_filter($this->env, (isset($context["thumb_small"]) ? $context["thumb_small"] : $this->getContext($context, "thumb_small")), "html", null, true);
            echo "\" width=\"";
            echo twig_escape_filter($this->env, (isset($context["thumbsize"]) ? $context["thumbsize"] : $this->getContext($context, "thumbsize")), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, (isset($context["thumb_height"]) ? $context["thumb_height"] : $this->getContext($context, "thumb_height")), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.thumbnail");
            echo "\">
                </a>
            ";
        }
        // line 180
        echo "        </td>
    ";
        
        $__internal_c721479631131f9d4c7f8742f627cf7db654b14f10e88703295927cc87fe5a6b->leave($__internal_c721479631131f9d4c7f8742f627cf7db654b14f10e88703295927cc87fe5a6b_prof);

    }

    // line 184
    public function block_listing_meta($context, array $blocks = array())
    {
        $__internal_9edfc913c62ea53d7a8f1166d18421c70e51a6a397fbbabdfd7d0ff5d5f30dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9edfc913c62ea53d7a8f1166d18421c70e51a6a397fbbabdfd7d0ff5d5f30dc4->enter($__internal_9edfc913c62ea53d7a8f1166d18421c70e51a6a397fbbabdfd7d0ff5d5f30dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_meta"));

        // line 185
        echo "            ";
        // line 186
        echo "            <td class=\"username hidden-sm hidden-xs\">
                <i class=\"fa fa-user fa-fw\"></i>
                ";
        // line 188
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 189
            echo "                ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "user", array()), "displayname", array()), 15);
            echo "
            ";
        } else {
            // line 191
            echo "                <s>";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "values", array()), "ownerid", array()), 15);
            echo "</s>
                ";
        }
        // line 192
        echo "<br>
                ";
        // line 193
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "status", array()) == "timed")) {
            // line 194
            echo "                    <i class=\"fa fa-clock-o status-timed fa-fw\"></i> ";
            echo $context["__internal_2b4cae9986eff23e2c6aa37e05abe162ada68d739e5c5290e95fae4ee2a96b6c"]->getbuic_moment($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datepublish", array()));
            echo "<br>
                ";
        } else {
            // line 196
            echo "                    <i class=\"fa fa-circle status-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "status", array()), "html", null, true);
            echo " fa-fw\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->localeDateTime($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datepublish", array()), "%x");
            echo "<br>
                ";
        }
        // line 198
        echo "                ";
        if ( !twig_test_empty((($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array()))) : ("")))) {
            // line 199
            echo "                    <i class=\"fa fa-align-left fa-fw\"></i>
                    <a href=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))), "html", null, true);
            echo "#taxonomy\" >
                        ";
            // line 201
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.order-colon-sort", array("%sort%" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "sortorder", array())));
            echo "
                    </a>
                ";
        }
        // line 204
        echo "            </td>
        ";
        
        $__internal_9edfc913c62ea53d7a8f1166d18421c70e51a6a397fbbabdfd7d0ff5d5f30dc4->leave($__internal_9edfc913c62ea53d7a8f1166d18421c70e51a6a397fbbabdfd7d0ff5d5f30dc4_prof);

    }

    // line 209
    public function block_listing_actions($context, array $blocks = array())
    {
        $__internal_f73e1e339ca8b09f497b8e907df91721b846939cc76bcf3cc0d5f248711ea738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73e1e339ca8b09f497b8e907df91721b846939cc76bcf3cc0d5f248711ea738->enter($__internal_f73e1e339ca8b09f497b8e907df91721b846939cc76bcf3cc0d5f248711ea738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_actions"));

        // line 210
        echo "        ";
        // line 211
        echo "        <td class=\"actions\">
            <div class=\"btn-group\">
                ";
        // line 213
        if ((isset($context["modifiable"]) ? $context["modifiable"] : $this->getContext($context, "modifiable"))) {
            // line 214
            echo "                    <a class=\"btn btn-default btn-xs hidden-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))), "html", null, true);
            echo "\">
                        <i class=\"fa fa-edit\"></i> ";
            // line 215
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.edit");
            echo "
                    </a>
                ";
        }
        // line 218
        echo "                <button type=\"button\" class=\"btn btn-default dropdown-toggle btn-xs\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-info-sign\"></i> <span class=\"caret\"></span>
                </button>

                <ul class=\"dropdown-menu pull-right\">
                    ";
        // line 223
        if ((($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "status", array()) == "published") &&  !twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "link", array())))) {
            // line 224
            echo "                        <li>
                            <a href=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "link", array()), "html", null, true);
            echo "\" target=\"_blank\">
                                <i class=\"fa fa-external-link-square\"></i> ";
            // line 226
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.view-on-site");
            echo "
                            </a>
                        </li>
                    ";
        }
        // line 230
        echo "                    ";
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "relation", array())) {
            // line 231
            echo "                        <li>
                            <a href=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("relatedto", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))), "html", null, true);
            echo "\">
                                <i class=\"fa fa-link\"></i> ";
            // line 233
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.view-related");
            echo "
                            </a>
                        </li>
                    ";
        }
        // line 237
        echo "
                    ";
        // line 238
        $context["__internal_0664935b0d67074620cb54ccb274e5d53559a168756f122a0d1683e14367177f"] = $this;
        // line 239
        echo "                    ";
        if ((isset($context["modifiable"]) ? $context["modifiable"] : $this->getContext($context, "modifiable"))) {
            // line 240
            echo "                        ";
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "status", array()) != "published")) {
                // line 241
                echo "                            ";
                if ($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "publish", array())) {
                    // line 242
                    echo "                                <li>";
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "publish", "fa-circle status-published", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.publish", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contenttype", array()), "slug", array()))));
                    echo "</li>
                            ";
                }
                // line 244
                echo "                        ";
            } else {
                // line 245
                echo "                            ";
                if ($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "depublish", array())) {
                    // line 246
                    echo "                                <li>";
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "held", "fa-circle status-held", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-change-held"));
                    echo "</li>
                                <li>";
                    // line 247
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "draft", "fa-circle status-draft", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-change-draft"));
                    echo "</li>

                            ";
                }
                // line 250
                echo "                        ";
            }
            // line 251
            echo "                        ";
            if ($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "create", array())) {
                // line 252
                echo "                            <li>
                                <a href=\"";
                // line 253
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()), "duplicate" => 1)), "html", null, true);
                echo "\">
                                    <i class=\"fa fa-copy\"></i> ";
                // line 254
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.duplicate", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contenttype", array()), "slug", array())));
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 258
            echo "                        ";
            if ($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "delete", array())) {
                // line 259
                echo "                            <li>
                                ";
                // line 260
                echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "delete", "fa-trash", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.delete", array("%contenttype%" => $this->getAttribute($this->getAttribute(                // line 262
(isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contenttype", array()), "slug", array()))), (("Are you sure you want to delete '" . $this->getAttribute(                // line 263
(isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "getTitle", array())) . "'?"));
                echo "
                            </li>
                        ";
            }
            // line 266
            echo "                        <li class=\"divider\"></li>
                    ";
        }
        // line 268
        echo "                    <li>
                        <a class=\"nolink\">
                            ";
        // line 270
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.author-colon");
        echo " <strong><i class=\"fa fa-user\"></i>
                                ";
        // line 271
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 272
            echo "                                    ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "user", array()), "displayname", array()), 15);
            echo "
                                ";
        } else {
            // line 274
            echo "                                    <s>user ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "values", array()), "ownerid", array()), "html", null, true);
            echo "</s>
                                ";
        }
        // line 275
        echo "</strong>
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 279
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-current-colon");
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "status", array()), "html", null, true);
        echo "</strong></a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 282
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.slug-colon");
        echo "
                            <code title=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "slug", array()), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "slug", array()), 24);
        echo "</code>
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 287
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.created-on-colon");
        echo "
                            <i class=\"fa fa-asterisk\"></i> ";
        // line 288
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datecreated", array()), "Y-m-d H:i"), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 292
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.published-on-colon");
        echo "
                            <i class=\"fa fa-calendar\"></i> ";
        // line 293
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datepublish", array()), "Y-m-d H:i"), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 297
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.last-edited-on-colon");
        echo "
                            <i class=\"fa fa-refresh\"></i> ";
        // line 298
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datechanged", array()), "Y-m-d H:i"), "html", null, true);
        echo "
                        </a>
                    </li>
                    ";
        // line 301
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "taxonomy", array()));
        foreach ($context['_seq'] as $context["taxonomyslug"] => $context["values"]) {
            // line 302
            echo "                        ";
            if ((twig_length_filter($this->env, $context["values"]) > 1)) {
                // line 303
                echo "                            <li>
                                <a class=\"nolink\">";
                // line 304
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array"), "name", array()), "html", null, true);
                echo ":
                                    <i class=\"fa fa-tag\"></i> ";
                // line 305
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt(twig_join_filter($context["values"], ", "), 24);
                echo "
                                </a>
                            </li>
                        ";
            } else {
                // line 309
                echo "                            <li>
                                <a class=\"nolink\">";
                // line 310
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array"), "singular_name", array()), "html", null, true);
                echo ":
                                    <i class=\"fa fa-tag\"></i> ";
                // line 311
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt(twig_first($this->env, $context["values"]), 24);
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 315
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['taxonomyslug'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        echo "                </ul>
            </div>
        </td>
    ";
        
        $__internal_f73e1e339ca8b09f497b8e907df91721b846939cc76bcf3cc0d5f248711ea738->leave($__internal_f73e1e339ca8b09f497b8e907df91721b846939cc76bcf3cc0d5f248711ea738_prof);

    }

    // line 5
    public function gettbody_beg($__local__ = null, $__modifiable__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "local" => $__local__,
            "modifiable" => $__modifiable__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3ed5973327d04ec0ae9f0948e9b042741974dc7ca26a3e7bc5dca3b8286d608f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_3ed5973327d04ec0ae9f0948e9b042741974dc7ca26a3e7bc5dca3b8286d608f->enter($__internal_3ed5973327d04ec0ae9f0948e9b042741974dc7ca26a3e7bc5dca3b8286d608f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tbody_beg"));

            // line 6
            echo "    ";
            $context["class"] = array(0 => ((            // line 7
(isset($context["modifiable"]) ? $context["modifiable"] : $this->getContext($context, "modifiable"))) ? ("sortable") : ("")), 1 => ((($this->getAttribute(            // line 8
(isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "row_heading", array()) && $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "row_header", array()))) ? ("striping_even") : ("striping_odd")));
            // line 10
            echo "
<tbody";
            // line 11
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hclass((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
            echo " data-bolt-widget=\"buicListingPart\">
";
            
            $__internal_3ed5973327d04ec0ae9f0948e9b042741974dc7ca26a3e7bc5dca3b8286d608f->leave($__internal_3ed5973327d04ec0ae9f0948e9b042741974dc7ca26a3e7bc5dca3b8286d608f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function gettbody_end($__toolbar__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "toolbar" => $__toolbar__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4321a55014b0f83ddf4dcbe9cf8efbda2f701b5358dccba7ed0df5ba87112d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_4321a55014b0f83ddf4dcbe9cf8efbda2f701b5358dccba7ed0df5ba87112d6d->enter($__internal_4321a55014b0f83ddf4dcbe9cf8efbda2f701b5358dccba7ed0df5ba87112d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tbody_end"));

            // line 15
            if ((isset($context["toolbar"]) ? $context["toolbar"] : $this->getContext($context, "toolbar"))) {
                // line 16
                echo "    <tr class=\"selectiontoolbar hidden\">
        <td colspan=\"";
                // line 17
                $this->displayBlock("listing_columns", $context, $blocks);
                echo "\">
            <i class=\"fa fa-fw fa-rotate-270 fa-mail-forward\"></i><div class=\"count\">0</div>
            ";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["toolbar"]) ? $context["toolbar"] : $this->getContext($context, "toolbar")), "html", null, true);
                echo "
        </td>
    </tr>
";
            }
            // line 23
            echo "</tbody>
";
            
            $__internal_4321a55014b0f83ddf4dcbe9cf8efbda2f701b5358dccba7ed0df5ba87112d6d->leave($__internal_4321a55014b0f83ddf4dcbe9cf8efbda2f701b5358dccba7ed0df5ba87112d6d_prof);

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
        return "@bolt/_base/_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  895 => 23,  888 => 19,  883 => 17,  880 => 16,  878 => 15,  863 => 14,  843 => 11,  840 => 10,  838 => 8,  837 => 7,  835 => 6,  819 => 5,  809 => 316,  803 => 315,  796 => 311,  792 => 310,  789 => 309,  782 => 305,  778 => 304,  775 => 303,  772 => 302,  768 => 301,  762 => 298,  758 => 297,  751 => 293,  747 => 292,  740 => 288,  736 => 287,  727 => 283,  723 => 282,  715 => 279,  709 => 275,  703 => 274,  697 => 272,  695 => 271,  691 => 270,  687 => 268,  683 => 266,  677 => 263,  676 => 262,  675 => 260,  672 => 259,  669 => 258,  662 => 254,  658 => 253,  655 => 252,  652 => 251,  649 => 250,  643 => 247,  638 => 246,  635 => 245,  632 => 244,  626 => 242,  623 => 241,  620 => 240,  617 => 239,  615 => 238,  612 => 237,  605 => 233,  601 => 232,  598 => 231,  595 => 230,  588 => 226,  584 => 225,  581 => 224,  579 => 223,  572 => 218,  566 => 215,  561 => 214,  559 => 213,  555 => 211,  553 => 210,  547 => 209,  539 => 204,  533 => 201,  529 => 200,  526 => 199,  523 => 198,  515 => 196,  509 => 194,  507 => 193,  504 => 192,  498 => 191,  492 => 189,  490 => 188,  486 => 186,  484 => 185,  478 => 184,  470 => 180,  458 => 177,  451 => 176,  448 => 175,  445 => 174,  442 => 173,  439 => 172,  437 => 171,  435 => 170,  433 => 169,  430 => 168,  423 => 163,  420 => 162,  414 => 160,  410 => 158,  408 => 157,  401 => 156,  399 => 155,  394 => 153,  391 => 152,  389 => 151,  382 => 150,  380 => 149,  374 => 148,  364 => 144,  361 => 142,  357 => 140,  353 => 138,  350 => 137,  348 => 136,  342 => 135,  332 => 124,  326 => 121,  322 => 118,  316 => 115,  310 => 112,  307 => 110,  303 => 108,  295 => 103,  291 => 102,  287 => 101,  283 => 100,  278 => 98,  274 => 97,  266 => 91,  263 => 90,  260 => 88,  257 => 87,  251 => 86,  239 => 54,  228 => 323,  226 => 322,  222 => 320,  219 => 209,  216 => 207,  213 => 206,  210 => 184,  208 => 183,  205 => 182,  202 => 148,  199 => 146,  196 => 135,  183 => 132,  180 => 128,  176 => 126,  174 => 86,  170 => 84,  168 => 83,  165 => 82,  158 => 81,  155 => 80,  149 => 79,  146 => 78,  144 => 77,  142 => 76,  139 => 72,  133 => 70,  131 => 69,  127 => 67,  121 => 65,  115 => 63,  113 => 62,  108 => 61,  105 => 60,  102 => 59,  99 => 58,  96 => 57,  93 => 56,  90 => 55,  87 => 54,  85 => 53,  79 => 50,  76 => 49,  70 => 47,  67 => 46,  65 => 45,  62 => 41,  60 => 39,  59 => 38,  58 => 37,  55 => 36,  53 => 34,  52 => 33,  51 => 31,  50 => 30,  49 => 29,  48 => 28,  45 => 27,  43 => 26,  40 => 25,  37 => 13,  34 => 4,  32 => 3,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@bolt/_macro/_macro.twig' as macro %}
{% from '@bolt/_buic/_moment.twig' import buic_moment %}
{% from _self import tbody_beg, tbody_end %}

{% macro tbody_beg(local, modifiable) %}
    {% set class = [
    modifiable ? 'sortable' : '',
    local.row_heading and local.row_header ? 'striping_even' : 'striping_odd',
    ] %}

<tbody{{ hclass(class)}} data-bolt-widget=\"buicListingPart\">
{% endmacro %}

{% macro tbody_end(toolbar) %}
{% if toolbar %}
    <tr class=\"selectiontoolbar hidden\">
        <td colspan=\"{{ block('listing_columns') }}\">
            <i class=\"fa fa-fw fa-rotate-270 fa-mail-forward\"></i><div class=\"count\">0</div>
            {{ toolbar }}
        </td>
    </tr>
{% endif %}
</tbody>
{% endmacro %}

{% set modifiable = permissions.create or permissions.edit or permissions.delete or permissions.publish or permissions.depublish %}

{% set prop = {
extended:       not compact,
has_groupname:  content.group.name is defined,
nextgroup:      new_group|default(false),
unordered:      request('order') == '',
first:          loop.first,
last:           loop.last
}%}

{% set local = {
row_heading:    prop.extended and prop.unordered and prop.has_groupname and (prop.first or prop.nextgroup),
row_header:     prop.extended and (prop.first or (prop.has_groupname and prop.nextgroup) and prop.unordered)
} %}

{#
 # GROUPNAME: If we have 'grouping', print the row with the groupname.
 #}
{% if local.row_heading or internal.heading|default() %}
    {% if not prop.first %}
        {{ tbody_end(internal.selection_toolbar|default()) }}
    {% endif %}

    {{ tbody_beg(local, modifiable) }}

    <tr class=\"heading\">
        {% if false %}
            {% block listing_columns %}6{% endblock %}
        {% endif %}
        {% if compact %}
            {% set columns = block('listing_columns') - 1 %}
        {% else %}
            {% set columns = block('listing_columns') %}
        {% endif %}
        <th colspan=\"{{ columns }}\">
            {% if internal.heading|default() %}
                {{ internal.heading }}
            {% else %}
                {{ content.group.name|default(__('(no group)')) }}
            {% endif %}
        </th>
    </tr>
{% elseif prop.first %}
    {{ tbody_beg(local, modifiable) }}
{% endif %}

{#
 # HEADER ROW: Print the header for the first row.
 #}
{% if local.row_header %}
    {# Deprecated #}
    {% set params = {} %}
    {% for key, val in app.request.query.all if key != 'order' %}
        {% set params = params|merge({(key): val}) %}
    {% endfor %}
    {% set link = '?' ~ params|url_encode ~ (params|length ? '&' : '') ~ 'order=' %}
    {# /Deprecated #}

    <tr class=\"header\">
        {% block listing_header %}
            {% from '@bolt/_buic/_listing.twig' import buic_listing_slink %}

            {# COLUMN: Select #}
            {% if prop.extended and modifiable %}
                <th class=\"menu hidden-xs\">
                    <div class=\"btn-group\">
                        <button class=\"btn btn-default btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li class=\"select-all\"><a href=\"#\">{{ __('general.phrase.select-all') }}</a></li>
                            <li class=\"hidden select-none\"><a href=\"#\">{{ __('general.phrase.select-none') }}</a></li>
                            <li class=\"hidden divider\" role=\"separator\"></li>
                            <li class=\"hidden dropdown-header\">{{ __('general.phrase.selection') }} (#):</li>
                            <li class=\"hidden\"><a href=\"#\">• {{ __('general.phrase.delete') }}</a></li>
                            <li class=\"hidden disabled\"><a href=\"#\">• {{ __('general.phrase.publish') }}</a></li>
                            <li class=\"hidden disabled\"><a href=\"#\">• {{ __('general.phrase.depublish') }}</a></li>
                        </ul>
                    </div>
                </th>
            {% else %}
                <th style=\"margin: 0; padding: 0;\"></th>
            {% endif %}

            {# COLUMN: ID #}
            <th class=\"hidden-xs\">{{ buic_listing_slink('id', __('general.phrase.id'))}}</th>

            {# COLUMN: Content #}
            <th style=\"width:80%\">{{ buic_listing_slink(content.TitleColumnName()|first, __('Title') ~ ' / ' ~ __('Excerpt')) }}</th>

            {# COLUMN: Thumbnail #}
            <th class=\"listthumb\"></th>

            {# COLUMN: Meta #}
            <th class=\"username hidden-sm hidden-xs\">{{ buic_listing_slink('datecreated', __('general.phrase.meta'))}}</th>

            {# COLUMN: Action #}
            <th><span class=\"hidden-xs\">{{ __('general.phrase.action-plural') }}</span></th>
        {% endblock %}
    </tr>
{% endif %}

{#
 # DATA ROW
 #}
<tr {% if content.status!='published' %}class=\"dim\"{% endif %}{% if modifiable %} id=\"item_{{ content.id }}\"{% endif %}>

    {### BLOCK: ID ###}
    {% block listing_id %}
        {# COLUMN: Select #}
        {% if prop.extended and permissions.delete %}
            <td class=\"check hidden-xs\"><input type=\"checkbox\" name=\"checkRow\"></td>
        {% else %}
            <td style=\"margin: 0; padding: 0;\"></td>
        {% endif %}

        {# COLUMN: ID #}
        <td class=\"id hidden-xs\">№ {{ content.id }}</td>
    {% endblock %}

    {### BLOCK: CONTENT ###}
    {% block listing_content %}
        {# COLUMN: Content #}
        <td class=\"excerpt {% if prop.extended %}large{% endif %}\">
            {% set title = content.getTitle(true)|default(\"<em>(\" ~ __('general.phrase.no-title') ~ \")</em>\") %}
            <span>
                <strong class=\"visible-xs\">№ {{ content.id }}. </strong>
                <strong>
                    {% if modifiable %}
                        <a href=\"{{ path('editcontent', {'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}\" title=\"Slug: {{ content.slug }}\">
                            {{ title|raw -}}
                        </a>
                    {% else %}
                        {{ title|raw }}
                    {% endif %}
                </strong>
                {{ content.excerpt(excerptlength - title|length, false, filter|default()) }}
            </span>
        </td>

        {# COLUMN: Thumbnail #}
        <td class=\"listthumb\">
            {% if content.getImage is not empty %}
                {# Hack to add alt attribute #}
                {#{ content.getImage|popup(thumbsize, thumbsize * 0.75, 'c') }#}
                {% set thumb_height = (thumbsize * 0.75)|round %}
                {% set thumb_small = content.getImage|thumbnail(thumbsize, thumb_height, 'c') %}
                {% set thumb_large = content.getImage|thumbnail(1000, 800, 'r') %}
                {% set thumb_title = __('Image') ~ ': ' ~ content.getImage %}
                <a href=\"{{ thumb_large }}\" class=\"magnific\" title=\"{{ thumb_title }}\">
                    <img src=\"{{ thumb_small }}\" width=\"{{ thumbsize }}\" height=\"{{ thumb_height }}\" alt=\"{{ __('general.phrase.thumbnail') }}\">
                </a>
            {% endif %}
        </td>
    {% endblock %}

    {% if prop.extended %}
        {% block listing_meta %}
            {# COLUMN: Meta #}
            <td class=\"username hidden-sm hidden-xs\">
                <i class=\"fa fa-user fa-fw\"></i>
                {% if content.user.displayname is defined %}
                {{ content.user.displayname|excerpt(15) }}
            {% else %}
                <s>{{ content.values.ownerid|excerpt(15) }}</s>
                {% endif %}<br>
                {% if content.status == 'timed' %}
                    <i class=\"fa fa-clock-o status-timed fa-fw\"></i> {{ buic_moment(content.datepublish) }}<br>
                {% else %}
                    <i class=\"fa fa-circle status-{{ content.status }} fa-fw\"></i> {{ content.datepublish|localedatetime('%x') }}<br>
                {% endif %}
                {% if content.sortorder|default() is not empty %}
                    <i class=\"fa fa-align-left fa-fw\"></i>
                    <a href=\"{{ path('editcontent', {'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}#taxonomy\" >
                        {{ __('general.phrase.order-colon-sort',{'%sort%': content.sortorder}) }}
                    </a>
                {% endif %}
            </td>
        {% endblock %}
    {% endif %}

    {### BLOCK: ACTIONS ###}
    {% block listing_actions %}
        {# COLUMN: Action #}
        <td class=\"actions\">
            <div class=\"btn-group\">
                {% if modifiable %}
                    <a class=\"btn btn-default btn-xs hidden-xs\" href=\"{{ path('editcontent', {'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}\">
                        <i class=\"fa fa-edit\"></i> {{ __('general.phrase.edit') }}
                    </a>
                {% endif %}
                <button type=\"button\" class=\"btn btn-default dropdown-toggle btn-xs\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-info-sign\"></i> <span class=\"caret\"></span>
                </button>

                <ul class=\"dropdown-menu pull-right\">
                    {% if content.status == \"published\" and content.link is not empty %}
                        <li>
                            <a href=\"{{ content.link }}\" target=\"_blank\">
                                <i class=\"fa fa-external-link-square\"></i> {{ __('general.phrase.view-on-site') }}
                            </a>
                        </li>
                    {% endif %}
                    {% if content.relation %}{# i.e. we're viewing this as \"related content\" on the \"edit record\" page. #}
                        <li>
                            <a href=\"{{ path('relatedto', {'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}\">
                                <i class=\"fa fa-link\"></i> {{ __('general.phrase.view-related') }}
                            </a>
                        </li>
                    {% endif %}

                    {% from _self import actionform %}
                    {% if modifiable %}
                        {% if content.status != 'published' %}
                            {% if permissions.publish %}
                                <li>{{ macro.actionform(content, 'publish', 'fa-circle status-published', __('contenttypes.generic.publish',{'%contenttype%':content.contenttype.slug})) }}</li>
                            {% endif %}
                        {% else %}
                            {% if permissions.depublish %}
                                <li>{{ macro.actionform(content, 'held', 'fa-circle status-held', __('general.phrase.status-change-held')) }}</li>
                                <li>{{ macro.actionform(content, 'draft', 'fa-circle status-draft', __('general.phrase.status-change-draft')) }}</li>

                            {% endif %}
                        {% endif %}
                        {% if permissions.create %}
                            <li>
                                <a href=\"{{ path('editcontent', {'contenttypeslug': content.contenttype.slug, 'id': content.id, 'duplicate': 1}) }}\">
                                    <i class=\"fa fa-copy\"></i> {{ __('contenttypes.generic.duplicate', {'%contenttype%': content.contenttype.slug}) }}
                                </a>
                            </li>
                        {% endif %}
                        {% if permissions.delete %}
                            <li>
                                {{ macro.actionform(content, 'delete',
                                'fa-trash',
                                __('contenttypes.generic.delete', {'%contenttype%': content.contenttype.slug}),
                                \"Are you sure you want to delete '\" ~ content.getTitle ~ \"'?\" ) }}
                            </li>
                        {% endif %}
                        <li class=\"divider\"></li>
                    {% endif %}
                    <li>
                        <a class=\"nolink\">
                            {{ __('general.phrase.author-colon') }} <strong><i class=\"fa fa-user\"></i>
                                {% if content.user.displayname is defined %}
                                    {{ content.user.displayname|excerpt(15) }}
                                {% else %}
                                    <s>user {{ content.values.ownerid }}</s>
                                {% endif %}</strong>
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">{{ __('general.phrase.status-current-colon') }}<strong>{{ content.status }}</strong></a>
                    </li>
                    <li>
                        <a class=\"nolink\">{{ __('general.phrase.slug-colon') }}
                            <code title=\"{{ content.slug }}\">{{ content.slug|excerpt(24) }}</code>
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">{{ __('general.phrase.created-on-colon') }}
                            <i class=\"fa fa-asterisk\"></i> {{ content.datecreated|date(\"Y-m-d H:i\") }}
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">{{ __('general.phrase.published-on-colon') }}
                            <i class=\"fa fa-calendar\"></i> {{ content.datepublish|date(\"Y-m-d H:i\") }}
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">{{ __('general.phrase.last-edited-on-colon') }}
                            <i class=\"fa fa-refresh\"></i> {{ content.datechanged|date(\"Y-m-d H:i\") }}
                        </a>
                    </li>
                    {% for taxonomyslug, values in content.taxonomy %}
                        {% if values|length > 1 %}
                            <li>
                                <a class=\"nolink\">{{ config.get('taxonomy')[taxonomyslug].name }}:
                                    <i class=\"fa fa-tag\"></i> {{ values|join(\", \")|excerpt(24) }}
                                </a>
                            </li>
                        {% else %}
                            <li>
                                <a class=\"nolink\">{{ config.get('taxonomy')[taxonomyslug].singular_name }}:
                                    <i class=\"fa fa-tag\"></i> {{ values|first|excerpt(24) }}
                                </a>
                            </li>
                        {% endif %}
                    {% endfor %}
                </ul>
            </div>
        </td>
    {% endblock %}
</tr>

{% if prop.last %}
    {{ tbody_end(internal.selection_toolbar|default()) }}
{% endif %}
", "@bolt/_base/_listing.twig", "app://view/twig/_base/_listing.twig");
    }
}
