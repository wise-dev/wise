<?php

/* @WiseProfile/Group/new.html.twig */
class __TwigTemplate_9b6e6a45a62550524beb613c7ad22a448b00c93c5df6c4aee7f14ef0f85cee9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@WiseProfile/Group/new.html.twig", 1);
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
        $__internal_dd0cd4f815b342db55fa2b98149d97a8524af663794e78f9453392248e960f11 = $this->env->getExtension("native_profiler");
        $__internal_dd0cd4f815b342db55fa2b98149d97a8524af663794e78f9453392248e960f11->enter($__internal_dd0cd4f815b342db55fa2b98149d97a8524af663794e78f9453392248e960f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd0cd4f815b342db55fa2b98149d97a8524af663794e78f9453392248e960f11->leave($__internal_dd0cd4f815b342db55fa2b98149d97a8524af663794e78f9453392248e960f11_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1dc73c757d6ed3dec69629d902b1e852c8e523e7bdb9a5ef3ad4f83d54221dee = $this->env->getExtension("native_profiler");
        $__internal_1dc73c757d6ed3dec69629d902b1e852c8e523e7bdb9a5ef3ad4f83d54221dee->enter($__internal_1dc73c757d6ed3dec69629d902b1e852c8e523e7bdb9a5ef3ad4f83d54221dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@WiseProfile/Group/new.html.twig", 4)->display($context);
        
        $__internal_1dc73c757d6ed3dec69629d902b1e852c8e523e7bdb9a5ef3ad4f83d54221dee->leave($__internal_1dc73c757d6ed3dec69629d902b1e852c8e523e7bdb9a5ef3ad4f83d54221dee_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
