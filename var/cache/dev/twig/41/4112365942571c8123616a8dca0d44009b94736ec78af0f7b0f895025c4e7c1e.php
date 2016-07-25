<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_6cd1f782c0301fddca5e0fda4a44dab007cf7c753c2569b623088d22be1e7724 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_f25d76bfb72607b37614a64b9566a9bc41b3022d15f30284ee6c1fbe7c39cdb2 = $this->env->getExtension("native_profiler");
        $__internal_f25d76bfb72607b37614a64b9566a9bc41b3022d15f30284ee6c1fbe7c39cdb2->enter($__internal_f25d76bfb72607b37614a64b9566a9bc41b3022d15f30284ee6c1fbe7c39cdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f25d76bfb72607b37614a64b9566a9bc41b3022d15f30284ee6c1fbe7c39cdb2->leave($__internal_f25d76bfb72607b37614a64b9566a9bc41b3022d15f30284ee6c1fbe7c39cdb2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9bad53a626105b88cefcfa6fd3b775abcf0a1e92d9b5593a3b60c191e85da83a = $this->env->getExtension("native_profiler");
        $__internal_9bad53a626105b88cefcfa6fd3b775abcf0a1e92d9b5593a3b60c191e85da83a->enter($__internal_9bad53a626105b88cefcfa6fd3b775abcf0a1e92d9b5593a3b60c191e85da83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_9bad53a626105b88cefcfa6fd3b775abcf0a1e92d9b5593a3b60c191e85da83a->leave($__internal_9bad53a626105b88cefcfa6fd3b775abcf0a1e92d9b5593a3b60c191e85da83a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
