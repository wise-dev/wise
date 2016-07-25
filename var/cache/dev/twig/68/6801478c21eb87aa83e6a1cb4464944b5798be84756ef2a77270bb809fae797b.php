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
        $__internal_2c97b4b0311cb2281ee0895aa7aafc83f6c810de49395c3223e60bb9c6c7ee02 = $this->env->getExtension("native_profiler");
        $__internal_2c97b4b0311cb2281ee0895aa7aafc83f6c810de49395c3223e60bb9c6c7ee02->enter($__internal_2c97b4b0311cb2281ee0895aa7aafc83f6c810de49395c3223e60bb9c6c7ee02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c97b4b0311cb2281ee0895aa7aafc83f6c810de49395c3223e60bb9c6c7ee02->leave($__internal_2c97b4b0311cb2281ee0895aa7aafc83f6c810de49395c3223e60bb9c6c7ee02_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7854773c78b8ceca01847fea5d2fc735d4f130003292c3c23c2810ac80f22a8c = $this->env->getExtension("native_profiler");
        $__internal_7854773c78b8ceca01847fea5d2fc735d4f130003292c3c23c2810ac80f22a8c->enter($__internal_7854773c78b8ceca01847fea5d2fc735d4f130003292c3c23c2810ac80f22a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_7854773c78b8ceca01847fea5d2fc735d4f130003292c3c23c2810ac80f22a8c->leave($__internal_7854773c78b8ceca01847fea5d2fc735d4f130003292c3c23c2810ac80f22a8c_prof);

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
