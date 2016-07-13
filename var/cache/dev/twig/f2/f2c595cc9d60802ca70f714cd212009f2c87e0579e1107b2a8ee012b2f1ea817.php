<?php

/* WiseProfileBundle:Group:edit.html.twig */
class __TwigTemplate_3a62c7c885b04e7f1669476dbae18da99fa6406a24a1b1e531b06050eeb28394 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "WiseProfileBundle:Group:edit.html.twig", 1);
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
        $__internal_014b4b8ae6da0519df99c339f03523169dd0519aa2c3edf61722e8932fe3156e = $this->env->getExtension("native_profiler");
        $__internal_014b4b8ae6da0519df99c339f03523169dd0519aa2c3edf61722e8932fe3156e->enter($__internal_014b4b8ae6da0519df99c339f03523169dd0519aa2c3edf61722e8932fe3156e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_014b4b8ae6da0519df99c339f03523169dd0519aa2c3edf61722e8932fe3156e->leave($__internal_014b4b8ae6da0519df99c339f03523169dd0519aa2c3edf61722e8932fe3156e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c30b6bd03953a50ac1a764b2be77c72a263fee558f50ca713cad095644e0fea = $this->env->getExtension("native_profiler");
        $__internal_2c30b6bd03953a50ac1a764b2be77c72a263fee558f50ca713cad095644e0fea->enter($__internal_2c30b6bd03953a50ac1a764b2be77c72a263fee558f50ca713cad095644e0fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "WiseProfileBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_2c30b6bd03953a50ac1a764b2be77c72a263fee558f50ca713cad095644e0fea->leave($__internal_2c30b6bd03953a50ac1a764b2be77c72a263fee558f50ca713cad095644e0fea_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:Group:edit.html.twig";
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
