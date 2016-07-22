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
        $__internal_1652f32fcb2ab93a0bb7c4e1235ed9f5c0355289e6832f436167fc24b796b45c = $this->env->getExtension("native_profiler");
        $__internal_1652f32fcb2ab93a0bb7c4e1235ed9f5c0355289e6832f436167fc24b796b45c->enter($__internal_1652f32fcb2ab93a0bb7c4e1235ed9f5c0355289e6832f436167fc24b796b45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1652f32fcb2ab93a0bb7c4e1235ed9f5c0355289e6832f436167fc24b796b45c->leave($__internal_1652f32fcb2ab93a0bb7c4e1235ed9f5c0355289e6832f436167fc24b796b45c_prof);

    }

    // line 2
    public function block_wiseTitle($context, array $blocks = array())
    {
        $__internal_2b6536418f8d5dac77b824ee32b24d02a30e190fe6421dbc7ca6929f2f9480dc = $this->env->getExtension("native_profiler");
        $__internal_2b6536418f8d5dac77b824ee32b24d02a30e190fe6421dbc7ca6929f2f9480dc->enter($__internal_2b6536418f8d5dac77b824ee32b24d02a30e190fe6421dbc7ca6929f2f9480dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseTitle"));

        echo "Wise | Login";
        
        $__internal_2b6536418f8d5dac77b824ee32b24d02a30e190fe6421dbc7ca6929f2f9480dc->leave($__internal_2b6536418f8d5dac77b824ee32b24d02a30e190fe6421dbc7ca6929f2f9480dc_prof);

    }

    // line 3
    public function block_wiseStyle($context, array $blocks = array())
    {
        $__internal_17981e385ea7dfa12b6f57d01df689d4087aa03e3fd2d9157d31261c4b2582a2 = $this->env->getExtension("native_profiler");
        $__internal_17981e385ea7dfa12b6f57d01df689d4087aa03e3fd2d9157d31261c4b2582a2->enter($__internal_17981e385ea7dfa12b6f57d01df689d4087aa03e3fd2d9157d31261c4b2582a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseStyle"));

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
        
        $__internal_17981e385ea7dfa12b6f57d01df689d4087aa03e3fd2d9157d31261c4b2582a2->leave($__internal_17981e385ea7dfa12b6f57d01df689d4087aa03e3fd2d9157d31261c4b2582a2_prof);

    }

    // line 11
    public function block_wiseBodyClass($context, array $blocks = array())
    {
        $__internal_d397d8a8920de7718218fca3cbfcd2b798af18fe731f477f275dc9f9e73f6110 = $this->env->getExtension("native_profiler");
        $__internal_d397d8a8920de7718218fca3cbfcd2b798af18fe731f477f275dc9f9e73f6110->enter($__internal_d397d8a8920de7718218fca3cbfcd2b798af18fe731f477f275dc9f9e73f6110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseBodyClass"));

        echo "login";
        
        $__internal_d397d8a8920de7718218fca3cbfcd2b798af18fe731f477f275dc9f9e73f6110->leave($__internal_d397d8a8920de7718218fca3cbfcd2b798af18fe731f477f275dc9f9e73f6110_prof);

    }

    // line 13
    public function block_wiseBody($context, array $blocks = array())
    {
        $__internal_2d76bcbd7979cb5e15e6b944aead36fee5388b870ce043fc0148dba29bca3c11 = $this->env->getExtension("native_profiler");
        $__internal_2d76bcbd7979cb5e15e6b944aead36fee5388b870ce043fc0148dba29bca3c11->enter($__internal_2d76bcbd7979cb5e15e6b944aead36fee5388b870ce043fc0148dba29bca3c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseBody"));

        // line 14
        echo "    ";
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_2d76bcbd7979cb5e15e6b944aead36fee5388b870ce043fc0148dba29bca3c11->leave($__internal_2d76bcbd7979cb5e15e6b944aead36fee5388b870ce043fc0148dba29bca3c11_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0db359dd9f6e5edcac670d41a48c5fbd44a3e976a90e17e939da6fb655433c1 = $this->env->getExtension("native_profiler");
        $__internal_d0db359dd9f6e5edcac670d41a48c5fbd44a3e976a90e17e939da6fb655433c1->enter($__internal_d0db359dd9f6e5edcac670d41a48c5fbd44a3e976a90e17e939da6fb655433c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_d0db359dd9f6e5edcac670d41a48c5fbd44a3e976a90e17e939da6fb655433c1->leave($__internal_d0db359dd9f6e5edcac670d41a48c5fbd44a3e976a90e17e939da6fb655433c1_prof);

    }

    // line 60
    public function block_wiseScript($context, array $blocks = array())
    {
        $__internal_90df27e4b6c72b4d1db6cfde3975f38861322aa0b43ed7b69f88e86bf206b7e0 = $this->env->getExtension("native_profiler");
        $__internal_90df27e4b6c72b4d1db6cfde3975f38861322aa0b43ed7b69f88e86bf206b7e0->enter($__internal_90df27e4b6c72b4d1db6cfde3975f38861322aa0b43ed7b69f88e86bf206b7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseScript"));

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
        
        $__internal_90df27e4b6c72b4d1db6cfde3975f38861322aa0b43ed7b69f88e86bf206b7e0->leave($__internal_90df27e4b6c72b4d1db6cfde3975f38861322aa0b43ed7b69f88e86bf206b7e0_prof);

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
