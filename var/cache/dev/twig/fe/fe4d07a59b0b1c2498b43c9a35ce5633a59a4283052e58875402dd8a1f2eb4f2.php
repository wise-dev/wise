<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a0523dd7b8517febcf741190c85e7314138761128db01b1a0fcd7e98355d9d83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b28a57af0220c10718926b085d011c40e627ea3671063aa2f258a9b78ebc9aa = $this->env->getExtension("native_profiler");
        $__internal_5b28a57af0220c10718926b085d011c40e627ea3671063aa2f258a9b78ebc9aa->enter($__internal_5b28a57af0220c10718926b085d011c40e627ea3671063aa2f258a9b78ebc9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b28a57af0220c10718926b085d011c40e627ea3671063aa2f258a9b78ebc9aa->leave($__internal_5b28a57af0220c10718926b085d011c40e627ea3671063aa2f258a9b78ebc9aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8288f59cf113abc87e3589b656f3359d409d94f245d0c6a4d318335baed005f6 = $this->env->getExtension("native_profiler");
        $__internal_8288f59cf113abc87e3589b656f3359d409d94f245d0c6a4d318335baed005f6->enter($__internal_8288f59cf113abc87e3589b656f3359d409d94f245d0c6a4d318335baed005f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8288f59cf113abc87e3589b656f3359d409d94f245d0c6a4d318335baed005f6->leave($__internal_8288f59cf113abc87e3589b656f3359d409d94f245d0c6a4d318335baed005f6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_036da2eb3b26272e8b9b60ddee8fbc6a53bf8f56a948b1443c8256a29e6cea70 = $this->env->getExtension("native_profiler");
        $__internal_036da2eb3b26272e8b9b60ddee8fbc6a53bf8f56a948b1443c8256a29e6cea70->enter($__internal_036da2eb3b26272e8b9b60ddee8fbc6a53bf8f56a948b1443c8256a29e6cea70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_036da2eb3b26272e8b9b60ddee8fbc6a53bf8f56a948b1443c8256a29e6cea70->leave($__internal_036da2eb3b26272e8b9b60ddee8fbc6a53bf8f56a948b1443c8256a29e6cea70_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
