<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_4016169b2ee9399fb35f99731e2cf0988eb5da6c400064210066397cfe34f571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_f2b9240c8199690394d58d119144adf5eb51303ea7fdf7c8b02d7115825be6a8 = $this->env->getExtension("native_profiler");
        $__internal_f2b9240c8199690394d58d119144adf5eb51303ea7fdf7c8b02d7115825be6a8->enter($__internal_f2b9240c8199690394d58d119144adf5eb51303ea7fdf7c8b02d7115825be6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2b9240c8199690394d58d119144adf5eb51303ea7fdf7c8b02d7115825be6a8->leave($__internal_f2b9240c8199690394d58d119144adf5eb51303ea7fdf7c8b02d7115825be6a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0267457311ad9b1cd8807eaee9f0f2fb462ac7bd1d780597cb39e1bd18e7a8a2 = $this->env->getExtension("native_profiler");
        $__internal_0267457311ad9b1cd8807eaee9f0f2fb462ac7bd1d780597cb39e1bd18e7a8a2->enter($__internal_0267457311ad9b1cd8807eaee9f0f2fb462ac7bd1d780597cb39e1bd18e7a8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_0267457311ad9b1cd8807eaee9f0f2fb462ac7bd1d780597cb39e1bd18e7a8a2->leave($__internal_0267457311ad9b1cd8807eaee9f0f2fb462ac7bd1d780597cb39e1bd18e7a8a2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
