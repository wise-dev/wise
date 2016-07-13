<?php

/* @WiseProfile/Group/edit.html.twig */
class __TwigTemplate_fd4119218550dd246977b6efdf112311023c9f57ccb8b6acc845194db41d2895 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@WiseProfile/Group/edit.html.twig", 1);
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
        $__internal_375b6b68e644235ac7cc01ec2d2c763abc91cfe3cf846770bf62808da27de8dd = $this->env->getExtension("native_profiler");
        $__internal_375b6b68e644235ac7cc01ec2d2c763abc91cfe3cf846770bf62808da27de8dd->enter($__internal_375b6b68e644235ac7cc01ec2d2c763abc91cfe3cf846770bf62808da27de8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_375b6b68e644235ac7cc01ec2d2c763abc91cfe3cf846770bf62808da27de8dd->leave($__internal_375b6b68e644235ac7cc01ec2d2c763abc91cfe3cf846770bf62808da27de8dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0259225ca12db0dc0f7e8dfde01c5b0bb05e28ebbaf3e29ff4fa34d2da6bedae = $this->env->getExtension("native_profiler");
        $__internal_0259225ca12db0dc0f7e8dfde01c5b0bb05e28ebbaf3e29ff4fa34d2da6bedae->enter($__internal_0259225ca12db0dc0f7e8dfde01c5b0bb05e28ebbaf3e29ff4fa34d2da6bedae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@WiseProfile/Group/edit.html.twig", 4)->display($context);
        
        $__internal_0259225ca12db0dc0f7e8dfde01c5b0bb05e28ebbaf3e29ff4fa34d2da6bedae->leave($__internal_0259225ca12db0dc0f7e8dfde01c5b0bb05e28ebbaf3e29ff4fa34d2da6bedae_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Group/edit.html.twig";
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
