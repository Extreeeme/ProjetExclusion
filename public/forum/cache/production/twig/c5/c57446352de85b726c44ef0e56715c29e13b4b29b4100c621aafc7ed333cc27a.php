<?php

/* chatrow_message_icons.html */
class __TwigTemplate_c74d516686f9bb3b5ceea2a2b918c2ea82cac5aa52ee89efa68ca47fa1666659 extends Twig_Template
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
        echo "<span class=\"pull-right top-pad\">
\t";
        // line 2
        // line 3
        echo "\t";
        if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
            // line 4
            echo "\t\t<a href=\"javascript:void(0)\" onClick=\"chatquote('";
            echo $this->getAttribute((isset($context["chatrow"]) ? $context["chatrow"] : null), "MESSAGE_ID", array());
            echo "')\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("CHAT_QUOTE");
            echo "\"><i class=\"fa fa-quote-left fa-fw\"></i></a>
\t";
        }
        // line 6
        echo "\t";
        if ($this->getAttribute((isset($context["chatrow"]) ? $context["chatrow"] : null), "S_AJAXCHAT_EDIT", array())) {
            // line 7
            echo "\t\t<a href=\"javascript:void(0)\" onClick=\"popup('";
            echo $this->getAttribute((isset($context["chatrow"]) ? $context["chatrow"] : null), "U_EDIT", array());
            echo "', 600, 250)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("CHAT_EDIT");
            echo "\" ><i class=\"fa fa-pencil-square-o fa-fw\"></i></a>
\t";
        }
        // line 9
        echo "\t";
        if (((isset($context["M_AJAXCHAT_DELETE"]) ? $context["M_AJAXCHAT_DELETE"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null))) {
            // line 10
            echo "\t\t<a href=\"javascript:void(0)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("DELETE_CHAT_MESSAGE");
            echo "\" onClick=\"delete_post('";
            echo $this->getAttribute((isset($context["chatrow"]) ? $context["chatrow"] : null), "MESSAGE_ID", array());
            echo "')\"><i class=\"fa fa-trash-o fa-fw\"></i></a>
\t";
        }
        // line 12
        echo "\t";
        // line 13
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "chatrow_message_icons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  56 => 12,  48 => 10,  45 => 9,  37 => 7,  34 => 6,  26 => 4,  23 => 3,  22 => 2,  19 => 1,);
    }
}
/* <span class="pull-right top-pad">*/
/* 	<!-- EVENT spaceace_ajax_chat_chatrow_icons_before -->*/
/* 	<!-- IF S_BBCODE_ALLOWED -->*/
/* 		<a href="javascript:void(0)" onClick="chatquote('{chatrow.MESSAGE_ID}')" title="{{ lang('CHAT_QUOTE') }}"><i class="fa fa-quote-left fa-fw"></i></a>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF chatrow.S_AJAXCHAT_EDIT -->*/
/* 		<a href="javascript:void(0)" onClick="popup('{chatrow.U_EDIT}', 600, 250)" title="{{ lang('CHAT_EDIT') }}" ><i class="fa fa-pencil-square-o fa-fw"></i></a>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF M_AJAXCHAT_DELETE or U_ACP -->*/
/* 		<a href="javascript:void(0)" title="{{ lang('DELETE_CHAT_MESSAGE') }}" onClick="delete_post('{chatrow.MESSAGE_ID}')"><i class="fa fa-trash-o fa-fw"></i></a>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- EVENT spaceace_ajax_chat_chatrow_icons_after -->*/
/* </span>*/
/* */
