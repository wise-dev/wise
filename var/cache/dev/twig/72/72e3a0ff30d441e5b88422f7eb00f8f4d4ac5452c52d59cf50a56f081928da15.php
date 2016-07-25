<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_b2d0ff18a3cc176bde6700b12233ae8a4c60a68a5785a20059960fcfe853e29d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_684ddf017b882720fa229e2788d127094e1f215a466e09ee2c932a604272a4c8 = $this->env->getExtension("native_profiler");
        $__internal_684ddf017b882720fa229e2788d127094e1f215a466e09ee2c932a604272a4c8->enter($__internal_684ddf017b882720fa229e2788d127094e1f215a466e09ee2c932a604272a4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_684ddf017b882720fa229e2788d127094e1f215a466e09ee2c932a604272a4c8->leave($__internal_684ddf017b882720fa229e2788d127094e1f215a466e09ee2c932a604272a4c8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c96e03e006f0900c0cd3ba5623ab4a4f21e0ecfd41ad13d58726468ad68252f = $this->env->getExtension("native_profiler");
        $__internal_9c96e03e006f0900c0cd3ba5623ab4a4f21e0ecfd41ad13d58726468ad68252f->enter($__internal_9c96e03e006f0900c0cd3ba5623ab4a4f21e0ecfd41ad13d58726468ad68252f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9c96e03e006f0900c0cd3ba5623ab4a4f21e0ecfd41ad13d58726468ad68252f->leave($__internal_9c96e03e006f0900c0cd3ba5623ab4a4f21e0ecfd41ad13d58726468ad68252f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
