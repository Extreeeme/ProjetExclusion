<?php

/* @spaceace_ajaxchat/event/overall_header_head_append.html */
class __TwigTemplate_c4aceb8383f655d01975079274d513cacbb6e7958ed9361e47ad9f27b24284ee extends Twig_Template
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
        if ((((isset($context["S_CHAT_ENABLED"]) ? $context["S_CHAT_ENABLED"] : null) || (isset($context["S_AJAX_CHAT_VIEW"]) ? $context["S_AJAX_CHAT_VIEW"] : null)) || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat"))) {
            // line 2
            echo "\t";
            $asset_file = "@spaceace_ajaxchat/ajax_chat.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('93');
            }
            $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);        }
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/event/overall_header_head_append.html";
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
/* <!-- IF S_CHAT_ENABLED or S_AJAX_CHAT_VIEW or SCRIPT_NAME == 'app/chat' -->*/
/* 	<!-- INCLUDECSS @spaceace_ajaxchat/ajax_chat.css -->*/
/* <!-- ENDIF -->*/
