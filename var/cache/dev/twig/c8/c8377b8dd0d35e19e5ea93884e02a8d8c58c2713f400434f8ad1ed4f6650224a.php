<?php

/* @WiseProfile/Resetting/request.html.twig */
class __TwigTemplate_9181e3a2064f71fc88c4aa46424db6c6d31e9f65df181e23d169d4a36089b516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@WiseProfile/Resetting/request.html.twig", 1);
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
        $__internal_40a919a435327110c5e8683e292961886113afb67575598f85714e247b2ff4e5 = $this->env->getExtension("native_profiler");
        $__internal_40a919a435327110c5e8683e292961886113afb67575598f85714e247b2ff4e5->enter($__internal_40a919a435327110c5e8683e292961886113afb67575598f85714e247b2ff4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40a919a435327110c5e8683e292961886113afb67575598f85714e247b2ff4e5->leave($__internal_40a919a435327110c5e8683e292961886113afb67575598f85714e247b2ff4e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7dc14f1af4342d3be06eb9436bf7233d9ff19e49e83088ef5f22666dca1a5f1 = $this->env->getExtension("native_profiler");
        $__internal_f7dc14f1af4342d3be06eb9436bf7233d9ff19e49e83088ef5f22666dca1a5f1->enter($__internal_f7dc14f1af4342d3be06eb9436bf7233d9ff19e49e83088ef5f22666dca1a5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@WiseProfile/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_f7dc14f1af4342d3be06eb9436bf7233d9ff19e49e83088ef5f22666dca1a5f1->leave($__internal_f7dc14f1af4342d3be06eb9436bf7233d9ff19e49e83088ef5f22666dca1a5f1_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
