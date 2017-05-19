<?php

/* overall_footer.html */
class __TwigTemplate_2c0759190b342663484901e1d6e79efbc4bd19386d21f9295e17bacbeb6e7a65 extends Twig_Template
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
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('spaceace_ajaxchat', '__main__'));
        $this->env->loadTemplate('@spaceace_ajaxchat/event/overall_footer_content_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 2
        echo "
\t</div> <!-- page-body id in header -->
  </div> <!-- content-forum in header -->
 </div> <!-- container in header -->

";
        // line 7
        // line 8
        echo "
";
        // line 9
        if ((( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "index"))) {
            // line 10
            echo "    ";
            $location = "addons/sitesplat_login_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/sitesplat_login_body.html", "overall_footer.html", 10)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 12
        echo "\t
\t";
        // line 13
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            // line 14
            echo "\t\t";
            // line 15
            echo "\t";
        } else {
            // line 16
            echo "    <section class=\"section-pre-footer\">
\t\t<div class=\"container center\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-5 twitter\">
\t\t\t\t";
            // line 20
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bbtags", array())) && ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "index"))) {
                // line 21
                echo "\t\t\t\t\t ";
                // line 22
                echo "\t\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t\t<div class=\"thumb\"><i class=\"fa fa-question\"></i></div>
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<h3>";
                // line 25
                echo $this->env->getExtension('phpbb')->lang("FLATBOOTS_ABOUT_TITLE");
                echo "</h3>
\t\t\t\t\t\t<p>";
                // line 26
                echo $this->env->getExtension('phpbb')->lang("FLATBOOTS_ABOUT_PART_ONE");
                echo "</p>
\t\t\t\t\t\t<a href=\"#\"><strong>";
                // line 27
                echo $this->env->getExtension('phpbb')->lang("READ_MORE");
                echo "</strong></a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 29
            echo "\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-5 col-sm-offset-2 twitter\">
\t\t\t\t\t<div class=\"thumb\"><i class=\"fa fa-twitter\"></i></div>
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<h3><a href=\"https://twitter.com/lerefuge\">";
            // line 34
            echo $this->env->getExtension('phpbb')->lang("JOIN_US_TWITTER");
            echo "&nbsp;<small>@lerefuge</small></a></h3>
\t\t\t\t\t\t <div id=\"twitter-feed\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t <div class=\"section-bg\"></div>
\t</section>
\t";
        }
        // line 43
        echo "    
\t<footer class=\"burned-asphalt\"> <!-- Footer block -->
\t\t<div class=\"midnight-\" id=\"sub-footer\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"row bottomLinks\">
\t\t\t\t\t<div class=\"col-sm-6 sm-direction\">
\t\t\t\t\t <nav>
\t\t\t\t\t";
        // line 51
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            // line 52
            echo "\t\t\t\t\t\t";
            // line 53
            echo "\t\t\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t\t\t<ul class=\"list-inline footer-nav\">
\t\t\t\t\t\t <li><a href=\"";
            // line 55
            echo (isset($context["U_PRIVACY"]) ? $context["U_PRIVACY"] : null);
            echo "\" title=\"\">";
            echo $this->env->getExtension('phpbb')->lang("PRIVACY");
            echo "</a></li>
\t\t\t\t\t\t <li><a href=\"";
            // line 56
            echo (isset($context["U_TERMS_USE"]) ? $context["U_TERMS_USE"] : null);
            echo "\" title=\"\">";
            echo $this->env->getExtension('phpbb')->lang("TERMS");
            echo "</a></li>
\t\t\t\t\t\t ";
            // line 57
            // line 58
            echo "\t\t\t\t\t\t <li><a href=\"";
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\" title=\"\">";
            echo $this->env->getExtension('phpbb')->lang("TEAM");
            echo "</a></li>
\t\t\t\t\t\t <li><a href=\"#\" title=\"\">";
            // line 59
            echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
            echo "</a></li>
\t\t\t\t\t\t ";
            // line 60
            // line 61
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 62
        echo "\t
\t\t\t\t\t </nav>
\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6 sm-direction\">\t
\t\t\t\t\t\t<div class=\"clearfix socialbar\">
\t\t\t\t\t\t";
        // line 68
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            // line 69
            echo "\t\t\t\t\t\t\t\t";
            // line 70
            echo "\t\t\t\t\t\t";
        } else {
            // line 71
            echo "\t\t\t\t\t\t\t<div class=\"social-network\">
\t\t\t\t\t\t\t\t<a class=\"facebook-color\" title=\"Facebook\" href=\"#6\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t<a class=\"twitter-color\" title=\"Twitter\" href=\"https://twitter.com/SiteSplat\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 75
        echo "\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t
                <div class=\"row\">\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6 sm-direction\">
\t\t\t\t\t <p class=\"copyrights\">
\t\t\t\t\t  ";
        // line 83
        // line 84
        echo "\t\t\t\t\t  <small>";
        echo $this->env->getExtension('phpbb')->lang("HANDCRAFTED");
        echo "</small>&nbsp;<i class=\"fa fa-heart text-flatboots-red\"></i>&nbsp;<small>";
        echo $this->env->getExtension('phpbb')->lang("AND");
        echo "</small>&nbsp;<i class=\"fa fa-coffee\"></i>&nbsp;<small>";
        echo $this->env->getExtension('phpbb')->lang("BY");
        echo "<a href=\"http://www.sitesplat.com/\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("SITESPLAT");
        echo "\" target=\"_blank\">&nbsp;";
        echo $this->env->getExtension('phpbb')->lang("SITESPLAT");
        echo "</a>&nbsp;&#45;&nbsp;";
        echo $this->env->getExtension('phpbb')->lang("POWERED");
        echo "&nbsp;<a href=\"http://www.phpbb.com/\" title=\"Forum Software &copy; phpBB&reg; Group\" target=\"_blank\">phpBB</a></small>
\t\t\t\t\t  ";
        // line 85
        // line 86
        echo "\t\t\t\t\t </p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6 sm-direction\">
\t\t\t\t\t  <p class=\"debug-output\">
\t\t\t\t\t  ";
        // line 91
        // line 92
        echo "\t\t\t\t\t\t<small>&#45;&nbsp;";
        echo (isset($context["S_TIMEZONE"]) ? $context["S_TIMEZONE"] : null);
        echo "&nbsp;&#45;</small>
\t\t\t\t\t  ";
        // line 93
        // line 94
        echo "\t\t\t\t\t\t";
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            echo " <small>";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
            echo "</small>";
        }
        // line 95
        echo "\t\t\t\t\t\t<!-- ";
        echo $this->env->getExtension('phpbb')->lang("FLATBOOTS_VERSION");
        echo " -->
\t\t\t\t\t  </p>
\t\t\t\t\t</div>
\t\t\t\t</div>\t

\t\t\t</div>
\t\t</div>
\t</footer>

<a id=\"totop\" class=\"top-flat\" href=\"\" onclick=\"return false;\" style=\"display:none;\"></a>

<div class=\"hidden\">";
        // line 106
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            echo (isset($context["RUN_CRON_TASK"]) ? $context["RUN_CRON_TASK"] : null);
        }
        echo "</div> 

<!-- injected via core and ajax JS for the return confirmation actions -->
   <div id=\"page-footer\">
\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 110
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"alert alert-default phpbb_alert\" data-l-err=\"";
        // line 114
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<button type=\"button\" class=\"close alert_close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t<h3 class=\"alert_title\">&nbsp;</h3>
\t\t <p class=\"alert_text\"></p>
\t</div>
\t
\t<div id=\"phpbb_confirm\" class=\"alert alert-default phpbb_alert\">
\t\t<button type=\"button\" class=\"close alert_close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t<div class=\"alert_text\"></div>
\t</div>
  </div>\t
<!-- injected via core and ajax JS for the return confirmation actions -->

";
        // line 127
        if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewforum") || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewtopic")))) {
            // line 128
            echo "\t<div class=\"modal fade\" id=\"BreadcrumbMap\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"BreadcrumbsLabel\">
\t  <div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t  <div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t<h4 class=\"modal-title\" id=\"BreadcrumbsLabel\">";
            // line 133
            echo $this->env->getExtension('phpbb')->lang("NAVIGATION");
            echo "</h4>
\t\t  </div>
\t\t  <div class=\"modal-body file-tree\">
\t\t   <ul>
\t\t\t<li class=\"root\"><a href=\"";
            // line 137
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("INDEX");
            echo "</a></li>
\t\t\t";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
                // line 139
                echo "\t\t\t   <li><a href=\"";
                echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "\t\t   </ul>
\t\t    <i class=\"icon-compass fa fa-compass\"></i>
\t\t  </div>
\t\t  <div class=\"modal-footer\">
\t\t  </div>
\t\t</div>
\t  </div>
\t</div>
\t";
        }
        // line 150
        echo "
\t";
        // line 151
        if ((isset($context["ENABLE_POPUP_LOGIN"]) ? $context["ENABLE_POPUP_LOGIN"] : null)) {
            // line 152
            echo "\t\t<div class=\"modal fade\" id=\"modal-login\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t\t\t\t<h3 class=\"modal-title\">";
            // line 157
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 160
            echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
            echo "\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<label for=\"username\" class=\"control-label\">";
            // line 162
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-icon left\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"username\" id=\"username\" placeholder=\"";
            // line 165
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<label for=\"password\" class=\"control-label\">";
            // line 168
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-icon left\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-key\"></i>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"password\" id=\"password\" placeholder=\"";
            // line 171
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 173
            if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                // line 174
                echo "\t\t\t\t\t\t\t\t\t<div class=\"controls controls-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"radio\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin-pop\"><label for=\"autologin-pop\">";
                // line 175
                echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                echo "</label></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 178
            echo "\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" id=\"load\" name=\"login\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "\" data-loading-text=\"";
            echo $this->env->getExtension('phpbb')->lang("LOADING_LOG_IN");
            echo " <i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "</button>
\t\t\t\t\t\t\t\t";
            // line 179
            echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
            echo "
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</form> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t</div>
\t\t\t\t</div><!-- /.modal-content -->
\t\t\t</div><!-- /.modal-dialog -->
\t\t</div><!-- /.modal -->
\t";
        }
        // line 189
        echo "
<script>
// this loads jquery asyncrounously & in parallel
head.load(\"//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js\", \"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js\", \"";
        // line 192
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/forum_fn.min.js\");
</script>

<!-- we use this event to load the JS scripts properly via the extension system -->
";
        // line 196
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('galandas_advlogin', '__main__'));
        $this->env->loadTemplate('@galandas_advlogin/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_lightbox', '__main__'));
        $this->env->loadTemplate('@vse_lightbox/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_topicpreview', '__main__'));
        $this->env->loadTemplate('@vse_topicpreview/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 197
        echo "
<!-- injected via a module or an include -->
<script>
// some function that depends on bootstrap and jquery
head.ready(function () {
\t\$('.footable').footable();\$(\".selectpicker\").selectpicker();\$(\".selectpicker\").tooltip(\"disable\");var totop=\$(\"#totop\");totop.click(function(){\$(\"html, body\").stop(true,true).animate({scrollTop:0},500);return false});\$(window).scroll(function(){if(\$(this).scrollTop()>600){totop.fadeIn()}else{totop.fadeOut()}});\$(\"button[data-loading-text], input[data-loading-text], .btn-load\").click(function(){var e=\$(this);e.button(\"loading\");setTimeout(function(){e.button(\"reset\")},3e3)});
\t\$(\"input\").iCheck({checkboxClass:\"icheckbox_flat-aero\",radioClass:\"iradio_flat-aero\"});\$(\".btn-search\").click(function(){\$(\".search-input\").toggleClass(\"open\").find(\"input\").focus()});\$(\".close\").click(function(){\$(this).prev(\"input\").val(\"\").parents(\".search-input\").removeClass(\"open\")});\$(\".nav-tog\").click(function(){if(\$(this).hasClass(\"neutro\")){\$(this).removeClass(\"neutro\").addClass(\"open\")}else{\$(this).removeClass(\"open\").addClass(\"neutro\")}});
\t\$('input[data-reset-on-edit]').on('keyup', function() {\$(this.getAttribute('data-reset-on-edit')).val('');});
\t\$('a').tooltip({trigger : 'hover',container: 'body'})
    \$('#notification_list_button').click(function(){setTimeout(function(){\$(\".nano\").nanoScroller();},0);});\t
});
// some function that depends on bootstrap and jquery
";
        // line 209
        if ( !(isset($context["HIDE_FOOTER"]) ? $context["HIDE_FOOTER"] : null)) {
            // line 210
            echo "head.load(\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/vendors/twitterFetcher.min.js\");
head.ready('twitterFetcher.min.js',function(twit){var twit={\"id\":'611092926492446720',\"domId\":'twitter-feed',\"maxTweets\":1,\"showUser\":true,\"showImages\":false,\"lang\":'fr',\"linksInNewWindow\":true,\"enableLinks\":true};twitterFetcher.fetch(twit)});
";
        }
        // line 213
        echo "</script>
<!-- injected via a module or an include -->

";
        // line 216
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS", array());
        echo "

";
        // line 218
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 219
            echo "<!-- // lets load the plupload crap super huge files because... wait for it wait for it. \"swear here\" -->
";
            // line 220
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 220)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 222
        echo "
";
        // line 223
        // line 224
        echo "
<!-- Google Analytics: change UA-XXXXXXXX-X to be your site's ID. -->
";
        // line 226
        echo (isset($context["GOOGLE_ANALYTICS"]) ? $context["GOOGLE_ANALYTICS"] : null);
        echo "
</body>
</html>   ";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  506 => 226,  502 => 224,  501 => 223,  498 => 222,  485 => 220,  482 => 219,  480 => 218,  475 => 216,  470 => 213,  463 => 210,  461 => 209,  447 => 197,  430 => 196,  423 => 192,  418 => 189,  405 => 179,  396 => 178,  390 => 175,  387 => 174,  385 => 173,  380 => 171,  373 => 168,  367 => 165,  360 => 162,  355 => 160,  347 => 157,  340 => 152,  338 => 151,  335 => 150,  324 => 141,  313 => 139,  309 => 138,  303 => 137,  296 => 133,  289 => 128,  287 => 127,  269 => 114,  254 => 110,  245 => 106,  230 => 95,  223 => 94,  222 => 93,  217 => 92,  216 => 91,  209 => 86,  208 => 85,  193 => 84,  192 => 83,  182 => 75,  175 => 71,  172 => 70,  170 => 69,  168 => 68,  160 => 62,  156 => 61,  155 => 60,  151 => 59,  144 => 58,  143 => 57,  137 => 56,  131 => 55,  128 => 54,  125 => 53,  123 => 52,  121 => 51,  111 => 43,  99 => 34,  92 => 29,  86 => 27,  82 => 26,  78 => 25,  74 => 23,  71 => 22,  69 => 21,  67 => 20,  61 => 16,  58 => 15,  56 => 14,  54 => 13,  51 => 12,  37 => 10,  35 => 9,  32 => 8,  31 => 7,  24 => 2,  19 => 1,);
    }
}
/* <!-- EVENT overall_footer_content_after -->*/
/* */
/* 	</div> <!-- page-body id in header -->*/
/*   </div> <!-- content-forum in header -->*/
/*  </div> <!-- container in header -->*/
/* */
/* <!-- EVENT overall_footer_page_body_after -->*/
/* */
/* <!-- IF not S_USER_LOGGED_IN and not S_IS_BOT and SCRIPT_NAME == "index" -->*/
/*     <!-- INCLUDE addons/sitesplat_login_body.html -->*/
/* <!-- ENDIF -->*/
/* 	*/
/* 	<!-- IF FLATBOOTS_MINI_CMS_ENABLED -->*/
/* 		<!-- EVENT prefooter_instead -->*/
/* 	<!-- ELSE -->*/
/*     <section class="section-pre-footer">*/
/* 		<div class="container center">*/
/* 			<div class="row">*/
/* 				<div class="col-sm-5 twitter">*/
/* 				<!-- IF .bbtags and SCRIPT_NAME == "index" -->*/
/* 					 <!-- EVENT about_section_before -->*/
/* 				<!-- ELSE -->*/
/* 					<div class="thumb"><i class="fa fa-question"></i></div>*/
/* 					<div class="text">*/
/* 						<h3>{L_FLATBOOTS_ABOUT_TITLE}</h3>*/
/* 						<p>{L_FLATBOOTS_ABOUT_PART_ONE}</p>*/
/* 						<a href="#"><strong>{L_READ_MORE}</strong></a>*/
/* 					</div>*/
/* 				<!-- ENDIF -->	*/
/* 				</div>*/
/* 				<div class="col-sm-5 col-sm-offset-2 twitter">*/
/* 					<div class="thumb"><i class="fa fa-twitter"></i></div>*/
/* 					<div class="text">*/
/* 						<h3><a href="https://twitter.com/lerefuge">{L_JOIN_US_TWITTER}&nbsp;<small>@lerefuge</small></a></h3>*/
/* 						 <div id="twitter-feed"></div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		 <div class="section-bg"></div>*/
/* 	</section>*/
/* 	<!-- ENDIF -->*/
/*     */
/* 	<footer class="burned-asphalt"> <!-- Footer block -->*/
/* 		<div class="midnight-" id="sub-footer">*/
/* 			<div class="container">*/
/* */
/* 				<div class="row bottomLinks">*/
/* 					<div class="col-sm-6 sm-direction">*/
/* 					 <nav>*/
/* 					<!-- IF FLATBOOTS_MINI_CMS_ENABLED -->*/
/* 						<!-- EVENT footer_links_instead -->*/
/* 					<!-- ELSE -->*/
/* 						<ul class="list-inline footer-nav">*/
/* 						 <li><a href="{U_PRIVACY}" title="">{L_PRIVACY}</a></li>*/
/* 						 <li><a href="{U_TERMS_USE}" title="">{L_TERMS}</a></li>*/
/* 						 <!-- EVENT overall_footer_teamlink_before -->*/
/* 						 <li><a href="{U_TEAM}" title="">{L_TEAM}</a></li>*/
/* 						 <li><a href="#" title="">{L_CONTACT_US}</a></li>*/
/* 						 <!-- EVENT overall_footer_teamlink_after -->*/
/* 						</ul>*/
/* 					<!-- ENDIF -->	*/
/* 					 </nav>*/
/* 					</div>*/
/* 						*/
/* 					<div class="col-sm-6 sm-direction">	*/
/* 						<div class="clearfix socialbar">*/
/* 						<!-- IF FLATBOOTS_MINI_CMS_ENABLED -->*/
/* 								<!-- EVENT footer_social_instead -->*/
/* 						<!-- ELSE -->*/
/* 							<div class="social-network">*/
/* 								<a class="facebook-color" title="Facebook" href="#6"><i class="fa fa-facebook"></i></a>*/
/* 								<a class="twitter-color" title="Twitter" href="https://twitter.com/SiteSplat"><i class="fa fa-twitter"></i></a>*/
/* 							</div>*/
/* 						<!-- ENDIF -->	*/
/* 						</div>*/
/* 					</div>	*/
/* 				</div>*/
/* 				*/
/*                 <div class="row">				*/
/* 					<div class="col-sm-6 sm-direction">*/
/* 					 <p class="copyrights">*/
/* 					  <!-- EVENT overall_footer_copyright_prepend -->*/
/* 					  <small>{L_HANDCRAFTED}</small>&nbsp;<i class="fa fa-heart text-flatboots-red"></i>&nbsp;<small>{L_AND}</small>&nbsp;<i class="fa fa-coffee"></i>&nbsp;<small>{L_BY}<a href="http://www.sitesplat.com/" title="{L_SITESPLAT}" target="_blank">&nbsp;{L_SITESPLAT}</a>&nbsp;&#45;&nbsp;{L_POWERED}&nbsp;<a href="http://www.phpbb.com/" title="Forum Software &copy; phpBB&reg; Group" target="_blank">phpBB</a></small>*/
/* 					  <!-- EVENT overall_footer_copyright_append -->*/
/* 					 </p>*/
/* 					</div>*/
/* 					*/
/* 					<div class="col-sm-6 sm-direction">*/
/* 					  <p class="debug-output">*/
/* 					  <!-- EVENT overall_footer_timezone_before -->*/
/* 						<small>&#45;&nbsp;{S_TIMEZONE}&nbsp;&#45;</small>*/
/* 					  <!-- EVENT overall_footer_timezone_after -->*/
/* 						<!-- IF DEBUG_OUTPUT --> <small>{DEBUG_OUTPUT}</small><!-- ENDIF -->*/
/* 						<!-- {L_FLATBOOTS_VERSION} -->*/
/* 					  </p>*/
/* 					</div>*/
/* 				</div>	*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</footer>*/
/* */
/* <a id="totop" class="top-flat" href="" onclick="return false;" style="display:none;"></a>*/
/* */
/* <div class="hidden"><!-- IF not S_IS_BOT -->{RUN_CRON_TASK}<!-- ENDIF --></div> */
/* */
/* <!-- injected via core and ajax JS for the return confirmation actions -->*/
/*    <div id="page-footer">*/
/* 	<div id="darkenwrapper" data-ajax-error-title="{L_AJAX_ERROR_TITLE}" data-ajax-error-text="{L_AJAX_ERROR_TEXT}" data-ajax-error-text-abort="{L_AJAX_ERROR_TEXT_ABORT}" data-ajax-error-text-timeout="{L_AJAX_ERROR_TEXT_TIMEOUT}" data-ajax-error-text-parsererror="{L_AJAX_ERROR_TEXT_PARSERERROR}">*/
/* 		<div id="darken">&nbsp;</div>*/
/* 	</div>*/
/* */
/* 	<div id="phpbb_alert" class="alert alert-default phpbb_alert" data-l-err="{L_ERROR}" data-l-timeout-processing-req="{L_TIMEOUT_PROCESSING_REQ}">*/
/* 		<button type="button" class="close alert_close" data-dismiss="alert"><span class="awe-remove-circle"></span></button>*/
/* 		<h3 class="alert_title">&nbsp;</h3>*/
/* 		 <p class="alert_text"></p>*/
/* 	</div>*/
/* 	*/
/* 	<div id="phpbb_confirm" class="alert alert-default phpbb_alert">*/
/* 		<button type="button" class="close alert_close" data-dismiss="alert"><span class="awe-remove-circle"></span></button>*/
/* 		<div class="alert_text"></div>*/
/* 	</div>*/
/*   </div>	*/
/* <!-- injected via core and ajax JS for the return confirmation actions -->*/
/* */
/* <!-- IF S_USER_LOGGED_IN and (SCRIPT_NAME == "viewforum" or SCRIPT_NAME == "viewtopic") -->*/
/* 	<div class="modal fade" id="BreadcrumbMap" tabindex="-1" role="dialog" aria-labelledby="BreadcrumbsLabel">*/
/* 	  <div class="modal-dialog" role="document">*/
/* 		<div class="modal-content">*/
/* 		  <div class="modal-header">*/
/* 			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="awe-remove-circle"></span></button>*/
/* 			<h4 class="modal-title" id="BreadcrumbsLabel">{L_NAVIGATION}</h4>*/
/* 		  </div>*/
/* 		  <div class="modal-body file-tree">*/
/* 		   <ul>*/
/* 			<li class="root"><a href="{U_INDEX}">{L_INDEX}</a></li>*/
/* 			<!-- BEGIN navlinks -->*/
/* 			   <li><a href="{navlinks.U_VIEW_FORUM}">{navlinks.FORUM_NAME}</a></li>*/
/* 			<!-- END navlinks -->*/
/* 		   </ul>*/
/* 		    <i class="icon-compass fa fa-compass"></i>*/
/* 		  </div>*/
/* 		  <div class="modal-footer">*/
/* 		  </div>*/
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF ENABLE_POPUP_LOGIN -->*/
/* 		<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-hidden="true">*/
/* 			<div class="modal-dialog">*/
/* 				<div class="modal-content">*/
/* 					<div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="awe-remove-circle"></span></button>*/
/* 						<h3 class="modal-title">{SITENAME}&nbsp;{L_LOGIN}</h3>*/
/* 					</div>*/
/* 					<div class="modal-body">*/
/* 						<form method="post" action="{S_LOGIN_ACTION}">*/
/* 							<fieldset>*/
/* 								<label for="username" class="control-label">{L_USERNAME}{L_COLON}</label>*/
/* 								<div class="input-icon left">*/
/* 									<i class="fa fa-user"></i>*/
/* 									<input class="form-control" type="text" name="username" id="username" placeholder="{L_USERNAME}">*/
/* 								</div>*/
/* */
/* 								<label for="password" class="control-label">{L_PASSWORD}{L_COLON}</label>*/
/* 								<div class="input-icon left">*/
/* 									<i class="fa fa-key"></i>*/
/* 									<input class="form-control" type="password" name="password" id="password" placeholder="{L_PASSWORD}">*/
/* 								</div>*/
/* 								<!-- IF S_AUTOLOGIN_ENABLED -->*/
/* 									<div class="controls controls-row">*/
/* 										<div class="radio"><input type="checkbox" name="autologin" id="autologin-pop"><label for="autologin-pop">{L_LOG_ME_IN}</label></div>*/
/* 									</div>*/
/* 								<!-- ENDIF -->*/
/* 								<button type="submit" class="btn btn-default" id="load" name="login" value="{L_LOGIN}" data-loading-text="{L_LOADING_LOG_IN} <i class='fa fa-spin fa-spinner fa-lg icon-white'></i>">{L_LOGIN}</button>*/
/* 								{S_LOGIN_REDIRECT}*/
/* 							</fieldset>*/
/* 						</form> */
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 					</div>*/
/* 				</div><!-- /.modal-content -->*/
/* 			</div><!-- /.modal-dialog -->*/
/* 		</div><!-- /.modal -->*/
/* 	<!-- ENDIF -->*/
/* */
/* <script>*/
/* // this loads jquery asyncrounously & in parallel*/
/* head.load("//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js", "//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js", "{T_THEME_PATH}/vendors/forum_fn.min.js");*/
/* </script>*/
/* */
/* <!-- we use this event to load the JS scripts properly via the extension system -->*/
/* <!-- EVENT overall_footer_after -->*/
/* */
/* <!-- injected via a module or an include -->*/
/* <script>*/
/* // some function that depends on bootstrap and jquery*/
/* head.ready(function () {*/
/* 	$('.footable').footable();$(".selectpicker").selectpicker();$(".selectpicker").tooltip("disable");var totop=$("#totop");totop.click(function(){$("html, body").stop(true,true).animate({scrollTop:0},500);return false});$(window).scroll(function(){if($(this).scrollTop()>600){totop.fadeIn()}else{totop.fadeOut()}});$("button[data-loading-text], input[data-loading-text], .btn-load").click(function(){var e=$(this);e.button("loading");setTimeout(function(){e.button("reset")},3e3)});*/
/* 	$("input").iCheck({checkboxClass:"icheckbox_flat-aero",radioClass:"iradio_flat-aero"});$(".btn-search").click(function(){$(".search-input").toggleClass("open").find("input").focus()});$(".close").click(function(){$(this).prev("input").val("").parents(".search-input").removeClass("open")});$(".nav-tog").click(function(){if($(this).hasClass("neutro")){$(this).removeClass("neutro").addClass("open")}else{$(this).removeClass("open").addClass("neutro")}});*/
/* 	$('input[data-reset-on-edit]').on('keyup', function() {$(this.getAttribute('data-reset-on-edit')).val('');});*/
/* 	$('a').tooltip({trigger : 'hover',container: 'body'})*/
/*     $('#notification_list_button').click(function(){setTimeout(function(){$(".nano").nanoScroller();},0);});	*/
/* });*/
/* // some function that depends on bootstrap and jquery*/
/* <!-- IF not HIDE_FOOTER -->*/
/* head.load("{T_THEME_PATH}/vendors/twitterFetcher.min.js");*/
/* head.ready('twitterFetcher.min.js',function(twit){var twit={"id":'611092926492446720',"domId":'twitter-feed',"maxTweets":1,"showUser":true,"showImages":false,"lang":'fr',"linksInNewWindow":true,"enableLinks":true};twitterFetcher.fetch(twit)});*/
/* <!-- ENDIF -->*/
/* </script>*/
/* <!-- injected via a module or an include -->*/
/* */
/* {$SCRIPTS}*/
/* */
/* <!-- IF S_PLUPLOAD -->*/
/* <!-- // lets load the plupload crap super huge files because... wait for it wait for it. "swear here" -->*/
/* <!-- INCLUDE plupload.html -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT overall_footer_body_after -->*/
/* */
/* <!-- Google Analytics: change UA-XXXXXXXX-X to be your site's ID. -->*/
/* {GOOGLE_ANALYTICS}*/
/* </body>*/
/* </html>   */
