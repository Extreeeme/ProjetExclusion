<?php

/* viewforum_body.html */
class __TwigTemplate_d9bc685e28a6199a5a82a5692731ebf189ab840ab7793feb3a60691d9c412511 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "<div class=\"side-segment\"><h3>";
        echo "<a href=\"";
        echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
        echo "\">";
        echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
        echo "</a>";
        echo "</h3></div> 
";
        // line 5
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('spaceace_ajaxchat', '__main__'));
        $this->env->loadTemplate('@spaceace_ajaxchat/event/viewforum_forum_title_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 6
        echo "
";
        // line 7
        if ((((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null) || (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) || (isset($context["U_MCP"]) ? $context["U_MCP"] : null))) {
            // line 8
            echo "<div>
\t<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the forum body -->
\t";
            // line 10
            if ((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null)) {
                echo "<div style=\"display: none;\">";
                echo (isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null);
                echo "<br /></div>";
            }
            // line 11
            echo "\t";
            if ((isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) {
                echo "<p><strong>";
                if ((isset($context["S_SINGLE_MODERATOR"]) ? $context["S_SINGLE_MODERATOR"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("MODERATOR");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("MODERATORS");
                }
                echo ":</strong> ";
                echo (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null);
                echo "</p>";
            }
            // line 12
            echo "</div>
";
        }
        // line 14
        echo "
";
        // line 15
        if ((isset($context["S_FORUM_RULES"]) ? $context["S_FORUM_RULES"] : null)) {
            // line 16
            echo "<div class=\"alert alert-info fade in\">
\t<button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t";
            // line 18
            if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                // line 19
                echo "\t\t\t<a href=\"";
                echo (isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null);
                echo "\"><i class=\"fa fa-link fa-rotate-90\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 20
                echo " 
\t\t<strong>";
                // line 21
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong>&nbsp;";
                echo (isset($context["FORUM_RULES"]) ? $context["FORUM_RULES"] : null);
                echo "
\t\t";
            }
            // line 23
            echo "</div>
";
        }
        // line 25
        echo "
";
        // line 26
        if ((isset($context["S_HAS_SUBFORUM"]) ? $context["S_HAS_SUBFORUM"] : null)) {
            // line 27
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
                // line 28
                echo "      <ul class=\"pagination pagination-sm pull-right\">
\t    <li><a href=\"";
                // line 29
                echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                echo "\" class=\"mark-read\" data-ajax=\"mark_forums_read\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_SUBFORUMS_READ");
                echo "</a></li>
      </ul>
<div class=\"space10\"></div>
";
            }
            // line 33
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 33)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 35
        echo "
";
        // line 36
        if (((((isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null)) || (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null))) {
            // line 37
            echo "<div class=\"row\"> 
   <div class=\"col-md-4 col-xs-7\">
\t";
            // line 39
            if ((isset($context["S_DISPLAY_SEARCHBOX"]) ? $context["S_DISPLAY_SEARCHBOX"] : null)) {
                // line 40
                echo "\t<div class=\"pull-left\">
\t\t<form method=\"get\" id=\"topic-search\" action=\"";
                // line 41
                echo (isset($context["S_SEARCHBOX_ACTION"]) ? $context["S_SEARCHBOX_ACTION"] : null);
                echo "\">
\t\t<fieldset>
\t\t <div class=\"input-group input-group-sm\">
\t\t   <input type=\"text\" class=\"form-control\" name=\"keywords\" id=\"search_keywords\" value=\"\" placeholder=\"";
                // line 44
                echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUM");
                echo "\"/>
\t\t  <div class=\"input-group-btn\">
\t\t   <button class=\"btn btn-default\" type=\"submit\" value=\"";
                // line 46
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "\"><span class=\"hidden-xs\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</span><i class=\"visible-xs fa fa-search fa-btn-fx\"></i></button>
\t\t  </div>
\t\t </div>
\t\t ";
                // line 49
                echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
                echo "
\t\t</fieldset>
\t\t</form>
\t</div>
\t";
            }
            // line 54
            echo "  </div>
  
  <div class=\"col-md-8\">
   <div class=\"pull-right\">\t 
     <ul class=\"pagination pagination-sm hidden-xs\">
\t    ";
            // line 59
            if (((isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                // line 60
                echo "\t\t  <li class=\"t-";
                if ((isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\">
\t\t   <a class=\"t-icon\" href=\"";
                // line 61
                echo (isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null);
                echo "\" title=\"";
                echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"t-";
                if ( !(isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-url=\"";
                echo (isset($context["U_WATCH_FORUM_TOGGLE"]) ? $context["U_WATCH_FORUM_TOGGLE"] : null);
                echo "\"></a>
\t\t  </li>
\t\t";
            }
            // line 64
            echo "\t\t";
            if ((( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null)) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())))) {
                echo "<li><a href=\"";
                echo (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null);
                echo "\" class=\"mark\" data-ajax=\"mark_topics_read\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_TOPICS_READ");
                echo "</a></li>";
            }
            // line 65
            echo "\t\t <li><a>";
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo "</a></li>
\t\t";
            // line 66
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 67
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 67)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 68
                echo "\t\t";
            } else {
                // line 69
                echo "\t\t\t<li class=\"active\"><a>";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a></li>\t
\t\t";
            }
            // line 71
            echo "     </ul>
\t
\t<div class=\"visible-xs\"> 
     <ul class=\"pagination pagination-sm\">
\t";
            // line 75
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null)) || (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null))) {
                // line 76
                echo "\t ";
                if (((isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null) &&  !(isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null))) {
                    echo "<li class=\"active\"><a>";
                    echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
                    echo "</a></li>";
                } elseif (((isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null) &&  !(isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null))) {
                    echo "<li class=\"active\"><a>";
                    echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
                    echo "</a></li>";
                }
                // line 77
                echo "\t";
            }
            // line 78
            echo "\t</ul>
\t</div>
   </div>
   </div>
   
</div>
";
        }
        // line 85
        echo "
";
        // line 86
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null))) {
            echo "  
<div class=\"clearfix\">
   <div class=\"pull-left\">
     ";
            // line 89
            // line 90
            echo "   ";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                // line 91
                echo "    <a href=\"";
                echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                echo "\" role=\"button\" class=\"btn btn-danger\"><i class=\"fa fa-lock\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("FORUM_LOCKED");
                echo "</a>
\t";
            } else {
                // line 93
                echo "\t<a href=\"";
                echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                echo "\" role=\"button\" class=\"btn btn-default btn-load\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb')->lang("LOADING");
                echo "&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-plus\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("POST_TOPIC_NEW");
                echo "</a>
    ";
            }
            // line 95
            echo "\t ";
            // line 96
            echo "   </div>
</div>
";
        }
        // line 99
        echo "
   <div class=\"space10\"></div>
    <div class=\"space10\"></div>

";
        // line 103
        if ((isset($context["S_NO_READ_ACCESS"]) ? $context["S_NO_READ_ACCESS"] : null)) {
            // line 104
            echo "\t<div class=\"alert alert-danger fade in\">
\t\t<strong>";
            // line 105
            echo $this->env->getExtension('phpbb')->lang("NO_READ_ACCESS");
            echo "</strong>
\t</div>\t
";
            // line 107
            if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                // line 108
                echo "  <section class=\"panel-login panel-w-form login-full\">
            <div class=\"row\">
                ";
                // line 110
                if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                    // line 111
                    echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
                    // line 113
                    echo $this->env->getExtension('phpbb')->lang("CREATE_ACCOUNT");
                    echo "</span>
\t\t\t\t</div>
                    <p>";
                    // line 115
                    echo $this->env->getExtension('phpbb')->lang("LOGIN_INFO");
                    echo "</p>
\t\t\t\t    <p><a href=\"";
                    // line 116
                    echo (isset($context["U_TERMS_USE"]) ? $context["U_TERMS_USE"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("TERMS_USE");
                    echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
                    echo (isset($context["U_PRIVACY"]) ? $context["U_PRIVACY"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("PRIVACY");
                    echo "</a></p>
\t\t\t\t\t<p><a href=\"";
                    // line 117
                    echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                    echo "\" class=\"btn btn-default\">";
                    echo $this->env->getExtension('phpbb')->lang("REGISTER");
                    echo "</a></p>
                </div>
\t\t\t\t";
                } else {
                    // line 120
                    echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
                    // line 122
                    echo $this->env->getExtension('phpbb')->lang("CREATE_ACCOUNT_DISABLED");
                    echo "</span>
\t\t\t\t</div>
                    <p>";
                    // line 124
                    echo $this->env->getExtension('phpbb')->lang("REGISTRATION_DISABLED");
                    echo "</p>
\t\t\t\t    <p><a href=\"";
                    // line 125
                    echo (isset($context["U_TERMS_USE"]) ? $context["U_TERMS_USE"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("TERMS_USE");
                    echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
                    echo (isset($context["U_PRIVACY"]) ? $context["U_PRIVACY"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("PRIVACY");
                    echo "</a></p>
\t\t\t\t\t<p><a href=\"mailto:";
                    // line 126
                    echo (isset($context["BOARD_EMAIL"]) ? $context["BOARD_EMAIL"] : null);
                    echo "?subject=Registrations Closed&body=Dear Admin, %0A%0AI Just wanted to let you know that the board registrations are closed. %0A%0AThis might be an error and I would like to register. %0A%0APlease let me know if this is possible.%0A%0AThanks!\" class=\"btn btn-default\">";
                    echo $this->env->getExtension('phpbb')->lang("CONTACT_WEBMASTER");
                    echo "</a></p>
                </div>
\t\t\t\t";
                }
                // line 129
                echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
                // line 131
                echo $this->env->getExtension('phpbb')->lang("SIGN_IN_ACCOUNT");
                echo "</span>
\t\t\t\t</div>
\t\t\t\t <form role=\"form\" method=\"post\" action=\"";
                // line 133
                echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
                echo "\">
\t\t\t\t  <fieldset>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t <label class=\"sr-only\" for=\"username\">";
                // line 136
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>
\t\t\t\t\t<div class=\"form-icon\">
\t\t\t\t\t <input type=\"text\" class=\"form-control input-lg\" name=\"username\" id=\"username\" placeholder=\"";
                // line 138
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
                echo "\">
\t\t\t\t\t <span class=\"fa fa-user login-form-icon\"></span>
\t\t\t\t\t</div> 
\t\t\t\t    </div> 
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t  <label class=\"sr-only\" for=\"password\">";
                // line 143
                echo $this->env->getExtension('phpbb')->lang("PASSWORD");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>
\t\t\t\t\t  <div class=\"form-icon\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control input-lg\" name=\"password\" id=\"password\" placeholder=\"";
                // line 145
                echo $this->env->getExtension('phpbb')->lang("PASSWORD");
                echo "\">
\t\t\t\t\t\t<span class=\"fa fa-lock login-form-icon\"></span>
\t\t\t\t\t  </div> 
\t\t\t\t\t</div>
\t\t\t\t <p>
\t\t\t\t    ";
                // line 150
                if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                    // line 151
                    echo "\t\t\t\t\t<div class=\"checkbox pull-right\">
\t\t\t\t\t  <label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\">";
                    // line 152
                    echo $this->env->getExtension('phpbb')->lang("LOGIN_REMEMBER");
                    echo "</label>
\t\t\t\t\t</div>
\t\t\t\t    ";
                }
                // line 155
                echo "\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" name=\"login\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("LOGIN");
                echo "\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb')->lang("LOADING_LOG_IN");
                echo " <i class='fa-spin fa fa-spinner fa-lg'></i>\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN_ME_IN");
                echo "</button>
\t\t\t\t\t";
                // line 156
                echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
                echo "
\t\t\t\t  </p>
\t\t\t\t  </fieldset>
\t\t\t\t  </form>
\t\t\t    </div>  
            </div>
    </section>
";
            }
        }
        // line 165
        echo "

";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 168
            echo "\t";
            if (( !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) &&  !$this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()))) {
                // line 169
                echo "\t</table>
\t</div>
\t</div>
\t";
            }
            // line 173
            echo "
\t";
            // line 174
            if (($this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()) ||  !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()))) {
                // line 175
                echo "\t<div class=\"panel panel-forum\">
\t<div class=\"panel-heading\">
\t ";
                // line 177
                if ((isset($context["S_DISPLAY_ACTIVE"]) ? $context["S_DISPLAY_ACTIVE"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("ACTIVE_TOPICS");
                } elseif (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo $this->env->getExtension('phpbb')->lang("ANNOUNCEMENTS");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("TOPICS");
                }
                // line 178
                echo "\t</div>
\t<div class=\"panel-inner\">
\t<table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
                // line 183
                echo $this->env->getExtension('phpbb')->lang("TITLE");
                echo "</th>
\t\t\t<th class=\"large110\" data-hide=\"phone\">";
                // line 184
                echo $this->env->getExtension('phpbb')->lang("TOPICS_POSTS_STATISTICS");
                echo "</th>
\t\t\t<th class=\"large21\" data-hide=\"phone\">";
                // line 185
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</th>
\t\t</tr>
\t</thead>\t\t
\t<tbody>
\t";
            }
            // line 190
            echo "\t    ";
            // line 191
            echo "\t\t<tr>
\t\t\t<td>
\t\t        ";
            // line 193
            if (($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array()) && (isset($context["S_TOPIC_ICONS"]) ? $context["S_TOPIC_ICONS"] : null))) {
                // line 194
                echo "\t\t\t\t<i class=\"topic-icon\" style=\"background-image: url(";
                echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                echo "); background-repeat: no-repeat;\" title=\"";
                echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                echo "\"></i>
\t\t\t\t";
            }
            // line 196
            echo "\t\t\t\t<span class=\"icon-wrapper\">
\t\t\t    <i class=\"row-icon-font icon-moon-default2";
            // line 197
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " icon-moon-voice2";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " icon-moon-podcast2";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " icon-moon-pushpin2";
            }
            if ($this->getAttribute($context["topicrow"], "S_HAS_POLL", array())) {
                echo " icon-moon-poll";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_MOVED", array())) {
                echo " icon-moon-moved";
            }
            if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                echo " forum-unread";
            } else {
                echo " forum-read";
            }
            echo "\" title=\"";
            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
            echo "\"></i>
\t\t\t\t</span>
\t\t\t\t<i class=\"row-icon-font-mini";
            // line 199
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_LOCKED", array())) {
                echo " icon-moon-lock forumview-lock";
            }
            echo "\" title=\"";
            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
            echo "\"></i>
\t\t\t  <div class=\"desc-wrapper\">
\t\t\t  ";
            // line 201
            // line 202
            echo "\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("VIEW_FIRST_UNREAD");
                echo "\"><i class=\"topic-newest fa fa-asterisk\"></i></a>";
            }
            echo "<a href=\"";
            echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
            echo "\" class=\"topictitle\">&nbsp;";
            echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
            echo "</a>
\t\t\t\t";
            // line 203
            if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPICS_ROW_NOT_APPROVED");
                echo "\">&nbsp;<i class=\"fa fa-question-circle\"></i></a>";
            }
            // line 204
            echo "\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPICS_ROW_REPORTED");
                echo "\">&nbsp;<i class=\"fa fa-exclamation-circle text-danger\"></i></a>";
            }
            // line 205
            echo "\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_DELETED", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPICS_ROW_DELETED");
                echo "\">&nbsp;<i class=\"fa fa-exclamation-circle text-danger\"></i></a>";
            }
            echo "<br />
\t\t\t\t";
            // line 206
            if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", array()))) {
                // line 207
                echo "\t\t\t\t    <ul class=\"pagination pagination-forum pagination-xs pull-right hidden-sm hidden-xs\">
\t\t\t\t\t\t";
                // line 208
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 209
                    echo "\t\t\t\t\t\t ";
                    if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                        // line 210
                        echo "\t\t\t\t\t\t ";
                    } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                        echo "<li class=\"active\">";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</li>
\t\t\t\t\t\t ";
                    } elseif ($this->getAttribute(                    // line 211
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                        echo "<li class=\"ellipsis\"><a>";
                        echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                        echo "</a></li>
\t\t\t\t\t\t ";
                    } elseif ($this->getAttribute(                    // line 212
$context["pagination"], "S_IS_NEXT", array())) {
                        // line 213
                        echo "\t\t\t\t\t\t";
                    } else {
                        // line 214
                        echo "\t\t\t\t\t\t <li><a href=\"";
                        echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                        echo "\">";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</a></li>
\t\t\t\t\t\t";
                    }
                    // line 216
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 217
                echo "\t\t\t\t\t</ul>\t\t
\t\t\t    ";
            }
            // line 219
            echo "\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                echo "<i class=\"fa fa-paperclip fa-flip-horizontal\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("ATTACH_FORUM");
                echo "\"></i>";
            }
            // line 220
            echo "\t\t\t\t";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo "&nbsp;";
            echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
            echo " 
\t\t\t\t<small>&nbsp;&#45;&nbsp;";
            // line 221
            echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
            echo "</small>
\t\t\t\t";
            // line 222
            if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array()) && ((isset($context["FORUM_ID"]) ? $context["FORUM_ID"] : null) != $this->getAttribute($context["topicrow"], "FORUM_ID", array())))) {
                echo "<small>&nbsp;&#45;&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("IN");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "&nbsp;<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "FORUM_NAME", array());
                echo "</a></small>";
            }
            // line 223
            echo "\t\t\t  ";
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('vse_topicpreview', '__main__'));
            $this->env->loadTemplate('@vse_topicpreview/event/topiclist_row_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            echo "\t
\t\t\t  </div>
\t\t\t</td>
\t\t\t<td class=\"stats-col\">
\t\t\t <span class=\"stats-wrapper\">
\t\t\t ";
            // line 228
            echo $this->getAttribute($context["topicrow"], "REPLIES", array());
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("REPLIES");
            echo "&nbsp;<br />";
            echo $this->getAttribute($context["topicrow"], "VIEWS", array());
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("VIEWS");
            echo "
\t\t\t </span>
\t\t\t</td>
\t\t\t<td> 
\t\t\t<span class=\"last-wrapper text-overflow\">
\t\t\t";
            // line 233
            // line 234
            echo "\t\t\t ";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo "&nbsp;";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
            echo "
\t\t\t ";
            // line 235
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo "<a title=\"";
                echo $this->env->getExtension('phpbb')->lang("FORUMLIST_LASTPOST");
                echo "\" href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\"><i class=\"mobile-post fa fa-sign-out\"></i></a>";
            }
            // line 236
            echo "\t\t\t <br /><small>";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
            echo "</small>
\t\t\t</span>
\t\t\t</td>
\t\t</tr>
\t    ";
            // line 240
            // line 241
            echo "\t";
            if ($this->getAttribute($context["topicrow"], "S_LAST_ROW", array())) {
                // line 242
                echo "\t </tbody>
\t</table>
\t</div>
    </div>
\t";
            }
            // line 247
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 249
            echo "\t";
            if ((isset($context["S_IS_POSTABLE"]) ? $context["S_IS_POSTABLE"] : null)) {
                // line 250
                echo "\t<div class=\"well\">
\t\t<strong>";
                // line 251
                echo $this->env->getExtension('phpbb')->lang("NO_TOPICS");
                echo "</strong>
\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "
";
        // line 256
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())) &&  !(isset($context["S_DISPLAY_ACTIVE"]) ? $context["S_DISPLAY_ACTIVE"] : null))) {
            // line 257
            echo "<div class=\"clearfix\">
 <div class=\"pull-left\">
";
            // line 259
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null))) {
                // line 260
                echo " ";
                // line 261
                if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                    // line 262
                    echo "    <a href=\"";
                    echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                    echo "\" role=\"button\" class=\"btn btn-danger\"><i class=\"fa fa-lock\"></i>&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("FORUM_LOCKED");
                    echo "</a>
\t";
                } else {
                    // line 264
                    echo "\t<a href=\"";
                    echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                    echo "\" role=\"button\" class=\"btn btn-default btn-load\" data-loading-text=\"";
                    echo $this->env->getExtension('phpbb')->lang("LOADING");
                    echo "&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-plus\"></i>&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("POST_TOPIC_NEW");
                    echo "</a>
";
                }
                // line 266
                echo " ";
            }
            // line 268
            echo "</div>

 <div class=\"pull-right\">
     <ul class=\"pagination pagination-sm hidden-xs\">
\t  <li><a href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
            // line 272
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</a></li>\t\t\t
      <li><a>";
            // line 273
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo "</a></li>
\t\t";
            // line 274
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 275
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 275)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 276
                echo "\t\t";
            } else {
                // line 277
                echo "\t\t\t<li class=\"active\"><a>";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a></li>\t
\t\t";
            }
            // line 279
            echo "     </ul>
\t 
\t<div class=\"visible-xs\"> 
\t<ul class=\"pagination pagination-sm\">
\t   <li><a href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\"><i class=\"fa fa-cog\"></i></a></li>\t\t\t
       ";
            // line 284
            if (((isset($context["BASE_URL"]) ? $context["BASE_URL"] : null) && ((isset($context["TOTAL_PAGES"]) ? $context["TOTAL_PAGES"] : null) > 6))) {
                // line 285
                echo "       <li><a class=\"pagination-trigger\" data-placement=\"top\">";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a></li>
\t   ";
            }
            // line 287
            echo "\t   <li class=\"active\"><a>";
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo "</a></li>
\t</ul>
\t</div>
 </div>
</div>

<div class=\"clearfix\">
   <div class=\"pull-right\">
\t<div class=\"visible-xs\"> 
\t <ul class=\"pagination pagination-sm\">
\t   ";
            // line 297
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 298
                echo "\t\t\t";
                $location = "pagination_mobile.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination_mobile.html", "viewforum_body.html", 298)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 299
                echo "\t\t";
            } else {
                // line 300
                echo "\t\t\t<li class=\"active\"><a>";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a></li>\t
\t\t";
            }
            // line 302
            echo "\t </ul>
\t</div>
   </div>
</div>\t
";
        }
        // line 307
        echo "\t
";
        // line 308
        $location = "jump_links.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jump_links.html", "viewforum_body.html", 308)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 309
        echo "<div class=\"space10\"></div>


    ";
        // line 312
        if (((isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 313
            echo "\t\t\t<form method=\"post\" action=\"";
            echo (isset($context["S_FORUM_ACTION"]) ? $context["S_FORUM_ACTION"] : null);
            echo "\">
\t\t\t";
            // line 314
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "viewforum_body.html", 314)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 315
            echo "\t\t\t</form>
\t";
        }
        // line 317
        echo "
";
        // line 318
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 319
            echo "<div class=\"row\">
";
            // line 320
            if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
                // line 321
                echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
<div class=\"panel panel-forum panel-whois\">
<div class=\"panel-heading\">";
                // line 323
                if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                }
                echo "</div>
 <div class=\"panel-body\">
\t<p>";
                // line 325
                echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
                echo "</p>
 </div> 
</div> 
</div> 
";
            }
            // line 330
            echo "
<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
<div class=\"panel panel-forum\">
<div class=\"panel-heading\">";
            // line 333
            echo $this->env->getExtension('phpbb')->lang("FORUM_PERMISSIONS");
            echo "</div>
  <div class=\"panel-body\">
\t<p>";
            // line 335
            if ((isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null)) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "rules", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                    echo $this->getAttribute($context["rules"], "RULE", array());
                    echo "<br />";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo $this->env->getExtension('phpbb')->lang("NOT_AVAILABLE");
            }
            echo "</p>
  </div> 
</div> 
 </div>
</div>
";
        }
        // line 341
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 341)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1051 => 341,  1030 => 335,  1025 => 333,  1020 => 330,  1012 => 325,  999 => 323,  995 => 321,  993 => 320,  990 => 319,  988 => 318,  985 => 317,  981 => 315,  969 => 314,  964 => 313,  962 => 312,  957 => 309,  945 => 308,  942 => 307,  935 => 302,  929 => 300,  926 => 299,  913 => 298,  911 => 297,  897 => 287,  891 => 285,  889 => 284,  882 => 279,  876 => 277,  873 => 276,  860 => 275,  858 => 274,  854 => 273,  850 => 272,  844 => 268,  841 => 266,  831 => 264,  823 => 262,  821 => 261,  819 => 260,  817 => 259,  813 => 257,  811 => 256,  808 => 255,  798 => 251,  795 => 250,  792 => 249,  786 => 247,  779 => 242,  776 => 241,  775 => 240,  767 => 236,  759 => 235,  752 => 234,  751 => 233,  737 => 228,  725 => 223,  714 => 222,  710 => 221,  703 => 220,  696 => 219,  692 => 217,  686 => 216,  678 => 214,  675 => 213,  673 => 212,  667 => 211,  660 => 210,  657 => 209,  653 => 208,  650 => 207,  648 => 206,  637 => 205,  628 => 204,  620 => 203,  605 => 202,  604 => 201,  595 => 199,  569 => 197,  566 => 196,  557 => 194,  555 => 193,  551 => 191,  549 => 190,  541 => 185,  537 => 184,  533 => 183,  526 => 178,  518 => 177,  514 => 175,  512 => 174,  509 => 173,  503 => 169,  500 => 168,  495 => 167,  491 => 165,  479 => 156,  470 => 155,  464 => 152,  461 => 151,  459 => 150,  451 => 145,  445 => 143,  437 => 138,  431 => 136,  425 => 133,  420 => 131,  416 => 129,  408 => 126,  398 => 125,  394 => 124,  389 => 122,  385 => 120,  377 => 117,  367 => 116,  363 => 115,  358 => 113,  354 => 111,  352 => 110,  348 => 108,  346 => 107,  341 => 105,  338 => 104,  336 => 103,  330 => 99,  325 => 96,  323 => 95,  313 => 93,  305 => 91,  302 => 90,  301 => 89,  295 => 86,  292 => 85,  283 => 78,  280 => 77,  269 => 76,  267 => 75,  261 => 71,  255 => 69,  252 => 68,  239 => 67,  237 => 66,  232 => 65,  223 => 64,  207 => 61,  198 => 60,  196 => 59,  189 => 54,  181 => 49,  173 => 46,  168 => 44,  162 => 41,  159 => 40,  157 => 39,  153 => 37,  151 => 36,  148 => 35,  134 => 33,  125 => 29,  122 => 28,  120 => 27,  118 => 26,  115 => 25,  111 => 23,  103 => 21,  100 => 20,  92 => 19,  90 => 18,  86 => 16,  84 => 15,  81 => 14,  77 => 12,  64 => 11,  58 => 10,  54 => 8,  52 => 7,  49 => 6,  44 => 5,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <!-- EVENT viewforum_forum_title_before -->*/
/* <div class="side-segment"><h3><!-- EVENT viewforum_forum_name_prepend --><a href="{U_VIEW_FORUM}">{FORUM_NAME}</a><!-- EVENT viewforum_forum_name_append --></h3></div> */
/* <!-- EVENT viewforum_forum_title_after -->*/
/* */
/* <!-- IF FORUM_DESC or MODERATORS or U_MCP -->*/
/* <div>*/
/* 	<!-- NOTE: remove the style="display: none" when you want to have the forum description on the forum body -->*/
/* 	<!-- IF FORUM_DESC --><div style="display: none;">{FORUM_DESC}<br /></div><!-- ENDIF -->*/
/* 	<!-- IF MODERATORS --><p><strong><!-- IF S_SINGLE_MODERATOR -->{L_MODERATOR}<!-- ELSE -->{L_MODERATORS}<!-- ENDIF -->:</strong> {MODERATORS}</p><!-- ENDIF -->*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_FORUM_RULES -->*/
/* <div class="alert alert-info fade in">*/
/* 	<button class="close" data-dismiss="alert"><span class="awe-remove-circle"></span></button>*/
/* 	<!-- IF U_FORUM_RULES -->*/
/* 			<a href="{U_FORUM_RULES}"><i class="fa fa-link fa-rotate-90"></i>&nbsp;{L_FORUM_RULES}</a>*/
/* 		<!-- ELSE --> */
/* 		<strong>{L_FORUM_RULES}{L_COLON}</strong>&nbsp;{FORUM_RULES}*/
/* 		<!-- ENDIF -->*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_HAS_SUBFORUM -->*/
/* <!-- IF not S_IS_BOT and U_MARK_FORUMS -->*/
/*       <ul class="pagination pagination-sm pull-right">*/
/* 	    <li><a href="{U_MARK_FORUMS}" class="mark-read" data-ajax="mark_forums_read">{L_MARK_SUBFORUMS_READ}</a></li>*/
/*       </ul>*/
/* <div class="space10"></div>*/
/* <!-- ENDIF -->*/
/* 	<!-- INCLUDE forumlist_body.html -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_DISPLAY_POST_INFO or .pagination or TOTAL_POSTS or TOTAL_TOPICS -->*/
/* <div class="row"> */
/*    <div class="col-md-4 col-xs-7">*/
/* 	<!-- IF S_DISPLAY_SEARCHBOX -->*/
/* 	<div class="pull-left">*/
/* 		<form method="get" id="topic-search" action="{S_SEARCHBOX_ACTION}">*/
/* 		<fieldset>*/
/* 		 <div class="input-group input-group-sm">*/
/* 		   <input type="text" class="form-control" name="keywords" id="search_keywords" value="" placeholder="{L_SEARCH_FORUM}"/>*/
/* 		  <div class="input-group-btn">*/
/* 		   <button class="btn btn-default" type="submit" value="{L_SEARCH}"><span class="hidden-xs">{L_SEARCH}</span><i class="visible-xs fa fa-search fa-btn-fx"></i></button>*/
/* 		  </div>*/
/* 		 </div>*/
/* 		 {S_SEARCH_LOCAL_HIDDEN_FIELDS}*/
/* 		</fieldset>*/
/* 		</form>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/*   </div>*/
/*   */
/*   <div class="col-md-8">*/
/*    <div class="pull-right">	 */
/*      <ul class="pagination pagination-sm hidden-xs">*/
/* 	    <!-- IF U_WATCH_FORUM_LINK and not S_IS_BOT -->*/
/* 		  <li class="t-<!-- IF S_WATCHING_FORUM -->unsubscribe<!-- ELSE -->subscribe<!-- ENDIF -->">*/
/* 		   <a class="t-icon" href="{U_WATCH_FORUM_LINK}" title="{S_WATCH_FORUM_TITLE}" data-ajax="toggle_link" data-toggle-class="t-<!-- IF not S_WATCHING_FORUM -->unsubscribe<!-- ELSE -->subscribe<!-- ENDIF -->" data-toggle-url="{U_WATCH_FORUM_TOGGLE}"></a>*/
/* 		  </li>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF not S_IS_BOT and U_MARK_TOPICS and .topicrow --><li><a href="{U_MARK_TOPICS}" class="mark" data-ajax="mark_topics_read">{L_MARK_TOPICS_READ}</a></li><!-- ENDIF -->*/
/* 		 <li><a>{TOTAL_TOPICS}</a></li>*/
/* 		<!-- IF .pagination -->*/
/* 			<!-- INCLUDE pagination.html -->*/
/* 		<!-- ELSE -->*/
/* 			<li class="active"><a>{PAGE_NUMBER}</a></li>	*/
/* 		<!-- ENDIF -->*/
/*      </ul>*/
/* 	*/
/* 	<div class="visible-xs"> */
/*      <ul class="pagination pagination-sm">*/
/* 	<!-- IF .pagination or TOTAL_POSTS or TOTAL_TOPICS -->*/
/* 	 <!-- IF TOTAL_POSTS and not NEWEST_USER --><li class="active"><a>{TOTAL_POSTS}</a></li><!-- ELSEIF TOTAL_TOPICS and not NEWEST_USER --><li class="active"><a>{TOTAL_TOPICS}</a></li><!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* 	</ul>*/
/* 	</div>*/
/*    </div>*/
/*    </div>*/
/*    */
/* </div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF not S_IS_BOT and S_DISPLAY_POST_INFO -->  */
/* <div class="clearfix">*/
/*    <div class="pull-left">*/
/*      <!-- EVENT viewforum_buttons_top_before -->*/
/*    <!-- IF S_IS_LOCKED -->*/
/*     <a href="{U_POST_NEW_TOPIC}" role="button" class="btn btn-danger"><i class="fa fa-lock"></i>&nbsp;{L_FORUM_LOCKED}</a>*/
/* 	<!-- ELSE -->*/
/* 	<a href="{U_POST_NEW_TOPIC}" role="button" class="btn btn-default btn-load" data-loading-text="{L_LOADING}&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>"><i class="fa fa-plus"></i>&nbsp;{L_POST_TOPIC_NEW}</a>*/
/*     <!-- ENDIF -->*/
/* 	 <!-- EVENT viewforum_buttons_top_after -->*/
/*    </div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
/*    <div class="space10"></div>*/
/*     <div class="space10"></div>*/
/* */
/* <!-- IF S_NO_READ_ACCESS -->*/
/* 	<div class="alert alert-danger fade in">*/
/* 		<strong>{L_NO_READ_ACCESS}</strong>*/
/* 	</div>	*/
/* <!-- IF not S_USER_LOGGED_IN and not S_IS_BOT -->*/
/*   <section class="panel-login panel-w-form login-full">*/
/*             <div class="row">*/
/*                 <!-- IF S_REGISTER_ENABLED -->*/
/* 				<div class="col-sm-6">*/
/* 				<div class="signin-text">*/
/* 					<span>{L_CREATE_ACCOUNT}</span>*/
/* 				</div>*/
/*                     <p>{L_LOGIN_INFO}</p>*/
/* 				    <p><a href="{U_TERMS_USE}">{L_TERMS_USE}</a>&nbsp;&#124;&nbsp;<a href="{U_PRIVACY}">{L_PRIVACY}</a></p>*/
/* 					<p><a href="{U_REGISTER}" class="btn btn-default">{L_REGISTER}</a></p>*/
/*                 </div>*/
/* 				<!-- ELSE -->*/
/* 				<div class="col-sm-6">*/
/* 				<div class="signin-text">*/
/* 					<span>{L_CREATE_ACCOUNT_DISABLED}</span>*/
/* 				</div>*/
/*                     <p>{L_REGISTRATION_DISABLED}</p>*/
/* 				    <p><a href="{U_TERMS_USE}">{L_TERMS_USE}</a>&nbsp;&#124;&nbsp;<a href="{U_PRIVACY}">{L_PRIVACY}</a></p>*/
/* 					<p><a href="mailto:{BOARD_EMAIL}?subject=Registrations Closed&body=Dear Admin, %0A%0AI Just wanted to let you know that the board registrations are closed. %0A%0AThis might be an error and I would like to register. %0A%0APlease let me know if this is possible.%0A%0AThanks!" class="btn btn-default">{L_CONTACT_WEBMASTER}</a></p>*/
/*                 </div>*/
/* 				<!-- ENDIF -->*/
/* 				<div class="col-sm-6">*/
/* 				<div class="signin-text">*/
/* 					<span>{L_SIGN_IN_ACCOUNT}</span>*/
/* 				</div>*/
/* 				 <form role="form" method="post" action="{S_LOGIN_ACTION}">*/
/* 				  <fieldset>*/
/* 					<div class="form-group">*/
/* 					 <label class="sr-only" for="username">{L_USERNAME}{L_COLON}</label>*/
/* 					<div class="form-icon">*/
/* 					 <input type="text" class="form-control input-lg" name="username" id="username" placeholder="{L_USERNAME}">*/
/* 					 <span class="fa fa-user login-form-icon"></span>*/
/* 					</div> */
/* 				    </div> */
/* 					<div class="form-group">*/
/* 					  <label class="sr-only" for="password">{L_PASSWORD}{L_COLON}</label>*/
/* 					  <div class="form-icon">*/
/* 						<input type="password" class="form-control input-lg" name="password" id="password" placeholder="{L_PASSWORD}">*/
/* 						<span class="fa fa-lock login-form-icon"></span>*/
/* 					  </div> */
/* 					</div>*/
/* 				 <p>*/
/* 				    <!-- IF S_AUTOLOGIN_ENABLED -->*/
/* 					<div class="checkbox pull-right">*/
/* 					  <label for="autologin"><input type="checkbox" name="autologin" id="autologin">{L_LOGIN_REMEMBER}</label>*/
/* 					</div>*/
/* 				    <!-- ENDIF -->*/
/* 					<button type="submit" class="btn btn-primary" name="login" value="{L_LOGIN}" data-loading-text="{L_LOADING_LOG_IN} <i class='fa-spin fa fa-spinner fa-lg'></i>">{L_LOGIN_ME_IN}</button>*/
/* 					{S_LOGIN_REDIRECT}*/
/* 				  </p>*/
/* 				  </fieldset>*/
/* 				  </form>*/
/* 			    </div>  */
/*             </div>*/
/*     </section>*/
/* <!-- ENDIF -->*/
/* <!-- ENDIF -->*/
/* */
/* */
/* <!-- BEGIN topicrow -->*/
/* 	<!-- IF not topicrow.S_TOPIC_TYPE_SWITCH and not topicrow.S_FIRST_ROW -->*/
/* 	</table>*/
/* 	</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF topicrow.S_FIRST_ROW or not topicrow.S_TOPIC_TYPE_SWITCH -->*/
/* 	<div class="panel panel-forum">*/
/* 	<div class="panel-heading">*/
/* 	 <!-- IF S_DISPLAY_ACTIVE -->{L_ACTIVE_TOPICS}<!-- ELSEIF topicrow.S_TOPIC_TYPE_SWITCH and (topicrow.S_POST_ANNOUNCE or topicrow.S_POST_GLOBAL) -->{L_ANNOUNCEMENTS}<!-- ELSE -->{L_TOPICS}<!-- ENDIF -->*/
/* 	</div>*/
/* 	<div class="panel-inner">*/
/* 	<table class="footable table table-striped table-primary table-hover">*/
/* 	<thead>*/
/* 		<tr>*/
/* 			<th data-class="expand">{L_TITLE}</th>*/
/* 			<th class="large110" data-hide="phone">{L_TOPICS_POSTS_STATISTICS}</th>*/
/* 			<th class="large21" data-hide="phone">{L_LAST_POST}</th>*/
/* 		</tr>*/
/* 	</thead>		*/
/* 	<tbody>*/
/* 	<!-- ENDIF -->*/
/* 	    <!-- EVENT viewforum_body_topicrow_row_before -->*/
/* 		<tr>*/
/* 			<td>*/
/* 		        <!-- IF topicrow.TOPIC_ICON_IMG and S_TOPIC_ICONS -->*/
/* 				<i class="topic-icon" style="background-image: url({T_ICONS_PATH}{topicrow.TOPIC_ICON_IMG}); background-repeat: no-repeat;" title="{topicrow.TOPIC_FOLDER_IMG_ALT}"></i>*/
/* 				<!-- ENDIF -->*/
/* 				<span class="icon-wrapper">*/
/* 			    <i class="row-icon-font icon-moon-default2<!-- IF topicrow.S_POST_ANNOUNCE --> icon-moon-voice2<!-- ENDIF --><!-- IF topicrow.S_POST_GLOBAL --> icon-moon-podcast2<!-- ENDIF --><!-- IF topicrow.S_POST_STICKY --> icon-moon-pushpin2<!-- ENDIF --><!-- IF topicrow.S_HAS_POLL --> icon-moon-poll<!-- ENDIF --><!-- IF topicrow.S_TOPIC_MOVED --> icon-moon-moved<!-- ENDIF --><!-- IF topicrow.S_UNREAD_TOPIC --> forum-unread<!-- ELSE --> forum-read<!-- ENDIF -->" title="{topicrow.TOPIC_FOLDER_IMG_ALT}"></i>*/
/* 				</span>*/
/* 				<i class="row-icon-font-mini<!-- IF topicrow.S_TOPIC_LOCKED --> icon-moon-lock forumview-lock<!-- ENDIF -->" title="{topicrow.TOPIC_FOLDER_IMG_ALT}"></i>*/
/* 			  <div class="desc-wrapper">*/
/* 			  <!-- EVENT topiclist_row_prepend -->*/
/* 				<!-- IF topicrow.S_UNREAD_TOPIC --><a href="{topicrow.U_NEWEST_POST}" title="{L_VIEW_FIRST_UNREAD}"><i class="topic-newest fa fa-asterisk"></i></a><!-- ENDIF --><a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">&nbsp;{topicrow.TOPIC_TITLE}</a>*/
/* 				<!-- IF topicrow.S_TOPIC_UNAPPROVED or topicrow.S_POSTS_UNAPPROVED --><a href="{topicrow.U_MCP_QUEUE}" title="{L_TOPICS_ROW_NOT_APPROVED}">&nbsp;<i class="fa fa-question-circle"></i></a><!-- ENDIF -->*/
/* 				<!-- IF topicrow.S_TOPIC_REPORTED --><a href="{topicrow.U_MCP_REPORT}" title="{L_TOPICS_ROW_REPORTED}">&nbsp;<i class="fa fa-exclamation-circle text-danger"></i></a><!-- ENDIF -->*/
/* 				<!-- IF topicrow.S_TOPIC_DELETED --><a href="{topicrow.U_MCP_QUEUE}" title="{L_TOPICS_ROW_DELETED}">&nbsp;<i class="fa fa-exclamation-circle text-danger"></i></a><!-- ENDIF --><br />*/
/* 				<!-- IF .topicrow.pagination -->*/
/* 				    <ul class="pagination pagination-forum pagination-xs pull-right hidden-sm hidden-xs">*/
/* 						<!-- BEGIN pagination -->*/
/* 						 <!-- IF topicrow.pagination.S_IS_PREV -->*/
/* 						 <!-- ELSEIF topicrow.pagination.S_IS_CURRENT --><li class="active">{topicrow.pagination.PAGE_NUMBER}</li>*/
/* 						 <!-- ELSEIF topicrow.pagination.S_IS_ELLIPSIS --><li class="ellipsis"><a>{L_ELLIPSIS}</a></li>*/
/* 						 <!-- ELSEIF topicrow.pagination.S_IS_NEXT -->*/
/* 						<!-- ELSE -->*/
/* 						 <li><a href="{topicrow.pagination.PAGE_URL}">{topicrow.pagination.PAGE_NUMBER}</a></li>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- END pagination -->*/
/* 					</ul>		*/
/* 			    <!-- ENDIF -->*/
/* 				<!-- IF topicrow.ATTACH_ICON_IMG --><i class="fa fa-paperclip fa-flip-horizontal" title="{L_ATTACH_FORUM}"></i><!-- ENDIF -->*/
/* 				{L_POST_BY_AUTHOR}&nbsp;{topicrow.TOPIC_AUTHOR_FULL} */
/* 				<small>&nbsp;&#45;&nbsp;{topicrow.FIRST_POST_TIME}</small>*/
/* 				<!-- IF topicrow.S_POST_GLOBAL and FORUM_ID != topicrow.FORUM_ID --><small>&nbsp;&#45;&nbsp;{L_IN}{L_COLON}&nbsp;<a href="{topicrow.U_VIEW_FORUM}">{topicrow.FORUM_NAME}</a></small><!-- ENDIF -->*/
/* 			  <!-- EVENT topiclist_row_append -->	*/
/* 			  </div>*/
/* 			</td>*/
/* 			<td class="stats-col">*/
/* 			 <span class="stats-wrapper">*/
/* 			 {topicrow.REPLIES}&nbsp;{L_REPLIES}&nbsp;<br />{topicrow.VIEWS}&nbsp;{L_VIEWS}*/
/* 			 </span>*/
/* 			</td>*/
/* 			<td> */
/* 			<span class="last-wrapper text-overflow">*/
/* 			<!-- EVENT avatars_topicview -->*/
/* 			 {L_POST_BY_AUTHOR}&nbsp;{topicrow.LAST_POST_AUTHOR_FULL}*/
/* 			 <!-- IF not S_IS_BOT --><a title="{L_FORUMLIST_LASTPOST}" href="{topicrow.U_LAST_POST}"><i class="mobile-post fa fa-sign-out"></i></a><!-- ENDIF -->*/
/* 			 <br /><small>{topicrow.LAST_POST_TIME}</small>*/
/* 			</span>*/
/* 			</td>*/
/* 		</tr>*/
/* 	    <!-- EVENT viewforum_body_topicrow_row_after -->*/
/* 	<!-- IF topicrow.S_LAST_ROW -->*/
/* 	 </tbody>*/
/* 	</table>*/
/* 	</div>*/
/*     </div>*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- BEGINELSE -->*/
/* 	<!-- IF S_IS_POSTABLE -->*/
/* 	<div class="well">*/
/* 		<strong>{L_NO_TOPICS}</strong>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* <!-- END topicrow -->*/
/* */
/* <!-- IF .topicrow and not S_DISPLAY_ACTIVE -->*/
/* <div class="clearfix">*/
/*  <div class="pull-left">*/
/* <!-- IF not S_IS_BOT and S_DISPLAY_POST_INFO -->*/
/*  <!-- EVENT viewforum_buttons_bottom_before -->*/
/* <!-- IF S_IS_LOCKED -->*/
/*     <a href="{U_POST_NEW_TOPIC}" role="button" class="btn btn-danger"><i class="fa fa-lock"></i>&nbsp;{L_FORUM_LOCKED}</a>*/
/* 	<!-- ELSE -->*/
/* 	<a href="{U_POST_NEW_TOPIC}" role="button" class="btn btn-default btn-load" data-loading-text="{L_LOADING}&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>"><i class="fa fa-plus"></i>&nbsp;{L_POST_TOPIC_NEW}</a>*/
/* <!-- ENDIF -->*/
/*  <!-- EVENT viewforum_buttons_bottom_after -->*/
/* <!-- ENDIF -->*/
/* </div>*/
/* */
/*  <div class="pull-right">*/
/*      <ul class="pagination pagination-sm hidden-xs">*/
/* 	  <li><a href="javascript:void(0);" data-target=".sorting" data-toggle="collapse">{L_OPTIONS}</a></li>			*/
/*       <li><a>{TOTAL_TOPICS}</a></li>*/
/* 		<!-- IF .pagination -->*/
/* 			<!-- INCLUDE pagination.html -->*/
/* 		<!-- ELSE -->*/
/* 			<li class="active"><a>{PAGE_NUMBER}</a></li>	*/
/* 		<!-- ENDIF -->*/
/*      </ul>*/
/* 	 */
/* 	<div class="visible-xs"> */
/* 	<ul class="pagination pagination-sm">*/
/* 	   <li><a href="javascript:void(0);" data-target=".sorting" data-toggle="collapse"><i class="fa fa-cog"></i></a></li>			*/
/*        <!-- IF BASE_URL and TOTAL_PAGES > 6 -->*/
/*        <li><a class="pagination-trigger" data-placement="top">{PAGE_NUMBER}</a></li>*/
/* 	   <!-- ENDIF -->*/
/* 	   <li class="active"><a>{TOTAL_TOPICS}</a></li>*/
/* 	</ul>*/
/* 	</div>*/
/*  </div>*/
/* </div>*/
/* */
/* <div class="clearfix">*/
/*    <div class="pull-right">*/
/* 	<div class="visible-xs"> */
/* 	 <ul class="pagination pagination-sm">*/
/* 	   <!-- IF .pagination -->*/
/* 			<!-- INCLUDE pagination_mobile.html -->*/
/* 		<!-- ELSE -->*/
/* 			<li class="active"><a>{PAGE_NUMBER}</a></li>	*/
/* 		<!-- ENDIF -->*/
/* 	 </ul>*/
/* 	</div>*/
/*    </div>*/
/* </div>	*/
/* <!-- ENDIF -->*/
/* 	*/
/* <!-- INCLUDE jump_links.html -->*/
/* <div class="space10"></div>*/
/* */
/* */
/*     <!-- IF S_SELECT_SORT_DAYS and not S_IS_BOT -->*/
/* 			<form method="post" action="{S_FORUM_ACTION}">*/
/* 			<!-- INCLUDE display_options.html -->*/
/* 			</form>*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- IF S_USER_LOGGED_IN -->*/
/* <div class="row">*/
/* <!-- IF S_DISPLAY_ONLINE_LIST -->*/
/* <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">*/
/* <div class="panel panel-forum panel-whois">*/
/* <div class="panel-heading"><!-- IF U_VIEWONLINE --><a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a><!-- ELSE -->{L_WHO_IS_ONLINE}<!-- ENDIF --></div>*/
/*  <div class="panel-body">*/
/* 	<p>{LOGGED_IN_USER_LIST}</p>*/
/*  </div> */
/* </div> */
/* </div> */
/* <!-- ENDIF -->*/
/* */
/* <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">*/
/* <div class="panel panel-forum">*/
/* <div class="panel-heading">{L_FORUM_PERMISSIONS}</div>*/
/*   <div class="panel-body">*/
/* 	<p><!-- IF S_DISPLAY_POST_INFO --><!-- BEGIN rules -->{rules.RULE}<br /><!-- END rules --><!-- ELSE -->{L_NOT_AVAILABLE}<!-- ENDIF --></p>*/
/*   </div> */
/* </div> */
/*  </div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- INCLUDE overall_footer.html -->*/
