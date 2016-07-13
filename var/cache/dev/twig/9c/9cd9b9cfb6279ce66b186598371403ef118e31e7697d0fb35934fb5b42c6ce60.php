<?php

/* WiseProfileBundle:Group:new.html.twig */
class __TwigTemplate_a70273945d78921acefb0d952298085fca87c5a95f58c7d09df345c778e2c234 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "WiseProfileBundle:Group:new.html.twig", 1);
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
        $__internal_430ede5d4438e7b53e1f5a20c3b7c3ad24c57579f4dbc0ba329a4e9c27f449a8 = $this->env->getExtension("native_profiler");
        $__internal_430ede5d4438e7b53e1f5a20c3b7c3ad24c57579f4dbc0ba329a4e9c27f449a8->enter($__internal_430ede5d4438e7b53e1f5a20c3b7c3ad24c57579f4dbc0ba329a4e9c27f449a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_430ede5d4438e7b53e1f5a20c3b7c3ad24c57579f4dbc0ba329a4e9c27f449a8->leave($__internal_430ede5d4438e7b53e1f5a20c3b7c3ad24c57579f4dbc0ba329a4e9c27f449a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c7ac74dc753d4165de7b13ada06df82960257e9fafa5a7ca7c54a23cc464cbf = $this->env->getExtension("native_profiler");
        $__internal_6c7ac74dc753d4165de7b13ada06df82960257e9fafa5a7ca7c54a23cc464cbf->enter($__internal_6c7ac74dc753d4165de7b13ada06df82960257e9fafa5a7ca7c54a23cc464cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "WiseProfileBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_6c7ac74dc753d4165de7b13ada06df82960257e9fafa5a7ca7c54a23cc464cbf->leave($__internal_6c7ac74dc753d4165de7b13ada06df82960257e9fafa5a7ca7c54a23cc464cbf_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:Group:new.html.twig";
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
