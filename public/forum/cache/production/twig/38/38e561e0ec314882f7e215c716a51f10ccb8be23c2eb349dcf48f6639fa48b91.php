<?php

/* viewtopic_body.html */
class __TwigTemplate_0f8ed891b37d9dc6720bda2abe9ecfb2a6b3e6baafebf65f3977852a30a66e0f extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"side-segment\"><h3>";
        // line 3
        echo "<a href=\"";
        echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
        echo "\">";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "</a>";
        echo "</h3></div>
<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the topic body -->
";
        // line 5
        if ((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null)) {
            echo "<div style=\"display: none;\">";
            echo (isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null);
            echo "<br /></div>";
        }
        // line 6
        echo "\t
";
        // line 7
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('spaceace_ajaxchat', '__main__'));
        $this->env->loadTemplate('@spaceace_ajaxchat/event/viewtopic_topic_title_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 8
        echo "
";
        // line 9
        if ((isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) {
            // line 10
            echo "<p>
\t<strong>";
            // line 11
            if ((isset($context["S_SINGLE_MODERATOR"]) ? $context["S_SINGLE_MODERATOR"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATOR");
            } else {
                echo $this->env->getExtension('phpbb')->lang("MODERATORS");
            }
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong>&nbsp;";
            echo (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null);
            echo "
</p>
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
<div class=\"row\">
<div class=\"col-md-4 col-xs-6\">
";
        // line 28
        if ((isset($context["S_DISPLAY_SEARCHBOX"]) ? $context["S_DISPLAY_SEARCHBOX"] : null)) {
            // line 29
            echo "  <div class=\"pull-left\">
\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 30
            echo (isset($context["S_SEARCHBOX_ACTION"]) ? $context["S_SEARCHBOX_ACTION"] : null);
            echo "\">
\t <fieldset>
\t<div class=\"input-group input-group-sm\">
      <input type=\"text\" class=\"form-control\" name=\"keywords\" id=\"search_keywords\" value=\"\" placeholder=\"";
            // line 33
            echo $this->env->getExtension('phpbb')->lang("SEARCH_TOPIC");
            echo "\">
      <div class=\"input-group-btn\">
        <button class=\"btn btn-default\" type=\"submit\" value=\"";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\"><span class=\"hidden-xs\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</span><i class=\"visible-xs fa fa-search fa-btn-fx\"></i></button>
\t  </div>
    </div>
\t ";
            // line 38
            echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
            echo "
\t</fieldset>
    </form>
   </div>
";
        }
        // line 43
        echo "</div>

<div class=\"col-md-8\">
  <div class=\"pull-right\">\t 
     <ul class=\"pagination pagination-sm hidden-xs\">
\t\t <li class=\"active\"><a>";
        // line 48
        echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
        echo "</a></li>
\t\t ";
        // line 49
        if (((isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            echo "<li><a href=\"";
            echo (isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("VIEW_UNREAD_POST");
            echo "</a></li>";
        }
        // line 50
        echo "\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null))) {
            // line 51
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewtopic_body.html", 51)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 52
            echo "\t\t";
        } else {
            // line 53
            echo "\t\t\t<li class=\"active\"><a>";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a></li>\t
\t\t";
        }
        // line 55
        echo "     </ul>
\t
\t<div class=\"visible-xs\"> 
     <ul class=\"pagination pagination-sm\">
\t";
        // line 59
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null)) || (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null))) {
            // line 60
            echo "\t";
            if (((isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null) &&  !(isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null))) {
                echo "<li class=\"active\"><a>";
                echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
                echo "</a></li>";
            } elseif (((isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null) &&  !(isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null))) {
                echo "<li class=\"active\"><a>";
                echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
                echo "</a></li>";
            }
            // line 61
            echo "\t";
        }
        // line 62
        echo "\t</ul>
\t</div>
  </div>
</div> 

</div>

";
        // line 69
        // line 70
        echo "<div class=\"clearfix\">
    <div class=\"pull-left\">
   \t";
        // line 72
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_REPLY_INFO"]) ? $context["S_DISPLAY_REPLY_INFO"] : null))) {
            // line 73
            echo "\t ";
            // line 74
            echo "\t";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                // line 75
                echo "     <a class=\"btn btn-danger\" href=\"";
                echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
                echo "\" role=\"button\"><i class=\"fa fa-lock\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED_SHORT");
                echo "</a>
\t";
            } else {
                // line 77
                echo "\t <a class=\"btn btn-default btn-load\" href=\"";
                echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
                echo "\" role=\"button\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb')->lang("LOADING");
                echo "&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-plus\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("REPLY");
                echo "</a>
    ";
            }
            // line 79
            echo "\t ";
            // line 80
            echo "\t";
        }
        // line 81
        echo "   </div>
   <div class=\"pull-right\">
    ";
        // line 83
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 83)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 84
        echo "   </div>
</div>
";
        // line 86
        // line 87
        echo "
<div class=\"space10\"></div>
 <div class=\"space10\"></div>

";
        // line 91
        // line 92
        echo " 
";
        // line 93
        if ((isset($context["S_HAS_POLL"]) ? $context["S_HAS_POLL"] : null)) {
            // line 94
            echo "<form method=\"post\" action=\"";
            echo (isset($context["S_POLL_ACTION"]) ? $context["S_POLL_ACTION"] : null);
            echo "\" data-ajax=\"vote_poll\" class=\"topic_poll\">
<fieldset>
<div class=\"panel panel-default panel-poll\">
 <div class=\"panel-heading\">
    <h3>";
            // line 98
            echo (isset($context["POLL_QUESTION"]) ? $context["POLL_QUESTION"] : null);
            echo "</h3>
\t";
            // line 99
            if (((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null) && (isset($context["L_POLL_LENGTH"]) ? $context["L_POLL_LENGTH"] : null))) {
                // line 100
                echo "\t<div class=\"alert alert-info fade in\">
     <i class=\"fa fa-bar-chart-o\"></i>&nbsp;";
                // line 101
                echo $this->env->getExtension('phpbb')->lang("POLL_LENGTH");
                echo "
    </div>
\t";
            }
            // line 104
            echo " </div>
<div class=\"panel-body\">
<div class=\"inner\">
";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "poll_option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 108
                // line 109
                echo "<div class=\"clearfix";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo " voted";
                }
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_MOST_VOTES", array())) {
                    echo " most-votes";
                }
                echo "\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-poll-option-id=\"";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                echo "\">
<div class=\"pull-left\">
";
                // line 111
                if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                    // line 112
                    echo " <label for=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\">";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                    echo "</label>
";
                } else {
                    // line 114
                    echo " ";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                    echo "
";
                }
                // line 116
                echo "
<div class=\"poll_option_select pull-left\">
";
                // line 118
                if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                    // line 119
                    if ((isset($context["S_IS_MULTI_CHOICE"]) ? $context["S_IS_MULTI_CHOICE"] : null)) {
                        // line 120
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />
";
                    } else {
                        // line 122
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                }
                // line 124
                echo "</div>
</div>
   <div class=\"poll_option_percent";
                // line 126
                if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                    echo " hidden";
                }
                echo " pull-right\">
    <span class=\"badge";
                // line 127
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo " badge-info";
                }
                echo "\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo ">";
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array()) == 0)) {
                    echo $this->env->getExtension('phpbb')->lang("NO_VOTES");
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array());
                }
                echo "</span>
   </div>
<div class=\"space-poll\"></div>   
<div class=\"resultbar";
                // line 130
                if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                    echo " hidden";
                }
                echo " progress progress-fix clearfix\">
 <div role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar progress-bar-striped";
                // line 131
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 20)) {
                    echo " pollbar1 progress-bar-danger";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 40)) {
                    echo " pollbar2 progress-bar-warning";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 60)) {
                    echo " pollbar3 progress-bar-info";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 80)) {
                    echo " pollbar4 progress-bar-primary";
                } else {
                    echo " pollbar5 progress-bar-success active";
                }
                echo "\" style=\"width:";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", array());
                echo ";min-width:2em;\">";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", array());
                echo "</div>
</div>
</div>
";
                // line 134
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "</div>
</div>
<div class=\"panel-footer\">
  <div class=\"clearfix\">
    <ul class=\"list-unstyled pull-left\">
\t";
            // line 141
            if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                // line 142
                echo "    <li class=\"poll_view_results\"><a href=\"";
                echo (isset($context["U_VIEW_RESULTS"]) ? $context["U_VIEW_RESULTS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_RESULTS");
                echo "</a></li>
\t";
            }
            // line 144
            echo "\t<li class=\"poll_total_votes";
            if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                echo " hidden";
            }
            echo "\">
\t <span class=\"resultbar\">";
            // line 145
            echo $this->env->getExtension('phpbb')->lang("TOTAL_VOTES");
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;<span class=\"poll_total_vote_cnt\">";
            echo (isset($context["TOTAL_VOTES"]) ? $context["TOTAL_VOTES"] : null);
            echo "</span></span>
\t</li>
\t";
            // line 147
            if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                // line 148
                echo "\t<li class=\"poll_max_votes\">";
                echo $this->env->getExtension('phpbb')->lang("MAX_VOTES");
                echo "</li>
\t";
            }
            // line 150
            echo "\t</ul>
\t <div class=\"vote-submitted hidden\">&nbsp;<span class=\"label label-success\">";
            // line 151
            echo $this->env->getExtension('phpbb')->lang("VOTE_SUBMITTED");
            echo "</span></div>
\t";
            // line 152
            if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                // line 153
                echo "\t<div class=\"poll_vote pull-right\">
\t <div class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                // line 154
                echo $this->env->getExtension('phpbb')->lang("SUBMIT_VOTE");
                echo "\" class=\"btn btn-default btn-poll\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb')->lang("CASTING_VOTE");
                echo "\" autocomplete=\"off\" /></div>
\t</div>
\t";
            }
            // line 157
            echo "  </div>
</div>
    ";
            // line 159
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t ";
            // line 160
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
</div>
</fieldset>
</form>
";
        }
        // line 165
        // line 166
        echo "
";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 168
            // line 169
            echo "  ";
            if ($this->getAttribute($context["postrow"], "S_FIRST_UNREAD", array())) {
                // line 170
                echo "   <a id=\"unread\" class=\"anchor\"";
                if ((isset($context["S_UNREAD_VIEW"]) ? $context["S_UNREAD_VIEW"] : null)) {
                    echo " data-url=\"";
                    echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
                    echo "\"";
                }
                echo "></a>
  ";
            }
            // line 172
            echo "<div id=\"p";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\" class=\"clearfix\">\t
    ";
            // line 173
            if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                // line 174
                echo "\t <div class=\"ignore alert alert-default\" id=\"post_hidden";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\"";
                if ( !$this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                    echo " style=\"display: none;\"";
                }
                echo ">
\t  ";
                // line 175
                echo $this->getAttribute($context["postrow"], "L_POST_DELETED_MESSAGE", array());
                echo "<br />
\t  <strong>";
                // line 176
                echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                echo "</strong>
\t </div>
\t";
            } elseif ($this->getAttribute(            // line 178
$context["postrow"], "S_IGNORE_POST", array())) {
                // line 179
                echo "\t <div class=\"ignore alert alert-warning\" id=\"post_hidden";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\"";
                if ( !$this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                    echo " style=\"display: none;\"";
                }
                echo ">
\t\t";
                // line 180
                echo $this->getAttribute($context["postrow"], "L_IGNORE_POST", array());
                echo "<br />
\t\t<strong>";
                // line 181
                echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                echo "</strong>
\t </div>
\t";
            }
            // line 184
            echo "\t
 <article ";
            // line 185
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo "style=\"display: none;\"";
            }
            echo ">
  <div class=\"panel";
            // line 186
            if ((((isset($context["MINI_PROFILE_POSITION"]) ? $context["MINI_PROFILE_POSITION"] : null) == "alternate") && ($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 1))) {
                echo " alt-odd";
            }
            echo " forum-answer";
            if ($this->getAttribute($context["postrow"], "S_ONLINE", array())) {
                echo " mobile-online";
            }
            echo "\">
    <div class=\"panel-heading\">
\t <div class=\"clearfix\">
         <div id=\"profile";
            // line 189
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">
\t\t\t<div class=\"avatar-over";
            // line 190
            if ((((isset($context["MINI_PROFILE_POSITION"]) ? $context["MINI_PROFILE_POSITION"] : null) == "right") || (((isset($context["MINI_PROFILE_POSITION"]) ? $context["MINI_PROFILE_POSITION"] : null) == "alternate") && ($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 0)))) {
                echo " pull-right";
            } else {
                echo " pull-left";
            }
            echo "\">
\t\t\t\t";
            // line 191
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                // line 192
                echo "\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                    echo "<a href=\"javascript:void(0)\" data-toggle=\"modal\" data-target=\"#mini";
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("USER_MINI_PROFILE");
                    echo "\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    echo "</a>";
                } else {
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                }
                // line 193
                echo "\t\t\t\t";
            } else {
                // line 194
                echo "\t\t\t\t\t<a href=\"javascript:void(0)\" data-toggle=\"modal\" data-target=\"#mini";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("USER_MINI_PROFILE");
                echo "\"><img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/no_avatar.gif\" alt=\"\"></a>
\t\t\t\t";
            }
            // line 196
            echo "\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "S_ONLINE", array())) {
                echo "<span class=\"status\"></span>";
            }
            // line 197
            echo "\t\t\t</div>
         </div>
\t\t<div class=\"side-segment\"><h3 style=\"border-bottom: 4px solid #e5e5e5;\">";
            // line 199
            if ($this->getAttribute($context["postrow"], "POST_ICON_IMG", array())) {
                echo "<img class=\"post-icon\" src=\"";
                echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_HEIGHT", array());
                echo "\" alt=\"\"/>";
            }
            echo "<a href=\"#p";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
            echo "</a><span class=\"pull-right post-id hidden-xs\"><a href=\"";
            echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("POST");
            echo "\">&#35;";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "</a></span></h3></div>    
\t\t<div class=\"clearfix\">
\t\t<div class=\"text-muted";
            // line 201
            if ((((isset($context["MINI_PROFILE_POSITION"]) ? $context["MINI_PROFILE_POSITION"] : null) == "alternate") && ($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 1))) {
                echo " alt-odd-time";
            }
            echo " ";
            if ((((isset($context["MINI_PROFILE_POSITION"]) ? $context["MINI_PROFILE_POSITION"] : null) == "right") || (((isset($context["MINI_PROFILE_POSITION"]) ? $context["MINI_PROFILE_POSITION"] : null) == "alternate") && ($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 0)))) {
                echo " pull-right prof-right";
            } else {
                echo " pull-left";
            }
            echo "\">
\t\t";
            // line 202
            // line 203
            echo "\t\t";
            echo $this->env->getExtension('phpbb')->lang("BY");
            if ( !$this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            } else {
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            }
            echo "<span class=\"hidden-xs\">&nbsp;&#45;&nbsp;<i class=\"fa fa-clock-o\"></i>&nbsp;";
            echo $this->getAttribute($context["postrow"], "POST_DATE", array());
            echo "</span>\t
\t\t";
            // line 204
            // line 205
            echo "\t\t</div>
\t\t<div class=\"";
            // line 206
            if ((((isset($context["MINI_PROFILE_POSITION"]) ? $context["MINI_PROFILE_POSITION"] : null) == "right") || (((isset($context["MINI_PROFILE_POSITION"]) ? $context["MINI_PROFILE_POSITION"] : null) == "alternate") && ($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 0)))) {
                echo "pull-left";
            } else {
                echo "pull-right";
            }
            echo "\">
\t\t<div role=\"toolbar\" class=\"btn-toolbar\">
\t\t";
            // line 208
            // line 209
            echo "\t\t";
            // line 210
            echo "\t\t 
\t\t    ";
            // line 211
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null))) {
                // line 212
                echo "\t\t\t";
                $value = ((((($this->getAttribute($context["postrow"], "U_EDIT", array()) || $this->getAttribute($context["postrow"], "U_DELETE", array())) || $this->getAttribute($context["postrow"], "U_REPORT", array())) || $this->getAttribute($context["postrow"], "U_WARN", array())) || $this->getAttribute($context["postrow"], "U_INFO", array())) || $this->getAttribute($context["postrow"], "U_QUOTE", array()));
                $context['definition']->set('SHOW_POST_BUTTONS', $value);
                // line 213
                echo "\t\t\t";
                if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_POST_BUTTONS", array())) {
                    // line 214
                    echo "                <div class=\"btn-group btn-group-sm\" role=\"group\">
\t\t\t\t  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-cog\"></i>&nbsp;<i class=\"fa fa-level-down\"></i></button>
\t\t\t\t <ul class=\"dropdown-menu";
                    // line 216
                    if ((((isset($context["MINI_PROFILE_POSITION"]) ? $context["MINI_PROFILE_POSITION"] : null) == "right") || (((isset($context["MINI_PROFILE_POSITION"]) ? $context["MINI_PROFILE_POSITION"] : null) == "alternate") && ($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 0)))) {
                        echo " dropdown-menu-left";
                    } else {
                        echo " dropdown-menu-right";
                    }
                    echo "\" role=\"menu\">
\t\t\t\t  ";
                    // line 217
                    // line 218
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_QUOTE", array())) {
                        echo "<li class=\"visible-xs\"><a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_QUOTE", array());
                        echo "\" title=\"\" role=\"button\"><i class=\"fa fa-comments\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb')->lang("QUOTE");
                        echo "</a></li>";
                    }
                    // line 219
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_EDIT", array())) {
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_EDIT", array());
                        echo "\" title=\"\" role=\"button\" class=\"qlr-trigger\"><i class=\"fa fa-pencil\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb')->lang("EDIT_POST");
                        echo "</a></li>";
                    }
                    // line 220
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_DELETE", array())) {
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_DELETE", array());
                        echo "\" title=\"\" role=\"button\"><i class=\"fa fa-times\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                        echo "</a></li>";
                    }
                    // line 221
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_REPORT", array())) {
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_REPORT", array());
                        echo "\" title=\"\" role=\"button\"><i class=\"fa fa-exclamation-circle\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb')->lang("REPORT_POST");
                        echo "</a></li>";
                    }
                    // line 222
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_WARN", array())) {
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_WARN", array());
                        echo "\" title=\"\" role=\"button\"><i class=\"fa fa-minus-circle\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                        echo "</a></li>";
                    }
                    // line 223
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_INFO", array())) {
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_INFO", array());
                        echo "\" title=\"\" role=\"button\"><i class=\"fa fa-info-circle\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb')->lang("INFORMATION");
                        echo "</a></li>";
                    }
                    // line 224
                    echo "\t\t\t\t  ";
                    // line 225
                    echo "\t\t\t\t </ul>
\t\t\t\t</div>
\t\t\t\t";
                    // line 227
                    if ($this->getAttribute($context["postrow"], "U_QUOTE", array())) {
                        // line 228
                        echo "                <div class=\"btn-group btn-group-sm hidden-xs visible-sm visible-md visible-lg\" role=\"group\">
                 <a class=\"btn btn-default btn-sm\" href=\"";
                        // line 229
                        echo $this->getAttribute($context["postrow"], "U_QUOTE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("REPLY_WITH_QUOTE");
                        echo "\" role=\"button\"><i class=\"fa fa-comments\"></i></a>
                </div>
\t\t\t\t";
                    }
                    // line 232
                    echo "\t\t\t";
                }
                // line 233
                echo "\t\t    ";
            }
            // line 234
            echo "\t\t 
\t\t";
            // line 235
            // line 236
            echo "\t\t</div>
\t\t</div>
\t\t</div>  
\t\t
\t </div>
\t</div>
\t\t\t
    <div class=\"panel-body\">
        <div class=\"clearfix\">
\t\t\t<div class=\"postbody\">
                <div id=\"post_content";
            // line 246
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">
\t\t\t\t";
            // line 247
            // line 248
            echo "\t\t\t\t\t <span class=\"post-date pull-left visible-xs\">&#45;&nbsp;<i class=\"fa fa-clock-o\"></i>&nbsp;";
            echo $this->getAttribute($context["postrow"], "POST_DATE", array());
            echo "</span>
\t\t\t\t\t <span class=\"post-id pull-right visible-xs\"><a href=\"";
            // line 249
            echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("POST");
            echo "\">&#35;";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "</a></span>
\t\t\t\t";
            // line 250
            // line 251
            echo "\t\t        
\t\t\t\t\t";
            // line 252
            if ($this->getAttribute($context["postrow"], "S_POST_UNAPPROVED", array())) {
                // line 253
                echo "\t\t\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t\t\t<div class=\"alert alert-warning fade in\">
\t\t\t\t\t\t\t<button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t\t\t\t\t<i class=\"fa fa-warning\"></i><strong>&nbsp;";
                // line 256
                echo $this->env->getExtension('phpbb')->lang("POST_UNAPPROVED_ACTION");
                echo "</strong>
\t\t\t\t\t\t\t <input class=\"btn btn-danger btn-sm\" type=\"submit\" value=\"";
                // line 257
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t\t\t <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"";
                // line 258
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "\" name=\"action[approve]\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 259
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" />
\t\t\t\t\t\t\t";
                // line 260
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t";
            } elseif ($this->getAttribute(            // line 263
$context["postrow"], "S_POST_DELETED", array())) {
                // line 264
                echo "\t\t\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t\t\t<div class=\"alert alert-warning fade in\">
\t\t\t\t\t\t\t<button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t\t\t\t\t<i class=\"fa fa-warning\"></i><strong>&nbsp;";
                // line 267
                echo $this->env->getExtension('phpbb')->lang("POST_DELETED_ACTION");
                echo "</strong>
\t\t\t\t\t\t\t";
                // line 268
                if ($this->getAttribute($context["postrow"], "S_DELETE_PERMANENT", array())) {
                    // line 269
                    echo "\t\t\t\t\t\t\t <input class=\"btn btn-danger btn-sm\" type=\"submit\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("DELETE");
                    echo "\" name=\"action[delete]\" />
\t\t\t\t\t\t\t";
                }
                // line 270
                echo " 
\t\t\t\t\t\t\t <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"";
                // line 271
                echo $this->env->getExtension('phpbb')->lang("RESTORE");
                echo "\" name=\"action[restore]\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 272
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" />
\t\t\t\t\t\t\t";
                // line 273
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t";
            }
            // line 277
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 278
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                // line 279
                echo "\t\t\t\t\t<div style=\"margin-top:20px;\" class=\"alert alert-danger fade in\">
\t\t\t\t\t\t<button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t\t\t\t<i class=\"fa fa-warning\"></i>
\t\t\t\t\t\t<a href=\"";
                // line 282
                echo $this->getAttribute($context["postrow"], "U_MCP_REPORT", array());
                echo "\"><strong>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 285
            echo "\t\t\t\t\t
\t\t\t\t\t<span class=\"hidden hook-bfr-message\"></span>
\t\t\t\t\t<div class=\"content\">";
            // line 287
            echo $this->getAttribute($context["postrow"], "MESSAGE", array());
            echo "</div>
\t\t\t\t\t
\t\t\t\t\t";
            // line 289
            if ($this->getAttribute($context["postrow"], "S_HAS_ATTACHMENTS", array())) {
                // line 290
                echo "\t\t\t\t\t\t<div class=\"attachbox\">
\t\t\t\t\t\t  <h5>";
                // line 291
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "</h5>
\t\t\t\t\t\t\t";
                // line 292
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 293
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 295
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 296
            // line 297
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "S_DISPLAY_NOTICE", array())) {
                echo "<div class=\"rules\">";
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 298
            echo "\t\t\t\t\t";
            if ((($this->getAttribute($context["postrow"], "EDITED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "EDIT_REASON", array())) || $this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array()))) {
                // line 299
                echo "\t\t\t\t\t\t<div class=\"notice text-muted\">
\t\t\t\t\t\t <small>";
                // line 300
                echo $this->getAttribute($context["postrow"], "EDITED_MESSAGE", array());
                echo "</small>
\t\t\t\t\t\t ";
                // line 301
                if ($this->getAttribute($context["postrow"], "EDIT_REASON", array())) {
                    echo "<small><strong>";
                    echo $this->env->getExtension('phpbb')->lang("REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong>&nbsp;";
                    echo $this->getAttribute($context["postrow"], "EDIT_REASON", array());
                    echo "</small>";
                }
                // line 302
                echo "\t\t\t\t\t\t <div><small>";
                echo $this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array());
                echo "</small></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 305
            echo "\t\t\t\t\t";
            // line 306
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "SIGNATURE", array())) {
                // line 307
                echo "\t\t\t\t\t <div class=\"clearfix\"></div>
\t\t\t\t\t <p class=\"separator text-center hidden-xs\"><i class=\"fa fa-ellipsis-h fa-2x\"></i></p>
\t\t\t\t\t <div id=\"sig";
                // line 309
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" class=\"hidden-xs post-signature\">";
                echo $this->getAttribute($context["postrow"], "SIGNATURE", array());
                echo "</div>
\t\t\t\t\t";
            }
            // line 310
            echo "\t
                </div>
\t\t\t\t";
            // line 312
            // line 313
            echo "\t\t\t</div>
        </div>
    </div>

\t";
            // line 317
            if (($this->getAttribute($context["postrow"], "S_LAST_ROW", array()) && (isset($context["S_QUICK_REPLY"]) ? $context["S_QUICK_REPLY"] : null))) {
                // line 318
                echo "\t <div class=\"panel-footer\">
\t\t <div class=\"clearfix\">
            <div class=\"text-center\">
\t\t\t<div id=\"hidden-div\">
             <button id=\"show_button\" class=\"btn btn-primary btn-sm collapsed\" data-toggle=\"collapse\" data-target=\".quick-reply\"><i class=\"glyphicon glyphicon-edit\"></i> ";
                // line 322
                echo $this->env->getExtension('phpbb')->lang("QUICKREPLY");
                echo "</a>
            </div>
\t\t\t</div>
            <div class=\"text-center\">
                <div class=\"quick-reply collapse\">
\t\t\t\t\t";
                // line 327
                if ((isset($context["S_SNAPPY"]) ? $context["S_SNAPPY"] : null)) {
                    $location = "@sitesplat_snappy/snappy_quickreply_editor.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("@sitesplat_snappy/snappy_quickreply_editor.html", "viewtopic_body.html", 327)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                } else {
                    $location = "quickreply_editor.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 327)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                }
                // line 328
                echo "                </div>
            </div>
          </div>
\t </div>
\t ";
            }
            // line 333
            echo "\t ";
            // line 334
            echo "  </div>
  
 </article>
 ";
            // line 337
            echo "\t
 
 <!-- /.MODAL PROFILE POSTER STARTS HERE -->
    <div class=\"modal fade\" id=\"mini";
            // line 340
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t <div class=\"modal-dialog\">
\t  <div class=\"modal-content\">
\t\t<div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t<h4 class=\"modal-title\">";
            // line 345
            echo $this->env->getExtension('phpbb')->lang("USER_MINI_PROFILE");
            echo "</h4>
\t\t</div>
\t\t<div class=\"modal-body\">
\t\t\t<div class=\"row profile-data\">
\t\t\t<!-- Left Side Start -->
\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-3 col-xs-12 text-center\">
\t\t\t\t    <!-- Profile Avatar Start -->
\t\t\t\t\t<div class=\"profile-avatar\">
\t\t\t\t\t\t";
            // line 353
            // line 354
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                // line 355
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    echo "\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    echo "</a>";
                } else {
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                }
                // line 356
                echo "\t\t\t\t\t    ";
            } else {
                // line 357
                echo "\t\t\t\t\t\t<img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/no_avatar.gif\" alt=\"\">
\t\t\t\t\t\t";
            }
            // line 359
            echo "\t\t\t\t\t\t";
            echo "\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Profile Avatar End -->  
                ";
            // line 362
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 363
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) && $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                // line 364
                echo "\t\t\t\t\t<div class=\"profile-rank text-center\">";
                echo $this->getAttribute($context["postrow"], "RANK_IMG", array());
                echo "</div>
\t\t\t\t\t";
            }
            // line 365
            echo "\t
\t\t\t\t";
            // line 366
            echo "\t
\t\t\t\t\t";
            // line 367
            if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                // line 368
                echo "\t\t\t\t\t<a class=\"btn btn-sm btn-default\" title=\"\" href=\"";
                echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("USER_MINI_PROFILE_VIEW_FULL");
                echo "</a>
\t\t\t\t\t";
            }
            // line 370
            echo "\t\t\t\t</div>
\t\t\t\t<!-- Left Side End -->
\t\t\t\t<!-- Right Side Start -->
\t\t\t\t<div class=\"col-lg-8 col-md-8 col-sm-9 col-xs-12\">
\t\t\t\t <h3>";
            // line 374
            if ( !$this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            } else {
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            }
            echo "</h3>\t\t\t\t\t\t 
\t\t\t\t\t<ul class=\"icon-list list-unstyled\">
\t\t\t\t\t ";
            // line 376
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) && $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                echo "<li><i class=\"fa fa-sitemap\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("RANK");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "RANK_TITLE", array());
                echo "</li>";
            }
            // line 377
            echo "\t\t\t\t\t ";
            if (($this->getAttribute($context["postrow"], "POSTER_POSTS", array()) != "")) {
                echo "<li><i class=\"fa fa-comments\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "POSTER_POSTS", array());
                echo "</li>";
            }
            // line 378
            echo "\t\t\t\t\t ";
            if ($this->getAttribute($context["postrow"], "POSTER_JOINED", array())) {
                echo "<li><i class=\"fa fa-calendar\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("JOINED");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "POSTER_JOINED", array());
                echo "</li>";
            }
            // line 379
            echo "\t\t\t\t\t <li><i class=\"fa fa-retweet\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("USER_STATUS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;";
            if (($this->getAttribute($context["postrow"], "S_ONLINE", array()) &&  !$this->getAttribute($context["postrow"], "S_IGNORE_POST", array()))) {
                echo $this->env->getExtension('phpbb')->lang("ONLINE");
            } else {
                echo $this->env->getExtension('phpbb')->lang("OFF_LINE");
            }
            echo "</li>
                     ";
            // line 380
            if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", array())) {
                echo "<li><i class=\"fa fa-bolt\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("WARNINGS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "POSTER_WARNINGS", array());
                echo "</li>";
            }
            // line 381
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t ";
            // line 382
            if ($this->getAttribute($context["postrow"], "S_PROFILE_FIELD1", array())) {
                // line 383
                echo "\t\t\t\t\t <!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t\t\t <li><i class=\"fa fa-star\"></i> 
\t\t\t\t\t ";
                // line 385
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_VALUE", array());
                echo "
\t\t\t\t\t </li>
\t\t\t\t\t ";
            }
            // line 388
            echo "
\t\t\t\t\t";
            // line 389
            // line 390
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 391
                echo "\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                    // line 392
                    echo "\t\t\t\t\t\t <li class=\"profile-custom-field profile-";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_IDENT", array());
                    echo "\"><i class=\"fa fa-star\"></i>&nbsp;";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                    echo "</li>
\t\t\t\t\t\t";
                }
                // line 394
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 395
            echo "\t\t\t\t\t";
            // line 396
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t <!-- Right Side End -->
            </div>
\t\t</div>
\t\t<div class=\"modal-footer\">
\t\t    ";
            // line 402
            // line 403
            echo "\t\t\t ";
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && twig_length_filter($this->env, $this->getAttribute($context["postrow"], "contact", array())))) {
                // line 404
                echo "\t\t\t<div class=\"clearfix\">
\t\t\t\t<ul class=\"mini-profile-contact\">
\t\t\t\t";
                // line 406
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "contact", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 407
                    echo "\t\t\t\t ";
                    $context["REMAINDER"] = ($this->getAttribute($context["contact"], "S_ROW_COUNT", array()) % 4);
                    // line 408
                    echo "\t\t\t\t";
                    $value = (((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 3) || ($this->getAttribute($context["contact"], "S_LAST_ROW", array()) && ($this->getAttribute($context["contact"], "S_NUM_ROWS", array()) < 4)));
                    $context['definition']->set('S_LAST_CELL', $value);
                    // line 409
                    echo "\t\t\t\t";
                    if (((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 0)) {
                        // line 410
                        echo "\t\t\t\t";
                    }
                    // line 411
                    echo "\t\t\t\t<li><a class=\"default-contact\" href=\"";
                    if ($this->getAttribute($context["contact"], "U_CONTACT", array())) {
                        echo $this->getAttribute($context["contact"], "U_CONTACT", array());
                    } else {
                        echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["contact"], "NAME", array());
                    echo "\"";
                    if (($this->getAttribute($context["contact"], "ID", array()) == "jabber")) {
                        echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                    }
                    echo ">
\t\t\t\t <i class=\"icon-moon-";
                    // line 412
                    echo $this->getAttribute($context["contact"], "ID", array());
                    echo "\"></i>
\t\t\t\t </a>
\t\t\t\t</li>
\t\t\t\t";
                    // line 415
                    if ((((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 3) || $this->getAttribute($context["contact"], "S_LAST_ROW", array()))) {
                        // line 416
                        echo "\t\t\t\t";
                    }
                    // line 417
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 418
                echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
            }
            // line 421
            echo "\t\t\t";
            // line 422
            echo "\t\t</div>
\t   </div><!-- /.modal-content -->
\t </div><!-- /.modal-dialog -->
\t</div><!-- /.modal -->
 <!-- /.MODAL PROFILE POSTER STOPS HERE -->
 
</div>
";
            // line 429
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        echo "

<div class=\"clearfix\">
 ";
        // line 434
        // line 435
        echo "  <div class=\"pull-left\">
   \t";
        // line 436
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_REPLY_INFO"]) ? $context["S_DISPLAY_REPLY_INFO"] : null))) {
            // line 437
            echo "\t ";
            // line 438
            echo "\t";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                // line 439
                echo "     <a class=\"btn btn-danger\" href=\"";
                echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
                echo "\" role=\"button\"><i class=\"fa fa-lock\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED_SHORT");
                echo "</a>
\t";
            } else {
                // line 441
                echo "\t <a class=\"btn btn-default btn-load\" href=\"";
                echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
                echo "\" role=\"button\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb')->lang("LOADING");
                echo "&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-plus\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("REPLY");
                echo "</a>
    ";
            }
            // line 443
            echo "\t ";
            // line 444
            echo "\t";
        }
        // line 445
        echo "  </div>

 <div class=\"pull-right\">
     <ul class=\"pagination pagination-sm hidden-xs\">
\t ";
        // line 449
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "quickmod", array()))) {
            echo "<li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting-topic-mod\" data-toggle=\"collapse\">";
            echo $this->env->getExtension('phpbb')->lang("MODERATOR_OPTIONS");
            echo "</a></li>";
        }
        // line 450
        echo "\t";
        if ((((isset($context["S_NUM_POSTS"]) ? $context["S_NUM_POSTS"] : null) > 1) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())))) {
            echo "<li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</a></li>";
        }
        echo "\t\t\t\t
     ";
        // line 451
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null))) {
            // line 452
            echo "\t  <li class=\"active\"><a>";
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo "</a></li>
\t\t\t";
            // line 453
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewtopic_body.html", 453)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 454
            echo "\t\t";
        } else {
            // line 455
            echo "\t\t\t<li class=\"active\"><a>";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a></li>\t
\t ";
        }
        // line 457
        echo "     </ul>
\t 
\t<div class=\"visible-xs\"> 
\t<ul class=\"pagination pagination-sm\">
\t ";
        // line 461
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "quickmod", array()))) {
            echo "<li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting-topic-mod\" data-toggle=\"collapse\"><i class=\"fa fa-gavel\"></i></a></li>";
        }
        // line 462
        echo "\t ";
        if ((((isset($context["S_NUM_POSTS"]) ? $context["S_NUM_POSTS"] : null) > 1) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())))) {
            echo "<li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\"><i class=\"fa fa-cog\"></i></a></li>";
        }
        echo "\t\t\t\t
\t <li><a class=\"pagination-trigger\" data-placement=\"top\">";
        // line 463
        echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
        echo "</a></li>
\t <li class=\"active\"><a>";
        // line 464
        echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
        echo "</a></li>
\t</ul>
\t</div>
 </div>
</div>

<div class=\"clearfix\">
   <div class=\"pull-right\">
\t<div class=\"visible-xs\"> 
\t <ul class=\"pagination pagination-sm\">
\t ";
        // line 474
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null))) {
            // line 475
            echo "\t\t\t";
            $location = "pagination_mobile.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination_mobile.html", "viewtopic_body.html", 475)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 476
            echo "\t\t";
        } else {
            // line 477
            echo "\t\t\t<li class=\"active\"><a>";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a></li>\t
\t ";
        }
        // line 479
        echo "\t </ul>
\t</div>
   </div>
</div>

";
        // line 484
        $location = "jump_links.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jump_links.html", "viewtopic_body.html", 484)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 485
        echo "<div class=\"space10\"></div>

\t";
        // line 487
        if (((((isset($context["S_NUM_POSTS"]) ? $context["S_NUM_POSTS"] : null) > 1) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 488
            echo "\t\t<form method=\"post\" action=\"";
            echo (isset($context["S_TOPIC_ACTION"]) ? $context["S_TOPIC_ACTION"] : null);
            echo "\">
\t\t";
            // line 489
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "viewtopic_body.html", 489)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 490
            echo "\t\t</form>
\t";
        }
        // line 492
        echo "
";
        // line 493
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "quickmod", array()))) {
            // line 494
            echo "\t<div class=\"controls-row\">
       <div class=\"sorting-topic-mod collapse\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-body\">
                   <div class=\"row\">
\t\t\t\t\t    <div class=\"col-md-6 col-sm-6\"> 
                         <label for=\"f\" accesskey=\"j\">";
            // line 500
            echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
                            <div class=\"control-row\">
                              ";
            // line 502
            $location = "jumpbox_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox_options.html", "viewtopic_body.html", 502)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 503
            echo "                            </div>
\t\t\t\t\t\t</div>
\t                    <div class=\"col-md-6 col-sm-6\"> 
\t\t\t\t\t\t <label for=\"quick-mod-select\">";
            // line 506
            echo $this->env->getExtension('phpbb')->lang("QUICK_MOD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
                          ";
            // line 507
            $location = "quickmod_tools.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickmod_tools.html", "viewtopic_body.html", 507)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 508
            echo "\t\t\t\t\t\t</div>
                    </div>
                </div>
\t\t\t</div>
\t\t</div>
\t</div> 
";
        }
        // line 515
        echo "
";
        // line 516
        // line 517
        echo "
";
        // line 518
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 519
            echo "<div class=\"row\">
";
            // line 520
            if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
                // line 521
                echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
<div class=\"panel panel-forum panel-whois\">
<div class=\"panel-heading\"><i class=\"fa fa-users\"></i> ";
                // line 523
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
                // line 525
                echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
                echo "</p>
 </div> 
</div> 
</div> 
";
            }
            // line 530
            echo "
";
            // line 531
            if ((isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null)) {
                // line 532
                echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
<div class=\"panel panel-forum\">
<div class=\"panel-heading\"><i class=\"fa fa-bar-chart-o\"></i>&nbsp;";
                // line 534
                echo $this->env->getExtension('phpbb')->lang("TOPIC_PERMISSIONS");
                echo "</div>
  <div class=\"panel-body\">
\t<p>";
                // line 536
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "rules", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                    echo $this->getAttribute($context["rules"], "RULE", array());
                    echo "<br />";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</p>
  </div> 
</div> 
 </div>
";
            }
            // line 541
            echo "</div>
";
        }
        // line 543
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 543)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1745 => 543,  1741 => 541,  1725 => 536,  1720 => 534,  1716 => 532,  1714 => 531,  1711 => 530,  1703 => 525,  1690 => 523,  1686 => 521,  1684 => 520,  1681 => 519,  1679 => 518,  1676 => 517,  1675 => 516,  1672 => 515,  1663 => 508,  1651 => 507,  1646 => 506,  1641 => 503,  1629 => 502,  1623 => 500,  1615 => 494,  1613 => 493,  1610 => 492,  1606 => 490,  1594 => 489,  1589 => 488,  1587 => 487,  1583 => 485,  1571 => 484,  1564 => 479,  1558 => 477,  1555 => 476,  1542 => 475,  1540 => 474,  1527 => 464,  1523 => 463,  1516 => 462,  1512 => 461,  1506 => 457,  1500 => 455,  1497 => 454,  1485 => 453,  1480 => 452,  1478 => 451,  1469 => 450,  1463 => 449,  1457 => 445,  1454 => 444,  1452 => 443,  1442 => 441,  1434 => 439,  1431 => 438,  1429 => 437,  1427 => 436,  1424 => 435,  1423 => 434,  1418 => 431,  1405 => 429,  1396 => 422,  1394 => 421,  1389 => 418,  1383 => 417,  1380 => 416,  1378 => 415,  1372 => 412,  1357 => 411,  1354 => 410,  1351 => 409,  1347 => 408,  1344 => 407,  1340 => 406,  1336 => 404,  1333 => 403,  1332 => 402,  1324 => 396,  1322 => 395,  1316 => 394,  1305 => 392,  1302 => 391,  1297 => 390,  1296 => 389,  1293 => 388,  1284 => 385,  1280 => 383,  1278 => 382,  1275 => 381,  1266 => 380,  1254 => 379,  1244 => 378,  1234 => 377,  1225 => 376,  1216 => 374,  1210 => 370,  1202 => 368,  1200 => 367,  1197 => 366,  1194 => 365,  1188 => 364,  1186 => 363,  1183 => 362,  1177 => 359,  1171 => 357,  1168 => 356,  1157 => 355,  1154 => 354,  1153 => 353,  1142 => 345,  1134 => 340,  1129 => 337,  1124 => 334,  1122 => 333,  1115 => 328,  1089 => 327,  1081 => 322,  1075 => 318,  1073 => 317,  1067 => 313,  1066 => 312,  1062 => 310,  1055 => 309,  1051 => 307,  1048 => 306,  1046 => 305,  1039 => 302,  1030 => 301,  1026 => 300,  1023 => 299,  1020 => 298,  1013 => 297,  1012 => 296,  1009 => 295,  1005 => 293,  996 => 292,  992 => 291,  989 => 290,  987 => 289,  982 => 287,  978 => 285,  970 => 282,  965 => 279,  963 => 278,  960 => 277,  953 => 273,  949 => 272,  945 => 271,  942 => 270,  936 => 269,  934 => 268,  930 => 267,  923 => 264,  921 => 263,  915 => 260,  911 => 259,  907 => 258,  903 => 257,  899 => 256,  892 => 253,  890 => 252,  887 => 251,  886 => 250,  878 => 249,  873 => 248,  872 => 247,  868 => 246,  856 => 236,  855 => 235,  852 => 234,  849 => 233,  846 => 232,  838 => 229,  835 => 228,  833 => 227,  829 => 225,  827 => 224,  818 => 223,  809 => 222,  800 => 221,  791 => 220,  782 => 219,  773 => 218,  772 => 217,  764 => 216,  760 => 214,  757 => 213,  753 => 212,  751 => 211,  748 => 210,  746 => 209,  745 => 208,  736 => 206,  733 => 205,  732 => 204,  718 => 203,  717 => 202,  705 => 201,  681 => 199,  677 => 197,  672 => 196,  662 => 194,  659 => 193,  646 => 192,  644 => 191,  636 => 190,  632 => 189,  620 => 186,  614 => 185,  611 => 184,  605 => 181,  601 => 180,  592 => 179,  590 => 178,  585 => 176,  581 => 175,  572 => 174,  570 => 173,  565 => 172,  555 => 170,  552 => 169,  551 => 168,  534 => 167,  531 => 166,  530 => 165,  522 => 160,  518 => 159,  514 => 157,  506 => 154,  503 => 153,  501 => 152,  497 => 151,  494 => 150,  488 => 148,  486 => 147,  477 => 145,  470 => 144,  462 => 142,  460 => 141,  453 => 136,  448 => 134,  428 => 131,  422 => 130,  402 => 127,  396 => 126,  392 => 124,  380 => 122,  368 => 120,  366 => 119,  364 => 118,  360 => 116,  354 => 114,  346 => 112,  344 => 111,  325 => 109,  324 => 108,  320 => 107,  315 => 104,  309 => 101,  306 => 100,  304 => 99,  300 => 98,  292 => 94,  290 => 93,  287 => 92,  286 => 91,  280 => 87,  279 => 86,  275 => 84,  263 => 83,  259 => 81,  256 => 80,  254 => 79,  244 => 77,  236 => 75,  233 => 74,  231 => 73,  229 => 72,  225 => 70,  224 => 69,  215 => 62,  212 => 61,  201 => 60,  199 => 59,  193 => 55,  187 => 53,  184 => 52,  171 => 51,  168 => 50,  160 => 49,  156 => 48,  149 => 43,  141 => 38,  133 => 35,  128 => 33,  122 => 30,  119 => 29,  117 => 28,  112 => 25,  108 => 23,  100 => 21,  97 => 20,  89 => 19,  87 => 18,  83 => 16,  81 => 15,  78 => 14,  65 => 11,  62 => 10,  60 => 9,  57 => 8,  52 => 7,  49 => 6,  43 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <div class="side-segment"><h3><!-- EVENT viewtopic_topic_title_prepend --><a href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a><!-- EVENT viewtopic_topic_title_append --></h3></div>*/
/* <!-- NOTE: remove the style="display: none" when you want to have the forum description on the topic body -->*/
/* <!-- IF FORUM_DESC --><div style="display: none;">{FORUM_DESC}<br /></div><!-- ENDIF -->*/
/* 	*/
/* <!-- EVENT viewtopic_topic_title_after -->*/
/* */
/* <!-- IF MODERATORS -->*/
/* <p>*/
/* 	<strong><!-- IF S_SINGLE_MODERATOR -->{L_MODERATOR}<!-- ELSE -->{L_MODERATORS}<!-- ENDIF -->{L_COLON}</strong>&nbsp;{MODERATORS}*/
/* </p>*/
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
/* <div class="row">*/
/* <div class="col-md-4 col-xs-6">*/
/* <!-- IF S_DISPLAY_SEARCHBOX -->*/
/*   <div class="pull-left">*/
/* 	<form method="get" id="topic-search" action="{S_SEARCHBOX_ACTION}">*/
/* 	 <fieldset>*/
/* 	<div class="input-group input-group-sm">*/
/*       <input type="text" class="form-control" name="keywords" id="search_keywords" value="" placeholder="{L_SEARCH_TOPIC}">*/
/*       <div class="input-group-btn">*/
/*         <button class="btn btn-default" type="submit" value="{L_SEARCH}"><span class="hidden-xs">{L_SEARCH}</span><i class="visible-xs fa fa-search fa-btn-fx"></i></button>*/
/* 	  </div>*/
/*     </div>*/
/* 	 {S_SEARCH_LOCAL_HIDDEN_FIELDS}*/
/* 	</fieldset>*/
/*     </form>*/
/*    </div>*/
/* <!-- ENDIF -->*/
/* </div>*/
/* */
/* <div class="col-md-8">*/
/*   <div class="pull-right">	 */
/*      <ul class="pagination pagination-sm hidden-xs">*/
/* 		 <li class="active"><a>{TOTAL_POSTS}</a></li>*/
/* 		 <!-- IF U_VIEW_UNREAD_POST and not S_IS_BOT --><li><a href="{U_VIEW_UNREAD_POST}">{L_VIEW_UNREAD_POST}</a></li><!-- ENDIF -->*/
/* 		<!-- IF .pagination or TOTAL_POSTS -->*/
/* 			<!-- INCLUDE pagination.html -->*/
/* 		<!-- ELSE -->*/
/* 			<li class="active"><a>{PAGE_NUMBER}</a></li>	*/
/* 		<!-- ENDIF -->*/
/*      </ul>*/
/* 	*/
/* 	<div class="visible-xs"> */
/*      <ul class="pagination pagination-sm">*/
/* 	<!-- IF .pagination or TOTAL_POSTS or TOTAL_TOPICS -->*/
/* 	<!-- IF TOTAL_POSTS and not NEWEST_USER --><li class="active"><a>{TOTAL_POSTS}</a></li><!-- ELSEIF TOTAL_TOPICS and not NEWEST_USER --><li class="active"><a>{TOTAL_TOPICS}</a></li><!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* 	</ul>*/
/* 	</div>*/
/*   </div>*/
/* </div> */
/* */
/* </div>*/
/* */
/* <!-- EVENT viewtopic_first_topic_buttons_before -->*/
/* <div class="clearfix">*/
/*     <div class="pull-left">*/
/*    	<!-- IF not S_IS_BOT and S_DISPLAY_REPLY_INFO -->*/
/* 	 <!-- EVENT viewtopic_buttons_top_before -->*/
/* 	<!-- IF S_IS_LOCKED -->*/
/*      <a class="btn btn-danger" href="{U_POST_REPLY_TOPIC}" role="button"><i class="fa fa-lock"></i>&nbsp;{L_TOPIC_LOCKED_SHORT}</a>*/
/* 	<!-- ELSE -->*/
/* 	 <a class="btn btn-default btn-load" href="{U_POST_REPLY_TOPIC}" role="button" data-loading-text="{L_LOADING}&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>"><i class="fa fa-plus"></i>&nbsp;{L_REPLY}</a>*/
/*     <!-- ENDIF -->*/
/* 	 <!-- EVENT viewtopic_buttons_top_after -->*/
/* 	<!-- ENDIF -->*/
/*    </div>*/
/*    <div class="pull-right">*/
/*     <!-- INCLUDE viewtopic_topic_tools.html -->*/
/*    </div>*/
/* </div>*/
/* <!-- EVENT viewtopic_first_topic_buttons_after -->*/
/* */
/* <div class="space10"></div>*/
/*  <div class="space10"></div>*/
/* */
/* <!-- EVENT viewtopic_body_poll_before -->*/
/*  */
/* <!-- IF S_HAS_POLL -->*/
/* <form method="post" action="{S_POLL_ACTION}" data-ajax="vote_poll" class="topic_poll">*/
/* <fieldset>*/
/* <div class="panel panel-default panel-poll">*/
/*  <div class="panel-heading">*/
/*     <h3><!-- EVENT viewtopic_body_poll_question_prepend -->{POLL_QUESTION}<!-- EVENT viewtopic_body_poll_question_append --></h3>*/
/* 	<!-- IF S_CAN_VOTE and L_POLL_LENGTH -->*/
/* 	<div class="alert alert-info fade in">*/
/*      <i class="fa fa-bar-chart-o"></i>&nbsp;{L_POLL_LENGTH}*/
/*     </div>*/
/* 	<!-- ENDIF -->*/
/*  </div>*/
/* <div class="panel-body">*/
/* <div class="inner">*/
/* <!-- BEGIN poll_option -->*/
/* <!-- EVENT viewtopic_body_poll_option_before -->*/
/* <div class="clearfix<!-- IF poll_option.POLL_OPTION_VOTED --> voted<!-- ENDIF --><!-- IF poll_option.POLL_OPTION_MOST_VOTES --> most-votes<!-- ENDIF -->"<!-- IF poll_option.POLL_OPTION_VOTED --> title="{L_POLL_VOTED_OPTION}"<!-- ENDIF --> data-poll-option-id="{poll_option.POLL_OPTION_ID}">*/
/* <div class="pull-left">*/
/* <!-- IF S_CAN_VOTE -->*/
/*  <label for="vote_{poll_option.POLL_OPTION_ID}">{poll_option.POLL_OPTION_CAPTION}</label>*/
/* <!-- ELSE -->*/
/*  {poll_option.POLL_OPTION_CAPTION}*/
/* <!-- ENDIF -->*/
/* */
/* <div class="poll_option_select pull-left">*/
/* <!-- IF S_CAN_VOTE -->*/
/* <!-- IF S_IS_MULTI_CHOICE -->*/
/* <input type="checkbox" name="vote_id[]" id="vote_{poll_option.POLL_OPTION_ID}" value="{poll_option.POLL_OPTION_ID}"<!-- IF poll_option.POLL_OPTION_VOTED --> checked="checked"<!-- ENDIF --> />*/
/* <!-- ELSE -->*/
/* <input type="radio" name="vote_id[]" id="vote_{poll_option.POLL_OPTION_ID}" value="{poll_option.POLL_OPTION_ID}"<!-- IF poll_option.POLL_OPTION_VOTED --> checked="checked"<!-- ENDIF --> /><!-- ENDIF -->*/
/* <!-- ENDIF -->*/
/* </div>*/
/* </div>*/
/*    <div class="poll_option_percent<!-- IF not S_DISPLAY_RESULTS --> hidden<!-- ENDIF --> pull-right">*/
/*     <span class="badge<!-- IF poll_option.POLL_OPTION_VOTED --> badge-info<!-- ENDIF -->"<!-- IF poll_option.POLL_OPTION_VOTED --> title="{L_POLL_VOTED_OPTION}"<!-- ENDIF -->><!-- IF poll_option.POLL_OPTION_RESULT == 0 -->{L_NO_VOTES}<!-- ELSE -->{poll_option.POLL_OPTION_RESULT}<!-- ENDIF --></span>*/
/*    </div>*/
/* <div class="space-poll"></div>   */
/* <div class="resultbar<!-- IF not S_DISPLAY_RESULTS --> hidden<!-- ENDIF --> progress progress-fix clearfix">*/
/*  <div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-striped<!-- IF poll_option.POLL_OPTION_PCT < 20 --> pollbar1 progress-bar-danger<!-- ELSEIF poll_option.POLL_OPTION_PCT < 40 --> pollbar2 progress-bar-warning<!-- ELSEIF poll_option.POLL_OPTION_PCT < 60 --> pollbar3 progress-bar-info<!-- ELSEIF poll_option.POLL_OPTION_PCT < 80 --> pollbar4 progress-bar-primary<!-- ELSE --> pollbar5 progress-bar-success active<!-- ENDIF -->" style="width:{poll_option.POLL_OPTION_PERCENT};min-width:2em;">{poll_option.POLL_OPTION_PERCENT}</div>*/
/* </div>*/
/* </div>*/
/* <!-- EVENT viewtopic_body_poll_option_after -->*/
/* <!-- END poll_option -->*/
/* </div>*/
/* </div>*/
/* <div class="panel-footer">*/
/*   <div class="clearfix">*/
/*     <ul class="list-unstyled pull-left">*/
/* 	<!-- IF not S_DISPLAY_RESULTS -->*/
/*     <li class="poll_view_results"><a href="{U_VIEW_RESULTS}">{L_VIEW_RESULTS}</a></li>*/
/* 	<!-- ENDIF -->*/
/* 	<li class="poll_total_votes<!-- IF not S_DISPLAY_RESULTS --> hidden<!-- ENDIF -->">*/
/* 	 <span class="resultbar">{L_TOTAL_VOTES}&nbsp;{L_COLON}&nbsp;<span class="poll_total_vote_cnt">{TOTAL_VOTES}</span></span>*/
/* 	</li>*/
/* 	<!-- IF S_CAN_VOTE -->*/
/* 	<li class="poll_max_votes">{L_MAX_VOTES}</li>*/
/* 	<!-- ENDIF -->*/
/* 	</ul>*/
/* 	 <div class="vote-submitted hidden">&nbsp;<span class="label label-success">{L_VOTE_SUBMITTED}</span></div>*/
/* 	<!-- IF S_CAN_VOTE -->*/
/* 	<div class="poll_vote pull-right">*/
/* 	 <div class="resultbar"><input type="submit" name="update" value="{L_SUBMIT_VOTE}" class="btn btn-default btn-poll" data-loading-text="{L_CASTING_VOTE}" autocomplete="off" /></div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/*   </div>*/
/* </div>*/
/*     {S_FORM_TOKEN}*/
/* 	 {S_HIDDEN_FIELDS}*/
/* </div>*/
/* </fieldset>*/
/* </form>*/
/* <!-- ENDIF -->*/
/* <!-- EVENT viewtopic_body_poll_after -->*/
/* */
/* <!-- BEGIN postrow -->*/
/* <!-- EVENT viewtopic_body_postrow_post_before -->*/
/*   <!-- IF postrow.S_FIRST_UNREAD -->*/
/*    <a id="unread" class="anchor"<!-- IF S_UNREAD_VIEW --> data-url="{postrow.U_MINI_POST}"<!-- ENDIF -->></a>*/
/*   <!-- ENDIF -->*/
/* <div id="p{postrow.POST_ID}" class="clearfix">	*/
/*     <!-- IF postrow.S_POST_DELETED -->*/
/* 	 <div class="ignore alert alert-default" id="post_hidden{postrow.POST_ID}"<!-- IF not postrow.S_POST_HIDDEN --> style="display: none;"<!-- ENDIF -->>*/
/* 	  {postrow.L_POST_DELETED_MESSAGE}<br />*/
/* 	  <strong>{postrow.L_POST_DISPLAY}</strong>*/
/* 	 </div>*/
/* 	<!-- ELSEIF postrow.S_IGNORE_POST -->*/
/* 	 <div class="ignore alert alert-warning" id="post_hidden{postrow.POST_ID}"<!-- IF not postrow.S_POST_HIDDEN --> style="display: none;"<!-- ENDIF -->>*/
/* 		{postrow.L_IGNORE_POST}<br />*/
/* 		<strong>{postrow.L_POST_DISPLAY}</strong>*/
/* 	 </div>*/
/* 	<!-- ENDIF -->*/
/* <!-- EVENT ss_viewtopic_body_postrow_article_before -->	*/
/*  <article <!-- IF postrow.S_POST_HIDDEN -->style="display: none;"<!-- ENDIF -->>*/
/*   <div class="panel<!-- IF (MINI_PROFILE_POSITION == 'alternate' and postrow.S_ROW_COUNT is odd ) --> alt-odd<!-- ENDIF --> forum-answer<!-- IF postrow.S_ONLINE --> mobile-online<!-- ENDIF -->">*/
/*     <div class="panel-heading">*/
/* 	 <div class="clearfix">*/
/*          <div id="profile{postrow.POST_ID}">*/
/* 			<div class="avatar-over<!-- IF MINI_PROFILE_POSITION == 'right' or (MINI_PROFILE_POSITION == 'alternate' and postrow.S_ROW_COUNT is even ) --> pull-right<!-- ELSE --> pull-left<!-- ENDIF -->">*/
/* 				<!-- IF postrow.POSTER_AVATAR -->*/
/* 					<!-- IF postrow.U_POST_AUTHOR --><a href="javascript:void(0)" data-toggle="modal" data-target="#mini{postrow.POST_ID}" title="{L_USER_MINI_PROFILE}">{postrow.POSTER_AVATAR}</a><!-- ELSE -->{postrow.POSTER_AVATAR}<!-- ENDIF -->*/
/* 				<!-- ELSE -->*/
/* 					<a href="javascript:void(0)" data-toggle="modal" data-target="#mini{postrow.POST_ID}" title="{L_USER_MINI_PROFILE}"><img src="{T_THEME_PATH}/images/no_avatar.gif" alt=""></a>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF postrow.S_ONLINE --><span class="status"></span><!-- ENDIF -->*/
/* 			</div>*/
/*          </div>*/
/* 		<div class="side-segment"><h3 style="border-bottom: 4px solid #e5e5e5;"><!-- IF postrow.POST_ICON_IMG --><img class="post-icon" src="{T_ICONS_PATH}{postrow.POST_ICON_IMG}" width="{postrow.POST_ICON_IMG_WIDTH}" height="{postrow.POST_ICON_IMG_HEIGHT}" alt=""/><!-- ENDIF --><a href="#p{postrow.POST_ID}">{postrow.POST_SUBJECT}</a><span class="pull-right post-id hidden-xs"><a href="{postrow.U_MINI_POST}" title="{L_POST}">&#35;{postrow.POST_ID}</a></span></h3></div>    */
/* 		<div class="clearfix">*/
/* 		<div class="text-muted<!-- IF (MINI_PROFILE_POSITION == 'alternate' and postrow.S_ROW_COUNT is odd ) --> alt-odd-time<!-- ENDIF --> <!-- IF MINI_PROFILE_POSITION == 'right' or (MINI_PROFILE_POSITION == 'alternate' and postrow.S_ROW_COUNT is even ) --> pull-right prof-right<!-- ELSE --> pull-left<!-- ENDIF -->">*/
/* 		<!-- EVENT viewtopic_body_post_author_before -->*/
/* 		{L_BY}<!-- IF not postrow.U_POST_AUTHOR -->&nbsp;{postrow.POST_AUTHOR_FULL}<!-- ELSE -->&nbsp;{postrow.POST_AUTHOR_FULL}<!-- ENDIF --><span class="hidden-xs">&nbsp;&#45;&nbsp;<i class="fa fa-clock-o"></i>&nbsp;{postrow.POST_DATE}</span>	*/
/* 		<!-- EVENT viewtopic_body_post_author_after -->*/
/* 		</div>*/
/* 		<div class="<!-- IF MINI_PROFILE_POSITION == 'right' or (MINI_PROFILE_POSITION == 'alternate' and postrow.S_ROW_COUNT is even ) -->pull-left<!-- ELSE -->pull-right<!-- ENDIF -->">*/
/* 		<div role="toolbar" class="btn-toolbar">*/
/* 		<!-- EVENT viewtopic_body_post_buttons_before_absolute -->*/
/* 		<!-- EVENT viewtopic_body_post_buttons_before -->*/
/* 		 */
/* 		    <!-- IF not S_IS_BOT and S_REGISTERED_USER -->*/
/* 			<!-- DEFINE $SHOW_POST_BUTTONS = (postrow.U_EDIT or postrow.U_DELETE or postrow.U_REPORT or postrow.U_WARN or postrow.U_INFO or postrow.U_QUOTE) -->*/
/* 			<!-- IF $SHOW_POST_BUTTONS -->*/
/*                 <div class="btn-group btn-group-sm" role="group">*/
/* 				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i>&nbsp;<i class="fa fa-level-down"></i></button>*/
/* 				 <ul class="dropdown-menu<!-- IF MINI_PROFILE_POSITION == 'right' or (MINI_PROFILE_POSITION == 'alternate' and postrow.S_ROW_COUNT is even ) --> dropdown-menu-left<!-- ELSE --> dropdown-menu-right<!-- ENDIF -->" role="menu">*/
/* 				  <!-- EVENT viewtopic_body_post_buttons_list_before -->*/
/* 					<!-- IF postrow.U_QUOTE --><li class="visible-xs"><a href="{postrow.U_QUOTE}" title="" role="button"><i class="fa fa-comments"></i>&nbsp;{L_QUOTE}</a></li><!-- ENDIF -->*/
/* 					<!-- IF postrow.U_EDIT --><li><a href="{postrow.U_EDIT}" title="" role="button" class="qlr-trigger"><i class="fa fa-pencil"></i>&nbsp;{L_EDIT_POST}</a></li><!-- ENDIF -->*/
/* 					<!-- IF postrow.U_DELETE --><li><a href="{postrow.U_DELETE}" title="" role="button"><i class="fa fa-times"></i>&nbsp;{L_DELETE_POST}</a></li><!-- ENDIF -->*/
/* 					<!-- IF postrow.U_REPORT --><li><a href="{postrow.U_REPORT}" title="" role="button"><i class="fa fa-exclamation-circle"></i>&nbsp;{L_REPORT_POST}</a></li><!-- ENDIF -->*/
/* 					<!-- IF postrow.U_WARN --><li><a href="{postrow.U_WARN}" title="" role="button"><i class="fa fa-minus-circle"></i>&nbsp;{L_WARN_USER}</a></li><!-- ENDIF -->*/
/* 					<!-- IF postrow.U_INFO --><li><a href="{postrow.U_INFO}" title="" role="button"><i class="fa fa-info-circle"></i>&nbsp;{L_INFORMATION}</a></li><!-- ENDIF -->*/
/* 				  <!-- EVENT viewtopic_body_post_buttons_list_after -->*/
/* 				 </ul>*/
/* 				</div>*/
/* 				<!-- IF postrow.U_QUOTE -->*/
/*                 <div class="btn-group btn-group-sm hidden-xs visible-sm visible-md visible-lg" role="group">*/
/*                  <a class="btn btn-default btn-sm" href="{postrow.U_QUOTE}" title="{L_REPLY_WITH_QUOTE}" role="button"><i class="fa fa-comments"></i></a>*/
/*                 </div>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		    <!-- ENDIF -->*/
/* 		 */
/* 		<!-- EVENT viewtopic_body_post_buttons_after -->*/
/* 		</div>*/
/* 		</div>*/
/* 		</div>  */
/* 		*/
/* 	 </div>*/
/* 	</div>*/
/* 			*/
/*     <div class="panel-body">*/
/*         <div class="clearfix">*/
/* 			<div class="postbody">*/
/*                 <div id="post_content{postrow.POST_ID}">*/
/* 				<!-- EVENT viewtopic_body_postrow_post_details_before -->*/
/* 					 <span class="post-date pull-left visible-xs">&#45;&nbsp;<i class="fa fa-clock-o"></i>&nbsp;{postrow.POST_DATE}</span>*/
/* 					 <span class="post-id pull-right visible-xs"><a href="{postrow.U_MINI_POST}" title="{L_POST}">&#35;{postrow.POST_ID}</a></span>*/
/* 				<!-- EVENT viewtopic_body_postrow_post_details_after -->*/
/* 		        */
/* 					<!-- IF postrow.S_POST_UNAPPROVED -->*/
/* 					<form method="post" class="mcp_approve" action="{postrow.U_APPROVE_ACTION}">*/
/* 						<div class="alert alert-warning fade in">*/
/* 							<button class="close" data-dismiss="alert"><span class="awe-remove-circle"></span></button>*/
/* 							<i class="fa fa-warning"></i><strong>&nbsp;{L_POST_UNAPPROVED_ACTION}</strong>*/
/* 							 <input class="btn btn-danger btn-sm" type="submit" value="{L_DISAPPROVE}" name="action[disapprove]" />*/
/* 							 <input class="btn btn-success btn-sm" type="submit" value="{L_APPROVE}" name="action[approve]" />*/
/* 							<input type="hidden" name="post_id_list[]" value="{postrow.POST_ID}" />*/
/* 							{S_FORM_TOKEN}*/
/* 						</div>*/
/* 					</form>*/
/* 					<!-- ELSEIF postrow.S_POST_DELETED -->*/
/* 					<form method="post" class="mcp_approve" action="{postrow.U_APPROVE_ACTION}">*/
/* 						<div class="alert alert-warning fade in">*/
/* 							<button class="close" data-dismiss="alert"><span class="awe-remove-circle"></span></button>*/
/* 							<i class="fa fa-warning"></i><strong>&nbsp;{L_POST_DELETED_ACTION}</strong>*/
/* 							<!-- IF postrow.S_DELETE_PERMANENT -->*/
/* 							 <input class="btn btn-danger btn-sm" type="submit" value="{L_DELETE}" name="action[delete]" />*/
/* 							<!-- ENDIF --> */
/* 							 <input class="btn btn-success btn-sm" type="submit" value="{L_RESTORE}" name="action[restore]" />*/
/* 							<input type="hidden" name="post_id_list[]" value="{postrow.POST_ID}" />*/
/* 							{S_FORM_TOKEN}*/
/* 						</div>*/
/* 					</form>*/
/* 					<!-- ENDIF -->*/
/* 					*/
/* 					<!-- IF postrow.S_POST_REPORTED -->*/
/* 					<div style="margin-top:20px;" class="alert alert-danger fade in">*/
/* 						<button class="close" data-dismiss="alert"><span class="awe-remove-circle"></span></button>*/
/* 						<i class="fa fa-warning"></i>*/
/* 						<a href="{postrow.U_MCP_REPORT}"><strong>&nbsp;{L_POST_REPORTED}</strong></a>*/
/* 					</div>*/
/* 					<!-- ENDIF -->*/
/* 					*/
/* 					<span class="hidden hook-bfr-message"></span>*/
/* 					<div class="content">{postrow.MESSAGE}</div>*/
/* 					*/
/* 					<!-- IF postrow.S_HAS_ATTACHMENTS -->*/
/* 						<div class="attachbox">*/
/* 						  <h5>{L_ATTACHMENTS}</h5>*/
/* 							<!-- BEGIN attachment -->{postrow.attachment.DISPLAY_ATTACHMENT}<!-- END attachment -->*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* 					*/
/* 					<!-- EVENT viewtopic_body_postrow_post_notices_before -->*/
/* 					<!-- IF postrow.S_DISPLAY_NOTICE --><div class="rules">{L_DOWNLOAD_NOTICE}</div><!-- ENDIF -->*/
/* 					<!-- IF postrow.EDITED_MESSAGE or postrow.EDIT_REASON or postrow.BUMPED_MESSAGE -->*/
/* 						<div class="notice text-muted">*/
/* 						 <small>{postrow.EDITED_MESSAGE}</small>*/
/* 						 <!-- IF postrow.EDIT_REASON --><small><strong>{L_REASON}{L_COLON}</strong>&nbsp;{postrow.EDIT_REASON}</small><!-- ENDIF -->*/
/* 						 <div><small>{postrow.BUMPED_MESSAGE}</small></div>*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- EVENT viewtopic_body_postrow_post_notices_after -->*/
/* 					<!-- IF postrow.SIGNATURE -->*/
/* 					 <div class="clearfix"></div>*/
/* 					 <p class="separator text-center hidden-xs"><i class="fa fa-ellipsis-h fa-2x"></i></p>*/
/* 					 <div id="sig{postrow.POST_ID}" class="hidden-xs post-signature">{postrow.SIGNATURE}</div>*/
/* 					<!-- ENDIF -->	*/
/*                 </div>*/
/* 				<!-- EVENT viewtopic_panel_post_body_inner -->*/
/* 			</div>*/
/*         </div>*/
/*     </div>*/
/* */
/* 	<!-- IF postrow.S_LAST_ROW and S_QUICK_REPLY -->*/
/* 	 <div class="panel-footer">*/
/* 		 <div class="clearfix">*/
/*             <div class="text-center">*/
/* 			<div id="hidden-div">*/
/*              <button id="show_button" class="btn btn-primary btn-sm collapsed" data-toggle="collapse" data-target=".quick-reply"><i class="glyphicon glyphicon-edit"></i> {L_QUICKREPLY}</a>*/
/*             </div>*/
/* 			</div>*/
/*             <div class="text-center">*/
/*                 <div class="quick-reply collapse">*/
/* 					<!-- IF S_SNAPPY --><!-- INCLUDE @sitesplat_snappy/snappy_quickreply_editor.html --><!-- ELSE --><!-- INCLUDE quickreply_editor.html --><!-- ENDIF -->*/
/*                 </div>*/
/*             </div>*/
/*           </div>*/
/* 	 </div>*/
/* 	 <!-- ENDIF -->*/
/* 	 <!-- EVENT viewtopic_body_postrow_post_content_footer -->*/
/*   </div>*/
/*   */
/*  </article>*/
/*  <!-- EVENT ss_viewtopic_body_postrow_article_after -->	*/
/*  */
/*  <!-- /.MODAL PROFILE POSTER STARTS HERE -->*/
/*     <div class="modal fade" id="mini{postrow.POST_ID}" tabindex="-1" role="dialog" aria-hidden="true">*/
/* 	 <div class="modal-dialog">*/
/* 	  <div class="modal-content">*/
/* 		<div class="modal-header">*/
/* 			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="awe-remove-circle"></span></button>*/
/* 			<h4 class="modal-title">{L_USER_MINI_PROFILE}</h4>*/
/* 		</div>*/
/* 		<div class="modal-body">*/
/* 			<div class="row profile-data">*/
/* 			<!-- Left Side Start -->*/
/* 				<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 text-center">*/
/* 				    <!-- Profile Avatar Start -->*/
/* 					<div class="profile-avatar">*/
/* 						<!-- EVENT viewtopic_body_avatar_before -->*/
/* 						<!-- IF postrow.POSTER_AVATAR -->*/
/* 						<!-- IF postrow.U_POST_AUTHOR --><a href="{postrow.U_POST_AUTHOR}">{postrow.POSTER_AVATAR}</a><!-- ELSE -->{postrow.POSTER_AVATAR}<!-- ENDIF -->*/
/* 					    <!-- ELSE -->*/
/* 						<img src="{T_THEME_PATH}/images/no_avatar.gif" alt="">*/
/* 						<!-- ENDIF -->*/
/* 						<!-- EVENT viewtopic_body_avatar_after -->	*/
/* 					</div>*/
/* 					<!-- Profile Avatar End -->  */
/*                 <!-- EVENT viewtopic_body_postrow_rank_before -->					*/
/* 					<!-- IF postrow.RANK_TITLE and postrow.RANK_IMG -->*/
/* 					<div class="profile-rank text-center">{postrow.RANK_IMG}</div>*/
/* 					<!-- ENDIF -->	*/
/* 				<!-- EVENT viewtopic_body_postrow_rank_after -->	*/
/* 					<!-- IF postrow.U_POST_AUTHOR -->*/
/* 					<a class="btn btn-sm btn-default" title="" href="{postrow.U_POST_AUTHOR}">{L_USER_MINI_PROFILE_VIEW_FULL}</a>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 				<!-- Left Side End -->*/
/* 				<!-- Right Side Start -->*/
/* 				<div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">*/
/* 				 <h3><!-- IF not postrow.U_POST_AUTHOR -->{postrow.POST_AUTHOR_FULL}<!-- ELSE -->{postrow.POST_AUTHOR_FULL}<!-- ENDIF --></h3>						 */
/* 					<ul class="icon-list list-unstyled">*/
/* 					 <!-- IF postrow.RANK_TITLE and postrow.RANK_IMG --><li><i class="fa fa-sitemap"></i>&nbsp;{L_RANK}{L_COLON}&nbsp;{postrow.RANK_TITLE}</li><!-- ENDIF -->*/
/* 					 <!-- IF postrow.POSTER_POSTS != '' --><li><i class="fa fa-comments"></i>&nbsp;{L_POSTS}{L_COLON}&nbsp;{postrow.POSTER_POSTS}</li><!-- ENDIF -->*/
/* 					 <!-- IF postrow.POSTER_JOINED --><li><i class="fa fa-calendar"></i>&nbsp;{L_JOINED}{L_COLON}&nbsp;{postrow.POSTER_JOINED}</li><!-- ENDIF -->*/
/* 					 <li><i class="fa fa-retweet"></i>&nbsp;{L_USER_STATUS}{L_COLON}&nbsp;<!-- IF postrow.S_ONLINE and not postrow.S_IGNORE_POST -->{L_ONLINE}<!-- ELSE -->{L_OFF_LINE}<!-- ENDIF --></li>*/
/*                      <!-- IF postrow.POSTER_WARNINGS --><li><i class="fa fa-bolt"></i>&nbsp;{L_WARNINGS}{L_COLON}&nbsp;{postrow.POSTER_WARNINGS}</li><!-- ENDIF -->*/
/* 								*/
/* 					 <!-- IF postrow.S_PROFILE_FIELD1 -->*/
/* 					 <!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->*/
/* 					 <li><i class="fa fa-star"></i> */
/* 					 {postrow.PROFILE_FIELD1_NAME}{L_COLON}&nbsp;{postrow.PROFILE_FIELD1_VALUE}*/
/* 					 </li>*/
/* 					 <!-- ENDIF -->*/
/* */
/* 					<!-- EVENT viewtopic_body_postrow_custom_fields_before -->*/
/* 					<!-- BEGIN custom_fields -->*/
/* 						<!-- IF not postrow.custom_fields.S_PROFILE_CONTACT -->*/
/* 						 <li class="profile-custom-field profile-{postrow.custom_fields.PROFILE_FIELD_IDENT}"><i class="fa fa-star"></i>&nbsp;{postrow.custom_fields.PROFILE_FIELD_NAME}{L_COLON} {postrow.custom_fields.PROFILE_FIELD_VALUE}</li>*/
/* 						<!-- ENDIF -->*/
/* 					<!-- END custom_fields -->*/
/* 					<!-- EVENT viewtopic_body_postrow_custom_fields_after -->*/
/* 					</ul>*/
/* 				</div>*/
/* 			 <!-- Right Side End -->*/
/*             </div>*/
/* 		</div>*/
/* 		<div class="modal-footer">*/
/* 		    <!-- EVENT viewtopic_body_contact_fields_before -->*/
/* 			 <!-- IF not S_IS_BOT and .postrow.contact -->*/
/* 			<div class="clearfix">*/
/* 				<ul class="mini-profile-contact">*/
/* 				<!-- BEGIN contact -->*/
/* 				 {% set REMAINDER = postrow.contact.S_ROW_COUNT % 4 %}*/
/* 				<!-- DEFINE $S_LAST_CELL = ((REMAINDER eq 3) or (postrow.contact.S_LAST_ROW and postrow.contact.S_NUM_ROWS < 4)) -->*/
/* 				<!-- IF REMAINDER eq 0 -->*/
/* 				<!-- ENDIF -->*/
/* 				<li><a class="default-contact" href="<!-- IF postrow.contact.U_CONTACT -->{postrow.contact.U_CONTACT}<!-- ELSE -->{postrow.U_POST_AUTHOR}<!-- ENDIF -->" title="{postrow.contact.NAME}"<!-- IF postrow.contact.ID eq 'jabber' --> onclick="popup(this.href, 750, 320); return false;"<!-- ENDIF -->>*/
/* 				 <i class="icon-moon-{postrow.contact.ID}"></i>*/
/* 				 </a>*/
/* 				</li>*/
/* 				<!-- IF REMAINDER eq 3 or postrow.contact.S_LAST_ROW -->*/
/* 				<!-- ENDIF -->*/
/* 				<!-- END contact -->*/
/* 				</ul>*/
/* 			</div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- EVENT viewtopic_body_contact_fields_after -->*/
/* 		</div>*/
/* 	   </div><!-- /.modal-content -->*/
/* 	 </div><!-- /.modal-dialog -->*/
/* 	</div><!-- /.modal -->*/
/*  <!-- /.MODAL PROFILE POSTER STOPS HERE -->*/
/*  */
/* </div>*/
/* <!-- EVENT viewtopic_body_postrow_post_after -->*/
/* <!-- END postrow -->*/
/* */
/* */
/* <div class="clearfix">*/
/*  <!-- EVENT viewtopic_body_topic_actions_before -->*/
/*   <div class="pull-left">*/
/*    	<!-- IF not S_IS_BOT and S_DISPLAY_REPLY_INFO -->*/
/* 	 <!-- EVENT viewtopic_buttons_bottom_before -->*/
/* 	<!-- IF S_IS_LOCKED -->*/
/*      <a class="btn btn-danger" href="{U_POST_REPLY_TOPIC}" role="button"><i class="fa fa-lock"></i>&nbsp;{L_TOPIC_LOCKED_SHORT}</a>*/
/* 	<!-- ELSE -->*/
/* 	 <a class="btn btn-default btn-load" href="{U_POST_REPLY_TOPIC}" role="button" data-loading-text="{L_LOADING}&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>"><i class="fa fa-plus"></i>&nbsp;{L_REPLY}</a>*/
/*     <!-- ENDIF -->*/
/* 	 <!-- EVENT viewtopic_buttons_bottom_after -->*/
/* 	<!-- ENDIF -->*/
/*   </div>*/
/* */
/*  <div class="pull-right">*/
/*      <ul class="pagination pagination-sm hidden-xs">*/
/* 	 <!-- IF .quickmod --><li><a title="" href="javascript:void(0);" data-target=".sorting-topic-mod" data-toggle="collapse">{L_MODERATOR_OPTIONS}</a></li><!-- ENDIF -->*/
/* 	<!-- IF S_NUM_POSTS > 1 or .pagination --><li><a title="" href="javascript:void(0);" data-target=".sorting" data-toggle="collapse">{L_OPTIONS}</a></li><!-- ENDIF -->				*/
/*      <!-- IF .pagination or TOTAL_POSTS -->*/
/* 	  <li class="active"><a>{TOTAL_POSTS}</a></li>*/
/* 			<!-- INCLUDE pagination.html -->*/
/* 		<!-- ELSE -->*/
/* 			<li class="active"><a>{PAGE_NUMBER}</a></li>	*/
/* 	 <!-- ENDIF -->*/
/*      </ul>*/
/* 	 */
/* 	<div class="visible-xs"> */
/* 	<ul class="pagination pagination-sm">*/
/* 	 <!-- IF .quickmod --><li><a title="" href="javascript:void(0);" data-target=".sorting-topic-mod" data-toggle="collapse"><i class="fa fa-gavel"></i></a></li><!-- ENDIF -->*/
/* 	 <!-- IF S_NUM_POSTS > 1 or .pagination --><li><a title="" href="javascript:void(0);" data-target=".sorting" data-toggle="collapse"><i class="fa fa-cog"></i></a></li><!-- ENDIF -->				*/
/* 	 <li><a class="pagination-trigger" data-placement="top">{PAGE_NUMBER}</a></li>*/
/* 	 <li class="active"><a>{TOTAL_POSTS}</a></li>*/
/* 	</ul>*/
/* 	</div>*/
/*  </div>*/
/* </div>*/
/* */
/* <div class="clearfix">*/
/*    <div class="pull-right">*/
/* 	<div class="visible-xs"> */
/* 	 <ul class="pagination pagination-sm">*/
/* 	 <!-- IF .pagination or TOTAL_POSTS -->*/
/* 			<!-- INCLUDE pagination_mobile.html -->*/
/* 		<!-- ELSE -->*/
/* 			<li class="active"><a>{PAGE_NUMBER}</a></li>	*/
/* 	 <!-- ENDIF -->*/
/* 	 </ul>*/
/* 	</div>*/
/*    </div>*/
/* </div>*/
/* */
/* <!-- INCLUDE jump_links.html -->*/
/* <div class="space10"></div>*/
/* */
/* 	<!-- IF (S_NUM_POSTS > 1 or .pagination) and not S_IS_BOT  -->*/
/* 		<form method="post" action="{S_TOPIC_ACTION}">*/
/* 		<!-- INCLUDE display_options.html -->*/
/* 		</form>*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- IF .quickmod -->*/
/* 	<div class="controls-row">*/
/*        <div class="sorting-topic-mod collapse">*/
/* 			<div class="panel panel-default">*/
/* 				<div class="panel-body">*/
/*                    <div class="row">*/
/* 					    <div class="col-md-6 col-sm-6"> */
/*                          <label for="f" accesskey="j">{L_JUMP_TO}{L_COLON}</label>*/
/*                             <div class="control-row">*/
/*                               <!-- INCLUDE jumpbox_options.html -->*/
/*                             </div>*/
/* 						</div>*/
/* 	                    <div class="col-md-6 col-sm-6"> */
/* 						 <label for="quick-mod-select">{L_QUICK_MOD}{L_COLON}</label>*/
/*                           <!-- INCLUDE quickmod_tools.html -->*/
/* 						</div>*/
/*                     </div>*/
/*                 </div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div> */
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT viewtopic_body_footer_before -->*/
/* */
/* <!-- IF S_USER_LOGGED_IN -->*/
/* <div class="row">*/
/* <!-- IF S_DISPLAY_ONLINE_LIST -->*/
/* <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">*/
/* <div class="panel panel-forum panel-whois">*/
/* <div class="panel-heading"><i class="fa fa-users"></i> <!-- IF U_VIEWONLINE --><a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a><!-- ELSE -->{L_WHO_IS_ONLINE}<!-- ENDIF --></div>*/
/*  <div class="panel-body">*/
/* 	<p>{LOGGED_IN_USER_LIST}</p>*/
/*  </div> */
/* </div> */
/* </div> */
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_DISPLAY_POST_INFO -->*/
/* <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">*/
/* <div class="panel panel-forum">*/
/* <div class="panel-heading"><i class="fa fa-bar-chart-o"></i>&nbsp;{L_TOPIC_PERMISSIONS}</div>*/
/*   <div class="panel-body">*/
/* 	<p><!-- BEGIN rules -->{rules.RULE}<br /><!-- END rules --></p>*/
/*   </div> */
/* </div> */
/*  </div>*/
/* <!-- ENDIF -->*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- INCLUDE overall_footer.html -->*/
