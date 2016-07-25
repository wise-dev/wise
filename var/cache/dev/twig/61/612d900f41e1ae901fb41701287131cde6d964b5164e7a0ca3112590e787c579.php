<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d24f5c96c7a9df5e7c6243a9180db0d13fb0260029dc7b5e7c72e29b6fd3194a extends Twig_Template
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
        $__internal_c8bde96b5fbccdbc4dfb2a298af5951c47a8e4e9e215521fa4a58172437ed651 = $this->env->getExtension("native_profiler");
        $__internal_c8bde96b5fbccdbc4dfb2a298af5951c47a8e4e9e215521fa4a58172437ed651->enter($__internal_c8bde96b5fbccdbc4dfb2a298af5951c47a8e4e9e215521fa4a58172437ed651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c8bde96b5fbccdbc4dfb2a298af5951c47a8e4e9e215521fa4a58172437ed651->leave($__internal_c8bde96b5fbccdbc4dfb2a298af5951c47a8e4e9e215521fa4a58172437ed651_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
