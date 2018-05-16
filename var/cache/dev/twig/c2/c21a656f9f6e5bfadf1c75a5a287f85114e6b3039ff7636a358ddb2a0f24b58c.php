<?php

/* PimcoreCoreBundle:Profiler:data_collector.html.twig */
class __TwigTemplate_2bc8d5bb9043dde67609ebb5894d1fb24e984bae2ea953067fc81bd54fd0a780 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "PimcoreCoreBundle:Profiler:data_collector.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PimcoreCoreBundle:Profiler:data_collector.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PimcoreCoreBundle:Profiler:data_collector.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 51
        echo "    ";
        $context["macros"] = $this;
        // line 52
        echo "
    ";
        // line 53
        ob_start();
        // line 54
        echo "        ";
        // line 55
        echo "        <div style=\"padding-top: 3px\">
            ";
        // line 56
        echo twig_include($this->env, $context, "PimcoreCoreBundle:Profiler:logo.svg.twig");
        echo "
        </div>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 59
        echo "
    ";
        // line 60
        ob_start();
        // line 61
        echo "        ";
        // line 63
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Version</b>
            <span>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 65, $this->source); })()), "version", array()), "html", null, true);
        echo " build ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 65, $this->source); })()), "revision", array()), "html", null, true);
        echo "</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>Context</b>
            <span>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 70, $this->source); })()), "context", array()), "html", null, true);
        echo "</span>
        </div>

        ";
        // line 73
        echo $context["macros"]->macro_feature_flags_toolbar((isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 73, $this->source); })()), "debug_mode", "Debug Mode");
        echo "
        ";
        // line 74
        echo $context["macros"]->macro_feature_flags_toolbar((isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 74, $this->source); })()), "dev_mode", "Dev Mode");
        echo "
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 76
        echo "
    ";
        // line 79
        echo "    ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 83
        echo "    <span class=\"label\">
        <span class=\"icon\">
            ";
        // line 85
        echo twig_include($this->env, $context, "PimcoreCoreBundle:Profiler:logo.svg.twig");
        echo "
        </span>
        <strong>Pimcore</strong>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_panel($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 92
        echo "    ";
        $context["macros"] = $this;
        // line 93
        echo "
    <h2>Pimcore</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 98, $this->source); })()), "version", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 103, $this->source); })()), "revision", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Build</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 108, $this->source); })()), "context", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Request Context</span>
        </div>

        ";
        // line 112
        echo $context["macros"]->macro_feature_flags_metric((isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 112, $this->source); })()), "debug_mode", "Debug Mode");
        echo "
        ";
        // line 113
        echo $context["macros"]->macro_feature_flags_metric((isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 113, $this->source); })()), "dev_mode", "Dev Mode");
        echo "
    </div>

    ";
        // line 116
        echo $context["macros"]->macro_feature_flags_list((isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 116, $this->source); })()), "debug_mode", "Debug Mode Flags");
        echo "
    ";
        // line 117
        echo $context["macros"]->macro_feature_flags_list((isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 117, $this->source); })()), "dev_mode", "Dev Mode Flags");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function macro_feature_flags_toolbar($__collector__ = null, $__type__ = null, $__title__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "collector" => $__collector__,
            "type" => $__type__,
            "title" => $__title__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "feature_flags_toolbar"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "feature_flags_toolbar"));

            // line 4
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->source); })()), "isFeatureAllFlagSet", array(0 => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 4, $this->source); })())), "method") || twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->source); })()), "featureHasFlags", array(0 => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 4, $this->source); })())), "method"))) {
                // line 5
                echo "        <div class=\"sf-toolbar-info-piece\">
            <b>";
                // line 6
                echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
                echo "</b>

            <span>
                ";
                // line 9
                if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 9, $this->source); })()), "isFeatureAllFlagSet", array(0 => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 9, $this->source); })())), "method")) {
                    // line 10
                    echo "                    enabled
                ";
                } else {
                    // line 12
                    echo "                    ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("{0} No flags enabled|{1} %count% flag enabled|]1,Inf] %count% flags enabled", twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 12, $this->source); })()), "getFeatureFlags", array(0 => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->source); })())), "method")), array("%count%" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 12, $this->source); })()), "getFeatureFlags", array(0 => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->source); })())), "method"))), "messages");
                    // line 15
                    echo "                ";
                }
                // line 16
                echo "            </span>
        </div>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 21
    public function macro_feature_flags_metric($__collector__ = null, $__type__ = null, $__title__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "collector" => $__collector__,
            "type" => $__type__,
            "title" => $__title__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "feature_flags_metric"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "feature_flags_metric"));

            // line 22
            echo "    <div class=\"metric\">
        <span class=\"value\">
            ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 24, $this->source); })()), "isFeatureAllFlagSet", array(0 => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 24, $this->source); })())), "method")) {
                // line 25
                echo "                enabled
            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 26
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 26, $this->source); })()), "featureHasFlags", array(0 => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 26, $this->source); })())), "method")) {
                // line 27
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("{0} No flags enabled|{1} %count% flag enabled|]1,Inf] %count% flags enabled", twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->source); })()), "getFeatureFlags", array(0 => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 27, $this->source); })())), "method")), array("%count%" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->source); })()), "getFeatureFlags", array(0 => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 27, $this->source); })())), "method"))), "messages");
                // line 30
                echo "            ";
            } else {
                // line 31
                echo "                disabled
            ";
            }
            // line 33
            echo "        </span>
        <span class=\"label\">";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "</span>
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 38
    public function macro_feature_flags_list($__collector__ = null, $__type__ = null, $__title__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "collector" => $__collector__,
            "type" => $__type__,
            "title" => $__title__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "feature_flags_list"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "feature_flags_list"));

            // line 39
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 39, $this->source); })()), "featureHasFlags", array(0 => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 39, $this->source); })())), "method")) {
                // line 40
                echo "        <h3>";
                echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 40, $this->source); })()), "html", null, true);
                echo "</h3>

        <div class=\"card\">
            ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 43, $this->source); })()), "getFeatureFlags", array(0 => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 43, $this->source); })())), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["flag"]) {
                    // line 44
                    echo "                <span class=\"label\" style=\"margin-bottom: 2px\">";
                    echo twig_escape_filter($this->env, $context["flag"], "html", null, true);
                    echo "</span>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "        </div>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "PimcoreCoreBundle:Profiler:data_collector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 46,  380 => 44,  376 => 43,  369 => 40,  366 => 39,  346 => 38,  328 => 34,  325 => 33,  321 => 31,  318 => 30,  315 => 27,  313 => 26,  310 => 25,  308 => 24,  304 => 22,  284 => 21,  266 => 16,  263 => 15,  260 => 12,  256 => 10,  254 => 9,  248 => 6,  245 => 5,  242 => 4,  222 => 3,  210 => 117,  206 => 116,  200 => 113,  196 => 112,  189 => 108,  181 => 103,  173 => 98,  166 => 93,  163 => 92,  154 => 91,  139 => 85,  135 => 83,  126 => 82,  113 => 79,  110 => 76,  105 => 74,  101 => 73,  95 => 70,  85 => 65,  81 => 63,  79 => 61,  77 => 60,  74 => 59,  68 => 56,  65 => 55,  63 => 54,  61 => 53,  58 => 52,  55 => 51,  46 => 50,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% macro feature_flags_toolbar(collector, type, title) %}
    {% if collector.isFeatureAllFlagSet(type) or collector.featureHasFlags(type) %}
        <div class=\"sf-toolbar-info-piece\">
            <b>{{ title }}</b>

            <span>
                {% if collector.isFeatureAllFlagSet(type) %}
                    enabled
                {% else %}
                    {% transchoice collector.getFeatureFlags(type)|length %}
                        {0} No flags enabled|{1} %count% flag enabled|]1,Inf] %count% flags enabled
                    {% endtranschoice %}
                {% endif %}
            </span>
        </div>
    {% endif %}
{% endmacro %}

{% macro feature_flags_metric(collector, type, title) %}
    <div class=\"metric\">
        <span class=\"value\">
            {% if collector.isFeatureAllFlagSet(type) %}
                enabled
            {% elseif collector.featureHasFlags(type) %}
                {% transchoice collector.getFeatureFlags(type)|length %}
                    {0} No flags enabled|{1} %count% flag enabled|]1,Inf] %count% flags enabled
                {% endtranschoice %}
            {% else %}
                disabled
            {% endif %}
        </span>
        <span class=\"label\">{{ title }}</span>
    </div>
{% endmacro %}

{% macro feature_flags_list(collector, type, title) %}
    {% if collector.featureHasFlags(type) %}
        <h3>{{ title }}</h3>

        <div class=\"card\">
            {% for flag in collector.getFeatureFlags(type) %}
                <span class=\"label\" style=\"margin-bottom: 2px\">{{ flag }}</span>
            {% endfor %}
        </div>
    {% endif %}
{% endmacro %}

{% block toolbar %}
    {% import _self as macros %}

    {% set icon %}
        {# this is the content displayed as a panel in the toolbar #}
        <div style=\"padding-top: 3px\">
            {{ include(\"PimcoreCoreBundle:Profiler:logo.svg.twig\") }}
        </div>
    {% endset %}

    {% set text %}
        {# this is the content displayed when hovering the mouse over
           the toolbar panel #}
        <div class=\"sf-toolbar-info-piece\">
            <b>Version</b>
            <span>{{ collector.version }} build {{ collector.revision }}</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>Context</b>
            <span>{{ collector.context }}</span>
        </div>

        {{ macros.feature_flags_toolbar(collector, 'debug_mode', 'Debug Mode') }}
        {{ macros.feature_flags_toolbar(collector, 'dev_mode', 'Dev Mode') }}
    {% endset %}

    {# the 'link' value set to 'false' means that this panel doesn't
       show a section in the web profiler #}
    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">
            {{ include(\"PimcoreCoreBundle:Profiler:logo.svg.twig\") }}
        </span>
        <strong>Pimcore</strong>
    </span>
{% endblock %}

{% block panel %}
    {% import _self as macros %}

    <h2>Pimcore</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.version }}</span>
            <span class=\"label\">Version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.revision }}</span>
            <span class=\"label\">Build</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.context }}</span>
            <span class=\"label\">Request Context</span>
        </div>

        {{ macros.feature_flags_metric(collector, 'debug_mode', 'Debug Mode') }}
        {{ macros.feature_flags_metric(collector, 'dev_mode', 'Dev Mode') }}
    </div>

    {{ macros.feature_flags_list(collector, 'debug_mode', 'Debug Mode Flags') }}
    {{ macros.feature_flags_list(collector, 'dev_mode', 'Dev Mode Flags') }}
{% endblock %}
", "PimcoreCoreBundle:Profiler:data_collector.html.twig", "/var/www/html/pimcore/pimcore/lib/Pimcore/Bundle/CoreBundle/Resources/views/Profiler/data_collector.html.twig");
    }
}
