<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_35f4b7ac8af4f9981961aec665e3bf8dedc4c53ef550dcca7a2a60e60f88fae5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_a6ca44796435396e2d0e15d6973bb0ab4ddf420e46dcc32816b30be46fbd9f54 = $this->env->getExtension("native_profiler");
        $__internal_a6ca44796435396e2d0e15d6973bb0ab4ddf420e46dcc32816b30be46fbd9f54->enter($__internal_a6ca44796435396e2d0e15d6973bb0ab4ddf420e46dcc32816b30be46fbd9f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6ca44796435396e2d0e15d6973bb0ab4ddf420e46dcc32816b30be46fbd9f54->leave($__internal_a6ca44796435396e2d0e15d6973bb0ab4ddf420e46dcc32816b30be46fbd9f54_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7bbb3f93ea476d076f9646b0f686eb9915058e8e5607f839fbfb4e28525253b = $this->env->getExtension("native_profiler");
        $__internal_a7bbb3f93ea476d076f9646b0f686eb9915058e8e5607f839fbfb4e28525253b->enter($__internal_a7bbb3f93ea476d076f9646b0f686eb9915058e8e5607f839fbfb4e28525253b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a7bbb3f93ea476d076f9646b0f686eb9915058e8e5607f839fbfb4e28525253b->leave($__internal_a7bbb3f93ea476d076f9646b0f686eb9915058e8e5607f839fbfb4e28525253b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
