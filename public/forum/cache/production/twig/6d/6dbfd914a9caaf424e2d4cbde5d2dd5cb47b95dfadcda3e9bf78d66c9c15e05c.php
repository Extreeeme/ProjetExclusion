<?php

/* chat_body_whois.html */
class __TwigTemplate_a07bfa16e6d221a0ca5d41619705c0d0a467ca295c296a85c3d862e0e1e6fa97 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "whoisrow", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["whoisrow"]) {
            // line 2
            echo "\t<div class=\"whois_status";
            if ((( !(isset($context["S_AJAX_CHAT_ONLINELIST"]) ? $context["S_AJAX_CHAT_ONLINELIST"] : null) || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat/archive")) ||  !(isset($context["S_WHOIS_CHATTING"]) ? $context["S_WHOIS_CHATTING"] : null))) {
                echo " whois_online_off";
            }
            echo "\">
\t\t<img src=\"";
            // line 3
            echo (isset($context["BOARD_URL"]) ? $context["BOARD_URL"] : null);
            echo "ext/spaceace/ajaxchat/styles/all/theme/images/";
            echo $this->getAttribute($context["whoisrow"], "USER_STATUS", array());
            echo ".png\" class=\"status_img\" alt=\"";
            echo $this->getAttribute($context["whoisrow"], "USER_STATUS", array());
            echo "\" />&nbsp;";
            echo $this->getAttribute($context["whoisrow"], "USERNAME_FULL", array());
            echo "&nbsp;
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['whoisrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "chat_body_whois.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  23 => 2,  19 => 1,);
    }
}
/* <!-- BEGIN whoisrow -->*/
/* 	<div class="whois_status<!-- IF not S_AJAX_CHAT_ONLINELIST or SCRIPT_NAME == 'app/chat/archive' or not S_WHOIS_CHATTING --> whois_online_off<!-- ENDIF -->">*/
/* 		<img src="{BOARD_URL}ext/spaceace/ajaxchat/styles/all/theme/images/{whoisrow.USER_STATUS}.png" class="status_img" alt="{whoisrow.USER_STATUS}" />&nbsp;{whoisrow.USERNAME_FULL}&nbsp;*/
/* 	</div>*/
/* <!-- END whoisrow -->*/
