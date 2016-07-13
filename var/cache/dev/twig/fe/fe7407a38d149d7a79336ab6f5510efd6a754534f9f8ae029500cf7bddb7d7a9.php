<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_c3e8a295fe1f97f6fe8c20e6ef628e95cc729ca20a8637276e31ceaf3ea1f696 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_fc703446e8d1af64e59ccfb5b36a666e51431a69fc0851b9d8cf308f11482f73 = $this->env->getExtension("native_profiler");
        $__internal_fc703446e8d1af64e59ccfb5b36a666e51431a69fc0851b9d8cf308f11482f73->enter($__internal_fc703446e8d1af64e59ccfb5b36a666e51431a69fc0851b9d8cf308f11482f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc703446e8d1af64e59ccfb5b36a666e51431a69fc0851b9d8cf308f11482f73->leave($__internal_fc703446e8d1af64e59ccfb5b36a666e51431a69fc0851b9d8cf308f11482f73_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd39d6a07097a459b7f41245a75bf5165461c3d3c029532961ede0ddd7a28a55 = $this->env->getExtension("native_profiler");
        $__internal_dd39d6a07097a459b7f41245a75bf5165461c3d3c029532961ede0ddd7a28a55->enter($__internal_dd39d6a07097a459b7f41245a75bf5165461c3d3c029532961ede0ddd7a28a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_dd39d6a07097a459b7f41245a75bf5165461c3d3c029532961ede0ddd7a28a55->leave($__internal_dd39d6a07097a459b7f41245a75bf5165461c3d3c029532961ede0ddd7a28a55_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
