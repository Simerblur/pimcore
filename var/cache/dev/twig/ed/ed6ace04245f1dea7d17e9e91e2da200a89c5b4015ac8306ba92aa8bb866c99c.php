<?php

/* PimcoreCoreBundle:Profiler:targeting_data_collector.html.twig */
class __TwigTemplate_b34a25090ab2948ca73e611d4e9f1a59e3557c1db195cc9d5a932a45d1030fc4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "PimcoreCoreBundle:Profiler:targeting_data_collector.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PimcoreCoreBundle:Profiler:targeting_data_collector.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PimcoreCoreBundle:Profiler:targeting_data_collector.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->source); })()), "hasData", array())) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "PimcoreCoreBundle:Profiler:target.svg.twig");
            echo "

            ";
            // line 8
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 8, $this->source); })()), "documentTargetGroup", array()))) {
                // line 9
                echo "                <span class=\"sf-toolbar-value\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 9, $this->source); })()), "documentTargetGroup", array()), "name", array()), "html", null, true);
                echo "</span>
            ";
            }
            // line 11
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-group\">
                ";
            // line 15
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 15, $this->source); })()), "documentTargetGroup", array()))) {
                // line 16
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Document Target Group</b>
                        <span>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 18, $this->source); })()), "documentTargetGroup", array()), "name", array()), "html", null, true);
                echo "</span>
                    </div>
                ";
            }
            // line 21
            echo "
                <div class=\"sf-toolbar-info-piece\">
                    <b>Matched Rules</b>
                    <span class=\"sf-toolbar-status\">";
            // line 24
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 24, $this->source); })()), "rules", array())), "html", null, true);
            echo "</span>
                </div>

                ";
            // line 27
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->source); })()), "targetGroups", array()))) {
                // line 28
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <h5 style=\"display: table-caption; margin-bottom: 5px; font-size: 13px\">Target Groups</h5>
                    </div>

                    ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 32, $this->source); })()), "targetGroups", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["targetGroup"]) {
                    // line 33
                    echo "                        <div class=\"sf-toolbar-info-piece\">
                            <b>";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["targetGroup"], "name", array()), "html", null, true);
                    echo "</b>
                            <span class=\"sf-toolbar-status\">";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["targetGroup"], "count", array()), "html", null, true);
                    echo "</span>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['targetGroup'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                ";
            } else {
                // line 39
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Target Groups</b>
                        <span class=\"sf-toolbar-status\">0</span>
                    </div>
                ";
            }
            // line 44
            echo "            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 46
            echo "
        ";
            // line 47
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 52
        echo "    <span class=\"label ";
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 52, $this->source); })()), "hasData", array())) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">
            ";
        // line 54
        echo twig_include($this->env, $context, "PimcoreCoreBundle:Profiler:target.svg.twig");
        echo "
        </span>
        <strong>Targeting</strong>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_panel($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 61
        echo "    <h2>Targeting</h2>

    ";
        // line 63
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 63, $this->source); })()), "hasData", array())) {
            // line 64
            echo "        <div class=\"empty\">
            <p>No targeting data available.</p>
        </div>
    ";
        } else {
            // line 68
            echo "
        <div class=\"metrics\" style=\"margin-bottom: 25px\">
            ";
            // line 70
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 70, $this->source); })()), "documentTargetGroup", array()))) {
                // line 71
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 72, $this->source); })()), "documentTargetGroup", array()), "name", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Document Target Group</span>
                </div>
            ";
            }
            // line 76
            echo "
            <div class=\"metric\">
                <span class=\"value\">";
            // line 78
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 78, $this->source); })()), "rules", array())), "html", null, true);
            echo "</span>
                <span class=\"label\">Matched Rules</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 83
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 83, $this->source); })()), "targetGroups", array())), "html", null, true);
            echo "</span>
                <span class=\"label\">Assigned Target Groups</span>
            </div>
        </div>

        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Results</h3>

                <div class=\"tab-content\">
                    <h3>Matched Targeting Rules</h3>

                    <table class=\"";
            // line 95
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 95, $this->source); })()), "")) : ("")), "html", null, true);
            echo "\">
                        <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">ID</th>
                            <th scope=\"col\">Name</th>
                            <th scope=\"col\">Duration</th>
                            <th scope=\"col\">Conditions</th>
                            <th scope=\"col\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 106, $this->source); })()), "rules", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                // line 107
                echo "                            <tr>
                                <th>";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "id", array()), "html", null, true);
                echo "</th>
                                <td>";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "name", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 110
                echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, $context["rule"], "duration", array()), 2), "html", null, true);
                echo " ms</td>
                                <td>";
                // line 111
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "conditions", array()), ((array_key_exists("maxDepth", $context)) ? (_twig_default_filter((isset($context["maxDepth"]) || array_key_exists("maxDepth", $context) ? $context["maxDepth"] : (function () { throw new Twig_Error_Runtime('Variable "maxDepth" does not exist.', 111, $this->source); })()), 0)) : (0))));
                echo "</td>
                                <td>";
                // line 112
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "actions", array()), ((array_key_exists("maxDepth", $context)) ? (_twig_default_filter((isset($context["maxDepth"]) || array_key_exists("maxDepth", $context) ? $context["maxDepth"] : (function () { throw new Twig_Error_Runtime('Variable "maxDepth" does not exist.', 112, $this->source); })()), 0)) : (0))));
                echo "</td>
                            </tr>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 115
                echo "                            <tr>
                                <td colspan=\"2\">(no rules matched)</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                        </tbody>
                    </table>

                    <h3>Assigned Target Groups</h3>

                    <table class=\"";
            // line 124
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 124, $this->source); })()), "")) : ("")), "html", null, true);
            echo "\">
                        <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">ID</th>
                            <th scope=\"col\">Name</th>
                            <th scope=\"col\">Threshold</th>
                            <th scope=\"col\">Assignment Count</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 134, $this->source); })()), "targetGroups", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["targetGroup"]) {
                // line 135
                echo "                            <tr>
                                <th>";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["targetGroup"], "id", array()), "html", null, true);
                echo "</th>
                                <td>";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["targetGroup"], "name", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 138
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["targetGroup"], "threshold", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["targetGroup"], "count", array()), "html", null, true);
                echo "</td>
                            </tr>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 142
                echo "                            <tr>
                                <td colspan=\"2\">(no target group assignments)</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['targetGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "                        </tbody>
                    </table>

                    <h3>Target Groups assigned to Documents</h3>

                    <table class=\"";
            // line 151
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 151, $this->source); })()), "")) : ("")), "html", null, true);
            echo "\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Document ID</th>
                            <th scope=\"col\">Path</th>
                            <th scope=\"col\">Target Group ID</th>
                            <th scope=\"col\">Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 161, $this->source); })()), "documentTargetGroups", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["assignment"]) {
                // line 162
                echo "                            <tr>
                                <th>";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["assignment"], "document", array()), "id", array()), "html", null, true);
                echo "</th>
                                <td>";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["assignment"], "document", array()), "path", array()), "html", null, true);
                echo "</td>
                                <th>";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["assignment"], "targetGroup", array()), "id", array()), "html", null, true);
                echo "</th>
                                <td>";
                // line 166
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["assignment"], "targetGroup", array()), "name", array()), "html", null, true);
                echo "</td>
                            </tr>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 169
                echo "                            <tr>
                                <td colspan=\"2\">(no target groups were assigned to documents)</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assignment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Visitor Info</h3>

                <div class=\"tab-content\">
                    <h3>Visitor Info</h3>

                    ";
            // line 184
            echo twig_include($this->env, $context, "@PimcoreCore/Profiler/key_value_table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 184, $this->source); })()), "visitorInfo", array())), false);
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Storage</h3>

                <div class=\"tab-content\">
                    <h3>Session Storage</h3>

                    ";
            // line 194
            echo twig_include($this->env, $context, "@PimcoreCore/Profiler/key_value_table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 194, $this->source); })()), "storage", array()), "session", array())), false);
            echo "
                </div>

                <div class=\"tab-content\">
                    <h3>Visitor Storage</h3>

                    ";
            // line 200
            echo twig_include($this->env, $context, "@PimcoreCore/Profiler/key_value_table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 200, $this->source); })()), "storage", array()), "visitor", array())), false);
            echo "
                </div>
            </div>
        </div>

    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PimcoreCoreBundle:Profiler:targeting_data_collector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 200,  456 => 194,  443 => 184,  430 => 173,  421 => 169,  413 => 166,  409 => 165,  405 => 164,  401 => 163,  398 => 162,  393 => 161,  380 => 151,  373 => 146,  364 => 142,  356 => 139,  352 => 138,  348 => 137,  344 => 136,  341 => 135,  336 => 134,  323 => 124,  316 => 119,  307 => 115,  299 => 112,  295 => 111,  291 => 110,  287 => 109,  283 => 108,  280 => 107,  275 => 106,  261 => 95,  246 => 83,  238 => 78,  234 => 76,  227 => 72,  224 => 71,  222 => 70,  218 => 68,  212 => 64,  210 => 63,  206 => 61,  197 => 60,  182 => 54,  176 => 52,  167 => 51,  154 => 47,  151 => 46,  147 => 44,  140 => 39,  137 => 38,  128 => 35,  124 => 34,  121 => 33,  117 => 32,  111 => 28,  109 => 27,  103 => 24,  98 => 21,  92 => 18,  88 => 16,  86 => 15,  83 => 14,  81 => 13,  78 => 12,  75 => 11,  69 => 9,  67 => 8,  61 => 6,  58 => 5,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% if collector.hasData %}
        {% set icon %}
            {{ include(\"PimcoreCoreBundle:Profiler:target.svg.twig\") }}

            {% if collector.documentTargetGroup is not null %}
                <span class=\"sf-toolbar-value\">{{ collector.documentTargetGroup.name }}</span>
            {% endif %}
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-group\">
                {% if collector.documentTargetGroup is not null %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Document Target Group</b>
                        <span>{{ collector.documentTargetGroup.name }}</span>
                    </div>
                {% endif %}

                <div class=\"sf-toolbar-info-piece\">
                    <b>Matched Rules</b>
                    <span class=\"sf-toolbar-status\">{{ collector.rules|length }}</span>
                </div>

                {% if collector.targetGroups is not empty %}
                    <div class=\"sf-toolbar-info-piece\">
                        <h5 style=\"display: table-caption; margin-bottom: 5px; font-size: 13px\">Target Groups</h5>
                    </div>

                    {% for targetGroup in collector.targetGroups %}
                        <div class=\"sf-toolbar-info-piece\">
                            <b>{{ targetGroup.name }}</b>
                            <span class=\"sf-toolbar-status\">{{ targetGroup.count }}</span>
                        </div>
                    {% endfor %}
                {% else %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Target Groups</b>
                        <span class=\"sf-toolbar-status\">0</span>
                    </div>
                {% endif %}
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ (not collector.hasData) ? 'disabled' }}\">
        <span class=\"icon\">
            {{ include(\"PimcoreCoreBundle:Profiler:target.svg.twig\") }}
        </span>
        <strong>Targeting</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Targeting</h2>

    {% if not collector.hasData %}
        <div class=\"empty\">
            <p>No targeting data available.</p>
        </div>
    {% else %}

        <div class=\"metrics\" style=\"margin-bottom: 25px\">
            {% if collector.documentTargetGroup is not null %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.documentTargetGroup.name }}</span>
                    <span class=\"label\">Document Target Group</span>
                </div>
            {% endif %}

            <div class=\"metric\">
                <span class=\"value\">{{ collector.rules|length }}</span>
                <span class=\"label\">Matched Rules</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.targetGroups|length }}</span>
                <span class=\"label\">Assigned Target Groups</span>
            </div>
        </div>

        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Results</h3>

                <div class=\"tab-content\">
                    <h3>Matched Targeting Rules</h3>

                    <table class=\"{{ class|default('') }}\">
                        <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">ID</th>
                            <th scope=\"col\">Name</th>
                            <th scope=\"col\">Duration</th>
                            <th scope=\"col\">Conditions</th>
                            <th scope=\"col\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for rule in collector.rules %}
                            <tr>
                                <th>{{ rule.id }}</th>
                                <td>{{ rule.name }}</td>
                                <td>{{ rule.duration|round(2) }} ms</td>
                                <td>{{ profiler_dump(rule.conditions, maxDepth=maxDepth|default(0)) }}</td>
                                <td>{{ profiler_dump(rule.actions, maxDepth=maxDepth|default(0)) }}</td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"2\">(no rules matched)</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>

                    <h3>Assigned Target Groups</h3>

                    <table class=\"{{ class|default('') }}\">
                        <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">ID</th>
                            <th scope=\"col\">Name</th>
                            <th scope=\"col\">Threshold</th>
                            <th scope=\"col\">Assignment Count</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for targetGroup in collector.targetGroups %}
                            <tr>
                                <th>{{ targetGroup.id }}</th>
                                <td>{{ targetGroup.name }}</td>
                                <td>{{ targetGroup.threshold }}</td>
                                <td>{{ targetGroup.count }}</td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"2\">(no target group assignments)</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>

                    <h3>Target Groups assigned to Documents</h3>

                    <table class=\"{{ class|default('') }}\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Document ID</th>
                            <th scope=\"col\">Path</th>
                            <th scope=\"col\">Target Group ID</th>
                            <th scope=\"col\">Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for assignment in collector.documentTargetGroups %}
                            <tr>
                                <th>{{ assignment.document.id }}</th>
                                <td>{{ assignment.document.path }}</td>
                                <th>{{ assignment.targetGroup.id }}</th>
                                <td>{{ assignment.targetGroup.name }}</td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"2\">(no target groups were assigned to documents)</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Visitor Info</h3>

                <div class=\"tab-content\">
                    <h3>Visitor Info</h3>

                    {{ include('@PimcoreCore/Profiler/key_value_table.html.twig', { data: collector.visitorInfo }, with_context = false) }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Storage</h3>

                <div class=\"tab-content\">
                    <h3>Session Storage</h3>

                    {{ include('@PimcoreCore/Profiler/key_value_table.html.twig', { data: collector.storage.session }, with_context = false) }}
                </div>

                <div class=\"tab-content\">
                    <h3>Visitor Storage</h3>

                    {{ include('@PimcoreCore/Profiler/key_value_table.html.twig', { data: collector.storage.visitor }, with_context = false) }}
                </div>
            </div>
        </div>

    {% endif %}
{% endblock %}
", "PimcoreCoreBundle:Profiler:targeting_data_collector.html.twig", "/var/www/html/pimcore/pimcore/lib/Pimcore/Bundle/CoreBundle/Resources/views/Profiler/targeting_data_collector.html.twig");
    }
}
