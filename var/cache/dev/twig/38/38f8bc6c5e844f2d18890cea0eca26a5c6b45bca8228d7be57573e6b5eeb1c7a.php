<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_07530052072fd60b5b0680489097bca22b674560c914acebd0d486bb7edeb398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_d47c72a09921c1439a84dfc61370566f4b3da58b2c3a3e6d1d59913269c0df1a = $this->env->getExtension("native_profiler");
        $__internal_d47c72a09921c1439a84dfc61370566f4b3da58b2c3a3e6d1d59913269c0df1a->enter($__internal_d47c72a09921c1439a84dfc61370566f4b3da58b2c3a3e6d1d59913269c0df1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d47c72a09921c1439a84dfc61370566f4b3da58b2c3a3e6d1d59913269c0df1a->leave($__internal_d47c72a09921c1439a84dfc61370566f4b3da58b2c3a3e6d1d59913269c0df1a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed0315939277bcf3bbf1a4869e5fa9f3c7fb97bb76486cd94e7857084a573f47 = $this->env->getExtension("native_profiler");
        $__internal_ed0315939277bcf3bbf1a4869e5fa9f3c7fb97bb76486cd94e7857084a573f47->enter($__internal_ed0315939277bcf3bbf1a4869e5fa9f3c7fb97bb76486cd94e7857084a573f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ed0315939277bcf3bbf1a4869e5fa9f3c7fb97bb76486cd94e7857084a573f47->leave($__internal_ed0315939277bcf3bbf1a4869e5fa9f3c7fb97bb76486cd94e7857084a573f47_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
