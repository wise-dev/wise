<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_3d00c8395849be695a18bb804032fc36562f5d921102d9b77a95ad80785f5bc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_d0e8ad1a9bcb4b868479e2400e64a6c5ee9c66a72b0468b5d5cde68c191ee1ea = $this->env->getExtension("native_profiler");
        $__internal_d0e8ad1a9bcb4b868479e2400e64a6c5ee9c66a72b0468b5d5cde68c191ee1ea->enter($__internal_d0e8ad1a9bcb4b868479e2400e64a6c5ee9c66a72b0468b5d5cde68c191ee1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0e8ad1a9bcb4b868479e2400e64a6c5ee9c66a72b0468b5d5cde68c191ee1ea->leave($__internal_d0e8ad1a9bcb4b868479e2400e64a6c5ee9c66a72b0468b5d5cde68c191ee1ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d14c836935deffaad3dac2bed84074630be050b63f910c20db80e26a8725aea1 = $this->env->getExtension("native_profiler");
        $__internal_d14c836935deffaad3dac2bed84074630be050b63f910c20db80e26a8725aea1->enter($__internal_d14c836935deffaad3dac2bed84074630be050b63f910c20db80e26a8725aea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d14c836935deffaad3dac2bed84074630be050b63f910c20db80e26a8725aea1->leave($__internal_d14c836935deffaad3dac2bed84074630be050b63f910c20db80e26a8725aea1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
