<?php

/* addons/navigation.html */
class __TwigTemplate_5088198ab331dad8954342549e21e5dea0e0cadd37f9a9808f4ea71bbdf509a8 extends Twig_Template
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
        // line 1
        echo "<!-- Main navigation block -->
<nav class=\"collapse navbar-collapse flat-nav-collapse\" aria-label=\"Primary\">
    ";
        // line 3
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 4
            echo "\t<div class=\"user-login hidden-lg hidden-md hidden-sm\">
\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t<li class=\"dropdown dropdown-avatar\">
\t\t\t\t<a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"user-menu\">
\t\t\t\t ";
            // line 8
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
                echo "&nbsp;";
            }
            echo "&nbsp;<span>";
            echo $this->env->getExtension('phpbb')->lang("WELCOME_INDEX");
            echo "&#44;&nbsp;";
            echo (isset($context["CURRENT_USERNAME_SIMPLE"]) ? $context["CURRENT_USERNAME_SIMPLE"] : null);
            echo "<i class=\"caret\"></i></span>
\t\t\t\t</a>
\t\t\t\t<ul class=\"dropdown-menu usermenu\">
\t\t\t\t   <li><a title=\"\" href=\"";
            // line 11
            echo (isset($context["U_UCP_PREFERENCE"]) ? $context["U_UCP_PREFERENCE"] : null);
            echo "\"><i class=\"fa fa-user\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("UCP_PROFILE");
            echo "</a></li>
\t\t\t\t   <li><a title=\"\" href=\"";
            // line 12
            echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
            echo "\"><i class=\"fa fa-inbox\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("UCP_MESSAGES");
            echo "&nbsp;&nbsp;<span class=\"badge badge-info\">";
            if (((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null) && (isset($context["S_USER_UNREAD_PRIVMSG"]) ? $context["S_USER_UNREAD_PRIVMSG"] : null))) {
                echo (isset($context["S_USER_UNREAD_PRIVMSG"]) ? $context["S_USER_UNREAD_PRIVMSG"] : null);
            } else {
                echo (isset($context["S_USER_NEW_PRIVMSG"]) ? $context["S_USER_NEW_PRIVMSG"] : null);
            }
            echo "</span></a></li>
\t\t\t\t   ";
            // line 13
            if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
                echo "\t
\t\t\t\t\t <li><a title=\"\" href=\"";
                // line 14
                echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
                echo "\"><i class=\"fa fa-bell\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "&nbsp;&nbsp;";
                if ( !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications", array()))) {
                } else {
                    echo "<span class=\"badge badge-info\">";
                    echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                    echo "</span>";
                }
                echo "</a></li>
\t\t\t\t   ";
            }
            // line 16
            echo "\t\t\t\t   ";
            // line 17
            echo "\t\t\t\t   <li><a title=\"\" href=\"";
            echo (isset($context["U_UCP_PROFILE_SETTINGS"]) ? $context["U_UCP_PROFILE_SETTINGS"] : null);
            echo "\"><i class=\"fa fa-cog\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("UCP_PROFILE_SETTINGS");
            echo "</a></li>
\t               ";
            // line 18
            if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
                echo "<li><a title=\"\" href=\"";
                echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
                echo "\"><i class=\"fa fa-user-md\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("ADMIN_PANEL_GENERAL");
                echo "</a></li>";
            }
            // line 19
            echo "\t               ";
            if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
                echo "\"><i class=\"fa fa-legal\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("MODERATOR_PANEL_GENERAL");
                echo "</a></li>";
            }
            // line 20
            echo "\t\t\t\t   ";
            if (((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null) &&  !((isset($context["U_ACP"]) ? $context["U_ACP"] : null) || (isset($context["U_MCP"]) ? $context["U_MCP"] : null)))) {
                echo "<li><a href=\"";
                echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
                echo "\"><i class=\"fa fa-user\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("USER_PANEL");
                echo "</a></li>";
            }
            // line 21
            echo "\t\t\t\t   ";
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\"><i class=\"fa fa-random\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 22
            echo "\t\t\t\t  <li><a title=\"\" href=\"";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\"><i class=\"fa fa-power-off\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("LOGOUT");
            echo "</a></li>
\t\t\t\t  ";
            // line 23
            // line 24
            echo "\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t</div>
\t";
        }
        // line 29
        echo "\t
      <ul class=\"nav navbar-nav navbar-nav-fancy\">
        <li class=\"\"><a href=\"";
        // line 31
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("HOME");
        echo "</a></li>
        <li class=\"dropdown\">
             <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("MAIN_FORUM");
        echo "&nbsp;<b class=\"caret\"></b></a>
             <span class=\"dropdown-arrow\"></span>
            <ul class=\"dropdown-menu\">
                ";
        // line 36
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) || ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)))) {
            // line 37
            echo "\t\t\t\t<li><a href=\"";
            echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
            echo "\"><i class=\"fa fa-search\"></i>";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t";
            // line 38
            if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                // line 39
                echo "\t\t\t\t<li><a href=\"";
                echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                echo "\"><i class=\"fa fa-comment\"></i>";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                // line 42
                echo "\t\t\t\t<li><a href=\"";
                echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                echo "\"><i class=\"fa fa-thumbs-up\"></i>";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                echo "</a></li>
\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t<li><a href=\"";
            echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
            echo "\"><i class=\"fa fa-star\"></i>";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t";
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
            // line 47
            echo "\t\t\t   <li><a href=\"";
            echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
            echo "\"><i class=\"fa fa-check\"></i>";
            echo $this->env->getExtension('phpbb')->lang("MARK_FORUMS_READ");
            echo "</a></li>
\t           ";
        }
        // line 49
        echo "\t\t\t   ";
        // line 50
        echo "\t\t\t   <li><a href=\"";
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\"><i class=\"fa fa-question-circle\"></i>";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a></li>
\t\t\t   ";
        // line 51
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('spaceace_ajaxchat', '__main__'));
        $this->env->loadTemplate('@spaceace_ajaxchat/event/overall_header_navigation_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 52
        echo "\t\t\t   ";
        if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
            echo "\"><i class=\"fa fa-group\"></i>";
            echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
            echo "</a></li>";
        }
        // line 53
        echo "\t\t\t  ";
        if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\"><i class=\"fa fa-trophy\"></i>";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 54
        echo "            </ul>
        </li>
\t\t
\t\t<li class=\"dropdown\">
             <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 58
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "&nbsp;<b class=\"caret\"></b></a>
             <span class=\"dropdown-arrow\"></span>
            <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 61
        echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
        echo "\"><i class=\"fa fa-search fa\"></i>";
        echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
        echo "</a></li>
                ";
        // line 62
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null))) {
            // line 63
            echo "\t\t\t\t ";
            if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
                echo " 
\t\t\t\t<li><a href=\"";
                // line 64
                echo (isset($context["U_SEARCH_SELF"]) ? $context["U_SEARCH_SELF"] : null);
                echo "\"><i class=\"fa fa-comments\"></i>";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</a></li>
\t\t\t\t<li><a href=\"";
                // line 65
                echo (isset($context["SITESPLAT_SEARCH_LAST_DAY"]) ? $context["SITESPLAT_SEARCH_LAST_DAY"] : null);
                echo "\"><i class=\"fa fa-sort-numeric-asc\"></i>";
                echo $this->env->getExtension('phpbb')->lang("SITESPLAT_SEARCH_LAST_DAY");
                echo "</a></li>
\t\t\t\t<li><a href=\"";
                // line 66
                echo (isset($context["SITESPLAT_SEARCH_WEEK"]) ? $context["SITESPLAT_SEARCH_WEEK"] : null);
                echo "\"><i class=\"fa fa-sort-alpha-asc\"></i>";
                echo $this->env->getExtension('phpbb')->lang("SITESPLAT_SEARCH_WEEK");
                echo "</a></li>
\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t";
        }
        // line 69
        echo "            </ul>
        </li>

        <li><a href=\"http://leguidedubonhomophobe.coding-moulins.xyz/forum/app.php/chat\">T'chat</a></li>
        <li><a href=\"http://leguidedubonhomophobe.coding-moulins.xyz\">Retourner sur le site</a></li>
      </ul>
\t  ";
        // line 75
        // line 76
        echo "\t  
\t";
        // line 77
        if ( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 78
            echo "    <ul class=\"nav navbar-nav navbar-right navbar-nav-fancy\">
\t    ";
            // line 79
            if ((( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) &&  !((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null)))) {
                // line 80
                echo "\t\t<li><a href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("CREATE_ACCOUNT");
                echo "</a></li>
\t   ";
            }
            // line 82
            echo "\t    ";
            if ( !(isset($context["ENABLE_POPUP_LOGIN"]) ? $context["ENABLE_POPUP_LOGIN"] : null)) {
                // line 83
                echo "\t\t\t<li><a href=\"";
                echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN");
                echo "</a></li>
\t\t";
            } else {
                // line 85
                echo "\t\t\t<li><a href=\"\" data-toggle=\"modal\" data-target=\"#modal-login\" role=\"button\" data-toggle=\"modal\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN");
                echo "</a></li>
\t\t";
            }
            // line 87
            echo "\t</ul>
\t";
        }
        // line 89
        echo "\t  
\t";
        // line 90
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 91
            echo "\t<div class=\"user-login hidden-xs\">
\t\t<ul class=\"nav navbar-nav navbar-right navbar-nav-fancy\">
\t\t";
            // line 93
            // line 94
            echo "\t\t<li><a class=\"btn-search\" href=\"javascript:void(0)\"><i class=\"fa fa-lightbulb-o\"></i></a></li>
\t\t";
            // line 95
            // line 96
            echo "\t\t";
            if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
                echo "\t
\t\t    <li class=\"dropdown dropdown-avatar dropdown-notification\">
\t\t\t  <a id=\"notification_list_button\" href=\"javascript:void(0)\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i>";
                // line 98
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications", array())) && (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null))) {
                    echo "<em class=\"notifications badge badge-danger\">";
                    echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                    echo "</em>";
                }
                echo "</a>
                <ul class=\"dropdown-menu user-login-drop arrow-up\">
                 <li><a href=\"";
                // line 100
                echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
                echo "\" class=\"notification-heading\">";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "</a></li>
                   ";
                // line 101
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "addons/navigation.html", 101)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 102
                echo "                </ul>
            </li>
\t\t";
            }
            // line 105
            echo "\t\t\t
\t\t\t<li class=\"dropdown dropdown-avatar\">
\t\t\t  <a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
\t\t\t   ";
            // line 108
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
                echo "&nbsp;";
            } else {
                echo "<img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/user4.png\" alt=\"No avatar\">";
            }
            echo "&nbsp;<span>";
            echo $this->env->getExtension('phpbb')->lang("WELCOME_INDEX");
            echo "&#44;&nbsp;";
            echo (isset($context["CURRENT_USERNAME_SIMPLE"]) ? $context["CURRENT_USERNAME_SIMPLE"] : null);
            echo "<i class=\"caret\"></i></span>
\t\t\t  </a>
                ";
            // line 110
            if ((isset($context["S_USER_NEW_PRIVMSG"]) ? $context["S_USER_NEW_PRIVMSG"] : null)) {
                echo "<em class=\"notifications-pm badge badge-warning\">";
                echo (isset($context["PM_NEW_COUNT_BADGE"]) ? $context["PM_NEW_COUNT_BADGE"] : null);
                echo "</em>";
            } elseif ((isset($context["S_USER_UNREAD_PRIVMSG"]) ? $context["S_USER_UNREAD_PRIVMSG"] : null)) {
                echo "<em class=\"notifications-pm badge badge-success\">";
                echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
                echo "</em>";
            }
            echo "                   
\t\t\t\t   <ul class=\"dropdown-menu user-login-drop arrow-up\">
                        <li>";
            // line 112
            if ((isset($context["S_USER_NEW_PRIVMSG"]) ? $context["S_USER_NEW_PRIVMSG"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\">";
                echo (isset($context["PM_NEW_COUNT"]) ? $context["PM_NEW_COUNT"] : null);
                echo "</a>";
            } elseif ((isset($context["S_USER_UNREAD_PRIVMSG"]) ? $context["S_USER_UNREAD_PRIVMSG"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\">";
                echo (isset($context["PM_UNREAD_COUNT"]) ? $context["PM_UNREAD_COUNT"] : null);
                echo "</a>";
            } else {
                echo "<a href=\"";
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("NO_PMS_INFO");
                echo "</a>";
            }
            echo "</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"navbar-wrapper\">
                              <div class=\"navbar-content navbar-avatar\">
                                    <div class=\"row\">
                                        <div class=\"col-md-5 col-xs-5\">
                                          ";
            // line 118
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
            } else {
                echo "<img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/user4.png\" alt=\"No avatar\">";
            }
            // line 119
            echo "                                            <p class=\"text-center\"><a href=\"";
            echo (isset($context["U_UCP_PROFILE_AVATAR"]) ? $context["U_UCP_PROFILE_AVATAR"] : null);
            echo "\">
                                                <small>";
            // line 120
            echo $this->env->getExtension('phpbb')->lang("CHANGE_AVATAR");
            echo "</small>
                                            </a></p>
                                        </div>
                                        <div class=\"col-md-7 col-xs-7\"><span>";
            // line 123
            echo (isset($context["CURRENT_USERNAME_FULL"]) ? $context["CURRENT_USERNAME_FULL"] : null);
            echo "</span>
                                            <p class=\"text-muted small\">";
            // line 124
            echo (isset($context["USER_EMAIL_MENU"]) ? $context["USER_EMAIL_MENU"] : null);
            echo "</p>
                                             ";
            // line 125
            if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
                echo "<a class=\"btn btn-info btn-sm btn-block\" href=\"";
                echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
                echo "\"><i class=\"fa fa-user-md\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("ADMIN_PANEL_GENERAL");
                echo "</a>";
            }
            // line 126
            echo "\t                                         ";
            if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
                echo "<a class=\"btn btn-warning btn-sm btn-block\" href=\"";
                echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
                echo "\"><i class=\"fa fa-legal\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("MODERATOR_PANEL_GENERAL");
                echo "</a>";
            }
            // line 127
            echo "                                             ";
            if (((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null) &&  !((isset($context["U_ACP"]) ? $context["U_ACP"] : null) || (isset($context["U_MCP"]) ? $context["U_MCP"] : null)))) {
                echo "<a class=\"btn btn-success btn-sm btn-block\" href=\"";
                echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
                echo "\"><i class=\"fa fa-user\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("USER_PANEL");
                echo "</a>";
            }
            // line 128
            echo "\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  ";
            // line 131
            // line 132
            echo "\t\t\t\t\t\t\t  <div class=\"navbar-footer\">
                                    <div class=\"navbar-footer-content\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6 col-xs-6\"><a class=\"btn btn-default btn-sm\" href=\"";
            // line 135
            echo (isset($context["U_UCP_PROFILE_SETTINGS"]) ? $context["U_UCP_PROFILE_SETTINGS"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("CHANGE_PASSWORD");
            echo "</a></div>
                                            <div class=\"col-md-6 col-xs-6\"><a class=\"btn btn-default btn-sm pull-right\" href=\"";
            // line 136
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("LOGOUT");
            echo "</a></div>
                                        </div>
                                    </div>
                               </div>
\t\t\t\t\t\t\t</div>
                        </li>
                    </ul>
            </li>
\t\t</ul>
\t</div>
\t";
        }
        // line 147
        echo "</nav>";
    }

    public function getTemplateName()
    {
        return "addons/navigation.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 147,  515 => 136,  509 => 135,  504 => 132,  503 => 131,  498 => 128,  489 => 127,  480 => 126,  472 => 125,  468 => 124,  464 => 123,  458 => 120,  453 => 119,  445 => 118,  418 => 112,  405 => 110,  389 => 108,  384 => 105,  379 => 102,  367 => 101,  361 => 100,  352 => 98,  346 => 96,  345 => 95,  342 => 94,  341 => 93,  337 => 91,  335 => 90,  332 => 89,  328 => 87,  322 => 85,  314 => 83,  311 => 82,  303 => 80,  301 => 79,  298 => 78,  296 => 77,  293 => 76,  292 => 75,  284 => 69,  281 => 68,  274 => 66,  268 => 65,  262 => 64,  257 => 63,  255 => 62,  249 => 61,  243 => 58,  237 => 54,  228 => 53,  219 => 52,  214 => 51,  207 => 50,  205 => 49,  197 => 47,  194 => 46,  186 => 44,  178 => 42,  175 => 41,  167 => 39,  165 => 38,  158 => 37,  156 => 36,  150 => 33,  143 => 31,  139 => 29,  132 => 24,  131 => 23,  124 => 22,  115 => 21,  106 => 20,  97 => 19,  89 => 18,  82 => 17,  80 => 16,  66 => 14,  62 => 13,  50 => 12,  44 => 11,  31 => 8,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!-- Main navigation block -->*/
/* <nav class="collapse navbar-collapse flat-nav-collapse" aria-label="Primary">*/
/*     <!-- IF S_USER_LOGGED_IN -->*/
/* 	<div class="user-login hidden-lg hidden-md hidden-sm">*/
/* 		<ul class="nav navbar-nav navbar-right">*/
/* 			<li class="dropdown dropdown-avatar">*/
/* 				<a href="javascript:void(0)" data-toggle="dropdown" class="user-menu">*/
/* 				 <!-- IF CURRENT_USER_AVATAR -->{CURRENT_USER_AVATAR}&nbsp;<!-- ENDIF -->&nbsp;<span>{L_WELCOME_INDEX}&#44;&nbsp;{CURRENT_USERNAME_SIMPLE}<i class="caret"></i></span>*/
/* 				</a>*/
/* 				<ul class="dropdown-menu usermenu">*/
/* 				   <li><a title="" href="{U_UCP_PREFERENCE}"><i class="fa fa-user"></i>&nbsp;{L_UCP_PROFILE}</a></li>*/
/* 				   <li><a title="" href="{U_PRIVATEMSGS}"><i class="fa fa-inbox"></i>&nbsp;{L_UCP_MESSAGES}&nbsp;&nbsp;<span class="badge badge-info"><!-- IF S_DISPLAY_PM and S_USER_UNREAD_PRIVMSG -->{S_USER_UNREAD_PRIVMSG}<!-- ELSE -->{S_USER_NEW_PRIVMSG}<!-- ENDIF --></span></a></li>*/
/* 				   <!-- IF S_NOTIFICATIONS_DISPLAY -->	*/
/* 					 <li><a title="" href="{U_VIEW_ALL_NOTIFICATIONS}"><i class="fa fa-bell"></i>&nbsp;{L_NOTIFICATIONS}&nbsp;&nbsp;<!-- IF not .notifications --><!-- ELSE --><span class="badge badge-info">{NOTIFICATIONS_COUNT}</span><!-- ENDIF --></a></li>*/
/* 				   <!-- ENDIF -->*/
/* 				   <!-- EVENT overall_header_mobile_navigation_append -->*/
/* 				   <li><a title="" href="{U_UCP_PROFILE_SETTINGS}"><i class="fa fa-cog"></i>&nbsp;{L_UCP_PROFILE_SETTINGS}</a></li>*/
/* 	               <!-- IF U_ACP --><li><a title="" href="{U_ACP}"><i class="fa fa-user-md"></i>&nbsp;{L_ADMIN_PANEL_GENERAL}</a></li><!-- ENDIF -->*/
/* 	               <!-- IF U_MCP --><li><a href="{U_MCP}"><i class="fa fa-legal"></i>&nbsp;{L_MODERATOR_PANEL_GENERAL}</a></li><!-- ENDIF -->*/
/* 				   <!-- IF S_REGISTERED_USER and not (U_ACP or U_MCP) --><li><a href="{U_PROFILE}"><i class="fa fa-user"></i>&nbsp;{L_USER_PANEL}</a></li><!-- ENDIF -->*/
/* 				   <!-- IF U_RESTORE_PERMISSIONS --><li><a href="{U_RESTORE_PERMISSIONS}"><i class="fa fa-random"></i>&nbsp;{L_RESTORE_PERMISSIONS}</a></li><!-- ENDIF -->*/
/* 				  <li><a title="" href="{U_LOGIN_LOGOUT}"><i class="fa fa-power-off"></i>&nbsp;{L_LOGOUT}</a></li>*/
/* 				  <!-- EVENT overall_header_mobile_navigation_ending -->*/
/* 				</ul>*/
/* 			</li>*/
/* 		</ul>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* 	*/
/*       <ul class="nav navbar-nav navbar-nav-fancy">*/
/*         <li class=""><a href="{U_INDEX}">{L_HOME}</a></li>*/
/*         <li class="dropdown">*/
/*              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">{L_MAIN_FORUM}&nbsp;<b class="caret"></b></a>*/
/*              <span class="dropdown-arrow"></span>*/
/*             <ul class="dropdown-menu">*/
/*                 <!-- IF S_DISPLAY_SEARCH or (S_USER_LOGGED_IN and not S_IS_BOT) -->*/
/* 				<li><a href="{U_SEARCH_UNANSWERED}"><i class="fa fa-search"></i>{L_SEARCH_UNANSWERED}</a></li>*/
/* 				<!-- IF S_LOAD_UNREADS -->*/
/* 				<li><a href="{U_SEARCH_UNREAD}"><i class="fa fa-comment"></i>{L_SEARCH_UNREAD}</a></li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF S_USER_LOGGED_IN -->*/
/* 				<li><a href="{U_SEARCH_NEW}"><i class="fa fa-thumbs-up"></i>{L_SEARCH_NEW}</a></li>*/
/* 				<!-- ENDIF -->*/
/* 				<li><a href="{U_SEARCH_ACTIVE_TOPICS}"><i class="fa fa-star"></i>{L_SEARCH_ACTIVE_TOPICS}</a></li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF not S_IS_BOT and U_MARK_FORUMS -->*/
/* 			   <li><a href="{U_MARK_FORUMS}"><i class="fa fa-check"></i>{L_MARK_FORUMS_READ}</a></li>*/
/* 	           <!-- ENDIF -->*/
/* 			   <!-- EVENT overall_header_navigation_prepend -->*/
/* 			   <li><a href="{U_FAQ}"><i class="fa fa-question-circle"></i>{L_FAQ}</a></li>*/
/* 			   <!-- EVENT overall_header_navigation_append -->*/
/* 			   <!-- IF S_DISPLAY_MEMBERLIST --><li><a href="{U_MEMBERLIST}"><i class="fa fa-group"></i>{L_MEMBERLIST}</a></li><!-- ENDIF -->*/
/* 			  <!-- IF U_TEAM --><li><a href="{U_TEAM}"><i class="fa fa-trophy"></i>{L_THE_TEAM}</a></li><!-- ENDIF -->*/
/*             </ul>*/
/*         </li>*/
/* 		*/
/* 		<li class="dropdown">*/
/*              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">{L_SEARCH}&nbsp;<b class="caret"></b></a>*/
/*              <span class="dropdown-arrow"></span>*/
/*             <ul class="dropdown-menu">*/
/*                 <li><a href="{U_SEARCH}"><i class="fa fa-search fa"></i>{L_SEARCH_ADV}</a></li>*/
/*                 <!-- IF not S_IS_BOT and S_USER_LOGGED_IN -->*/
/* 				 <!-- IF S_DISPLAY_SEARCH --> */
/* 				<li><a href="{U_SEARCH_SELF}"><i class="fa fa-comments"></i>{L_SEARCH_SELF}</a></li>*/
/* 				<li><a href="{SITESPLAT_SEARCH_LAST_DAY}"><i class="fa fa-sort-numeric-asc"></i>{L_SITESPLAT_SEARCH_LAST_DAY}</a></li>*/
/* 				<li><a href="{SITESPLAT_SEARCH_WEEK}"><i class="fa fa-sort-alpha-asc"></i>{L_SITESPLAT_SEARCH_WEEK}</a></li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- ENDIF -->*/
/*             </ul>*/
/*         </li>*/
/* */
/*         <li><a href="http://leguidedubonhomophobe.coding-moulins.xyz/forum/app.php/chat">T'chat</a></li>*/
/*         <li><a href="http://leguidedubonhomophobe.coding-moulins.xyz">Retourner sur le site</a></li>*/
/*       </ul>*/
/* 	  <!-- EVENT overall_header_navigation_new -->*/
/* 	  */
/* 	<!-- IF not S_USER_LOGGED_IN -->*/
/*     <ul class="nav navbar-nav navbar-right navbar-nav-fancy">*/
/* 	    <!-- IF not S_IS_BOT and S_REGISTER_ENABLED and not (S_SHOW_COPPA or S_REGISTRATION) -->*/
/* 		<li><a href="{U_REGISTER}">{L_CREATE_ACCOUNT}</a></li>*/
/* 	   <!-- ENDIF -->*/
/* 	    <!-- IF not ENABLE_POPUP_LOGIN -->*/
/* 			<li><a href="{U_LOGIN_LOGOUT}">{L_LOGIN}</a></li>*/
/* 		<!-- ELSE -->*/
/* 			<li><a href="" data-toggle="modal" data-target="#modal-login" role="button" data-toggle="modal">{L_LOGIN}</a></li>*/
/* 		<!-- ENDIF -->*/
/* 	</ul>*/
/* 	<!-- ENDIF -->*/
/* 	  */
/* 	<!-- IF S_USER_LOGGED_IN -->*/
/* 	<div class="user-login hidden-xs">*/
/* 		<ul class="nav navbar-nav navbar-right navbar-nav-fancy">*/
/* 		<!-- EVENT navigation_controls_before -->*/
/* 		<li><a class="btn-search" href="javascript:void(0)"><i class="fa fa-lightbulb-o"></i></a></li>*/
/* 		<!-- EVENT navigation_controls_after -->*/
/* 		<!-- IF S_NOTIFICATIONS_DISPLAY -->	*/
/* 		    <li class="dropdown dropdown-avatar dropdown-notification">*/
/* 			  <a id="notification_list_button" href="javascript:void(0)" data-toggle="dropdown"><i class="fa fa-bell"></i><!-- IF .notifications and NOTIFICATIONS_COUNT --><em class="notifications badge badge-danger">{NOTIFICATIONS_COUNT}</em><!-- ENDIF --></a>*/
/*                 <ul class="dropdown-menu user-login-drop arrow-up">*/
/*                  <li><a href="{U_VIEW_ALL_NOTIFICATIONS}" class="notification-heading">{L_NOTIFICATIONS}</a></li>*/
/*                    <!-- INCLUDE notification_dropdown.html -->*/
/*                 </ul>*/
/*             </li>*/
/* 		<!-- ENDIF -->*/
/* 			*/
/* 			<li class="dropdown dropdown-avatar">*/
/* 			  <a href="javascript:void(0)" data-toggle="dropdown">*/
/* 			   <!-- IF CURRENT_USER_AVATAR -->{CURRENT_USER_AVATAR}&nbsp;<!-- ELSE --><img src="{T_THEME_PATH}/images/user4.png" alt="No avatar"><!-- ENDIF -->&nbsp;<span>{L_WELCOME_INDEX}&#44;&nbsp;{CURRENT_USERNAME_SIMPLE}<i class="caret"></i></span>*/
/* 			  </a>*/
/*                 <!-- IF S_USER_NEW_PRIVMSG --><em class="notifications-pm badge badge-warning">{PM_NEW_COUNT_BADGE}</em><!-- ELSEIF S_USER_UNREAD_PRIVMSG --><em class="notifications-pm badge badge-success">{PRIVATE_MESSAGE_COUNT}</em><!-- ENDIF -->                   */
/* 				   <ul class="dropdown-menu user-login-drop arrow-up">*/
/*                         <li><!-- IF S_USER_NEW_PRIVMSG --><a href="{U_PRIVATEMSGS}">{PM_NEW_COUNT}</a><!-- ELSEIF S_USER_UNREAD_PRIVMSG--><a href="{U_PRIVATEMSGS}">{PM_UNREAD_COUNT}</a><!-- ELSE --><a href="{U_PRIVATEMSGS}">{L_NO_PMS_INFO}</a><!-- ENDIF --></li>*/
/* 						<li>*/
/* 							<div class="navbar-wrapper">*/
/*                               <div class="navbar-content navbar-avatar">*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-5 col-xs-5">*/
/*                                           <!-- IF CURRENT_USER_AVATAR -->{CURRENT_USER_AVATAR}<!-- ELSE --><img src="{T_THEME_PATH}/images/user4.png" alt="No avatar"><!-- ENDIF -->*/
/*                                             <p class="text-center"><a href="{U_UCP_PROFILE_AVATAR}">*/
/*                                                 <small>{L_CHANGE_AVATAR}</small>*/
/*                                             </a></p>*/
/*                                         </div>*/
/*                                         <div class="col-md-7 col-xs-7"><span>{CURRENT_USERNAME_FULL}</span>*/
/*                                             <p class="text-muted small">{USER_EMAIL_MENU}</p>*/
/*                                              <!-- IF U_ACP --><a class="btn btn-info btn-sm btn-block" href="{U_ACP}"><i class="fa fa-user-md"></i>&nbsp;{L_ADMIN_PANEL_GENERAL}</a><!-- ENDIF -->*/
/* 	                                         <!-- IF U_MCP --><a class="btn btn-warning btn-sm btn-block" href="{U_MCP}"><i class="fa fa-legal"></i>&nbsp;{L_MODERATOR_PANEL_GENERAL}</a><!-- ENDIF -->*/
/*                                              <!-- IF S_REGISTERED_USER and not (U_ACP or U_MCP) --><a class="btn btn-success btn-sm btn-block" href="{U_PROFILE}"><i class="fa fa-user"></i>&nbsp;{L_USER_PANEL}</a><!-- ENDIF -->*/
/* 										</div>*/
/*                                     </div>*/
/* 							  </div>*/
/* 							  <!-- EVENT navbar_header_profile_list_after -->*/
/* 							  <div class="navbar-footer">*/
/*                                     <div class="navbar-footer-content">*/
/*                                         <div class="row">*/
/*                                             <div class="col-md-6 col-xs-6"><a class="btn btn-default btn-sm" href="{U_UCP_PROFILE_SETTINGS}">{L_CHANGE_PASSWORD}</a></div>*/
/*                                             <div class="col-md-6 col-xs-6"><a class="btn btn-default btn-sm pull-right" href="{U_LOGIN_LOGOUT}">{L_LOGOUT}</a></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                </div>*/
/* 							</div>*/
/*                         </li>*/
/*                     </ul>*/
/*             </li>*/
/* 		</ul>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* </nav>*/
