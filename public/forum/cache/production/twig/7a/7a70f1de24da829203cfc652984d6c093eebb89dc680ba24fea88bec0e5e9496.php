<?php

/* captcha_recaptcha.html */
class __TwigTemplate_ca48b9324ee4e51de583d6fa3fe5b6aea176e5a5e8681cbfb4a2b551795a8f24 extends Twig_Template
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
        echo "<div class=\"clearfix\">
";
        // line 2
        if (((isset($context["S_TYPE"]) ? $context["S_TYPE"] : null) == 1)) {
            // line 3
            echo "<div class=\"well\">
\t<div class=\"side-segment\"><h3>";
            // line 4
            echo $this->env->getExtension('phpbb')->lang("CONFIRMATION");
            echo "</h3></div>
\t<p>";
            // line 5
            echo $this->env->getExtension('phpbb')->lang("CONFIRM_EXPLAIN");
            echo "</p>
\t<fieldset>
";
        }
        // line 8
        if ((isset($context["S_RECAPTCHA_AVAILABLE"]) ? $context["S_RECAPTCHA_AVAILABLE"] : null)) {
            // line 9
            echo "<label class=\"control-label\" for=\"recaptcha\">";
            echo $this->env->getExtension('phpbb')->lang("CONFIRM_CODE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><span class=\"help-block\">";
            echo $this->env->getExtension('phpbb')->lang("RECAPTCHA_EXPLAIN");
            echo "</span>
<noscript>
\t<div>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("RECAPTCHA_NOSCRIPT");
            echo "</div>
</noscript>
<script src=\"";
            // line 13
            echo (isset($context["RECAPTCHA_SERVER"]) ? $context["RECAPTCHA_SERVER"] : null);
            echo ".js?hl=";
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("RECAPTCHA_LANG"), "js");
            echo "\" async defer></script>
<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 14
            echo (isset($context["RECAPTCHA_PUBKEY"]) ? $context["RECAPTCHA_PUBKEY"] : null);
            echo "\" data-tabindex=\"";
            if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CAPTCHA_TAB_INDEX", array())) {
                echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CAPTCHA_TAB_INDEX", array());
            } else {
                echo "10";
            }
            echo "\"></div>
";
        } else {
            // line 16
            echo $this->env->getExtension('phpbb')->lang("RECAPTCHA_NOT_AVAILABLE");
            echo "
";
        }
        // line 18
        if (((isset($context["S_TYPE"]) ? $context["S_TYPE"] : null) == 1)) {
            // line 19
            echo "\t</fieldset>
</div>
";
        }
        // line 22
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "captcha_recaptcha.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  77 => 19,  75 => 18,  70 => 16,  59 => 14,  53 => 13,  48 => 11,  39 => 9,  37 => 8,  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="clearfix">*/
/* <!-- IF S_TYPE == 1 -->*/
/* <div class="well">*/
/* 	<div class="side-segment"><h3>{L_CONFIRMATION}</h3></div>*/
/* 	<p>{L_CONFIRM_EXPLAIN}</p>*/
/* 	<fieldset>*/
/* <!-- ENDIF -->*/
/* <!-- IF S_RECAPTCHA_AVAILABLE -->*/
/* <label class="control-label" for="recaptcha">{L_CONFIRM_CODE}{L_COLON}</label><span class="help-block">{L_RECAPTCHA_EXPLAIN}</span>*/
/* <noscript>*/
/* 	<div>{L_RECAPTCHA_NOSCRIPT}</div>*/
/* </noscript>*/
/* <script src="{RECAPTCHA_SERVER}.js?hl={LA_RECAPTCHA_LANG}" async defer></script>*/
/* <div class="g-recaptcha" data-sitekey="{RECAPTCHA_PUBKEY}" data-tabindex="<!-- IF $CAPTCHA_TAB_INDEX -->{$CAPTCHA_TAB_INDEX}<!-- ELSE -->10<!-- ENDIF -->"></div>*/
/* <!-- ELSE -->*/
/* {L_RECAPTCHA_NOT_AVAILABLE}*/
/* <!-- ENDIF -->*/
/* <!-- IF S_TYPE == 1 -->*/
/* 	</fieldset>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* </div>*/
