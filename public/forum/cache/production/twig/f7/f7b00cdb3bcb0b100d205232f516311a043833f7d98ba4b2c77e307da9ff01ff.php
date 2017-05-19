<?php

/* attachment.html */
class __TwigTemplate_6717e14233a81f25a74ec685b13fa3996c0a47623ed91c2978e4bdddf349389e extends Twig_Template
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
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "_file", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["_file"]) {
            // line 3
            echo "\t";
            if ($this->getAttribute($context["_file"], "S_DENIED", array())) {
                // line 4
                echo "\t<p>[";
                echo $this->getAttribute($context["_file"], "DENIED_MESSAGE", array());
                echo "]</p>
\t";
            } else {
                // line 6
                echo "\t";
                // line 7
                echo "\t
\t\t";
                // line 8
                if ($this->getAttribute($context["_file"], "S_THUMBNAIL", array())) {
                    // line 9
                    echo "\t\t<div class=\"thumbnail\">
\t\t\t<div><a href=\"";
                    // line 10
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                    echo "\"><img class=\"img-post\" src=\"";
                    echo $this->getAttribute($context["_file"], "THUMB_IMAGE", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo " (";
                    echo $this->getAttribute($context["_file"], "FILESIZE", array());
                    echo " ";
                    echo $this->getAttribute($context["_file"], "SIZE_LANG", array());
                    echo ") ";
                    echo $this->getAttribute($context["_file"], "L_DOWNLOAD_COUNT", array());
                    echo "\" /></a></div>
\t\t\t";
                    // line 11
                    if ($this->getAttribute($context["_file"], "COMMENT", array())) {
                        echo "<small><i class=\"fa fa-pencil\"></i> ";
                        echo $this->getAttribute($context["_file"], "COMMENT", array());
                        echo "</small>";
                    }
                    // line 12
                    echo "\t\t</div>
\t\t";
                }
                // line 14
                echo "\t\t
\t\t";
                // line 15
                if ($this->getAttribute($context["_file"], "S_IMAGE", array())) {
                    // line 16
                    echo "\t\t<div class=\"file\">
\t\t\t<div class=\"attach-image\"><img class=\"img-post\" src=\"";
                    // line 17
                    echo $this->getAttribute($context["_file"], "U_INLINE_LINK", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo "\" onclick=\"viewableArea(this);\" /></div>
\t\t\t";
                    // line 18
                    if ($this->getAttribute($context["_file"], "COMMENT", array())) {
                        echo "<small><i class=\"fa fa-pencil\"></i> ";
                        echo $this->getAttribute($context["_file"], "COMMENT", array());
                        echo "</small><br>";
                    }
                    // line 19
                    echo "\t\t\t<small><i class=\"fa fa-eye\"></i> ";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo " (";
                    echo $this->getAttribute($context["_file"], "FILESIZE", array());
                    echo " ";
                    echo $this->getAttribute($context["_file"], "SIZE_LANG", array());
                    echo ") ";
                    echo $this->getAttribute($context["_file"], "L_DOWNLOAD_COUNT", array());
                    echo "</small>
\t\t</div>
\t\t";
                }
                // line 22
                echo "\t\t
\t\t";
                // line 23
                if ($this->getAttribute($context["_file"], "S_FILE", array())) {
                    // line 24
                    echo "\t\t<div class=\"file\">
\t\t\t<div>";
                    // line 25
                    if ($this->getAttribute($context["_file"], "UPLOAD_ICON", array())) {
                        echo "<i class=\"fa fa-paper-clip fa-flip-horizontal\"></i> ";
                    }
                    echo "<a class=\"postlink\" href=\"";
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                    echo "\">";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo "</a></div>
\t\t\t";
                    // line 26
                    if ($this->getAttribute($context["_file"], "COMMENT", array())) {
                        echo "<small><i class=\"fa fa-pencil\"></i> ";
                        echo $this->getAttribute($context["_file"], "COMMENT", array());
                        echo "</small><br>";
                    }
                    // line 27
                    echo "\t\t\t<small><i class=\"fa fa-download\"></i> (";
                    echo $this->getAttribute($context["_file"], "FILESIZE", array());
                    echo " ";
                    echo $this->getAttribute($context["_file"], "SIZE_LANG", array());
                    echo ") ";
                    echo $this->getAttribute($context["_file"], "L_DOWNLOAD_COUNT", array());
                    echo "</small>
\t\t</div>
\t\t";
                }
                // line 30
                echo "
\t\t";
                // line 31
                if ($this->getAttribute($context["_file"], "S_FLASH_FILE", array())) {
                    // line 32
                    echo "\t\t\t<object classid=\"clsid:D27CDB6E-AE6D-11CF-96B8-444553540000\" codebase=\"http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0\" width=\"";
                    echo $this->getAttribute($context["_file"], "WIDTH", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($context["_file"], "HEIGHT", array());
                    echo "\">
\t\t\t\t<param name=\"movie\" value=\"";
                    // line 33
                    echo $this->getAttribute($context["_file"], "U_VIEW_LINK", array());
                    echo "\" />
\t\t\t\t<param name=\"play\" value=\"true\" />
\t\t\t\t<param name=\"loop\" value=\"true\" />
\t\t\t\t<param name=\"quality\" value=\"high\" />
\t\t\t\t<param name=\"allowScriptAccess\" value=\"never\" />
\t\t\t\t<param name=\"allowNetworking\" value=\"internal\" />
\t\t\t\t<embed src=\"";
                    // line 39
                    echo $this->getAttribute($context["_file"], "U_VIEW_LINK", array());
                    echo "\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash\" width=\"";
                    echo $this->getAttribute($context["_file"], "WIDTH", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($context["_file"], "HEIGHT", array());
                    echo "\" play=\"true\" loop=\"true\" quality=\"high\" allowscriptaccess=\"never\" allownetworking=\"internal\"></embed>
\t\t\t</object>
\t\t\t<a href=\"";
                    // line 41
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                    echo "\">";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo "</a> [ ";
                    echo $this->getAttribute($context["_file"], "FILESIZE", array());
                    echo " ";
                    echo $this->getAttribute($context["_file"], "SIZE_LANG", array());
                    echo " | ";
                    echo $this->getAttribute($context["_file"], "L_DOWNLOAD_COUNT", array());
                    echo " ]
\t\t";
                }
                // line 43
                echo "
\t";
                // line 44
                // line 45
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
    }

    public function getTemplateName()
    {
        return "attachment.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 47,  184 => 45,  183 => 44,  180 => 43,  167 => 41,  158 => 39,  149 => 33,  142 => 32,  140 => 31,  137 => 30,  126 => 27,  120 => 26,  110 => 25,  107 => 24,  105 => 23,  102 => 22,  89 => 19,  83 => 18,  77 => 17,  74 => 16,  72 => 15,  69 => 14,  65 => 12,  59 => 11,  43 => 10,  40 => 9,  38 => 8,  35 => 7,  33 => 6,  27 => 4,  24 => 3,  20 => 2,  19 => 1,);
    }
}
/* <!-- EVENT attachment_file_before -->*/
/* <!-- BEGIN _file -->*/
/* 	<!-- IF _file.S_DENIED -->*/
/* 	<p>[{_file.DENIED_MESSAGE}]</p>*/
/* 	<!-- ELSE -->*/
/* 	<!-- EVENT attachment_file_prepend -->*/
/* 	*/
/* 		<!-- IF _file.S_THUMBNAIL -->*/
/* 		<div class="thumbnail">*/
/* 			<div><a href="{_file.U_DOWNLOAD_LINK}"><img class="img-post" src="{_file.THUMB_IMAGE}" alt="{_file.DOWNLOAD_NAME}" title="{_file.DOWNLOAD_NAME} ({_file.FILESIZE} {_file.SIZE_LANG}) {_file.L_DOWNLOAD_COUNT}" /></a></div>*/
/* 			<!-- IF _file.COMMENT --><small><i class="fa fa-pencil"></i> {_file.COMMENT}</small><!-- ENDIF -->*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* 		*/
/* 		<!-- IF _file.S_IMAGE -->*/
/* 		<div class="file">*/
/* 			<div class="attach-image"><img class="img-post" src="{_file.U_INLINE_LINK}" alt="{_file.DOWNLOAD_NAME}" onclick="viewableArea(this);" /></div>*/
/* 			<!-- IF _file.COMMENT --><small><i class="fa fa-pencil"></i> {_file.COMMENT}</small><br><!-- ENDIF -->*/
/* 			<small><i class="fa fa-eye"></i> {_file.DOWNLOAD_NAME} ({_file.FILESIZE} {_file.SIZE_LANG}) {_file.L_DOWNLOAD_COUNT}</small>*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* 		*/
/* 		<!-- IF _file.S_FILE -->*/
/* 		<div class="file">*/
/* 			<div><!-- IF _file.UPLOAD_ICON --><i class="fa fa-paper-clip fa-flip-horizontal"></i> <!-- ENDIF --><a class="postlink" href="{_file.U_DOWNLOAD_LINK}">{_file.DOWNLOAD_NAME}</a></div>*/
/* 			<!-- IF _file.COMMENT --><small><i class="fa fa-pencil"></i> {_file.COMMENT}</small><br><!-- ENDIF -->*/
/* 			<small><i class="fa fa-download"></i> ({_file.FILESIZE} {_file.SIZE_LANG}) {_file.L_DOWNLOAD_COUNT}</small>*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF _file.S_FLASH_FILE -->*/
/* 			<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="{_file.WIDTH}" height="{_file.HEIGHT}">*/
/* 				<param name="movie" value="{_file.U_VIEW_LINK}" />*/
/* 				<param name="play" value="true" />*/
/* 				<param name="loop" value="true" />*/
/* 				<param name="quality" value="high" />*/
/* 				<param name="allowScriptAccess" value="never" />*/
/* 				<param name="allowNetworking" value="internal" />*/
/* 				<embed src="{_file.U_VIEW_LINK}" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="{_file.WIDTH}" height="{_file.HEIGHT}" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed>*/
/* 			</object>*/
/* 			<a href="{_file.U_DOWNLOAD_LINK}">{_file.DOWNLOAD_NAME}</a> [ {_file.FILESIZE} {_file.SIZE_LANG} | {_file.L_DOWNLOAD_COUNT} ]*/
/* 		<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT attachment_file_append -->*/
/* 	<!-- ENDIF -->*/
/* <!-- END _file -->*/
/* <!-- EVENT attachment_file_after -->*/
