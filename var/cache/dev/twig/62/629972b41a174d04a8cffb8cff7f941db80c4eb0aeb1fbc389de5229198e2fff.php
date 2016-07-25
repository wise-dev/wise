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
        $__internal_66c44d2221bb6cacfb83f4dc19bdca0686a1a6ef041af29cbd31d98048b8c9b7 = $this->env->getExtension("native_profiler");
        $__internal_66c44d2221bb6cacfb83f4dc19bdca0686a1a6ef041af29cbd31d98048b8c9b7->enter($__internal_66c44d2221bb6cacfb83f4dc19bdca0686a1a6ef041af29cbd31d98048b8c9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_66c44d2221bb6cacfb83f4dc19bdca0686a1a6ef041af29cbd31d98048b8c9b7->leave($__internal_66c44d2221bb6cacfb83f4dc19bdca0686a1a6ef041af29cbd31d98048b8c9b7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8c1bff80e3e7888443d3dcd28e04c5987f42fb53efeeb2ac6f78a1632c899366 = $this->env->getExtension("native_profiler");
        $__internal_8c1bff80e3e7888443d3dcd28e04c5987f42fb53efeeb2ac6f78a1632c899366->enter($__internal_8c1bff80e3e7888443d3dcd28e04c5987f42fb53efeeb2ac6f78a1632c899366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_8c1bff80e3e7888443d3dcd28e04c5987f42fb53efeeb2ac6f78a1632c899366->leave($__internal_8c1bff80e3e7888443d3dcd28e04c5987f42fb53efeeb2ac6f78a1632c899366_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b04773d375c0d6b21e4e7732bd2da1124d74e4eb3c56ce5c778bbc7561e34896 = $this->env->getExtension("native_profiler");
        $__internal_b04773d375c0d6b21e4e7732bd2da1124d74e4eb3c56ce5c778bbc7561e34896->enter($__internal_b04773d375c0d6b21e4e7732bd2da1124d74e4eb3c56ce5c778bbc7561e34896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b04773d375c0d6b21e4e7732bd2da1124d74e4eb3c56ce5c778bbc7561e34896->leave($__internal_b04773d375c0d6b21e4e7732bd2da1124d74e4eb3c56ce5c778bbc7561e34896_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8e7b5c15f93bf97da3318c8bdbb6c67cfe2ab1cf0a7593865adc291e4119f257 = $this->env->getExtension("native_profiler");
        $__internal_8e7b5c15f93bf97da3318c8bdbb6c67cfe2ab1cf0a7593865adc291e4119f257->enter($__internal_8e7b5c15f93bf97da3318c8bdbb6c67cfe2ab1cf0a7593865adc291e4119f257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8e7b5c15f93bf97da3318c8bdbb6c67cfe2ab1cf0a7593865adc291e4119f257->leave($__internal_8e7b5c15f93bf97da3318c8bdbb6c67cfe2ab1cf0a7593865adc291e4119f257_prof);

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
