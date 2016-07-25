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
        $__internal_8bee64d3592136ba5a88cff2a0a0529662e3af39e182a8a8161840a41beb1a03 = $this->env->getExtension("native_profiler");
        $__internal_8bee64d3592136ba5a88cff2a0a0529662e3af39e182a8a8161840a41beb1a03->enter($__internal_8bee64d3592136ba5a88cff2a0a0529662e3af39e182a8a8161840a41beb1a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_8bee64d3592136ba5a88cff2a0a0529662e3af39e182a8a8161840a41beb1a03->leave($__internal_8bee64d3592136ba5a88cff2a0a0529662e3af39e182a8a8161840a41beb1a03_prof);

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
