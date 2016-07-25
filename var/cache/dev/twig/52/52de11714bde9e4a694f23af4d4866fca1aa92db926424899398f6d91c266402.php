<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_ffb603135d90361452e64ecc90fd7cd1c29cc48e5193b95a6298c7c6d27be9db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_c90abb614f9834ace66289c689d654b2bde63f0e2335c8fb57510b0b10e6a425 = $this->env->getExtension("native_profiler");
        $__internal_c90abb614f9834ace66289c689d654b2bde63f0e2335c8fb57510b0b10e6a425->enter($__internal_c90abb614f9834ace66289c689d654b2bde63f0e2335c8fb57510b0b10e6a425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c90abb614f9834ace66289c689d654b2bde63f0e2335c8fb57510b0b10e6a425->leave($__internal_c90abb614f9834ace66289c689d654b2bde63f0e2335c8fb57510b0b10e6a425_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7a0e6042ed57a99f965d9f580ac81d3a4c38685029a5442e95400532a4a19ec = $this->env->getExtension("native_profiler");
        $__internal_c7a0e6042ed57a99f965d9f580ac81d3a4c38685029a5442e95400532a4a19ec->enter($__internal_c7a0e6042ed57a99f965d9f580ac81d3a4c38685029a5442e95400532a4a19ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_c7a0e6042ed57a99f965d9f580ac81d3a4c38685029a5442e95400532a4a19ec->leave($__internal_c7a0e6042ed57a99f965d9f580ac81d3a4c38685029a5442e95400532a4a19ec_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
