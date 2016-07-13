<?php

/* WiseProfileBundle:Group:list.html.twig */
class __TwigTemplate_dc48470524fa1ba826c50dd158a1aedb9f78fc132986564b4731fb27bd633703 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "WiseProfileBundle:Group:list.html.twig", 1);
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
        $__internal_8aaf69763f95424aa432011434ce95cea557f36b83120ae5cc415d9f560edef6 = $this->env->getExtension("native_profiler");
        $__internal_8aaf69763f95424aa432011434ce95cea557f36b83120ae5cc415d9f560edef6->enter($__internal_8aaf69763f95424aa432011434ce95cea557f36b83120ae5cc415d9f560edef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aaf69763f95424aa432011434ce95cea557f36b83120ae5cc415d9f560edef6->leave($__internal_8aaf69763f95424aa432011434ce95cea557f36b83120ae5cc415d9f560edef6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88bc4b4f368138cfc81f8d5061727ca8daeab3418da68160474f848cf0637ce5 = $this->env->getExtension("native_profiler");
        $__internal_88bc4b4f368138cfc81f8d5061727ca8daeab3418da68160474f848cf0637ce5->enter($__internal_88bc4b4f368138cfc81f8d5061727ca8daeab3418da68160474f848cf0637ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "WiseProfileBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_88bc4b4f368138cfc81f8d5061727ca8daeab3418da68160474f848cf0637ce5->leave($__internal_88bc4b4f368138cfc81f8d5061727ca8daeab3418da68160474f848cf0637ce5_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:Group:list.html.twig";
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
