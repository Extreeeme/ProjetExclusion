<?php

/* addons/sitesplat_login_body.html */
class __TwigTemplate_b785ee9fa79472c20b1ffea86425c8830500cf12e1e74e26549b8fc6dc5ec050 extends Twig_Template
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
        echo "<div class=\"panel-login panel-w-form\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 4
        if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
            // line 5
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
            // line 7
            echo $this->env->getExtension('phpbb')->lang("CREATE_ACCOUNT");
            echo "</span>
\t\t\t\t</div>
                    <p>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("LOGIN_INFO");
            echo "</p>
\t\t\t\t    <p><a href=\"";
            // line 10
            echo (isset($context["U_TERMS_USE"]) ? $context["U_TERMS_USE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("TERMS_USE");
            echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
            echo (isset($context["U_PRIVACY"]) ? $context["U_PRIVACY"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("PRIVACY");
            echo "</a></p>
\t\t\t\t\t<p><a href=\"";
            // line 11
            echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
            echo "\" class=\"btn btn-default btn-reg-login\">";
            echo $this->env->getExtension('phpbb')->lang("REGISTER");
            echo "</a></p>
                </div>
\t\t\t\t";
        } else {
            // line 14
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("CREATE_ACCOUNT_DISABLED");
            echo "</span>
\t\t\t\t</div>
                    <p>";
            // line 18
            echo $this->env->getExtension('phpbb')->lang("REGISTRATION_DISABLED");
            echo "</p>
\t\t\t\t    <p><a href=\"";
            // line 19
            echo (isset($context["U_TERMS_USE"]) ? $context["U_TERMS_USE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("TERMS_USE");
            echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
            echo (isset($context["U_PRIVACY"]) ? $context["U_PRIVACY"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("PRIVACY");
            echo "</a></p>
\t\t\t\t\t<p><a href=\"mailto:";
            // line 20
            echo (isset($context["BOARD_EMAIL"]) ? $context["BOARD_EMAIL"] : null);
            echo "?subject=Registrations%20Closed&body=Dear%20Admin,%20%0A%0AI%20Just%20wanted%20to%20let%20you%20know%20that%20the%20board%20registrations%20are%20closed.%20%0A%0AThis%20might%20be%20an%20error%20and%20I%20would%20like%20to%20register.%20%0A%0APlease%20let%20me%20know%20if%20this%20is%20possible.%0A%0AThanks!\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_WEBMASTER");
            echo "</a></p>
                </div>
\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("SIGN_IN_ACCOUNT");
        echo "</span>
\t\t\t\t</div>
\t\t\t\t";
        // line 27
        // line 28
        echo "\t\t\t\t <form method=\"post\" action=\"";
        echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
        echo "\">
\t\t\t\t  <fieldset>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t <label class=\"sr-only\" for=\"username\">";
        // line 31
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t<div class=\"form-icon\">
\t\t\t\t\t <input type=\"text\" class=\"form-control input-lg\" name=\"username\" id=\"username\" placeholder=\"";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "\">
\t\t\t\t\t <span class=\"fa fa-user login-form-icon\"></span>
\t\t\t\t\t</div> 
\t\t\t\t    </div> 
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t  <label class=\"sr-only\" for=\"password\">";
        // line 38
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t  <div class=\"form-icon\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control input-lg\" name=\"password\" id=\"password\" placeholder=\"";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo "\" autocomplete=\"off\">
\t\t\t\t\t\t<span class=\"fa fa-lock login-form-icon\"></span>
\t\t\t\t\t  </div> 
\t\t\t\t\t</div>
\t\t\t\t    ";
        // line 44
        if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
            // line 45
            echo "\t\t\t\t\t<div class=\"checkbox pull-right\">
\t\t\t\t\t  <label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\">";
            // line 46
            echo $this->env->getExtension('phpbb')->lang("LOGIN_REMEMBER");
            echo "</label>
\t\t\t\t\t</div>
\t\t\t\t    ";
        }
        // line 49
        echo "\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" name=\"login\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("LOGIN");
        echo "\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb')->lang("LOADING_LOG_IN");
        echo "<i class='fa-spin fa fa-spinner fa-lg'></i>\">";
        echo $this->env->getExtension('phpbb')->lang("LOGIN_ME_IN");
        echo "</button>
\t\t\t\t\t";
        // line 50
        echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
        echo "
\t\t\t\t  </fieldset>
\t\t\t\t  </form>
\t\t\t\t  ";
        // line 53
        // line 54
        echo "\t\t\t\t";
        // line 55
        echo "\t\t\t    </div>  
            </div>
        </div>
</div>";
    }

    public function getTemplateName()
    {
        return "addons/sitesplat_login_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 55,  159 => 54,  158 => 53,  152 => 50,  143 => 49,  137 => 46,  134 => 45,  132 => 44,  125 => 40,  119 => 38,  111 => 33,  105 => 31,  98 => 28,  97 => 27,  92 => 25,  88 => 23,  80 => 20,  70 => 19,  66 => 18,  61 => 16,  57 => 14,  49 => 11,  39 => 10,  35 => 9,  30 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="panel-login panel-w-form">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <!-- IF S_REGISTER_ENABLED -->*/
/* 				<div class="col-sm-6">*/
/* 				<div class="signin-text">*/
/* 					<span>{L_CREATE_ACCOUNT}</span>*/
/* 				</div>*/
/*                     <p>{L_LOGIN_INFO}</p>*/
/* 				    <p><a href="{U_TERMS_USE}">{L_TERMS_USE}</a>&nbsp;&#124;&nbsp;<a href="{U_PRIVACY}">{L_PRIVACY}</a></p>*/
/* 					<p><a href="{U_REGISTER}" class="btn btn-default btn-reg-login">{L_REGISTER}</a></p>*/
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
/* 				<!-- EVENT login_body_before -->*/
/* 				 <form method="post" action="{S_LOGIN_ACTION}">*/
/* 				  <fieldset>*/
/* 					<div class="form-group">*/
/* 					 <label class="sr-only" for="username">{L_USERNAME}{L_COLON}</label>*/
/* 					<div class="form-icon">*/
/* 					 <input type="text" class="form-control input-lg" name="username" id="username" placeholder="{L_USERNAME}">*/
/* 					 <span class="fa fa-user login-form-icon"></span>*/
/* 					</div> */
/* 				    </div> */
/* 					<div class="form-group">*/
/* 					  <label class="sr-only" for="password">{L_PASSWORD}{L_COLON}</label>*/
/* 					  <div class="form-icon">*/
/* 						<input type="password" class="form-control input-lg" name="password" id="password" placeholder="{L_PASSWORD}" autocomplete="off">*/
/* 						<span class="fa fa-lock login-form-icon"></span>*/
/* 					  </div> */
/* 					</div>*/
/* 				    <!-- IF S_AUTOLOGIN_ENABLED -->*/
/* 					<div class="checkbox pull-right">*/
/* 					  <label for="autologin"><input type="checkbox" name="autologin" id="autologin">{L_LOGIN_REMEMBER}</label>*/
/* 					</div>*/
/* 				    <!-- ENDIF -->*/
/* 					<button type="submit" class="btn btn-primary" name="login" value="{L_LOGIN}" data-loading-text="{L_LOADING_LOG_IN}<i class='fa-spin fa fa-spinner fa-lg'></i>">{L_LOGIN_ME_IN}</button>*/
/* 					{S_LOGIN_REDIRECT}*/
/* 				  </fieldset>*/
/* 				  </form>*/
/* 				  <!-- EVENT login_body_form_after -->*/
/* 				<!-- EVENT login_body_after -->*/
/* 			    </div>  */
/*             </div>*/
/*         </div>*/
/* </div>*/
