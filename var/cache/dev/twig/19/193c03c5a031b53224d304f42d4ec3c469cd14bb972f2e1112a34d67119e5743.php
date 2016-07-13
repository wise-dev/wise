<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_9a109f53408c686ca794348c249c18126d19cf4907fe4dbacd1c42c16f76a17f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_cbd1c7239f3925e80d3effd90f47d78212e58f620a843571c4fbfe80217435e3 = $this->env->getExtension("native_profiler");
        $__internal_cbd1c7239f3925e80d3effd90f47d78212e58f620a843571c4fbfe80217435e3->enter($__internal_cbd1c7239f3925e80d3effd90f47d78212e58f620a843571c4fbfe80217435e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbd1c7239f3925e80d3effd90f47d78212e58f620a843571c4fbfe80217435e3->leave($__internal_cbd1c7239f3925e80d3effd90f47d78212e58f620a843571c4fbfe80217435e3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce9ee471aa4c1338d45cab97a53eafe35d4ac53d05004694102adb14c937e894 = $this->env->getExtension("native_profiler");
        $__internal_ce9ee471aa4c1338d45cab97a53eafe35d4ac53d05004694102adb14c937e894->enter($__internal_ce9ee471aa4c1338d45cab97a53eafe35d4ac53d05004694102adb14c937e894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ce9ee471aa4c1338d45cab97a53eafe35d4ac53d05004694102adb14c937e894->leave($__internal_ce9ee471aa4c1338d45cab97a53eafe35d4ac53d05004694102adb14c937e894_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
