<?php

/* ucp_register.html */
class __TwigTemplate_53294496a43b9b85d7f645319124b5c264594f9b1cdbfadcbf092c0d391eebd2 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "ucp_register.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<script>
/* Change language */
\tfunction change_language(lang_iso)
\t{
\t\tdocument.cookie = '";
        // line 6
        echo (isset($context["COOKIE_NAME"]) ? $context["COOKIE_NAME"] : null);
        echo "_lang=' + lang_iso + '; path=";
        echo (isset($context["COOKIE_PATH"]) ? $context["COOKIE_PATH"] : null);
        echo "';
\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\tdocument.forms['register'].submit.click();
\t}
</script>
";
        // line 11
        // line 12
        echo "<div class=\"side-segment\"><h3>";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "&nbsp;&#45;&nbsp;";
        echo $this->env->getExtension('phpbb')->lang("REGISTRATION");
        echo "</h3></div>
<form id=\"register\" method=\"post\" action=\"";
        // line 13
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">
<fieldset>
<div class=\"well panel-w-form\">
\t";
        // line 16
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            // line 17
            echo "\t <div class=\"alert alert-info\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</div>
\t";
        }
        // line 19
        echo "\t
\t";
        // line 20
        if ((isset($context["L_REG_COND"]) ? $context["L_REG_COND"] : null)) {
            // line 21
            echo "\t <p>";
            echo $this->env->getExtension('phpbb')->lang("REG_COND");
            echo "</p>
\t";
        }
        // line 23
        echo "    
<div class=\"row\">
";
        // line 25
        // line 26
        echo "   <div class=\"col-md-6\">
\t<div class=\"form-group\">
\t\t<label for=\"username\" class=\"control-label\">";
        // line 28
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("USERNAME_EXPLAIN");
        echo "</span>
\t\t<div class=\"form-icon\">
\t\t\t<input class=\"form-control input-lg\" type=\"text\" name=\"username\" id=\"username\" size=\"25\" value=\"";
        // line 30
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "\" placeholder=\"";
        echo $this->env->getExtension('phpbb')->lang("UCP_REG_USR_PLACEHOLDER");
        echo "\"/>
\t\t    <span class=\"fa fa-user login-form-icon\"></span>
\t\t </div> 
\t\t<div class=\"control-group\"></div>
\t</div>
   </div>
 
   <div class=\"col-md-6\">
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"email\">";
        // line 39
        echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("UCP_REGISTER_EMAIL_EXPLAIN");
        echo "</span>
          <div class=\"form-icon\">
\t\t    <input class=\"form-control input-lg\" type=\"text\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"100\" value=\"";
        // line 41
        echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
        echo "\" placeholder=\"";
        echo $this->env->getExtension('phpbb')->lang("UCP_REG_EMAIL_PLACEHOLDER");
        echo "\" autocomplete=\"off\"/>
\t\t    <span class=\"icon-moon-email login-form-icon\"></span>
\t\t  </div>
\t\t  <div class=\"control-group\"></div>
\t</div> 
   </div> 
</div>

<div class=\"row\">   
   <div class=\"col-md-6\">
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"new_password\">";
        // line 52
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("PASSWORD_EXPLAIN");
        echo "</span>
          <div class=\"form-icon\">
\t\t    <input class=\"form-control input-lg\" type=\"password\" name=\"new_password\" id=\"new_password\" size=\"25\" value=\"";
        // line 54
        echo (isset($context["PASSWORD"]) ? $context["PASSWORD"] : null);
        echo "\" placeholder=\"";
        echo $this->env->getExtension('phpbb')->lang("UCP_REG_PSWD_PLACEHOLDER");
        echo "\" autocomplete=\"off\"/>
\t\t  <span class=\"fa fa-key login-form-icon\"></span>
\t\t  </div>
\t\t  <div class=\"control-group\"></div>
\t</div> 
   </div>
   
   <div class=\"col-md-6\">
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"password_confirm\">";
        // line 63
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("PASSWORD_EXPLAIN_CONFIRM");
        echo "</span>
          <div class=\"form-icon\">
\t\t    <input class=\"form-control input-lg\" type=\"password\" name=\"password_confirm\" id=\"password_confirm\" size=\"25\" value=\"";
        // line 65
        echo (isset($context["PASSWORD_CONFIRM"]) ? $context["PASSWORD_CONFIRM"] : null);
        echo "\" placeholder=\"";
        echo $this->env->getExtension('phpbb')->lang("UCP_REG_PSWD_PLACEHOLDER");
        echo "\" autocomplete=\"off\"/>
\t\t   <span class=\"fa fa-key login-form-icon\"></span>
\t\t  </div>
\t\t  <div class=\"control-group\"></div>
\t</div> 
   </div>
   ";
        // line 71
        // line 72
        echo "</div>

<div class=\"row\">
  <div class=\"col-md-6\">
\t<div class=\"form-group\"> 
\t<div class=\"control-group\">
\t   <label class=\"control-label\" for=\"lang\">";
        // line 78
        echo $this->env->getExtension('phpbb')->lang("LANGUAGE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
       <div>
\t    <select class=\"selectpicker\" data-container=\"body\" name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" tabindex=\"6\" title=\"";
        // line 80
        echo $this->env->getExtension('phpbb')->lang("LANGUAGE");
        echo "\">";
        echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
        echo "</select>
\t</div> 
\t</div>
\t</div>
  </div>

  <div class=\"col-md-6\">
    <!-- /* from timezone_option.html */ -->\t
\t<div class=\"control-group\"> 
\t\t<label class=\"control-label\" for=\"timezone\">";
        // line 89
        echo $this->env->getExtension('phpbb')->lang("BOARD_TIMEZONE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t<div class=\"controls controls-row\"> 
\t\t<select class=\"tz_select selectpicker\" data-container=\"body\" data-width=\"auto\" name=\"tz\" id=\"timezone\">
\t\t\t<option value=\"\">";
        // line 92
        echo $this->env->getExtension('phpbb')->lang("SELECT_TIMEZONE");
        echo "</option>
\t\t";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "timezone_select", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone_select"]) {
            // line 94
            echo "\t\t\t<optgroup label=\"";
            echo $this->getAttribute($context["timezone_select"], "LABEL", array());
            echo "\" data-tz-value=\"";
            echo $this->getAttribute($context["timezone_select"], "VALUE", array());
            echo "\">
\t\t\t\t";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["timezone_select"], "timezone_options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["timezone_options"]) {
                // line 96
                echo "\t\t\t\t<option title=\"";
                echo $this->getAttribute($context["timezone_options"], "TITLE", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["timezone_options"], "VALUE", array());
                echo "\"";
                if ($this->getAttribute($context["timezone_options"], "SELECTED", array())) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->getAttribute($context["timezone_options"], "LABEL", array());
                echo "</option>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t\t\t</optgroup>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_select'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "\t\t</select>
\t\t</div>
\t</div>
\t<!-- /* from timezone_option.html */ -->
   </div>
</div>
\t
\t
";
        // line 108
        // line 109
        echo "\t";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields", array()))) {
            // line 110
            echo "\t\t<strong>";
            echo $this->env->getExtension('phpbb')->lang("ITEMS_REQUIRED");
            echo "</strong>
\t";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
                // line 112
                echo "\t<div class=\"control-group\"> 
\t  ";
                // line 113
                if ($this->getAttribute($context["profile_fields"], "ERROR", array())) {
                    echo "<span class=\"error\">";
                    echo $this->getAttribute($context["profile_fields"], "ERROR", array());
                    echo "</span>";
                }
                // line 114
                echo "\t\t<label class=\"control-label\"";
                if ($this->getAttribute($context["profile_fields"], "FIELD_ID", array())) {
                    echo " for=\"";
                    echo $this->getAttribute($context["profile_fields"], "FIELD_ID", array());
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["profile_fields"], "LANG_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                if ($this->getAttribute($context["profile_fields"], "S_REQUIRED", array())) {
                    echo "&nbsp;&#42;";
                }
                echo "</label>";
                if ($this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array())) {
                    echo "<span class=\"help-block\">";
                    echo $this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array());
                    echo "</span>";
                }
                // line 115
                echo "\t\t  ";
                echo $this->getAttribute($context["profile_fields"], "FIELD", array());
                echo "
\t</div> \t
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "\t";
        }
        // line 119
        echo "\t
";
        // line 120
        echo "  \t
</div>
</fieldset>

";
        // line 124
        if ((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) {
            // line 125
            echo "\t";
            $value = 8;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 126
            echo "\t";
            $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "ucp_register.html", 126)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 128
        echo "
";
        // line 129
        if ((isset($context["S_COPPA"]) ? $context["S_COPPA"] : null)) {
            // line 130
            echo "\t<div class=\"alert alert-info fade in\">
\t\t<button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t<strong>";
            // line 132
            echo $this->env->getExtension('phpbb')->lang("COPPA_COMPLIANCE");
            echo "</strong> <br>";
            echo $this->env->getExtension('phpbb')->lang("COPPA_EXPLAIN");
            echo "
\t</div>
";
        }
        // line 135
        echo "
\t<fieldset class=\"form-actions\">
\t\t";
        // line 137
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t\t<button type=\"reset\" value=\"";
        // line 138
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "</button>
\t\t<button type=\"submit\" class=\"btn btn-default\" tabindex=\"9\" name=\"submit\" id=\"submit\" value=\"";
        // line 139
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" autocomplete=\"off\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb')->lang("REG_CREATING");
        echo " <i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\">";
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "</button>
\t\t";
        // line 140
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>
</form>

";
        // line 144
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_register.html", 144)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 144,  391 => 140,  383 => 139,  377 => 138,  373 => 137,  369 => 135,  361 => 132,  357 => 130,  355 => 129,  352 => 128,  338 => 126,  334 => 125,  332 => 124,  326 => 120,  323 => 119,  320 => 118,  310 => 115,  291 => 114,  285 => 113,  282 => 112,  278 => 111,  273 => 110,  270 => 109,  269 => 108,  259 => 100,  252 => 98,  235 => 96,  231 => 95,  224 => 94,  220 => 93,  216 => 92,  209 => 89,  195 => 80,  189 => 78,  181 => 72,  180 => 71,  169 => 65,  161 => 63,  147 => 54,  139 => 52,  123 => 41,  115 => 39,  99 => 30,  91 => 28,  87 => 26,  86 => 25,  82 => 23,  76 => 21,  74 => 20,  71 => 19,  65 => 17,  63 => 16,  55 => 13,  48 => 12,  47 => 11,  37 => 6,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* <script>*/
/* /* Change language *//* */
/* 	function change_language(lang_iso)*/
/* 	{*/
/* 		document.cookie = '{COOKIE_NAME}_lang=' + lang_iso + '; path={COOKIE_PATH}';*/
/* 		document.forms['register'].change_lang.value = lang_iso;*/
/* 		document.forms['register'].submit.click();*/
/* 	}*/
/* </script>*/
/* <!-- EVENT ucp_register_options_before -->*/
/* <div class="side-segment"><h3>{SITENAME}&nbsp;&#45;&nbsp;{L_REGISTRATION}</h3></div>*/
/* <form id="register" method="post" action="{S_UCP_ACTION}"{S_FORM_ENCTYPE}>*/
/* <fieldset>*/
/* <div class="well panel-w-form">*/
/* 	<!-- IF ERROR -->*/
/* 	 <div class="alert alert-info">{ERROR}</div>*/
/* 	<!-- ENDIF -->*/
/* 	*/
/* 	<!-- IF L_REG_COND -->*/
/* 	 <p>{L_REG_COND}</p>*/
/* 	<!-- ENDIF -->*/
/*     */
/* <div class="row">*/
/* <!-- EVENT ucp_register_credentials_before -->*/
/*    <div class="col-md-6">*/
/* 	<div class="form-group">*/
/* 		<label for="username" class="control-label">{L_USERNAME}{L_COLON}</label><span class="help-block">{L_USERNAME_EXPLAIN}</span>*/
/* 		<div class="form-icon">*/
/* 			<input class="form-control input-lg" type="text" name="username" id="username" size="25" value="{USERNAME}" title="{L_USERNAME}" placeholder="{L_UCP_REG_USR_PLACEHOLDER}"/>*/
/* 		    <span class="fa fa-user login-form-icon"></span>*/
/* 		 </div> */
/* 		<div class="control-group"></div>*/
/* 	</div>*/
/*    </div>*/
/*  */
/*    <div class="col-md-6">*/
/* 	<div class="form-group">*/
/* 		<label class="control-label" for="email">{L_EMAIL_ADDRESS}{L_COLON}</label><span class="help-block">{L_UCP_REGISTER_EMAIL_EXPLAIN}</span>*/
/*           <div class="form-icon">*/
/* 		    <input class="form-control input-lg" type="text" name="email" id="email" size="25" maxlength="100" value="{EMAIL}" placeholder="{L_UCP_REG_EMAIL_PLACEHOLDER}" autocomplete="off"/>*/
/* 		    <span class="icon-moon-email login-form-icon"></span>*/
/* 		  </div>*/
/* 		  <div class="control-group"></div>*/
/* 	</div> */
/*    </div> */
/* </div>*/
/* */
/* <div class="row">   */
/*    <div class="col-md-6">*/
/* 	<div class="form-group">*/
/* 		<label class="control-label" for="new_password">{L_PASSWORD}{L_COLON}</label><span class="help-block">{L_PASSWORD_EXPLAIN}</span>*/
/*           <div class="form-icon">*/
/* 		    <input class="form-control input-lg" type="password" name="new_password" id="new_password" size="25" value="{PASSWORD}" placeholder="{L_UCP_REG_PSWD_PLACEHOLDER}" autocomplete="off"/>*/
/* 		  <span class="fa fa-key login-form-icon"></span>*/
/* 		  </div>*/
/* 		  <div class="control-group"></div>*/
/* 	</div> */
/*    </div>*/
/*    */
/*    <div class="col-md-6">*/
/* 	<div class="form-group">*/
/* 		<label class="control-label" for="password_confirm">{L_CONFIRM_PASSWORD}{L_COLON}</label><span class="help-block">{L_PASSWORD_EXPLAIN_CONFIRM}</span>*/
/*           <div class="form-icon">*/
/* 		    <input class="form-control input-lg" type="password" name="password_confirm" id="password_confirm" size="25" value="{PASSWORD_CONFIRM}" placeholder="{L_UCP_REG_PSWD_PLACEHOLDER}" autocomplete="off"/>*/
/* 		   <span class="fa fa-key login-form-icon"></span>*/
/* 		  </div>*/
/* 		  <div class="control-group"></div>*/
/* 	</div> */
/*    </div>*/
/*    <!-- EVENT ucp_register_credentials_after -->*/
/* </div>*/
/* */
/* <div class="row">*/
/*   <div class="col-md-6">*/
/* 	<div class="form-group"> */
/* 	<div class="control-group">*/
/* 	   <label class="control-label" for="lang">{L_LANGUAGE}{L_COLON}</label>*/
/*        <div>*/
/* 	    <select class="selectpicker" data-container="body" name="lang" id="lang" onchange="change_language(this.value); return false;" tabindex="6" title="{L_LANGUAGE}">{S_LANG_OPTIONS}</select>*/
/* 	</div> */
/* 	</div>*/
/* 	</div>*/
/*   </div>*/
/* */
/*   <div class="col-md-6">*/
/*     <!-- /* from timezone_option.html *//*  -->	*/
/* 	<div class="control-group"> */
/* 		<label class="control-label" for="timezone">{L_BOARD_TIMEZONE}{L_COLON}</label>*/
/* 		<div class="controls controls-row"> */
/* 		<select class="tz_select selectpicker" data-container="body" data-width="auto" name="tz" id="timezone">*/
/* 			<option value="">{L_SELECT_TIMEZONE}</option>*/
/* 		<!-- BEGIN timezone_select -->*/
/* 			<optgroup label="{timezone_select.LABEL}" data-tz-value="{timezone_select.VALUE}">*/
/* 				<!-- BEGIN timezone_options -->*/
/* 				<option title="{timezone_select.timezone_options.TITLE}" value="{timezone_select.timezone_options.VALUE}"<!-- IF timezone_select.timezone_options.SELECTED --> selected="selected"<!-- ENDIF -->>{timezone_select.timezone_options.LABEL}</option>*/
/* 				<!-- END timezone_options -->*/
/* 			</optgroup>*/
/* 		<!-- END timezone_select -->*/
/* 		</select>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- /* from timezone_option.html *//*  -->*/
/*    </div>*/
/* </div>*/
/* 	*/
/* 	*/
/* <!-- EVENT ucp_register_profile_fields_before -->*/
/* 	<!-- IF .profile_fields -->*/
/* 		<strong>{L_ITEMS_REQUIRED}</strong>*/
/* 	<!-- BEGIN profile_fields -->*/
/* 	<div class="control-group"> */
/* 	  <!-- IF profile_fields.ERROR --><span class="error">{profile_fields.ERROR}</span><!-- ENDIF -->*/
/* 		<label class="control-label"<!-- IF profile_fields.FIELD_ID --> for="{profile_fields.FIELD_ID}"<!-- ENDIF -->>{profile_fields.LANG_NAME}{L_COLON}<!-- IF profile_fields.S_REQUIRED -->&nbsp;&#42;<!-- ENDIF --></label><!-- IF profile_fields.LANG_EXPLAIN --><span class="help-block">{profile_fields.LANG_EXPLAIN}</span><!-- ENDIF -->*/
/* 		  {profile_fields.FIELD}*/
/* 	</div> 	*/
/* 	<!-- END profile_fields -->*/
/* 	<!-- ENDIF -->*/
/* 	*/
/* <!-- EVENT ucp_register_profile_fields_after -->  	*/
/* </div>*/
/* </fieldset>*/
/* */
/* <!-- IF CAPTCHA_TEMPLATE -->*/
/* 	<!-- DEFINE $CAPTCHA_TAB_INDEX = 8 -->*/
/* 	<!-- INCLUDE {CAPTCHA_TEMPLATE} -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_COPPA -->*/
/* 	<div class="alert alert-info fade in">*/
/* 		<button class="close" data-dismiss="alert"><span class="awe-remove-circle"></span></button>*/
/* 		<strong>{L_COPPA_COMPLIANCE}</strong> <br>{L_COPPA_EXPLAIN}*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* 	<fieldset class="form-actions">*/
/* 		{S_HIDDEN_FIELDS}*/
/* 		<button type="reset" value="{L_RESET}" name="reset" class="btn btn-default">{L_RESET}</button>*/
/* 		<button type="submit" class="btn btn-default" tabindex="9" name="submit" id="submit" value="{L_SUBMIT}" autocomplete="off" data-loading-text="{L_REG_CREATING} <i class='fa fa-spin fa-spinner fa-lg icon-white'></i>">{L_SUBMIT}</button>*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
