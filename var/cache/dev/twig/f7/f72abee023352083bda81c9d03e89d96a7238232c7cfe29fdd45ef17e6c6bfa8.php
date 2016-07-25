<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_1c4b356bc7318828d2269a9d150a3939eb3dc440912913ef93b9d160b14b9119 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_8b5b0cadde9fd450ce54ad6ae12308f51d8635f422e2853dd2fc50beeb1f8cfe = $this->env->getExtension("native_profiler");
        $__internal_8b5b0cadde9fd450ce54ad6ae12308f51d8635f422e2853dd2fc50beeb1f8cfe->enter($__internal_8b5b0cadde9fd450ce54ad6ae12308f51d8635f422e2853dd2fc50beeb1f8cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b5b0cadde9fd450ce54ad6ae12308f51d8635f422e2853dd2fc50beeb1f8cfe->leave($__internal_8b5b0cadde9fd450ce54ad6ae12308f51d8635f422e2853dd2fc50beeb1f8cfe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8acacfb104aecb60cea2d97eae284d0e7499f9bfd13b7b5714f7f89669f6fd1 = $this->env->getExtension("native_profiler");
        $__internal_e8acacfb104aecb60cea2d97eae284d0e7499f9bfd13b7b5714f7f89669f6fd1->enter($__internal_e8acacfb104aecb60cea2d97eae284d0e7499f9bfd13b7b5714f7f89669f6fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_e8acacfb104aecb60cea2d97eae284d0e7499f9bfd13b7b5714f7f89669f6fd1->leave($__internal_e8acacfb104aecb60cea2d97eae284d0e7499f9bfd13b7b5714f7f89669f6fd1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
