<?php

/* @WiseProfile/Group/list.html.twig */
class __TwigTemplate_8f3e61abeb78a9d35f461dc8fea9dcf62abab136eadf6a105f024682c8fd59e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@WiseProfile/Group/list.html.twig", 1);
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
        $__internal_2a16066f6458db3d9d45c871506cbe1f856e733dfd65a635ab04a652018eb249 = $this->env->getExtension("native_profiler");
        $__internal_2a16066f6458db3d9d45c871506cbe1f856e733dfd65a635ab04a652018eb249->enter($__internal_2a16066f6458db3d9d45c871506cbe1f856e733dfd65a635ab04a652018eb249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a16066f6458db3d9d45c871506cbe1f856e733dfd65a635ab04a652018eb249->leave($__internal_2a16066f6458db3d9d45c871506cbe1f856e733dfd65a635ab04a652018eb249_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a19cadc07a2a2832b3d9c1d353b5bbb3583f24140ae2debc9e96aafeb9e7b64b = $this->env->getExtension("native_profiler");
        $__internal_a19cadc07a2a2832b3d9c1d353b5bbb3583f24140ae2debc9e96aafeb9e7b64b->enter($__internal_a19cadc07a2a2832b3d9c1d353b5bbb3583f24140ae2debc9e96aafeb9e7b64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@WiseProfile/Group/list.html.twig", 4)->display($context);
        
        $__internal_a19cadc07a2a2832b3d9c1d353b5bbb3583f24140ae2debc9e96aafeb9e7b64b->leave($__internal_a19cadc07a2a2832b3d9c1d353b5bbb3583f24140ae2debc9e96aafeb9e7b64b_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Group/list.html.twig";
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
