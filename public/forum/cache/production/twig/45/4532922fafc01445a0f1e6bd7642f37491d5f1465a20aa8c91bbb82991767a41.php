<?php

/* chat_body.html */
class __TwigTemplate_c9f44d34e7143c426bb479ac7befbfaef9519fe8e4da4ae5632c0fad3e42d334 extends Twig_Template
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
        if ((isset($context["S_CHAT_ENABLED"]) ? $context["S_CHAT_ENABLED"] : null)) {
            // line 2
            echo "\t";
            if ((isset($context["S_AJAXCHAT_VIEW"]) ? $context["S_AJAXCHAT_VIEW"] : null)) {
                // line 3
                echo "\t\t";
                if ((isset($context["S_GET_CHAT"]) ? $context["S_GET_CHAT"] : null)) {
                    // line 4
                    echo "\t\t\t";
                    $location = "chat_body_readadd.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("chat_body_readadd.html", "chat_body.html", 4)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 5
                    echo "\t\t";
                } else {
                    // line 6
                    echo "\t\t\t";
                    if (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat")) {
                        // line 7
                        echo "\t\t\t\t";
                        $location = "overall_header.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("overall_header.html", "chat_body.html", 7)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 8
                        echo "\t\t\t";
                    }
                    // line 9
                    echo "\t\t\t";
                    if ((((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat/popup") || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat/archive"))) {
                        // line 10
                        echo "\t\t\t\t";
                        $location = "simple_header.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("simple_header.html", "chat_body.html", 10)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 11
                        echo "\t\t\t\t<div>
\t\t\t";
                    }
                    // line 13
                    echo "\t\t\t";
                    $location = "chat_body_script_vars.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("chat_body_script_vars.html", "chat_body.html", 13)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 14
                    echo "\t\t\t";
                    $asset_file = "@spaceace_ajaxchat/js/ajax_chat.js";
                    $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
                    if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                        $asset_path = $asset->get_path();                        $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                        if (!file_exists($local_file)) {
                            $local_file = $this->getEnvironment()->findTemplate($asset_path);
                            $asset->set_path($local_file, true);
                        }
                        $asset->add_assets_version('93');
                    }
                    $this->getEnvironment()->get_assets_bag()->add_script($asset);                    // line 15
                    echo "\t\t\t";
                    // line 16
                    echo "\t\t\t<div class=\"panel panel-forum\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<a href=\"./app.php/chat\" data-original-title=\"\" title=\"\">T'chat</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-inner\">
\t\t\t\t\t<table class=\"footable table table-striped table-primary default footable-loaded\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th data-class=\"expand\" class=\"footable-visible footable-first-column\">Messages</th>
\t\t\t\t\t\t\t\t<th class=\"large110 footable-visible\" data-hide=\"phone\"></th>
\t\t\t\t\t\t\t\t<th class=\"large21 footable-visible footable-last-column\" data-hide=\"phone\">";
                    // line 26
                    echo $this->env->getExtension('phpbb')->lang("WHOIS_CHATTING");
                    echo "</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"footable-visible footable-first-column\">
\t\t\t\t\t\t\t\t\t<div class=\"main\">
\t\t\t\t\t\t\t\t\t\t<div id=\"chat\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 34
                    $location = "chat_body_chatrow.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("chat_body_chatrow.html", "chat_body.html", 34)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 35
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"stats-col footable-visible\"></td>
\t\t\t\t\t\t\t\t<td class=\"footable-visible footable-last-column\" style=\"vertical-align: top;\">
\t\t\t\t\t\t\t\t\t";
                    // line 40
                    if ((isset($context["S_WHOISONLINE"]) ? $context["S_WHOISONLINE"] : null)) {
                        // line 41
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"whois";
                        if (((isset($context["S_CHAT"]) ? $context["S_CHAT"] : null) || (isset($context["S_POPUP"]) ? $context["S_POPUP"] : null))) {
                            echo " main";
                        }
                        if ((( !(isset($context["S_AJAX_CHAT_ONLINELIST"]) ? $context["S_AJAX_CHAT_ONLINELIST"] : null) || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat/archive")) ||  !(isset($context["S_WHOIS_CHATTING"]) ? $context["S_WHOIS_CHATTING"] : null))) {
                            echo " whois_online_off";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"whois_online\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 43
                        $location = "chat_body_whois.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("chat_body_whois.html", "chat_body.html", 43)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 44
                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 47
                    echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>

\t\t\t\t\t<div id=\"ajaxchat\">
\t\t\t\t\t\t<div class=\"forabg\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t";
                    // line 55
                    if (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) != "app/chat/archive")) {
                        // line 56
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((isset($context["S_AJAX_CHAT_MESSAGES_DOWN"]) ? $context["S_AJAX_CHAT_MESSAGES_DOWN"] : null)) {
                            // line 57
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            $location = "chat_body_input.html";
                            $namespace = false;
                            if (strpos($location, '@') === 0) {
                                $namespace = substr($location, 1, strpos($location, '/') - 1);
                                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                            }
                            $this->loadTemplate("chat_body_input.html", "chat_body.html", 57)->display($context);
                            if ($namespace) {
                                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                            }
                            // line 58
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 59
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 60
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    // line 62
                    if (((isset($context["CHAT_RULES"]) ? $context["CHAT_RULES"] : null) && ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) != "app/chat/archive"))) {
                        // line 63
                        echo "\t\t\t\t\t\t\t\t<div class=\"navbar chatrules\">
\t\t\t\t\t\t\t\t\t<span>";
                        // line 64
                        echo (isset($context["CHAT_RULES"]) ? $context["CHAT_RULES"] : null);
                        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 67
                    echo "\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"shout-body";
                    // line 68
                    if ((isset($context["S_WHOIS_CHATTING"]) ? $context["S_WHOIS_CHATTING"] : null)) {
                        if (((isset($context["S_AJAX_CHAT_ONLINELIST"]) ? $context["S_AJAX_CHAT_ONLINELIST"] : null) && ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) != "app/chat/archive"))) {
                            echo " shouts";
                        }
                    }
                    if ((( !(isset($context["S_AJAX_CHAT_ONLINELIST"]) ? $context["S_AJAX_CHAT_ONLINELIST"] : null) || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat/archive")) ||  !(isset($context["S_WHOIS_CHATTING"]) ? $context["S_WHOIS_CHATTING"] : null))) {
                        echo " chat_online_off";
                    }
                    if ((((isset($context["S_CHAT"]) ? $context["S_CHAT"] : null) || (isset($context["S_POPUP"]) ? $context["S_POPUP"] : null)) || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat/archive"))) {
                        echo " main";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<div id=\"chat\" ";
                    // line 69
                    if ( !(isset($context["S_AJAX_CHAT_MESSAGES_DOWN"]) ? $context["S_AJAX_CHAT_MESSAGES_DOWN"] : null)) {
                        echo "class=\"chat-messages-down\"";
                    }
                    echo " >
\t\t\t\t\t\t\t\t\t";
                    // line 70
                    $location = "chat_body_chatrow.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("chat_body_chatrow.html", "chat_body.html", 70)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 71
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    // line 73
                    if ((isset($context["S_WHOISONLINE"]) ? $context["S_WHOISONLINE"] : null)) {
                        // line 74
                        echo "\t\t\t\t\t\t\t\t<div class=\"whois";
                        if (((isset($context["S_CHAT"]) ? $context["S_CHAT"] : null) || (isset($context["S_POPUP"]) ? $context["S_POPUP"] : null))) {
                            echo " main";
                        }
                        if ((( !(isset($context["S_AJAX_CHAT_ONLINELIST"]) ? $context["S_AJAX_CHAT_ONLINELIST"] : null) || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat/archive")) ||  !(isset($context["S_WHOIS_CHATTING"]) ? $context["S_WHOIS_CHATTING"] : null))) {
                            echo " whois_online_off";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t";
                        // line 76
                        echo $this->env->getExtension('phpbb')->lang("WHOIS_CHATTING");
                        echo "
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t<div id=\"whois_online\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 79
                        $location = "chat_body_whois.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("chat_body_whois.html", "chat_body.html", 79)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 80
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 83
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"chatnavbar navbar\">
\t\t\t\t\t\t\t";
                    // line 85
                    if (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) != "app/chat/archive")) {
                        // line 86
                        echo "\t\t\t\t\t\t\t\t";
                        if ( !(isset($context["S_AJAX_CHAT_MESSAGES_DOWN"]) ? $context["S_AJAX_CHAT_MESSAGES_DOWN"] : null)) {
                            // line 87
                            echo "\t\t\t\t\t\t\t\t\t";
                            $location = "chat_body_input.html";
                            $namespace = false;
                            if (strpos($location, '@') === 0) {
                                $namespace = substr($location, 1, strpos($location, '/') - 1);
                                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                            }
                            $this->loadTemplate("chat_body_input.html", "chat_body.html", 87)->display($context);
                            if ($namespace) {
                                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                            }
                            // line 88
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        // line 89
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 90
                    echo "\t\t\t\t\t\t\t<div class=\"chatform\">
\t\t\t\t\t\t\t\t<span class=\"list chat-icon details\">";
                    // line 91
                    echo $this->env->getExtension('phpbb')->lang("DETAILS");
                    echo "</span>
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 92
                    echo (isset($context["BOARD_URL"]) ? $context["BOARD_URL"] : null);
                    echo "ext/spaceace/ajaxchat/styles/all/theme/images/check_indicator.gif\" id=\"check_indicator\" alt=\"check_indicator\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("VERSION");
                    echo "\" />
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 93
                    echo (isset($context["BOARD_URL"]) ? $context["BOARD_URL"] : null);
                    echo "ext/spaceace/ajaxchat/styles/all/theme/images/act_indicator.gif\" id=\"act_indicator\" alt=\"act_indicator\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("VERSION");
                    echo "\" />
\t\t\t\t\t\t\t\t<strong>&nbsp;";
                    // line 94
                    echo $this->env->getExtension('phpbb')->lang("UPDATES");
                    echo "&nbsp;<span id=\"update_seconds\">";
                    echo (isset($context["REFRESH_TIME"]) ? $context["REFRESH_TIME"] : null);
                    echo "</span>&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("UNIT");
                    echo "</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                    // line 101
                    // line 102
                    echo "\t\t\t";
                    if (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat")) {
                        // line 103
                        echo "\t\t\t\t";
                        $location = "overall_footer.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("overall_footer.html", "chat_body.html", 103)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 104
                        echo "\t\t\t";
                    }
                    // line 105
                    echo "\t\t\t";
                    if ((((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat/popup") || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat/archive"))) {
                        // line 106
                        echo "\t\t\t\t</div>
\t\t\t\t";
                        // line 107
                        $location = "simple_footer.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("simple_footer.html", "chat_body.html", 107)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 108
                        echo "\t\t\t";
                    }
                    // line 109
                    echo "\t\t";
                }
                // line 110
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "chat_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 110,  407 => 109,  404 => 108,  392 => 107,  389 => 106,  386 => 105,  383 => 104,  370 => 103,  367 => 102,  366 => 101,  352 => 94,  346 => 93,  340 => 92,  336 => 91,  333 => 90,  330 => 89,  327 => 88,  314 => 87,  311 => 86,  309 => 85,  305 => 83,  300 => 80,  288 => 79,  282 => 76,  271 => 74,  269 => 73,  265 => 71,  253 => 70,  247 => 69,  233 => 68,  230 => 67,  224 => 64,  221 => 63,  219 => 62,  215 => 60,  212 => 59,  209 => 58,  196 => 57,  193 => 56,  191 => 55,  181 => 47,  176 => 44,  164 => 43,  153 => 41,  151 => 40,  144 => 35,  132 => 34,  121 => 26,  109 => 16,  107 => 15,  95 => 14,  82 => 13,  78 => 11,  65 => 10,  62 => 9,  59 => 8,  46 => 7,  43 => 6,  40 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_CHAT_ENABLED -->*/
/* 	<!-- IF S_AJAXCHAT_VIEW -->*/
/* 		<!-- IF S_GET_CHAT -->*/
/* 			<!-- INCLUDE chat_body_readadd.html -->*/
/* 		<!-- ELSE -->*/
/* 			<!-- IF SCRIPT_NAME == 'app/chat' -->*/
/* 				<!-- INCLUDE overall_header.html -->*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF SCRIPT_NAME == 'app/chat/popup' or SCRIPT_NAME == 'app/chat/archive' -->*/
/* 				<!-- INCLUDE simple_header.html -->*/
/* 				<div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- INCLUDE chat_body_script_vars.html -->*/
/* 			<!-- INCLUDEJS @spaceace_ajaxchat/js/ajax_chat.js -->*/
/* 			<!-- EVENT spaceace_ajax_chat_chat_body_before -->*/
/* 			<div class="panel panel-forum">*/
/* 				<div class="panel-heading">*/
/* 					<a href="./app.php/chat" data-original-title="" title="">T'chat</a>*/
/* 				</div>*/
/* 				<div class="panel-inner">*/
/* 					<table class="footable table table-striped table-primary default footable-loaded">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th data-class="expand" class="footable-visible footable-first-column">Messages</th>*/
/* 								<th class="large110 footable-visible" data-hide="phone"></th>*/
/* 								<th class="large21 footable-visible footable-last-column" data-hide="phone">{{ lang('WHOIS_CHATTING') }}</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/* 							<tr>*/
/* 								<td class="footable-visible footable-first-column">*/
/* 									<div class="main">*/
/* 										<div id="chat">*/
/* 											<!-- INCLUDE chat_body_chatrow.html -->*/
/* 										</div>*/
/* 									</div>*/
/* 								</td>*/
/* 								<td class="stats-col footable-visible"></td>*/
/* 								<td class="footable-visible footable-last-column" style="vertical-align: top;">*/
/* 									<!-- IF S_WHOISONLINE -->*/
/* 										<div class="whois<!-- IF S_CHAT or S_POPUP --> main<!-- ENDIF --><!-- IF not S_AJAX_CHAT_ONLINELIST or SCRIPT_NAME == 'app/chat/archive' or not S_WHOIS_CHATTING --> whois_online_off<!-- ENDIF -->">*/
/* 											<div id="whois_online">*/
/* 												<!-- INCLUDE chat_body_whois.html -->*/
/* 											</div>*/
/* 										</div>*/
/* 									<!-- ENDIF -->*/
/* 								</td>*/
/* 							</tr>*/
/* 						</tbody>*/
/* 					</table>*/
/* */
/* 					<div id="ajaxchat">*/
/* 						<div class="forabg">*/
/* 							<div class="inner">*/
/* 								<!-- IF SCRIPT_NAME neq 'app/chat/archive' -->*/
/* 									<!-- IF S_AJAX_CHAT_MESSAGES_DOWN -->*/
/* 										<!-- INCLUDE chat_body_input.html -->*/
/* 									<!-- ENDIF -->*/
/* 								<!-- ENDIF -->*/
/* 							</div>*/
/* 						</div>*/
/* 							<!-- IF CHAT_RULES and SCRIPT_NAME neq 'app/chat/archive' -->*/
/* 								<div class="navbar chatrules">*/
/* 									<span>{CHAT_RULES}</span>*/
/* 								</div>*/
/* 							<!-- ENDIF -->*/
/* 						<div>*/
/* 							<div class="shout-body<!-- IF S_WHOIS_CHATTING --><!-- IF S_AJAX_CHAT_ONLINELIST and SCRIPT_NAME neq 'app/chat/archive' --> shouts<!-- ENDIF --><!-- ENDIF --><!-- IF not S_AJAX_CHAT_ONLINELIST or SCRIPT_NAME == 'app/chat/archive' or not S_WHOIS_CHATTING --> chat_online_off<!-- ENDIF --><!-- IF S_CHAT or S_POPUP or SCRIPT_NAME == 'app/chat/archive' --> main<!-- ENDIF -->">*/
/* 								<div id="chat" <!-- IF not S_AJAX_CHAT_MESSAGES_DOWN -->class="chat-messages-down"<!-- ENDIF --> >*/
/* 									<!-- INCLUDE chat_body_chatrow.html -->*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- IF S_WHOISONLINE -->*/
/* 								<div class="whois<!-- IF S_CHAT or S_POPUP --> main<!-- ENDIF --><!-- IF not S_AJAX_CHAT_ONLINELIST or SCRIPT_NAME == 'app/chat/archive' or not S_WHOIS_CHATTING --> whois_online_off<!-- ENDIF -->">*/
/* 									<h3>*/
/* 										{{ lang('WHOIS_CHATTING') }}*/
/* 									</h3>*/
/* 									<div id="whois_online">*/
/* 										<!-- INCLUDE chat_body_whois.html -->*/
/* 									</div>*/
/* 								</div>*/
/* 							<!-- ENDIF -->*/
/* 						</div>*/
/* 						<div class="chatnavbar navbar">*/
/* 							<!-- IF SCRIPT_NAME neq 'app/chat/archive' -->*/
/* 								<!-- IF not S_AJAX_CHAT_MESSAGES_DOWN -->*/
/* 									<!-- INCLUDE chat_body_input.html -->*/
/* 								<!-- ENDIF -->*/
/* 							<!-- ENDIF -->*/
/* 							<div class="chatform">*/
/* 								<span class="list chat-icon details">{{ lang('DETAILS') }}</span>*/
/* 								<img src="{BOARD_URL}ext/spaceace/ajaxchat/styles/all/theme/images/check_indicator.gif" id="check_indicator" alt="check_indicator" title="{{ lang('VERSION') }}" />*/
/* 								<img src="{BOARD_URL}ext/spaceace/ajaxchat/styles/all/theme/images/act_indicator.gif" id="act_indicator" alt="act_indicator" title="{{ lang('VERSION') }}" />*/
/* 								<strong>&nbsp;{{ lang('UPDATES') }}&nbsp;<span id="update_seconds">{REFRESH_TIME}</span>&nbsp;{{ lang('UNIT') }}</strong>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- EVENT spaceace_ajax_chat_chat_body_after -->*/
/* 			<!-- IF SCRIPT_NAME == 'app/chat' -->*/
/* 				<!-- INCLUDE overall_footer.html -->*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF SCRIPT_NAME == 'app/chat/popup' or SCRIPT_NAME == 'app/chat/archive' -->*/
/* 				</div>*/
/* 				<!-- INCLUDE simple_footer.html -->*/
/* 			<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* <!-- ENDIF -->*/
