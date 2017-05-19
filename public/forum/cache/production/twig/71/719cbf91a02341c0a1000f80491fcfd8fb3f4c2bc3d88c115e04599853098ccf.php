<?php

/* @spaceace_ajaxchat/event/viewforum_forum_title_after.html */
class __TwigTemplate_1c04508970f6a32c1da6ea7269f60b3d1cda1bbcee0b2e91fc49cd5dc3cb4208 extends Twig_Template
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
            if (((isset($context["S_AJAX_CHAT_VIEWFORUM_OVERRIDE"]) ? $context["S_AJAX_CHAT_VIEWFORUM_OVERRIDE"] : null) || ((isset($context["S_AJAX_CHAT_VIEWFORUM"]) ? $context["S_AJAX_CHAT_VIEWFORUM"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()))))) {
                // line 3
                echo "\t\t";
                if (((isset($context["S_AJAX_CHAT_POSITION"]) ? $context["S_AJAX_CHAT_POSITION"] : null) &&  !(isset($context["S_AJAX_CHAT_POSITION_OVERRIDE"]) ? $context["S_AJAX_CHAT_POSITION_OVERRIDE"] : null))) {
                    // line 4
                    echo "\t\t\t";
                    $location = "chat_body.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("chat_body.html", "@spaceace_ajaxchat/event/viewforum_forum_title_after.html", 4)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 5
                    echo "\t\t\t<br />
\t\t";
                } elseif ((                // line 6
(isset($context["S_AJAX_CHAT_ACP_POSITION"]) ? $context["S_AJAX_CHAT_ACP_POSITION"] : null) && (isset($context["S_AJAX_CHAT_POSITION_OVERRIDE"]) ? $context["S_AJAX_CHAT_POSITION_OVERRIDE"] : null))) {
                    // line 7
                    echo "\t\t\t";
                    $location = "chat_body.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("chat_body.html", "@spaceace_ajaxchat/event/viewforum_forum_title_after.html", 7)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 8
                    echo "\t\t\t<br />
\t\t";
                }
                // line 10
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/event/viewforum_forum_title_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  58 => 8,  45 => 7,  43 => 6,  40 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_AJAX_CHAT_VIEW -->*/
/* 	<!-- IF S_AJAX_CHAT_VIEWFORUM_OVERRIDE or S_AJAX_CHAT_VIEWFORUM and .topicrow -->*/
/* 		<!-- IF S_AJAX_CHAT_POSITION and not S_AJAX_CHAT_POSITION_OVERRIDE -->*/
/* 			<!-- INCLUDE chat_body.html -->*/
/* 			<br />*/
/* 		<!-- ELSEIF S_AJAX_CHAT_ACP_POSITION and S_AJAX_CHAT_POSITION_OVERRIDE -->*/
/* 			<!-- INCLUDE chat_body.html -->*/
/* 			<br />*/
/* 		<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* <!-- ENDIF -->*/
