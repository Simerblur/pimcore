<?php

/* @PimcoreInstall/Install/install.html.twig */
class __TwigTemplate_7a520d34dba7dded21b8c8c8cd32327e52046df1a9fe535f962593f4af881e5e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PimcoreInstall/Install/install.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"robots\" content=\"noindex, nofollow\" />
    <link rel=\"icon\" type=\"image/png\" href=\"/pimcore/static6/img/favicon/favicon-32x32.png\" />

    <title>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->source); })()), "request", array()), "httpHost", array()), "html", null, true);
        echo " :: Pimcore</title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"/pimcore/static6/js/lib/ext/classic/theme-triton/resources/theme-triton-all.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/pimcore/static6/css/admin.css\"/>

    <style type=\"text/css\">
        body {
            min-height: 600px;
        }

        .invalid .x-form-item-body {
            border-right: 5px solid #a61717;
        }

        #credential_error {
            color: #a61717;
        }

        #install_info .x-panel-body {
            background: #d9edf7;
            color: #31708f;
            border-color: #bce8f1;
        }

        .icon_generate {
            background: url(/pimcore/static6/img/flat-color-icons/engineering.svg) center center no-repeat !important;
        }

        .icon_ok {
            background: url(/pimcore/static6/img/flat-color-icons/ok.svg) center center no-repeat !important;
        }

        .icon_check {
            background: url(/pimcore/static6/img/flat-color-icons/factory.svg) center center no-repeat !important;
        }

        .icon_reload {
            background: url(/pimcore/static6/img/flat-color-icons/synchronize.svg) center center no-repeat !important;
        }

        #install_errors, #install_errors b {
            color: red;
        }

        #install_errors a {
            color: #404040;
        }

    </style>

</head>

<body>

<script type=\"text/javascript\" src=\"/pimcore/static6/js/lib/jquery-3.3.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/pimcore/static6/js/lib/ext/ext-all.js\"></script>
<script type=\"text/javascript\" src=\"/pimcore/static6/js/pimcore/overrides.js\"></script>
<script type=\"text/javascript\" src=\"/pimcore/static6/js/lib/ext/classic/theme-triton/theme-triton.js\"></script>

";
        // line 67
        $context["errorString"] = "";
        // line 68
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 68, $this->source); })()))) {
            // line 69
            echo "    ";
            ob_start();
            // line 70
            echo "        ";
            ob_start();
            // line 71
            echo "        <b>ERROR(s):</b><br />
        <ul>
            ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 73, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 74
                echo "                <li>";
                echo $context["error"];
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "        </ul>
        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 78
            echo "    ";
            $context["errorString"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 80
        echo "
<script type=\"text/javascript\">
    var errorMessages = '";
        // line 82
        echo twig_trim_filter((isset($context["errorString"]) || array_key_exists("errorString", $context) ? $context["errorString"] : (function () { throw new Twig_Error_Runtime('Variable "errorString" does not exist.', 82, $this->source); })()));
        echo "';
    var infoMessage = ";
        // line 83
        echo json_encode(twig_trim_filter((isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 83, $this->source); })())));
        echo ";
    var availableProfiles = ";
        // line 84
        echo json_encode((isset($context["profiles"]) || array_key_exists("profiles", $context) ? $context["profiles"] : (function () { throw new Twig_Error_Runtime('Variable "profiles" does not exist.', 84, $this->source); })()));
        echo ";
    var needsProfile = ";
        // line 85
        echo (((isset($context["needsProfile"]) || array_key_exists("needsProfile", $context) ? $context["needsProfile"] : (function () { throw new Twig_Error_Runtime('Variable "needsProfile" does not exist.', 85, $this->source); })())) ? ("true") : ("false"));
        echo ";
    var needsDb = ";
        // line 86
        echo (((isset($context["needsDb"]) || array_key_exists("needsDb", $context) ? $context["needsDb"] : (function () { throw new Twig_Error_Runtime('Variable "needsDb" does not exist.', 86, $this->source); })())) ? ("true") : ("false"));
        echo ";

    ";
        // line 518
        echo "
    Ext.onReady(function() {

        Ext.tip.QuickTipManager.init();
        Ext.Ajax.setDisableCaching(true);
        Ext.Ajax.setTimeout(900000);


        var passwordGenerator = function ( len ) {
            var length = (len)?(len):(10);
            var string = \"abcdefghijklmnopqrstuvwxyz\"; //to upper
            var numeric = '0123456789';
            var punctuation = '!@#\$%^&*()_+~`|}{[]\\:;?><,./-=';
            var password = \"\";
            var character = \"\";
            while( password.length<length ) {
                entity1 = Math.ceil(string.length * Math.random()*Math.random());
                entity2 = Math.ceil(numeric.length * Math.random()*Math.random());
                entity3 = Math.ceil(punctuation.length * Math.random()*Math.random());
                hold = string.charAt( entity1 );
                hold = (entity1%2==0)?(hold.toUpperCase()):(hold);
                character += hold;
                character += numeric.charAt( entity2 );
                character += punctuation.charAt( entity3 );
                password = character;
            }
            return password;
        };

        var isValidPassword = function (pass) {
            var passRegExp = /^(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\\s).{10,}\$/;
            if(!pass.match(passRegExp)) {
                return false;
            }
            return true;
        };

        var validateInput = function () {
            var validInstall = true;
            var validCheckReq = true;
            var credentialError;

            if (needsDb) {
                \$.each([\"mysql_host_socket\",\"mysql_username\",\"mysql_database\"], function (index, value) {
                    var item = Ext.getCmp(value);
                    if(item.getValue().length < 1) {
                        validCheckReq = false;
                        item.addCls(\"invalid\");
                    } else {
                        item.removeCls(\"invalid\");
                    }
                });
            }

            var nonEmptyInputs = [\"admin_username\",\"admin_password\"];
            if (needsProfile) {
                nonEmptyInputs.push('profile');
            }

            \$.each(nonEmptyInputs, function (index, value) {
                var item = Ext.getCmp(value);
                if(!item.getValue()) {
                    validInstall = false;
                    item.addCls(\"invalid\");
                } else {
                    item.removeCls(\"invalid\");
                }
            });

            if(validInstall) {
                var adminPassword = Ext.getCmp(\"admin_password\");
                if (!isValidPassword(adminPassword.getValue())) {
                    validInstall = false;
                    credentialError = \"Password must contain at least 10 characters, one lowercase letter, one uppercase letter, one numeric digit, and one special character!\";
                }
            }

            var credentialErrorEl = Ext.getCmp(\"credential_error\");
            if(credentialError) {
                credentialErrorEl.update(credentialError);
                credentialErrorEl.show();
            } else {
                credentialErrorEl.hide();
            }

            if(!validCheckReq) {
                validInstall = false;
            }

            if(validInstall) {
                Ext.getCmp(\"install_button\").enable();
            } else {
                Ext.getCmp(\"install_button\").disable();
            }

            if(validCheckReq) {
                Ext.getCmp(\"check_button\").enable();
            } else {
                Ext.getCmp(\"check_button\").disable();
            }
        };

        var logoPanelConf = {
            xtype: \"panel\",
            id: \"logo\",
            border: false,
            manageHeight: false,
            bodyStyle: \"padding: 20px 10px 5px 10px\",
            html: '<div align=\"center\"><img width=\"200\" src=\"/pimcore/static6/img/logo-gray.svg\" align=\"center\" /></div>'
        };

        var win = null;
        var windowItems = [];

        if(errorMessages.length > 0) {
            windowItems.push(logoPanelConf);

            if (infoMessage.length > 0) {
                windowItems.push({
                    xtype: \"panel\",
                    id: \"install_info\",
                    border: false,
                    bodyStyle: \"padding: 20px\",
                    html: infoMessage
                });
            }

            windowItems.push({
                xtype: \"panel\",
                id: \"install_errors\",
                border: false,
                bodyStyle: \"padding: 10px\",
                html: errorMessages
            });

            win = new Ext.Window({
                width: 450,
                closable: false,
                closeable: false,
                y: 20,
                items: windowItems,
                bbar: [\"->\", {
                    id: \"check_button\",
                    text: \"Reload\",
                    iconCls: \"icon_reload\",
                    handler: function () {
                        window.location.reload();
                    }
                }],
                listeners: {
                    afterrender: function () {
                        // no idea why this is necessary to layout the window correctly
                        window.setTimeout(function () {
                            win.updateLayout();
                        }, 1000);
                    }
                }
            });
        } else {
            windowItems.push(logoPanelConf);

            if (infoMessage.length > 0) {
                windowItems.push({
                    xtype: \"panel\",
                    id: \"install_info\",
                    border: false,
                    bodyStyle: \"padding: 20px\",
                    html: infoMessage
                });
            }

            windowItems.push({
                xtype: \"panel\",
                id: \"install_errors\",
                border: false,
                bodyStyle: \"padding: 10px\",
                hidden: true
            });

            var installFormItems = [];

            if (needsProfile) {
                installFormItems.push({
                    xtype: \"combo\",
                    name: \"profile\",
                    id: \"profile\",
                    fieldLabel: \"<b>Install Profile</b>\",
                    labelWidth: 116,
                    store: availableProfiles,
                    mode: \"local\",
                    emptyText: \"Please select a profile\",
                    width: 396,
                    editable: false,
                    triggerAction: \"all\",
                    listeners: {
                        \"select\": validateInput
                    }
                });
            }

            if (needsDb) {
                installFormItems.push({
                    title: \"MySQL Settings\",
                    xtype: \"fieldset\",
                    defaults: {
                        width: 380
                    },
                    items: [
                        {
                            xtype: \"textfield\",
                            name: \"mysql_host_socket\",
                            id: \"mysql_host_socket\",
                            fieldLabel: \"Host / Socket\",
                            value: \"localhost\",
                            enableKeyEvents: true,
                            listeners: {
                                \"keyup\": validateInput
                            }
                        },
                        {
                            xtype: \"textfield\",
                            name: \"mysql_port\",
                            fieldLabel: \"Port\",
                            value: \"3306\"
                        },
                        {
                            xtype: \"textfield\",
                            name: \"mysql_username\",
                            id: \"mysql_username\",
                            fieldLabel: \"Username\",
                            enableKeyEvents: true,
                            listeners: {
                                \"keyup\": validateInput
                            }
                        },
                        {
                            xtype: \"textfield\",
                            name: \"mysql_password\",
                            fieldLabel: \"Password\"
                        },
                        {
                            xtype: \"textfield\",
                            name: \"mysql_database\",
                            id: \"mysql_database\",
                            fieldLabel: \"Database\",
                            enableKeyEvents: true,
                            listeners: {
                                \"keyup\": validateInput
                            }
                        }
                    ]
                });
            }

            installFormItems.push({
                title: \"Admin User\",
                xtype: \"fieldset\",
                defaults: {
                    width: 380
                },
                items: [
                    {
                        xtype: \"textfield\",
                        name: \"admin_username\",
                        id: \"admin_username\",
                        fieldLabel: \"Username\",
                        value: \"admin\",
                        enableKeyEvents: true,
                        listeners: {
                            \"keyup\": validateInput
                        }
                    },
                    {
                        xtype: \"fieldcontainer\",
                        layout: 'hbox',
                        items: [
                            {
                                xtype: \"textfield\",
                                width: 340,
                                name: \"admin_password\",
                                id: \"admin_password\",
                                fieldLabel: \"Password\",
                                enableKeyEvents: true,
                                listeners: {
                                    \"keyup\": validateInput
                                }
                            }, {
                                xtype: \"button\",
                                width: 32,
                                style: \"margin-left: 8px\",
                                iconCls: \"icon_generate\",
                                handler: function () {
                                    var pass;

                                    while(true) {
                                        pass = passwordGenerator(15);
                                        if(isValidPassword(pass)) {
                                            break;
                                        }
                                    }

                                    Ext.getCmp(\"admin_password\").setValue(pass);
                                    validateInput();
                                }
                            }
                        ]
                    }, {
                        xtype: \"container\",
                        id: \"credential_error\",
                        hidden: true
                    }
                ]
            });

            windowItems.push({
                xtype: \"form\",
                id: \"install_form\",
                defaultType: \"textfield\",
                bodyStyle: \"padding: 20px 10px 10px 10px\",
                items: installFormItems,
                hidden: (installFormItems.length === 0)
            });

            win = new Ext.Window({
                width: 450,
                closable: false,
                closeable: false,
                y: 20,
                items: windowItems,
                bbar: [{
                    id: \"check_button\",
                    text: \"Check Requirements\",
                    iconCls: \"icon_check\",
                    disabled: true,
                    handler: function () {
                        var checkWin = new Ext.Window({
                            width: 720,
                            scrollable: true,
                            height: 500,
                            title: 'Check Requirements',
                            html: 'Please wait ...'
                        });
                        checkWin.show();

                        var params = Ext.getCmp(\"install_form\").getForm().getFieldValues();
                        params['headless'] = 'true';

                        Ext.Ajax.request({
                            url: \"/install/check\",
                            method: \"post\",
                            params: params,
                            success: function (response) {
                                checkWin.update(response.responseText);
                            },
                            failure: function (response) {
                                checkWin.update(\"<h3>Ooops ... something went wrong</h3><p>Please check your database configuration values and your log files.</p>\");
                            }
                        });
                    }
                },\"->\",
                    {
                        id: \"install_button\",
                        text: \"<b>Install Now!</b>\",
                        iconCls: \"icon_ok\",
                        disabled: true,
                        handler: function (btn) {

                            btn.disable();
                            Ext.getCmp(\"install_form\").hide();
                            Ext.getCmp(\"check_button\").hide();

                            Ext.getCmp(\"install_errors\").show();
                            Ext.getCmp(\"install_errors\").update(\"Installing ...\");

                            var handleResponse = function (transport) {
                                try {
                                    var response = Ext.decode(transport.responseText);
                                } catch (e) {
                                    Ext.getCmp(\"install_errors\").update(transport.responseText);
                                    Ext.getCmp(\"install_form\").show();
                                    Ext.getCmp(\"check_button\").show();
                                    btn.enable();
                                }

                                if (response.success) {
                                    var date = new Date();
                                    location.href = \"/admin?_dc=\" + date.getTime();
                                } else {
                                    var errorString = '<b>ERROR(s) (please see var/installer/logs for details):</b><br><ul>';

                                    if (response.errors && response.errors.length > 0) {
                                        Ext.each(response.errors, function (error) {
                                            errorString += '<li>' + error + '</li>';
                                        });
                                    }

                                    errorString += '</ul>';

                                    Ext.getCmp(\"install_errors\").update(errorString);
                                    Ext.getCmp(\"install_form\").show();
                                    Ext.getCmp(\"check_button\").show();
                                    btn.enable();
                                }
                            };

                            Ext.Ajax.request({
                                url: \"/install/\",
                                method: \"post\",
                                params: Ext.getCmp(\"install_form\").getForm().getFieldValues(),
                                success: handleResponse,
                                failure: handleResponse
                            });
                        }
                    }
                ],
                listeners: {
                    afterrender: function () {
                        // no idea why this is necessary to layout the window correctly
                        window.setTimeout(function () {
                            win.updateLayout();

                            validateInput();
                        }, 1000);
                    }
                }
            });
        }

        win.show();
    });
    ";
        echo "
</script>

</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreInstall/Install/install.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 518,  152 => 86,  148 => 85,  144 => 84,  140 => 83,  136 => 82,  132 => 80,  128 => 78,  124 => 76,  115 => 74,  111 => 73,  107 => 71,  104 => 70,  101 => 69,  99 => 68,  97 => 67,  35 => 8,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"robots\" content=\"noindex, nofollow\" />
    <link rel=\"icon\" type=\"image/png\" href=\"/pimcore/static6/img/favicon/favicon-32x32.png\" />

    <title>{{ app.request.httpHost }} :: Pimcore</title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"/pimcore/static6/js/lib/ext/classic/theme-triton/resources/theme-triton-all.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/pimcore/static6/css/admin.css\"/>

    <style type=\"text/css\">
        body {
            min-height: 600px;
        }

        .invalid .x-form-item-body {
            border-right: 5px solid #a61717;
        }

        #credential_error {
            color: #a61717;
        }

        #install_info .x-panel-body {
            background: #d9edf7;
            color: #31708f;
            border-color: #bce8f1;
        }

        .icon_generate {
            background: url(/pimcore/static6/img/flat-color-icons/engineering.svg) center center no-repeat !important;
        }

        .icon_ok {
            background: url(/pimcore/static6/img/flat-color-icons/ok.svg) center center no-repeat !important;
        }

        .icon_check {
            background: url(/pimcore/static6/img/flat-color-icons/factory.svg) center center no-repeat !important;
        }

        .icon_reload {
            background: url(/pimcore/static6/img/flat-color-icons/synchronize.svg) center center no-repeat !important;
        }

        #install_errors, #install_errors b {
            color: red;
        }

        #install_errors a {
            color: #404040;
        }

    </style>

</head>

<body>

<script type=\"text/javascript\" src=\"/pimcore/static6/js/lib/jquery-3.3.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/pimcore/static6/js/lib/ext/ext-all.js\"></script>
<script type=\"text/javascript\" src=\"/pimcore/static6/js/pimcore/overrides.js\"></script>
<script type=\"text/javascript\" src=\"/pimcore/static6/js/lib/ext/classic/theme-triton/theme-triton.js\"></script>

{% set errorString = '' %}
{% if errors is not empty %}
    {% set errorString %}
        {% spaceless %}
        <b>ERROR(s):</b><br />
        <ul>
            {% for error in errors %}
                <li>{{ error|raw }}</li>
            {% endfor %}
        </ul>
        {% endspaceless %}
    {% endset %}
{% endif %}

<script type=\"text/javascript\">
    var errorMessages = '{{ errorString|trim|raw }}';
    var infoMessage = {{ info|trim|json_encode|raw }};
    var availableProfiles = {{ profiles|json_encode()|raw }};
    var needsProfile = {{ needsProfile ? 'true' : 'false' }};
    var needsDb = {{ needsDb ? 'true' : 'false' }};

    {% verbatim %}
    Ext.onReady(function() {

        Ext.tip.QuickTipManager.init();
        Ext.Ajax.setDisableCaching(true);
        Ext.Ajax.setTimeout(900000);


        var passwordGenerator = function ( len ) {
            var length = (len)?(len):(10);
            var string = \"abcdefghijklmnopqrstuvwxyz\"; //to upper
            var numeric = '0123456789';
            var punctuation = '!@#\$%^&*()_+~`|}{[]\\:;?><,./-=';
            var password = \"\";
            var character = \"\";
            while( password.length<length ) {
                entity1 = Math.ceil(string.length * Math.random()*Math.random());
                entity2 = Math.ceil(numeric.length * Math.random()*Math.random());
                entity3 = Math.ceil(punctuation.length * Math.random()*Math.random());
                hold = string.charAt( entity1 );
                hold = (entity1%2==0)?(hold.toUpperCase()):(hold);
                character += hold;
                character += numeric.charAt( entity2 );
                character += punctuation.charAt( entity3 );
                password = character;
            }
            return password;
        };

        var isValidPassword = function (pass) {
            var passRegExp = /^(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\\s).{10,}\$/;
            if(!pass.match(passRegExp)) {
                return false;
            }
            return true;
        };

        var validateInput = function () {
            var validInstall = true;
            var validCheckReq = true;
            var credentialError;

            if (needsDb) {
                \$.each([\"mysql_host_socket\",\"mysql_username\",\"mysql_database\"], function (index, value) {
                    var item = Ext.getCmp(value);
                    if(item.getValue().length < 1) {
                        validCheckReq = false;
                        item.addCls(\"invalid\");
                    } else {
                        item.removeCls(\"invalid\");
                    }
                });
            }

            var nonEmptyInputs = [\"admin_username\",\"admin_password\"];
            if (needsProfile) {
                nonEmptyInputs.push('profile');
            }

            \$.each(nonEmptyInputs, function (index, value) {
                var item = Ext.getCmp(value);
                if(!item.getValue()) {
                    validInstall = false;
                    item.addCls(\"invalid\");
                } else {
                    item.removeCls(\"invalid\");
                }
            });

            if(validInstall) {
                var adminPassword = Ext.getCmp(\"admin_password\");
                if (!isValidPassword(adminPassword.getValue())) {
                    validInstall = false;
                    credentialError = \"Password must contain at least 10 characters, one lowercase letter, one uppercase letter, one numeric digit, and one special character!\";
                }
            }

            var credentialErrorEl = Ext.getCmp(\"credential_error\");
            if(credentialError) {
                credentialErrorEl.update(credentialError);
                credentialErrorEl.show();
            } else {
                credentialErrorEl.hide();
            }

            if(!validCheckReq) {
                validInstall = false;
            }

            if(validInstall) {
                Ext.getCmp(\"install_button\").enable();
            } else {
                Ext.getCmp(\"install_button\").disable();
            }

            if(validCheckReq) {
                Ext.getCmp(\"check_button\").enable();
            } else {
                Ext.getCmp(\"check_button\").disable();
            }
        };

        var logoPanelConf = {
            xtype: \"panel\",
            id: \"logo\",
            border: false,
            manageHeight: false,
            bodyStyle: \"padding: 20px 10px 5px 10px\",
            html: '<div align=\"center\"><img width=\"200\" src=\"/pimcore/static6/img/logo-gray.svg\" align=\"center\" /></div>'
        };

        var win = null;
        var windowItems = [];

        if(errorMessages.length > 0) {
            windowItems.push(logoPanelConf);

            if (infoMessage.length > 0) {
                windowItems.push({
                    xtype: \"panel\",
                    id: \"install_info\",
                    border: false,
                    bodyStyle: \"padding: 20px\",
                    html: infoMessage
                });
            }

            windowItems.push({
                xtype: \"panel\",
                id: \"install_errors\",
                border: false,
                bodyStyle: \"padding: 10px\",
                html: errorMessages
            });

            win = new Ext.Window({
                width: 450,
                closable: false,
                closeable: false,
                y: 20,
                items: windowItems,
                bbar: [\"->\", {
                    id: \"check_button\",
                    text: \"Reload\",
                    iconCls: \"icon_reload\",
                    handler: function () {
                        window.location.reload();
                    }
                }],
                listeners: {
                    afterrender: function () {
                        // no idea why this is necessary to layout the window correctly
                        window.setTimeout(function () {
                            win.updateLayout();
                        }, 1000);
                    }
                }
            });
        } else {
            windowItems.push(logoPanelConf);

            if (infoMessage.length > 0) {
                windowItems.push({
                    xtype: \"panel\",
                    id: \"install_info\",
                    border: false,
                    bodyStyle: \"padding: 20px\",
                    html: infoMessage
                });
            }

            windowItems.push({
                xtype: \"panel\",
                id: \"install_errors\",
                border: false,
                bodyStyle: \"padding: 10px\",
                hidden: true
            });

            var installFormItems = [];

            if (needsProfile) {
                installFormItems.push({
                    xtype: \"combo\",
                    name: \"profile\",
                    id: \"profile\",
                    fieldLabel: \"<b>Install Profile</b>\",
                    labelWidth: 116,
                    store: availableProfiles,
                    mode: \"local\",
                    emptyText: \"Please select a profile\",
                    width: 396,
                    editable: false,
                    triggerAction: \"all\",
                    listeners: {
                        \"select\": validateInput
                    }
                });
            }

            if (needsDb) {
                installFormItems.push({
                    title: \"MySQL Settings\",
                    xtype: \"fieldset\",
                    defaults: {
                        width: 380
                    },
                    items: [
                        {
                            xtype: \"textfield\",
                            name: \"mysql_host_socket\",
                            id: \"mysql_host_socket\",
                            fieldLabel: \"Host / Socket\",
                            value: \"localhost\",
                            enableKeyEvents: true,
                            listeners: {
                                \"keyup\": validateInput
                            }
                        },
                        {
                            xtype: \"textfield\",
                            name: \"mysql_port\",
                            fieldLabel: \"Port\",
                            value: \"3306\"
                        },
                        {
                            xtype: \"textfield\",
                            name: \"mysql_username\",
                            id: \"mysql_username\",
                            fieldLabel: \"Username\",
                            enableKeyEvents: true,
                            listeners: {
                                \"keyup\": validateInput
                            }
                        },
                        {
                            xtype: \"textfield\",
                            name: \"mysql_password\",
                            fieldLabel: \"Password\"
                        },
                        {
                            xtype: \"textfield\",
                            name: \"mysql_database\",
                            id: \"mysql_database\",
                            fieldLabel: \"Database\",
                            enableKeyEvents: true,
                            listeners: {
                                \"keyup\": validateInput
                            }
                        }
                    ]
                });
            }

            installFormItems.push({
                title: \"Admin User\",
                xtype: \"fieldset\",
                defaults: {
                    width: 380
                },
                items: [
                    {
                        xtype: \"textfield\",
                        name: \"admin_username\",
                        id: \"admin_username\",
                        fieldLabel: \"Username\",
                        value: \"admin\",
                        enableKeyEvents: true,
                        listeners: {
                            \"keyup\": validateInput
                        }
                    },
                    {
                        xtype: \"fieldcontainer\",
                        layout: 'hbox',
                        items: [
                            {
                                xtype: \"textfield\",
                                width: 340,
                                name: \"admin_password\",
                                id: \"admin_password\",
                                fieldLabel: \"Password\",
                                enableKeyEvents: true,
                                listeners: {
                                    \"keyup\": validateInput
                                }
                            }, {
                                xtype: \"button\",
                                width: 32,
                                style: \"margin-left: 8px\",
                                iconCls: \"icon_generate\",
                                handler: function () {
                                    var pass;

                                    while(true) {
                                        pass = passwordGenerator(15);
                                        if(isValidPassword(pass)) {
                                            break;
                                        }
                                    }

                                    Ext.getCmp(\"admin_password\").setValue(pass);
                                    validateInput();
                                }
                            }
                        ]
                    }, {
                        xtype: \"container\",
                        id: \"credential_error\",
                        hidden: true
                    }
                ]
            });

            windowItems.push({
                xtype: \"form\",
                id: \"install_form\",
                defaultType: \"textfield\",
                bodyStyle: \"padding: 20px 10px 10px 10px\",
                items: installFormItems,
                hidden: (installFormItems.length === 0)
            });

            win = new Ext.Window({
                width: 450,
                closable: false,
                closeable: false,
                y: 20,
                items: windowItems,
                bbar: [{
                    id: \"check_button\",
                    text: \"Check Requirements\",
                    iconCls: \"icon_check\",
                    disabled: true,
                    handler: function () {
                        var checkWin = new Ext.Window({
                            width: 720,
                            scrollable: true,
                            height: 500,
                            title: 'Check Requirements',
                            html: 'Please wait ...'
                        });
                        checkWin.show();

                        var params = Ext.getCmp(\"install_form\").getForm().getFieldValues();
                        params['headless'] = 'true';

                        Ext.Ajax.request({
                            url: \"/install/check\",
                            method: \"post\",
                            params: params,
                            success: function (response) {
                                checkWin.update(response.responseText);
                            },
                            failure: function (response) {
                                checkWin.update(\"<h3>Ooops ... something went wrong</h3><p>Please check your database configuration values and your log files.</p>\");
                            }
                        });
                    }
                },\"->\",
                    {
                        id: \"install_button\",
                        text: \"<b>Install Now!</b>\",
                        iconCls: \"icon_ok\",
                        disabled: true,
                        handler: function (btn) {

                            btn.disable();
                            Ext.getCmp(\"install_form\").hide();
                            Ext.getCmp(\"check_button\").hide();

                            Ext.getCmp(\"install_errors\").show();
                            Ext.getCmp(\"install_errors\").update(\"Installing ...\");

                            var handleResponse = function (transport) {
                                try {
                                    var response = Ext.decode(transport.responseText);
                                } catch (e) {
                                    Ext.getCmp(\"install_errors\").update(transport.responseText);
                                    Ext.getCmp(\"install_form\").show();
                                    Ext.getCmp(\"check_button\").show();
                                    btn.enable();
                                }

                                if (response.success) {
                                    var date = new Date();
                                    location.href = \"/admin?_dc=\" + date.getTime();
                                } else {
                                    var errorString = '<b>ERROR(s) (please see var/installer/logs for details):</b><br><ul>';

                                    if (response.errors && response.errors.length > 0) {
                                        Ext.each(response.errors, function (error) {
                                            errorString += '<li>' + error + '</li>';
                                        });
                                    }

                                    errorString += '</ul>';

                                    Ext.getCmp(\"install_errors\").update(errorString);
                                    Ext.getCmp(\"install_form\").show();
                                    Ext.getCmp(\"check_button\").show();
                                    btn.enable();
                                }
                            };

                            Ext.Ajax.request({
                                url: \"/install/\",
                                method: \"post\",
                                params: Ext.getCmp(\"install_form\").getForm().getFieldValues(),
                                success: handleResponse,
                                failure: handleResponse
                            });
                        }
                    }
                ],
                listeners: {
                    afterrender: function () {
                        // no idea why this is necessary to layout the window correctly
                        window.setTimeout(function () {
                            win.updateLayout();

                            validateInput();
                        }, 1000);
                    }
                }
            });
        }

        win.show();
    });
    {% endverbatim %}
</script>

</body>
</html>
", "@PimcoreInstall/Install/install.html.twig", "/var/www/html/pimcore/pimcore/lib/Pimcore/Bundle/InstallBundle/Resources/views/Install/install.html.twig");
    }
}
