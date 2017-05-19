<?php

/* @galandas_advlogin/event/overall_header_page_body_before.html */
class __TwigTemplate_a545ef8d2565d22496b6b78f619bc677fa029ea536e71e698ddef3a6d581e611 extends Twig_Template
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
        if (( !(((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) || (isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) || (isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) && (isset($context["ENABLE_ADVLOGIN"]) ? $context["ENABLE_ADVLOGIN"] : null))) {
            // line 2
            $location = "body_advlogin.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("body_advlogin.html", "@galandas_advlogin/event/overall_header_page_body_before.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "@galandas_advlogin/event/overall_header_page_body_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* <!-- IF not (S_USER_LOGGED_IN or S_IS_BOT or S_IN_UCP) and (ENABLE_ADVLOGIN) -->*/
/* <!-- INCLUDE body_advlogin.html -->*/
/* <!-- ENDIF -->*/
