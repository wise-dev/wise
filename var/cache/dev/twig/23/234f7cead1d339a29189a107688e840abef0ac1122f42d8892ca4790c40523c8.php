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
        $__internal_ef89447c73166a679d986eaa541b803bb6f23a11eeff85d76235f790805eae31 = $this->env->getExtension("native_profiler");
        $__internal_ef89447c73166a679d986eaa541b803bb6f23a11eeff85d76235f790805eae31->enter($__internal_ef89447c73166a679d986eaa541b803bb6f23a11eeff85d76235f790805eae31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ef89447c73166a679d986eaa541b803bb6f23a11eeff85d76235f790805eae31->leave($__internal_ef89447c73166a679d986eaa541b803bb6f23a11eeff85d76235f790805eae31_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f9fd90bdfad3e60053c735666da2107e9ee809f8936db66c2b134eb967e3cb0c = $this->env->getExtension("native_profiler");
        $__internal_f9fd90bdfad3e60053c735666da2107e9ee809f8936db66c2b134eb967e3cb0c->enter($__internal_f9fd90bdfad3e60053c735666da2107e9ee809f8936db66c2b134eb967e3cb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f9fd90bdfad3e60053c735666da2107e9ee809f8936db66c2b134eb967e3cb0c->leave($__internal_f9fd90bdfad3e60053c735666da2107e9ee809f8936db66c2b134eb967e3cb0c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4f19ac346a0f0572218100a9d03bad8eac9741482d5bd2ce0606eaa3900ab561 = $this->env->getExtension("native_profiler");
        $__internal_4f19ac346a0f0572218100a9d03bad8eac9741482d5bd2ce0606eaa3900ab561->enter($__internal_4f19ac346a0f0572218100a9d03bad8eac9741482d5bd2ce0606eaa3900ab561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4f19ac346a0f0572218100a9d03bad8eac9741482d5bd2ce0606eaa3900ab561->leave($__internal_4f19ac346a0f0572218100a9d03bad8eac9741482d5bd2ce0606eaa3900ab561_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f855fe68ad7ab331744bb29476e70b347911d621c2ac6cb7238730989997150a = $this->env->getExtension("native_profiler");
        $__internal_f855fe68ad7ab331744bb29476e70b347911d621c2ac6cb7238730989997150a->enter($__internal_f855fe68ad7ab331744bb29476e70b347911d621c2ac6cb7238730989997150a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f855fe68ad7ab331744bb29476e70b347911d621c2ac6cb7238730989997150a->leave($__internal_f855fe68ad7ab331744bb29476e70b347911d621c2ac6cb7238730989997150a_prof);

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
