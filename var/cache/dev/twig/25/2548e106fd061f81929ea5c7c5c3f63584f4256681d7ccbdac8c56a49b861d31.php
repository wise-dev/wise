<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_0073fc33e728f44cce2e426fdf3a2eeaf5f4c5b23300545c111b5c9db7b8ac50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_993367363788001aaff225acfd61a3398ed8e2c07363d095a7703587bc92b7ca = $this->env->getExtension("native_profiler");
        $__internal_993367363788001aaff225acfd61a3398ed8e2c07363d095a7703587bc92b7ca->enter($__internal_993367363788001aaff225acfd61a3398ed8e2c07363d095a7703587bc92b7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_993367363788001aaff225acfd61a3398ed8e2c07363d095a7703587bc92b7ca->leave($__internal_993367363788001aaff225acfd61a3398ed8e2c07363d095a7703587bc92b7ca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44e75dc1683609540d94f1606cb81e6b9fd71209d0b178bea5ab7739b7c7d7f5 = $this->env->getExtension("native_profiler");
        $__internal_44e75dc1683609540d94f1606cb81e6b9fd71209d0b178bea5ab7739b7c7d7f5->enter($__internal_44e75dc1683609540d94f1606cb81e6b9fd71209d0b178bea5ab7739b7c7d7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_44e75dc1683609540d94f1606cb81e6b9fd71209d0b178bea5ab7739b7c7d7f5->leave($__internal_44e75dc1683609540d94f1606cb81e6b9fd71209d0b178bea5ab7739b7c7d7f5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
