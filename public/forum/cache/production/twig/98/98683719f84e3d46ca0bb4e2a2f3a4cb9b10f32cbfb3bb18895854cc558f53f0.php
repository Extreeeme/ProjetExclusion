<?php

/* @vse_topicpreview/event/overall_header_head_append.html */
class __TwigTemplate_0acc015e0cb52d59453e26482db8ee9abf4ec64c1e23086d915adfebbe2a2f3d extends Twig_Template
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
        if (((isset($context["S_TOPICPREVIEW"]) ? $context["S_TOPICPREVIEW"] : null) && (isset($context["TOPICPREVIEW_THEME"]) ? $context["TOPICPREVIEW_THEME"] : null))) {
            // line 2
            echo "\t";
            $asset_file = (("@vse_topicpreview/" . (isset($context["TOPICPREVIEW_THEME"]) ? $context["TOPICPREVIEW_THEME"] : null)) . ".css");
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
        return "@vse_topicpreview/event/overall_header_head_append.html";
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
/* {% if S_TOPICPREVIEW and TOPICPREVIEW_THEME %}*/
/* 	{% INCLUDECSS '@vse_topicpreview/' ~ TOPICPREVIEW_THEME ~ '.css' %}*/
/* {% endif %}*/
/* */
