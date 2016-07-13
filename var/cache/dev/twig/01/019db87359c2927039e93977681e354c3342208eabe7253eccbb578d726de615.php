<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_419a6c1b45fce1c616237bfca370114f4007304fced2f956ea1d0da2cb54804f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_cb7ed6a8ea9922c690a7470c771f1a5f58c7a8ab3dfd84d60438dec90ad772e1 = $this->env->getExtension("native_profiler");
        $__internal_cb7ed6a8ea9922c690a7470c771f1a5f58c7a8ab3dfd84d60438dec90ad772e1->enter($__internal_cb7ed6a8ea9922c690a7470c771f1a5f58c7a8ab3dfd84d60438dec90ad772e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb7ed6a8ea9922c690a7470c771f1a5f58c7a8ab3dfd84d60438dec90ad772e1->leave($__internal_cb7ed6a8ea9922c690a7470c771f1a5f58c7a8ab3dfd84d60438dec90ad772e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71868f653ea7dae61a6752ffae645ae7d7f8b8a1bee641959a9d5e56f9f80bbc = $this->env->getExtension("native_profiler");
        $__internal_71868f653ea7dae61a6752ffae645ae7d7f8b8a1bee641959a9d5e56f9f80bbc->enter($__internal_71868f653ea7dae61a6752ffae645ae7d7f8b8a1bee641959a9d5e56f9f80bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_71868f653ea7dae61a6752ffae645ae7d7f8b8a1bee641959a9d5e56f9f80bbc->leave($__internal_71868f653ea7dae61a6752ffae645ae7d7f8b8a1bee641959a9d5e56f9f80bbc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
