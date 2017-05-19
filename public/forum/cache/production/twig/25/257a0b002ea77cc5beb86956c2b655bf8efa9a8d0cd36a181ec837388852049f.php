<?php

/* @vse_lightbox/event/overall_header_head_append.html */
class __TwigTemplate_6f616c985a74bc0fe0186aa9f6a3404819d5f06d2e9f8ce3c712e7e9f0c6f001 extends Twig_Template
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
        if ((isset($context["LIGHTBOX_RESIZE_WIDTH"]) ? $context["LIGHTBOX_RESIZE_WIDTH"] : null)) {
            // line 2
            echo "\t";
            $asset_file = "@vse_lightbox/../template/lightbox/css/lightbox.min.css";
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
        return "@vse_lightbox/event/overall_header_head_append.html";
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
/* {% if LIGHTBOX_RESIZE_WIDTH %}*/
/* 	{% INCLUDECSS '@vse_lightbox/../template/lightbox/css/lightbox.min.css' %}*/
/* {% endif %}*/
/* */
