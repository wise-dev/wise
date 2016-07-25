<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_814321974ff6551d8050fa8e045237093a4d5937b850fc71b77c320af87c1d85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'wiseTitle' => array($this, 'block_wiseTitle'),
            'wiseStyle' => array($this, 'block_wiseStyle'),
            'wiseBodyClass' => array($this, 'block_wiseBodyClass'),
            'wiseBody' => array($this, 'block_wiseBody'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'wiseFooter' => array($this, 'block_wiseFooter'),
            'wiseScript' => array($this, 'block_wiseScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c92ffedc6a0ab95ee8101f71e652178e8ee83c7a28bffb3ae924ede1c87a7ba = $this->env->getExtension("native_profiler");
        $__internal_7c92ffedc6a0ab95ee8101f71e652178e8ee83c7a28bffb3ae924ede1c87a7ba->enter($__internal_7c92ffedc6a0ab95ee8101f71e652178e8ee83c7a28bffb3ae924ede1c87a7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset=\"utf-8\" />
        <title>";
        // line 10
        $this->displayBlock('wiseTitle', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        ";
        // line 22
        $this->displayBlock('wiseStyle', $context, $blocks);
        // line 23
        echo "        <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
    <!-- END HEAD -->

    <body class=\"";
        // line 26
        $this->displayBlock('wiseBodyClass', $context, $blocks);
        echo "\">
        <!-- BEGIN CONTAINER -->
        ";
        // line 28
        $this->displayBlock('wiseBody', $context, $blocks);
        // line 55
        echo "        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        ";
        // line 57
        $this->displayBlock('wiseFooter', $context, $blocks);
        // line 58
        echo "        <!-- END FOOTER -->
        <!--[if lt IE 9]>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script> 
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        ";
        // line 73
        $this->displayBlock('wiseScript', $context, $blocks);
        // line 74
        echo "    </body>

</html>";
        
        $__internal_7c92ffedc6a0ab95ee8101f71e652178e8ee83c7a28bffb3ae924ede1c87a7ba->leave($__internal_7c92ffedc6a0ab95ee8101f71e652178e8ee83c7a28bffb3ae924ede1c87a7ba_prof);

    }

    // line 10
    public function block_wiseTitle($context, array $blocks = array())
    {
        $__internal_05edce654c47fc5a8b69751484665b125280306f65a58db0bf724fbf9c87b06d = $this->env->getExtension("native_profiler");
        $__internal_05edce654c47fc5a8b69751484665b125280306f65a58db0bf724fbf9c87b06d->enter($__internal_05edce654c47fc5a8b69751484665b125280306f65a58db0bf724fbf9c87b06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseTitle"));

        echo "Wise";
        
        $__internal_05edce654c47fc5a8b69751484665b125280306f65a58db0bf724fbf9c87b06d->leave($__internal_05edce654c47fc5a8b69751484665b125280306f65a58db0bf724fbf9c87b06d_prof);

    }

    // line 22
    public function block_wiseStyle($context, array $blocks = array())
    {
        $__internal_278f30bc364a1db5ff42530dd60b31bb450f059cd14f204b33ad6c14dca0ed08 = $this->env->getExtension("native_profiler");
        $__internal_278f30bc364a1db5ff42530dd60b31bb450f059cd14f204b33ad6c14dca0ed08->enter($__internal_278f30bc364a1db5ff42530dd60b31bb450f059cd14f204b33ad6c14dca0ed08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseStyle"));

        
        $__internal_278f30bc364a1db5ff42530dd60b31bb450f059cd14f204b33ad6c14dca0ed08->leave($__internal_278f30bc364a1db5ff42530dd60b31bb450f059cd14f204b33ad6c14dca0ed08_prof);

    }

    // line 26
    public function block_wiseBodyClass($context, array $blocks = array())
    {
        $__internal_9b2a4be51085a6bc0aaad8246075a455667b4e317a699c8a991159b21ac18953 = $this->env->getExtension("native_profiler");
        $__internal_9b2a4be51085a6bc0aaad8246075a455667b4e317a699c8a991159b21ac18953->enter($__internal_9b2a4be51085a6bc0aaad8246075a455667b4e317a699c8a991159b21ac18953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseBodyClass"));

        echo "page-header-fixed page-sidebar-closed-hide-logo page-content-white";
        
        $__internal_9b2a4be51085a6bc0aaad8246075a455667b4e317a699c8a991159b21ac18953->leave($__internal_9b2a4be51085a6bc0aaad8246075a455667b4e317a699c8a991159b21ac18953_prof);

    }

    // line 28
    public function block_wiseBody($context, array $blocks = array())
    {
        $__internal_dbc3b7fa3d845000597ab4265601fdbeda9e10c4c189312bd4253a1362eb02b5 = $this->env->getExtension("native_profiler");
        $__internal_dbc3b7fa3d845000597ab4265601fdbeda9e10c4c189312bd4253a1362eb02b5->enter($__internal_dbc3b7fa3d845000597ab4265601fdbeda9e10c4c189312bd4253a1362eb02b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseBody"));

        // line 29
        echo "            <div>
                    ";
        // line 30
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 31
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                        <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 36
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 38
        echo "                </div>

                ";
        // line 40
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 41
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 42
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 43
                    echo "                            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                ";
                    // line 44
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                ";
        }
        // line 49
        echo "
                <div>
                    ";
        // line 51
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 53
        echo "                </div>
        ";
        
        $__internal_dbc3b7fa3d845000597ab4265601fdbeda9e10c4c189312bd4253a1362eb02b5->leave($__internal_dbc3b7fa3d845000597ab4265601fdbeda9e10c4c189312bd4253a1362eb02b5_prof);

    }

    // line 51
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_beb54ff2b0c9b994c3da45525d124073878ad0a4618c35e5b6ea1f0e187a9375 = $this->env->getExtension("native_profiler");
        $__internal_beb54ff2b0c9b994c3da45525d124073878ad0a4618c35e5b6ea1f0e187a9375->enter($__internal_beb54ff2b0c9b994c3da45525d124073878ad0a4618c35e5b6ea1f0e187a9375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 52
        echo "                    ";
        
        $__internal_beb54ff2b0c9b994c3da45525d124073878ad0a4618c35e5b6ea1f0e187a9375->leave($__internal_beb54ff2b0c9b994c3da45525d124073878ad0a4618c35e5b6ea1f0e187a9375_prof);

    }

    // line 57
    public function block_wiseFooter($context, array $blocks = array())
    {
        $__internal_0058312880e125183e7846844eb2d5df046617ba2ad6cf0eec468eb6f7a6bc2c = $this->env->getExtension("native_profiler");
        $__internal_0058312880e125183e7846844eb2d5df046617ba2ad6cf0eec468eb6f7a6bc2c->enter($__internal_0058312880e125183e7846844eb2d5df046617ba2ad6cf0eec468eb6f7a6bc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseFooter"));

        
        $__internal_0058312880e125183e7846844eb2d5df046617ba2ad6cf0eec468eb6f7a6bc2c->leave($__internal_0058312880e125183e7846844eb2d5df046617ba2ad6cf0eec468eb6f7a6bc2c_prof);

    }

    // line 73
    public function block_wiseScript($context, array $blocks = array())
    {
        $__internal_4d801f4d736d81140a944874709f832b71d78db2546b44604ccf508c004d8171 = $this->env->getExtension("native_profiler");
        $__internal_4d801f4d736d81140a944874709f832b71d78db2546b44604ccf508c004d8171->enter($__internal_4d801f4d736d81140a944874709f832b71d78db2546b44604ccf508c004d8171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseScript"));

        
        $__internal_4d801f4d736d81140a944874709f832b71d78db2546b44604ccf508c004d8171->leave($__internal_4d801f4d736d81140a944874709f832b71d78db2546b44604ccf508c004d8171_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 73,  283 => 57,  276 => 52,  270 => 51,  262 => 53,  260 => 51,  256 => 49,  253 => 48,  247 => 47,  238 => 44,  233 => 43,  228 => 42,  223 => 41,  221 => 40,  217 => 38,  209 => 36,  203 => 33,  199 => 32,  194 => 31,  192 => 30,  189 => 29,  183 => 28,  171 => 26,  160 => 22,  148 => 10,  139 => 74,  137 => 73,  132 => 71,  128 => 70,  124 => 69,  120 => 68,  116 => 67,  112 => 66,  108 => 65,  104 => 64,  98 => 61,  94 => 60,  90 => 58,  88 => 57,  84 => 55,  82 => 28,  77 => 26,  72 => 23,  70 => 22,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  49 => 16,  40 => 10,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->*/
/* <!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->*/
/* <!--[if !IE]><!-->*/
/* <html lang="en">*/
/*     <!--<![endif]-->*/
/*     <!-- BEGIN HEAD -->*/
/*     <head>*/
/*         <meta charset="utf-8" />*/
/*         <title>{% block wiseTitle %}Wise{% endblock %}</title>*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta content="width=device-width, initial-scale=1" name="viewport" />*/
/*         <meta content="" name="description" />*/
/*         <meta content="" name="author" />*/
/*         <!-- BEGIN GLOBAL MANDATORY STYLES -->*/
/*         <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <!-- END GLOBAL MANDATORY STYLES -->*/
/*         {% block wiseStyle %}{% endblock %}*/
/*         <link rel="shortcut icon" href="favicon.ico" /> </head>*/
/*     <!-- END HEAD -->*/
/* */
/*     <body class="{% block wiseBodyClass %}page-header-fixed page-sidebar-closed-hide-logo page-content-white{% endblock %}">*/
/*         <!-- BEGIN CONTAINER -->*/
/*         {% block wiseBody %}*/
/*             <div>*/
/*                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                         {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                         <a href="{{ path('fos_user_security_logout') }}">*/
/*                             {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                         </a>*/
/*                     {% else %}*/
/*                         <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*                     {% endif %}*/
/*                 </div>*/
/* */
/*                 {% if app.request.hasPreviousSession %}*/
/*                     {% for type, messages in app.session.flashbag.all() %}*/
/*                         {% for message in messages %}*/
/*                             <div class="flash-{{ type }}">*/
/*                                 {{ message }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/* */
/*                 <div>*/
/*                     {% block fos_user_content %}*/
/*                     {% endblock fos_user_content %}*/
/*                 </div>*/
/*         {% endblock %}*/
/*         <!-- END CONTAINER -->*/
/*         <!-- BEGIN FOOTER -->*/
/*         {% block wiseFooter %}{% endblock %}*/
/*         <!-- END FOOTER -->*/
/*         <!--[if lt IE 9]>*/
/*         <script src="{{ asset('assets/global/plugins/respond.min.js') }}"></script>*/
/*         <script src="{{ asset('assets/global/plugins/excanvas.min.js') }}"></script> */
/*         <![endif]-->*/
/*         <!-- BEGIN CORE PLUGINS -->*/
/*         <script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>*/
/*         <!-- END CORE PLUGINS -->*/
/*         {% block wiseScript %}{% endblock %}*/
/*     </body>*/
/* */
/* </html>*/
