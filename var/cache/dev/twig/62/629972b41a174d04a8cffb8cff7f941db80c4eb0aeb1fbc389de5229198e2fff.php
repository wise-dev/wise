<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_08054ba4b7340d709a4bdde0eb23055bd08c7df3ea9454d34feed7eac18503a0 extends Twig_Template
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
        $__internal_7827ea716b5dbeb2f8ef1b10f377bb1bcfc5bbab6110fb03a30d24fb26aa7241 = $this->env->getExtension("native_profiler");
        $__internal_7827ea716b5dbeb2f8ef1b10f377bb1bcfc5bbab6110fb03a30d24fb26aa7241->enter($__internal_7827ea716b5dbeb2f8ef1b10f377bb1bcfc5bbab6110fb03a30d24fb26aa7241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7827ea716b5dbeb2f8ef1b10f377bb1bcfc5bbab6110fb03a30d24fb26aa7241->leave($__internal_7827ea716b5dbeb2f8ef1b10f377bb1bcfc5bbab6110fb03a30d24fb26aa7241_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d9e7e96f9a203083852d3f22e0ae9d47fc52519011843353c587f02b218e7569 = $this->env->getExtension("native_profiler");
        $__internal_d9e7e96f9a203083852d3f22e0ae9d47fc52519011843353c587f02b218e7569->enter($__internal_d9e7e96f9a203083852d3f22e0ae9d47fc52519011843353c587f02b218e7569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_d9e7e96f9a203083852d3f22e0ae9d47fc52519011843353c587f02b218e7569->leave($__internal_d9e7e96f9a203083852d3f22e0ae9d47fc52519011843353c587f02b218e7569_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e7e0fe7965c2378281544e60bb6d74d583cceb05caeb806f796cee2c82d08350 = $this->env->getExtension("native_profiler");
        $__internal_e7e0fe7965c2378281544e60bb6d74d583cceb05caeb806f796cee2c82d08350->enter($__internal_e7e0fe7965c2378281544e60bb6d74d583cceb05caeb806f796cee2c82d08350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e7e0fe7965c2378281544e60bb6d74d583cceb05caeb806f796cee2c82d08350->leave($__internal_e7e0fe7965c2378281544e60bb6d74d583cceb05caeb806f796cee2c82d08350_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_36e95850936fd238dd9ca43f6db6a081aad91fcef35fb374fbf0f57b16b72715 = $this->env->getExtension("native_profiler");
        $__internal_36e95850936fd238dd9ca43f6db6a081aad91fcef35fb374fbf0f57b16b72715->enter($__internal_36e95850936fd238dd9ca43f6db6a081aad91fcef35fb374fbf0f57b16b72715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_36e95850936fd238dd9ca43f6db6a081aad91fcef35fb374fbf0f57b16b72715->leave($__internal_36e95850936fd238dd9ca43f6db6a081aad91fcef35fb374fbf0f57b16b72715_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
