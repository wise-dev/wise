<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_9a109f53408c686ca794348c249c18126d19cf4907fe4dbacd1c42c16f76a17f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_f659ee074738f53473377109c73e88d89b1c957c6915621e05fc15706e86771d = $this->env->getExtension("native_profiler");
        $__internal_f659ee074738f53473377109c73e88d89b1c957c6915621e05fc15706e86771d->enter($__internal_f659ee074738f53473377109c73e88d89b1c957c6915621e05fc15706e86771d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f659ee074738f53473377109c73e88d89b1c957c6915621e05fc15706e86771d->leave($__internal_f659ee074738f53473377109c73e88d89b1c957c6915621e05fc15706e86771d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_614bcb46a29718db1f767274dbc198162402585f67edd7cc0dfd7821c3835f29 = $this->env->getExtension("native_profiler");
        $__internal_614bcb46a29718db1f767274dbc198162402585f67edd7cc0dfd7821c3835f29->enter($__internal_614bcb46a29718db1f767274dbc198162402585f67edd7cc0dfd7821c3835f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_614bcb46a29718db1f767274dbc198162402585f67edd7cc0dfd7821c3835f29->leave($__internal_614bcb46a29718db1f767274dbc198162402585f67edd7cc0dfd7821c3835f29_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
