<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_efa55c4c0490133e182c1fab509d710c0b2f71d7b3bcc75bdc799f5ddde210d0 extends Twig_Template
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
        $__internal_a92d365299c691c9e525c757954a4f9cb08539577010dc13735067e06276c183 = $this->env->getExtension("native_profiler");
        $__internal_a92d365299c691c9e525c757954a4f9cb08539577010dc13735067e06276c183->enter($__internal_a92d365299c691c9e525c757954a4f9cb08539577010dc13735067e06276c183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a92d365299c691c9e525c757954a4f9cb08539577010dc13735067e06276c183->leave($__internal_a92d365299c691c9e525c757954a4f9cb08539577010dc13735067e06276c183_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
