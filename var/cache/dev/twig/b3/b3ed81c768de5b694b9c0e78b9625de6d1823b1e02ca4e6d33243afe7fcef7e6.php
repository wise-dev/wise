<?php

/* @WiseProfile/Registration/register.html.twig */
class __TwigTemplate_279a3c388a94504bb2e1ca0e97d1c73532edaab7b029cc270fe8665337a197e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@WiseProfile/Registration/register.html.twig", 1);
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
        $__internal_080f1e9679de20693f614fbac213cd62d8b000e9368f13c8c596b9ad8b881747 = $this->env->getExtension("native_profiler");
        $__internal_080f1e9679de20693f614fbac213cd62d8b000e9368f13c8c596b9ad8b881747->enter($__internal_080f1e9679de20693f614fbac213cd62d8b000e9368f13c8c596b9ad8b881747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_080f1e9679de20693f614fbac213cd62d8b000e9368f13c8c596b9ad8b881747->leave($__internal_080f1e9679de20693f614fbac213cd62d8b000e9368f13c8c596b9ad8b881747_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c60d836c08944a07dedcee43b1a298bb73cc9ed4501126967f322b85bbb75844 = $this->env->getExtension("native_profiler");
        $__internal_c60d836c08944a07dedcee43b1a298bb73cc9ed4501126967f322b85bbb75844->enter($__internal_c60d836c08944a07dedcee43b1a298bb73cc9ed4501126967f322b85bbb75844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@WiseProfile/Registration/register.html.twig", 4)->display($context);
        
        $__internal_c60d836c08944a07dedcee43b1a298bb73cc9ed4501126967f322b85bbb75844->leave($__internal_c60d836c08944a07dedcee43b1a298bb73cc9ed4501126967f322b85bbb75844_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
