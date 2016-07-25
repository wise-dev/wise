<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_f822c86a1d6cbea144d6dffdebb3735c9fef86b996ab66c38c46eed7dfc87829 extends Twig_Template
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
        $__internal_7da1cec4f20709ca5f6ad170507d6b253c9ddfd8f4ddcf2955655fcddd9670b1 = $this->env->getExtension("native_profiler");
        $__internal_7da1cec4f20709ca5f6ad170507d6b253c9ddfd8f4ddcf2955655fcddd9670b1->enter($__internal_7da1cec4f20709ca5f6ad170507d6b253c9ddfd8f4ddcf2955655fcddd9670b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7da1cec4f20709ca5f6ad170507d6b253c9ddfd8f4ddcf2955655fcddd9670b1->leave($__internal_7da1cec4f20709ca5f6ad170507d6b253c9ddfd8f4ddcf2955655fcddd9670b1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ef8c5cea6e0af5b01523f6057979aa14cb0b24e9684013e032690fc47db528aa = $this->env->getExtension("native_profiler");
        $__internal_ef8c5cea6e0af5b01523f6057979aa14cb0b24e9684013e032690fc47db528aa->enter($__internal_ef8c5cea6e0af5b01523f6057979aa14cb0b24e9684013e032690fc47db528aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_ef8c5cea6e0af5b01523f6057979aa14cb0b24e9684013e032690fc47db528aa->leave($__internal_ef8c5cea6e0af5b01523f6057979aa14cb0b24e9684013e032690fc47db528aa_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f3dd29ce2ef683439866c4e79ac3ffe07b21a111b96215a2f3b4ca1442b050e7 = $this->env->getExtension("native_profiler");
        $__internal_f3dd29ce2ef683439866c4e79ac3ffe07b21a111b96215a2f3b4ca1442b050e7->enter($__internal_f3dd29ce2ef683439866c4e79ac3ffe07b21a111b96215a2f3b4ca1442b050e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f3dd29ce2ef683439866c4e79ac3ffe07b21a111b96215a2f3b4ca1442b050e7->leave($__internal_f3dd29ce2ef683439866c4e79ac3ffe07b21a111b96215a2f3b4ca1442b050e7_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1fe899a2b16be715a76fde5251bbd41358bcde0d346fee3d78b8ae11865f7417 = $this->env->getExtension("native_profiler");
        $__internal_1fe899a2b16be715a76fde5251bbd41358bcde0d346fee3d78b8ae11865f7417->enter($__internal_1fe899a2b16be715a76fde5251bbd41358bcde0d346fee3d78b8ae11865f7417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1fe899a2b16be715a76fde5251bbd41358bcde0d346fee3d78b8ae11865f7417->leave($__internal_1fe899a2b16be715a76fde5251bbd41358bcde0d346fee3d78b8ae11865f7417_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
