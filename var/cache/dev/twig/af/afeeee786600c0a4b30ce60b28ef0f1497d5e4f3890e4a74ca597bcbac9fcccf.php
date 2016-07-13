<?php

/* WiseProfileBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_4972383ed1b39db98b280d00e7cf22fa84cf4017d87317311c1342aa97b61d08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "WiseProfileBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_930adbc4e7844018bfb621dc1f6421d7490da0b62291193f4ad4207cb06b180f = $this->env->getExtension("native_profiler");
        $__internal_930adbc4e7844018bfb621dc1f6421d7490da0b62291193f4ad4207cb06b180f->enter($__internal_930adbc4e7844018bfb621dc1f6421d7490da0b62291193f4ad4207cb06b180f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_930adbc4e7844018bfb621dc1f6421d7490da0b62291193f4ad4207cb06b180f->leave($__internal_930adbc4e7844018bfb621dc1f6421d7490da0b62291193f4ad4207cb06b180f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd786f5625312c5ec785e873d36899a776d557f5b6fdb0a6776032f30e0552d8 = $this->env->getExtension("native_profiler");
        $__internal_bd786f5625312c5ec785e873d36899a776d557f5b6fdb0a6776032f30e0552d8->enter($__internal_bd786f5625312c5ec785e873d36899a776d557f5b6fdb0a6776032f30e0552d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "WiseProfileBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_bd786f5625312c5ec785e873d36899a776d557f5b6fdb0a6776032f30e0552d8->leave($__internal_bd786f5625312c5ec785e873d36899a776d557f5b6fdb0a6776032f30e0552d8_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:ChangePassword:changePassword.html.twig";
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
