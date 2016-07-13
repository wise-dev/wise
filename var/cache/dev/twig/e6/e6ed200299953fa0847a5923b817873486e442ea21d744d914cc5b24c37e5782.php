<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_4e84e32561d1aaa0f4f7408684397f55d6a9d0e5dbc41f4dcea31585422c4e51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_3907680eda4e69fa0d9086e3c80e3f2efde2681b5927ccc7e63971bd1704b516 = $this->env->getExtension("native_profiler");
        $__internal_3907680eda4e69fa0d9086e3c80e3f2efde2681b5927ccc7e63971bd1704b516->enter($__internal_3907680eda4e69fa0d9086e3c80e3f2efde2681b5927ccc7e63971bd1704b516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3907680eda4e69fa0d9086e3c80e3f2efde2681b5927ccc7e63971bd1704b516->leave($__internal_3907680eda4e69fa0d9086e3c80e3f2efde2681b5927ccc7e63971bd1704b516_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c44b44a2fbc66620629f27dad5964eaa2c699b9e961603421f3cb1e36c28ddc9 = $this->env->getExtension("native_profiler");
        $__internal_c44b44a2fbc66620629f27dad5964eaa2c699b9e961603421f3cb1e36c28ddc9->enter($__internal_c44b44a2fbc66620629f27dad5964eaa2c699b9e961603421f3cb1e36c28ddc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_c44b44a2fbc66620629f27dad5964eaa2c699b9e961603421f3cb1e36c28ddc9->leave($__internal_c44b44a2fbc66620629f27dad5964eaa2c699b9e961603421f3cb1e36c28ddc9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
