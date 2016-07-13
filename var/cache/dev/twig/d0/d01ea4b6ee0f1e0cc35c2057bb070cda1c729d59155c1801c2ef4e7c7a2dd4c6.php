<?php

/* @WiseProfile/ChangePassword/changePassword.html.twig */
class __TwigTemplate_4179385078ad0f715716d55aa846fdc2735ccacaf6a861ae958340324b842629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@WiseProfile/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_baa27e3da9d48ae2566f418111b83208f14f88bb92c4734a807e2ebe8b9f96a7 = $this->env->getExtension("native_profiler");
        $__internal_baa27e3da9d48ae2566f418111b83208f14f88bb92c4734a807e2ebe8b9f96a7->enter($__internal_baa27e3da9d48ae2566f418111b83208f14f88bb92c4734a807e2ebe8b9f96a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baa27e3da9d48ae2566f418111b83208f14f88bb92c4734a807e2ebe8b9f96a7->leave($__internal_baa27e3da9d48ae2566f418111b83208f14f88bb92c4734a807e2ebe8b9f96a7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e37bb5d81118c36586fa580c400962a97c9762bdfac2956011713a15b216826 = $this->env->getExtension("native_profiler");
        $__internal_5e37bb5d81118c36586fa580c400962a97c9762bdfac2956011713a15b216826->enter($__internal_5e37bb5d81118c36586fa580c400962a97c9762bdfac2956011713a15b216826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@WiseProfile/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_5e37bb5d81118c36586fa580c400962a97c9762bdfac2956011713a15b216826->leave($__internal_5e37bb5d81118c36586fa580c400962a97c9762bdfac2956011713a15b216826_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/ChangePassword/changePassword.html.twig";
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
