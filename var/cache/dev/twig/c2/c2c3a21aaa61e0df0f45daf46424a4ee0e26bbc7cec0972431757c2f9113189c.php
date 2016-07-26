<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_25651a418c200d1d4f092cb198dfc8132a097d38d1e6bc29f7bffddf86b1c359 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_f91f573a6182225930d2feef7783404a63484616f5ab26f4140add3a97b448cf = $this->env->getExtension("native_profiler");
        $__internal_f91f573a6182225930d2feef7783404a63484616f5ab26f4140add3a97b448cf->enter($__internal_f91f573a6182225930d2feef7783404a63484616f5ab26f4140add3a97b448cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f91f573a6182225930d2feef7783404a63484616f5ab26f4140add3a97b448cf->leave($__internal_f91f573a6182225930d2feef7783404a63484616f5ab26f4140add3a97b448cf_prof);

    }

    // line 2
    public function block_wiseTitle($context, array $blocks = array())
    {
        $__internal_d97aaa2f8f6a363682e80c4f724bb835b18ff7040f93e6c9e69df7069faa5630 = $this->env->getExtension("native_profiler");
        $__internal_d97aaa2f8f6a363682e80c4f724bb835b18ff7040f93e6c9e69df7069faa5630->enter($__internal_d97aaa2f8f6a363682e80c4f724bb835b18ff7040f93e6c9e69df7069faa5630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseTitle"));

        echo "Wise | Login";
        
        $__internal_d97aaa2f8f6a363682e80c4f724bb835b18ff7040f93e6c9e69df7069faa5630->leave($__internal_d97aaa2f8f6a363682e80c4f724bb835b18ff7040f93e6c9e69df7069faa5630_prof);

    }

    // line 3
    public function block_wiseStyle($context, array $blocks = array())
    {
        $__internal_5954c098a2ab51b7906afefcb3bb85f090828cb267907d81ddde38b50c1d856d = $this->env->getExtension("native_profiler");
        $__internal_5954c098a2ab51b7906afefcb3bb85f090828cb267907d81ddde38b50c1d856d->enter($__internal_5954c098a2ab51b7906afefcb3bb85f090828cb267907d81ddde38b50c1d856d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseStyle"));

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
        
        $__internal_5954c098a2ab51b7906afefcb3bb85f090828cb267907d81ddde38b50c1d856d->leave($__internal_5954c098a2ab51b7906afefcb3bb85f090828cb267907d81ddde38b50c1d856d_prof);

    }

    // line 11
    public function block_wiseBodyClass($context, array $blocks = array())
    {
        $__internal_89b4cfc6d4747b7373a9dc6024cb6ffc88976ef8a7eecb190bef403dee85f4dc = $this->env->getExtension("native_profiler");
        $__internal_89b4cfc6d4747b7373a9dc6024cb6ffc88976ef8a7eecb190bef403dee85f4dc->enter($__internal_89b4cfc6d4747b7373a9dc6024cb6ffc88976ef8a7eecb190bef403dee85f4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseBodyClass"));

        echo "login";
        
        $__internal_89b4cfc6d4747b7373a9dc6024cb6ffc88976ef8a7eecb190bef403dee85f4dc->leave($__internal_89b4cfc6d4747b7373a9dc6024cb6ffc88976ef8a7eecb190bef403dee85f4dc_prof);

    }

    // line 13
    public function block_wiseBody($context, array $blocks = array())
    {
        $__internal_28f97a8b21a0d237264f636e3666c752434d3d59dc18a6bcad9c0d9f365cba44 = $this->env->getExtension("native_profiler");
        $__internal_28f97a8b21a0d237264f636e3666c752434d3d59dc18a6bcad9c0d9f365cba44->enter($__internal_28f97a8b21a0d237264f636e3666c752434d3d59dc18a6bcad9c0d9f365cba44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseBody"));

        // line 14
        echo "    ";
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_28f97a8b21a0d237264f636e3666c752434d3d59dc18a6bcad9c0d9f365cba44->leave($__internal_28f97a8b21a0d237264f636e3666c752434d3d59dc18a6bcad9c0d9f365cba44_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_69387cd9757262c77d825971f90a403d73bdeeeb465b4133a41b14c724d8aa95 = $this->env->getExtension("native_profiler");
        $__internal_69387cd9757262c77d825971f90a403d73bdeeeb465b4133a41b14c724d8aa95->enter($__internal_69387cd9757262c77d825971f90a403d73bdeeeb465b4133a41b14c724d8aa95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_69387cd9757262c77d825971f90a403d73bdeeeb465b4133a41b14c724d8aa95->leave($__internal_69387cd9757262c77d825971f90a403d73bdeeeb465b4133a41b14c724d8aa95_prof);

    }

    // line 60
    public function block_wiseScript($context, array $blocks = array())
    {
        $__internal_a3568a612c04af626f7c946b846a9216fee3a32383decedf42f45e7fa3f8bc55 = $this->env->getExtension("native_profiler");
        $__internal_a3568a612c04af626f7c946b846a9216fee3a32383decedf42f45e7fa3f8bc55->enter($__internal_a3568a612c04af626f7c946b846a9216fee3a32383decedf42f45e7fa3f8bc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseScript"));

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
        
        $__internal_a3568a612c04af626f7c946b846a9216fee3a32383decedf42f45e7fa3f8bc55->leave($__internal_a3568a612c04af626f7c946b846a9216fee3a32383decedf42f45e7fa3f8bc55_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
