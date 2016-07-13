<?php

/* WiseProfileBundle:Profile:edit.html.twig */
class __TwigTemplate_cfc0fc8cc78dbd02c548d2e0f17633df09f2266473951abcc0768146d151b17f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "WiseProfileBundle:Profile:edit.html.twig", 1);
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
        $__internal_3d4764b64dc0ba67a9ebb0e889a21756d9d2a229e32108e4595841ecc02593a7 = $this->env->getExtension("native_profiler");
        $__internal_3d4764b64dc0ba67a9ebb0e889a21756d9d2a229e32108e4595841ecc02593a7->enter($__internal_3d4764b64dc0ba67a9ebb0e889a21756d9d2a229e32108e4595841ecc02593a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d4764b64dc0ba67a9ebb0e889a21756d9d2a229e32108e4595841ecc02593a7->leave($__internal_3d4764b64dc0ba67a9ebb0e889a21756d9d2a229e32108e4595841ecc02593a7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a76640d901687a3e67f5aa3b562d93d5cea532aaa49542d0b540679e086ce849 = $this->env->getExtension("native_profiler");
        $__internal_a76640d901687a3e67f5aa3b562d93d5cea532aaa49542d0b540679e086ce849->enter($__internal_a76640d901687a3e67f5aa3b562d93d5cea532aaa49542d0b540679e086ce849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "WiseProfileBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_a76640d901687a3e67f5aa3b562d93d5cea532aaa49542d0b540679e086ce849->leave($__internal_a76640d901687a3e67f5aa3b562d93d5cea532aaa49542d0b540679e086ce849_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:Profile:edit.html.twig";
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
