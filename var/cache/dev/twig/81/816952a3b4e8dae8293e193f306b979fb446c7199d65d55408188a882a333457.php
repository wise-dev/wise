<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_269a42d1ec2c05d4bf8ffa3c8ad7ce1b1ef3563d669146d6c2acf097005c3df0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_c48f5c3ac2a9bfe025d85543e8749ee698f0cd7a85f34efa605e28e0eb1082fc = $this->env->getExtension("native_profiler");
        $__internal_c48f5c3ac2a9bfe025d85543e8749ee698f0cd7a85f34efa605e28e0eb1082fc->enter($__internal_c48f5c3ac2a9bfe025d85543e8749ee698f0cd7a85f34efa605e28e0eb1082fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c48f5c3ac2a9bfe025d85543e8749ee698f0cd7a85f34efa605e28e0eb1082fc->leave($__internal_c48f5c3ac2a9bfe025d85543e8749ee698f0cd7a85f34efa605e28e0eb1082fc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3af05458f2b98fc4ff09e0751ee1e0a45a2ed684b171c9099be1f5fdb4569856 = $this->env->getExtension("native_profiler");
        $__internal_3af05458f2b98fc4ff09e0751ee1e0a45a2ed684b171c9099be1f5fdb4569856->enter($__internal_3af05458f2b98fc4ff09e0751ee1e0a45a2ed684b171c9099be1f5fdb4569856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_3af05458f2b98fc4ff09e0751ee1e0a45a2ed684b171c9099be1f5fdb4569856->leave($__internal_3af05458f2b98fc4ff09e0751ee1e0a45a2ed684b171c9099be1f5fdb4569856_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
