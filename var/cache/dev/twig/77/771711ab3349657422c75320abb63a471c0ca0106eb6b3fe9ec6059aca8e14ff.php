<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_2d2fb80862ac0c7477d69609fe6e2dda5f27266d9f8cacfe900c72b352741dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_75421e76bd08c793c569321dd79e0a6108a9780f25760a48f9d12037408f09c1 = $this->env->getExtension("native_profiler");
        $__internal_75421e76bd08c793c569321dd79e0a6108a9780f25760a48f9d12037408f09c1->enter($__internal_75421e76bd08c793c569321dd79e0a6108a9780f25760a48f9d12037408f09c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75421e76bd08c793c569321dd79e0a6108a9780f25760a48f9d12037408f09c1->leave($__internal_75421e76bd08c793c569321dd79e0a6108a9780f25760a48f9d12037408f09c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a2265ee6773a603edb6764ae97f406e50c5b6a6c9267cc2281fd020ab4823dd = $this->env->getExtension("native_profiler");
        $__internal_7a2265ee6773a603edb6764ae97f406e50c5b6a6c9267cc2281fd020ab4823dd->enter($__internal_7a2265ee6773a603edb6764ae97f406e50c5b6a6c9267cc2281fd020ab4823dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_7a2265ee6773a603edb6764ae97f406e50c5b6a6c9267cc2281fd020ab4823dd->leave($__internal_7a2265ee6773a603edb6764ae97f406e50c5b6a6c9267cc2281fd020ab4823dd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
