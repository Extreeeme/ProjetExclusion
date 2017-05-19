<?php

/* login_body.html */
class __TwigTemplate_65a2f859ed6fd3abdce23854c430c328debc7c4213ae331c7c65debbe505b3b0 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "login_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "    ";
        if ((isset($context["LOGIN_EXPLAIN"]) ? $context["LOGIN_EXPLAIN"] : null)) {
            // line 3
            echo "        <div class=\"alert alert-info fade in\">
           <i class=\"fa fa-warning\"></i><strong>&nbsp;";
            // line 4
            echo (isset($context["LOGIN_EXPLAIN"]) ? $context["LOGIN_EXPLAIN"] : null);
            echo "</strong>
        </div>
    ";
        }
        // line 7
        echo " 
    ";
        // line 8
        if ((isset($context["LOGIN_ERROR"]) ? $context["LOGIN_ERROR"] : null)) {
            // line 9
            echo "         <div class=\"alert alert-danger fade in\">
           <i class=\"fa fa-warning\"></i><strong>&nbsp;";
            // line 10
            echo (isset($context["LOGIN_ERROR"]) ? $context["LOGIN_ERROR"] : null);
            echo "</strong>
         </div>
    ";
        }
        // line 13
        echo "\t
    <div class=\"panel-login panel-w-form login-full\">
            <div class=\"row\">
                ";
        // line 16
        if (((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null) &&  !(isset($context["S_ADMIN_AUTH"]) ? $context["S_ADMIN_AUTH"] : null))) {
            // line 17
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("CREATE_ACCOUNT");
            echo "</span>
\t\t\t\t</div>
                    <p>";
            // line 21
            echo $this->env->getExtension('phpbb')->lang("LOGIN_INFO");
            echo "</p>
\t\t\t\t    <p><a href=\"";
            // line 22
            echo (isset($context["U_TERMS_USE"]) ? $context["U_TERMS_USE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("TERMS_USE");
            echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
            echo (isset($context["U_PRIVACY"]) ? $context["U_PRIVACY"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("PRIVACY");
            echo "</a></p>
\t\t\t\t\t<p><a href=\"";
            // line 23
            echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
            echo "\" class=\"btn btn-default btn-reg-login\">";
            echo $this->env->getExtension('phpbb')->lang("REGISTER");
            echo "</a></p>
                </div>
\t\t\t\t";
        } elseif (        // line 25
(isset($context["S_ADMIN_AUTH"]) ? $context["S_ADMIN_AUTH"] : null)) {
            // line 26
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("ADMIN_TIPS");
            echo "</span>
\t\t\t\t</div>
\t\t\t\t    <p>";
            // line 30
            echo $this->env->getExtension('phpbb')->lang("ADMIN_TIP_INTRO");
            echo "</p>
                    <ul>
\t\t\t\t\t<li>";
            // line 32
            echo $this->env->getExtension('phpbb')->lang("ADMIN_TIP_ONE");
            echo "</li>
\t\t\t\t    <li>";
            // line 33
            echo $this->env->getExtension('phpbb')->lang("ADMIN_TIP_TWO");
            echo "</li>
\t\t\t\t\t<li>";
            // line 34
            echo $this->env->getExtension('phpbb')->lang("ADMIN_TIP_THREE");
            echo "</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<p>";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("SITESPLAT_URL");
            echo "</p>
                </div>
\t\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
            // line 41
            echo $this->env->getExtension('phpbb')->lang("CREATE_ACCOUNT_DISABLED");
            echo "</span>
\t\t\t\t</div>
                    <p>";
            // line 43
            echo $this->env->getExtension('phpbb')->lang("REGISTRATION_DISABLED");
            echo "</p>
\t\t\t\t    <p><a href=\"";
            // line 44
            echo (isset($context["U_TERMS_USE"]) ? $context["U_TERMS_USE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("TERMS_USE");
            echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
            echo (isset($context["U_PRIVACY"]) ? $context["U_PRIVACY"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("PRIVACY");
            echo "</a></p>
\t\t\t\t\t<p><a href=\"mailto:";
            // line 45
            echo (isset($context["BOARD_EMAIL"]) ? $context["BOARD_EMAIL"] : null);
            echo "?subject=Registrations%20Closed&body=Dear%20Admin,%20%0A%0AI%20Just%20wanted%20to%20let%20you%20know%20that%20the%20board%20registrations%20are%20closed.%20%0A%0AThis%20might%20be%20an%20error%20and%20I%20would%20like%20to%20register.%20%0A%0APlease%20let%20me%20know%20if%20this%20is%20possible.%0A%0AThanks!\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_WEBMASTER");
            echo "</a></p>
                </div>
\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
        // line 50
        echo $this->env->getExtension('phpbb')->lang("SIGN_IN_ACCOUNT");
        echo "</span>
\t\t\t\t</div>
\t\t\t\t <form action=\"";
        // line 52
        echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
        echo "\" method=\"post\" id=\"login\">
\t\t\t\t  <fieldset>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"sr-only\" for=\"";
        // line 55
        echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t<div class=\"form-icon\">
\t\t\t\t\t <input type=\"text\" class=\"form-control input-lg\" tabindex=\"1\" name=\"";
        // line 57
        echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        echo "\" id=\"";
        echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        echo "\" value=\"";
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" placeholder=\"";
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "\">
\t\t\t\t\t <span class=\"fa fa-user login-form-icon\"></span>
\t\t\t\t\t</div> 
\t\t\t\t    </div> 
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t <label class=\"sr-only\" for=\"";
        // line 62
        echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t  <div class=\"form-icon\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control input-lg\" tabindex=\"2\" id=\"";
        // line 64
        echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        echo "\" name=\"";
        echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        echo "\" placeholder=\"";
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo "\" autocomplete=\"off\">
\t\t\t\t\t\t<span class=\"fa fa-lock login-form-icon\"></span>
\t\t\t\t\t  </div> 
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t ";
        // line 69
        if ((isset($context["S_DISPLAY_FULL_LOGIN"]) ? $context["S_DISPLAY_FULL_LOGIN"] : null)) {
            // line 70
            echo "\t\t\t\t\t";
            if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                // line 71
                echo "\t\t\t\t\t<div class=\"checkbox pull-right\">                                              
\t\t\t\t\t <label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"4\">";
                // line 72
                echo $this->env->getExtension('phpbb')->lang("LOGIN_REMEMBER");
                echo "</label>
\t\t\t\t\t <label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"5\">";
                // line 73
                echo $this->env->getExtension('phpbb')->lang("LOGIN_HIDE_ME");
                echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t ";
        }
        // line 77
        echo "\t\t\t\t\t<button type=\"submit\" class=\"btn btn btn-primary\" tabindex=\"6\" name=\"login\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("LOGIN");
        echo "\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb')->lang("LOADING_LOG_IN");
        echo " <i class='fa-spin fa fa-spinner fa-lg'></i>\">";
        echo $this->env->getExtension('phpbb')->lang("LOGIN_ME_IN");
        echo "</button>
\t\t\t\t
\t\t\t\t  ";
        // line 79
        if (((isset($context["S_DISPLAY_FULL_LOGIN"]) ? $context["S_DISPLAY_FULL_LOGIN"] : null) && ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null) || (isset($context["U_RESEND_ACTIVATION"]) ? $context["U_RESEND_ACTIVATION"] : null)))) {
            // line 80
            echo "\t\t\t\t    <div class=\"space10\"></div>
\t\t\t\t\t<p>
\t\t\t\t\t\t";
            // line 82
            if ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORGOT_PASS");
                echo "</a>";
            }
            // line 83
            echo "\t\t\t\t\t\t";
            if ((isset($context["U_RESEND_ACTIVATION"]) ? $context["U_RESEND_ACTIVATION"] : null)) {
                echo "&nbsp;&#124;&nbsp;<a href=\"";
                echo (isset($context["U_RESEND_ACTIVATION"]) ? $context["U_RESEND_ACTIVATION"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESEND_ACTIVATION");
                echo "</a>";
            }
            // line 84
            echo "\t                </p>\t\t\t  
\t\t\t\t  ";
        }
        // line 86
        echo "\t\t\t\t  
\t\t\t\t    ";
        // line 87
        if (((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null) && (isset($context["S_CONFIRM_CODE"]) ? $context["S_CONFIRM_CODE"] : null))) {
            // line 88
            echo "\t\t\t\t\t\t<div class=\"space10\"></div>
\t\t\t\t\t\t";
            // line 89
            $value = 3;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 90
            echo "\t\t\t\t\t\t";
            $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "login_body.html", 90)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 91
            echo "\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t
\t\t\t\t  ";
        // line 93
        echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
        echo "
\t\t\t\t\t";
        // line 94
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t\t\t\t  </fieldset>
\t\t\t\t  </form>
\t\t\t\t";
        // line 97
        // line 98
        echo "\t\t\t\t";
        if (( !(isset($context["S_ADMIN_AUTH"]) ? $context["S_ADMIN_AUTH"] : null) && (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null))) {
            // line 99
            echo "\t\t\t\t\t";
            $location = (("" . (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null)) . ""), "login_body.html", 99)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 100
            echo "\t\t\t\t";
        }
        // line 101
        echo "\t\t\t    </div>  
            </div>
    </div>
";
        // line 104
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "login_body.html", 104)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "login_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 104,  335 => 101,  332 => 100,  319 => 99,  316 => 98,  315 => 97,  309 => 94,  305 => 93,  302 => 92,  299 => 91,  286 => 90,  283 => 89,  280 => 88,  278 => 87,  275 => 86,  271 => 84,  262 => 83,  254 => 82,  250 => 80,  248 => 79,  238 => 77,  235 => 76,  229 => 73,  225 => 72,  222 => 71,  219 => 70,  217 => 69,  205 => 64,  197 => 62,  183 => 57,  175 => 55,  169 => 52,  164 => 50,  160 => 48,  152 => 45,  142 => 44,  138 => 43,  133 => 41,  129 => 39,  123 => 36,  118 => 34,  114 => 33,  110 => 32,  105 => 30,  100 => 28,  96 => 26,  94 => 25,  87 => 23,  77 => 22,  73 => 21,  68 => 19,  64 => 17,  62 => 16,  57 => 13,  51 => 10,  48 => 9,  46 => 8,  43 => 7,  37 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/*     <!-- IF LOGIN_EXPLAIN -->*/
/*         <div class="alert alert-info fade in">*/
/*            <i class="fa fa-warning"></i><strong>&nbsp;{LOGIN_EXPLAIN}</strong>*/
/*         </div>*/
/*     <!-- ENDIF -->*/
/*  */
/*     <!-- IF LOGIN_ERROR -->*/
/*          <div class="alert alert-danger fade in">*/
/*            <i class="fa fa-warning"></i><strong>&nbsp;{LOGIN_ERROR}</strong>*/
/*          </div>*/
/*     <!-- ENDIF -->*/
/* 	*/
/*     <div class="panel-login panel-w-form login-full">*/
/*             <div class="row">*/
/*                 <!-- IF S_REGISTER_ENABLED and not S_ADMIN_AUTH -->*/
/* 				<div class="col-sm-6">*/
/* 				<div class="signin-text">*/
/* 					<span>{L_CREATE_ACCOUNT}</span>*/
/* 				</div>*/
/*                     <p>{L_LOGIN_INFO}</p>*/
/* 				    <p><a href="{U_TERMS_USE}">{L_TERMS_USE}</a>&nbsp;&#124;&nbsp;<a href="{U_PRIVACY}">{L_PRIVACY}</a></p>*/
/* 					<p><a href="{U_REGISTER}" class="btn btn-default btn-reg-login">{L_REGISTER}</a></p>*/
/*                 </div>*/
/* 				<!-- ELSEIF S_ADMIN_AUTH -->*/
/* 				<div class="col-sm-6">*/
/* 				<div class="signin-text">*/
/* 					<span>{L_ADMIN_TIPS}</span>*/
/* 				</div>*/
/* 				    <p>{L_ADMIN_TIP_INTRO}</p>*/
/*                     <ul>*/
/* 					<li>{L_ADMIN_TIP_ONE}</li>*/
/* 				    <li>{L_ADMIN_TIP_TWO}</li>*/
/* 					<li>{L_ADMIN_TIP_THREE}</li>*/
/* 					</ul>*/
/* 					<p>{L_SITESPLAT_URL}</p>*/
/*                 </div>*/
/* 				<!-- ELSE -->*/
/* 				<div class="col-sm-6">*/
/* 				<div class="signin-text">*/
/* 					<span>{L_CREATE_ACCOUNT_DISABLED}</span>*/
/* 				</div>*/
/*                     <p>{L_REGISTRATION_DISABLED}</p>*/
/* 				    <p><a href="{U_TERMS_USE}">{L_TERMS_USE}</a>&nbsp;&#124;&nbsp;<a href="{U_PRIVACY}">{L_PRIVACY}</a></p>*/
/* 					<p><a href="mailto:{BOARD_EMAIL}?subject=Registrations%20Closed&body=Dear%20Admin,%20%0A%0AI%20Just%20wanted%20to%20let%20you%20know%20that%20the%20board%20registrations%20are%20closed.%20%0A%0AThis%20might%20be%20an%20error%20and%20I%20would%20like%20to%20register.%20%0A%0APlease%20let%20me%20know%20if%20this%20is%20possible.%0A%0AThanks!" class="btn btn-default">{L_CONTACT_WEBMASTER}</a></p>*/
/*                 </div>*/
/* 				<!-- ENDIF -->*/
/* 				<div class="col-sm-6">*/
/* 				<div class="signin-text">*/
/* 					<span>{L_SIGN_IN_ACCOUNT}</span>*/
/* 				</div>*/
/* 				 <form action="{S_LOGIN_ACTION}" method="post" id="login">*/
/* 				  <fieldset>*/
/* 					<div class="form-group">*/
/* 					<label class="sr-only" for="{USERNAME_CREDENTIAL}">{L_USERNAME}{L_COLON}</label>*/
/* 					<div class="form-icon">*/
/* 					 <input type="text" class="form-control input-lg" tabindex="1" name="{USERNAME_CREDENTIAL}" id="{USERNAME_CREDENTIAL}" value="{USERNAME}" placeholder="{L_USERNAME}">*/
/* 					 <span class="fa fa-user login-form-icon"></span>*/
/* 					</div> */
/* 				    </div> */
/* 					<div class="form-group">*/
/* 					 <label class="sr-only" for="{PASSWORD_CREDENTIAL}">{L_PASSWORD}{L_COLON}</label>*/
/* 					  <div class="form-icon">*/
/* 						<input type="password" class="form-control input-lg" tabindex="2" id="{PASSWORD_CREDENTIAL}" name="{PASSWORD_CREDENTIAL}" placeholder="{L_PASSWORD}" autocomplete="off">*/
/* 						<span class="fa fa-lock login-form-icon"></span>*/
/* 					  </div> */
/* 					</div>*/
/* 				*/
/* 				 <!-- IF S_DISPLAY_FULL_LOGIN -->*/
/* 					<!-- IF S_AUTOLOGIN_ENABLED -->*/
/* 					<div class="checkbox pull-right">                                              */
/* 					 <label for="autologin"><input type="checkbox" name="autologin" id="autologin" tabindex="4">{L_LOGIN_REMEMBER}</label>*/
/* 					 <label for="viewonline"><input type="checkbox" name="viewonline" id="viewonline" tabindex="5">{L_LOGIN_HIDE_ME}</label>*/
/* 					</div>*/
/* 					<!-- ENDIF -->*/
/* 				 <!-- ENDIF -->*/
/* 					<button type="submit" class="btn btn btn-primary" tabindex="6" name="login" value="{L_LOGIN}" data-loading-text="{L_LOADING_LOG_IN} <i class='fa-spin fa fa-spinner fa-lg'></i>">{L_LOGIN_ME_IN}</button>*/
/* 				*/
/* 				  <!-- IF S_DISPLAY_FULL_LOGIN and (U_SEND_PASSWORD or U_RESEND_ACTIVATION) -->*/
/* 				    <div class="space10"></div>*/
/* 					<p>*/
/* 						<!-- IF U_SEND_PASSWORD --><a href="{U_SEND_PASSWORD}">{L_FORGOT_PASS}</a><!-- ENDIF -->*/
/* 						<!-- IF U_RESEND_ACTIVATION -->&nbsp;&#124;&nbsp;<a href="{U_RESEND_ACTIVATION}">{L_RESEND_ACTIVATION}</a><!-- ENDIF -->*/
/* 	                </p>			  */
/* 				  <!-- ENDIF -->*/
/* 				  */
/* 				    <!-- IF CAPTCHA_TEMPLATE and S_CONFIRM_CODE -->*/
/* 						<div class="space10"></div>*/
/* 						<!-- DEFINE $CAPTCHA_TAB_INDEX = 3 -->*/
/* 						<!-- INCLUDE {CAPTCHA_TEMPLATE} -->*/
/* 					<!-- ENDIF -->*/
/* 					*/
/* 				  {S_LOGIN_REDIRECT}*/
/* 					{S_HIDDEN_FIELDS}*/
/* 				  </fieldset>*/
/* 				  </form>*/
/* 				<!-- EVENT login_body_form_after -->*/
/* 				<!-- IF not S_ADMIN_AUTH and PROVIDER_TEMPLATE_FILE -->*/
/* 					<!-- INCLUDE {PROVIDER_TEMPLATE_FILE} -->*/
/* 				<!-- ENDIF -->*/
/* 			    </div>  */
/*             </div>*/
/*     </div>*/
/* <!-- INCLUDE overall_footer.html -->*/
