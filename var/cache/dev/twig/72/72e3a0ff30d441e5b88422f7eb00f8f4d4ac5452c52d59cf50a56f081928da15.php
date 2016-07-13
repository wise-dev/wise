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
        $__internal_29d4d19502b6af4d725ed37a7f4331ca9a4a1ef947009557cdab3e29fc489079 = $this->env->getExtension("native_profiler");
        $__internal_29d4d19502b6af4d725ed37a7f4331ca9a4a1ef947009557cdab3e29fc489079->enter($__internal_29d4d19502b6af4d725ed37a7f4331ca9a4a1ef947009557cdab3e29fc489079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29d4d19502b6af4d725ed37a7f4331ca9a4a1ef947009557cdab3e29fc489079->leave($__internal_29d4d19502b6af4d725ed37a7f4331ca9a4a1ef947009557cdab3e29fc489079_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75eef5954ce49167eb8657eed86eecdf5e0ed644958bf442c03e78d59aa8608d = $this->env->getExtension("native_profiler");
        $__internal_75eef5954ce49167eb8657eed86eecdf5e0ed644958bf442c03e78d59aa8608d->enter($__internal_75eef5954ce49167eb8657eed86eecdf5e0ed644958bf442c03e78d59aa8608d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_75eef5954ce49167eb8657eed86eecdf5e0ed644958bf442c03e78d59aa8608d->leave($__internal_75eef5954ce49167eb8657eed86eecdf5e0ed644958bf442c03e78d59aa8608d_prof);

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
