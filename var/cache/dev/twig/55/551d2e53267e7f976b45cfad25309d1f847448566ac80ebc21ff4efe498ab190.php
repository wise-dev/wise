<?php

/* @WiseProfile/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_4df4f2f14fc133a50974e5c65ed3df6911c56c20e2865c6e25f6346f97864d8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@WiseProfile/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_46fcd8e8c4b5de54cdeea8f253f62bda69f3affbc753b98ce3c1436fcb22037c = $this->env->getExtension("native_profiler");
        $__internal_46fcd8e8c4b5de54cdeea8f253f62bda69f3affbc753b98ce3c1436fcb22037c->enter($__internal_46fcd8e8c4b5de54cdeea8f253f62bda69f3affbc753b98ce3c1436fcb22037c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46fcd8e8c4b5de54cdeea8f253f62bda69f3affbc753b98ce3c1436fcb22037c->leave($__internal_46fcd8e8c4b5de54cdeea8f253f62bda69f3affbc753b98ce3c1436fcb22037c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f646c265ad3836f2acaa11a9ca0fef98645af291021896c88f414bafa3822463 = $this->env->getExtension("native_profiler");
        $__internal_f646c265ad3836f2acaa11a9ca0fef98645af291021896c88f414bafa3822463->enter($__internal_f646c265ad3836f2acaa11a9ca0fef98645af291021896c88f414bafa3822463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f646c265ad3836f2acaa11a9ca0fef98645af291021896c88f414bafa3822463->leave($__internal_f646c265ad3836f2acaa11a9ca0fef98645af291021896c88f414bafa3822463_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
