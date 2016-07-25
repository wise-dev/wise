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
        $__internal_2b06d3db4099e28ce99bb89c755c72d46206a759b1211f06a121608b00a1ab07 = $this->env->getExtension("native_profiler");
        $__internal_2b06d3db4099e28ce99bb89c755c72d46206a759b1211f06a121608b00a1ab07->enter($__internal_2b06d3db4099e28ce99bb89c755c72d46206a759b1211f06a121608b00a1ab07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b06d3db4099e28ce99bb89c755c72d46206a759b1211f06a121608b00a1ab07->leave($__internal_2b06d3db4099e28ce99bb89c755c72d46206a759b1211f06a121608b00a1ab07_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8eb30b5e7a8a00777e339fc92d83ed2aa67e1ee27a9d128467dc1e672230756a = $this->env->getExtension("native_profiler");
        $__internal_8eb30b5e7a8a00777e339fc92d83ed2aa67e1ee27a9d128467dc1e672230756a->enter($__internal_8eb30b5e7a8a00777e339fc92d83ed2aa67e1ee27a9d128467dc1e672230756a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8eb30b5e7a8a00777e339fc92d83ed2aa67e1ee27a9d128467dc1e672230756a->leave($__internal_8eb30b5e7a8a00777e339fc92d83ed2aa67e1ee27a9d128467dc1e672230756a_prof);

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
