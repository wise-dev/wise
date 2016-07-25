<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_dc699825ba7ce61d85d045aebb76b69258a8b9b9fa4be1b4c8ced0336956c3c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_7b03d22671fcbe9bb65fd3ee2e139780487e400150194ec3d37735b728bd75c3 = $this->env->getExtension("native_profiler");
        $__internal_7b03d22671fcbe9bb65fd3ee2e139780487e400150194ec3d37735b728bd75c3->enter($__internal_7b03d22671fcbe9bb65fd3ee2e139780487e400150194ec3d37735b728bd75c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b03d22671fcbe9bb65fd3ee2e139780487e400150194ec3d37735b728bd75c3->leave($__internal_7b03d22671fcbe9bb65fd3ee2e139780487e400150194ec3d37735b728bd75c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de68dd1deaee6d76f3b128f3f1218a3156ef695cac1a0b2edf43e670afa84801 = $this->env->getExtension("native_profiler");
        $__internal_de68dd1deaee6d76f3b128f3f1218a3156ef695cac1a0b2edf43e670afa84801->enter($__internal_de68dd1deaee6d76f3b128f3f1218a3156ef695cac1a0b2edf43e670afa84801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_de68dd1deaee6d76f3b128f3f1218a3156ef695cac1a0b2edf43e670afa84801->leave($__internal_de68dd1deaee6d76f3b128f3f1218a3156ef695cac1a0b2edf43e670afa84801_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
