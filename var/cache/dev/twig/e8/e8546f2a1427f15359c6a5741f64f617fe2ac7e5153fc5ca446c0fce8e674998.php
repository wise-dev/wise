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
        $__internal_44f4347228ecd5c90dc30db608717a26f67e5d03d618c2a8cf4fa17b520a8848 = $this->env->getExtension("native_profiler");
        $__internal_44f4347228ecd5c90dc30db608717a26f67e5d03d618c2a8cf4fa17b520a8848->enter($__internal_44f4347228ecd5c90dc30db608717a26f67e5d03d618c2a8cf4fa17b520a8848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44f4347228ecd5c90dc30db608717a26f67e5d03d618c2a8cf4fa17b520a8848->leave($__internal_44f4347228ecd5c90dc30db608717a26f67e5d03d618c2a8cf4fa17b520a8848_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5f23ceef9fc1ee02a94866ee4c2da90ac1cfeeb1a9c214a87c414e0c863847e = $this->env->getExtension("native_profiler");
        $__internal_b5f23ceef9fc1ee02a94866ee4c2da90ac1cfeeb1a9c214a87c414e0c863847e->enter($__internal_b5f23ceef9fc1ee02a94866ee4c2da90ac1cfeeb1a9c214a87c414e0c863847e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b5f23ceef9fc1ee02a94866ee4c2da90ac1cfeeb1a9c214a87c414e0c863847e->leave($__internal_b5f23ceef9fc1ee02a94866ee4c2da90ac1cfeeb1a9c214a87c414e0c863847e_prof);

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
