<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_8424e991597bb65c6beefe25bcabbebaaf5c46f18a809cea861c6c473adb4edf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_2a8a8dad47de0dc9dd73599e572c9477d8dea74f3d6678455a4f6204e77c8cf8 = $this->env->getExtension("native_profiler");
        $__internal_2a8a8dad47de0dc9dd73599e572c9477d8dea74f3d6678455a4f6204e77c8cf8->enter($__internal_2a8a8dad47de0dc9dd73599e572c9477d8dea74f3d6678455a4f6204e77c8cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a8a8dad47de0dc9dd73599e572c9477d8dea74f3d6678455a4f6204e77c8cf8->leave($__internal_2a8a8dad47de0dc9dd73599e572c9477d8dea74f3d6678455a4f6204e77c8cf8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e3567d89839a7b7d1eeae669aafcd807a1a4f81611f2ab5c8e78e91e6f53ca9 = $this->env->getExtension("native_profiler");
        $__internal_1e3567d89839a7b7d1eeae669aafcd807a1a4f81611f2ab5c8e78e91e6f53ca9->enter($__internal_1e3567d89839a7b7d1eeae669aafcd807a1a4f81611f2ab5c8e78e91e6f53ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_1e3567d89839a7b7d1eeae669aafcd807a1a4f81611f2ab5c8e78e91e6f53ca9->leave($__internal_1e3567d89839a7b7d1eeae669aafcd807a1a4f81611f2ab5c8e78e91e6f53ca9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
