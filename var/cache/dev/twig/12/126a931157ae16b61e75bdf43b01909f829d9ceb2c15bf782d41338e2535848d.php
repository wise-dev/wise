<?php

/* WiseProfileBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_e36c3e92f7906913bcc6ce1bc49e9c73c85a6683fe4592590d8d2bcda67bfe02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "WiseProfileBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_50b80e432407e29d7a41cdbc2c4639bb6bf0890f60b44f464f53abc85dba40b9 = $this->env->getExtension("native_profiler");
        $__internal_50b80e432407e29d7a41cdbc2c4639bb6bf0890f60b44f464f53abc85dba40b9->enter($__internal_50b80e432407e29d7a41cdbc2c4639bb6bf0890f60b44f464f53abc85dba40b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50b80e432407e29d7a41cdbc2c4639bb6bf0890f60b44f464f53abc85dba40b9->leave($__internal_50b80e432407e29d7a41cdbc2c4639bb6bf0890f60b44f464f53abc85dba40b9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4900387a69270295cf29a8926134bfc366ce9f740b0a04ac0e30510c091725af = $this->env->getExtension("native_profiler");
        $__internal_4900387a69270295cf29a8926134bfc366ce9f740b0a04ac0e30510c091725af->enter($__internal_4900387a69270295cf29a8926134bfc366ce9f740b0a04ac0e30510c091725af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_4900387a69270295cf29a8926134bfc366ce9f740b0a04ac0e30510c091725af->leave($__internal_4900387a69270295cf29a8926134bfc366ce9f740b0a04ac0e30510c091725af_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:Resetting:checkEmail.html.twig";
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
