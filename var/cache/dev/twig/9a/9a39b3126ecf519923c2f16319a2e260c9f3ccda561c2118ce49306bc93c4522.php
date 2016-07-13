<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_c12b3c155eb02ae40d1f492a3522d60169572f78f0a4bdbf1469096406140d7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_cb7c18523ff4c36fc1f3e013677480164918445d431b059eedcb6d7e6ede4b1e = $this->env->getExtension("native_profiler");
        $__internal_cb7c18523ff4c36fc1f3e013677480164918445d431b059eedcb6d7e6ede4b1e->enter($__internal_cb7c18523ff4c36fc1f3e013677480164918445d431b059eedcb6d7e6ede4b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb7c18523ff4c36fc1f3e013677480164918445d431b059eedcb6d7e6ede4b1e->leave($__internal_cb7c18523ff4c36fc1f3e013677480164918445d431b059eedcb6d7e6ede4b1e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa85521c5b9adc511d2132a123a0ed204be7a28e444ded7dc0585f7a9191b082 = $this->env->getExtension("native_profiler");
        $__internal_fa85521c5b9adc511d2132a123a0ed204be7a28e444ded7dc0585f7a9191b082->enter($__internal_fa85521c5b9adc511d2132a123a0ed204be7a28e444ded7dc0585f7a9191b082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_fa85521c5b9adc511d2132a123a0ed204be7a28e444ded7dc0585f7a9191b082->leave($__internal_fa85521c5b9adc511d2132a123a0ed204be7a28e444ded7dc0585f7a9191b082_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
