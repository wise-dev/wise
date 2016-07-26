<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_1c4b356bc7318828d2269a9d150a3939eb3dc440912913ef93b9d160b14b9119 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_605780131cd4f360997945db3757efc63535168e56794e5a6dda509399e76bb8 = $this->env->getExtension("native_profiler");
        $__internal_605780131cd4f360997945db3757efc63535168e56794e5a6dda509399e76bb8->enter($__internal_605780131cd4f360997945db3757efc63535168e56794e5a6dda509399e76bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_605780131cd4f360997945db3757efc63535168e56794e5a6dda509399e76bb8->leave($__internal_605780131cd4f360997945db3757efc63535168e56794e5a6dda509399e76bb8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_83620467a2c292c0447ac48d260a61b2922df9be2adbf6f1854c880f609fe1e9 = $this->env->getExtension("native_profiler");
        $__internal_83620467a2c292c0447ac48d260a61b2922df9be2adbf6f1854c880f609fe1e9->enter($__internal_83620467a2c292c0447ac48d260a61b2922df9be2adbf6f1854c880f609fe1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_83620467a2c292c0447ac48d260a61b2922df9be2adbf6f1854c880f609fe1e9->leave($__internal_83620467a2c292c0447ac48d260a61b2922df9be2adbf6f1854c880f609fe1e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
