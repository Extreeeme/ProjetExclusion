<?php

/* chat_body_script_vars.html */
class __TwigTemplate_6885596237c97fed78d1ee9d9ca90d17b59a770587a73e6c29c2301fee3255a0 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
\t// <![CDATA[
\t\tvar last_time = ";
        // line 3
        echo (isset($context["TIME"]) ? $context["TIME"] : null);
        echo ";
\t\tvar last_id = ";
        // line 4
        echo (isset($context["LAST_ID"]) ? $context["LAST_ID"] : null);
        echo ";
\t\tvar post_time = ";
        // line 5
        echo (isset($context["LAST_POST"]) ? $context["LAST_POST"] : null);
        echo ";
\t\tvar read_interval = (";
        // line 6
        echo (isset($context["REFRESH_TIME"]) ? $context["REFRESH_TIME"] : null);
        echo " * 1000);
\t\tvar chat_empty = '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("EMPTY"), "js");
        echo "';
\t\tvar ie_no_ajax = '";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("IE_NO_AJAX"), "js");
        echo "';
\t\tvar cookie_name = '";
        // line 9
        echo (isset($context["AJAX_CHAT_COOKIE_NAME"]) ? $context["AJAX_CHAT_COOKIE_NAME"] : null);
        echo "';
\t\tvar upgrade_browser = '";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("UPGRADE_BROWSER"), "js");
        echo "';
\t\tvar query_url\t= '";
        // line 11
        echo (isset($context["FILENAME"]) ? $context["FILENAME"] : null);
        echo "';
\t\t";
        // line 12
        if ((isset($context["S_POPUP"]) ? $context["S_POPUP"] : null)) {
            // line 13
            echo "\t\t\tvar query_url = '";
            echo (isset($context["FILENAME"]) ? $context["FILENAME"] : null);
            echo "/popup';
\t\t";
        } elseif (        // line 14
(isset($context["S_ARCHIVE"]) ? $context["S_ARCHIVE"] : null)) {
            // line 15
            echo "\t\t\tvar query_url = '";
            echo (isset($context["FILENAME"]) ? $context["FILENAME"] : null);
            echo "/archive';
\t\t";
        }
        // line 17
        echo "\t\t";
        if ((isset($context["S_AJAXCHAT_BBCODE"]) ? $context["S_AJAXCHAT_BBCODE"] : null)) {
            // line 18
            echo "\t\t\tvar chatbbcodetrue = true;
\t\t";
        } else {
            // line 20
            echo "\t\t\tvar chatbbcodetrue = false;
\t\t";
        }
        // line 22
        echo "\t\t";
        if ((isset($context["S_AJAX_CHAT_MESSAGES_DOWN"]) ? $context["S_AJAX_CHAT_MESSAGES_DOWN"] : null)) {
            // line 23
            echo "\t\t\tvar chatmessagedown = false;
\t\t";
        } else {
            // line 25
            echo "\t\t\tvar chatmessagedown = true;
\t\t";
        }
        // line 27
        echo "\t//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "chat_body_script_vars.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 27,  92 => 25,  88 => 23,  85 => 22,  81 => 20,  77 => 18,  74 => 17,  68 => 15,  66 => 14,  61 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/* 	// <![CDATA[*/
/* 		var last_time = {TIME};*/
/* 		var last_id = {LAST_ID};*/
/* 		var post_time = {LAST_POST};*/
/* 		var read_interval = ({REFRESH_TIME} * 1000);*/
/* 		var chat_empty = '{{ lang('EMPTY')|e('js') }}';*/
/* 		var ie_no_ajax = '{{ lang('IE_NO_AJAX')|e('js') }}';*/
/* 		var cookie_name = '{AJAX_CHAT_COOKIE_NAME}';*/
/* 		var upgrade_browser = '{{ lang('UPGRADE_BROWSER')|e('js') }}';*/
/* 		var query_url	= '{FILENAME}';*/
/* 		<!-- IF S_POPUP -->*/
/* 			var query_url = '{FILENAME}/popup';*/
/* 		<!-- ELSEIF S_ARCHIVE -->*/
/* 			var query_url = '{FILENAME}/archive';*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_AJAXCHAT_BBCODE -->*/
/* 			var chatbbcodetrue = true;*/
/* 		<!-- ELSE -->*/
/* 			var chatbbcodetrue = false;*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_AJAX_CHAT_MESSAGES_DOWN -->*/
/* 			var chatmessagedown = false;*/
/* 		<!-- ELSE -->*/
/* 			var chatmessagedown = true;*/
/* 		<!-- ENDIF -->*/
/* 	//]]>*/
/* </script>*/
