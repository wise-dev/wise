<?php

/* @WiseProfile/Profile/edit.html.twig */
class __TwigTemplate_89e8375aa649d9fc60020fb0a3d0fa45d987dc99c2b3706538e3bc51d6e45724 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@WiseProfile/Profile/edit.html.twig", 1);
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
        $__internal_07fdcf26dbdc0fc41fd38cbce3685ed9d31db2aa29b971f479543e5024046520 = $this->env->getExtension("native_profiler");
        $__internal_07fdcf26dbdc0fc41fd38cbce3685ed9d31db2aa29b971f479543e5024046520->enter($__internal_07fdcf26dbdc0fc41fd38cbce3685ed9d31db2aa29b971f479543e5024046520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07fdcf26dbdc0fc41fd38cbce3685ed9d31db2aa29b971f479543e5024046520->leave($__internal_07fdcf26dbdc0fc41fd38cbce3685ed9d31db2aa29b971f479543e5024046520_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b176b9b9365fbb015a8f7a1a4f8e21f3fdc3e502d19a3731ebb1f6c4b2c7e80 = $this->env->getExtension("native_profiler");
        $__internal_4b176b9b9365fbb015a8f7a1a4f8e21f3fdc3e502d19a3731ebb1f6c4b2c7e80->enter($__internal_4b176b9b9365fbb015a8f7a1a4f8e21f3fdc3e502d19a3731ebb1f6c4b2c7e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@WiseProfile/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_4b176b9b9365fbb015a8f7a1a4f8e21f3fdc3e502d19a3731ebb1f6c4b2c7e80->leave($__internal_4b176b9b9365fbb015a8f7a1a4f8e21f3fdc3e502d19a3731ebb1f6c4b2c7e80_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
