<?php

/* @bolt/_nav/_macros.twig */
class __TwigTemplate_c04384c4c639a1b05283d0bf799509befb7bd17de00c62b918e471065f5eab1d extends Twig_Template
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
        $__internal_daa9a92ee3daabe625cfe1ca24f28091f391a4f642da665259699f7c8238ae83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa9a92ee3daabe625cfe1ca24f28091f391a4f642da665259699f7c8238ae83->enter($__internal_daa9a92ee3daabe625cfe1ca24f28091f391a4f642da665259699f7c8238ae83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_macros.twig"));

        // line 10
        echo "

";
        // line 76
        echo "

";
        // line 95
        echo "

";
        // line 111
        echo "

";
        // line 126
        echo "

";
        
        $__internal_daa9a92ee3daabe625cfe1ca24f28091f391a4f642da665259699f7c8238ae83->leave($__internal_daa9a92ee3daabe625cfe1ca24f28091f391a4f642da665259699f7c8238ae83_prof);

    }

    // line 4
    public function getheading($__title__ = null, $__icon__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "icon" => $__icon__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6bfb8da7f8660d00cad3dc8f1f4ee7f18f5dcd6eb3f3fcd5d3f37f68e4f34adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6bfb8da7f8660d00cad3dc8f1f4ee7f18f5dcd6eb3f3fcd5d3f37f68e4f34adc->enter($__internal_6bfb8da7f8660d00cad3dc8f1f4ee7f18f5dcd6eb3f3fcd5d3f37f68e4f34adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "heading"));

            // line 5
            echo "    ";
            $context["__internal_19fa254331beb0732aaa803e2f9302eb9787400327ae051490e24d5817d8745e"] = $this;
            // line 6
            echo "    <li class=\"divider\">
        <em>";
            // line 7
            echo $context["__internal_19fa254331beb0732aaa803e2f9302eb9787400327ae051490e24d5817d8745e"]->getlabel((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")));
            echo "</em>
    </li>
";
            
            $__internal_6bfb8da7f8660d00cad3dc8f1f4ee7f18f5dcd6eb3f3fcd5d3f37f68e4f34adc->leave($__internal_6bfb8da7f8660d00cad3dc8f1f4ee7f18f5dcd6eb3f3fcd5d3f37f68e4f34adc_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getsubmenu($__icon__ = null, $__label__ = null, $__popoveritems__ = null, $__active__ = null, $__wide__ = null, $__subitems__ = null, $__force_submenu__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "popoveritems" => $__popoveritems__,
            "active" => $__active__,
            "wide" => $__wide__,
            "subitems" => $__subitems__,
            "force_submenu" => $__force_submenu__,
            "varargs" => func_num_args() > 7 ? array_slice(func_get_args(), 7) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_11f625d8172c3e0acf7dc19cb6f67b17dbef99267817b4578bddf006bc9aee67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_11f625d8172c3e0acf7dc19cb6f67b17dbef99267817b4578bddf006bc9aee67->enter($__internal_11f625d8172c3e0acf7dc19cb6f67b17dbef99267817b4578bddf006bc9aee67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "submenu"));

            // line 23
            echo "
    ";
            // line 24
            $context["__internal_bf2c1aa7b56cb6459ed11d37d67ee00926c1a5045e6f8ab43609f0138e698890"] = $this;
            // line 25
            echo "
    ";
            // line 26
            if (twig_test_empty((isset($context["subitems"]) ? $context["subitems"] : $this->getContext($context, "subitems")))) {
                // line 27
                echo "        ";
                $context["subitems"] = (isset($context["popoveritems"]) ? $context["popoveritems"] : $this->getContext($context, "popoveritems"));
                // line 28
                echo "    ";
            }
            // line 29
            echo "
    ";
            // line 31
            echo "    ";
            $context["allowedany"] = false;
            // line 32
            echo "    ";
            $context["allowedamount"] = 0;
            // line 33
            echo "    ";
            $context["allowedsingle"] = "";
            // line 34
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subitems"]) ? $context["subitems"] : $this->getContext($context, "subitems")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "        ";
                if ((($context["item"] != "-") && $this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed((($this->getAttribute($context["item"], "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "isallowed", array()), "dashboard")) : ("dashboard"))))) {
                    // line 36
                    echo "            ";
                    $context["allowedany"] = true;
                    // line 37
                    echo "            ";
                    $context["allowedamount"] = ((isset($context["allowedamount"]) ? $context["allowedamount"] : $this->getContext($context, "allowedamount")) + 1);
                    // line 38
                    echo "            ";
                    $context["allowedsingle"] = $context["item"];
                    // line 39
                    echo "        ";
                }
                // line 40
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
    ";
            // line 42
            $context["class"] = trim(((((isset($context["wide"]) ? $context["wide"] : $this->getContext($context, "wide"))) ? (" menu-pop-wide") : ("")) . (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) ? (" active") : (""))));
            // line 43
            echo "
    ";
            // line 45
            echo "    ";
            if ((isset($context["allowedany"]) ? $context["allowedany"] : $this->getContext($context, "allowedany"))) {
                // line 46
                echo "        <li";
                if ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 47
                if ((((isset($context["allowedamount"]) ? $context["allowedamount"] : $this->getContext($context, "allowedamount")) == 1) &&  !((array_key_exists("force_submenu", $context)) ? (_twig_default_filter((isset($context["force_submenu"]) ? $context["force_submenu"] : $this->getContext($context, "force_submenu")), false)) : (false)))) {
                    // line 48
                    echo "                ";
                    $context["item"] = (isset($context["allowedsingle"]) ? $context["allowedsingle"] : $this->getContext($context, "allowedsingle"));
                    // line 49
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "link", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 50
                    echo $context["__internal_bf2c1aa7b56cb6459ed11d37d67ee00926c1a5045e6f8ab43609f0138e698890"]->geticon($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array()), "icon");
                    echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), (("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-content")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-content")) . ")</em>")));
                    echo "
                </a>
            ";
                } else {
                    // line 53
                    echo "                <a  href=\"";
                    if ((isset($context["popoveritems"]) ? $context["popoveritems"] : $this->getContext($context, "popoveritems"))) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["popoveritems"]) ? $context["popoveritems"] : $this->getContext($context, "popoveritems")), 0, array()), "link", array()), "html", null, true);
                    } else {
                        echo "#";
                    }
                    echo "\" class=\"menu-pop\">
                    ";
                    // line 54
                    echo $context["__internal_bf2c1aa7b56cb6459ed11d37d67ee00926c1a5045e6f8ab43609f0138e698890"]->getlabel((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")));
                    echo "
                </a>
                <ul class=\"nav submenu\">
                    ";
                    // line 57
                    $context["divider"] = false;
                    // line 58
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["popoveritems"]) ? $context["popoveritems"] : $this->getContext($context, "popoveritems")));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 59
                        echo "                        ";
                        if (($context["item"] == "-")) {
                            // line 60
                            echo "                            ";
                            $context["divider"] = true;
                            // line 61
                            echo "                        ";
                        } elseif ($this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed((($this->getAttribute($context["item"], "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "isallowed", array()), "dashboard")) : ("dashboard")))) {
                            // line 62
                            echo "                            <li";
                            if ((isset($context["divider"]) ? $context["divider"] : $this->getContext($context, "divider"))) {
                                echo " class=\"subdivider\"";
                            }
                            echo ">
                                <a href=\"";
                            // line 63
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                            echo "\">
                                    ";
                            // line 64
                            echo $context["__internal_bf2c1aa7b56cb6459ed11d37d67ee00926c1a5045e6f8ab43609f0138e698890"]->geticon($this->getAttribute($context["item"], "icon", array()));
                            echo (($this->getAttribute($context["item"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "label", array()), (("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-content")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-content")) . ")</em>")));
                            echo "
                                </a>
                            </li>
                            ";
                            // line 67
                            $context["divider"] = false;
                            // line 68
                            echo "                        ";
                        }
                        // line 69
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    echo "                </ul>
            ";
                }
                // line 72
                echo "        </li>
    ";
            }
            // line 74
            echo "
";
            
            $__internal_11f625d8172c3e0acf7dc19cb6f67b17dbef99267817b4578bddf006bc9aee67->leave($__internal_11f625d8172c3e0acf7dc19cb6f67b17dbef99267817b4578bddf006bc9aee67_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 81
    public function getcollapse()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6ea3cc46ec65d035707bf170ffe3127ef651b600c95df8c1d38d3c93427f2817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6ea3cc46ec65d035707bf170ffe3127ef651b600c95df8c1d38d3c93427f2817->enter($__internal_6ea3cc46ec65d035707bf170ffe3127ef651b600c95df8c1d38d3c93427f2817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collapse"));

            // line 82
            echo "    ";
            $context["__internal_2d9b5a266869096fa22b125db35d957b09c9d4b5f21d3a9ea658187929b2442f"] = $this;
            // line 83
            echo "
    <li class=\"nav-secondary-collapse\">
        <a href=\"#\">
            ";
            // line 86
            echo $context["__internal_2d9b5a266869096fa22b125db35d957b09c9d4b5f21d3a9ea658187929b2442f"]->getlabel("fa:compress", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.collapse-sidebar"));
            echo "
        </a>
    </li>
    <li class=\"nav-secondary-expand\">
        <a href=\"#\">
            ";
            // line 91
            echo $context["__internal_2d9b5a266869096fa22b125db35d957b09c9d4b5f21d3a9ea658187929b2442f"]->getlabel("fa:expand", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Expand sidebar"));
            echo "
        </a>
    </li>
";
            
            $__internal_6ea3cc46ec65d035707bf170ffe3127ef651b600c95df8c1d38d3c93427f2817->leave($__internal_6ea3cc46ec65d035707bf170ffe3127ef651b600c95df8c1d38d3c93427f2817_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 100
    public function getlink($__icon__ = null, $__label__ = null, $__pathname__ = null, $__active__ = null, $__divider__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "pathname" => $__pathname__,
            "active" => $__active__,
            "divider" => $__divider__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ab19d7138ace09be0fed686460b1cf57faee277df4a6522156ee2de0b1a2b13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ab19d7138ace09be0fed686460b1cf57faee277df4a6522156ee2de0b1a2b13a->enter($__internal_ab19d7138ace09be0fed686460b1cf57faee277df4a6522156ee2de0b1a2b13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link"));

            // line 101
            echo "    ";
            $context["__internal_1dc3743ac72eaa2c93cd38a654d68779b1754130c943873e6868b92c864e7f64"] = $this;
            // line 102
            echo "    ";
            $context["class"] = "";
            // line 103
            echo "    ";
            if (((isset($context["pathname"]) ? $context["pathname"] : $this->getContext($context, "pathname")) == "dashboard")) {
                $context["class"] = "nav-secondary-dashboard";
            }
            // line 104
            echo "    ";
            if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                $context["class"] = ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")) . " active");
            }
            // line 105
            echo "    ";
            if ((isset($context["divider"]) ? $context["divider"] : $this->getContext($context, "divider"))) {
                $context["class"] = ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")) . " divider");
            }
            // line 106
            echo "
    <li";
            // line 107
            if ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) {
                echo " class=\"";
                echo twig_escape_filter($this->env, trim((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))), "html", null, true);
                echo "\" ";
            }
            echo ">
        <a href=\"";
            // line 108
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["pathname"]) ? $context["pathname"] : $this->getContext($context, "pathname")));
            echo "\">";
            echo $context["__internal_1dc3743ac72eaa2c93cd38a654d68779b1754130c943873e6868b92c864e7f64"]->getlabel((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")));
            echo "</a>
    </li>
";
            
            $__internal_ab19d7138ace09be0fed686460b1cf57faee277df4a6522156ee2de0b1a2b13a->leave($__internal_ab19d7138ace09be0fed686460b1cf57faee277df4a6522156ee2de0b1a2b13a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 116
    public function getlabel($__icon__ = null, $__label__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3b40e2efd58f1809c9011d63f417dff806bf9b85d9c4e10003b703e1387fb580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_3b40e2efd58f1809c9011d63f417dff806bf9b85d9c4e10003b703e1387fb580->enter($__internal_3b40e2efd58f1809c9011d63f417dff806bf9b85d9c4e10003b703e1387fb580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label"));

            // line 117
            echo "    ";
            $context["__internal_192f04ca48c8ea1123d63b36d8ae38a1fbc3b1ef33ba19ed880d78d6f26b3777"] = $this;
            // line 118
            echo "
    ";
            // line 119
            if (twig_test_empty((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")))) {
                // line 120
                echo "        <i class=\"icon\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), 0, 1), "html", null, true);
                echo "</i>
    ";
            } elseif ((            // line 121
(isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")) != "-")) {
                // line 122
                echo "        ";
                echo $context["__internal_192f04ca48c8ea1123d63b36d8ae38a1fbc3b1ef33ba19ed880d78d6f26b3777"]->geticon((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), true);
                echo "
    ";
            }
            // line 124
            echo "    ";
            echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
            echo "
";
            
            $__internal_3b40e2efd58f1809c9011d63f417dff806bf9b85d9c4e10003b703e1387fb580->leave($__internal_3b40e2efd58f1809c9011d63f417dff806bf9b85d9c4e10003b703e1387fb580_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 131
    public function geticon($__icon__ = null, $__box__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "box" => $__box__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5082c8e2eb4c21850e92270afc77239442899f6b398b675a075af14a4291328e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5082c8e2eb4c21850e92270afc77239442899f6b398b675a075af14a4291328e->enter($__internal_5082c8e2eb4c21850e92270afc77239442899f6b398b675a075af14a4291328e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "icon"));

            // line 132
            echo "    ";
            $context["class"] = ((((array_key_exists("box", $context)) ? (_twig_default_filter((isset($context["box"]) ? $context["box"] : $this->getContext($context, "box")), false)) : (false))) ? ("icon") : ("fa-fw"));
            // line 133
            echo "    ";
            // line 134
            echo "    ";
            if ((twig_slice($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), 0, 3) == "fa:")) {
                // line 135
                echo "        <i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), 3), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\"></i>
    ";
                // line 137
                echo "    ";
            } else {
                // line 138
                echo "        <i class=\"fa fa-question-circle ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
                echo "\"></i>
    ";
            }
            
            $__internal_5082c8e2eb4c21850e92270afc77239442899f6b398b675a075af14a4291328e->leave($__internal_5082c8e2eb4c21850e92270afc77239442899f6b398b675a075af14a4291328e_prof);

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
        return "@bolt/_nav/_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 138,  504 => 137,  497 => 135,  494 => 134,  492 => 133,  489 => 132,  473 => 131,  452 => 124,  446 => 122,  444 => 121,  439 => 120,  437 => 119,  434 => 118,  431 => 117,  415 => 116,  392 => 108,  384 => 107,  381 => 106,  376 => 105,  371 => 104,  366 => 103,  363 => 102,  360 => 101,  341 => 100,  319 => 91,  311 => 86,  306 => 83,  303 => 82,  289 => 81,  270 => 74,  266 => 72,  262 => 70,  256 => 69,  253 => 68,  251 => 67,  244 => 64,  240 => 63,  233 => 62,  230 => 61,  227 => 60,  224 => 59,  219 => 58,  217 => 57,  211 => 54,  202 => 53,  195 => 50,  190 => 49,  187 => 48,  185 => 47,  176 => 46,  173 => 45,  170 => 43,  168 => 42,  165 => 41,  159 => 40,  156 => 39,  153 => 38,  150 => 37,  147 => 36,  144 => 35,  139 => 34,  136 => 33,  133 => 32,  130 => 31,  127 => 29,  124 => 28,  121 => 27,  119 => 26,  116 => 25,  114 => 24,  111 => 23,  90 => 22,  69 => 7,  66 => 6,  63 => 5,  47 => 4,  38 => 126,  34 => 111,  30 => 95,  26 => 76,  22 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # Sidebar-menu heading
 #}
{% macro heading(title, icon) %}
    {% from _self import label %}
    <li class=\"divider\">
        <em>{{ label(icon, title) }}</em>
    </li>
{% endmacro %}


{##
 # Sidebar-menu blocks with links, popover (for desktop) and touch-to-show (for mobile)
 #
 # @param string  icon
 # @param string  label (default: slug())
 # @param array   popoveritems
 # @param bool    active
 # @param bool    wide
 # @param array   subitems
 #}
{% macro submenu(icon, label, popoveritems, active, wide, subitems, force_submenu) %}

    {% from _self import label, icon %}

    {% if subitems is empty %}
        {% set subitems = popoveritems %}
    {% endif %}

    {# Only display the 'root' option, if any of the subitems are allowed to be shown. #}
    {% set allowedany = false %}
    {% set allowedamount = 0 %}
    {% set allowedsingle = \"\" %}
    {% for item in subitems %}
        {% if item != '-' and isallowed(item.isallowed|default('dashboard')) %}
            {% set allowedany = true %}
            {% set allowedamount = allowedamount + 1 %}
            {% set allowedsingle = item %}
        {% endif %}
    {% endfor %}

    {% set class = ((wide ? ' menu-pop-wide' : '') ~ (active ? ' active' : ''))|trim %}

    {# Show stuff! #}
    {% if allowedany %}
        <li{% if class %} class=\"{{ class }}\"{% endif %}>
            {% if allowedamount == 1 and not force_submenu|default(false) %}
                {% set item = allowedsingle %}
                <a href=\"{{ item.link }}\">
                    {{ icon(item.icon, \"icon\") }}{{ item.label|default(\"<em>(\" ~ __('general.phrase.no-content') ~ \")</em>\")|raw }}
                </a>
            {% else %}
                <a  href=\"{% if popoveritems %}{{ popoveritems.0.link }}{% else %}#{% endif %}\" class=\"menu-pop\">
                    {{ label(icon, label) }}
                </a>
                <ul class=\"nav submenu\">
                    {% set divider = false %}
                    {% for item in popoveritems %}
                        {% if item == '-' %}
                            {% set divider = true %}
                        {% elseif isallowed(item.isallowed|default('dashboard')) %}
                            <li{% if divider %} class=\"subdivider\"{% endif %}>
                                <a href=\"{{ item.link }}\">
                                    {{ icon(item.icon) }}{{ item.label|default(\"<em>(\" ~ __('general.phrase.no-content') ~ \")</em>\")|raw }}
                                </a>
                            </li>
                            {% set divider = false %}
                        {% endif %}
                    {% endfor %}
                </ul>
            {% endif %}
        </li>
    {% endif %}

{% endmacro %}


{##
 # Sidebar-menu collapse/expand
 #}
{% macro collapse() %}
    {% from _self import label %}

    <li class=\"nav-secondary-collapse\">
        <a href=\"#\">
            {{ label('fa:compress', __('general.phrase.collapse-sidebar')) }}
        </a>
    </li>
    <li class=\"nav-secondary-expand\">
        <a href=\"#\">
            {{ label('fa:expand', __('Expand sidebar')) }}
        </a>
    </li>
{% endmacro %}


{##
 # Sidebar-menu link
 #}
{% macro link(icon, label, pathname, active, divider) %}
    {% from _self import label %}
    {% set class = '' %}
    {% if pathname == 'dashboard' %}{% set class = 'nav-secondary-dashboard' %}{% endif %}
    {% if active %}{% set class = class ~ ' active' %}{% endif %}
    {% if divider %}{% set class = class ~ ' divider' %}{% endif %}

    <li{% if class %} class=\"{{ class|trim }}\" {% endif %}>
        <a href=\"{{ path(pathname) }}\">{{ label(icon, label) }}</a>
    </li>
{% endmacro %}


{##
 # Sidebar-menu label
 #}
{% macro label(icon, label) %}
    {% from _self import icon %}

    {% if icon is empty %}
        <i class=\"icon\">{{ label|slice(0, 1) }}</i>
    {% elseif icon != '-' %}
        {{ icon(icon, true) }}
    {% endif %}
    {{ label|raw }}
{% endmacro %}


{##
 # Icon
 #}
{% macro icon(icon, box) %}
    {% set class = box|default(false) ? 'icon' : 'fa-fw' %}
    {# Font Awsome #}
    {% if icon|slice(0,3) == 'fa:' %}
        <i class=\"fa fa-{{ icon|slice(3) }} {{ class }}\"></i>
    {# Defaults to (?) #}
    {% else %}
        <i class=\"fa fa-question-circle {{ class }}\" title=\"{{ icon }}\"></i>
    {% endif %}
{% endmacro %}
", "@bolt/_nav/_macros.twig", "app://view/twig/_nav/_macros.twig");
    }
}
