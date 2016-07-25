<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_3d00c8395849be695a18bb804032fc36562f5d921102d9b77a95ad80785f5bc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_56c2fae4d80e1ae05b196b8e1d47a91687d138fb6eaba8be77c4478989473eca = $this->env->getExtension("native_profiler");
        $__internal_56c2fae4d80e1ae05b196b8e1d47a91687d138fb6eaba8be77c4478989473eca->enter($__internal_56c2fae4d80e1ae05b196b8e1d47a91687d138fb6eaba8be77c4478989473eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56c2fae4d80e1ae05b196b8e1d47a91687d138fb6eaba8be77c4478989473eca->leave($__internal_56c2fae4d80e1ae05b196b8e1d47a91687d138fb6eaba8be77c4478989473eca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbed12280a5091436c1c9e48213c3766f95757941b460f86f5508269ebddd6c2 = $this->env->getExtension("native_profiler");
        $__internal_dbed12280a5091436c1c9e48213c3766f95757941b460f86f5508269ebddd6c2->enter($__internal_dbed12280a5091436c1c9e48213c3766f95757941b460f86f5508269ebddd6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_dbed12280a5091436c1c9e48213c3766f95757941b460f86f5508269ebddd6c2->leave($__internal_dbed12280a5091436c1c9e48213c3766f95757941b460f86f5508269ebddd6c2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
