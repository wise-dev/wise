<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_4016169b2ee9399fb35f99731e2cf0988eb5da6c400064210066397cfe34f571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_92d37984b96ffe8b092d5fc1bcdaa69f4c9c8f0d41fb86403718a0a5e200c771 = $this->env->getExtension("native_profiler");
        $__internal_92d37984b96ffe8b092d5fc1bcdaa69f4c9c8f0d41fb86403718a0a5e200c771->enter($__internal_92d37984b96ffe8b092d5fc1bcdaa69f4c9c8f0d41fb86403718a0a5e200c771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92d37984b96ffe8b092d5fc1bcdaa69f4c9c8f0d41fb86403718a0a5e200c771->leave($__internal_92d37984b96ffe8b092d5fc1bcdaa69f4c9c8f0d41fb86403718a0a5e200c771_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a20ac169c35700eab586aae4628bbf48ec6ff6ec7b3d1901ed4fe39d4a3d397 = $this->env->getExtension("native_profiler");
        $__internal_8a20ac169c35700eab586aae4628bbf48ec6ff6ec7b3d1901ed4fe39d4a3d397->enter($__internal_8a20ac169c35700eab586aae4628bbf48ec6ff6ec7b3d1901ed4fe39d4a3d397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_8a20ac169c35700eab586aae4628bbf48ec6ff6ec7b3d1901ed4fe39d4a3d397->leave($__internal_8a20ac169c35700eab586aae4628bbf48ec6ff6ec7b3d1901ed4fe39d4a3d397_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
