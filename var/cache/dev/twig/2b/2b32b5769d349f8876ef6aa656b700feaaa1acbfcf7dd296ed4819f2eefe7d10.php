<?php

/* base.html.twig */
class __TwigTemplate_c3a38651a2a916dce8fecc342c38c38e4c1beeee4f3a530a24a1dee5165abe5b extends Twig_Template
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
            'wiseFooter' => array($this, 'block_wiseFooter'),
            'wiseScript' => array($this, 'block_wiseScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc3cde8abeabe515ca1e5e7d9c1e0e9eb9ac7e2795b92368ff985d7ca0d0dcc3 = $this->env->getExtension("native_profiler");
        $__internal_fc3cde8abeabe515ca1e5e7d9c1e0e9eb9ac7e2795b92368ff985d7ca0d0dcc3->enter($__internal_fc3cde8abeabe515ca1e5e7d9c1e0e9eb9ac7e2795b92368ff985d7ca0d0dcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 29
        echo "        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        ";
        // line 31
        $this->displayBlock('wiseFooter', $context, $blocks);
        // line 32
        echo "        <!-- END FOOTER -->
        <!--[if lt IE 9]>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script> 
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        ";
        // line 47
        $this->displayBlock('wiseScript', $context, $blocks);
        // line 48
        echo "    </body>

</html>";
        
        $__internal_fc3cde8abeabe515ca1e5e7d9c1e0e9eb9ac7e2795b92368ff985d7ca0d0dcc3->leave($__internal_fc3cde8abeabe515ca1e5e7d9c1e0e9eb9ac7e2795b92368ff985d7ca0d0dcc3_prof);

    }

    // line 10
    public function block_wiseTitle($context, array $blocks = array())
    {
        $__internal_d940d80fa3d5d23f678068d2ac922ccf0313c34204cb4910822538282ad5ed0d = $this->env->getExtension("native_profiler");
        $__internal_d940d80fa3d5d23f678068d2ac922ccf0313c34204cb4910822538282ad5ed0d->enter($__internal_d940d80fa3d5d23f678068d2ac922ccf0313c34204cb4910822538282ad5ed0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseTitle"));

        echo "Wise";
        
        $__internal_d940d80fa3d5d23f678068d2ac922ccf0313c34204cb4910822538282ad5ed0d->leave($__internal_d940d80fa3d5d23f678068d2ac922ccf0313c34204cb4910822538282ad5ed0d_prof);

    }

    // line 22
    public function block_wiseStyle($context, array $blocks = array())
    {
        $__internal_baf03629f29ae221f7eefab308aa1c674344ad4d647d9d674733f9649586117a = $this->env->getExtension("native_profiler");
        $__internal_baf03629f29ae221f7eefab308aa1c674344ad4d647d9d674733f9649586117a->enter($__internal_baf03629f29ae221f7eefab308aa1c674344ad4d647d9d674733f9649586117a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseStyle"));

        
        $__internal_baf03629f29ae221f7eefab308aa1c674344ad4d647d9d674733f9649586117a->leave($__internal_baf03629f29ae221f7eefab308aa1c674344ad4d647d9d674733f9649586117a_prof);

    }

    // line 26
    public function block_wiseBodyClass($context, array $blocks = array())
    {
        $__internal_5afca86509d29b1c48cdbcdd64f751cf3013315b35798b7082d6c79bb2fec79a = $this->env->getExtension("native_profiler");
        $__internal_5afca86509d29b1c48cdbcdd64f751cf3013315b35798b7082d6c79bb2fec79a->enter($__internal_5afca86509d29b1c48cdbcdd64f751cf3013315b35798b7082d6c79bb2fec79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseBodyClass"));

        echo "page-header-fixed page-sidebar-closed-hide-logo page-content-white";
        
        $__internal_5afca86509d29b1c48cdbcdd64f751cf3013315b35798b7082d6c79bb2fec79a->leave($__internal_5afca86509d29b1c48cdbcdd64f751cf3013315b35798b7082d6c79bb2fec79a_prof);

    }

    // line 28
    public function block_wiseBody($context, array $blocks = array())
    {
        $__internal_eeb7ad306d230232c0a150c47adbb6dff3e2376260d76c016a82c670b0194113 = $this->env->getExtension("native_profiler");
        $__internal_eeb7ad306d230232c0a150c47adbb6dff3e2376260d76c016a82c670b0194113->enter($__internal_eeb7ad306d230232c0a150c47adbb6dff3e2376260d76c016a82c670b0194113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseBody"));

        
        $__internal_eeb7ad306d230232c0a150c47adbb6dff3e2376260d76c016a82c670b0194113->leave($__internal_eeb7ad306d230232c0a150c47adbb6dff3e2376260d76c016a82c670b0194113_prof);

    }

    // line 31
    public function block_wiseFooter($context, array $blocks = array())
    {
        $__internal_b602880d0b68a974c55f2606f8291dd1f9b941d2cfd6c96327b3622d169d20c9 = $this->env->getExtension("native_profiler");
        $__internal_b602880d0b68a974c55f2606f8291dd1f9b941d2cfd6c96327b3622d169d20c9->enter($__internal_b602880d0b68a974c55f2606f8291dd1f9b941d2cfd6c96327b3622d169d20c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseFooter"));

        
        $__internal_b602880d0b68a974c55f2606f8291dd1f9b941d2cfd6c96327b3622d169d20c9->leave($__internal_b602880d0b68a974c55f2606f8291dd1f9b941d2cfd6c96327b3622d169d20c9_prof);

    }

    // line 47
    public function block_wiseScript($context, array $blocks = array())
    {
        $__internal_7e88f452624d6278e0c2a376d1742cba3bedab8a6e65a0ffe545d348a4113e78 = $this->env->getExtension("native_profiler");
        $__internal_7e88f452624d6278e0c2a376d1742cba3bedab8a6e65a0ffe545d348a4113e78->enter($__internal_7e88f452624d6278e0c2a376d1742cba3bedab8a6e65a0ffe545d348a4113e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseScript"));

        
        $__internal_7e88f452624d6278e0c2a376d1742cba3bedab8a6e65a0ffe545d348a4113e78->leave($__internal_7e88f452624d6278e0c2a376d1742cba3bedab8a6e65a0ffe545d348a4113e78_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 47,  193 => 31,  182 => 28,  170 => 26,  159 => 22,  147 => 10,  138 => 48,  136 => 47,  131 => 45,  127 => 44,  123 => 43,  119 => 42,  115 => 41,  111 => 40,  107 => 39,  103 => 38,  97 => 35,  93 => 34,  89 => 32,  87 => 31,  83 => 29,  81 => 28,  76 => 26,  71 => 23,  69 => 22,  64 => 20,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  39 => 10,  28 => 1,);
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
/*         {% block wiseBody %}{% endblock %}*/
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
