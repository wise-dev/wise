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
        $__internal_38e5b99465e943d2415c6e9393d1b3f3de357141cf0cd1061951cd4d220125a3 = $this->env->getExtension("native_profiler");
        $__internal_38e5b99465e943d2415c6e9393d1b3f3de357141cf0cd1061951cd4d220125a3->enter($__internal_38e5b99465e943d2415c6e9393d1b3f3de357141cf0cd1061951cd4d220125a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38e5b99465e943d2415c6e9393d1b3f3de357141cf0cd1061951cd4d220125a3->leave($__internal_38e5b99465e943d2415c6e9393d1b3f3de357141cf0cd1061951cd4d220125a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_620b12b213b3d307a450543b593508c44cdb36b4d2e4d61230648decdd0a5f54 = $this->env->getExtension("native_profiler");
        $__internal_620b12b213b3d307a450543b593508c44cdb36b4d2e4d61230648decdd0a5f54->enter($__internal_620b12b213b3d307a450543b593508c44cdb36b4d2e4d61230648decdd0a5f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_620b12b213b3d307a450543b593508c44cdb36b4d2e4d61230648decdd0a5f54->leave($__internal_620b12b213b3d307a450543b593508c44cdb36b4d2e4d61230648decdd0a5f54_prof);

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
