<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_a618d82c3e22f7d6995b016c32e70518a9e41bcf09f90f12a71c59d417c3d46b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8e97e8a582a977d6a262db30b5d9b7e491255dda6f01d1523947dd2028db404 = $this->env->getExtension("native_profiler");
        $__internal_e8e97e8a582a977d6a262db30b5d9b7e491255dda6f01d1523947dd2028db404->enter($__internal_e8e97e8a582a977d6a262db30b5d9b7e491255dda6f01d1523947dd2028db404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e8e97e8a582a977d6a262db30b5d9b7e491255dda6f01d1523947dd2028db404->leave($__internal_e8e97e8a582a977d6a262db30b5d9b7e491255dda6f01d1523947dd2028db404_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_74b2882aeb77a43204063979803d99db6d4fba81887e6f74a63e33f88187442b = $this->env->getExtension("native_profiler");
        $__internal_74b2882aeb77a43204063979803d99db6d4fba81887e6f74a63e33f88187442b->enter($__internal_74b2882aeb77a43204063979803d99db6d4fba81887e6f74a63e33f88187442b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_74b2882aeb77a43204063979803d99db6d4fba81887e6f74a63e33f88187442b->leave($__internal_74b2882aeb77a43204063979803d99db6d4fba81887e6f74a63e33f88187442b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fae8766fa2a221734bd1c00e03d93ba0d1e039d5520c983e3b1cc0661381fcb4 = $this->env->getExtension("native_profiler");
        $__internal_fae8766fa2a221734bd1c00e03d93ba0d1e039d5520c983e3b1cc0661381fcb4->enter($__internal_fae8766fa2a221734bd1c00e03d93ba0d1e039d5520c983e3b1cc0661381fcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fae8766fa2a221734bd1c00e03d93ba0d1e039d5520c983e3b1cc0661381fcb4->leave($__internal_fae8766fa2a221734bd1c00e03d93ba0d1e039d5520c983e3b1cc0661381fcb4_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c5622638c2d42f197b5e25303db3fb53244f95a4a8f87a8237617c019c2a5719 = $this->env->getExtension("native_profiler");
        $__internal_c5622638c2d42f197b5e25303db3fb53244f95a4a8f87a8237617c019c2a5719->enter($__internal_c5622638c2d42f197b5e25303db3fb53244f95a4a8f87a8237617c019c2a5719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c5622638c2d42f197b5e25303db3fb53244f95a4a8f87a8237617c019c2a5719->leave($__internal_c5622638c2d42f197b5e25303db3fb53244f95a4a8f87a8237617c019c2a5719_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
