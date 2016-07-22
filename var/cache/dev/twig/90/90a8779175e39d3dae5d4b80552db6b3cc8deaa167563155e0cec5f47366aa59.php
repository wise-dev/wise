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
        $__internal_f58e03e03e939208d66566907fcefa97d34e5fba28db6f067788dbcbf71b80b5 = $this->env->getExtension("native_profiler");
        $__internal_f58e03e03e939208d66566907fcefa97d34e5fba28db6f067788dbcbf71b80b5->enter($__internal_f58e03e03e939208d66566907fcefa97d34e5fba28db6f067788dbcbf71b80b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f58e03e03e939208d66566907fcefa97d34e5fba28db6f067788dbcbf71b80b5->leave($__internal_f58e03e03e939208d66566907fcefa97d34e5fba28db6f067788dbcbf71b80b5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7de9ff97933be7bc3d8876098aab927bb2a1a35d8d743aa424c6dd725d94b616 = $this->env->getExtension("native_profiler");
        $__internal_7de9ff97933be7bc3d8876098aab927bb2a1a35d8d743aa424c6dd725d94b616->enter($__internal_7de9ff97933be7bc3d8876098aab927bb2a1a35d8d743aa424c6dd725d94b616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7de9ff97933be7bc3d8876098aab927bb2a1a35d8d743aa424c6dd725d94b616->leave($__internal_7de9ff97933be7bc3d8876098aab927bb2a1a35d8d743aa424c6dd725d94b616_prof);

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
