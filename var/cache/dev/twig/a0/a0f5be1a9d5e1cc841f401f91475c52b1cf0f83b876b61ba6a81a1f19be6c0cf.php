<?php

/* @WiseProfile/Resetting/email.txt.twig */
class __TwigTemplate_84ceb3eb5d50139a11ded935e1c4d529f97d6c25bf9e90698139ae1b05e2824a extends Twig_Template
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
        $__internal_dce943c5ca6a32956b47fe83204aecc2a1c7e3dc86271bfe587d04b13d8ce732 = $this->env->getExtension("native_profiler");
        $__internal_dce943c5ca6a32956b47fe83204aecc2a1c7e3dc86271bfe587d04b13d8ce732->enter($__internal_dce943c5ca6a32956b47fe83204aecc2a1c7e3dc86271bfe587d04b13d8ce732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dce943c5ca6a32956b47fe83204aecc2a1c7e3dc86271bfe587d04b13d8ce732->leave($__internal_dce943c5ca6a32956b47fe83204aecc2a1c7e3dc86271bfe587d04b13d8ce732_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_67b0b81f65bbba6591562b346a375d4a7900d0333abba6a95d1026d4c9996095 = $this->env->getExtension("native_profiler");
        $__internal_67b0b81f65bbba6591562b346a375d4a7900d0333abba6a95d1026d4c9996095->enter($__internal_67b0b81f65bbba6591562b346a375d4a7900d0333abba6a95d1026d4c9996095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_67b0b81f65bbba6591562b346a375d4a7900d0333abba6a95d1026d4c9996095->leave($__internal_67b0b81f65bbba6591562b346a375d4a7900d0333abba6a95d1026d4c9996095_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a301d46e4d676dfeeef68f1012aa04e3ee6d4c042cf5a8416f59ff1daeeafe85 = $this->env->getExtension("native_profiler");
        $__internal_a301d46e4d676dfeeef68f1012aa04e3ee6d4c042cf5a8416f59ff1daeeafe85->enter($__internal_a301d46e4d676dfeeef68f1012aa04e3ee6d4c042cf5a8416f59ff1daeeafe85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a301d46e4d676dfeeef68f1012aa04e3ee6d4c042cf5a8416f59ff1daeeafe85->leave($__internal_a301d46e4d676dfeeef68f1012aa04e3ee6d4c042cf5a8416f59ff1daeeafe85_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e7411af992094a40d021d0ad10b7d64963df0c3a8a4123f09149bccfa5a2e14c = $this->env->getExtension("native_profiler");
        $__internal_e7411af992094a40d021d0ad10b7d64963df0c3a8a4123f09149bccfa5a2e14c->enter($__internal_e7411af992094a40d021d0ad10b7d64963df0c3a8a4123f09149bccfa5a2e14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e7411af992094a40d021d0ad10b7d64963df0c3a8a4123f09149bccfa5a2e14c->leave($__internal_e7411af992094a40d021d0ad10b7d64963df0c3a8a4123f09149bccfa5a2e14c_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Resetting/email.txt.twig";
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
