<?php

/* addons/header_teaser_body.html */
class __TwigTemplate_6bfcdddeadfe51bbf44eca3ebd8c4c1a55fa76ba9599b66a350605673271524a extends Twig_Template
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
        echo "<div class=\"flat-header\">
<div class=\"masthead\"></div>
    <div class=\"wrapper-head\">
\t <div class=\"container\">
\t \t";
        // line 5
        if ((((isset($context["TEASER_TITLE"]) ? $context["TEASER_TITLE"] : null) != "") || ((isset($context["TEASER_TEXT"]) ? $context["TEASER_TEXT"] : null) != ""))) {
            // line 6
            echo "\t \t\t<h1>";
            echo (isset($context["TEASER_TITLE"]) ? $context["TEASER_TITLE"] : null);
            echo "</h1>
       \t\t<p>";
            // line 7
            echo (isset($context["TEASER_TEXT"]) ? $context["TEASER_TEXT"] : null);
            echo "</p>
\t \t";
        } else {
            // line 9
            echo "\t\t\t<h1>";
            echo $this->env->getExtension('phpbb')->lang("FLATBOOTS_INTRO");
            echo "</h1>
\t\t\t<p>";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("FLATBOOTS_EXPLAIN");
            echo "</p>
        ";
        }
        // line 12
        echo "     </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "addons/header_teaser_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  42 => 10,  37 => 9,  32 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="flat-header">*/
/* <div class="masthead"></div>*/
/*     <div class="wrapper-head">*/
/* 	 <div class="container">*/
/* 	 	<!-- IF TEASER_TITLE neq '' or TEASER_TEXT neq '' -->*/
/* 	 		<h1>{TEASER_TITLE}</h1>*/
/*        		<p>{TEASER_TEXT}</p>*/
/* 	 	<!-- ELSE -->*/
/* 			<h1>{L_FLATBOOTS_INTRO}</h1>*/
/* 			<p>{L_FLATBOOTS_EXPLAIN}</p>*/
/*         <!-- ENDIF -->*/
/*      </div>*/
/* 	</div>*/
/* </div>*/
