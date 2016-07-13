<?php

/* WiseProfileBundle:Profile:show.html.twig */
class __TwigTemplate_9fe5104e46e8cdc74719c9e287e8df00a1dbf4db1978c8a6bf23babade8cd65e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "WiseProfileBundle:Profile:show.html.twig", 1);
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
        $__internal_51fcfc73766ebd159e528e01beefab47afceb39363fb127f8e286e01a7af0b19 = $this->env->getExtension("native_profiler");
        $__internal_51fcfc73766ebd159e528e01beefab47afceb39363fb127f8e286e01a7af0b19->enter($__internal_51fcfc73766ebd159e528e01beefab47afceb39363fb127f8e286e01a7af0b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51fcfc73766ebd159e528e01beefab47afceb39363fb127f8e286e01a7af0b19->leave($__internal_51fcfc73766ebd159e528e01beefab47afceb39363fb127f8e286e01a7af0b19_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0727d2047548d4a0ee1320ddffc3fab84850823ef7a07c63fbe48084f45218d = $this->env->getExtension("native_profiler");
        $__internal_d0727d2047548d4a0ee1320ddffc3fab84850823ef7a07c63fbe48084f45218d->enter($__internal_d0727d2047548d4a0ee1320ddffc3fab84850823ef7a07c63fbe48084f45218d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "WiseProfileBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_d0727d2047548d4a0ee1320ddffc3fab84850823ef7a07c63fbe48084f45218d->leave($__internal_d0727d2047548d4a0ee1320ddffc3fab84850823ef7a07c63fbe48084f45218d_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:Profile:show.html.twig";
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
