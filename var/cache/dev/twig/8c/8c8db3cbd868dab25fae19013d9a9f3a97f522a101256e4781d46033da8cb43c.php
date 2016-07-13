<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_259bd5589bcf8936586f5df707d498499105ebb455959633187c803fd1baf6e5 extends Twig_Template
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
        $__internal_c611e8ad24226f3053f4708964dd2100254a11f95fda72d6ea5737bfcc29a3b8 = $this->env->getExtension("native_profiler");
        $__internal_c611e8ad24226f3053f4708964dd2100254a11f95fda72d6ea5737bfcc29a3b8->enter($__internal_c611e8ad24226f3053f4708964dd2100254a11f95fda72d6ea5737bfcc29a3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_c611e8ad24226f3053f4708964dd2100254a11f95fda72d6ea5737bfcc29a3b8->leave($__internal_c611e8ad24226f3053f4708964dd2100254a11f95fda72d6ea5737bfcc29a3b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
