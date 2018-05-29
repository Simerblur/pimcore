<?php

/* index/index.html.twig */
class __TwigTemplate_4956932ad3741cd9bbc0c6d93c34d1ae8520c7bf15b3c5cec5461daab6d6d1d1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout/base.html.twig", "index/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"main-page-banner-container\">
        <video autoplay=\"autoplay\" loop=\"loop\" id=\"vid\">
            <source src=\"backgroundVideo/backgroundvideo.mp4\">
        </video>
        <div class=\"content-container\">
            <div class=\"main-banner-paragraphs-box\">
                <p class=\"banner-title\"data-aos=\"fade-down\" data-aos-duration=\"300\" data-aos-delay=\"500\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_WELCOME_TO_"), "html", null, true);
        echo "</p>
                <h1 class=\"banner-big-paragraph\" data-aos=\"fade-down\" data-aos-duration=\"500\">ADVOX  <span>STUDIO</span></h1>
                <h2 class=\"banner-regular-paragraph\" data-aos=\"fade-down\" data-aos-duration=\"300\" data-aos-delay=\"800\"><span>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_WELCOME_TO_TEXT_1"), "html", null, true);
        echo " <br>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_WELCOME_TO_TEXT_2"), "html", null, true);
        echo "</span></h2>
            </div>
            <div class=\"magento-icons-box call-action-wrapper\" data-aos=\"zoom-in-down\" data-aos-duration=\"300\" data-aos-delay=\"1000\">
                <div class=\"magento-associate-box\">
                    <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_WE_ARE_MAGENTO_PARTNER_"), "html", null, true);
        echo "</p>
                    <a target=\"_blank\" href=\"https://magento.com/partners/portal/details/partner/id/1600/back_url/aHR0cHM6Ly9tYWdlbnRvLmNvbS9wYXJ0bmVycy9wb3J0YWwvZGlyZWN0b3J5Lz9wYXJ0bmVyX3R5cGU9MSZhbXA7cGFydG5lcl9yZWdpb249ZXVyb3BlJmFtcDtwYXJ0bmVyX2xvY2F0aW9uPVBM\">
                    <img src=\"/images/svg/Magento_SI_Business_Large_front_.svg\" alt=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_IMAGE_1_ALT_"), "html", null, true);
        echo "\"/>
                    </a>
                    <div class=\"both-clear\"></div>
                </div>
                <div class=\"magento-certified-developer\">
                    <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_WE_HAVE_"), "html", null, true);
        echo "<span>8</span></p>
                    <img src=\"images/logo/magento-certified_developer.png\" alt=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_IMAGE_2_ALT_"), "html", null, true);
        echo "\"/>
                    <img src=\"images/logo/magento-certified_frontend.png\" alt=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_IMAGE_3_ALT_"), "html", null, true);
        echo "\"/>
                    <img src=\"images/logo/magento-certified_solution.png\" alt=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_IMAGE_4_ALT_"), "html", null, true);
        echo "\"/>
                    <div class=\"both-clear\"></div>
                </div>
                <div class=\"both-clear\"></div>
            </div>
        </div>
        <div id=\"homepage-arrow\" data-target=\"page-header\" class=\"down visible\">
            <span class=\"icon-arrow-bottom anim-pulseUpDown\"></span>
        </div>
    </div>
    <div class=\"top-submenu-container\">
        <div class=\"content-container-full-width\">
            <div class=\"submenu\">
                <div class=\"submenu-center-box\">
                    <div class=\"submenu-item\">
                        <div class=\"submenu-item-center-box\">
                            <div class=\"first-menu-element-svg\"><img src=\"/images/svg/e-Commerce.svg\" alt=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_IMAGE_5_ALT_"), "html", null, true);
        echo "\"/></div>
                            <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("magentoservice");
        echo "\">
                                <div class=\"center-submenu-content\">
                                    <div class=\"image-icon-submenu\">
                                        <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             viewBox=\"0 0 44 39\" style=\"enable-background:new 0 0 44 39;\" xml:space=\"preserve\">
                                        <style type=\"text/css\">
                                            .st0{fill:#FFFFFF;}
                                        </style>
                                        <path class=\"st0\" d=\"M32.4,7.4H4.7c-1.9,0-3.5,1.6-3.5,3.5v17.3c0,1.9,1.6,3.5,3.5,3.5h27.7c1.9,0,3.5-1.6,3.5-3.5V10.8
                                              C35.8,8.9,34.3,7.4,32.4,7.4z M32.4,28.2H4.7V10.8h27.7V28.2z M39.3,0.5H11.6C9.7,0.5,8.2,2,8.2,3.9h31.2v20.8
                                              c1.9,0,3.5-1.5,3.5-3.5V3.9C42.8,2,41.2,0.5,39.3,0.5z M25.5,35.1H11.6c-1,0-1.7,0.8-1.7,1.7c0,1,0.8,1.7,1.7,1.7h13.8
                                              c1,0,1.7-0.8,1.7-1.7C27.2,35.9,26.4,35.1,25.5,35.1z\"/>
                                        </svg>
                                    </div>
                                    <p class=\"submenu-item-paragraph\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_E-COMMERCE_&_MAGENTO_"), "html", null, true);
        echo "</p>
                                </div>
                            </a>
                            <div class=\"border-line-absolute\"></div> 
                        </div>
                    </div>
                    <div class=\"submenu-item\">
                        <div class=\"submenu-item-center-box\">
                            <div class=\"second-menu-element-svg\"><img src=\"/images/svg/Symfony_&_Zend.svg\" alt=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_IMAGE_6_ALT_"), "html", null, true);
        echo "\"/></div><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("phpframeworksservice");
        echo "\">
                                <div class=\"center-submenu-content\">
                                    <div class=\"image-icon-submenu\">
                                        <svg version=\"1.1\" id=\"Layer_2\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             viewBox=\"0 0 44 39\" style=\"enable-background:new 0 0 44 39;\" xml:space=\"preserve\">
                                        <style type=\"text/css\">
                                            .st0{fill:#FFFFFF;}
                                        </style>
                                        <path class=\"st0\" d=\"M40.2,1.3H28.9c-1,0-1.7,0.8-1.7,1.7s0.8,1.7,1.7,1.7h10.4v22.5H4.7V4.8h15.6v2c-1.4,0.5-2.6,1.6-3.1,3
                                              c-0.4,0.8-0.9,2.2-1.7,4.8c0,0.1-0.4,1.2-0.4,2.3c0,3.8,3.1,6.9,6.9,6.9s6.9-3.1,6.9-6.9c0-1.1-0.3-2.2-0.4-2.2
                                              c-0.8-2.6-1.3-4-1.7-4.8c-0.6-1.4-1.7-2.5-3.1-3V3.1c0-1-0.8-1.7-1.7-1.7H3.8C2.4,1.4,1.2,2.6,1.2,4v24.2c0,1.4,1.2,2.6,2.6,2.6
                                              h36.3c1.4,0,2.6-1.2,2.6-2.6V3.9C42.8,2.5,41.6,1.3,40.2,1.3z M22,10c0.7,0,1.4,0.5,1.6,1.2l0.4,1.2l0,0c0.5,1.3,1.2,3.3,1.2,3.4
                                              c0,0.1,0.2,0.7,0.2,1.2c0,1.9-1.6,3.5-3.5,3.5s-3.5-1.6-3.5-3.5c0-0.4,0.2-1,0.2-1.2c0-0.1,0.8-2.1,1.2-3.4l0.4-1.2
                                              C20.6,10.4,21.3,10,22,10z M13.3,37.7h17.3v-3.5H13.3V37.7z\"/>
                                        </svg>
                                    </div>
                                    <p class=\"submenu-item-paragraph\">";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_SYMFONY_&_ZEND_DEVELOPMENT_"), "html", null, true);
        echo "</p>
                                </div>
                            </a><div class=\"border-line-absolute\">
                            </div>
                        </div>
                    </div>
                    <div class=\"submenu-item\">
                        <div class=\"submenu-item-center-box\">
                            <div class=\"fourth-menu-element-svg\"><img src=\"/images/svg/Frontend.svg\" alt=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_IMAGE_7_ALT_"), "html", null, true);
        echo "\"/></div>
                            <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontendservice");
        echo "\">
                                <div class=\"center-submenu-content\">
                                    <div class=\"image-icon-submenu\">
                                        <svg version=\"1.1\" id=\"Layer_3\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             viewBox=\"0 0 44 39\" style=\"enable-background:new 0 0 44 39;\" xml:space=\"preserve\">
                                        <style type=\"text/css\">
                                            .st0{fill:#FFFFFF;}
                                        </style>
                                        <path class=\"st0\" d=\"M6,0.9v3h3l0,0h23.9v3H3v-6H0v8.9h35.8V0.9H6z M13.5,15.8h3l0,0h23.9v3H10.5v-6h-3v8.9h35.8v-8.9H13.5V15.8z
                                              M18.5,27.8H21l0,0h20v3H16v-6h-2.5v8.9h30v-8.9h-25V27.8z\"/>
                                        </svg>
                                    </div>
                                    <p class=\"submenu-item-paragraph\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_FRONTEND_DEVELOPMENT_"), "html", null, true);
        echo "</p>
                                </div>
                            </a>
                            <div class=\"border-line-absolute\"></div>
                        </div> 
                    </div>
                    <div class=\"submenu-item\">
                        <div class=\"submenu-item-center-box\">
                            <div class=\"fifth-menu-element-svg\"><img src=\"/images/svg/ux_i_ui.svg\" alt=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_IMAGE_8_ALT_"), "html", null, true);
        echo "\" /></div><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uxanddesignservice");
        echo "\">
                                <div class=\"center-submenu-content\">
                                    <div class=\"image-icon-submenu\">
                                        <svg version=\"1.1\" id=\"Layer_4\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             viewBox=\"0 0 44 39\" style=\"enable-background:new 0 0 44 39;\" xml:space=\"preserve\">
                                        <style type=\"text/css\">
                                            .st0{fill:#FFFFFF;}
                                        </style>
                                        <g>
                                        <path class=\"st0\" d=\"M33.9,26l-5.4-5.4v-7.2h-7.2L16,8.1V0.9H6.5v9.4h7.2l2.2,2.2c-0.1,0-0.2,0-0.2-0.1c-3.6-0.9-7.5-0.6-11,0.7
                                              l0,0c-0.2,0.1-0.4,0.1-0.6,0.2c-0.5,0.3-0.7,0.8-0.7,1.3c0,0.9,0.7,1.6,1.6,1.6c0.2,0,0.4,0,0.6-0.1c1.8-0.7,3.8-1.1,5.7-1.1
                                              c1.2,0,2.5,0.1,3.7,0.4c1.5,0.4,2.9,0.9,4.2,1.7v5.7h5.7c2,3.5,2.6,7.6,1.7,11.5c-0.2,0.7-0.4,1.4-0.6,2l0,0
                                              c-0.3,0.8,0.1,1.7,0.9,2c0.2,0.1,0.4,0.1,0.6,0.1c0.6,0,1.2-0.4,1.4-0.9c0,0,0,0,0-0.1v-0.1c0.3-0.8,0.5-1.5,0.7-2.3
                                              c0.7-3,0.7-6.1,0-9.1l2.2,2.2v7.2h9.4V26H33.9z M9.7,4h3.1v3.1H9.7V4z M22.2,16.6h3.1v3.1h-3.1V16.6z M38,32.3h-3.1v-3.1H38V32.3z\"
                                              />
                                        </g>
                                        </svg>
                                    </div>
                                    <p class=\"submenu-item-paragraph\">";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_UX_&_UI_DESIGN_");
        echo "</p>
                                </div>
                            </a><div class=\"border-line-absolute\"></div>
                        </div>
                    </div>
                    <div class=\"both-clear\"></div>
                </div>
                <div class=\"both-clear\"></div>
            </div>
        </div>
    </div>
    <div class=\"try-to-know-container\">
        <div class=\"content-container\">
            <h2 class=\"try-to-know-title\" >";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_GET_TO_KNOW_US_BETTER_"), "html", null, true);
        echo "</h2>
            <div class=\"commercial-boxes-container\" >
                <div class=\"commercial-box little-math-box\" >
                    <div class=\"header-commercial-box-section\">
                        <p class=\"commercial-title-paragraph\">";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_A_LITTLE_MATH_"), "html", null, true);
        echo "</p>
                        <div class=\"both-clear\"></div>
                    </div>
                    <div class=\"content-commercial-box-section\">
                        <div class=\"little-math-content\">
                            <div class=\"content-box\">
                                <div class=\"left-side-content\"><p>100+</p></div>
                                <div class=\"right-side-content\"><p>";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_MAGENTO_PROJECTS_"), "html", null, true);
        echo "</p></div>
                            </div>
                            <div class=\"content-box\">
                                <div class=\"left-side-content\"><p>20</p></div>
                                <div class=\"right-side-content\"><p>";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_DEVELOPERS_"), "html", null, true);
        echo "</p></div>
                            </div>
                            <div class=\"content-box\">
                                <div class=\"left-side-content\"><p>8</p></div>
                                <div class=\"right-side-content\"><p>";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_MAGENTO_CERTIFIED_DEVELOPERS_"), "html", null, true);
        echo "</p></div>
                            </div>
                            <div class=\"content-box\">
                                <div class=\"left-side-content\"><p>4</p></div>
                                <div class=\"right-side-content\"><p>";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_PROJECT_MANAGERS_"), "html", null, true);
        echo "</p></div>
                            </div>
                            <div class=\"both-clear\"></div>
                        </div>
                    </div>
                    <div class=\"footer-commercial-box-section\">
                        <div class=\"commercial-box-link-paragraph\">
                            <a href=\"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personal-bio");
        echo "\">
                            <p>";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_MEET_OUR_TEAM_"), "html", null, true);
        echo "
                                <span class=\"arrow-right\">
                                    <span class=\"arrowhead-up\"></span>
                                    <span class=\"arrow-line\"></span>
                                    <span class=\"arrowhead-down\"></span>
                                </span>
                            </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"commercial-box last-realization-box\" >
                    <div class=\"header-commercial-box-section\">
                        <p class=\"commercial-title-paragraph\">";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_LAST_PROJECTS_"), "html", null, true);
        echo "</p>
                        <div class=\"both-clear\"></div>
                    </div>
                        <div class=\"slider-center-box\">
                    <div class=\"last-realization-slider\">
                        <div class=\"slide\" data-title=\"ewpa\">
                            <div class=\"content-commercial-box-section\">
                                <a href=\"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ewpaproject");
        echo "\"><img src=\"/images/monitor-slick/ewpa.jpg\" alt=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_IMAGE_9_ALT_"), "html", null, true);
        echo "\"></a>
                            </div>
                            <div class=\"footer-commercial-box-section\"></div>
                        </div>
                        <div class=\"slide\" data-title=\"orgran\">
                            <div class=\"content-commercial-box-section\">
                                <a href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orgranproject");
        echo "\"><img src=\"/images/monitor-slick/orgran.jpg\" alt=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_IMAGE_10_ALT_"), "html", null, true);
        echo "\"></a>
                            </div>
                            <div class=\"footer-commercial-box-section\"></div>
                        </div>
                        <div class=\"slide\" data-title=\"powerbody\">
                            <div class=\"content-commercial-box-section\">
                                <a href=\"";
        // line 203
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("powerbodyproject");
        echo "\"><img src=\"/images/monitor-slick/powerbody.jpg\" alt=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_IMAGE_11_ALT_"), "html", null, true);
        echo "\"></a>
                            </div>
                            <div class=\"footer-commercial-box-section\"></div>
                        </div>
                    </div>
                        </div>
                </div>
                <div class=\"commercial-box latest-news-box\">
                    <div class=\"header-commercial-box-section\">
                        <p class=\"commercial-title-paragraph\">";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_LATEST_NEWS_"), "html", null, true);
        echo "</p>
                        <div class=\"both-clear\"></div>
                    </div>
                    <div class=\"content-commercial-latest-news-section\">
                        <p class=\"date-paragraph\">06.12.16</p>
                        <p class=\"news-pre-title\">";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_SAY_HELLO_INDEX_NEWS_"), "html", null, true);
        echo "</p>
                        <p class=\"news-title-first\">";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_TO_OUR_INDEX_NEWS_"), "html", null, true);
        echo "</p>
                        <p class=\"news-title-second\">";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_NEW_WEBSITE_INDEX_NEWS_"), "html", null, true);
        echo "</p>
                        <p class=\"news-post-title\"></p>
                    </div>
                        <div class=\"footer-commercial-box-section\">
                        <div class=\"commercial-box-link-paragraph\">
                            <a href=\"";
        // line 224
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
        echo "\">
                            <p>";
        // line 225
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_GO_TO_NEWS_");
        echo "
                                <span class=\"arrow-right\" >
                                    <span class=\"arrowhead-up\"></span>
                                    <span class=\"arrow-line\"></span>
                                    <span class=\"arrowhead-down\"></span>
                                </span>
                            </p>
                            </a>
                        </div>
                        </div>
                </div>
                <div class=\"both-clear\"></div>
            </div>
        </div>
    </div>
    <div class=\"our-services-front-slider-container\">
        <div class=\"content-container\">
            
                <div class=\"front-slider-paragraph-box\">
                    <h2>
                        <span>";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_"), "html", null, true);
        echo "</span>
                        <span>";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_SERVICES_"), "html", null, true);
        echo "</span>
                    </h2>
                </div>
                
                <div class=\"our-services-front-slider front-slider\">
                    <div class=\"our-services-slide\">
                        <div class=\"front-slider-description-box\">
                                    <h3 class=\"services-realization-title\">";
        // line 253
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_1_TITLE_");
        echo "</h3>
                                    <p class=\"services-realization-title\">";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_1_SUBTITLE_"), "html", null, true);
        echo "</p>
                                    <p class=\"services-realization-title-mobile\">";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_1_TITLE_"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_1_SUBTITLE_"), "html", null, true);
        echo "</p>
                                    <p class=\"services-realization-description\">";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_1_DESCRIPTION_"), "html", null, true);
        echo "</p>
                                    <div class=\"services-realization-links-box\">
                                        <a href=\"";
        // line 258
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("magentoservice");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SEE_OFFER_"), "html", null, true);
        echo "</a>
                                    </div>
                        </div>
                        <div class=\"front-slider-image-box\">
                            <div class=\"front-slider-image-box-container\">
                                <img src=\"images/services/magentoservice/frontimages/macbook.png\" alt=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_2_ALT_"), "html", null, true);
        echo "\"/>
                            </div>
                        </div>
                        <div class=\"both-clear\"></div>
                    </div>
                            
                    <div class=\"our-services-slide\">
                        <div class=\"front-slider-description-box\">
                                    <h3 class=\"services-realization-title\">";
        // line 271
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_2_TITLE_");
        echo "</h3>
                                    <p class=\"services-realization-title\">";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_2_SUBTITLE_"), "html", null, true);
        echo "</p>
                                    <p class=\"services-realization-title-mobile\">";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_2_TITLE_"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_2_SUBTITLE_"), "html", null, true);
        echo "</p>
                                    <p class=\"services-realization-description\">";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_2_DESCRIPTION_"), "html", null, true);
        echo "</p>
                                    <div class=\"services-realization-links-box\">
                                        <a href=\"";
        // line 276
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("phpframeworksservice");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SEE_OFFER_"), "html", null, true);
        echo "</a>
                                    </div>
                        </div>
                        <div class=\"front-slider-image-box\">
                            <div class=\"front-slider-image-box-container\">
                                <img src=\"images/services/phpframeworkservice/frontimages/macbook.png\" alt=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_3_ALT_"), "html", null, true);
        echo "\"/>
                            </div>
                        </div>
                        <div class=\"both-clear\"></div>
                    </div>
                    
                    <div class=\"our-services-slide\">
                        <div class=\"front-slider-description-box\">
                                    <h3 class=\"services-realization-title\">";
        // line 289
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_3_TITLE_");
        echo "</h3>
                                    <p class=\"services-realization-title\">";
        // line 290
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_3_SUBTITLE_");
        echo "</p>
                                    <p class=\"services-realization-title-mobile\">";
        // line 291
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_3_TITLE_");
        echo " ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_3_SUBTITLE_");
        echo "</p>
                                    <p class=\"services-realization-description\">";
        // line 292
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_3_DESCRIPTION_");
        echo "</p>
                                    <div class=\"services-realization-links-box\">
                                        <a href=\"";
        // line 294
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontendservice");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SEE_OFFER_"), "html", null, true);
        echo "</a>
                                    </div>
                        </div>
                        <div class=\"front-slider-image-box\">
                            <div class=\"front-slider-image-box-container\">
                                <img src=\"images/services/frontendservice/frontimages/macbook.png\" alt=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_1_ALT_"), "html", null, true);
        echo "\"/>
                            </div>
                        </div>
                        <div class=\"both-clear\"></div>
                    </div>
                    
                    
                    <div class=\"our-services-slide\">
                        <div class=\"front-slider-description-box\">
                                    <h3 class=\"services-realization-title\">";
        // line 308
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_4_TITLE_");
        echo "</h3>
                                    <p class=\"services-realization-title\">";
        // line 309
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_4_SUBTITLE_");
        echo "</p>
                                    <p class=\"services-realization-title-mobile\">";
        // line 310
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_4_TITLE_");
        echo " ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_4_SUBTITLE_");
        echo "</p>
                                    <p class=\"services-realization-description\">";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_4_DESCRIPTION_"), "html", null, true);
        echo "</p>
                                    <div class=\"services-realization-links-box\">
                                        <a href=\"";
        // line 313
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uxanddesignservice");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SEE_OFFER_"), "html", null, true);
        echo "</a>
                                    </div>
                        </div>
                        <div class=\"front-slider-image-box\">
                            <div class=\"front-slider-image-box-container\">
                                <img src=\"images/services/uxanddesignservice/frontimages/macbook.png\" alt=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_OUR_SERVICES_SERVICE_4_ALT_"), "html", null, true);
        echo "\"/>
                            </div>
                        </div>
                        <div class=\"both-clear\"></div>
                    </div>     
                </div>
                <div class=\"both-clear\"></div>  
                <div class=\"slider-arrows-container\">
                    <div class=\"time-line-arrows\"></div>
                </div>
        </div>
    </div>
    <div class=\"working-on-container\">
        <div class=\"content-container\">
            <div class=\"static-background-element front-element-1\">
                <img src=\"/images/svg/joboffersvgs/frontenddeveloper/element_3_fed.svg\" alt=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_IMAGE_12_ALT_"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"static-background-element front-element-2\">
                <img src=\"/images/svg/parallaxElements/element_2.svg\" alt=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_IMAGE_13_ALT_"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"static-background-element front-element-3\">
                <img src=\"/images/svg/joboffersvgs/juniorfrontenddeveloper/element_3_jfed.svg\" alt=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_INDEX_IMAGE_14_ALT_"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"working-on-box\">
                <div class=\"working-on-paragraph-box\">
                    <h2>
                        <span class=\"first-span\">";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_WE_ARE_"), "html", null, true);
        echo "</span>
                        <span class=\"second-span\">";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_WORKING_ON_"), "html", null, true);
        echo "</span>
                    </h2>
                </div>
                <div class=\"working-on-images-box\">
                    <div class=\"tech-image-background tech-image-1\"></div>
                    <div class=\"tech-image-background tech-image-2\"></div>
                    <div class=\"tech-image-background tech-image-3\"></div>
                    <div class=\"tech-image-background tech-image-4\"></div>
                    <div class=\"tech-image-background tech-image-5\"></div>
                    <div class=\"tech-image-background tech-image-6\"></div>
                    <div class=\"tech-image-background tech-image-7\"></div>
                    <div class=\"tech-image-background tech-image-8\"></div>
                    <div class=\"tech-image-background tech-image-9\"></div>
                    <div class=\"tech-image-background tech-image-10\"></div>
                    <div class=\"tech-image-background tech-image-11\"></div>
                    <div class=\"tech-image-background tech-image-12\"></div>
                    <div class=\"tech-image-background tech-image-13\"></div>
                    <div class=\"tech-image-background tech-image-14\"></div>
                    <div class=\"tech-image-background tech-image-15\"></div>
                </div>
                <div class=\"working-on-images-box-mobile\">
                    <div class=\"tech-image-background tech-image-1\"></div>
                    <div class=\"tech-image-background tech-image-2\"></div>
                    <div class=\"tech-image-background tech-image-3\"></div>
                    <div class=\"tech-image-background tech-image-4\"></div>
                    <div class=\"tech-image-background tech-image-5\"></div>
                    <div class=\"tech-image-background tech-image-6\"></div>
                    <div class=\"tech-image-background tech-image-7\"></div>
                    <div class=\"tech-image-background tech-image-11\"></div>
                    <div class=\"tech-image-background tech-image-8\"></div>
                    <div class=\"tech-image-background tech-image-9\"></div>
                    <div class=\"tech-image-background tech-image-10\"></div>
                    <div class=\"tech-image-background tech-image-12\"></div>
                    <div class=\"tech-image-background tech-image-13\"></div>
                    <div class=\"tech-image-background tech-image-14\"></div>
                    <div class=\"tech-image-background tech-image-15\"></div>
                </div>
                <div class=\"both-clear\"></div>
            </div>
        </div>
    </div>
    <script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/pages/index/pagescripts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"../scripts/aos/aos.js\"></script>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            once: true
        });
    </script>
    
    <script>
        \$('.our-services-front-slider').slick(
                {
                    infinite: true,
                    autoplay: true,
                    dots: true,
                    arrows: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplaySpeed: 5000,
                    customPaging: function (slider, i) {
                        var thumb = \$(slider.\$slides[i]).data('thumb');
                        var count = i + 1

                        return '<p class=\"realization-slider-pagination\">0' + count + '</p>';
                    },
                    prevArrow: '<a href=\"#0\" id=\"prev-btn\" class=\"slide-left-custom\"><span></span><p>";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_PREVIOUS_"), "html", null, true);
        echo "</p></a>',
                    nextArrow: '<a href=\"#0\" id=\"next-btn\" class=\"slide-right-custom\"><p>";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_NEXT_"), "html", null, true);
        echo "</p><span></span></a>',
                    appendArrows: \$(\".time-line-arrows\"),
                });
    </script>
    
    <script>
        function arrowsStyles() {
            var actualLocale = '";
        // line 419
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 419, $this->source); })()), "request", array()), "locale", array()), "html", null, true);
        echo "';
            
            
            if ((\$(window).width() >= 1220)) {

                if(actualLocale == 'en'){
                    \$('.time-line-arrows a#next-btn').css('right','-135px');
                }

                if(actualLocale == 'pl'){
                    \$('.time-line-arrows a#next-btn').css('right','-120px');
                    \$('.time-line-arrows a#next-btn span').css('left','85px');
                }

            }

            if ((\$(window).width() > 767) && (\$(window).width() < 1220)) {
                
                if(actualLocale == 'en'){
                    \$('.time-line-arrows a#next-btn').css('right','-155px');
                    \$('.our-services-front-slider-container .slick-dots').css('left','-10px');
                }

                if(actualLocale == 'pl'){
                    \$('.time-line-arrows a#next-btn').css('right','-175px');
                    \$('.time-line-arrows a#next-btn span').css('left','80px');
                    \$('.our-services-front-slider-container .slick-dots').css('left','-10px');
                    \$('.our-services-front-slider-container').css('height', '970px');    
                }

            }
            
            if ((\$(window).width() < 767)) {

                if(actualLocale == 'en'){
                    \$('.our-services-front-slider-container').css('height','825px');
                }

                if(actualLocale == 'pl'){
                    \$('.our-services-front-slider-container').css('height','875px');
                }
        }
        }
        
        arrowsStyles();
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  709 => 419,  699 => 412,  695 => 411,  667 => 386,  623 => 345,  619 => 344,  611 => 339,  605 => 336,  599 => 333,  581 => 318,  571 => 313,  566 => 311,  560 => 310,  556 => 309,  552 => 308,  540 => 299,  530 => 294,  525 => 292,  519 => 291,  515 => 290,  511 => 289,  500 => 281,  490 => 276,  485 => 274,  479 => 273,  475 => 272,  471 => 271,  460 => 263,  450 => 258,  445 => 256,  439 => 255,  435 => 254,  431 => 253,  421 => 246,  417 => 245,  394 => 225,  390 => 224,  382 => 219,  378 => 218,  374 => 217,  366 => 212,  352 => 203,  341 => 197,  330 => 191,  320 => 184,  304 => 171,  300 => 170,  290 => 163,  283 => 159,  276 => 155,  269 => 151,  259 => 144,  252 => 140,  236 => 127,  213 => 109,  202 => 101,  187 => 89,  183 => 88,  172 => 80,  151 => 64,  140 => 56,  123 => 42,  119 => 41,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  80 => 17,  75 => 15,  66 => 11,  61 => 9,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/base.html.twig' %}
{% block body %}
    <div class=\"main-page-banner-container\">
        <video autoplay=\"autoplay\" loop=\"loop\" id=\"vid\">
            <source src=\"backgroundVideo/backgroundvideo.mp4\">
        </video>
        <div class=\"content-container\">
            <div class=\"main-banner-paragraphs-box\">
                <p class=\"banner-title\"data-aos=\"fade-down\" data-aos-duration=\"300\" data-aos-delay=\"500\">{{'_WELCOME_TO_' | trans}}</p>
                <h1 class=\"banner-big-paragraph\" data-aos=\"fade-down\" data-aos-duration=\"500\">ADVOX  <span>STUDIO</span></h1>
                <h2 class=\"banner-regular-paragraph\" data-aos=\"fade-down\" data-aos-duration=\"300\" data-aos-delay=\"800\"><span>{{'_WELCOME_TO_TEXT_1' | trans}} <br>{{'_WELCOME_TO_TEXT_2' | trans}}</span></h2>
            </div>
            <div class=\"magento-icons-box call-action-wrapper\" data-aos=\"zoom-in-down\" data-aos-duration=\"300\" data-aos-delay=\"1000\">
                <div class=\"magento-associate-box\">
                    <p>{{'_WE_ARE_MAGENTO_PARTNER_' | trans}}</p>
                    <a target=\"_blank\" href=\"https://magento.com/partners/portal/details/partner/id/1600/back_url/aHR0cHM6Ly9tYWdlbnRvLmNvbS9wYXJ0bmVycy9wb3J0YWwvZGlyZWN0b3J5Lz9wYXJ0bmVyX3R5cGU9MSZhbXA7cGFydG5lcl9yZWdpb249ZXVyb3BlJmFtcDtwYXJ0bmVyX2xvY2F0aW9uPVBM\">
                    <img src=\"/images/svg/Magento_SI_Business_Large_front_.svg\" alt=\"{{'_INDEX_IMAGE_1_ALT_' | trans}}\"/>
                    </a>
                    <div class=\"both-clear\"></div>
                </div>
                <div class=\"magento-certified-developer\">
                    <p>{{'_WE_HAVE_' | trans}}<span>8</span></p>
                    <img src=\"images/logo/magento-certified_developer.png\" alt=\"{{'_INDEX_IMAGE_2_ALT_' | trans}}\"/>
                    <img src=\"images/logo/magento-certified_frontend.png\" alt=\"{{'_INDEX_IMAGE_3_ALT_' | trans}}\"/>
                    <img src=\"images/logo/magento-certified_solution.png\" alt=\"{{'_INDEX_IMAGE_4_ALT_' | trans}}\"/>
                    <div class=\"both-clear\"></div>
                </div>
                <div class=\"both-clear\"></div>
            </div>
        </div>
        <div id=\"homepage-arrow\" data-target=\"page-header\" class=\"down visible\">
            <span class=\"icon-arrow-bottom anim-pulseUpDown\"></span>
        </div>
    </div>
    <div class=\"top-submenu-container\">
        <div class=\"content-container-full-width\">
            <div class=\"submenu\">
                <div class=\"submenu-center-box\">
                    <div class=\"submenu-item\">
                        <div class=\"submenu-item-center-box\">
                            <div class=\"first-menu-element-svg\"><img src=\"/images/svg/e-Commerce.svg\" alt=\"{{'_INDEX_IMAGE_5_ALT_' | trans}}\"/></div>
                            <a href=\"{{ path('magentoservice') }}\">
                                <div class=\"center-submenu-content\">
                                    <div class=\"image-icon-submenu\">
                                        <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             viewBox=\"0 0 44 39\" style=\"enable-background:new 0 0 44 39;\" xml:space=\"preserve\">
                                        <style type=\"text/css\">
                                            .st0{fill:#FFFFFF;}
                                        </style>
                                        <path class=\"st0\" d=\"M32.4,7.4H4.7c-1.9,0-3.5,1.6-3.5,3.5v17.3c0,1.9,1.6,3.5,3.5,3.5h27.7c1.9,0,3.5-1.6,3.5-3.5V10.8
                                              C35.8,8.9,34.3,7.4,32.4,7.4z M32.4,28.2H4.7V10.8h27.7V28.2z M39.3,0.5H11.6C9.7,0.5,8.2,2,8.2,3.9h31.2v20.8
                                              c1.9,0,3.5-1.5,3.5-3.5V3.9C42.8,2,41.2,0.5,39.3,0.5z M25.5,35.1H11.6c-1,0-1.7,0.8-1.7,1.7c0,1,0.8,1.7,1.7,1.7h13.8
                                              c1,0,1.7-0.8,1.7-1.7C27.2,35.9,26.4,35.1,25.5,35.1z\"/>
                                        </svg>
                                    </div>
                                    <p class=\"submenu-item-paragraph\">{{'_E-COMMERCE_&_MAGENTO_' | trans}}</p>
                                </div>
                            </a>
                            <div class=\"border-line-absolute\"></div> 
                        </div>
                    </div>
                    <div class=\"submenu-item\">
                        <div class=\"submenu-item-center-box\">
                            <div class=\"second-menu-element-svg\"><img src=\"/images/svg/Symfony_&_Zend.svg\" alt=\"{{'_INDEX_IMAGE_6_ALT_' | trans}}\"/></div><a href=\"{{ path('phpframeworksservice') }}\">
                                <div class=\"center-submenu-content\">
                                    <div class=\"image-icon-submenu\">
                                        <svg version=\"1.1\" id=\"Layer_2\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             viewBox=\"0 0 44 39\" style=\"enable-background:new 0 0 44 39;\" xml:space=\"preserve\">
                                        <style type=\"text/css\">
                                            .st0{fill:#FFFFFF;}
                                        </style>
                                        <path class=\"st0\" d=\"M40.2,1.3H28.9c-1,0-1.7,0.8-1.7,1.7s0.8,1.7,1.7,1.7h10.4v22.5H4.7V4.8h15.6v2c-1.4,0.5-2.6,1.6-3.1,3
                                              c-0.4,0.8-0.9,2.2-1.7,4.8c0,0.1-0.4,1.2-0.4,2.3c0,3.8,3.1,6.9,6.9,6.9s6.9-3.1,6.9-6.9c0-1.1-0.3-2.2-0.4-2.2
                                              c-0.8-2.6-1.3-4-1.7-4.8c-0.6-1.4-1.7-2.5-3.1-3V3.1c0-1-0.8-1.7-1.7-1.7H3.8C2.4,1.4,1.2,2.6,1.2,4v24.2c0,1.4,1.2,2.6,2.6,2.6
                                              h36.3c1.4,0,2.6-1.2,2.6-2.6V3.9C42.8,2.5,41.6,1.3,40.2,1.3z M22,10c0.7,0,1.4,0.5,1.6,1.2l0.4,1.2l0,0c0.5,1.3,1.2,3.3,1.2,3.4
                                              c0,0.1,0.2,0.7,0.2,1.2c0,1.9-1.6,3.5-3.5,3.5s-3.5-1.6-3.5-3.5c0-0.4,0.2-1,0.2-1.2c0-0.1,0.8-2.1,1.2-3.4l0.4-1.2
                                              C20.6,10.4,21.3,10,22,10z M13.3,37.7h17.3v-3.5H13.3V37.7z\"/>
                                        </svg>
                                    </div>
                                    <p class=\"submenu-item-paragraph\">{{'_SYMFONY_&_ZEND_DEVELOPMENT_' | trans}}</p>
                                </div>
                            </a><div class=\"border-line-absolute\">
                            </div>
                        </div>
                    </div>
                    <div class=\"submenu-item\">
                        <div class=\"submenu-item-center-box\">
                            <div class=\"fourth-menu-element-svg\"><img src=\"/images/svg/Frontend.svg\" alt=\"{{'_INDEX_IMAGE_7_ALT_' | trans}}\"/></div>
                            <a href=\"{{ path('frontendservice') }}\">
                                <div class=\"center-submenu-content\">
                                    <div class=\"image-icon-submenu\">
                                        <svg version=\"1.1\" id=\"Layer_3\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             viewBox=\"0 0 44 39\" style=\"enable-background:new 0 0 44 39;\" xml:space=\"preserve\">
                                        <style type=\"text/css\">
                                            .st0{fill:#FFFFFF;}
                                        </style>
                                        <path class=\"st0\" d=\"M6,0.9v3h3l0,0h23.9v3H3v-6H0v8.9h35.8V0.9H6z M13.5,15.8h3l0,0h23.9v3H10.5v-6h-3v8.9h35.8v-8.9H13.5V15.8z
                                              M18.5,27.8H21l0,0h20v3H16v-6h-2.5v8.9h30v-8.9h-25V27.8z\"/>
                                        </svg>
                                    </div>
                                    <p class=\"submenu-item-paragraph\">{{'_FRONTEND_DEVELOPMENT_' | trans}}</p>
                                </div>
                            </a>
                            <div class=\"border-line-absolute\"></div>
                        </div> 
                    </div>
                    <div class=\"submenu-item\">
                        <div class=\"submenu-item-center-box\">
                            <div class=\"fifth-menu-element-svg\"><img src=\"/images/svg/ux_i_ui.svg\" alt=\"{{'_INDEX_IMAGE_8_ALT_' | trans}}\" /></div><a href=\"{{ path('uxanddesignservice') }}\">
                                <div class=\"center-submenu-content\">
                                    <div class=\"image-icon-submenu\">
                                        <svg version=\"1.1\" id=\"Layer_4\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             viewBox=\"0 0 44 39\" style=\"enable-background:new 0 0 44 39;\" xml:space=\"preserve\">
                                        <style type=\"text/css\">
                                            .st0{fill:#FFFFFF;}
                                        </style>
                                        <g>
                                        <path class=\"st0\" d=\"M33.9,26l-5.4-5.4v-7.2h-7.2L16,8.1V0.9H6.5v9.4h7.2l2.2,2.2c-0.1,0-0.2,0-0.2-0.1c-3.6-0.9-7.5-0.6-11,0.7
                                              l0,0c-0.2,0.1-0.4,0.1-0.6,0.2c-0.5,0.3-0.7,0.8-0.7,1.3c0,0.9,0.7,1.6,1.6,1.6c0.2,0,0.4,0,0.6-0.1c1.8-0.7,3.8-1.1,5.7-1.1
                                              c1.2,0,2.5,0.1,3.7,0.4c1.5,0.4,2.9,0.9,4.2,1.7v5.7h5.7c2,3.5,2.6,7.6,1.7,11.5c-0.2,0.7-0.4,1.4-0.6,2l0,0
                                              c-0.3,0.8,0.1,1.7,0.9,2c0.2,0.1,0.4,0.1,0.6,0.1c0.6,0,1.2-0.4,1.4-0.9c0,0,0,0,0-0.1v-0.1c0.3-0.8,0.5-1.5,0.7-2.3
                                              c0.7-3,0.7-6.1,0-9.1l2.2,2.2v7.2h9.4V26H33.9z M9.7,4h3.1v3.1H9.7V4z M22.2,16.6h3.1v3.1h-3.1V16.6z M38,32.3h-3.1v-3.1H38V32.3z\"
                                              />
                                        </g>
                                        </svg>
                                    </div>
                                    <p class=\"submenu-item-paragraph\">{{'_UX_&_UI_DESIGN_' | trans | raw}}</p>
                                </div>
                            </a><div class=\"border-line-absolute\"></div>
                        </div>
                    </div>
                    <div class=\"both-clear\"></div>
                </div>
                <div class=\"both-clear\"></div>
            </div>
        </div>
    </div>
    <div class=\"try-to-know-container\">
        <div class=\"content-container\">
            <h2 class=\"try-to-know-title\" >{{'_GET_TO_KNOW_US_BETTER_' | trans}}</h2>
            <div class=\"commercial-boxes-container\" >
                <div class=\"commercial-box little-math-box\" >
                    <div class=\"header-commercial-box-section\">
                        <p class=\"commercial-title-paragraph\">{{'_A_LITTLE_MATH_' | trans}}</p>
                        <div class=\"both-clear\"></div>
                    </div>
                    <div class=\"content-commercial-box-section\">
                        <div class=\"little-math-content\">
                            <div class=\"content-box\">
                                <div class=\"left-side-content\"><p>100+</p></div>
                                <div class=\"right-side-content\"><p>{{'_MAGENTO_PROJECTS_' | trans}}</p></div>
                            </div>
                            <div class=\"content-box\">
                                <div class=\"left-side-content\"><p>20</p></div>
                                <div class=\"right-side-content\"><p>{{'_DEVELOPERS_' | trans}}</p></div>
                            </div>
                            <div class=\"content-box\">
                                <div class=\"left-side-content\"><p>8</p></div>
                                <div class=\"right-side-content\"><p>{{'_MAGENTO_CERTIFIED_DEVELOPERS_' | trans}}</p></div>
                            </div>
                            <div class=\"content-box\">
                                <div class=\"left-side-content\"><p>4</p></div>
                                <div class=\"right-side-content\"><p>{{'_PROJECT_MANAGERS_' | trans}}</p></div>
                            </div>
                            <div class=\"both-clear\"></div>
                        </div>
                    </div>
                    <div class=\"footer-commercial-box-section\">
                        <div class=\"commercial-box-link-paragraph\">
                            <a href=\"{{ path('personal-bio') }}\">
                            <p>{{'_MEET_OUR_TEAM_' | trans}}
                                <span class=\"arrow-right\">
                                    <span class=\"arrowhead-up\"></span>
                                    <span class=\"arrow-line\"></span>
                                    <span class=\"arrowhead-down\"></span>
                                </span>
                            </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"commercial-box last-realization-box\" >
                    <div class=\"header-commercial-box-section\">
                        <p class=\"commercial-title-paragraph\">{{'_LAST_PROJECTS_' | trans}}</p>
                        <div class=\"both-clear\"></div>
                    </div>
                        <div class=\"slider-center-box\">
                    <div class=\"last-realization-slider\">
                        <div class=\"slide\" data-title=\"ewpa\">
                            <div class=\"content-commercial-box-section\">
                                <a href=\"{{ path('ewpaproject') }}\"><img src=\"/images/monitor-slick/ewpa.jpg\" alt=\"{{'_INDEX_IMAGE_9_ALT_' | trans}}\"></a>
                            </div>
                            <div class=\"footer-commercial-box-section\"></div>
                        </div>
                        <div class=\"slide\" data-title=\"orgran\">
                            <div class=\"content-commercial-box-section\">
                                <a href=\"{{ path('orgranproject') }}\"><img src=\"/images/monitor-slick/orgran.jpg\" alt=\"{{'_INDEX_IMAGE_10_ALT_' | trans}}\"></a>
                            </div>
                            <div class=\"footer-commercial-box-section\"></div>
                        </div>
                        <div class=\"slide\" data-title=\"powerbody\">
                            <div class=\"content-commercial-box-section\">
                                <a href=\"{{ path('powerbodyproject') }}\"><img src=\"/images/monitor-slick/powerbody.jpg\" alt=\"{{'_INDEX_IMAGE_11_ALT_' | trans}}\"></a>
                            </div>
                            <div class=\"footer-commercial-box-section\"></div>
                        </div>
                    </div>
                        </div>
                </div>
                <div class=\"commercial-box latest-news-box\">
                    <div class=\"header-commercial-box-section\">
                        <p class=\"commercial-title-paragraph\">{{'_LATEST_NEWS_' | trans}}</p>
                        <div class=\"both-clear\"></div>
                    </div>
                    <div class=\"content-commercial-latest-news-section\">
                        <p class=\"date-paragraph\">06.12.16</p>
                        <p class=\"news-pre-title\">{{'_SAY_HELLO_INDEX_NEWS_' | trans}}</p>
                        <p class=\"news-title-first\">{{'_TO_OUR_INDEX_NEWS_' | trans}}</p>
                        <p class=\"news-title-second\">{{'_NEW_WEBSITE_INDEX_NEWS_' | trans}}</p>
                        <p class=\"news-post-title\"></p>
                    </div>
                        <div class=\"footer-commercial-box-section\">
                        <div class=\"commercial-box-link-paragraph\">
                            <a href=\"{{ path('news') }}\">
                            <p>{{'_GO_TO_NEWS_' | trans | raw}}
                                <span class=\"arrow-right\" >
                                    <span class=\"arrowhead-up\"></span>
                                    <span class=\"arrow-line\"></span>
                                    <span class=\"arrowhead-down\"></span>
                                </span>
                            </p>
                            </a>
                        </div>
                        </div>
                </div>
                <div class=\"both-clear\"></div>
            </div>
        </div>
    </div>
    <div class=\"our-services-front-slider-container\">
        <div class=\"content-container\">
            
                <div class=\"front-slider-paragraph-box\">
                    <h2>
                        <span>{{'_INDEX_OUR_' | trans}}</span>
                        <span>{{'_INDEX_SERVICES_' | trans}}</span>
                    </h2>
                </div>
                
                <div class=\"our-services-front-slider front-slider\">
                    <div class=\"our-services-slide\">
                        <div class=\"front-slider-description-box\">
                                    <h3 class=\"services-realization-title\">{{'_INDEX_OUR_SERVICES_SERVICE_1_TITLE_' | trans | raw}}</h3>
                                    <p class=\"services-realization-title\">{{'_INDEX_OUR_SERVICES_SERVICE_1_SUBTITLE_' | trans}}</p>
                                    <p class=\"services-realization-title-mobile\">{{'_INDEX_OUR_SERVICES_SERVICE_1_TITLE_' | trans}} {{'_INDEX_OUR_SERVICES_SERVICE_1_SUBTITLE_' | trans}}</p>
                                    <p class=\"services-realization-description\">{{'_INDEX_OUR_SERVICES_SERVICE_1_DESCRIPTION_' | trans}}</p>
                                    <div class=\"services-realization-links-box\">
                                        <a href=\"{{ path('magentoservice') }}\">{{'_INDEX_OUR_SERVICES_SEE_OFFER_' | trans}}</a>
                                    </div>
                        </div>
                        <div class=\"front-slider-image-box\">
                            <div class=\"front-slider-image-box-container\">
                                <img src=\"images/services/magentoservice/frontimages/macbook.png\" alt=\"{{'_INDEX_OUR_SERVICES_SERVICE_2_ALT_' | trans}}\"/>
                            </div>
                        </div>
                        <div class=\"both-clear\"></div>
                    </div>
                            
                    <div class=\"our-services-slide\">
                        <div class=\"front-slider-description-box\">
                                    <h3 class=\"services-realization-title\">{{'_INDEX_OUR_SERVICES_SERVICE_2_TITLE_' | trans | raw}}</h3>
                                    <p class=\"services-realization-title\">{{'_INDEX_OUR_SERVICES_SERVICE_2_SUBTITLE_' | trans}}</p>
                                    <p class=\"services-realization-title-mobile\">{{'_INDEX_OUR_SERVICES_SERVICE_2_TITLE_' | trans}} {{'_INDEX_OUR_SERVICES_SERVICE_2_SUBTITLE_' | trans}}</p>
                                    <p class=\"services-realization-description\">{{'_INDEX_OUR_SERVICES_SERVICE_2_DESCRIPTION_' | trans}}</p>
                                    <div class=\"services-realization-links-box\">
                                        <a href=\"{{ path('phpframeworksservice') }}\">{{'_INDEX_OUR_SERVICES_SEE_OFFER_' | trans}}</a>
                                    </div>
                        </div>
                        <div class=\"front-slider-image-box\">
                            <div class=\"front-slider-image-box-container\">
                                <img src=\"images/services/phpframeworkservice/frontimages/macbook.png\" alt=\"{{'_INDEX_OUR_SERVICES_SERVICE_3_ALT_' | trans}}\"/>
                            </div>
                        </div>
                        <div class=\"both-clear\"></div>
                    </div>
                    
                    <div class=\"our-services-slide\">
                        <div class=\"front-slider-description-box\">
                                    <h3 class=\"services-realization-title\">{{'_INDEX_OUR_SERVICES_SERVICE_3_TITLE_' | trans | raw}}</h3>
                                    <p class=\"services-realization-title\">{{'_INDEX_OUR_SERVICES_SERVICE_3_SUBTITLE_' | trans | raw}}</p>
                                    <p class=\"services-realization-title-mobile\">{{'_INDEX_OUR_SERVICES_SERVICE_3_TITLE_' | trans | raw}} {{'_INDEX_OUR_SERVICES_SERVICE_3_SUBTITLE_' | trans | raw}}</p>
                                    <p class=\"services-realization-description\">{{'_INDEX_OUR_SERVICES_SERVICE_3_DESCRIPTION_' | trans | raw}}</p>
                                    <div class=\"services-realization-links-box\">
                                        <a href=\"{{ path('frontendservice') }}\">{{'_INDEX_OUR_SERVICES_SEE_OFFER_' | trans}}</a>
                                    </div>
                        </div>
                        <div class=\"front-slider-image-box\">
                            <div class=\"front-slider-image-box-container\">
                                <img src=\"images/services/frontendservice/frontimages/macbook.png\" alt=\"{{'_INDEX_OUR_SERVICES_SERVICE_1_ALT_' | trans}}\"/>
                            </div>
                        </div>
                        <div class=\"both-clear\"></div>
                    </div>
                    
                    
                    <div class=\"our-services-slide\">
                        <div class=\"front-slider-description-box\">
                                    <h3 class=\"services-realization-title\">{{'_INDEX_OUR_SERVICES_SERVICE_4_TITLE_' | trans | raw}}</h3>
                                    <p class=\"services-realization-title\">{{'_INDEX_OUR_SERVICES_SERVICE_4_SUBTITLE_' | trans | raw}}</p>
                                    <p class=\"services-realization-title-mobile\">{{'_INDEX_OUR_SERVICES_SERVICE_4_TITLE_' | trans | raw}} {{'_INDEX_OUR_SERVICES_SERVICE_4_SUBTITLE_' | trans | raw}}</p>
                                    <p class=\"services-realization-description\">{{'_INDEX_OUR_SERVICES_SERVICE_4_DESCRIPTION_' | trans}}</p>
                                    <div class=\"services-realization-links-box\">
                                        <a href=\"{{ path('uxanddesignservice') }}\">{{'_INDEX_OUR_SERVICES_SEE_OFFER_' | trans}}</a>
                                    </div>
                        </div>
                        <div class=\"front-slider-image-box\">
                            <div class=\"front-slider-image-box-container\">
                                <img src=\"images/services/uxanddesignservice/frontimages/macbook.png\" alt=\"{{'_INDEX_OUR_SERVICES_SERVICE_4_ALT_' | trans}}\"/>
                            </div>
                        </div>
                        <div class=\"both-clear\"></div>
                    </div>     
                </div>
                <div class=\"both-clear\"></div>  
                <div class=\"slider-arrows-container\">
                    <div class=\"time-line-arrows\"></div>
                </div>
        </div>
    </div>
    <div class=\"working-on-container\">
        <div class=\"content-container\">
            <div class=\"static-background-element front-element-1\">
                <img src=\"/images/svg/joboffersvgs/frontenddeveloper/element_3_fed.svg\" alt=\"{{'_INDEX_IMAGE_12_ALT_' | trans}}\"/>
            </div>
            <div class=\"static-background-element front-element-2\">
                <img src=\"/images/svg/parallaxElements/element_2.svg\" alt=\"{{'_INDEX_IMAGE_13_ALT_' | trans}}\"/>
            </div>
            <div class=\"static-background-element front-element-3\">
                <img src=\"/images/svg/joboffersvgs/juniorfrontenddeveloper/element_3_jfed.svg\" alt=\"{{'_INDEX_IMAGE_14_ALT_' | trans}}\"/>
            </div>
            <div class=\"working-on-box\">
                <div class=\"working-on-paragraph-box\">
                    <h2>
                        <span class=\"first-span\">{{'_WE_ARE_' | trans}}</span>
                        <span class=\"second-span\">{{'_WORKING_ON_' | trans}}</span>
                    </h2>
                </div>
                <div class=\"working-on-images-box\">
                    <div class=\"tech-image-background tech-image-1\"></div>
                    <div class=\"tech-image-background tech-image-2\"></div>
                    <div class=\"tech-image-background tech-image-3\"></div>
                    <div class=\"tech-image-background tech-image-4\"></div>
                    <div class=\"tech-image-background tech-image-5\"></div>
                    <div class=\"tech-image-background tech-image-6\"></div>
                    <div class=\"tech-image-background tech-image-7\"></div>
                    <div class=\"tech-image-background tech-image-8\"></div>
                    <div class=\"tech-image-background tech-image-9\"></div>
                    <div class=\"tech-image-background tech-image-10\"></div>
                    <div class=\"tech-image-background tech-image-11\"></div>
                    <div class=\"tech-image-background tech-image-12\"></div>
                    <div class=\"tech-image-background tech-image-13\"></div>
                    <div class=\"tech-image-background tech-image-14\"></div>
                    <div class=\"tech-image-background tech-image-15\"></div>
                </div>
                <div class=\"working-on-images-box-mobile\">
                    <div class=\"tech-image-background tech-image-1\"></div>
                    <div class=\"tech-image-background tech-image-2\"></div>
                    <div class=\"tech-image-background tech-image-3\"></div>
                    <div class=\"tech-image-background tech-image-4\"></div>
                    <div class=\"tech-image-background tech-image-5\"></div>
                    <div class=\"tech-image-background tech-image-6\"></div>
                    <div class=\"tech-image-background tech-image-7\"></div>
                    <div class=\"tech-image-background tech-image-11\"></div>
                    <div class=\"tech-image-background tech-image-8\"></div>
                    <div class=\"tech-image-background tech-image-9\"></div>
                    <div class=\"tech-image-background tech-image-10\"></div>
                    <div class=\"tech-image-background tech-image-12\"></div>
                    <div class=\"tech-image-background tech-image-13\"></div>
                    <div class=\"tech-image-background tech-image-14\"></div>
                    <div class=\"tech-image-background tech-image-15\"></div>
                </div>
                <div class=\"both-clear\"></div>
            </div>
        </div>
    </div>
    <script src=\"{{ asset('scripts/pages/index/pagescripts.js') }}\" type=\"text/javascript\"></script>
    <script src=\"../scripts/aos/aos.js\"></script>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            once: true
        });
    </script>
    
    <script>
        \$('.our-services-front-slider').slick(
                {
                    infinite: true,
                    autoplay: true,
                    dots: true,
                    arrows: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplaySpeed: 5000,
                    customPaging: function (slider, i) {
                        var thumb = \$(slider.\$slides[i]).data('thumb');
                        var count = i + 1

                        return '<p class=\"realization-slider-pagination\">0' + count + '</p>';
                    },
                    prevArrow: '<a href=\"#0\" id=\"prev-btn\" class=\"slide-left-custom\"><span></span><p>{{'_PREVIOUS_' | trans}}</p></a>',
                    nextArrow: '<a href=\"#0\" id=\"next-btn\" class=\"slide-right-custom\"><p>{{'_NEXT_' | trans}}</p><span></span></a>',
                    appendArrows: \$(\".time-line-arrows\"),
                });
    </script>
    
    <script>
        function arrowsStyles() {
            var actualLocale = '{{ app.request.locale }}';
            
            
            if ((\$(window).width() >= 1220)) {

                if(actualLocale == 'en'){
                    \$('.time-line-arrows a#next-btn').css('right','-135px');
                }

                if(actualLocale == 'pl'){
                    \$('.time-line-arrows a#next-btn').css('right','-120px');
                    \$('.time-line-arrows a#next-btn span').css('left','85px');
                }

            }

            if ((\$(window).width() > 767) && (\$(window).width() < 1220)) {
                
                if(actualLocale == 'en'){
                    \$('.time-line-arrows a#next-btn').css('right','-155px');
                    \$('.our-services-front-slider-container .slick-dots').css('left','-10px');
                }

                if(actualLocale == 'pl'){
                    \$('.time-line-arrows a#next-btn').css('right','-175px');
                    \$('.time-line-arrows a#next-btn span').css('left','80px');
                    \$('.our-services-front-slider-container .slick-dots').css('left','-10px');
                    \$('.our-services-front-slider-container').css('height', '970px');    
                }

            }
            
            if ((\$(window).width() < 767)) {

                if(actualLocale == 'en'){
                    \$('.our-services-front-slider-container').css('height','825px');
                }

                if(actualLocale == 'pl'){
                    \$('.our-services-front-slider-container').css('height','875px');
                }
        }
        }
        
        arrowsStyles();
    </script>
{% endblock %}", "index/index.html.twig", "/var/www/html/pimcore/app/Resources/views/index/index.html.twig");
    }
}
