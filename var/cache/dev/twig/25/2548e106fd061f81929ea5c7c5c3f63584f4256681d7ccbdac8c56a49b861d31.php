<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_0073fc33e728f44cce2e426fdf3a2eeaf5f4c5b23300545c111b5c9db7b8ac50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_d91fb2040a582254a0746523564687ebec95fc4faf8db6d43dce638c40df66b8 = $this->env->getExtension("native_profiler");
        $__internal_d91fb2040a582254a0746523564687ebec95fc4faf8db6d43dce638c40df66b8->enter($__internal_d91fb2040a582254a0746523564687ebec95fc4faf8db6d43dce638c40df66b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d91fb2040a582254a0746523564687ebec95fc4faf8db6d43dce638c40df66b8->leave($__internal_d91fb2040a582254a0746523564687ebec95fc4faf8db6d43dce638c40df66b8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fb859cf24a25669a2cedcf4b98225ecf0ca9213044840861f88db5bf47ad4b5 = $this->env->getExtension("native_profiler");
        $__internal_4fb859cf24a25669a2cedcf4b98225ecf0ca9213044840861f88db5bf47ad4b5->enter($__internal_4fb859cf24a25669a2cedcf4b98225ecf0ca9213044840861f88db5bf47ad4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_4fb859cf24a25669a2cedcf4b98225ecf0ca9213044840861f88db5bf47ad4b5->leave($__internal_4fb859cf24a25669a2cedcf4b98225ecf0ca9213044840861f88db5bf47ad4b5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
