<?php

/* @vse_topicpreview/event/overall_footer_after.html */
class __TwigTemplate_13f13ff7fd0f9898a676db4a72165e4a5a6276042552e748166fd46a632bfc13 extends Twig_Template
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
            $asset_file = "@vse_topicpreview/topicpreview.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('93');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 3
            echo "\t<script>
\t\tjQuery(function() {
\t\t\tjQuery('.topictitle').topicPreview({
\t\t\t\tdir: '";
            // line 6
            echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
            echo "',
\t\t\t\tdelay: ";
            // line 7
            echo (isset($context["TOPICPREVIEW_DELAY"]) ? $context["TOPICPREVIEW_DELAY"] : null);
            echo ",
\t\t\t\twidth: ";
            // line 8
            echo (isset($context["TOPICPREVIEW_WIDTH"]) ? $context["TOPICPREVIEW_WIDTH"] : null);
            echo ",
\t\t\t\tdrift: ";
            // line 9
            echo (isset($context["TOPICPREVIEW_DRIFT"]) ? $context["TOPICPREVIEW_DRIFT"] : null);
            echo ",
\t\t\t\tposition: {left: 35, top: 25},
\t\t\t\tnoavatar: '";
            // line 11
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/no_avatar.gif'
\t\t\t});
\t\t});
\t</script>
";
        } elseif ((        // line 15
(isset($context["S_TOPICPREVIEW"]) ? $context["S_TOPICPREVIEW"] : null) &&  !(isset($context["TOPICPREVIEW_THEME"]) ? $context["TOPICPREVIEW_THEME"] : null))) {
            // line 16
            echo "\t<script>
\t\tjQuery(function() {
\t\t\tjQuery('.topictitle').attr('title', function() {
\t\t\t\treturn jQuery(this).closest('li, tr').find('.topic_preview_first').text() || undefined;
\t\t\t});
\t\t});
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@vse_topicpreview/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  62 => 15,  55 => 11,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  33 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if S_TOPICPREVIEW and TOPICPREVIEW_THEME %}*/
/* 	{% INCLUDEJS '@vse_topicpreview/topicpreview.js' %}*/
/* 	<script>*/
/* 		jQuery(function() {*/
/* 			jQuery('.topictitle').topicPreview({*/
/* 				dir: '{{ S_CONTENT_DIRECTION }}',*/
/* 				delay: {{ TOPICPREVIEW_DELAY }},*/
/* 				width: {{ TOPICPREVIEW_WIDTH }},*/
/* 				drift: {{ TOPICPREVIEW_DRIFT }},*/
/* 				position: {left: 35, top: 25},*/
/* 				noavatar: '{{ T_THEME_PATH }}/images/no_avatar.gif'*/
/* 			});*/
/* 		});*/
/* 	</script>*/
/* {% elseif S_TOPICPREVIEW and not TOPICPREVIEW_THEME %}*/
/* 	<script>*/
/* 		jQuery(function() {*/
/* 			jQuery('.topictitle').attr('title', function() {*/
/* 				return jQuery(this).closest('li, tr').find('.topic_preview_first').text() || undefined;*/
/* 			});*/
/* 		});*/
/* 	</script>*/
/* {% endif %}*/
/* */
