<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9e894837746aa4de31c2cc70cb1f49d2b1f65c3f8ab5b22f030193376dd4ec55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_c12c1987093d1cfbbe57702756af93f4be77ba1702b7d0cb321febf3b6a0e851 = $this->env->getExtension("native_profiler");
        $__internal_c12c1987093d1cfbbe57702756af93f4be77ba1702b7d0cb321febf3b6a0e851->enter($__internal_c12c1987093d1cfbbe57702756af93f4be77ba1702b7d0cb321febf3b6a0e851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c12c1987093d1cfbbe57702756af93f4be77ba1702b7d0cb321febf3b6a0e851->leave($__internal_c12c1987093d1cfbbe57702756af93f4be77ba1702b7d0cb321febf3b6a0e851_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_709fe7beabdb775f43505f148e2307327cf61bbf9be8263be70776842da6c278 = $this->env->getExtension("native_profiler");
        $__internal_709fe7beabdb775f43505f148e2307327cf61bbf9be8263be70776842da6c278->enter($__internal_709fe7beabdb775f43505f148e2307327cf61bbf9be8263be70776842da6c278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_709fe7beabdb775f43505f148e2307327cf61bbf9be8263be70776842da6c278->leave($__internal_709fe7beabdb775f43505f148e2307327cf61bbf9be8263be70776842da6c278_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
