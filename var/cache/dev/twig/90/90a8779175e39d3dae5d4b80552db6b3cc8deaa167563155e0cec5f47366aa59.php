<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_587b328458685f28bc7e39c19b8ae32ab94cf382df308634d841b74256a34a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a04df411774b2ce08b122dceb8779c105f482393dc11ded48ef17408debb5920 = $this->env->getExtension("native_profiler");
        $__internal_a04df411774b2ce08b122dceb8779c105f482393dc11ded48ef17408debb5920->enter($__internal_a04df411774b2ce08b122dceb8779c105f482393dc11ded48ef17408debb5920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a04df411774b2ce08b122dceb8779c105f482393dc11ded48ef17408debb5920->leave($__internal_a04df411774b2ce08b122dceb8779c105f482393dc11ded48ef17408debb5920_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_719077e6f7fde480519b7864d9aa0d6b4192ca7d706e6c4c0ef64156ef67d86e = $this->env->getExtension("native_profiler");
        $__internal_719077e6f7fde480519b7864d9aa0d6b4192ca7d706e6c4c0ef64156ef67d86e->enter($__internal_719077e6f7fde480519b7864d9aa0d6b4192ca7d706e6c4c0ef64156ef67d86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_719077e6f7fde480519b7864d9aa0d6b4192ca7d706e6c4c0ef64156ef67d86e->leave($__internal_719077e6f7fde480519b7864d9aa0d6b4192ca7d706e6c4c0ef64156ef67d86e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
