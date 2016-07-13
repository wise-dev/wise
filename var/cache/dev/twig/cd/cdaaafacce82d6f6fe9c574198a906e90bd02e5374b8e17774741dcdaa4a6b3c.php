<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_94173d6850911c4cab3d5a18cffad975ef7aea110ffcf3d1ddbace99dc035cfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_5c4c0e8c8a59f769298a492bbf68975d57cff6a04383410b4271b0b294b4a2e4 = $this->env->getExtension("native_profiler");
        $__internal_5c4c0e8c8a59f769298a492bbf68975d57cff6a04383410b4271b0b294b4a2e4->enter($__internal_5c4c0e8c8a59f769298a492bbf68975d57cff6a04383410b4271b0b294b4a2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c4c0e8c8a59f769298a492bbf68975d57cff6a04383410b4271b0b294b4a2e4->leave($__internal_5c4c0e8c8a59f769298a492bbf68975d57cff6a04383410b4271b0b294b4a2e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c3e964eeb3cc9fc726808dd68977907404c894b7b76e511d4256d59c9130ecb = $this->env->getExtension("native_profiler");
        $__internal_3c3e964eeb3cc9fc726808dd68977907404c894b7b76e511d4256d59c9130ecb->enter($__internal_3c3e964eeb3cc9fc726808dd68977907404c894b7b76e511d4256d59c9130ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_3c3e964eeb3cc9fc726808dd68977907404c894b7b76e511d4256d59c9130ecb->leave($__internal_3c3e964eeb3cc9fc726808dd68977907404c894b7b76e511d4256d59c9130ecb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
