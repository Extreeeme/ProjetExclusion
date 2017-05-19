<?php

/* overall_header.html */
class __TwigTemplate_ab609d5e791c0a67667196bf60d15f23dd4e596f1db9de55a2de6ca621701c01 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"designer\" content=\"SiteSplat http://themeforest.net/user/themesplat/portfolio?ref=ThemeSplat\">
<meta content=\"";
        // line 7
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\" property=\"og:site_name\">
";
        // line 8
        // line 9
        echo "<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
";
        // line 10
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "
<title>";
        // line 11
        if ((isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null)) {
            echo "&#40;";
            echo (isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null);
            echo "&#41;&nbsp;";
        }
        if (( !(isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) &&  !(isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo "&nbsp;&#45;&nbsp;";
        }
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "&nbsp;&#45;&nbsp;";
        } elseif ((isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo "&nbsp;&#45;&nbsp;";
        }
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        if (((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) || (isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo "&nbsp;&#45;&nbsp;";
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        }
        echo "</title>
";
        // line 12
        if ((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null)) {
            // line 13
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_OVERALL"]) ? $context["S_ENABLE_FEEDS_OVERALL"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
                echo "\" href=\"";
                echo $this->env->getExtension('routing')->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 14
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_NEWS"]) ? $context["S_ENABLE_FEEDS_NEWS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->env->getExtension('routing')->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 15
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_FORUMS"]) ? $context["S_ENABLE_FEEDS_FORUMS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->env->getExtension('routing')->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 16
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS"]) ? $context["S_ENABLE_FEEDS_TOPICS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->env->getExtension('routing')->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 17
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]) ? $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->env->getExtension('routing')->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 18
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_FORUM"]) ? $context["S_ENABLE_FEEDS_FORUM"] : null) && (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "\" href=\"";
                echo $this->env->getExtension('routing')->getPath("phpbb_feed_forum", array("forum_id" => (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null)));
                echo "\">";
            }
            // line 19
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_TOPIC"]) ? $context["S_ENABLE_FEEDS_TOPIC"] : null) && (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
                echo "\" href=\"";
                echo $this->env->getExtension('routing')->getPath("phpbb_feed_topic", array("topic_id" => (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null)));
                echo "\">";
            }
            // line 20
        }
        // line 22
        echo "
";
        // line 23
        if ((isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null)) {
            // line 24
            echo "\t<link rel=\"canonical\" href=\"";
            echo (isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null);
            echo "\" />
";
        }
        // line 26
        echo "
<!-- Google free font here -->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Asap:700' rel='stylesheet' type='text/css'>

<!-- CSS files start here -->
<link href=\"";
        // line 32
        echo (isset($context["T_STYLESHEET_LINK"]) ? $context["T_STYLESHEET_LINK"] : null);
        echo "\" rel=\"stylesheet\">
";
        // line 33
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 34
            echo "<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/plupload.css\" rel=\"stylesheet\">
";
        }
        // line 36
        // line 37
        echo "
";
        // line 38
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "

<link href=\"";
        // line 40
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/custom.css\" rel=\"stylesheet\">
";
        // line 41
        // line 42
        echo "<!-- CSS files stop here -->

<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script src=\"";
        // line 45
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/jQuery.scrollSpeed.js\"></script>
<script>
\t\$(document).ready(function(){
\t\t\$.scrollSpeed(100, 1100);
\t});
</script>

";
        // line 52
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('galandas_advlogin', '__main__'));
        $this->env->loadTemplate('@galandas_advlogin/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('paul999_mention', '__main__'));
        $this->env->loadTemplate('@paul999_mention/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('spaceace_ajaxchat', '__main__'));
        $this->env->loadTemplate('@spaceace_ajaxchat/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_lightbox', '__main__'));
        $this->env->loadTemplate('@vse_lightbox/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_topicpreview', '__main__'));
        $this->env->loadTemplate('@vse_topicpreview/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 53
        echo "
<!-- older scripts set started here after the headjs - cannot do this with phpbb31 due to ajax stuff -->
<script src=\"//cdnjs.cloudflare.com/ajax/libs/headjs/1.0.3/head.load.min.js\"></script>

</head>
<body data-spy=\"scroll\" data-target=\".scrollspy\" id=\"phpbb\" class=\"section-";
        // line 58
        echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        echo " ";
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo "\">
";
        // line 59
        // line 60
        echo "
 <header id=\"top\" class=\"navbar navbar-inverse navbar-static-top flat-nav\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button data-target=\".flat-nav-collapse\" data-toggle=\"collapse\" type=\"button\" class=\"nav-tog lines-button x navbar-toggle neutro\">
\t   <span class=\"sr-only sr-nav\">";
        // line 65
        echo $this->env->getExtension('phpbb')->lang("TOGGLE_NAV");
        echo "</span>
        <span class=\"lines\"></span>
      </button>
\t  ";
        // line 68
        if ((isset($context["LOGO_IMAGE_EXIST"]) ? $context["LOGO_IMAGE_EXIST"] : null)) {
            // line 69
            echo "      \t<a class=\"navbar-brand\" href=\"";
            if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            } else {
                echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            }
            echo "\"><img style=\"max-height: 60px; max-width:100%; margin-top: -20px;\" class=\"img-responsive\" src=\"";
            echo (isset($context["T_IMAGES_PATH"]) ? $context["T_IMAGES_PATH"] : null);
            echo "../ext/sitesplat/flatbootsminicms/images/logo/";
            echo (isset($context["LOGO_FILENAME"]) ? $context["LOGO_FILENAME"] : null);
            echo "\" alt=\"";
            echo (isset($context["LOGO_TEXT"]) ? $context["LOGO_TEXT"] : null);
            echo "\" /></a>
      ";
        } elseif (        // line 70
(isset($context["LOGO_TEXT"]) ? $context["LOGO_TEXT"] : null)) {
            // line 71
            echo "\t    <a class=\"navbar-brand\" href=\"";
            if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            } else {
                echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            }
            echo "\">";
            echo (isset($context["LOGO_TEXT"]) ? $context["LOGO_TEXT"] : null);
            echo "</a>
\t  ";
        } else {
            // line 73
            echo "      \t<a class=\"navbar-brand\" href=\"";
            if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            } else {
                echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            }
            echo "\"><img style=\"max-width:120px; margin-top: -10px;\" src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/logo_homophobie.png\" class=\"img-responsive\" alt=\"Forum Logo\"></a>
      ";
        }
        // line 75
        echo "    </div>
\t";
        // line 76
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            // line 77
            echo "        ";
            // line 78
            echo "    ";
        } else {
            // line 79
            echo "\t    ";
            $location = "addons/navigation.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/navigation.html", "overall_header.html", 79)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 80
            echo "\t";
        }
        echo "\t
  </div>
 </header>
    <div class=\"search-input search-input-fullscreen hidden-xs\">
\t   <form method=\"get\" id=\"search\" action=\"";
        // line 84
        echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
        echo "\">
\t\t   <fieldset>
\t\t   <input name=\"keywords\" id=\"keywords\" type=\"text\" maxlength=\"128\" title=\"";
        // line 86
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo "\" placeholder=\"";
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "\" value=\"\" autocomplete=\"off\"/>
\t\t   <div class=\"close\">&times;</div>
\t\t   ";
        // line 88
        echo (isset($context["S_SEARCH_HIDDEN_FIELDS"]) ? $context["S_SEARCH_HIDDEN_FIELDS"] : null);
        echo "
\t\t   </fieldset> 
        </form> 
    </div>

";
        // line 93
        if ( !(isset($context["HIDE_HEADER"]) ? $context["HIDE_HEADER"] : null)) {
            echo "\t\t
  ";
            // line 94
            if ((isset($context["IN_BADGE"]) ? $context["IN_BADGE"] : null)) {
                // line 95
                echo "   ";
                $location = "@sitesplat_badge/header_badge_teaser.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("@sitesplat_badge/header_badge_teaser.html", "overall_header.html", 95)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 96
                echo "  ";
            } else {
                // line 97
                echo "   ";
                $location = "addons/header_teaser_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("addons/header_teaser_body.html", "overall_header.html", 97)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 98
                echo "  ";
            }
        } else {
            // line 100
            echo "<div style=\"padding-top:30px;\" class=\"space-teaser\"></div>
";
        }
        // line 102
        echo "  
<div class=\"container\">
  <!-- start content -->
  <div id=\"content-forum\">

  ";
        // line 107
        // line 108
        echo "\t<div class=\"breadcrumb-line clearfix\">
\t\t<ul class=\"breadcrumb\">
\t\t<!-- https://developers.google.com/structured-data/testing-tool/ -->
\t\t";
        // line 111
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 112
        echo "
\t\t";
        // line 113
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            // line 114
            echo "\t\t   <li><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\"><span class=\"icon fa fa-home\"></span></a></li>
\t\t   <li ";
            // line 115
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</span></a></li>
\t\t";
        } else {
            // line 117
            echo "\t\t   <li><a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\"><span class=\"icon fa fa-home\"></span></a></li>
\t\t   ";
            // line 118
            // line 119
            echo "\t\t   <li ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\" data-navbar-reference=\"index\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb')->lang("INDEX");
            echo "</span></a></li>
\t\t   ";
            // line 120
            echo " 
\t\t";
        }
        // line 122
        echo "
\t\t  ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 124
            echo "\t\t   <li ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a itemprop=\"url\" href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\"";
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo "><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></li>\t\t 
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo " 
\t\t</ul>
\t\t";
        // line 127
        if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewforum") || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewtopic")))) {
            // line 128
            echo "\t\t<ul class=\"breadcrumb-buttons visible-xxs\">
\t\t    <li>
\t\t\t  <a href=\"#\" title=\"\" data-toggle=\"modal\" data-target=\"#BreadcrumbMap\">
\t\t\t   <i class=\"icon fa fa-sitemap\"></i>
\t\t\t  </a>
\t\t   </li>
\t\t</ul>
\t\t";
        }
        // line 136
        echo "\t\t";
        echo "  
\t</div>
\t
    ";
        // line 139
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('galandas_advlogin', '__main__'));
        $this->env->loadTemplate('@galandas_advlogin/event/overall_header_page_body_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 140
        echo "\t
\t<div id=\"page-body\">
\t
\t";
        // line 143
        if ((((isset($context["S_BOARD_DISABLED"]) ? $context["S_BOARD_DISABLED"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) && ((isset($context["U_MCP"]) ? $context["U_MCP"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null)))) {
            // line 144
            echo "\t<div class=\"alert alert-warning fade in\">
\t\t<button data-dismiss=\"alert\" class=\"close\"><span class=\"awe-remove-circle\"></span></button>
\t\t<i class=\"fa fa-info\"></i>&nbsp;<strong>";
            // line 146
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("BOARD_DISABLED");
            echo "
\t</div>
\t";
        }
        // line 149
        echo "\t
    ";
        // line 150
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 150,  526 => 149,  517 => 146,  513 => 144,  511 => 143,  506 => 140,  501 => 139,  495 => 136,  485 => 128,  483 => 127,  479 => 125,  461 => 124,  457 => 123,  454 => 122,  450 => 120,  441 => 119,  440 => 118,  435 => 117,  426 => 115,  421 => 114,  419 => 113,  416 => 112,  413 => 111,  408 => 108,  407 => 107,  400 => 102,  396 => 100,  392 => 98,  379 => 97,  376 => 96,  363 => 95,  361 => 94,  357 => 93,  349 => 88,  342 => 86,  337 => 84,  329 => 80,  316 => 79,  313 => 78,  311 => 77,  309 => 76,  306 => 75,  294 => 73,  282 => 71,  280 => 70,  265 => 69,  263 => 68,  257 => 65,  250 => 60,  249 => 59,  241 => 58,  234 => 53,  213 => 52,  203 => 45,  198 => 42,  197 => 41,  193 => 40,  188 => 38,  185 => 37,  184 => 36,  178 => 34,  176 => 33,  172 => 32,  164 => 26,  158 => 24,  156 => 23,  153 => 22,  151 => 20,  138 => 19,  125 => 18,  114 => 17,  103 => 16,  92 => 15,  81 => 14,  70 => 13,  68 => 12,  44 => 11,  40 => 10,  37 => 9,  36 => 8,  32 => 7,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{S_CONTENT_DIRECTION}" lang="{S_USER_LANG}">*/
/* <head>*/
/* <meta charset="utf-8">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* <meta name="designer" content="SiteSplat http://themeforest.net/user/themesplat/portfolio?ref=ThemeSplat">*/
/* <meta content="{SITENAME}" property="og:site_name">*/
/* <!-- EVENT overall_header_meta -->*/
/* <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->*/
/* {META}*/
/* <title><!-- IF UNREAD_NOTIFICATIONS_COUNT -->&#40;{UNREAD_NOTIFICATIONS_COUNT}&#41;&nbsp;<!-- ENDIF --><!-- IF not S_VIEWTOPIC and not S_VIEWFORUM -->{SITENAME}&nbsp;&#45;&nbsp;<!-- ENDIF --><!-- IF S_IN_MCP -->{L_MCP}&nbsp;&#45;&nbsp;<!-- ELSEIF S_IN_UCP -->{L_UCP}&nbsp;&#45;&nbsp;<!-- ENDIF -->{PAGE_TITLE}<!-- IF S_VIEWTOPIC or S_VIEWFORUM -->&nbsp;&#45;&nbsp;{SITENAME}<!-- ENDIF --></title>*/
/* <!-- IF S_ENABLE_FEEDS -->*/
/* 	<!-- IF S_ENABLE_FEEDS_OVERALL --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {SITENAME}" href="{{ path('phpbb_feed_index') }}"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_NEWS --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_NEWS}" href="{{ path('phpbb_feed_news') }}"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_FORUMS --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_ALL_FORUMS}" href="{{ path('phpbb_feed_forums') }}"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_TOPICS --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_TOPICS_NEW}" href="{{ path('phpbb_feed_topics') }}"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_TOPICS_ACTIVE --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_TOPICS_ACTIVE}" href="{{ path('phpbb_feed_topics_active') }}"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_FORUM and S_FORUM_ID --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FORUM} - {FORUM_NAME}" href="{{ path('phpbb_feed_forum', { forum_id : S_FORUM_ID } ) }}"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_TOPIC and S_TOPIC_ID --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_TOPIC} - {TOPIC_TITLE}" href="{{ path('phpbb_feed_topic', { topic_id : S_TOPIC_ID } ) }}"><!-- ENDIF -->*/
/* <!-- EVENT overall_header_feeds -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF U_CANONICAL -->*/
/* 	<link rel="canonical" href="{U_CANONICAL}" />*/
/* <!-- ENDIF -->*/
/* */
/* <!-- Google free font here -->*/
/* <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>*/
/* <link href='//fonts.googleapis.com/css?family=Asap:700' rel='stylesheet' type='text/css'>*/
/* */
/* <!-- CSS files start here -->*/
/* <link href="{T_STYLESHEET_LINK}" rel="stylesheet">*/
/* <!-- IF S_PLUPLOAD -->*/
/* <link href="{T_THEME_PATH}/plupload.css" rel="stylesheet">*/
/* <!-- ENDIF -->*/
/* <!-- EVENT overall_header_stylesheets_after -->*/
/* */
/* {$STYLESHEETS}*/
/* */
/* <link href="{T_THEME_PATH}/custom.css" rel="stylesheet">*/
/* <!-- EVENT override_custom_css -->*/
/* <!-- CSS files stop here -->*/
/* */
/* <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>*/
/* <script src="{T_THEME_PATH}/vendors/jQuery.scrollSpeed.js"></script>*/
/* <script>*/
/* 	$(document).ready(function(){*/
/* 		$.scrollSpeed(100, 1100);*/
/* 	});*/
/* </script>*/
/* */
/* <!-- EVENT overall_header_head_append -->*/
/* */
/* <!-- older scripts set started here after the headjs - cannot do this with phpbb31 due to ajax stuff -->*/
/* <script src="//cdnjs.cloudflare.com/ajax/libs/headjs/1.0.3/head.load.min.js"></script>*/
/* */
/* </head>*/
/* <body data-spy="scroll" data-target=".scrollspy" id="phpbb" class="section-{SCRIPT_NAME} {S_CONTENT_DIRECTION} {BODY_CLASS}">*/
/* <!-- EVENT overall_header_body_before -->*/
/* */
/*  <header id="top" class="navbar navbar-inverse navbar-static-top flat-nav">*/
/*   <div class="container">*/
/*     <div class="navbar-header">*/
/*       <button data-target=".flat-nav-collapse" data-toggle="collapse" type="button" class="nav-tog lines-button x navbar-toggle neutro">*/
/* 	   <span class="sr-only sr-nav">{L_TOGGLE_NAV}</span>*/
/*         <span class="lines"></span>*/
/*       </button>*/
/* 	  <!-- IF LOGO_IMAGE_EXIST -->*/
/*       	<a class="navbar-brand" href="<!-- IF U_SITE_HOME -->{U_SITE_HOME}<!-- ELSE -->{U_INDEX}<!-- ENDIF -->"><img style="max-height: 60px; max-width:100%; margin-top: -20px;" class="img-responsive" src="{T_IMAGES_PATH}../ext/sitesplat/flatbootsminicms/images/logo/{LOGO_FILENAME}" alt="{LOGO_TEXT}" /></a>*/
/*       <!-- ELSEIF LOGO_TEXT -->*/
/* 	    <a class="navbar-brand" href="<!-- IF U_SITE_HOME -->{U_SITE_HOME}<!-- ELSE -->{U_INDEX}<!-- ENDIF -->">{LOGO_TEXT}</a>*/
/* 	  <!-- ELSE -->*/
/*       	<a class="navbar-brand" href="<!-- IF U_SITE_HOME -->{U_SITE_HOME}<!-- ELSE -->{U_INDEX}<!-- ENDIF -->"><img style="max-width:120px; margin-top: -10px;" src="{T_THEME_PATH}/images/logo_homophobie.png" class="img-responsive" alt="Forum Logo"></a>*/
/*       <!-- ENDIF -->*/
/*     </div>*/
/* 	<!-- IF FLATBOOTS_MINI_CMS_ENABLED -->*/
/*         <!-- EVENT flatboots_navigation_instead -->*/
/*     <!-- ELSE -->*/
/* 	    <!-- INCLUDE addons/navigation.html -->*/
/* 	<!-- ENDIF -->	*/
/*   </div>*/
/*  </header>*/
/*     <div class="search-input search-input-fullscreen hidden-xs">*/
/* 	   <form method="get" id="search" action="{U_SEARCH}">*/
/* 		   <fieldset>*/
/* 		   <input name="keywords" id="keywords" type="text" maxlength="128" title="{L_SEARCH_KEYWORDS}" placeholder="{L_SEARCH}" value="" autocomplete="off"/>*/
/* 		   <div class="close">&times;</div>*/
/* 		   {S_SEARCH_HIDDEN_FIELDS}*/
/* 		   </fieldset> */
/*         </form> */
/*     </div>*/
/* */
/* <!-- IF not HIDE_HEADER -->		*/
/*   <!-- IF IN_BADGE -->*/
/*    <!-- INCLUDE @sitesplat_badge/header_badge_teaser.html -->*/
/*   <!-- ELSE -->*/
/*    <!-- INCLUDE addons/header_teaser_body.html -->*/
/*   <!-- ENDIF -->*/
/* <!-- ELSE -->*/
/* <div style="padding-top:30px;" class="space-teaser"></div>*/
/* <!-- ENDIF -->*/
/*   */
/* <div class="container">*/
/*   <!-- start content -->*/
/*   <div id="content-forum">*/
/* */
/*   <!-- EVENT header_breadcrumb_before -->*/
/* 	<div class="breadcrumb-line clearfix">*/
/* 		<ul class="breadcrumb">*/
/* 		<!-- https://developers.google.com/structured-data/testing-tool/ -->*/
/* 		<!-- DEFINE $MICRODATA = ' itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""' -->*/
/* */
/* 		<!-- IF U_SITE_HOME -->*/
/* 		   <li><a href="{U_SITE_HOME}"><span class="icon fa fa-home"></span></a></li>*/
/* 		   <li {$MICRODATA}><a href="{U_SITE_HOME}" data-navbar-reference="home" itemprop="url"><span itemprop="title">{L_SITE_HOME}</span></a></li>*/
/* 		<!-- ELSE -->*/
/* 		   <li><a href="{U_INDEX}"><span class="icon fa fa-home"></span></a></li>*/
/* 		   <!-- EVENT overall_header_breadcrumbs_before -->*/
/* 		   <li {$MICRODATA}><a href="{U_INDEX}" data-navbar-reference="index" itemprop="url"><span itemprop="title">{L_INDEX}</span></a></li>*/
/* 		   <!-- EVENT overall_header_breadcrumbs_after --> */
/* 		<!-- ENDIF -->*/
/* */
/* 		  <!-- BEGIN navlinks -->*/
/* 		   <li {$MICRODATA}><a itemprop="url" href="{navlinks.U_VIEW_FORUM}"<!-- IF navlinks.MICRODATA --> {navlinks.MICRODATA}<!-- ENDIF -->><span itemprop="title">{navlinks.FORUM_NAME}</span></a></li>		 */
/* 		  <!-- END navlinks --> */
/* 		</ul>*/
/* 		<!-- IF S_USER_LOGGED_IN and (SCRIPT_NAME == "viewforum" or SCRIPT_NAME == "viewtopic") -->*/
/* 		<ul class="breadcrumb-buttons visible-xxs">*/
/* 		    <li>*/
/* 			  <a href="#" title="" data-toggle="modal" data-target="#BreadcrumbMap">*/
/* 			   <i class="icon fa fa-sitemap"></i>*/
/* 			  </a>*/
/* 		   </li>*/
/* 		</ul>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT overall_header_breadcrumbs_buttons -->  */
/* 	</div>*/
/* 	*/
/*     <!-- EVENT overall_header_page_body_before -->*/
/* 	*/
/* 	<div id="page-body">*/
/* 	*/
/* 	<!-- IF S_BOARD_DISABLED and S_USER_LOGGED_IN and (U_MCP or U_ACP) -->*/
/* 	<div class="alert alert-warning fade in">*/
/* 		<button data-dismiss="alert" class="close"><span class="awe-remove-circle"></span></button>*/
/* 		<i class="fa fa-info"></i>&nbsp;<strong>{L_INFORMATION}{L_COLON}</strong>&nbsp;{L_BOARD_DISABLED}*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* 	*/
/*     <!-- EVENT overall_header_content_before -->*/
