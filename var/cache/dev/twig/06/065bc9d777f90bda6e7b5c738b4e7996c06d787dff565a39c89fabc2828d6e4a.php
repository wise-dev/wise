<?php

/* WiseProfileBundle:Resetting:email.txt.twig */
class __TwigTemplate_7d06a36d56f0c339acaf8ba557b9473adacac541ed728818b95f8a4ece7c7ec9 extends Twig_Template
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
        $__internal_89acee98f50088112f75b8fc91907dcac749bc2fbf860d6299a6960fc904a30e = $this->env->getExtension("native_profiler");
        $__internal_89acee98f50088112f75b8fc91907dcac749bc2fbf860d6299a6960fc904a30e->enter($__internal_89acee98f50088112f75b8fc91907dcac749bc2fbf860d6299a6960fc904a30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_89acee98f50088112f75b8fc91907dcac749bc2fbf860d6299a6960fc904a30e->leave($__internal_89acee98f50088112f75b8fc91907dcac749bc2fbf860d6299a6960fc904a30e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f6da1714faf5aeab2742bc469a3f9a404281afa3acf70dc13a8a2a8b065744a3 = $this->env->getExtension("native_profiler");
        $__internal_f6da1714faf5aeab2742bc469a3f9a404281afa3acf70dc13a8a2a8b065744a3->enter($__internal_f6da1714faf5aeab2742bc469a3f9a404281afa3acf70dc13a8a2a8b065744a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_f6da1714faf5aeab2742bc469a3f9a404281afa3acf70dc13a8a2a8b065744a3->leave($__internal_f6da1714faf5aeab2742bc469a3f9a404281afa3acf70dc13a8a2a8b065744a3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0817e50d39c73c79d27b112d80d80dccc1b0f169842611ed5bfa68f7b1895cf3 = $this->env->getExtension("native_profiler");
        $__internal_0817e50d39c73c79d27b112d80d80dccc1b0f169842611ed5bfa68f7b1895cf3->enter($__internal_0817e50d39c73c79d27b112d80d80dccc1b0f169842611ed5bfa68f7b1895cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0817e50d39c73c79d27b112d80d80dccc1b0f169842611ed5bfa68f7b1895cf3->leave($__internal_0817e50d39c73c79d27b112d80d80dccc1b0f169842611ed5bfa68f7b1895cf3_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_af647504b5305d50ddd1a4e7330a605fc768889d31d1cb0f0135ce4885f075e1 = $this->env->getExtension("native_profiler");
        $__internal_af647504b5305d50ddd1a4e7330a605fc768889d31d1cb0f0135ce4885f075e1->enter($__internal_af647504b5305d50ddd1a4e7330a605fc768889d31d1cb0f0135ce4885f075e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_af647504b5305d50ddd1a4e7330a605fc768889d31d1cb0f0135ce4885f075e1->leave($__internal_af647504b5305d50ddd1a4e7330a605fc768889d31d1cb0f0135ce4885f075e1_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
