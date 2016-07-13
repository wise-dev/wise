<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_e6aa8028b98894755f49f72c67c9f53a437170ec0b4492bacf70b727f501f607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_b83efad185f630bc0a53f10ba36a2adfbd363431e01fd307474712f625b1282e = $this->env->getExtension("native_profiler");
        $__internal_b83efad185f630bc0a53f10ba36a2adfbd363431e01fd307474712f625b1282e->enter($__internal_b83efad185f630bc0a53f10ba36a2adfbd363431e01fd307474712f625b1282e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b83efad185f630bc0a53f10ba36a2adfbd363431e01fd307474712f625b1282e->leave($__internal_b83efad185f630bc0a53f10ba36a2adfbd363431e01fd307474712f625b1282e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fff651543cb663d75e9c9118ae0af72316eb660cd7a1d51aed02336173ec0b04 = $this->env->getExtension("native_profiler");
        $__internal_fff651543cb663d75e9c9118ae0af72316eb660cd7a1d51aed02336173ec0b04->enter($__internal_fff651543cb663d75e9c9118ae0af72316eb660cd7a1d51aed02336173ec0b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_fff651543cb663d75e9c9118ae0af72316eb660cd7a1d51aed02336173ec0b04->leave($__internal_fff651543cb663d75e9c9118ae0af72316eb660cd7a1d51aed02336173ec0b04_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
