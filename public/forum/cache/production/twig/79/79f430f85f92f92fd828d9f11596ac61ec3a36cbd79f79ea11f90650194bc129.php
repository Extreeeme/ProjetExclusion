<?php

/* @paul999_mention/event/overall_header_head_append.html */
class __TwigTemplate_c25067f84c865062c0c3344101448d3af391030f4a2795d7e71b707f41056824 extends Twig_Template
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
        if (((isset($context["UA_AJAX_MENTION_URL"]) ? $context["UA_AJAX_MENTION_URL"] : null) &&  !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "INCLUDED_ICHORDATCSS", array()))) {
            // line 2
            $asset_file = "@paul999_mention/jquery.atwho.min.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('93');
            }
            $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);            // line 3
            $value = true;
            $context['definition']->set('INCLUDED_ICHORDATCSS', $value);
        }
        // line 5
        $asset_file = "@paul999_mention/mention.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('93');
        }
        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);    }

    public function getTemplateName()
    {
        return "@paul999_mention/event/overall_header_head_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  32 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF UA_AJAX_MENTION_URL and not $INCLUDED_ICHORDATCSS -->*/
/* <!-- INCLUDECSS @paul999_mention/jquery.atwho.min.css -->*/
/* <!-- DEFINE $INCLUDED_ICHORDATCSS = true -->*/
/* <!-- ENDIF -->*/
/* <!-- INCLUDECSS @paul999_mention/mention.css -->*/
