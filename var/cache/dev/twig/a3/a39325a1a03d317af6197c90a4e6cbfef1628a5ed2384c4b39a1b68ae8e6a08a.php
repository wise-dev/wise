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
        $__internal_63b0a029de5a6dc9aede1912b1bfdeb7f9fed12d7e572a05841a36b67ff5bcaa = $this->env->getExtension("native_profiler");
        $__internal_63b0a029de5a6dc9aede1912b1bfdeb7f9fed12d7e572a05841a36b67ff5bcaa->enter($__internal_63b0a029de5a6dc9aede1912b1bfdeb7f9fed12d7e572a05841a36b67ff5bcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63b0a029de5a6dc9aede1912b1bfdeb7f9fed12d7e572a05841a36b67ff5bcaa->leave($__internal_63b0a029de5a6dc9aede1912b1bfdeb7f9fed12d7e572a05841a36b67ff5bcaa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f23c1f68c04b6afc23aa68a249b268c4cf2f41e9fce8206c69150a2a70aa324 = $this->env->getExtension("native_profiler");
        $__internal_7f23c1f68c04b6afc23aa68a249b268c4cf2f41e9fce8206c69150a2a70aa324->enter($__internal_7f23c1f68c04b6afc23aa68a249b268c4cf2f41e9fce8206c69150a2a70aa324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_7f23c1f68c04b6afc23aa68a249b268c4cf2f41e9fce8206c69150a2a70aa324->leave($__internal_7f23c1f68c04b6afc23aa68a249b268c4cf2f41e9fce8206c69150a2a70aa324_prof);

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
