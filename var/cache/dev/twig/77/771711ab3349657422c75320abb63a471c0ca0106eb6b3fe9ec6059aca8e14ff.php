<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_2d2fb80862ac0c7477d69609fe6e2dda5f27266d9f8cacfe900c72b352741dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_75e67d5d592798f55a7e98a0e8058038463aa154fd9be16b8ca39f430c4f6f86 = $this->env->getExtension("native_profiler");
        $__internal_75e67d5d592798f55a7e98a0e8058038463aa154fd9be16b8ca39f430c4f6f86->enter($__internal_75e67d5d592798f55a7e98a0e8058038463aa154fd9be16b8ca39f430c4f6f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75e67d5d592798f55a7e98a0e8058038463aa154fd9be16b8ca39f430c4f6f86->leave($__internal_75e67d5d592798f55a7e98a0e8058038463aa154fd9be16b8ca39f430c4f6f86_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0fa5fb50ebdc4377b0b0fff30c3f03d4895bc74553bf372660fc46b57b94911 = $this->env->getExtension("native_profiler");
        $__internal_c0fa5fb50ebdc4377b0b0fff30c3f03d4895bc74553bf372660fc46b57b94911->enter($__internal_c0fa5fb50ebdc4377b0b0fff30c3f03d4895bc74553bf372660fc46b57b94911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_c0fa5fb50ebdc4377b0b0fff30c3f03d4895bc74553bf372660fc46b57b94911->leave($__internal_c0fa5fb50ebdc4377b0b0fff30c3f03d4895bc74553bf372660fc46b57b94911_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
