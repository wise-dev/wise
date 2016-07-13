<?php

/* WiseProfileBundle:Registration:register.html.twig */
class __TwigTemplate_d5d9d70ebc55923b46c64f105fd882ae5bf8e1c8964a05353d45b60aa2977aed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "WiseProfileBundle:Registration:register.html.twig", 1);
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
        $__internal_095bfee5edf4d8364243c8c29d7c74b94796c7684ca0a1aae9a92314898164b2 = $this->env->getExtension("native_profiler");
        $__internal_095bfee5edf4d8364243c8c29d7c74b94796c7684ca0a1aae9a92314898164b2->enter($__internal_095bfee5edf4d8364243c8c29d7c74b94796c7684ca0a1aae9a92314898164b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_095bfee5edf4d8364243c8c29d7c74b94796c7684ca0a1aae9a92314898164b2->leave($__internal_095bfee5edf4d8364243c8c29d7c74b94796c7684ca0a1aae9a92314898164b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_121041f5402e4cd5e5916e03be5c9752ea459e2a5085ac8d4f13860b0ab198af = $this->env->getExtension("native_profiler");
        $__internal_121041f5402e4cd5e5916e03be5c9752ea459e2a5085ac8d4f13860b0ab198af->enter($__internal_121041f5402e4cd5e5916e03be5c9752ea459e2a5085ac8d4f13860b0ab198af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "WiseProfileBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_121041f5402e4cd5e5916e03be5c9752ea459e2a5085ac8d4f13860b0ab198af->leave($__internal_121041f5402e4cd5e5916e03be5c9752ea459e2a5085ac8d4f13860b0ab198af_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:Registration:register.html.twig";
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
