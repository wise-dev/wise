<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_587b328458685f28bc7e39c19b8ae32ab94cf382df308634d841b74256a34a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_0336a74a437f978d5fafbe140c3c206aa37570703af41b426d3f6db7529874e8 = $this->env->getExtension("native_profiler");
        $__internal_0336a74a437f978d5fafbe140c3c206aa37570703af41b426d3f6db7529874e8->enter($__internal_0336a74a437f978d5fafbe140c3c206aa37570703af41b426d3f6db7529874e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0336a74a437f978d5fafbe140c3c206aa37570703af41b426d3f6db7529874e8->leave($__internal_0336a74a437f978d5fafbe140c3c206aa37570703af41b426d3f6db7529874e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35162e1482ddc5cdc18396f4fedea324e01a62173af23b0e8123925b1703f651 = $this->env->getExtension("native_profiler");
        $__internal_35162e1482ddc5cdc18396f4fedea324e01a62173af23b0e8123925b1703f651->enter($__internal_35162e1482ddc5cdc18396f4fedea324e01a62173af23b0e8123925b1703f651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_35162e1482ddc5cdc18396f4fedea324e01a62173af23b0e8123925b1703f651->leave($__internal_35162e1482ddc5cdc18396f4fedea324e01a62173af23b0e8123925b1703f651_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
