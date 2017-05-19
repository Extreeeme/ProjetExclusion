<?php

/* @vse_lightbox/event/overall_footer_after.html */
class __TwigTemplate_e53700557d4122c27ad6f8eb98593fcb56b1ea4f0ff587716872e6a66167914f extends Twig_Template
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
            $asset_file = "@vse_lightbox/js/resizer.js";
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
            echo "\t";
            // line 4
            echo "\t";
            if ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "INCLUDED_LIGHTBOXJS", array())) {
                // line 5
                echo "\t\t";
                $asset_file = "@vse_lightbox/lightbox/js/lightbox.min.js";
                $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
                if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                    $asset_path = $asset->get_path();                    $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                    if (!file_exists($local_file)) {
                        $local_file = $this->getEnvironment()->findTemplate($asset_path);
                        $asset->set_path($local_file, true);
                    }
                    $asset->add_assets_version('93');
                }
                $this->getEnvironment()->get_assets_bag()->add_script($asset);                // line 6
                echo "\t\t";
                $value = true;
                $context['definition']->set('INCLUDED_LIGHTBOXJS', $value);
                // line 7
                echo "\t";
            }
            // line 8
            echo "\t<script>
\t\tvar vseLightbox = {};
\t\tvseLightbox.resizeWidth = ";
            // line 10
            echo (isset($context["LIGHTBOX_RESIZE_WIDTH"]) ? $context["LIGHTBOX_RESIZE_WIDTH"] : null);
            echo ";
\t\tvseLightbox.lightboxGal = ";
            // line 11
            echo (isset($context["S_LIGHTBOX_GALLERY"]) ? $context["S_LIGHTBOX_GALLERY"] : null);
            echo ";
\t\tvseLightbox.lightboxSig = ";
            // line 12
            echo (isset($context["S_LIGHTBOX_SIGNATURES"]) ? $context["S_LIGHTBOX_SIGNATURES"] : null);
            echo ";
\t\tvseLightbox.imageTitles = ";
            // line 13
            echo (isset($context["S_LIGHTBOX_IMG_TITLES"]) ? $context["S_LIGHTBOX_IMG_TITLES"] : null);
            echo ";
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@vse_lightbox/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 8,  54 => 7,  50 => 6,  38 => 5,  35 => 4,  33 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if LIGHTBOX_RESIZE_WIDTH %}*/
/* 	{% INCLUDEJS '@vse_lightbox/js/resizer.js' %}*/
/* 	{# Test $INCLUDED_LIGHTBOXJS is not defined #}*/
/* 	{% if not definition.INCLUDED_LIGHTBOXJS %}*/
/* 		{% INCLUDEJS '@vse_lightbox/lightbox/js/lightbox.min.js' %}*/
/* 		{% DEFINE INCLUDED_LIGHTBOXJS = true %}*/
/* 	{% endif %}*/
/* 	<script>*/
/* 		var vseLightbox = {};*/
/* 		vseLightbox.resizeWidth = {{ LIGHTBOX_RESIZE_WIDTH }};*/
/* 		vseLightbox.lightboxGal = {{ S_LIGHTBOX_GALLERY }};*/
/* 		vseLightbox.lightboxSig = {{ S_LIGHTBOX_SIGNATURES }};*/
/* 		vseLightbox.imageTitles = {{ S_LIGHTBOX_IMG_TITLES }};*/
/* 	</script>*/
/* {% endif %}*/
/* */
