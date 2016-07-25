<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_49ea11d3d79f96155618aa780f50ef6700fc84405bfd3b20a34f3f3d28baa755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_1c73f01efa5f3a6b811692dbec7d475a433f83cab3849c2da4a82a24a50d7073 = $this->env->getExtension("native_profiler");
        $__internal_1c73f01efa5f3a6b811692dbec7d475a433f83cab3849c2da4a82a24a50d7073->enter($__internal_1c73f01efa5f3a6b811692dbec7d475a433f83cab3849c2da4a82a24a50d7073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c73f01efa5f3a6b811692dbec7d475a433f83cab3849c2da4a82a24a50d7073->leave($__internal_1c73f01efa5f3a6b811692dbec7d475a433f83cab3849c2da4a82a24a50d7073_prof);

    }

    // line 2
    public function block_wiseTitle($context, array $blocks = array())
    {
        $__internal_affd6217c1d16e1924f6611091cfdc31bbb30f2c21c4bf27b2a72e7829852d7a = $this->env->getExtension("native_profiler");
        $__internal_affd6217c1d16e1924f6611091cfdc31bbb30f2c21c4bf27b2a72e7829852d7a->enter($__internal_affd6217c1d16e1924f6611091cfdc31bbb30f2c21c4bf27b2a72e7829852d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseTitle"));

        echo "Wise | Login";
        
        $__internal_affd6217c1d16e1924f6611091cfdc31bbb30f2c21c4bf27b2a72e7829852d7a->leave($__internal_affd6217c1d16e1924f6611091cfdc31bbb30f2c21c4bf27b2a72e7829852d7a_prof);

    }

    // line 3
    public function block_wiseStyle($context, array $blocks = array())
    {
        $__internal_5357719c55b2d06510a3175a018871db9775c2d2027c25f6ee12b22ec327a716 = $this->env->getExtension("native_profiler");
        $__internal_5357719c55b2d06510a3175a018871db9775c2d2027c25f6ee12b22ec327a716->enter($__internal_5357719c55b2d06510a3175a018871db9775c2d2027c25f6ee12b22ec327a716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseStyle"));

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
        
        $__internal_5357719c55b2d06510a3175a018871db9775c2d2027c25f6ee12b22ec327a716->leave($__internal_5357719c55b2d06510a3175a018871db9775c2d2027c25f6ee12b22ec327a716_prof);

    }

    // line 11
    public function block_wiseBodyClass($context, array $blocks = array())
    {
        $__internal_69dd28277b89e2f9be6c5a00c783b9748a77b8a1f492135492f1b5056872619f = $this->env->getExtension("native_profiler");
        $__internal_69dd28277b89e2f9be6c5a00c783b9748a77b8a1f492135492f1b5056872619f->enter($__internal_69dd28277b89e2f9be6c5a00c783b9748a77b8a1f492135492f1b5056872619f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseBodyClass"));

        echo "login";
        
        $__internal_69dd28277b89e2f9be6c5a00c783b9748a77b8a1f492135492f1b5056872619f->leave($__internal_69dd28277b89e2f9be6c5a00c783b9748a77b8a1f492135492f1b5056872619f_prof);

    }

    // line 13
    public function block_wiseBody($context, array $blocks = array())
    {
        $__internal_ee876b50295ce87493cef79d9b0e221f2b96ba85118ada183a912907ce2c45b6 = $this->env->getExtension("native_profiler");
        $__internal_ee876b50295ce87493cef79d9b0e221f2b96ba85118ada183a912907ce2c45b6->enter($__internal_ee876b50295ce87493cef79d9b0e221f2b96ba85118ada183a912907ce2c45b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseBody"));

        // line 14
        echo "    ";
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_ee876b50295ce87493cef79d9b0e221f2b96ba85118ada183a912907ce2c45b6->leave($__internal_ee876b50295ce87493cef79d9b0e221f2b96ba85118ada183a912907ce2c45b6_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0ec3d04dff41f16d6fcc55b901f0e99359b1cfda9c5578271e12bbc419fc84d = $this->env->getExtension("native_profiler");
        $__internal_a0ec3d04dff41f16d6fcc55b901f0e99359b1cfda9c5578271e12bbc419fc84d->enter($__internal_a0ec3d04dff41f16d6fcc55b901f0e99359b1cfda9c5578271e12bbc419fc84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_a0ec3d04dff41f16d6fcc55b901f0e99359b1cfda9c5578271e12bbc419fc84d->leave($__internal_a0ec3d04dff41f16d6fcc55b901f0e99359b1cfda9c5578271e12bbc419fc84d_prof);

    }

    // line 60
    public function block_wiseScript($context, array $blocks = array())
    {
        $__internal_4cd04f46917b0719ff061cc28d2f36e1a1cb50e58ae1eaff5451bc3909ae8d22 = $this->env->getExtension("native_profiler");
        $__internal_4cd04f46917b0719ff061cc28d2f36e1a1cb50e58ae1eaff5451bc3909ae8d22->enter($__internal_4cd04f46917b0719ff061cc28d2f36e1a1cb50e58ae1eaff5451bc3909ae8d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseScript"));

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
        
        $__internal_4cd04f46917b0719ff061cc28d2f36e1a1cb50e58ae1eaff5451bc3909ae8d22->leave($__internal_4cd04f46917b0719ff061cc28d2f36e1a1cb50e58ae1eaff5451bc3909ae8d22_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
