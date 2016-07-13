<?php

/* WiseProfileBundle:Registration:confirmed.html.twig */
class __TwigTemplate_fdf858484df6fa75b72f642d72918969e9362b72751c65eb4a6273191d814a10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "WiseProfileBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_767a4c2641d4ba09c026c3c77040602a1c7540d4faeafe17a2d66d1fbf536d4d = $this->env->getExtension("native_profiler");
        $__internal_767a4c2641d4ba09c026c3c77040602a1c7540d4faeafe17a2d66d1fbf536d4d->enter($__internal_767a4c2641d4ba09c026c3c77040602a1c7540d4faeafe17a2d66d1fbf536d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_767a4c2641d4ba09c026c3c77040602a1c7540d4faeafe17a2d66d1fbf536d4d->leave($__internal_767a4c2641d4ba09c026c3c77040602a1c7540d4faeafe17a2d66d1fbf536d4d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f2d1564ef9ad7600ab3ebef6b8aaa46e68e96563e6271d2651e5b20bbe1f00f2 = $this->env->getExtension("native_profiler");
        $__internal_f2d1564ef9ad7600ab3ebef6b8aaa46e68e96563e6271d2651e5b20bbe1f00f2->enter($__internal_f2d1564ef9ad7600ab3ebef6b8aaa46e68e96563e6271d2651e5b20bbe1f00f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_f2d1564ef9ad7600ab3ebef6b8aaa46e68e96563e6271d2651e5b20bbe1f00f2->leave($__internal_f2d1564ef9ad7600ab3ebef6b8aaa46e68e96563e6271d2651e5b20bbe1f00f2_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:Registration:confirmed.html.twig";
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
