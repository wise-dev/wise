<?php

/* WiseProfileBundle:Group:show.html.twig */
class __TwigTemplate_a863919d24877f8a9014c1292c56918601556c62e70b89ab65d09c7f46d466c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "WiseProfileBundle:Group:show.html.twig", 1);
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
        $__internal_c89393cf1d8032ff8f28b8b70a532c756420b27b57e2675449718bffee42b311 = $this->env->getExtension("native_profiler");
        $__internal_c89393cf1d8032ff8f28b8b70a532c756420b27b57e2675449718bffee42b311->enter($__internal_c89393cf1d8032ff8f28b8b70a532c756420b27b57e2675449718bffee42b311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c89393cf1d8032ff8f28b8b70a532c756420b27b57e2675449718bffee42b311->leave($__internal_c89393cf1d8032ff8f28b8b70a532c756420b27b57e2675449718bffee42b311_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82d58c5d2caf0148a623b053dea3ff9f550f1aa82c8a5eaf9626e02ac82c0bb5 = $this->env->getExtension("native_profiler");
        $__internal_82d58c5d2caf0148a623b053dea3ff9f550f1aa82c8a5eaf9626e02ac82c0bb5->enter($__internal_82d58c5d2caf0148a623b053dea3ff9f550f1aa82c8a5eaf9626e02ac82c0bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "WiseProfileBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_82d58c5d2caf0148a623b053dea3ff9f550f1aa82c8a5eaf9626e02ac82c0bb5->leave($__internal_82d58c5d2caf0148a623b053dea3ff9f550f1aa82c8a5eaf9626e02ac82c0bb5_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
