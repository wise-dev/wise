<?php

/* WiseProfileBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_837df0cbfbddc18ce7a0c4c51d7bd5b607f4ab32895b091267286c50ac8d5b45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "WiseProfileBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_a392cb79f714c470f74d2ce6fafa989aa2684b135c9ce0eb731ef1bc6d4cdb3b = $this->env->getExtension("native_profiler");
        $__internal_a392cb79f714c470f74d2ce6fafa989aa2684b135c9ce0eb731ef1bc6d4cdb3b->enter($__internal_a392cb79f714c470f74d2ce6fafa989aa2684b135c9ce0eb731ef1bc6d4cdb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a392cb79f714c470f74d2ce6fafa989aa2684b135c9ce0eb731ef1bc6d4cdb3b->leave($__internal_a392cb79f714c470f74d2ce6fafa989aa2684b135c9ce0eb731ef1bc6d4cdb3b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5563b59b302271bd93f461d507dfbbc3c9af8d12a6922de8446fab453d47738 = $this->env->getExtension("native_profiler");
        $__internal_f5563b59b302271bd93f461d507dfbbc3c9af8d12a6922de8446fab453d47738->enter($__internal_f5563b59b302271bd93f461d507dfbbc3c9af8d12a6922de8446fab453d47738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f5563b59b302271bd93f461d507dfbbc3c9af8d12a6922de8446fab453d47738->leave($__internal_f5563b59b302271bd93f461d507dfbbc3c9af8d12a6922de8446fab453d47738_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:Resetting:passwordAlreadyRequested.html.twig";
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
