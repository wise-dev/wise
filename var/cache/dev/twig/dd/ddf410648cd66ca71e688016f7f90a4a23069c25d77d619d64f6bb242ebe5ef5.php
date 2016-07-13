<?php

/* @WiseProfile/Registration/email.txt.twig */
class __TwigTemplate_a6ebe7925fc83cb3cbee875d7336ea54421dcace9394a210c2d34e571ff07f53 extends Twig_Template
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
        $__internal_14ba480e07d3d45dc7d70655854189fc2fc22ac17224531c0b07f46bb79a956d = $this->env->getExtension("native_profiler");
        $__internal_14ba480e07d3d45dc7d70655854189fc2fc22ac17224531c0b07f46bb79a956d->enter($__internal_14ba480e07d3d45dc7d70655854189fc2fc22ac17224531c0b07f46bb79a956d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_14ba480e07d3d45dc7d70655854189fc2fc22ac17224531c0b07f46bb79a956d->leave($__internal_14ba480e07d3d45dc7d70655854189fc2fc22ac17224531c0b07f46bb79a956d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8c319eb4902232d0c0b71de62ee1c179235f328b7dbd44f4f737bccde5d44e7d = $this->env->getExtension("native_profiler");
        $__internal_8c319eb4902232d0c0b71de62ee1c179235f328b7dbd44f4f737bccde5d44e7d->enter($__internal_8c319eb4902232d0c0b71de62ee1c179235f328b7dbd44f4f737bccde5d44e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8c319eb4902232d0c0b71de62ee1c179235f328b7dbd44f4f737bccde5d44e7d->leave($__internal_8c319eb4902232d0c0b71de62ee1c179235f328b7dbd44f4f737bccde5d44e7d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_90894e137cfafcf62c98837a42d189b1b13be3f3178b9e433cf658262576dba1 = $this->env->getExtension("native_profiler");
        $__internal_90894e137cfafcf62c98837a42d189b1b13be3f3178b9e433cf658262576dba1->enter($__internal_90894e137cfafcf62c98837a42d189b1b13be3f3178b9e433cf658262576dba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_90894e137cfafcf62c98837a42d189b1b13be3f3178b9e433cf658262576dba1->leave($__internal_90894e137cfafcf62c98837a42d189b1b13be3f3178b9e433cf658262576dba1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1ef9d4a8e3e6f64f64afbbc914f13f7ba3d3eb0fc6794a32ad668b6206767fd5 = $this->env->getExtension("native_profiler");
        $__internal_1ef9d4a8e3e6f64f64afbbc914f13f7ba3d3eb0fc6794a32ad668b6206767fd5->enter($__internal_1ef9d4a8e3e6f64f64afbbc914f13f7ba3d3eb0fc6794a32ad668b6206767fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1ef9d4a8e3e6f64f64afbbc914f13f7ba3d3eb0fc6794a32ad668b6206767fd5->leave($__internal_1ef9d4a8e3e6f64f64afbbc914f13f7ba3d3eb0fc6794a32ad668b6206767fd5_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Registration/email.txt.twig";
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
