<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_419a6c1b45fce1c616237bfca370114f4007304fced2f956ea1d0da2cb54804f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_dde6c8dbb003700513b2730f9d6182f7b0642d2bfc35d03edc6a5fc205a8563f = $this->env->getExtension("native_profiler");
        $__internal_dde6c8dbb003700513b2730f9d6182f7b0642d2bfc35d03edc6a5fc205a8563f->enter($__internal_dde6c8dbb003700513b2730f9d6182f7b0642d2bfc35d03edc6a5fc205a8563f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dde6c8dbb003700513b2730f9d6182f7b0642d2bfc35d03edc6a5fc205a8563f->leave($__internal_dde6c8dbb003700513b2730f9d6182f7b0642d2bfc35d03edc6a5fc205a8563f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5da87b06444af7e5aefc4506c4756deeca8bae3c1581dc1c961654644f20fd04 = $this->env->getExtension("native_profiler");
        $__internal_5da87b06444af7e5aefc4506c4756deeca8bae3c1581dc1c961654644f20fd04->enter($__internal_5da87b06444af7e5aefc4506c4756deeca8bae3c1581dc1c961654644f20fd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_5da87b06444af7e5aefc4506c4756deeca8bae3c1581dc1c961654644f20fd04->leave($__internal_5da87b06444af7e5aefc4506c4756deeca8bae3c1581dc1c961654644f20fd04_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
