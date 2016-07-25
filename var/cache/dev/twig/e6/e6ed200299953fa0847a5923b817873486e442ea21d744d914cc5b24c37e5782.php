<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_4e84e32561d1aaa0f4f7408684397f55d6a9d0e5dbc41f4dcea31585422c4e51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_bcc52f1f39827bac240b0b4448e6bd40b5aee07e9e45511003449eec5020599c = $this->env->getExtension("native_profiler");
        $__internal_bcc52f1f39827bac240b0b4448e6bd40b5aee07e9e45511003449eec5020599c->enter($__internal_bcc52f1f39827bac240b0b4448e6bd40b5aee07e9e45511003449eec5020599c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcc52f1f39827bac240b0b4448e6bd40b5aee07e9e45511003449eec5020599c->leave($__internal_bcc52f1f39827bac240b0b4448e6bd40b5aee07e9e45511003449eec5020599c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a4c5033de69a9e6b3d3178e7621c6c47239980ae9e1909bffc1757bde780985 = $this->env->getExtension("native_profiler");
        $__internal_7a4c5033de69a9e6b3d3178e7621c6c47239980ae9e1909bffc1757bde780985->enter($__internal_7a4c5033de69a9e6b3d3178e7621c6c47239980ae9e1909bffc1757bde780985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_7a4c5033de69a9e6b3d3178e7621c6c47239980ae9e1909bffc1757bde780985->leave($__internal_7a4c5033de69a9e6b3d3178e7621c6c47239980ae9e1909bffc1757bde780985_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
