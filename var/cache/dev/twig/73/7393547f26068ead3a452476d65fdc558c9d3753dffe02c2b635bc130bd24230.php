<?php

/* WiseProfileBundle:Registration:email.txt.twig */
class __TwigTemplate_a44d8eaa91618f2f111415151501920f5e60095289174bd52ca3b26d5466372b extends Twig_Template
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
        $__internal_613b08f9a6c79e6b807906e69e4600899a5a6b0a7f32ea73bf467d313cc94d7f = $this->env->getExtension("native_profiler");
        $__internal_613b08f9a6c79e6b807906e69e4600899a5a6b0a7f32ea73bf467d313cc94d7f->enter($__internal_613b08f9a6c79e6b807906e69e4600899a5a6b0a7f32ea73bf467d313cc94d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_613b08f9a6c79e6b807906e69e4600899a5a6b0a7f32ea73bf467d313cc94d7f->leave($__internal_613b08f9a6c79e6b807906e69e4600899a5a6b0a7f32ea73bf467d313cc94d7f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f777a2c618773e0dd617caba54ef020a5c36533c77f2501f747ad93abd808dff = $this->env->getExtension("native_profiler");
        $__internal_f777a2c618773e0dd617caba54ef020a5c36533c77f2501f747ad93abd808dff->enter($__internal_f777a2c618773e0dd617caba54ef020a5c36533c77f2501f747ad93abd808dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f777a2c618773e0dd617caba54ef020a5c36533c77f2501f747ad93abd808dff->leave($__internal_f777a2c618773e0dd617caba54ef020a5c36533c77f2501f747ad93abd808dff_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fd8a0888ccdf53814582d53e9b688db06a13e60665470d2f5ec14d40934db06e = $this->env->getExtension("native_profiler");
        $__internal_fd8a0888ccdf53814582d53e9b688db06a13e60665470d2f5ec14d40934db06e->enter($__internal_fd8a0888ccdf53814582d53e9b688db06a13e60665470d2f5ec14d40934db06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fd8a0888ccdf53814582d53e9b688db06a13e60665470d2f5ec14d40934db06e->leave($__internal_fd8a0888ccdf53814582d53e9b688db06a13e60665470d2f5ec14d40934db06e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_be32ef34fdf87e10664e2fc5d34526cd646a3226c95e87bfcad75d18f6d2e028 = $this->env->getExtension("native_profiler");
        $__internal_be32ef34fdf87e10664e2fc5d34526cd646a3226c95e87bfcad75d18f6d2e028->enter($__internal_be32ef34fdf87e10664e2fc5d34526cd646a3226c95e87bfcad75d18f6d2e028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_be32ef34fdf87e10664e2fc5d34526cd646a3226c95e87bfcad75d18f6d2e028->leave($__internal_be32ef34fdf87e10664e2fc5d34526cd646a3226c95e87bfcad75d18f6d2e028_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:Registration:email.txt.twig";
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
