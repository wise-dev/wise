<?php

/* @WiseProfile/Resetting/reset.html.twig */
class __TwigTemplate_a125ed1558288969c1b482ff2c8aab94c0da114b49e99f8a09c9a79c017ee740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@WiseProfile/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3798d1ea146d25651c60535ce9354bf2136935940d3c295ab02f2e64d152c35 = $this->env->getExtension("native_profiler");
        $__internal_d3798d1ea146d25651c60535ce9354bf2136935940d3c295ab02f2e64d152c35->enter($__internal_d3798d1ea146d25651c60535ce9354bf2136935940d3c295ab02f2e64d152c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3798d1ea146d25651c60535ce9354bf2136935940d3c295ab02f2e64d152c35->leave($__internal_d3798d1ea146d25651c60535ce9354bf2136935940d3c295ab02f2e64d152c35_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7da0d4125b1426726932ec814532a218104a601600c35632ffd6566abc1a58b1 = $this->env->getExtension("native_profiler");
        $__internal_7da0d4125b1426726932ec814532a218104a601600c35632ffd6566abc1a58b1->enter($__internal_7da0d4125b1426726932ec814532a218104a601600c35632ffd6566abc1a58b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@WiseProfile/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_7da0d4125b1426726932ec814532a218104a601600c35632ffd6566abc1a58b1->leave($__internal_7da0d4125b1426726932ec814532a218104a601600c35632ffd6566abc1a58b1_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
