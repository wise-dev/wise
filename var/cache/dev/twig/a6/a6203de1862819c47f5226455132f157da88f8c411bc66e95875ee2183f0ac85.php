<?php

/* ProfileBundle:Default:index.html.twig */
class __TwigTemplate_49a54b979c814a2fe3b7a81c4bd92894c3091c705cc2a76ab8c8683fffcd19bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ProfileBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'wiseTitle' => array($this, 'block_wiseTitle'),
            'wiseBody' => array($this, 'block_wiseBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc1d16c9303284315754314b1d2a6ea1c12e02cea4a4a26eafdb34c67c51bd52 = $this->env->getExtension("native_profiler");
        $__internal_cc1d16c9303284315754314b1d2a6ea1c12e02cea4a4a26eafdb34c67c51bd52->enter($__internal_cc1d16c9303284315754314b1d2a6ea1c12e02cea4a4a26eafdb34c67c51bd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProfileBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc1d16c9303284315754314b1d2a6ea1c12e02cea4a4a26eafdb34c67c51bd52->leave($__internal_cc1d16c9303284315754314b1d2a6ea1c12e02cea4a4a26eafdb34c67c51bd52_prof);

    }

    // line 3
    public function block_wiseTitle($context, array $blocks = array())
    {
        $__internal_3bea1a3c409d04c61b4928ead209435ff9d29e20db90e84386de2c8114a2dfcf = $this->env->getExtension("native_profiler");
        $__internal_3bea1a3c409d04c61b4928ead209435ff9d29e20db90e84386de2c8114a2dfcf->enter($__internal_3bea1a3c409d04c61b4928ead209435ff9d29e20db90e84386de2c8114a2dfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseTitle"));

        echo "Home";
        
        $__internal_3bea1a3c409d04c61b4928ead209435ff9d29e20db90e84386de2c8114a2dfcf->leave($__internal_3bea1a3c409d04c61b4928ead209435ff9d29e20db90e84386de2c8114a2dfcf_prof);

    }

    // line 5
    public function block_wiseBody($context, array $blocks = array())
    {
        $__internal_1f7135e255ae916f6f74fd925abf9560ca0704ff660c83d9d3c43b93392efad6 = $this->env->getExtension("native_profiler");
        $__internal_1f7135e255ae916f6f74fd925abf9560ca0704ff660c83d9d3c43b93392efad6->enter($__internal_1f7135e255ae916f6f74fd925abf9560ca0704ff660c83d9d3c43b93392efad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseBody"));

        // line 6
        echo "    <span class=\"btn btn-bg\">NNNNNNN</span>
";
        
        $__internal_1f7135e255ae916f6f74fd925abf9560ca0704ff660c83d9d3c43b93392efad6->leave($__internal_1f7135e255ae916f6f74fd925abf9560ca0704ff660c83d9d3c43b93392efad6_prof);

    }

    public function getTemplateName()
    {
        return "ProfileBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block wiseTitle %}Home{% endblock %}*/
/* */
/* {% block wiseBody %}*/
/*     <span class="btn btn-bg">NNNNNNN</span>*/
/* {% endblock %}*/
/* */
