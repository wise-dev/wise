<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_ec9f7c60e709352c50a9025e12e45fdcf2912e418452e53fcd56a868a6ef3a82 extends Twig_Template
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
        $__internal_75ea4a5da18119d1c454d4803440030d8140587f6e8177459aef7c2b611bde83 = $this->env->getExtension("native_profiler");
        $__internal_75ea4a5da18119d1c454d4803440030d8140587f6e8177459aef7c2b611bde83->enter($__internal_75ea4a5da18119d1c454d4803440030d8140587f6e8177459aef7c2b611bde83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_75ea4a5da18119d1c454d4803440030d8140587f6e8177459aef7c2b611bde83->leave($__internal_75ea4a5da18119d1c454d4803440030d8140587f6e8177459aef7c2b611bde83_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_651ae35ca6a57a6320256b5d6374c43ae81c0306b1347d30689e909d80a845ea = $this->env->getExtension("native_profiler");
        $__internal_651ae35ca6a57a6320256b5d6374c43ae81c0306b1347d30689e909d80a845ea->enter($__internal_651ae35ca6a57a6320256b5d6374c43ae81c0306b1347d30689e909d80a845ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_651ae35ca6a57a6320256b5d6374c43ae81c0306b1347d30689e909d80a845ea->leave($__internal_651ae35ca6a57a6320256b5d6374c43ae81c0306b1347d30689e909d80a845ea_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0db7bc88e9f113d0830fc051ecfd718ebbd940d5b30ca08802247cfdf5df9fd8 = $this->env->getExtension("native_profiler");
        $__internal_0db7bc88e9f113d0830fc051ecfd718ebbd940d5b30ca08802247cfdf5df9fd8->enter($__internal_0db7bc88e9f113d0830fc051ecfd718ebbd940d5b30ca08802247cfdf5df9fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0db7bc88e9f113d0830fc051ecfd718ebbd940d5b30ca08802247cfdf5df9fd8->leave($__internal_0db7bc88e9f113d0830fc051ecfd718ebbd940d5b30ca08802247cfdf5df9fd8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2806c79ecf8f31fdfcffd88387fed413f969eb2baeabbb217b4f129bca00b950 = $this->env->getExtension("native_profiler");
        $__internal_2806c79ecf8f31fdfcffd88387fed413f969eb2baeabbb217b4f129bca00b950->enter($__internal_2806c79ecf8f31fdfcffd88387fed413f969eb2baeabbb217b4f129bca00b950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2806c79ecf8f31fdfcffd88387fed413f969eb2baeabbb217b4f129bca00b950->leave($__internal_2806c79ecf8f31fdfcffd88387fed413f969eb2baeabbb217b4f129bca00b950_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
