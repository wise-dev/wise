<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_07530052072fd60b5b0680489097bca22b674560c914acebd0d486bb7edeb398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b69e8098377561df7ebd652896262cfdd1cd82a21d5e57a8085583ce5933b260 = $this->env->getExtension("native_profiler");
        $__internal_b69e8098377561df7ebd652896262cfdd1cd82a21d5e57a8085583ce5933b260->enter($__internal_b69e8098377561df7ebd652896262cfdd1cd82a21d5e57a8085583ce5933b260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b69e8098377561df7ebd652896262cfdd1cd82a21d5e57a8085583ce5933b260->leave($__internal_b69e8098377561df7ebd652896262cfdd1cd82a21d5e57a8085583ce5933b260_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0abc8d724c7e0015b09105eb0806eb9e531e9c4c0e23b20bdebfab07d05234b0 = $this->env->getExtension("native_profiler");
        $__internal_0abc8d724c7e0015b09105eb0806eb9e531e9c4c0e23b20bdebfab07d05234b0->enter($__internal_0abc8d724c7e0015b09105eb0806eb9e531e9c4c0e23b20bdebfab07d05234b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_0abc8d724c7e0015b09105eb0806eb9e531e9c4c0e23b20bdebfab07d05234b0->leave($__internal_0abc8d724c7e0015b09105eb0806eb9e531e9c4c0e23b20bdebfab07d05234b0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
