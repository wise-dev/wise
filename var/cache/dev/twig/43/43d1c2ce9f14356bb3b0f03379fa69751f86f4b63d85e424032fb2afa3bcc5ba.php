<?php

/* @WiseProfile/Group/show.html.twig */
class __TwigTemplate_de394b541cf9fd0026d4f0ebdb5775ceb760b9a870e0ee25354326ada082100e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@WiseProfile/Group/show.html.twig", 1);
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
        $__internal_d2863433197d5560d6077ad75cf4d0aa659860c58547ae02f0ab5c07deffc020 = $this->env->getExtension("native_profiler");
        $__internal_d2863433197d5560d6077ad75cf4d0aa659860c58547ae02f0ab5c07deffc020->enter($__internal_d2863433197d5560d6077ad75cf4d0aa659860c58547ae02f0ab5c07deffc020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2863433197d5560d6077ad75cf4d0aa659860c58547ae02f0ab5c07deffc020->leave($__internal_d2863433197d5560d6077ad75cf4d0aa659860c58547ae02f0ab5c07deffc020_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa0d8e187d6726491c7bc62ed1029d20bd49be1d168b948398928fbfe8fec4bd = $this->env->getExtension("native_profiler");
        $__internal_fa0d8e187d6726491c7bc62ed1029d20bd49be1d168b948398928fbfe8fec4bd->enter($__internal_fa0d8e187d6726491c7bc62ed1029d20bd49be1d168b948398928fbfe8fec4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@WiseProfile/Group/show.html.twig", 4)->display($context);
        
        $__internal_fa0d8e187d6726491c7bc62ed1029d20bd49be1d168b948398928fbfe8fec4bd->leave($__internal_fa0d8e187d6726491c7bc62ed1029d20bd49be1d168b948398928fbfe8fec4bd_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Group/show.html.twig";
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
