<?php

/* @WiseProfile/Profile/show.html.twig */
class __TwigTemplate_93b0f03c382cff3a69b15b2341b647a5d11f542c5ca78b57b0007d088a1843d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@WiseProfile/Profile/show.html.twig", 1);
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
        $__internal_066aa97a663965adb00e1dc2b2a9efdec0657324e7562c8397a812ef912872d6 = $this->env->getExtension("native_profiler");
        $__internal_066aa97a663965adb00e1dc2b2a9efdec0657324e7562c8397a812ef912872d6->enter($__internal_066aa97a663965adb00e1dc2b2a9efdec0657324e7562c8397a812ef912872d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_066aa97a663965adb00e1dc2b2a9efdec0657324e7562c8397a812ef912872d6->leave($__internal_066aa97a663965adb00e1dc2b2a9efdec0657324e7562c8397a812ef912872d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_430cc5547d652d3dda0f564f3df839302c4fd9648c87883d2377dbf31984f0ef = $this->env->getExtension("native_profiler");
        $__internal_430cc5547d652d3dda0f564f3df839302c4fd9648c87883d2377dbf31984f0ef->enter($__internal_430cc5547d652d3dda0f564f3df839302c4fd9648c87883d2377dbf31984f0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@WiseProfile/Profile/show.html.twig", 4)->display($context);
        
        $__internal_430cc5547d652d3dda0f564f3df839302c4fd9648c87883d2377dbf31984f0ef->leave($__internal_430cc5547d652d3dda0f564f3df839302c4fd9648c87883d2377dbf31984f0ef_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Profile/show.html.twig";
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
