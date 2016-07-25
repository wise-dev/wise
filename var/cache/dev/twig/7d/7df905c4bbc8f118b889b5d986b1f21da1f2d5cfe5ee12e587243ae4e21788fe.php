<?php

/* FOSUserBundle:security:login.html.twig */
class __TwigTemplate_ce190700d73c96ba769cb5b34412d0a8c41bd4ee26b40ea097e47cb849a6aa72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:security:login.html.twig", 1);
        $this->blocks = array(
            'wiseTitle' => array($this, 'block_wiseTitle'),
            'wiseStyle' => array($this, 'block_wiseStyle'),
            'wiseBodyClass' => array($this, 'block_wiseBodyClass'),
            'wiseBody' => array($this, 'block_wiseBody'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'wiseScript' => array($this, 'block_wiseScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d994ad93bae9a93fcf690883654c9476dd61f46762ccd1d39b46dd6c5811156e = $this->env->getExtension("native_profiler");
        $__internal_d994ad93bae9a93fcf690883654c9476dd61f46762ccd1d39b46dd6c5811156e->enter($__internal_d994ad93bae9a93fcf690883654c9476dd61f46762ccd1d39b46dd6c5811156e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d994ad93bae9a93fcf690883654c9476dd61f46762ccd1d39b46dd6c5811156e->leave($__internal_d994ad93bae9a93fcf690883654c9476dd61f46762ccd1d39b46dd6c5811156e_prof);

    }

    // line 2
    public function block_wiseTitle($context, array $blocks = array())
    {
        $__internal_a8c4dc6fb6a0de86549610ac5cae75c16a6b39a6492fa7704f68fa43ef932597 = $this->env->getExtension("native_profiler");
        $__internal_a8c4dc6fb6a0de86549610ac5cae75c16a6b39a6492fa7704f68fa43ef932597->enter($__internal_a8c4dc6fb6a0de86549610ac5cae75c16a6b39a6492fa7704f68fa43ef932597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseTitle"));

        echo "Wise | Login";
        
        $__internal_a8c4dc6fb6a0de86549610ac5cae75c16a6b39a6492fa7704f68fa43ef932597->leave($__internal_a8c4dc6fb6a0de86549610ac5cae75c16a6b39a6492fa7704f68fa43ef932597_prof);

    }

    // line 3
    public function block_wiseStyle($context, array $blocks = array())
    {
        $__internal_4f838fd6c0e7238e5348ec04d3437715495a7b06cf615440cc0ef1a087873de0 = $this->env->getExtension("native_profiler");
        $__internal_4f838fd6c0e7238e5348ec04d3437715495a7b06cf615440cc0ef1a087873de0->enter($__internal_4f838fd6c0e7238e5348ec04d3437715495a7b06cf615440cc0ef1a087873de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseStyle"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/css/login-4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_4f838fd6c0e7238e5348ec04d3437715495a7b06cf615440cc0ef1a087873de0->leave($__internal_4f838fd6c0e7238e5348ec04d3437715495a7b06cf615440cc0ef1a087873de0_prof);

    }

    // line 11
    public function block_wiseBodyClass($context, array $blocks = array())
    {
        $__internal_7fe3d3a0689e6c7c894ecd153a195894d9dbed4fe054fe982cc75182491bd2a3 = $this->env->getExtension("native_profiler");
        $__internal_7fe3d3a0689e6c7c894ecd153a195894d9dbed4fe054fe982cc75182491bd2a3->enter($__internal_7fe3d3a0689e6c7c894ecd153a195894d9dbed4fe054fe982cc75182491bd2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseBodyClass"));

        echo "login";
        
        $__internal_7fe3d3a0689e6c7c894ecd153a195894d9dbed4fe054fe982cc75182491bd2a3->leave($__internal_7fe3d3a0689e6c7c894ecd153a195894d9dbed4fe054fe982cc75182491bd2a3_prof);

    }

    // line 13
    public function block_wiseBody($context, array $blocks = array())
    {
        $__internal_aa05f5cc0696b7495e634ab5ac0179f90a335494009d406e1da5a9a150b11b0e = $this->env->getExtension("native_profiler");
        $__internal_aa05f5cc0696b7495e634ab5ac0179f90a335494009d406e1da5a9a150b11b0e->enter($__internal_aa05f5cc0696b7495e634ab5ac0179f90a335494009d406e1da5a9a150b11b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseBody"));

        // line 14
        echo "    ";
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_aa05f5cc0696b7495e634ab5ac0179f90a335494009d406e1da5a9a150b11b0e->leave($__internal_aa05f5cc0696b7495e634ab5ac0179f90a335494009d406e1da5a9a150b11b0e_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8017bd001d850945d86720a9c9a85c6623cd2416321d2af6a96eb49f4df19fe = $this->env->getExtension("native_profiler");
        $__internal_d8017bd001d850945d86720a9c9a85c6623cd2416321d2af6a96eb49f4df19fe->enter($__internal_d8017bd001d850945d86720a9c9a85c6623cd2416321d2af6a96eb49f4df19fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 18
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 20
        echo "

    
    
     <div class=\"logo\">
            <a href=\"index.html\">
                <img src=\"../assets/pages/img/logo-big.png\" alt=\"\" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class=\"content\">
            <!-- BEGIN LOGIN FORM -->
            <form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" class=\"login-form\" method=\"post\">
                <h3 class=\"form-title\">Login to your account</h3>
                <div class=\"alert alert-danger display-hide\"></div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username"), "html", null, true);
        echo "</label>
                    <div class=\"input-icon\">
                        <i class=\"fa fa-user\"></i>
                        <input class=\"form-control placeholder-no-fix\" id=\"username\" type=\"text\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" autocomplete=\"off\" placeholder=\"Username\" name=\"_username\" /> </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password"), "html", null, true);
        echo "</label>
                    <div class=\"input-icon\">
                        <i class=\"fa fa-lock\"></i>
                        <input class=\"form-control placeholder-no-fix\" id=\"password\" type=\"password\" autocomplete=\"off\" placeholder=\"Password\" name=\"_password\" /> </div>
                </div>
                <div class=\"form-actions\">
                    <label class=\"checkbox\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me"), "html", null, true);
        echo "</label>
                         <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit"), "html", null, true);
        echo "\" class=\"btn green pull-right\"> Login </button>
                </div>
            </form>
            <!-- END LOGIN FORM -->
        </div>
    
    ";
        
        $__internal_d8017bd001d850945d86720a9c9a85c6623cd2416321d2af6a96eb49f4df19fe->leave($__internal_d8017bd001d850945d86720a9c9a85c6623cd2416321d2af6a96eb49f4df19fe_prof);

    }

    // line 60
    public function block_wiseScript($context, array $blocks = array())
    {
        $__internal_e08b552f6394c616fbe48309ff65bc115769d6c4d64df6bb3a284d45a85a2e8d = $this->env->getExtension("native_profiler");
        $__internal_e08b552f6394c616fbe48309ff65bc115769d6c4d64df6bb3a284d45a85a2e8d->enter($__internal_e08b552f6394c616fbe48309ff65bc115769d6c4d64df6bb3a284d45a85a2e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseScript"));

        // line 61
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-validation/js/additional-methods.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/backstretch/jquery.backstretch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/login-4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_e08b552f6394c616fbe48309ff65bc115769d6c4d64df6bb3a284d45a85a2e8d->leave($__internal_e08b552f6394c616fbe48309ff65bc115769d6c4d64df6bb3a284d45a85a2e8d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 66,  215 => 65,  211 => 64,  207 => 63,  203 => 62,  198 => 61,  192 => 60,  178 => 51,  174 => 50,  164 => 43,  158 => 40,  152 => 37,  147 => 35,  141 => 32,  127 => 20,  121 => 18,  118 => 17,  106 => 16,  103 => 15,  101 => 14,  95 => 13,  83 => 11,  74 => 8,  70 => 7,  66 => 6,  62 => 5,  57 => 4,  51 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block wiseTitle %}Wise | Login{% endblock %}*/
/* {% block wiseStyle %}*/
/*     <link href="{{ asset('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />*/
/*     <link href="{{ asset('assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('assets/pages/css/login-4.min.css') }}" rel="stylesheet" type="text/css" />*/
/* {% endblock %}*/
/* */
/* {% block wiseBodyClass %}login{% endblock %}*/
/* */
/* {% block wiseBody %}*/
/*     {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*     {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/* */
/*     */
/*     */
/*      <div class="logo">*/
/*             <a href="index.html">*/
/*                 <img src="../assets/pages/img/logo-big.png" alt="" /> </a>*/
/*         </div>*/
/*         <!-- END LOGO -->*/
/*         <!-- BEGIN LOGIN -->*/
/*         <div class="content">*/
/*             <!-- BEGIN LOGIN FORM -->*/
/*             <form action="{{ path("fos_user_security_check") }}" class="login-form" method="post">*/
/*                 <h3 class="form-title">Login to your account</h3>*/
/*                 <div class="alert alert-danger display-hide"></div>*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                 <div class="form-group">*/
/*                     <label class="control-label visible-ie8 visible-ie9">{{ 'security.login.username'|trans }}</label>*/
/*                     <div class="input-icon">*/
/*                         <i class="fa fa-user"></i>*/
/*                         <input class="form-control placeholder-no-fix" id="username" type="text" value="{{ last_username }}" autocomplete="off" placeholder="Username" name="_username" /> </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class="control-label visible-ie8 visible-ie9">{{ 'security.login.password'|trans }}</label>*/
/*                     <div class="input-icon">*/
/*                         <i class="fa fa-lock"></i>*/
/*                         <input class="form-control placeholder-no-fix" id="password" type="password" autocomplete="off" placeholder="Password" name="_password" /> </div>*/
/*                 </div>*/
/*                 <div class="form-actions">*/
/*                     <label class="checkbox">*/
/*                         <input type="checkbox" id="remember_me" name="_remember_me" value="on" />{{ 'security.login.remember_me'|trans }}</label>*/
/*                          <button type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" class="btn green pull-right"> Login </button>*/
/*                 </div>*/
/*             </form>*/
/*             <!-- END LOGIN FORM -->*/
/*         </div>*/
/*     */
/*     {% endblock fos_user_content %}*/
/* {% endblock %}*/
/* */
/* {% block wiseScript %}*/
/*     <script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/backstretch/jquery.backstretch.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/pages/scripts/login-4.min.js') }}" type="text/javascript"></script>*/
/* {% endblock %}*/
