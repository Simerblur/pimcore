<?php

/* layout/header.html.twig */
class __TwigTemplate_ef8e752115f3a336748e5304c3ddda2beb4567c3a1d9c9050834484f08c223ef extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "<header>
    <div class=\"content-container\">
        <div class=\"left-header-side\">
            <div class=\"menu-box\">
                <a class=\"nav-trigger menu-trigger\" href=\"#\"><span></span><em>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_MENU_"), "html", null, true);
        echo "</em><em class=\"closeEm\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_CLOSE_"), "html", null, true);
        echo "</em></a>
            </div>
            <div class=\"logo-box non-service-container-menu-element\" >
                <a id=\"logoImage-desktop\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"><img src=\"/images/logo/logo_frontBAK.svg\" alt=\"advox logo\"/><img src=\"/images/logo/logo_motto_front.svg\" alt=\"advox logo motto\"/></a>
                <a id=\"logoImage-mobile\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"><img src=\"/images/logo/logo_frontBAK.svg\" alt=\"advox logo\" /></a>
            </div>
            <div class=\"both-clear\"></div>
        </div> 
        <div class=\"right-header-side\">
            <div class=\"non-service-container-menu-element\">
            <div class=\"magento-associate-header-image\">
                <a target=\"_blank\" href=\"https://magento.com/partners/portal/details/partner/id/1600/back_url/aHR0cHM6Ly9tYWdlbnRvLmNvbS9wYXJ0bmVycy9wb3J0YWwvZGlyZWN0b3J5Lz9wYXJ0bmVyX3R5cGU9MSZhbXA7cGFydG5lcl9yZWdpb249ZXVyb3BlJmFtcDtwYXJ0bmVyX2xvY2F0aW9uPVBM\" rel=\"nofollow\">
                <img src=\"/images/svg/Magento_SI_Business_Small_front.svg\" alt=\"magento partner\"/>
                </a>
            </div>
            <div class=\"header-button\">
                <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_CONTACT_BTN_")), "html", null, true);
        echo "</a>
            </div>
            <div class=\"language-switch-box\">
                <p>
                    <a";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->source); })()), "request", array()), "getLocale", array(), "method") == "de")) {
            echo " class=\"active-language\"";
        } else {
        }
        echo " href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->source); })()), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "de"))), "html", null, true);
        echo "\">DE</a>
                    <span>/</span>
                    <a";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->source); })()), "request", array()), "getLocale", array(), "method") == "en")) {
            echo " class=\"active-language\"";
        } else {
        }
        echo " href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->source); })()), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
        echo "\">EN</a>
                    <span>/</span>
                    <a";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "request", array()), "getLocale", array(), "method") == "pl")) {
            echo " class=\"active-language\"";
        } else {
        }
        echo " href='";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "pl"))), "html", null, true);
        echo "'>PL</a>
                </p>
            </div>
            </div>
        </div>
        <div class=\"both-clear\"></div>
    </div>
    <div class=\"both-clear\"></div>

    <div class=\"menu-list-container\">
        <div class=\"mobile-language-switcher\">
            <a";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->source); })()), "request", array()), "getLocale", array(), "method") == "de")) {
            echo " class=\"active-language\"";
        } else {
        }
        echo " href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->source); })()), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "de"))), "html", null, true);
        echo "\">DE</a>
            <span>/</span>
            <a";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 43, $this->source); })()), "request", array()), "getLocale", array(), "method") == "en")) {
            echo " class=\"active-language\"";
        } else {
        }
        echo " href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 43, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 43, $this->source); })()), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
        echo "\">EN</a>
            <span>/</span>
            <a";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 45, $this->source); })()), "request", array()), "getLocale", array(), "method") == "pl")) {
            echo " class=\"active-language\"";
        } else {
        }
        echo " href='";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 45, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 45, $this->source); })()), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "pl"))), "html", null, true);
        echo "'>PL</a>
        </div>
        <div class=\"content-container\">
            <ul class=\"menu-list\">
                <li><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_HOME_ELMENU"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_NEWS_ELMENU"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about-us");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_ABOUT_US_ELMENU"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personal-bio");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_OUR_TEAM_ELMENU"), "html", null, true);
        echo "</a></li>
                <li id=\"toogle-submenu-sitemenu\"><a href=\"#\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_SERVICES"), "html", null, true);
        echo "</a></li>
                <li class=\"submenu-underlist\">
                    <ul class=\"menu-sub-list\">
                        <li><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("magentoservice");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_ECOMMERCE&MAGENTO_ELMENU"), "html", null, true);
        echo "</a></li>
                        <li><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("phpframeworksservice");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_SYMFONY&ZENDDEVELOPMENT_ELMENU"), "html", null, true);
        echo "</a></li>
                        <li><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontendservice");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_FRONTENDDEVELOPMENT_ELMENU"), "html", null, true);
        echo "</a></li>
                        <li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uxanddesignservice");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_UX&UIDESIGN_ELMENU"), "html", null, true);
        echo "</a></li>
                    </ul>
                </li>
                ";
        // line 63
        echo "                <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projectslist");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_PROJECTS_ELMENU"), "html", null, true);
        echo "</a></li>
                ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 64, $this->source); })()), "request", array()), "getLocale", array(), "method") == "de")) {
        } else {
            echo "<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("careers");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_CAREERS_ELMENU"), "html", null, true);
            echo "</a></li>";
        }
        // line 65
        echo "                <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_CONTACT_ELMENU"), "html", null, true);
        echo "</a></li>
            </ul>
        </div>
    </div>
    <div class=\"overlaylayer\"></div>
</header>
<script type=\"text/javascript\">
    var triggerNav = document.getElementsByClassName(\"nav-trigger\")[0],
    body = document.getElementsByTagName(\"body\")[0],
    overlaylayer = document.querySelector(\".overlaylayer\");

    triggerNav.addEventListener(\"click\", toggleNavigation);
    overlaylayer.addEventListener(\"click\", toggleNavigation);

    function toggleNavigation(event) {
        event.preventDefault();
        body.classList.toggle(\"nav-open\");
        \$(\".closeEm,#scrollToSection,.footer-mobile-navigation-box\").toggle();
        
        if ((\$(window).width() < 767)) {

                \$('.service-navigation-footer-mobile').toggle();
                \$('#footer,.pre-footer-container').toggle('fast');
            }else{
                \$('.service-navigation-foooter-desktop,#fp-nav').toggle();
                \$('#footer,.pre-footer-container').toggle('fast');
            }
    }
    document.addEventListener('keyup', function(event) {
        if (event.keyCode == 27) {
            body.classList.remove(\"nav-open\");
        }
    });
</script>
<script>
    \$('#toogle-submenu-sitemenu').click(function () {
        \$(this).parent().find('ul').slideToggle();
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  233 => 65,  224 => 64,  217 => 63,  209 => 59,  203 => 58,  197 => 57,  191 => 56,  185 => 53,  179 => 52,  173 => 51,  167 => 50,  161 => 49,  149 => 45,  139 => 43,  129 => 41,  110 => 30,  100 => 28,  90 => 26,  81 => 22,  66 => 10,  62 => 9,  54 => 6,  48 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block header %}
<header>
    <div class=\"content-container\">
        <div class=\"left-header-side\">
            <div class=\"menu-box\">
                <a class=\"nav-trigger menu-trigger\" href=\"#\"><span></span><em>{{'_MENU_' | trans}}</em><em class=\"closeEm\">{{'_CLOSE_' | trans}}</em></a>
            </div>
            <div class=\"logo-box non-service-container-menu-element\" >
                <a id=\"logoImage-desktop\" href=\"{{ path('homepage') }}\"><img src=\"/images/logo/logo_frontBAK.svg\" alt=\"advox logo\"/><img src=\"/images/logo/logo_motto_front.svg\" alt=\"advox logo motto\"/></a>
                <a id=\"logoImage-mobile\" href=\"{{ path('homepage') }}\"><img src=\"/images/logo/logo_frontBAK.svg\" alt=\"advox logo\" /></a>
            </div>
            <div class=\"both-clear\"></div>
        </div> 
        <div class=\"right-header-side\">
            <div class=\"non-service-container-menu-element\">
            <div class=\"magento-associate-header-image\">
                <a target=\"_blank\" href=\"https://magento.com/partners/portal/details/partner/id/1600/back_url/aHR0cHM6Ly9tYWdlbnRvLmNvbS9wYXJ0bmVycy9wb3J0YWwvZGlyZWN0b3J5Lz9wYXJ0bmVyX3R5cGU9MSZhbXA7cGFydG5lcl9yZWdpb249ZXVyb3BlJmFtcDtwYXJ0bmVyX2xvY2F0aW9uPVBM\" rel=\"nofollow\">
                <img src=\"/images/svg/Magento_SI_Business_Small_front.svg\" alt=\"magento partner\"/>
                </a>
            </div>
            <div class=\"header-button\">
                <a href=\"{{ path('contact') }}\">{{'_CONTACT_BTN_' | trans | upper}}</a>
            </div>
            <div class=\"language-switch-box\">
                <p>
                    <a{% if app.request.getLocale() == 'de' %} class=\"active-language\"{% else %}{% endif %} href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'de'})) }}\">DE</a>
                    <span>/</span>
                    <a{% if app.request.getLocale() == 'en' %} class=\"active-language\"{% else %}{% endif %} href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'})) }}\">EN</a>
                    <span>/</span>
                    <a{% if app.request.getLocale() == 'pl' %} class=\"active-language\"{% else %}{% endif %} href='{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'pl'})) }}'>PL</a>
                </p>
            </div>
            </div>
        </div>
        <div class=\"both-clear\"></div>
    </div>
    <div class=\"both-clear\"></div>

    <div class=\"menu-list-container\">
        <div class=\"mobile-language-switcher\">
            <a{% if app.request.getLocale() == 'de' %} class=\"active-language\"{% else %}{% endif %} href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'de'})) }}\">DE</a>
            <span>/</span>
            <a{% if app.request.getLocale() == 'en' %} class=\"active-language\"{% else %}{% endif %} href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'})) }}\">EN</a>
            <span>/</span>
            <a{% if app.request.getLocale() == 'pl' %} class=\"active-language\"{% else %}{% endif %} href='{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'pl'})) }}'>PL</a>
        </div>
        <div class=\"content-container\">
            <ul class=\"menu-list\">
                <li><a href=\"{{ path('homepage') }}\">{{'_HOME_ELMENU' | trans}}</a></li>
                <li><a href=\"{{ path('news') }}\">{{'_NEWS_ELMENU' | trans}}</a></li>
                <li><a href=\"{{ path('about-us') }}\">{{'_ABOUT_US_ELMENU' | trans}}</a></li>
                <li><a href=\"{{ path('personal-bio') }}\">{{'_OUR_TEAM_ELMENU' | trans}}</a></li>
                <li id=\"toogle-submenu-sitemenu\"><a href=\"#\">{{'_SERVICES' | trans}}</a></li>
                <li class=\"submenu-underlist\">
                    <ul class=\"menu-sub-list\">
                        <li><a href=\"{{ path('magentoservice') }}\">{{'_ECOMMERCE&MAGENTO_ELMENU' | trans}}</a></li>
                        <li><a href=\"{{ path('phpframeworksservice') }}\">{{'_SYMFONY&ZENDDEVELOPMENT_ELMENU' | trans}}</a></li>
                        <li><a href=\"{{ path('frontendservice') }}\">{{'_FRONTENDDEVELOPMENT_ELMENU' | trans}}</a></li>
                        <li><a href=\"{{ path('uxanddesignservice') }}\">{{'_UX&UIDESIGN_ELMENU' | trans}}</a></li>
                    </ul>
                </li>
                {#<li><a href=\"{{ path('solutions') }}\">{{'_SOLUTIONS_ELMENU' | trans}}</a></li>#}
                <li><a href=\"{{ path('projectslist') }}\">{{'_PROJECTS_ELMENU' | trans}}</a></li>
                {% if app.request.getLocale() == 'de' %}{% else %}<li><a href=\"{{ path('careers') }}\">{{'_CAREERS_ELMENU' | trans}}</a></li>{% endif %}
                <li><a href=\"{{ path('contact') }}\">{{'_CONTACT_ELMENU' | trans}}</a></li>
            </ul>
        </div>
    </div>
    <div class=\"overlaylayer\"></div>
</header>
<script type=\"text/javascript\">
    var triggerNav = document.getElementsByClassName(\"nav-trigger\")[0],
    body = document.getElementsByTagName(\"body\")[0],
    overlaylayer = document.querySelector(\".overlaylayer\");

    triggerNav.addEventListener(\"click\", toggleNavigation);
    overlaylayer.addEventListener(\"click\", toggleNavigation);

    function toggleNavigation(event) {
        event.preventDefault();
        body.classList.toggle(\"nav-open\");
        \$(\".closeEm,#scrollToSection,.footer-mobile-navigation-box\").toggle();
        
        if ((\$(window).width() < 767)) {

                \$('.service-navigation-footer-mobile').toggle();
                \$('#footer,.pre-footer-container').toggle('fast');
            }else{
                \$('.service-navigation-foooter-desktop,#fp-nav').toggle();
                \$('#footer,.pre-footer-container').toggle('fast');
            }
    }
    document.addEventListener('keyup', function(event) {
        if (event.keyCode == 27) {
            body.classList.remove(\"nav-open\");
        }
    });
</script>
<script>
    \$('#toogle-submenu-sitemenu').click(function () {
        \$(this).parent().find('ul').slideToggle();
    });
</script>
{% endblock %}", "layout/header.html.twig", "/var/www/html/pimcore/app/Resources/views/layout/header.html.twig");
    }
}
