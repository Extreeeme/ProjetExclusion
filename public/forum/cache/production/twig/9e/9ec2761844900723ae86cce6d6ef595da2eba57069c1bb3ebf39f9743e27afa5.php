<?php

/* @spaceace_ajaxchat/event/index_body_forumlist_body_after.html */
class __TwigTemplate_b746bfc4326011ae2e1bfbcd56de34813a3edefefe608768f6ad5d964c32e30c extends Twig_Template
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
            if (( !(isset($context["S_AJAX_CHAT_POSITION"]) ? $context["S_AJAX_CHAT_POSITION"] : null) &&  !(isset($context["S_AJAX_CHAT_POSITION_OVERRIDE"]) ? $context["S_AJAX_CHAT_POSITION_OVERRIDE"] : null))) {
                // line 3
                echo "\t\t";
                if ( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                    // line 4
                    echo "\t\t\t<br />
\t\t";
                }
                // line 6
                echo "\t\t";
                $location = "chat_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("chat_body.html", "@spaceace_ajaxchat/event/index_body_forumlist_body_after.html", 6)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 7
                echo "\t";
            } elseif (( !(isset($context["S_AJAX_CHAT_ACP_POSITION"]) ? $context["S_AJAX_CHAT_ACP_POSITION"] : null) && (isset($context["S_AJAX_CHAT_POSITION_OVERRIDE"]) ? $context["S_AJAX_CHAT_POSITION_OVERRIDE"] : null))) {
                // line 8
                echo "\t\t";
                if ( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                    // line 9
                    echo "\t\t\t<br />
\t\t";
                }
                // line 11
                echo "\t\t";
                $location = "chat_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("chat_body.html", "@spaceace_ajaxchat/event/index_body_forumlist_body_after.html", 11)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 12
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/event/index_body_forumlist_body_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  54 => 11,  50 => 9,  47 => 8,  44 => 7,  31 => 6,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_AJAX_CHAT_VIEW -->*/
/* 	<!-- IF not S_AJAX_CHAT_POSITION and not S_AJAX_CHAT_POSITION_OVERRIDE -->*/
/* 		<!-- IF not S_USER_LOGGED_IN -->*/
/* 			<br />*/
/* 		<!-- ENDIF -->*/
/* 		<!-- INCLUDE chat_body.html -->*/
/* 	<!-- ELSEIF not S_AJAX_CHAT_ACP_POSITION and S_AJAX_CHAT_POSITION_OVERRIDE -->*/
/* 		<!-- IF not S_USER_LOGGED_IN -->*/
/* 			<br />*/
/* 		<!-- ENDIF -->*/
/* 		<!-- INCLUDE chat_body.html -->*/
/* 	<!-- ENDIF -->*/
/* <!-- ENDIF -->*/
