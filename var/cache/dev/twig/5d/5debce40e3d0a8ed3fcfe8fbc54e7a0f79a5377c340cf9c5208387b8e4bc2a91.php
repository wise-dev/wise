<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_b8b0e0ea24b2f0b5a5c42c9ebcce955a83e0c9dcdf6871cd7bb812c230505d48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_66b7f4acd293bdf729af8639cca3e7e5f191316d3721901653585091a45cf42f = $this->env->getExtension("native_profiler");
        $__internal_66b7f4acd293bdf729af8639cca3e7e5f191316d3721901653585091a45cf42f->enter($__internal_66b7f4acd293bdf729af8639cca3e7e5f191316d3721901653585091a45cf42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66b7f4acd293bdf729af8639cca3e7e5f191316d3721901653585091a45cf42f->leave($__internal_66b7f4acd293bdf729af8639cca3e7e5f191316d3721901653585091a45cf42f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2812cf4c1aecdd196e7a34aba496150e932858e9d1fdfe8ca3744859f4b26d26 = $this->env->getExtension("native_profiler");
        $__internal_2812cf4c1aecdd196e7a34aba496150e932858e9d1fdfe8ca3744859f4b26d26->enter($__internal_2812cf4c1aecdd196e7a34aba496150e932858e9d1fdfe8ca3744859f4b26d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_2812cf4c1aecdd196e7a34aba496150e932858e9d1fdfe8ca3744859f4b26d26->leave($__internal_2812cf4c1aecdd196e7a34aba496150e932858e9d1fdfe8ca3744859f4b26d26_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
