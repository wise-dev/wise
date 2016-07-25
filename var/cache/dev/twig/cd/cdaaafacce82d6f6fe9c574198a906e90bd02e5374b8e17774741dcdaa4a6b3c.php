<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_94173d6850911c4cab3d5a18cffad975ef7aea110ffcf3d1ddbace99dc035cfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_539c5498dba8844e8f11ab88ee1c42e270f2dd5e5caa376777d3094c694c0c20 = $this->env->getExtension("native_profiler");
        $__internal_539c5498dba8844e8f11ab88ee1c42e270f2dd5e5caa376777d3094c694c0c20->enter($__internal_539c5498dba8844e8f11ab88ee1c42e270f2dd5e5caa376777d3094c694c0c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_539c5498dba8844e8f11ab88ee1c42e270f2dd5e5caa376777d3094c694c0c20->leave($__internal_539c5498dba8844e8f11ab88ee1c42e270f2dd5e5caa376777d3094c694c0c20_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d57d26064f62768e579ef51513903124e69e47a41dc3f38a4875d78029c1e76 = $this->env->getExtension("native_profiler");
        $__internal_6d57d26064f62768e579ef51513903124e69e47a41dc3f38a4875d78029c1e76->enter($__internal_6d57d26064f62768e579ef51513903124e69e47a41dc3f38a4875d78029c1e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_6d57d26064f62768e579ef51513903124e69e47a41dc3f38a4875d78029c1e76->leave($__internal_6d57d26064f62768e579ef51513903124e69e47a41dc3f38a4875d78029c1e76_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
