<?php

/* @galandas_advlogin/event/overall_footer_after.html */
class __TwigTemplate_8cb212efb0c85856d57a2c838950846963706b6c8496e485f3833d245ee7cc11 extends Twig_Template
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
        $asset_file = "jquery.popup.js";
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
        echo "<script type=\"text/javascript\">
//<![CDATA[
var logInPopUpLeft, logInPopUpTop, logInPopUpWidth = ";
        // line 4
        echo (isset($context["WIDTH_ADVLOGIN"]) ? $context["WIDTH_ADVLOGIN"] : null);
        echo ", logInPopUpHeight = ";
        echo (isset($context["HEIGHT_ADVLOGIN"]) ? $context["HEIGHT_ADVLOGIN"] : null);
        echo ", logInBackgroundResize = true, logInBackgroundClass = false;

\$(document).ready( function() {
   \$(window).resize(function() {
      var windowWidth = document.documentElement.clientWidth;
      var popupWidth = \$(\"#login_popup\").width();
      var mypopup = \$(\"#login_popup\");
      \$(\"#login_popup\").css({\"left\": windowWidth/2 - popupWidth/2});
   });
});
//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "@galandas_advlogin/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  30 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDEJS jquery.popup.js -->*/
/* <script type="text/javascript">*/
/* //<![CDATA[*/
/* var logInPopUpLeft, logInPopUpTop, logInPopUpWidth = {WIDTH_ADVLOGIN}, logInPopUpHeight = {HEIGHT_ADVLOGIN}, logInBackgroundResize = true, logInBackgroundClass = false;*/
/* */
/* $(document).ready( function() {*/
/*    $(window).resize(function() {*/
/*       var windowWidth = document.documentElement.clientWidth;*/
/*       var popupWidth = $("#login_popup").width();*/
/*       var mypopup = $("#login_popup");*/
/*       $("#login_popup").css({"left": windowWidth/2 - popupWidth/2});*/
/*    });*/
/* });*/
/* //]]>*/
/* </script>*/
