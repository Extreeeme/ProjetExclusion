<?php

/* chat_body_chatrow.html */
class __TwigTemplate_7898760f8bdd495973f7ac37dae3c7285b1f53be3ab72f153b052cc393249e19 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "chatrow", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["chatrow"]) {
            // line 2
            echo "\t<div id=\"p";
            echo $this->getAttribute($context["chatrow"], "MESSAGE_ID", array());
            echo "\" class=\"chatpost ";
            if ( !(isset($context["S_AJAX_CHAT_CHATROW_FULL"]) ? $context["S_AJAX_CHAT_CHATROW_FULL"] : null)) {
                echo "original ";
            }
            echo "bg";
            echo $this->getAttribute($context["chatrow"], "CLASS", array());
            if ( !(isset($context["S_AJAX_CHAT_MESSAGES_DOWN"]) ? $context["S_AJAX_CHAT_MESSAGES_DOWN"] : null)) {
                echo " chat-messages-down";
            }
            echo "\">
\t\t<div class=\"chat-postbody\">
\t\t\t<div class=\"";
            // line 4
            if ((isset($context["S_AJAX_CHAT_AVATARS"]) ? $context["S_AJAX_CHAT_AVATARS"] : null)) {
                echo "chat-postprofile";
            } else {
                echo "chat-postprofile-no-avatar";
            }
            echo "\" id=\"profile";
            echo $this->getAttribute($context["chatrow"], "MESSAGE_ID", array());
            echo "\">
\t\t\t\t<div ";
            // line 5
            if ((isset($context["S_AJAX_CHAT_AVATARS"]) ? $context["S_AJAX_CHAT_AVATARS"] : null)) {
                echo "class=\"chat-avatars\"";
            }
            echo ">
\t\t\t\t\t";
            // line 6
            if ((isset($context["S_AJAX_CHAT_AVATARS"]) ? $context["S_AJAX_CHAT_AVATARS"] : null)) {
                // line 7
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["chatrow"], "USER_AVATAR", array())) {
                    // line 8
                    echo "\t\t\t\t\t\t\t";
                    if ((isset($context["S_AJAX_CHAT_AVATAR_HOVER"]) ? $context["S_AJAX_CHAT_AVATAR_HOVER"] : null)) {
                        // line 9
                        echo "\t\t\t\t\t\t\t\t<span>";
                        echo $this->getAttribute($context["chatrow"], "USER_AVATAR", array());
                        echo "</span>
\t\t\t\t\t\t\t";
                    }
                    // line 11
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["chatrow"], "USER_AVATAR_THUMB", array());
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 13
                    echo "\t\t\t\t\t\t\t";
                    if ((isset($context["S_AJAX_CHAT_AVATAR_HOVER"]) ? $context["S_AJAX_CHAT_AVATAR_HOVER"] : null)) {
                        // line 14
                        echo "\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 15
                        echo (isset($context["STYLE_PATH"]) ? $context["STYLE_PATH"] : null);
                        echo "/theme/images/no_avatar.gif\" height=\"128\" alt=\"\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                    }
                    // line 18
                    echo "\t\t\t\t\t\t\t<img src=\"";
                    echo (isset($context["STYLE_PATH"]) ? $context["STYLE_PATH"] : null);
                    echo "/theme/images/no_avatar.gif\" height=\"20\" alt=\"\" />
\t\t\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t</div>
\t\t\t\t<div class=\"chat-usernames\">
\t\t\t\t\t";
            // line 23
            if ((( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) && ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) != "app/chat/archive"))) {
                // line 24
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["chatrow"], "USER_COLOR", array())) {
                    // line 25
                    echo "\t\t\t\t\t\t\t<a href=\"#\" style=\"color: #";
                    echo $this->getAttribute($context["chatrow"], "USER_COLOR", array());
                    echo "\" onclick=\"insert_text('[color=#";
                    echo $this->getAttribute($context["chatrow"], "USER_COLOR", array());
                    echo "][b]&#64;";
                    echo $this->getAttribute($context["chatrow"], "USERNAME_A", array());
                    echo "&nbsp;:&nbsp;[/color][/b]', true);return false;\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("RESPOND");
                    echo "\">&#64;</a>
\t\t\t\t\t\t";
                } else {
                    // line 27
                    echo "\t\t\t\t\t\t\t<a href=\"#\" onclick=\"insert_text('[b]&#64;";
                    echo $this->getAttribute($context["chatrow"], "USERNAME_A", array());
                    echo "&nbsp;:&nbsp;[/b]', true);return false;\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("RESPOND");
                    echo "\">&#64;</a>
\t\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t\t&#64;
\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t";
            echo $this->getAttribute($context["chatrow"], "USERNAME_FULL", array());
            echo "&nbsp;<b class=\"chat-time\">&laquo;&nbsp;";
            echo $this->getAttribute($context["chatrow"], "TIME", array());
            echo "&nbsp;&raquo;</b>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 35
            echo (isset($context["SMILIES_PATH"]) ? $context["SMILIES_PATH"] : null);
            echo "
\t\t\t<div class=\"message\">
\t\t\t\t";
            // line 37
            $location = "chatrow_message_icons.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("chatrow_message_icons.html", "chat_body_chatrow.html", 37)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 38
            echo "\t\t\t\t";
            echo $this->getAttribute($context["chatrow"], "MESSAGE", array());
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chatrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "chat_body_chatrow.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 38,  158 => 37,  153 => 35,  144 => 32,  140 => 30,  137 => 29,  129 => 27,  117 => 25,  114 => 24,  112 => 23,  108 => 21,  105 => 20,  99 => 18,  93 => 15,  90 => 14,  87 => 13,  81 => 11,  75 => 9,  72 => 8,  69 => 7,  67 => 6,  61 => 5,  51 => 4,  36 => 2,  19 => 1,);
    }
}
/* <!-- BEGIN chatrow -->*/
/* 	<div id="p{chatrow.MESSAGE_ID}" class="chatpost <!-- IF not S_AJAX_CHAT_CHATROW_FULL -->original <!-- ENDIF -->bg{chatrow.CLASS}<!-- IF not S_AJAX_CHAT_MESSAGES_DOWN --> chat-messages-down<!-- ENDIF -->">*/
/* 		<div class="chat-postbody">*/
/* 			<div class="<!-- IF S_AJAX_CHAT_AVATARS -->chat-postprofile<!-- ELSE -->chat-postprofile-no-avatar<!-- ENDIF -->" id="profile{chatrow.MESSAGE_ID}">*/
/* 				<div <!-- IF S_AJAX_CHAT_AVATARS -->class="chat-avatars"<!-- ENDIF -->>*/
/* 					<!-- IF S_AJAX_CHAT_AVATARS -->*/
/* 						<!-- IF chatrow.USER_AVATAR -->*/
/* 							<!-- IF S_AJAX_CHAT_AVATAR_HOVER -->*/
/* 								<span>{chatrow.USER_AVATAR}</span>*/
/* 							<!-- ENDIF -->*/
/* 								{chatrow.USER_AVATAR_THUMB}*/
/* 						<!-- ELSE -->*/
/* 							<!-- IF S_AJAX_CHAT_AVATAR_HOVER -->*/
/* 								<span>*/
/* 									<img src="{STYLE_PATH}/theme/images/no_avatar.gif" height="128" alt="" />*/
/* 								</span>*/
/* 							<!-- ENDIF -->*/
/* 							<img src="{STYLE_PATH}/theme/images/no_avatar.gif" height="20" alt="" />*/
/* 						<!-- ENDIF -->*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 				<div class="chat-usernames">*/
/* 					<!-- IF not S_IS_BOT and S_USER_LOGGED_IN and SCRIPT_NAME neq 'app/chat/archive' -->*/
/* 						<!-- IF chatrow.USER_COLOR -->*/
/* 							<a href="#" style="color: #{chatrow.USER_COLOR}" onclick="insert_text('[color=#{chatrow.USER_COLOR}][b]&#64;{chatrow.USERNAME_A}&nbsp;:&nbsp;[/color][/b]', true);return false;" title="{L_RESPOND}">&#64;</a>*/
/* 						<!-- ELSE -->*/
/* 							<a href="#" onclick="insert_text('[b]&#64;{chatrow.USERNAME_A}&nbsp;:&nbsp;[/b]', true);return false;" title="{L_RESPOND}">&#64;</a>*/
/* 						<!-- ENDIF -->*/
/* 					<!-- ELSE -->*/
/* 						&#64;*/
/* 					<!-- ENDIF -->*/
/* 					{chatrow.USERNAME_FULL}&nbsp;<b class="chat-time">&laquo;&nbsp;{chatrow.TIME}&nbsp;&raquo;</b>*/
/* 				</div>*/
/* 			</div>*/
/* 			{SMILIES_PATH}*/
/* 			<div class="message">*/
/* 				<!-- INCLUDE chatrow_message_icons.html -->*/
/* 				{chatrow.MESSAGE}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- END chatrow -->*/
