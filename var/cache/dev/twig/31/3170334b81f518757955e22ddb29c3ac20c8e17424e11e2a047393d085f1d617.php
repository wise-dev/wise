<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_2872020d5945d80e66bb9bfe00b26c5f658b0d43881b589e2e08a09b01740df6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15cb3ed659ccafb30d9c05bfa6b295443935985ba90fec5db33e076e25dd38cb = $this->env->getExtension("native_profiler");
        $__internal_15cb3ed659ccafb30d9c05bfa6b295443935985ba90fec5db33e076e25dd38cb->enter($__internal_15cb3ed659ccafb30d9c05bfa6b295443935985ba90fec5db33e076e25dd38cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15cb3ed659ccafb30d9c05bfa6b295443935985ba90fec5db33e076e25dd38cb->leave($__internal_15cb3ed659ccafb30d9c05bfa6b295443935985ba90fec5db33e076e25dd38cb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dce2a0ba1edac83f3ffafa1c3a9c39d191de693a4b52e4373586c9ca714aaeeb = $this->env->getExtension("native_profiler");
        $__internal_dce2a0ba1edac83f3ffafa1c3a9c39d191de693a4b52e4373586c9ca714aaeeb->enter($__internal_dce2a0ba1edac83f3ffafa1c3a9c39d191de693a4b52e4373586c9ca714aaeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_dce2a0ba1edac83f3ffafa1c3a9c39d191de693a4b52e4373586c9ca714aaeeb->leave($__internal_dce2a0ba1edac83f3ffafa1c3a9c39d191de693a4b52e4373586c9ca714aaeeb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
