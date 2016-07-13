<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9e894837746aa4de31c2cc70cb1f49d2b1f65c3f8ab5b22f030193376dd4ec55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_9e85be52dad448171cbdaf14b244c974f5f1048783b6ed3f0679370fcde56c19 = $this->env->getExtension("native_profiler");
        $__internal_9e85be52dad448171cbdaf14b244c974f5f1048783b6ed3f0679370fcde56c19->enter($__internal_9e85be52dad448171cbdaf14b244c974f5f1048783b6ed3f0679370fcde56c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e85be52dad448171cbdaf14b244c974f5f1048783b6ed3f0679370fcde56c19->leave($__internal_9e85be52dad448171cbdaf14b244c974f5f1048783b6ed3f0679370fcde56c19_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab969c0cf80bd71494b99092a44aa30dc7fbc02b3e276bc50aa59826d60fd673 = $this->env->getExtension("native_profiler");
        $__internal_ab969c0cf80bd71494b99092a44aa30dc7fbc02b3e276bc50aa59826d60fd673->enter($__internal_ab969c0cf80bd71494b99092a44aa30dc7fbc02b3e276bc50aa59826d60fd673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ab969c0cf80bd71494b99092a44aa30dc7fbc02b3e276bc50aa59826d60fd673->leave($__internal_ab969c0cf80bd71494b99092a44aa30dc7fbc02b3e276bc50aa59826d60fd673_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
