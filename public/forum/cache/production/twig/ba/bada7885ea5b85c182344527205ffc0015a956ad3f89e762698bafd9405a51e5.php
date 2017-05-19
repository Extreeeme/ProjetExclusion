<?php

/* display_options.html */
class __TwigTemplate_9c026db7caa69ef3044fcf11286cc44c71d3cb5a486f667977c86346754d6e5a extends Twig_Template
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
        echo "<div class=\"hidden-xs\">
\t<fieldset class=\"controls-row\">
        <div class=\"sorting collapse\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                         <label for=\"bday_day\">";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("DISPLAY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
                            <div class=\"control-row\">
                              ";
        // line 10
        echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
        echo "
                            </div>
\t\t\t\t\t\t</div>
\t 
\t                    <div class=\"col-md-4 col-sm-4\"> 
                          <label for=\"bday_day\">";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo "</label>
                            <div class=\"control-row\">
                              ";
        // line 17
        echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
        echo "
                            </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                           <label for=\"bday_day\">";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo "</label>
                            <div class=\"control-row\">
\t\t\t\t\t\t\t<div class=\"input-group\">
                             ";
        // line 25
        echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
        echo "
\t\t\t\t\t\t\t <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" name=\"sort\" type=\"submit\">";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "</button>
\t\t\t\t\t\t\t </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    </div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
                </div>
\t\t\t</div>
\t\t</div> 
\t</fieldset> 
</div>";
    }

    public function getTemplateName()
    {
        return "display_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 27,  61 => 25,  55 => 22,  47 => 17,  42 => 15,  34 => 10,  28 => 8,  19 => 1,);
    }
}
/* <div class="hidden-xs">*/
/* 	<fieldset class="controls-row">*/
/*         <div class="sorting collapse">*/
/* 			<div class="panel panel-default">*/
/* 				<div class="panel-body">*/
/* 					<div class="row">*/
/* 						<div class="col-md-4 col-sm-4"> */
/*                          <label for="bday_day">{L_DISPLAY}{L_COLON}</label>*/
/*                             <div class="control-row">*/
/*                               {S_SELECT_SORT_DAYS}*/
/*                             </div>*/
/* 						</div>*/
/* 	 */
/* 	                    <div class="col-md-4 col-sm-4"> */
/*                           <label for="bday_day">{L_SORT_BY}</label>*/
/*                             <div class="control-row">*/
/*                               {S_SELECT_SORT_KEY}*/
/*                             </div>*/
/* 						</div>*/
/* */
/* 						<div class="col-md-4 col-sm-4"> */
/*                            <label for="bday_day">{L_SORT_BY}</label>*/
/*                             <div class="control-row">*/
/* 							<div class="input-group">*/
/*                              {S_SELECT_SORT_DIR}*/
/* 							 <span class="input-group-btn">*/
/*                               <button class="btn btn-default" name="sort" type="submit">{L_GO}</button>*/
/* 							 </span>*/
/* 							</div>*/
/* 						    </div>   */
/* 						</div>*/
/* 					*/
/* 					</div>*/
/*                 </div>*/
/* 			</div>*/
/* 		</div> */
/* 	</fieldset> */
/* </div>*/
