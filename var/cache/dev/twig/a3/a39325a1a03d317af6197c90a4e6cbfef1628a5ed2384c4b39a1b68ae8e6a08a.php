<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_0c80542be090a02b5efa78e59ea495b74a035bd16132c7baf74d62a4ee903dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_ed25e3a0b61fe50e40376b836960c2d88138bf831f367e40a7e58454d9061898 = $this->env->getExtension("native_profiler");
        $__internal_ed25e3a0b61fe50e40376b836960c2d88138bf831f367e40a7e58454d9061898->enter($__internal_ed25e3a0b61fe50e40376b836960c2d88138bf831f367e40a7e58454d9061898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed25e3a0b61fe50e40376b836960c2d88138bf831f367e40a7e58454d9061898->leave($__internal_ed25e3a0b61fe50e40376b836960c2d88138bf831f367e40a7e58454d9061898_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcdf7ba1babe281d1433d7cfe6fb71154781fa86c54c55883e83c218eddd434b = $this->env->getExtension("native_profiler");
        $__internal_fcdf7ba1babe281d1433d7cfe6fb71154781fa86c54c55883e83c218eddd434b->enter($__internal_fcdf7ba1babe281d1433d7cfe6fb71154781fa86c54c55883e83c218eddd434b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_fcdf7ba1babe281d1433d7cfe6fb71154781fa86c54c55883e83c218eddd434b->leave($__internal_fcdf7ba1babe281d1433d7cfe6fb71154781fa86c54c55883e83c218eddd434b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
