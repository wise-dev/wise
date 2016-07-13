<?php

/* WiseProfileBundle:Resetting:reset.html.twig */
class __TwigTemplate_6176bb13041d199ca61557a84f7794f4ddbb7679618be8933f2b508d76944821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "WiseProfileBundle:Resetting:reset.html.twig", 1);
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
        $__internal_4b1606e01e4b8d953293f588c29ca9fee030e1cb163ddd61bd0564d20368a269 = $this->env->getExtension("native_profiler");
        $__internal_4b1606e01e4b8d953293f588c29ca9fee030e1cb163ddd61bd0564d20368a269->enter($__internal_4b1606e01e4b8d953293f588c29ca9fee030e1cb163ddd61bd0564d20368a269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b1606e01e4b8d953293f588c29ca9fee030e1cb163ddd61bd0564d20368a269->leave($__internal_4b1606e01e4b8d953293f588c29ca9fee030e1cb163ddd61bd0564d20368a269_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_beb2c049a78760b3866c7614c4635a2abf611817c19e3c48e635bd82e89d0db7 = $this->env->getExtension("native_profiler");
        $__internal_beb2c049a78760b3866c7614c4635a2abf611817c19e3c48e635bd82e89d0db7->enter($__internal_beb2c049a78760b3866c7614c4635a2abf611817c19e3c48e635bd82e89d0db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "WiseProfileBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_beb2c049a78760b3866c7614c4635a2abf611817c19e3c48e635bd82e89d0db7->leave($__internal_beb2c049a78760b3866c7614c4635a2abf611817c19e3c48e635bd82e89d0db7_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
