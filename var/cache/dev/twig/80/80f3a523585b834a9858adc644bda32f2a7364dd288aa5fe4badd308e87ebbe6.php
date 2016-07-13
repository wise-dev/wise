<?php

/* @WiseProfile/Registration/confirmed.html.twig */
class __TwigTemplate_2a8ca968f4b27c87caf8bde612774b437cc643ca1729587e9e1e0d49a1b39160 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@WiseProfile/Registration/confirmed.html.twig", 1);
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
        $__internal_af8d34b017549f56d6bf75692fc65f6736c64dc7e289cac99f6af774b6f0ba50 = $this->env->getExtension("native_profiler");
        $__internal_af8d34b017549f56d6bf75692fc65f6736c64dc7e289cac99f6af774b6f0ba50->enter($__internal_af8d34b017549f56d6bf75692fc65f6736c64dc7e289cac99f6af774b6f0ba50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af8d34b017549f56d6bf75692fc65f6736c64dc7e289cac99f6af774b6f0ba50->leave($__internal_af8d34b017549f56d6bf75692fc65f6736c64dc7e289cac99f6af774b6f0ba50_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41824a92825d973bdc6bf588c941ec7f348900f1db59f6350fbc285b53fe1ea7 = $this->env->getExtension("native_profiler");
        $__internal_41824a92825d973bdc6bf588c941ec7f348900f1db59f6350fbc285b53fe1ea7->enter($__internal_41824a92825d973bdc6bf588c941ec7f348900f1db59f6350fbc285b53fe1ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_41824a92825d973bdc6bf588c941ec7f348900f1db59f6350fbc285b53fe1ea7->leave($__internal_41824a92825d973bdc6bf588c941ec7f348900f1db59f6350fbc285b53fe1ea7_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
