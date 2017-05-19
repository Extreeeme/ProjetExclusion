<?php

/* chat_body_readadd.html */
class __TwigTemplate_ef2c692b28106b76bc308d1dff3f138b1eacaf3f53ca180b6e2e1cfdfe683d40 extends Twig_Template
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
        if (((isset($context["S_READ"]) ? $context["S_READ"] : null) || (isset($context["S_ADD"]) ? $context["S_ADD"] : null))) {
            // line 2
            echo "\t";
            $location = "chat_body_chatrow.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("chat_body_chatrow.html", "chat_body_readadd.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 3
            echo "\t--!--";
            echo (isset($context["LAST_ID"]) ? $context["LAST_ID"] : null);
            echo "--!--
\t";
            // line 4
            if ((isset($context["S_AJAX_CHAT_SOUND"]) ? $context["S_AJAX_CHAT_SOUND"] : null)) {
                // line 5
                echo "\t\t";
                if ((isset($context["SOUND_ENABLED"]) ? $context["SOUND_ENABLED"] : null)) {
                    // line 6
                    echo "\t\t\t<audio id=\"ajax_chat_sound\" class=\"hidden chat_sound\" src=\"";
                    echo (isset($context["BOARD_URL"]) ? $context["BOARD_URL"] : null);
                    echo "ext/spaceace/ajaxchat/styles/all/theme/sounds/";
                    echo (isset($context["SOUND_FILE"]) ? $context["SOUND_FILE"] : null);
                    echo ".mp3\" autoplay ></audio>
\t\t";
                }
                // line 8
                echo "\t";
            }
            // line 9
            echo "\t";
            if ((isset($context["S_WHOISONLINE"]) ? $context["S_WHOISONLINE"] : null)) {
                // line 10
                echo "\t\t";
                $location = "chat_body_whois.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("chat_body_whois.html", "chat_body_readadd.html", 10)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 11
                echo "\t";
            }
            // line 12
            echo "\t--!--";
            echo (isset($context["LAST_TIME"]) ? $context["LAST_TIME"] : null);
            echo "--!--";
            echo (isset($context["REFRESH_TIME"]) ? $context["REFRESH_TIME"] : null);
            echo "--!--";
            echo (isset($context["LAST_POST"]) ? $context["LAST_POST"] : null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "chat_body_readadd.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  71 => 11,  58 => 10,  55 => 9,  52 => 8,  44 => 6,  41 => 5,  39 => 4,  34 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_READ or S_ADD -->*/
/* 	<!-- INCLUDE chat_body_chatrow.html -->*/
/* 	--!--{LAST_ID}--!--*/
/* 	<!-- IF S_AJAX_CHAT_SOUND -->*/
/* 		<!-- IF SOUND_ENABLED -->*/
/* 			<audio id="ajax_chat_sound" class="hidden chat_sound" src="{BOARD_URL}ext/spaceace/ajaxchat/styles/all/theme/sounds/{SOUND_FILE}.mp3" autoplay ></audio>*/
/* 		<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_WHOISONLINE -->*/
/* 		<!-- INCLUDE chat_body_whois.html -->*/
/* 	<!-- ENDIF -->*/
/* 	--!--{LAST_TIME}--!--{REFRESH_TIME}--!--{LAST_POST}*/
/* <!-- ENDIF -->*/
