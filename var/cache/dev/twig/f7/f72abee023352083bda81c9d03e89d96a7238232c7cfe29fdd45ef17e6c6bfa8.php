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
        $__internal_9afa59ad18200080c23748407e861148677a3355450f7308123404506a7b42fb = $this->env->getExtension("native_profiler");
        $__internal_9afa59ad18200080c23748407e861148677a3355450f7308123404506a7b42fb->enter($__internal_9afa59ad18200080c23748407e861148677a3355450f7308123404506a7b42fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9afa59ad18200080c23748407e861148677a3355450f7308123404506a7b42fb->leave($__internal_9afa59ad18200080c23748407e861148677a3355450f7308123404506a7b42fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f5a373f1ec8bb1ded04ba20db413d64c13550e7f2c6f3300539fd0ecd669dce = $this->env->getExtension("native_profiler");
        $__internal_6f5a373f1ec8bb1ded04ba20db413d64c13550e7f2c6f3300539fd0ecd669dce->enter($__internal_6f5a373f1ec8bb1ded04ba20db413d64c13550e7f2c6f3300539fd0ecd669dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_6f5a373f1ec8bb1ded04ba20db413d64c13550e7f2c6f3300539fd0ecd669dce->leave($__internal_6f5a373f1ec8bb1ded04ba20db413d64c13550e7f2c6f3300539fd0ecd669dce_prof);

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
