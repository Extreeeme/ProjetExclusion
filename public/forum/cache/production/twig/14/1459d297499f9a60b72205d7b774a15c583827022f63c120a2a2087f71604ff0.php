<?php

/* @spaceace_ajaxchat/event/overall_footer_content_after.html */
class __TwigTemplate_f37533d960b4236cdc59024805a6687af4ad8b7322220c2f123bde425f4f8df7 extends Twig_Template
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
        if ((isset($context["S_AJAX_CHAT_VIEW"]) ? $context["S_AJAX_CHAT_VIEW"] : null)) {
            // line 2
            echo "\t";
            if (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewforum")) {
                // line 3
                echo "\t\t";
                if (((isset($context["S_AJAX_CHAT_VIEWFORUM_OVERRIDE"]) ? $context["S_AJAX_CHAT_VIEWFORUM_OVERRIDE"] : null) || ((isset($context["S_AJAX_CHAT_VIEWFORUM"]) ? $context["S_AJAX_CHAT_VIEWFORUM"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()))))) {
                    // line 4
                    echo "\t\t\t";
                    if (( !(isset($context["S_AJAX_CHAT_POSITION"]) ? $context["S_AJAX_CHAT_POSITION"] : null) &&  !(isset($context["S_AJAX_CHAT_POSITION_OVERRIDE"]) ? $context["S_AJAX_CHAT_POSITION_OVERRIDE"] : null))) {
                        // line 5
                        echo "\t\t\t\t";
                        if ( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                            // line 6
                            echo "\t\t\t\t\t<br />
\t\t\t\t";
                        }
                        // line 8
                        echo "\t\t\t\t";
                        $location = "chat_body.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("chat_body.html", "@spaceace_ajaxchat/event/overall_footer_content_after.html", 8)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 9
                        echo "\t\t\t";
                    } elseif (( !(isset($context["S_AJAX_CHAT_ACP_POSITION"]) ? $context["S_AJAX_CHAT_ACP_POSITION"] : null) && (isset($context["S_AJAX_CHAT_POSITION_OVERRIDE"]) ? $context["S_AJAX_CHAT_POSITION_OVERRIDE"] : null))) {
                        // line 10
                        echo "\t\t\t\t";
                        if ( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                            // line 11
                            echo "\t\t\t\t\t<br />
\t\t\t\t";
                        }
                        // line 13
                        echo "\t\t\t\t";
                        $location = "chat_body.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("chat_body.html", "@spaceace_ajaxchat/event/overall_footer_content_after.html", 13)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 14
                        echo "\t\t\t";
                    }
                    // line 15
                    echo "\t\t";
                }
                // line 16
                echo "\t";
            }
            // line 17
            echo "\t";
            if (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewtopic")) {
                // line 18
                echo "\t\t";
                if (((isset($context["S_AJAX_CHAT_VIEWTOPIC_OVERRIDE"]) ? $context["S_AJAX_CHAT_VIEWTOPIC_OVERRIDE"] : null) || (isset($context["S_AJAX_CHAT_VIEWTOPIC"]) ? $context["S_AJAX_CHAT_VIEWTOPIC"] : null))) {
                    // line 19
                    echo "\t\t\t";
                    if (( !(isset($context["S_AJAX_CHAT_POSITION"]) ? $context["S_AJAX_CHAT_POSITION"] : null) &&  !(isset($context["S_AJAX_CHAT_POSITION_OVERRIDE"]) ? $context["S_AJAX_CHAT_POSITION_OVERRIDE"] : null))) {
                        // line 20
                        echo "\t\t\t\t";
                        if ( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                            // line 21
                            echo "\t\t\t\t\t<br />
\t\t\t\t";
                        }
                        // line 23
                        echo "\t\t\t\t";
                        $location = "chat_body.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("chat_body.html", "@spaceace_ajaxchat/event/overall_footer_content_after.html", 23)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 24
                        echo "\t\t\t";
                    } elseif (( !(isset($context["S_AJAX_CHAT_ACP_POSITION"]) ? $context["S_AJAX_CHAT_ACP_POSITION"] : null) && (isset($context["S_AJAX_CHAT_POSITION_OVERRIDE"]) ? $context["S_AJAX_CHAT_POSITION_OVERRIDE"] : null))) {
                        // line 25
                        echo "\t\t\t\t";
                        if ( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                            // line 26
                            echo "\t\t\t\t\t<br />
\t\t\t\t";
                        }
                        // line 28
                        echo "\t\t\t\t";
                        $location = "chat_body.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("chat_body.html", "@spaceace_ajaxchat/event/overall_footer_content_after.html", 28)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 29
                        echo "\t\t\t";
                    }
                    // line 30
                    echo "\t\t";
                }
                // line 31
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/event/overall_footer_content_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 31,  137 => 30,  134 => 29,  121 => 28,  117 => 26,  114 => 25,  111 => 24,  98 => 23,  94 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  73 => 14,  60 => 13,  56 => 11,  53 => 10,  50 => 9,  37 => 8,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_AJAX_CHAT_VIEW -->*/
/* 	<!-- IF SCRIPT_NAME == 'viewforum' -->*/
/* 		<!-- IF S_AJAX_CHAT_VIEWFORUM_OVERRIDE or S_AJAX_CHAT_VIEWFORUM and .topicrow -->*/
/* 			<!-- IF not S_AJAX_CHAT_POSITION and not S_AJAX_CHAT_POSITION_OVERRIDE -->*/
/* 				<!-- IF not S_USER_LOGGED_IN -->*/
/* 					<br />*/
/* 				<!-- ENDIF -->*/
/* 				<!-- INCLUDE chat_body.html -->*/
/* 			<!-- ELSEIF not S_AJAX_CHAT_ACP_POSITION and S_AJAX_CHAT_POSITION_OVERRIDE -->*/
/* 				<!-- IF not S_USER_LOGGED_IN -->*/
/* 					<br />*/
/* 				<!-- ENDIF -->*/
/* 				<!-- INCLUDE chat_body.html -->*/
/* 			<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF SCRIPT_NAME == 'viewtopic' -->*/
/* 		<!-- IF S_AJAX_CHAT_VIEWTOPIC_OVERRIDE or S_AJAX_CHAT_VIEWTOPIC -->*/
/* 			<!-- IF not S_AJAX_CHAT_POSITION and not S_AJAX_CHAT_POSITION_OVERRIDE -->*/
/* 				<!-- IF not S_USER_LOGGED_IN -->*/
/* 					<br />*/
/* 				<!-- ENDIF -->*/
/* 				<!-- INCLUDE chat_body.html -->*/
/* 			<!-- ELSEIF not S_AJAX_CHAT_ACP_POSITION and S_AJAX_CHAT_POSITION_OVERRIDE -->*/
/* 				<!-- IF not S_USER_LOGGED_IN -->*/
/* 					<br />*/
/* 				<!-- ENDIF -->*/
/* 				<!-- INCLUDE chat_body.html -->*/
/* 			<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* <!-- ENDIF -->*/
