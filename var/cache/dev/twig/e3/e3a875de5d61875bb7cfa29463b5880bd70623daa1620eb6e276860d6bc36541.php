<?php

/* WiseProfileBundle:Resetting:request.html.twig */
class __TwigTemplate_2d84d5cf4f1d2e10e20baac4a4912637bc66c55ff41f0b8fdefd1573eeebfa55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "WiseProfileBundle:Resetting:request.html.twig", 1);
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
        $__internal_53f7f93c10db92f228d8c81ad2ed67ca2964991da9254bea1a628f6a58696ba6 = $this->env->getExtension("native_profiler");
        $__internal_53f7f93c10db92f228d8c81ad2ed67ca2964991da9254bea1a628f6a58696ba6->enter($__internal_53f7f93c10db92f228d8c81ad2ed67ca2964991da9254bea1a628f6a58696ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53f7f93c10db92f228d8c81ad2ed67ca2964991da9254bea1a628f6a58696ba6->leave($__internal_53f7f93c10db92f228d8c81ad2ed67ca2964991da9254bea1a628f6a58696ba6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab540dbf05a6058d738c972f8b89d386bed59365092147a2b4f66631448e8b86 = $this->env->getExtension("native_profiler");
        $__internal_ab540dbf05a6058d738c972f8b89d386bed59365092147a2b4f66631448e8b86->enter($__internal_ab540dbf05a6058d738c972f8b89d386bed59365092147a2b4f66631448e8b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "WiseProfileBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ab540dbf05a6058d738c972f8b89d386bed59365092147a2b4f66631448e8b86->leave($__internal_ab540dbf05a6058d738c972f8b89d386bed59365092147a2b4f66631448e8b86_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:Resetting:request.html.twig";
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
