<?php

/* search_results.html */
class __TwigTemplate_c7e31bf414843f384aaed6380b04707b41e414d7c726dff47d54044760a3d79e extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "search_results.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"side-segment\"><h3>";
        if ((isset($context["SEARCH_TITLE"]) ? $context["SEARCH_TITLE"] : null)) {
            echo (isset($context["SEARCH_TITLE"]) ? $context["SEARCH_TITLE"] : null);
        } else {
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
        }
        if ((isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null)) {
            echo "&#58;&nbsp;<a href=\"";
            echo (isset($context["U_SEARCH_WORDS"]) ? $context["U_SEARCH_WORDS"] : null);
            echo "\">";
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
            echo "</a>";
        }
        echo "</h3></div>
";
        // line 3
        if ((isset($context["SEARCHED_QUERY"]) ? $context["SEARCHED_QUERY"] : null)) {
            echo "<p>";
            echo $this->env->getExtension('phpbb')->lang("SEARCHED_QUERY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;<strong>";
            echo (isset($context["SEARCHED_QUERY"]) ? $context["SEARCHED_QUERY"] : null);
            echo "</strong></p>";
        }
        // line 4
        if ((isset($context["IGNORED_WORDS"]) ? $context["IGNORED_WORDS"] : null)) {
            echo "<p>";
            echo $this->env->getExtension('phpbb')->lang("IGNORED_TERMS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;<span class=\"badge badge-important\">";
            echo (isset($context["IGNORED_WORDS"]) ? $context["IGNORED_WORDS"] : null);
            echo "</span></p>";
        }
        // line 5
        if ((isset($context["PHRASE_SEARCH_DISABLED"]) ? $context["PHRASE_SEARCH_DISABLED"] : null)) {
            echo "<p><strong>";
            echo $this->env->getExtension('phpbb')->lang("PHRASE_SEARCH_DISABLED");
            echo "</strong></p>";
        }
        // line 6
        echo "
";
        // line 7
        if ((isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
            // line 8
            echo "\t<p><i class=\"fa fa-chevron-left\"></i>&nbsp;<a href=\"";
            echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;";
            echo (isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null);
            echo "</a></p>
";
        } else {
            // line 10
            echo "\t<p><i class=\"fa fa-chevron-left\"></i>&nbsp;<a href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>
";
        }
        // line 12
        echo "
";
        // line 13
        // line 14
        echo "
";
        // line 15
        if ((((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null)) || (isset($context["TOTAL_MATCHES"]) ? $context["TOTAL_MATCHES"] : null)) || (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null))) {
            // line 16
            echo " <div class=\"row\">
\t<div class=\"col-md-4 col-xs-7\">
\t\t";
            // line 18
            if (((isset($context["TOTAL_MATCHES"]) ? $context["TOTAL_MATCHES"] : null) > 0)) {
                // line 19
                echo "\t\t<div class=\"pull-left\">
\t\t  <form method=\"post\" action=\"";
                // line 20
                echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
                echo "\">
\t\t   <fieldset>
\t\t\t<div class=\"input-group input-group-sm input-icon left\">
\t\t\t  <i class=\"fa fa-search\"></i>
\t\t\t  <input type=\"text\" class=\"form-control\" size=\"\" name=\"add_keywords\" id=\"add_keywords\" placeholder=\"";
                // line 24
                echo $this->env->getExtension('phpbb')->lang("SEARCH_IN_RESULTS");
                echo "\">
\t\t\t  <div class=\"input-group-btn\">
\t\t\t\t<button class=\"btn btn-default\" type=\"submit\" value=\"";
                // line 26
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</button>
\t\t\t  </div>
\t\t\t</div>
\t\t   </fieldset>\t
\t\t  </form>
\t\t</div>
\t\t";
            }
            // line 33
            echo "\t</div>
\t
\t<div class=\"col-md-8\">
\t\t<div class=\"pull-right\">
\t\t <ul class=\"pagination pagination-sm hidden-xs\">
\t\t\t <li class=\"active\"><a>";
            // line 38
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
            echo "</a></li>
\t\t\t";
            // line 39
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 40
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 40)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 41
                echo "\t\t\t";
            } else {
                // line 42
                echo "\t\t\t\t<li class=\"active\"><a>";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a></li>\t
\t\t\t";
            }
            // line 44
            echo "\t\t\t";
            if ((isset($context["U_MARK_ALL_READ"]) ? $context["U_MARK_ALL_READ"] : null)) {
                // line 45
                echo "\t\t\t\t<li><a href=\"";
                echo (isset($context["U_MARK_ALL_READ"]) ? $context["U_MARK_ALL_READ"] : null);
                echo "\" class=\"mark-read\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL_READ");
                echo "</a></li>
\t\t\t";
            }
            // line 47
            echo "\t\t </ul>
\t\t
\t\t<div class=\"visible-xs\"> 
\t\t\t  <div class=\"clearfix\"> 
\t\t\t\t<ul class=\"pagination pagination-sm\">
\t\t\t\t <li><a class=\"pagination-trigger\" data-placement=\"top\">";
            // line 52
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a></li>
\t\t\t\t <li class=\"active\"><a>";
            // line 53
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
            echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t   </div>
   </div>
 </div>
";
        }
        // line 61
        echo "
";
        // line 62
        if ((isset($context["S_SHOW_TOPICS"]) ? $context["S_SHOW_TOPICS"] : null)) {
            // line 63
            echo "\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()))) {
                // line 64
                echo "\t<div class=\"panel panel-forum\">
\t<div class=\"panel-heading\">
\t <i class=\"fa fa-bolt\"></i>&nbsp;";
                // line 66
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "
\t</div>
\t<div class=\"panel-inner\">
    <table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
                // line 72
                echo $this->env->getExtension('phpbb')->lang("TITLE");
                echo "</th>
\t\t\t<th class=\"large110\" data-hide=\"phone\">";
                // line 73
                echo $this->env->getExtension('phpbb')->lang("TOPICS_POSTS_STATISTICS");
                echo "</th>
\t\t\t<th class=\"large21\" data-hide=\"phone\">";
                // line 74
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</th>
\t\t</tr>
\t</thead>\t\t
\t<tbody>
\t";
                // line 78
                ob_start();
                echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_LOCKED");
                $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
                $context['definition']->set('VAR', $value);
                // line 79
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                    // line 80
                    echo "\t\t";
                    // line 81
                    echo "\t\t<tr>
\t\t\t<td>
\t\t\t";
                    // line 83
                    if (($this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", array()) && (isset($context["S_TOPIC_ICONS"]) ? $context["S_TOPIC_ICONS"] : null))) {
                        echo "<i class=\"topic-icon\" style=\"background-image: url(";
                        echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                        echo $this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", array());
                        echo "); background-repeat: no-repeat;\" title=\"";
                        echo $this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG_ALT", array());
                        echo "\"></i>";
                    }
                    // line 84
                    echo "\t\t\t<span class=\"icon-wrapper\">
\t\t\t\t<i class=\"row-icon-font icon-moon-default2";
                    // line 85
                    if (($this->getAttribute($context["searchresults"], "S_TOPIC_TYPE", array()) == 2)) {
                        echo " icon-moon-voice2";
                    } elseif (($this->getAttribute($context["searchresults"], "S_TOPIC_TYPE", array()) == 3)) {
                        echo " icon-moon-podcast2";
                    } elseif (($this->getAttribute($context["searchresults"], "S_TOPIC_TYPE", array()) == 1)) {
                        echo " icon-moon-pushpin2";
                    } elseif ($this->getAttribute($context["searchresults"], "S_HAS_POLL", array())) {
                        echo " icon-moon-poll";
                    }
                    if ($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", array())) {
                        echo " forum-unread";
                    } else {
                        echo " forum-read";
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_FOLDER_IMG_ALT", array());
                    echo "\"></i>
\t\t\t</span>
\t\t\t\t<i class=\"row-icon-font-mini";
                    // line 87
                    if (($this->getAttribute($context["searchresults"], "TOPIC_TYPE", array()) == $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "VAR", array()))) {
                        echo " fa fa-lock forumview-lock";
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG_ALT", array());
                    echo "\"></i>
\t\t\t<span class=\"desc-wrapper\">\t
\t\t\t";
                    // line 89
                    // line 90
                    echo "\t\t\t\t";
                    if (($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_NEWEST_POST", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("VIEW_FIRST_UNREAD");
                        echo "\"><i class=\"fa fa-asterisk\"></i></a>";
                    }
                    // line 91
                    echo "\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                    echo "</a> ";
                    if ($this->getAttribute($context["searchresults"], "ATTACH_ICON_IMG", array())) {
                        echo "<i class=\"fa fa-paperclip fa-flip-horizontal\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"";
                        echo $this->env->getExtension('phpbb')->lang("ATTACH_FORUM");
                        echo "\"></i>";
                    }
                    // line 92
                    echo "\t\t\t\t";
                    if (($this->getAttribute($context["searchresults"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["searchresults"], "S_POSTS_UNAPPROVED", array()))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("TOPICS_ROW_NOT_APPROVED");
                        echo "\"><i class=\"fa fa-question-circle\"></i></a>";
                    }
                    // line 93
                    echo "\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_DELETED", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("TOPIC_DELETED");
                        echo "\"><i class=\"fa fa-trash-o text-danger\"></i></a>";
                    }
                    // line 94
                    echo "\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_REPORTED", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_REPORT", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("TOPICS_ROW_REPORTED");
                        echo "\"><i class=\"fa fa-exclamation-circle text-danger\"></i></a>";
                    }
                    echo "<br />
\t\t\t\t
\t\t\t\t";
                    // line 96
                    if (twig_length_filter($this->env, $this->getAttribute($context["searchresults"], "pagination", array()))) {
                        // line 97
                        echo "\t\t\t\t    <ul class=\"pagination pagination-forum pagination-xs pull-right hidden-sm hidden-xs\">
\t\t\t\t\t\t";
                        // line 98
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["searchresults"], "pagination", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                            // line 99
                            echo "\t\t\t\t\t\t ";
                            if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                                // line 100
                                echo "\t\t\t\t\t\t ";
                            } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                                echo "<li class=\"active\">";
                                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                echo "</li>
\t\t\t\t\t\t ";
                            } elseif ($this->getAttribute(                            // line 101
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                                echo "<li class=\"ellipsis\"><a>";
                                echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                                echo "</a></li>
\t\t\t\t\t\t ";
                            } elseif ($this->getAttribute(                            // line 102
$context["pagination"], "S_IS_NEXT", array())) {
                                // line 103
                                echo "\t\t\t\t\t\t";
                            } else {
                                // line 104
                                echo "\t\t\t\t\t\t <li><a href=\"";
                                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                                echo "\">";
                                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                echo "</a></li>
\t\t\t\t\t\t";
                            }
                            // line 106
                            echo "\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 107
                        echo "\t\t\t\t\t</ul>\t\t
\t\t\t    ";
                    }
                    // line 109
                    echo "\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_AUTHOR_FULL", array());
                    echo "&nbsp;&#45;&nbsp;<small>";
                    echo $this->getAttribute($context["searchresults"], "FIRST_POST_TIME", array());
                    echo "</small>
\t\t\t\t";
                    // line 110
                    if ( !$this->getAttribute($context["searchresults"], "S_TOPIC_GLOBAL", array())) {
                        echo "<i class=\"fa fa-comments\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb')->lang("IN");
                        echo "&nbsp;<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", array());
                        echo "</a>";
                    } else {
                        echo "&nbsp;&#40;";
                        echo $this->env->getExtension('phpbb')->lang("GLOBAL");
                        echo "&#41;";
                    }
                    // line 111
                    echo "\t\t\t";
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('vse_topicpreview', '__main__'));
                    $this->env->loadTemplate('@vse_topicpreview/event/topiclist_row_append.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    // line 112
                    echo "\t\t\t</span>
\t\t\t</td>
\t\t\t<td class=\"stats-col\"><span class=\"stats-wrapper\">";
                    // line 114
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                    echo "&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("REPLIES");
                    echo "<br />&nbsp;";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", array());
                    echo "&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("VIEWS");
                    echo "</span></td>
\t\t\t<td class=\"center\">";
                    // line 115
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_AUTHOR_FULL", array());
                    echo "
\t\t\t";
                    // line 116
                    if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                        echo "<a rel=\"tooltip\" data-placement=\"right\" data-original-title=\"";
                        echo $this->env->getExtension('phpbb')->lang("FORUMLIST_LASTPOST");
                        echo "\" href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_LAST_POST", array());
                        echo "\"><i class=\"mobile-post fa fa-sign-out\"></i></a>";
                    }
                    // line 117
                    echo "\t\t\t<br /><small>";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_TIME", array());
                    echo "</small>
\t\t\t</td>
\t\t</tr>
\t\t";
                    // line 120
                    // line 121
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "\t\t </tbody>
\t</table>
\t</div>
    </div>
\t
\t";
            } else {
                // line 128
                echo "\t<div class=\"alert alert-info fade in\">
       <button data-dismiss=\"alert\" class=\"close\" type=\"button\" aria-hidden=\"true\"><i class=\"awe-remove-circle\"></i></button>
       <i class=\"fa fa-warning\"></i> <strong>";
                // line 130
                echo $this->env->getExtension('phpbb')->lang("INFO_BOX");
                echo "</strong>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "
    </div> 
\t";
            }
            // line 133
            echo "
";
        } else {
            // line 135
            echo "
";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                // line 137
                // line 138
                echo "<div class=\"clearfix\">
\t<div class=\"well well-sm\">
\t";
                // line 140
                if ($this->getAttribute($context["searchresults"], "S_IGNORE_POST", array())) {
                    // line 141
                    echo "\t\t<div class=\"postbody\">
\t\t\t";
                    // line 142
                    echo $this->getAttribute($context["searchresults"], "L_IGNORE_POST", array());
                    echo "
\t\t</div>
\t";
                } else {
                    // line 145
                    echo "\t\t<div class=\"pull-left\">
\t\t\t<h4><a href=\"";
                    // line 146
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "POST_SUBJECT", array());
                    echo "</a></h4>
\t\t";
                    // line 147
                    echo "\t
\t\t   <span class=\"text-muted\"><i class=\"fa fa-user\"></i>&nbsp;";
                    // line 148
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["searchresults"], "POST_AUTHOR_FULL", array());
                    echo "&nbsp;&#166;&nbsp;<i class=\"fa fa-clock-o\"></i>&nbsp;";
                    echo $this->getAttribute($context["searchresults"], "POST_DATE", array());
                    echo "&nbsp;&#166;</span> 
\t\t";
                    // line 149
                    if ($this->getAttribute($context["searchresults"], "FORUM_TITLE", array())) {
                        // line 150
                        echo "           <span class=\"text-muted\"><i class=\"fa fa-folder\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb')->lang("FORUM");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "&nbsp;<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", array());
                        echo "</a>&nbsp;&#166;&nbsp;<i class=\"fa fa-folder-open\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb')->lang("TOPIC");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "&nbsp;<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                        echo "</a>&nbsp;&#166;</span> 
\t\t\t";
                    } else {
                        // line 152
                        echo "\t\t\t<span class=\"text-muted\"><i class=\"fa fa-plus\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb')->lang("GLOBAL");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "&nbsp;<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                        echo "</a>&nbsp;&#166;</span> 
\t\t\t";
                    }
                    // line 154
                    echo "\t\t\t<span class=\"text-muted\"><i class=\"fa fa-comments\"></i>&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "&nbsp;<strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                    echo "</strong>&nbsp;&#166;&nbsp;<i class=\"fa fa-eye\"></i>&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("VIEWS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "&nbsp;<strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", array());
                    echo "</strong></span> 
\t\t";
                    // line 155
                    // line 156
                    echo "\t\t</div>
\t\t<div class=\"space10\"></div>
\t\t\t<div class=\"content\"><p>";
                    // line 158
                    echo $this->getAttribute($context["searchresults"], "MESSAGE", array());
                    echo "</p></div>
\t";
                }
                // line 160
                echo "
\t";
                // line 161
                if ( !$this->getAttribute($context["searchresults"], "S_IGNORE_POST", array())) {
                    // line 162
                    echo "\t<div class=\"clearfix\">
\t\t<div class=\"pull-right\"><a href=\"";
                    // line 163
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("JUMP_TO_POST");
                    echo "</a></div>
\t</div>
\t";
                }
                // line 166
                echo "    </div>
\t</div>
\t";
                // line 168
                // line 169
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 170
                echo "\t<div class=\"alert alert-info fade in\">
       <button data-dismiss=\"alert\" class=\"close\" type=\"button\" aria-hidden=\"true\"><i class=\"awe-remove-circle\"></i></button>
       <i class=\"fa fa-warning\"></i><strong>";
                // line 172
                echo $this->env->getExtension('phpbb')->lang("INFO_BOX");
                echo "</strong>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "
    </div> 
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 176
        echo "

<div class=\"row\">
";
        // line 179
        if (((((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()))) || (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null)) || (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null)) || (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null))) {
            echo "  
<div class=\"col-md-8 col-md-push-4\">
  <div class=\"clearfix\"> 
\t    <ul class=\"pagination pagination-sm hidden-xs pull-right\">
\t\t\t";
            // line 183
            if (((isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null) || (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null))) {
                // line 184
                echo "\t\t\t <li><a title=\"\" data-original-title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
                echo $this->env->getExtension('phpbb')->lang("OPTIONS");
                echo "</a></li>
\t\t\t";
            }
            // line 186
            echo "\t\t\t <li class=\"active\"><a>";
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
            echo "</a></li>
\t\t\t";
            // line 187
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 188
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 188)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 189
                echo "\t\t\t";
            } else {
                // line 190
                echo "\t\t\t\t<li class=\"active\"><a>";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a></li>\t
\t\t\t";
            }
            // line 192
            echo "\t\t\t";
            if ((isset($context["U_MARK_ALL_READ"]) ? $context["U_MARK_ALL_READ"] : null)) {
                // line 193
                echo "\t\t\t\t<li><a href=\"";
                echo (isset($context["U_MARK_ALL_READ"]) ? $context["U_MARK_ALL_READ"] : null);
                echo "\" class=\"mark-read\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL_READ");
                echo "</a></li>
\t\t\t";
            }
            // line 195
            echo "\t\t</ul>
\t
\t\t<div class=\"visible-xs pull-right\"> 
\t\t  <div class=\"clearfix\"> 
\t\t\t <ul class=\"pagination pagination-sm\">
\t\t\t\t";
            // line 200
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 201
                echo "\t\t\t\t\t";
                $location = "pagination_mobile.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination_mobile.html", "search_results.html", 201)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 202
                echo "\t\t\t\t";
            } else {
                // line 203
                echo "\t\t\t\t\t<li class=\"active\"><a>";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a></li>\t
\t\t\t\t";
            }
            // line 205
            echo "\t\t\t</ul>
\t\t  </div>
\t   </div>
   </div>
 </div>  
";
        }
        // line 211
        echo "
<div class=\"col-md-4 col-md-pull-8\">
";
        // line 213
        $location = "jumpbox_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox_options.html", "search_results.html", 213)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 214
        echo "</div>

</div>

";
        // line 218
        $location = "jump_links.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jump_links.html", "search_results.html", 218)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 219
        echo "
";
        // line 220
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array())) && ((isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null) || (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null)))) {
            // line 221
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
            echo "\">
\t\t";
            // line 222
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "search_results.html", 222)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 223
            echo "\t</form>
";
        }
        // line 225
        echo "
";
        // line 226
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_results.html", 226)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  796 => 226,  793 => 225,  789 => 223,  777 => 222,  772 => 221,  770 => 220,  767 => 219,  755 => 218,  749 => 214,  737 => 213,  733 => 211,  725 => 205,  719 => 203,  716 => 202,  703 => 201,  701 => 200,  694 => 195,  686 => 193,  683 => 192,  677 => 190,  674 => 189,  661 => 188,  659 => 187,  654 => 186,  648 => 184,  646 => 183,  639 => 179,  634 => 176,  622 => 172,  618 => 170,  613 => 169,  612 => 168,  608 => 166,  600 => 163,  597 => 162,  595 => 161,  592 => 160,  587 => 158,  583 => 156,  582 => 155,  569 => 154,  558 => 152,  540 => 150,  538 => 149,  530 => 148,  527 => 147,  521 => 146,  518 => 145,  512 => 142,  509 => 141,  507 => 140,  503 => 138,  502 => 137,  497 => 136,  494 => 135,  490 => 133,  482 => 130,  478 => 128,  470 => 122,  464 => 121,  463 => 120,  456 => 117,  448 => 116,  442 => 115,  432 => 114,  428 => 112,  422 => 111,  408 => 110,  399 => 109,  395 => 107,  389 => 106,  381 => 104,  378 => 103,  376 => 102,  370 => 101,  363 => 100,  360 => 99,  356 => 98,  353 => 97,  351 => 96,  339 => 94,  330 => 93,  321 => 92,  310 => 91,  301 => 90,  300 => 89,  291 => 87,  271 => 85,  268 => 84,  259 => 83,  255 => 81,  253 => 80,  248 => 79,  243 => 78,  236 => 74,  232 => 73,  228 => 72,  219 => 66,  215 => 64,  212 => 63,  210 => 62,  207 => 61,  196 => 53,  192 => 52,  185 => 47,  177 => 45,  174 => 44,  168 => 42,  165 => 41,  152 => 40,  150 => 39,  146 => 38,  139 => 33,  127 => 26,  122 => 24,  115 => 20,  112 => 19,  110 => 18,  106 => 16,  104 => 15,  101 => 14,  100 => 13,  97 => 12,  87 => 10,  76 => 8,  74 => 7,  71 => 6,  65 => 5,  56 => 4,  47 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* <div class="side-segment"><h3><!-- IF SEARCH_TITLE -->{SEARCH_TITLE}<!-- ELSE -->{SEARCH_MATCHES}<!-- ENDIF --><!-- IF SEARCH_WORDS -->&#58;&nbsp;<a href="{U_SEARCH_WORDS}">{SEARCH_WORDS}</a><!-- ENDIF --></h3></div>*/
/* <!-- IF SEARCHED_QUERY --><p>{L_SEARCHED_QUERY}{L_COLON}&nbsp;<strong>{SEARCHED_QUERY}</strong></p><!-- ENDIF -->*/
/* <!-- IF IGNORED_WORDS --><p>{L_IGNORED_TERMS}{L_COLON}&nbsp;<span class="badge badge-important">{IGNORED_WORDS}</span></p><!-- ENDIF -->*/
/* <!-- IF PHRASE_SEARCH_DISABLED --><p><strong>{L_PHRASE_SEARCH_DISABLED}</strong></p><!-- ENDIF -->*/
/* */
/* <!-- IF SEARCH_TOPIC -->*/
/* 	<p><i class="fa fa-chevron-left"></i>&nbsp;<a href="{U_SEARCH_TOPIC}">{L_RETURN_TO}{L_COLON}&nbsp;{SEARCH_TOPIC}</a></p>*/
/* <!-- ELSE -->*/
/* 	<p><i class="fa fa-chevron-left"></i>&nbsp;<a href="{U_SEARCH}" title="{L_SEARCH_ADV}">{L_GO_TO_SEARCH_ADV}</a></p>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT search_results_header_after -->*/
/* */
/* <!-- IF .pagination or SEARCH_MATCHES or TOTAL_MATCHES or PAGE_NUMBER -->*/
/*  <div class="row">*/
/* 	<div class="col-md-4 col-xs-7">*/
/* 		<!-- IF TOTAL_MATCHES > 0 -->*/
/* 		<div class="pull-left">*/
/* 		  <form method="post" action="{S_SEARCH_ACTION}">*/
/* 		   <fieldset>*/
/* 			<div class="input-group input-group-sm input-icon left">*/
/* 			  <i class="fa fa-search"></i>*/
/* 			  <input type="text" class="form-control" size="" name="add_keywords" id="add_keywords" placeholder="{L_SEARCH_IN_RESULTS}">*/
/* 			  <div class="input-group-btn">*/
/* 				<button class="btn btn-default" type="submit" value="{L_SEARCH}">{L_SEARCH}</button>*/
/* 			  </div>*/
/* 			</div>*/
/* 		   </fieldset>	*/
/* 		  </form>*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* 	*/
/* 	<div class="col-md-8">*/
/* 		<div class="pull-right">*/
/* 		 <ul class="pagination pagination-sm hidden-xs">*/
/* 			 <li class="active"><a>{SEARCH_MATCHES}</a></li>*/
/* 			<!-- IF .pagination -->*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			<!-- ELSE -->*/
/* 				<li class="active"><a>{PAGE_NUMBER}</a></li>	*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF U_MARK_ALL_READ -->*/
/* 				<li><a href="{U_MARK_ALL_READ}" class="mark-read">{L_MARK_ALL_READ}</a></li>*/
/* 			<!-- ENDIF -->*/
/* 		 </ul>*/
/* 		*/
/* 		<div class="visible-xs"> */
/* 			  <div class="clearfix"> */
/* 				<ul class="pagination pagination-sm">*/
/* 				 <li><a class="pagination-trigger" data-placement="top">{PAGE_NUMBER}</a></li>*/
/* 				 <li class="active"><a>{SEARCH_MATCHES}</a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 	   </div>*/
/*    </div>*/
/*  </div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_SHOW_TOPICS -->*/
/* 	<!-- IF .searchresults -->*/
/* 	<div class="panel panel-forum">*/
/* 	<div class="panel-heading">*/
/* 	 <i class="fa fa-bolt"></i>&nbsp;{L_TOPICS}*/
/* 	</div>*/
/* 	<div class="panel-inner">*/
/*     <table class="footable table table-striped table-primary table-hover">*/
/* 	<thead>*/
/* 		<tr>*/
/* 			<th data-class="expand">{L_TITLE}</th>*/
/* 			<th class="large110" data-hide="phone">{L_TOPICS_POSTS_STATISTICS}</th>*/
/* 			<th class="large21" data-hide="phone">{L_LAST_POST}</th>*/
/* 		</tr>*/
/* 	</thead>		*/
/* 	<tbody>*/
/* 	<!-- DEFINE $VAR -->{L_VIEW_TOPIC_LOCKED}<!-- ENDDEFINE -->*/
/* 		<!-- BEGIN searchresults -->*/
/* 		<!-- EVENT search_results_topic_before -->*/
/* 		<tr>*/
/* 			<td>*/
/* 			<!-- IF searchresults.TOPIC_ICON_IMG and S_TOPIC_ICONS --><i class="topic-icon" style="background-image: url({T_ICONS_PATH}{searchresults.TOPIC_ICON_IMG}); background-repeat: no-repeat;" title="{searchresults.TOPIC_ICON_IMG_ALT}"></i><!-- ENDIF -->*/
/* 			<span class="icon-wrapper">*/
/* 				<i class="row-icon-font icon-moon-default2<!-- IF searchresults.S_TOPIC_TYPE == 2 --> icon-moon-voice2<!-- ELSEIF searchresults.S_TOPIC_TYPE == 3 --> icon-moon-podcast2<!-- ELSEIF searchresults.S_TOPIC_TYPE == 1 --> icon-moon-pushpin2<!-- ELSEIF searchresults.S_HAS_POLL --> icon-moon-poll<!-- ENDIF --><!-- IF searchresults.S_UNREAD_TOPIC --> forum-unread<!-- ELSE --> forum-read<!-- ENDIF -->" title="{searchresults.TOPIC_FOLDER_IMG_ALT}"></i>*/
/* 			</span>*/
/* 				<i class="row-icon-font-mini<!-- IF searchresults.TOPIC_TYPE == $VAR --> fa fa-lock forumview-lock<!-- ENDIF -->" title="{searchresults.TOPIC_ICON_IMG_ALT}"></i>*/
/* 			<span class="desc-wrapper">	*/
/* 			<!-- EVENT topiclist_row_prepend -->*/
/* 				<!-- IF searchresults.S_UNREAD_TOPIC and not S_IS_BOT --><a href="{searchresults.U_NEWEST_POST}" title="{L_VIEW_FIRST_UNREAD}"><i class="fa fa-asterisk"></i></a><!-- ENDIF -->*/
/* 				<a href="{searchresults.U_VIEW_TOPIC}" class="topictitle">{searchresults.TOPIC_TITLE}</a> <!-- IF searchresults.ATTACH_ICON_IMG --><i class="fa fa-paperclip fa-flip-horizontal" rel="tooltip" data-placement="top" data-original-title="{L_ATTACH_FORUM}"></i><!-- ENDIF -->*/
/* 				<!-- IF searchresults.S_TOPIC_UNAPPROVED or searchresults.S_POSTS_UNAPPROVED --><a href="{searchresults.U_MCP_QUEUE}" title="{L_TOPICS_ROW_NOT_APPROVED}"><i class="fa fa-question-circle"></i></a><!-- ENDIF -->*/
/* 				<!-- IF searchresults.S_TOPIC_DELETED --><a href="{searchresults.U_MCP_QUEUE}" title="{L_TOPIC_DELETED}"><i class="fa fa-trash-o text-danger"></i></a><!-- ENDIF -->*/
/* 				<!-- IF searchresults.S_TOPIC_REPORTED --><a href="{searchresults.U_MCP_REPORT}" title="{L_TOPICS_ROW_REPORTED}"><i class="fa fa-exclamation-circle text-danger"></i></a><!-- ENDIF --><br />*/
/* 				*/
/* 				<!-- IF .searchresults.pagination -->*/
/* 				    <ul class="pagination pagination-forum pagination-xs pull-right hidden-sm hidden-xs">*/
/* 						<!-- BEGIN pagination -->*/
/* 						 <!-- IF searchresults.pagination.S_IS_PREV -->*/
/* 						 <!-- ELSEIF searchresults.pagination.S_IS_CURRENT --><li class="active">{searchresults.pagination.PAGE_NUMBER}</li>*/
/* 						 <!-- ELSEIF searchresults.pagination.S_IS_ELLIPSIS --><li class="ellipsis"><a>{L_ELLIPSIS}</a></li>*/
/* 						 <!-- ELSEIF searchresults.pagination.S_IS_NEXT -->*/
/* 						<!-- ELSE -->*/
/* 						 <li><a href="{searchresults.pagination.PAGE_URL}">{searchresults.pagination.PAGE_NUMBER}</a></li>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- END pagination -->*/
/* 					</ul>		*/
/* 			    <!-- ENDIF -->*/
/* 				{L_POST_BY_AUTHOR}&nbsp;{searchresults.TOPIC_AUTHOR_FULL}&nbsp;&#45;&nbsp;<small>{searchresults.FIRST_POST_TIME}</small>*/
/* 				<!-- IF not searchresults.S_TOPIC_GLOBAL --><i class="fa fa-comments"></i>&nbsp;{L_IN}&nbsp;<a href="{searchresults.U_VIEW_FORUM}">{searchresults.FORUM_TITLE}</a><!-- ELSE -->&nbsp;&#40;{L_GLOBAL}&#41;<!-- ENDIF -->*/
/* 			<!-- EVENT topiclist_row_append -->*/
/* 			</span>*/
/* 			</td>*/
/* 			<td class="stats-col"><span class="stats-wrapper">{searchresults.TOPIC_REPLIES}&nbsp;{L_REPLIES}<br />&nbsp;{searchresults.TOPIC_VIEWS}&nbsp;{L_VIEWS}</span></td>*/
/* 			<td class="center">{L_POST_BY_AUTHOR}&nbsp;{searchresults.LAST_POST_AUTHOR_FULL}*/
/* 			<!-- IF not S_IS_BOT --><a rel="tooltip" data-placement="right" data-original-title="{L_FORUMLIST_LASTPOST}" href="{searchresults.U_LAST_POST}"><i class="mobile-post fa fa-sign-out"></i></a><!-- ENDIF -->*/
/* 			<br /><small>{searchresults.LAST_POST_TIME}</small>*/
/* 			</td>*/
/* 		</tr>*/
/* 		<!-- EVENT search_results_topic_after -->*/
/* 		<!-- END searchresults -->*/
/* 		 </tbody>*/
/* 	</table>*/
/* 	</div>*/
/*     </div>*/
/* 	*/
/* 	<!-- ELSE -->*/
/* 	<div class="alert alert-info fade in">*/
/*        <button data-dismiss="alert" class="close" type="button" aria-hidden="true"><i class="awe-remove-circle"></i></button>*/
/*        <i class="fa fa-warning"></i> <strong>{L_INFO_BOX}</strong>&nbsp;{L_NO_SEARCH_RESULTS}*/
/*     </div> */
/* 	<!-- ENDIF -->*/
/* */
/* <!-- ELSE -->*/
/* */
/* <!-- BEGIN searchresults -->*/
/* <!-- EVENT search_results_post_before -->*/
/* <div class="clearfix">*/
/* 	<div class="well well-sm">*/
/* 	<!-- IF searchresults.S_IGNORE_POST -->*/
/* 		<div class="postbody">*/
/* 			{searchresults.L_IGNORE_POST}*/
/* 		</div>*/
/* 	<!-- ELSE -->*/
/* 		<div class="pull-left">*/
/* 			<h4><a href="{searchresults.U_VIEW_POST}">{searchresults.POST_SUBJECT}</a></h4>*/
/* 		<!-- EVENT search_results_postprofile_before -->	*/
/* 		   <span class="text-muted"><i class="fa fa-user"></i>&nbsp;{L_POST_BY_AUTHOR}&nbsp;{searchresults.POST_AUTHOR_FULL}&nbsp;&#166;&nbsp;<i class="fa fa-clock-o"></i>&nbsp;{searchresults.POST_DATE}&nbsp;&#166;</span> */
/* 		<!-- IF searchresults.FORUM_TITLE -->*/
/*            <span class="text-muted"><i class="fa fa-folder"></i>&nbsp;{L_FORUM}{L_COLON}&nbsp;<a href="{searchresults.U_VIEW_FORUM}">{searchresults.FORUM_TITLE}</a>&nbsp;&#166;&nbsp;<i class="fa fa-folder-open"></i>&nbsp;{L_TOPIC}{L_COLON}&nbsp;<a href="{searchresults.U_VIEW_TOPIC}">{searchresults.TOPIC_TITLE}</a>&nbsp;&#166;</span> */
/* 			<!-- ELSE -->*/
/* 			<span class="text-muted"><i class="fa fa-plus"></i>&nbsp;{L_GLOBAL}{L_COLON}&nbsp;<a href="{searchresults.U_VIEW_TOPIC}">{searchresults.TOPIC_TITLE}</a>&nbsp;&#166;</span> */
/* 			<!-- ENDIF -->*/
/* 			<span class="text-muted"><i class="fa fa-comments"></i>&nbsp;{L_REPLIES}{L_COLON}&nbsp;<strong>{searchresults.TOPIC_REPLIES}</strong>&nbsp;&#166;&nbsp;<i class="fa fa-eye"></i>&nbsp;{L_VIEWS}{L_COLON}&nbsp;<strong>{searchresults.TOPIC_VIEWS}</strong></span> */
/* 		<!-- EVENT search_results_postprofile_after -->*/
/* 		</div>*/
/* 		<div class="space10"></div>*/
/* 			<div class="content"><p>{searchresults.MESSAGE}</p></div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF not searchresults.S_IGNORE_POST -->*/
/* 	<div class="clearfix">*/
/* 		<div class="pull-right"><a href="{searchresults.U_VIEW_POST}">{L_JUMP_TO_POST}</a></div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/*     </div>*/
/* 	</div>*/
/* 	<!-- EVENT search_results_post_after -->*/
/* 	<!-- BEGINELSE -->*/
/* 	<div class="alert alert-info fade in">*/
/*        <button data-dismiss="alert" class="close" type="button" aria-hidden="true"><i class="awe-remove-circle"></i></button>*/
/*        <i class="fa fa-warning"></i><strong>{L_INFO_BOX}</strong>&nbsp;{L_NO_SEARCH_RESULTS}*/
/*     </div> */
/* 	<!-- END searchresults -->*/
/* <!-- ENDIF -->*/
/* */
/* */
/* <div class="row">*/
/* <!-- IF .pagination or .searchresults or PAGE_NUMBER or S_SELECT_SORT_KEY or S_SELECT_SORT_DAYS -->  */
/* <div class="col-md-8 col-md-push-4">*/
/*   <div class="clearfix"> */
/* 	    <ul class="pagination pagination-sm hidden-xs pull-right">*/
/* 			<!-- IF S_SELECT_SORT_DAYS or S_SELECT_SORT_KEY -->*/
/* 			 <li><a title="" data-original-title="" href="javascript:void(0);" data-target=".sorting" data-toggle="collapse">{L_OPTIONS}</a></li>*/
/* 			<!-- ENDIF -->*/
/* 			 <li class="active"><a>{SEARCH_MATCHES}</a></li>*/
/* 			<!-- IF .pagination -->*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			<!-- ELSE -->*/
/* 				<li class="active"><a>{PAGE_NUMBER}</a></li>	*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF U_MARK_ALL_READ -->*/
/* 				<li><a href="{U_MARK_ALL_READ}" class="mark-read">{L_MARK_ALL_READ}</a></li>*/
/* 			<!-- ENDIF -->*/
/* 		</ul>*/
/* 	*/
/* 		<div class="visible-xs pull-right"> */
/* 		  <div class="clearfix"> */
/* 			 <ul class="pagination pagination-sm">*/
/* 				<!-- IF .pagination -->*/
/* 					<!-- INCLUDE pagination_mobile.html -->*/
/* 				<!-- ELSE -->*/
/* 					<li class="active"><a>{PAGE_NUMBER}</a></li>	*/
/* 				<!-- ENDIF -->*/
/* 			</ul>*/
/* 		  </div>*/
/* 	   </div>*/
/*    </div>*/
/*  </div>  */
/* <!-- ENDIF -->*/
/* */
/* <div class="col-md-4 col-md-pull-8">*/
/* <!-- INCLUDE jumpbox_options.html -->*/
/* </div>*/
/* */
/* </div>*/
/* */
/* <!-- INCLUDE jump_links.html -->*/
/* */
/* <!-- IF .searchresults and (S_SELECT_SORT_DAYS or S_SELECT_SORT_KEY) -->*/
/* 	<form method="post" action="{S_SEARCH_ACTION}">*/
/* 		<!-- INCLUDE display_options.html -->*/
/* 	</form>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
