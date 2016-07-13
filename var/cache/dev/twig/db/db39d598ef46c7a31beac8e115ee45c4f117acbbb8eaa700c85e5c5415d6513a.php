<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_78758259a78fbdcdcd66d1d09028c125f211194c12543804712398e2e3ea9ae6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_20712a47192fde80595794968b5de01e63429fd151f4e651d85c2b573b6c8e9a = $this->env->getExtension("native_profiler");
        $__internal_20712a47192fde80595794968b5de01e63429fd151f4e651d85c2b573b6c8e9a->enter($__internal_20712a47192fde80595794968b5de01e63429fd151f4e651d85c2b573b6c8e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20712a47192fde80595794968b5de01e63429fd151f4e651d85c2b573b6c8e9a->leave($__internal_20712a47192fde80595794968b5de01e63429fd151f4e651d85c2b573b6c8e9a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a5fe9e5a7b4a41a8e586d564a217b0dcca52a24283a98c422cddaddc27bb431 = $this->env->getExtension("native_profiler");
        $__internal_9a5fe9e5a7b4a41a8e586d564a217b0dcca52a24283a98c422cddaddc27bb431->enter($__internal_9a5fe9e5a7b4a41a8e586d564a217b0dcca52a24283a98c422cddaddc27bb431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9a5fe9e5a7b4a41a8e586d564a217b0dcca52a24283a98c422cddaddc27bb431->leave($__internal_9a5fe9e5a7b4a41a8e586d564a217b0dcca52a24283a98c422cddaddc27bb431_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
