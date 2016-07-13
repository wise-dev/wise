<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_89feef38863d62abc76c12aa3ee680980379ba7ab1d752579ad48034efc0d7d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_5ea66d994ec4862c858934ae8b190ff9fd07bb1dad2ff17463037d3a2bea6b59 = $this->env->getExtension("native_profiler");
        $__internal_5ea66d994ec4862c858934ae8b190ff9fd07bb1dad2ff17463037d3a2bea6b59->enter($__internal_5ea66d994ec4862c858934ae8b190ff9fd07bb1dad2ff17463037d3a2bea6b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ea66d994ec4862c858934ae8b190ff9fd07bb1dad2ff17463037d3a2bea6b59->leave($__internal_5ea66d994ec4862c858934ae8b190ff9fd07bb1dad2ff17463037d3a2bea6b59_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99f3caf16403d30a719d9f4366b0d94f3ddd7fef01cbfc4be3aa9354b7bef3c5 = $this->env->getExtension("native_profiler");
        $__internal_99f3caf16403d30a719d9f4366b0d94f3ddd7fef01cbfc4be3aa9354b7bef3c5->enter($__internal_99f3caf16403d30a719d9f4366b0d94f3ddd7fef01cbfc4be3aa9354b7bef3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_99f3caf16403d30a719d9f4366b0d94f3ddd7fef01cbfc4be3aa9354b7bef3c5->leave($__internal_99f3caf16403d30a719d9f4366b0d94f3ddd7fef01cbfc4be3aa9354b7bef3c5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
