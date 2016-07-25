<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_89feef38863d62abc76c12aa3ee680980379ba7ab1d752579ad48034efc0d7d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_4cb69df20dcd22867413822d50dcad45cec17d2f82245d49092709822eb7062e = $this->env->getExtension("native_profiler");
        $__internal_4cb69df20dcd22867413822d50dcad45cec17d2f82245d49092709822eb7062e->enter($__internal_4cb69df20dcd22867413822d50dcad45cec17d2f82245d49092709822eb7062e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cb69df20dcd22867413822d50dcad45cec17d2f82245d49092709822eb7062e->leave($__internal_4cb69df20dcd22867413822d50dcad45cec17d2f82245d49092709822eb7062e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff5b9e015af85e6184ea989dd849d6e6d775c889fa2eb81207b802dbb8247072 = $this->env->getExtension("native_profiler");
        $__internal_ff5b9e015af85e6184ea989dd849d6e6d775c889fa2eb81207b802dbb8247072->enter($__internal_ff5b9e015af85e6184ea989dd849d6e6d775c889fa2eb81207b802dbb8247072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_ff5b9e015af85e6184ea989dd849d6e6d775c889fa2eb81207b802dbb8247072->leave($__internal_ff5b9e015af85e6184ea989dd849d6e6d775c889fa2eb81207b802dbb8247072_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
