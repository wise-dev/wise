<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_ffb603135d90361452e64ecc90fd7cd1c29cc48e5193b95a6298c7c6d27be9db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_1a051d44e376dcb540eafcf999d856d7d83505d6d2d89cb9f1e89a60c360e316 = $this->env->getExtension("native_profiler");
        $__internal_1a051d44e376dcb540eafcf999d856d7d83505d6d2d89cb9f1e89a60c360e316->enter($__internal_1a051d44e376dcb540eafcf999d856d7d83505d6d2d89cb9f1e89a60c360e316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a051d44e376dcb540eafcf999d856d7d83505d6d2d89cb9f1e89a60c360e316->leave($__internal_1a051d44e376dcb540eafcf999d856d7d83505d6d2d89cb9f1e89a60c360e316_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_302e6b9bd5daec1c9495bed5b1fca587d8745cd0435db04473119861528d8739 = $this->env->getExtension("native_profiler");
        $__internal_302e6b9bd5daec1c9495bed5b1fca587d8745cd0435db04473119861528d8739->enter($__internal_302e6b9bd5daec1c9495bed5b1fca587d8745cd0435db04473119861528d8739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_302e6b9bd5daec1c9495bed5b1fca587d8745cd0435db04473119861528d8739->leave($__internal_302e6b9bd5daec1c9495bed5b1fca587d8745cd0435db04473119861528d8739_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
