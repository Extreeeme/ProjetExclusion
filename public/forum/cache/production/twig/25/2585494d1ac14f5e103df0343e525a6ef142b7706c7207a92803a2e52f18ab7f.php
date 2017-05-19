<?php

/* chat_body_input_original.html */
class __TwigTemplate_60d1a77e8839a77a747c1271005e4d04a9d00a617ccc94659950892d09ad4c7a extends Twig_Template
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
        echo "<ul class=\"chat topiclist forums\">
\t<li class=\"row\">
\t\t<dl class=\"row-item\">
\t\t\t<dt class=\"chatform\">
\t\t\t\t";
        // line 5
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 6
            echo "\t\t\t\t\t";
            if ((isset($context["S_AJAXCHAT_POST"]) ? $context["S_AJAXCHAT_POST"] : null)) {
                // line 7
                echo "\t\t\t\t\t\t<form name=\"postform\" id=\"chat-text\" method=\"post\" action=\"javascript:void(0);\" onsubmit=\"handle_send('add', this)\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t";
                // line 9
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"button nomargin\" value=\"";
                // line 10
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("CHAT_SUBMIT_MESSAGE");
                echo "\" name=\"submit\" tabindex=\"6\" accesskey=\"s\" />
\t\t\t\t\t\t\t\t<input type=\"text\" tabindex=\"1\" name=\"message\" id=\"message\" class=\"inputbox chatinput nomargin\"";
                // line 11
                if ( !(isset($context["S_AJAX_CHAT_AUTOCOMPLETE"]) ? $context["S_AJAX_CHAT_AUTOCOMPLETE"] : null)) {
                    echo " autocomplete=\"off\"";
                }
                echo " />
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</form>
\t\t\t\t\t";
            } else {
                // line 15
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('phpbb')->lang("NO_POST_IN_CHAT");
                echo "
\t\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t";
        } else {
            // line 18
            echo "\t\t\t\t\t<div class=\"input_message\">";
            echo $this->env->getExtension('phpbb')->lang("GUEST_MESSAGE");
            echo "</div>
\t\t\t\t";
        }
        // line 20
        echo "\t\t\t</dt>
\t\t\t<dd>
\t\t\t</dd>
\t\t</dl>
\t</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "chat_body_input_original.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  62 => 18,  59 => 17,  53 => 15,  44 => 11,  38 => 10,  34 => 9,  30 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <ul class="chat topiclist forums">*/
/* 	<li class="row">*/
/* 		<dl class="row-item">*/
/* 			<dt class="chatform">*/
/* 				<!-- IF not S_IS_BOT -->*/
/* 					<!-- IF S_AJAXCHAT_POST -->*/
/* 						<form name="postform" id="chat-text" method="post" action="javascript:void(0);" onsubmit="handle_send('add', this)">*/
/* 							<fieldset>*/
/* 								{S_FORM_TOKEN}*/
/* 								<input type="submit" class="button nomargin" value="{{ lang('SUBMIT') }}" title="{{ lang('CHAT_SUBMIT_MESSAGE') }}" name="submit" tabindex="6" accesskey="s" />*/
/* 								<input type="text" tabindex="1" name="message" id="message" class="inputbox chatinput nomargin"<!-- IF not S_AJAX_CHAT_AUTOCOMPLETE --> autocomplete="off"<!-- ENDIF --> />*/
/* 							</fieldset>*/
/* 						</form>*/
/* 					<!-- ELSE -->*/
/* 						{{ lang('NO_POST_IN_CHAT') }}*/
/* 					<!-- ENDIF -->*/
/* 				<!-- ELSE -->*/
/* 					<div class="input_message">{{ lang('GUEST_MESSAGE') }}</div>*/
/* 				<!-- ENDIF -->*/
/* 			</dt>*/
/* 			<dd>*/
/* 			</dd>*/
/* 		</dl>*/
/* 	</li>*/
/* </ul>*/
