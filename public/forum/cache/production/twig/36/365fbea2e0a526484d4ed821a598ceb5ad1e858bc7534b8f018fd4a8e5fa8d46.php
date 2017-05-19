<?php

/* index_body.html */
class __TwigTemplate_2666943bf50f9523e4bbe8851a1fe6d97bb40696a4884118e7fbf43c6455e8ef extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        // line 3
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 3)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('spaceace_ajaxchat', '__main__'));
        $this->env->loadTemplate('@spaceace_ajaxchat/event/index_body_forumlist_body_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 5
        echo "
";
        // line 6
        // line 7
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 8
            echo "<div class=\"panel panel-forum panel-stats\">
 <div class=\"panel-heading\">";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("SITESPLAT_STATISTICS");
            echo "</div>
 <div class=\"panel-body\">
    <div class=\"row\">
\t  <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-acqua\">";
            // line 13
            echo (isset($context["SITESPLAT_CURRENTLY_ONLINE"]) ? $context["SITESPLAT_CURRENTLY_ONLINE"] : null);
            echo "&nbsp;<a data-toggle=\"collapse\" data-target=\".sorting\" href=\"javascript:void(0);\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("EXPAND_VIEW");
            echo "\"><i class=\"fa fa-angle-double-down\"></i></a></span><strong>";
            echo $this->env->getExtension('phpbb')->lang("SITESPLAT_USERS_ONLINE");
            echo "</strong>
\t   </div>
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-seppia\">";
            // line 16
            echo (isset($context["SITESPLAT_RECORD_ONLINE"]) ? $context["SITESPLAT_RECORD_ONLINE"] : null);
            echo "</span><strong>";
            echo $this->env->getExtension('phpbb')->lang("SITESPLAT_MOST_USERS_ONLINE");
            echo "</strong>
\t   </div>
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-melograno\">";
            // line 19
            echo (isset($context["SITESPLAT_TOTAL_POSTS"]) ? $context["SITESPLAT_TOTAL_POSTS"] : null);
            echo "</span><strong>";
            echo $this->env->getExtension('phpbb')->lang("SITESPLAT_TOTAL_POSTS");
            echo "</strong>
\t   </div>
\t   
\t <div class=\"visible-xs space10\"></div>
\t  <div class=\"visible-xs space10\"></div>
\t  
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-drank\">";
            // line 26
            echo (isset($context["SITESPLAT_TOTAL_TOPICS"]) ? $context["SITESPLAT_TOTAL_TOPICS"] : null);
            echo "</span><strong>";
            echo $this->env->getExtension('phpbb')->lang("SITESPLAT_TOTAL_TOPICS");
            echo "</strong>
\t   </div>
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-orange\">";
            // line 29
            echo (isset($context["SITESPLAT_TOTAL_USERS"]) ? $context["SITESPLAT_TOTAL_USERS"] : null);
            echo "</span><strong>";
            echo $this->env->getExtension('phpbb')->lang("SITESPLAT_TOTAL_USERS");
            echo "</strong>
\t   </div>
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-red\">";
            // line 32
            echo (isset($context["SITESPLAT_NEWEST_USER"]) ? $context["SITESPLAT_NEWEST_USER"] : null);
            echo "</span><strong>";
            echo $this->env->getExtension('phpbb')->lang("SITESPLAT_NEWEST_MEMBER");
            echo "</strong>
\t   </div> 
\t</div>
 </div>
 ";
            // line 36
            if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
                // line 37
                echo "\t<div class=\"panel-footer sorting collapse\">
\t <div class=\"row\">
\t ";
                // line 39
                // line 40
                echo "\t   <div class=\"col-md-6\">
\t\t<span class=\"stats-heading\">";
                // line 41
                echo (isset($context["TOTAL_USERS_ONLINE"]) ? $context["TOTAL_USERS_ONLINE"] : null);
                echo "&nbsp;&#40;";
                echo $this->env->getExtension('phpbb')->lang("ONLINE_EXPLAIN");
                echo "&#41;&nbsp;";
                if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                    echo "\"><i class=\"fa fa-question-circle\"></i></a>";
                }
                echo "</span>
\t\t";
                // line 42
                if ((isset($context["LEGEND"]) ? $context["LEGEND"] : null)) {
                    // line 43
                    echo "\t\t  <div class=\"space10\"></div>
\t\t <small>";
                    // line 44
                    echo $this->env->getExtension('phpbb')->lang("LEGEND");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "&nbsp;";
                    echo (isset($context["LEGEND"]) ? $context["LEGEND"] : null);
                    echo "</small>
\t\t";
                }
                // line 46
                echo "\t   </div>
\t   ";
                // line 47
                echo " 
\t   <div class=\"col-md-12\">\t
\t\t";
                // line 49
                // line 50
                echo "\t\t <div class=\"space10\"></div>
\t\t<p>";
                // line 51
                echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
                echo "</p>
\t\t";
                // line 52
                // line 53
                echo "\t 
\t\t";
                // line 54
                if ((isset($context["S_DISPLAY_BIRTHDAY_LIST"]) ? $context["S_DISPLAY_BIRTHDAY_LIST"] : null)) {
                    // line 55
                    echo "\t\t ";
                    // line 56
                    echo "\t\t  ";
                    if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()))) {
                        echo "<p>";
                        echo $this->env->getExtension('phpbb')->lang("CONGRATULATIONS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "&nbsp;<strong>";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                            echo $this->getAttribute($context["birthdays"], "USERNAME", array());
                            if (($this->getAttribute($context["birthdays"], "AGE", array()) !== "")) {
                                echo "&#40;";
                                echo $this->getAttribute($context["birthdays"], "AGE", array());
                                echo "&#41;";
                            }
                            if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", array())) {
                                echo "&#44;&nbsp;";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</strong></p>";
                    }
                    // line 57
                    echo "\t\t ";
                    // line 58
                    echo "\t\t";
                }
                // line 59
                echo "\t   </div>
\t  ";
                // line 60
                echo " 
\t </div>
\t</div>
 ";
            }
            // line 64
            echo "</div>
";
        }
        // line 66
        // line 67
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 67)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 68
        echo "
";
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 68,  224 => 67,  223 => 66,  219 => 64,  213 => 60,  210 => 59,  207 => 58,  205 => 57,  180 => 56,  178 => 55,  176 => 54,  173 => 53,  172 => 52,  168 => 51,  165 => 50,  164 => 49,  160 => 47,  157 => 46,  149 => 44,  146 => 43,  144 => 42,  130 => 41,  127 => 40,  126 => 39,  122 => 37,  120 => 36,  111 => 32,  103 => 29,  95 => 26,  83 => 19,  75 => 16,  65 => 13,  58 => 9,  55 => 8,  53 => 7,  52 => 6,  49 => 5,  44 => 4,  32 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* <!-- EVENT index_body_forumlist_body_before -->*/
/* <!-- INCLUDE forumlist_body.html -->*/
/* <!-- EVENT index_body_forumlist_body_after -->*/
/* */
/* <!-- EVENT index_body_stat_blocks_before -->*/
/* <!-- IF S_USER_LOGGED_IN -->*/
/* <div class="panel panel-forum panel-stats">*/
/*  <div class="panel-heading">{L_SITESPLAT_STATISTICS}</div>*/
/*  <div class="panel-body">*/
/*     <div class="row">*/
/* 	  <div class="col-md-2 col-sm-2 col-xs-4 text-center">*/
/* 	    <span class="output text-acqua">{SITESPLAT_CURRENTLY_ONLINE}&nbsp;<a data-toggle="collapse" data-target=".sorting" href="javascript:void(0);" title="{L_EXPAND_VIEW}"><i class="fa fa-angle-double-down"></i></a></span><strong>{L_SITESPLAT_USERS_ONLINE}</strong>*/
/* 	   </div>*/
/* 	   <div class="col-md-2 col-sm-2 col-xs-4 text-center">*/
/* 	    <span class="output text-seppia">{SITESPLAT_RECORD_ONLINE}</span><strong>{L_SITESPLAT_MOST_USERS_ONLINE}</strong>*/
/* 	   </div>*/
/* 	   <div class="col-md-2 col-sm-2 col-xs-4 text-center">*/
/* 	    <span class="output text-melograno">{SITESPLAT_TOTAL_POSTS}</span><strong>{L_SITESPLAT_TOTAL_POSTS}</strong>*/
/* 	   </div>*/
/* 	   */
/* 	 <div class="visible-xs space10"></div>*/
/* 	  <div class="visible-xs space10"></div>*/
/* 	  */
/* 	   <div class="col-md-2 col-sm-2 col-xs-4 text-center">*/
/* 	    <span class="output text-drank">{SITESPLAT_TOTAL_TOPICS}</span><strong>{L_SITESPLAT_TOTAL_TOPICS}</strong>*/
/* 	   </div>*/
/* 	   <div class="col-md-2 col-sm-2 col-xs-4 text-center">*/
/* 	    <span class="output text-orange">{SITESPLAT_TOTAL_USERS}</span><strong>{L_SITESPLAT_TOTAL_USERS}</strong>*/
/* 	   </div>*/
/* 	   <div class="col-md-2 col-sm-2 col-xs-4 text-center">*/
/* 	    <span class="output text-red">{SITESPLAT_NEWEST_USER}</span><strong>{L_SITESPLAT_NEWEST_MEMBER}</strong>*/
/* 	   </div> */
/* 	</div>*/
/*  </div>*/
/*  <!-- IF S_DISPLAY_ONLINE_LIST -->*/
/* 	<div class="panel-footer sorting collapse">*/
/* 	 <div class="row">*/
/* 	 <!-- EVENT index_body_block_stats_legend_before -->*/
/* 	   <div class="col-md-6">*/
/* 		<span class="stats-heading">{TOTAL_USERS_ONLINE}&nbsp;&#40;{L_ONLINE_EXPLAIN}&#41;&nbsp;<!-- IF U_VIEWONLINE --><a href="{U_VIEWONLINE}" title="{L_WHO_IS_ONLINE}"><i class="fa fa-question-circle"></i></a><!-- ENDIF --></span>*/
/* 		<!-- IF LEGEND -->*/
/* 		  <div class="space10"></div>*/
/* 		 <small>{L_LEGEND}{L_COLON}&nbsp;{LEGEND}</small>*/
/* 		<!-- ENDIF -->*/
/* 	   </div>*/
/* 	   <!-- EVENT index_body_block_stats_prepend --> */
/* 	   <div class="col-md-12">	*/
/* 		<!-- EVENT index_body_block_online_prepend -->*/
/* 		 <div class="space10"></div>*/
/* 		<p>{LOGGED_IN_USER_LIST}</p>*/
/* 		<!-- EVENT index_body_block_online_append -->*/
/* 	 */
/* 		<!-- IF S_DISPLAY_BIRTHDAY_LIST -->*/
/* 		 <!-- EVENT index_body_block_birthday_prepend -->*/
/* 		  <!-- IF .birthdays --><p>{L_CONGRATULATIONS}{L_COLON}&nbsp;<strong><!-- BEGIN birthdays -->{birthdays.USERNAME}<!-- IF birthdays.AGE !== '' -->&#40;{birthdays.AGE}&#41;<!-- ENDIF --><!-- IF not birthdays.S_LAST_ROW -->&#44;&nbsp;<!-- ENDIF --><!-- END birthdays --></strong></p><!-- ENDIF -->*/
/* 		 <!-- EVENT index_body_block_birthday_append -->*/
/* 		<!-- ENDIF -->*/
/* 	   </div>*/
/* 	  <!-- EVENT index_body_block_stats_append --> */
/* 	 </div>*/
/* 	</div>*/
/*  <!-- ENDIF -->*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- EVENT index_body_stat_blocks_after -->*/
/* <!-- INCLUDE overall_footer.html -->*/
/* */
/* */
