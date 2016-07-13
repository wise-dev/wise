<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_77be2df1d29bc4ce5d5e7a6895d061c4a725f4e74f86f8fb7c94911697c1f5ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_830d4dcdafe756c53f9bd9426e9d58d131791d19a056eb62a261e7987000bedb = $this->env->getExtension("native_profiler");
        $__internal_830d4dcdafe756c53f9bd9426e9d58d131791d19a056eb62a261e7987000bedb->enter($__internal_830d4dcdafe756c53f9bd9426e9d58d131791d19a056eb62a261e7987000bedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_830d4dcdafe756c53f9bd9426e9d58d131791d19a056eb62a261e7987000bedb->leave($__internal_830d4dcdafe756c53f9bd9426e9d58d131791d19a056eb62a261e7987000bedb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6544cdbe9d0a10cc97e73dc9ae5fa870d7786089d80d27082db7f5be8ccc184 = $this->env->getExtension("native_profiler");
        $__internal_d6544cdbe9d0a10cc97e73dc9ae5fa870d7786089d80d27082db7f5be8ccc184->enter($__internal_d6544cdbe9d0a10cc97e73dc9ae5fa870d7786089d80d27082db7f5be8ccc184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_d6544cdbe9d0a10cc97e73dc9ae5fa870d7786089d80d27082db7f5be8ccc184->leave($__internal_d6544cdbe9d0a10cc97e73dc9ae5fa870d7786089d80d27082db7f5be8ccc184_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
