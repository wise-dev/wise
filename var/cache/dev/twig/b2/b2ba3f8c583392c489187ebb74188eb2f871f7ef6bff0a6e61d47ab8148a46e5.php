<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_e89fab5a537e8c89843386c46726f0756370575248b17f5f23505f3e0139f150 extends Twig_Template
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
        $__internal_9fe0d3a163195e98f5e557e03c2b313db9bc103b9ae30e4d3a8a159e624e6ca9 = $this->env->getExtension("native_profiler");
        $__internal_9fe0d3a163195e98f5e557e03c2b313db9bc103b9ae30e4d3a8a159e624e6ca9->enter($__internal_9fe0d3a163195e98f5e557e03c2b313db9bc103b9ae30e4d3a8a159e624e6ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9fe0d3a163195e98f5e557e03c2b313db9bc103b9ae30e4d3a8a159e624e6ca9->leave($__internal_9fe0d3a163195e98f5e557e03c2b313db9bc103b9ae30e4d3a8a159e624e6ca9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
