<?php

/* @galandas_advlogin/event/acp_overall_footer_after.html */
class __TwigTemplate_2699a013d36809b47521383c480dcc3ed98727695f14c860d5190386340ca2a8 extends Twig_Template
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
        $asset_file = "colpick.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('93');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 2
        echo "
<script>
jQuery(function(\$) {
\tvar bgcolor = '";
        // line 5
        echo (isset($context["A_COLOR_ADVLOGIN"]) ? $context["A_COLOR_ADVLOGIN"] : null);
        echo "';
\t\$('#color_advlogin').colpick({
\t\tlayout: 'hex',
\t\tsubmit: 0,
\t\tonBeforeShow: function() {
\t\t\tif (bgcolor !== '') {
\t\t\t\t\$(this).colpickSetColor(bgcolor);
\t\t\t\tbgcolor = '';
\t\t\t}
\t\t},
\t\tonChange: function(hsb, hex, rgb, el, bySetColor) {
\t\t\t\$(el).css({
\t\t\t\t'border-right-color': '#' + hex,
\t\t\t\t'border-right-width': '20px',
\t\t\t\t'border-right-type': 'solid'
\t\t\t});
\t\t\tif (!bySetColor) {
\t\t\t\t\$(el).val(hex);
\t\t\t}
\t\t}
\t}).keyup(function() {
\t\t\$(this).colpickSetColor(this.value || 'ffffff');
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "@galandas_advlogin/event/acp_overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  30 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDEJS colpick.js -->*/
/* */
/* <script>*/
/* jQuery(function($) {*/
/* 	var bgcolor = '{A_COLOR_ADVLOGIN}';*/
/* 	$('#color_advlogin').colpick({*/
/* 		layout: 'hex',*/
/* 		submit: 0,*/
/* 		onBeforeShow: function() {*/
/* 			if (bgcolor !== '') {*/
/* 				$(this).colpickSetColor(bgcolor);*/
/* 				bgcolor = '';*/
/* 			}*/
/* 		},*/
/* 		onChange: function(hsb, hex, rgb, el, bySetColor) {*/
/* 			$(el).css({*/
/* 				'border-right-color': '#' + hex,*/
/* 				'border-right-width': '20px',*/
/* 				'border-right-type': 'solid'*/
/* 			});*/
/* 			if (!bySetColor) {*/
/* 				$(el).val(hex);*/
/* 			}*/
/* 		}*/
/* 	}).keyup(function() {*/
/* 		$(this).colpickSetColor(this.value || 'ffffff');*/
/* 	});*/
/* });*/
/* </script>*/
