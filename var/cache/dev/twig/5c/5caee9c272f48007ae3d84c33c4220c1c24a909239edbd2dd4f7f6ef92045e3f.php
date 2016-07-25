<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_852ae0fee168c42629367a530caf1409b7a51ab13b17988b5705151d04d578bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08d891fdbb3de73e39e0759855f757d6ac5501b850d9eeeb6351495c9c875388 = $this->env->getExtension("native_profiler");
        $__internal_08d891fdbb3de73e39e0759855f757d6ac5501b850d9eeeb6351495c9c875388->enter($__internal_08d891fdbb3de73e39e0759855f757d6ac5501b850d9eeeb6351495c9c875388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_08d891fdbb3de73e39e0759855f757d6ac5501b850d9eeeb6351495c9c875388->leave($__internal_08d891fdbb3de73e39e0759855f757d6ac5501b850d9eeeb6351495c9c875388_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
